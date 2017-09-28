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

| 4.3. Processing clicktracker jlog Files |
| [Prev](mc-clicktracker-logs.php)  | Chapter 4. Clicktracker |  [Next](mc-clicktracker-debug.php) |

## 4.3. Processing clicktracker jlog Files

The pe2-clicktracker processes jlogs as the subscriber `pe2` and loads the jlog files into the Message Central database `pe`. The `clicktrack_jlog` option defines the path to the clicktracker logs and has a default value of `/var/log/pe2-webui/clicktrack/jlog`.

If you wish, you can load the jlog data directly into an external database by reading jlog entries.

On a system where Message Central is installed, look at the documentation of the `/opt/msys/lib/perl5/vendor_perl/5.10.0/x86_64-linux-thread-multi/JLog/Reader.pm` file by issuing the command **`/opt/msys/3rdParty/bin/perldoc JLog::Reader`**              . See also the example given at [Using JLog::Reader](https://support.messagesystems.com/docs/web-ref/modules.jlog.php#modules.jlog.reader).

Each jlog entry is made up of the following fields:

*   Message Central version number

*   linktype (see [Link Types](https://support.messagesystems.com/docs/web-mc-user/mc3-administration-link-types.php) for more information)

*   orgid

*   segmentid

*   contactid

*   linkid

*   occurrence (the number that defines the location of a link within a page)

*   ipaddress

*   date

*   URL

The delimiter for a field in a jlog line is the `FS` character ("\034").

### Note

The structure of the jlogs is defined by the Message Central version number field. If the structure of the jlog changes so will the version number of this field.

For documentation of writing to a jlog issue the command **`/opt/msys/3rdParty/bin/perldoc JLog::Reader`**              .

An example of a processed jlog entry follows:

<a name="mc-clicktracker-jlog-sample"></a>

**Example 4.1. Sample of processed jlog entry**

`v3.6 Tracking 1 4 2 0 101 1 10.79.0.76 2011-12-15T14:40:34Z http://www.example.com/sample.html`

| [Prev](mc-clicktracker-logs.php)  | [Up](mc-clicktracker-component.php) |  [Next](mc-clicktracker-debug.php) |
| 4.2. Clicktracker Log Rotation  | [Table of Contents](index.php) |  4.4. Debugging the Clicktracker |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)