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

| pe2g |
| [Prev](mcbatch.php)  | Chapter 8. Message Central Commands |  [Next](mcsched.php) |

<a name="mcg"></a>
## Name

pe2g — start the generator component

## Synopsis

`/opt/msys/pe2/bin/pe2g` [ -b ]

`/opt/msys/pe2/bin/pe2g` [ -c *`num_threads`* ]

`/opt/msys/pe2/bin/pe2g` [ -f *`configfile`* ]

`/opt/msys/pe2/bin/pe2g` [ -i *`iterations`* ]

`/opt/msys/pe2/bin/pe2g` [ -l *`log_file`* ]

`/opt/msys/pe2/bin/pe2g` [ -m *`mailing_id`* ]

`/opt/msys/pe2/bin/pe2g` [ -o *`org_id`* ]

`/opt/msys/pe2/bin/pe2g` [ -p *`db_connections`* ]

`/opt/msys/pe2/bin/pe2g` [ -r *`relay`* ]

`/opt/msys/pe2/bin/pe2g` [ -t *`template_language`* ]

<a name="idp2368128"></a>
## Description

The **/opt/msys/pe2/bin/pe2g** command controls the Message Central generator, the component that creates mailings. It has the following options:

<dl class="variablelist">

<dt>-b</dt>

<dd>

Run the command in the foreground. Used for debugging purposes.

</dd>

<dt>-c *`threads`*</dt>

<dd>

Specify the number of templatization threads. See also [pe2g.templatizer_concurrency](conf.mcg.templatizer_concurrency.php "pe2g.templatizer_concurrency").

</dd>

<dt>-f *`config_file`*</dt>

<dd>

Specify the configuration file. If not specified the default file will be used.

</dd>

<dt>-i *`iterations`*</dt>

<dd>

The number of blocks to fetch. The default value is `0` indicating an infinite number of blocks.

</dd>

<dt>-l *`log_file`*</dt>

<dd>

The log file for tracking the progress of a mailing. This file is typically found in a separate directory usually named `/var/log/pe2/continuous/`.

</dd>

<dt>-m *`mid`*</dt>

<dd>

The MailingID for the mailing.

</dd>

<dt>-o *`orgid`*</dt>

<dd>

The OrgID for the mailing.

</dd>

<dt>-p *`connections`*</dt>

<dd>

The number of concurrent database connections. The default value is 10.

</dd>

<dt>-r*`relay`*</dt>

<dd>

The relay to connect to. A number of relays may be specified.

</dd>

<dt>-t *`tempalte_language`*</dt>

<dd>

The template driver This is equivalent to the configuration option, `pe2g.template_driver_name` . See [pe2g.template_driver_name](conf.mcg.template_driver_name.php "pe2g.template_driver_name") for more information.

</dd>

</dl>

| [Prev](mcbatch.php)  | [Up](executable-commands.php) |  [Next](mcsched.php) |
| pe2batch  | [Table of Contents](index.php) |  pe2sched |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)