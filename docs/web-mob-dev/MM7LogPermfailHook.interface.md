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

| 25.2. Interface |
| [Prev](MM7LogPermfailHook.php)  | Chapter 25. MM7 Log Permfail Hook |  [Next](MM7LogPermfailHook.examples.php) |

## 25.2. Interface

### 25.2.1. Function Interface for Lua

`function mod:mms_log_permfail(msg)`
### 25.2.2. Function Interface for C

```
static void sample_mm7_log_permfail_hook (void  *closure,
ec_message * m)
```

This hook is the same as the other C hooks. The function name is not significant as long as it is registered as `mms_log_permfail` during module initialization in the following way `register_mms_log_permfail_hook_first(sampel_mm7_log_permfail, ...)`. See [Example 25.2, “MM7 Log Permfail Hook: C Example”](MM7LogPermfailHook.examples.php#MM7_Log_Permfail_Hook.c "Example 25.2. MM7 Log Permfail Hook: C Example").

### 25.2.3. Parameters

The parameters passed into this hook:

*   ec_message – Most of MM7 related data is stored in context variables as key/value pairs. All the data stored in ec_message are accessible from this hook and can be logged as needed.

### 25.2.4. Return Values

NONE

| [Prev](MM7LogPermfailHook.php)  | [Up](MM7LogPermfailHook.php) |  [Next](MM7LogPermfailHook.examples.php) |
| Chapter 25. MM7 Log Permfail Hook  | [Table of Contents](index.php) |  25.3. Examples |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)