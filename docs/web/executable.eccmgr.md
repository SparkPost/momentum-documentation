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

| eccmgr |
| [Prev](executable.eccluster_pull_config.php)  | 11.2. Executable Commands |  [Next](executable.eccmgr_ctl.php) |

<a name="executable.eccmgr"></a>
## Name

eccmgr — Momentum cluster manager

## Synopsis

`/opt/ecelerity/sbin/eccmgr` [ -c *`configfile`* ] [ -g *`group`* ] [ -s *`daemon`* ] [ -n ] [ -v ] [ -e ] [ -D ] [ -d ] [ -V ] [ -x ]

<a name="idp8406736"></a>
## Description

**eccmgr** is the Momentum Cluster Manager. You should use **eccmgr_ctl** to start, stop or restart this process. You can connect to it via **ec_console** to [manage the cluster](cluster.operations.php "7.7. Using the Momentum Cluster Manager").

<dl class="variablelist">

<dt>-c configfile</dt>

<dd>

Use an alternate config file.

</dd>

<dt>-g *`group`*</dt>

<dd>

Specify the cluster group.

</dd>

<dt>-s *`daemon`*</dt>

<dd>

Specify the mbus daemon. This option has been removed as of version 3.4.

</dd>

<dt>-n</dt>

<dd>

Skip locking (flock) files (**NOT RECOMMENDED** ).

</dd>

<dt>-v</dt>

<dd>

Verbose mode.

This option can be used up to four times for increasing levels of verbosity.

</dd>

<dt>-e</dt>

<dd>

Set alternate extensions directory.

</dd>

<dt>-D</dt>

<dd>

Do not daemonize (debug; deprecated, use -d instead).

</dd>

<dt>-d</dt>

<dd>

Run in the foreground, leave stdout, stderr open.

</dd>

<dt>-V</dt>

<dd>

Show version information.

</dd>

<dt>-x</dt>

<dd>

Log mbus errors.

With the introduction of MSGC in version 3.4, this option was removed.

</dd>

</dl>

<a name="idp8430816"></a>
## See Also

[eccmgr_ctl](executable.eccmgr_ctl.php "eccmgr_ctl")

| [Prev](executable.eccluster_pull_config.php)  | [Up](exe.commands.details.php) |  [Next](executable.eccmgr_ctl.php) |
| eccluster_pull_config  | [Table of Contents](index.php) |  eccmgr_ctl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)