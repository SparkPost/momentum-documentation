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

| stringprint_domainname |
| [Prev](apis.string_init_type.php)  | Chapter 51. String Functions |  [Next](apis.stringprintf.php) |

<a name="apis.stringprint_domainname"></a>
## Name

stringprint_domainname — Renders a domain name, respecting the raw-domain rendering mode

## Synopsis

`#include "controls/controls.h"`

| `size_t **stringprint_domainname** (` | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">cc</var>, |   |
|   | <var class="pdparam">name</var>`)`; |   |

`string * <var class="pdparam">str</var>`;
`command_construct * <var class="pdparam">cc</var>`;
`const char * <var class="pdparam">name</var>`;<a name="idp35476880"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Renders a domain name, respecting the raw-domain rendering mode.

**Parameters**

<dl class="variablelist">

<dt>str</dt>

<dd>

the string to render into

</dd>

<dt>cc</dt>

<dd>

the command_construct for the session (may be NULL)

</dd>

<dt>name</dt>

<dd>

the raw domain name string (must not be NULL)

</dd>

</dl>

**Return Values**

the number of bytes written to the string.

If cc is NULL, the system will call [ec_control_get_command_construct](apis.ec_control_get_command_construct.php "ec_control_get_command_construct"). It is only safe to do use stringprint_domainname with a NULL cc parameter when running on the scheduler thread.

The command construct parameter is needed by this function to determine the domain rendering mode.

This function respects the XML mode flag that is set in command_construct, and will appropriately escape special XML characters in what it emits.

| [Prev](apis.string_init_type.php)  | [Up](string.php) |  [Next](apis.stringprintf.php) |
| string_init_type  | [Table of Contents](index.php) |  stringprintf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)