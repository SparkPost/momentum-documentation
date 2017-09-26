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

| 1.10. Riak Server |
| [Prev](install.additional.packages.php)  | Chapter 1. Installation |  [Next](install.standalone.php) |

## 1.10. Riak Server

### Note

The Riak server is implemented in Momentum version 3.3.

In a cluster configuration, when upgrading to Momentum 3.3, the order in which the roles are upgraded is important because the web UI and MTA roles will be participating in a Riak cluster.

You must upgrade the database role first because of the migration from PostgreSQL 8.3 to 9.0 and you must upgrade the manager/web UI before the MTAs so that the initial Riak cluster will be created (without a prompt) because the web UI requires Riak to be running locally in order to support custom reports.

As of version 3.3, Riak is used as the data storage technology for saving Adaptive Delivery parameters and custom reports. If you are installing Momentum in a cluster configuration with only the default subcluster, when you install one of the cluster MTA nodes, you are asked the following question:

Would you like this node to join the following riak cluster?

Type an existing riak node (name or IP) or 'no' to not join at this time. (*`ip_address`*)

*`ip_address`*
riak: starting
Sent join request to riak-default@*`ip_address`*
riak: stopping

You are prompted to enter the IP address of the cluster manager. Accepting this default points the current node at the instance of Riak running on the cluster manager. If you do not join the Riak cluster during installation you can change this later. See [Section 4.4.4.1, “Configuring Riak After Installation”](operations.riak.php#operations.riak.cluster.configuration.details "4.4.4.1. Configuring Riak After Installation") for detailed instructions on configuring Riak after installation.

If no Riak instance has been created and you are not in the same subcluster as the cluster manager, you will be asked:

Is this the first riak instance in the '*`cluster_name`*' subcluster?"

If you answer "yes" in response to this question, you will not be prompted again and Riak will be set up on this node by the installer.

If you answer "no", you will then be asked to join the Riak cluster:

`Type an existing riak node (name or IP) or 'no' to not join at this time.`

| [Prev](install.additional.packages.php)  | [Up](install.php) |  [Next](install.standalone.php) |
| 1.9. Installing Additional Packages  | [Table of Contents](index.php) |  1.11. Performing a Stand-alone Installation |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)