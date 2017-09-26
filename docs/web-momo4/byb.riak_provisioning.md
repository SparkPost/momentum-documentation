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

| 6.15. Riak Provisioning |
| [Prev](byb.basic_packages.php)  | Chapter 6. Before You Begin |  [Next](byb.vertica_partition.php) |

## 6.15. Riak Provisioning

Riak can be deployed as a single node or in a cluster of nodes. More nodes allow for improved redundancy and load distribution. It is recommended that there be a minimum of three nodes in a clustered configuration.

For most deployments, no special additional configuration is required, but if you have a larger number of Riak nodes (8-16) you may want to consider setting the `ring_creation_size` parameter to a larger value. For details on this parameter, consult the [Riak](http://docs.basho.com/riak/latest/) documentation. It is important to note that this parameter cannot be changed once nodes are live; it must be set to the desired size and remain at that value on each and every node that participates in the Riak cluster.

| [Prev](byb.basic_packages.php)  | [Up](before_you_begin.php) |  [Next](byb.vertica_partition.php) |
| 6.14. Basic Required Packages  | [Table of Contents](index.php) |  6.16. Separate Vertica Partition |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)