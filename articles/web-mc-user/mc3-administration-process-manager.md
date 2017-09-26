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

| 11.9. Process Manager |
| [Prev](mc3-administration-list-builder-criteria.php)  | Chapter 11. Administration |  [Next](mc3-glossary.php) |

## 11.9. Process Manager

The Process Manager page shows active, long-running database processes, mailings that are currently being built, for example.

<a name="figure-process-manager"></a>

**Figure 11.17. Process manager**

![Process manager](images/process_manager.jpg)

### Warning

Consult with support before using this menu option.

There is considerable risk in killing active processes. Killing a running databases process can lead to issues such as stuck mailings. We do not recommend using this option in normal operations. It should only be used as a last resort. For terminating a mailing or an importation process or other such jobs, use the cancel button on the appropriate web page.

You can use this page to kill a process. To do this, select the desired process and click the KILL PROCESS button.

| [Prev](mc3-administration-list-builder-criteria.php)  | [Up](mc3-administration.php) |  [Next](mc3-glossary.php) |
| 11.8. List Builder Criteria  | [Table of Contents](index.php) |  Glossary |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)