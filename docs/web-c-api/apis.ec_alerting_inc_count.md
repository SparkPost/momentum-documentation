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

| ec_alerting_inc_count |
| [Prev](script.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_autoload_ns.php) |

<a name="apis.ec_alerting_inc_count"></a>
## Name

ec_alerting_inc_count — Increment a counter for an arbitrary key for a given binding/domain

## Synopsis

`#include "modules/generic/alerting.h"`

| `uint64_t **ec_alerting_inc_count** (` | <var class="pdparam">binding</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">key</var>`)`; |   |

`int <var class="pdparam">binding</var>`;
`const char * <var class="pdparam">domain</var>`;
`const char * <var class="pdparam">key</var>`;<a name="idp31485088"></a>
## Description

Increment a counter for an arbitrary key for a given binding/domain.

**Parameters**

<dl class="variablelist">

<dt>binding</dt>

<dd>

The binding of interest.

</dd>

<dt>domain</dt>

<dd>

The domain of interest

</dd>

<dt>key</dt>

<dd>

The key to increment.

</dd>

</dl>

Returns the newly incremented value.

**Threading**

It is legal to call this function in any thread.

<a name="idp31494320"></a>
## See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*](script.php "Chapter 42. Scriptlet (and Alerting) Functions") 

| [Prev](script.php)  | [Up](script.php) |  [Next](apis.scpt_autoload_ns.php) |
| Chapter 42. Scriptlet (and Alerting) Functions  | [Table of Contents](index.php) |  scpt_autoload_ns |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)