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

| ec_spp |
| [Prev](executable.ec_show.php)  | 11.2. Executable Commands |  [Next](executable.ec_uipasswd.php) |

<a name="executable.ec_spp"></a>
## Name

ec_spp — Use this command to invoke a Sieve script

## Synopsis

`/opt/msys/ecelerity/bin/ec_spp` [ -c *`config_file`* ] [ -e *`extensions_dir`* ] [ -v ] [ *`script`* ]

<a name="idp14153872"></a>
## Description

`ec_spp` is used to invoke a Sieve script and confirm that it compiles.

It has the following options:

<dl class="variablelist">

<dt>-c *`config_file`*</dt>

<dd>

Specify a Momentum configuration file, typically `ecelerity.conf`.

</dd>

<dt>-e *`extensions_dir`*</dt>

<dd>

Specify the base path for all dynamically loadable modules, typically `/opt/msys/ecelerity/libexec`.

</dd>

<dt>-v</dt>

<dd>

Use this option for verbose output.

</dd>

</dl>

| [Prev](executable.ec_show.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_uipasswd.php) |
| ec_show  | [Table of Contents](index.php) |  ec_uipasswd |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)