<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 73. Non-Module-Specific Console Commands</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="conf.ref.xclient.php" title="xclient">
<link rel="next" href="console_commands.active.php" title="active">
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
<tr><th colspan="3" align="center">Chapter 73. Non-Module-Specific Console Commands</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.xclient.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="console_commands.active.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="console.cmds.ref"></a>Chapter 73. Non-Module-Specific Console Commands</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
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
</dl>
</div>
<p>
    This section documents all the non-module-specific console commands.
    Module-specific console commands are documented with their module.
    See <a class="xref" href="modules.php" title="Chapter 71. Modules Reference">Chapter 71, <i>Modules Reference</i></a>.
  </p>
<p>
    Preceding a command with <code class="literal">xml</code> will output the
    results in XML format.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.xclient.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="console_commands.active.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">xclient </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> active</td>
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
