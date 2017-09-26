Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| 16.5. Extensible Validation Infrastructure |
| [Prev](extending.io.php)  | Chapter 16. Extending Momentum using C |  [Next](extending.hooks.php) |

## 16.5. Extensible Validation Infrastructure

Ecelerity was designed from the ground up to be fast. Unlike other MTAs, no presuppositions were made about the nature of internal message validation and modification infrastructures that would be required. Instead, a flexible module system was implemented to allow the user to define any custom message validation mechanisms needed at their site.

The validation architecture allows for two important actions to be taken: validation and modification.

The concept of message modification is not wholly accepted by the community. If an MTA takes liberties with the content of an email message, it is considered a hostile MTA. By default, Ecelerity is **not** a hostile MTA, but the message validation infrastructure allows for the introduction of such behavior if it is desired.

Each function takes arguments of type described in the previous sections on data structures. The validation API and module structure is defined in `validate_module.h` as such:

```
#define VALIDATE_CONT  0
#define VALIDATE_DONE  1
#define VALIDATE_AGAIN 2

typedef int (*ValidateStringFunc) (validate_infrastructure *,
                                   char **, int *, accept_construct *,
                                   validate_context *);
typedef int (*ValidateMessageFunc) (validate_infrastructure *,
                                    email_message *, accept_construct *,
                                    validate_context *);
typedef int (*ValidateSpoolFunc) (validate_infrastructure *,
                                  email_message *, validate_context *);
typedef int (*ValidateSetBindingFunc) (validate_infrastructure *,
                                       email_message *);
typedef void *(*ValidateLocalAllocFunc) (validate_infrastructure *);
typedef void  (*ValidateLocalDeallocFunc) (validate_infrastructure *, void *);

typedef struct _validate_infrastructure
{
  shared_module_infrastructure shared;
  ValidateStringFunc validate_ehlo;
  ValidateStringFunc validate_mailfrom;
  ValidateStringFunc validate_rcptto;
  ValidateMessageFunc validate_data;
  ValidateSpoolFunc validate_data_spool;
  ValidateSpoolFunc validate_data_spool_each_rcpt;
  ValidateSetBindingFunc validate_set_binding;
  ValidateLocalAllocFunc validate_local_alloc;
  ValidateLocalDeallocFunc validate_local_dealloc;
  ValidateConnectFunc validate_connect;
  ValidateListFunc validate_rcptto_list;
  ValidateListFunc validate_rcptto_list_final;
}
validate_infrastructure;
```

### 16.5.1. Validate Hooks

**16.5.1.1. validate_ehlo**
```
typedef int (*ValidateStringFunc) (validate_infrastructure *self,
                                   char **client_ehlo, int *client_ehlo_len,
                                   accept_construct *ac,
                                   validate_context *ctx);
```

This function, if defined, is dispatched upon receiving an EHLO or HELO from a connecting SMTP client. `client_ehlo` is a pointer to a string containing the client's EHLO string. The buffer is not null-terminated and `client_ehlo_len` describes its length. `ac` details information concerning the client's connection to Ecelerity. `ctx` is a pointer to a validation context structure for the session.

All validation context parameters are respected here except `body_has_changed`.

Ecelerity expects one of the following return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and that no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and that the next module in the list should be invoked.

</dd>

<dt>VALIDATE_AGAIN</dt>

<dd>

This option is only valid when the deschedule flag has been set in the context. Ecelerity will deschedule the session and when it is rescheduled, it will resume validation starting with this module.

</dd>

</dl>

**16.5.1.2. validate_mailfrom**
```
typedef int (*ValidateStringFunc) (validate_infrastructure *self,
                                   char **mailfrom, int *mailfrom_len,
                                   accept_construct *ac,
                                   validate_context *ctx);
```

This function, if defined, is dispatched upon receiving a MAIL FROM directive from an SMTP client.

`ac` has the same data and provides the same functionality as in `validate_ehlo`. The `mailfrom` is a pointer to a string containing the *complete* MAIL FROM command from the client (including the MAIL FROM: portion and the trailing `CRLF`). This buffer is not null-terminated and `mailfrom_len` describes its length. If the recpient string is modified it must be a valid SMTP MAIL FROM command including the trailing CR LF.

`mailfrom` may be modified by the module if the module so desires. You are required to include the leading MAIL FROM: string fragment. If this modification requires changing the length of the mailfrom string, the mailfrom should first be freed using:

`ec_free(MEMTYPE_MESSAGE_BODY, mailfrom);`

and then reallocated using

```
*mailfrom_len = newsize;
*mailfrom = ec_malloc_size(MEMTYPE_MESSAGE_BODY, *mailfrom_len);
```

This operation happens in the master thread and any operations in this routine can block the system from normal function. If you wish to perform these checks asychronously, you should instead implement `validate_data_spool` and set the `Async_Swap_Out` configuration directive.

All validation context parameters are respected here except `body_has_changed`.

Ecelerity expects one of the following return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and that the next module in the list should be attempted.

</dd>

<dt>VALIDATE_AGAIN</dt>

<dd>

This option is only valid when the deschedule flag has been set in the context. Ecelerity will deschedule the session and when it is rescheduled, it will resume validation starting with this module.

</dd>

</dl>

**16.5.1.3. validate_rcptto**
```
typedef int (*ValidateStringFunc) (validate_infrastructure *self,
                                   char **rcptto, int *rcptto_len,
                                   accept_construct *ac,
                                   validate_context *ctx);
```

This function, if defined, is dispatched upon receiving a RCPT TO directive from an SMTP client.

`ac` has the same data and provides the same functionality as in `validate_ehlo`. The `rcptto` is a pointer to a string containing the *complete* RCPT TO command from the client (including the `RCPT TO:` and the trailing `CRLF`.) `rcptto_len` describes its length. If the recpient string is modified it must be a valid SMTP RCPT TO command including both the leading `RCPT TO:` and the trailing `CRLF`

`rcptto` may be modified by the module if the module so desires. If this modification requires changing the length of the rcptto string, the rcptto should first be freed using:

`ec_free(MEMTYPE_MESSAGE_BODY, *rcptto);`

and then reallocated using

```
*rcptto_len = newsize;
*rcptto = ec_malloc_size(MEMTYPE_MESSAGE_BODY, *rcptto_len);
```

This operation happens in the master thread and any operations in this routine can block the system from normal function. If you wish to perform these checks asychronously, you should instead implement `validate_data_spool` and set the `Async_Swap_Out` configuration directive.

All validation context parameters are respected here except `body_has_changed`.

Ecelerity expects one of the following return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and the the next module in the list should be attempted.

</dd>

<dt>VALIDATE_AGAIN</dt>

<dd>

This option is only valid when the deschedule flag has been set in the context. Ecelerity will deschedule the session and when it is rescheduled, it will resume validation starting with this module.

</dd>

</dl>

**16.5.1.4. validate_data**
```
typedef int (*ValidateMessageFunc) (validate_infrastructure *self,
                                    email_message *m, accept_construct *ac,
                                    validate_context *ctx);
```

`ac` has the same data and provides the same functionality as in `validate_ehlo`. The full email message is available to the module at this point to perform whatever validation is necessary. The message can be manipulated (changed) at this stage. All changes should use the `ec_free` and `ec_malloc_size` routines for reallocating buffers. Note that the strings are not null terminated and their lengths must be accurately updated to reflect changes made. Also, these buffers are used directly during SMTP deliver so all must comply with that protocol by retaining CR LF on mailfrom and rcptto, CR LF line endings, doubled leading dots and CR LF . CR LF termination of the body. See RFC 2822 and RFC 2821 for more details on valid email messages and the necessary transmission guidelines.

This operation happens in the master thread and any operations in this routine can block the system from normal function. If you wish to perform these checks asychronously, you should instead implement `validate_data_spool` and set the `Async_Swap_Out` configuration directive.

All validation context parameters are respected here except `body_has_changed`.

Ecelerity expects one of the following return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and the the next module in the list should be attempted.

</dd>

<dt>VALIDATE_AGAIN</dt>

<dd>

This option is only valid when the deschedule flag has been set in the context. Ecelerity will deschedule the session and when it is rescheduled, it will resume validation starting with this module.

</dd>

</dl>

**16.5.1.5. validate_data_spool**
```
typedef int (*ValidateSpoolFunc) (validate_infrastructure *self,
                                  email_message *m, validate_context *ctx);
```

This validation hook is unique from previous validation hooks in that it is performed in a separate worker thread. The thread is not dynamically created, but rather comes from a preallocated static pool of threads that is configured via the `Async_Swap_Out` configuration directive.

As it executes asynchronously to message reception, the API is slightly different. The message `m` that is passed can be inspected and/or manipulated using identical techniques as in the `validate_data` routine.

All validation context parameters are respected here except `body_has_changed` and `deschedule`. As `deschedule` is not supported (the event has already been descheduled to allow asynchronous processing), `VALIDATE_AGAIN` is not a valid return value.

Ecelerity expects one of the following return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and the the next module in the list should be attempted.

</dd>

</dl>

**16.5.1.6. validate_data_spool_each_rcpt**
```
typedef int (*ValidateSpoolFunc) (validate_infrastructure *self,
                                  email_message *m, validate_context *ctx);
```

This hook is called immediately after `validate_data_spool` in the same worker thread. However, this hook is called once for each recipient on multi-recipient mailings (or a single invocation on a single recipient email).

Like other validation functions, this can be used to both validate and manipulate the message constructs, including the envelope and the body. However, if modifications are made in this hook, the `body_has_changed` context flag should be set to true so the modified body of the message can be preserved uniquely for this recipient. If changes are made and the `body_has_changed` flag is not set, unexpected results may occur, including, but not limited to: the changes being lost or the changes affecting other recipients.

All validation context parameters are respected here except `deschedule`. As `deschedule` is not supported (the event has already been descheduled to allow asynchronous processing), `VALIDATE_AGAIN` is not a valid return value.

Ecelerity expects one of the following return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and the the next module in the list should be attempted.

</dd>

</dl>

**16.5.1.7. validate_set_binding**
```
typedef int (*ValidateSetBindingFuc) (validate_infrastructure *self,
                                      email_message *m);
```

This validation hook is invoked during the process of "enqueueing" a message. When a message enters the system (via SMTP or read from the spool) it is placed on a queue for delivery. In order to support multiple virtual interfaces (via the Binding configuration option) the message must be assigned to one of the defined bindings. It should be noted that this hook is called when a message is enqueued, so it will be called immediately after a message is accepted for delivery as well as when a message is read from the spool at startup.

This function exposes the message for review and the "binding_slot" may be modified via the `__message_set_binding_slot(abstract_message *, int);` function. No other attribute of the message should be modified during this hook. It is possible that this hook will be invoked more than once on a single message.

Binding id 0 is the default system binding. Each `Binding` directive in the configuration file introduces a new binding id beginning at 1.

Ecelerity expects one of two possible return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and the the next module in the list should be attempted.

</dd>

</dl>

**16.5.1.8. validate_local_alloc**`typedef void *(*ValidateLocalAllocFuc) (validate_infrastructure *self);`

This validation hook is invoked during the process of establishing the validation context for a session. It is established once for each inbound ESMTP connection. The allocated localized module data returned by this function is available via the `module_data` point in the `validate_context` that is passed to the various validation hooks.

**16.5.1.9. validate_local_dealloc**`typedef void (*ValidateLocalDeallocFuc) (validate_infrastructure *self, void *ptr);`

This validation hook is invoked during the destruction of the validation context that is associated with each inbound session. It occurs immediately before the client is disconnected or immediately after a client connection has been severed from the client end. The `ptr` is the current value `module_data` from the context, which is the value returned by the initial call to `validate_local_alloc`, assuming the module has not elected to change the pointer during one of the validation hooks.

**16.5.1.10. validate_rcptto_list**`typedef int (*ValidateListFunc) (validate_infrastructure *self, list_node **list, validate_context *ctx);`

This function allows you to inspect and modify the list of message recipients. It is called after each recipient in the `RCPT TO` phase. The recipients are stored in a linked list whose head is pointed to by `list`.

Ecelerity expects one of two possible return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and the the next module in the list should be attempted.

</dd>

</dl>

**16.5.1.11. validate_rcptto_list_final**`typedef int (*ValidateListFunc) (validate_infrastructure *self, list_node **list, validate_context *ctx);`

This function allows you to inspect and modify the list of message recipients. It is called once, immediately before the `validate_data` hook. The recipients are stored in a linked list whose head is pointed to by `list`.

Ecelerity expects one of two possible return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and the the next module in the list should be attempted.

</dd>

</dl>

**16.5.1.12. validate_connect**`typedef int (*ValidateConnectFunc) (struct _validate_infrastructure *, accept_construct *, struct _validate_context *);`

This function allows you to perform validation based on the connecting IP address. It is called immediately prior to returning the banner to a newly connected client. The accept_construct parameter contains information about the connecting IP in its remote_address_union member. You can find the definition for this structure in `netlistener.h`.

Ecelerity expects one of the following return values:

<dl class="variablelist">

<dt>VALIDATE_DONE</dt>

<dd>

indicating that this module has performed its operations and no futher modules should be executed for this stage.

</dd>

<dt>VALIDATE_CONT</dt>

<dd>

indicating the this module has performed its operations and the the next module in the list should be attempted.

</dd>

<dt>VALIDATE_AGAIN</dt>

<dd>

This option is only valid when the deschedule flag has been set in the context. Ecelerity will deschedule the session and when it is rescheduled, it will resume validation starting with this module.

</dd>

</dl>

### 16.5.2. The Validation Context

The validation context is used to maintain a consistent and persistent perspective across the life of both an inbound ESMTP session and messages receieved on that session. The context is designed to provide a simple means of communicating a module's intended actions back to Ecelerity and notifying other modules of information gathered.

```
typedef struct _validate_context {
  Event *session;       /* The event that is driving the session */
  int code;             /* The SMTP response code: 250, 551, 452, etc. */
  int disconnect;       /* 1 or 0, meaning to disconnect or not, respectively */
  char *note;           /* The response string, if custom */
  int deschedule;       /* 1 or 0, to deschedule session on not, respectively.
                           This can only be used with esmtp.  If used with
                           ecstream it will cause an immediate shutdown */
  int body_has_changed; /* set to 1 if the message body has changed 
                           This only applies to validate_data_spool_each_rcpt */
  struct timeval tcost; /* The cost (in time) the sender must pay */
  void *module_data;    /* This module data, see validate_local_alloc */
} validate_context;
```

The validation context, `validate_context`, is passed to every validation hook except for `validate_set_binding`.

<dl class="variablelist">

<dt>session</dt>

<dd>

is the current event (ususally an incoming ESMTP session) that caused this validation hook to be called.

</dd>

<dt>code</dt>

<dd>

The SMTP code that will be returned to the client.

</dd>

<dt>disconnect</dt>

<dd>

A boolean that will dictate if the session is to be disconnected after returning the SMTP response.

</dd>

<dt>note</dt>

<dd>

An optional note, to deliver to the client. It must be a valid SMTP response (may be multiline) that consists of an SMTP number and the necessary trailing CR LF characters. (`e.g. "250-Thank you\r\n250 for your patience.\r\n"`). The note must be freed/allocated with ec_free/ec_malloc using the `MEMTYPE_MESSAGE_BODY` allocation type.

</dd>

<dt>deschedule</dt>

<dd>

A boolean flag which, if set to true, will instruct Ecelerity to deschedule handling and freeing of the event "session." Special caution should be used when setting this flag as the module must assume responsibility for rescheduling a copy of the event at a later time or the session (and file descriptor) will be "lost" in the system.

</dd>

<dt>body_has_changed</dt>

<dd>

This flag is used to instruct Ecelerity that body of the message has changed on a multi-recipient mailing and that the spool file on disk cannot be shared. If set to 1, a unique spool file will be created for this message with the modified contents.

</dd>

<dt>tcost</dt>

<dd>

(or "time cost") instructs Ecelerity to deschedule the session for the amount of time specified. tcost is a `struct timeval`. A setting of 1.75 seconds could be accomplished as: `tcost.tv_sec = 1L; tcost.tv_usec = 750000L;`.

</dd>

<dt>module_data</dt>

<dd>

This is custom module data, created with the `validate_local_alloc` hook at session creation time and deallocated by the `validate_local_dealloc` hook at the destruction of the session.

</dd>

</dl>

**16.5.2.1. Validation helper functions**

Some of the datatypes present in the validation context are either complicated or intentionally opaque to prevent user damage. There are several convenience (or helper) functions that can be used to access and manipulate the context itself.

```
#define VCTX_CONN 0
#define VCTX_MESS 1

void validate_context_set(validate_context *ctx, int scope,
                          const char *key, const char *value);
```

This function sets (or replaces) the context environment variable named `key` to the value `value`. The scope defines the life of the context environment. `VCTX_CONN` applies to the entire life of the inbound session while the `VCTX_MESS` scope expires immediately before the initiation of a new message (via the SMTP MAIL FROM command).

The `key` and `value` parameters passed in are duplicated using `strdup` and will be freed automatically upon leaving the designated scope.

```
const char *validate_context_get(validate_context *ctx, int scope,
                                 const char *key);
```

This function returns the value of the context environment associated with the key `key`, returning NULL if absent. Searches must be performed in either the `VCTX_CONN` or `VCTX_MESS` scope. Both scopes are shared by all validation modules that touch the given context. As such, it can be used pass information from one module to another as well as tracking information from one validation stage to the next.

If complicated information is to be tracked internally to the module on a session basis, local allocted storage is recommended as access to that data will be faster to access and can be stored by the module in a native format.

```
int validate_context_exists(validate_context *ctx, int scope,
                                 const char *key);
```

This function returns true if they key `key` exists.

`const char *validate_context_firstkey(validate_context *ctx, int scope);`

This function returns the 'first' key in the validation context. This is useful for iterating over the entire validation context.

`const char *validate_context_next_key(validate_context *ctx, int scope, const char *curr_key);`

This function returns the key 'after' `curr_key`. This function is useful for iterating over the entire validation context.

```
void validate_context_skip_once(validate_infrastructure *self,
                                validate_context *ctx);
```

This function instructs Ecelerity to skip this module while processing the given phase. It is cleared at the beginnning each phase. By default, if the deschedule flag is set and `VALIDATE_AGAIN` is returned, upon resumption of the session, this module will be processed again. However, if called during the rescheduling of the session, the validation framework will effectively continue where it left off.

| [Prev](extending.io.php)  | [Up](c.sdk.php) |  [Next](extending.hooks.php) |
| 16.4. Extensible IO Infrastructure  | [Table of Contents](index.php) |  16.6. Registerable Hooks |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)