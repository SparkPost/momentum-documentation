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

| 26.5. Decommissioning a Log Aggregator |
| [Prev](cluster.config.logging.redundancy.php)  | Chapter 26. Log Aggregation |  [Next](cluster.config.duravip.php) |

## 26.5. Decommissioning a Log Aggregator

To decommission a log aggregator, complete the following operational procedure:

1.  Modify the `ecelerity-cluster.conf` file(s) for the affected subclusters and remove the log aggregator from the subscriber list(s) in the log file names.

2.  Apply that configuration to the cluster.

3.  Allow time for the log aggregator to drain any remaining log data from the node(s). You may opt to skip this part if you have no plan to retain this data.

4.  Remove the log aggregator from your cluster.

5.  On each of the nodes that was journalling data for that log aggregator, use the [jlogctl](executable.jlogctl.php "jlogctl") tool to erase the now redundant subscriber checkpoint information from each of the jlog files.

| [Prev](cluster.config.logging.redundancy.php)  | [Up](log_aggregation.php) |  [Next](cluster.config.duravip.php) |
| 26.4. Redundant Logs  | [Table of Contents](index.php) |  Chapter 27. DuraVIP™: IP Fail over |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)