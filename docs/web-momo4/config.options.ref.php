<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 72. Configuration Options Reference</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="modules.url_ripper.php" title="71.73. url_ripper – URL Extraction">
<link rel="next" href="conf.ref.adaptive_backstore_leveldb.php" title="adaptive_backstore_leveldb">
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
<tr><th colspan="3" align="center">Chapter 72. Configuration Options Reference</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.url_ripper.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.adaptive_backstore_leveldb.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="config.options.ref"></a>Chapter 72. Configuration Options Reference</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
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
</dl>
</div>
<p>
    This chapter provides the definitions of the configuration options
    for the configuration files that are referenced in this document.
  </p>
<p>
    Most options that are common to Momentum 4 and Momentum 3 are
    documented in the Momentum 3.x Reference Manual. See the
    <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.url_ripper.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.adaptive_backstore_leveldb.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.73. url_ripper – URL Extraction </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> adaptive_backstore_leveldb</td>
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
