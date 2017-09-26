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

| migrate_regex_binding2 |
| [Prev](executable.mbusd_monitor.php)  | 11.2. Executable Commands |  [Next](executable.validate_config.php) |

<a name="executable.migrate_regex_binding2"></a>
## Name

migrate_regex_binding2 — migrate regex_binding2 bindings from version 2.2 to version 3.0

## Synopsis

`/opt/msys/ecwebui/scripts/migrate_regex_binding2` [ /path/to/ecelerity.conf ] [ -wc *`working_copy`* ]

<a name="idp14855232"></a>
## Description

**migrate_regex_binding2** converts regex_binding2 module configuration into a Lua script that is editable from the web UI using the policy editor. You only need this tool if you migrate from version 2.2 to version 3.0 and you use the regex_binding2 module.

Typically this tool is used on the `ecelerity.conf.bak` file created by converting your `ecelerity.conf` file using **ec_migrate_conf**. It updates your configuration file to include a scriptlet module with a `script` stanza pointing to the Lua script that replaces the regex_binding2 module.

This script does **not** check the script file or the updated configuration file into the repository. Also, it is up to the user to review the changes made by this program before committing them and running them in a production environment.

It has the following options:

<dl class="variablelist">

<dt>*`/path/to/ecelerity.conf`*</dt>

<dd>

The path to the `ecelerity.conf` file containing regex_binding2 stanzas to convert. If the working copy path is not specified, the Lua file is written to `/opt/msys/ecelerity/etc/conf/default/`.

</dd>

<dt>-wc *`working_copy`*</dt>

<dd>

Optional path to the configuration checkout. The default value is `/opt/msys/ecelerity/etc/conf/default`.

</dd>

</dl>

<a name="idp14867664"></a>
## See Also

[ec_migrate_conf](executable.ec_migrate_conf.php "ec_migrate_conf"), [Section 14.60, “scriptlet – Module”](modules.scriptlet.php "14.60. scriptlet – Module")

| [Prev](executable.mbusd_monitor.php)  | [Up](exe.commands.details.php) |  [Next](executable.validate_config.php) |
| mbusd_monitor  | [Table of Contents](index.php) |  validate_config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)