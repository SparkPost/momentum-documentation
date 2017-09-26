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

| ec_opendkim_verify |
| [Prev](apis.ec_opendkim_start.php)  | Chapter 19. DKIM/DK Functions |  [Next](dns.php) |

<a name="apis.ec_opendkim_verify"></a>
## Name

ec_opendkim_verify — Function to validate a message's DKIM signature

## Synopsis

`#include "modules/validate/ec_opendkim.h"`

| `int **ec_opendkim_verify** (` | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">dkim</var>, |   |
|   | <var class="pdparam">status</var>, |   |
|   | <var class="pdparam">resume_func</var>, |   |
|   | <var class="pdparam">resume_closure</var>`)`; |   |

`ec_message * <var class="pdparam">m</var>`;
`DKIM * <var class="pdparam">dkim</var>`;
`int * <var class="pdparam">status</var>`;
`OpenDKIMResumeFunc <var class="pdparam">resume_func</var>`;
`void * <var class="pdparam">resume_closure</var>`;<a name="idp22966000"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Function to validate a message's DKIM signature.

This is designed to be an overlay on top of the OpenDKIM APIs.

**Parameters**

<dl class="variablelist">

<dt>m</dt>

<dd>

-- pointer to an ec_message to be validated

</dd>

<dt>dkim</dt>

<dd>

-- DKIM pointer

</dd>

<dt>status</dt>

<dd>

-- OpenDKIM status, only valid when returning VALIDATE_CONT

</dd>

<dt>resume_func</dt>

<dd>

-- Function to resume when we return VALIDATE_AGAIN

</dd>

<dt>resume_closure</dt>

<dd>

-- Closure for resume func

</dd>

</dl>

**Return Values**

VALIDATE_CONT on success, VALIDATE_AGAIN on need for re-entry

| [Prev](apis.ec_opendkim_start.php)  | [Up](dkim.php) |  [Next](dns.php) |
| ec_opendkim_start  | [Table of Contents](index.php) |  Chapter 20. DNS Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)