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

| pe2-clicktracker |
| [Prev](mclog_loader.php)  | Chapter 8. Message Central Commands |  [Next](mcbatch.php) |

<a name="mc-clicktracker"></a>
## Name

pe2-clicktracker — run the clicktracker

## Synopsis

`/opt/msys/pe2/sbin/pe2-clicktracker` [ -c *`integer`* ] [ -r ] [ -d ] [ -f *`/path/to/config/file`* ]

<a name="idp2293424"></a>
## Description

The pe2-clicktracker command controls the clicktracker and is typically run on start up by the initialization script, **/etc/init.d/pe2clickctl**. Normally clicktracker is run in debug mode using this command. It has the following options:

<dl class="variablelist">

<dt>-c</dt>

<dd>

This option takes an integer as an argument and this integer indicates the interval at which **apply_logs** should be run. The default value is `5`.

</dd>

<dt>-r</dt>

<dd>

This option runs the **recreate_db** command, which recreates the cache table, and then exits.

</dd>

<dt>-d</dt>

<dd>

Run in the foreground for debugging purposes.

</dd>

<dt>-f</dt>

<dd>

Set the path to the `pe2.conf` file

</dd>

</dl>

### Note

This command (and **/etc/init.d/pe2clickctl**) should always be run as the user `ecuser`. Otherwise Message Central may not be able to consume the jlogs. If this command has been run as another user, as root for example, you must change the ownership of the files in `/var/log/pe2-webui/clicktrack/jlog` to `ecuser` before the clicktracker process can be restarted.

<a name="idp2308480"></a>
## See Also

[Section 1.7, “Services”](mc-start-services.php "1.7. Services"), [clicktrack_cache](conf.clicktrack_cache.php "clicktrack_cache"), [clicktrack_decouple](conf.clicktrack_decouple.php "clicktrack_decouple"), [clicktrack_errors](conf.clicktrack_errors.php "clicktrack_errors")

| [Prev](mclog_loader.php)  | [Up](executable-commands.php) |  [Next](mcbatch.php) |
| mclog_loader  | [Table of Contents](index.php) |  pe2batch |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)