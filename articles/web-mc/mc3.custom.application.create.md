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

| 13.2. Creating Your Own App |
| [Prev](mc3.custom.application.php)  | Chapter 13. Custom Applications |  [Next](mc3-pitr.php) |

## 13.2. Creating Your Own App

If you wanted to create your own custom app, as a starting point, you can copy the HelloWorld controller and the HelloWorld app. However you must rename the app to the class you specify in the controller. To create an app from the existing HelloWorld app, follow these steps:

1.  Copy the sample HelloWorld Controller to your new app name:

    shell> cd /opt/msys/pe2/webui/application/modules/custom/controllers/sample
    shell> cp  HelloWorldController.php ../*`NewAppController`*.php
2.  Copy the sample HelloWorld App to your new app name:

    shell> cd /opt/msys/pe2/webui/application/modules/custom/views/scripts
    shell> cp helloworld *`newapp`* -rf
3.  Edit the Controller with the appropriate information. Change the class name and the action of the `getDisplayName` method.

4.  Edit the contents of /opt/msys/pe2/webui/application/modules/custom/views/scripts/*`newapp`* to perform the appropriate actions.

| [Prev](mc3.custom.application.php)  | [Up](mc3.custom.application.php) |  [Next](mc3-pitr.php) |
| Chapter 13. Custom Applications  | [Table of Contents](index.php) |  Appendix A. Point-In-Time Recovery (PITR) for Message Central |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)