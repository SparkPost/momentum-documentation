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

| never_attempt_expired_messages |
| [Prev](conf.ref.mx_failures_to_delay.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.never_retry.php) |

<a name="conf.ref.never_attempt_expired_messages"></a>
## Name

never_attempt_expired_messages — Never attempt delivery of expired messages

## Synopsis

`Never_Attempt_Expired_Messages = "false"`

<a name="idp10460416"></a>
## Description

Momentum's default behavior is to always attempt delivery of a message when it gets to the front of the queue, regardless of whether or not it should have expired based on the values of [message_expiration](conf.ref.message_expiration.php "message_expiration") and [max_retries](conf.ref.max_retries.php "max_retries"). This may be desirable for some users, however it can have a side-effect of message queues for 'slow' receiver domains to grow very large, and contain messages that are many times older than the server's policy says they should be. Setting Never_Attempt_Expired_Messages to 'true' will change this behavior, causing Momentum to not attempt delivery of a message if it should have already expired. When this option is set to 'true', log entries that have expired and reach the front of the queue will fail with the message "Delivery not attempted (message expired)".

### Warning

Under certain circumstances, using this feature can cause some messages to never have delivery attempted.

<a name="idp10464976"></a>
## Scope

never_attempt_expired_messages is valid in the binding, binding_group, domain and global scopes.

| [Prev](conf.ref.mx_failures_to_delay.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.never_retry.php) |
| mx_failures_to_delay  | [Table of Contents](index.php) |  never_retry |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)