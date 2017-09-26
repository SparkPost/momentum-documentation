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

| 6.11. Redefining Ephemeral Ports |
| [Prev](byb.root_and_vertica_dba.php)  | Chapter 6. Before You Begin |  [Next](byb.config_vertica_services.php) |

## 6.11. Redefining Ephemeral Ports

The lower limits of the port range as currently defined on Centos are too low as Vertica listens on 5433 and Riak listens on 8099. Redefine the Ephemeral Ports lower limit to a safer value, for example:

`echo "49152 65535" > /proc/sys/net/ipv4/ip_local_port_range`

Confirm the new port range:

`cat /proc/sys/net/ipv4/ip_local_port_range`
### Warning

If you are installing Momentum in AWS, do not use ephemeral disks in your production environment as this can potentially cause a loss of messages.

| [Prev](byb.root_and_vertica_dba.php)  | [Up](before_you_begin.php) |  [Next](byb.config_vertica_services.php) |
| 6.10. Creating `root` and `vertica_dba` Accounts  | [Table of Contents](index.php) |  6.12. Configuring Locale |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)