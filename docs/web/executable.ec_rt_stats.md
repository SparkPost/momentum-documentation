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

| ec_rt_stats |
| [Prev](executable.ec_rrdd.php)  | 11.2. Executable Commands |  [Next](executable.ec_rt_stats_wrapper.php) |

<a name="executable.ec_rt_stats"></a>
## Name

ec_rt_stats — analyze Momentum jlogs and generate reports

## Synopsis

`ec_rt_stats` [ -h ] [ -v ] [ -p ] [ -n *`domains`* ] [ -l *`mainlog`* ] [ -r *`rejectlog`* ] [ -b *`bouncelog`* ] [ -D *`DML Output File`*              ] [ -d *`base_dir`* ] [ -c *`c14n_file`* ] [ -e *`modules_dir`* ] [ -w *`Window`* ] [ -u *`user_name`* ]

<a name="idp8023728"></a>
## Description

### Note

This command is deprecated and has been replaced by **ec_rt_stats2**. As of Momentum version 3.0, it will no longer be available.

`ec_rt_stats` performs statistical analysis on your jlog files. `ec_rt_stats` provides a very large amount of information regarding the volume and delivery performance of mail transiting the system. It is also capable of output to a DML-formatted file, and directly into a SQLite database.

The report contains data:

*   Total number and size of receptions, deliveries and failures.

*   Minimum, maximum and average message size.

*   Breakdown of messages by size for successful and failed attempts.

*   Breakdown of deliveries by delivery time.

*   Top domains by traffic.

*   Top domains by delivery time.

*   Breakdown of failure rejection causes by classification.

*   Detailed report on top X failed domains.

ec_rt_stats does realtime statistical analysis on logs and makes this analysis available through the Web UI.

**ec_rt_stats** is run as a cron job and writes SQLite files named *`%Y%m%d.`*sql3 to the directory defined by the `basedir` option, typically `/var/log/ecelerity/rt/`. On Linux **ec_rt_stats** is run from `/etc/cron.d/ecelerity` and on Solaris from root's crontab. **ec_rt_stats** can also write a DML log suitable for reading by the cluster manager. If no logfiles are specified, **ec_rt_stats** will produce no output.

Additionally the following options are available and can be passed in via options in the script invocation or via the `ec_rotate.conf` settings as explained below. If use of `ec_rotate.conf` is desired, you should invoke the ec_rt_stats_wrapper script. For information about `ec_rotate.conf` see [the section called “The `ec_rotate.conf` File”](executable.ec_rotate.php#ec_rotate.conf "The ec_rotate.conf File").

<dl class="variablelist">

<dt>-h</dt>

<dd>

An online help message.

</dd>

<dt>-v</dt>

<dd>

Output in verbose mode. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_verbose = yes.

</dd>

<dt>-p</dt>

<dd>

Show progress status. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_show_progress = yes.

</dd>

<dt>-n</dt>

<dd>

Specify the maximum domains for analysis. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_num_domains = value.

</dd>

<dt>-l</dt>

<dd>

Specify the main log file on which to run. Default value is `/var/log/ecelerity/mainlog.rt`. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_mainlog = value.

</dd>

<dt>-r</dt>

<dd>

Specify the reject log file on which to run. Default value is `/var/log/ecelerity/rejectlog.rt`. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_rejectlog = *`value`*.

</dd>

<dt>-b</dt>

<dd>

Specify the bounce log file on which to run. Default value is `/var/log/ecelerity/bouncelog.rt`. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_bouncelog = *`value`*.

</dd>

<dt>-D</dt>

<dd>

Specify a DML output file to write all information to in DML format. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_dml_output_file = *`value`*.

</dd>

<dt>-d</dt>

<dd>

Specify a base directory for the real time jlog files. The default value is `/var/log/ecelerity/rt`.

</dd>

<dt>-e</dt>

<dd>

Specify a directory for extensions.

</dd>

<dt>-c</dt>

<dd>

Specify a file for bounce reason canonicalizers. This file contains PRCE patterns that are applied to the bounce reason so that the reasons can be normalized and will aggregate well. For example, you may wish to remove specific email addresses and IP addresses. Files should be formatted in the following way:

`/Mail Refused - /\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/Mail Refused - a.b.c.d/`

In this case, IP addresses would be replaced by the expression `a.b.c.d`. You can add any number of patterns and they'll be applied in order. The default value for this option is `/opt/ecelerity/etc/c14n_patterns`.

</dd>

<dt>-w</dt>

<dd>

Set the time window to be considered at one time. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_time_window_size = value. The default value for this option is `900` seconds.

</dd>

<dt>-P</dt>

<dd>

Specify an alternate PID to attach to. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_alternate_pid = value.

</dd>

<dt>-u</dt>

<dd>

Specify an alternate user. In the `ec_rotate.conf` file this is equivalent to setting rt_stats_user = *`user_name`*.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.33.

</dd>

</dl>

| [Prev](executable.ec_rrdd.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_rt_stats_wrapper.php) |
| ec_rrdd  | [Table of Contents](index.php) |  ec_rt_stats_wrapper |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)