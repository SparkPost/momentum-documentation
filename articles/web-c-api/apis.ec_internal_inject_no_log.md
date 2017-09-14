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

| ec_internal_inject_no_log |
| [Prev](apis.ec_internal_inject2.php)  | Chapter 8. Bounce Functions |  [Next](apis.ec_soft_bounce_process.php) |

<a name="apis.ec_internal_inject_no_log"></a>
## Name

ec_internal_inject_no_log — injects and enqueues and internally generated message

## Synopsis

`#include "soft_bounce.h"`

| `void **ec_internal_inject_no_log** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp20503136"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

injects and enqueues and internally generated message.

identical to [ec_internal_inject](apis.ec_internal_inject.php "ec_internal_inject") except that ec_log_reception is not called.

**See Also**

[ec_internal_inject](apis.ec_internal_inject.php "ec_internal_inject")

| [Prev](apis.ec_internal_inject2.php)  | [Up](bounce.php) |  [Next](apis.ec_soft_bounce_process.php) |
| ec_internal_inject2  | [Table of Contents](index.php) |  ec_soft_bounce_process |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)