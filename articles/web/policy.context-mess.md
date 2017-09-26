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

| 6.2. Message Context Variables |
| [Prev](policy.predefined-context-conn.php)  | Chapter 6. Validation Context Variables |  [Next](cluster.php) |

## 6.2. Message Context Variables

<a class="indexterm" name="idp1827600"></a>

Message context variables yield information about the current message. These variables are predefined, either in a global context or within a module. The global variables are discussed in the next section and the module-specific variables follow.

It is also possible to define context variables using configuration options. These variables are discussed in [Section 6.2.3, “Message Context Variables Defined Within a Module”](policy.context-mess.php#policy.context-mess.module.defined "6.2.3. Message Context Variables Defined Within a Module").

### 6.2.1. Predefined Global Message Context Variables

The following message context variables are predefined:

<dl class="variablelist">

<dt>#8bitmime</dt>

<dd>

This variable is set during message parsing if the message contains 8-bit content, and it is used at send time to determine whether to negotiate 8-bit MIME support with the recipient, or to transform the message as per the Send_8BitMime and Transform_8BitMime configuration options. For more information about these options see [send_8bitmime](conf.ref.send_8bitmime.php "send_8bitmime") and [transform_8bitmime_content](conf.ref.transform_8bitmime_content.php "transform_8bitmime_content"). *Note*: All context variables with a "#" prefix are for internal use.

</dd>

<dt>#batch_ids</dt>

<dd>

The sibling message-ids in a batch. This is not determined until after reception is complete. This variable is for internal use only.

</dd>

<dt>mailfrom_domain</dt>

<dd>

Domain part of mailfrom address.

</dd>

<dt>mailfrom_localpart</dt>

<dd>

Local part of mailfrom address.

</dd>

<dt>mailfrom_string</dt>

<dd>

The entire mailfrom line.

</dd>

<dt>rcptto_domain</dt>

<dd>

Domain part of the rcptto address.

</dd>

<dt>rcptto_localpart</dt>

<dd>

Local part of the rcptto address.

</dd>

<dt>rcptto_string</dt>

<dd>

The entire rcptto line.

</dd>

<dt>rfc2822_date_missing</dt>

<dd>

Set to "true" if the date is missing.

</dd>

</dl>

### 6.2.2. Predefined Module-Specific Message Context Variables

The section concerns the predefined module-specific message context variables.

**6.2.2.1. The brightmail Module**

The one variable is as follows:

*   *`brightmail`*::error – Error information

For more information see [Section 14.11.2, “Brightmail Runtime Usage”](modules.brightmail.php#modules.brightmail.runtime.usage "14.11.2. Brightmail Runtime Usage")

**6.2.2.2. The cloudmark Module**

The variables are as follows:

*   `cmae-score` – The spam score

*   `cmae-isspam` – Set if it is determined that the email is spam

*   `cmae-category` – The Cloudmark spam category

*   `cmae-subcategory` – The Cloudmark spam subcategory

*   `cmae-rescan` – Whether the email should be rescanned

*   `cmae-analysis` – The Cloudmark analysis header

*   `cmae-category-desc` – The Cloudmark category name

*   `cmae-subcategory-desc` – The Cloudmark subcategory name

For more information see [Section 14.14.3, “Cloudmark Runtime Usage”](modules.cloudmark.php#modules.cloudmark.runtime.usage "14.14.3. Cloudmark Runtime Usage")

**6.2.2.3. The commtouch Module**

The variables are as follows:

*   `commtouch-class` – The classification of the email

*   `commtouch-virus-threat` – The level of the threat

*   `commtouch-ref-id` – The Commtouch reference ID

For more information see [Section 14.15.2, “commtouch Runtime Usage”](modules.commtouch.php#modules.commtouch.runtime.usage "14.15.2. commtouch Runtime Usage")

**6.2.2.4. The domainkeys Module**

The one variable is as follows:

*   `dk_status` – This variable returns the domain key status

For more information see [Section 14.24.5, “domainkeys Runtime Usage”](modules.domainkeys.php#modules.domainkeys.runtime.usage "14.24.5. domainkeys Runtime Usage")

**6.2.2.5. The smtp_cbv Module**

The one variable is as follows:

*   `smtp_cbv_result` – The result of CBV

For more information see [Section 14.53.2, “smtp_cbv Runtime Usage”](modules.smtp_cbv.php#modules.smtp_cbv.runtime.usage "14.53.2. smtp_cbv Runtime Usage")

### 6.2.3. Message Context Variables Defined Within a Module

**6.2.3.1. The antivirus Modules**

In antivirus modules it is possible to define context variables using configuration options. The variables you may define are shown below with typical default values:

*   `context_variable` = "virus_info"

    If this variable is not set, its default value is "*`virus_engine_name`*_status".

*   `skip_context_variable` = "skip_virus_check"

For more information see [Section 14.2, “antivirus – Antivirus Modules”](modules.antivirus.php "14.2. antivirus – Antivirus Modules").

**6.2.3.2. The spf Modules**

In the spf modules it is possible to define context variables using configuration options. These are shown below with typical default values:

*   `context_variable` = "spf_status"

*   `context_pra_variable` = "senderid_pra_status"

For more information see [Section 14.54, “spf Modules – spf_macros, spf_v1 and senderid (SPF v2)”](modules.spf.php "14.54. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)").

| [Prev](policy.predefined-context-conn.php)  | [Up](policy.context.variables.php) |  [Next](cluster.php) |
| 6.1. Connection Context Variables  | [Table of Contents](index.php) |  Chapter 7. Clustering |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)