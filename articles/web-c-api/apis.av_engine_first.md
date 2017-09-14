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

| av_engine_first |
| [Prev](antivirus.php)  | Chapter 3. AV/Scanning Functions |  [Next](apis.av_engine_next.php) |

<a name="apis.av_engine_first"></a>
## Name

av_engine_first — Set position to the first AV engine and return the name of that engine

## Synopsis

`#include "modules/validate/ec_avengine_api.h"`

| `const char * **av_engine_first** (` | <var class="pdparam">closure</var>`)`; |   |

`struct lua_av_closure * <var class="pdparam">closure</var>`;<a name="idp19433216"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Set position to the first AV engine and return the name of that engine.

If there is no engine configured, returns NULL.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

- closure->iter and ave_conf points to the first engine afterward.

</dd>

</dl>

**Return Values**

name of the first engine.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](antivirus.php)  | [Up](antivirus.php) |  [Next](apis.av_engine_next.php) |
| Chapter 3. AV/Scanning Functions  | [Table of Contents](index.php) |  av_engine_next |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)