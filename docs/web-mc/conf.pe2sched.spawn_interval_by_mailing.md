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

| pe2sched.spawn_interval_by_mailing |
| [Prev](conf.pe2sched.spawn_interval_by_client.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.perl.lib_dir.php) |

<a name="conf.pe2sched.spawn_interval_by_mailing"></a>
## Name

pe2sched.spawn_interval_by_mailing — how often the manager will launch a generator to work on a mailing

## Synopsis

`pe2sched.spawn_interval_by_mailing = 60`

<a name="idp2174560"></a>
## Description

This option determines how often the manager will launch a generator to work on a mailing. Message Central will not work on a mailing if any one of the generators has worked on that mailing within the period specified by this option. This option ensures that all mailings have an equal opportunity to execute.

The default value for this option is `60` (seconds). If you wish to run different mailings more frequently, change the setting of this option.

When using this option be aware of the value of [pe2sched.max_generator_limit](conf.pe2sched.max_generator_limit.php "pe2sched.max_generator_limit"). For example, if `pe2sched.spawn_interval_by_mailing` is left at its default setting and `pe2sched.max_generator_limit` is set to a value of `4`, and you initiate an immediate mailing to a million recipients, you will not reap the benefits of multiple generators. For 240 seconds (`pe2sched.spawn_interval_by_mailing` x `pe2sched.max_generator_limit`) no new generators will be created unless the mailing completes.

With API-triggered mailings, triggers are fired in batches of 10 so you can safely lower `pe2sched.spawn_interval_by_mailing` to a value of about `15`. Depending upon the size of the mailing, if you don't lower the value of `pe2sched.spawn_interval_by_mailing` then the first batch may be handled by a generator and send out immediately, while the second batch *may not*     be handled by any generator until the full 60 seconds later.

<a name="idp2184000"></a>
## See Also

[pe2sched.max_generator_limit](conf.pe2sched.max_generator_limit.php "pe2sched.max_generator_limit")

| [Prev](conf.pe2sched.spawn_interval_by_client.php)  | [Up](mc.conf.php) |  [Next](conf.perl.lib_dir.php) |
| pe2sched.spawn_interval_by_client  | [Table of Contents](index.php) |  perl.lib_dir |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)