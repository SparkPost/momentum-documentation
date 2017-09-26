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

| sockaddr_to_string_opt |
| [Prev](apis.sockaddr_to_string3.php)  | Chapter 48. Socket Address Functions |  [Next](spool.php) |

<a name="apis.sockaddr_to_string_opt"></a>
## Name

sockaddr_to_string_opt — Renders a socket address into a human readable form

## Synopsis

`#include "netlistener.h"`

| `int **sockaddr_to_string_opt** (` | <var class="pdparam">s</var>, |   |
|   | <var class="pdparam">buffer</var>, |   |
|   | <var class="pdparam">buf_size</var>, |   |
|   | <var class="pdparam">opt</var>`)`; |   |

`struct sockaddr * <var class="pdparam">s</var>`;
`char * <var class="pdparam">buffer</var>`;
`int <var class="pdparam">buf_size</var>`;
`int <var class="pdparam">opt</var>`;<a name="idp34756160"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Renders a socket address into a human readable form.

**Parameters**

<dl class="variablelist">

<dt>s</dt>

<dd>

the socket address

</dd>

<dt>buffer</dt>

<dd>

the buffer into which to render.

</dd>

<dt>l</dt>

<dd>

the sizeof(buffer)

</dd>

<dt>opt</dt>

<dd>

options bitmap

</dd>

</dl>

Renders the address into the provided buffer. buffer must not be NULL. Currently, the only option is "EC_SA2S_NO_PORT."

**Return Values**

Returns the length of the rendered address.

**Configuration Change. ** This feature is available starting from Momentum 3.4.0.

**See Also**

[sockaddr_to_string2](apis.sockaddr_to_string2.php "sockaddr_to_string2")

| [Prev](apis.sockaddr_to_string3.php)  | [Up](sockaddr.php) |  [Next](spool.php) |
| sockaddr_to_string3  | [Table of Contents](index.php) |  Chapter 49. Spool-related Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)