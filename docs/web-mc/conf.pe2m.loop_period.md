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

| pe2m.loop_period |
| [Prev](conf.pe2m.call_period.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.pe2m.max_generators_per_poll.php) |

<a name="conf.pe2m.loop_period"></a>
## Name

pe2m.loop_period — improve the efficiency of communication between the manager and the scheduler

## Synopsis

`pe2m.loop_period = 5`

<a name="idp2026336"></a>
## Description

This option improves the efficiency of communication between the manager and the scheduler especially when the `pe2m.call_period` and the `pe2m.update_period` options are set to higher values. It should be set in the `/opt/msys/pe2/etc/pe2.conf` file on the machine hosting the database.

The default value for this option is `5`.

<a name="idp2030656"></a>
## See Also

[pe2m.max_generators_per_poll](conf.pe2m.max_generators_per_poll.php "pe2m.max_generators_per_poll"), [pe2m.update_period](conf.pe2m.update_period.php "pe2m.update_period"), [pe2m.call_period](conf.pe2m.call_period.php "pe2m.call_period"), [pe2sched.spawn_interval_by_client](conf.pe2sched.spawn_interval_by_client.php "pe2sched.spawn_interval_by_client")

| [Prev](conf.pe2m.call_period.php)  | [Up](mc.conf.php) |  [Next](conf.pe2m.max_generators_per_poll.php) |
| pe2m.call_period  | [Table of Contents](index.php) |  pe2m.max_generators_per_poll |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)