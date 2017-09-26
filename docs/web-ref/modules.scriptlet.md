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

| 14.60. scriptlet – Module |
| [Prev](modules.sched.php)  | Chapter 14. Modules Reference |  [Next](modules.securecreds.php) |

## 14.60. scriptlet – Module

<a class="indexterm" name="idp21049008"></a>

The scriptlet module enables the use of [Lua](http://www.lua.org/) scripts to enforce policy, providing a more flexible alternative to Sieve. In version 3.0, scriptlets are the preferred scripting method.

### Note

If you are unfamiliar with Lua, you can create basic policy scripts using the web UI. For more information see [Section 3.10, “The Policy Configuration Editor”](web3.policy.editor.php "3.10. The Policy Configuration Editor"). Note that scripts created manually cannot be edited in the web UI and those created using the web UI cannot be edited by hand.

<a name="modules.scriptlet.code"></a>

**Example 14.87. scriptlet module**

```
alerting {}

scriptlet "scriptlet" {
  script_ttl = 300
  script "boot" {
    source = "msys.boot"
  }
}
```

To use the scriptlet module, the alerting module must be loaded. For more information see [Section 14.3, “alerting – alerting”](modules.alerting.php "14.3. alerting – alerting").

### 14.60.1. Configuration

The scriptlet module is not a singleton; however, only one named instance of the scriptlet module may appear in a configuration at a given time. For example, this configuration is valid (each instance name is identical; i.e., "scriptlet"):

```
scriptlet "scriptlet" {
 <options>
}

scriptlet "scriptlet" {
 <options>
}
```

Whereas this configuration is invalid (each instance name is different; i.e., "scriptlet" and "other_name"):

```
scriptlet "scriptlet" {
 <options>
}

scriptlet "other_name" {
 <options>
}
```

<dl class="variablelist">

<dt>always_gc</dt>

<dd>

Whether or not to always garbage collect. The default value for this option is `false`. With the introduction of threaded Lua, this option is redundant.

</dd>

<dt>gc_pause</dt>

<dd>

The default value for this option is `200`. For more information about this option see the section on "Garbage Collection" at [http://www.lua.org/manual/5.1/manual.html](http://www.lua.org/manual/5.1/manual.html).

</dd>

<dt>gc_stepmul</dt>

<dd>

The default value for this option is `200`. For more information about this option see the section on "Garbage Collection" at [http://www.lua.org/manual/5.1/manual.html](http://www.lua.org/manual/5.1/manual.html).

</dd>

<dt>reap_interval</dt>

<dd>

This option controls how often to expire spares from the spare thread cache. The default value for this option is `120`. This is not likely to need changing.

</dd>

<dt>script</dt>

<dd>

In the code example [Example 14.87, “scriptlet module”](modules.scriptlet.php#modules.scriptlet.code "Example 14.87. scriptlet module"), "boot" is the name of the module that is provided by the script. The boot module is located in the `/opt/msys/ecelerity/libexec/scriptlets/msys` directory. It provides core product features so should always be loaded. There's a direct correlation between the name of the script stanza and the module it exports. If you are creating your own scripts, the script scope name and the name that a script is registered as must be the same. For more information see [Section 5.2, “Implementing Policy Using Scriptlets”](implementing.policy.scriptlets.php "5.2. Implementing Policy Using Scriptlets").

Any number of script stanzas may appear within the scriptlet module. The script stanza has only one option, `source`. If you have created any Lua scripts using the policy editor, there will be a script stanza named `policyeditor` with its `source` option set to `policy.policyeditor`. This indicates that the module name is `policyeditor.lua` and that it is saved in the `policy` directory below either the `/opt/msys/ecelerity/etc/conf/default` or `/opt/msys/ecelerity/etc/conf/global` directory.

User-defined scripts should also be saved in either the `/opt/msys/ecelerity/etc/conf/default` or `/opt/msys/ecelerity/etc/conf/global` directory or a directory below these directories because these directories are in the Lua search path and are also under version control. Use [eccfg](executable.eccfg.php "eccfg") to add your scripts to the repository. Make sure that scripts are owned by `ecuser` and commit newly created scripts from the appropriate directory in the following way:

```
shell> /opt/msys/ecelerity/bin/eccfg commit --add-all \
  --username admin --password password
```

If you plan to create your own Lua scripts see [Section 5.6, “Best Practices for Manually Created Policy Scripts”](policy.best.practices.php "5.6. Best Practices for Manually Created Policy Scripts").

For a complete list of all available Lua functions see [Section 15.1, “Lua Functions List”](lua.summary_table.php "15.1. Lua Functions List").

### Note

You can use either a ‘`.`’ or a ‘`/`’ as a directory separator when specifying the `source` of a script stanza.

</dd>

<dt>script_ttl</dt>

<dd>

The duration that the script is cached; the default timeout is 300 seconds. Increasing this value also changes the time that resources consumed by the script stay in memory, thereby increasing memory usage.

</dd>

</dl>

When creating your own scripts, the built-in helper functions for creating policy and alerting scripts may prove useful. The policy helper functions are found in `/opt/msys/ecelerity/libexec/scriptlets/msys/policyeditor.lua`. Include this file by adding `require("msys.policyeditor");` to your script.

If you are upgrading to version 3.0 from 2.2 and wish to convert a regex_binding2 module to a Lua script see [migrate_regex_binding2](executable.migrate_regex_binding2.php "migrate_regex_binding2").

### 14.60.2. Scriptlets and Shutdown

### Note

The procedure described in this section is only applicable prior to Momentum 3.5.1.

Restarting an MTA that uses Lua policy scripts can result in duplicate deliveries when the MTA is shut down under load. This is because some messages may not be deleted from the spool on shutdown. As a workaround, follow these steps when shutting down the ecelerity process:

1.  Open ec_console and temporarily set `max_spare_per_master` to `0` by entering the following command: **`config set scriptlet scriptlet1 max_spare_per_master 0`**                                                 .

2.  Reset the frequency for expiring threads out of the spare thread cache: **`config set scriptlet scriptlet1 reap_interval 60`**                                           .

3.  Temporarily limit the number of messages per session: **`config set esmtp_listener max_receptions_per_connection 1`**                                                    

4.  Wait at least the `reap_interval` (reset to `60` seconds in step 2) for old Lua threads to be aged out.

5.  Restart the ecelerity process. See [ec_ctl](executable.ec_ctl.php "ec_ctl"). Note that on restart any options set from ec_console will revert to their default values.

| [Prev](modules.sched.php)  | [Up](modules.php) |  [Next](modules.securecreds.php) |
| 14.59. sched – The Schedule Module  | [Table of Contents](index.php) |  14.61. securecreds – Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)