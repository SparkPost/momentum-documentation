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

| 2.7. Message Context Variables |
| [Prev](modules.mobility.smpp_bounce_logger.php)  | Chapter 2. Mobile Momentum SMPP |  [Next](mobility.runtime.hooks.php) |

## 2.7. Message Context Variables

Policy decisions associated with Mobile Momentum can be implemented using Sieve or Lua scripts. For more information see [Implementing Policy Using Scriptlets](https://support.messagesystems.com/docs/web-ref/implementing.policy.scriptlets.php) and [Implementing Policy Using Sieve](https://support.messagesystems.com/docs/web-ref/policy.implementing.php).

ec_message context variables for SMPP that are accessible from policy scripts are as follows:

*   `MO_Email_From_Address` – email from address to use when converting MO-SMS to email

*   `MO_Email_To_Address` – email to address to use when converting MO-SMS to email

*   `MO_Email_Subject` – email subject to use when converting MO-SMS to email

*   `MO_Email_Text` – blob email text to use when converting MO-SMS to email

*   `SMS_Data_Coding` – data coding of the SMS message text to set in SMPP message submission. For more information see [smpp_sms_data_coding](mobility.conf.smpp_sms_data_coding.php "smpp_sms_data_coding").

*   `SMS_Destination_Address` – SMS destination address to set in SMPP message submission

*   SMS_Destination_Domain – Select destination SMPP domain name(corresponding to configured domain stanza)

*   `SMS_Destination_NPI` – SMS destination numbering plan indicator to set in SMPP message submission. For more information see [smpp_destination_numbering_plan](mobility.conf.smpp_destination_numbering_plan.php "smpp_destination_numbering_plan").

*   `SMS_Destination_TON` – SMS destination type of number to set in SMPP message submission. For more information see [smpp_destination_type_of_number](mobility.conf.smpp_destination_type_of_number.php "smpp_destination_type_of_number").

*   `SMS_Source_Address` – SMS source address to set in SMPP message submission

*   `SMS_Source_NPI` – SMS source numbering plan indicator to set in SMPP message submission. For more information see [smpp_esme_numbering_plan](mobility.conf.smpp_esme_numbering_plan.php "smpp_esme_numbering_plan").

*   `SMS_Source_TON` – SMS source type of number to set in smpp message submission. For more information see [smpp_esme_type_of_number](mobility.conf.smpp_esme_type_of_number.php "smpp_esme_type_of_number").

*   `SMS_Text` – blob of the SMS message text to set in SMPP submission

The hook points at which these context variables are accessible are described in the following section, "SMS Conversion Hook Points". For a detailed discussion of all SMPP hooks see "[SMPP Hooks](https://support.messagesystems.com/docs/web-mob-dev/p.smpp.php)".

| [Prev](modules.mobility.smpp_bounce_logger.php)  | [Up](momentum.mobility.php) |  [Next](mobility.runtime.hooks.php) |
| 2.6. The smpp_bounce_logger Module  | [Table of Contents](index.php) |  2.8. SMS Conversion Hook Points |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)