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

| opendkim_sign |
| [Prev](conf.ref.only_use_best_mx_for_relay_domains.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.outbound_throttle_connections.php) |

<a name="conf.ref.opendkim_sign"></a>
## Name

opendkim_sign — whether or not to enable OpenDKIM signing

## Synopsis

`opendkim_sign = "true"`

<a name="idp10504160"></a>
## Description

Use this option to enable or disable OpenDKIM signing. For more information about OpenDKIM see [OpenDKIM](http://www.opendkim.org/). To use OpenDKIM you must also configure [opendkim](modules.opendkim.php "14.49. opendkim – OpenDKIM module").

**Configuration Change. ** This is option is available as of version 3.6.

The default value for this option is `true`.

### Note

You cannot sign using both OpenDKIM and DKIM; you must use one or the other.

<a name="idp10510192"></a>
## Scope

`opendkim_sign` is valid in the binding, binding_group, domain and global scopes.

<a name="idp10511792"></a>
## See Also

[Section 14.27, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures") and [Section 14.49, “opendkim – OpenDKIM module”](modules.opendkim.php "14.49. opendkim – OpenDKIM module")

| [Prev](conf.ref.only_use_best_mx_for_relay_domains.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.outbound_throttle_connections.php) |
| only_use_best_mx_for_relay_domains  | [Table of Contents](index.php) |  outbound_throttle_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)