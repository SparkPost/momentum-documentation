<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Momentum 4 Reference Manual</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="description" content="This book documents Momentum 4. Document generated on:">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
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
    <div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Momentum 4 Reference Manual</th></tr></table></div>
<div class="list-of-tables">
<p><b>List of Tables</b></p>
<dl>
<dt>5.1. <a href="hardware.config.php#single_node_lab_hw_reqs">Hardware Requirements</a>
</dt>
<dt>5.2. <a href="hardware.config.php#single_node_lab_storage_array">Hardware Deployment - Storage Array Configuration</a>
</dt>
<dt>5.3. <a href="production.config.php#enterprise_basic_performance_ratings">Enterprise Basic - Performance Ratings</a>
</dt>
<dt>5.4. <a href="production.config.php#enterprise_basic_cluster_hw_reqs">Enterprise Basic - Hardware Requirements</a>
</dt>
<dt>5.5. <a href="production.config.php#enterprise_basic_cluster_storage_array">Enterprise Basic - Storage Array Configuration</a>
</dt>
<dt>5.6. <a href="production.config.php#enterprise_standard_performance_ratings">Enterprise Standard - Performance Ratings</a>
</dt>
<dt>5.7. <a href="production.config.php#enterprise_standard_cluster_hw_reqs">Enterprise Standard - Hardware Requirements</a>
</dt>
<dt>5.8. <a href="production.config.php#enterprise_standard_cluster_storage_array">Enterprise Standard - Storage Array Configuration</a>
</dt>
<dt>5.9. <a href="production.config.php#enterprise_plus_performance_ratings">Enterprise Plus - Performance Ratings</a>
</dt>
<dt>5.10. <a href="production.config.php#enterprise_plus_cluster_hw_reqs">Enterprise Plus - Hardware Requirements</a>
</dt>
<dt>5.11. <a href="production.config.php#enterprise_plus_cluster_storage_array">Enterprise Plus - Storage Array Configuration</a>
</dt>
<dt>5.12. <a href="production.config.php#enterprise_scaling_performance_ratings">Enterprise Scaling - Performance Ratings</a>
</dt>
<dt>5.13. <a href="production.config.php#enterprise_scaling_platform_node_cluster_hw_reqs">Enterprise Scaling - Hardware Requirements for Platform Node</a>
</dt>
<dt>5.14. <a href="production.config.php#enterprise_scaling_platform_node_cluster_storage_array">Enterprise Scaling - Storage Array Configuration for Platform Node</a>
</dt>
<dt>5.15. <a href="production.config.php#enterprise_scaling_analytics_node_cluster_hw_reqs">Enterprise Scaling - Hardware Requirements for Analytics Node</a>
</dt>
<dt>5.16. <a href="production.config.php#enterprise_scaling_analytics_node_cluster_storage_array">Enterprise Scaling - Storage Array Configuration for Analytics Node</a>
</dt>
<dt>33.1. <a href="log_monitoring.php#idp3457024">Log Monitoring</a>
</dt>
<dt>35.1. <a href="log_formats.php#log_formats.authentication.record.fields">Authentication Record Fields</a>
</dt>
<dt>35.2. <a href="log_formats.php#log_formats.authorization.record.fields">Authorization Record Fields</a>
</dt>
<dt>35.3. <a href="adaptive.log.format.php#adaptive.log.format.fields">Adaptive Record Fields</a>
</dt>
<dt>35.4. <a href="log_formats.bouncelog.php#log_formats.bounce.record.fields">Bounce Record Fields</a>
</dt>
<dt>35.5. <a href="log_formats.bouncelog.php#log_formats.heartbeat.bounce.fields">Heartbeat record fields</a>
</dt>
<dt>35.6. <a href="log_formats.fbllog.php#log_formats.fbl_logger.fields">fbl Record Fields</a>
</dt>
<dt>35.7. <a href="log_formats.httplog.php#log_formats.http_logger.fields">HTTP Record Fields</a>
</dt>
<dt>35.8. <a href="log_formats.importlog.php#log_formats.import_logger.fields">Import Record Fields</a>
</dt>
<dt>35.9. <a href="log_formats.mainlog.php#log_formats.reception.record.fields">Reception Record Fields</a>
</dt>
<dt>35.10. <a href="log_formats.mainlog.php#log_formats.delivery.record.fields">Delivery Record Fields</a>
</dt>
<dt>35.11. <a href="log_formats.mainlog.php#log_formats.transient.failure.records">Transient Failure Record Fields</a>
</dt>
<dt>35.12. <a href="log_formats.mainlog.php#log_formats.permanent.failure.record.fields">Permanent Failure Record Fields</a>
</dt>
<dt>35.13. <a href="log_formats.mainlog.php#log_formats.heartbeat.main.fields">Heartbeat Record Fields</a>
</dt>
<dt>35.14. <a href="log_formats.paniclog.php#log_formats.paniclog.ec.record.fields">Paniclog Record Fields</a>
</dt>
<dt>35.15. <a href="log_formats.rejectlog.php#log_formats.rejectlog.ec.record.fields">Rejectlog Record Fields</a>
</dt>
<dt>35.16. <a href="bounce_logger.classification.codes.php#log_formats.bounce.classification.codes">Bounce Classification Codes</a>
</dt>
<dt>35.17. <a href="log_formats.connection.stages.php#table.log_formats.connection.stages">Connection stages</a>
</dt>
<dt>39.1. <a href="cluster.cidr_server.php#cluster.cidr_cli.table">cidr_cli Grammar</a>
</dt>
<dt>41.1. <a href="x-msys-api_header.php#x-msys-api-header-table">X-MSYS-API Header Attributes</a>
</dt>
<dt>41.2. <a href="x-msys-api_header.php#x-msys-api-options-table">Options Attributes</a>
</dt>
<dt>41.3. <a href="x-msys-api_header.php#no_fallbacks"></a>
</dt>
<dt>41.4. <a href="x-msys-api_header.php#x-msys-api-error-table">SMTP Error Codes</a>
</dt>
<dt>44.1. <a href="web-ui.apikeys.php#table_grant_types">Grant Types</a>
</dt>
<dt>63.1. <a href="policy.context.variables.php#predefined-context-conn-global">Global Predefined Connection Context Variables</a>
</dt>
<dt>63.2. <a href="policy.context-mess.php#predefined-context-message-global">Global Predefined Message Context Variables</a>
</dt>
<dt>63.3. <a href="policy.context-mess.php#defined-context-message-module">Message Context Variables Defined Within a Module</a>
</dt>
<dt>64.1. <a href="lua.summary_table.php#lua_functions-all">Lua functions – all</a>
</dt>
<dt>65.1. <a href="modules.summary.all.modules.php#table-all">Modules: all</a>
</dt>
<dt>66.1. <a href="config.options.summary.php#all-options-table">All options</a>
</dt>
<dt>67.1. <a href="console_commands.php#All-console-table">All console commands</a>
</dt>
<dt>68.1. <a href="exe.php#exe.commands-all">Executable commands</a>
</dt>
<dt>71.1. <a href="modules.reception_timing.php#modules.reception.states">SMTP Reception States</a>
</dt>
<dt>71.2. <a href="tls_macros.php#tls-macros-table">TLS Logging Macros</a>
</dt>
<dt>72.1. <a href="conf.ref.debug_flags.php#conf.ref.debug.levels">Debug levels</a>
</dt>
<dt>72.2. <a href="conf.ref.debug_flags.php#conf.ref.subsystems">Subsystems and symbolic names</a>
</dt>
<dt>A.1. <a href="message_responses.php#table-code">Responses sorted by code</a>
</dt>
<dt>C.1. <a href="smtp-response-codes.php#ug-smtp-codes">SMTP response codes</a>
</dt>
<dt>D.1. <a href="libedit.php#emacs_and_editor_commands">Editor Commands</a>
</dt>
<dt>D.2. <a href="libedit.extended.php#extended_commands">Extended Commands</a>
</dt>
</dl>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer"><tr>
<td width="40%" align="left" valign="top"> </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> </td>
</tr></table></div>
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
