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

| max_retry_interval |
| [Prev](conf.ref.max_retries.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.max_timed_events_per_iter.php) |

<a name="conf.ref.max_retry_interval"></a>
## Name

max_retry_interval — maximum retry interval

## Synopsis

`Max_Retry_Interval = "43200"`

<a name="idp25454960"></a>
## Description

The maximum interval between successive retries for a message. This provides a cap on the effective retry calculated from `Retry_Interval`. The default value for this option is `43200` seconds (12 hours).

### Warning

Note that the `Max_Retries` setting has a bearing on this option. The default value for `Max_Retries` is "auto" so be sure to change it to a positive integer or "none" if you plan to use `Max_Retry_Interval`. When `Max_Retries` is set to a positive integer, messages expire within `Messsage_Expiration` seconds or after the specified number of retries, whichever occurs first. When `Max_Retries` is "none" there is no limit on the number of retries of a message; the message will expire by `Message_Expiration` only.

Consider the following configuration snippet:

```
Retry_Interval = 1200
Max_Retry_Interval = 1200
Max_Retries = 5
```

Given this configuration, a bounced message will be retried every 1200 seconds and will expire in 6000 seconds unless `Message_Expiration` is set to a value lower than 6000\. In which case, the message will expire in `Messsage_Expiration` seconds. "Max_Retry_Interval" caps "Retry_Interval" at 1200\. Without it a bounced message would expire in 37200 seconds (unless Messsage_Expiration is less than this number) because the retry interval is doubled each time as follows:

```
1200
       2400
       4800
       9600
      19200
      -----
      37200
```
<a name="idp25465520"></a>
## Scope

max_retry_interval is valid in the binding, binding_group, domain and global scopes.

<a name="idp25467392"></a>
## See Also

[retry_interval](conf.ref.retry_interval.php "retry_interval"), [max_retries](conf.ref.max_retries.php "max_retries")

| [Prev](conf.ref.max_retries.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.max_timed_events_per_iter.php) |
| max_retries  | [Table of Contents](index.php) |  max_timed_events_per_iter |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)