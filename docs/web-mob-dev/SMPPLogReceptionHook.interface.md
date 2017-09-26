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

| 9.2. Interface |
| [Prev](SMPPLogReceptionHook.php)  | Chapter 9. SMPP Log Reception Hook |  [Next](SMPPLogReceptionHook.examples.php) |

## 9.2. Interface

### 9.2.1. Function Interface for Lua

`function mod:smpp_log_reception(conn, msg, error)`
### 9.2.2. Function Interface for C

```
static void sample_smpp_log_reception_hook (void  *closure,
smpp_conn* conn, ec_message * m, const char* error)
```

### 9.2.3. Parameters

Parameters passed into this hook:

1.  a reference to the smpp_conn structure

2.  an ec_message

3.  a string value of the error message if failed to process the MO message. For a successfully processed MO, an empty string is passed in.

### 9.2.4. Return Values

NONE

| [Prev](SMPPLogReceptionHook.php)  | [Up](SMPPLogReceptionHook.php) |  [Next](SMPPLogReceptionHook.examples.php) |
| Chapter 9. SMPP Log Reception Hook  | [Table of Contents](index.php) |  9.3. Examples |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)