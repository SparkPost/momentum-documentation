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

| msys.expandMacro |
| [Prev](lua.ref.msys.dnslookup.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.getClassMetaTable.php) |

<a name="lua.ref.msys.expandMacro"></a>
## Name

msys.expandMacro — Expand macros (such as sieve, spf and custom_logger macros)

<a name="idp24479664"></a>
## Synopsis

`msys.expandMacro();`

<a name="idp24481648"></a>
## Description

Expands macros (such as sieve, spf and custom_logger macros) present in the supplied input string and returns the expanded result.

```
require("msys.core")

local mod = {};

function mod:validate_ehlo(str, accept, vctx)
  print("ehlo string is:", msys.expandMacro("%{vctx_conn:ehlo_string}"));
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("ehlo_phase", mod);
```

The parameter passed to `msys.expandMacro` expands the built-in validation context variable, `ehlo_string`. For a list of these variables see [Section 6.1, “Connection Context Variables”](policy.predefined-context-conn.php "6.1. Connection Context Variables"). *Note*: Not all variables are available in all callouts.

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

| [Prev](lua.ref.msys.dnslookup.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.getClassMetaTable.php) |
| msys.dnsLookup  | [Table of Contents](index.php) |  msys.getClassMetaTable |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)