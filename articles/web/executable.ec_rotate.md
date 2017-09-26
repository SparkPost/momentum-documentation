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

| ec_rotate |
| [Prev](executable.ec_md5passwd.php)  | 11.2. Executable Commands |  [Next](executable.ec_rrdd.php) |

<a name="executable.ec_rotate"></a>
## Name

ec_rotate — rotate Momentum ec_logger log files

## Synopsis

`/opt/ecelerity/bin/ec_rotate` [ -c | -compress ]

`/opt/ecelerity/bin/ec_rotate` [ -conf *`/path/to/config_file`* ]

`/opt/ecelerity/bin/ec_rotate` [ -d | -default ]

`/opt/ecelerity/bin/ec_rotate` [ -l | -logfile *`/path/to/logfile`* ]

`/opt/ecelerity/bin/ec_rotate` [ -logdir *`/path/to/dir`* ]

`/opt/ecelerity/bin/ec_rotate` [ -n | -nocompress ]

`/opt/ecelerity/bin/ec_rotate` [ -r | -retention *`number`* ]

`/opt/ecelerity/bin/ec_rotate` [ -s | -socket *`/path/to/socket`* ]

`/opt/ecelerity/bin/ec_rotate` [ -v ]

<a name="idp7923920"></a>
## Description

**ec_rotate** will rotate and compress logs for you. The number of previous days logs to keep can be set. The **ec_rotate** command is typically run daily as a cron job from `/etc/cron.d/msys-ecelerity` (on Solaris look in `/var/spool/cron/crontabs/root`).

Momentum opens its logfiles at startup and maintains an open filehandle to them throughout its life cycle. When you invoke **ec_rotate**, the `mainlog.ec` file is moved to `mainlog.ec.1`, Momentum is instructed to re-open its logfiles and a new `mainlog.ec` file is created. Any other log files configured for rotation are treated in the same way. Unix file I/O semantics guarantee that no log lines will be lost between the time the file is moved and the logs are re-opened; they will simply appear in the older of the logs. To avoid the overhead of checking the logfile on every attempt, Momentum relies on the user to tell it when the logfile needs to be re-opened.

By default, **ec_rotate** controls log file rotation for the following files:

*   `/var/log/ecelerity/mainlog.ec`

*   `/var/log/ecelerity/paniclog.ec`

*   `/var/log/ecelerity/rejectlog.ec`

*   `/var/log/ecelerity/bouncelog.ec`

*   `/var/log/ecelerity/acctlog.ec`

**ec_rotate** also compresses these files using bzip, and keeps seven days of logs on disk. You can modify this behavior using the following options:

<dl class="variablelist">

<dt>-c, -compress *`/path/to/utility`*</dt>

<dd>

Specify the full path to the compression utility to use for compressing logfiles. The default is `/usr/bin/bzip2` but `/usr/bin/gzip` can also be used.

</dd>

<dt>-conf *`/path/to/file`*</dt>

<dd>

Specify a configuration file for **ec_rotate** to use. The configuration file should be like the following:

```
enabled = yes
logfiles = /var/log/ecelerity/mainlog.ec \
           /var/log/ecelerity/paniclog.ec \
           /var/log/ecelerity/rejectlog.ec \
           /var/log/ecelerity/bouncelog.ec
```

`enabled` can be either `yes` or `no`. Log files to be rotated can be specified using the `logfiles` option. Log file names should be on one line and separated by space and the log file names should not contain spaces. If `enabled` equals `yes`, only log files specified at `logfiles` will be rotated. If `enabled` equals `no`, no logs will be rotated.

</dd>

<dt>-d, -default</dt>

<dd>

If this option is specified, the script will first try to find the configuration file at `/opt/ecelerity/etc/ec_rotate.conf` . If this file exists, it will use it as the configuration file. This has the same effects as `-conf /opt/ecelerity/etc/ec_rotate.conf` . Otherwise, files at their default locations will be rotated. For more information about the `ec_rotate.conf` file see [the section called “The `ec_rotate.conf` File”](executable.ec_rotate.php#ec_rotate.conf "The ec_rotate.conf File").

### Note

Momentum is no longer supported on Windows.

</dd>

<dt>-l, -logfile *`/path/to/file`*</dt>

<dd>

Specify the logfile(s) to be rotated. May be specified multiple times to handle multiple logs. Logs generated by any of the Momentum's logging modules can be specified for rotation using this option.

</dd>

<dt>-n, -nocompress</dt>

<dd>

Do not compress files while rotating.

</dd>

<dt>-r, -retention *`number`*</dt>

<dd>

Specify the maximum number of logs to keep on disk. The default is `7`.

If you only want to keep files for three days, you would use:

```
shell> sudo /opt/ecelerity/bin/ec_rotate \
  -l /var/log/ecelerity/mainlog.ec \
  -l /var/log/ecelerity/paniclog.ec \
  -l /var/log/ecelerity/rejectclog.ec \
  -l /var/log/ecelerity/bouncelog.ec \
  -r 3
```
</dd>

</dl>

<a name="ec_rotate.conf"></a>
## The `ec_rotate.conf` File

The `ec_rotate.conf` file is the configuration file for the rotate, and the RT Stats scripts. It is intended to provide a complete configuration location so that settings can be more easily retained. It is found in the `/opt/ecelerity/etc` directory.

<a name="idp7968512"></a>
## Comments and Whitespace

In common with many other Unix configuration files, the `ec_rotate.conf` file uses the `#` (commonly referred to as "hash", "pound" or "octothorpe") symbol to introduce a single line comment. Whitespace is unimportant in the various configuration stanza; feel free to pad the whitespace as you see fit for maximum readability.

<a name="idp7971280"></a>
## Options

The options `enabled`, `rt_stats_enabled` and `stats_enabled` all enable or disable their respective scripts. Refer to the following for explanations of the options specific to them. [ec_rotate](executable.ec_rotate.php "ec_rotate"), [ec_stats](executable.ec_stats.php "ec_stats"), [ec_rt_stats](executable.ec_rt_stats.php "ec_rt_stats"),

<a name="idp7976288"></a>
## Example ec_rotate.conf file

```
# ec_rotate specific information
enabled=yes

# The list of logfiles to rotate
logfiles =  /var/log/ecelerity/mainlog.ec \
            /var/log/ecelerity/paniclog.ec \
            /var/log/ecelerity/rejectlog.ec \
            /var/log/ecelerity/bouncelog.ec

# ec_rt_stats specific information
rt_stats_enabled = yes
rt_stats_mainlog = jlog:///var/log/ecelerity/mainlog.rt
rt_stats_rejectlog = jlog:///var/log/ecelerity/rejectlog.rt
rt_stats_bouncelog = jlog:///var/log/ecelerity/bouncelog.rt
rt_stats_num_domains = 10
rt_stats_dml_output_file =
rt_stats_time_window_size = 30
rt_stats_show_progress = no
rt_stats_verbose = no
rt_stats_alternate_pid =
rt_stats_user =

# stats specific information
stats_enabled = yes
stats_num_domains = 10
stats_max_lines = 100
stats_progress = no
stats_verbose = no
stats_noxml = yes
stats_logfile = /var/log/ecelerity/mainlog.ec
stats_bounce_log_file = /var/log/ecelerity/bouncelog.ec
stats_reject_log_file = /var/log/ecelerity/rejectlog.ec
```

The blank options in the above file act the same as not passing the option in to the script.

| [Prev](executable.ec_md5passwd.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_rrdd.php) |
| ec_md5passwd  | [Table of Contents](index.php) |  ec_rrdd |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)