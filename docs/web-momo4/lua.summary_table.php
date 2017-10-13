<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 64. Lua Functions Summary</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="p.reference.php" title="Part X. Reference">
<link rel="next" href="modules.summary.all.modules.php" title="Chapter 65. Modules Summary">
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
<tr><th colspan="3" align="center">Chapter 64. Lua Functions Summary</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="p.reference.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.summary.all.modules.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="lua.summary_table"></a>Chapter 64. Lua Functions Summary</h2></div></div></div>
<p>
    This section contains tables of Lua functions.



    Click the function name for details.
  </p>
<div class="table">
<a name="lua_functions-all"></a><p class="title"><b>Table 64.1. Lua functions – all</b></p>
<div class="table-contents"><table summary="Lua functions – all" border="1">
<colgroup>
<col>
<col>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
            Function/Description
          </th>
<th>
            Params
          </th>
<th>
            Package
          </th>
<th>
            Version
          </th>
<th>
            Phases
          </th>
</tr></thead>
<tbody>
<tr>
<td>
            <a class="xref" href="lua.ref.ac_esmtp_capability_add.php" title="ac:esmtp_capability_add"><span class="refentrytitle">ac:esmtp_capability_add</span></a> –
            Add a capability to the EHLO response
          </td>
<td>
            name
          </td>
<td>
            msys.extended.ac
          </td>
<td>
            4.0
          </td>
<td>
            connect, ehlo
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.ac_esmtp_capability_remove.php" title="ac:esmtp_capability_remove"><span class="refentrytitle">ac:esmtp_capability_remove</span></a> –
            Removes a capability string from the EHLO response
          </td>
<td>
            name
          </td>
<td>
            msys.extended.ac
          </td>
<td>
            4.0
          </td>
<td>
            connect, ehlo
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.ac_inbound_session_count.php" title="ac:inbound_session_count"><span class="refentrytitle">ac:inbound_session_count</span></a> –
            If called with no arguments, returns the current inbound
            session count to this listener for the connecting IP
          </td>
<td>
            [cidr], [service_type]
          </td>
<td>
            msys.extended.ac
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.client_do_request.php" title="client:do_request"><span class="refentrytitle">client:do_request</span></a> – Perform
            an HTTP request
          </td>
<td>
            type, url, [data]
          </td>
<td>
            msys.http.client
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.client_get_body.php" title="client:get_body"><span class="refentrytitle">client:get_body</span></a> – Get the
            body of a web page
          </td>
<td> </td>
<td>
            msys.http.client
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.client_get_headers.php" title="client:get_headers"><span class="refentrytitle">client:get_headers</span></a> – Get a
            client's headers
          </td>
<td> </td>
<td>
            msys.http.client
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.client_get_status.php" title="client:get_status"><span class="refentrytitle">client:get_status</span></a> – Return
            the status of an HTTP request
          </td>
<td> </td>
<td>
            msys.http.client
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.client_parse_headers.php" title="client:parse_headers"><span class="refentrytitle">client:parse_headers</span></a> – Parse
            the headers of an HTTP response
          </td>
<td>
            headers
          </td>
<td>
            msys.http.client
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.client_set_header.php" title="client:set_header"><span class="refentrytitle">client:set_header</span></a> – Set a
            client's header
          </td>
<td>
            [header]
          </td>
<td>
            msys.http.client
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.client_set_timeout.php" title="client:set_timeout"><span class="refentrytitle">client:set_timeout</span></a> – Set the
            timeout for an HTTP client
          </td>
<td>
            [number]
          </td>
<td>
            msys.http.client
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.json.decode.php" title="json.decode"><span class="refentrytitle">json.decode</span></a> – Create a JSON
            object from a JSON string
          </td>
<td>
            str
          </td>
<td>
            json
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.json.encode.php" title="json.encode"><span class="refentrytitle">json.encode</span></a> – Convert a Lua
            variable or expression so that it can be added to a JSON
            object
          </td>
<td>
            obj
          </td>
<td>
            json
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.json.new.php" title="json.new"><span class="refentrytitle">json.new</span></a> – Create an empty
            JSON object
          </td>
<td> </td>
<td>
            json
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.json.strerror.php" title="json.strerror"><span class="refentrytitle">json.strerror</span></a> – Return the
            description of a JSON error code
          </td>
<td>
            code
          </td>
<td>
            json
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg.batch_id.php" title="msg.batch_id"><span class="refentrytitle">msg.batch_id</span></a> – Returns the
            human-readable ec_message.batch_id
          </td>
<td> </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg.conn_id.php" title="msg.conn_id"><span class="refentrytitle">msg.conn_id</span></a> – Returns the
            human-readable ec_message.conn_id
          </td>
<td> </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg.id.php" title="msg.id"><span class="refentrytitle">msg.id</span></a> – Returns the
            human-readable ec_message.id
          </td>
<td> </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_binding.php" title="msg:binding"><span class="refentrytitle">msg:binding</span></a> – Sets the
            binding to the named binding, if one is provided
          </td>
<td>
            [value]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_binding_group.php" title="msg:binding_group"><span class="refentrytitle">msg:binding_group</span></a> – Sets the
            binding_group to the named binding, if one is provided
          </td>
<td>
            [value]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_body.php" title="msg:body"><span class="refentrytitle">msg:body</span></a> – Set or get the
            message body (minus headers)
          </td>
<td>
            [...]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_body_match.php" title="msg:body_match"><span class="refentrytitle">msg:body_match</span></a> – Streaming
            interface to a PCRE search of a message body (minus headers)
          </td>
<td>
            pattern
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_body_replace.php" title="msg:body_replace"><span class="refentrytitle">msg:body_replace</span></a> – Streaming
            interface to a PCRE replacement of a message body (minus
            headers)
          </td>
<td>
            pattern, replacement
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_build.php" title="msg:build"><span class="refentrytitle">msg:build</span></a> – Create a message
          </td>
<td>
            headers, parts, attachments
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_code.php" title="msg:code"><span class="refentrytitle">msg:code</span></a> – Get or set the
            message code
          </td>
<td>
            [number], [string]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_context_delete.php" title="msg:context_delete"><span class="refentrytitle">msg:context_delete</span></a> – Delete
            a context variable
          </td>
<td>
            type, key
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_context_exists.php" title="msg:context_exists"><span class="refentrytitle">msg:context_exists</span></a> – Check
            if a context variable exists
          </td>
<td>
            type, key
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_context_exists_and_get.php" title="msg:context_exists_and_get"><span class="refentrytitle">msg:context_exists_and_get</span></a> –
            Check if a context variable exists and get it
          </td>
<td>
            type, key
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_context_get.php" title="msg:context_get"><span class="refentrytitle">msg:context_get</span></a> – Get a
            context variable
          </td>
<td>
            type, key
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_context_set.php" title="msg:context_set"><span class="refentrytitle">msg:context_set</span></a> – Set a
            context variable
          </td>
<td>
            type, key, value
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_discard.php" title="msg:discard"><span class="refentrytitle">msg:discard</span></a> – Silently
            discard a message
          </td>
<td>
            [reason]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_forward.php" title="msg:forward"><span class="refentrytitle">msg:forward</span></a> – Forward
            current message to recipients other than the original
            recipients. A new message is created and the original
            message is attached to it
          </td>
<td>
            sender, rcptto, text, [subject], [charset]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, rcptto, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_get_delivery_method.php" title="msg:get_delivery_method"><span class="refentrytitle">msg:get_delivery_method</span></a> –
            Return the delivery method for a message
          </td>
<td> </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_get_envelope2.php" title="msg:get_envelope2"><span class="refentrytitle">msg:get_envelope2</span></a> – Get
            envelope values
          </td>
<td>
            flags, localpart_str, domain_str
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_get_message_size.php" title="msg:get_message_size"><span class="refentrytitle">msg:get_message_size</span></a> – Get
            the size of a message
          </td>
<td> </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.header.php" title="msg:header"><span class="refentrytitle">msg:header</span></a> – Manipulate message
            headers
          </td>
<td>
            hdr, [value], [mode]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_inject.php" title="msg:inject"><span class="refentrytitle">msg:inject</span></a> – Use this
            function to send mail
          </td>
<td>
            mailfrom, rcptto
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_listener_addr.php" title="msg:listener_addr"><span class="refentrytitle">msg:listener_addr</span></a> – Gets the
            recv_via IP and/or PORT
          </td>
<td>
            [flag]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_mailfrom.php" title="msg:mailfrom"><span class="refentrytitle">msg:mailfrom</span></a> – Sets the
            'MAIL FROM' email address if one is provided. Returns the
            current/new value
          </td>
<td>
            [value]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, rcptto, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_makeBoundary.php" title="msg:makeBoundary"><span class="refentrytitle">msg:makeBoundary</span></a> – Generates
            a unique boundary string
          </td>
<td>
            ...
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_makeContainer.php" title="msg:makeContainer"><span class="refentrytitle">msg:makeContainer</span></a> – Creates
            a new, unlinked, container message part
          </td>
<td>
            mimetype, [boundary], [add_terminator]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_makePart.php" title="msg:makePart"><span class="refentrytitle">msg:makePart</span></a> – Creates a
            new, unlinked, singleton (or leaf) message part
          </td>
<td>
            mimetype, [body], [encoding]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_mime.php" title="msg:mime"><span class="refentrytitle">msg:mime</span></a> – Returns the top
            of the MIME tree for the message, a message part
          </td>
<td>
            [readonly]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_raw.php" title="msg:raw"><span class="refentrytitle">msg:raw</span></a> – Sets the message
            content if value is provided
          </td>
<td>
            [value]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_raw_match.php" title="msg:raw_match"><span class="refentrytitle">msg:raw_match</span></a> – Streaming
            interface to PCRE search message content
          </td>
<td>
            pattern
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_raw_replace.php" title="msg:raw_replace"><span class="refentrytitle">msg:raw_replace</span></a> – Streaming
            interface to a PCRE replacement of message content
          </td>
<td>
            pattern, replacement
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_rcptto.php" title="msg:rcptto"><span class="refentrytitle">msg:rcptto</span></a> – Sets the 'RCPT
            TO' email address if one is provided. Returns the
            current/new value
          </td>
<td>
            [value]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, rcptto, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_reception_peer.php" title="msg:reception_peer"><span class="refentrytitle">msg:reception_peer</span></a> – Returns
            the IP and/or PORT of the remote injection source
          </td>
<td>
            [flag]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_routing_domain.php" title="msg:routing_domain"><span class="refentrytitle">msg:routing_domain</span></a> – Returns
            the routing domain for the message
          </td>
<td>
            [...]
          </td>
<td>
            msys.extended.message_routing
          </td>
<td>
            4.0
          </td>
<td>
            data_spool_each_rcpt, rcptto
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_text.php" title="msg:text"><span class="refentrytitle">msg:text</span></a> – Returns the
            transfer decoded text for the body
          </td>
<td>
            ...
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_text1.php" title="msg:text"><span class="refentrytitle">msg:text</span></a> – The entire
            message body is replaced by the supplied text
          </td>
<td>
            value, [type], [charset]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_text_match.php" title="msg:text_match"><span class="refentrytitle">msg:text_match</span></a> – Streaming
            PCRE search across the transfer-decoded, UTF-8 text version
            of the message body
          </td>
<td>
            pattern
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msg_text_replace.php" title="msg:text_replace"><span class="refentrytitle">msg:text_replace</span></a> – Streaming
            interface to PCRE replacement of textual content from the
            message body
          </td>
<td>
            pattern, replacement
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_addFirstChild.php" title="msgpart:addFirstChild"><span class="refentrytitle">msgpart:addFirstChild</span></a> – Adds
            a child as the first child on this part
          </td>
<td>
            child
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_addLastChild.php" title="msgpart:addLastChild"><span class="refentrytitle">msgpart:addLastChild</span></a> – Adds
            a child as the last child on this part
          </td>
<td>
            child
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_address_header.php" title="msgpart:address_header"><span class="refentrytitle">msgpart:address_header</span></a> –
            Parse each instance of the named header for RFC2822
            addresses
          </td>
<td>
            headername, [component]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_body_match.php" title="msgpart:body_match"><span class="refentrytitle">msgpart:body_match</span></a> –
            Streaming interface to PCRE search a message body part
            (minus headers)
          </td>
<td>
            pattern
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_body_replace.php" title="msgpart:body_replace"><span class="refentrytitle">msgpart:body_replace</span></a> –
            Streaming interface to a PCRE replacement of a message body
            part (minus headers)
          </td>
<td>
            pattern, replacement
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_content_type.php" title="msgpart:content_type"><span class="refentrytitle">msgpart:content_type</span></a> –
            Returns a table of content type related information
          </td>
<td> </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_header.php" title="msgpart:header"><span class="refentrytitle">msgpart:header</span></a> – Returns an
            array of headers values for the given name
          </td>
<td>
            name
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_header.php" title="msgpart:header"><span class="refentrytitle">msgpart:header</span></a> – Unset the
            header name of the current message part
          </td>
<td>
            name, nil
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_header.php" title="msgpart:header"><span class="refentrytitle">msgpart:header</span></a> – If mode is
            replace (or unspecified): first deletes all other headers of
            that name before appending the new value to the message
            headers
          </td>
<td>
            name, value, [mode]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_insertAfter.php" title="msgpart:insertAfter"><span class="refentrytitle">msgpart:insertAfter</span></a> – Insert
            this part into the MIME tree after the given parameter
          </td>
<td>
            after
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_insertBefore.php" title="msgpart:insertBefore"><span class="refentrytitle">msgpart:insertBefore</span></a> –
            Insert this part into the MIME tree before the given
            parameter
          </td>
<td>
            before
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_raw_match.php" title="msgpart:raw_match"><span class="refentrytitle">msgpart:raw_match</span></a> –
            Streaming interface to PCRE search of the current message
            part
          </td>
<td>
            pattern
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_raw_replace.php" title="msgpart:raw_replace"><span class="refentrytitle">msgpart:raw_replace</span></a> –
            Streaming interface to PCRE replacement of message part
            content
          </td>
<td>
            pattern, replacement
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_text.php" title="msgpart:text"><span class="refentrytitle">msgpart:text</span></a> – Returns the
            transfer decoded text for the message part, in UTF-8
          </td>
<td>
            ...
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_text.php" title="msgpart:text"><span class="refentrytitle">msgpart:text</span></a> – The entire
            message body part is replaced by the supplied text
          </td>
<td>
            value, [type], [charset]
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_text_match.php" title="msgpart:text_match"><span class="refentrytitle">msgpart:text_match</span></a> –
            Streaming PCRE search across the transfer-decoded UTF-8 text
            version of the message body part
          </td>
<td>
            pattern
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_text_replace.php" title="msgpart:text_replace"><span class="refentrytitle">msgpart:text_replace</span></a> –
            Streaming interface to a PCRE replacement of textual content
            from the message body parts. Only parts that have a 'text'
            mime type will be included in the search
          </td>
<td>
            pattern, replacement
          </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msgpart_unlink.php" title="msgpart:unlink"><span class="refentrytitle">msgpart:unlink</span></a> – Removes the
            part (and its children) from the MIME tree
          </td>
<td> </td>
<td>
            msys.extended.message
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-ad/ad.custom.rules.php" target="_top">msys.adaptive.registerRules</a>
            – Register adaptive rules
          </td>
<td>
            rules, [type]
          </td>
<td>
            msys.adaptive
          </td>
<td>
            4.0
          </td>
<td>
            adaptive
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.apn.apn_status_classifier.php" title="msys.apn.apn_status_classifier"><span class="refentrytitle">msys.apn.apn_status_classifier</span></a>
            – Determine whether the status code indicates a
            permanent or temporary failure
          </td>
<td>
            status
          </td>
<td>
            msys.apn
          </td>
<td>
            4.0
          </td>
<td>
            apn_response_eval, msg_dispose
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.asyncOk.php" title="msys.asyncOk"><span class="refentrytitle">msys.asyncOk</span></a> – Returns true
            if the current execution environment is suitable for
            suspend/resume operation
          </td>
<td> </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.audit.connections.php" title="msys.audit.connections"><span class="refentrytitle">msys.audit.connections</span></a> –
            Returns the number of connections that have occurred for a
            CIDR block within a configured time window
          </td>
<td>
            monitor, [options]
          </td>
<td>
            msys.audit
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.audit.inbound_session_count.php" title="msys.audit.inbound_session_count"><span class="refentrytitle">msys.audit.inbound_session_count</span></a>
            – Counts connections currently established from the
            specified cidr to the specified service
          </td>
<td>
            cidr, servicename
          </td>
<td>
            msys.audit
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.audit.receptions.php" title="msys.audit.receptions"><span class="refentrytitle">msys.audit.receptions</span></a> –
            Returns the number of receptions that have occurred for a
            CIDR block within a configured time window
          </td>
<td>
            monitor, [options]
          </td>
<td>
            msys.audit
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.audit.rejections.php" title="msys.audit.rejections"><span class="refentrytitle">msys.audit.rejections</span></a> –
            Returns the number of rejections that have occurred for a
            CIDR block within a configured time window
          </td>
<td>
            monitor, [options]
          </td>
<td>
            msys.audit
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.audit_series.add.php" title="msys.audit_series.add"><span class="refentrytitle">msys.audit_series.add</span></a> –
            Adjusts the counter for the current time window of a named
            series
          </td>
<td>
            name, [options]
          </td>
<td>
            msys.audit_series
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.audit_series.count.php" title="msys.audit_series.count"><span class="refentrytitle">msys.audit_series.count</span></a> –
            Returns the total associated with the named series
          </td>
<td>
            name, [options]
          </td>
<td>
            msys.audit_series
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.audit_series.define.php" title="msys.audit_series.define"><span class="refentrytitle">msys.audit_series.define</span></a> –
            Define an audit series
          </td>
<td>
            name, type, interval, num_windows, [options]
          </td>
<td>
            msys.audit_series
          </td>
<td>
            4.0
          </td>
<td>
            init
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.audit_series.remove_item.php" title="msys.audit_series.remove_item"><span class="refentrytitle">msys.audit_series.remove_item</span></a>
            – Removes a counter from a named series
          </td>
<td>
            name, [key]
          </td>
<td>
            msys.audit_series
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.av.engines.php" title="msys.av.engines"><span class="refentrytitle">msys.av.engines</span></a> – Returns a
            list of configured engine names in a table
          </td>
<td> </td>
<td>
            msys.av
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.av.scan.php" title="msys.av.scan"><span class="refentrytitle">msys.av.scan</span></a> – This function
            performs a virus scan
          </td>
<td>
            [av_engine_name], [msg], [validate_context]
          </td>
<td>
            msys.av
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.av.scan_part.php" title="msys.av.scan_part"><span class="refentrytitle">msys.av.scan_part</span></a> – This
            function takes an optional msg (msys.core:_ec_message), an
            optional engine name and performs a virus scan on a specific
            part
          </td>
<td>
            msg_part, [av_engine_name], [validate_context]
          </td>
<td>
            msys.av
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.base64.decode.php" title="msys.base64.decode"><span class="refentrytitle">msys.base64.decode</span></a> – Decode
            a base64 encoded string
          </td>
<td>
            encoded_text, [charset]
          </td>
<td>
            msys.base64
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.base64.encode.php" title="msys.base64.encode"><span class="refentrytitle">msys.base64.encode</span></a> –
            Base64-encode a string
          </td>
<td>
            original, [fold], [charset]
          </td>
<td>
            msys.base64
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.bounce.classify.php" title="msys.bounce.classify"><span class="refentrytitle">msys.bounce.classify</span></a> –
            Create a bounce classification for a message
          </td>
<td>
            msg
          </td>
<td>
            msys.bounce
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, set_binding
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.bounce.classify_smtp_response.php" title="msys.bounce.classify_smtp_response"><span class="refentrytitle">msys.bounce.classify_smtp_response</span></a>
            – Create a bounce classification from SMTP response
            text and domain name
          </td>
<td>
            response_text, domain
          </td>
<td>
            msys.bounce
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.brightmail.scan.php" title="msys.brightmail.scan"><span class="refentrytitle">msys.brightmail.scan</span></a> – Use
            Brightmail to scan messages
          </td>
<td>
            msg, accept, vctx
          </td>
<td>
            msys.brightmail
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.cast.php" title="msys.cast"><span class="refentrytitle">msys.cast</span></a> – Cast an object
            to the specified class
          </td>
<td>
            object, classnamestring
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.cidr.define.php" title="msys.cidr.define"><span class="refentrytitle">msys.cidr.define</span></a> – Define a
            named CIDR object
          </td>
<td>
            name, options
          </td>
<td>
            msys.cidr
          </td>
<td>
            4.0
          </td>
<td>
            init
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.cidr.query.php" title="msys.cidr.query"><span class="refentrytitle">msys.cidr.query</span></a> – Look up
            address against the named CIDR
          </td>
<td>
            name, [address]
          </td>
<td>
            msys.cidr
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.cidr.reload.php" title="msys.cidr.reload"><span class="refentrytitle">msys.cidr.reload</span></a> – Refreshes
            CIDRs of type 'datasource' and 'rbldnsd'
          </td>
<td>
            name
          </td>
<td>
            msys.cidr
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.cloudmark.analyze.php" title="msys.cloudmark.analyze"><span class="refentrytitle">msys.cloudmark.analyze</span></a> –
            Analyze a message using Cloudmark
          </td>
<td>
            hdr, [msg], [vctx]
          </td>
<td>
            msys.cloudmark
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.cloudmark.score.php" title="msys.cloudmark.score"><span class="refentrytitle">msys.cloudmark.score</span></a> – Scan
            messages using Cloudmark
          </td>
<td>
            [msg], [accept], [vctx]
          </td>
<td>
            msys.cloudmark
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.commtouch.diagnose.php" title="msys.commtouch.diagnose"><span class="refentrytitle">msys.commtouch.diagnose</span></a> –
            Scan message using Commtouch
          </td>
<td>
            [msg], [accept], [vctx]
          </td>
<td>
            msys.commtouch
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.config.php" title="msys.config"><span class="refentrytitle">msys.config</span></a> – Set or get
            configuration values
          </td>
<td>
            action, parameters
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.core.dns_get_domain.php" title="msys.core.dns_get_domain"><span class="refentrytitle">msys.core.dns_get_domain</span></a> –
            Get a domain record
          </td>
<td>
            domain
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.core.get_now_ts.php" title="msys.core.get_now_ts"><span class="refentrytitle">msys.core.get_now_ts</span></a> – Get
            the current time
          </td>
<td> </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.core.io_wrapper_open.php" title="msys.core.io_wrapper_open"><span class="refentrytitle">msys.core.io_wrapper_open</span></a> –
            Open a handle to a resource
          </td>
<td>
            filename, [options], [mode]
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.core.mail_queue_delay_domain.php" title="msys.core.mail_queue_delay_domain"><span class="refentrytitle">msys.core.mail_queue_delay_domain</span></a>
            – Add a domain record to the delayed queue
          </td>
<td>
            dr, note
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.core.string_new.php" title="msys.core.string_new"><span class="refentrytitle">msys.core.string_new</span></a> –
            Create an ec_string data type
          </td>
<td> </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.counter.add.php" title="msys.counter.add"><span class="refentrytitle">msys.counter.add</span></a> – Add to
            the current value of the specified counter
          </td>
<td>
            object_or_path, delta
          </td>
<td>
            msys.counter
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.counter.inc.php" title="msys.counter.inc"><span class="refentrytitle">msys.counter.inc</span></a> – Increment
            a counter
          </td>
<td>
            object_or_path
          </td>
<td>
            msys.counter
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.counter.open.php" title="msys.counter.open"><span class="refentrytitle">msys.counter.open</span></a> – Create a
            counter object
          </td>
<td>
            counter_path, [semantics]
          </td>
<td>
            msys.counter
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.counter.read.php" title="msys.counter.read"><span class="refentrytitle">msys.counter.read</span></a> – Read the
            specified counter
          </td>
<td>
            object_or_path
          </td>
<td>
            msys.counter
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.counter.reset.php" title="msys.counter.reset"><span class="refentrytitle">msys.counter.reset</span></a> – Reset a
            counter
          </td>
<td>
            object_or_path
          </td>
<td>
            msys.counter
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.counter.unlink.php" title="msys.counter.unlink"><span class="refentrytitle">msys.counter.unlink</span></a> – Unlink
            a counter
          </td>
<td>
            counter_path
          </td>
<td>
            msys.counter
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.db.execute.php" title="msys.db.execute"><span class="refentrytitle">msys.db.execute</span></a> – Executes a
            query that is not expected to return data (such as an insert
            or an update query)
          </td>
<td>
            cachename, query, [queryparams], [options]
          </td>
<td>
            msys.db
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.db.fetch_row.php" title="msys.db.fetch_row"><span class="refentrytitle">msys.db.fetch_row</span></a> – If
            successful, return the first row of the query result as a
            table
          </td>
<td>
            cachename, query, [queryparams], [options]
          </td>
<td>
            msys.db
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.db.query.php" title="msys.db.query"><span class="refentrytitle">msys.db.query</span></a> – Query a
            datasource
          </td>
<td>
            cachename, query, [queryparams], [options]
          </td>
<td>
            msys.db
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.delivery.ob_get_current_message.php" title="msys.delivery.ob_get_current_message"><span class="refentrytitle">msys.delivery.ob_get_current_message</span></a>
            – Get the current message from the session context
          </td>
<td>
            sess
          </td>
<td>
            msys.delivery
          </td>
<td>
            4.0
          </td>
<td>
            http_response_eval
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.dnslookup.php" title="msys.dnsLookup"><span class="refentrytitle">msys.dnsLookup</span></a> – Perform a
            DNS lookup
          </td>
<td>
            name, [recordtype], [options]
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.dumper.Dumper.php" title="msys.dumper.Dumper"><span class="refentrytitle">msys.dumper.Dumper</span></a> – Dump
            information about an object
          </td>
<td>
            res
          </td>
<td>
            msys.dumper
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.expandMacro.php" title="msys.expandMacro"><span class="refentrytitle">msys.expandMacro</span></a> – Expand
            macros (such as sieve, spf and custom_logger macros)
          </td>
<td>
            string
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.expurgate.scan.php" title="msys.expurgate.scan"><span class="refentrytitle">msys.expurgate.scan</span></a> – Scan
            using the Eleven antivirus engine
          </td>
<td>
            msg, accept, vctx
          </td>
<td>
            msys.expurgate
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.gauge_cache.dec.php" title="msys.gauge_cache.dec"><span class="refentrytitle">msys.gauge_cache.dec</span></a> –
            Decrements the value associated with keystring in the named
            cache
          </td>
<td>
            cachename, keystring
          </td>
<td>
            msys.gauge_cache
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.gauge_cache.define.php" title="msys.gauge_cache.define"><span class="refentrytitle">msys.gauge_cache.define</span></a> –
            Create a cache that can be used to maintain a set of
            counters
          </td>
<td>
            name, maxelems, ttl, [replicated]
          </td>
<td>
            msys.gauge_cache
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.gauge_cache.get.php" title="msys.gauge_cache.get"><span class="refentrytitle">msys.gauge_cache.get</span></a> – Looks
            up the value associated with keystring in the named cache
          </td>
<td>
            cachename, keystring
          </td>
<td>
            msys.gauge_cache
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.gauge_cache.inc.php" title="msys.gauge_cache.inc"><span class="refentrytitle">msys.gauge_cache.inc</span></a> –
            Increments the value associated with keystring in the named
            cache
          </td>
<td>
            cachename, keystring
          </td>
<td>
            msys.gauge_cache
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.gauge_cache.remove_item.php" title="msys.gauge_cache.remove_item"><span class="refentrytitle">msys.gauge_cache.remove_item</span></a>
            – Removes the value associated with keystring from the
            named cache
          </td>
<td>
            cachename, keystring
          </td>
<td>
            msys.gauge_cache
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.gcm.gcm_classify_error.php" title="msys.gcm.gcm_classify_error"><span class="refentrytitle">msys.gcm.gcm_classify_error</span></a>
            – Determine the delivery status of the
            "DLV_Response_Status" variable
          </td>
<td>
            status
          </td>
<td>
            msys.gcm
          </td>
<td>
            4.0
          </td>
<td>
            gcm_response_eval, http_response_eval, msg_dispose
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.gcm.gcm_get_result_error_code.php" title="msys.gcm.gcm_get_result_error_code"><span class="refentrytitle">msys.gcm.gcm_get_result_error_code</span></a>
            – Get the error code from the response results error
          </td>
<td>
            error
          </td>
<td>
            msys.gcm
          </td>
<td>
            4.0
          </td>
<td>
            gcm_response_eval, http_response_eval, msg_dispose
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.getClassMetaTable.php" title="msys.getClassMetaTable"><span class="refentrytitle">msys.getClassMetaTable</span></a> –
            Returns the metatable for the named class
          </td>
<td>
            classnamestring
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.http.client.new.php" title="msys.http.client.new"><span class="refentrytitle">msys.http.client.new</span></a> –
            Create an HTTP client
          </td>
<td> </td>
<td>
            msys.http.client
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.httpclnt.http_status_classifier.php" title="msys.httpclnt.http_status_classifier"><span class="refentrytitle">msys.httpclnt.http_status_classifier</span></a>
            – Determine the delivery status of the
            "DLV_Response_Status" variable
          </td>
<td>
            status
          </td>
<td>
            msys.httpclnt
          </td>
<td>
            4.0
          </td>
<td>
            http_response_eval
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.httpsrv.register.php" title="msys.httpsrv.register"><span class="refentrytitle">msys.httpsrv.register</span></a> –
            Register a Lua function as an HTTP endpoint
          </td>
<td> </td>
<td> </td>
<td>
            4.0
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.idn.php" title="msys.idn.to_idn"><span class="refentrytitle">msys.idn.to_idn</span></a> – Attempts to
            convert the domain to the IDN format
          </td>
<td>
            name
          </td>
<td>
            msys.idn
          </td>
<td>
            4.2
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.idn_utf8.php" title="msys.idn.to_utf8"><span class="refentrytitle">msys.idn.to_utf8</span></a> – Converts an
            IDN formatted string to unicode
          </td>
<td>
            name
          </td>
<td>
            msys.idn
          </td>
<td>
            4.2
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.lock.php" title="msys.lock"><span class="refentrytitle">msys.lock</span></a> – The current
            running OS level thread obtains a lock on the named mutex
          </td>
<td>
            mutexname
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.message.retry.php" target="_top">msys.mstore.load</a>
            – Retrieve a message from Riak data storage
          </td>
<td>
            bucket_id, msgid
          </td>
<td>
            msys.mstore
          </td>
<td>
            4.0
          </td>
<td>
            SMPP
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.os.statvfs_read.php" title="msys.os.statvfs_read"><span class="refentrytitle">msys.os.statvfs_read</span></a> –
            Request a snapshot of the stream
          </td>
<td>
            path
          </td>
<td>
            msys.os
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.os.statvfs_subscribe.php" title="msys.os.statvfs_subscribe"><span class="refentrytitle">msys.os.statvfs_subscribe</span></a> –
            Provide a "stream" for statvfs updates
          </td>
<td>
            path, interval
          </td>
<td>
            msys.os
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.parseRFC2822Addresses.php" title="msys.parseRFC2822Addresses"><span class="refentrytitle">msys.parseRFC2822Addresses</span></a> –
            Parse the address string per the address parsing rules
            defined in RFC2822
          </td>
<td>
            addressstring, component
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.pcre.match.php" title="msys.pcre.match"><span class="refentrytitle">msys.pcre.match</span></a> – Perform a
            PCRE regex match operation
          </td>
<td>
            str, pattern
          </td>
<td>
            msys.pcre
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.pcre.replace.php" title="msys.pcre.replace"><span class="refentrytitle">msys.pcre.replace</span></a> – Perform
            a PCRE replace operation
          </td>
<td>
            subject, pattern, replacement
          </td>
<td>
            msys.pcre
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.pcre.split.php" title="msys.pcre.split"><span class="refentrytitle">msys.pcre.split</span></a> – Perform a
            PCRE split operation
          </td>
<td>
            subject, pattern
          </td>
<td>
            msys.pcre
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.qp.decode.php" title="msys.qp.decode"><span class="refentrytitle">msys.qp.decode</span></a> – Decode a
            quoted-printable message
          </td>
<td>
            encoded_txt, [charset]
          </td>
<td>
            msys.qp
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.qp.encode.php" title="msys.qp.encode"><span class="refentrytitle">msys.qp.encode</span></a> –
            Quoted-printable encode a string
          </td>
<td>
            original, [charset], [dotstuffing]
          </td>
<td>
            msys.qp
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.readfile.php" title="msys.readfile"><span class="refentrytitle">msys.readfile</span></a> – Read the
            entire contents of the specified file or URI
          </td>
<td>
            filename_or_uri
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.registerAuth.php" title="msys.registerAuth"><span class="refentrytitle">msys.registerAuth</span></a> – Register
            an authentication/authorization scheme that can be used for
            SMTP or control channel authentication
          </td>
<td>
            schemename, authtable
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            init
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.registerControl.php" title="msys.registerControl"><span class="refentrytitle">msys.registerControl</span></a> –
            Register a command with the control channel subsystem
          </td>
<td>
            prefix, closure
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            init
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.registerModule.php" title="msys.registerModule"><span class="refentrytitle">msys.registerModule</span></a> –
            Registers a Lua module with the system
          </td>
<td>
            name, functable
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.rfc3464.compute_delivery_status.php" title="msys.rfc3464.compute_delivery_status"><span class="refentrytitle">msys.rfc3464.compute_delivery_status</span></a>
            – Generate RFC3464 compliant delivery status headers
          </td>
<td>
            msg, action
          </td>
<td>
            msys.rfc3464
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.rfc3464.compute_delivery_status_string.php" title="msys.rfc3464.compute_delivery_status_string"><span class="refentrytitle">msys.rfc3464.compute_delivery_status_string</span></a>
            – Generate RFC3464 compliant delivery status headers
          </td>
<td>
            response_text
          </td>
<td>
            msys.rfc3464
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.rfc3464.create_mdn.php" title="msys.rfc3464.create_mdn"><span class="refentrytitle">msys.rfc3464.create_mdn</span></a> –
            Generate an MDN from a message
          </td>
<td>
            msg, action
          </td>
<td>
            msys.rfc3464
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.rfc3464.extract_delivery_status.php" title="msys.rfc3464.extract_delivery_status"><span class="refentrytitle">msys.rfc3464.extract_delivery_status</span></a>
            – Return a table of parsed email headers
          </td>
<td>
            msg
          </td>
<td>
            msys.rfc3464
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.rfc3464.send_mdn.php" title="msys.rfc3464.send_mdn"><span class="refentrytitle">msys.rfc3464.send_mdn</span></a> –
            Generate and enqueue an MDN
          </td>
<td>
            msg, action
          </td>
<td>
            msys.rfc3464
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.runinpool.php" title="msys.runInPool"><span class="refentrytitle">msys.runInPool</span></a> – Run a
            function in a separate threadpool
          </td>
<td>
            pool, closure, [...]
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.sleep.php" title="msys.sleep"><span class="refentrytitle">msys.sleep</span></a> – When called in
            the scheduler thread, suspend the current session for the
            specified duration
          </td>
<td>
            duration_in_seconds
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.snmpTrap.php" title="msys.snmpTrap"><span class="refentrytitle">msys.snmpTrap</span></a> – Issue an
            SNMP trap
          </td>
<td>
            traptable
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.symantec_beik.scan.php" title="msys.symantec_beik.scan"><span class="refentrytitle">msys.symantec_beik.scan</span></a> –
            Scan using BEIK
          </td>
<td>
            msg, vctx
          </td>
<td>
            msys.symantec_beik
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.threadpool.count.php" title="msys.threadpool.count"><span class="refentrytitle">msys.threadpool.count</span></a> –
            Returns the current number of thread pools
          </td>
<td> </td>
<td>
            msys.threadpool
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.threadpool.find.php" title="msys.threadpool.find"><span class="refentrytitle">msys.threadpool.find</span></a> – Finds
            a thread pool name from a job class ID or a job class ID
            from a thread pool name
          </td>
<td>
            [threadpoolname], [jobclassID]
          </td>
<td>
            msys.threadpool
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.threadpool.stat.php" title="msys.threadpool.stat"><span class="refentrytitle">msys.threadpool.stat</span></a> –
            Return stats regarding a threadpool
          </td>
<td>
            [threadpoolname], [jobclassID]
          </td>
<td>
            msys.threadpool
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.timer.after.php" title="msys.timer.after"><span class="refentrytitle">msys.timer.after</span></a> – Execute
            closure after a given length of time
          </td>
<td>
            delta, closure, [name]
          </td>
<td>
            msys.timer
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.timer.at.php" title="msys.timer.at"><span class="refentrytitle">msys.timer.at</span></a> – Execute
            closure at a given time
          </td>
<td>
            number, closure, [name]
          </td>
<td>
            msys.timer
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.timer.every.php" title="msys.timer.every"><span class="refentrytitle">msys.timer.every</span></a> – Execute
            closure every interval
          </td>
<td>
            interval, closure, [name]
          </td>
<td>
            msys.timer
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.type.php" title="msys.type"><span class="refentrytitle">msys.type</span></a> – Return the type
            name of the supplied parameter
          </td>
<td>
            parameter
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.unlock.php" title="msys.unlock"><span class="refentrytitle">msys.unlock</span></a> – Releases a
            lock obtained via msys.lock
          </td>
<td>
            mutexname
          </td>
<td>
            msys
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.dk.get_responsible_domain.php" title="msys.validate.dk.get_responsible_domain"><span class="refentrytitle">msys.validate.dk.get_responsible_domain</span></a>
            – This function requires module "dk_validate". "msg"
            is a mail message. "ctx" is the validation context. It
            returns the responsible domain for the current message
          </td>
<td>
            msg, ctx
          </td>
<td>
            msys.validate.dk
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.dk.sign.php" title="msys.validate.dk.sign"><span class="refentrytitle">msys.validate.dk.sign</span></a> – Sign
            a message using a Domain Key
          </td>
<td>
            msg, ctx, options
          </td>
<td>
            msys.validate.dk
          </td>
<td>
            4.0
          </td>
<td>
            core_data_validation
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_num_sigs.php" title="msys.validate.opendkim.get_num_sigs"><span class="refentrytitle">msys.validate.opendkim.get_num_sigs</span></a>
            – Return the number of DKIM signatures
          </td>
<td>
            dkim
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig.php" title="msys.validate.opendkim.get_sig"><span class="refentrytitle">msys.validate.opendkim.get_sig</span></a>
            – Get a signature from a DKIM object
          </td>
<td>
            dkim, [num]
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_canons.php" title="msys.validate.opendkim.get_sig_canons"><span class="refentrytitle">msys.validate.opendkim.get_sig_canons</span></a>
            – Fetch the canonicalizers used for a DKIM signature
          </td>
<td>
            dkim_sig
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_domain.php" title="msys.validate.opendkim.get_sig_domain"><span class="refentrytitle">msys.validate.opendkim.get_sig_domain</span></a>
            – Fetch the signing domain from a DKIM_SIGINFO object
          </td>
<td>
            dkim_sig
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_errorstr.php" title="msys.validate.opendkim.get_sig_errorstr"><span class="refentrytitle">msys.validate.opendkim.get_sig_errorstr</span></a>
            – Fetch the error associated with a DKIM signature
          </td>
<td>
            dkim_sig
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_flags.php" title="msys.validate.opendkim.get_sig_flags"><span class="refentrytitle">msys.validate.opendkim.get_sig_flags</span></a>
            – Fetch the flags associated with a DKIM signature
          </td>
<td>
            dkim_sig
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php" title="msys.validate.opendkim.get_sig_hdrsigned"><span class="refentrytitle">msys.validate.opendkim.get_sig_hdrsigned</span></a>
            – Determine whether a given header was signed
          </td>
<td>
            dkim_sig, header_name
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_identity.php" title="msys.validate.opendkim.get_sig_identity"><span class="refentrytitle">msys.validate.opendkim.get_sig_identity</span></a>
            – Fetch the identity associated with a DKIM signature
          </td>
<td>
            dkim, dkim_sig
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_keysize.php" title="msys.validate.opendkim.get_sig_keysize"><span class="refentrytitle">msys.validate.opendkim.get_sig_keysize</span></a>
            – Fetch the size of the key used to generate a DKIM
            signature
          </td>
<td>
            dkim_sig
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_selector.php" title="msys.validate.opendkim.get_sig_selector"><span class="refentrytitle">msys.validate.opendkim.get_sig_selector</span></a>
            – Fetch the selector associated with a DKIM signature
          </td>
<td>
            dkim_sig
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_signalg.php" title="msys.validate.opendkim.get_sig_signalg"><span class="refentrytitle">msys.validate.opendkim.get_sig_signalg</span></a>
            – Return the signing algorithm as a string
          </td>
<td>
            dkim_sig
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.sign.php" title="msys.validate.opendkim.sign"><span class="refentrytitle">msys.validate.opendkim.sign</span></a>
            – Sign a message using OpenDKIM
          </td>
<td>
            msg, vctx, [options]
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            core_final_validation
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.msys.validate.opendkim.verify.php" title="msys.validate.opendkim.verify"><span class="refentrytitle">msys.validate.opendkim.verify</span></a>
            – Verify an DKIM signature
          </td>
<td>
            m
          </td>
<td>
            msys.validate.opendkim
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.sess_request_add_header.php" title="sess:request_add_header"><span class="refentrytitle">sess:request_add_header</span></a> –
            Set the header of an HTTP session
          </td>
<td>
            header, value, replace
          </td>
<td>
            msys.httpclnt
          </td>
<td>
            4.0
          </td>
<td>
            http_request_eval
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.sess_request_delete_header.php" title="sess:request_delete_header"><span class="refentrytitle">sess:request_delete_header</span></a> –
            Delete a header from an HTTP session
          </td>
<td>
            header
          </td>
<td>
            msys.httpclnt
          </td>
<td>
            4.0
          </td>
<td>
            http_request_eval
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.sess_request_finalize.php" title="sess:request_finalize"><span class="refentrytitle">sess:request_finalize</span></a> –
            Finalize changes to an HTTP request
          </td>
<td>
            update
          </td>
<td>
            msys.httpclnt
          </td>
<td>
            4.0
          </td>
<td>
            http_request_eval
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.sess_request_set_body.php" title="sess:request_set_body"><span class="refentrytitle">sess:request_set_body</span></a> – Set
            the body of an HTTP session
          </td>
<td>
            request
          </td>
<td>
            msys.httpclnt
          </td>
<td>
            4.0
          </td>
<td>
            http_request_eval
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.session_request_url_get.php" title="session:request_url_get"><span class="refentrytitle">session:request_url_get</span></a> –
            Get the request URL
          </td>
<td> </td>
<td> </td>
<td>
            4.0
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.session_response_status_set_std.php" title="session:response_status_set_std"><span class="refentrytitle">session:response_status_set_std</span></a>
            – Set the HTTP status for the session response
          </td>
<td> </td>
<td> </td>
<td>
            4.0
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.thread.mutex.php" title="thread.mutex"><span class="refentrytitle">thread.mutex</span></a> – Create a new
            mutex
          </td>
<td>
            [type]
          </td>
<td>
            thread
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.vctx_add_recipient.php" title="vctx:add_recipient"><span class="refentrytitle">vctx:add_recipient</span></a> – Adds
            address (which may be a table representing multiple
            addresses) to the recipient list for the inbound session
          </td>
<td>
            address
          </td>
<td>
            msys.extended.vctx
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, rcptto
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.vctx_disconnect.php" title="vctx:disconnect"><span class="refentrytitle">vctx:disconnect</span></a> – Disconnect
            the current session
          </td>
<td>
            [code], [message]
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.vctx_get.php" title="vctx:get"><span class="refentrytitle">vctx:get</span></a> – Get the value of
            a context variable
          </td>
<td>
            type, key
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.vctx_recipient_list.php" title="vctx:recipient_list"><span class="refentrytitle">vctx:recipient_list</span></a> – Return
            or set the current recipient list
          </td>
<td>
            [addresses]
          </td>
<td>
            msys.extended.vctx
          </td>
<td>
            4.0
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.vctx_remove_recipient.php" title="vctx:remove_recipient"><span class="refentrytitle">vctx:remove_recipient</span></a> –
            Removes an address (which may be a table representing
            multiple addresses) from the recipient list
          </td>
<td>
            address
          </td>
<td>
            msys.extended.vctx
          </td>
<td>
            4.0
          </td>
<td>
            data, data_spool, data_spool_each_rcpt, mailfrom, rcptto
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.vctx_set.php" title="vctx:set"><span class="refentrytitle">vctx:set</span></a> – Set the value of
            a context variable
          </td>
<td>
            type, key, value
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.vctx_set_code.php" title="vctx:set_code"><span class="refentrytitle">vctx:set_code</span></a> – Sets the
            inbound disposition and response message
          </td>
<td>
            codenum, message
          </td>
<td>
            msys.core
          </td>
<td>
            4.0
          </td>
<td>
            any
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="lua.ref.vctx_tarpit.php" title="vctx:tarpit"><span class="refentrytitle">vctx:tarpit</span></a> – Issues a time
            cost on the inbound session, if supported by the listener
            (currently only SMTP supports this)
          </td>
<td>
            interval
          </td>
<td>
            msys.extended.vctx
          </td>
<td>
            4.0
          </td>
<td>
            connect
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
<a accesskey="p" href="p.reference.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.summary.all.modules.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Part X. Reference </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 65. Modules Summary</td>
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
