<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 65. Modules Summary</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="lua.summary_table.php" title="Chapter 64. Lua Functions Summary">
<link rel="next" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">
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
<tr><th colspan="3" align="center">Chapter 65. Modules Summary</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.summary_table.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="config.options.summary.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="modules.summary.all.modules"></a>Chapter 65. Modules Summary</h2></div></div></div>
<p>
    All modules are listed alphabetically with a brief description.
    Singleton modules are also identified. The
    <code class="literal">Version</code> column indicates when the module was
    introduced into the system. Note: all modules listed as 4.0 modules
    were actually introduced in prior versions of Momentum. The
    <code class="literal">Auto</code> column indicates whether a module is loaded
    automatically as required. The <code class="literal">Type</code> column
    indicates the MTA type of a given option. Options of type
    <code class="literal">na</code> do not directly apply to either a sending or
    receiving MTA. The <code class="literal">Cluster</code> column indicates
    whether a module is cluster-specific. The <code class="literal">Valid</code>
    column indicates whether a module is a validation module.
  </p>
<div class="table">
<a name="table-all"></a><p class="title"><b>Table 65.1. Modules: all</b></p>
<div class="table-contents"><table summary="Modules: all" border="1">
<colgroup>
<col>
<col>
<col>
<col>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
            Name
          </th>
<th>
            Version
          </th>
<th>
            Description
          </th>
<th>
            Auto
          </th>
<th>
            Cluster
          </th>
<th>
            Valid
          </th>
<th>
            See Also
          </th>
</tr></thead>
<tbody>
<tr>
<td>
            <a class="xref" href="modules.ac_auth.php" title="71.2. ac_auth – Authentication Handler">Section 71.2, “ac_auth – Authentication Handler”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Enable a Lua module to hook into the authentication
            mechanism
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">Section 71.3, “adaptive – Adaptive Delivery”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Dynamically tune delivery options
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.alerting.php" title="71.4. alerting – Send Alerting Emails">Section 71.4, “alerting – Send Alerting Emails”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Enable Lua policy scripts and alerts
          </td>
<td> </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">Section 71.60, “scriptlet - Lua Policy Scripts”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.alias.php" title="71.5. alias – Alias Expansion">Section 71.5, “alias – Alias Expansion”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Rewrite recipient addresses
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td>
            <a class="xref" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">Section 71.29, “ds_core - Datasource Query Core”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.antivirus.php" title="71.6. antivirus – Antivirus">Section 71.6, “antivirus – Antivirus”</a>
          </td>
<td>
            4.0
          </td>
<td>
            The antivirus framework
          </td>
<td>
             ✓
          </td>
<td> </td>
<td>
             ✓
          </td>
<td>
            <a class="xref" href="modules.clamav.php" title="71.17. clamav – ClamAV">Section 71.17, “clamav – ClamAV”</a>,
            <a class="xref" href="modules.csapi.php" title="71.23. csapi – Symantec CSAPI Antivirus Support">Section 71.23, “csapi – Symantec CSAPI Antivirus Support”</a>
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/apns.modules.php" target="_top">apn</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Use this module to configure the Apple Push Notification
            service
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/apns.modules.apn_logger.php" target="_top">apn_logger</a>
          </td>
<td>
            4.0
          </td>
<td>
            Use this module to log Apple Push notifications
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.as_logger.php" title="71.7. as_logger – Audit Series Logger">Section 71.7, “as_logger – Audit Series Logger”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Replicate audit series to disk
          </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.auth_ds.php" title="71.8. auth_ds – Datasource based SMTP Authentication">Section 71.8, “auth_ds – Datasource based SMTP Authentication”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Use a data source to authenticate an SMTP session
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">Section 71.29, “ds_core - Datasource Query Core”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.auth_radius.php" title="71.9. auth_radius – RADIUS based SMTP Authentication">Section 71.9, “auth_radius – RADIUS based SMTP Authentication”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Authenticate SMTP sessions via SMTP AUTH using RADIUS
            servers
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.beik.php" title="71.10. beik – Symantec Brightmail™ Engine Integration Kit">Section 71.10, “beik – Symantec <span class="trademark">Brightmail</span>™ Engine
      Integration Kit”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            This module provides an in-process version of the brightmail
            module
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td>
            <a class="xref" href="modules.brightmail.php" title="71.14. brightmail – Symantec Brightmail™ Content Scanning Support">Section 71.14, “brightmail – Symantec <span class="trademark">Brightmail</span>™ Content
      Scanning Support”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.bind_address_secondary.php" title="71.11. bind_address_secondary – Dual-stack IPv4/IPv6 Support">Section 71.11, “bind_address_secondary – Dual-stack IPv4/IPv6 Support”</a>
          </td>
<td>
            4.2
          </td>
<td>
            This module allows a binding to attach itself to an ipv6
            address
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.bounce_classifier_override.php" title="71.12. bounce_classifier_override – Override/Augment Bounce Classifications">Section 71.12, “bounce_classifier_override – Override/Augment Bounce Classifications”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Override the built-in bounce classification
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.bounce_logger.php" title="71.13. bounce_logger – Momentum-Style Bounce Logging">Section 71.13, “bounce_logger – Momentum-Style Bounce Logging”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Log bounced messages
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.brightmail.php" title="71.14. brightmail – Symantec Brightmail™ Content Scanning Support">Section 71.14, “brightmail – Symantec <span class="trademark">Brightmail</span>™ Content
      Scanning Support”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Check inbound mail against a Brightmail server
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.compress_spool.php" title="71.21. compress_spool – Dynamic Spool Compression">bzip2io</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            bzip compression algorithm
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="modules.compress_spool.php" title="71.21. compress_spool – Dynamic Spool Compression">Section 71.21, “compress_spool – Dynamic Spool Compression”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.chunk_logger.php" title="71.15. chunk_logger Module">Section 71.15, “chunk_logger Module”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Provide an interface for logging asynchronously from Lua, C,
            and C++
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cidrdb.php" title="71.16. cidrdb – CIDRDB">Section 71.16, “cidrdb – CIDRDB”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Expose scripting functions for checking IP addresses
          </td>
<td>
             ✓
          </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.clamav.php" title="71.17. clamav – ClamAV">Section 71.17, “clamav – ClamAV”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Support for Clam AV
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td>
            <a class="xref" href="modules.antivirus.php" title="71.6. antivirus – Antivirus">Section 71.6, “antivirus – Antivirus”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cloudmark.php" title="71.18. cloudmark – Cloudmark Authority® Content Scanning">Section 71.18, “cloudmark – Cloudmark Authority® Content Scanning”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Support for the Cloudmark spam technology
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.cluster.php" title="71.19. cluster – Cluster">Section 71.19, “cluster – Cluster”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Cluster configuration module
          </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
<td>
            <a class="xref" href="cluster.php" title="Chapter 16. Cluster-specific Configuration">Chapter 16, <i>Cluster-specific Configuration</i></a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.commtouch.php" title="71.20. commtouch_ctasd – Commtouch Spam Protection">Section 71.20, “commtouch_ctasd – Commtouch Spam Protection”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Spam protection technology
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.compress_spool.php" title="71.21. compress_spool – Dynamic Spool Compression">Section 71.21, “compress_spool – Dynamic Spool Compression”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Compress large messages before writing them to disk
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.conntrol.php" title="71.22. conntrol – Fine-Grained Connection Control">Section 71.22, “conntrol – Fine-Grained Connection Control”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Control how inbound connections are established
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.csapi.php" title="71.23. csapi – Symantec CSAPI Antivirus Support">Section 71.23, “csapi – Symantec CSAPI Antivirus Support”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Integration for Symantec content scanners
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.custom_bounce_logger.php" title="71.24. custom_bounce_logger – Custom Bounce Logging">Section 71.24, “custom_bounce_logger – Custom Bounce Logging”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Append a "User_String" to the end of each bounce record
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="modules.bounce_logger.php" title="71.13. bounce_logger – Momentum-Style Bounce Logging">Section 71.13, “bounce_logger – Momentum-Style Bounce Logging”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.custom_logger.php" title="71.25. custom_logger – User-defined Logging">Section 71.25, “custom_logger – User-defined Logging”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Create custom logs
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.delay_dsn.php" title="71.26. delay_dsn – Delay DSN Generation">Section 71.26, “delay_dsn – Delay DSN Generation”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Configure and send delay DSNs
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.domainkeys.php" title="71.28. domainkeys – Yahoo! DomainKeys">dk_sign</a>
          </td>
<td>
            4.0
          </td>
<td>
            Attach domain keys signatures to outbound mail
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.domainkeys.php" title="71.28. domainkeys – Yahoo! DomainKeys">dk_validate</a>
          </td>
<td>
            4.0
          </td>
<td>
            Validate inbound mail checking domain keys signatures
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.opendkim.php" title="71.50. opendkim – Open Source DKIM">dkim_sign</a>
          </td>
<td>
            4.0
          </td>
<td>
            Attach DKIM signatures to outbound mail
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.opendkim.php" title="71.50. opendkim – Open Source DKIM">dkim_validate</a>
          </td>
<td>
            4.0
          </td>
<td>
            Validate inbound mail checking DKIM signatures
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.dnsbuf.php" title="71.27. dnsbuf – Dynamically Set the DNS UDP Buffer Size">Section 71.27, “dnsbuf – Dynamically Set the DNS UDP Buffer Size”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Manipulate DNS buffer sizes on demand
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">Section 71.29, “ds_core - Datasource Query Core”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Provide modular data access and caching for use by other
            modules
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.ec_logger.php" title="71.30. EC_logger – Momentum-Style Logging">Section 71.30, “EC_logger – Momentum-Style Logging”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Log the status of messages
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.eleven.php" title="71.31. eleven – Eleven eXpurgate Content Scanning">Section 71.31, “eleven – Eleven eXpurgate Content Scanning”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            This module implements the eleven spam filter and
            categorization service
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.exim_logger.php" title="71.34. exim_logger – Exim Logging">Section 71.34, “exim_logger – Exim Logging”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Support for Exim style logs
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.fbl.php" title="71.35. fbl - Feedback Loop">Section 71.35, “fbl - Feedback Loop”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Manage feedback loop services
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.host_fingerprint.php" title="71.36. fingerprint – Host Fingerprinting">Section 71.36, “fingerprint – Host Fingerprinting”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Perform passive OS fingerprinting
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/push.gcm.modules.php#push.modules.gcm" target="_top">gcm</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Use this module to configure Google Cloud messaging
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-push/push.modules.gcm_logger.php" target="_top">gcm_logger</a>
          </td>
<td>
            4.0
          </td>
<td>
            Use this module to log Google Cloud messages
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.compress_spool.php" title="71.21. compress_spool – Dynamic Spool Compression">gzipio</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            gzip compression algorithm
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="modules.compress_spool.php" title="71.21. compress_spool – Dynamic Spool Compression">Section 71.21, “compress_spool – Dynamic Spool Compression”</a>
          </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-rest-injector/rest.configuring.php" target="_top">httpsrv</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            The HTTP server required for using the REST injection API
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.icu.php" title="71.39. icu – ICU">Section 71.39, “icu – ICU”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Unicode support
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.ilf_logger.php" title="71.40. ilf_logger – Incremental License Fee Logging">Section 71.40, “ilf_logger – Incremental License Fee Logging”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Use this module if you have usage-based licenses
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.inbound_audit.php" title="71.41. inbound_audit – Inbound traffic analytics">Section 71.41, “inbound_audit – Inbound traffic analytics”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Provide analytics on sending IPs
          </td>
<td> </td>
<td>
             ✓
          </td>
<td>
             ✓
          </td>
<td>
            <a class="xref" href="modules.outbound_audit.php" title="71.51. outbound_audit – Outbound traffic analytics">Section 71.51, “outbound_audit – Outbound traffic analytics”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.ipv6_lookup.php" title="71.42. ipv6_lookup – Multi-address-family MX Records">Section 71.42, “ipv6_lookup – Multi-address-family MX Records”</a>
          </td>
<td>
            4.2
          </td>
<td>
            This module supports multi-address-family MX records,
            enabling A record lookups for IPv6 addresses
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.jlog.php" title="71.43. jlog – jlog-Formatted Logging">Section 71.43, “jlog – jlog-Formatted Logging”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Create jlog formatted logs
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.live.bounce.updates.php" title="71.44. Live Bounce Updates – Live Bounce Updates Service">Section 71.44, “Live Bounce Updates – Live Bounce Updates Service”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Canonicalizes bounce messages into a number of categories
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.mail_loop.php" title="71.45. mail_loop – Mail Loop Detection">Section 71.45, “mail_loop – Mail Loop Detection”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Automatic suppression of potential mail loops
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.maildir.php" title="71.46. maildir – Maildir Delivery Support">Section 71.46, “maildir – Maildir Delivery Support”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Store messages in maildir format as specified by qmail
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.mm7.mms_bounce_logger.php" target="_top">mm7</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Enable MM7
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.mm7.php" target="_top">mm7_serv</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Enable the MM7 Value Added Service Provider
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.mm7.mms_bounce_logger.php" target="_top">mms_bounce_logger</a>
          </td>
<td>
            4.0
          </td>
<td>
            Enable MMS bounce logging
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.mm7.mms_logger.php" target="_top">mms_logger</a>
          </td>
<td>
            4.0
          </td>
<td>
            Enable MMS logging
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.msgc.php" title="71.47. msgc – Message Systems Group Communication">msgc_client</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            The client component of MSGC
          </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.msgc.php" title="71.47. msgc – Message Systems Group Communication">msgc_server</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            The server component of MSGC
          </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.mxip.php" title="71.49. mxip - IP Addresses In MX Records">Section 71.49, “mxip - IP Addresses In MX Records”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Enable Momentum to deliver to domains with a textual IP
            address
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.opendkim.php" title="71.50. opendkim – Open Source DKIM">Section 71.50, “opendkim – Open Source DKIM”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Validate/sign mail using DKIM signatures
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.outbound_audit.php" title="71.51. outbound_audit – Outbound traffic analytics">Section 71.51, “outbound_audit – Outbound traffic analytics”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Provides time-series analytics on the behavior of receiving
            domains
          </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.outbound_smtp_auth.php" title="71.52. outbound_smtp_auth">Section 71.52, “outbound_smtp_auth”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Enables users to specify authentication parameters for a
            given set of messages
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.persistio.php" title="71.53. persist_io – Persistent IO Wrapper">Section 71.53, “persist_io – Persistent IO Wrapper”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Provides a non-volatile cache wrapper for any other IO
            wrapper
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.pipeio.php" title="71.54. pipe_io – Pipe IO Wrapper">Section 71.54, “pipe_io – Pipe IO Wrapper”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Provides ability to writing content via an arbitrary program
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.pipe_transport.php" title="71.55. pipe_transport – Module">Section 71.55, “pipe_transport – Module”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Pipe messages to a local program
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.postfix_logger.php" title="71.56. postfix_logger – Postfix Logging">Section 71.56, “postfix_logger – Postfix Logging”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Log in Postfix format
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.reception_timing.php" title="71.57. reception_timing - Reception Timing Modules">Section 71.57, “reception_timing - Reception Timing Modules”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Track how long it takes to receive or reject messages over
            SMTP
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td>
            <a class="xref" href="modules.chunk_logger.php" title="71.15. chunk_logger Module">Section 71.15, “chunk_logger Module”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.response_transcode.php" title="71.58. response_transcode – Module">Section 71.58, “response_transcode – Module”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Work around broken remote servers
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-rest-injector/rest.configuring.php" target="_top">restinjector</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Activate the REST injection API
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.sched.php" title="71.59. sched – The Schedule Module">Section 71.59, “sched – The Schedule Module”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Schedule tasks to be run from the console
          </td>
<td> </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">Section 71.29, “ds_core - Datasource Query Core”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">Section 71.60, “scriptlet - Lua Policy Scripts”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Enable scriptlets for enforcing policy
          </td>
<td> </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="modules.alerting.php" title="71.4. alerting – Send Alerting Emails">Section 71.4, “alerting – Send Alerting Emails”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.securecreds.php" title="71.61. securecreds – Password Encryption/Credential Retrieval">Section 71.61, “securecreds – Password Encryption/Credential Retrieval”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Use encrypted credentials throughout Momentum
          </td>
<td> </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="executable.credmgr.php" title="credmgr"><span class="refentrytitle">credmgr</span></a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.seedlist.php" title="71.62. seedlist – Seedlist Integration">Section 71.62, “seedlist – Seedlist Integration”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Deliverability monitoring service
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.spf.php" title="71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)">senderid</a>
          </td>
<td>
            4.0
          </td>
<td>
            Use Sender Policy Framework (spf_v2)
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td>
            <a class="xref" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">Section 71.60, “scriptlet - Lua Policy Scripts”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.sendmail_logger.php" title="71.63. sendmail_logger – Sendmail Logging">Section 71.63, “sendmail_logger – Sendmail Logging”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Create Sendmail formatted logs
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/momentum.mobility.php#modules.mobility.smpp_logger" target="_top">smpp</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Enable SMPP
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/modules.mobility.smpp_bounce_logger.php" target="_top">smpp_bounce_logger</a>
          </td>
<td>
            4.0
          </td>
<td>
            Enable SMPP bounce logging
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.configuration.smpp.php" target="_top">smpp_logger</a>
          </td>
<td>
            4.0
          </td>
<td>
            Log SMPP events
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.smtp_auth_proxy.php" title="71.64. smtp_auth_proxy - SMTP Authentication Proxy">Section 71.64, “smtp_auth_proxy - SMTP Authentication Proxy”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Allow edge SMTP servers to forward SMTP AUTH requests to
            SMTP servers
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.smtp_cbv.php" title="71.65. smtp_cbv – SMTP Callback Verification">Section 71.65, “smtp_cbv – SMTP Callback Verification”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Perform SMTP Callback Verification
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.smtp_rcptto_proxy.php" title="71.66. smtp_rcptto_proxy - SMTP Recipient-To Proxy">Section 71.66, “smtp_rcptto_proxy - SMTP Recipient-To Proxy”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Validate a Lua recipient by doing an SMTP call-forward
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.spf.php" title="71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)">spf_macros</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Generic macro service for SPF
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.spf.php" title="71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)">spf_v1</a>
          </td>
<td>
            4.0
          </td>
<td>
            Use Sender Policy Framework
          </td>
<td> </td>
<td> </td>
<td> </td>
<td>
            <a class="xref" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">Section 71.60, “scriptlet - Lua Policy Scripts”</a>
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.static_routes.php" title="71.69. static-routes - Static Routes">Section 71.69, “static-routes - Static Routes”</a>
          </td>
<td>
            4.2
          </td>
<td>
            Route traffic to a given server by IP address and port
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.suppress_spool.php" title="71.70. suppress_spool – Deferred Message Spooling">Section 71.70, “suppress_spool – Deferred Message Spooling”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Defer spool attempts
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.syslog_io.php" title="71.71. syslog_io – The syslog_io Module">Section 71.71, “syslog_io – The syslog_io Module”</a>
            (<span class="emphasis"><em>singleton</em></span>)
          </td>
<td>
            4.0
          </td>
<td>
            Use the syslog wrapper to write entries to the log
          </td>
<td>
             ✓
          </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="tls_macros.php" title="71.72. tls_macros – TLS-related Logging">Section 71.72, “tls_macros – TLS-related Logging”</a>
          </td>
<td>
            4.0
          </td>
<td>
            Provide several macros supporting custom logging of
            TLS-related data
          </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td>
            <a class="xref" href="modules.url_ripper.php" title="71.73. url_ripper – URL Extraction">Section 71.73, “url_ripper – URL Extraction”</a>
          </td>
<td>
            4.0
          </td>
<td>
            A toolkit for DNS-based content correlation
          </td>
<td> </td>
<td> </td>
<td>
             ✓
          </td>
<td> </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.summary_table.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="config.options.summary.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 64. Lua Functions Summary </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 66. Configuration Options Summary</td>
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
