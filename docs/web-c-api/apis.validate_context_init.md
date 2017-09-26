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

| validate_context_init |
| [Prev](apis.validate_context_get.php)  | Chapter 56. Validation Context Functions |  [Next](apis.validate_context_iterate_rcpt.php) |

<a name="apis.validate_context_init"></a>
## Name

validate_context_init — Allocate resources for a validation context dictionary

## Synopsis

`#include "validate.h"`

| `void **validate_context_init** (` | <var class="pdparam">vctx</var>`)`; |   |

`validate_context * <var class="pdparam">vctx</var>`;<a name="idp37022800"></a>
## Description

Allocate resources for a validation context dictionary.

**Parameters**

<dl class="variablelist">

<dt>vctx</dt>

<dd>

The validation context. For documentation of this data structure see [Section 68.86, “validate_context”](structs.validate_context.php "68.86. validate_context").

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is only legal to call this function in the `Scheduler` thread.

<a name="idp37029808"></a>
## See Also

[validate_context_exists_and_get](apis.validate_context_exists_and_get.php "validate_context_exists_and_get"), [validate_context_exists](apis.validate_context_exists.php "validate_context_exists"), [validate_context_get](apis.validate_context_get.php "validate_context_get"), [validate_context_delete](apis.validate_context_delete.php "validate_context_delete"), [validate_context_set](apis.validate_context_set.php "validate_context_set"), and [validate_context_destroy](apis.validate_context_destroy.php "validate_context_destroy").

| [Prev](apis.validate_context_get.php)  | [Up](validate.php) |  [Next](apis.validate_context_iterate_rcpt.php) |
| validate_context_get  | [Table of Contents](index.php) |  validate_context_iterate_rcpt |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)