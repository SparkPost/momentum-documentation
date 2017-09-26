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

| ec_adaptive_sweep_rules_by_binding_domain |
| [Prev](apis.ec_adaptive_restore_configuration.php)  | Chapter 2. Adaptive Functions |  [Next](apis.ec_adaptive_throttle_create_named.php) |

<a name="apis.ec_adaptive_sweep_rules_by_binding_domain"></a>
## Name

ec_adaptive_sweep_rules_by_binding_domain — Return a list of applicable sweep rules for given binding/domain pair

## Synopsis

`#include "modules/generic/adaptive.h"`

| `ec_adaptive_sweep_rule * **ec_adaptive_sweep_rules_by_binding_domain** (` | <var class="pdparam">slot</var>, |   |
|   | <var class="pdparam">domain</var>`)`; |   |

`ec_binding_slot <var class="pdparam">slot</var>`;
`const char * <var class="pdparam">domain</var>`;<a name="idp19294656"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Return a list of applicable sweep rules for given binding/domain pair.

**Parameters**

<dl class="variablelist">

<dt>binding</dt>

<dd>

- binding name

</dd>

<dt>slot</dt>

<dd>

- binding slot. If not known, pass in -1\. Only one of the binding/slot should be used.

</dd>

<dt>domain</dt>

<dd>

- domain name.

</dd>

</dl>

**Return Values**

- linked list of ec_adaptive_sweep_rule. Must call ec_adaptive_delref_sweep_rule to release it.

**Configuration Change. ** This feature is available starting from Momentum 3.2.

| [Prev](apis.ec_adaptive_restore_configuration.php)  | [Up](adaptive.php) |  [Next](apis.ec_adaptive_throttle_create_named.php) |
| ec_adaptive_restore_configuration  | [Table of Contents](index.php) |  ec_adaptive_throttle_create_named |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)