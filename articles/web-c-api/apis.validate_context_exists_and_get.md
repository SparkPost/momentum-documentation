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

| validate_context_exists_and_get |
| [Prev](apis.validate_context_exists.php)  | Chapter 56. Validation Context Functions |  [Next](apis.validate_context_find_message_construct.php) |

<a name="apis.validate_context_exists_and_get"></a>
## Name

validate_context_exists_and_get — If a validation context key exists, then retrieve its value

## Synopsis

`#include "validate.h"`

| `int **validate_context_exists_and_get** (` | <var class="pdparam">vctx</var>, |   |
|   | <var class="pdparam">which</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">value</var>`)`; |   |

`validate_context * <var class="pdparam">vctx</var>`;
`int <var class="pdparam">which</var>`;
`const char * <var class="pdparam">key</var>`;
`const char ** <var class="pdparam">value</var>`;<a name="idp36949408"></a>
## Description

If the specified validation context key exists, then retrieve its value.

**Parameters**

<dl class="variablelist">

<dt>vctx</dt>

<dd>

The validation context. For documentation of this data structure see [Section 68.86, “validate_context”](structs.validate_context.php "68.86. validate_context").

</dd>

<dt>which</dt>

<dd>

An integer, typically `VCTX_MESS` or `VCTX_CONN`, which determines which dictionary to consult: the connection context or the message context dictionary.

</dd>

<dt>key</dt>

<dd>

The key to query.

</dd>

<dt>value</dt>

<dd>

The associated value.

</dd>

</dl>

**Return Value**

Returns `1` if the key exists, `0` if it does not exist. If the key exists its value can be found at `*value`.

**Threading**

It is legal to call this function in any thread.

<a name="idp36963968"></a>
## See Also

[validate_context_exists](apis.validate_context_exists.php "validate_context_exists"), [validate_context_get](apis.validate_context_get.php "validate_context_get"), [validate_context_set](apis.validate_context_set.php "validate_context_set"), [validate_context_delete](apis.validate_context_delete.php "validate_context_delete"), [validate_context_init](apis.validate_context_init.php "validate_context_init"), and [validate_context_destroy](apis.validate_context_destroy.php "validate_context_destroy").

| [Prev](apis.validate_context_exists.php)  | [Up](validate.php) |  [Next](apis.validate_context_find_message_construct.php) |
| validate_context_exists  | [Table of Contents](index.php) |  validate_context_find_message_construct |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)