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