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

| bm_scan |
| [Prev](apis.beik_scan_job_create.php)  | Chapter 3. AV/Scanning Functions |  [Next](apis.cloudmark_analysis.php) |

<a name="apis.bm_scan"></a>
## Name

bm_scan — Invoke the Brightmail scanner

## Synopsis

`#include "modules/validate/ec_brightmail_api.h"`

| `int **bm_scan** (` | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">vctx</var>, |   |
|   | <var class="pdparam">verdict</var>, |   |
|   | <var class="pdparam">rules</var>, |   |
|   | <var class="pdparam">tracker</var>, |   |
|   | <var class="pdparam">is_default</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;
`accept_construct * <var class="pdparam">ac</var>`;
`validate_context * <var class="pdparam">vctx</var>`;
`string * <var class="pdparam">verdict</var>`;
`string * <var class="pdparam">rules</var>`;
`string * <var class="pdparam">tracker</var>`;
`int * <var class="pdparam">is_default</var>`;<a name="idp19511600"></a>
## Description

Invoke the Brightmail scanner.

**Parameters**

<dl class="variablelist">

<dt>msg</dt>

<dd>

The message to be scanned. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>ac</dt>

<dd>

The address of an [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct") associated with the session.

</dd>

<dt>vctx</dt>

<dd>

The validation context. For documentation of this data structure see [Section 68.86, “validate_context”](structs.validate_context.php "68.86. validate_context").

</dd>

<dt>verdict</dt>

<dd>

The verdict from the scan.

</dd>

<dt>rules</dt>

<dd>

The rules used to judge the mail.

</dd>

<dt>tracker</dt>

<dd>

A string can be used as a header in the email.

</dd>

<dt>is_default</dt>

<dd>

`*is_default` is `1` if the final destination is the default destination.

</dd>

</dl>

**Return Values**

-1 if module is not available; -2 if called in a wrong phase; 0 if scan is already done for this mail and 1 if success.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](apis.beik_scan_job_create.php)  | [Up](antivirus.php) |  [Next](apis.cloudmark_analysis.php) |
| beik_scan_job_create  | [Table of Contents](index.php) |  cloudmark_analysis |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)