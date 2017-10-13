<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 70. Lua Functions Reference</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="apis.ec_httpsrv_request_peer_address.php" title="ec_httpsrv_request_peer_address">
<link rel="next" href="lua.ref.msys.db.execute.php" title="msys.db.execute">
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
<tr><th colspan="3" align="center">Chapter 70. Lua Functions Reference</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="apis.ec_httpsrv_request_peer_address.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.db.execute.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="lua.function.details"></a>Chapter 70. Lua Functions Reference</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
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
</dl>
</div>
<p>
    This section details all Lua functions. Functions are ordered
    alphabetically by name.
  </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      Many Lua functions act as wrappers for C code which means that the
      calling code needs to take steps to ensure safety. When calling a
      C API, make sure that all the arguments are valid as an unexpected
      <code class="literal">nil</code> may crash the system or have other
      undesirable results. Additionally, the data structures returned
      from C APIs are often shared between C and Lua. The most important
      consequence of this is that arrays coming from C APIs must only be
      accessed with existing indices, as opposed to Lua which simply
      returns <code class="literal">nil</code> on out-of-bounds access. Failure to
      do this on a Lua table connected to a C array will cause the
      system to fail.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="apis.ec_httpsrv_request_peer_address.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.db.execute.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">ec_httpsrv_request_peer_address </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.db.execute</td>
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
