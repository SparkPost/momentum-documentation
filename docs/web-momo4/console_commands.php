<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 67. Console Commands Summary</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">
<link rel="next" href="exe.php" title="Chapter 68. Executable Command Summary">
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
<tr><th colspan="3" align="center">Chapter 67. Console Commands Summary</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="config.options.summary.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="exe.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="console_commands"></a>Chapter 67. Console Commands Summary</h2></div></div></div>
<p>
    This table lists all console commands alphabetically giving a brief
    description. Click the command name to see detailed information. A
    module name appears in the <code class="literal">Module</code> column for
    commands that are module-specific. For module-specific commands to
    work, you must have the module loaded.
  </p>
<div class="table">
<a name="All-console-table"></a><p class="title"><b>Table 67.1. All console commands</b></p>
<div class="table-contents"><table summary="All console commands" border="1">
<colgroup>
<col>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
            Command/Description
          </th>
<th>
            Version
          </th>
<th>
            Module
          </th>
<th>
            Class
          </th>
</tr></thead>
<tbody>
<tr>
<td>
            <a class="xref" href="console_commands.pager.php" title="\pager"><span class="refentrytitle">\pager</span></a> – Page output
            of long console commands in the console
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.active.php" title="active"><span class="refentrytitle">active</span></a> – Show
            domains with active queue size bigger than threshold
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue size
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php#modules.adaptive.console" title="71.3.6. Console Commands">adaptive
            list</a> – Display the value of shaping parameters
          </td>
<td>
            4.0
          </td>
<td>
            adaptive
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php#modules.adaptive.console" title="71.3.6. Console Commands">adaptive
            override</a> – Override a suspension
          </td>
<td>
            4.0
          </td>
<td>
            adaptive
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php#modules.adaptive.console" title="71.3.6. Console Commands">adaptive
            reset</a> – Clear the values of the shaping
            parameters
          </td>
<td>
            4.0
          </td>
<td>
            adaptive
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php#modules.adaptive.console" title="71.3.6. Console Commands">adaptive
            rules</a> – Display the adaptive rules that are in
            effect for the specified domain/binding pair
          </td>
<td>
            4.0
          </td>
<td>
            adaptive
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php#modules.adaptive.console" title="71.3.6. Console Commands">adaptive
            suspensions</a> – Summarize the suspensions that
            are currently in effect
          </td>
<td>
            4.0
          </td>
<td>
            adaptive
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.adaptive.php#modules.adaptive.console" title="71.3.6. Console Commands">adaptive
            warmup</a> – Display the age of bindings from the
            perspective of the IP Warmup component
          </td>
<td>
            4.0
          </td>
<td>
            adaptive
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.authz_id.php" title="authz id"><span class="refentrytitle">authz id</span></a> – Display
            the id of the current user
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.authz_roles_list.php" title="authz roles list"><span class="refentrytitle">authz roles list</span></a> –
            Display the currently defined roles
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.beik.php#modules.beik.console" title="71.10.4. Console Commands">beik reload</a>
            – Reload the beik module
          </td>
<td>
            4.0
          </td>
<td>
            beik
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.binding_active.php" title="binding active"><span class="refentrytitle">binding active</span></a> –
            Show domains with active queue size bigger than threshold on
            a specified binding
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue size
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.binding_delayed.php" title="binding delayed"><span class="refentrytitle">binding delayed</span></a> –
            Show domains with delayed queue size bigger than threshold
            on a specified binding
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue size
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.binding_fail_domain_quiet.php" title="binding fail domain quiet"><span class="refentrytitle">binding fail domain quiet</span></a>
            – Fail messages for a domain on a binding without
            generating bounces
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue admin
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.binding_fail_domain.php" title="binding fail domain"><span class="refentrytitle">binding fail domain</span></a>
            – Fail messages for a domain on a binding with a
            bounce message
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue admin
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.binding_flush_domain.php" title="binding flush domain"><span class="refentrytitle">binding flush domain</span></a>
            – Perform delivery attempt on delayed queue of a
            domain on a binding
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue admin
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.binding_summary.php" title="binding summary"><span class="refentrytitle">binding summary</span></a> –
            Show binding statistics
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.bounce_classifier_override.php#modules.bounce_classifier_override.console" title="71.12.2. Console Commands">bounce_classifier_override
            reload</a> – Reload the bounce classification
            overrides
          </td>
<td>
            4.0
          </td>
<td>
            bounce_classifier_override
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.bounce_classifier_override.php#modules.bounce_classifier_override.console" title="71.12.2. Console Commands">bounce_classifier_override
            test</a> – Test the classification of an SMTP reply
          </td>
<td>
            4.0
          </td>
<td>
            bounce_classifier_override
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.bounce_logger.php#modules.bounce_logger.console" title="71.13.4. Console Commands">bounce_logger:instance_name
            reopen logs</a> – Reopen the log files
          </td>
<td>
            4.0
          </td>
<td>
            bounce_logger
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.cache_list.php" title="cache list"><span class="refentrytitle">cache list</span></a> – List
            all caches along with their associated attributes
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.cache_stat.php" title="cache stat"><span class="refentrytitle">cache stat</span></a> – Show
            detailed cache statistics for the specified cache
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.cache_stats.php" title="cache stats"><span class="refentrytitle">cache stats</span></a> – Show
            cache statistics
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cidrdb.php#modules.cidrdb.console" title="71.16.4. Console Commands">cidrdb list</a>
            – List configured CIDR databases
          </td>
<td>
            4.0
          </td>
<td>
            cidrdb
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cidrdb.php#modules.cidrdb.console" title="71.16.4. Console Commands">cidrdb reload</a>
            – Reload a cidrdb list
          </td>
<td>
            4.0
          </td>
<td>
            cidrdb
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cloudmark.php#modules.cloudmark.console" title="71.18.5. Console Commands">cloudmark
            version</a> – Output the Cloudmark version
          </td>
<td>
            4.0
          </td>
<td>
            cloudmark
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster abort</a>
            – Abort the specified job
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster arp
            show</a> – Resolve the MAC addresses of the cluster
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster duravip
            announce view</a> – Announce a view update using
            the current local view
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster duravip
            debug</a> – Turn <span class="trademark">DuraVIP</span>™
            debugging on or off
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster duravip
            move</a> – Move a binding from one node to another
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster duravip
            show</a> – Show the current state of
            <span class="trademark">DuraVIP</span>™ bindings
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster duravip show
            tables</a> – Display the
            <span class="trademark">DuraVIP</span>™ state tables in XML format
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster help</a>
            – Display the cluster console commands
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster info</a>
            – Display the current operating status and parameters
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster
            membership</a> – Display the current cluster nodes
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster
            nodeaddr</a> – Show the cluster protocol service
            address
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster
            nodename</a> – Show the name of the local node
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster reset</a>
            – Reset the node cluster membership
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster shared
            list</a> – This command displays the currently
            managed objects
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster shared
            show</a> – Display shared objects
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">cluster show
            logs</a> – Show the size, name and location of the
            cluster logs
          </td>
<td>
            4.0
          </td>
<td>
            cluster
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.commtouch.php#modules.commtouch.console" title="71.20.4. Console Commands">commtouch_ctasd:instance_name
            pending</a> – Output the number of pending jobs
          </td>
<td>
            4.0
          </td>
<td>
            commtouch_ctasd
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config begin from
            scratch</a> – Begin a transaction from scratch
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config begin</a>
            – Begin a transaction
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config commit</a>
            – Commit a transaction
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config eval</a>
            – Determine configuration value
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config get</a>
            – Get configuration setting
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config locate</a>
            – Locate a specific scope
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config reload</a>
            – Reload configuration options from file
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config replay</a>
            – Show changes in a transaction
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config
            rollback</a> – Rollback a transaction
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config set</a>
            – Set configuration option
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config show</a>
            – Show a specific scope
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config
            showrecurse</a> – Show a specific scope and its
            child scopes
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config unset</a>
            – Unset configuration option
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.config.php" title="config">config
            writeback</a> – Write configuration changes to
            ecelerity.conf
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.count.php" title="count"><span class="refentrytitle">count</span></a> – Count open
            connections
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            connections
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.counter.php" title="counter">counter add</a>
            – Add the specified amount to a counter
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            policy
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.counter.php" title="counter">counter help</a>
            – Display help for the counter command
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            policy
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.counter.php" title="counter">counter
            increment</a> – Increment a counter
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            policy
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.counter.php" title="counter">counter list</a>
            – List all counters counter
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            policy
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.counter.php" title="counter">counter
            reset</a> – Reset a counter to zero
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            policy
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.counter.php" title="counter">counter
            unlink</a> – Unlink a counter
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            policy
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.delay_dsn.php#modules.delay_dsn.console" title="71.26.2. Console Commands">delay_dsn:instance_name
            show pending events</a> – List all pending events
          </td>
<td>
            4.0
          </td>
<td>
            delay_dsn
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.delayed.php" title="delayed"><span class="refentrytitle">delayed</span></a> – Show
            domains with delayed queue size bigger than threshold
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue admin
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.dig.php" title="dig"><span class="refentrytitle">dig</span></a> – Submit a
            domain for dns MX query
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            dns
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.domainkeys.php#modules.domainkeys.console" title="71.28.5. Console Commands">dk_sign:instance_name
            flush keycache</a> – Flush all entries from the
            keycache
          </td>
<td>
            4.0
          </td>
<td>
            domainkeys
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.domainkeys.php#modules.domainkeys.console" title="71.28.5. Console Commands">dk_sign:instance_name
            stats</a> – Display statistics relating to domain
            key signing
          </td>
<td>
            4.0
          </td>
<td>
            domainkeys
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.dns_cache.php" title="dns_cache">dns_cache
            lookup</a> – Look up a query in the DNS cache
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            dns
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.dns_cache.php" title="dns_cache">dns_cache
            refcnts</a> – Show the references in the DNS cache
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            dns
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.dns_cache.php" title="dns_cache">dns_cache
            stats</a> – Show summary stats for the DNS cache
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            dns
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.dns_cache.php" title="dns_cache">dns_cache
            submit</a> – Submit a DNS query
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            dns
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.dnsbuf.php#modules.dnsbuf.console" title="71.27.2. dnsbuf Management Using Console Commands">dnsbuf
            interval</a> – Change how often setsockopt()
            operations are performed
          </td>
<td>
            4.2
          </td>
<td>
            dnsbuf
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.dnsbuf.php#modules.dnsbuf.console" title="71.27.2. dnsbuf Management Using Console Commands">dnsbuf
            rcvbuf_size</a> – Change the rcvbuf_size value on
            the fly
          </td>
<td>
            4.2
          </td>
<td>
            dnsbuf
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.dnsbuf.php#modules.dnsbuf.console" title="71.27.2. dnsbuf Management Using Console Commands">dnsbuf
            sndbuf_size</a> – Change the sndbuf_size value on
            the fly
          </td>
<td>
            4.2
          </td>
<td>
            dnsbuf
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.dnsbuf.php#modules.dnsbuf.console" title="71.27.2. dnsbuf Management Using Console Commands">dnsbuf verify</a>
            – Query active sockets for current buffer sizes and
            report the results
          </td>
<td>
            4.2
          </td>
<td>
            dnsbuf
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.domain_all.php" title="domain all"><span class="refentrytitle">domain all</span></a> – Show
            statistics for all domains
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.domain.php" title="domain"><span class="refentrytitle">domain</span></a> – Show
            domain statistics
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.ds_core.php#modules.ds_core.console" title="71.29.2.2. ds_core Management Using Console Commands">ds_core flush
            cache_name</a> – Flush a specific cache
          </td>
<td>
            4.0
          </td>
<td>
            ds_core
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.ds_core.php#modules.ds_core.console" title="71.29.2.2. ds_core Management Using Console Commands">ds_core stats</a>
            – Print stats for each cache
          </td>
<td>
            4.0
          </td>
<td>
            ds_core
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.ds_core.php#modules.ds_ldap.console" title="71.29.2.1.3.2. Console Commands">ds_ldap flush
            connection cache</a> – Remove all entries from the
            connection cache
          </td>
<td>
            4.0
          </td>
<td>
            ds_ldap
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.ds_core.php#modules.ds_ldap.console" title="71.29.2.1.3.2. Console Commands">ds_ldap show
            connection cache stats</a> – Output statistics
            relating to the connection cache
          </td>
<td>
            4.0
          </td>
<td>
            ds_ldap
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.ec_logger.php#modules.ec_logger.console" title="71.30.4. Console Commands">ec_logger:instance_name
            help</a> – Display the available commands
          </td>
<td>
            4.0
          </td>
<td>
            ec_logger
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.ec_logger.php#modules.ec_logger.console" title="71.30.4. Console Commands">ec_logger:instance_name
            reopen logs</a> – Close and reopen the logs
          </td>
<td>
            4.0
          </td>
<td>
            ec_logger
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.fail_domain_quiet.php" title="fail domain quiet"><span class="refentrytitle">fail domain quiet</span></a> –
            Fail messages for a domain without generating bounces
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.fail_domain.php" title="fail domain"><span class="refentrytitle">fail domain</span></a> – Fail
            messages for a domain with a bounce message
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.fingerprint_cache_summary.php" title="fingerprint cache summary"><span class="refentrytitle">fingerprint cache summary</span></a>
            – Display the current cache size
          </td>
<td>
            4.0
          </td>
<td>
            fingerprint
          </td>
<td>
            policy
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.fingerprint_rejection_summary.php" title="fingerprint rejection summary"><span class="refentrytitle">fingerprint rejection summary</span></a>
            – Display details related to the current inbound
            connection
          </td>
<td>
            4.0
          </td>
<td>
            fingerprint
          </td>
<td>
            policy
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.flush_domain.php" title="flush domain"><span class="refentrytitle">flush domain</span></a> –
            Perform delivery attempt on delayed queue of a domain
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue admin
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.help.php" title="help"><span class="refentrytitle">help</span></a> – Show help
            information for console commands
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.inbound_audit.php#modules.inbound_audit.console" title="71.41.3. Console Commands">inbound_audit
            add</a> – Add a value to a CIDR in a named series
          </td>
<td>
            4.0
          </td>
<td>
            inbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.inbound_audit.php#modules.inbound_audit.console" title="71.41.3. Console Commands">inbound_audit
            count_cidr</a> – Count a CIDR in a named series
          </td>
<td>
            4.0
          </td>
<td>
            inbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.inbound_audit.php#modules.inbound_audit.console" title="71.41.3. Console Commands">inbound_audit
            delete_ip</a> – Delete an IP from a defined named
            series
          </td>
<td>
            4.0
          </td>
<td>
            inbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.inbound_audit.php#modules.inbound_audit.console" title="71.41.3. Console Commands">inbound_audit
            help</a> – Display the available commands
          </td>
<td>
            4.0
          </td>
<td>
            inbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.inbound_audit.php#modules.inbound_audit.console" title="71.41.3. Console Commands">inbound_audit
            load</a> – Load a series from a file
          </td>
<td>
            4.0
          </td>
<td>
            inbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.inbound_audit.php#modules.inbound_audit.console" title="71.41.3. Console Commands">inbound_audit
            show all</a> – Display verbose statistics for all
            domains as a CSV list
          </td>
<td>
            4.0
          </td>
<td>
            inbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.inbound_audit.php#modules.inbound_audit.console" title="71.41.3. Console Commands">inbound_audit
            show ip</a> --&gt; – Dump all collected time-series
            data for the specified IP/netblock
          </td>
<td>
            4.0
          </td>
<td>
            inbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.inbound_audit.php#modules.inbound_audit.console" title="71.41.3. Console Commands">inbound_audit
            subtract</a> – Subtract a value from a CIDR in a
            named series
          </td>
<td>
            4.0
          </td>
<td>
            inbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.mailq.php" title="mailq"><span class="refentrytitle">mailq</span></a> – Show the
            status of the mail queues
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.memory.php" title="memory"><span class="refentrytitle">memory</span></a> – Report
            detailed memory usage
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.message_details.php" title="message details"><span class="refentrytitle">message details</span></a> –
            Show detailed message information
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            message
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.message_fail_quiet.php" title="message fail quiet"><span class="refentrytitle">message fail quiet</span></a>
            – Fail a message and do not create a non-delivery
            receipt (NDR)
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            message
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.message_fail.php" title="message fail"><span class="refentrytitle">message fail</span></a> – Fail
            a message
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            message
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.message_retry.php" title="message retry"><span class="refentrytitle">message retry</span></a> –
            Perform an immediate delivery attempt on a message
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            message
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.module.php" title="module">module hooks</a>
            – Manage loaded module hooks
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.module.php" title="module">module list</a>
            – Show loaded modules
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.outbound_audit.php#modules.outbound_audit.console" title="71.51.2. Console Commands">outbound_audit:instance_name
            clear all</a> – Zero-out all statistics
          </td>
<td>
            4.0
          </td>
<td>
            outbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.outbound_audit.php#modules.outbound_audit.console" title="71.51.2. Console Commands">outbound_audit:instance_name
            clear domain</a> – Zero-out a domain's statistics
          </td>
<td>
            4.0
          </td>
<td>
            outbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.outbound_audit.php#modules.outbound_audit.console" title="71.51.2. Console Commands">outbound_audit:instance_name
            domain_list</a> – Runtime addition/deletion of a
            domain in the monitoring list
          </td>
<td>
            4.0
          </td>
<td>
            outbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.outbound_audit.php#modules.outbound_audit.console" title="71.51.2. Console Commands">outbound_audit:instance_name
            show all</a> – Dump all collected time-series data
            for all collected domains
          </td>
<td>
            4.0
          </td>
<td>
            outbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.outbound_audit.php#modules.outbound_audit.console" title="71.51.2. Console Commands">outbound_audit:instance_name
            show domain</a> – Dump all collected time-series
            data for the specified domain
          </td>
<td>
            4.0
          </td>
<td>
            outbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.outbound_audit.php#modules.outbound_audit.console" title="71.51.2. Console Commands">outbound_audit:instance_name
            show domains</a> – List the names of all domains
            which have collected data
          </td>
<td>
            4.0
          </td>
<td>
            outbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.outbound_audit.php#modules.outbound_audit.console" title="71.51.2. Console Commands">outbound_audit:instance_name
            show global</a> – Show the global (aggregated)
            time-series data
          </td>
<td>
            4.0
          </td>
<td>
            outbound_audit
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.paniclog.php" title="paniclog"><span class="refentrytitle">paniclog</span></a> – Show
            last several entries written to paniclog
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.pid.php" title="pid"><span class="refentrytitle">pid</span></a> – Show process
            id of Momentum
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.rebind.php" title="rebind"><span class="refentrytitle">rebind</span></a> – Rebind the
            messages in a binding or domain
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue admin
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.refresh_domain.php" title="refresh domain"><span class="refentrytitle">refresh domain</span></a> –
            Refresh the DNS information for a domain
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            dns
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.reopen_logs.php" title="reopen logs"><span class="refentrytitle">reopen logs</span></a> – Close
            and open log files
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.reroute_queue.php" title="reroute queue"><span class="refentrytitle">reroute queue</span></a> –
            Move messages from queues of one domain to queues of the
            other
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue admin
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.sched.php#modules.sched.console" title="71.59.1.1. sched Management Using Console Commands">sched at</a>
            – Create a recurrent command that repeats at the
            specified interval
          </td>
<td>
            4.0
          </td>
<td>
            sched
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.sched.php#modules.sched.console" title="71.59.1.1. sched Management Using Console Commands">sched delete</a>
            – Delete a scheduled job
          </td>
<td>
            4.0
          </td>
<td>
            sched
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.sched.php#modules.sched.console" title="71.59.1.1. sched Management Using Console Commands">sched every</a>
            – Create a recurrent command that repeats at the
            specified interval
          </td>
<td>
            4.0
          </td>
<td>
            sched
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.sched.php#modules.sched.console" title="71.59.1.1. sched Management Using Console Commands">sched in</a>
            – Run a command at the specified number of seconds
            from the current time
          </td>
<td>
            4.0
          </td>
<td>
            sched
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="modules.sched.php#modules.sched.console" title="71.59.1.1. sched Management Using Console Commands">sched list</a>
            – List any scheduled tasks
          </td>
<td>
            4.0
          </td>
<td>
            sched
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.show_inbound.php" title="show inbound"><span class="refentrytitle">show inbound</span></a> – Show
            all inbound connections
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            connections
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.show_outbound.php" title="show outbound"><span class="refentrytitle">show outbound</span></a> –
            Show all outbound connections
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            connections
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.showqueue.php" title="showqueue"><span class="refentrytitle">showqueue</span></a> – Show
            queue information
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            queue admin
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.shutdown.php" title="shutdown"><span class="refentrytitle">shutdown</span></a> – Shutdown
            Momentum
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.signing_stats_reset.php" title="signing_stats reset"><span class="refentrytitle">signing_stats reset</span></a>
            – Reset signing stats
          </td>
<td>
            4.0
          </td>
<td>
            domainkeys or opendkim
          </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.signing_stats.php" title="signing_stats"><span class="refentrytitle">signing_stats</span></a> –
            Show DK/DKIM signing stats
          </td>
<td>
            4.0
          </td>
<td>
            domainkeys or opendkim
          </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.sp_async.php" title="sp_async"><span class="refentrytitle">sp_async</span></a> – Access
            the asynchronous I/O subsystem
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.spool_import_poll.php" title="spool import_poll"><span class="refentrytitle">spool import_poll</span></a> –
            Check the status of a spool that is being imported
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.spool_import.php" title="spool import"><span class="refentrytitle">spool import</span></a> –
            Import an alternative spool
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            resource
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.spool_in.php" title="spool_in"><span class="refentrytitle">spool_in</span></a> – Read a
            message from the spool to the mail queue
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            message
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.summary_reset.php" title="summary reset"><span class="refentrytitle">summary reset</span></a> –
            Reset summary statistics
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.summary.php" title="summary"><span class="refentrytitle">summary</span></a> – Show
            global metrics
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.sysinfo.php" title="sysinfo"><span class="refentrytitle">sysinfo</span></a> – Show
            system information
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.threads.php" title="threads">threads cpu
            queue</a> – Display summary statistics for the CPU
            thread pools
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.threads.php" title="threads">threads io
            queue</a> – Display summary statistics for the IO
            thread pools
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.threads.php" title="threads">threads
            stats</a> – Display summary statistics for thread
            pools
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.tls.php" title="tls">tls flush cache</a>
            – Flush the TLS cache
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            tls
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.tls.php" title="tls">tls rekey</a>
            – Remove the temporary RSA key
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            tls
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.tls.php" title="tls">tls show cache</a>
            – Show the TLS cache
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            tls
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.trace_smtp.php" title="trace smtp">trace smtp
            add</a> – Add an SMTP trace
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.trace_smtp.php" title="trace smtp">trace smtp
            list</a> – List smtp traces
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="link" href="console_commands.trace_smtp.php" title="trace smtp">trace smtp
            remove</a> – Remove an SMTP trace
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.unlink_stats.php" title="unlink stats"><span class="refentrytitle">unlink stats</span></a> – Show
            statistics of removing messages from the disk
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            stats
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.version.php" title="version"><span class="refentrytitle">version</span></a> – Show
            version information of Momentum
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="xref" href="console_commands.write_config.php" title="write config"><span class="refentrytitle">write config</span></a> –
            Display current running configuration
          </td>
<td>
            4.0
          </td>
<td> </td>
<td>
            config
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
<a accesskey="p" href="config.options.summary.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="exe.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 66. Configuration Options Summary </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 68. Executable Command Summary</td>
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
