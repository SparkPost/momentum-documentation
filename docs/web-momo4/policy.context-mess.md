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

| 63.2. Message Context Variables |
| [Prev](policy.context.variables.php)  | Chapter 63. Validation Context Variables |  [Next](p.reference.php) |

## 63.2. Message Context Variables

Message context variables yield information about the current message. These variables are predefined, either in a global context or within a module. The following tables list the global and module-specific variables.

It is also possible to define context variables using configuration options. These variables are discussed in [Section 63.2.3, “Message Context Variables Defined Within a Module”](policy.context-mess.php#policy.context-mess.module.defined "63.2.3. Message Context Variables Defined Within a Module").

### 63.2.1. Predefined Global Message Context Variables

This table lists all message context variables that are predefined globally by Momentum.

<a name="predefined-context-message-global"></a>

**Table 63.2. Global Predefined Message Context Variables**

| Message Context Variable | Description |
| --- | --- |
| #8bitmime – For internal use | 

This variable is set during message parsing if the message contains 8-bit content. It is used at send time to determine whether to negotiate 8-bit MIME support with the recipient or to transform the message as per the Send_8BitMime and Transform_8BitMime configuration options. For more information about these options, see [send_8bitmime](conf.ref.send_8bitmime.php "send_8bitmime") and [transform_8bitmime_content](conf.ref.transform_8bitmime_content.php "transform_8bitmime_content").

 |
| #batch_ids – For internal use | 

The sibling message-ids in a batch. This is not determined until after reception is complete.

 |
| mailfrom_domain – Domain part of mailfrom address | 

Available as of the `validate_mailfrom` callout.

 |
| mailfrom_localpart – Local part of mailfrom address | 

Available as of the `validate_mailfrom` callout.

 |
| mailfrom_string – Entire mailfrom line | 

Available as of the `validate_mailfrom` callout.

 |
| rcptto_domain – Domain part of the rcptto address |  |
| rcptto_localpart – Local part of the rcptto address |  |
| rcptto_string – Entire rcptto line |  |
| rfc2822_date_missing – Set to "true" if the date is missing |  |

### 63.2.2. Predefined Module-Specific Message Context Variables

Modules that support predefined module-specific message context variables are listed below:

*   [brightmail](modules.brightmail.php#modules.brightmail.context.variables "71.14.2. Message Context Variables")

*   [cloudmark](modules.cloudmark.php#modules.cloudmark.context.variables "71.18.3. Message Context Variables")

*   [commtouch_ctasd](modules.commtouch.php#modules.commtouch.context.variables "71.20.2. Message Context Variables")

*   [domainkeys](modules.domainkeys.php#modules.domainkeys.context.variables "71.28.3. Message Context Variables")

*   [seedlist](modules.seedlist.php#modules.seedlist.runtime.usage "71.62.2. Runtime Usage")

*   [smtp_cbv](modules.smtp_cbv.php#modules.smtp_cbv.context.variables "71.65.2. Message Context Variables")

### 63.2.3. Message Context Variables Defined Within a Module

In some modules, it is possible to define context variables using configuration options. The following table lists the modules that support this feature.

<a name="defined-context-message-module"></a>

**Table 63.3. Message Context Variables Defined Within a Module**

| Module | Configuration Option | Default Value |
| --- | --- | --- |
| 

[antivirus](modules.antivirus.php "71.6. antivirus – Antivirus")

 | 

`context_variable`

 | 

*`engine name`*      _status

 |
| 

[antivirus](modules.antivirus.php "71.6. antivirus – Antivirus")

 | 

`skip_context_variable`

 | 

skip_virus_check

 |
| 

[spf](modules.spf.php "71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)")

 | 

`context_variable`

 | 

spf_status

 |
| 

[spf](modules.spf.php "71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)")

 | 

`context_pra_variable`

 | 

senderid_pra_status

 |

| [Prev](policy.context.variables.php)  | [Up](policy.context.variables.php) |  [Next](p.reference.php) |
| Chapter 63. Validation Context Variables  | [Table of Contents](index.php) |  Part X. Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)