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

| ec_log_trace |
| [Prev](executable.ec_lic.php)  | 11.2. Executable Commands |  [Next](executable.ec_md5passwd.php) |

<a name="executable.ec_log_trace"></a>
## Name

ec_log_trace — parse Momentum log files

## Synopsis

`/opt/ecelerity/bin/ec_log_trace` [ - ]

`/opt/ecelerity/bin/ec_log_trace` [ --binding=*`name`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --binding-regex=*`regex`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --count ]

`/opt/ecelerity/bin/ec_log_trace` [ --date ]

`/opt/ecelerity/bin/ec_log_trace` [ --dst-ip=*`IP`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --end=*`date`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --from=*`email_address`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --from-domain=*`domain`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --from-domain-regex=regex ]

`/opt/ecelerity/bin/ec_log_trace` [ --from-regex=*`regex`* ]

`/opt/ecelerity/bin/ec_log_trace` [ -h or --help ]

`/opt/ecelerity/bin/ec_log_trace` [ --id=*`message_id`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --in or --reception ]

`/opt/ecelerity/bin/ec_log_trace` [ *`logfile(s)`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --main ]

`/opt/ecelerity/bin/ec_log_trace` [ --out or --delivery ]

`/opt/ecelerity/bin/ec_log_trace` [ --output=*`file`* [ --append ] ]

`/opt/ecelerity/bin/ec_log_trace` [ --perm or --permanent ]

`/opt/ecelerity/bin/ec_log_trace` [ --regex ]

`/opt/ecelerity/bin/ec_log_trace` [ --to=*`email_address`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --to-domain=*`domain`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --to-domain-regex=regex ]

`/opt/ecelerity/bin/ec_log_trace` [ --to-regex=regex ]

`/opt/ecelerity/bin/ec_log_trace` [ --tran or --transient ]

`/opt/ecelerity/bin/ec_log_trace` [ --src-ip=*`IP`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --src-ip-regex=*`regex`* ]

`/opt/ecelerity/bin/ec_log_trace` [ --start=*`date`* ]

`/opt/ecelerity/bin/ec_log_trace` [ -v or --verbose ]

`/opt/ecelerity/bin/ec_log_trace` [ --vctx-conn=key[=`value`] ]

`/opt/ecelerity/bin/ec_log_trace` [ --vctx-conn-regex=key[=`value`] ]

`/opt/ecelerity/bin/ec_log_trace` [ --vctx-mess=key[=`value`] ]

`/opt/ecelerity/bin/ec_log_trace` [ --vctx-mess-regex=key[=`value`] ]

`/opt/ecelerity/bin/ec_log_trace` [ --xml ]

<a name="idp7790448"></a>
## Description

**Configuration Change. ** This feature was introduced in Momentum 2.1.1.

**ec_log_trace** parses Momentum log files and prints out the contents in human-readable format. It can also find log lines matching certain requirements. Log files can be any number and combination of eclogger-formatted files, uncompressed or bzipped, supplied as command line arguments. If no log file is specified, the `mainlog.ec` and `rejectlog.ec` files at the default location are processed along with the rotated mainlog and rejectlog files.

Options `--date`, `--xml`, `-v`, `-`, `--output` and `--append` can be used when parsing `rejectlog.ec` and its rotated files. Other options are currently only for `mainlog.ec` and its rotated files.

Usage of the options:

<dl class="variablelist">

<dt>-</dt>

<dd>

Use `STDIN` as input for parsing.

</dd>

<dt>--count</dt>

<dd>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Show only the number of log records satisfying specified options.

</dd>

<dt>--date</dt>

<dd>

Print date and time instead of epoch seconds in the log. For example `1268402398` becomes `Fri Mar 12 08:59:58 2010`.

</dd>

<dt>--end=*`date`*</dt>

<dd>

Show log records before the end date (inclusive). `date` can be epoch seconds or in the format of "MMM DD HH:MM:SS YYYY". For example, date can be 1123456789, "Sep 12 18:12:21 2006" or "09 12 18:12:21 2006".

</dd>

<dt>--from=*`address`*</dt>

<dd>

Show only reception log records where the envelope sender is the specified address.

</dd>

<dt>--from-domain=*`domain`*</dt>

<dd>

Show only reception log records where the envelope sender's domain is the specified domain.

</dd>

<dt>--from-domain-regex=*`domain`*</dt>

<dd>

Show only reception log records where the envelope sender's domain is the regex domain.

</dd>

<dt>--from-regex=*`address`*</dt>

<dd>

Show only reception log records where the envelope sender is the specified regular expression.

</dd>

<dt>-h</dt>

<dd>

Show a help message.

</dd>

<dt>--in | --reception</dt>

<dd>

Show reception log records.

</dd>

<dt>--out | --delivery</dt>

<dd>

Show delivery log records.

</dd>

<dt>--output=*`file`* [--append]</dt>

<dd>

Print results to `file` instead of `STDOUT`. Using the optional `--append` mode, appends to an existing file.

</dd>

<dt>--perm</dt>

<dd>

Show permanent failure log records. If this is used with `-v`, Reception time, From: and To: address of a message that is permanently failed will be printed, as well as the failure message.

</dd>

<dt>--start=*`date`*</dt>

<dd>

Show log records after the start date (inclusive). `date` can be epoch seconds or in the format of "MMM DD HH:MM:SS YYYY". For example, date can be 1123456789, "Sep 12 01:12:21 2006" or "09 12 18:21:21 2006".

### Note

Currently you cannot specify a start date in the format "MMM DD HH:MM:SS YYYY". Use Unix epoch seconds. You can use the **date** shell command to convert a string to Unix epoch seconds.

</dd>

<dt>--to=*`address`*</dt>

<dd>

Show only reception log records where the recipient is the specified address.

</dd>

<dt>--to-domain=*`domain`*</dt>

<dd>

Show log records where the recipient's domain is the specified domain.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

You can specify `--to-domain` options multiple times.

</dd>

<dt>--to-domain-regex=*`domain`*</dt>

<dd>

Show log records where the recipient's domain is the regex domain.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

</dd>

<dt>--to-regex=*`address`*</dt>

<dd>

Show only reception log records where the recipient is the regex address.

</dd>

<dt>--tran</dt>

<dd>

Show transient failure log records.

</dd>

<dt>-v | --verbose</dt>

<dd>

For `rejectlog.ec`, print detailed information. For `mainlog.ec`, print all log information grouped by message id.

</dd>

<dt>--xml</dt>

<dd>

Print output in XML format.

</dd>

</dl>

| [Prev](executable.ec_lic.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_md5passwd.php) |
| ec_lic  | [Table of Contents](index.php) |  ec_md5passwd |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)