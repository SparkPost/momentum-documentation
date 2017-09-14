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

| ec_stats |
| [Prev](executable.ec_stat_watcher.php)  | 11.2. Executable Commands |  [Next](executable.eccluster_pull_config.php) |

<a name="executable.ec_stats"></a>
## Name

ec_stats — analyze Momentum logs and generate reports (deprecated)

## Synopsis

`ec_stats` [ -c *`ec_rotate.conf`* ] [ -h ] [ -v ] [ -p ] [ -m *`lines`* ] [ -n *`domains`* ] [ -l *`mainlog`* ] [ -r *`rejectlog`* ] [ -b *`bouncelog`* ] [ --noxml ]

<a name="idp8320752"></a>
## Description

### Note

This command is deprecated and has been replaced by **ec_rt_stats2**. As of Momentum version 3.0, it will no longer be available.

`ec_stats` performs statistical analysis on your mainlog.ec files. `ec_stats` provides a very large amount of information regarding the volume and delivery performance of mail transiting the system.

The report contains data:

*   Total number and size of receptions, deliveries and failures.

*   Minimum, maximum and average message size.

*   Breakdown of messages by size for successful and failed attempts.

*   Breakdown of deliveries by delivery time.

*   Top domains by traffic.

*   Top domains by delivery time.

*   Breakdown of failure rejection causes by classification.

*   Detailed report on top X failed domains.

To generate the report on the current (active) logfile, you run the following command:

`$ sudo /opt/ecelerity/bin/ec_stats`

By default, `ec_stats` produces plain-text output to stdout and writes an XML file in `/var/log/ecelerity/reports/`.

Additionally the following options are available and can either be passed in via the script invocation or placed in `ec_rotate.conf` as explained below.

<dl class="variablelist">

<dt>-h | -help</dt>

<dd>

An online help message.

</dd>

<dt>-c</dt>

<dd>

Specify usage of the `ec_rotate.conf` file to draw option information from.

</dd>

<dt>-v | -verbose</dt>

<dd>

Output in verbose mode. In the `ec_rotate.conf` file this is equivalent to setting stats_verbose = yes.

</dd>

<dt>-p | -progress</dt>

<dd>

Show progress status. In `ec_rotate.conf` this is equivalent to setting stats_progress = yes.

</dd>

<dt>-m | -maxlines</dt>

<dd>

Specify the maximum lines in each logfile for analysis. In `ec_rotate.conf` this is equivalent to stats_max_lines = value.

</dd>

<dt>-n | -numdomains</dt>

<dd>

Specify the maximum domains for analysis. In `ec_rotate.conf` this is equivalent to stats_num_domains = value.

</dd>

<dt>-l | -logfile</dt>

<dd>

Specify the main log file on which to run. Default value is `/var/log/ecelerity/mainlog.ec`. In `ec_rotate.conf` this is equivalent to setting stats_logfile = value.

</dd>

<dt>-r | -rejects</dt>

<dd>

Specify the reject log file on which to run. Default value is `/var/log/ecelerity/rejectlog.ec`. In `ec_rotate.conf` this is equivalent to setting stats_reject_log_file = value.

</dd>

<dt>-b | -bouncefile</dt>

<dd>

Specify the bounce log file on which to run. Default value is `/var/log/ecelerity/bouncelog.ec`. In `ec_rotate.conf` this is equivalent to setting stats_bounce_log_file = value.

</dd>

<dt>--noxml</dt>

<dd>

Do not produce XML output in /var/log/ecelerity/reports/. Prints plain-text output to stdout. In `ec_rotate.conf` this is equivalent to setting stats_noxml = yes.

</dd>

</dl>

| [Prev](executable.ec_stat_watcher.php)  | [Up](exe.commands.details.php) |  [Next](executable.eccluster_pull_config.php) |
| ec_stat_watcher  | [Table of Contents](index.php) |  eccluster_pull_config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)