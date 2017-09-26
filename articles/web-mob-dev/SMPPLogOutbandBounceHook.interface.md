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

| 4.2. Interface |
| [Prev](SMPPLogOutbandBounceHook.php)  | Chapter 4. SMPP Log Outband Bounce Hook |  [Next](SMPPLogOutbandBounceHook.examples.php) |

## 4.2. Interface

### 4.2.1. Function Interface for Lua

`function mod:smpp_log_bounce_outband(conn, msg, error)`

Lua implementations must use the function name `mod:smpp_log_bounce_outband`.

### 4.2.2. Function Interface for C

```
static void sample_mm7_log_bounce_outband_hook (void  *closure,
smpp_conn* conn, ec_message * m, const char* error)
```

This hook is the same as the other C hooks. The function name is not significant as long as it is registered as smpp_log_bounce_outband (for example, "`register_smpp_log_bounce_outband_hook_first(sample_smpp_log_bounce_outband_hook, ...)`" during module initialization as shown in [Example 4.2, “SMPP Log Outband Bounce Hook: C Example”](SMPPLogOutbandBounceHook.examples.php#SMPP_Log_Outband_Bounce_Hook.c "Example 4.2. SMPP Log Outband Bounce Hook: C Example").

### 4.2.3. Parameters

1.  A reference to the smpp_conn structure

2.  An ec_message: the context variables #mess_xx have the same significance for this hook as for the smpp_log_status hook.

3.  A string value of the error description if there is one.

### 4.2.4. Return Values

NONE

| [Prev](SMPPLogOutbandBounceHook.php)  | [Up](SMPPLogOutbandBounceHook.php) |  [Next](SMPPLogOutbandBounceHook.examples.php) |
| Chapter 4. SMPP Log Outband Bounce Hook  | [Table of Contents](index.php) |  4.3. Examples |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)