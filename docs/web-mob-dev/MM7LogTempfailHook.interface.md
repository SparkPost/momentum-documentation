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

| 28.2. Interface |
| [Prev](MM7LogTempfailHook.php)  | Chapter 28. MM7 Log Tempfail Hook |  [Next](MM7LogTempfailHook.examples.php) |

## 28.2. Interface

### 28.2.1. Function Interface for Lua

`function mod:mms_log_tempfail(msg)`
### 28.2.2. Function Interface for C

```
static void sample_mm7_log_tempfail_hook (void  *closure,
ec_message * m)
```

The C hook must be registered as `mms_log_tempfail`, for example, `register_mms_log_tempfail_hook_first(sampel_mm7_log_tempfail, ...)`. See [Example 28.2, “MM7 Log Tempfail Hook: C Example”](MM7LogTempfailHook.examples.php#MM7_Log_Tempfail_Hook.c "Example 28.2. MM7 Log Tempfail Hook: C Example").

### 28.2.3. Parameters

The parameter passed into this hook is:

*   ec_message – Most MM7-related data are stored in context variables as key/value pairs. All the data stored in ec_message are accessible from this hook and can be logged as needed.

### 28.2.4. Return Values

NONE

| [Prev](MM7LogTempfailHook.php)  | [Up](MM7LogTempfailHook.php) |  [Next](MM7LogTempfailHook.examples.php) |
| Chapter 28. MM7 Log Tempfail Hook  | [Table of Contents](index.php) |  28.3. Examples |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)