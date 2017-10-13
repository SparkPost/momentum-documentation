<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 71. Modules Reference</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="lua.ref.xml.parsexml.php" title="xml.parsexml">
<link rel="next" href="modules.ac_auth.php" title="71.2. ac_auth – Authentication Handler">
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
<tr><th colspan="3" align="center">Chapter 71. Modules Reference</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.xml.parsexml.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.ac_auth.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="modules"></a>Chapter 71. Modules Reference</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
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
</dl>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="idp12311472"></a>71.1. Introduction</h2></div></div></div>
<p>
      This chapter includes module reference material that is specific
      to Momentum 4.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.xml.parsexml.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.ac_auth.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">xml.parsexml </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.2. ac_auth – Authentication Handler</td>
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
