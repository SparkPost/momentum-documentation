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

| retry_interval |
| [Prev](conf.ref.response_transcode_replace.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.rfc2821_allow_whitespace_in_envelope.php) |

<a name="conf.ref.retry_interval"></a>
## Name

retry_interval — base retry interval

## Synopsis

`Retry_Interval = "1200"`

<a name="idp11251600"></a>
## Description

The base retry period in seconds for a message which could not be delivered. Momentum employs an exponential back-off scheme for retrying messages. On the first failure the message is retried `Retry_Interval` seconds later. On the second failure, twice that. On the third failure, four times that. On the fourth failure, eight times that. This process continues until the message is delivered, or the `Message_Expiration` timeout is reached, whichever comes first. The default value for this option is `1200` (20 minutes).

You can disable Momentum's exponential back-off scheme so that a message is retried at a fixed interval. For more information see [max_retries](conf.ref.max_retries.php "max_retries").

<a name="idp11256128"></a>
## Scope

retry_interval is valid in the binding, binding_group, domain and global scopes.

<a name="idp11257808"></a>
## See Also

[message_expiration](conf.ref.message_expiration.php "message_expiration")

| [Prev](conf.ref.response_transcode_replace.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.rfc2821_allow_whitespace_in_envelope.php) |
| response_transcode_replace  | [Table of Contents](index.php) |  rfc2821_allow_whitespace_in_envelope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)