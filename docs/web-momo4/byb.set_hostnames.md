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

| 6.8. Setting Hostnames |
| [Prev](byb.sysctl.conf.php)  | Chapter 6. Before You Begin |  [Next](byb.jre.php) |

## 6.8. Setting Hostnames

<a class="indexterm" name="idp417632"></a>

You must set up system hostnames in a manner that is consistent with Momentum; however, this can be difficult to do in an Amazon Web Services (AWS) environment.

Momentum's installation requires that each node is able to resolve its own hostname (e.g., the value of $HOSTNAME), as well as the hostnames of all nodes in the cluster. We recommend you use fully qualified domain names (FQDNs) for these hostnames.

### Warning

Failure to use consistent and well-resolved hostnames will result in various installation problems and errors.

Run the following commands if your current hostnames are not FQDNs and do not resolve cleanly.

### Note

The following solution is run using basic tools, but you may want to use advanced solutions such as Puppet and cloud-config.

1.  Change the output of `hostname`.

    hostname `hostname -f`
2.  Manually edit the `/etc/sysconfig/network` file so its HOSTNAME field matches the output of `hostname -f`.

    ```
    NETWORKING=yes
    HOSTNAME='mymta1.localnet.example.com'
    ```

3.  Reboot the system. You may also choose to do this:

    `source /etc/sysconfig/network`
4.  Confirm your new hostname resolves successfully.

    `dig +short $HOSTNAME`
5.  Either edit the `/etc/hosts` file on **all systems in the cluster**                        to match this convention or configure your Domain Name Server accordingly.

| [Prev](byb.sysctl.conf.php)  | [Up](before_you_begin.php) |  [Next](byb.jre.php) |
| 6.7. Adjusting `/etc/sysctl.conf`  | [Table of Contents](index.php) |  6.9. Java Runtime Environment (JRE) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)