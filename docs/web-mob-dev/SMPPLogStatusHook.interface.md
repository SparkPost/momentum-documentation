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

| 10.2. Interface |
| [Prev](SMPPLogStatusHook.php)  | Chapter 10. SMPP Logger Status Hook |  [Next](SMPPLogStatusHook.examples.php) |

## 10.2. Interface

### 10.2.1. Function Interface for Lua

`function mod:smpp_log_status(conn, msg, error)`
### 10.2.2. Function Interface for C

```
static void sample_smpp_log_status_hook (void  *closure,
smpp_conn* conn, ec_message * m, const char* error)
```

### 10.2.3. Parameters

Parameters passed into this hook:

1.  a reference to the smpp_conn structure

2.  an ec_message

3.  an error description carried in the deliver receipt if there is one

The ec_message context variables carry the following extra information from the delivery receipt:

<a name="SMPP_Logger_Status_ec_message_Context_Variables"></a>

**Table 10.1. SMPP Logger Status ec_message Context Variables**

| Context Key Name | Description |
| --- | --- |
| #mess_stat | string description of the message_state in delivery receipt, e.g. "Scheduled", "Delivered", "Expired", etc |
| #mess_id | remote message id allocated to the message by the SMSC when originally submitted |
| #mess_type | string description of the esm_class in delivery receipt |

### 10.2.4. Return Values

NONE

| [Prev](SMPPLogStatusHook.php)  | [Up](SMPPLogStatusHook.php) |  [Next](SMPPLogStatusHook.examples.php) |
| Chapter 10. SMPP Logger Status Hook  | [Table of Contents](index.php) |  10.3. Examples |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)