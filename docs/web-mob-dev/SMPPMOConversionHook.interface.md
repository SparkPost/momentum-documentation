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

| 12.2. Interface |
| [Prev](SMPPMOConversionHook.php)  | Chapter 12. SMPP MO Conversion Hook |  [Next](SMPPMOConversionHook.examples.php) |

## 12.2. Interface

### 12.2.1. Function Interface and Parameters

**12.2.1.1. Function Interface for Lua**`function mod:smpp_MO_conversion (msg)`**12.2.1.2. Function Interface for C**
```
static int sample_smpp_MO_conversion_hook (void  *gself,
ec_message * m)
```

### 12.2.2. Parameters

*   ec_message

### 12.2.3. Message Context Variables

<a name="SMPP_MO_Conversion_ec_message_Context_Variables"></a>

**Table 12.1. SMPP MO Conversion ec_message Context Variables**

| Context Key Name | C "#define" name | Description |
| --- | --- | --- |
| MO_Email_From_Address |   | email from address to use when converting MO sms to email |
| MO_Email_To_Address |   | email to address to use when converting MO sms to email |
| MO_Email_Subject |   | email subject to use when converting MO sms to email |
| MO_Email_Text |   | blob email text to use when converting MO sms to email |
| MO_Email_Data_Coding |   | email data coding to use when converting MO sms to email |

### 12.2.4. Return Values

*   SMPP_CONTINUE

*   SMPP_DELIVERED

*   SMPP_PERMFAILED

| [Prev](SMPPMOConversionHook.php)  | [Up](SMPPMOConversionHook.php) |  [Next](SMPPMOConversionHook.examples.php) |
| Chapter 12. SMPP MO Conversion Hook  | [Table of Contents](index.php) |  12.3. Examples |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)