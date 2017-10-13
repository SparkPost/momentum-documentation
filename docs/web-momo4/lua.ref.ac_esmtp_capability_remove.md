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

| ac:esmtp_capability_remove |
| [Prev](lua.ref.ac_esmtp_capability_add.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.ac_inbound_session_count.php) |

<a name="lua.ref.ac_esmtp_capability_remove"></a>
## Name

ac:esmtp_capability_remove — Remove a capability string from the EHLO response

<a name="idp14915856"></a>
## Synopsis

`require('msys.extended.ac')`

`ac:esmtp_capability_remove(name);`

`name: string`<a name="idp14919024"></a>
## Description

Removes a capability string from the EHLO response. It is most useful in the connect phase and raises an error if the session is not attached to an SMTP listener.

`ac` is an accept construct userdata data type. For a description of the C struct see [accept_construct](https://support.messagesystems.com/docs/web-c-api/structs.accept_construct.php).

Enable this function with the statement `require('msys.extended.ac');`.

<a name="idp14923040"></a>
## See Also

[ac:esmtp_capability_add](lua.ref.ac_esmtp_capability_add.php "ac:esmtp_capability_add")

| [Prev](lua.ref.ac_esmtp_capability_add.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.ac_inbound_session_count.php) |
| ac:esmtp_capability_add  | [Table of Contents](index.php) |  ac:inbound_session_count |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)