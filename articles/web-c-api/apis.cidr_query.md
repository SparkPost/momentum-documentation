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

| cidr_query |
| [Prev](apis.cidr_ipv6_count2.php)  | Chapter 10. CIDR Functions |  [Next](apis.cidrrange_ipv4_free.php) |

<a name="apis.cidr_query"></a>
## Name

cidr_query — Obtain data associated with a CIDR block

## Synopsis

`#include "modules/generic/cidrdb.h"`

| `int **cidr_query** (` | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">addr</var>, |   |
|   | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">bag</var>, |   |
|   | <var class="pdparam">value</var>, |   |
|   | <var class="pdparam">resumeptr</var>, |   |
|   | <var class="pdparam">resumefunc</var>`)`; |   |

`const char * <var class="pdparam">name</var>`;
`char * <var class="pdparam">addr</var>`;
`accept_construct * <var class="pdparam">ac</var>`;
`ec_bag * <var class="pdparam">bag</var>`;
`string * <var class="pdparam">value</var>`;
`void * <var class="pdparam">resumeptr</var>`;
`void(*)(void *) <var class="pdparam">resumefunc</var>`;<a name="idp20776576"></a>
## Description

Obtain data associated with a CIDR block. In order to use this function you must load the [cidrdb](https://support.messagesystems.com/docs/web-ref/modules.cidrdb.php) module.

**Parameters**

<dl class="variablelist">

<dt>name</dt>

<dd>

The name of the CIDR block.

</dd>

<dt>addr</dt>

<dd>

the address of interest (may be NULL).

</dd>

<dt>ac</dt>

<dd>

The accept construct (may be NULL). For more information about this struct see [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct").

</dd>

<dt>bag</dt>

<dd>

The environmental bag (may be NULL). For more information about this struct see [Section 68.16, “ec_bag”](structs.ec_bag.php "68.16. ec_bag").

</dd>

<dt>value</dt>

<dd>

The variable to hold the matching value, or NULL if you are not interested.

</dd>

<dt>resumeptr</dt>

<dd>

The context for the resumefunc (may be NULL).

</dd>

<dt>resumefunc</dt>

<dd>

The optional resumption function (may be NULL).

</dd>

</dl>

**Return Values**

This function returns `1` if the query matched an entry in the CIDR, or `0` if it does not.

If the resumefunc is specified, then in cases where the underlying data is pending resolution, the cidr_query function will return CIDR_QUERY_PENDING and will arrange to call resumefunc(resumeptr) when the load completes.

If resumefunc is not provided, and the data is pending, then the caller will block until it is made available.

| [Prev](apis.cidr_ipv6_count2.php)  | [Up](cidr.php) |  [Next](apis.cidrrange_ipv4_free.php) |
| cidr_ipv6_count2  | [Table of Contents](index.php) |  cidrrange_ipv4_free |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)