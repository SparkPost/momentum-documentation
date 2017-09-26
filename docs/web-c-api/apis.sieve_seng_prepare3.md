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

| sieve_seng_prepare3 |
| [Prev](apis.sieve_seng_prepare2.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_seng_set_can_go_async.php) |

<a name="apis.sieve_seng_prepare3"></a>
## Name

sieve_seng_prepare3 — prepare to execute a sieve script

## Synopsis

`#include "sieve/ecsieve.h"`

| `SENG * **sieve_seng_prepare3** (` | <var class="pdparam">sieve</var>, |   |
|   | <var class="pdparam">phase</var>, |   |
|   | <var class="pdparam">bag</var>, |   |
|   | <var class="pdparam">can</var>`)`; |   |

`SIEVE * <var class="pdparam">sieve</var>`;
`const char * <var class="pdparam">phase</var>`;
`ec_bag * <var class="pdparam">bag</var>`;
`int <var class="pdparam">can</var>`;<a name="idp33264608"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

prepare to execute a sieve script.

**See Also**

[sieve_seng_prepare2](apis.sieve_seng_prepare2.php "sieve_seng_prepare2"), [sieve_seng_execute](apis.sieve_seng_execute.php "sieve_seng_execute"), sieve_seng_free()

| [Prev](apis.sieve_seng_prepare2.php)  | [Up](sieve.php) |  [Next](apis.sieve_seng_set_can_go_async.php) |
| sieve_seng_prepare2  | [Table of Contents](index.php) |  sieve_seng_set_can_go_async |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)