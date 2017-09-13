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

| sockaddr_to_string |
| [Prev](apis.sock_address_equal.php)  | Chapter 48. Socket Address Functions |  [Next](apis.sockaddr_to_string2.php) |

<a name="apis.sockaddr_to_string"></a>
## Name

sockaddr_to_string — Renders a socket address into human-readable form

## Synopsis

`#include "netlistener.h"`

| `char * **sockaddr_to_string** (` | <var class="pdparam">sa</var>, |   |
|   | <var class="pdparam">buffer</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`struct sockaddr * <var class="pdparam">sa</var>`;
`char * <var class="pdparam">buffer</var>`;
`int * <var class="pdparam">len</var>`;<a name="idp34681936"></a>
## Description

Renders a socket address into human-readable form.

### Note

You may find that [sockaddr_to_string2](apis.sockaddr_to_string2.php "sockaddr_to_string2") is slightly easier to use.

**Parameters**

<dl class="variablelist">

<dt>sa</dt>

<dd>

The socket address.

</dd>

<dt>buffer</dt>

<dd>

The target for the human-readable form of the socket address.

### Note

If the `buffer` is `NULL` on input, then a static, thread-**unsafe** buffer will be used and returned.

</dd>

<dt>len</dt>

<dd>

The buffer length.

### Note

`*l` **must** store the `buffer` size. As as side effect, `*l` will be updated with the length of the rendered string.

</dd>

</dl>

**Return Values**

Returns the buffer that was used for rendering the socket address.

**Threading**

It is legal to call this function in any thread.

<a name="idp34698864"></a>
## See Also

[sockaddr_to_string2](apis.sockaddr_to_string2.php "sockaddr_to_string2")

| [Prev](apis.sock_address_equal.php)  | [Up](sockaddr.php) |  [Next](apis.sockaddr_to_string2.php) |
| sock_address_equal  | [Table of Contents](index.php) |  sockaddr_to_string2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)