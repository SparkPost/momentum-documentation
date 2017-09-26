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

| siv_throttle_cache_size |
| [Prev](conf.ref.signing_stats.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.snmp.php) |

<a name="conf.ref.siv_throttle_cache_size"></a>
## Name

siv_throttle_cache_size — set the maximum number of named throttles

## Synopsis

`siv_throttle_cache_size = 1000`

<a name="idp11757552"></a>
## Description

This option sets the maximum number of named throttles created by the Sieve command **ec_throttle_create** and by Lua scripts. If you try to create more throttles than this value, throttles created earlier will be destroyed. Prior to version 3.0.24, the value of this option defaults to `100`. This option should only be changed if you need to use more than 100 named throttles.

**Configuration Change. ** As of version 3.0.24, the default value for this option has been increased to `1000`. This was done because Adaptive Delivery makes heavy use of throttles.

<a name="idp11763104"></a>
## Scope

`siv_throttle_cache_size` is valid in the global scope.

<a name="idp11765152"></a>
## See Also

[ec_throttle](sieve.ref.ec_throttle.php "ec_throttle"), [Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery")

| [Prev](conf.ref.signing_stats.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.snmp.php) |
| signing_stats  | [Table of Contents](index.php) |  SNMP |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)