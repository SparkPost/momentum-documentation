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

| ad_summary |
| [Prev](exec.cmds.ref.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.create_ssl_cert.php) |

<a name="executable.ad_summary"></a>
## Name

ad_summary — summarize the adaptive module actions

## Synopsis

`/opt/msys/ecelerity/bin/ad_summary` [ --adlogdir [*`/path/to/adaptive/log/dir/`*] ]

`/opt/msys/ecelerity/bin/ad_summary` [ --bouncelog [*`/path/to/bouncelog`*] ]

`/opt/msys/ecelerity/bin/ad_summary` [ --help ]

`/opt/msys/ecelerity/bin/ad_summary` [ --mailfrom *`addr`* ]

`/opt/msys/ecelerity/bin/ad_summary` [ --mailhost *`hostname`*[:port] ]

`/opt/msys/ecelerity/bin/ad_summary` [ --mailto *`addr`* ]

`/opt/msys/ecelerity/bin/ad_summary` [ --mainlog [*`/path/to/mainlog`*] ]

`/opt/msys/ecelerity/bin/ad_summary` [ --num_bindings [*`num`*] ]

`/opt/msys/ecelerity/bin/ad_summary` [ --num_domains [*`num`*] ]

`/opt/msys/ecelerity/bin/ad_summary` [ --paniclog [*`/path/to/paniclog`*] ]

<a name="idp14085584"></a>
## Description

The **ad_summary** script creates a summary of the contents of the `paniclog` and `mainlog` file, including adjustments made by Adaptive Delivery. When the adaptive module is installed, an entry that runs **ad_summary** is added to `/etc/cron.d/msys-ecelerity`. This script is run nightly as a cron job and sent via email to the recipient defined by the option `Adaptive_Alert_Email_Destination`. This summary is created regardless of whether alerts have been generated or not. The default format of the compressed summary files is `bzip2` and is controlled by the **ec_rotate** script.

### Note

Adjusting the format of this report by changing the parameters passed to the **ad_summary** script is **not** recommended. Any changes made will be overwritten if the application is upgraded.

This command will not run the first day that a Momentum system is live. As a workaround, first run **ec_rotate**.

The **ad_summary** command creates the log file, `/var/log/ecelerity/adaptive.summary`, and this log should be added to `ec_rotate.conf`. For details, see [Section 34.1, “`ec_rotate.conf` File”](log_rotating.php#conf.ref.ec_rotate.conf "34.1. ec_rotate.conf File").

If you are not using the adaptive module, there is no need to use this script.

<dl class="variablelist">

<dt>--adlogdir [*`/path/to/adaptive/log/dir/`*]</dt>

<dd>

Location of the adaptive log files. The files that are processed vary depending upon the setting of the adaptive option `Split_Logs_By_Binding`.

Default value is `/var/log/ecelerity/adaptive`.

</dd>

<dt>--bouncelog [*`/path/to/bouncelog`*]</dt>

<dd>

Bounce log file to operate on. Default value is `/var/log/ecelerity/mainlog.ec.1.bz2`.

</dd>

<dt>--help</dt>

<dd>

Print the help message.

</dd>

<dt>--mainlog [*`/path/to/mainlog`*]</dt>

<dd>

Main log file to operate on. Default value is `/var/log/ecelerity/mainlog.ec.1.bz2`.

</dd>

<dt>--mailfrom *`addr`*</dt>

<dd>

Use the specified address as the from address when mailing the summary file.

</dd>

<dt>--mailhost *`hostname[:port_number]`*</dt>

<dd>

Connect to the specified hostname to send the summary. Default value is `localhost`. If you are not using port 25, you must specify the port.

</dd>

<dt>--mailto *`addr`*</dt>

<dd>

Send the summary to the specified address which must be an email address of the form *`user`*@*`hostname`*. If no --mailto argument is specified, the summary will be printed to the standard output.

</dd>

<dt>--num_bindings [*`num`*]</dt>

<dd>

Summarize the top number of bindings specified. By default, the top 20 bindings will be summarized.

</dd>

<dt>--num_domains [*`num`*]</dt>

<dd>

Summarize the top number of domains. By default, the top 20 domains will be summarized.

</dd>

<dt>--paniclog [*`/path/to/paniclog`*]</dt>

<dd>

Panic log file to operate on. Default value is `/var/log/ecelerity/paniclog.ec.1.bz2`.

</dd>

</dl>

<a name="idp12904912"></a>
## See Also

[Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery")

| [Prev](exec.cmds.ref.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.create_ssl_cert.php) |
| Chapter 74. Executable Commands Reference  | [Table of Contents](index.php) |  create_ssl_cert |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)