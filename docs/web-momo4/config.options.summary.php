<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 66. Configuration Options Summary</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="modules.summary.all.modules.php" title="Chapter 65. Modules Summary">
<link rel="next" href="console_commands.php" title="Chapter 67. Console Commands Summary">
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
<tr><th colspan="3" align="center">Chapter 66. Configuration Options Summary</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.summary.all.modules.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="console_commands.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="config.options.summary"></a>Chapter 66. Configuration Options Summary</h2></div></div></div>
<p>
    This chapter lists all configuration options visible in the
    following scopes; global, domain, host, binding, binding_group,
    security, pathway, pathway_group, listener, listen, peer,
    threadpool, debug_flags, and cluster, as well as in the
    listener-specific scope. Module-specific options are documented in
    the module documentation and options specific to Mobile Momentum are
    documented in the Mobile Momentum documents. Options are sorted
    alphabetically by name. If an option functions as a scope, this is
    indicated by <code class="literal">(scope)</code>.
  </p>
<p>
    The <code class="literal">Type</code> column indicates the MTA type of a given
    option. Options of type <code class="literal">na</code> do not directly apply
    to either a sending or receiving MTA.
  </p>
<p>
    If an option has a default value, it is shown in the
    <code class="literal">Default</code> column followed by a version number, if
    there has been a change to the default value. If the value of an
    option cannot be changed at runtime, the <code class="literal">Default</code>
    column will show <code class="literal">(non-dynamic)</code>.
  </p>
<p>
    The <code class="literal">Version</code> column indicated the version(s) of
    Momentum that support the option.
  </p>
<div class="table">
<a name="all-options-table"></a><p class="title"><b>Table 66.1. All options</b></p>
<div class="table-contents"><table summary="All options" border="1">
<colgroup>
<col>
<col>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
            Option/Description
          </th>
<th>
            Type
          </th>
<th>
            Default
          </th>
<th>
            Version
          </th>
<th>
            Scopes
          </th>
</tr></thead>
<tbody>
<tr>
<td>
            <a class="xref" href="conf.ref.unsafe_spool.php" title="_unsafe_spool"><span class="refentrytitle">_unsafe_spool</span></a> – Allow
            dangerous spool semantics to be used
          </td>
<td>
            na
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>accept_queue_backlog</strong></span>
            – Accept queue backlog
          </td>
<td>
            receiving
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, msgcserver_listener,
            xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_adjustment_interval">
          adaptive_adjustment_interval
        </a>
            – Throttle the adaptive adjustment interval
          </td>
<td>
            sending
          </td>
<td>
            60
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_alert_email_destination">
          adaptive_alert_email_destination
        </a>
            – Address where adaptive alerts should be sent
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_notification_events">
          adaptive_notification_events
        </a>
            – Set the sender address of the alert email
          </td>
<td>
            sending
          </td>
<td>
            NULL
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_attempt_threshold">
          adaptive_attempt_threshold
        </a>
            – Minimum delivery attempts over a period during which
            bounce stats are collected and suspensions attempted
          </td>
<td>
            sending
          </td>
<td>
            2000 (<span class="emphasis"><em>3.2</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.adaptive_backstore_leveldb.php" title="adaptive_backstore_leveldb"><span class="refentrytitle">adaptive_backstore_leveldb</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Use LevelDB as the
            backing store for Adaptive Delivery
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.adaptive_backstore_riak.php" title="adaptive_backstore_riak"><span class="refentrytitle">adaptive_backstore_riak</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Define the
            characteristics of the Riak backing store
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_body_timeout</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_default_suspension">
          adaptive_default_suspension
        </a>
            – Amount of time to suspend a domain
          </td>
<td>
            sending
          </td>
<td>
            4 hours
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_ehlo_timeout</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.adaptive_enabled.php" title="adaptive_enabled"><span class="refentrytitle">adaptive_enabled</span></a> – Whether
            to enable the adaptive module for a specific scope
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_fbl_volume_threshold">
          adaptive_fbl_volume_threshold
        </a>
            – Minimum total delivered mail count over a period
            during which FBL stats are collected
          </td>
<td>
            sending
          </td>
<td>
            20000
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_idle_timeout</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_mailfrom_timeout</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_max_deliveries_per_connection</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_max_outbound_connections</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_max_recipients_per_batch</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_max_recipients_per_connection</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_max_resident_active_queue</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_max_retries</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_max_retry_interval</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_notification_events">
          adaptive_notification_events
        </a>
            – Configure the events that will trigger an email
            notification
          </td>
<td>
            sending
          </td>
<td>
            throttle suspension blackhole
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_notification_interval">
          adaptive_notification_interval
        </a>
            – Throttle for adaptive alert notification emails
          </td>
<td>
            sending
          </td>
<td>
            3600
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_outbound_throttle_messages</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_positive_adjustment_interval">
          adaptive_positive_adjustment_interval
        </a>
            – Throttle positive adjustments to adaptive changes
          </td>
<td>
            sending
          </td>
<td>
            3600
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_rcptto_timeout</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_rejection_rate_suspension_percentage">
          adaptive_rejection_rate_suspension_percentage
        </a>
            – Rate at which messages are rejected
          </td>
<td>
            sending
          </td>
<td>
            20
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_retry_fuzz">
          adaptive_retry_fuzz
        </a>
            – Allow greater control over bulk message retries in
            cases where all messages for a domain have to be retried
          </td>
<td>
            sending
          </td>
<td>
            4096
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_retry_interval</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive_rset_timeout</a>
            – Set the bounds for the adaptive option
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.adaptive_scope.php" title="adaptive_scope"><span class="refentrytitle">adaptive_scope</span></a> – Define the
            scope applicable to adaptive delivery
          </td>
<td>
            sending
          </td>
<td>
            auto
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_sweep_rule">
          adaptive_sweep_rule
        </a>
            <span class="emphasis"><em>(scope)</em></span> – Set the thresholds and
            actions for adaptive fbl and bounce rules
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_sweep_rule_enabled">
          adaptive_sweep_rule_enabled
        </a>
            – Enable or disable adaptive_sweep_rule in a specified
            scope
          </td>
<td>
            sending
          </td>
<td>
            1
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php#conf.ref.snmp.address">address</a> –
            Set the SNMP IP address and port
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.address_metrics_cleanse_interval.php" title="address_metrics_cleanse_interval"><span class="refentrytitle">address_metrics_cleanse_interval</span></a>
            – Interval for refreshing address metrics
          </td>
<td>
            sending
          </td>
<td>
            3600
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.address_metrics_lifetime.php" title="address_metrics_lifetime"><span class="refentrytitle">address_metrics_lifetime</span></a> –
            TTL of address metrics
          </td>
<td>
            sending
          </td>
<td>
            1800
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.alias_schemes.php" title="alias_schemes"><span class="refentrytitle">alias_schemes</span></a> – Enable
            named alias expansion schemes
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            domain, global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.allow_ip_literal.php" title="allow_ip_literal"><span class="refentrytitle">allow_ip_literal</span></a> – Allow IP
            addresses in email addresses
          </td>
<td>
            receiving
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, global, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.allow_null_envelope_sender.php" title="allow_null_envelope_sender"><span class="refentrytitle">allow_null_envelope_sender</span></a>
            – Allow the null envelope sender in email addresses
          </td>
<td>
            receiving
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, global, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.allow_trailing_whitespace_in_commands.php" title="allow_trailing_whitespace_in_commands"><span class="refentrytitle">allow_trailing_whitespace_in_commands</span></a>
            – Allow trailing white space at the end of an SMTP
            command
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, global, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="control_auth.php#control_auth.overriding" title="17.2.4. Overriding Authentication">always_allow</a>
            – When set to true, authentication is considered to
            have succeeded, unless always_deny is set
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, esmtp_listener, http_listener, listen,
            pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="control_auth.php#control_auth.overriding" title="17.2.4. Overriding Authentication">always_deny</a>
            – If set to true, authentication is considered to have
            failed
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, esmtp_listener, http_listener, listen,
            pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/apns.apn_expiry.php" target="_top">apn_expiry</a>
            – Define the number of seconds after which an APNs
            notification is no longer valid
          </td>
<td>
            sending
          </td>
<td>
            yes (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.arp_all_hosts">
          arp_all_hosts
        </a> – Whether or
            not to aggressively send out ARP information to ensure that
            the network knows about the IP address assignment
            (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.async_bounce_rendering.php" title="async_bounce_rendering"><span class="refentrytitle">async_bounce_rendering</span></a> –
            Which thread pool to use for bounce rendering
          </td>
<td>
            sending
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="inbound_smtp.php#inbound_smtp.cram-md5" title="19.5.2. CRAM-MD5 Authentication">authcrammd5parameters</a>
            – Configure CRAM-MD5 authentication
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, esmtp_listener, listen, pathway,
            pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="link" href="inbound_smtp.php#inbound_smtp.digest-md5" title="19.5.1. DIGEST-MD5 Authentication">authdigestmd5parameters</a>
            – Configure DIGEST-MD5 authentication
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, esmtp_listener, http_listener, listen,
            pathway, pathway_group, peer, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="link" href="control_auth.php#control_auth.clear.text" title="17.2.2. Clear Text LOGIN Authentication">authloginparameters</a>
            – Configure clear text login authentication
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, esmtp_listener, listen, pathway,
            pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.authorization.php" title="authorization"><span class="refentrytitle">authorization</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Configure the console
            commands applicable to users
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="control_authz.php#control_authz.ecauth" title="17.4.1. Authorization Using the ecauth Scheme">authorizationparameters</a>
            – AuthorizationParameters dictionary points to
            authorization information
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, esmtp_listener, listen
          </td>
</tr>
<tr>
<td>
            <a class="link" href="inbound_smtp.php#inbound_smtp.plain.text" title="19.5.4. Plain Text Authentication">authplainparameters</a>
            – Configure plain text login authentication
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, http_listener, listen, pathway,
            pathway_group, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.threadpool.php" title="threadpool">backlog</a> –
            Maximum number of jobs that can be queued up for a pool
          </td>
<td>
            na
          </td>
<td>
            0 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            threadpool
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>banner_hostname</strong></span> –
            Specifies the banner hostname that will be displayed to the
            remote client upon connecting
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.bind_address.php" title="bind_address"><span class="refentrytitle">bind_address</span></a> – Source
            address for outbound connections
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.binding.php" title="binding"><span class="refentrytitle">binding</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Configure
            binding-specific options
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding_group, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.binding_auto_replumb.php" title="binding_auto_replumb"><span class="refentrytitle">binding_auto_replumb</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Enable or disable the auto replumber
          </td>
<td>
            sending and receiving
          </td>
<td> </td>
<td>
            4.2.1.11 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.binding_auto_replumb_interval.php" title="binding_auto_replumb_interval"><span class="refentrytitle">binding_auto_replumb_interval</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Sets the time interval to check the plumbed state of statically plumbed
            bindings
          </td>
<td>
            sending and receiving
          </td>
<td> </td>
<td>
            4.2.1.11 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.binding_group.php" title="binding_group"><span class="refentrytitle">binding_group</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Logically group a set
            of bindings
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.blackhole.php" title="blackhole"><span class="refentrytitle">blackhole</span></a> – Blackhole mail
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.body_timeout.php" title="body_timeout"><span class="refentrytitle">body_timeout</span></a> – Network
            timeout once the DATA phase is complete
          </td>
<td>
            sending
          </td>
<td>
            600
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.bounce_behavior.php" title="bounce_behavior"><span class="refentrytitle">bounce_behavior</span></a> – Configure
            the action taken when a message is classified as a bounce
          </td>
<td>
            sending
          </td>
<td>
            pass
          </td>
<td>
            4.0 and later
          </td>
<td>
            domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.bounce_domains.php" title="bounce_domains"><span class="refentrytitle">bounce_domains</span></a> – Configure
            the list of domains eligible for bounce processing
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.bounce_pattern.php" title="bounce_pattern"><span class="refentrytitle">bounce_pattern</span></a> – Configure
            the pattern that inbound email addresses must match to be
            considered bounces
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.bounce_suppress_list.php" title="bounce_suppress_list"><span class="refentrytitle">bounce_suppress_list</span></a> –
            Configure a list of email addresses that may not be
            considered original recipients
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.bounces_inline_original.php" title="bounces_inline_original"><span class="refentrytitle">bounces_inline_original</span></a> –
            How much of the original message to include in MDNs
          </td>
<td>
            sending
          </td>
<td>
            headers
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.capabilities.php" title="capabilities"><span class="refentrytitle">capabilities</span></a> – Selectively
            retain root capabilities
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            security
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.chroot.php" title="chroot"><span class="refentrytitle">chroot</span></a> – chroot to a secure
            environment
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            security
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.clear_mail_queue_maintainers.php" title="clear_mail_queue_maintainers"><span class="refentrytitle">clear_mail_queue_maintainers</span></a>
            – Reschedule the mail queue maintainer
          </td>
<td>
            both
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.click_tracking_enabled.php" title="click_tracking_enabled">click_tracking_enabled</a>
            – Enable or disable click tracking for SMTP injections
          </td>
<td>
            boolean
          </td>
<td>
            false
          </td>
<td>
            4.1-HF4 (beta)
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.click_tracking_scheme.php" title="click_tracking_scheme">click_tracking_scheme</a>
            – Set the hyperlink scheme to use for click tracking
            links in SMTP injections
          </td>
<td>
            string
          </td>
<td>
            http
          </td>
<td>
            4.1-HF4 (beta)
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>cluster_group</strong></span> – The
            <span class="trademark">DuraVIP</span>™ system coordinates IP
            ownership responsibilities via the cluster_group extended
            virtual synchrony group (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            ec_cluster
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.cluster_max_outbound_connections.php" title="cluster_max_outbound_connections"><span class="refentrytitle">cluster_max_outbound_connections</span></a>
            – Set the maximum number of outbound connections for a
            domain (cluster-specific)
          </td>
<td>
            sending
          </td>
<td>
            -1
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, domain, global, host
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.cluster_outbound_throttle_connections.php" title="cluster_outbound_throttle_connections"><span class="refentrytitle">cluster_outbound_throttle_connections</span></a>
            – Limit the rate at which connections are established
            (cluster-specific)
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.cluster_outbound_throttle_messages.php" title="cluster_outbound_throttle_messages"><span class="refentrytitle">cluster_outbound_throttle_messages</span></a>
            – Limit the rate at which messages are delivered
            (cluster-specific)
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.cluster_scope_max_outbound_connections.php" title="cluster_scope_max_outbound_connections"><span class="refentrytitle">cluster_scope_max_outbound_connections</span></a>
            – Provide traffic shaping for outbound connections
            (cluster-specific)
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global, host
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.cluster_server_max_outbound_connections.php" title="cluster_server_max_outbound_connections"><span class="refentrytitle">cluster_server_max_outbound_connections</span></a>
            – Set the maximum number of outbound connections
            (cluster-specific)
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php#modules.adaptive.codes">codes</a> –
            adaptive_sweep_rule bounce or fbl codes
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            adaptive_sweep_rule
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php#conf.ref.snmp.community">community</a>
            – Set the SNMP Community option value to the desired
            SNMP community the agent is to join
          </td>
<td>
            na
          </td>
<td>
            public (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp
          </td>
</tr>
<tr>
<td>
            <a class="link" href="esmtp_listener.php#esmtp_listener.config" title="19.1. ESMTP_Listener Configuration">concurrency</a>
            – Define number of available threads
          </td>
<td>
            receiving
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, threadpool,
            xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.connect_timeout.php" title="connect_timeout"><span class="refentrytitle">connect_timeout</span></a> – Set the
            connection timeout
          </td>
<td>
            sending
          </td>
<td>
            300
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.connect_timeout_to_delay.php" title="connect_timeout_to_delay"><span class="refentrytitle">connect_timeout_to_delay</span></a> –
            Time interval before moving mail into the delayed queue
          </td>
<td>
            sending
          </td>
<td>
            900
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.connection_allocation_aggressiveness.php" title="connection_allocation_aggressiveness"><span class="refentrytitle">connection_allocation_aggressiveness</span></a>
            – Tune the aggressiveness for establishing new
            connections to domains
          </td>
<td>
            sending
          </td>
<td>
            normal
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.context.php" title="context"><span class="refentrytitle">context</span></a> – Use to set
            arbitrary connection context key value pairs
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.eccluster.conf.php#eccluster.conf.logs.control_cache">control_cache</a>
            – Name of the cache file storing asynchronous
            responses
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.control_client_timeout.php" title="control_client_timeout"><span class="refentrytitle">control_client_timeout</span></a> –
            Network timeout for Momentum control client connections
          </td>
<td>
            na
          </td>
<td>
            60
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.ecelerity_cluster.conf.php" title="16.3. ecelerity-cluster.conf File">control_group</a>
            – Cluster manager utilizes this group to issue
            cluster-wide configuration commands (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            ec_console
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="link" href="control_listener.php#control_listener.config" title="17.1. Control_Listener Configuration">control_listener</a>
            <span class="emphasis"><em>(scope)</em></span> – Listener for incoming
            control connections
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.debug_flags.php" title="debug_flags">critical</a> –
            Set the debug level
          </td>
<td>
            na
          </td>
<td>
            ALL
          </td>
<td>
            4.0 and later
          </td>
<td>
            debug_flags
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.crypto_engine.php" title="crypto_engine"><span class="refentrytitle">crypto_engine</span></a> – Enable
            hardware cryptography acceleration
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.crypto_lock_method.php" title="crypto_lock_method">crypto_lock_method</a>
            – Set the locking method used by the TLS layer
          </td>
<td>
            receiving and sending
          </td>
<td>
            EC_SSL_DEFAULTLOCK (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.debug_flags.php" title="debug_flags">debug</a> –
            Set the debug level
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            debug_flags
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.debug_flags.php" title="debug_flags"><span class="refentrytitle">debug_flags</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Configure debug
            verbosity
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="module_config.php" title="15.5. Modules">debug_level</a> – Set
            the module debug level (applicable to all modules)
            (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            error
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.default_binding.php" title="default_binding"><span class="refentrytitle">default_binding</span></a> – Control
            the default binding
          </td>
<td>
            sending
          </td>
<td>
            normal
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.default_charset.php" title="default_charset"><span class="refentrytitle">default_charset</span></a> – Control
            the character set
          </td>
<td>
            both
          </td>
<td>
            us-ascii
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.delay_dsn_max_retry_interval.php" title="delay_dsn_max_retry_interval"><span class="refentrytitle">delay_dsn_max_retry_interval</span></a>
            – Maximum interval for sending DSNs to the sender of a
            message that has not yet been delivered
          </td>
<td>
            sending
          </td>
<td>
            43200
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.delay_dsn_retry_interval.php" title="delay_dsn_retry_interval"><span class="refentrytitle">delay_dsn_retry_interval</span></a> –
            Base interval for sending DSNs to the sender of a message
            that has not yet been delivered
          </td>
<td>
            sending
          </td>
<td>
            3600
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.delayed_binding_domain_fuzz.php" title="delayed_binding_domain_fuzz"><span class="refentrytitle">delayed_binding_domain_fuzz</span></a>
            – Time period to spread scheduled messages over when a
            bulk requeue is necessary
          </td>
<td>
            sending
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.delayed_queue_scan_interval.php" title="delayed_queue_scan_interval"><span class="refentrytitle">delayed_queue_scan_interval</span></a>
            – How often to call the maintainer for a domain
          </td>
<td>
            sending
          </td>
<td>
            15
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.delivery_method.php" title="delivery_method"><span class="refentrytitle">delivery_method</span></a> – Set the
            delivery method
          </td>
<td>
            sending
          </td>
<td>
            ESMTP (<span class="emphasis"><em>3.0</em></span>), SMTP
            (<span class="emphasis"><em>2.2</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.ref.delivery_pool.php" title="delivery_pool">delivery_pool</a>
            – Associate an eventloop with mail delivery
          </td>
<td>
            sending
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.delivery_response_timeout.php" title="delivery_response_timeout"><span class="refentrytitle">delivery_response_timeout</span></a> –
            Time to wait for a response to an outbound request
          </td>
<td>
            sending
          </td>
<td>
            5000
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.eccluster.conf.php#eccluster.conf.logs.dir_mode">dir_mode</a>
            – Octal representation of the file permissions
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.mm7.listener.php" target="_top">disable_chunked</a>
            – Option used with aggregators who do not support
            chunked transfer-coding (Mobile Momentum)
          </td>
<td>
            both
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            http_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.disable_nagle_algorithm.php" title="disable_nagle_algorithm"><span class="refentrytitle">disable_nagle_algorithm</span></a> –
            Disable nagle algorithm on sockets
          </td>
<td>
            both
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, global, http_listener, listen, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.disk_queue_drain_rate.php" title="disk_queue_drain_rate"><span class="refentrytitle">disk_queue_drain_rate</span></a> –
            Control the rate at which messages are spooled in on
            start-up
          </td>
<td>
            both
          </td>
<td>
            100
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.dns_cache_purge_interval.php" title="dns_cache_purge_interval"><span class="refentrytitle">dns_cache_purge_interval</span></a> –
            How often the DNS response cache is scanned for stale
            entries
          </td>
<td>
            sending
          </td>
<td>
            60
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.dns_expire_interval.php" title="dns_expire_interval"><span class="refentrytitle">dns_expire_interval</span></a> – How
            often to check for domains with expired DNS information
          </td>
<td>
            sending
          </td>
<td>
            10
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.dns_failures_to_purge.php" title="dns_failures_to_purge"><span class="refentrytitle">dns_failures_to_purge</span></a> –
            Configure the maximum number of DNS lookups
          </td>
<td>
            sending
          </td>
<td>
            10
          </td>
<td>
            4.0 and later
          </td>
<td>
            domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.dns_fallback_to_tcp.php" title="dns_fallback_to_tcp"><span class="refentrytitle">dns_fallback_to_tcp</span></a> –
            Whether or not to fail over to TCP in place of UDP
          </td>
<td>
            both
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.domain.php" title="domain"><span class="refentrytitle">domain</span></a><span class="emphasis"><em>
            (scope)</em></span> – Configure domain-specific options
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.domain_for_unqualified_recipient_addresses.php" title="domain_for_unqualified_recipient_addresses"><span class="refentrytitle">domain_for_unqualified_recipient_addresses</span></a>
            – Configure a domain which will be used to resolve
            delivery for unqualified addresses
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, global, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.domain_for_unqualified_sender_address.php" title="domain_for_unqualified_sender_address"><span class="refentrytitle">domain_for_unqualified_sender_address</span></a>
            – Configure a domain which will be used to substitute
            for unqualified sender addresses
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, global, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.domainkeys.php" title="domainkeys"><span class="refentrytitle">domainkeys</span></a> – Enable or
            disable domainkeys signing
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.drop_body_after_trans_fail.php" title="drop_body_after_trans_fail"><span class="refentrytitle">drop_body_after_trans_fail</span></a>
            – Number of retry attempts before freeing message
            memory
          </td>
<td>
            sending
          </td>
<td>
            3
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.duravip_balance_set_size">
          duravip_balance_set_size
        </a> –
            When balancing <span class="trademark">DuraVIP</span>™s, how many to
            process as a batch in response to a balance request
            (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            1
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="link" href="cluster.config.duravip.php" title="Chapter 27. DuraVIP™: IP Fail over">duravip_follow</a>
            – Specify the binding a listener should follow
            (cluster-specific)
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            listen
          </td>
</tr>
<tr>
<td>
            <a class="link" href="cluster.config.duravip.php" title="Chapter 27. DuraVIP™: IP Fail over">duravip_preference</a>
            – Specify a <span class="trademark">DuraVIP</span>™ preference
            (cluster-specific)
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, listen
          </td>
</tr>
<tr>
<td>
            <a class="link" href="cluster.listeners.php#eccluster_listener" title="16.5.1. ECCluster_Listener Configuration">eccluster_listener</a>
            <span class="emphasis"><em>(scope)</em></span> – Control communication
            between cluster nodes (cluster-specific)
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="ecstream_listener.php" title="Chapter 18. Configuring Inbound Mail Service Using ECStream">ecstream_idle_time</a>
            – Number of seconds of inactivity before a client is
            disconnected (ECStream only)
          </td>
<td>
            receiving
          </td>
<td>
            300
          </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="ecstream_listener.php" title="Chapter 18. Configuring Inbound Mail Service Using ECStream">ecstream_listener</a>
            <span class="emphasis"><em>(scope)</em></span> – Listener for incoming
            ECSTREAM connections
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="ecstream_listener.php" title="Chapter 18. Configuring Inbound Mail Service Using ECStream">ecstream_max_batch_size</a>
            – Maximum number of ECStream messages to accept before
            dropping back into the scheduler (ECStream only)
          </td>
<td>
            receiving
          </td>
<td>
            10000
          </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.ecstream_port.php" title="ecstream_port"><span class="refentrytitle">ecstream_port</span></a> – Configure
            the port for ecstream deliveries
          </td>
<td>
            sending
          </td>
<td>
            1825
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.ecstream_timeout.php" title="ecstream_timeout"><span class="refentrytitle">ecstream_timeout</span></a> – Amount
            of time to wait for an ecstream connection to be established
          </td>
<td>
            sending
          </td>
<td>
            600
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.ehlo_hostname.php" title="ehlo_hostname"><span class="refentrytitle">ehlo_hostname</span></a> – Set the
            hostname used for EHLO in outbound mail
          </td>
<td>
            sending
          </td>
<td>
            __hostname__
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.ehlo_timeout.php" title="ehlo_timeout"><span class="refentrytitle">ehlo_timeout</span></a> – Network
            timeout for EHLO
          </td>
<td>
            sending
          </td>
<td>
            300
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="listeners.php#listeners.enable.option" title="15.4.2. Listener Enable Option">enable</a>
            – Enable or disable a listener scope
          </td>
<td>
            receiving
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, msgcserver_listener,
            xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="link" href="control_auth.php" title="17.2. Control_Listener Authentication">enable_authentication</a>
            – Whether or not to enable authentication
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, esmtp_listener, http_listener, listen,
            pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="control_authz.php" title="17.4. Control_Listener Authorization">enable_authorization</a>
            – Whether or not to enable authorization for console
            commands
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, listen, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="cluster.config.duravip.php" title="Chapter 27. DuraVIP™: IP Fail over">enable_duravip</a>
            – Whether to enable Durable MultiVIP© bindings
            (cluster-specific)
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, listen
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.enable_fbl_header_insertion.php" title="enable_fbl_header_insertion"><span class="refentrytitle">enable_fbl_header_insertion</span></a>
            – Enable or disable fbl header insertion
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>enabled</strong></span> – Whether or
            not the module is enabled (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.debug_flags.php" title="debug_flags">error</a> –
            Set the debug level
          </td>
<td>
            na
          </td>
<td>
            ALL
          </td>
<td>
            4.0 and later
          </td>
<td>
            debug_flags
          </td>
</tr>
<tr>
<td>
            <a class="link" href="esmtp_listener.php" title="Chapter 19. Configuring Inbound Mail Service Using SMTP">esmtp_listener</a>
            <span class="emphasis"><em>(scope)</em></span> – Listener for incoming
            SMTP connections
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.ref.event_loop.php" title="event_loop"><span class="refentrytitle">event_loop</span></a> – Associate a
            listener with an eventloop
          </td>
<td>
            sending
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, esmtp_listener, listen
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.ref.eventloop.php" title="eventloop"><span class="refentrytitle">eventloop</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Define a pool of event
            loops to enable multiple event loop configuration
          </td>
<td>
            both
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.events_per_iter.php" title="events_per_iter"><span class="refentrytitle">events_per_iter</span></a> – Employ
            when using a Concurrency greater than 1
          </td>
<td>
            receiving
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.exclude_vctx_conn.php" title="exclude_vctx_conn"><span class="refentrytitle">exclude_vctx_conn</span></a> – Exclude
            validation connection context keys from being journaled in
            the spool metadata
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.exclude_vctx_mess.php" title="exclude_vctx_mess"><span class="refentrytitle">exclude_vctx_mess</span></a> – Exclude
            validation message context keys from being journaled in the
            spool metadata
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.expensive_batch_assessment.php" title="expensive_batch_assessment"><span class="refentrytitle">expensive_batch_assessment</span></a>
            – Treat messages as equal even if the bodies or
            headers have been modified since reception
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.eccluster.conf.php#eccluster.conf.logs.file_mode">
              File_Mode
            </a> – File
            access rights in octal notation
          </td>
<td>
            na
          </td>
<td>
            0660
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, msgcserver_listener,
            xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.eccluster.conf.php#eccluster.conf.logs.logfile">file_mode</a>
            – Octal representation of the file permissions
            (cluster logs)
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.force_fsync.php" title="force_fsync"><span class="refentrytitle">force_fsync</span></a> – Ensure that
            data is synced to disk on reception
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.fully_resolve_before_smtp.php" title="fully_resolve_before_smtp"><span class="refentrytitle">fully_resolve_before_smtp</span></a> –
            Resolve all MX and A records before attempting delivery
          </td>
<td>
            sending
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.gateway.php" title="gateway"><span class="refentrytitle">gateway</span></a>
            – Configure a static SMTP route for mail
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/push.gcm.gcm_application_id.php" target="_top">gcm_application_id</a>
            – Define the package name of the Android application
            allowed to received notifications
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/push.gcm.gcm_authorization_token_id.php" target="_top">gcm_authorization_token_id</a>
            – Authorization token that permits sending Google push
            notifications
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/push.gcm.gcm_delay_while_idle.php" target="_top">gcm_delay_while_idle</a>
            – Whether or not to send the notification immediately
            if a device is idle
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/push.gcm.gcm_dry_run.php" target="_top">gcm_dry_run</a>
            – Test a request without actually sending a message
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/push.gcm.gcm_ttl.php" target="_top">gcm_ttl</a>
            – Default Time To Live for notifications
          </td>
<td>
            sending
          </td>
<td>
            -1
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.generate_bounces.php" title="generate_bounces"><span class="refentrytitle">generate_bounces</span></a> – Generate
            MDNs if mail is failed after reception
          </td>
<td>
            sending
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php" title="generate_bounces_for_multi_recipient_policy_rejections"><span class="refentrytitle">generate_bounces_for_multi_recipient_policy_rejections</span></a>
            – Generate MDNs after reception for policy rejections
          </td>
<td>
            receiving
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.generate_delay_dsn.php" title="generate_delay_dsn"><span class="refentrytitle">generate_delay_dsn</span></a> –
            Generate DSNs if mail is delayed
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.user.php" title="user">group</a> – Group
            identity to assume after startup
          </td>
<td>
            na
          </td>
<td>
            ecuser (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            security
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.growbuf_size.php" title="growbuf_size"><span class="refentrytitle">growbuf_size</span></a> – Size of an
            element in a growbuf chain
          </td>
<td>
            na
          </td>
<td>
            16384
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.heartbeat_start_delay">
          heartbeat_start_delay
        </a> –
            Seconds to wait after startup before the cluster heartbeat
            is activated (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            15
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.heartbeats_per_sec">
          heartbeats_per_sec
        </a> – How
            often to send a heartbeat (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            1
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.high_action">
          high_action
        </a> –
            Action when the high threshold is met and the number of
            delivery attempts exceeds the adaptive_attempt_threshold
          </td>
<td>
            sending
          </td>
<td>
            "suspend" "4 hours"
          </td>
<td>
            4.0 and later
          </td>
<td>
            adaptive_sweep_rule
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.high_threshold">
          high_threshold
        </a> –
            High threshold value for the sum of the rates of the bounce
            codes or FBL categories
          </td>
<td>
            sending
          </td>
<td>
            10
          </td>
<td>
            4.0 and later
          </td>
<td>
            adaptive_sweep_rule
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.host.php" title="host"><span class="refentrytitle">host</span></a> <span class="emphasis"><em>(scope)</em></span>
            – Configure host-specific options
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.host_failure_retry.php" title="host_failure_retry"><span class="refentrytitle">host_failure_retry</span></a> – Time
            to wait before attempting a retry
          </td>
<td>
            sending
          </td>
<td>
            120
          </td>
<td>
            4.0 and later
          </td>
<td>
            domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.hostname.php" title="hostname"><span class="refentrytitle">hostname</span></a> – Override the
            system configured hostname
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.http_basic_auth.php" title="http_basic_auth"><span class="refentrytitle">http_basic_auth</span></a> – Define
            the user credentials when using basic HTTP authentication
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.http_host.php" title="http_host"><span class="refentrytitle">http_host</span></a> – Define the HTTP
            host
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php" target="_top">http_listener</a><span class="emphasis"><em>
            (scope)</em></span> – Listener used with the REST
            injector
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.http_method.php" title="http_method"><span class="refentrytitle">http_method</span></a> – Define the
            HTTP method to use
          </td>
<td>
            sending
          </td>
<td>
            POST
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.http_uri.php" title="http_uri"><span class="refentrytitle">http_uri</span></a> – Define the HTTP
            URI that you wish to connect to
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.http_version.php" title="http_version"><span class="refentrytitle">http_version</span></a> – Define the
            HTTP version to use
          </td>
<td>
            sending
          </td>
<td>
            1.1
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>idle_time</strong></span> – Number of
            seconds of inactivity before a client is disconnected
          </td>
<td>
            receiving
          </td>
<td>
            300
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, http_listener, listen, pathway,
            pathway_group, peer, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.idle_timeout.php" title="idle_timeout"><span class="refentrytitle">idle_timeout</span></a> – Time to
            maintain idle outbound connections
          </td>
<td>
            sending
          </td>
<td>
            5
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.if_check_interval">
          if_check_interval
        </a> – How often
            to run through a maintenance cycle (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            30
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.if_down_limit">
          if_down_limit
        </a> – How long to
            wait before deciding to bring an IP online
            (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            4
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.inbound_throttle_messages.php" title="inbound_throttle_messages"><span class="refentrytitle">inbound_throttle_messages</span></a> –
            Rate limit inbound mail
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.debug_flags.php" title="debug_flags">info</a> – Set
            the debug level
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            debug_flags
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.initial_hash_buckets.php" title="initial_hash_buckets"><span class="refentrytitle">initial_hash_buckets</span></a> – Set
            the number of hash buckets used by the system
          </td>
<td>
            na
          </td>
<td>
            32
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.inline_transfail_processing.php" title="inline_transfail_processing"><span class="refentrytitle">inline_transfail_processing</span></a>
            – How to handle transient failure processing
          </td>
<td>
            sending
          </td>
<td>
            1
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.keep_message_dicts_in_memory.php" title="keep_message_dicts_in_memory"><span class="refentrytitle">keep_message_dicts_in_memory</span></a>
            – Preserve memory representation of metadata when
            memory is low
          </td>
<td>
            both
          </td>
<td>
            false (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.large_message_threshold.php" title="large_message_threshold"><span class="refentrytitle">large_message_threshold</span></a> –
            Consider a message large when its size exceeds this amount
          </td>
<td>
            both
          </td>
<td>
            131072
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.legacy_message_threshold.php" title="legacy_message_threshold"><span class="refentrytitle">legacy_message_threshold</span></a> –
            Maximum size allowed for messages being passed to legacy
            modules
          </td>
<td>
            both
          </td>
<td>
            1048576
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.license.php" title="license"><span class="refentrytitle">license</span></a> – Specify an
            alternate license location
          </td>
<td>
            na
          </td>
<td>
            /opt/msys/ecelerity/etc (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="listeners.php#listeners.enable.option" title="15.4.2. Listener Enable Option">listen</a>
            <span class="emphasis"><em>(scope)</em></span> – Specify the socket that
            a listener listens on
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, ecstream_listener, esmtp_listener,
            http_listener, msgcserver_listener, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>listen_backlog</strong></span> –
            Listen backlog
          </td>
<td>
            receiving
          </td>
<td>
            500 (<span class="emphasis"><em>3.0</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>listener_sessions</strong></span> –
            Specifies the maximum number of concurrent sessions that can
            be established to this listener
          </td>
<td>
            receiving
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.lmtp_port.php" title="lmtp_port"><span class="refentrytitle">lmtp_port</span></a>
            – Configure the port for LMTP deliveries
          </td>
<td>
            sending
          </td>
<td>
            2003
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.local_changes_file.php" title="local_changes_file"><span class="refentrytitle">local_changes_file</span></a> – File
            for writing local configuration changes
          </td>
<td>
            na
          </td>
<td>
            /opt/msys/ecelerity/etc/local_changes.conf
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.local_changes_only.php" title="local_changes_only"><span class="refentrytitle">local_changes_only</span></a> –
            Whether there is a file for writing local configuration
            change
          </td>
<td>
            na
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.log_active_interval">
          log_active_interval
        </a> – Used to
            tune centralized logging (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            1
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.log_group">
          log_group
        </a> – Whether or not
            panic log messages are broadcast over spread
            (cluster-specific)
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.log_idle_interval">
          log_idle_interval
        </a> – Amount of
            time to sleep before looking for another segment
            (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            10
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php" target="_top">log_requests_to_paniclog</a>
            – Whether to log REST injection requests
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            http_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.eccluster.conf.php#eccluster.conf.logs.logfile">
              Logfile
            </a> –
            Describe the full path to the log file
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.ecelerity_cluster.conf.php" title="16.3. ecelerity-cluster.conf File">logs</a>
            – Define the location of the cluster manager logs
            (cluster-specific)
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.eccluster.conf.php" title="16.2. eccluster.conf File">logs</a>
            <span class="emphasis"><em>(scope)</em></span> – Configure centralized
            log files on the cluster manager
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.low_action">
          low_action
        </a> – Action
            when the high threshold is not met but the low threshold is
            met
          </td>
<td>
            sending
          </td>
<td>
            "throttle" "down"
          </td>
<td>
            4.0 and later
          </td>
<td>
            adaptive_sweep_rule
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php#modules.adaptive.low_threshold">
          low_threshold
        </a> – Low
            threshold value for the sum of the rates of the bounce codes
            or FBL categories
          </td>
<td>
            sending
          </td>
<td>
            5
          </td>
<td>
            4.0 and later
          </td>
<td>
            adaptive_sweep_rule
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.mail_queue_check_vm_interval.php" title="mail_queue_check_vm_interval"><span class="refentrytitle">mail_queue_check_vm_interval</span></a>
            – How often to apply memory management reduction on
            mail queues
          </td>
<td>
            both
          </td>
<td>
            60
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.mailerdaemon.php" title="mailerdaemon"><span class="refentrytitle">mailerdaemon</span></a> – Set the
            From: address for MDNs
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.mailfrom_timeout.php" title="mailfrom_timeout"><span class="refentrytitle">mailfrom_timeout</span></a> – Timeout
            after MAIL FROM
          </td>
<td>
            sending
          </td>
<td>
            300
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.ref.maintainer_pool.php" title="maintainer_pool">maintainer_pool</a>
            – Create an eventloop for maintainers
          </td>
<td>
            both
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.malloc2mmap_threshold.php" title="malloc2mmap_threshold"><span class="refentrytitle">malloc2mmap_threshold</span></a> – Use
            mmap when allocations exceed this amount
          </td>
<td>
            na
          </td>
<td>
            4092
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="cluster.config.logging.complex.php" title="26.3. Complex Centralized Logging Deployments">manager</a>
            <span class="emphasis"><em>(scope)</em></span> – Define managers for
            subclusters
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.masterdb_file.php" title="masterdb_file"><span class="refentrytitle">masterdb_file</span></a> – Specify an
            alternate path for the statistics permastore
          </td>
<td>
            na
          </td>
<td>
            /var/log/ecelerity/ecdb (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.match_cache_life.php" title="match_cache_life"><span class="refentrytitle">match_cache_life</span></a> – Set the
            maximum number of seconds that the match cache will be valid
          </td>
<td>
            na
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.match_cache_size.php" title="match_cache_size"><span class="refentrytitle">match_cache_size</span></a> – Size of
            the cache that holds the results of looking up matching
            scopes
          </td>
<td>
            na
          </td>
<td>
            16384
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_deliveries_per_connection.php" title="max_deliveries_per_connection"><span class="refentrytitle">max_deliveries_per_connection</span></a>
            – Maximum number of messages to deliver before closing
            a connection
          </td>
<td>
            sending
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_dns_ttl.php" title="max_dns_ttl"><span class="refentrytitle">max_dns_ttl</span></a> – Set the
            maximum DNS TTL
          </td>
<td>
            sending
          </td>
<td>
            4294967295
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.eccluster.conf.php#eccluster.conf.logs.max_idle">max_idle</a>
            – Maximum number of seconds a log file may be left
            open
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>max_message_size</strong></span> –
            Maximum number of bytes allowed in a single message before a
            "resources exhausted" message is returned to the client
          </td>
<td>
            receiving
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.eccluster.conf.php#eccluster.conf.logs.max_open">max_open</a>
            – Maximum number of concurrently open log files
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_outbound_connections.php" title="max_outbound_connections"><span class="refentrytitle">max_outbound_connections</span></a> –
            Set the maximum number of outbound connections
          </td>
<td>
            sending
          </td>
<td>
            32
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global, host
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>max_receptions_per_connection</strong></span>
            – Maximum number of messages allowed in a single
            session, after which a 421 error will be returned
          </td>
<td>
            receiving
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, global, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_recipients_per_batch.php" title="max_recipients_per_batch"><span class="refentrytitle">max_recipients_per_batch</span></a> –
            Maximum number of recipients to send in a single outbound
            message transaction
          </td>
<td>
            sending
          </td>
<td>
            100
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>max_recipients_per_connection</strong></span>
            – Maximum number of recipients allowed in a single
            session, after which a 421 error will be returned
          </td>
<td>
            sending
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, esmtp_listener, global,
            listen, peer
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>max_recipients_per_message</strong></span>
            – Maximum number of recipients allowed in a message,
            after which a 421 error will be returned
          </td>
<td>
            receiving
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.max_request_size.php" title="max_request_size">max_request_size</a>
            – Limit the size of an HTTP request
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            http_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_resident_active_queue.php" title="max_resident_active_queue"><span class="refentrytitle">max_resident_active_queue</span></a> –
            Threshold above which messages are not held in memory
          </td>
<td>
            sending
          </td>
<td>
            250
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_resident_messages.php" title="max_resident_messages"><span class="refentrytitle">max_resident_messages</span></a> –
            Threshold above which messages are not held in memory
          </td>
<td>
            sending
          </td>
<td>
            32768
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_resident_transfails.php" title="max_resident_transfails"><span class="refentrytitle">max_resident_transfails</span></a> –
            If the transient failure queue grows beyond this size,
            messages are swapped out of memory
          </td>
<td>
            sending
          </td>
<td>
            100
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_retries.php" title="max_retries"><span class="refentrytitle">max_retries</span></a> – Override the
            system configured max_retries
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_retry_interval.php" title="max_retry_interval"><span class="refentrytitle">max_retry_interval</span></a> –
            Maximum retry interval
          </td>
<td>
            sending
          </td>
<td>
            43200
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.max_timed_events_per_iter.php" title="max_timed_events_per_iter"><span class="refentrytitle">max_timed_events_per_iter</span></a> –
            Maximum numer of timed events per scheduler iteration
          </td>
<td>
            na
          </td>
<td>
            1024
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mm7.mcmt_reception.php" target="_top">mcmt_reception</a>
            – Configure a listener to accept the Multi-Channel
            Message Type (Mobile Momentum)
          </td>
<td>
            both
          </td>
<td>
            passthru
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.mdn_failures_notify.php" title="mdn_failures_notify"><span class="refentrytitle">mdn_failures_notify</span></a> –
            Mailbox to which to send null recipient MDNs
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.memory_goal.php" title="memory_goal"><span class="refentrytitle">memory_goal</span></a> – Configure
            physical memory usage goal
          </td>
<td>
            na
          </td>
<td>
            90
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.memory_hwm.php" title="memory_hwm"><span class="refentrytitle">memory_hwm</span></a> – Configure
            physical memory usage high-water mark
          </td>
<td>
            na
          </td>
<td>
            95
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.message_expiration.php" title="message_expiration"><span class="refentrytitle">message_expiration</span></a> – Time
            to live for messages
          </td>
<td>
            sending
          </td>
<td>
            86400
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.migrate_connections_between_sibling_domains.php" title="migrate_connections_between_sibling_domains"><span class="refentrytitle">migrate_connections_between_sibling_domains</span></a>
            – Optimize connections for sibling domains
          </td>
<td>
            both
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.mime_parse_large_messages_during_reception.php" title="mime_parse_large_messages_during_reception"><span class="refentrytitle">mime_parse_large_messages_during_reception</span></a>
            – Configure whether large messages are parsed upon
            reception or just in time
          </td>
<td>
            receiving
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.min_dns_ttl.php" title="min_dns_ttl"><span class="refentrytitle">min_dns_ttl</span></a> – Override DNS
            TTLs smaller than this value
          </td>
<td>
            sending
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.mx_failures_fallback_to_a.php" title="mx_failures_fallback_to_a"><span class="refentrytitle">mx_failures_fallback_to_a</span></a> –
            Configure the maximum number of times an MX lookup will be
            attempted
          </td>
<td>
            sending
          </td>
<td>
            3
          </td>
<td>
            4.0 and later
          </td>
<td>
            domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.mx_failures_to_delay.php" title="mx_failures_to_delay"><span class="refentrytitle">mx_failures_to_delay</span></a> –
            Number of consecutive failures before a domain is
            auto-delayed
          </td>
<td>
            sending
          </td>
<td>
            50
          </td>
<td>
            4.0 and later
          </td>
<td>
            domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.never_attempt_expired_messages.php" title="never_attempt_expired_messages"><span class="refentrytitle">never_attempt_expired_messages</span></a>
            – Never attempt delivery of expired messages
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.never_retry.php" title="never_retry"><span class="refentrytitle">never_retry</span></a> – Whether or
            not to retry delivery of failed messages
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#option.nodeaddr">nodeaddr</a> –
            Canonical cluster address for the node (cluster-specific)
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#option.nodename">nodename</a> –
            Override the node name that is used to canonically identify
            this cluster node (cluster-specific)
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.debug_flags.php" title="debug_flags">notice</a> –
            Set the debug level
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            debug_flags
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.only_use_best_mx_for_relay_domains.php" title="only_use_best_mx_for_relay_domains"><span class="refentrytitle">only_use_best_mx_for_relay_domains</span></a>
            – If this is set to true only the lowest numerical
            priority MXs are used
          </td>
<td>
            sending
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.open_tracking_enabled.php" title="open_tracking_enabled">open_tracking_enabled</a>
            – Enable or disable open tracking for SMTP injections
          </td>
<td>
            boolean
          </td>
<td>
            false
          </td>
<td>
            4.1-HF4 (beta)
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.open_tracking_scheme.php" title="open_tracking_scheme">open_tracking_scheme</a>
            – Set the hyperlink scheme to use for open tracking
            links in SMTP injections
          </td>
<td>
            string
          </td>
<td>
            http
          </td>
<td>
            4.1-HF4 (beta)
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.open_relay.php" title="open_relay">open_relay</a>
            – Whether the MTA is an open relay or not
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.opendkim_sign.php" title="opendkim_sign"><span class="refentrytitle">opendkim_sign</span></a> – Whether or
            not to enable OpenDKIM signing
          </td>
<td>
            sending
          </td>
<td>
            true (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.outbound_throttle_connections.php" title="outbound_throttle_connections"><span class="refentrytitle">outbound_throttle_connections</span></a>
            – Limit the rate at which connections are established
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.outbound_throttle_messages.php" title="outbound_throttle_messages"><span class="refentrytitle">outbound_throttle_messages</span></a>
            – Limit the rate at which messages are delivered
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.pathway.php" title="pathway"><span class="refentrytitle">pathway</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Grouping of inbound
            configuration options
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.pathway.php" title="pathway"><span class="refentrytitle">pathway</span></a> – Means for
            associating a Listener with a pathway scope
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, esmtp_listener, listen, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.pathway_group.php" title="pathway_group"><span class="refentrytitle">pathway_group</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Container for pathway
            scopes
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.pcre_cache_size.php" title="pcre_cache_size"><span class="refentrytitle">pcre_cache_size</span></a> – Set the
            maximum size of the ec_pcre_compile cache
          </td>
<td>
            na
          </td>
<td>
            100
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.pcre_cache_ttl.php" title="pcre_cache_ttl"><span class="refentrytitle">pcre_cache_ttl</span></a> – Set the
            maximum TTL for the ec_pcre_compile cache
          </td>
<td>
            na
          </td>
<td>
            300
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="listeners.php#listeners.acls" title="15.4.1. Extended Listener Configuration Using Access Control Lists (ACLs)">peer</a>
            <span class="emphasis"><em>(scope)</em></span> – Create an ACL within a
            specific listener
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, ecstream_listener, esmtp_listener,
            http_listener, listen, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.permastore_interval.php" title="permastore_interval"><span class="refentrytitle">permastore_interval</span></a> –
            Frequency for saving various statistics
          </td>
<td>
            na
          </td>
<td>
            300
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.pidfile.php" title="pidfile"><span class="refentrytitle">pidfile</span></a> – Set the PID file
            path
          </td>
<td>
            na
          </td>
<td>
            /var/run/ecelerity.pid (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="esmtp_listener.php#esmtp_listener.config" title="19.1. ESMTP_Listener Configuration">pool_name</a>
            – Associate a threadpool with a listener
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.prohibited_hosts.php" title="prohibited_hosts"><span class="refentrytitle">prohibited_hosts</span></a> – Prevent
            mail from being delivered to invalid destinations
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rcptto_timeout.php" title="rcptto_timeout"><span class="refentrytitle">rcptto_timeout</span></a> – Timeout
            after RCPT TO
          </td>
<td>
            sending
          </td>
<td>
            300
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>received_hostname</strong></span> –
            Hostname that is placed in the received headers; these are
            added to the messages as it transits Momentum
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="esmtp_listener.reconfig_message.php" title="19.3. Reconfig_Message Option">reconfig_message</a>
            – Message if the configuration has changed
          </td>
<td>
            receiving
          </td>
<td>
            4.3.2 Reconfiguration in progress
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.relay_domains.php" title="relay_domains"><span class="refentrytitle">relay_domains</span></a> – Configure
            the list of domains for which Momentum relays mail
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.relay_for_sending_domains.php" title="relay_for_sending_domains"><span class="refentrytitle">relay_for_sending_domains</span></a> –
            Domains that may use the MTA as a relay
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.relay_hosts.php" title="relay_hosts"><span class="refentrytitle">relay_hosts</span></a> – Configure the
            list of hosts for which Momentum relays mail
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, global, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.remote_smtp_port.php" title="remote_smtp_port"><span class="refentrytitle">remote_smtp_port</span></a> 
            – Set the port to be used for SMTP deliveries
          </td>
<td>
            sending
          </td>
<td>
            25
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.ecelerity_cluster.conf.php" title="16.3. ecelerity-cluster.conf File">replicate</a>
            <span class="emphasis"><em>(scope)</em></span> – Define the cluster
            replication framework (cluster-specific)
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.require_ehlo.php" title="require_ehlo"><span class="refentrytitle">require_ehlo</span></a> – Reject mail
            from clients that do not say HELO
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, global, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.reserve_maintenance_interval.php" title="reserve_maintenance_interval"><span class="refentrytitle">reserve_maintenance_interval</span></a>
            – How often to perform mail queue maintenance
          </td>
<td>
            sending
          </td>
<td>
            15
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.resolv_conf.php" title="resolv_conf"><span class="refentrytitle">resolv_conf</span></a> – Specify a
            custom resolv.conf file
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.response_transcode_pattern.php" title="response_transcode_pattern"><span class="refentrytitle">response_transcode_pattern</span></a>
            – Regex pattern for comparison to a server response
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.response_transcode_replace.php" title="response_transcode_replace"><span class="refentrytitle">response_transcode_replace</span></a>
            – Replacement string for a server response
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.retry_interval.php" title="retry_interval"><span class="refentrytitle">retry_interval</span></a> – Base retry
            interval
          </td>
<td>
            sending
          </td>
<td>
            1200
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2821_allow_whitespace_in_envelope.php" title="rfc2821_allow_whitespace_in_envelope"><span class="refentrytitle">rfc2821_allow_whitespace_in_envelope</span></a>
            – Permit trailing white space before the final CRLF
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2821_pedantic_address_rules.php" title="rfc2821_pedantic_address_rules"><span class="refentrytitle">rfc2821_pedantic_address_rules</span></a>
            – Allow relaxation of enforcement of the rfc2821
            address rules
          </td>
<td>
            receiving
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2822_date_header.php" title="rfc2822_date_header"><span class="refentrytitle">rfc2822_date_header</span></a> – Allow
            relaxation of enforcement of the rfc2822 address rules
          </td>
<td>
            receiving
          </td>
<td>
            ifneeded
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2822_lone_lf_in_body.php" title="rfc2822_lone_lf_in_body"><span class="refentrytitle">rfc2822_lone_lf_in_body</span></a> –
            Allow relaxation of enforcement of the rfc2822 address rules
          </td>
<td>
            receiving
          </td>
<td>
            ignore
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2822_lone_lf_in_headers.php" title="rfc2822_lone_lf_in_headers"><span class="refentrytitle">rfc2822_lone_lf_in_headers</span></a>
            – Allow relaxation of enforcement of the rfc2822
            address rules
          </td>
<td>
            receiving
          </td>
<td>
            pedantic
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2822_max_line_length.php" title="rfc2822_max_line_length"><span class="refentrytitle">rfc2822_max_line_length</span></a> –
            Allow relaxation of enforcement of the rfc2822 address rules
          </td>
<td>
            receiving
          </td>
<td>
            ignore
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2822_max_line_length_policy.php" title="rfc2822_max_line_length_policy"><span class="refentrytitle">rfc2822_max_line_length_policy</span></a>
            – Determine how non-RFC-compliant line lengths are
            handled
          </td>
<td>
            receiving
          </td>
<td>
            none
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2822_messageid_header.php" title="rfc2822_messageid_header"><span class="refentrytitle">rfc2822_messageid_header</span></a> –
            Allow relaxation of enforcement of the rfc2822 address rules
          </td>
<td>
            receiving
          </td>
<td>
            ifneeded
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2822_missing_headers.php" title="rfc2822_missing_headers"><span class="refentrytitle">rfc2822_missing_headers</span></a> –
            Allow relaxation of enforcement of the rfc2822 address rules
          </td>
<td>
            receiving
          </td>
<td>
            reject
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rfc2822_trace_headers.php" title="rfc2822_trace_headers"><span class="refentrytitle">rfc2822_trace_headers</span></a> –
            Allow relaxation of enforcement of the rfc2822 address rules
          </td>
<td>
            receiving
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global, pathway, pathway_group
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.authorization.php" title="authorization">replicate</a>
            <span class="emphasis"><em>(scope)</em></span> – Define a role within an
            authorization stanza
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            authorization
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.routes.php" title="routes"><span class="refentrytitle">routes</span></a> – Configure message
            routing
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.rset_timeout.php" title="rset_timeout"><span class="refentrytitle">rset_timeout</span></a> – Set the
            timeout after RSET
          </td>
<td>
            sending
          </td>
<td>
            30
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.scheduler.php" title="scheduler"><span class="refentrytitle">scheduler</span></a> – Override the
            default IO scheduler
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.scope_max_outbound_connections.php" title="scope_max_outbound_connections"><span class="refentrytitle">scope_max_outbound_connections</span></a>
            – Provide traffic shaping for outbound connections
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.security.php" title="security"><span class="refentrytitle">security</span></a><span class="emphasis"><em>
            (scope)</em></span> – Scope for defining which
            permissions are retained by which user
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.send_8bitmime.php" title="send_8bitmime"><span class="refentrytitle">send_8bitmime</span></a> – Enable
            advertising of 8BITMIME when sending mail
          </td>
<td>
            sending
          </td>
<td>
            no
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.server_max_file_descriptors.php" title="server_max_file_descriptors"><span class="refentrytitle">server_max_file_descriptors</span></a>
            – Sets the maximum number of file descriptors usable
            by the system
          </td>
<td>
            na
          </td>
<td>
            3000000
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.server_max_outbound_connections.php" title="server_max_outbound_connections"><span class="refentrytitle">server_max_outbound_connections</span></a>
            – Sets the maximum number of outbound connections
          </td>
<td>
            sending
          </td>
<td>
            20000
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.server_reserve_outbound_connections.php" title="server_reserve_outbound_connections"><span class="refentrytitle">server_reserve_outbound_connections</span></a>
            – Sets the server-wide connection limit reserve
          </td>
<td>
            sending
          </td>
<td>
            200
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>service_sessions</strong></span> –
            Specifies the maximum number of concurrent sessions that can
            be established to all listeners for this service (e.g.,
            ESMTP, ECStream)
          </td>
<td>
            receiving
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.signing_stats.php" title="signing_stats"><span class="refentrytitle">signing_stats</span></a> – Control how
            signing statistics are recorded
          </td>
<td>
            sending
          </td>
<td>
            all
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.siv_throttle_cache_size.php" title="siv_throttle_cache_size"><span class="refentrytitle">siv_throttle_cache_size</span></a> –
            Set the maximum number of named throttles
          </td>
<td>
            both
          </td>
<td>
            100, 1000 (<span class="emphasis"><em>3.0.24</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.skip_hosts.php" title="skip_hosts"><span class="refentrytitle">skip_hosts</span></a> – Skip 
            the specified host, but consider other hosts in the domain
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.2.1.6 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="esmtp_listener.extensions.php" title="19.4. SMTP Extensions">smtp_extensions</a>
            – Array of SMTP extensions
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.snmp.php" title="SNMP"><span class="refentrytitle">SNMP</span></a> <span class="emphasis"><em>(scope)</em></span>
            – Simple Network Management Protocol Support scope
            options
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php" title="SNMP">snmp_traps</a>
            <span class="emphasis"><em>(scope)</em></span> – Enable and configure
            generation of SNMP traps
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.soft_bounce_drain_rate.php" title="soft_bounce_drain_rate"><span class="refentrytitle">soft_bounce_drain_rate</span></a> –
            How many soft bounces to place into the mail queues in a
            single scheduler iteration
          </td>
<td>
            sending
          </td>
<td>
            100
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.spool_mode.php" title="spool_mode"><span class="refentrytitle">spool_mode</span></a> – Set the file
            mode for newly created spool files
          </td>
<td>
            na
          </td>
<td>
            0640 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.spoolbase.php" title="spoolbase"><span class="refentrytitle">spoolbase</span></a> – Set the base
            directory for the spool
          </td>
<td>
            na
          </td>
<td>
            /var/spool/ecelerity (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.ssl_lock_method.php" title="ssl_lock_method">ssl_lock_method</a>
            – Specify the SSL lock method
          </td>
<td>
            na
          </td>
<td>
            mutex (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.threadpool.php" title="threadpool">stack_size</a>
            – Stack space for a threadpool
          </td>
<td>
            na
          </td>
<td>
            0 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            threadpool
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.starttls_injection_policy.php" title="starttls_injection_policy">starttls_injection_policy</a>
            – Protect against SMTP injections prior to TLS
          </td>
<td>
            receiving
          </td>
<td>
            reject
          </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php" title="SNMP">state</a> – Whether
            to enable the SNMP agent
          </td>
<td>
            na
          </td>
<td>
            1 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php" title="SNMP">state</a> – Whether
            to enable generation of SNMP traps
          </td>
<td>
            na
          </td>
<td>
            0 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp_traps
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>static_banner</strong></span> –
            Specifies the banner that will be displayed to the remote
            client upon connecting. You must include 220 as the
            beginning of your replacement string; e.g., 220
            my.mail.server ESMTP
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.supplemental_groups.php" title="supplemental_groups"><span class="refentrytitle">supplemental_groups</span></a> –
            Supplemental groups to assume after startup
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            security
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.suspend_delivery.php" title="suspend_delivery"><span class="refentrytitle">suspend_delivery</span></a> – Prevent
            outbound mail delivery
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php" title="SNMP">syscontact</a> – Set
            the SNMP SysContact option value
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php" title="SNMP">sysdescription</a> –
            Set the SNMP SysDescription option value
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php" title="SNMP">syslocation</a> – Set
            the SNMP SysLocation option value
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.tcp_buffer_size.php" title="tcp_buffer_size"><span class="refentrytitle">tcp_buffer_size</span></a> – Maximum
            tcp buffer size for outbound connections
          </td>
<td>
            sending
          </td>
<td>
            32768
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster, global
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>tcp_recv_buffer_size</strong></span>
            – Sets the TCP receive buffer size. When set to 0, the
            operating system automatically manages the buffer size.
          </td>
<td>
            receiving
          </td>
<td>
            <p>
              4096 (ESMTP_Listener)
            </p>
            <p>
              32768 (HTTP_Listener)
            </p>
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>tcp_send_buffer_size</strong></span>
            – Sets the TCP send buffer size. When set to 0, the
            operating system automatically manages the buffer size.
          </td>
<td>
            receiving
          </td>
<td>
            <p>
              4096 (ESMTP_Listener)
            </p>
            <p>
              32768 (HTTP_Listener)
            </p>
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener, eccluster_listener, ecstream_listener,
            esmtp_listener, http_listener, listen, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.threadpool.php" title="threadpool"><span class="refentrytitle">threadpool</span></a>
            <span class="emphasis"><em>(scope)</em></span> – Configure thread pool
            specific options
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="control_listener.php#control_listener.config" title="17.1. Control_Listener Configuration">timeout</a>
            – Timeout for idle control connections on
            Control_Listeners
          </td>
<td>
            receiving
          </td>
<td>
            60
          </td>
<td>
            4.0 and later
          </td>
<td>
            control_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.timestampformat.php" title="timestampformat"><span class="refentrytitle">timestampformat</span></a> – Set the
            timestamp format used when logging to stderr
          </td>
<td>
            na
          </td>
<td>
            [%a %d %b %Y %H:%M:%S]
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.ref.tls.php" title="tls"><span class="refentrytitle">tls</span></a> – Determine whether
            to use a TLS connection for outbound mail
          </td>
<td>
            sending
          </td>
<td>
            no
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_allow_renegotiation.php" title="tls_allow_renegotiation"><span class="refentrytitle">tls_allow_renegotiation</span></a> –
            Determine whether to enable TLS renegotiation
          </td>
<td>
            receiving and sending
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, esmtp_listener, http_listener, listen,
            listen, pathway, pathway_group, peer, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_ca.php" title="tls_ca"><span class="refentrytitle">tls_ca</span></a> – Specify certificate
            authority for outbound mail
          </td>
<td>
            sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_certificate.php" title="tls_certificate"><span class="refentrytitle">tls_certificate</span></a> – Specify
            certificate to use for inbound and outbound mail
          </td>
<td>
            receiving and sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, ecstream_listener,
            esmtp_listener, global, http_listener, listen, pathway,
            pathway_group, peer, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_ciphers.php" title="tls_ciphers"><span class="refentrytitle">tls_ciphers</span></a> – Specify
            allowable ciphers for TLS inbound and outbound sessions
          </td>
<td>
            receiving and sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, ecstream_listener,
            esmtp_listener, global, http_listener, listen, pathway,
            pathway_group, peer, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_client_ca.php" title="tls_client_ca"><span class="refentrytitle">tls_client_ca</span></a> – Specify
            certificate authority for inbound mail
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, esmtp_listener, global, http_listener,
            listen, pathway, pathway_group, peer, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.tls_dhparams_file.php" title="tls_dhparams_file"><span class="refentrytitle">tls_dhparams_file</span></a> –
            Specifies DHE parameters that add per-session randomness to
            the encryption
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.tls_enable_dhe_ciphers.php" title="tls_enable_dhe_ciphers"><span class="refentrytitle">tls_enable_dhe_ciphers</span></a> –
            Controls whether or not DHE ciphers are available
          </td>
<td>
            both
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_engine.php" title="tls_engine"><span class="refentrytitle">tls_engine</span></a> – Specify the TLS
            library to use (OpenSSL or GNUTLS)
          </td>
<td>
            sending
          </td>
<td>
            openssl
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_ifavailable_fallback.php" title="tls_ifavailable_fallback"><span class="refentrytitle">tls_ifavailable_fallback</span></a> –
            Determine the behavior if TLS negotiation fails
          </td>
<td>
            sending
          </td>
<td>
            true
          </td>
<td>
            4.1 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_key.php" title="tls_key"><span class="refentrytitle">tls_key</span></a> – Specify the TLS key
            to use for outbound mail or inbound mail
          </td>
<td>
            receiving and sending
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, ecstream_listener,
            esmtp_listener, global, http_listener, listen, pathway,
            pathway_group, peer, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_protocols.php" title="tls_protocols"><span class="refentrytitle">tls_protocols</span></a> – Allowable
            ciphers for TLS inbound and outbound sessions
          </td>
<td>
            receiving and sending
          </td>
<td> </td>
<td>
            4.1.0.2 and later
          </td>
<td>
            binding, binding_group, domain, ecstream_listener,
            esmtp_listener, global, http_listener, listen, pathway,
            pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>tls_verified_peer_can_relay</strong></span>
            – Verification that peer can relay
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, esmtp_listener, listen, pathway,
            pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_verified_peer_is_authorized.php" title="tls_verified_peer_is_authorized"><span class="refentrytitle">tls_verified_peer_is_authorized</span></a>
            – Mark requests that use a verified SSL Client
            certificate as being authorized
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            http_listener, listen, pathway, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_verify.php" title="tls_verify"><span class="refentrytitle">tls_verify</span></a> – Specify how to
            handle the remote presented certificate
          </td>
<td>
            sending
          </td>
<td>
            no
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="config.tls_verify_mode.php" title="tls_verify_mode"><span class="refentrytitle">tls_verify_mode</span></a> – Determine
            whether a TLS certificates is required
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, esmtp_listener, http_listener, listen,
            pathway, pathway_group, peer, xmpp_listener
          </td>
</tr>
<tr>
<td>
            <a class="link" href="cluster.config.duravip.php" title="Chapter 27. DuraVIP™: IP Fail over">topology</a>
            <span class="emphasis"><em>(scope)</em></span> – Define the cluster
            network topology (cluster-specific)
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.trace_smtp_mode.php" title="trace_smtp_mode"><span class="refentrytitle">trace_smtp_mode</span></a> – Set the
            default permissions of trace files
          </td>
<td>
            sending
          </td>
<td>
            0640 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.tracking_domain.php" title="tracking_domain">tracking_domain</a>
            – Set the tracking domain to use for engagement
            tracking in SMTP injections
          </td>
<td>
            string
          </td>
<td>
            localhost:8080
          </td>
<td>
            4.1-HF4 (beta)
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="link" href="config.tracking_link_expiry.php" title="tracking_link_expiry">tracking_link_expiry</a>
            – Set the expiration time, in seconds, for engagement
            tracking for SMTP injections
          </td>
<td>
            integer
          </td>
<td>
            31536000
          </td>
<td>
            4.1-HF4 (beta)
          </td>
<td>
            esmtp_listener, listen, pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.transfail_drain_rate.php" title="transfail_drain_rate"><span class="refentrytitle">transfail_drain_rate</span></a> –
            Maximum number of messages to pop off the transient failure
            queue in a single scheduler iteration
          </td>
<td>
            sending
          </td>
<td>
            100
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.transform_8bitmime_content.php" title="transform_8bitmime_content"><span class="refentrytitle">transform_8bitmime_content</span></a>
            – Enable 8BITMIME downconversion when sending mail
          </td>
<td>
            sending
          </td>
<td>
            ifneeded (<span class="emphasis"><em>3.1.6</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php#example.snmp.3" title="Example 72.9. Trap_Destination">trap_destination</a>
            – Destination for SNMP trap
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp_traps
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php#conf.ref.snmp.trap_interval">trap_interval</a>
            – Frequency of SNMP trap generation
          </td>
<td>
            na
          </td>
<td>
            60 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp_traps
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.umem_reap_interval.php" title="umem_reap_interval"><span class="refentrytitle">umem_reap_interval</span></a> – How
            often to release unused memory
          </td>
<td>
            na
          </td>
<td>
            1800
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#option.unconditional_rebind">unconditional_rebind</a>
            – Whether the full set_binding logic is invoked or not
            (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.unlink_on_spool_in_failure.php" title="unlink_on_spool_in_failure"><span class="refentrytitle">unlink_on_spool_in_failure</span></a>
            – Whether or not to remove malformed messages
          </td>
<td>
            receiving
          </td>
<td>
            true
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.use_iflist_cache.php" title="use_iflist_cache"><span class="refentrytitle">use_iflist_cache</span></a> – Whether
            or not to cache the list of interfaces configured by the
            system
          </td>
<td>
            sending
          </td>
<td>
            0 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.use_ipv6.php" title="use_ipv6"><span class="refentrytitle">use_ipv6</span></a> – Affects the
            selection of IPv6 hosts in the SMTP client
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.use_mmap.php" title="use_mmap"><span class="refentrytitle">use_mmap</span></a> – Use mmap when
            spooling messages from disk
          </td>
<td>
            na
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.use_sendfile.php" title="use_sendfile"><span class="refentrytitle">use_sendfile</span></a> – Use
            sendfile() when sending mail
          </td>
<td>
            sending
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <span class="bold"><strong>use_ssl</strong></span> – Whether or
            not to use SSL verification
          </td>
<td>
            receiving
          </td>
<td>
            false
          </td>
<td>
            4.0 and later
          </td>
<td>
            ecstream_listener, esmtp_listener, http_listener, listen,
            pathway, pathway_group, peer
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.user.php" title="user"><span class="refentrytitle">user</span></a> – User identity to
            assume after startup
          </td>
<td>
            na
          </td>
<td>
            ecuser (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            security
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.view_balance_interval">
          view_balance_interval
        </a> – How
            often <span class="trademark">DuraVIP</span>™ views are subject to
            balancing (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            10
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.view_broadcast_interval">
          view_broadcast_interval
        </a> – How
            often to speculatively broadcast a view announcement to the
            cluster (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            0
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php#option.view_mature_time">
          view_mature_time
        </a> – How long a
            <span class="trademark">DuraVIP</span>™ view needs to remain
            unchanged before considering it "mature" (cluster-specific)
          </td>
<td>
            na
          </td>
<td>
            5
          </td>
<td>
            4.0 and later
          </td>
<td>
            cluster
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.debug_flags.php" title="debug_flags">warning</a> –
            Set the debug level
          </td>
<td>
            na
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            debug_flags
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php#conf.ref.snmp.watch_interval">trap_interval</a>
            – Interval for watched system variables for SNMP traps
          </td>
<td>
            na
          </td>
<td>
            10 (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp_traps
          </td>
</tr>
<tr>
<td>
            <a class="link" href="conf.ref.snmp.php#conf.ref.snmp.watch_variables">watch_variables</a>
            – SNMP traps watch variables
          </td>
<td>
            na
          </td>
<td>
            (<span class="emphasis"><em>non-dynamic</em></span>)
          </td>
<td>
            4.0 and later
          </td>
<td>
            snmp_traps
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="conf.ref.xclient.php" title="xclient"><span class="refentrytitle">xclient</span></a> – Use the XCLIENT
            extension to SMTP for outbound mail
          </td>
<td>
            sending
          </td>
<td>
            no
          </td>
<td>
            4.0 and later
          </td>
<td>
            binding, binding_group, domain, global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.xmpp.modules.php#mobility.xmpp.modules.xmpp_role.php" target="_top">xmpp_dialback_secret</a>
            – Use when verifying the XMPP server dialback key
            (Mobile Momentum)
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            domain
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.xmpp.modules.php#modules.xmpp.xmpp_listener.php" target="_top">xmpp_listener</a><span class="emphasis"><em>
            (scope)</em></span> – The listener for incoming XMPP
            connections (Mobile Momentum)
          </td>
<td>
            receiving
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            global
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.xmpp.modules.php#mobility.xmpp.modules.xmpp_role.php" target="_top">xmpp_role</a>
            – Define whether a domain is an XMPP server or client
            (Mobile Momentum)
          </td>
<td>
            both
          </td>
<td> </td>
<td>
            4.0 and later
          </td>
<td>
            domain
          </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.summary.all.modules.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="console_commands.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 65. Modules Summary </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 67. Console Commands Summary</td>
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
