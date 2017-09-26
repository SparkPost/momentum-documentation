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

| sieve_get_accept_construct |
| [Prev](apis.sieve_free_seng.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_get_arg.php) |

<a name="apis.sieve_get_accept_construct"></a>
## Name

sieve_get_accept_construct — Get an accept_construct from the Sieve engine

## Synopsis

`#include "sieve/ecsieve.h"`

| `accept_construct * **sieve_get_accept_construct** (` | <var class="pdparam">seng</var>`)`; |   |

`SENG * <var class="pdparam">seng</var>`;<a name="idp32494656"></a>
## Description

Get an accept_construct from the Sieve engine.

**Parameters**

<dl class="variablelist">

<dt>seng</dt>

<dd>

The Sieve engine.

</dd>

</dl>

**Return Values**

This function returns an accept_construct.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp32501408"></a>
## See Also

[Section 68.73, “SENG (sieve_engine)”](structs.seng.php "68.73. SENG (sieve_engine)") and [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct")

| [Prev](apis.sieve_free_seng.php)  | [Up](sieve.php) |  [Next](apis.sieve_get_arg.php) |
| sieve_free_seng  | [Table of Contents](index.php) |  sieve_get_arg |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)