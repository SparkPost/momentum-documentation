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

| smpp_free |
| [Prev](apis.smpp_fail_ec_message.php)  | Chapter 46. SMPP Functions |  [Next](apis.smpp_get_deliver_mo_msg.php) |

<a name="apis.smpp_free"></a>
## Name

smpp_free — Free memory of the memtype_smpp type

## Synopsis

`#include "modules/mobility/smpp/smpp_util.h"`

| `void **smpp_free** (` | <var class="pdparam">x</var>`)`; |   |

`void * <var class="pdparam">x</var>`;<a name="idp33856160"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.2.

Free memory of the memtype_smpp type. Use this function with memory allocated using [smpp_malloc](apis.smpp_malloc.php "smpp_malloc").

**Parameters**

<dl class="variablelist">

<dt>x</dt>

<dd>

The buffer that will be released.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp33864400"></a>
## See Also

[Chapter 46, *SMPP Functions*          ](smpp.php "Chapter 46. SMPP Functions") and [Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](apis.smpp_fail_ec_message.php)  | [Up](smpp.php) |  [Next](apis.smpp_get_deliver_mo_msg.php) |
| smpp_fail_ec_message  | [Table of Contents](index.php) |  smpp_get_deliver_mo_msg |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)