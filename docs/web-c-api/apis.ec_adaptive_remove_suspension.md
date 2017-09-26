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

| ec_adaptive_remove_suspension |
| [Prev](apis.ec_adaptive_persist_configurations.php)  | Chapter 2. Adaptive Functions |  [Next](apis.ec_adaptive_restore_configuration.php) |

<a name="apis.ec_adaptive_remove_suspension"></a>
## Name

ec_adaptive_remove_suspension — function to remove one suspension from backstore

## Synopsis

`#include "modules/generic/adaptive_replicate.h"`

| `int **ec_adaptive_remove_suspension** (` | <var class="pdparam">spaths</var>, |   |
|   | <var class="pdparam">prefd</var>, |   |
|   | <var class="pdparam">nodename</var>, |   |
|   | <var class="pdparam">bdr</var>, |   |
|   | <var class="pdparam">err_buf</var>, |   |
|   | <var class="pdparam">buf_len</var>`)`; |   |

`const char ** <var class="pdparam">spaths</var>`;
`int * <var class="pdparam">prefd</var>`;
`const char * <var class="pdparam">nodename</var>`;
`ec_adaptive_bdr * <var class="pdparam">bdr</var>`;
`char * <var class="pdparam">err_buf</var>`;
`size_t <var class="pdparam">buf_len</var>`;<a name="idp19239360"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

function to remove one suspension from backstore.

**Parameters**

<dl class="variablelist">

<dt>spaths</dt>

<dd>

- backstore server paths

</dd>

<dt>prefd</dt>

<dd>

- the prefd server index

</dd>

<dt>nodename</dt>

<dd>

- the node name

</dd>

<dt>bdr</dt>

<dd>

- binding/domain record

</dd>

<dt>err_buf</dt>

<dd>

- if provided, error message will be written to it.

</dd>

<dt>err_len</dt>

<dd>

- the size of error buffer.

</dd>

</dl>

**Return Values**

1 - successful; 0 - failure

**Configuration Change. ** This feature is available starting from Momentum 3.3.

| [Prev](apis.ec_adaptive_persist_configurations.php)  | [Up](adaptive.php) |  [Next](apis.ec_adaptive_restore_configuration.php) |
| ec_adaptive_persist_configurations  | [Table of Contents](index.php) |  ec_adaptive_restore_configuration |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)