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

| 68.57. logging_infrastructure_1 |
| [Prev](structs.io_wrapper.php)  | Chapter 68. Structs |  [Next](structs.mail_queue.php) |

## 68.57. logging_infrastructure_1

This struct is defined as follows:

```
struct _logging_infrastructure_1
{
  shared_module_infrastructure_8 shared;
  LogFormatFunc_1 log_error;
  LogRcvEmailFunc_1 log_reception;
  LogEmailFunc_1 log_attempt;
  LogEmailFunc_1 log_transient_failure;
  LogEmailFunc_1 log_permanent_failure;
  LogEmailFunc_1 log_delivery;
  LogHookFunc_1 log_close;
  LogHookFunc_1 log_reopen;
  LogRejectFunc_1 log_rejection;
};
```

The following type definitions also apply:

```
typedef int  (*LogHookFunc_1) (logging_infrastructure_1 *);
typedef void (*LogFormatFunc_1) (logging_infrastructure_1 *,
                               struct timeval *, const char *format,
                               va_list arg);
typedef void (*LogEmailFunc_1) (logging_infrastructure_1 *,
                              ec_message *message, domain_record *,
                              struct timeval *, const char *note,
                              int note_len);
typedef void (*LogRcvEmailFunc_1) (logging_infrastructure_1 *, accept_construct * ac,
                                 ec_message * message, struct timeval *,
                                 const char *note, int note_len);
typedef void (*LogRejectFunc_1) (logging_infrastructure_1 *, struct timeval *,
                               accept_construct * ac, validate_context *ctx,
                               int phase, const char *format, va_list arg);
```

To use this struct, include the file `log_module.h`.

### 68.57.1. See Also

[Section 68.74, “shared_module_infrastructure_8”](structs.shared_module_infrastructure_8.php "68.74. shared_module_infrastructure_8"), [log_attempt_v1](hooks.core.log_attempt_v1.php "log_attempt_v1"), [log_delivery_v1](hooks.core.log_delivery_v1.php "log_delivery_v1"), [log_permanent_failure_v1](hooks.core.log_permanent_failure_v1.php "log_permanent_failure_v1"), [log_rejection](hooks.core.log_rejection.php "log_rejection"), and [log_transient_failure_v1](hooks.core.log_transient_failure_v1.php "log_transient_failure_v1").

| [Prev](structs.io_wrapper.php)  | [Up](structs.php) |  [Next](structs.mail_queue.php) |
| 68.56. io_wrapper  | [Table of Contents](index.php) |  68.58. mail_queue |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)