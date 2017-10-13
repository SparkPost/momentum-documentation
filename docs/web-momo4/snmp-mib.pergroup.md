## B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3

These act as a supplement to the MTA-MIB defined group statistics, so that the stat watcher can record active/delayed queues. `G+1` is the MTAGroupIndexID (see RFC 2789 MTA MIB and [Section B.1.1, “Determining the ID for an MTAGroupIndexID”](snmp-mib.php#snmp-mib-MTAGroupIndexID "B.1.1. Determining the ID for an MTAGroupIndexID")). The metrics are as follows:

*   1.3.6.1.4.1.19552.1.3.1.G+1: counter, active queue size

*   1.3.6.1.4.1.19552.1.3.2.G+1: counter, delayed queue size

*   1.3.6.1.4.1.19552.1.3.3.G+1: counter, failed message count

*   1.3.6.1.4.1.19552.1.3.4.G+1: string, binding name (matches MTA MIB)

| [Prev](snmp-mib.php)  | [Up](snmp-mib.php) |  [Next](snmp-mib.omniti.php) |
| Appendix B. MIB Files  | [Table of Contents](index.php) |  B.3. The `OMNITI-SNMP-MIB.txt` file |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)