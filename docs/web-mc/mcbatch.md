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

| pe2batch |
| [Prev](mc-clicktracker.php)  | Chapter 8. Message Central Commands |  [Next](mcg.php) |

<a name="mcbatch"></a>
## Name

/opt/msys/pe2/sbin/pe2batch — process the pe2_logger files

## Synopsis

`/opt/msys/pe2/sbin/pe2batch` [ --config *`/path/to/other/config/file`* ] [ --save_dir *`/path/to/successful/bulk/insert/logs`* ] [ --error_dir *`/path/to/unsuccessful/bulk/insert/logs`* ] [ --debug ]

<a name="idp2323616"></a>
## Description

This script reads the files created by the pe2_logger module of the inbound and outbound MTAs and loads them into the database. Typically this script file is not invoked directly but run as the cron job, `/etc/cron.d/pe2batch`.

**Configuration Change. ** This script is deprecated as of version 3.7.

The log file that records the activity of this command is `/var/log/pe2/pe2batch.log`.

<dl class="variablelist">

<dt>--config</dt>

<dd>

Usually the path to an alternative configuration file. The default value is `/opt/msys/pe2/etc/pe2batch.conf`.

</dd>

<dt>--save_dir</dt>

<dd>

The path to the file that records successful batch insertions. The default value is `/var/log/pe2/batch.saved`.

</dd>

<dt>--error_dir</dt>

<dd>

The path to the file that records unsuccessful batch insertions. The default value is `/var/log/pe2/batch.errors`.

</dd>

<dt>--debug</dt>

<dd>

This option should not normally be used. During troubleshooting Message Systems Support may ask you to enable this option.

</dd>

</dl>

<a name="idp2339184"></a>
## See Also

[Chapter 5, *Processing the `mc_logger` Log Files*](mc-processing-log-files.php "Chapter 5. Processing the mc_logger Log Files") 

| [Prev](mc-clicktracker.php)  | [Up](executable-commands.php) |  [Next](mcg.php) |
| pe2-clicktracker  | [Table of Contents](index.php) |  pe2g |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)