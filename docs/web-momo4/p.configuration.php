<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Part III. Configuring Momentum</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="index.php" title="Momentum 4 Reference Manual">
<link rel="prev" href="node_remove_analytics.php" title="14.2. Removing an Analytics Node">
<link rel="next" href="conf.overview.php" title="Chapter 15. Configuration Overview">
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
<tr><th colspan="3" align="center">Part III. Configuring Momentum</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="node_remove_analytics.php">Prev</a> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="conf.overview.php">Next</a>
</td>
</tr>
</table></div>
<div class="part">
<div class="titlepage"><div><div><h1 class="title">
<a name="p.configuration"></a>Part III. Configuring Momentum</h1></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
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
</dl>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="node_remove_analytics.php">Prev</a> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right"> <a accesskey="n" href="conf.overview.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">14.2. Removing an Analytics Node </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 15. Configuration Overview</td>
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
