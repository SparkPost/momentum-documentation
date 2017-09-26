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

| Chapter 7. Download the Software Bundle and Prepare |
| [Prev](byb.analytics_reqs.php)  | Part II. Installing Momentum |  [Next](install_upgrade_packages.php) |

## Chapter 7. Download the Software Bundle and Prepare

Whether you intend to perform a **new install**         or an **upgrade** you need to download the software bundle **on all nodes** .

1.  Download the appropriate Momentum software bundle from the [Message Systems Support website](https://support.messagesystems.com/start.php) for every node that you will install or upgrade.

2.  Copy the bundle to the `/var/tmp` directory on each of the nodes.

    **NOTE:** Here, and throughout the installation documentation, specific releases and revisions shown are just examples, and your appropriate Momentum software bundle will be different.

    `cp momentum-bundle-4.2.1.50062.rhel6.x86_64.tar.gz /var/tmp/`
3.  Unpack the tarball on each node, set the repository directory, and create a "convenience file".

    ```
    cd /var/tmp
    tar -zxf momentum-bundle-4.2.1.50062.rhel6.x86_64.tar.gz
    cd momentum-4.2.1.50062/
    ./setrepodir
    pwd >/var/tmp/inst.dir
    ```

4.  Confirm your valid Momentum `license` file is in the `/opt/msys/ecelerity/etc` folder on each MTA node. Your licenses should be pulled automatically once they have been issued.

    If your node does not have public internet access during installation, you will need to add your valid Momentum `license` files manually.

| [Prev](byb.analytics_reqs.php)  | [Up](p.installing.php) |  [Next](install_upgrade_packages.php) |
| 6.18. Verifying Analytics Node Requirements  | [Table of Contents](index.php) |  Chapter 8. Install / Upgrade the Packages |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)