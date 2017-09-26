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

| 16.4. Extensible IO Infrastructure |
| [Prev](extending.logging.php)  | Chapter 16. Extending Momentum using C |  [Next](extending.validation.php) |

## 16.4. Extensible IO Infrastructure

### 16.4.1. IO Infrastructure

As a standards-compliant mail transfer agent, Ecelerity is responsible for journalling received messages to disk before providing a receipt to the client that the message has "been received." This ensures deliverability in light of unexpected system failures. Ecelerity ships with an internal set of reliable I/O routines and with a header caching module (called ndbm_cache) that accelerates the I/O process while maintaining the required reliability guarantees.

Ecelerity exposes the API that is used to journal newly received messages to disk so that modules may enhance, supplement or replace entirely the mechanism used to store such messages. This is accomplished via the I/O module API.

```
#define IO_DONE 0
#define IO_CONT 1
#define IO_FAIL -1

typedef enum {
  IO_SYNCHRONOUS = 0,
  IO_ASYNCHRONOUS = 1
} io_caller;

typedef int   (*IOHookFunc) (io_infrastructure *);
typedef void *(*IOQueueReaderFunc) (io_infrastructure *, void *);
typedef int   (*IOWriteHeadersFunc) (io_infrastructure *, io_caller,
                                     email_message *, int);
typedef int   (*IOReadHeadersFunc) (io_infrastructure *, io_caller,
                                    email_message *);
typedef int   (*IOUnlinkHeadersFunc) (io_infrastructure *, io_caller,
                                      message_id *);
typedef int   (*IOWriteBodyFunc) (io_infrastructure *, io_caller,
                                  email_message *, int);
typedef int   (*IOReadBodyFunc) (io_infrastructure *, io_caller,
                                 email_message *);
typedef int   (*IOUnlinkBodyFunc) (io_infrastructure *, io_caller,
                                   message_id *);

typedef struct _io_infrastructure
{
  shared_module_infrastructure shared;
  IOQueueReaderFunc io_process_disk_queue;
  IOWriteHeadersFunc io_writeheaders;
  IOReadHeadersFunc io_readheaders;
  IOUnlinkHeadersFunc io_unlinkheaders;
  IOWriteBodyFunc io_writebody;
  IOReadBodyFunc io_readbody;
  IOUnlinkBodyFunc io_unlinkbody;
  IOHookFunc io_close;
}
io_infrastructure;
```

### 16.4.2. IO_System Hooks

**16.4.2.1. io_process_disk_queue**`typedef void *(*IOQueueReaderFunc) (io_infrastructure *, void *);`

If defined, a new thread will be created during Ecelerity's startup sequence and this hook will be run in that thread. This hook is unique in that one and only one `io_process_disk_queue` hook will be run. The first loaded modules that implements this hook will be run and no subsequent IO hooks in will be run in this phase. If no modules implement this hook, then the Ecelerity native method will be performed which scans the disk spool for existing messages, spools them in and makes them live for delivery in the new instance.

This function is executed in a detached POSIX thread. The return value is ignored.

**16.4.2.2. io_writeheaders**
```
typedef int (*IOWriteHeadersFunc) (io_infrastructure *self, io_caller type,
                                   email_message *message, int force);
```

This function is called when the headers of an email message have changed (or are new) and should be journalled to permanent storage. Headers include all aspects of the message except for the body itself.

The `type` indicates whether the action is being performed synchronously or asynchronously.

If a module opts to deviate from the recommended storage guarantees specified in RFC 2821, then it can choose to not take actions here. However, if the force parameter is non-zero, it indicates that the message will removed from memory prior to another invocation of this hook. *The message headers will be lost if it is this module's responsibility to store them.*                                                                                   A module that chooses to write headers should **always** write headers to permanent storage if the force parameter is non-zero.

This hook should return one of the following values:

<dl class="variablelist">

<dt>IO_DONE</dt>

<dd>

indicating that the message headers have been journalled successfully and no subsequent IO modules should be called.

</dd>

<dt>IO_CONT</dt>

<dd>

indicating that this module has performed whatever actions it deemed necessary and that subsequent modules can now be invoked.

</dd>

<dt>IO_FAIL</dt>

<dd>

indicating that the actions that this module took have failed unrecoverably and that the message could not be journalled successfully.

</dd>

</dl>

**16.4.2.3. io_readheaders**
```
typedef int (*IOReadHeadersFunc) (io_infrastructure *self, io_caller type,
                                  email_message *mess);
```

This hook is invoked to populate the message headers of the email message structure `mess` from permanent storage. The `message_id` structure within `mess` should be used as a key as that is the only element of the email message that is guaranteed to be accurately set at the time of the call. All other elements (except `body` and `body_len`) should be set as a result of this call.

The `type` indicates whether the action is being performed synchronously or asynchronously.

This hook should return one of the following values:

<dl class="variablelist">

<dt>IO_DONE</dt>

<dd>

indicating that the message headers have been successfully populated from the backing store.

</dd>

<dt>IO_CONT</dt>

<dd>

indicating that this module has performed its task, but subsequent modules must be called to complete the process of populating the headers of this message.

</dd>

<dt>IO_FAIL</dt>

<dd>

indicating that the actions taken to populate the headers of this message from backing store were unsuccessful and that no further attempts should be made by subsequent modules. The message in question could not be recovered from permanent storage.

</dd>

</dl>

**16.4.2.4. io_unlinkheaders**
```
typedef int (*IOUnlinkHeadersFunc) (io_infrastructure *self, io_caller type,
                                    message_id *id);
```

This hook is invoked when the permanent backing store of a message should be released. It is called immediately following the delivery or permanent failure of a message in the system.

The `type` indicates whether the action is being performed synchronously or asynchronously.

The result of this call should ensure that a call to `io_process_disk_queue` would not attempt to pull the message associated with this ID into the system and that any explicit attempts to pull this message ID into the system (via a `io_readheaders` call) would fail with `IO_FAIL`.

<dl class="variablelist">

<dt>IO_DONE</dt>

<dd>

indicating that the message headers have been removed and that no subsequent modules should be called. *This is a dangerous and often unreasonable return value as subsequent modules may need to execute their handlers for this phase to ensure that the headers in question are completely removed from the system.* 

</dd>

<dt>IO_CONT</dt>

<dd>

indicating that this module has performed whatever actions it deemed necessary and that subsequent modules can now be invoked.

</dd>

<dt>IO_FAIL</dt>

<dd>

indicating that the actions that this module took have failed unrecoverably and that the message could not be removed from the system. Errors that indicate that the message has already been removed do not constitute a permanent failure as the goal of the hook has been accomplished. In this case, the hook should return `IO_CONT`.

</dd>

</dl>

**16.4.2.5. io_writebody**
```
typedef int (*IOWriteBodyFunc) (io_infrastructure *self, io_caller type,
                                email_message *message, int force);
```

This function is called when the body of an email message should be journalled to permanent storage. The body includes all RFC 2822 headers and content including the trailing `CR LF . CR LF`. Essentially, the body is the exact information that should be transmitted to a remote SMTP server following the issuance of a DATA command.

The `type` indicates whether the action is being performed synchronously or asynchronously.

If a module opts to deviate from the recommended storage guarantees specified in RFC 2821, then it can choose to not take actions here. However, if the force parameter is non-zero, it indicates that the message will removed from memory prior to another invocation of this hook. *The message body will be lost if it is this module's responsibility to store them.*                                                                                A module that chooses to write the body should **always** write the body to permanent storage if the force parameter is non-zero.

This hook should return one of the following values:

<dl class="variablelist">

<dt>IO_DONE</dt>

<dd>

indicating that the message body has been journalled successfully and no subsequent IO modules should be called.

</dd>

<dt>IO_CONT</dt>

<dd>

indicating that this module has performed whatever actions it deemed necessary and that subsequent modules can now be invoked.

</dd>

<dt>IO_FAIL</dt>

<dd>

indicating that the actions that this module took have failed unrecoverably and that the message could not be journalled successfully.

</dd>

</dl>

**16.4.2.6. io_readbody**
```
typedef int (*IOReadBodyFunc) (io_infrastructure *self, io_caller type,
                               email_message *mess);
```

This hook is invoked to populate the body and body length of the email message structure `mess` from permanent storage. The `message_id` structure within `mess` should be used as a key as that is the only element of the email messages that is guaranteed to be accurately set at time of the call.

The `type` indicates whether the action is being performed synchronously or asynchronously.

This hook should return one of the following values:

<dl class="variablelist">

<dt>IO_DONE</dt>

<dd>

indicating that the message body has been successfully populated from the backing store.

</dd>

<dt>IO_CONT</dt>

<dd>

indicating that this module has performed its task, but subsequent modules must be called to complete the process of restoring the body of this message.

</dd>

<dt>IO_FAIL</dt>

<dd>

indicating that the actions taken to populate the body of this message from backing store were unsuccessful and that no further attempts should be made by subsequent modules. The message in question could not be recovered from permanent storage.

</dd>

</dl>

**16.4.2.7. io_unlinkbody**
```
typedef int (*IOUnlinkBodyFunc) (io_infrastructure *self, io_caller type,
                                 message_id *id);
```

This hook is invoked when the permanent backing store of a message body should be removed. As with `io_unlinkheaders`, the successful completion of this hook should eliminate the message such that subsequent scans by `io_process_disk_queue` will not see it and explicit calls to `io_readbody` will ultimately fail with `IO_FAIL`.

The `type` indicates whether the action is being performed synchronously or asynchronously.

This hook should return one of the following values:

<dl class="variablelist">

<dt>IO_DONE</dt>

<dd>

indicating that the message body has been removed and that no subsequent modules should be called. *This is a dangerous and often unreasonable return value as subsequent modules may need to execute their handlers for this phase to ensure that the body in question is completely removed from the system.* 

</dd>

<dt>IO_CONT</dt>

<dd>

indicating that this module has performed whatever actions it deemed necessary and that subsequent modules can now be invoked.

</dd>

<dt>IO_FAIL</dt>

<dd>

indicating that the actions that this module took have failed unrecoverably and that the message could not be removed from the system. Errors that indicate that the message has already been removed to do not constitute a permanent failure as the goal of the hook has been accomplished. In this case, the hook should return `IO_CONT`.

</dd>

</dl>

| [Prev](extending.logging.php)  | [Up](c.sdk.php) |  [Next](extending.validation.php) |
| 16.3. Extensible Logging Infrastructure  | [Table of Contents](index.php) |  16.5. Extensible Validation Infrastructure |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)