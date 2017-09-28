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

| 1.5. Upgrading from Message Central version 3.4.1 to version 3.5.1 |
| [Prev](mc-installation-overview.php)  | Chapter 1. Installing Message Central |  [Next](mc-mtas.php) |

## 1.5. Upgrading from Message Central version 3.4.1 to version 3.5.1

### Note

If you are upgrading from a version of Message Central prior to 3.4.1, you must first upgrade Message Central to version 3.4.1 (which will upgrade PostgreSQL to version 9) and then upgrade to version 3.5.1.

When upgrading Message Central to version 3.5.1, the installation script performs all the steps necessary to upgrade the Message Central components, but you must manually perform the final step to migrate your Momentum data.

You should perform the data migration as soon as is practical after completing the upgrade. Until you migrate your data, none of the historical reports will be accurate, and current data will not be reflected in any Message Central reports.

To migrate all your Momentum data, run the following script:

`nohup /opt/msys/ecwebui/scripts/33_deferred_migration &`
### Note

Message Systems recommends that you run the migration script using **nohup** or in a screen session to prevent accidental interruptions.

The **33_deferred_migration script**        may take 8 or more hours to finish. You can use the system while the script is running, but database performance will be affected and online reporting will be unavailable.

| [Prev](mc-installation-overview.php)  | [Up](mc-installation.php) |  [Next](mc-mtas.php) |
| 1.4. Installation Overview  | [Table of Contents](index.php) |  1.6. Inbound and Outbound MTAs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)