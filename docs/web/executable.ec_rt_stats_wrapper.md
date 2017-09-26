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

| ec_rt_stats_wrapper |
| [Prev](executable.ec_rt_stats.php)  | 11.2. Executable Commands |  [Next](executable.ec_running.php) |

<a name="executable.ec_rt_stats_wrapper"></a>
## Name

ec_rt_stats_wrapper — a wrapper for the ec_rt_stats script

## Synopsis

`/opt/ecelerity/bin/ec_rt_stats_wrapper` [ --help | -h ] [ --config=*`config file`*       ] [ -c *`config file`*       ]

<a name="idp8092992"></a>
## Description

**ec_rt_stats_wrapper** is a wrapper for the **ec_rt_stats** script. Instead of specifying options at the command line, this command uses the options specified in the configuration file.

**Configuration Change. ** This feature is discontinued in version 3.0.

It has the following options:

<dl class="variablelist">

<dt>--help or -h</dt>

<dd>

Display a help message.

</dd>

<dt>--config=*`/path/to/file`*</dt>

<dd>

Specify the configuration file containing the `ec_rt_stats` settings.

</dd>

<dt>-c *`/path/to/file`*</dt>

<dd>

Specify the configuration file containing the `ec_rt_stats` settings.

</dd>

</dl>

By default the configuration options for **ec_rt_stats_wrapper** are found in the `/opt/ecelerity/etc/ec_rotate.conf` file. For more information see [the section called “The `ec_rotate.conf` File”](executable.ec_rotate.php#ec_rotate.conf "The ec_rotate.conf File").

| [Prev](executable.ec_rt_stats.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_running.php) |
| ec_rt_stats  | [Table of Contents](index.php) |  ec_running |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)