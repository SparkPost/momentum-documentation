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

| Chapter 3. AV/Scanning Functions |
| [Prev](apis.is_adaptive_scope_global.php)  | Part II. C API |  [Next](apis.av_engine_first.php) |

## Chapter 3. AV/Scanning Functions

**Table of Contents**

<dl class="toc">

<dt>[av_engine_first](apis.av_engine_first.php) — Set position to the first AV engine and return the name of that engine</dt>

<dt>[av_engine_next](apis.av_engine_next.php) — Set position to the next AV engine and return the name of that engine</dt>

<dt>[av_scan_job_create](apis.av_scan_job_create.php) — function used by Lua binding function to return a job</dt>

<dt>[beik_scan_job_create](apis.beik_scan_job_create.php) — function used by Lua binding function to return a job</dt>

<dt>[bm_scan](apis.bm_scan.php) — Invoke the Brightmail scanner</dt>

<dt>[cloudmark_analysis](apis.cloudmark_analysis.php) — Analyzes the header returned by cloudmark_score and returns score, category, sub-category and rescan</dt>

<dt>[cloudmark_score](apis.cloudmark_score.php) — Determine the Cloudmark score of a message</dt>

<dt>[cloudmark_score_af](apis.cloudmark_score_af.php) — Examine a message using Cloudmark ActiveFilter</dt>

<dt>[cloudmark_score_ip](apis.cloudmark_score_ip.php) — Determine the Cloudmark score</dt>

</dl>

The APIs documented here relate to the [antivirus](https://support.messagesystems.com/docs/web-ref/modules.antivirus.php) module.

| [Prev](apis.is_adaptive_scope_global.php)  | [Up](pt.apis.php) |  [Next](apis.av_engine_first.php) |
| is_adaptive_scope_global  | [Table of Contents](index.php) |  av_engine_first |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)