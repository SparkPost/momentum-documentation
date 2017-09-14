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

| pe2m.max_silence |
| [Prev](conf.pe2m.max_generators_per_poll.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.pe2m.update_period.php) |

<a name="conf.pe2m.max_silence"></a>
## Name

pe2m.max_silence — how long the scheduler should wait for a response from the manager

## Synopsis

`pe2m.max_silence = 60`

<a name="idp2054432"></a>
## Description

The Message Central scheduler needs to know how long an interval it should wait for a response from the manager. If the max-silence interval expires without a response from the manager, the scheduler considers the manager process to be dead. This option determines the maximum length of that interval, in seconds; the default value is 60 seconds.

**Configuration Change. ** This feature has been available since version 3.3, with a default value of 30 seconds. In version 3.5, the default value was changed to 60 seconds.

The `pe2m.max_silence` option is set in the `/opt/msys/pe2/etc/pe2.conf` file on the machine hosting the scheduler process. If you change the value of `pe2m.max_silence`, you must restart the scheduler process.

<a name="idp2060800"></a>
## See Also

[pe2m.call_period](conf.pe2m.call_period.php "pe2m.call_period"), [pe2m.loop_period](conf.pe2m.loop_period.php "pe2m.loop_period"), [pe2m.update_period](conf.pe2m.update_period.php "pe2m.update_period"), [pe2sched.concurrency](conf.mcsched.concurrency.php "pe2sched.concurrency"), [pe2sched.hostname](conf.mcsched.hostname.php "pe2sched.hostname"), [pe2sched.spawn_interval_by_client](conf.pe2sched.spawn_interval_by_client.php "pe2sched.spawn_interval_by_client"), [pe2sched.spawn_interval_by_mailing](conf.pe2sched.spawn_interval_by_mailing.php "pe2sched.spawn_interval_by_mailing"), [Section 6.5, “The `pe2.conf` File”](mc.conf.pe2.conf.php "6.5. The pe2.conf File")

| [Prev](conf.pe2m.max_generators_per_poll.php)  | [Up](mc.conf.php) |  [Next](conf.pe2m.update_period.php) |
| pe2m.max_generators_per_poll  | [Table of Contents](index.php) |  pe2m.update_period |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)