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
| [Prev](faq.php)  | Part III. Appendices |  [Next](snmp-mib-per-domain-metrics.php) |

## MIB Files

**Table of Contents**

<dl class="toc">

<dt>[B.1\. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics](snmp-mib-per-domain-metrics.php)</dt>

<dt>[B.2\. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3](snmp-mib.pergroup.php)</dt>

<dt>[B.3\. The `OMNITI-SNMP-MIB.txt` file](snmp-mib.omniti.php)</dt>

</dl>

For your convenience, the `OMNITI-SNMP-MIB.txt` file found in the `/opt/msys/ecelerity/docs/` directory is reproduced in this appendix.

### Warning

The per-domain metrics exposed via Momentum's OCC-MIB do not support the SNMP GETNEXT operation. This means that you can't walk the domain statistics with programs such as snmpwalk.

The implication of this is as follows: To get per-domain statistics via SNMP you have to know in advance what domain you are querying for. That's fine if you're monitoring specific known domains, but you cannot use SNMP to get a snapshot of the mail queues.

The Enterprise MIB for OmniTI assigned by the Internet Assigned Numbers Authority is: `1.3.6.1.4.1.19552`. This is further subdivided by products. For example, Momentum (Ecelerity) has the MIB: `1.3.6.1.4.1.19552.1`.

Within Momentum (ecelerity), `1.3.6.1.4.1.19552.1.1` is defined as product information wiith the further subdivisions as shown below:

*   `1.3.6.1.4.1.19552.1.1.1` – string, Product Name (Ecelerity)

*   `1.3.6.1.4.1.19552.1.1.2` – string, version (_EC_VER)

*   `1.3.6.1.4.1.19552.1.1.3` – string, build date (__DATE__)

| [Prev](faq.php)  | [Up](p.appendices.php) |  [Next](snmp-mib-per-domain-metrics.php) |
| Appendix A. Frequently Asked Questions  | [Table of Contents](index.php) |  B.1. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)