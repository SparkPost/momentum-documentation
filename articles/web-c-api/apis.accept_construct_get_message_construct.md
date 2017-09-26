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

| accept_construct_get_message_construct |
| [Prev](netlistener.php)  | Chapter 38. Netlistener Functions |  [Next](apis.netlistener_clean_accept_construct.php) |

<a name="apis.accept_construct_get_message_construct"></a>
## Name

accept_construct_get_message_construct — Add a function to return message_construct from accept_construct

## Synopsis

`#include "netlistener.h"`

| `struct _message_construct * **accept_construct_get_message_construct** (` | <var class="pdparam">ac</var>`)`; |   |

`struct _accept_construct * <var class="pdparam">ac</var>`;<a name="idp30615552"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Add a function to return message_construct from accept_construct.

(NOTE: this is to be used by Lua script (LuaGen generated function. if there is another way to do the samething, this API should be removed.)

**Parameters**

<dl class="variablelist">

<dt>ac</dt>

<dd>

-- accept_contruct

</dd>

</dl>

**Return Values**

message_construct

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](netlistener.php)  | [Up](netlistener.php) |  [Next](apis.netlistener_clean_accept_construct.php) |
| Chapter 38. Netlistener Functions  | [Table of Contents](index.php) |  netlistener_clean_accept_construct |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)