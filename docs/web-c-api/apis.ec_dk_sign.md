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

| ec_dk_sign |
| [Prev](apis.ec_dk_responsible_domain.php)  | Chapter 19. DKIM/DK Functions |  [Next](apis.ec_dkim_domains.php) |

<a name="apis.ec_dk_sign"></a>
## Name

ec_dk_sign — Function to sign a mail message

## Synopsis

`#include "modules/validate/ec_dk.h"`

| `int **ec_dk_sign** (` | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">base_domain</var>, |   |
|   | <var class="pdparam">selector</var>, |   |
|   | <var class="pdparam">key_file</var>, |   |
|   | <var class="pdparam">key</var>`)`; |   |

`ec_message * <var class="pdparam">m</var>`;
`validate_context * <var class="pdparam">ctx</var>`;
`const char * <var class="pdparam">base_domain</var>`;
`const char * <var class="pdparam">selector</var>`;
`const char * <var class="pdparam">key_file</var>`;
`const char * <var class="pdparam">key</var>`;<a name="idp22698864"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Function to sign a mail message.

If not null, base_domain, selector, key_file and key are used to override the values of dk module.

**Parameters**

<dl class="variablelist">

<dt>m</dt>

<dd>

-- pointer to the email message to be signed.

</dd>

<dt>ctx</dt>

<dd>

-- pointer to validation context.

</dd>

<dt>base_domain</dt>

<dd>

-- to override the base domain value of dk module.

</dd>

<dt>selector</dt>

<dd>

-- to override the selector value of dk module.

</dd>

<dt>key_file</dt>

<dd>

-- to use the key from this file.

</dd>

<dt>key</dt>

<dd>

-- to specify the key.

</dd>

</dl>

**Return Values**

1 or 0\. Not meaningful at this point.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](apis.ec_dk_responsible_domain.php)  | [Up](dkim.php) |  [Next](apis.ec_dkim_domains.php) |
| ec_dk_responsible_domain  | [Table of Contents](index.php) |  ec_dkim_domains |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)