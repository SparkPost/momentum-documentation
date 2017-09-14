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

| Chapter 4. Custom Rules |
| [Prev](ad.adaptive.rules.actions.php)  |   |  [Next](ad.samples.php) |

## Chapter 4. Custom Rules

The system rules for adaptive behavior are contained in the `/opt/msys/ecelerity/libexec/scriptlets/msys/adaptive_rules.lua` file. You can customize these rules using Lua scripts that invoke the `msys.adaptive.registerRules` function. To do this create new rules in the following format:

<a name="ad.custom.example"></a>

**Example 4.1. Custom Lua rules format**

```
require(‘msys.adaptive’)
local rules = {
  ["<domain>"] = {
    responses = {
      {
        code = "<PCRE>",
        trigger = "1"|"<events>/<interval>",
        action = {
          {"<action1>", "<param11>", "<param12>", ...},
          {"<action2>", "<param21>", "<param22>", ...},
          ...
        },
        message = "<text>",
        phase = "connect",
      },
      {
        <another code-trigger-action block>
      },
      ...
    },
    configuration = {
      <option> = <value>|<sequence>|<Lua function>,
      ...
    },
  },
}
msys.adaptive.registerRules(rules, "augment"|"replace")
```

A description of this format follows.

## domain

Supply a domain that your rules apply to. In [Example 4.1, “Custom Lua rules format”](ad.custom.rules.php#ad.custom.example "Example 4.1. Custom Lua rules format") this is indicated by `<domain>`.

If the value for a given key is a string, then the entry is an alias for the value. For example, `["live.com"] = "hotmail.com",` declares that `live.com` is an alias for `hotmail.com`. Aliasing is not recursive; it is invalid to have an alias for a domain that is also an alias.

## The responses Table

The elements of the responses table are as follows:

*   `code` – A PCRE of the SMTP response code to be matched

*   `trigger` – The trigger threshold

    If this element is set to `1`, the action is triggered on the first occurrence of the code. You can also set this to the number of occurrences per given period. For example, `10/1` triggers the action when more than 10 occurrences of this code are detected per second.

*   `action` – The action to take when a rule is triggered. Valid actions are as follows:

    *   {"suspend", "*`num`* hours"} – Suspend for specified number of hours. The adaptive module checks whether to lift suspensions according to the setting of the `suspend_sweep_interval`.

    *   {"blackhole", "*`num`* hours"} – Blackhole the domain for the specified period; seconds, minutes and days are also valid. The adaptive module restores domains according to the setting of the `suspend_sweep_interval`.

    *   {"throttle", "down"} – Reduce the number of messages by the amount calculated.

    *   {"greylisted", "*`num`* minutes"} – Adjust the binding for greylisting.

    *   {"warmup", "*`num`*"} – Set the age of the binding in seconds.

        If `adaptive_scope` evaluates to "global" for a binding scope (binding is a scope in Momentum), the age set for that binding through the warmup action will be applied to that binding across the whole cluster. *Note*: If adaptive_scope evaluates to "global" for a binding::domain combination, it does not imply that `adaptive_scope` will also evaluate to the same value for that binding alone.

    *   {"reduce_connections", *`num`*} – Reduce connections by the specified number.

    *   {"reduce_deliveries", *`num`*} – Reduce deliveries by the specified number.

*   `phase` – When the phase parameter is present in a rule, it is intended to limit the scope of the rule to one of the outbound protocol phases. This is not currently implemented and should be omitted from rule definitions.

## The configuration Element

The `configuration` element can be any of the configuration options described in [Section 3.2, “Parameters Adjusted by the Rules”](ad.adaptive.rules.parameters.php "3.2. Parameters Adjusted by the Rules").

## The msys.adaptive.registerRules Function

In order for a set of custom rules to be applied, that set must be registered. This is done using the `msys.adaptive.registerRules` method.

To register custom rules, pass the table name (named `rules` in [Example 4.1, “Custom Lua rules format”](ad.custom.rules.php#ad.custom.example "Example 4.1. Custom Lua rules format")) and the optional registration type parameter. Registration type defaults to `augment` but can also be set to `replace`.

### Warning

Take care when using the `replace` option—the new rule set(s) will replace all existing rules.

## Referencing Rules in the Scriptlet Module

As with any other Lua script, the custom rules script must be referenced from the scriptlet module. For example, if you created a custom rules script named `adaptive_overrides.lua`, you would reference it from the scriptlet module in the following way:

```
scriptlet "scriptlet" {
  script "adaptive_overrides" {
    source = "adaptive_overrides"
  }
}
```

Any custom adaptive scripts (like other user-defined scripts) should be saved in either the `/opt/msys/ecelerity/etc/conf/default` or `/opt/msys/ecelerity/etc/conf/global` directory or a directory below these directories. For more information about the scriptlet module see [scriptlet – Module](https://support.messagesystems.com/docs/web-ref/modules.scriptlet.php) .

## Custom Rule Examples

The following example shows a custom rule overriding an existing system rule.

Given the following system rules:

```
rules = {
  ["yahoo.com"] = {
    responses = {
      {
        code = "^553 Mail from a@b.com is not allowed",
        trigger = "1"
        action = {"suspend", "4 hours"},
        message = "Call yahoo",
        phase = "mailfrom",
      },
    },
    configuration = {
      max_outbound_connections = {30,300},
    },
  }
  ["google.com"] = {
    responses = {
      {
        code = "^553 You are not trusted.",
        trigger = "1"
        action = {"blackhole", "4 hours"},
        message = "Call google",
        phase = "mailfrom",
      },
    },
    configuration = {
      max_outbound_connections = {20,400},
    },
  },
}
```

Suppose you create the following rule in a file named `custom_rules.lua`:

```
local custom_rules = {
  ["yahoo.com"] = {
    responses = {
      {
        code = "^540 Too many connections.",
        trigger = "1"
        action = {"reduce_connections", 1},
        phase = "connect",
      },
    },
    configuration = {
  },
}
```

The effective rules after calling `msys.adaptive.registerRules(custom_rules, "augment")` are (changes are shown in bold):

```
rules = {
  ["yahoo.com"] = {
    responses = {
      {
       **code = "^540 Too many connections.",
        trigger = "1"
        action = {"reduce_connections", 1},
        phase = "connect"** ,
      },
      {
        code = "^553 Mail from a@b.com is not allowed",
        trigger = "1"
        action = {"suspend", "4 hours"},
        message = "Call yahoo",
        phase = "mailfrom",
      },
    },
    configuration = {
      max_outbound_connections = {30,300},
    },
  },
  ["google.com"] = {
    responses = {
      {
        code = "^553 You are not trusted.",
        trigger = "1"
        action = {"blackhole", "4 hours"},
        message = "Call google",
        phase = "mailfrom",
      }
    },
    configuration = {
      max_deliveries_per_connection = 4,
      max_outbound_connections = {20,400},
    },
  },
}
```

### Note

In the preceding example, the mode for `msys.adaptive.registerRules` is `augment` so the following response has been added to the configuration for the `yahoo.com` domain:

```
{
  code = "^540 Too many connections.",
  trigger = "1"
  action = {"reduce_connections", 1},
  phase = "connect",
}
```

No custom rules were applied to the `google.com` domain, so it remains unchanged.

| [Prev](ad.adaptive.rules.actions.php)  |   |  [Next](ad.samples.php) |
| 3.3. Rule Actions  | [Table of Contents](index.php) |  Chapter 5. Sample Custom Configurations |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)