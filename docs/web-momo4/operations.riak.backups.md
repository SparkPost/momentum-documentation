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

| 30.4. Backups |
| [Prev](operations.riak.ports.php)  | Chapter 30. Riak |  [Next](environment_file.php) |

## 30.4. Backups

Riak data is distributed across the nodes in the cluster. Provided that you have enough nodes remaining online, the need to restore from a backup should be quite a rare event.

Riak offers the ability to backup all data present on a given node or all data present in the cluster. The backup is stored in a file named by the administrator. This backup can later be used to restore the state of the node or cluster depending on the nature of the backup file.

For details about backing up Riak, consult the [Riak](http://http://docs.basho.com/riak/latest/) documentation.

### Note

Note that some of the Message Systems use cases may result in a large volume of data being retained in Riak. Expect the backup files to be equally large.

| [Prev](operations.riak.ports.php)  | [Up](riak.php) |  [Next](environment_file.php) |
| 30.3. Riak Ports  | [Table of Contents](index.php) |  Chapter 31. Configuring the Environment File |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)