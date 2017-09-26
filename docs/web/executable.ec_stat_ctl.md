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

| ec_stat_ctl |
| [Prev](executable.ec_spp.php)  | 11.2. Executable Commands |  [Next](executable.ec_stat_watcher.php) |

<a name="executable.ec_stat_ctl"></a>
## Name

ec_stat_ctl — control ec_stat_watcher and ec_rrdd

## Synopsis

`/opt/ecelerity/bin/ec_stat_ctl` [ start | stop | [ --help | -h ] | [ --version | -V ] | [ -l ] | [ -rl ]
| [ -c *`config file`*       ]
| [ -n *`nodename`* ]
| [ --add-node *`node = IP`*       ]
| [ --add-domain *`domain`* ]
| [ --delete-domain *`domain`* ]
| [ --add-binding *`binding`* ]
| [ --delete-binding *`binding`* ]]

<a name="idp8239264"></a>
## Description

**ec_stat_ctl** can be used to start or stop ec_stat_watcher and ec_rrdd. **ec_stat_ctl** can also add or delete the domains and bindings in the watch list.

**Configuration Change. ** This feature is discontinued in version 3.0.

It has the following options:

<dl class="variablelist">

<dt>start</dt>

<dd>

Start both ec_stat_watcher and ec_rrdd.

</dd>

<dt>stop</dt>

<dd>

Stop both ec_stat_watcher and ec_rrdd.

</dd>

<dt>--help or -h</dt>

<dd>

Show a help message.

</dd>

<dt>--version or -V</dt>

<dd>

Show version information of the script.

</dd>

<dt>-c=*`config file`* </dt>

<dd>

Specify a configuration file for **ec_stat_watcher**. If not specified, the default `ec_stat_watcher.conf` will be used.

</dd>

<dt>-l</dt>

<dd>

List current watches.

</dd>

<dt>-rl</dt>

<dd>

List current watches (raw).

</dd>

<dt>-n *`nodename`*</dt>

<dd>

Specify node name if it is different with the output of **uname**.

</dd>

<dt>--add-node *`nodename = IP`* </dt>

<dd>

Add a node to the watch list. for example, `--add-node node-a = 10.80.116.126`.

</dd>

<dt>--add-domain *`domain`*</dt>

<dd>

Add a domain to the watch list.

</dd>

<dt>--delete-domain *`domain`*</dt>

<dd>

Delete a domain from the watch list.

</dd>

<dt>--add-binding *`binding`*</dt>

<dd>

Add a binding to the watch list.

</dd>

<dt>--add-domain *`domain`*</dt>

<dd>

Delete a binding from the watch list.

</dd>

</dl>

| [Prev](executable.ec_spp.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_stat_watcher.php) |
| ec_spp  | [Table of Contents](index.php) |  ec_stat_watcher |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)