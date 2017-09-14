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

| B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3 |
| [Prev](snmp-mib-per-domain-metrics.php)  | Appendix B. MIB Files |  [Next](snmp-mib.omniti.php) |

## B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3

These act as a supplement to the MTA-MIB defined group statistics, so that the stat watcher can record active/delayed queues. `G+1` is the MTAGroupIndexID (see RFC 2789 MTA MIB and [Section B.1.1, “Determining the ID for an MTAGroupIndexID”](snmp-mib-per-domain-metrics.php#snmp-mib-MTAGroupIndexID "B.1.1. Determining the ID for an MTAGroupIndexID")). The metrics are as follows:

*   1.3.6.1.4.1.19552.1.3.1.G+1: counter, active queue size

*   1.3.6.1.4.1.19552.1.3.2.G+1: counter, delayed queue size

*   1.3.6.1.4.1.19552.1.3.3.G+1: counter, failed message count

*   1.3.6.1.4.1.19552.1.3.4.G+1: string, binding name (matches MTA MIB)

| [Prev](snmp-mib-per-domain-metrics.php)  | [Up](snmp-mib.php) |  [Next](snmp-mib.omniti.php) |
| B.1. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics  | [Table of Contents](index.php) |  B.3. The `OMNITI-SNMP-MIB.txt` file |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)