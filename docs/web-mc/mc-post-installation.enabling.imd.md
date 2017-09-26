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

| 3.11. Exposing IMD Controls in the Web UI |
| [Prev](mc-post-installation.imd.php)  | Chapter 3. Post-installation Tasks |  [Next](mc-post-installation.sms.php) |

## 3.11. Exposing IMD Controls in the Web UI

In addition to the configuration options shown [Section 3.10, “Configuring For Intelligent Message Disposition”](mc-post-installation.imd.php "3.10. Configuring For Intelligent Message Disposition") you must also set the `custom.enableImdUi` option in the `/opt/msys/pe2/webui/application/configs/0-application.ini` When this option is set to `1`, IMD management controls are shown in the Web UI.

From the web UI you can set IMD at the Org, Campaign or Mailing level. For more information about this control see:

*   [Orgs](https://support.messagesystems.com/docs/web-mc-user/mc3-administration.php#mc3-administration-orgs)

*   [Editing a Campaign](https://support.messagesystems.com/docs/web-mc-user/mc3-campaign-editing.php)

*   [Editing a Mailing](https://support.messagesystems.com/docs/web-mc-user/mc3-mailings-editing.php)

### Warning

Do not change other options in the `/opt/msys/pe2/webui/application/configs/0-application.ini` file without consulting the Message Systems support team.

### 3.11.1. IMD and DuraVIP™

You cannot deploy IMD and use [DuraVIP™](https://support.messagesystems.com/docs/web-ref/cluster.config.duravip.php) bindings.

As a temporary replacement for DuraVIP™ we recommend that customers use a load-balancer/SNAT deployment.

| [Prev](mc-post-installation.imd.php)  | [Up](mc-post-installation.php) |  [Next](mc-post-installation.sms.php) |
| 3.10. Configuring For Intelligent Message Disposition  | [Table of Contents](index.php) |  3.12. Configuring for SMS |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)