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

| pe2sched.spawn_interval_by_client |
| [Prev](conf.pe2sched.max_generator_per_mailing.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.pe2sched.spawn_interval_by_mailing.php) |

<a name="conf.pe2sched.spawn_interval_by_client"></a>
## Name

pe2sched.spawn_interval_by_client — how often a generator can be spawned

## Synopsis

`pe2sched.spawn_interval_by_client = 30`

<a name="idp2161312"></a>
## Description

This option determines how often a generator can be spawned. This option controls how often the generator will be created on the machine hosting the generator component. To create generators more frequently, decrease the value of this option. This option should be set in the `/opt/msys/pe2/etc/pe2.conf` file on the machine hosting the generator.

As of version 3.5, the default value for this option is `1` (seconds). Previously it was `30`.

<a name="idp2166176"></a>
## See Also

[pe2sched.max_generator_limit](conf.pe2sched.max_generator_limit.php "pe2sched.max_generator_limit"), [pe2sched.spawn_interval_by_mailing](conf.pe2sched.spawn_interval_by_mailing.php "pe2sched.spawn_interval_by_mailing")

| [Prev](conf.pe2sched.max_generator_per_mailing.php)  | [Up](mc.conf.php) |  [Next](conf.pe2sched.spawn_interval_by_mailing.php) |
| pe2sched.max_generator_per_mailing  | [Table of Contents](index.php) |  pe2sched.spawn_interval_by_mailing |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)