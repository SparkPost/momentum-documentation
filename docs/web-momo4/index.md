## Momentum 4 Reference Manual

### Message Systems, Inc.

Copyright © 2014 Message Systems, Inc.

<a name="idp196960"></a>

Confidential & Proprietary.

**Abstract**

This book documents Momentum 4.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[Preface](preface "test")</dt>
[Momentum 4 REST API](https://support.messagesystems.com/docs/web-rest/v1_index.html)
<dd>

<dl>

<dt>[1\. Typographical Conventions Used in This Document](preface#typographical)</dt>

</dl>

</dd>

<dt>[I. Introduction to Momentum](p.intro)</dt>

<dd>

<dl>

<dt>[1\. Components](components)</dt>

<dt>[2\. Life of A Message](loam)</dt>

<dt>[3\. Roles and Behaviors](roles_behaviors)</dt>

<dt>[4\. Licensed Features](licensed_features)</dt>

<dd>

<dl>

<dt>[4.1\. Message Generation](licensed_features#licensed_features.message.generation)</dt>

<dt>[4.2\. Adaptive Delivery](licensed_features.adaptive.delivery)</dt>

<dt>[4.3\. Supercharger](licensed_features.supercharger)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[II. Installing Momentum](p.installing)</dt>

<dd>

<dl>

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

</dd>

<dt>[III. Configuring Momentum](p.configuration)</dt>

<dd>

<dl>

<dt>[15\. Configuration Overview](conf.overview)</dt>

<dd>

<dl>

<dt>[15.1\. Configuration Files](conf.overview#conf.files)</dt>

<dt>[15.2\. Configuration Options](conf.options)</dt>

<dt>[15.3\. Configuration Scopes and Fallback](ecelerity.conf.fallback)</dt>

<dt>[15.4\. Listeners](listeners)</dt>

<dt>[15.5\. Modules](module_config)</dt>

<dt>[15.6\. `ecelerity.conf` File](conf.ref.ecelerity.conf)</dt>

</dl>

</dd>

<dt>[16\. Cluster-specific Configuration](cluster)</dt>

<dd>

<dl>

<dt>[16.1\. Cluster-specific Configuration Files](cluster#cluster.config_files)</dt>

<dt>[16.2\. `eccluster.conf` File](conf.ref.eccluster.conf)</dt>

<dt>[16.3\. `ecelerity-cluster.conf` File](conf.ref.ecelerity_cluster.conf)</dt>

<dt>[16.4\. `msgc_server.conf` File](conf.ref.msgc_server.conf)</dt>

<dt>[16.5\. Cluster-specific Listeners](cluster.listeners)</dt>

<dt>[16.6\. Configuring Momentum for High Availability and Failover](cluster.config.failover)</dt>

<dt>[16.7\. Configuring Riak in a Cluster](cluster.riak.configuration)</dt>

</dl>

</dd>

<dt>[17\. Configuring Momentum's System Console](control_listener)</dt>

<dd>

<dl>

<dt>[17.1\. Control_Listener Configuration](control_listener#control_listener.config)</dt>

<dt>[17.2\. Control_Listener Authentication](control_auth)</dt>

<dt>[17.3\. Control_Listener Accounting](control_acct)</dt>

<dt>[17.4\. Control_Listener Authorization](control_authz)</dt>

</dl>

</dd>

<dt>[18\. Configuring Inbound Mail Service Using ECStream](ecstream_listener)</dt>

<dd>

<dl>

<dt>[18.1\. ECStream_Listener Configuration](ecstream_listener#ecstream_listener.config)</dt>

</dl>

</dd>

<dt>[19\. Configuring Inbound Mail Service Using SMTP](esmtp_listener)</dt>

<dd>

<dl>

<dt>[19.1\. ESMTP_Listener Configuration](esmtp_listener#esmtp_listener.config)</dt>

<dt>[19.2\. Inbound Email Relay or Gateway](esmtp_listener.relay_domains)</dt>

<dt>[19.3\. `Reconfig_Message` Option](esmtp_listener.reconfig_message)</dt>

<dt>[19.4\. SMTP Extensions](esmtp_listener.extensions)</dt>

<dt>[19.5\. ESMTP_Listener Authentication](inbound_smtp)</dt>

<dt>[19.6\. Inbound SSL](inbound_ssl)</dt>

<dt>[19.7\. Inbound TLS](inbound_tls)</dt>

</dl>

</dd>

<dt>[20\. Configuring Inbound Mail Service Using HTTP](http_listener)</dt>

<dd>

<dl>

<dt>[20.1\. HTTP_Listener Configuration](http_listener#http_listener.config)</dt>

<dt>[20.2\. `msg_gen.conf` File](conf.ref.msg_gen.conf)</dt>

</dl>

</dd>

<dt>[21\. Enforcing REST API/UI User Authentication](auth)</dt>

<dt>[22\. Using Yahoo! DomainKeys](using_domainkeys)</dt>

<dd>

<dl>

<dt>[22.1\. DomainKeys Signing](using_domainkeys#using_domainkeys.signing)</dt>

<dt>[22.2\. DomainKeys Validation](using_domainkeys.validation)</dt>

</dl>

</dd>

<dt>[23\. Using DomainKeys Identified Mail (DKIM) Signatures](using_dkim)</dt>

<dd>

<dl>

<dt>[23.1\. DKIM Signing](using_dkim#using_dkim.signing)</dt>

<dt>[23.2\. DKIM Validation](using_dkim.validation)</dt>

</dl>

</dd>

<dt>[24\. Configuring Multiple Event Loops](multi_event_loops)</dt>

<dt>[25\. Configuring Outbound Mail Delivery](outbound_mail)</dt>

<dd>

<dl>

<dt>[25.1\. Routing Mail](outbound_mail#outbound_mail.routing.mail)</dt>

<dt>[25.2\. Prohibited_Hosts](outbound_mail.prohibited.hosts)</dt>

<dt>[25.3\. MultiVIP© Interfaces](outbound_mail.multivip.interfaces)</dt>

<dt>[25.4\. Throttling and Traffic Shaping](outbound_mail.traffic.shaping)</dt>

<dt>[25.5\. Outbound TLS](tls_option)</dt>

<dt>[25.6\. Outbound XCLIENT support](outbound_mail.outbound.xclient)</dt>

<dt>[25.7\. Outbound Email Relay](outbound_mail.relay_hosts)</dt>

</dl>

</dd>

<dt>[26\. Log Aggregation](log_aggregation)</dt>

<dd>

<dl>

<dt>[26.1\. Configuring Log Aggregation](log_aggregation#log_aggregation.configuration)</dt>

<dt>[26.2\. Centralized Logging Example](cluster.config.logging.centalized.logging)</dt>

<dt>[26.3\. Complex Centralized Logging Deployments](cluster.config.logging.complex)</dt>

<dt>[26.4\. Redundant Logs](cluster.config.logging.redundancy)</dt>

<dt>[26.5\. Decommissioning a Log Aggregator](cluster.config.logging.decommissioning)</dt>

</dl>

</dd>

<dt>[27\. DuraVIP™: IP Fail over](cluster.config.duravip)</dt>

<dd>

<dl>

<dt>[27.1\. IP Addresses and `duravip_follow`](cluster.config.duravip#cluster.config.duravip_follow)</dt>

<dt>[27.2\. `duravip_follow` and the #mmove Binding](cluster.config.mmove)</dt>

<dt>[27.3\. Address Resolution Protocol (ARP) traffic](cluster.config.arp_all_hosts)</dt>

<dt>[27.4\. DuraVIP™ Configuration Conflicts and Ambiguities](cluster.duravip.conflict)</dt>

</dl>

</dd>

<dt>[28\. Data Replication](cluster.config.replication)</dt>

<dd>

<dl>

<dt>[28.1\. Replication Configurations](cluster.config.replication#cluster.replication.features)</dt>

</dl>

</dd>

<dt>[29\. PostgreSQL](postgresql)</dt>

<dd>

<dl>

<dt>[29.1\. PostgreSQL Overview](postgresql#postgresql.overview)</dt>

<dt>[29.2\. Running the PostgreSQL Server](postgresql.server)</dt>

<dt>[29.3\. Using the PostgreSQL Client Program](postgresql.client)</dt>

<dt>[29.4\. Dumping and Restoring the Database](postgresql.migrating)</dt>

</dl>

</dd>

<dt>[30\. Riak](riak)</dt>

<dd>

<dl>

<dt>[30.1\. Riak Overview](riak#riak.overview)</dt>

<dt>[30.2\. Running the Riak Service](riak.service)</dt>

<dt>[30.3\. Riak Ports](operations.riak.ports)</dt>

<dt>[30.4\. Backups](operations.riak.backups)</dt>

</dl>

</dd>

<dt>[31\. Configuring the Environment File](environment_file)</dt>

</dl>

</dd>

<dt>[IV. Logging](p.logs)</dt>

<dd>

<dl>

<dt>[32\. Logging Overview](logging.overview)</dt>

<dd>

<dl>

<dt>[32.1\. Log Files](logging.overview#logging.overview.files)</dt>

<dt>[32.2\. Logging Configuration](logging.configuration)</dt>

</dl>

</dd>

<dt>[33\. Log Monitoring](log_monitoring)</dt>

<dt>[34\. Rotating Logs **ec_rotate**](log_rotating)</dt>

<dd>

<dl>

<dt>[34.1\. `ec_rotate.conf` File](log_rotating#conf.ref.ec_rotate.conf)</dt>

</dl>

</dd>

<dt>[35\. Log Formats](log_formats)</dt>

<dd>

<dl>

<dt>[35.1\. `acctlog`](log_formats#log_formats.acctlog)</dt>

<dt>[35.2\. `adaptive` Log](adaptive.log.format)</dt>

<dt>[35.3\. `bouncelog`](log_formats.bouncelog)</dt>

<dt>[35.4\. `fbllog`](log_formats.fbllog)</dt>

<dt>[35.5\. `httplog`](log_formats.httplog)</dt>

<dt>[35.6\. `importlog`](log_formats.importlog)</dt>

<dt>[35.7\. `mainlog`](log_formats.mainlog)</dt>

<dt>[35.8\. `paniclog`](log_formats.paniclog)</dt>

<dt>[35.9\. `rejectlog`](log_formats.rejectlog)</dt>

<dt>[35.10\. Bounce Classification Codes](bounce_logger.classification.codes)</dt>

<dt>[35.11\. Connection Stages](log_formats.connection.stages)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[V. Using the System Console](p.operations)</dt>

<dd>

<dl>

<dt>[36\. Starting Momentum (**ecelerity**)](conf.starting)</dt>

<dd>

<dl>

<dt>[36.1\. Startup Scripts](conf.starting#startup.scripts)</dt>

</dl>

</dd>

<dt>[37\. Using the System Console (**ec_console**)](operations)</dt>

<dd>

<dl>

<dt>[37.1\. Connecting to the Console](operations#operations.console)</dt>

<dt>[37.2\. Console Commands](operations.console-commands)</dt>

<dt>[37.3\. Using Module-Specific Console Commands](module_specific_console_commands.using)</dt>

<dt>[37.4\. Setting and Getting Module Options from the Console](modules.options.console)</dt>

<dt>[37.5\. Creating Custom Console Commands](operations.console.lua)</dt>

</dl>

</dd>

<dt>[38\. Using the Cluster Manager (**eccmgr**)](cluster.config.operations)</dt>

<dd>

<dl>

<dt>[38.1\. Connecting to the Console on the Cluster Manager](cluster.config.operations#idp4497120)</dt>

<dt>[38.2\. Console Commands for the Cluster Manager](cluster.config.operations.eccmgr.console)</dt>

</dl>

</dd>

<dt>[39\. CIDR Server](cluster.cidr_server)</dt>

<dd>

<dl>

<dt>[39.1\. `cidr_cli` Utility](cluster.cidr_server#cluster.cidr_cli)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[VI. SMTP Injection](p.smtp_injections)</dt>

<dd>

<dl>

<dt>[40\. Adjusting your Client Mail Application](smtp_injection)</dt>

<dt>[41\. Tracking Engagement for SMTP](engagement_tracking_smtp)</dt>

<dd>

<dl>

<dt>[41.1\. Introduction](engagement_tracking_smtp#engagement_tracking_smtp.intro)</dt>

<dt>[41.2\. Using the X-MSYS-API Header for Engagement Tracking](x-msys-api_header)</dt>

<dt>[41.3\. Using Policy for Engagement Tracking](engagement_tracking_smtp.policy)</dt>

<dt>[41.4\. Escaping {{ and }} in SMTP Message Body](engagement_tracking_smtp.escaping)</dt>

</dl>

</dd>

<dt>[42\. Reporting Options](smtp_reporting_options)</dt>

</dl>

</dd>

<dt>[VII. Message Generation (HTTP)](p.http_rest)</dt>

<dd>

<dl>

<dt>[43\. Creating an API Key](create_apikey)</dt>

<dt>[44\. Managing Your API Keys](web-ui.apikeys)</dt>

<dd>

<dl>

<dt>[44.1\. Viewing Your API Keys](web-ui.apikeys#web-ui.apikeys.viewing)</dt>

<dt>[44.2\. Creating an API Key](web-ui.apikeys.create)</dt>

<dt>[44.3\. Updating an API Key](web-ui.apikeys.update)</dt>

<dt>[44.4\. Deleting an API Key](web-ui.apikeys.delete)</dt>

</dl>

</dd>

<dt>[45\. Generating a Transmission](message_gen)</dt>

<dt>[46\. Using Substitution Data](substitution_data)</dt>

<dt>[47\. Creating Stored Templates](stored_template)</dt>

<dt>[48\. Managing Your Templates in the UI](web-ui.templates)</dt>

<dd>

<dl>

<dt>[48.1\. Viewing Your Templates](web-ui.templates#web-ui.templates.view)</dt>

<dt>[48.2\. Creating a Template](web-ui.templates.create)</dt>

<dt>[48.3\. Previewing and Testing Your Template](web-ui.templates.preview)</dt>

<dt>[48.4\. Updating Your Template](web-ui.update.template)</dt>

<dt>[48.5\. Publishing Your Template](web-ui.templates.publish)</dt>

<dt>[48.6\. Deleting a Template](web-ui.templates.delete)</dt>

</dl>

</dd>

<dt>[49\. Using Stored Templates](using_template)</dt>

<dt>[50\. Creating Stored Recipient Lists](stored_list)</dt>

<dd>

<dl>

<dt>[50.1\. Managing Recipient Lists using the UI](stored_list#manage_list_ui)</dt>

</dl>

</dd>

<dt>[51\. Using Stored Recipient Lists](using_list)</dt>

<dt>[52\. Sending Emails as CC and BCC](sending_cc_bcc)</dt>

<dt>[53\. Using Complex Templates](complex_template)</dt>

</dl>

</dd>

<dt>[VIII. Reporting and Engagement Tracking](p.analytics)</dt>

<dd>

<dl>

<dt>[54\. Reporting Options](http_reporting_options)</dt>

<dt>[55\. Getting Started with the Web-based User Interface](web-ui)</dt>

<dd>

<dl>

<dt>[55.1\. Recipient Lists](web-ui#web-ui.recipients)</dt>

</dl>

</dd>

<dt>[56\. Using the UI for Reporting](reporting_ui)</dt>

<dt>[57\. Reports and Engagement Tracking in the UI](web-ui.reports)</dt>

<dd>

<dl>

<dt>[57.1\. Selecting Your Metrics and Filters](web-ui.reports#web-ui.reports.selecting.metrics.filters)</dt>

<dt>[57.2\. Viewing Your Reports](web-ui.reports.viewing.reports)</dt>

<dt>[57.3\. Adaptive Delivery Report](web-ui.reports.adaptive.delivery)</dt>

<dt>[57.4\. Evaluating Your Campaign Performance](web-ui.reports.evaluating.campaign.performance)</dt>

</dl>

</dd>

<dt>[58\. Using the Metrics API for Reporting](reporting_metrics)</dt>

<dt>[59\. Using Webhooks for Event Data](reporting_webhooks)</dt>

<dt>[60\. Managing Your Webhooks in the UI](web-ui.webhooks)</dt>

<dd>

<dl>

<dt>[60.1\. Viewing Your Webhooks](web-ui.webhooks#web-ui.webhooks.viewing)</dt>

<dt>[60.2\. Creating a Webhook](web-ui.webhooks.create)</dt>

<dt>[60.3\. Testing Your Webhook](web-ui.webhooks.test)</dt>

<dt>[60.4\. Updating Your Webhook](web-ui.webhooks.update)</dt>

<dt>[60.5\. Deleting a Webhook](web-ui.webhooks.delete)</dt>

</dl>

</dd>

<dt>[61\. Tracking Engagement for HTTP](engagement_tracking_http)</dt>

</dl>

</dd>

<dt>[IX. Writing Policy](p.policy)</dt>

<dd>

<dl>

<dt>[62\. Implementing Policy with Momentum](policy)</dt>

<dd>

<dl>

<dt>[62.1\. Validation and the Validation Context](policy#policy.validation)</dt>

<dt>[62.2\. Policy Scriptlets](implementing.policy.scriptlets)</dt>

</dl>

</dd>

<dt>[63\. Validation Context Variables](policy.context.variables)</dt>

<dd>

<dl>

<dt>[63.1\. Connection Context Variables](policy.context.variables#policy.predefined-context-conn)</dt>

<dt>[63.2\. Message Context Variables](policy.context-mess)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[X. Reference](p.reference)</dt>

<dd>

<dl>

<dt>[64\. Lua Functions Summary](lua.summary_table)</dt>

<dt>[65\. Modules Summary](modules.summary.all.modules)</dt>

<dt>[66\. Configuration Options Summary](config.options.summary)</dt>

<dt>[67\. Console Commands Summary](console_commands)</dt>

<dt>[68\. Executable Command Summary](exe)</dt>

<dt>[69\. Hook Points and C Functions Reference](hooks)</dt>

<dd>

<dl>

<dt>[msg_gen_data_spool](hooks.msg_gen_data_spool) — This hook is invoked after a message has been generated by the msg_gen module</dt>

<dt>[config_rsrc_setup](hooks.config_rsrc_setup) — Register a resource</dt>

<dt>[ec_config_rsrc_get](apis.ec_config_rsrc_get) — Return a resource list blobject from the configuration system</dt>

<dt>[ec_httpsrv_register_auth](apis.ec_httpsrv_register_auth) — Register an HTTP handler for authenticating a URI</dt>

<dt>[ec_httpsrv_request_local_address](apis.ec_httpsrv_request_local_address) — Returns the local IP address from the current session</dt>

<dt>[ec_httpsrv_request_peer_address](apis.ec_httpsrv_request_peer_address) — Returns the remote peer address from the current session</dt>

</dl>

</dd>

<dt>[70\. Lua Functions Reference](lua.function.details)</dt>

<dd>

<dl>

<dt>[msys.db.execute](lua.ref.msys.db.execute) — Execute a query that is not expected to return data</dt>

<dt>[ac:esmtp_capability_add](lua.ref.ac_esmtp_capability_add) — Add a capability to the EHLO response</dt>

<dt>[ac:esmtp_capability_remove](lua.ref.ac_esmtp_capability_remove) — Remove a capability string from the EHLO response</dt>

<dt>[ac:inbound_session_count](lua.ref.ac_inbound_session_count) — Return the current inbound session count to this listener for the connecting IP</dt>

<dt>[msys.cloudmark.analyze](lua.ref.msys.cloudmark.analyze) — Analyze a message using Cloudmark</dt>

<dt>[msys.cloudmark.add_af_data](lua.ref.msys.cloudmark.add_af_data) — Pass data for use with the Cloudmark ActiveFilter.</dt>

<dt>[msys.cloudmark.score](lua.ref.msys.cloudmark.score) — Scan messages using Cloudmark</dt>

<dt>[msys.cloudmark.score_af](lua.ref.msys.cloudmark.score_af) — Set the Cloudmark ActiveFilter score threshold</dt>

<dt>[msys.cloudmark.set_af_mode_discard](lua.ref.msys.cloudmark.set_af_mode_discard) — Set the Cloudmark ActiveFilter mode to DISCARD.</dt>

<dt>[msys.cloudmark.set_af_mode_keep](lua.ref.msys.cloudmark.set_af_mode_keep) — Set the Cloudmark ActiveFilter mode to KEEP.</dt>

<dt>[msys.cloudmark.set_af_mode_movemsg](lua.ref.msys.cloudmark.set_af_mode_movemsg) — Set the Cloudmark ActiveFilter mode to MOVEMSG.</dt>

<dt>[msys.cloudmark.set_af_msi_address](lua.ref.msys.cloudmark.set_af_msi_address) — Set the address for the Cloudmark ActiveFilter MSI Messages.</dt>

<dt>[msys.apn.apn_status_classifier](lua.ref.msys.apn.apn_status_classifier) — Determine whether the delivery status code represents a permanent or temporary failure</dt>

<dt>[client:do_request](lua.ref.client_do_request) — Perform an HTTP request</dt>

<dt>[client:get_body](lua.ref.client_get_body) — Get the body of an HTTP response</dt>

<dt>[client:get_headers](lua.ref.client_get_headers) — Get HTTP headers</dt>

<dt>[client:get_status](lua.ref.client_get_status) — Return the status of an HTTP request</dt>

<dt>[sess:request_add_header](lua.ref.sess_request_add_header) — Add a header to an HTTP session</dt>

<dt>[sess:request_delete_header](lua.ref.sess_request_delete_header) — Delete a header from an HTTP session</dt>

<dt>[sess:request_finalize](lua.ref.sess_request_finalize) — Finalize changes to an HTTP request</dt>

<dt>[sess:request_set_body](lua.ref.sess_request_set_body) — Set the body of an HTTP session</dt>

<dt>[msys.httpclnt.http_status_classifier](lua.ref.msys.httpclnt.http_status_classifier) — Determine the delivery status of the "DLV_Response_Status" variable</dt>

<dt>[msys.http.client.new](lua.ref.msys.http.client.new) — Create an HTTP client</dt>

<dt>[client:parse_headers](lua.ref.client_parse_headers) — Parse the headers of an HTTP response</dt>

<dt>[client:set_header](lua.ref.client_set_header) — Set an HTTP header</dt>

<dt>[client:set_timeout](lua.ref.client_set_timeout) — Set the timeout for an HTTP client</dt>

<dt>[c:close](lua.ref.curl.c_close) — Close a curl object</dt>

<dt>[c:perform](lua.ref.curl.c_perform) — Perform the file transfer</dt>

<dt>[c:setopt](lua.ref.curl.c_setopt) — Set the option value of a curl object</dt>

<dt>[curl.escape](lua.ref.curl.escape) — URL encode a string</dt>

<dt>[curl.new](lua.ref.curl.new) — Create a cURL object</dt>

<dt>[curl.unescape](lua.ref.curl.unescape) — Unescape URL encoding in strings</dt>

<dt>[msys.core.dns_get_domain](lua.ref.msys.core.dns_get_domain) — Get a domain record</dt>

<dt>[msys.core.get_now_ts](lua.ref.msys.core.get_now_ts) — Get the current time</dt>

<dt>[msys.core.mail_queue_delay_domain](lua.ref.msys.core.mail_queue_delay_domain) — Add a domain record to the delayed queue</dt>

<dt>[msys.core.string_new](lua.ref.msys.core.string_new) — Create an ec_string</dt>

<dt>[msg:code](lua.ref.msg_code) — Get or set the message code</dt>

<dt>[msg:get_envelope2](lua.ref.msg_get_envelope2) — Get envelope values</dt>

<dt>[msg:header](lua.ref.header) — Manipulate message headers</dt>

<dt>[msg:listener_addr](lua.ref.msg_listener_addr) — Get the `recv_via` IP and/or PORT.</dt>

<dt>[msg:reception_peer](lua.ref.msg_reception_peer) — Get the `recv_from` IP and/or PORT.</dt>

<dt>[msg:context_delete](lua.ref.msg_context_delete) — Delete a context variable</dt>

<dt>[msg:context_exists](lua.ref.msg_context_exists) — Check if a context variable exists</dt>

<dt>[msg:context_exists_and_get](lua.ref.msg_context_exists_and_get) — Check if a context variable exists and get it</dt>

<dt>[msg:context_get](lua.ref.msg_context_get) — Get a context variable</dt>

<dt>[msg:context_set](lua.ref.msg_context_set) — Sets a context variable</dt>

<dt>[msgpart:unlink](lua.ref.msgpart_unlink) — Remove the part (and its children) from the MIME tree</dt>

<dt>[msys.core.io_wrapper_open](lua.ref.msys.core.io_wrapper_open) — Open a handle to a resource</dt>

<dt>[msys.cast](lua.ref.msys.cast) — Cast an object to the specified class</dt>

<dt>[msys.config](lua.ref.msys.config) — Set or get configuration values</dt>

<dt>[msys.dnsLookup](lua.ref.msys.dnslookup) — Perform a DNS lookup</dt>

<dt>[msys.expandMacro](lua.ref.msys.expandMacro) — Expand macros (such as sieve, spf and custom_logger macros)</dt>

<dt>[msys.getClassMetaTable](lua.ref.msys.getClassMetaTable) — Return the metatable for the named class</dt>

<dt>[msys.httpsrv.register](lua.ref.msys.httpsrv.register) — Register a Lua function as an HTTP endpoint</dt>

<dt>[msys.idn.to_idn](lua.ref.msys.idn) — Attempts to convert the domain to the IDN format</dt>

<dt>[msys.idn.to_utf8](lua.ref.msys.idn_utf8) — Converts an IDN formatted string to unicode</dt>

<dt>[msys.lock](lua.ref.msys.lock) — The current running OS level thread obtains a lock on the named mutex</dt>

<dt>[msys.parseRFC2822Addresses](lua.ref.msys.parseRFC2822Addresses) — Parse the address string per the address parsing rules defined in RFC2822</dt>

<dt>[msys.readfile](lua.ref.msys.readfile) — Read the entire contents of the specified file or URI</dt>

<dt>[msys.registerAuth](lua.ref.msys.registerAuth) — Register an authentication/authorization scheme that can be used for SMTP or control channel authentication</dt>

<dt>[msys.registerControl](lua.ref.msys.registerControl) — Register a command with the control channel subsystem</dt>

<dt>[msys.registerModule](lua.ref.msys.registerModule) — Register a Lua module with the system.</dt>

<dt>[msys.runInPool](lua.ref.msys.runinpool) — Run a function in a separate threadpool</dt>

<dt>[msys.sleep](lua.ref.msys.sleep) — When called in the scheduler thread, suspend the current session for the specified duration</dt>

<dt>[msys.snmpTrap](lua.ref.msys.snmpTrap) — Issue an SNMP trap</dt>

<dt>[msys.type](lua.ref.msys.type) — Return the type name of the supplied parameter</dt>

<dt>[msys.unlock](lua.ref.msys.unlock) — Release a lock obtained via msys.lock</dt>

<dt>[session:request_url_get](lua.ref.session_request_url_get) — Get the request URL</dt>

<dt>[session:response_status_set_std](lua.ref.session_response_status_set_std) — Set the HTTP status for the session response</dt>

<dt>[json.decode](lua.ref.json.decode) — Create a JSON object from a JSON string</dt>

<dt>[json.encode](lua.ref.json.encode) — Convert a Lua variable or an expression for use with a JSON object</dt>

<dt>[json.new](lua.ref.json.new) — Create an empty JSON object</dt>

<dt>[json.strerror](lua.ref.json.strerror) — Return the description of a JSON error code</dt>

<dt>[msg.batch_id](lua.ref.msg.batch_id) — Return the human-readable ec_message.batch_id</dt>

<dt>[msg.conn_id](lua.ref.msg.conn_id) — Return the human-readable ec_message.conn_id</dt>

<dt>[msg.id](lua.ref.msg.id) — Return the human-readable ec_message.id</dt>

<dt>[msg:address_header](lua.ref.msg_address_header) — Returns address components as an array</dt>

<dt>[msg:binding](lua.ref.msg_binding) — Set or get the message binding</dt>

<dt>[msg:binding_group](lua.ref.msg_binding_group) — Sets the binding_group to the named binding, if one is provided.</dt>

<dt>[msg:body](lua.ref.msg_body) — Set the message body (minus headers) if provided</dt>

<dt>[msg:body_match](lua.ref.msg_body_match) — Streaming interface to a PCRE search of a message body (minus headers)</dt>

<dt>[msg:body_replace](lua.ref.msg_body_replace) — Streaming interface to a PCRE replacement of a message body (minus headers)</dt>

<dt>[msg:build](lua.ref.msg_build) — Create a message</dt>

<dt>[msg:discard](lua.ref.msg_discard) — Silently discard a message</dt>

<dt>[msg:forward](lua.ref.msg_forward) — Forward the current message to recipients other than the original recipients</dt>

<dt>[msg:get_delivery_method](lua.ref.msg_get_delivery_method) — Return the delivery method for a message</dt>

<dt>[msg:get_message_size](lua.ref.msg_get_message_size) — Return the size of a message</dt>

<dt>[msg:inject](lua.ref.msg_inject) — Use this function to send mail</dt>

<dt>[msg:is_mcmt](lua.ref.msg_is_mcmt) — Determine whether a message is a MCMT message</dt>

<dt>[msg:mailfrom](lua.ref.msg_mailfrom) — Sets the 'MAIL FROM' email address if one is provided</dt>

<dt>[msg:makeBoundary](lua.ref.msg_makeBoundary) — Generates a unique boundary string</dt>

<dt>[msg:makeContainer](lua.ref.msg_makeContainer) — Creates a new, unlinked, container message part</dt>

<dt>[msg:makePart](lua.ref.msg_makePart) — Creates a new, unlinked, singleton (or leaf) message part</dt>

<dt>[msg:mime](lua.ref.msg_mime) — Returns the top of the MIME tree for the message, a message part</dt>

<dt>[msg:raw](lua.ref.msg_raw) — Set or returns the message content</dt>

<dt>[msg:raw_match](lua.ref.msg_raw_match) — Streaming interface to a PCRE search of the message content</dt>

<dt>[msg:raw_replace](lua.ref.msg_raw_replace) — Streaming interface to a PCRE replacement of message content</dt>

<dt>[msg:rcptto](lua.ref.msg_rcptto) — Sets the 'RCPT TO' email address if one is provided</dt>

<dt>[msg:routing_domain](lua.ref.msg_routing_domain) — Set or return the routing domain for a message</dt>

<dt>[msg:text](lua.ref.msg_text) — Return the transfer decoded text for the body</dt>

<dt>[msg:text](lua.ref.msg_text1) — Replace the entire message body</dt>

<dt>[msg:text_match](lua.ref.msg_text_match) — Streaming PCRE search across the transfer-decoded, UTF-8 text version of the message body</dt>

<dt>[msg:text_replace](lua.ref.msg_text_replace) — Streaming interface to a PCRE replacement of textual content from the message body</dt>

<dt>[msgpart:addFirstChild](lua.ref.msgpart_addFirstChild) — Adds a child as the first child on this part</dt>

<dt>[msgpart:addLastChild](lua.ref.msgpart_addLastChild) — Adds a child as the last child on this part</dt>

<dt>[msgpart:address_header](lua.ref.msgpart_address_header) — Parse each instance of the named header for RFC2822 addresses</dt>

<dt>[msgpart:body_match](lua.ref.msgpart_body_match) — Streaming interface to a PCRE search of a message body part (minus headers)</dt>

<dt>[msgpart:body_replace](lua.ref.msgpart_body_replace) — Streaming interface to a PCRE replacement of a message body part (minus headers)</dt>

<dt>[msgpart:content_type](lua.ref.msgpart_content_type) — Returns a table of content type related information</dt>

<dt>[msgpart:header](lua.ref.msgpart_header) — Return an array of header values for the given name</dt>

<dt>[msgpart:header](lua.ref.msgpart_header2) — Unset the header name of the current message part</dt>

<dt>[msgpart:header](lua.ref.msgpart_header3) — If mode is replace (or unspecified): first deletes all other headers of that name before appending the new value to the message headers</dt>

<dt>[msgpart:insertAfter](lua.ref.msgpart_insertAfter) — Insert this part into the MIME tree after the given parameter</dt>

<dt>[msgpart:insertBefore](lua.ref.msgpart_insertBefore) — Insert this part into the MIME tree before the given parameter</dt>

<dt>[msgpart:raw_match](lua.ref.msgpart_raw_match) — Streaming interface to a PCRE search of the current message part</dt>

<dt>[msgpart:raw_replace](lua.ref.msgpart_raw_replace) — Streaming interface to a PCRE replacement message part content</dt>

<dt>[msgpart:text](lua.ref.msgpart_text2) — The entire message body part is replaced by the supplied text</dt>

<dt>[msgpart:text](lua.ref.msgpart_text) — Returns the transfer decoded text for the message part, in UTF-8</dt>

<dt>[msgpart:text_match](lua.ref.msgpart_text_match) — Streaming a PCRE search across the transfer decoded UTF-8 text version of the message body part</dt>

<dt>[msgpart:text_replace](lua.ref.msgpart_text_replace) — Streaming interface to a PCRE replacement of textual content from the message body parts</dt>

<dt>[msys.asyncOk](lua.ref.msys.asyncOk) — Check if the current execution environment is suitable for suspend/resume operations</dt>

<dt>[msys.audit.connections](lua.ref.msys.audit.connections) — Return the number of connections that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit.inbound_session_count](lua.ref.msys.audit.inbound_session_count) — Count connections currently established from the specified cidr to the specified service</dt>

<dt>[msys.audit.receptions](lua.ref.msys.audit.receptions) — Return the number of receptions that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit.rejections](lua.ref.msys.audit.rejections) — Return the number of rejections that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit_series.add](lua.ref.msys.audit_series.add) — Adjust the counter for the current time window of a named series</dt>

<dt>[msys.audit_series.count](lua.ref.msys.audit_series.count) — Return the total associated with the named series</dt>

<dt>[msys.audit_series.define](lua.ref.msys.audit_series.define) — Define an audit series</dt>

<dt>[msys.audit_series.remove_item](lua.ref.msys.audit_series.remove_item) — Remove a counter from a named series</dt>

<dt>[msys.av.engines](lua.ref.msys.av.engines) — Return a list of configured engine names in a table</dt>

<dt>[msys.av.scan](lua.ref.msys.av.scan) — Perform a virus scan using the named engine</dt>

<dt>[msys.av.scan_part](lua.ref.msys.av.scan_part) — Perform a virus scan on a specific message part using the named engine</dt>

<dt>[msys.base64.decode](lua.ref.msys.base64.decode) — Decode a base64 encoded string</dt>

<dt>[msys.base64.encode](lua.ref.msys.base64.encode) — Base64-encode a string</dt>

<dt>[msys.bounce.classify](lua.ref.msys.bounce.classify) — Create a bounce classification for a message</dt>

<dt>[msys.bounce.classify_smtp_response](lua.ref.msys.bounce.classify_smtp_response) — Create a bounce classification from SMTP response text and the domain name</dt>

<dt>[msys.brightmail.scan](lua.ref.msys.brightmail.scan) — Use Brightmail to scan messages</dt>

<dt>[msys.cidr.define](lua.ref.msys.cidr.define) — Define a named CIDR object</dt>

<dt>[msys.cidr.query](lua.ref.msys.cidr.query) — Look up address against the named CIDR</dt>

<dt>[msys.cidr.reload](lua.ref.msys.cidr.reload) — Refresh CIDRs of type `datasource` and `rbldnsd`</dt>

<dt>[msys.commtouch.diagnose](lua.ref.msys.commtouch.diagnose) — Scan messages using Commtouch</dt>

<dt>[msys.counter.add](lua.ref.msys.counter.add) — Add to the current value of the specified counter</dt>

<dt>[msys.counter.inc](lua.ref.msys.counter.inc) — Increment a counter</dt>

<dt>[msys.counter.open](lua.ref.msys.counter.open) — Create a counter object</dt>

<dt>[msys.counter.read](lua.ref.msys.counter.read) — Read the specified counter</dt>

<dt>[msys.counter.reset](lua.ref.msys.counter.reset) — Reset a counter</dt>

<dt>[msys.counter.unlink](lua.ref.msys.counter.unlink) — Unlink a counter</dt>

<dt>[msys.db.fetch_row](lua.ref.msys.db.fetch_row) — If successful, return the first row of the query result as a table</dt>

<dt>[msys.db.query](lua.ref.msys.db.query) — Query a datasource</dt>

<dt>[msys.delivery.ob_get_current_message](lua.ref.msys.delivery.ob_get_current_message) — Get the current message from the session context</dt>

<dt>[msys.dumper.Dumper](lua.ref.msys.dumper.Dumper) — Dump information about an object</dt>

<dt>[msys.expurgate.scan](lua.ref.msys.expurgate.scan) — Scan using the Eleven antivirus engine</dt>

<dt>[msys.gauge_cache.dec](lua.ref.msys.gauge_cache.dec) — Decrement the value associated with keystring in the named cache</dt>

<dt>[msys.gauge_cache.define](lua.ref.msys.gauge_cache.define) — Create a cache that can be used to maintain a set of counters</dt>

<dt>[msys.gauge_cache.get](lua.ref.msys.gauge_cache.get) — Look up the value associated with keystring in the named cache</dt>

<dt>[msys.gauge_cache.inc](lua.ref.msys.gauge_cache.inc) — Increment the value associated with `keystring` in the named cache</dt>

<dt>[msys.gauge_cache.remove_item](lua.ref.msys.gauge_cache.remove_item) — Remove the value associated with `keystring` from the named cache</dt>

<dt>[msys.gcm.gcm_classify_error](lua.ref.msys.gcm.gcm_classify_error) — Determine the delivery status of the "DLV_Response_Status" variable</dt>

<dt>[msys.gcm.gcm_get_result_error_code](lua.ref.msys.gcm.gcm_get_result_error_code) — Get the error code from the response results error</dt>

<dt>[msys.pcre.match](lua.ref.msys.pcre.match) — Perform a PCRE regex match operation</dt>

<dt>[msys.pcre.replace](lua.ref.msys.pcre.replace) — Perform a PCRE replace operation</dt>

<dt>[msys.pcre.split](lua.ref.msys.pcre.split) — Perform a PCRE split operation</dt>

<dt>[msys.os.statvfs_read](lua.ref.msys.os.statvfs_read) — Request a snapshot of the stream</dt>

<dt>[msys.os.statvfs_subscribe](lua.ref.msys.os.statvfs_subscribe) — Provide a "stream" for file system statistics (statvfs) updates</dt>

<dt>[msys.qp.decode](lua.ref.msys.qp.decode) — Decode a quoted-printable message</dt>

<dt>[msys.qp.encode](lua.ref.msys.qp.encode) — Quoted-printable encode a string</dt>

<dt>[msys.rfc3464.compute_delivery_status](lua.ref.msys.rfc3464.compute_delivery_status) — Generate RFC3464 compliant delivery status headers</dt>

<dt>[msys.rfc3464.compute_delivery_status_string](lua.ref.msys.rfc3464.compute_delivery_status_string) — Generate RFC3464 compliant delivery status headers</dt>

<dt>[msys.rfc3464.create_mdn](lua.ref.msys.rfc3464.create_mdn) — Generate an MDN from a message</dt>

<dt>[msys.rfc3464.extract_delivery_status](lua.ref.msys.rfc3464.extract_delivery_status) — Return a table of parsed email headers</dt>

<dt>[msys.rfc3464.send_mdn](lua.ref.msys.rfc3464.send_mdn) — Generate and enqueue an MDN</dt>

<dt>[msys.symantec_beik.scan](lua.ref.msys.symantec_beik.scan) — Scan using BEIK</dt>

<dt>[msys.threadpool.count](lua.ref.msys.threadpool.count) — Return the current number of thread pools</dt>

<dt>[msys.threadpool.find](lua.ref.msys.threadpool.find) — Find a thread pool name from a job class ID or a job class ID from a thread pool name</dt>

<dt>[msys.threadpool.stat](lua.ref.msys.threadpool.stat) — Return stats regarding a threadpool</dt>

<dt>[msys.timer.after](lua.ref.msys.timer.after) — execute closure after a given time</dt>

<dt>[msys.timer.at](lua.ref.msys.timer.at) — execute closure at a given time</dt>

<dt>[msys.timer.every](lua.ref.msys.timer.every) — execute closure every interval</dt>

<dt>[msys.validate.dk.get_responsible_domain](lua.ref.msys.validate.dk.get_responsible_domain) — Return the domain responsible for the current message</dt>

<dt>[msys.validate.dk.sign](lua.ref.msys.validate.dk.sign) — Sign a message using a Domain Key</dt>

<dt>[msys.validate.opendkim.get_num_sigs](lua.ref.msys.validate.opendkim.get_num_sigs) — Return the number of DKIM signatures</dt>

<dt>[msys.validate.opendkim.get_sig](lua.ref.msys.validate.opendkim.get_sig) — Get a signature from a DKIM object</dt>

<dt>[msys.validate.opendkim.get_sig_canons](lua.ref.msys.validate.opendkim.get_sig_canons) — Fetch the canonicalizers used for a signature</dt>

<dt>[msys.validate.opendkim.get_sig_domain](lua.ref.msys.validate.opendkim.get_sig_domain) — Fetch the signing domain from a DKIM_SIGINFO object</dt>

<dt>[msys.validate.opendkim.get_sig_errorstr](lua.ref.msys.validate.opendkim.get_sig_errorstr) — Fetch the error associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_flags](lua.ref.msys.validate.opendkim.get_sig_flags) — Fetch the flags associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_hdrsigned](lua.ref.msys.validate.opendkim.get_sig_hdrsigned) — Determine whether a given header was signed</dt>

<dt>[msys.validate.opendkim.get_sig_identity](lua.ref.msys.validate.opendkim.get_sig_identity) — Fetch the identity associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_keysize](lua.ref.msys.validate.opendkim.get_sig_keysize) — Fetch the size of the key used to generate a signature</dt>

<dt>[msys.validate.opendkim.get_sig_selector](lua.ref.msys.validate.opendkim.get_sig_selector) — Fetch the selector associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_signalg](lua.ref.msys.validate.opendkim.get_sig_signalg) — Return the signing algorithm as a string</dt>

<dt>[msys.validate.opendkim.sign](lua.ref.msys.validate.opendkim.sign) — Sign a message using OpenDKIM</dt>

<dt>[msys.validate.opendkim.verify](lua.ref.msys.validate.opendkim.verify) — Verify a DKIM signature</dt>

<dt>[thread.mutex](lua.ref.thread.mutex) — create a new mutex</dt>

<dt>[vctx:add_recipient](lua.ref.vctx_add_recipient) — Add an address to the recipient list for the inbound session</dt>

<dt>[vctx:disconnect](lua.ref.vctx_disconnect) — Disconnect the session associated with the current validation context</dt>

<dt>[vctx:get](lua.ref.vctx_get) — Get the value of a context variable</dt>

<dt>[vctx:recipient_list](lua.ref.vctx_recipient_list) — Return or set the current recipient list</dt>

<dt>[vctx:remove_recipient](lua.ref.vctx_remove_recipient) — Remove an address from the recipient list</dt>

<dt>[vctx:set](lua.ref.vctx_set) — Set the value of a context variable</dt>

<dt>[vctx:set_code](lua.ref.vctx_set_code) — Set the inbound disposition and response message</dt>

<dt>[vctx:tarpit](lua.ref.vctx_tarpit) — Issue a time cost on the inbound session</dt>

<dt>[doc:root](lua.ref.xml.doc_root) — Return the root node of an XML document</dt>

<dt>[doc:tostring](lua.ref.xml.doc_tostring) — Output a DOM document as a string</dt>

<dt>[doc:xpath](lua.ref.xml.doc_xpath) — Perform an XPath query</dt>

<dt>[node:addchild](lua.ref.xml.node_addchild) — Add a child node</dt>

<dt>[node:attribute](lua.ref.xml.node_attribute) — Set or get the attribute of a node</dt>

<dt>[node:children](lua.ref.xml.node_children) — Return an iterator of all child nodes</dt>

<dt>[node:contents](lua.ref.xml.node_contents) — Get or set a text node</dt>

<dt>[node:doc](lua.ref.xml.node_doc) — Return the document object that contains the specified node</dt>

<dt>[node:name](lua.ref.xml.node_name) — Return the name of a node</dt>

<dt>[node:tostring](lua.ref.xml.node_tostring) — Output a node as a string</dt>

<dt>[node:unlink](lua.ref.xml.node_unlink) — Unlink an XML node from its DOM container</dt>

<dt>[xml.parsexml](lua.ref.xml.parsexml) — Create an XML document object</dt>

</dl>

</dd>

<dt>[71\. Modules Reference](modules)</dt>

<dd>

<dl>

<dt>[71.1\. Introduction](modules#idp12311472)</dt>

<dt>[71.2\. ac_auth – Authentication Handler](modules.ac_auth)</dt>

<dt>[71.3\. adaptive – Adaptive Delivery](modules.adaptive)</dt>

<dt>[71.4\. alerting – Send Alerting Emails](modules.alerting)</dt>

<dt>[71.5\. alias – Alias Expansion](modules.alias)</dt>

<dt>[71.6\. antivirus – Antivirus](modules.antivirus)</dt>

<dt>[71.7\. as_logger – Audit Series Logger](modules.as_logger)</dt>

<dt>[71.8\. auth_ds – Datasource based SMTP Authentication](modules.auth_ds)</dt>

<dt>[71.9\. auth_radius – RADIUS based SMTP Authentication](modules.auth_radius)</dt>

<dt>[71.10\. beik – Symantec Brightmail™ Engine Integration Kit](modules.beik)</dt>

<dt>[71.11\. bind_address_secondary – Dual-stack IPv4/IPv6 Support](modules.bind_address_secondary)</dt>

<dt>[71.12\. bounce_classifier_override – Override/Augment Bounce Classifications](modules.bounce_classifier_override)</dt>

<dt>[71.13\. bounce_logger – Momentum-Style Bounce Logging](modules.bounce_logger)</dt>

<dt>[71.14\. brightmail – Symantec Brightmail™ Content Scanning Support](modules.brightmail)</dt>

<dt>[71.15\. chunk_logger Module](modules.chunk_logger)</dt>

<dt>[71.16\. cidrdb – CIDRDB](modules.cidrdb)</dt>

<dt>[71.17\. clamav – ClamAV](modules.clamav)</dt>

<dt>[71.18\. cloudmark – Cloudmark Authority® Content Scanning](modules.cloudmark)</dt>

<dt>[71.19\. cluster – Cluster](modules.cluster)</dt>

<dt>[71.20\. commtouch_ctasd – Commtouch Spam Protection](modules.commtouch)</dt>

<dt>[71.21\. compress_spool – Dynamic Spool Compression](modules.compress_spool)</dt>

<dt>[71.22\. conntrol – Fine-Grained Connection Control](modules.conntrol)</dt>

<dt>[71.23\. csapi – Symantec CSAPI Antivirus Support](modules.csapi)</dt>

<dt>[71.24\. custom_bounce_logger – Custom Bounce Logging](modules.custom_bounce_logger)</dt>

<dt>[71.25\. custom_logger – User-defined Logging](modules.custom_logger)</dt>

<dt>[71.26\. delay_dsn – Delay DSN Generation](modules.delay_dsn)</dt>

<dt>[71.27\. dnsbuf – Dynamically Set the DNS UDP Buffer Size](modules.dnsbuf)</dt>

<dt>[71.28\. domainkeys – Yahoo! DomainKeys](modules.domainkeys)</dt>

<dt>[71.29\. ds_core - Datasource Query Core](modules.ds_core)</dt>

<dt>[71.30\. EC_logger – Momentum-Style Logging](modules.ec_logger)</dt>

<dt>[71.31\. eleven – Eleven eXpurgate Content Scanning](modules.eleven)</dt>

<dt>[71.32\. engagement_tracker – HTTP Engagement Tracking](modules.engage_tracker)</dt>

<dt>[71.33\. event_hydrant – Message Tracking](modules.event_hydrant)</dt>

<dt>[71.34\. exim_logger – Exim Logging](modules.exim_logger)</dt>

<dt>[71.35\. fbl - Feedback Loop](modules.fbl)</dt>

<dt>[71.36\. fingerprint – Host Fingerprinting](modules.host_fingerprint)</dt>

<dt>[71.37\. http_logger – HTTP Requests and Responses](modules.http_logger)</dt>

<dt>[71.38\. httpsrv – HTTP Server](modules.httpsrv)</dt>

<dt>[71.39\. icu – ICU](modules.icu)</dt>

<dt>[71.40\. ilf_logger – Incremental License Fee Logging](modules.ilf_logger)</dt>

<dt>[71.41\. inbound_audit – Inbound traffic analytics](modules.inbound_audit)</dt>

<dt>[71.42\. ipv6_lookup – Multi-address-family MX Records](modules.ipv6_lookup)</dt>

<dt>[71.43\. jlog – jlog-Formatted Logging](modules.jlog)</dt>

<dt>[71.44\. Live Bounce Updates – Live Bounce Updates Service](modules.live.bounce.updates)</dt>

<dt>[71.45\. mail_loop – Mail Loop Detection](modules.mail_loop)</dt>

<dt>[71.46\. maildir – Maildir Delivery Support](modules.maildir)</dt>

<dt>[71.47\. msgc – Message Systems Group Communication](modules.msgc)</dt>

<dt>[71.48\. msg_gen – Message Generation](modules.msg_gen)</dt>

<dt>[71.49\. mxip - IP Addresses In MX Records](modules.mxip)</dt>

<dt>[71.50\. opendkim – Open Source DKIM](modules.opendkim)</dt>

<dt>[71.51\. outbound_audit – Outbound traffic analytics](modules.outbound_audit)</dt>

<dt>[71.52\. outbound_smtp_auth](modules.outbound_smtp_auth)</dt>

<dt>[71.53\. persist_io – Persistent IO Wrapper](modules.persistio)</dt>

<dt>[71.54\. pipe_io – Pipe IO Wrapper](modules.pipeio)</dt>

<dt>[71.55\. pipe_transport – Module](modules.pipe_transport)</dt>

<dt>[71.56\. postfix_logger – Postfix Logging](modules.postfix_logger)</dt>

<dt>[71.57\. reception_timing - Reception Timing Modules](modules.reception_timing)</dt>

<dt>[71.58\. response_transcode – Module](modules.response_transcode)</dt>

<dt>[71.59\. sched – The Schedule Module](modules.sched)</dt>

<dt>[71.60\. scriptlet - Lua Policy Scripts](modules.scriptlet)</dt>

<dt>[71.61\. securecreds – Password Encryption/Credential Retrieval](modules.securecreds)</dt>

<dt>[71.62\. seedlist – Seedlist Integration](modules.seedlist)</dt>

<dt>[71.63\. sendmail_logger – Sendmail Logging](modules.sendmail_logger)</dt>

<dt>[71.64\. smtp_auth_proxy - SMTP Authentication Proxy](modules.smtp_auth_proxy)</dt>

<dt>[71.65\. smtp_cbv – SMTP Callback Verification](modules.smtp_cbv)</dt>

<dt>[71.66\. smtp_rcptto_proxy - SMTP Recipient-To Proxy](modules.smtp_rcptto_proxy)</dt>

<dt>[71.67\. smtpapi – SMTP Engagement Tracking](modules.smtpapi)</dt>

<dt>[71.68\. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)](modules.spf)</dt>

<dt>[71.69\. static-routes - Static Routes](modules.static_routes)</dt>

<dt>[71.70\. suppress_spool – Deferred Message Spooling](modules.suppress_spool)</dt>

<dt>[71.71\. syslog_io – The syslog_io Module](modules.syslog_io)</dt>

<dt>[71.72\. tls_macros – TLS-related Logging](tls_macros)</dt>

<dt>[71.73\. url_ripper – URL Extraction](modules.url_ripper)</dt>

</dl>

</dd>

<dt>[72\. Configuration Options Reference](config.options.ref)</dt>

<dd>

<dl>

<dt>[adaptive_backstore_leveldb](conf.ref.adaptive_backstore_leveldb) — use LevelDB as the backing store for Adaptive Delivery</dt>

<dt>[adaptive_backstore_riak](conf.ref.adaptive_backstore_riak) — set characteristics of the Riak backing store</dt>

<dt>[adaptive_enabled](conf.ref.adaptive_enabled) — enable or disable the adaptive module</dt>

<dt>[adaptive_scope](conf.ref.adaptive_scope) — define the scope applicable to adaptive delivery (AD)</dt>

<dt>[address_metrics_cleanse_interval](conf.ref.address_metrics_cleanse_interval) — the interval for refreshing address metrics</dt>

<dt>[address_metrics_lifetime](conf.ref.address_metrics_lifetime) — the TTL of address metrics</dt>

<dt>[alias_schemes](conf.ref.alias_schemes) — enable named alias expansion schemes</dt>

<dt>[allow_ip_literal](conf.ref.allow_ip_literal) — allow IP addresses in email addresses</dt>

<dt>[allow_null_envelope_sender](conf.ref.allow_null_envelope_sender) — allow the null envelope sender in e-mail addresses</dt>

<dt>[allow_trailing_whitespace_in_commands](conf.ref.allow_trailing_whitespace_in_commands) — permit trailing whitespace at the end of an SMTP command</dt>

<dt>[async_bounce_rendering](conf.ref.async_bounce_rendering) — which thread pool to use for bounce rendering</dt>

<dt>[authorization](conf.ref.authorization) — configure the console commands applicable to users</dt>

<dt>[bind_address](conf.ref.bind_address) — source address for outbound connections</dt>

<dt>[binding](conf.ref.binding) — configure binding specific options</dt>

<dt>[binding_auto_replumb](conf.ref.binding_auto_replumb) — enable or disable the auto replumber</dt>

<dt>[binding_auto_replumb_interval](conf.ref.binding_auto_replumb_interval) — sets the time interval to check the plumbed state of statically plumbed bindings</dt>

<dt>[binding_group](conf.ref.binding_group) — logically group a set of bindings</dt>

<dt>[blackhole](conf.ref.blackhole) — blackhole mail</dt>

<dt>[body_timeout](conf.ref.body_timeout) — network timeout once the DATA phase is complete</dt>

<dt>[bounce_behavior](conf.ref.bounce_behavior) — configure the action taken when a message is classified as a bounce</dt>

<dt>[bounce_domains](conf.ref.bounce_domains) — configure the list of domains eligible for bounce processing by Momentum.</dt>

<dt>[bounce_pattern](conf.ref.bounce_pattern) — configure the pattern that inbound email addresses must match in order to be considered bounces.</dt>

<dt>[bounce_suppress_list](conf.ref.bounce_suppress_list) — configure a list of email addresses that may not be considered original recipients.</dt>

<dt>[bounces_inline_original](conf.ref.bounces_inline_original) — how much of the original message to include in MDNs</dt>

<dt>[capabilities](conf.ref.capabilities) — selectively retain "root" capabilities</dt>

<dt>[chroot](conf.ref.chroot) — chroot to a secure environment</dt>

<dt>[clear_mail_queue_maintainers](conf.ref.clear_mail_queue_maintainers) — reschedule the mail queue maintainer</dt>

<dt>[click_tracking_enabled](config.click_tracking_enabled) — enable or disable click tracking for SMTP injections</dt>

<dt>[click_tracking_scheme](config.click_tracking_scheme) — set the hyperlink scheme to use for click tracking links in SMTP injections</dt>

<dt>[cluster_max_outbound_connections](conf.ref.cluster_max_outbound_connections) — set the maximum number of outbound connections for a scope and enforce it across a cluster</dt>

<dt>[cluster_outbound_throttle_connections](conf.ref.cluster_outbound_throttle_connections) — limit the rate at which connections are established, and enforce it across a cluster of systems</dt>

<dt>[cluster_outbound_throttle_messages](conf.ref.cluster_outbound_throttle_messages) — limit the rate at which messages are delivered, and enforce it across the cluster</dt>

<dt>[cluster_scope_max_outbound_connections](conf.ref.cluster_scope_max_outbound_connections) — provide traffic shaping for outbound connections in a cluster configuration</dt>

<dt>[cluster_server_max_outbound_connections](conf.ref.cluster_server_max_outbound_connections) — set the maximum number of outbound connections, and enforce it across a cluster</dt>

<dt>[connect_timeout](conf.ref.connect_timeout) — set the connection timeout</dt>

<dt>[connect_timeout_to_delay](conf.ref.connect_timeout_to_delay) — time interval before sweeping mail into the delayed queue</dt>

<dt>[connection_allocation_aggressiveness](conf.ref.connection_allocation_aggressiveness) — tune the aggressiveness for establishing new connections to domains</dt>

<dt>[context](conf.ref.context) — use to set arbitrary connection context key value pairs.</dt>

<dt>[control_client_timeout](conf.ref.control_client_timeout) — network timeout for Momentum control client connections</dt>

<dt>[crypto_engine](conf.ref.crypto_engine) — enable hardware cryptography acceleration</dt>

<dt>[crypto_lock_method](config.crypto_lock_method) — set the locking method used by the TLS layer</dt>

<dt>[debug_flags](conf.ref.debug_flags) — configure debug verbosity</dt>

<dt>[default_binding](conf.ref.default_binding) — control usage of the "default" binding</dt>

<dt>[default_charset](conf.ref.default_charset) — control usage of the "default" character set</dt>

<dt>[delay_dsn_max_retry_interval](conf.ref.delay_dsn_max_retry_interval) — maximum interval for sending DSNs to the sender of a message that has not yet been delivered</dt>

<dt>[delay_dsn_retry_interval](conf.ref.delay_dsn_retry_interval) — base interval for sending DSNs to the sender of a message that has not yet been delivered</dt>

<dt>[delayed_binding_domain_fuzz](conf.ref.delayed_binding_domain_fuzz) — length of time to spread scheduled messages over when a bulk requeue is necessary</dt>

<dt>[delayed_queue_scan_interval](conf.ref.delayed_queue_scan_interval) — how often to call the maintainer for a domain</dt>

<dt>[delivery_method](conf.ref.delivery_method) — set the delivery method</dt>

<dt>[delivery_pool](config.ref.delivery_pool) — associate a pool of event loops with email delivery to use multiple threads</dt>

<dt>[delivery_response_timeout](conf.ref.delivery_response_timeout) — time to wait for a response to an outbound request</dt>

<dt>[disable_nagle_algorithm](conf.ref.disable_nagle_algorithm) — disable nagle algorithm on sockets</dt>

<dt>[disk_queue_drain_rate](conf.ref.disk_queue_drain_rate) — control the rate at which messages are spooled in on start-up</dt>

<dt>[dns_cache_purge_interval](conf.ref.dns_cache_purge_interval) — how often the DNS response cache is scanned for stale entries</dt>

<dt>[dns_expire_interval](conf.ref.dns_expire_interval) — how often to check for domains with expired DNS information</dt>

<dt>[dns_failures_to_purge](conf.ref.dns_failures_to_purge) — configure the maximum number of DNS lookups</dt>

<dt>[dns_fallback_to_tcp](conf.ref.dns_fallback_to_tcp) — whether or not to fail over to TCP in place of UDP</dt>

<dt>[domain_for_unqualified_recipient_addresses](conf.ref.domain_for_unqualified_recipient_addresses) — configure a domain which will be used to resolve delivery for unqualified addresses</dt>

<dt>[domain_for_unqualified_sender_address](conf.ref.domain_for_unqualified_sender_address) — configure a domain which will be used to substitute for unqualified sender addresses</dt>

<dt>[domain](conf.ref.domain) — configure domain specific options</dt>

<dt>[domainkeys](conf.ref.domainkeys) — enable or disable domainkeys signing</dt>

<dt>[drop_body_after_trans_fail](conf.ref.drop_body_after_trans_fail) — number of retry attempts before freeing message memory</dt>

<dt>[ecstream_port](conf.ref.ecstream_port) — configure the port for ecstream deliveries</dt>

<dt>[ecstream_timeout](conf.ref.ecstream_timeout) — the amount of time to wait for an ecstream connection to be established</dt>

<dt>[ehlo_hostname](conf.ref.ehlo_hostname) — set the hostname used for EHLO in outbound mail</dt>

<dt>[ehlo_timeout](conf.ref.ehlo_timeout) — network timeout for EHLO</dt>

<dt>[enable_fbl_header_insertion](conf.ref.enable_fbl_header_insertion) — enable or disable fbl header insertion</dt>

<dt>[event_loop](config.ref.event_loop) — associate a pool of event loops within a listener scope to use multiple threads</dt>

<dt>[eventloop](config.ref.eventloop) — define a pool of event loops to enable multiple event loop configuration</dt>

<dt>[events_per_iter](conf.ref.events_per_iter) — employ when using a concurrency greater than 1.</dt>

<dt>[exclude_vctx_conn](conf.ref.exclude_vctx_conn) — exclude validation context keys from being journaled in the spool metadata.</dt>

<dt>[exclude_vctx_mess](conf.ref.exclude_vctx_mess) — exclude validation context keys from being journaled in the spool metadata.</dt>

<dt>[expensive_batch_assessment](conf.ref.expensive_batch_assessment) — only treat messages as different if the headers are rendered differently</dt>

<dt>[force_fsync](conf.ref.force_fsync) — ensure that data is synced to disk on reception</dt>

<dt>[fully_resolve_before_smtp](conf.ref.fully_resolve_before_smtp) — resolve all MX and A records before attempting delivery</dt>

<dt>[gateway](conf.ref.gateway) — configure a static SMTP route for mail</dt>

<dt>[generate_bounces](conf.ref.generate_bounces) — generate MDNs if mail is failed after reception</dt>

<dt>[generate_bounces_for_multi_recipient_policy_rejections](conf.ref.generate_bounces_for_multi_recipient_policy_rejections) — generate MDNs after reception for policy rejections</dt>

<dt>[generate_delay_dsn](conf.ref.generate_delay_dsn) — generate DSNs if mail is delayed</dt>

<dt>[growbuf_size](conf.ref.growbuf_size) — The size of an element in a growbuf chain</dt>

<dt>[host](conf.ref.host) — configure host specific options</dt>

<dt>[hostname](conf.ref.hostname) — override the system configured hostname</dt>

<dt>[host_failure_retry](conf.ref.host_failure_retry) — time to wait before attempting a retry</dt>

<dt>[http_basic_auth](conf.ref.http_basic_auth) — Define the user credentials when using basic HTTP authentication</dt>

<dt>[http_host](conf.ref.http_host) — Define the HTTP host</dt>

<dt>[http_method](conf.ref.http_method) — Define the HTTP method to use</dt>

<dt>[http_uri](conf.ref.http_uri) — Define the HTTP URI that you wish to connect to</dt>

<dt>[http_version](conf.ref.http_version) — Define the HTTP version to use</dt>

<dt>[idle_timeout](conf.ref.idle_timeout) — time to maintain idle outbound connections</dt>

<dt>[inbound_throttle_messages](conf.ref.inbound_throttle_messages) — rate limit inbound mail</dt>

<dt>[initial_hash_buckets](conf.ref.initial_hash_buckets) — Set the number of hash buckets used by the system</dt>

<dt>[inline_transfail_processing](conf.ref.inline_transfail_processing) — how to handle transient failure processing</dt>

<dt>[keep_message_dicts_in_memory](conf.ref.keep_message_dicts_in_memory) — preserve memory representation of metadata when memory is low</dt>

<dt>[large_message_threshold](conf.ref.large_message_threshold) — Consider a message large when its size exceeds this amount</dt>

<dt>[legacy_message_threshold](conf.ref.legacy_message_threshold) — The maximum size allowed for messages being passed to legacy modules</dt>

<dt>[license](conf.ref.license) — specify an alternate license location</dt>

<dt>[lmtp_port](conf.ref.lmtp_port) — configure the port for LMTP deliveries</dt>

<dt>[local_changes_file](conf.ref.local_changes_file) — the file for writing local configuration changes</dt>

<dt>[local_changes_only](conf.ref.local_changes_only) — whether there is a file for writing local configuration changes</dt>

<dt>[mail_queue_check_vm_interval](conf.ref.mail_queue_check_vm_interval) — how often to apply memory management reduction on mail queues</dt>

<dt>[mailerdaemon](conf.ref.mailerdaemon) — set the From: address for MDNs</dt>

<dt>[mailfrom_timeout](conf.ref.mailfrom_timeout) — timeout after MAIL FROM</dt>

<dt>[maintainer_pool](config.ref.maintainer_pool) — associate a pool of event loops with mail queues, DNS lookup, and module events to use multiple threads</dt>

<dt>[malloc2mmap_threshold](conf.ref.malloc2mmap_threshold) — use mmap when allocations exceed this amount</dt>

<dt>[masterdb_file](conf.ref.masterdb_file) — specify an alternate path for the statistics permastore</dt>

<dt>[match_cache_life](conf.ref.match_cache_life) — set the maximum number of seconds that the match cache will be valid</dt>

<dt>[match_cache_size](conf.ref.match_cache_size) — the size of the cache that holds the results of looking up matching scopes</dt>

<dt>[max_deliveries_per_connection](conf.ref.max_deliveries_per_connection) — maximum number of messages to deliver before closing a connection</dt>

<dt>[max_dns_ttl](conf.ref.max_dns_ttl) — set the maximum DNS TTL</dt>

<dt>[max_outbound_connections](conf.ref.max_outbound_connections) — set the maximum number of outbound connections for a domain</dt>

<dt>[max_recipients_per_batch](conf.ref.max_recipients_per_batch) — maximum number of recipients to send in a single outbound message transaction</dt>

<dt>[max_request_size](config.max_request_size) — maximum size of an HTTP request</dt>

<dt>[max_resident_active_queue](conf.ref.max_resident_active_queue) — threshold above which messages are not held in memory</dt>

<dt>[max_resident_messages](conf.ref.max_resident_messages) — threshold above which messages are not held in memory</dt>

<dt>[max_resident_transfails](conf.ref.max_resident_transfails) — the threshold for swapping transient failures out of memory</dt>

<dt>[max_retries](conf.ref.max_retries) — override the system configured max_retries</dt>

<dt>[max_retry_interval](conf.ref.max_retry_interval) — maximum retry interval</dt>

<dt>[max_timed_events_per_iter](conf.ref.max_timed_events_per_iter) — the maximum numer of timed events per scheduler iteration</dt>

<dt>[mdn_failures_notify](conf.ref.mdn_failures_notify) — mailbox to which to send null recipient MDNs</dt>

<dt>[memory_goal](conf.ref.memory_goal) — configure physical memory usage goal</dt>

<dt>[memory_hwm](conf.ref.memory_hwm) — configure physical memory usage high-water mark</dt>

<dt>[message_expiration](conf.ref.message_expiration) — the time to live for messages</dt>

<dt>[migrate_connections_between_sibling_domains](conf.ref.migrate_connections_between_sibling_domains) — optimize connections for sibling domains</dt>

<dt>[mime_parse_large_messages_during_reception](conf.ref.mime_parse_large_messages_during_reception) — configure whether large messages are parsed upon reception or just in time.</dt>

<dt>[min_dns_ttl](conf.ref.min_dns_ttl) — override DNS TTLs smaller than this value</dt>

<dt>[mx_failures_fallback_to_a](conf.ref.mx_failures_fallback_to_a) — configure the maximum number of times an MX lookup will be attempted</dt>

<dt>[mx_failures_to_delay](conf.ref.mx_failures_to_delay) — number of consecutive failures before a domain is auto-delayed</dt>

<dt>[never_attempt_expired_messages](conf.ref.never_attempt_expired_messages) — Never attempt delivery of expired messages</dt>

<dt>[never_retry](conf.ref.never_retry) — whether or not to retry delivery of failed messages</dt>

<dt>[only_use_best_mx_for_relay_domains](conf.ref.only_use_best_mx_for_relay_domains) — If this is set to `true`, only the lowest numerical priority MXs are used when sending to domains listed in `bounce_domains` or `relay_domains`.</dt>

<dt>[open_relay](conf.ref.open_relay) — whether the MTA is an open relay or not</dt>

<dt>[open_tracking_enabled](config.open_tracking_enabled) — enable or disable open tracking for SMTP injections</dt>

<dt>[open_tracking_scheme](config.open_tracking_scheme) — set the hyperlink scheme to use for open tracking links in SMTP injections</dt>

<dt>[opendkim_sign](conf.ref.opendkim_sign) — whether or not to enable OpenDKIM signing</dt>

<dt>[outbound_throttle_connections](conf.ref.outbound_throttle_connections) — limit the rate at which connections are established</dt>

<dt>[outbound_throttle_messages](conf.ref.outbound_throttle_messages) — limit the rate at which messages are delivered</dt>

<dt>[pathway](conf.ref.pathway) — a grouping of inbound configuration options</dt>

<dt>[pathway_group](conf.ref.pathway_group) — a container for pathways</dt>

<dt>[pcre_cache_size](conf.ref.pcre_cache_size) — set the maximum size of the ec_pcre_compile cache</dt>

<dt>[pcre_cache_ttl](conf.ref.pcre_cache_ttl) — set the maximum TTL for the ec_pcre_compile cache</dt>

<dt>[permastore_interval](conf.ref.permastore_interval) — the frequency for saving various statistics</dt>

<dt>[pidfile](conf.ref.pidfile) — set the PID file path</dt>

<dt>[prohibited_hosts](conf.ref.prohibited_hosts) — prevent mail from being delivered to invalid destinations</dt>

<dt>[rcptto_timeout](conf.ref.rcptto_timeout) — timeout after RCPT TO</dt>

<dt>[relay_for_sending_domains](conf.ref.relay_for_sending_domains) — domains that may use the MTA as a relay.</dt>

<dt>[relay_domains](conf.ref.relay_domains) — configure the list of domains for which Momentum relays mail</dt>

<dt>[relay_hosts](conf.ref.relay_hosts) — configure the list of hosts for which Momentum relays mail</dt>

<dt>[remote_smtp_port](conf.ref.remote_smtp_port) — set the port to be used for SMTP deliveries</dt>

<dt>[require_ehlo](conf.ref.require_ehlo) — reject mail from clients that don't say HELO</dt>

<dt>[reserve_maintenance_interval](conf.ref.reserve_maintenance_interval) — how often to perform mail queue maintenance</dt>

<dt>[resolv_conf](conf.ref.resolv_conf) — specify a custom resolv.conf</dt>

<dt>[response_transcode_pattern](conf.ref.response_transcode_pattern) — the regex pattern for comparison to a server response</dt>

<dt>[response_transcode_replace](conf.ref.response_transcode_replace) — the replacement string for a server response</dt>

<dt>[retry_interval](conf.ref.retry_interval) — base retry interval</dt>

<dt>[rfc2821_allow_whitespace_in_envelope](conf.ref.rfc2821_allow_whitespace_in_envelope) — permit trailing whitespace before the final CRLF</dt>

<dt>[rfc2821_pedantic_address_rules](conf.ref.rfc2821_pedantic_address_rules) — Allow relaxation of enforcement of the rfc2821 address rules.</dt>

<dt>[rfc2822_date_header](conf.ref.rfc2822_date_header) — rfc2822 conformance</dt>

<dt>[rfc2822_lone_lf_in_body](conf.ref.rfc2822_lone_lf_in_body) — rfc2822 conformance</dt>

<dt>[rfc2822_lone_lf_in_headers](conf.ref.rfc2822_lone_lf_in_headers) — rfc2822 conformance</dt>

<dt>[rfc2822_max_line_length](conf.ref.rfc2822_max_line_length) — rfc2822 conformance</dt>

<dt>[rfc2822_max_line_length_policy](conf.ref.rfc2822_max_line_length_policy) — determine how non-RFC-compliant line lengths are handled</dt>

<dt>[rfc2822_messageid_header](conf.ref.rfc2822_messageid_header) — rfc2822 conformance</dt>

<dt>[rfc2822_missing_headers](conf.ref.rfc2822_missing_headers) — rfc2822 conformance</dt>

<dt>[rfc2822_trace_headers](conf.ref.rfc2822_trace_headers) — rfc2822 conformance</dt>

<dt>[routes](conf.ref.routes) — configure message routing</dt>

<dt>[rset_timeout](conf.ref.rset_timeout) — set the timeout after RSET</dt>

<dt>[scope_max_outbound_connections](conf.ref.scope_max_outbound_connections) — provide traffic shaping for outbound connections</dt>

<dt>[scheduler](conf.ref.scheduler) — override the default IO scheduler</dt>

<dt>[security](conf.ref.security) — Scope for defining which permissions are retained by which user</dt>

<dt>[send_8bitmime](conf.ref.send_8bitmime) — Enable advertising of 8BITMIME when sending mail</dt>

<dt>[server_max_file_descriptors](conf.ref.server_max_file_descriptors) — sets the maximum number of file descriptors usable by the system</dt>

<dt>[server_max_outbound_connections](conf.ref.server_max_outbound_connections) — sets the maximum number of outbound connections</dt>

<dt>[server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections) — sets the server-wide connection limit reserve</dt>

<dt>[signing_stats](conf.ref.signing_stats) — control how signing statistics are recorded</dt>

<dt>[siv_throttle_cache_size](conf.ref.siv_throttle_cache_size) — set the maximum number of named throttles</dt>

<dt>[skip_hosts](conf.ref.skip_hosts) — skip the specified host, but consider other hosts in the domain</dt>

<dt>[SNMP](conf.ref.snmp) — Simple Network Management Protocol Support</dt>

<dt>[soft_bounce_drain_rate](conf.ref.soft_bounce_drain_rate) — how many soft bounces to place into the mail queues in a single scheduler iteration</dt>

<dt>[spool_mode](conf.ref.spool_mode) — set the file mode for newly created spool files</dt>

<dt>[spoolbase](conf.ref.spoolbase) — set the base directory for the spool</dt>

<dt>[ssl_lock_method](config.ssl_lock_method) — the SSL lock method</dt>

<dt>[starttls_injection_policy](config.starttls_injection_policy) — protect against SMTP injections prior to TLS</dt>

<dt>[supplemental_groups](conf.ref.supplemental_groups) — security: supplemental groups to assume after startup</dt>

<dt>[suspend_delivery](conf.ref.suspend_delivery) — prevent outbound mail delivery</dt>

<dt>[tcp_buffer_size](conf.ref.tcp_buffer_size) — maximum tcp buffer size for outbound connections</dt>

<dt>[threadpool](conf.ref.threadpool) — configure thread pool specific options</dt>

<dt>[timestampformat](conf.ref.timestampformat) — set the timestamp format used when logging to stderr</dt>

<dt>[tls](config.ref.tls) — determine whether to use TLS connection for outbound mail</dt>

<dt>[tls_allow_renegotiation](config.tls_allow_renegotiation) — determine whether to enable TLS renegotiation</dt>

<dt>[tls_ca](config.tls_ca) — certificate authority for outbound mail</dt>

<dt>[tls_certificate](config.tls_certificate) — certificate to use for inbound and outbound mail</dt>

<dt>[tls_ciphers](config.tls_ciphers) — specify allowable ciphers for TLS inbound and outbound sessions</dt>

<dt>[tls_client_ca](config.tls_client_ca) — certificate authority for inbound mail</dt>

<dt>[tls_dhparams_file](conf.ref.tls_dhparams_file) — specifies the file of Diffie Hellman (DHE) parameters that add per-session randomness to the encryption. Default parameters are built in the product if none are specified.</dt>

<dt>[tls_enable_dhe_ciphers](conf.ref.tls_enable_dhe_ciphers) — controls whether or not Diffie Hellman (DHE) ciphers are available</dt>

<dt>[tls_engine](config.tls_engine) — specify the TLS library to use</dt>

<dt>[tls_ifavailable_fallback](config.tls_ifavailable_fallback) — determine the behavior if TLS negotiation fails</dt>

<dt>[tls_key](config.tls_key) — TLS key to use for outbound or inbound mail</dt>

<dt>[tls_protocols](config.tls_protocols) — allowable ciphers for TLS inbound and outbound sessions</dt>

<dt>[tls_verified_peer_is_authorized](config.tls_verified_peer_is_authorized) — Marks requests that use a verified SSL Client certificate as being authorized</dt>

<dt>[tls_verify](config.tls_verify) — specify how to handle the remote presented certificate</dt>

<dt>[tls_verify_mode](config.tls_verify_mode) — determine whether a TLS certificate is required</dt>

<dt>[trace_smtp_mode](conf.ref.trace_smtp_mode) — set the default permissions of trace files</dt>

<dt>[tracking_domain](config.tracking_domain) — set the tracking domain to use for engagement tracking in SMTP injections</dt>

<dt>[tracking_link_expiry](config.tracking_link_expiry) — set the expiration time for engagement tracking for SMTP injections</dt>

<dt>[transfail_drain_rate](conf.ref.transfail_drain_rate) — the maximum number of messages to pop off the transient failure queue in a single scheduler iteration</dt>

<dt>[transform_8bitmime_content](conf.ref.transform_8bitmime_content) — Enable 8BITMIME downconversion when sending mail</dt>

<dt>[umem_reap_interval](conf.ref.umem_reap_interval) — how often to release unused memory</dt>

<dt>[unlink_on_spool_in_failure](conf.ref.unlink_on_spool_in_failure) — Whether or not to remove malformed messages</dt>

<dt>[_unsafe_spool](conf.ref.unsafe_spool) — allow dangerous spool semantics to be used</dt>

<dt>[use_iflist_cache](conf.ref.use_iflist_cache) — Whether or not to cache the list of network interfaces configured by the system</dt>

<dt>[use_ipv6](conf.ref.use_ipv6) — Affects the selection of IPv6 hosts in the SMTP client</dt>

<dt>[use_mmap](conf.ref.use_mmap) — use mmap when spooling messages from disk</dt>

<dt>[use_sendfile](conf.ref.use_sendfile) — use sendfile() when sending mail</dt>

<dt>[user](conf.ref.user) — security: user identity to assume after startup</dt>

<dt>[xclient](conf.ref.xclient) — use the xclient extension to SMTP for outbound mail</dt>

</dl>

</dd>

<dt>[73\. Non-Module-Specific Console Commands](console.cmds.ref)</dt>

<dd>

<dl>

<dt>[active](console_commands.active) — show domains with active queue size bigger than threshold</dt>

<dt>[authz id](console_commands.authz_id) — display the id of the current user</dt>

<dt>[authz roles list](console_commands.authz_roles_list) — display the currently defined roles</dt>

<dt>[binding active](console_commands.binding_active) — show domains with active queue size bigger than threshold on a specified binding</dt>

<dt>[binding delayed](console_commands.binding_delayed) — show domains with delayed queue size bigger than threshold on a specified binding</dt>

<dt>[binding fail domain](console_commands.binding_fail_domain) — fail messages for a domain on a binding with a bounce message</dt>

<dt>[binding fail domain quiet](console_commands.binding_fail_domain_quiet) — fail messages for a domain on a binding without generating bounces</dt>

<dt>[binding flush domain](console_commands.binding_flush_domain) — perform delivery attempt on delayed queue of a domain on a binding</dt>

<dt>[binding summary](console_commands.binding_summary) — show binding statistics</dt>

<dt>[cache list](console_commands.cache_list) — list all caches along with their associated attributes</dt>

<dt>[cache stat](console_commands.cache_stat) — show detailed cache statistics for the specified cache</dt>

<dt>[cache stats](console_commands.cache_stats) — show cache statistics</dt>

<dt>[config](console_commands.config) — online configuration tuning for Momentum</dt>

<dt>[count](console_commands.count) — count open connections</dt>

<dt>[counter](console_commands.counter) — manage counters</dt>

<dt>[delayed](console_commands.delayed) — show domains with delayed queue size bigger than threshold</dt>

<dt>[dig](console_commands.dig) — submit a domain for DNS MX query</dt>

<dt>[dns_cache](console_commands.dns_cache) — manage Momentum's DNS cache</dt>

<dt>[domain](console_commands.domain) — show domain statistics</dt>

<dt>[domain all](console_commands.domain_all) — show statistics for all domains</dt>

<dt>[fail domain](console_commands.fail_domain) — fail messages for a domain with a bounce message</dt>

<dt>[fail domain quiet](console_commands.fail_domain_quiet) — fail messages for a domain without generating bounces</dt>

<dt>[fingerprint cache summary](console_commands.fingerprint_cache_summary) — display the current cache size</dt>

<dt>[fingerprint rejection summary](console_commands.fingerprint_rejection_summary) — display details related to the current inbound connection</dt>

<dt>[flush domain](console_commands.flush_domain) — perform delivery attempt on delayed queue of a domain</dt>

<dt>[help](console_commands.help) — show help information for console commands</dt>

<dt>[mailq](console_commands.mailq) — show the status of the mail queues</dt>

<dt>[memory](console_commands.memory) — report detailed memory usage</dt>

<dt>[message details](console_commands.message_details) — show detailed message information</dt>

<dt>[message fail](console_commands.message_fail) — fail a message</dt>

<dt>[message fail quiet](console_commands.message_fail_quiet) — fail a message and do not create a non-delivery receipt (NDR)</dt>

<dt>[message retry](console_commands.message_retry) — perform an immediate delivery attempt on a message</dt>

<dt>[module](console_commands.module) — manage loaded modules online</dt>

<dt>[\pager](console_commands.pager) — Page output of long console commands in the console.</dt>

<dt>[paniclog](console_commands.paniclog) — show last several entries written to paniclog</dt>

<dt>[pid](console_commands.pid) — show process id of Momentum</dt>

<dt>[rebind](console_commands.rebind) — rebind the messages in a binding or domain</dt>

<dt>[refresh domain](console_commands.refresh_domain) — refresh the DNS information for a domain</dt>

<dt>[reopen logs](console_commands.reopen_logs) — close and open log files</dt>

<dt>[reroute queue](console_commands.reroute_queue) — move messages from queues of one domain to queues of the other</dt>

<dt>[show inbound](console_commands.show_inbound) — show all inbound connections</dt>

<dt>[show outbound](console_commands.show_outbound) — show all outbound connections</dt>

<dt>[showqueue](console_commands.showqueue) — show queue information</dt>

<dt>[shutdown](console_commands.shutdown) — shutdown Momentum</dt>

<dt>[signing_stats](console_commands.signing_stats) — show DK/DKIM signing stats</dt>

<dt>[signing_stats reset](console_commands.signing_stats_reset) — reset signing stats</dt>

<dt>[sp_async](console_commands.sp_async) — Access the asynchronous I/O subsystem</dt>

<dt>[spool import](console_commands.spool_import) — import an alternative spool</dt>

<dt>[spool import_poll](console_commands.spool_import_poll) — check the status of a spool that is being imported</dt>

<dt>[spool_in](console_commands.spool_in) — read a message from the spool to the mail queue</dt>

<dt>[summary](console_commands.summary) — show global metrics</dt>

<dt>[summary reset](console_commands.summary_reset) — reset summary statistics</dt>

<dt>[sysinfo](console_commands.sysinfo) — show system information</dt>

<dt>[threads](console_commands.threads) — Display summary statistics for thread pools</dt>

<dt>[tls](console_commands.tls) — manage TLS cache used by Momentum</dt>

<dt>[trace smtp](console_commands.trace_smtp) — trace smtp transactions</dt>

<dt>[unlink stats](console_commands.unlink_stats) — show statistics of removing messages from the disk</dt>

<dt>[version](console_commands.version) — show version information of Momentum</dt>

<dt>[write config](console_commands.write_config) — display current running configuration</dt>

</dl>

</dd>

<dt>[74\. Executable Commands Reference](exec.cmds.ref)</dt>

<dd>

<dl>

<dt>[ad_summary](executable.ad_summary) — summarize the adaptive module actions</dt>

<dt>[create_ssl_cert](executable.create_ssl_cert) — create a self-signed SSL certificate</dt>

<dt>[credmgr](executable.credmgr) — manipulate credentials used with the securecreds module</dt>

<dt>[ec_adtool](executable.ec_adtool) — adjust adaptive parameters in a cluster configuration</dt>

<dt>[ec_console](executable.ec_console) — connect to Momentum to perform introspection and administration</dt>

<dt>[ec_ctl](executable.ec_ctl) — start, stop, or restart the Momentum Application Server</dt>

<dt>[ec_dkim_ctl](executable.ec_dkim_ctl) — manipulate the DK/DKIM database</dt>

<dt>[ec_dump_config](executable.ec_dump_config) — output the `ecelerity.conf` file as XML</dt>

<dt>[ec_lic](executable.ec_lic) — fetch a new license file from Message Systems</dt>

<dt>[ec_log_trace](executable.ec_log_trace) — parse Momentum log files</dt>

<dt>[ec_md5passwd](executable.ec_md5passwd) — changes the password for a system user's password</dt>

<dt>[ec_rotate](executable.ec_rotate) — rotate Momentum logfiles</dt>

<dt>[ec_sendmail](executable.ec_sendmail) — a sendmail compatibility interface</dt>

<dt>[ec_show](executable.ec_show) — show spool or message information</dt>

<dt>[eccfg](executable.eccfg) — Subversion repository management</dt>

<dt>[eccmgr](executable.eccmgr) — Momentum Cluster Manager</dt>

<dt>[eccmgr_ctl](executable.eccmgr_ctl) — start, stop, or restart the Momentum Cluster Manager</dt>

<dt>[ecconfigd](executable.ecconfigd) — Momentum Configuration Server</dt>

<dt>[ecconfigd_ctl](executable.ecconfigd_ctl) — start, stop or restart the Momentum Configuration Server</dt>

<dt>[ecelerity](executable.ecelerity) — Momentum Application Server</dt>

<dt>[jlog_change_endian](executable.jlog_change_endian) — change the endianness of a jlog</dt>

<dt>[jlog_sanity_check](executable.jlog_sanity_check) — validate that a jlog is free of errors</dt>

<dt>[jlogctl](executable.jlogctl) — analyze and maintain jlogs</dt>

<dt>[lu_pull](executable.lu_pull) — update the Live Updates database</dt>

<dt>[validate_config](executable.validate_config) — check the validity of the configuration files</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[XI. Appendix](p.appendix)</dt>

<dd>

<dl>

<dt>[A. Message Responses](message_responses)</dt>

<dd>

<dl>

<dt>[A.1\. Responses Sorted By Codes](message_responses#responses-by-code)</dt>

</dl>

</dd>

<dt>[B. MIB Files](snmp-mib)</dt>

<dd>

<dl>

<dt>[B.1\. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics](snmp-mib#snmp-mib-per-domain-metrics)</dt>

<dt>[B.2\. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3](snmp-mib.pergroup)</dt>

<dt>[B.3\. The `OMNITI-SNMP-MIB.txt` file](snmp-mib.omniti)</dt>

</dl>

</dd>

<dt>[C. SMTP Response Codes](smtp-response-codes)</dt>

<dt>[D. Key Binding Reference for ec_console](libedit)</dt>

<dd>

<dl>

<dt>[D.1\. Editor Commands](libedit#libedit.emacs.editor)</dt>

<dt>[D.2\. Extended Commands](libedit.extended)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[Glossary](glossary)</dt>

<dt>[E. Copyright Notices](copyrights)</dt>

<dd>

<dl>

<dt>[E.1\. Acknowledgements](copyrights#copyright.ack)</dt>

<dt>[E.2\. Disclaimers for Redistributed Third-Party Software](copyright.3rdparty-disclaimer)</dt>

</dl>

</dd>

</dl>

[List of Figures](figure-toc)[List of Tables](table-toc.php)[List of Examples](example-toc.php)
