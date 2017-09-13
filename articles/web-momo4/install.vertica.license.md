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

| 12.5. Upgrading the Vertica License |
| [Prev](install.post-install.vertica_mgmt_console.php)  | Chapter 12. Post-Installation |  [Next](install.security_considerations.php) |

## 12.5. Upgrading the Vertica License

Momentum 4 is shipped with a perpetual 0.1 TB license for Vertica. If you were issued a Vertica license for a different volume level, you must upgrade the license after installation.

### Note

If you are upgrading, you will need a valid HP Vertica license and password. If you have not received these items, contact your Account Representative.

To upgrade your HP Vertica license, complete the following instructions:

### Note

Portions of this procedure are adapted from the [HP Vertica License Renewals or Upgrades](https://my.vertica.com/docs/7.0.x/HTML/index.htm#Authoring/AdministratorsGuide/Licensing/HPVerticaEnterpriseEditionOrEvaluationLicenseRenewalsOrUpgrades.htm%3FTocPath%3DAdministrator's%20Guide%7CManaging%20Licenses%7CInstalling%20or%20Upgrading%20a%20License%20Key%7C_____2).

1.  Copy your HP Vertica license to one of your Analytics nodes.

    scp licensefile.txt *`vertica_dba@myverticahost`*:*`/opt/thispath/`*licensefile.txt
2.  Connect to the Analytics node as the root user.

    ssh *`root@myverticahost`*
3.  Change to the `vertica_dba` account.

    sudo su - *`vertica_dba`*
4.  Run the Administration Tools.

    `admintools`
5.  In the Main Menu, select Advanced Menu, Upgrade License Key, and then OK.

6.  Use your space bar to select the option.

7.  Enter the path to your new license key file and then select OK. The license file pathname is the path used to save the license in step 1.

8.  When prompted, select View EULA to review the End-User License Agreement (EULA).

9.  To officially accept the EULA and complete the license upgrade, exit the EULA and choose Accept EULA.

| [Prev](install.post-install.vertica_mgmt_console.php)  | [Up](post_installation.php) |  [Next](install.security_considerations.php) |
| 12.4. Download and Install the Vertica Management Console  | [Table of Contents](index.php) |  12.6. Security Considerations |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)