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

| show outbound |
| [Prev](console_commands.show_inbound.php)  | 12.2. System Console Commands |  [Next](console_commands.showqueue.php) |

<a name="console_commands.show_outbound"></a>
## Name

show outbound — show all outbound connections

## Synopsis

`show outbound`

<a name="idp10050688"></a>
## Description

This command shows all outbound connections. The number at the beginning of each line in the output is the file descriptor of that event.

```
17:34:28 ecelerity(/tmp/2025)> show outbound
36: [outbound/connection_handleconnect] exchange.opf.com IPv4 207.77.20.65
58: [outbound/connection_handleconnect] pe.net IPv4 64.38.64.3
61: [outbound/connection_handleconnect] mail.nctimes.net IPv4 206.171.125.194
70: [outbound/connection_handleconnect] powersurfr.com IPv4 66.116.109.60
71: [outbound/connection_handleconnect] peace.alpha.linkserve.com IPv4 195.166.237.7
72: [outbound/connection_handleconnect] lcc.net IPv4 207.70.175.16
73: [outbound/connection_handleconnect] metallica.com IPv4 64.236.242.239
74: [outbound/connection_handleconnect] ussurg.com IPv4 216.75.208.236
75: [outbound/connection_handleconnect] ttc.com IPv4 157.234.254.51
76: [outbound/connection_handleconnect] md.prestige.net IPv4 72.32.79.195
77: [outbound/connection_handleconnect] mx1.990.net IPv4 202.102.13.148
```
<a name="idp10054592"></a>
## See Also

[show inbound](console_commands.show_inbound.php "show inbound") and [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](console_commands.show_inbound.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.showqueue.php) |
| show inbound  | [Table of Contents](index.php) |  showqueue |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)