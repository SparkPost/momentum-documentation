## Part II. Installing Momentum

**Table of Contents**

<dl class="toc">

<dt>[5\. Hardware Considerations](hardware.requirements)</dt>

<dd>

<dl>

<dt>[5.1\. Server Roles](hardware.requirements#hardware.server_roles)</dt>

<dt>[5.2\. Configuration Options](hardware.config_options)</dt>

<dt>[5.3\. Hardware Scaling Approach](hardware.scaling)</dt>

<dt>[5.4\. Environmental Considerations](hardware.environmental)</dt>

<dt>[5.5\. Hardware Deployment Configuration](hardware.config)</dt>

<dt>[5.6\. Production Environment Configurations](production.config)</dt>

<dt>[5.7\. Additional Configuration Notes](addl.config.notes)</dt>

</dl>

</dd>

<dt>[6\. Before You Begin](before_you_begin)</dt>

<dd>

<dl>

<dt>[6.1\. Momentum License](before_you_begin#byb.msg.gen.license)</dt>

<dt>[6.2\. Operating System](byb.os)</dt>

<dt>[6.3\. Redundancy](byb.redundancy)</dt>

<dt>[6.4\. Load Balancing](byb.load_balancing)</dt>

<dt>[6.5\. Disable SELinux](byb.disable_selinux)</dt>

<dt>[6.6\. Enable Network Time Protocol (NTP)](byb.ntp)</dt>

<dt>[6.7\. Adjusting `/etc/sysctl.conf`](byb.sysctl.conf)</dt>

<dt>[6.8\. Setting Hostnames](byb.set_hostnames)</dt>

<dt>[6.9\. Java Runtime Environment (JRE)](byb.jre)</dt>

<dt>[6.10\. Creating `root` and `vertica_dba` Accounts](byb.root_and_vertica_dba)</dt>

<dt>[6.11\. Redefining Ephemeral Ports](byb.redefine_ephemeral_ports)</dt>

<dt>[6.12\. Configuring Locale](byb.config_vertica_services)</dt>

<dt>[6.13\. Configuring SSH and SSHD](byb.config_SSH_and_SSHD)</dt>

<dt>[6.14\. Basic Required Packages](byb.basic_packages)</dt>

<dt>[6.15\. Riak Provisioning](byb.riak_provisioning)</dt>

<dt>[6.16\. Separate Vertica Partition](byb.vertica_partition)</dt>

<dt>[6.17\. Disable Postfix and QPIDD](byb.disable_postfix)</dt>

<dt>[6.18\. Verifying Analytics Node Requirements](byb.analytics_reqs)</dt>

</dl>

</dd>

<dt>[7\. Download the Software Bundle and Prepare](download_bundle)</dt>

<dt>[8\. Install / Upgrade the Packages](install_upgrade_packages)</dt>

<dt>[9\. New Installation - All Configurations](new_installation)</dt>

<dd>

<dl>

<dt>[9.1\. Configure Your MTA Nodes](new_installation#install.mta_node)</dt>

<dt>[9.2\. Configure the Cassandra Nodes](install.configure_cassandra)</dt>

<dt>[9.3\. Configure the Analytics Nodes](install.analytics_nodes)</dt>

<dt>[9.4\. Start Remaining Services](install.start_remaining_services)</dt>

</dl>

</dd>

<dt>[10\. Upgrade - Single Node](upgrade.single_node)</dt>

<dd>

<dl>

<dt>[10.1\. Preparation](upgrade.single_node#upgrade.single_node.preparation)</dt>

<dt>[10.2\. Vertica Updates](upgrade.single_node.vertica_updates)</dt>

<dt>[10.3\. Prepare and Run Flyway](upgrade.single_node.configuration.flyway)</dt>

<dt>[10.4\. Configuration Changes](upgrade.single_node.configuration.config_all__nodes)</dt>

<dt>[10.5\. Software Upgrade](upgrade.single_node.configuration.software_upgrade)</dt>

<dt>[10.6\. Update Web UI Configuration](upgrade.single_node.configuration.webui)</dt>

<dt>[10.7\. Start Services](upgrade.single_node.configuration.start_services)</dt>

<dt>[10.8\. Complete the Software Set Up](upgrade.single_node.complete_setup)</dt>

<dt>[10.9\. Next Steps](upgrade.single_node.configuration.next_steps)</dt>

</dl>

</dd>

<dt>[11\. Rolling Upgrade - Two-Tier Configuration and Combined Node](upgrade.two_tier_configuration_rolling)</dt>

<dd>

<dl>

<dt>[11.1\. Overview](upgrade.two_tier_configuration_rolling#upgrade.two_tier.preparation_rolling)</dt>

<dt>[11.2\. Before You Begin the Upgrade](upgrade.two_tier.preparation.prepare_all_nodes_rolling)</dt>

<dt>[11.3\. Perform a Cassandra Snapshot](upgrade.two_tier.preparation.snapshot_cassandra_rolling)</dt>

<dt>[11.4\. Upgrade Cassandra on the Platform Nodes](upgrade.two_tier.preparation.upgrade_cassandra_rolling)</dt>

<dt>[11.5\. Stop Transmissions to the First Platform Node](upgrade.two_tier.preparation.stop_generations_rolling)</dt>

<dt>[11.6\. Upgrade Ecelerity and the Cassandra Schema on the First Platform Node](upgrade.two_tier.preparation.ecelerity_rolling)</dt>

<dt>[11.7\. Restore Transmissions to the First Platform Node and Stop Transmissions to all other Platform Nodes](upgrade.two_tier.preparation.stop_transmissions_rolling)</dt>

<dt>[11.8\. Upgrade Ecelerity on the Remaining Platform Nodes](upgrade.two_tier.preparation.upgrade_ecelerity_rolling)</dt>

<dt>[11.9\. Restore Transmissions to the Remaining Platform Nodes](upgrade.two_tier.preparation.restore_tranmissions_rolling)</dt>

<dt>[11.10\. Upgrade Vertica on the Analytics Nodes](upgrade.two_tier.preparation.upgrade_vertica_rolling)</dt>

<dt>[11.11\. Prepare and Run Flyway](upgrade.two_tier.configuration.flyway_rolling)</dt>

<dt>[11.12\. Upgrade Remaining RPMs on Analytics Nodes](upgrade.two_tier.preparation.rpms_rolling)</dt>

<dt>[11.13\. Configuration Changes](upgrade.two_tier.configuration.config_all_nodes_rolling)</dt>

<dt>[11.14\. Install the Adaptive Delivery API](upgrade.two_tier.configuration.software_upgrade_rolling)</dt>

<dt>[11.15\. Update the Web UI Configuration](upgrade.two_tier.configuration.webui_rolling)</dt>

<dt>[11.16\. Start Services](upgrade.two_tier.configuration.start_services_rolling)</dt>

<dt>[11.17\. Complete the Software Set Up](upgrade.two_tier.complete_setup_rolling)</dt>

</dl>

</dd>

<dt>[12\. Post-Installation](post_installation)</dt>

<dd>

<dl>

<dt>[12.1\. Installing Partner Modules](post_installation#install.additional.packages)</dt>

<dt>[12.2\. Reviewing Configuration Files](install.post-install.config)</dt>

<dt>[12.3\. Rotating Logfiles](install.post-install.rotate)</dt>

<dt>[12.4\. Download and Install the Vertica Management Console](install.post-install.vertica_mgmt_console)</dt>

<dt>[12.5\. Upgrading the Vertica License](install.vertica.license)</dt>

<dt>[12.6\. Security Considerations](install.security_considerations)</dt>

</dl>

</dd>

<dt>[13\. Adding and Removing Platform Nodes](add_remove_platform_nodes)</dt>

<dd>

<dl>

<dt>[13.1\. Adding a Platform Node](add_remove_platform_nodes#node_add)</dt>

<dt>[13.2\. Removing a Platform Node](node_remove)</dt>

</dl>

</dd>

<dt>[14\. Adding and Removing Analytics Nodes](add_remove_analytics_nodes)</dt>

<dd>

<dl>

<dt>[14.1\. Adding an Analytics Node](add_remove_analytics_nodes#node_add_analytics)</dt>

<dt>[14.2\. Removing an Analytics Node](node_remove_analytics)</dt>

</dl>

</dd>

</dl>
