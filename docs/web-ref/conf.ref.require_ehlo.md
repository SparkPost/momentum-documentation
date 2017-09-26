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

| require_ehlo |
| [Prev](conf.ref.remote_smtp_port.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.reserve_maintenance_interval.php) |

<a name="conf.ref.require_ehlo"></a>
## Name

require_ehlo — reject mail from clients that don't say HELO

## Synopsis

`Require_EHLO = false`

`Require_EHLO = true`

<a name="idp11157376"></a>
## Description

This directive instructs Momentum to force clients to initiate conversations with an EHLO or HELO command. Early RFCs defining the SMTP protocol did not require or even define the HELO command (notably RFC788). However, starting with RFC821 and currently in RFC2821, one of EHLO or HELO is required. As such, much older SMTP clients may not implement a version of SMTP newer than RFC788. Enable this setting if you wish to enforce RFC821 and later HELO/EHLO handling.

Setting `Require_EHLO` to `true` will cause Momentum to response with a 501 error to any commands issued before an EHLO or HELO command.

The default value for this option is `false`.

<a name="idp11162320"></a>
## Scope

require_ehlo is valid in the global, listener, listen and peer scopes.

| [Prev](conf.ref.remote_smtp_port.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.reserve_maintenance_interval.php) |
| remote_smtp_port  | [Table of Contents](index.php) |  reserve_maintenance_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)