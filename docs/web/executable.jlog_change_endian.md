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

| jlog_change_endian |
| [Prev](executable.ecelerity.php)  | 11.2. Executable Commands |  [Next](executable.jlog_sanity_check.php) |

<a name="executable.jlog_change_endian"></a>
## Name

jlog_change_endian — change the endianness of a jlog

## Synopsis

`/opt/ecelerity/bin/jlog_change_endian.pl` *`source`* { tole | tobe } *`destination`*

<a name="idp8496624"></a>
## Description

This command creates an exact copy of a jlog with the opposite endianness of the original. If it detects a problem in the source jlog, it will print an error message and not create the copy. For this reason, you should run [jlog_sanity_check](executable.jlog_sanity_check.php "jlog_sanity_check") on the source jlog first, to make sure it is error-free. This command should be run as `ecuser`.

The first argument is the path to the jlog you want to convert.

The second argument indicates the endianness of the destination jlog (and implicitly of the source jlog). `tole` will convert a big-endian jlog to little-endian (e.g. sparc to i386), while `tobe` will convert a little-endian jlog to big-endian (e.g. i386 to sparc).

The third argument is the path where you want the converted jlog to be written; it must not exist, but its parent directory must exist before you run `jlog_change_endian.pl`.

| [Prev](executable.ecelerity.php)  | [Up](exe.commands.details.php) |  [Next](executable.jlog_sanity_check.php) |
| ecelerity  | [Table of Contents](index.php) |  jlog_sanity_check |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)