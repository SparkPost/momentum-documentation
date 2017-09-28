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

| Part II. Installing Momentum |
| [Prev](licensed_features.supercharger.php)  |   |  [Next](hardware.requirements.php) |

## Part II. Installing Momentum

**Table of Contents**

<dl class="toc">

<dt>[5\. Hardware Considerations](hardware.requirements.php)</dt>

<dd>

<dl>

<dt>[5.1\. Server Roles](hardware.requirements.php#hardware.server_roles)</dt>

<dt>[5.2\. Configuration Options](hardware.config_options.php)</dt>

<dt>[5.3\. Hardware Scaling Approach](hardware.scaling.php)</dt>

<dt>[5.4\. Environmental Considerations](hardware.environmental.php)</dt>

<dt>[5.5\. Hardware Deployment Configuration](hardware.config.php)</dt>

<dt>[5.6\. Production Environment Configurations](production.config.php)</dt>

<dt>[5.7\. Additional Configuration Notes](addl.config.notes.php)</dt>

</dl>

</dd>

<dt>[6\. Before You Begin](before_you_begin.php)</dt>

<dd>

<dl>

<dt>[6.1\. Momentum License](before_you_begin.php#byb.msg.gen.license)</dt>

<dt>[6.2\. Operating System](byb.os.php)</dt>

<dt>[6.3\. Redundancy](byb.redundancy.php)</dt>

<dt>[6.4\. Load Balancing](byb.load_balancing.php)</dt>

<dt>[6.5\. Disable SELinux](byb.disable_selinux.php)</dt>

<dt>[6.6\. Enable Network Time Protocol (NTP)](byb.ntp.php)</dt>

<dt>[6.7\. Adjusting `/etc/sysctl.conf`](byb.sysctl.conf.php)</dt>

<dt>[6.8\. Setting Hostnames](byb.set_hostnames.php)</dt>

<dt>[6.9\. Java Runtime Environment (JRE)](byb.jre.php)</dt>

<dt>[6.10\. Creating `root` and `vertica_dba` Accounts](byb.root_and_vertica_dba.php)</dt>

<dt>[6.11\. Redefining Ephemeral Ports](byb.redefine_ephemeral_ports.php)</dt>

<dt>[6.12\. Configuring Locale](byb.config_vertica_services.php)</dt>

<dt>[6.13\. Configuring SSH and SSHD](byb.config_SSH_and_SSHD.php)</dt>

<dt>[6.14\. Basic Required Packages](byb.basic_packages.php)</dt>

<dt>[6.15\. Riak Provisioning](byb.riak_provisioning.php)</dt>

<dt>[6.16\. Separate Vertica Partition](byb.vertica_partition.php)</dt>

<dt>[6.17\. Disable Postfix and QPIDD](byb.disable_postfix.php)</dt>

<dt>[6.18\. Verifying Analytics Node Requirements](byb.analytics_reqs.php)</dt>

</dl>

</dd>

<dt>[7\. Download the Software Bundle and Prepare](download_bundle.php)</dt>

<dt>[8\. Install / Upgrade the Packages](install_upgrade_packages.php)</dt>

<dt>[9\. New Installation - All Configurations](new_installation.php)</dt>

<dd>

<dl>

<dt>[9.1\. Configure Your MTA Nodes](new_installation.php#install.mta_node)</dt>

<dt>[9.2\. Configure the Cassandra Nodes](install.configure_cassandra.php)</dt>

<dt>[9.3\. Configure the Analytics Nodes](install.analytics_nodes.php)</dt>

<dt>[9.4\. Start Remaining Services](install.start_remaining_services.php)</dt>

</dl>

</dd>

<dt>[10\. Upgrade - Single Node](upgrade.single_node.php)</dt>

<dd>

<dl>

<dt>[10.1\. Preparation](upgrade.single_node.php#upgrade.single_node.preparation)</dt>

<dt>[10.2\. Vertica Updates](upgrade.single_node.vertica_updates.php)</dt>

<dt>[10.3\. Prepare and Run Flyway](upgrade.single_node.configuration.flyway.php)</dt>

<dt>[10.4\. Configuration Changes](upgrade.single_node.configuration.config_all__nodes.php)</dt>

<dt>[10.5\. Software Upgrade](upgrade.single_node.configuration.software_upgrade.php)</dt>

<dt>[10.6\. Update Web UI Configuration](upgrade.single_node.configuration.webui.php)</dt>

<dt>[10.7\. Start Services](upgrade.single_node.configuration.start_services.php)</dt>

<dt>[10.8\. Complete the Software Set Up](upgrade.single_node.complete_setup.php)</dt>

<dt>[10.9\. Next Steps](upgrade.single_node.configuration.next_steps.php)</dt>

</dl>

</dd>

<dt>[11\. Rolling Upgrade - Two-Tier Configuration and Combined Node](upgrade.two_tier_configuration_rolling.php)</dt>

<dd>

<dl>

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

</dd>

<dt>[12\. Post-Installation](post_installation.php)</dt>

<dd>

<dl>

<dt>[12.1\. Installing Partner Modules](post_installation.php#install.additional.packages)</dt>

<dt>[12.2\. Reviewing Configuration Files](install.post-install.config.php)</dt>

<dt>[12.3\. Rotating Logfiles](install.post-install.rotate.php)</dt>

<dt>[12.4\. Download and Install the Vertica Management Console](install.post-install.vertica_mgmt_console.php)</dt>

<dt>[12.5\. Upgrading the Vertica License](install.vertica.license.php)</dt>

<dt>[12.6\. Security Considerations](install.security_considerations.php)</dt>

</dl>

</dd>

<dt>[13\. Adding and Removing Platform Nodes](add_remove_platform_nodes.php)</dt>

<dd>

<dl>

<dt>[13.1\. Adding a Platform Node](add_remove_platform_nodes.php#node_add)</dt>

<dt>[13.2\. Removing a Platform Node](node_remove.php)</dt>

</dl>

</dd>

<dt>[14\. Adding and Removing Analytics Nodes](add_remove_analytics_nodes.php)</dt>

<dd>

<dl>

<dt>[14.1\. Adding an Analytics Node](add_remove_analytics_nodes.php#node_add_analytics)</dt>

<dt>[14.2\. Removing an Analytics Node](node_remove_analytics.php)</dt>

</dl>

</dd>

</dl>

| [Prev](licensed_features.supercharger.php)  |   |  [Next](hardware.requirements.php) |
| 4.3. Supercharger  | [Table of Contents](index.php) |  Chapter 5. Hardware Considerations |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)