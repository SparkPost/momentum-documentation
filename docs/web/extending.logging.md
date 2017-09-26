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

| 16.3. Extensible Logging Infrastructure |
| [Prev](extending.module.php)  | Chapter 16. Extending Momentum using C |  [Next](extending.io.php) |

## 16.3. Extensible Logging Infrastructure

One of the key responsibilities in any MTA is the logging of transactions that happen in the system. It is vital that one know what happened and when. However, not everyone appreciates the same logging format. Often, one logging format better suits their needs than another, given a particular environment or task.

Ecelerity is designed with flexibility in mind. It does not lock the user into a specific proprietary format. The approach to logging is simple: log what you want to, how you want to.

Ecelerity has a robust system for loading user-authored modules at run time and using the facilities they provide to perform specific actions. Logging is not only the most obvious, but it is also the most straightforward of extension APIs. It is defined in the `log_module.h` header file accompanying the Ecelerity distribution.

Unless otherwise specified, `abstract_message *`, `domain_record *`, and `struct timeval *` represent the current message in question, the domain related to the current message, and the current time, respectively.

```
typedef int  (*LogHookFunc) (logging_infrastructure *);
typedef void (*LogFormatFunc) (logging_infrastructure *,
                               struct timeval *, const char *format,
                               va_list arg);
typedef void (*LogEmailFunc) (logging_infrastructure *,
                              abstract_message * message, domain_record *,
                              struct timeval *, const char *note, int note_len);
typedef void (*LogRcvEmailFunc) (logging_infrastructure *,
                                 accept_construct * ac,
                                 abstract_message * message, struct timeval *,
                                 const char *note, int note_len);

typedef struct _logging_infrastructure
{
  shared_module_infrastructure shared;
  LogFormatFunc log_error;
  LogRcvEmailFunc log_reception;
  LogEmailFunc log_attempt;
  LogEmailFunc log_transient_failure;
  LogEmailFunc log_permanent_failure;
  LogEmailFunc log_delivery;
  LogHookFunc log_close;
  LogHookFunc log_reopen;
  LogRejectFunc log_rejection;
}
logging_infrastructure;
```

All components of the `logging_infrastructure` modules are optional (may be NULL) except: `module_name`, `module_description`, `log_init`.

### 16.3.1. Logger Hooks

**16.3.1.1. log_error**
```
typedef void (*LogFormatFunc) (logging_infrastructure *self,
                               struct timeval *now, const char *format,
                               va_list arg);
```

Ecelerity internally utilizes this facility to write debugging, notice, warning, errors and critical alerts. This is effectively Ecelerity's only mechanism for communicating to the mail system administrator.

The function has an almost identical syntax to the vprintf() C library call. It, however, requires an additional argument that represents the current time as a `struct timeval *`.

**16.3.1.2. log_reception**
```
typedef void (*LogRcvEmailFunc) (logging_infrastructure *self,
                                 accept_construct * ac,
                                 abstract_message *message,
                                 struct timeval *now,
                                 const char *note, int note_len);
```

The `log_reception` hook is the only logging hook that has a unique function prototype. Unlike other phases, extensive information concerning the destination domain is not yet known; only information about the sending host (from where the message arrived) is available.

The `accept_construct *` contains a variety of information including the IP address from which the message was sent, the IP access controls that match the inbound session and the protocol for the current session.

`note` and `note_len` describe addition information concerning the reception that "should be logged" by any logging system. `note` may be `NULL` in which case no additional information exists.

**16.3.1.3. log_attempt**
```
typedef void (*LogEmailFunc) (logging_infrastructure *self,
                              abstract_message *message,
                              domain_record *domain,
                              struct timeval *now,
                              const char *note, int note_len);
```

This hook is called when a message is about to be pushed down an SMTP/ESMTP connection. The connection to the remote MX has already been established at this point and Ecelerity is going to commence talking SMTP with the remote server to attempt delivery of the email message in question.

### Warning

Due to the vast number of attempts to deliver mail this hook should only be implemented for debugging purposes. All messages that are attempted will result in a transient failure, permanent failure or successful delivery - there is no need to log an attempt in a production system.

**16.3.1.4. log_transient_failure**
```
typedef void (*LogEmailFunc) (logging_infrastructure *self,
                              abstract_message *message,
                              domain_record *domain,
                              struct timeval *now,
                              const char *note, int note_len);
```

Transient failures occur any time a message was attempted, but did not receive a 250 or 5xx series SMTP response from the remote server for the confirmation of the message body. This can occur when the domain could not be resolved, the connection could not be established, or the remote mail exchange returned an unsuccessful, but non-permanent, error message. This means that the message remains in the system and will be retried at a later date.

The `note` and `note_len` will contain the message from the remote server (or Ecelerity if no connection could be established). `note_len` specifies the length of the message as the message is not guaranteed to be null terminated.

A possible `note` and `note_len` could be: `450 Connection Timed Out` and `25`.

**16.3.1.5. log_permanent_failure**
```
typedef void (*LogEmailFunc) (logging_infrastructure *self,
                              abstract_message *message,
                              domain_record *domain,
                              struct timeval *now,
                              const char *note, int note_len);
```

Permanent failures are like transient failures with respect to function prototype and the expected value of the `note` argument. However, permanent failures occur after a Ecelerity receives a 5xx code from a remote mail exchange while attempting delivery of the message, or the difference between the message's next retry attempt and its reception time is beyond the configured message expiration time for the that domain. All `note` arguments to these functions will start with the 5xx code in question.

**16.3.1.6. log_delivery**
```
typedef void (*LogEmailFunc) (logging_infrastructure *self,
                              abstract_message *message,
                              domain_record *domain,
                              struct timeval *now,
                              const char *note, int note_len);
```

When Ecelerity receives a 250 response code after sending the message body to the remote mail exchange, the message is considered to be delivered and the `log_delivery` element is invoked. The `note` will contain the confirmation string read back from the remote system. The string portion of the message can be blank, contain a static string such as `OK` or contain the queue id the message assumed on the remote system. You should not rely on the value of the `note` argument following the "250" as there is no standard for these messages.

**16.3.1.7. log_close**`typedef int  (*LogHookFunc) (logging_infrastructure *self);`

This is invoked prior to system shutdown. It should be used to sync remaining data and close filehandles or commit transactions and gracefully disconnect from a database.

**16.3.1.8. log_reopen**`typedef int  (*LogHookFunc) (logging_infrastructure *self);`

This is invoked when "reopen logs" is issued though ec_console. It is used to tell the module that the log files need to be reopened - it may or may not apply to a database-style logging facility.

Files on a Unix filesystem are opened by inode. So, if the file is renamed (mv fileold filenew), programs that have an open handle to fileold will continue to read/write from filenew (it has the same inode). Log file rotation in Ecelerity is implemented by moving the primary files to the side and calling "reopen logs" through ec_console.

When writing a file-based logging facility, this operation should close and reopen all files.

**16.3.1.9. log_rejection**
```
typedef void (*LogRejectFunc) (logging_infrastructure *self, struct timeval *now,
                             accept_construct * ac, validate_context *ctx,
                             int phase, const char *format, va_list arg);
```

The `log_rejection` hook is called any time Ecelerity rejects a message during reception.

When called you are passed:

<dl class="variablelist">

<dt>`validate_context *ctx`</dt>

<dd>

The full validate context for the message/connection.

</dd>

<dt>`int phase`</dt>

<dd>

The phase during which rejection occured: `MC_STATE_START`, `MC_STATE_START_RESPONSE`, `MC_STATE_EHLO`, `MC_STATE_EHLO_RESPONSE`, `MC_STATE_MAILFROM`, `MC_STATE_MAILFROM_RESPONSE`, `MC_STATE_RCPTTO`, `MC_STATE_RCPTTO_RESPONSE`, `MC_STATE_DATA`, `MC_STATE_BODY`, `MC_STATE_BODY_RESPONSE`, `MC_STATE_ASYNC_BODY_RESPONSE`, `MC_STATE_OK`, `MC_STATE_RELAYING_DENIED`, `MC_STATE_EXTENSION_1`, `MC_STATE_EXTENSION_2`, `MC_STATE_EXTENSION_3`, `MC_STATE_EXTENSION_4`, `MC_STATE_CONCURRENCY_LIMIT`, `MC_STATE_RCPTTO_LIST_RESPONSE`, `MC_STATE_RCPTTO_LIST_FINAL_RESPONSE`, `MC_STATE_COUNT`

</dd>

<dt>`char *format, va_list arg`</dt>

<dd>

The rejection message that is being returned to the client.

</dd>

</dl>

| [Prev](extending.module.php)  | [Up](c.sdk.php) |  [Next](extending.io.php) |
| 16.2. The Module  | [Table of Contents](index.php) |  16.4. Extensible IO Infrastructure |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)