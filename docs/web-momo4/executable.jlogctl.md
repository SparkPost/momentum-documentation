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

| jlogctl |
| [Prev](executable.jlog_sanity_check.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.lu_pull.php) |

<a name="executable.jlogctl"></a>
## Name

jlogctl — analyze and maintain jlogs

## Synopsis

`/opt/msys/jlog/bin/jlogctl` [ -a { *`subscriber`* } ] [ -c ] [ -e { *`subscriber`* } ] [ -d ] [ -i ] [ -l ] [ -p { *`subscriber`* } ] [ r ] [ -s ] [ -v ] { *`/path/to/jlog1`* [ ... ] }

<a name="idp13262896"></a>
## Description

Use this command to maintain and analyze jlogs. This command should be run as `ecuser`. The option descriptions are as follows:

<dl class="variablelist">

<dt>-a { *`subscriber`* *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

Add a subscriber to the specified jlog(s).

</dd>

<dt>-c { *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

If there are no pending readers, clean the the specified jlog(s).

</dd>

<dt>-d { *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

Analyze the the specified jlog(s).

</dd>

<dt>-e { *`subscriber`* *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

Remove a subscriber from the specified jlog(s).

</dd>

<dt>-i { *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

List the index information for the specified jlog(s).

</dd>

<dt>-l { *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

List the sizes and the readers for the specified jlog(s).

</dd>

<dt>-p { *`subscriber`* *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

This option shows the next start and end points for reading for the specified jlog for the given subscriber. The present checkpoint and the last write point are also shown.

</dd>

<dt>-r { *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

Analyze and repair the specified jlog(s). This option cannot be used on jlogs that are currently in use.

</dd>

<dt>-s { *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

Show all subscribers for the specified jlog(s).

</dd>

<dt>-v { *`/path/to/jlog1`* [ ... ] }</dt>

<dd>

When used along with another option or options this option provides verbose output.

</dd>

</dl>

<a name="idp12635648"></a>
## See Also

[Section 71.43, “jlog – jlog-Formatted Logging”](modules.jlog.php "71.43. jlog – jlog-Formatted Logging"), [Section 26.5, “Decommissioning a Log Aggregator”](cluster.config.logging.decommissioning.php "26.5. Decommissioning a Log Aggregator")

| [Prev](executable.jlog_sanity_check.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.lu_pull.php) |
| jlog_sanity_check  | [Table of Contents](index.php) |  lu_pull |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)