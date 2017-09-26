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

| ec_interpolate_add_reqs |
| [Prev](apis.ec_interpolate_add_job.php)  | Chapter 29. Interpolation Functions |  [Next](apis.ec_interpolate_calc_deps.php) |

<a name="apis.ec_interpolate_add_reqs"></a>
## Name

ec_interpolate_add_reqs — Add a set of requirements to an interpolation context

## Synopsis

`#include "misc/expand_string.h"`

| `void **ec_interpolate_add_reqs** (` | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">reqs</var>`)`; |   |

`ec_interpolate_context * <var class="pdparam">ctx</var>`;
`int <var class="pdparam">reqs</var>`;<a name="idp25850496"></a>
## Description

Add a set of requirements to an interpolation context.

A macro implementation would use this to hint at the kind of environment needed for expansion of the string at runtime.

The potential requirements can be discovered using [ec_interpolate_calc_deps](apis.ec_interpolate_calc_deps.php "ec_interpolate_calc_deps"). The requirements are as follows:

```
#define EC_INTERPOLATE_REQ_MSG      1  /* an ec_message */
#define EC_INTERPOLATE_REQ_MSG_BODY 2  /* body content */
#define EC_INTERPOLATE_REQ_MSG_HDRS 4  /* rfc2822_context */
#define EC_INTERPOLATE_REQ_VCTX     8  /* validate_context */
#define EC_INTERPOLATE_REQ_AC       16 /* accept_construct */
```
**Parameters**

<dl class="variablelist">

<dt>ctx</dt>

<dd>

The interpolation context. For a description of this data type see [ec_interpolate_context](structs.ec_interpolate_context.php "68.34. ec_interpolate_context").

</dd>

<dt>reqs</dt>

<dd>

This parameter can be any combination of the following:

```
#define EC_INTERPOLATE_REQ_MSG      1  /* an ec_message */
#define EC_INTERPOLATE_REQ_MSG_BODY 2  /* body content */
#define EC_INTERPOLATE_REQ_MSG_HDRS 4  /* rfc2822_context */
#define EC_INTERPOLATE_REQ_VCTX     8  /* validate_context */
#define EC_INTERPOLATE_REQ_AC       16 /* accept_construct */
```
</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp25863008"></a>
## See Also

[ec_interpolate_string](apis.ec_interpolate_string.php "ec_interpolate_string")

| [Prev](apis.ec_interpolate_add_job.php)  | [Up](interpolation.php) |  [Next](apis.ec_interpolate_calc_deps.php) |
| ec_interpolate_add_job  | [Table of Contents](index.php) |  ec_interpolate_calc_deps |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)