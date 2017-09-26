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

| cloudmark_score_af |
| [Prev](apis.cloudmark_score.php)  | Chapter 3. AV/Scanning Functions |  [Next](apis.cloudmark_score_ip.php) |

<a name="apis.cloudmark_score_af"></a>
## Name

cloudmark_score_af — Examine a message using Cloudmark ActiveFilter

## Synopsis

`#include "modules/validate/ec_cloudmark_api.h"`

| `int **cloudmark_score_af** (` | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">acpt</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">af_id</var>, |   |
|   | <var class="pdparam">af_score_threshold</var>`)`; |   |

`ec_message * <var class="pdparam">m</var>`;
`accept_construct * <var class="pdparam">acpt</var>`;
`validate_context * <var class="pdparam">ctx</var>`;
`const char * <var class="pdparam">af_id</var>`;
`unsigned int <var class="pdparam">af_score_threshold</var>`;<a name="idp19588304"></a>
## Description

Cloudmark ActiveFilter tracks fingerprints of previously scanned and delivered messages while continually monitoring for new threat updates.

**Parameters**

<dl class="variablelist">

<dt>m</dt>

<dd>

The mail message to be scored. For more information about this struct see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>acpt</dt>

<dd>

The accept construct. For more information about this struct see [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct").

</dd>

<dt>ctx</dt>

<dd>

The validation context. For more information about this struct see [Section 68.86, “validate_context”](structs.validate_context.php "68.86. validate_context").

</dd>

<dt>af_id</dt>

<dd>

A string defining what the ActiveFilter message ID is.

</dd>

<dt>af_score_threshold</dt>

<dd>

The threshold over which to trigger an AF re-score.

</dd>

</dl>

**Return Values**

The Cloudmark score or minus 1 if the module instance is not available, i.e. it is not configured yet. For more information see [cloudmark](https://support.messagesystems.com/docs/web-ref/modules.cloudmark.php).

**Configuration Change. ** This feature is available as of version 3.4.

| [Prev](apis.cloudmark_score.php)  | [Up](antivirus.php) |  [Next](apis.cloudmark_score_ip.php) |
| cloudmark_score  | [Table of Contents](index.php) |  cloudmark_score_ip |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)