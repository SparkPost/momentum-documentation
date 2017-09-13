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

| mbusd_monitor |
| [Prev](executable.mbusd.php)  | 11.2. Executable Commands |  [Next](executable.migrate_regex_binding2.php) |

<a name="executable.mbusd_monitor"></a>
## Name

mbusd_monitor — Momentum cluster messaging bus monitor

## Synopsis

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -b *`cluster.boot file`*       ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -c *`mbus config file`*              ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -d ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -e *`ecelerity config file`*              ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -h ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -l *`log file`*       ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ --loglevel *`num`* ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -m *`mbus binary`*         ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -n *`nodename`* ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -p *`pid file`*       ]

`/opt/msys/ecelerity/bin/mbusd_monitor` [ -q ]

`/opt/msys/ecelerity/bin/mbusd_monitor` { start | stop | restart }

<a name="idp14806112"></a>
## Description

**mbusd_monitor** is responsible for launching and stopping **mbusd**.

**Configuration Change. ** As of version 3.4, cluster communication is handled by the msgc modules rather than by mbus. For more information see [Section 14.47, “msgc – Modules”](modules.msgc.php "14.47. msgc – Modules").

Available options:

<dl class="variablelist">

<dt>-b `cluster.boot`</dt>

<dd>

Path to an alternate `cluster.boot` file.

</dd>

<dt>-c `file`</dt>

<dd>

Path to mbus configuration file. If unspecified, **mbusd_monitor** will search for mbus.conf in the following locations: `/opt/msys/ecelerity/etc`, `/opt/msys/ecelerity/etc/conf/global`, `/opt/msys/ecelerity/etc/conf/NODENAME`, and `/opt/msys/ecelerity/etc/conf/default` where NODENAME is the hostname of the local machine.

</dd>

<dt>-d</dt>

<dd>

Do not daemonize.

</dd>

<dt>-e `file`</dt>

<dd>

Path to ecelerity configuration file. Defaults to `/opt/ecelerity/etc/ecelerity.conf`.

</dd>

<dt>-h</dt>

<dd>

Display usage information.

</dd>

<dt>-l `file`</dt>

<dd>

Logfile to use. Defaults to /var/log/ecelerity/mbusd.log

</dd>

<dt>--loglevel `num`</dt>

<dd>

Log verbosity level. Valid values are 0-4, with 4 being the most verbose. Default is 1.

</dd>

<dt>-m `file`</dt>

<dd>

Path to mbus executable. Defaults to /opt/msys/ecelerity/3rdParty/sbin/spread

</dd>

<dt>-n `name`</dt>

<dd>

Nodename to use instead of the value of the **hostname** command.

</dd>

<dt>-p `pid file`</dt>

<dd>

File to store the process ID in instead of `/var/run/mbusd_monitor.pid`.

</dd>

<dt>-q</dt>

<dd>

**Configuration Change. ** As of version 3.0.13, the `-q` option is no longer used. To stop, start or restart the messaging bus monitor issue the command **`mbusd_monitor { stop | restart | start}`**                           .

Enables quiet mode which disables logging to the console.

</dd>

</dl>

<a name="idp14841856"></a>
## See Also

[mbusd](executable.mbusd.php "mbusd"), [mbus.conf](mbus.conf.php "mbus.conf")

| [Prev](executable.mbusd.php)  | [Up](exe.commands.details.php) |  [Next](executable.migrate_regex_binding2.php) |
| mbusd  | [Table of Contents](index.php) |  migrate_regex_binding2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)