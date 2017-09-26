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

| ec_dump_config |
| [Prev](executable.ec_dkim_ctl.php)  | 11.2. Executable Commands |  [Next](executable.ec_jre_setup.php) |

<a name="executable.ec_dump_config"></a>
## Name

ec_dump_config — output the `ecelerity.conf` file as XML

## Synopsis

`/opt/msys/ecelerity/bin/ec_dump_config` [ -c *`configfile`* ] [ -e *`extdir`* ] [ -f *`outputfile`* ]

<a name="idp13396864"></a>
## Description

**ec_dump_config** will generate an XML version of the default configuration file and output to `STDOUT`. If the configuration is invalid, an error message is displayed. The following options can be used to specify input and output:

<dl class="variablelist">

<dt>-c *`configfile`*</dt>

<dd>

Specify a Momentum configuration file for input.

</dd>

<dt>-e *`extdir`*</dt>

<dd>

Load modules from an external directory rather than the default.

</dd>

<dt>-f *`outputfile`*</dt>

<dd>

Specify an output file for the XML version of the configuration. Otherwise output is sent to stdout.

</dd>

</dl>

You can use this script to help diagnose errors in configuration files. For example, declaration of the non-existent option, `invalid_option`, in a global scope yields the following output:

```
shell> /opt/msys/ecelerity/bin/ec_dump_config 
[Tue 18 Oct 2011 13:51:50] No module provides capability 'config.Global:invalid_option'.
[Tue 18 Oct 2011 13:51:50] CFG-07961 No module provides capability 'config.Global:invalid_option'.
Syntax error in /opt/msys/ecelerity/etc/conf/default/ecelerity.conf at line 4 near 'invalid_option'
'invalid_option' is not a valid scope name in scope 'Global'
Reconfigure failed.
Global configuration error.
```
<a name="idp13408720"></a>
## See Also

[migrate_regex_binding2](executable.migrate_regex_binding2.php "migrate_regex_binding2"), [ec_migrate_conf](executable.ec_migrate_conf.php "ec_migrate_conf") and [validate_config](executable.validate_config.php "validate_config")

| [Prev](executable.ec_dkim_ctl.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_jre_setup.php) |
| ec_dkim_ctl  | [Table of Contents](index.php) |  ec_jre_setup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)