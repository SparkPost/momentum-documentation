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
| [Prev](executable.mbusd.php)  | 11.2. Executable Commands |  [Next](executable.upgrade-advisor.php) |

<a name="executable.mbusd_monitor"></a>
## Name

mbusd_monitor — Momentum cluster messaging bus monitor

## Synopsis

`/opt/ecelerity/bin/mbusd_monitor`

`/opt/ecelerity/bin/mbusd_monitor` [ -c *`mbus config file`*              ]

`/opt/ecelerity/bin/mbusd_monitor` [ -d ]

`/opt/ecelerity/bin/mbusd_monitor` [ -e *`ecelerity config file`*              ]

`/opt/ecelerity/bin/mbusd_monitor` [ -h ]

`/opt/ecelerity/bin/mbusd_monitor` [ -l *`log file`*       ]

`/opt/ecelerity/bin/mbusd_monitor` [ --loglevel *`num`* ]

`/opt/ecelerity/bin/mbusd_monitor` [ -m *`mbus binary`*         ]

`/opt/ecelerity/bin/mbusd_monitor` [ -n *`nodename`* ]

`/opt/ecelerity/bin/mbusd_monitor` [ -p *`pid file`*       ]

`/opt/ecelerity/bin/mbusd_monitor` [ -q ]

`/opt/ecelerity/bin/mbusd_monitor` { start | stop | restart }

<a name="idp8607840"></a>
## Description

**mbusd_monitor** is responsible for launching and stopping **mbusd**.

Available options:

<dl class="variablelist">

<dt>-c `file`</dt>

<dd>

Path to mbus configuration file. Defaults to /opt/ecelerity/etc/mbus.conf

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

Path to mbus executable. Defaults to /opt/ecelerity/3rdParty/sbin/spread

</dd>

<dt>-n `name`</dt>

<dd>

Nodename to use instead of the value of the **hostname** command.

</dd>

<dt>-p `pid file`</dt>

<dd>

File to store the process ID in instead of `/var/run/mbusd_monitor.pid`.

</dd>

</dl>

<a name="idp8631264"></a>
## See Also

[mbusd](executable.mbusd.php "mbusd"), [mbus.conf](mbus.conf.php "mbus.conf")

| [Prev](executable.mbusd.php)  | [Up](exe.commands.details.php) |  [Next](executable.upgrade-advisor.php) |
| mbusd  | [Table of Contents](index.php) |  upgrade-advisor |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)