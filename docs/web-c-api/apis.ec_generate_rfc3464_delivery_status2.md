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

| ec_generate_rfc3464_delivery_status2 |
| [Prev](apis.ec_generate_rfc3464_delivery_status.php)  | Chapter 40. RFC Functions |  [Next](apis.ec_generate_rfc3464_message.php) |

<a name="apis.ec_generate_rfc3464_delivery_status2"></a>
## Name

ec_generate_rfc3464_delivery_status2 — renders an RFC3464 report block into the provided string

## Synopsis

`#include "soft_bounce.h"`

| `void **ec_generate_rfc3464_delivery_status2** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">custom_fields</var>, |   |
|   | <var class="pdparam">action</var>, |   |
|   | <var class="pdparam">attempt</var>, |   |
|   | <var class="pdparam">tbl</var>, |   |
|   | <var class="pdparam">output</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`ECDict <var class="pdparam">custom_fields</var>`;
`dsn_actype <var class="pdparam">action</var>`;
`struct timeval * <var class="pdparam">attempt</var>`;
`ECDict <var class="pdparam">tbl</var>`;
`char ** <var class="pdparam">output</var>`;<a name="idp30856464"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

renders an RFC3464 report block into the provided string.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

- Email message from which the headers are generated.

</dd>

<dt>custom_fields</dt>

<dd>

- dictionary containing custom headers.

</dd>

<dt>action</dt>

<dd>

- type of action for the MDN which the headers are generated for.

</dd>

<dt>attempt</dt>

<dd>

- attempt date/time.

</dd>

<dt>tbl</dt>

<dd>

- A ECDict to store the generated headers as key/value pairs. Caller provided.

</dd>

<dt>output</dt>

<dd>

- output string to receive headers.

</dd>

</dl>

| [Prev](apis.ec_generate_rfc3464_delivery_status.php)  | [Up](rfc.php) |  [Next](apis.ec_generate_rfc3464_message.php) |
| ec_generate_rfc3464_delivery_status  | [Table of Contents](index.php) |  ec_generate_rfc3464_message |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)