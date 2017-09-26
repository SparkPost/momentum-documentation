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

| ec_lic |
| [Prev](executable.ec_jre_setup.php)  | 11.2. Executable Commands |  [Next](executable.ec_log_trace.php) |

<a name="executable.ec_lic"></a>
## Name

ec_lic — fetch a new license file from Message Systems

## Synopsis

`/opt/msys/ecelerity/bin/ec_lic` [ -a *`username`*:*`password`* ]

`/opt/msys/ecelerity/bin/ec_lic` [ -c *`conffile`* ]

`/opt/msys/ecelerity/bin/ec_lic` [ -d ]

`/opt/msys/ecelerity/bin/ec_lic` [ -e *`path`* ]

`/opt/msys/ecelerity/bin/ec_lic` [ -f ]

`/opt/msys/ecelerity/bin/ec_lic` [ -H *`url`* ]

`/opt/msys/ecelerity/bin/ec_lic` [ -h ]

`/opt/msys/ecelerity/bin/ec_lic` [ -L *`file`* ]

`/opt/msys/ecelerity/bin/ec_lic` [ -p *`proxy`* ]

`/opt/msys/ecelerity/bin/ec_lic` [ -q ]

`/opt/msys/ecelerity/bin/ec_lic` [ -t {HTTP | SOCKS4 | SOCKS5} ]

<a name="idp13453712"></a>
## Description

`ec_lic` will validate your current Momentum license, and if it is missing or invalid, fetch an updated license from the Message Systems license server.

It has the following options:

<dl class="variablelist">

<dt>-a *`username`*:*`password`*</dt>

<dd>

Proxy username:password to use.

</dd>

<dt>-c *`conffile`*</dt>

<dd>

Specify an alternate configuration file to use other than the default, which is `ecelerity.conf`.

</dd>

<dt>-d</dt>

<dd>

Show verbose debugging information when fetching license.

</dd>

<dt>-e *`path`*</dt>

<dd>

Load modules from *`path`* rather than the default.

</dd>

<dt>-f</dt>

<dd>

Fetch a new license file from Message Systems if the current one is invalid.

</dd>

<dt>-H *`url`*</dt>

<dd>

Fetch license from an alternative URL. (Use this option instead of the `-f` option).

</dd>

<dt>-h</dt>

<dd>

Show a help message.

</dd>

<dt>-L *`file`*</dt>

<dd>

Operate on license at an alternate location. (Used only if *`conffile`* does not exist).

</dd>

<dt>-p *`proxy`*</dt>

<dd>

HTTP proxy to use.

</dd>

<dt>-q</dt>

<dd>

Show no message if current license is valid. This should be used together with `-f`

</dd>

<dt>-t {HTTP | SOCKS4 | SOCKS5}</dt>

<dd>

Proxy type (HTTP, SOCKS4, SOCKS5).

</dd>

</dl>

| [Prev](executable.ec_jre_setup.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_log_trace.php) |
| ec_jre_setup  | [Table of Contents](index.php) |  ec_log_trace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)