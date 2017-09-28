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

| pe2g.relay_queue_backlog |
| [Prev](conf.mcg.pe2g.gimli.enable_heartbeats.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.mcg.relay_urls.php) |

<a name="conf.mcg.relay_queue_backlog"></a>
## Name

pe2g.relay_queue_backlog — the number of emails that can be waiting in the queue for delivery

## Synopsis

`pe2g.relay_queue_backlog = 100`

<a name="idp1933472"></a>
## Description

This option defines the number of emails that can be waiting in the queue for delivery to the MTA via the outbound driver. The default value is `100`. This should be tuned after monitoring system performance.

### Warning

The number of threads defined for a generator should not be greater than the value of `pe2g.relay_queue_backlog`. For example, if `pe2g.relay_urls` is set to `"30@smtp://ecout.messagesystems.com:25"` `pe2g.relay_queue_backlog` should always be greater than or equal to `30`.

<a name="idp1939264"></a>
## See Also

[pe2g.relay_urls](conf.mcg.relay_urls.php "pe2g.relay_urls")

| [Prev](conf.mcg.pe2g.gimli.enable_heartbeats.php)  | [Up](mc.conf.php) |  [Next](conf.mcg.relay_urls.php) |
| pe2g.gimli.enable_heartbeats  | [Table of Contents](index.php) |  pe2g.relay_urls |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)