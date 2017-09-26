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

| ec_stat_watcher |
| [Prev](executable.ec_stat_ctl.php)  | 11.2. Executable Commands |  [Next](executable.ec_stats.php) |

<a name="executable.ec_stat_watcher"></a>
## Name

ec_stat_watcher — collect Momentum statistics and send to ec_rrdd

## Synopsis

`/opt/ecelerity/bin/ec_stat_watcher` [ --svc ] [ --stop ] [ -c *`config file`*       ] [ --control *`socket`* ] [ -n *`node name`*       ] [ -d ]

<a name="idp8285264"></a>
## Description

This command is no longer necessary in Momentum 2.2

**ec_stat_watcher** is used to collect and send Momentum statistics to **ec_rrdd**.

It has the following options:

<dl class="variablelist">

<dt>--svc</dt>

<dd>

Run ec_stat_watcher as a Windows service.

### Note

Momentum is no longer supported on Windows.

</dd>

<dt>--stop</dt>

<dd>

Stop ec_stat_watcher.

</dd>

<dt>-n *`node name`* </dt>

<dd>

Specify a node in the cluster to watch. `localhost` will be used by default.

</dd>

<dt>-c *`config file`* </dt>

<dd>

Specify a configuration file for **ec_stat_watcher**. If not specified, the default *`ec_stat_watcher.conf`* will be used.

</dd>

<dt>--control *`socket`*</dt>

<dd>

Specify a socket to connect to a Momentum instance to get statistics. If not specified, Windows systems will use `127.0.0.1:2025` and Unix systems will use `/tmp/2025` by default.

### Note

Momentum is no longer supported on Windows.

</dd>

<dt>-d</dt>

<dd>

Print log information to stderr.

</dd>

</dl>

| [Prev](executable.ec_stat_ctl.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_stats.php) |
| ec_stat_ctl  | [Table of Contents](index.php) |  ec_stats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)