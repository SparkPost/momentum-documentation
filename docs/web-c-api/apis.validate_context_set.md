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

| validate_context_set |
| [Prev](apis.validate_context_remove_rcpt.php)  | Chapter 56. Validation Context Functions |  [Next](apis.validate_context_set_code.php) |

<a name="apis.validate_context_set"></a>
## Name

validate_context_set — Create or set a validation context keypair determined by `key`

## Synopsis

`#include "validate.h"`

| `void **validate_context_set** (` | <var class="pdparam">vctx</var>, |   |
|   | <var class="pdparam">which</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">value</var>`)`; |   |

`validate_context * <var class="pdparam">vctx</var>`;
`int <var class="pdparam">which</var>`;
`const char * <var class="pdparam">key</var>`;
`const char * <var class="pdparam">value</var>`;<a name="idp37101616"></a>
## Description

Create or set a validation context keypair determined by `key`.

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

The key to create or set.

</dd>

<dt>value</dt>

<dd>

The associated value.

</dd>

</dl>

**Return Values**

This function returns void.

### Note

If either `key` or `value` is `NULL`, this function will log something like this:

`"Attempt to set null key or value in validate context connection dictionary."`**Threading**

It is legal to call this function in any thread.

<a name="idp37117952"></a>
## See Also

[validate_context_exists](apis.validate_context_exists.php "validate_context_exists"), [validate_context_exists_and_get](apis.validate_context_exists_and_get.php "validate_context_exists_and_get"), [validate_context_get](apis.validate_context_get.php "validate_context_get"), [validate_context_delete](apis.validate_context_delete.php "validate_context_delete"), [validate_context_init](apis.validate_context_init.php "validate_context_init"), and [validate_context_destroy](apis.validate_context_destroy.php "validate_context_destroy").

| [Prev](apis.validate_context_remove_rcpt.php)  | [Up](validate.php) |  [Next](apis.validate_context_set_code.php) |
| validate_context_remove_rcpt  | [Table of Contents](index.php) |  validate_context_set_code |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)