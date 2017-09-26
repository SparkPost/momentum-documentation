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

| ec_throttle_create_named |
| [Prev](apis.check_outbound_throttle.php)  | Chapter 53. Throttle Functions |  [Next](apis.ec_throttle_delta.php) |

<a name="apis.ec_throttle_create_named"></a>
## Name

ec_throttle_create_named — create a named throttle

## Synopsis

`#include "throttle.h"`

| `int **ec_throttle_create_named** (` | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">maximum</var>, |   |
|   | <var class="pdparam">time_period</var>`)`; |   |

`const char * <var class="pdparam">name</var>`;
`uint64_t <var class="pdparam">maximum</var>`;
`unsigned int <var class="pdparam">time_period</var>`;<a name="idp35974912"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

create a named throttle

Creates a throttle that can be referenced by name.

**Parameters**

<dl class="variablelist">

<dt>name</dt>

<dd>

the name of the throttle

</dd>

<dt>maximum</dt>

<dd>

the upper bound of increments/events

</dd>

<dt>time_period</dt>

<dd>

number of seconds over which to enforce throttle

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 3.0.6.

| [Prev](apis.check_outbound_throttle.php)  | [Up](throttle.php) |  [Next](apis.ec_throttle_delta.php) |
| check_outbound_throttle  | [Table of Contents](index.php) |  ec_throttle_delta |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)