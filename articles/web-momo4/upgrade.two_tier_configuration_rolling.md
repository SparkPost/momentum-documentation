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

| Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |
| [Prev](upgrade.single_node.configuration.next_steps.php)  | Part II. Installing Momentum |  [Next](upgrade.two_tier.preparation.prepare_all_nodes_rolling.php) |

## Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node

**Table of Contents**

<dl class="toc">

<dt>[11.1\. Overview](upgrade.two_tier_configuration_rolling.php#upgrade.two_tier.preparation_rolling)</dt>

<dt>[11.2\. Before You Begin the Upgrade](upgrade.two_tier.preparation.prepare_all_nodes_rolling.php)</dt>

<dt>[11.3\. Perform a Cassandra Snapshot](upgrade.two_tier.preparation.snapshot_cassandra_rolling.php)</dt>

<dt>[11.4\. Upgrade Cassandra on the Platform Nodes](upgrade.two_tier.preparation.upgrade_cassandra_rolling.php)</dt>

<dt>[11.5\. Stop Transmissions to the First Platform Node](upgrade.two_tier.preparation.stop_generations_rolling.php)</dt>

<dt>[11.6\. Upgrade Ecelerity and the Cassandra Schema on the First Platform Node](upgrade.two_tier.preparation.ecelerity_rolling.php)</dt>

<dt>[11.7\. Restore Transmissions to the First Platform Node and Stop Transmissions to all other Platform Nodes](upgrade.two_tier.preparation.stop_transmissions_rolling.php)</dt>

<dt>[11.8\. Upgrade Ecelerity on the Remaining Platform Nodes](upgrade.two_tier.preparation.upgrade_ecelerity_rolling.php)</dt>

<dt>[11.9\. Restore Transmissions to the Remaining Platform Nodes](upgrade.two_tier.preparation.restore_tranmissions_rolling.php)</dt>

<dt>[11.10\. Upgrade Vertica on the Analytics Nodes](upgrade.two_tier.preparation.upgrade_vertica_rolling.php)</dt>

<dt>[11.11\. Prepare and Run Flyway](upgrade.two_tier.configuration.flyway_rolling.php)</dt>

<dt>[11.12\. Upgrade Remaining RPMs on Analytics Nodes](upgrade.two_tier.preparation.rpms_rolling.php)</dt>

<dt>[11.13\. Configuration Changes](upgrade.two_tier.configuration.config_all_nodes_rolling.php)</dt>

<dt>[11.14\. Install the Adaptive Delivery API](upgrade.two_tier.configuration.software_upgrade_rolling.php)</dt>

<dt>[11.15\. Update the Web UI Configuration](upgrade.two_tier.configuration.webui_rolling.php)</dt>

<dt>[11.16\. Start Services](upgrade.two_tier.configuration.start_services_rolling.php)</dt>

<dt>[11.17\. Complete the Software Set Up](upgrade.two_tier.complete_setup_rolling.php)</dt>

</dl>

### Warning

**The installation and upgrade instructions in Chapters 8 through 11 are only applicable in their entirety for Momentum 4.x releases prior to 4.2.28.**                                                                                                                                                 For release 4.2.28 and beyond, please refer to the installation and upgrade PDF documents available under the desired release's folder on the Message Systems Support website's [Downloads page](https://support.messagesystems.com/start.php/). If you are uncertain as to which document is applicable to your situation, please contact your technical support representative.

<a class="indexterm" name="idp1149792"></a>

This section documents the upgrade procedures for a local cluster of four or more nodes. This installation type assumes your cluster will not be taken offline while the upgrade is performed. This installation type can be scaled for a variety of configurations, with a minimum configuration of three Platform nodes and one Analytics node to a maximum configuration of 12 Platform nodes and 12 Analytics nodes. The most common configuration consists of three Platform nodes and three Analytics nodes.

Instructions for upgrading a combined node configuration are included as additional information in specific steps or called out in Notes or Warnings.

### Tip

In a combined node configuration, Analytics and Platform nodes are the same nodes, which means instructions will be done on all nodes unless specified otherwise. In addition, primary nodes (i.e., the first Platform node and the first Analytics node) are the same node, and this node runs the `ecconfigd` configuration manager process.

### Note

You can only perform the upgrade from Momentum 4.1-HF4\. If you are running a version of Momentum prior to 4.1-HF4, you must first upgrade to that version, then upgrade to Momentum 4.2\. In addition, you must complete the upgrade in a single session.

## 11.1. Overview

An overview of the rolling upgrade process is shown below.

1.  Pre-upgrade preparation:

    1.  Consider performing a Cassandra compaction.

    2.  Perform a Vertica repartition.

    ### Warning

    Because these steps may take four to six hours to complete, we recommend you complete them before starting the upgrade.

2.  Upgrade the first Platform node.

    1.  Stop all submissions to one node in the cluster and wait for all generations started on that node to complete.

3.  Upgrade the remaining Platform nodes.

    1.  Divert all new submissions to the first node.

    2.  Wait for all generations started on the remaining Platform nodes to complete.

    3.  Upgrade Cassandra.

    4.  Upgrade the MTA (ecelerity packages and related upgrade steps).

4.  Upgrade the Analytics nodes.

### Note

Be sure to read the [Release Notes](https://support.messagesystems.com/start.php) for the version of Momentum that you are installing.

| [Prev](upgrade.single_node.configuration.next_steps.php)  | [Up](p.installing.php) |  [Next](upgrade.two_tier.preparation.prepare_all_nodes_rolling.php) |
| 10.9. Next Steps  | [Table of Contents](index.php) |  11.2. Before You Begin the Upgrade |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)