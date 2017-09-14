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

| Chapter 3. Adaptive Rules |
| [Prev](ad.using.php)  |   |  [Next](ad.adaptive.rules.parameters.php) |

## Chapter 3. Adaptive Rules

**Table of Contents**

<dl class="toc">

<dt>[3.1\. Receivers Managed by Adaptive Rules](ad.adaptive.rules.php#ad.adaptive.rules.receivers)</dt>

<dt>[3.2\. Parameters Adjusted by the Rules](ad.adaptive.rules.parameters.php)</dt>

<dt>[3.3\. Rule Actions](ad.adaptive.rules.actions.php)</dt>

</dl>

As of Momentum version 3.2, the `adaptive_rules.lua` file is included with all AD licences. This file helps manage outbound traffic so that it complies with the requirements of major receivers. AD is most effective when you include adaptive response rules in your configuration. The rules defined in the `/opt/msys/ecelerity/libexec/scriptlets/msys/adaptive_rules.lua` file are implemented by the `/opt/msys/ecelerity/libexec/scriptlets/msys/adaptive.lua` script. In [Example 2.1, “Sample adaptive setup”](ad.using.php#ad.adaptive.setup.example "Example 2.1. Sample adaptive setup") adaptive rules are activated by the `script "adaptive"` stanza within the scriptlet module scope. After installation you must add this stanza to the `ecelerity.conf` file if you wish to use adaptive rules.

### Note

For easy reference this file is reproduced in [Appendix D, *The `adaptive_rules.lua` File*](ad.appendix.adaptive_rules.php "Appendix D. The adaptive_rules.lua File") .

As an example, the following response rule is defined for yahoo.com:

```
responses = {
  {
     code = "^554 Message not allowed\\. DK Email not accepted for policy reasons",
     trigger = "1",
     action = {"suspend", "4 hours"},
     message = "Have you configured DK correctly?",
     phase = "data",
   }
   ...
}
```

If a message is rejected with the code shown above, deliveries for Yahoo!™ are suspended, for the sending binding, for the period indicated and the sender is alerted to this event with the message, "Have you configured DK correctly?". In this case, this action is triggered by the single occurrence of a code with the specified value. A complete description of triggers and the other configuration options is given in [the section called “The configuration Element”](ad.custom.rules.php#ad.custom.configuration "The configuration Element").

When receiver response codes change, the `adaptive_rules.lua` file is updated by the Live Bounce Updates service.

**Response Codes vs. Sweep Rules**

Response codes differ from "sweep rule" codes. A response "code" is typically a PCRE of the SMTP response text and a "sweep rule" code is one of the bounce codes listed at [Bounce Classification Codes](https://support.messagesystems.com/docs/web-ref/bounce_logger.classification.codes.php) or a feedback loop code such as "abuse". Responses are triggered by one or more occurrences of SMTP responses but sweep rules examine the ratio of bounce or feedback "codes" over total deliveries (or attempted deliveries). Additionally, sweep rules apply only to bounces and FBL messages.

## 3.1. Receivers Managed by Adaptive Rules

The major receivers include:

*   yahoo.com

*   aol.com

*   bellsouth.net

*   comcast.net

*   earthlink.net

*   rr.com

*   gmail.com

*   hotmail.com

For a comprehensive list of the aliases used by these receivers see [Appendix D, *The `adaptive_rules.lua` File*](ad.appendix.adaptive_rules.php "Appendix D. The adaptive_rules.lua File") .

| [Prev](ad.using.php)  |   |  [Next](ad.adaptive.rules.parameters.php) |
| Chapter 2. Implementing Adaptive Delivery  | [Table of Contents](index.php) |  3.2. Parameters Adjusted by the Rules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)