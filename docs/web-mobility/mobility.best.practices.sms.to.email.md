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

| 5.6. SMS to Email Address Mappings |
| [Prev](mobility.best.practices.persistent.cnnections.php)  | Chapter 5. SMPP Configuration Best Practices |  [Next](mobility.best.practices.throttling.php) |

## 5.6. SMS to Email Address Mappings

After receiving an SMS delivery, Mobile Momentum attempts to assign a recipient email address using the following methods:

1.  Interworking parse – Attempt to parse the email address from the beginning of the SMS text.

2.  Reverse Address Mappings – This is a database look up of the email address from data saved during the email to SMS conversion process. The database is the relation of the original sender email address, source SMS address, and destination SMS address, relative to the MT direction, and the reverse address look up uses the SMS addresses as keys. The limitation of this mechanism is that it will only resolve the latest email sender to a given destination SMS address (and for a given source SMS address). Nonetheless, this mechanism supports certain use cases. Reverse address mappings may be "turned off" with the `SMPP_Use_Reverse_Address_Mappings` parameter. The `SMPP_RAM_Expiration` parameter specifies the number of minutes a reverse address mapping is valid. The remaining parameters will normally not change, but enable the configuration of customer data sources for address mappings:

    *   `SMPP_Use_Reverse_Address_Mappings`

    *   `SMPP_RAM_Expiration`

    *   `SMPP_RAM_Cache`

    *   `SMPP_RAM_Query_Lookup`

    *   `SMPP_RAM_Query_New`

    *   `SMPP_RAM_Query_Update`

3.  `SMPP_Default_Email_Address` – this configuration parameter is the "last resort" default email address.

If the above methods fail to identify a destination email address, the SMS message is not converted to email and is dropped.

| [Prev](mobility.best.practices.persistent.cnnections.php)  | [Up](mobility.best.practices.php) |  [Next](mobility.best.practices.throttling.php) |
| 5.5. Persistent Connections  | [Table of Contents](index.php) |  5.7. Throttling |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)