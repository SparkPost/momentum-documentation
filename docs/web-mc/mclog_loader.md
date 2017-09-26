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

| mclog_loader |
| [Prev](load_contacts_db.php)  | Chapter 8. Message Central Commands |  [Next](mc-clicktracker.php) |

<a name="mclog_loader"></a>
## Name

/opt/msys/ecelerity/sbin/mclog_loader — process the mc_logger files

## Synopsis

`/opt/msys/pe2/sbin/mclog_loader` [ --batchsize *`128`* ]

`/opt/msys/pe2/sbin/mclog_loader` [ --cfgfile *`/opt/msys/pe2/etc/mclog_loader.conf`* ]

`/opt/msys/pe2/sbin/mclog_loader` [ --error_log *`/var/log/ecelerity/mclog_loader.err`* ]

`/opt/msys/pe2/sbin/mclog_loader` [ --help ]

`/opt/msys/pe2/sbin/mclog_loader` [ --mclog *`/var/log/ecelerity/mc_log.rt`* ]

`/opt/msys/pe2/sbin/mclog_loader` [ --pidfile *`/var/run/ecelerity/mclog_loader.pid`* ]

`/opt/msys/pe2/sbin/mclog_loader` [ --subscriber *`mclog_loader`* ]

`/opt/msys/pe2/sbin/mclog_loader` [ --verbose ]

<a name="idp2250176"></a>
## Description

This script reads the files created by the `logfile` option of the mc_logger module. The default value for this option is `"jlog://var/log/ecelerity/mc_logg.rt=>mclog_loader"`. **mclog_loader** loads the events found in this file into the database. Ordinarily, you will not need to invoke this command directly. On installation it is started up as the `mclogloader` service by the initialization script `/etc/init.d/mclogloader`.

### Note

This script replaces the pe2batch script and is available as of version 3.7.

If the mclog_loader process encounters any issues, such as failure to start, review the contents of the `/var/log/pe2/gimli_mclog_loader.log` file.

The options used with this command are as follows.

<dl class="variablelist">

<dt>--batchsize | -b *`128`*</dt>

<dd>

Set the window size for each batch. The default value for this option is `128`.

</dd>

<dt>--cfgfile | -c *`/path/to/config/file`*</dt>

<dd>

Specify the complete path to the configuration file. The default value is `/opt/msys/pe2/etc/mclog_loader.conf`.

</dd>

<dt>--error_log | e *`/path/to/error/log`*</dt>

<dd>

The absolute path to the file that records database insertion failures. The default value is `/var/log/ecelerity/mclog_loader.err`.

</dd>

<dt>--help | -h</dt>

<dd>

Display the options available for this command.

</dd>

<dt>--mclog *`/path/to/log/file`*</dt>

<dd>

The path to the jlog file that records insertions. The default value is `/var/log/ecelerity/mc_log.rt`.

### Warning

Changing the value of this option is not recommended. If you specify a log file other than the default, you must update the mc_logger stanza in the `ecelerity_logger.conf` file and restart ecelerity.

</dd>

<dt>--pidfile | -p *`/pat/to/pid/file`*</dt>

<dd>

The process ID of the mclog_loader script. The default value for this option is `/var/run/ecelerity/mclog_loader.pid`.

</dd>

<dt>--subscriber *`name`*</dt>

<dd>

The name of the jlog subscriber. The default value for this option is `mclog_loader`.

### Warning

Changing the value of this option is not recommended. If you specify a subscriber other than the default, you must update the mc_logger stanza in the `ecelerity_logger.conf` file and restart ecelerity.

</dd>

<dt>--verbose | v</dt>

<dd>

Display verbose output.

</dd>

</dl>

<a name="idp2281056"></a>
## See Also

[Section 1.6.1, “The mc_logger Module”](mc-mtas.php#mc.mc_logger "1.6.1. The mc_logger Module")

| [Prev](load_contacts_db.php)  | [Up](executable-commands.php) |  [Next](mc-clicktracker.php) |
| load_contacts_db.pl  | [Table of Contents](index.php) |  pe2-clicktracker |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)