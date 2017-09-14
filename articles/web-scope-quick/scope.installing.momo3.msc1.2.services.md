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

| 2.3. Starting the Services |
| [Prev](scope.installing.momo3.msc1.2.prior.php)  | Chapter 2. Installing the Momentum Component |  [Next](msc.installing.php) |

## 2.3. Starting the Services

When installation of this RPM file is complete, start up the Momentum services appropriate to your installation. These services include:

*   /etc/init.d/ecconfigd start – applicable in all circumstances

*   /etc/init.d/ecwebconsole start – only applicable to the machine running the Momentum web console

*   /etc/init.d/cidr_server start – only applicable in a cluster configuration

*   /etc/init.d/ec_cmd start – applicable in all circumstances

*   /etc/init.d/ecelerity start – applicable in all circumstances *after* version 1.2

*   /etc/init.d/ecelerity start – applicable in all circumstances

For a more detailed description of these services see "[Installing a Cluster](https://support.messagesystems.com/docs/web-ref/install.cluster.php)".

| [Prev](scope.installing.momo3.msc1.2.prior.php)  | [Up](scope.installing.php) |  [Next](msc.installing.php) |
| 2.2. Installation Prior to Message Scope 1.2  | [Table of Contents](index.php) |  Chapter 3. Installing the Message Scope Bundle |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)