<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Momentum 4 Reference Manual</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="description" content="This book documents Momentum 4. Document generated on:">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="next" href="preface.php" title="Preface">
<script xmlns:fo="http://www.w3.org/1999/XSL/Format" type="text/javascript" src="/js/jquery.js"></script>
</head>
<body>



<!-- begin header.inc-->
<link rel="stylesheet" type="text/css" href="https://support.messagesystems.com/css/styles.css" />

<div id="container-1">
	<div class="inner">
		<div id="top-login-info">
			<p>Logged in as:     <span id="username">OmniTI, Inc.</span>&nbsp;
			(<a href="https://support.messagesystems.com/logout.php">logout</a>)</p>
		</div>

		<a href="https://support.messagesystems.com/start.php">
			<img src="https://support.messagesystems.com/images/ms-white205.png" class="ms-logo" alt="Message Systems" /></a>

<!-- reverse order for float:right -->
		<div id="main-nav">
			<ul>
				<li class="nav-link last">
					<a href="https://support.messagesystems.com/start.php?show=changelog">Changelog</a></li>
				<li class="nav-link">
					<a href="https://support.messagesystems.com/docs/">Documentation</a></li>
				<li class="nav-link">
					<a href="https://support.messagesystems.com/start.php">Downloads</a></li>
			</ul>
		</div>

		<div class="clear"></div>
	</div><!--.inner-->
</div><!--#container-1-->

<div id="container-2">
	<div class="inner" id="options">
		<ul>
			<li id="search">
				<form action="https://support.messagesystems.com/docs/man.php" method="get">
					<label for="t">Search Documentation: </label>
					<input type="text" size="35" id="t" name="t"  />
					<select name="section" id="section">
					<option value="All">All</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option class='all' value="  All Momentum 3.x">  All Momentum 3.x</option>
<option value="Momentum Reference Manual (3.x)">Momentum Reference Manual (3.x)</option>
<option value="Momentum for Mobile Push Notifications">Momentum for Mobile Push Notifications</option>
<option value="Default Policy User Guide">Default Policy User Guide</option>
<option value="Adaptive Delivery User Guide">Adaptive Delivery User Guide</option>
<option value="Momentum REST Injector">Momentum REST Injector</option>
<option value="Momentum API Reference (3.x)">Momentum API Reference (3.x)</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option value="Momentum 4 Reference Manual" selected="selected">Momentum 4 Reference Manual</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option class='all' value="  All Mobile Momentum">  All Mobile Momentum</option>
<option value="Mobile Momentum Reference Manual">Mobile Momentum Reference Manual</option>
<option value="Mobile Momentum Quick Start">Mobile Momentum Quick Start</option>
<option value="Mobile Momentum Developer Guide">Mobile Momentum Developer Guide</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option class='all' value="  All Message Central 3.x">  All Message Central 3.x</option>
<option value="Message Central 3.x Reference Guide">Message Central 3.x Reference Guide</option>
<option value="User Guide for Message Central 3.x Web UI">User Guide for Message Central 3.x Web UI</option>
<option value="Message Central 3.x REST Guide">Message Central 3.x REST Guide</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option class='all' value="  All Message Scope">  All Message Scope</option>
<option value="Message Scope Reference">Message Scope Reference</option>
<option value="Quick Start Guide for Message Scope">Quick Start Guide for Message Scope</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option value="Momentum Reference Manual 2.2">Momentum Reference Manual 2.2</option>
					</select>
					<input type="submit" class="button" value="Go" />
					<div id="search-help-button"></div>
					<script type="text/javascript">
						$(document).ready(function  () {
							$('#search-help-button').click(function() {
							$('#search-help').slideToggle();
							});
						});
					</script>
				</form>
			</li>
			    <li id="licenses"><a href="https://support.messagesystems.com/license_summary.php">Licenses</a></li>
    <li id="clients">
      <a href="">Clients</a>
      <ul>
        <li><a class="hack" href="https://support.messagesystems.com/cs.php">Support</a></li>
        <li><a class="hack" href="https://support.messagesystems.com/edit_client.php">Add/Edit</a></li>
        <li><a class="hack" href="https://support.messagesystems.com/edit_products.php">Legal/Products</a></li>
      </ul>
    </li>
    <li id="users"><a href="https://support.messagesystems.com/edit_customer.php">Users</a></li>

		</ul>
		<div id="search-help">
			<h2>Search Help</h2>
			<p>Search for a single word or perform multi-word searches 
			by enclosing your search in quotation marks.</p>
			<p>Where you have multiple words but no quotation marks, 
			an <b>OR</b> search is performed. For example, <b>"REST Injection"</b> 
			searches for the phrase <b>"REST Injection"</b>, and, without quotation
			marks, searches for <b>REST OR Injection</b>--the operator is understood.</p>
			<h3>Warning</h3>
			<p>You must escape the following special characters: 
			<b>+ - &amp;&amp; || ! ( ) { } [ ] ^ " ~ * ? : \</b>. 
			Use the <b>\</b> character as the escape character. For example: 
			<b>B0/00-11719-46C328D4\:default\:</b></p>
			<p>You can also perform <b>AND</b> searches, for 
			example, <b>rest AND port</b> (no quotation marks)
			finds pages where both these words occur.</p>
			<p>Terms used in searches are case-insensitive but 
			operators are not. Alphabetic operators <b>must</b> 
			be in uppercase.</p>
			<p>Other operators can also be used. For more 
			information see "<a href="https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html" target="_blank">Query Parser Syntax</a>". Use of fields in searches is not currently supported.</p>
		</div>
	</div><!--.inner-->
</div><!--#container-2-->

<div id="container-3">
	<div class="inner">
<!-- end header.inc-->

  <div id="content" class="documentation">
    <!-- The $page variable is a DocBookPage object
         created by the www.xsl DocBook transformation file.
         The content method is unique for each
         DocBookPage instance. -->
    <div class="navheader"><table width="100%" summary="Navigation header">
<tr><th colspan="3" align="center">Momentum 4 Reference Manual</th></tr>
<tr>
<td width="20%" align="left"> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="preface.php">Next</a>
</td>
</tr>
</table></div>
<div class="book">
<div class="titlepage">
<div>
<div><h1 class="title">
<a name="momo4"></a>Momentum 4 Reference Manual</h1></div>
<div><div class="author"><h3 class="author"><span class="orgname">Message Systems, Inc.</span></h3></div></div>
<div><p class="copyright">Copyright © 2014 Message Systems, Inc.</p></div>
<div><div class="legalnotice">
<a name="idp196960"></a><p>
        Confidential &amp; Proprietary.
      </p>
</div></div>
<div><div class="abstract">
<p class="title"><b>Abstract</b></p>
<p>
        This book documents Momentum 4.
      </p>
<p>
        Document generated on:

2017-Aug-09
      </p>
</div></div>
</div>
<hr>
</div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="preface"><a href="preface.php">Preface</a></span></dt>
<dd><dl><dt><span class="section"><a href="preface.php#typographical">1. Typographical Conventions Used in This Document</a></span></dt></dl></dd>
<dt><span class="part"><a href="p.intro.php">I. Introduction to Momentum</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="components.php">1. Components</a></span></dt>
<dt><span class="chapter"><a href="loam.php">2. Life of A Message</a></span></dt>
<dt><span class="chapter"><a href="roles_behaviors.php">3. Roles and Behaviors</a></span></dt>
<dt><span class="chapter"><a href="licensed_features.php">4. Licensed Features</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="licensed_features.php#licensed_features.message.generation">4.1. Message Generation</a></span></dt>
<dt><span class="section"><a href="licensed_features.adaptive.delivery.php">4.2. Adaptive Delivery</a></span></dt>
<dt><span class="section"><a href="licensed_features.supercharger.php">4.3. Supercharger</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="p.installing.php">II. Installing Momentum</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="hardware.requirements.php">5. Hardware Considerations</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="hardware.requirements.php#hardware.server_roles">5.1. Server Roles</a></span></dt>
<dt><span class="section"><a href="hardware.config_options.php">5.2. Configuration Options</a></span></dt>
<dt><span class="section"><a href="hardware.scaling.php">5.3. Hardware Scaling Approach</a></span></dt>
<dt><span class="section"><a href="hardware.environmental.php">5.4. Environmental Considerations</a></span></dt>
<dt><span class="section"><a href="hardware.config.php">5.5. Hardware Deployment Configuration</a></span></dt>
<dt><span class="section"><a href="production.config.php">5.6. Production Environment Configurations</a></span></dt>
<dt><span class="section"><a href="addl.config.notes.php">5.7. Additional Configuration Notes</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="before_you_begin.php">6. Before You Begin</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="before_you_begin.php#byb.msg.gen.license">6.1. Momentum License</a></span></dt>
<dt><span class="section"><a href="byb.os.php">6.2. Operating System</a></span></dt>
<dt><span class="section"><a href="byb.redundancy.php">6.3. Redundancy</a></span></dt>
<dt><span class="section"><a href="byb.load_balancing.php">6.4. Load Balancing</a></span></dt>
<dt><span class="section"><a href="byb.disable_selinux.php">6.5. Disable SELinux</a></span></dt>
<dt><span class="section"><a href="byb.ntp.php">6.6. Enable Network Time Protocol (NTP)</a></span></dt>
<dt><span class="section"><a href="byb.sysctl.conf.php">6.7. Adjusting <code class="filename">/etc/sysctl.conf</code></a></span></dt>
<dt><span class="section"><a href="byb.set_hostnames.php">6.8. Setting Hostnames</a></span></dt>
<dt><span class="section"><a href="byb.jre.php">6.9. Java Runtime Environment (JRE)</a></span></dt>
<dt><span class="section"><a href="byb.root_and_vertica_dba.php">6.10. Creating <code class="filename">root</code> and <code class="filename">vertica_dba</code>
        Accounts</a></span></dt>
<dt><span class="section"><a href="byb.redefine_ephemeral_ports.php">6.11. Redefining Ephemeral Ports</a></span></dt>
<dt><span class="section"><a href="byb.config_vertica_services.php">6.12. Configuring Locale</a></span></dt>
<dt><span class="section"><a href="byb.config_SSH_and_SSHD.php">6.13. Configuring SSH and SSHD</a></span></dt>
<dt><span class="section"><a href="byb.basic_packages.php">6.14. Basic Required Packages</a></span></dt>
<dt><span class="section"><a href="byb.riak_provisioning.php">6.15. Riak Provisioning</a></span></dt>
<dt><span class="section"><a href="byb.vertica_partition.php">6.16. Separate Vertica Partition</a></span></dt>
<dt><span class="section"><a href="byb.disable_postfix.php">6.17. Disable Postfix and QPIDD</a></span></dt>
<dt><span class="section"><a href="byb.analytics_reqs.php">6.18. Verifying Analytics Node Requirements</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="download_bundle.php">7. Download the Software Bundle and Prepare</a></span></dt>
<dt><span class="chapter"><a href="install_upgrade_packages.php">8. Install / Upgrade the Packages</a></span></dt>
<dt><span class="chapter"><a href="new_installation.php">9. New Installation - All Configurations</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="new_installation.php#install.mta_node">9.1. Configure Your MTA Nodes</a></span></dt>
<dt><span class="section"><a href="install.configure_cassandra.php">9.2. Configure the Cassandra Nodes</a></span></dt>
<dt><span class="section"><a href="install.analytics_nodes.php">9.3. Configure the Analytics Nodes</a></span></dt>
<dt><span class="section"><a href="install.start_remaining_services.php">9.4. Start Remaining Services</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="upgrade.single_node.php">10. Upgrade - Single Node</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="upgrade.single_node.php#upgrade.single_node.preparation">10.1. Preparation</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.vertica_updates.php">10.2. Vertica Updates</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.flyway.php">10.3. Prepare and Run Flyway</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.config_all__nodes.php">10.4. Configuration Changes</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.software_upgrade.php">10.5. Software Upgrade</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.webui.php">10.6. Update Web UI Configuration</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.start_services.php">10.7. Start Services</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.complete_setup.php">10.8. Complete the Software Set Up</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.next_steps.php">10.9. Next Steps</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="upgrade.two_tier_configuration_rolling.php">11. Rolling Upgrade - Two-Tier Configuration and Combined Node</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="upgrade.two_tier_configuration_rolling.php#upgrade.two_tier.preparation_rolling">11.1. Overview</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.prepare_all_nodes_rolling.php">11.2. Before You Begin the Upgrade</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.snapshot_cassandra_rolling.php">11.3. Perform a Cassandra Snapshot</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.upgrade_cassandra_rolling.php">11.4. Upgrade Cassandra on the Platform Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.stop_generations_rolling.php">11.5. Stop Transmissions to the First Platform Node</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.ecelerity_rolling.php">11.6. Upgrade Ecelerity and the Cassandra Schema on the First Platform Node</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.stop_transmissions_rolling.php">11.7. Restore Transmissions to the First Platform Node and Stop Transmissions
        to all other Platform Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.upgrade_ecelerity_rolling.php">11.8. Upgrade Ecelerity on the Remaining Platform Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.restore_tranmissions_rolling.php">11.9. Restore Transmissions to the Remaining Platform Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.upgrade_vertica_rolling.php">11.10. Upgrade Vertica on the Analytics Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.flyway_rolling.php">11.11. Prepare and Run Flyway</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.rpms_rolling.php">11.12. Upgrade Remaining RPMs on Analytics Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.config_all_nodes_rolling.php">11.13. Configuration Changes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.software_upgrade_rolling.php">11.14. Install the Adaptive Delivery API</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.webui_rolling.php">11.15. Update the Web UI Configuration</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.start_services_rolling.php">11.16. Start Services</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.complete_setup_rolling.php">11.17. Complete the Software Set Up</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="post_installation.php">12. Post-Installation</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="post_installation.php#install.additional.packages">12.1. Installing Partner Modules</a></span></dt>
<dt><span class="section"><a href="install.post-install.config.php">12.2. Reviewing Configuration Files</a></span></dt>
<dt><span class="section"><a href="install.post-install.rotate.php">12.3. Rotating Logfiles</a></span></dt>
<dt><span class="section"><a href="install.post-install.vertica_mgmt_console.php">12.4. Download and Install the Vertica Management Console</a></span></dt>
<dt><span class="section"><a href="install.vertica.license.php">12.5. Upgrading the Vertica License</a></span></dt>
<dt><span class="section"><a href="install.security_considerations.php">12.6. Security Considerations</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="add_remove_platform_nodes.php">13. Adding and Removing Platform Nodes</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="add_remove_platform_nodes.php#node_add">13.1. Adding a Platform Node</a></span></dt>
<dt><span class="section"><a href="node_remove.php">13.2. Removing a Platform Node</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="add_remove_analytics_nodes.php">14. Adding and Removing Analytics Nodes</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="add_remove_analytics_nodes.php#node_add_analytics">14.1. Adding an Analytics Node</a></span></dt>
<dt><span class="section"><a href="node_remove_analytics.php">14.2. Removing an Analytics Node</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="p.configuration.php">III. Configuring Momentum</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="conf.overview.php">15. Configuration Overview</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="conf.overview.php#conf.files">15.1. Configuration Files</a></span></dt>
<dt><span class="section"><a href="conf.options.php">15.2. Configuration Options</a></span></dt>
<dt><span class="section"><a href="ecelerity.conf.fallback.php">15.3. Configuration Scopes and Fallback</a></span></dt>
<dt><span class="section"><a href="listeners.php">15.4. Listeners</a></span></dt>
<dt><span class="section"><a href="module_config.php">15.5. Modules</a></span></dt>
<dt><span class="section"><a href="conf.ref.ecelerity.conf.php">15.6. <code class="filename">ecelerity.conf</code> File</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="cluster.php">16. Cluster-specific Configuration</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="cluster.php#cluster.config_files">16.1. Cluster-specific Configuration Files</a></span></dt>
<dt><span class="section"><a href="conf.ref.eccluster.conf.php">16.2. <code class="filename">eccluster.conf</code> File</a></span></dt>
<dt><span class="section"><a href="conf.ref.ecelerity_cluster.conf.php">16.3. <code class="filename">ecelerity-cluster.conf</code> File</a></span></dt>
<dt><span class="section"><a href="conf.ref.msgc_server.conf.php">16.4. <code class="filename">msgc_server.conf</code> File</a></span></dt>
<dt><span class="section"><a href="cluster.listeners.php">16.5. Cluster-specific Listeners</a></span></dt>
<dt><span class="section"><a href="cluster.config.failover.php">16.6. Configuring Momentum for High Availability and Failover</a></span></dt>
<dt><span class="section"><a href="cluster.riak.configuration.php">16.7. Configuring Riak in a Cluster</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="control_listener.php">17. Configuring Momentum's System Console</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="control_listener.php#control_listener.config">17.1. Control_Listener Configuration</a></span></dt>
<dt><span class="section"><a href="control_auth.php">17.2. Control_Listener Authentication</a></span></dt>
<dt><span class="section"><a href="control_acct.php">17.3. Control_Listener Accounting</a></span></dt>
<dt><span class="section"><a href="control_authz.php">17.4. Control_Listener Authorization</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="ecstream_listener.php">18. Configuring Inbound Mail Service Using ECStream</a></span></dt>
<dd><dl><dt><span class="section"><a href="ecstream_listener.php#ecstream_listener.config">18.1. ECStream_Listener Configuration</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="esmtp_listener.php">19. Configuring Inbound Mail Service Using SMTP</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="esmtp_listener.php#esmtp_listener.config">19.1. ESMTP_Listener Configuration</a></span></dt>
<dt><span class="section"><a href="esmtp_listener.relay_domains.php">19.2. Inbound Email Relay or Gateway</a></span></dt>
<dt><span class="section"><a href="esmtp_listener.reconfig_message.php">19.3. <code class="option">Reconfig_Message</code> Option</a></span></dt>
<dt><span class="section"><a href="esmtp_listener.extensions.php">19.4. SMTP Extensions</a></span></dt>
<dt><span class="section"><a href="inbound_smtp.php">19.5. ESMTP_Listener Authentication</a></span></dt>
<dt><span class="section"><a href="inbound_ssl.php">19.6. Inbound SSL</a></span></dt>
<dt><span class="section"><a href="inbound_tls.php">19.7. Inbound TLS</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="http_listener.php">20. Configuring Inbound Mail Service Using HTTP</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="http_listener.php#http_listener.config">20.1. HTTP_Listener Configuration</a></span></dt>
<dt><span class="section"><a href="conf.ref.msg_gen.conf.php">20.2. <code class="filename">msg_gen.conf</code> File</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="auth.php">21. Enforcing REST API/UI User Authentication</a></span></dt>
<dt><span class="chapter"><a href="using_domainkeys.php">22. Using Yahoo! DomainKeys</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="using_domainkeys.php#using_domainkeys.signing">22.1. DomainKeys Signing</a></span></dt>
<dt><span class="section"><a href="using_domainkeys.validation.php">22.2. DomainKeys Validation</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="using_dkim.php">23. Using DomainKeys Identified Mail (DKIM) Signatures</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="using_dkim.php#using_dkim.signing">23.1. DKIM Signing</a></span></dt>
<dt><span class="section"><a href="using_dkim.validation.php">23.2. DKIM Validation</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="multi_event_loops.php">24. Configuring Multiple Event Loops</a></span></dt>
<dt><span class="chapter"><a href="outbound_mail.php">25. Configuring Outbound Mail Delivery</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="outbound_mail.php#outbound_mail.routing.mail">25.1. Routing Mail</a></span></dt>
<dt><span class="section"><a href="outbound_mail.prohibited.hosts.php">25.2. Prohibited_Hosts</a></span></dt>
<dt><span class="section"><a href="outbound_mail.multivip.interfaces.php">25.3. MultiVIP© Interfaces</a></span></dt>
<dt><span class="section"><a href="outbound_mail.traffic.shaping.php">25.4. Throttling and Traffic Shaping</a></span></dt>
<dt><span class="section"><a href="tls_option.php">25.5. Outbound TLS</a></span></dt>
<dt><span class="section"><a href="outbound_mail.outbound.xclient.php">25.6. Outbound XCLIENT support</a></span></dt>
<dt><span class="section"><a href="outbound_mail.relay_hosts.php">25.7. Outbound Email Relay</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="log_aggregation.php">26. Log Aggregation</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="log_aggregation.php#log_aggregation.configuration">26.1. Configuring Log Aggregation</a></span></dt>
<dt><span class="section"><a href="cluster.config.logging.centalized.logging.php">26.2. Centralized Logging Example</a></span></dt>
<dt><span class="section"><a href="cluster.config.logging.complex.php">26.3. Complex Centralized Logging Deployments</a></span></dt>
<dt><span class="section"><a href="cluster.config.logging.redundancy.php">26.4. Redundant Logs</a></span></dt>
<dt><span class="section"><a href="cluster.config.logging.decommissioning.php">26.5. Decommissioning a Log Aggregator</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="cluster.config.duravip.php">27. <span class="trademark">DuraVIP</span>™: IP Fail over</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="cluster.config.duravip.php#cluster.config.duravip_follow">27.1. IP Addresses and <code class="option">duravip_follow</code></a></span></dt>
<dt><span class="section"><a href="cluster.config.mmove.php">27.2. <code class="option">duravip_follow</code> and the #mmove Binding</a></span></dt>
<dt><span class="section"><a href="cluster.config.arp_all_hosts.php">27.3. Address Resolution Protocol (ARP) traffic</a></span></dt>
<dt><span class="section"><a href="cluster.duravip.conflict.php">27.4. <span class="trademark">DuraVIP</span>™ Configuration Conflicts and Ambiguities</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="cluster.config.replication.php">28. Data Replication</a></span></dt>
<dd><dl><dt><span class="section"><a href="cluster.config.replication.php#cluster.replication.features">28.1. Replication Configurations</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="postgresql.php">29. PostgreSQL</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="postgresql.php#postgresql.overview">29.1. PostgreSQL Overview</a></span></dt>
<dt><span class="section"><a href="postgresql.server.php">29.2. Running the PostgreSQL Server</a></span></dt>
<dt><span class="section"><a href="postgresql.client.php">29.3. Using the PostgreSQL Client Program</a></span></dt>
<dt><span class="section"><a href="postgresql.migrating.php">29.4. Dumping and Restoring the Database</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="riak.php">30. Riak</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="riak.php#riak.overview">30.1. Riak Overview</a></span></dt>
<dt><span class="section"><a href="riak.service.php">30.2. Running the Riak Service</a></span></dt>
<dt><span class="section"><a href="operations.riak.ports.php">30.3. Riak Ports</a></span></dt>
<dt><span class="section"><a href="operations.riak.backups.php">30.4. Backups</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="environment_file.php">31. Configuring the Environment File</a></span></dt>
</dl></dd>
<dt><span class="part"><a href="p.logs.php">IV. Logging</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="logging.overview.php">32. Logging Overview</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="logging.overview.php#logging.overview.files">32.1. Log Files</a></span></dt>
<dt><span class="section"><a href="logging.configuration.php">32.2. Logging Configuration</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="log_monitoring.php">33. Log Monitoring</a></span></dt>
<dt><span class="chapter"><a href="log_rotating.php">34. Rotating Logs <span class="command"><strong>ec_rotate</strong></span></a></span></dt>
<dd><dl><dt><span class="section"><a href="log_rotating.php#conf.ref.ec_rotate.conf">34.1. <code class="filename">ec_rotate.conf</code> File</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="log_formats.php">35. Log Formats</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="log_formats.php#log_formats.acctlog">35.1. <code class="filename">acctlog</code></a></span></dt>
<dt><span class="section"><a href="adaptive.log.format.php">35.2. <code class="filename">adaptive</code> Log</a></span></dt>
<dt><span class="section"><a href="log_formats.bouncelog.php">35.3. <code class="filename">bouncelog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.fbllog.php">35.4. <code class="filename">fbllog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.httplog.php">35.5. <code class="filename">httplog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.importlog.php">35.6. <code class="filename">importlog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.mainlog.php">35.7. <code class="filename">mainlog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.paniclog.php">35.8. <code class="filename">paniclog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.rejectlog.php">35.9. <code class="filename">rejectlog</code></a></span></dt>
<dt><span class="section"><a href="bounce_logger.classification.codes.php">35.10. Bounce Classification Codes</a></span></dt>
<dt><span class="section"><a href="log_formats.connection.stages.php">35.11. Connection Stages</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="p.operations.php">V. Using the System Console</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="conf.starting.php">36. Starting Momentum (<span class="command"><strong>ecelerity</strong></span>)</a></span></dt>
<dd><dl><dt><span class="section"><a href="conf.starting.php#startup.scripts">36.1. Startup Scripts</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="operations.php">37. Using the System Console (<span class="command"><strong>ec_console</strong></span>)</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="operations.php#operations.console">37.1. Connecting to the Console</a></span></dt>
<dt><span class="section"><a href="operations.console-commands.php">37.2. Console Commands</a></span></dt>
<dt><span class="section"><a href="module_specific_console_commands.using.php">37.3. Using Module-Specific Console Commands</a></span></dt>
<dt><span class="section"><a href="modules.options.console.php">37.4. Setting and Getting Module Options from the Console</a></span></dt>
<dt><span class="section"><a href="operations.console.lua.php">37.5. Creating Custom Console Commands</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="cluster.config.operations.php">38. Using the Cluster Manager (<span class="command"><strong>eccmgr</strong></span>)</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="cluster.config.operations.php#idp4497120">38.1. Connecting to the Console on the Cluster Manager</a></span></dt>
<dt><span class="section"><a href="cluster.config.operations.eccmgr.console.php">38.2. Console Commands for the Cluster Manager</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="cluster.cidr_server.php">39. CIDR Server</a></span></dt>
<dd><dl><dt><span class="section"><a href="cluster.cidr_server.php#cluster.cidr_cli">39.1. <code class="literal">cidr_cli</code> Utility</a></span></dt></dl></dd>
</dl></dd>
<dt><span class="part"><a href="p.smtp_injections.php">VI. SMTP Injection</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="smtp_injection.php">40. Adjusting your Client Mail Application</a></span></dt>
<dt><span class="chapter"><a href="engagement_tracking_smtp.php">41. Tracking Engagement for SMTP</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="engagement_tracking_smtp.php#engagement_tracking_smtp.intro">41.1. Introduction</a></span></dt>
<dt><span class="section"><a href="x-msys-api_header.php">41.2. Using the X-MSYS-API Header for Engagement Tracking</a></span></dt>
<dt><span class="section"><a href="engagement_tracking_smtp.policy.php">41.3. Using Policy for Engagement Tracking</a></span></dt>
<dt><span class="section"><a href="engagement_tracking_smtp.escaping.php">41.4. Escaping {{ and }} in SMTP Message Body</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="smtp_reporting_options.php">42. Reporting Options</a></span></dt>
</dl></dd>
<dt><span class="part"><a href="p.http_rest.php">VII. Message Generation (HTTP)</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="create_apikey.php">43. Creating an API Key</a></span></dt>
<dt><span class="chapter"><a href="web-ui.apikeys.php">44. Managing Your API Keys</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="web-ui.apikeys.php#web-ui.apikeys.viewing">44.1. Viewing Your API Keys</a></span></dt>
<dt><span class="section"><a href="web-ui.apikeys.create.php">44.2. Creating an API Key</a></span></dt>
<dt><span class="section"><a href="web-ui.apikeys.update.php">44.3. Updating an API Key</a></span></dt>
<dt><span class="section"><a href="web-ui.apikeys.delete.php">44.4. Deleting an API Key</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="message_gen.php">45. Generating a Transmission</a></span></dt>
<dt><span class="chapter"><a href="substitution_data.php">46. Using Substitution Data</a></span></dt>
<dt><span class="chapter"><a href="stored_template.php">47. Creating Stored Templates</a></span></dt>
<dt><span class="chapter"><a href="web-ui.templates.php">48. Managing Your Templates in the UI</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="web-ui.templates.php#web-ui.templates.view">48.1. Viewing Your Templates</a></span></dt>
<dt><span class="section"><a href="web-ui.templates.create.php">48.2. Creating a Template</a></span></dt>
<dt><span class="section"><a href="web-ui.templates.preview.php">48.3. Previewing and Testing Your Template</a></span></dt>
<dt><span class="section"><a href="web-ui.update.template.php">48.4. Updating Your Template</a></span></dt>
<dt><span class="section"><a href="web-ui.templates.publish.php">48.5. Publishing Your Template</a></span></dt>
<dt><span class="section"><a href="web-ui.templates.delete.php">48.6. Deleting a Template</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="using_template.php">49. Using Stored Templates</a></span></dt>
<dt><span class="chapter"><a href="stored_list.php">50. Creating Stored Recipient Lists</a></span></dt>
<dd><dl><dt><span class="section"><a href="stored_list.php#manage_list_ui">50.1. Managing Recipient Lists using the UI</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="using_list.php">51. Using Stored Recipient Lists</a></span></dt>
<dt><span class="chapter"><a href="sending_cc_bcc.php">52. Sending Emails as CC and BCC</a></span></dt>
<dt><span class="chapter"><a href="complex_template.php">53. Using Complex Templates</a></span></dt>
</dl></dd>
<dt><span class="part"><a href="p.analytics.php">VIII. Reporting and Engagement Tracking</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="http_reporting_options.php">54. Reporting Options</a></span></dt>
<dt><span class="chapter"><a href="web-ui.php">55. Getting Started with the Web-based User Interface</a></span></dt>
<dd><dl><dt><span class="section"><a href="web-ui.php#web-ui.recipients">55.1. Recipient Lists</a></span></dt></dl></dd>
<dt><span class="chapter"><a href="reporting_ui.php">56. Using the UI for Reporting</a></span></dt>
<dt><span class="chapter"><a href="web-ui.reports.php">57. Reports and Engagement Tracking in the UI</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="web-ui.reports.php#web-ui.reports.selecting.metrics.filters">57.1. Selecting Your Metrics and Filters</a></span></dt>
<dt><span class="section"><a href="web-ui.reports.viewing.reports.php">57.2. Viewing Your Reports</a></span></dt>
<dt><span class="section"><a href="web-ui.reports.adaptive.delivery.php">57.3. Adaptive Delivery Report</a></span></dt>
<dt><span class="section"><a href="web-ui.reports.evaluating.campaign.performance.php">57.4. Evaluating Your Campaign Performance</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="reporting_metrics.php">58. Using the Metrics API for Reporting</a></span></dt>
<dt><span class="chapter"><a href="reporting_webhooks.php">59. Using Webhooks for Event Data</a></span></dt>
<dt><span class="chapter"><a href="web-ui.webhooks.php">60. Managing Your Webhooks in the UI</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="web-ui.webhooks.php#web-ui.webhooks.viewing">60.1. Viewing Your Webhooks</a></span></dt>
<dt><span class="section"><a href="web-ui.webhooks.create.php">60.2. Creating a Webhook</a></span></dt>
<dt><span class="section"><a href="web-ui.webhooks.test.php">60.3. Testing Your Webhook</a></span></dt>
<dt><span class="section"><a href="web-ui.webhooks.update.php">60.4. Updating Your Webhook</a></span></dt>
<dt><span class="section"><a href="web-ui.webhooks.delete.php">60.5. Deleting a Webhook</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="engagement_tracking_http.php">61. Tracking Engagement for HTTP</a></span></dt>
</dl></dd>
<dt><span class="part"><a href="p.policy.php">IX. Writing Policy</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="policy.php">62. Implementing Policy with Momentum</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="policy.php#policy.validation">62.1. Validation and the Validation Context</a></span></dt>
<dt><span class="section"><a href="implementing.policy.scriptlets.php">62.2. Policy Scriptlets</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="policy.context.variables.php">63. Validation Context Variables</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="policy.context.variables.php#policy.predefined-context-conn">63.1. Connection Context Variables</a></span></dt>
<dt><span class="section"><a href="policy.context-mess.php">63.2. Message Context Variables</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="p.reference.php">X. Reference</a></span></dt>
<dd><dl>
<dt><span class="chapter"><a href="lua.summary_table.php">64. Lua Functions Summary</a></span></dt>
<dt><span class="chapter"><a href="modules.summary.all.modules.php">65. Modules Summary</a></span></dt>
<dt><span class="chapter"><a href="config.options.summary.php">66. Configuration Options Summary</a></span></dt>
<dt><span class="chapter"><a href="console_commands.php">67. Console Commands Summary</a></span></dt>
<dt><span class="chapter"><a href="exe.php">68. Executable Command Summary</a></span></dt>
<dt><span class="chapter"><a href="hooks.php">69. Hook Points and C Functions Reference</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="hooks.msg_gen_data_spool.php">msg_gen_data_spool</a></span><span class="refpurpose"> — This hook is invoked after a message has been generated by the msg_gen
      module</span>
</dt>
<dt>
<span class="refentrytitle"><a href="hooks.config_rsrc_setup.php">config_rsrc_setup</a></span><span class="refpurpose"> — Register a resource</span>
</dt>
<dt>
<span class="refentrytitle"><a href="apis.ec_config_rsrc_get.php">ec_config_rsrc_get</a></span><span class="refpurpose"> — Return a resource list blobject from the configuration system</span>
</dt>
<dt>
<span class="refentrytitle"><a href="apis.ec_httpsrv_register_auth.php">ec_httpsrv_register_auth</a></span><span class="refpurpose"> — Register an HTTP handler for authenticating a URI</span>
</dt>
<dt>
<span class="refentrytitle"><a href="apis.ec_httpsrv_request_local_address.php">ec_httpsrv_request_local_address</a></span><span class="refpurpose"> — Returns the local IP address from the current session</span>
</dt>
<dt>
<span class="refentrytitle"><a href="apis.ec_httpsrv_request_peer_address.php">ec_httpsrv_request_peer_address</a></span><span class="refpurpose"> — Returns the remote peer address from the current session</span>
</dt>
</dl></dd>
<dt><span class="chapter"><a href="lua.function.details.php">70. Lua Functions Reference</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.db.execute.php">msys.db.execute</a></span><span class="refpurpose"> — Execute a query that is not expected to return data</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.ac_esmtp_capability_add.php">ac:esmtp_capability_add</a></span><span class="refpurpose"> — Add a capability to the EHLO response</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.ac_esmtp_capability_remove.php">ac:esmtp_capability_remove</a></span><span class="refpurpose"> — Remove a capability string from the EHLO response</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.ac_inbound_session_count.php">ac:inbound_session_count</a></span><span class="refpurpose"> — Return the current inbound session count to this listener for the
      connecting IP</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cloudmark.analyze.php">msys.cloudmark.analyze</a></span><span class="refpurpose"> — Analyze a message using Cloudmark</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cloudmark.add_af_data.php">msys.cloudmark.add_af_data</a></span><span class="refpurpose"> — Pass data for use with the Cloudmark ActiveFilter.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cloudmark.score.php">msys.cloudmark.score</a></span><span class="refpurpose"> — Scan messages using Cloudmark</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cloudmark.score_af.php">msys.cloudmark.score_af</a></span><span class="refpurpose"> — Set the Cloudmark ActiveFilter score threshold</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cloudmark.set_af_mode_discard.php">msys.cloudmark.set_af_mode_discard</a></span><span class="refpurpose"> — Set the Cloudmark ActiveFilter mode to DISCARD.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cloudmark.set_af_mode_keep.php">msys.cloudmark.set_af_mode_keep</a></span><span class="refpurpose"> — Set the Cloudmark ActiveFilter mode to KEEP.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cloudmark.set_af_mode_movemsg.php">msys.cloudmark.set_af_mode_movemsg</a></span><span class="refpurpose"> — Set the Cloudmark ActiveFilter mode to MOVEMSG.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cloudmark.set_af_msi_address.php">msys.cloudmark.set_af_msi_address</a></span><span class="refpurpose"> — Set the address for the Cloudmark ActiveFilter MSI Messages.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.apn.apn_status_classifier.php">msys.apn.apn_status_classifier</a></span><span class="refpurpose"> — Determine whether the delivery status code represents a permanent or
      temporary failure</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.client_do_request.php">client:do_request</a></span><span class="refpurpose"> — Perform an HTTP request</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.client_get_body.php">client:get_body</a></span><span class="refpurpose"> — Get the body of an HTTP response</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.client_get_headers.php">client:get_headers</a></span><span class="refpurpose"> — Get HTTP headers</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.client_get_status.php">client:get_status</a></span><span class="refpurpose"> — Return the status of an HTTP request</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.sess_request_add_header.php">sess:request_add_header</a></span><span class="refpurpose"> — Add a header to an HTTP session</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.sess_request_delete_header.php">sess:request_delete_header</a></span><span class="refpurpose"> — Delete a header from an HTTP session</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.sess_request_finalize.php">sess:request_finalize</a></span><span class="refpurpose"> — Finalize changes to an HTTP request</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.sess_request_set_body.php">sess:request_set_body</a></span><span class="refpurpose"> — Set the body of an HTTP session</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.httpclnt.http_status_classifier.php">msys.httpclnt.http_status_classifier</a></span><span class="refpurpose"> — Determine the delivery status of the "DLV_Response_Status" variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.http.client.new.php">msys.http.client.new</a></span><span class="refpurpose"> — Create an HTTP client</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.client_parse_headers.php">client:parse_headers</a></span><span class="refpurpose"> — Parse the headers of an HTTP response</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.client_set_header.php">client:set_header</a></span><span class="refpurpose"> — Set an HTTP header</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.client_set_timeout.php">client:set_timeout</a></span><span class="refpurpose"> — Set the timeout for an HTTP client</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.curl.c_close.php">c:close</a></span><span class="refpurpose"> — Close a curl object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.curl.c_perform.php">c:perform</a></span><span class="refpurpose"> — Perform the file transfer</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.curl.c_setopt.php">c:setopt</a></span><span class="refpurpose"> — Set the option value of a curl object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.curl.escape.php">curl.escape</a></span><span class="refpurpose"> — URL encode a string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.curl.new.php">curl.new</a></span><span class="refpurpose"> — Create a cURL object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.curl.unescape.php">curl.unescape</a></span><span class="refpurpose"> — Unescape URL encoding in strings</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.core.dns_get_domain.php">msys.core.dns_get_domain</a></span><span class="refpurpose"> — Get a domain record</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.core.get_now_ts.php">msys.core.get_now_ts</a></span><span class="refpurpose"> — Get the current time</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.core.mail_queue_delay_domain.php">msys.core.mail_queue_delay_domain</a></span><span class="refpurpose"> — Add a domain record to the delayed queue</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.core.string_new.php">msys.core.string_new</a></span><span class="refpurpose"> — Create an ec_string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_code.php">msg:code</a></span><span class="refpurpose"> — Get or set the message code</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_get_envelope2.php">msg:get_envelope2</a></span><span class="refpurpose"> — Get envelope values</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.header.php">msg:header</a></span><span class="refpurpose"> — Manipulate message headers</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_listener_addr.php">msg:listener_addr</a></span><span class="refpurpose"> — Get the <code class="literal">recv_via</code> IP and/or PORT.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_reception_peer.php">msg:reception_peer</a></span><span class="refpurpose"> — Get the <code class="literal">recv_from</code> IP and/or PORT.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_context_delete.php">msg:context_delete</a></span><span class="refpurpose"> — Delete a context variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_context_exists.php">msg:context_exists</a></span><span class="refpurpose"> — Check if a context variable exists</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_context_exists_and_get.php">msg:context_exists_and_get</a></span><span class="refpurpose"> — Check if a context variable exists and get it</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_context_get.php">msg:context_get</a></span><span class="refpurpose"> — Get a context variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_context_set.php">msg:context_set</a></span><span class="refpurpose"> — Sets a context variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_unlink.php">msgpart:unlink</a></span><span class="refpurpose"> — Remove the part (and its children) from the MIME tree</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.core.io_wrapper_open.php">msys.core.io_wrapper_open</a></span><span class="refpurpose"> — Open a handle to a resource</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cast.php">msys.cast</a></span><span class="refpurpose"> — Cast an object to the specified class</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.config.php">msys.config</a></span><span class="refpurpose"> — Set or get configuration values</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.dnslookup.php">msys.dnsLookup</a></span><span class="refpurpose"> — Perform a DNS lookup</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.expandMacro.php">msys.expandMacro</a></span><span class="refpurpose"> — Expand macros (such as sieve, spf and custom_logger macros)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.getClassMetaTable.php">msys.getClassMetaTable</a></span><span class="refpurpose"> — Return the metatable for the named class</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.httpsrv.register.php">msys.httpsrv.register</a></span><span class="refpurpose"> — Register a Lua function as an HTTP endpoint</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.idn.php">msys.idn.to_idn</a></span><span class="refpurpose"> — Attempts to convert the domain to the IDN format</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.idn_utf8.php">msys.idn.to_utf8</a></span><span class="refpurpose"> — Converts an IDN formatted string to unicode</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.lock.php">msys.lock</a></span><span class="refpurpose"> — The current running OS level thread obtains a lock on the named mutex</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.parseRFC2822Addresses.php">msys.parseRFC2822Addresses</a></span><span class="refpurpose"> — Parse the address string per the address parsing rules defined in
      RFC2822</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.readfile.php">msys.readfile</a></span><span class="refpurpose"> — Read the entire contents of the specified file or URI</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.registerAuth.php">msys.registerAuth</a></span><span class="refpurpose"> — Register an authentication/authorization scheme that can be used for
      SMTP or control channel authentication</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.registerControl.php">msys.registerControl</a></span><span class="refpurpose"> — Register a command with the control channel subsystem</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.registerModule.php">msys.registerModule</a></span><span class="refpurpose"> — Register a Lua module with the system.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.runinpool.php">msys.runInPool</a></span><span class="refpurpose"> — Run a function in a separate threadpool</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.sleep.php">msys.sleep</a></span><span class="refpurpose"> — When called in the scheduler thread, suspend the current session for the
      specified duration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.snmpTrap.php">msys.snmpTrap</a></span><span class="refpurpose"> — Issue an SNMP trap</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.type.php">msys.type</a></span><span class="refpurpose"> — Return the type name of the supplied parameter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.unlock.php">msys.unlock</a></span><span class="refpurpose"> — Release a lock obtained via msys.lock</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.session_request_url_get.php">session:request_url_get</a></span><span class="refpurpose"> — Get the request URL</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.session_response_status_set_std.php">session:response_status_set_std</a></span><span class="refpurpose"> — Set the HTTP status for the session response</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.json.decode.php">json.decode</a></span><span class="refpurpose"> — Create a JSON object from a JSON string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.json.encode.php">json.encode</a></span><span class="refpurpose"> — Convert a Lua variable or an expression for use with a JSON object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.json.new.php">json.new</a></span><span class="refpurpose"> — Create an empty JSON object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.json.strerror.php">json.strerror</a></span><span class="refpurpose"> — Return the description of a JSON error code</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg.batch_id.php">msg.batch_id</a></span><span class="refpurpose"> — Return the human-readable ec_message.batch_id</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg.conn_id.php">msg.conn_id</a></span><span class="refpurpose"> — Return the human-readable ec_message.conn_id</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg.id.php">msg.id</a></span><span class="refpurpose"> — Return the human-readable ec_message.id</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_address_header.php">msg:address_header</a></span><span class="refpurpose"> — Returns address components as an array</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_binding.php">msg:binding</a></span><span class="refpurpose"> — Set or get the message binding</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_binding_group.php">msg:binding_group</a></span><span class="refpurpose"> — Sets the binding_group to the named binding, if one is provided.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_body.php">msg:body</a></span><span class="refpurpose"> — Set the message body (minus headers) if provided</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_body_match.php">msg:body_match</a></span><span class="refpurpose"> — Streaming interface to a PCRE search of a message body (minus headers)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_body_replace.php">msg:body_replace</a></span><span class="refpurpose"> — Streaming interface to a PCRE replacement of a message body (minus
        headers)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_build.php">msg:build</a></span><span class="refpurpose"> — Create a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_discard.php">msg:discard</a></span><span class="refpurpose"> — Silently discard a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_forward.php">msg:forward</a></span><span class="refpurpose"> — Forward the current message to recipients other than the original
        recipients</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_get_delivery_method.php">msg:get_delivery_method</a></span><span class="refpurpose"> — Return the delivery method for a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_get_message_size.php">msg:get_message_size</a></span><span class="refpurpose"> — Return the size of a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_inject.php">msg:inject</a></span><span class="refpurpose"> — Use this function to send mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_is_mcmt.php">msg:is_mcmt</a></span><span class="refpurpose"> — Determine whether a message is a MCMT message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_mailfrom.php">msg:mailfrom</a></span><span class="refpurpose"> — Sets the 'MAIL FROM' email address if one is provided</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_makeBoundary.php">msg:makeBoundary</a></span><span class="refpurpose"> — Generates a unique boundary string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_makeContainer.php">msg:makeContainer</a></span><span class="refpurpose"> — Creates a new, unlinked, container message part</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_makePart.php">msg:makePart</a></span><span class="refpurpose"> — Creates a new, unlinked, singleton (or leaf) message part</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_mime.php">msg:mime</a></span><span class="refpurpose"> — Returns the top of the MIME tree for the message, a message part</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_raw.php">msg:raw</a></span><span class="refpurpose"> — Set or returns the message content</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_raw_match.php">msg:raw_match</a></span><span class="refpurpose"> — Streaming interface to a PCRE search of the message content</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_raw_replace.php">msg:raw_replace</a></span><span class="refpurpose"> — Streaming interface to a PCRE replacement of message content</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_rcptto.php">msg:rcptto</a></span><span class="refpurpose"> — Sets the 'RCPT TO' email address if one is provided</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_routing_domain.php">msg:routing_domain</a></span><span class="refpurpose"> — Set or return the routing domain for a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_text.php">msg:text</a></span><span class="refpurpose"> — Return the transfer decoded text for the body</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_text1.php">msg:text</a></span><span class="refpurpose"> — Replace the entire message body</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_text_match.php">msg:text_match</a></span><span class="refpurpose"> — Streaming PCRE search across the transfer-decoded, UTF-8 text version of
        the message body</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msg_text_replace.php">msg:text_replace</a></span><span class="refpurpose"> — Streaming interface to a PCRE replacement of textual content from the
        message body</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_addFirstChild.php">msgpart:addFirstChild</a></span><span class="refpurpose"> — Adds a child as the first child on this part</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_addLastChild.php">msgpart:addLastChild</a></span><span class="refpurpose"> — Adds a child as the last child on this part</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_address_header.php">msgpart:address_header</a></span><span class="refpurpose"> — Parse each instance of the named header for RFC2822 addresses</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_body_match.php">msgpart:body_match</a></span><span class="refpurpose"> — Streaming interface to a PCRE search of a message body part (minus
        headers)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_body_replace.php">msgpart:body_replace</a></span><span class="refpurpose"> — Streaming interface to a PCRE replacement of a message body part (minus
        headers)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_content_type.php">msgpart:content_type</a></span><span class="refpurpose"> — Returns a table of content type related information</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_header.php">msgpart:header</a></span><span class="refpurpose"> — Return an array of header values for the given name</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_header2.php">msgpart:header</a></span><span class="refpurpose"> — Unset the header name of the current message part</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_header3.php">msgpart:header</a></span><span class="refpurpose"> — If mode is replace (or unspecified): first deletes all other headers of
        that name before appending the new value to the message headers</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_insertAfter.php">msgpart:insertAfter</a></span><span class="refpurpose"> — Insert this part into the MIME tree after the given parameter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_insertBefore.php">msgpart:insertBefore</a></span><span class="refpurpose"> — Insert this part into the MIME tree before the given parameter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_raw_match.php">msgpart:raw_match</a></span><span class="refpurpose"> — Streaming interface to a PCRE search of the current message part</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_raw_replace.php">msgpart:raw_replace</a></span><span class="refpurpose"> — Streaming interface to a PCRE replacement message part content</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_text2.php">msgpart:text</a></span><span class="refpurpose"> — The entire message body part is replaced by the supplied text</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_text.php">msgpart:text</a></span><span class="refpurpose"> — Returns the transfer decoded text for the message part, in UTF-8</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_text_match.php">msgpart:text_match</a></span><span class="refpurpose"> — Streaming a PCRE search across the transfer decoded UTF-8 text version
        of the message body part</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msgpart_text_replace.php">msgpart:text_replace</a></span><span class="refpurpose"> — Streaming interface to a PCRE replacement of textual content from the
        message body parts</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.asyncOk.php">msys.asyncOk</a></span><span class="refpurpose"> — Check if the current execution environment is suitable for
        suspend/resume operations</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.audit.connections.php">msys.audit.connections</a></span><span class="refpurpose"> — Return the number of connections that have occurred for a CIDR block
        within a configured time window</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.audit.inbound_session_count.php">msys.audit.inbound_session_count</a></span><span class="refpurpose"> — Count connections currently established from the specified cidr to the
        specified service</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.audit.receptions.php">msys.audit.receptions</a></span><span class="refpurpose"> — Return the number of receptions that have occurred for a CIDR block
        within a configured time window</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.audit.rejections.php">msys.audit.rejections</a></span><span class="refpurpose"> — Return the number of rejections that have occurred for a CIDR block
        within a configured time window</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.audit_series.add.php">msys.audit_series.add</a></span><span class="refpurpose"> — Adjust the counter for the current time window of a named series</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.audit_series.count.php">msys.audit_series.count</a></span><span class="refpurpose"> — Return the total associated with the named series</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.audit_series.define.php">msys.audit_series.define</a></span><span class="refpurpose"> — Define an audit series</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.audit_series.remove_item.php">msys.audit_series.remove_item</a></span><span class="refpurpose"> — Remove a counter from a named series</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.av.engines.php">msys.av.engines</a></span><span class="refpurpose"> — Return a list of configured engine names in a table</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.av.scan.php">msys.av.scan</a></span><span class="refpurpose"> — Perform a virus scan using the named engine</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.av.scan_part.php">msys.av.scan_part</a></span><span class="refpurpose"> — Perform a virus scan on a specific message part using the named engine</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.base64.decode.php">msys.base64.decode</a></span><span class="refpurpose"> — Decode a base64 encoded string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.base64.encode.php">msys.base64.encode</a></span><span class="refpurpose"> — Base64-encode a string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.bounce.classify.php">msys.bounce.classify</a></span><span class="refpurpose"> — Create a bounce classification for a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.bounce.classify_smtp_response.php">msys.bounce.classify_smtp_response</a></span><span class="refpurpose"> — Create a bounce classification from SMTP response text and the domain
        name</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.brightmail.scan.php">msys.brightmail.scan</a></span><span class="refpurpose"> — Use Brightmail to scan messages</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cidr.define.php">msys.cidr.define</a></span><span class="refpurpose"> — Define a named CIDR object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cidr.query.php">msys.cidr.query</a></span><span class="refpurpose"> — Look up address against the named CIDR</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.cidr.reload.php">msys.cidr.reload</a></span><span class="refpurpose"> — Refresh CIDRs of type <code class="literal">datasource</code> and
        <code class="literal">rbldnsd</code></span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.commtouch.diagnose.php">msys.commtouch.diagnose</a></span><span class="refpurpose"> — Scan messages using Commtouch</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.counter.add.php">msys.counter.add</a></span><span class="refpurpose"> — Add to the current value of the specified counter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.counter.inc.php">msys.counter.inc</a></span><span class="refpurpose"> — Increment a counter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.counter.open.php">msys.counter.open</a></span><span class="refpurpose"> — Create a counter object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.counter.read.php">msys.counter.read</a></span><span class="refpurpose"> — Read the specified counter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.counter.reset.php">msys.counter.reset</a></span><span class="refpurpose"> — Reset a counter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.counter.unlink.php">msys.counter.unlink</a></span><span class="refpurpose"> — Unlink a counter</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.db.fetch_row.php">msys.db.fetch_row</a></span><span class="refpurpose"> — If successful, return the first row of the query result as a table</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.db.query.php">msys.db.query</a></span><span class="refpurpose"> — Query a datasource</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.delivery.ob_get_current_message.php">msys.delivery.ob_get_current_message</a></span><span class="refpurpose"> — Get the current message from the session context</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.dumper.Dumper.php">msys.dumper.Dumper</a></span><span class="refpurpose"> — Dump information about an object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.expurgate.scan.php">msys.expurgate.scan</a></span><span class="refpurpose"> — Scan using the Eleven antivirus engine</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.gauge_cache.dec.php">msys.gauge_cache.dec</a></span><span class="refpurpose"> — Decrement the value associated with keystring in the named cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.gauge_cache.define.php">msys.gauge_cache.define</a></span><span class="refpurpose"> — Create a cache that can be used to maintain a set of counters</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.gauge_cache.get.php">msys.gauge_cache.get</a></span><span class="refpurpose"> — Look up the value associated with keystring in the named cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.gauge_cache.inc.php">msys.gauge_cache.inc</a></span><span class="refpurpose"> — Increment the value associated with <code class="literal">keystring</code> in the
        named cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.gauge_cache.remove_item.php">msys.gauge_cache.remove_item</a></span><span class="refpurpose"> — Remove the value associated with <code class="literal">keystring</code> from the
        named cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.gcm.gcm_classify_error.php">msys.gcm.gcm_classify_error</a></span><span class="refpurpose"> — Determine the delivery status of the "DLV_Response_Status" variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.gcm.gcm_get_result_error_code.php">msys.gcm.gcm_get_result_error_code</a></span><span class="refpurpose"> — Get the error code from the response results error</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.pcre.match.php">msys.pcre.match</a></span><span class="refpurpose"> — Perform a PCRE regex match operation</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.pcre.replace.php">msys.pcre.replace</a></span><span class="refpurpose"> — Perform a PCRE replace operation</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.pcre.split.php">msys.pcre.split</a></span><span class="refpurpose"> — Perform a PCRE split operation</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.os.statvfs_read.php">msys.os.statvfs_read</a></span><span class="refpurpose"> — Request a snapshot of the stream</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.os.statvfs_subscribe.php">msys.os.statvfs_subscribe</a></span><span class="refpurpose"> — Provide a "stream" for file system statistics (statvfs) updates</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.qp.decode.php">msys.qp.decode</a></span><span class="refpurpose"> — Decode a quoted-printable message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.qp.encode.php">msys.qp.encode</a></span><span class="refpurpose"> — Quoted-printable encode a string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.rfc3464.compute_delivery_status.php">msys.rfc3464.compute_delivery_status</a></span><span class="refpurpose"> — Generate RFC3464 compliant delivery status headers</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.rfc3464.compute_delivery_status_string.php">msys.rfc3464.compute_delivery_status_string</a></span><span class="refpurpose"> — Generate RFC3464 compliant delivery status headers</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.rfc3464.create_mdn.php">msys.rfc3464.create_mdn</a></span><span class="refpurpose"> — Generate an MDN from a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.rfc3464.extract_delivery_status.php">msys.rfc3464.extract_delivery_status</a></span><span class="refpurpose"> — Return a table of parsed email headers</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.rfc3464.send_mdn.php">msys.rfc3464.send_mdn</a></span><span class="refpurpose"> — Generate and enqueue an MDN</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.symantec_beik.scan.php">msys.symantec_beik.scan</a></span><span class="refpurpose"> — Scan using BEIK</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.threadpool.count.php">msys.threadpool.count</a></span><span class="refpurpose"> — Return the current number of thread pools</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.threadpool.find.php">msys.threadpool.find</a></span><span class="refpurpose"> — Find a thread pool name from a job class ID or a job class ID from a
        thread pool name</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.threadpool.stat.php">msys.threadpool.stat</a></span><span class="refpurpose"> — Return stats regarding a threadpool</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.timer.after.php">msys.timer.after</a></span><span class="refpurpose"> — execute closure after a given time</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.timer.at.php">msys.timer.at</a></span><span class="refpurpose"> — execute closure at a given time</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.timer.every.php">msys.timer.every</a></span><span class="refpurpose"> — execute closure every interval</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.dk.get_responsible_domain.php">msys.validate.dk.get_responsible_domain</a></span><span class="refpurpose"> — Return the domain responsible for the current message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.dk.sign.php">msys.validate.dk.sign</a></span><span class="refpurpose"> — Sign a message using a Domain Key</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_num_sigs.php">msys.validate.opendkim.get_num_sigs</a></span><span class="refpurpose"> — Return the number of DKIM signatures</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig.php">msys.validate.opendkim.get_sig</a></span><span class="refpurpose"> — Get a signature from a DKIM object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_canons.php">msys.validate.opendkim.get_sig_canons</a></span><span class="refpurpose"> — Fetch the canonicalizers used for a signature</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_domain.php">msys.validate.opendkim.get_sig_domain</a></span><span class="refpurpose"> — Fetch the signing domain from a DKIM_SIGINFO object</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_errorstr.php">msys.validate.opendkim.get_sig_errorstr</a></span><span class="refpurpose"> — Fetch the error associated with a DKIM signature</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_flags.php">msys.validate.opendkim.get_sig_flags</a></span><span class="refpurpose"> — Fetch the flags associated with a DKIM signature</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php">msys.validate.opendkim.get_sig_hdrsigned</a></span><span class="refpurpose"> — Determine whether a given header was signed</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_identity.php">msys.validate.opendkim.get_sig_identity</a></span><span class="refpurpose"> — Fetch the identity associated with a DKIM signature</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_keysize.php">msys.validate.opendkim.get_sig_keysize</a></span><span class="refpurpose"> — Fetch the size of the key used to generate a signature</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_selector.php">msys.validate.opendkim.get_sig_selector</a></span><span class="refpurpose"> — Fetch the selector associated with a DKIM signature</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.get_sig_signalg.php">msys.validate.opendkim.get_sig_signalg</a></span><span class="refpurpose"> — Return the signing algorithm as a string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.sign.php">msys.validate.opendkim.sign</a></span><span class="refpurpose"> — Sign a message using OpenDKIM</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.msys.validate.opendkim.verify.php">msys.validate.opendkim.verify</a></span><span class="refpurpose"> — Verify a DKIM signature</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.thread.mutex.php">thread.mutex</a></span><span class="refpurpose"> — create a new mutex</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.vctx_add_recipient.php">vctx:add_recipient</a></span><span class="refpurpose"> — Add an address to the recipient list for the inbound session</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.vctx_disconnect.php">vctx:disconnect</a></span><span class="refpurpose"> — Disconnect the session associated with the current validation context</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.vctx_get.php">vctx:get</a></span><span class="refpurpose"> — Get the value of a context variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.vctx_recipient_list.php">vctx:recipient_list</a></span><span class="refpurpose"> — Return or set the current recipient list</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.vctx_remove_recipient.php">vctx:remove_recipient</a></span><span class="refpurpose"> — Remove an address from the recipient list</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.vctx_set.php">vctx:set</a></span><span class="refpurpose"> — Set the value of a context variable</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.vctx_set_code.php">vctx:set_code</a></span><span class="refpurpose"> — Set the inbound disposition and response message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.vctx_tarpit.php">vctx:tarpit</a></span><span class="refpurpose"> — Issue a time cost on the inbound session</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.doc_root.php">doc:root</a></span><span class="refpurpose"> — Return the root node of an XML document</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.doc_tostring.php">doc:tostring</a></span><span class="refpurpose"> — Output a DOM document as a string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.doc_xpath.php">doc:xpath</a></span><span class="refpurpose"> — Perform an XPath query</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.node_addchild.php">node:addchild</a></span><span class="refpurpose"> — Add a child node</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.node_attribute.php">node:attribute</a></span><span class="refpurpose"> — Set or get the attribute of a node</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.node_children.php">node:children</a></span><span class="refpurpose"> — Return an iterator of all child nodes</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.node_contents.php">node:contents</a></span><span class="refpurpose"> — Get or set a text node</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.node_doc.php">node:doc</a></span><span class="refpurpose"> — Return the document object that contains the specified node</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.node_name.php">node:name</a></span><span class="refpurpose"> — Return the name of a node</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.node_tostring.php">node:tostring</a></span><span class="refpurpose"> — Output a node as a string</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.node_unlink.php">node:unlink</a></span><span class="refpurpose"> — Unlink an XML node from its DOM container</span>
</dt>
<dt>
<span class="refentrytitle"><a href="lua.ref.xml.parsexml.php">xml.parsexml</a></span><span class="refpurpose"> — Create an XML document object</span>
</dt>
</dl></dd>
<dt><span class="chapter"><a href="modules.php">71. Modules Reference</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="modules.php#idp12311472">71.1. Introduction</a></span></dt>
<dt><span class="section"><a href="modules.ac_auth.php">71.2. ac_auth – Authentication Handler</a></span></dt>
<dt><span class="section"><a href="modules.adaptive.php">71.3. adaptive – Adaptive Delivery</a></span></dt>
<dt><span class="section"><a href="modules.alerting.php">71.4. alerting – Send Alerting Emails</a></span></dt>
<dt><span class="section"><a href="modules.alias.php">71.5. alias – Alias Expansion</a></span></dt>
<dt><span class="section"><a href="modules.antivirus.php">71.6. antivirus – Antivirus</a></span></dt>
<dt><span class="section"><a href="modules.as_logger.php">71.7. as_logger – Audit Series Logger</a></span></dt>
<dt><span class="section"><a href="modules.auth_ds.php">71.8. auth_ds – Datasource based SMTP Authentication</a></span></dt>
<dt><span class="section"><a href="modules.auth_radius.php">71.9. auth_radius – RADIUS based SMTP Authentication</a></span></dt>
<dt><span class="section"><a href="modules.beik.php">71.10. beik – Symantec <span class="trademark">Brightmail</span>™ Engine
      Integration Kit</a></span></dt>
<dt><span class="section"><a href="modules.bind_address_secondary.php">71.11. bind_address_secondary – Dual-stack IPv4/IPv6 Support</a></span></dt>
<dt><span class="section"><a href="modules.bounce_classifier_override.php">71.12. bounce_classifier_override – Override/Augment Bounce Classifications</a></span></dt>
<dt><span class="section"><a href="modules.bounce_logger.php">71.13. bounce_logger – Momentum-Style Bounce Logging</a></span></dt>
<dt><span class="section"><a href="modules.brightmail.php">71.14. brightmail – Symantec <span class="trademark">Brightmail</span>™ Content
      Scanning Support</a></span></dt>
<dt><span class="section"><a href="modules.chunk_logger.php">71.15. chunk_logger Module</a></span></dt>
<dt><span class="section"><a href="modules.cidrdb.php">71.16. cidrdb – CIDRDB</a></span></dt>
<dt><span class="section"><a href="modules.clamav.php">71.17. clamav – ClamAV</a></span></dt>
<dt><span class="section"><a href="modules.cloudmark.php">71.18. cloudmark – Cloudmark Authority® Content Scanning</a></span></dt>
<dt><span class="section"><a href="modules.cluster.php">71.19. cluster – Cluster</a></span></dt>
<dt><span class="section"><a href="modules.commtouch.php">71.20. commtouch_ctasd – Commtouch Spam Protection</a></span></dt>
<dt><span class="section"><a href="modules.compress_spool.php">71.21. compress_spool – Dynamic Spool Compression</a></span></dt>
<dt><span class="section"><a href="modules.conntrol.php">71.22. conntrol – Fine-Grained Connection Control</a></span></dt>
<dt><span class="section"><a href="modules.csapi.php">71.23. csapi – Symantec CSAPI Antivirus Support</a></span></dt>
<dt><span class="section"><a href="modules.custom_bounce_logger.php">71.24. custom_bounce_logger – Custom Bounce Logging</a></span></dt>
<dt><span class="section"><a href="modules.custom_logger.php">71.25. custom_logger – User-defined Logging</a></span></dt>
<dt><span class="section"><a href="modules.delay_dsn.php">71.26. delay_dsn – Delay DSN Generation</a></span></dt>
<dt><span class="section"><a href="modules.dnsbuf.php">71.27. dnsbuf – Dynamically Set the DNS UDP Buffer Size</a></span></dt>
<dt><span class="section"><a href="modules.domainkeys.php">71.28. domainkeys – Yahoo! DomainKeys</a></span></dt>
<dt><span class="section"><a href="modules.ds_core.php">71.29. ds_core - Datasource Query Core</a></span></dt>
<dt><span class="section"><a href="modules.ec_logger.php">71.30. EC_logger – Momentum-Style Logging</a></span></dt>
<dt><span class="section"><a href="modules.eleven.php">71.31. eleven – Eleven eXpurgate Content Scanning</a></span></dt>
<dt><span class="section"><a href="modules.engage_tracker.php">71.32. engagement_tracker – HTTP Engagement Tracking</a></span></dt>
<dt><span class="section"><a href="modules.event_hydrant.php">71.33. event_hydrant – Message Tracking</a></span></dt>
<dt><span class="section"><a href="modules.exim_logger.php">71.34. exim_logger – Exim Logging</a></span></dt>
<dt><span class="section"><a href="modules.fbl.php">71.35. fbl - Feedback Loop</a></span></dt>
<dt><span class="section"><a href="modules.host_fingerprint.php">71.36. fingerprint – Host Fingerprinting</a></span></dt>
<dt><span class="section"><a href="modules.http_logger.php">71.37. http_logger – HTTP Requests and Responses</a></span></dt>
<dt><span class="section"><a href="modules.httpsrv.php">71.38. httpsrv – HTTP Server</a></span></dt>
<dt><span class="section"><a href="modules.icu.php">71.39. icu – ICU</a></span></dt>
<dt><span class="section"><a href="modules.ilf_logger.php">71.40. ilf_logger – Incremental License Fee Logging</a></span></dt>
<dt><span class="section"><a href="modules.inbound_audit.php">71.41. inbound_audit – Inbound traffic analytics</a></span></dt>
<dt><span class="section"><a href="modules.ipv6_lookup.php">71.42. ipv6_lookup – Multi-address-family MX Records</a></span></dt>
<dt><span class="section"><a href="modules.jlog.php">71.43. jlog – jlog-Formatted Logging</a></span></dt>
<dt><span class="section"><a href="modules.live.bounce.updates.php">71.44. Live Bounce Updates – Live Bounce Updates Service</a></span></dt>
<dt><span class="section"><a href="modules.mail_loop.php">71.45. mail_loop – Mail Loop Detection</a></span></dt>
<dt><span class="section"><a href="modules.maildir.php">71.46. maildir – Maildir Delivery Support</a></span></dt>
<dt><span class="section"><a href="modules.msgc.php">71.47. msgc – Message Systems Group Communication</a></span></dt>
<dt><span class="section"><a href="modules.msg_gen.php">71.48. msg_gen – Message Generation</a></span></dt>
<dt><span class="section"><a href="modules.mxip.php">71.49. mxip - IP Addresses In MX Records</a></span></dt>
<dt><span class="section"><a href="modules.opendkim.php">71.50. opendkim – Open Source DKIM</a></span></dt>
<dt><span class="section"><a href="modules.outbound_audit.php">71.51. outbound_audit – Outbound traffic analytics</a></span></dt>
<dt><span class="section"><a href="modules.outbound_smtp_auth.php">71.52. outbound_smtp_auth</a></span></dt>
<dt><span class="section"><a href="modules.persistio.php">71.53. persist_io – Persistent IO Wrapper</a></span></dt>
<dt><span class="section"><a href="modules.pipeio.php">71.54. pipe_io – Pipe IO Wrapper</a></span></dt>
<dt><span class="section"><a href="modules.pipe_transport.php">71.55. pipe_transport – Module</a></span></dt>
<dt><span class="section"><a href="modules.postfix_logger.php">71.56. postfix_logger – Postfix Logging</a></span></dt>
<dt><span class="section"><a href="modules.reception_timing.php">71.57. reception_timing - Reception Timing Modules</a></span></dt>
<dt><span class="section"><a href="modules.response_transcode.php">71.58. response_transcode – Module</a></span></dt>
<dt><span class="section"><a href="modules.sched.php">71.59. sched – The Schedule Module</a></span></dt>
<dt><span class="section"><a href="modules.scriptlet.php">71.60. scriptlet - Lua Policy Scripts</a></span></dt>
<dt><span class="section"><a href="modules.securecreds.php">71.61. securecreds – Password Encryption/Credential Retrieval</a></span></dt>
<dt><span class="section"><a href="modules.seedlist.php">71.62. seedlist – Seedlist Integration</a></span></dt>
<dt><span class="section"><a href="modules.sendmail_logger.php">71.63. sendmail_logger – Sendmail Logging</a></span></dt>
<dt><span class="section"><a href="modules.smtp_auth_proxy.php">71.64. smtp_auth_proxy - SMTP Authentication Proxy</a></span></dt>
<dt><span class="section"><a href="modules.smtp_cbv.php">71.65. smtp_cbv – SMTP Callback Verification</a></span></dt>
<dt><span class="section"><a href="modules.smtp_rcptto_proxy.php">71.66. smtp_rcptto_proxy - SMTP Recipient-To Proxy</a></span></dt>
<dt><span class="section"><a href="modules.smtpapi.php">71.67. smtpapi – SMTP Engagement Tracking</a></span></dt>
<dt><span class="section"><a href="modules.spf.php">71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)</a></span></dt>
<dt><span class="section"><a href="modules.static_routes.php">71.69. static-routes - Static Routes</a></span></dt>
<dt><span class="section"><a href="modules.suppress_spool.php">71.70. suppress_spool – Deferred Message Spooling</a></span></dt>
<dt><span class="section"><a href="modules.syslog_io.php">71.71. syslog_io – The syslog_io Module</a></span></dt>
<dt><span class="section"><a href="tls_macros.php">71.72. tls_macros – TLS-related Logging</a></span></dt>
<dt><span class="section"><a href="modules.url_ripper.php">71.73. url_ripper – URL Extraction</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="config.options.ref.php">72. Configuration Options Reference</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="conf.ref.adaptive_backstore_leveldb.php">adaptive_backstore_leveldb</a></span><span class="refpurpose"> — use LevelDB as the backing store for Adaptive Delivery</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.adaptive_backstore_riak.php">adaptive_backstore_riak</a></span><span class="refpurpose"> — set characteristics of the Riak backing store</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.adaptive_enabled.php">adaptive_enabled</a></span><span class="refpurpose"> — enable or disable the adaptive module</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.adaptive_scope.php">adaptive_scope</a></span><span class="refpurpose"> — define the scope applicable to adaptive delivery (AD)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.address_metrics_cleanse_interval.php">address_metrics_cleanse_interval</a></span><span class="refpurpose"> — the interval for refreshing address metrics</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.address_metrics_lifetime.php">address_metrics_lifetime</a></span><span class="refpurpose"> — the TTL of address metrics</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.alias_schemes.php">alias_schemes</a></span><span class="refpurpose"> — enable named alias expansion schemes</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.allow_ip_literal.php">allow_ip_literal</a></span><span class="refpurpose"> — allow IP addresses in email addresses</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.allow_null_envelope_sender.php">allow_null_envelope_sender</a></span><span class="refpurpose"> — allow the null envelope sender in e-mail addresses</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.allow_trailing_whitespace_in_commands.php">allow_trailing_whitespace_in_commands</a></span><span class="refpurpose"> — permit trailing whitespace at the end of an SMTP command</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.async_bounce_rendering.php">async_bounce_rendering</a></span><span class="refpurpose"> — which thread pool to use for bounce rendering</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.authorization.php">authorization</a></span><span class="refpurpose"> — configure the console commands applicable to users</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.bind_address.php">bind_address</a></span><span class="refpurpose"> — source address for outbound connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.binding.php">binding</a></span><span class="refpurpose"> — configure binding specific options</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.binding_auto_replumb.php">binding_auto_replumb</a></span><span class="refpurpose"> — enable or disable the auto replumber</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.binding_auto_replumb_interval.php">binding_auto_replumb_interval</a></span><span class="refpurpose"> — sets the time interval to check the plumbed state of statically plumbed
      bindings</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.binding_group.php">binding_group</a></span><span class="refpurpose"> — logically group a set of bindings</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.blackhole.php">blackhole</a></span><span class="refpurpose"> — blackhole mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.body_timeout.php">body_timeout</a></span><span class="refpurpose"> — network timeout once the DATA phase is complete</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.bounce_behavior.php">bounce_behavior</a></span><span class="refpurpose"> — configure the action taken when a message is classified as a bounce</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.bounce_domains.php">bounce_domains</a></span><span class="refpurpose"> — configure the list of domains eligible for bounce processing by
      Momentum.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.bounce_pattern.php">bounce_pattern</a></span><span class="refpurpose"> — configure the pattern that inbound email addresses must match in order
      to be considered bounces.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.bounce_suppress_list.php">bounce_suppress_list</a></span><span class="refpurpose"> — configure a list of email addresses that may not be considered original
      recipients.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.bounces_inline_original.php">bounces_inline_original</a></span><span class="refpurpose"> — how much of the original message to include in MDNs</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.capabilities.php">capabilities</a></span><span class="refpurpose"> — selectively retain "root" capabilities</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.chroot.php">chroot</a></span><span class="refpurpose"> — chroot to a secure environment</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.clear_mail_queue_maintainers.php">clear_mail_queue_maintainers</a></span><span class="refpurpose"> — reschedule the mail queue maintainer</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.click_tracking_enabled.php">click_tracking_enabled</a></span><span class="refpurpose"> — enable or disable click tracking for SMTP injections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.click_tracking_scheme.php">click_tracking_scheme</a></span><span class="refpurpose"> — set the hyperlink scheme to use for click tracking links in SMTP
      injections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.cluster_max_outbound_connections.php">cluster_max_outbound_connections</a></span><span class="refpurpose"> — set the maximum number of outbound connections for a scope and enforce
      it across a cluster</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.cluster_outbound_throttle_connections.php">cluster_outbound_throttle_connections</a></span><span class="refpurpose"> — limit the rate at which connections are established, and enforce it
      across a cluster of systems</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.cluster_outbound_throttle_messages.php">cluster_outbound_throttle_messages</a></span><span class="refpurpose"> — limit the rate at which messages are delivered, and enforce it across
      the cluster</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.cluster_scope_max_outbound_connections.php">cluster_scope_max_outbound_connections</a></span><span class="refpurpose"> — provide traffic shaping for outbound connections in a cluster
      configuration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.cluster_server_max_outbound_connections.php">cluster_server_max_outbound_connections</a></span><span class="refpurpose"> — set the maximum number of outbound connections, and enforce it across a
      cluster</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.connect_timeout.php">connect_timeout</a></span><span class="refpurpose"> — set the connection timeout</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.connect_timeout_to_delay.php">connect_timeout_to_delay</a></span><span class="refpurpose"> — time interval before sweeping mail into the delayed queue</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.connection_allocation_aggressiveness.php">connection_allocation_aggressiveness</a></span><span class="refpurpose"> — tune the aggressiveness for establishing new connections to domains</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.context.php">context</a></span><span class="refpurpose"> — use to set arbitrary connection context key value pairs.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.control_client_timeout.php">control_client_timeout</a></span><span class="refpurpose"> — network timeout for Momentum control client connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.crypto_engine.php">crypto_engine</a></span><span class="refpurpose"> — enable hardware cryptography acceleration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.crypto_lock_method.php">crypto_lock_method</a></span><span class="refpurpose"> — set the locking method used by the TLS layer</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.debug_flags.php">debug_flags</a></span><span class="refpurpose"> — configure debug verbosity</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.default_binding.php">default_binding</a></span><span class="refpurpose"> — control usage of the "default" binding</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.default_charset.php">default_charset</a></span><span class="refpurpose"> — control usage of the "default" character set</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.delay_dsn_max_retry_interval.php">delay_dsn_max_retry_interval</a></span><span class="refpurpose"> — maximum interval for sending DSNs to the sender of a message that has
      not yet been delivered</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.delay_dsn_retry_interval.php">delay_dsn_retry_interval</a></span><span class="refpurpose"> — base interval for sending DSNs to the sender of a message that has not
      yet been delivered</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.delayed_binding_domain_fuzz.php">delayed_binding_domain_fuzz</a></span><span class="refpurpose"> — length of time to spread scheduled messages over when a bulk requeue is
      necessary</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.delayed_queue_scan_interval.php">delayed_queue_scan_interval</a></span><span class="refpurpose"> — how often to call the maintainer for a domain</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.delivery_method.php">delivery_method</a></span><span class="refpurpose"> — set the delivery method</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.ref.delivery_pool.php">delivery_pool</a></span><span class="refpurpose"> — associate a pool of event loops with email delivery to use multiple
      threads</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.delivery_response_timeout.php">delivery_response_timeout</a></span><span class="refpurpose"> — time to wait for a response to an outbound request</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.disable_nagle_algorithm.php">disable_nagle_algorithm</a></span><span class="refpurpose"> — disable nagle algorithm on sockets</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.disk_queue_drain_rate.php">disk_queue_drain_rate</a></span><span class="refpurpose"> — control the rate at which messages are spooled in on start-up</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.dns_cache_purge_interval.php">dns_cache_purge_interval</a></span><span class="refpurpose"> — how often the DNS response cache is scanned for stale entries</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.dns_expire_interval.php">dns_expire_interval</a></span><span class="refpurpose"> — how often to check for domains with expired DNS information</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.dns_failures_to_purge.php">dns_failures_to_purge</a></span><span class="refpurpose"> — configure the maximum number of DNS lookups</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.dns_fallback_to_tcp.php">dns_fallback_to_tcp</a></span><span class="refpurpose"> — whether or not to fail over to TCP in place of UDP</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.domain_for_unqualified_recipient_addresses.php">domain_for_unqualified_recipient_addresses</a></span><span class="refpurpose"> — configure a domain which will be used to resolve delivery for
      unqualified addresses</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.domain_for_unqualified_sender_address.php">domain_for_unqualified_sender_address</a></span><span class="refpurpose"> — configure a domain which will be used to substitute for unqualified
      sender addresses</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.domain.php">domain</a></span><span class="refpurpose"> — configure domain specific options</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.domainkeys.php">domainkeys</a></span><span class="refpurpose"> — enable or disable domainkeys signing</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.drop_body_after_trans_fail.php">drop_body_after_trans_fail</a></span><span class="refpurpose"> — number of retry attempts before freeing message memory</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.ecstream_port.php">ecstream_port</a></span><span class="refpurpose"> — configure the port for ecstream deliveries</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.ecstream_timeout.php">ecstream_timeout</a></span><span class="refpurpose"> — the amount of time to wait for an ecstream connection to be established</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.ehlo_hostname.php">ehlo_hostname</a></span><span class="refpurpose"> — set the hostname used for EHLO in outbound mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.ehlo_timeout.php">ehlo_timeout</a></span><span class="refpurpose"> — network timeout for EHLO</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.enable_fbl_header_insertion.php">enable_fbl_header_insertion</a></span><span class="refpurpose"> — enable or disable fbl header insertion</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.ref.event_loop.php">event_loop</a></span><span class="refpurpose"> — associate a pool of event loops within a listener scope to use multiple
      threads</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.ref.eventloop.php">eventloop</a></span><span class="refpurpose"> — define a pool of event loops to enable multiple event loop configuration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.events_per_iter.php">events_per_iter</a></span><span class="refpurpose"> — employ when using a concurrency greater than 1.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.exclude_vctx_conn.php">exclude_vctx_conn</a></span><span class="refpurpose"> — exclude validation context keys from being journaled in the spool
      metadata.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.exclude_vctx_mess.php">exclude_vctx_mess</a></span><span class="refpurpose"> — exclude validation context keys from being journaled in the spool
      metadata.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.expensive_batch_assessment.php">expensive_batch_assessment</a></span><span class="refpurpose"> — only treat messages as different if the headers are rendered differently</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.force_fsync.php">force_fsync</a></span><span class="refpurpose"> — ensure that data is synced to disk on reception</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.fully_resolve_before_smtp.php">fully_resolve_before_smtp</a></span><span class="refpurpose"> — resolve all MX and A records before attempting delivery</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.gateway.php">gateway</a></span><span class="refpurpose"> — configure a static SMTP route for mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.generate_bounces.php">generate_bounces</a></span><span class="refpurpose"> — generate MDNs if mail is failed after reception</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php">generate_bounces_for_multi_recipient_policy_rejections</a></span><span class="refpurpose"> — generate MDNs after reception for policy rejections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.generate_delay_dsn.php">generate_delay_dsn</a></span><span class="refpurpose"> — generate DSNs if mail is delayed</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.growbuf_size.php">growbuf_size</a></span><span class="refpurpose"> — The size of an element in a growbuf chain</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.host.php">host</a></span><span class="refpurpose"> — configure host specific options</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.hostname.php">hostname</a></span><span class="refpurpose"> — override the system configured hostname</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.host_failure_retry.php">host_failure_retry</a></span><span class="refpurpose"> — time to wait before attempting a retry</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.http_basic_auth.php">http_basic_auth</a></span><span class="refpurpose"> — Define the user credentials when using basic HTTP authentication</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.http_host.php">http_host</a></span><span class="refpurpose"> — Define the HTTP host</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.http_method.php">http_method</a></span><span class="refpurpose"> — Define the HTTP method to use</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.http_uri.php">http_uri</a></span><span class="refpurpose"> — Define the HTTP URI that you wish to connect to</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.http_version.php">http_version</a></span><span class="refpurpose"> — Define the HTTP version to use</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.idle_timeout.php">idle_timeout</a></span><span class="refpurpose"> — time to maintain idle outbound connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.inbound_throttle_messages.php">inbound_throttle_messages</a></span><span class="refpurpose"> — rate limit inbound mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.initial_hash_buckets.php">initial_hash_buckets</a></span><span class="refpurpose"> — Set the number of hash buckets used by the system</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.inline_transfail_processing.php">inline_transfail_processing</a></span><span class="refpurpose"> — how to handle transient failure processing</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.keep_message_dicts_in_memory.php">keep_message_dicts_in_memory</a></span><span class="refpurpose"> — preserve memory representation of metadata when memory is low</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.large_message_threshold.php">large_message_threshold</a></span><span class="refpurpose"> — Consider a message large when its size exceeds this amount</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.legacy_message_threshold.php">legacy_message_threshold</a></span><span class="refpurpose"> — The maximum size allowed for messages being passed to legacy modules</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.license.php">license</a></span><span class="refpurpose"> — specify an alternate license location</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.lmtp_port.php">lmtp_port</a></span><span class="refpurpose"> — configure the port for LMTP deliveries</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.local_changes_file.php">local_changes_file</a></span><span class="refpurpose"> — the file for writing local configuration changes</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.local_changes_only.php">local_changes_only</a></span><span class="refpurpose"> — whether there is a file for writing local configuration changes</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.mail_queue_check_vm_interval.php">mail_queue_check_vm_interval</a></span><span class="refpurpose"> — how often to apply memory management reduction on mail queues</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.mailerdaemon.php">mailerdaemon</a></span><span class="refpurpose"> — set the From: address for MDNs</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.mailfrom_timeout.php">mailfrom_timeout</a></span><span class="refpurpose"> — timeout after MAIL FROM</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.ref.maintainer_pool.php">maintainer_pool</a></span><span class="refpurpose"> — associate a pool of event loops with mail queues, DNS lookup, and module
      events to use multiple threads</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.malloc2mmap_threshold.php">malloc2mmap_threshold</a></span><span class="refpurpose"> — use mmap when allocations exceed this amount</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.masterdb_file.php">masterdb_file</a></span><span class="refpurpose"> — specify an alternate path for the statistics permastore</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.match_cache_life.php">match_cache_life</a></span><span class="refpurpose"> — set the maximum number of seconds that the match cache will be valid</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.match_cache_size.php">match_cache_size</a></span><span class="refpurpose"> — the size of the cache that holds the results of looking up matching
      scopes</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_deliveries_per_connection.php">max_deliveries_per_connection</a></span><span class="refpurpose"> — maximum number of messages to deliver before closing a connection</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_dns_ttl.php">max_dns_ttl</a></span><span class="refpurpose"> — set the maximum DNS TTL</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_outbound_connections.php">max_outbound_connections</a></span><span class="refpurpose"> — set the maximum number of outbound connections for a domain</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_recipients_per_batch.php">max_recipients_per_batch</a></span><span class="refpurpose"> — maximum number of recipients to send in a single outbound message
      transaction</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.max_request_size.php">max_request_size</a></span><span class="refpurpose"> — maximum size of an HTTP request</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_resident_active_queue.php">max_resident_active_queue</a></span><span class="refpurpose"> — threshold above which messages are not held in memory</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_resident_messages.php">max_resident_messages</a></span><span class="refpurpose"> — threshold above which messages are not held in memory</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_resident_transfails.php">max_resident_transfails</a></span><span class="refpurpose"> — the threshold for swapping transient failures out of memory</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_retries.php">max_retries</a></span><span class="refpurpose"> — override the system configured max_retries</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_retry_interval.php">max_retry_interval</a></span><span class="refpurpose"> — maximum retry interval</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.max_timed_events_per_iter.php">max_timed_events_per_iter</a></span><span class="refpurpose"> — the maximum numer of timed events per scheduler iteration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.mdn_failures_notify.php">mdn_failures_notify</a></span><span class="refpurpose"> — mailbox to which to send null recipient MDNs</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.memory_goal.php">memory_goal</a></span><span class="refpurpose"> — configure physical memory usage goal</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.memory_hwm.php">memory_hwm</a></span><span class="refpurpose"> — configure physical memory usage high-water mark</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.message_expiration.php">message_expiration</a></span><span class="refpurpose"> — the time to live for messages</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.migrate_connections_between_sibling_domains.php">migrate_connections_between_sibling_domains</a></span><span class="refpurpose"> — optimize connections for sibling domains</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.mime_parse_large_messages_during_reception.php">mime_parse_large_messages_during_reception</a></span><span class="refpurpose"> — configure whether large messages are parsed upon reception or just in
      time.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.min_dns_ttl.php">min_dns_ttl</a></span><span class="refpurpose"> — override DNS TTLs smaller than this value</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.mx_failures_fallback_to_a.php">mx_failures_fallback_to_a</a></span><span class="refpurpose"> — configure the maximum number of times an MX lookup will be attempted</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.mx_failures_to_delay.php">mx_failures_to_delay</a></span><span class="refpurpose"> — number of consecutive failures before a domain is auto-delayed</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.never_attempt_expired_messages.php">never_attempt_expired_messages</a></span><span class="refpurpose"> — Never attempt delivery of expired messages</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.never_retry.php">never_retry</a></span><span class="refpurpose"> — whether or not to retry delivery of failed messages</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.only_use_best_mx_for_relay_domains.php">only_use_best_mx_for_relay_domains</a></span><span class="refpurpose"> — 
      If this is set to <code class="literal">true</code>, only the lowest numerical 
      priority MXs are used when sending to domains listed in
      <code class="option">bounce_domains</code> or <code class="option">relay_domains</code>.
    </span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.open_relay.php">open_relay</a></span><span class="refpurpose"> — whether the MTA is an open relay or not</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.open_tracking_enabled.php">open_tracking_enabled</a></span><span class="refpurpose"> — enable or disable open tracking for SMTP injections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.open_tracking_scheme.php">open_tracking_scheme</a></span><span class="refpurpose"> — set the hyperlink scheme to use for open tracking links in SMTP
      injections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.opendkim_sign.php">opendkim_sign</a></span><span class="refpurpose"> — whether or not to enable OpenDKIM signing</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.outbound_throttle_connections.php">outbound_throttle_connections</a></span><span class="refpurpose"> — limit the rate at which connections are established</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.outbound_throttle_messages.php">outbound_throttle_messages</a></span><span class="refpurpose"> — limit the rate at which messages are delivered</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.pathway.php">pathway</a></span><span class="refpurpose"> — a grouping of inbound configuration options</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.pathway_group.php">pathway_group</a></span><span class="refpurpose"> — a container for pathways</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.pcre_cache_size.php">pcre_cache_size</a></span><span class="refpurpose"> — set the maximum size of the ec_pcre_compile cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.pcre_cache_ttl.php">pcre_cache_ttl</a></span><span class="refpurpose"> — set the maximum TTL for the ec_pcre_compile cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.permastore_interval.php">permastore_interval</a></span><span class="refpurpose"> — the frequency for saving various statistics</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.pidfile.php">pidfile</a></span><span class="refpurpose"> — set the PID file path</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.prohibited_hosts.php">prohibited_hosts</a></span><span class="refpurpose"> — prevent mail from being delivered to invalid destinations</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rcptto_timeout.php">rcptto_timeout</a></span><span class="refpurpose"> — timeout after RCPT TO</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.relay_for_sending_domains.php">relay_for_sending_domains</a></span><span class="refpurpose"> — domains that may use the MTA as a relay.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.relay_domains.php">relay_domains</a></span><span class="refpurpose"> — configure the list of domains for which Momentum relays mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.relay_hosts.php">relay_hosts</a></span><span class="refpurpose"> — configure the list of hosts for which Momentum relays mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.remote_smtp_port.php">remote_smtp_port</a></span><span class="refpurpose"> — set the port to be used for SMTP deliveries</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.require_ehlo.php">require_ehlo</a></span><span class="refpurpose"> — reject mail from clients that don't say HELO</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.reserve_maintenance_interval.php">reserve_maintenance_interval</a></span><span class="refpurpose"> — how often to perform mail queue maintenance</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.resolv_conf.php">resolv_conf</a></span><span class="refpurpose"> — specify a custom resolv.conf</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.response_transcode_pattern.php">response_transcode_pattern</a></span><span class="refpurpose"> — the regex pattern for comparison to a server response</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.response_transcode_replace.php">response_transcode_replace</a></span><span class="refpurpose"> — the replacement string for a server response</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.retry_interval.php">retry_interval</a></span><span class="refpurpose"> — base retry interval</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2821_allow_whitespace_in_envelope.php">rfc2821_allow_whitespace_in_envelope</a></span><span class="refpurpose"> — permit trailing whitespace before the final CRLF</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2821_pedantic_address_rules.php">rfc2821_pedantic_address_rules</a></span><span class="refpurpose"> — Allow relaxation of enforcement of the rfc2821 address rules.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2822_date_header.php">rfc2822_date_header</a></span><span class="refpurpose"> — rfc2822 conformance</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2822_lone_lf_in_body.php">rfc2822_lone_lf_in_body</a></span><span class="refpurpose"> — rfc2822 conformance</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2822_lone_lf_in_headers.php">rfc2822_lone_lf_in_headers</a></span><span class="refpurpose"> — rfc2822 conformance</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2822_max_line_length.php">rfc2822_max_line_length</a></span><span class="refpurpose"> — rfc2822 conformance</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2822_max_line_length_policy.php">rfc2822_max_line_length_policy</a></span><span class="refpurpose"> — determine how non-RFC-compliant line lengths are handled</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2822_messageid_header.php">rfc2822_messageid_header</a></span><span class="refpurpose"> — rfc2822 conformance</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2822_missing_headers.php">rfc2822_missing_headers</a></span><span class="refpurpose"> — rfc2822 conformance</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rfc2822_trace_headers.php">rfc2822_trace_headers</a></span><span class="refpurpose"> — rfc2822 conformance</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.routes.php">routes</a></span><span class="refpurpose"> — configure message routing</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.rset_timeout.php">rset_timeout</a></span><span class="refpurpose"> — set the timeout after RSET</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.scope_max_outbound_connections.php">scope_max_outbound_connections</a></span><span class="refpurpose"> — provide traffic shaping for outbound connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.scheduler.php">scheduler</a></span><span class="refpurpose"> — override the default IO scheduler</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.security.php">security</a></span><span class="refpurpose"> — Scope for defining which permissions are retained by which user</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.send_8bitmime.php">send_8bitmime</a></span><span class="refpurpose"> — Enable advertising of 8BITMIME when sending mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.server_max_file_descriptors.php">server_max_file_descriptors</a></span><span class="refpurpose"> — sets the maximum number of file descriptors usable by the system</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.server_max_outbound_connections.php">server_max_outbound_connections</a></span><span class="refpurpose"> — sets the maximum number of outbound connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.server_reserve_outbound_connections.php">server_reserve_outbound_connections</a></span><span class="refpurpose"> — sets the server-wide connection limit reserve</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.signing_stats.php">signing_stats</a></span><span class="refpurpose"> — control how signing statistics are recorded</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.siv_throttle_cache_size.php">siv_throttle_cache_size</a></span><span class="refpurpose"> — set the maximum number of named throttles</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.skip_hosts.php">skip_hosts</a></span><span class="refpurpose"> — skip the specified host, but consider other hosts in the domain</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.snmp.php">SNMP</a></span><span class="refpurpose"> — Simple Network Management Protocol Support</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.soft_bounce_drain_rate.php">soft_bounce_drain_rate</a></span><span class="refpurpose"> — how many soft bounces to place into the mail queues in a single
      scheduler iteration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.spool_mode.php">spool_mode</a></span><span class="refpurpose"> — set the file mode for newly created spool files</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.spoolbase.php">spoolbase</a></span><span class="refpurpose"> — set the base directory for the spool</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.ssl_lock_method.php">ssl_lock_method</a></span><span class="refpurpose"> — the SSL lock method</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.starttls_injection_policy.php">starttls_injection_policy</a></span><span class="refpurpose"> — protect against SMTP injections prior to TLS</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.supplemental_groups.php">supplemental_groups</a></span><span class="refpurpose"> — security: supplemental groups to assume after startup</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.suspend_delivery.php">suspend_delivery</a></span><span class="refpurpose"> — prevent outbound mail delivery</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.tcp_buffer_size.php">tcp_buffer_size</a></span><span class="refpurpose"> — maximum tcp buffer size for outbound connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.threadpool.php">threadpool</a></span><span class="refpurpose"> — configure thread pool specific options</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.timestampformat.php">timestampformat</a></span><span class="refpurpose"> — set the timestamp format used when logging to stderr</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.ref.tls.php">tls</a></span><span class="refpurpose"> — determine whether to use TLS connection for outbound mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_allow_renegotiation.php">tls_allow_renegotiation</a></span><span class="refpurpose"> — determine whether to enable TLS renegotiation</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_ca.php">tls_ca</a></span><span class="refpurpose"> — certificate authority for outbound mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_certificate.php">tls_certificate</a></span><span class="refpurpose"> — certificate to use for inbound and outbound mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_ciphers.php">tls_ciphers</a></span><span class="refpurpose"> — specify allowable ciphers for TLS inbound and outbound sessions</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_client_ca.php">tls_client_ca</a></span><span class="refpurpose"> — certificate authority for inbound mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.tls_dhparams_file.php">tls_dhparams_file</a></span><span class="refpurpose"> — specifies the file of Diffie Hellman (DHE) parameters that add
      per-session randomness to the encryption. Default parameters are
      built in the product if none are specified.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.tls_enable_dhe_ciphers.php">tls_enable_dhe_ciphers</a></span><span class="refpurpose"> — controls whether or not Diffie Hellman (DHE) ciphers are available</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_engine.php">tls_engine</a></span><span class="refpurpose"> — specify the TLS library to use</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_ifavailable_fallback.php">tls_ifavailable_fallback</a></span><span class="refpurpose"> — determine the behavior if TLS negotiation fails</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_key.php">tls_key</a></span><span class="refpurpose"> — TLS key to use for outbound or inbound mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_protocols.php">tls_protocols</a></span><span class="refpurpose"> — allowable ciphers for TLS inbound and outbound sessions</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_verified_peer_is_authorized.php">tls_verified_peer_is_authorized</a></span><span class="refpurpose"> — Marks requests that use a verified SSL Client certificate as being
      authorized</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_verify.php">tls_verify</a></span><span class="refpurpose"> — specify how to handle the remote presented certificate</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tls_verify_mode.php">tls_verify_mode</a></span><span class="refpurpose"> — determine whether a TLS certificate is required</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.trace_smtp_mode.php">trace_smtp_mode</a></span><span class="refpurpose"> — set the default permissions of trace files</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tracking_domain.php">tracking_domain</a></span><span class="refpurpose"> — set the tracking domain to use for engagement tracking in SMTP
      injections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="config.tracking_link_expiry.php">tracking_link_expiry</a></span><span class="refpurpose"> — set the expiration time for engagement tracking for SMTP injections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.transfail_drain_rate.php">transfail_drain_rate</a></span><span class="refpurpose"> — the maximum number of messages to pop off the transient failure queue in
      a single scheduler iteration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.transform_8bitmime_content.php">transform_8bitmime_content</a></span><span class="refpurpose"> — Enable 8BITMIME downconversion when sending mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.umem_reap_interval.php">umem_reap_interval</a></span><span class="refpurpose"> — how often to release unused memory</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.unlink_on_spool_in_failure.php">unlink_on_spool_in_failure</a></span><span class="refpurpose"> — Whether or not to remove malformed messages</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.unsafe_spool.php">_unsafe_spool</a></span><span class="refpurpose"> — allow dangerous spool semantics to be used</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.use_iflist_cache.php">use_iflist_cache</a></span><span class="refpurpose"> — Whether or not to cache the list of network interfaces configured by the
      system</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.use_ipv6.php">use_ipv6</a></span><span class="refpurpose"> — Affects the selection of IPv6 hosts in the SMTP client</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.use_mmap.php">use_mmap</a></span><span class="refpurpose"> — use mmap when spooling messages from disk</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.use_sendfile.php">use_sendfile</a></span><span class="refpurpose"> — use sendfile() when sending mail</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.user.php">user</a></span><span class="refpurpose"> — security: user identity to assume after startup</span>
</dt>
<dt>
<span class="refentrytitle"><a href="conf.ref.xclient.php">xclient</a></span><span class="refpurpose"> — use the xclient extension to SMTP for outbound mail</span>
</dt>
</dl></dd>
<dt><span class="chapter"><a href="console.cmds.ref.php">73. Non-Module-Specific Console Commands</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="console_commands.active.php">active</a></span><span class="refpurpose"> — show domains with active queue size bigger than threshold</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.authz_id.php">authz id</a></span><span class="refpurpose"> — display the id of the current user</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.authz_roles_list.php">authz roles list</a></span><span class="refpurpose"> — display the currently defined roles</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.binding_active.php">binding active</a></span><span class="refpurpose"> — show domains with active queue size bigger than threshold on a specified
      binding</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.binding_delayed.php">binding delayed</a></span><span class="refpurpose"> — show domains with delayed queue size bigger than threshold on a
      specified binding</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.binding_fail_domain.php">binding fail domain</a></span><span class="refpurpose"> — fail messages for a domain on a binding with a bounce message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.binding_fail_domain_quiet.php">binding fail domain quiet</a></span><span class="refpurpose"> — fail messages for a domain on a binding without generating bounces</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.binding_flush_domain.php">binding flush domain</a></span><span class="refpurpose"> — perform delivery attempt on delayed queue of a domain on a binding</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.binding_summary.php">binding summary</a></span><span class="refpurpose"> — show binding statistics</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.cache_list.php">cache list</a></span><span class="refpurpose"> — list all caches along with their associated attributes</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.cache_stat.php">cache stat</a></span><span class="refpurpose"> — show detailed cache statistics for the specified cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.cache_stats.php">cache stats</a></span><span class="refpurpose"> — show cache statistics</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.config.php">config</a></span><span class="refpurpose"> — online configuration tuning for Momentum</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.count.php">count</a></span><span class="refpurpose"> — count open connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.counter.php">counter</a></span><span class="refpurpose"> — manage counters</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.delayed.php">delayed</a></span><span class="refpurpose"> — show domains with delayed queue size bigger than threshold</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.dig.php">dig</a></span><span class="refpurpose"> — submit a domain for DNS MX query</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.dns_cache.php">dns_cache</a></span><span class="refpurpose"> — manage Momentum's DNS cache</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.domain.php">domain</a></span><span class="refpurpose"> — show domain statistics</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.domain_all.php">domain all</a></span><span class="refpurpose"> — show statistics for all domains</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.fail_domain.php">fail domain</a></span><span class="refpurpose"> — fail messages for a domain with a bounce message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.fail_domain_quiet.php">fail domain quiet</a></span><span class="refpurpose"> — fail messages for a domain without generating bounces</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.fingerprint_cache_summary.php">fingerprint cache summary</a></span><span class="refpurpose"> — display the current cache size</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.fingerprint_rejection_summary.php">fingerprint rejection summary</a></span><span class="refpurpose"> — display details related to the current inbound connection</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.flush_domain.php">flush domain</a></span><span class="refpurpose"> — perform delivery attempt on delayed queue of a domain</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.help.php">help</a></span><span class="refpurpose"> — show help information for console commands</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.mailq.php">mailq</a></span><span class="refpurpose"> — show the status of the mail queues</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.memory.php">memory</a></span><span class="refpurpose"> — report detailed memory usage</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.message_details.php">message details</a></span><span class="refpurpose"> — show detailed message information</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.message_fail.php">message fail</a></span><span class="refpurpose"> — fail a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.message_fail_quiet.php">message fail quiet</a></span><span class="refpurpose"> — fail a message and do not create a non-delivery receipt (NDR)</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.message_retry.php">message retry</a></span><span class="refpurpose"> — perform an immediate delivery attempt on a message</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.module.php">module</a></span><span class="refpurpose"> — manage loaded modules online</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.pager.php">\pager</a></span><span class="refpurpose"> — Page output of long console commands in the console.</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.paniclog.php">paniclog</a></span><span class="refpurpose"> — show last several entries written to paniclog</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.pid.php">pid</a></span><span class="refpurpose"> — show process id of Momentum</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.rebind.php">rebind</a></span><span class="refpurpose"> — rebind the messages in a binding or domain</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.refresh_domain.php">refresh domain</a></span><span class="refpurpose"> — refresh the DNS information for a domain</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.reopen_logs.php">reopen logs</a></span><span class="refpurpose"> — close and open log files</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.reroute_queue.php">reroute queue</a></span><span class="refpurpose"> — move messages from queues of one domain to queues of the other</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.show_inbound.php">show inbound</a></span><span class="refpurpose"> — show all inbound connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.show_outbound.php">show outbound</a></span><span class="refpurpose"> — show all outbound connections</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.showqueue.php">showqueue</a></span><span class="refpurpose"> — show queue information</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.shutdown.php">shutdown</a></span><span class="refpurpose"> — shutdown Momentum</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.signing_stats.php">signing_stats</a></span><span class="refpurpose"> — show DK/DKIM signing stats</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.signing_stats_reset.php">signing_stats reset</a></span><span class="refpurpose"> — reset signing stats</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.sp_async.php">sp_async</a></span><span class="refpurpose"> — Access the asynchronous I/O subsystem</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.spool_import.php">spool import</a></span><span class="refpurpose"> — import an alternative spool</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.spool_import_poll.php">spool import_poll</a></span><span class="refpurpose"> — check the status of a spool that is being imported</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.spool_in.php">spool_in</a></span><span class="refpurpose"> — read a message from the spool to the mail queue</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.summary.php">summary</a></span><span class="refpurpose"> — show global metrics</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.summary_reset.php">summary reset</a></span><span class="refpurpose"> — reset summary statistics</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.sysinfo.php">sysinfo</a></span><span class="refpurpose"> — show system information</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.threads.php">threads</a></span><span class="refpurpose"> — Display summary statistics for thread pools</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.tls.php">tls</a></span><span class="refpurpose"> — manage TLS cache used by Momentum</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.trace_smtp.php">trace smtp</a></span><span class="refpurpose"> — trace smtp transactions</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.unlink_stats.php">unlink stats</a></span><span class="refpurpose"> — show statistics of removing messages from the disk</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.version.php">version</a></span><span class="refpurpose"> — show version information of Momentum</span>
</dt>
<dt>
<span class="refentrytitle"><a href="console_commands.write_config.php">write config</a></span><span class="refpurpose"> — display current running configuration</span>
</dt>
</dl></dd>
<dt><span class="chapter"><a href="exec.cmds.ref.php">74. Executable Commands Reference</a></span></dt>
<dd><dl>
<dt>
<span class="refentrytitle"><a href="executable.ad_summary.php">ad_summary</a></span><span class="refpurpose"> — summarize the adaptive module actions</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.create_ssl_cert.php">create_ssl_cert</a></span><span class="refpurpose"> — create a self-signed SSL certificate</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.credmgr.php">credmgr</a></span><span class="refpurpose"> — manipulate credentials used with the securecreds module</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_adtool.php">ec_adtool</a></span><span class="refpurpose"> — adjust adaptive parameters in a cluster configuration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_console.php">ec_console</a></span><span class="refpurpose"> — connect to Momentum to perform introspection and administration</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_ctl.php">ec_ctl</a></span><span class="refpurpose"> — start, stop, or restart the Momentum Application Server</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_dkim_ctl.php">ec_dkim_ctl</a></span><span class="refpurpose"> — manipulate the DK/DKIM database</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_dump_config.php">ec_dump_config</a></span><span class="refpurpose"> — output the <code class="filename">ecelerity.conf</code> file as XML</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_lic.php">ec_lic</a></span><span class="refpurpose"> — fetch a new license file from Message Systems</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_log_trace.php">ec_log_trace</a></span><span class="refpurpose"> — parse Momentum log files</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_md5passwd.php">ec_md5passwd</a></span><span class="refpurpose"> — changes the password for a system user's password</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_rotate.php">ec_rotate</a></span><span class="refpurpose"> — rotate Momentum logfiles</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_sendmail.php">ec_sendmail</a></span><span class="refpurpose"> — a sendmail compatibility interface</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ec_show.php">ec_show</a></span><span class="refpurpose"> — show spool or message information</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.eccfg.php">eccfg</a></span><span class="refpurpose"> — Subversion repository management</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.eccmgr.php">eccmgr</a></span><span class="refpurpose"> — Momentum Cluster Manager</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.eccmgr_ctl.php">eccmgr_ctl</a></span><span class="refpurpose"> — start, stop, or restart the Momentum Cluster Manager</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ecconfigd.php">ecconfigd</a></span><span class="refpurpose"> — Momentum Configuration Server</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ecconfigd_ctl.php">ecconfigd_ctl</a></span><span class="refpurpose"> — start, stop or restart the Momentum Configuration Server</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.ecelerity.php">ecelerity</a></span><span class="refpurpose"> — Momentum Application Server</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.jlog_change_endian.php">jlog_change_endian</a></span><span class="refpurpose"> — change the endianness of a jlog</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.jlog_sanity_check.php">jlog_sanity_check</a></span><span class="refpurpose"> — validate that a jlog is free of errors</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.jlogctl.php">jlogctl</a></span><span class="refpurpose"> — analyze and maintain jlogs</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.lu_pull.php">lu_pull</a></span><span class="refpurpose"> — update the Live Updates database</span>
</dt>
<dt>
<span class="refentrytitle"><a href="executable.validate_config.php">validate_config</a></span><span class="refpurpose"> — check the validity of the configuration files</span>
</dt>
</dl></dd>
</dl></dd>
<dt><span class="part"><a href="p.appendix.php">XI. Appendix</a></span></dt>
<dd><dl>
<dt><span class="appendix"><a href="message_responses.php">A. Message Responses</a></span></dt>
<dd><dl><dt><span class="section"><a href="message_responses.php#responses-by-code">A.1. Responses Sorted By Codes</a></span></dt></dl></dd>
<dt><span class="appendix"><a href="snmp-mib.php">B. MIB Files</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="snmp-mib.php#snmp-mib-per-domain-metrics">B.1. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics</a></span></dt>
<dt><span class="section"><a href="snmp-mib.pergroup.php">B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3</a></span></dt>
<dt><span class="section"><a href="snmp-mib.omniti.php">B.3. The <code class="filename">OMNITI-SNMP-MIB.txt</code> file</a></span></dt>
</dl></dd>
<dt><span class="appendix"><a href="smtp-response-codes.php">C. SMTP Response Codes</a></span></dt>
<dt><span class="appendix"><a href="libedit.php">D. Key Binding Reference for ec_console</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="libedit.php#libedit.emacs.editor">D.1. Editor Commands</a></span></dt>
<dt><span class="section"><a href="libedit.extended.php">D.2. Extended Commands</a></span></dt>
</dl></dd>
</dl></dd>
<dt><span class="glossary"><a href="glossary.php">Glossary</a></span></dt>
<dt><span class="appendix"><a href="copyrights.php">E. Copyright Notices</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="copyrights.php#copyright.ack">E.1. Acknowledgements</a></span></dt>
<dt><span class="section"><a href="copyright.3rdparty-disclaimer.php">E.2. Disclaimers for Redistributed Third-Party Software</a></span></dt>
</dl></dd>
</dl>
</div>
<div class="ListofTitles"><a href="figure-toc.php">List of Figures</a></div>
<div class="ListofTitles"><a href="table-toc.php">List of Tables</a></div>
<div class="ListofTitles"><a href="example-toc.php">List of Examples</a></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left"> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right"> <a accesskey="n" href="preface.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top"> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right" valign="top"> Preface</td>
</tr>
</table></div>
<div class="revinfo"></div>
    <div class="clear">&nbsp;</div>
      <div id="comments">
        <!-- BEGIN DISQUS -->
        <div id="disqus_thread">
        </div>
          <script type="text/javascript">
            var disqus_shortname = 'messagesystemssupport';
            //var disqus_identifier = '(get name of page)';
            //var disqus_url = '(Get page URL)';
            var disqus_developer = 1;
    
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
              var dsq = document.createElement('script'); 
              dsq.type = 'text/javascript'; 
              dsq.async = true;
              dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
          </script>
          <noscript>
            Please enable JavaScript to view the 
            <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
          </noscript>
          <!-- END DISQUS -->
        </div>
      <!--#comments-->
      <div class="clear">
      </div>
  </div>

		<div class="clear"></div>
	</div><!--.inner-->
</div><!--#container-3-->


<div id="container-last">
	<div class="inner">
		<div class="clear" style="height:30px;"></div>
		<div class="follow">
			<p>Follow us on:</p>
			<a href="http://www.facebook.com/messagesystems" target="_blank"><img src="https://support.messagesystems.com/images/icon-facebook.png" alt="Facebook" /></a>
			<a href="http://twitter.com/#!/MessageSystems" target="_blank"><img src="https://support.messagesystems.com/images/icon-twitter.png" alt="Twitter" /></a>
			<a href="http://www.linkedin.com/company/message-systems" target="_blank"><img src="https://support.messagesystems.com/images/icon-linkedin.png" alt="LinkedIn" /></a>
		</div>

		<center>
			<p>
				<a href="https://support.messagesystems.com/">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="https://support.messagesystems.com/privacy-policy.php">Privacy Policy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="https://support.messagesystems.com/terms-conditions.php">Terms &amp; Conditions</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="http://www.messagesystems.com/" target="_blank">messagesystems.com</a>
			</p>
			<p class="copyright">Copyright &copy;2000-2017 Message Systems. All rights reserved.</p>
		</center>

		<div class="clear" style="height:20px;"></div>
	</div><!--.inner-->
</div><!--#container-last-->


<!-- google analytics -->
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>

    <script type="text/javascript">
    try {
    var pageTracker = _gat._getTracker("UA-904903-3");
    pageTracker._trackPageview();
    } catch(err) {}
    </script>
<!-- END google analytics -->

<!-- Marketo -->
<script src="https://munchkin.marketo.net/munchkin.js" type="text/javascript"></script>
<script>mktoMunchkin("356-SLD-019");</script>
<!-- End Marketo -->


</body>
</html>
