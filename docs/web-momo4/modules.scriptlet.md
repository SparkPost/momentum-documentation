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

| 71.60. scriptlet - Lua Policy Scripts |
| [Prev](modules.sched.php)  | Chapter 71. Modules Reference |  [Next](modules.securecreds.php) |

## 71.60. scriptlet - Lua Policy Scripts

<a class="indexterm" name="idp22828096"></a>

The scriptlet module enables the use of [Lua](http://www.lua.org/) scripts to enforce policy. For details about policy, see [Chapter 62, *Implementing Policy with Momentum*](policy.php "Chapter 62. Implementing Policy with Momentum") .

### 71.60.1. Configuration

To use the scriptlet module, the [alerting](modules.alerting.php "71.4. alerting – Send Alerting Emails") module must be loaded, as shown in the following example:

<a name="modules.scriptlet.code"></a>

**Example 71.84. scriptlet Configuration**

```
alerting {}

scriptlet "scriptlet" {
  script_ttl = 300
  script "boot" {
    source = "msys.boot"
  }
}
```

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

The following configuration options are available:

<dl class="variablelist">

<dt>always_gc</dt>

<dd>

Whether or not to always garbage collect. Default value is `false`. With the introduction of threaded Lua, this option is redundant.

</dd>

<dt>gc_pause</dt>

<dd>

Default value is `200`. For more information about this option, see the section on "Garbage Collection" at [http://www.lua.org/manual/5.1/manual.html](http://www.lua.org/manual/5.1/manual.html).

</dd>

<dt>gc_stepmul</dt>

<dd>

Default value is `200`. For more information about this option, see the section on "Garbage Collection" at [http://www.lua.org/manual/5.1/manual.html](http://www.lua.org/manual/5.1/manual.html).

</dd>

<dt>max_spare_per_master</dt>

<dd>

Default value is `5000`.

</dd>

<dt>reap_interval</dt>

<dd>

Controls how often to expire spares from the spare thread cache. Default value is `1`. This is not likely to need changing.

</dd>

<dt>script</dt>

<dd>

In the code example [Example 71.84, “scriptlet Configuration”](modules.scriptlet.php#modules.scriptlet.code "Example 71.84. scriptlet Configuration"), "boot" is the name of the module that is provided by the script. The boot module is located in the `/opt/msys/ecelerity/libexec/scriptlets/msys` directory. It provides core product features so should always be loaded.

Any number of script stanzas may appear within the scriptlet module. The script stanza has only one option, `source`, which identifies the location of the Lua policy script.

There is a direct correlation between the name of the script stanza and the module it exports. If you are creating your own scripts, the script scope name and the name that a script is registered as must be the same. For detailed information about creating user-defined scripts, see [Section 62.2.4, “Creating Policy Scripts”](implementing.policy.scriptlets.php#policy.best.practices "62.2.4. Creating Policy Scripts").

For a complete list of all available Lua functions, see [Chapter 64, *Lua Functions Summary*](lua.summary_table.php "Chapter 64. Lua Functions Summary") .

</dd>

<dt>script_ttl</dt>

<dd>

Duration that the script is cached; the default timeout is 300 seconds. Increasing this value also changes the time that resources consumed by the script stay in memory, thereby increasing memory usage.

</dd>

</dl>

| [Prev](modules.sched.php)  | [Up](modules.php) |  [Next](modules.securecreds.php) |
| 71.59. sched – The Schedule Module  | [Table of Contents](index.php) |  71.61. securecreds – Password Encryption/Credential Retrieval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)