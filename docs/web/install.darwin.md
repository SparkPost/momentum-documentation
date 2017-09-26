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

| 1.7. Installation on Mac OS X/Darwin |
| [Prev](install.linux.php)  | Chapter 1. Installation |  [Next](install.solaris.php) |

## 1.7. Installation on Mac OS X/Darwin

Momentum packages for Mac OS X support version 10.3 or later. This includes all of the clustering functionality, all of the SDKs (C, Java, Perl) but currently does not include the Momentum Web Console. The software is distributed as an Installer package, which simply needs to be opened and processed.

Once the software is installed, the following command should be added to root's crontab to rotate the logs once a day:

`0 0 * * * /opt/ecelerity/bin/ec_rotate`

If you will be running the Momentum Clustering module, you should also add this line to root's crontab:

`* * * * * /opt/ecelerity/bin/mbus-reconfig`

| [Prev](install.linux.php)  | [Up](install.php) |  [Next](install.solaris.php) |
| 1.6. Installation on Linux  | [Table of Contents](index.php) |  1.8. Installation on Solaris |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)