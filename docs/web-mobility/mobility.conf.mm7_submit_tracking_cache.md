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

| mm7_submit_tracking_cache |
| [Prev](mobility.conf.mm7_soap_env.php)  | 8.1. MM7 Configuration Option Details |  [Next](mobility.conf.mm7_submit_tracking_schema.php) |

<a name="mobility.conf.mm7_submit_tracking_cache"></a>
## Name

mm7_submit_tracking_cache — the datasource cache name used by MM7 for storing and retrieving a SubmitReq's delivery time

## Synopsis

`mm7_submit_tracking_cache = "ecdb"`

<a name="idp2648128"></a>
## Description

The datasource cache name used by MM7 for storing and retrieving delivery time. Its value is configured through a "datasource" stanza. For more information see ["ds_core Module"](https://support.messagesystems.com/docs/web-ref/modules.ds_core.php).

Both `mm7_submit_tracking_cache` and `mm7_submit_tracking_schema` are for internal use for storing and retrieving the time it takes to make a delivery. This parameter is only valid in the global scope.

The default value for this option is `ecdb`.

<a name="idp2653328"></a>
## Scope

This option is valid in the global scope.

<a name="idp2655168"></a>
## See Also

[mm7_submit_tracking_schema](mobility.conf.mm7_submit_tracking_schema.php "mm7_submit_tracking_schema")

| [Prev](mobility.conf.mm7_soap_env.php)  | [Up](mobility.mm7.options.php#mm7.conf) |  [Next](mobility.conf.mm7_submit_tracking_schema.php) |
| mm7_soap_env  | [Table of Contents](index.php) |  mm7_submit_tracking_schema |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)