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

| Appendix B. MIB Files |
| [Prev](message_responses.php)  | Part XI. Appendix |  [Next](snmp-mib.pergroup.php) |

## MIB Files

**Table of Contents**

<dl class="toc">

<dt>[B.1\. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics](snmp-mib.php#snmp-mib-per-domain-metrics)</dt>

<dt>[B.2\. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3](snmp-mib.pergroup.php)</dt>

<dt>[B.3\. The `OMNITI-SNMP-MIB.txt` file](snmp-mib.omniti.php)</dt>

</dl>

A Management Information Base (MIB) file contains information used to manage entities in a network. This information is accessed by a protocol such as Simple Network Management Protocol (SNMP).

Every managed device and SNMP equipment vendor in the network maintains values in the MIB. Object Identifiers (OIDs) uniquely identify each entity in the MIB hierarchy, which is typically depicted in a tree structure. Each branch of the tree has a number and a name, and the complete path from the top of the tree to the entity forms the name of that entity.

For example, the Enterprise MIB for OmniTI assigned by the Internet Assigned Numbers Authority is `1.3.6.1.4.1.19552`. This is further subdivided by products. For example, Momentum (Ecelerity) has the MIB `1.3.6.1.4.1.19552.1`.

Within Momentum (ecelerity), `1.3.6.1.4.1.19552.1.1` is defined as product information with further subdivisions as shown below:

*   `1.3.6.1.4.1.19552.1.1.1` – string, Product Name (Ecelerity)

*   `1.3.6.1.4.1.19552.1.1.2` – string, version (_EC_VER)

*   `1.3.6.1.4.1.19552.1.1.3` – string, build date (__DATE__)

### Warning

The per-domain metrics exposed via Momentum's OCC-MIB do not support the SNMP GETNEXT operation, which means that you can't walk domain statistics with programs such as snmpwalk. Therefore, to get per-domain statistics via SNMP, you must know in advance what domain to query. This is fine for monitoring known domains, but you can't use SNMP to get a snapshot of the mail queues.

For your convenience, the `OMNITI-SNMP-MIB.txt` file found in the `/opt/msys/ecelerity/docs/` directory is reproduced in this appendix.

## B.1. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics

The per-domain MIB is defined as: `1.3.6.1.4.1.19552.1.2.L.A.B.C.S.G` where `A.B.C` indicates the domain name, and `L` represents the length of that domain. For example, `aol.com` would be represented as:

```
7.97.111.108.46.99.111.109
7  a   o   l  .  c   o   m
```

In this case `7` indicates the length of 'aol.com'. The length and the binding identifier replace `L.A.B.C` in the MIB. `G` corresponds to the MTAGroupIndexID (see RFC 2789, MTA MIB). `S` represents the metric type. We define the following metrics:

*   0: domain name

*   1: receptions

*   2: failures

*   3: deliveries

*   4: transient failures

*   5: outbound connections

*   6: active queue size

*   7: delayed queue size

For more information about Mail Monitoring MIBs, see [RFC2789](http://tools.ietf.org/html/rfc2789).

The `aol.com` domain name would have the following entry on the default binding: 1.3.6.1.4.1.19552.1.2.7.97.111.108.46.99.111.109.0.1: string 'aol.com'.

### B.1.1. Determining the ID for an MTAGroupIndexID

The MTAGroupIndexID can be determined by using snmpwalk and subtracting 1 from last number of the desired binding. You can also use snmpwalk to get the MTAGroupIndexID in order to determine per-domain stats.

For example:

```
shell> /opt/msys/3rdParty/bin/snmpwalk -v1 -c public
10.79.20.132:8162 1.3.6.1.4.1.19552.1.3
SNMPv2-Example::enterprises.19552.1.3.1.1 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.1.2 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.1.3 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.1.4 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.2.1 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.2.2 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.2.3 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.2.4 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.3.1 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.3.2 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.3.3 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.3.4 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.4.1 = STRING: "none/all"
SNMPv2-Example::enterprises.19552.1.3.4.2 = STRING: "none/default"
SNMPv2-Example::enterprises.19552.1.3.4.3 = STRING: "none/cdp"
SNMPv2-Example::enterprises.19552.1.3.4.4 = STRING: "none/example"
```

In the output above, `cdp` and `example` are binding names. The MTAGroupIndexID of `cdp` is `2` because `2` is one less than the last number in `SNMPv2-SMI::enterprises.19552.1.3.4.3`.

| [Prev](message_responses.php)  | [Up](p.appendix.php) |  [Next](snmp-mib.pergroup.php) |
| Appendix A. Message Responses  | [Table of Contents](index.php) |  B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)