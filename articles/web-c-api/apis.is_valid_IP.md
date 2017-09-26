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

| is_valid_IP |
| [Prev](apis.getopt_long2.php)  | Chapter 55. Utility Functions |  [Next](apis.is_valid_email.php) |

<a name="apis.is_valid_IP"></a>
## Name

is_valid_IP — Determines whether or not `string` is a valid IP address

## Synopsis

`#include "dns.h"`

| `int **is_valid_IP** (` | <var class="pdparam">string</var>, |   |
|   | <var class="pdparam">family</var>, |   |
|   | <var class="pdparam">address</var>`)`; |   |

`const char * <var class="pdparam">string</var>`;
`u_int8_t * <var class="pdparam">family</var>`;
`struct in6_addr * <var class="pdparam">address</var>`;<a name="idp36619344"></a>
## Description

Determines whether or not `string` is a valid IP address.

**Parameters**

<dl class="variablelist">

<dt>string</dt>

<dd>

The string to be validated.

</dd>

<dt>family</dt>

<dd>

As a side effect, this address will be populated with one of the following values: `AF_INET`, `AF_INET6`, or `AF_UNSPEC`.

The following typedef applies to the `u_int8_t` data type:

`typedef uint8_t u_int8_t;`

</dd>

<dt>address</dt>

<dd>

An address of the system struct `struct in6_addr`. As a side effect, this address will be populated with either `struct in6_addr (AF_INET6)` data or `struct in_addr (AF_INET)` data. If `family` is `AF_INET`, then the caller should cast the value of `address` to a `struct in_addr` in order to access the data structure for an IPv4 address.

</dd>

</dl>

**Return Values**

This is a Boolean function that returns `1` if `string` is valid IP address and `0` otherwise. If the string validates, then `address` will have `struct in6_addr` data.

**Threading**

It is legal to call this function in any thread.

<a name="idp36638688"></a>
## See Also

[is_valid_email](apis.is_valid_email.php "is_valid_email").

| [Prev](apis.getopt_long2.php)  | [Up](utility.php) |  [Next](apis.is_valid_email.php) |
| getopt_long2  | [Table of Contents](index.php) |  is_valid_email |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)