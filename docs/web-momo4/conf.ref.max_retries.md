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

| max_retries |
| [Prev](conf.ref.max_resident_transfails.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.max_retry_interval.php) |

<a name="conf.ref.max_retries"></a>
## Name

max_retries — override the system configured max_retries

## Synopsis

`max_retries = "auto"`

`max_retries = "none"`

`max_retries = 5`

<a name="idp25430048"></a>
## Description

By default, Momentum uses the `message_expiration` configuration setting to determine when a message's lifetime has been exceeded. Optionally, `max_retries` allows you to specify a fixed maximum number of delivery retries for a message before it is permanently failed.

'auto', the default setting calculates the maximum number of retries based on the message's message_expiration. 'none' never limits the number of retries of a message, falling back to rely only on message_expiration. These are subtly different in that manual flushing attempts can preempt the normal retry schedule for a message, causing the 'auto' limit to be hit before Message_Expiration would otherwise dictate.

Momentum employs an exponential back-off scheme for retrying messages. On the first failure the message is retried `retry_interval` seconds later. On the second failure, twice that and so on until either `max_retries` or `message_expiration` is reached.

If you wish to disable Momentum's exponential back-off scheme so that a message is retried at a fixed interval a specified number, use the following settings:

```
retry_interval = 1200
max_retry_interval = 1200
max_retries = 5
```

In this example, a bounced message will be retried every 1200 seconds and will expire in 6000 seconds—after five retries—unless `message_expiration` is set to a value lower than 6000\. in which case, the message will expire in `messsage_expiration` seconds.

### Warning

The default value for `max_retries` is "auto" so be sure to change it to a positive integer or "none" if you plan to use `max_retry_interval`. When `max_retries` is set to a positive integer, messages expire within `messsage_expiration` seconds or after the specified number of retries, whichever occurs first. When `max_retries` is "none" there is no limit on the number of retries of a message; the message will expire by `message_expiration` only.

<a name="idp25442384"></a>
## Scope

`max_retries` is valid in the binding, binding_group, domain and global scopes.

<a name="idp25444688"></a>
## See Also

[message_expiration](conf.ref.message_expiration.php "message_expiration") and [max_retry_interval](conf.ref.max_retry_interval.php "max_retry_interval")

| [Prev](conf.ref.max_resident_transfails.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.max_retry_interval.php) |
| max_resident_transfails  | [Table of Contents](index.php) |  max_retry_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)