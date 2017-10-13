<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 68. Executable Command Summary</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.reference.php" title="Part X. Reference">
<link rel="prev" href="console_commands.php" title="Chapter 67. Console Commands Summary">
<link rel="next" href="hooks.php" title="Chapter 69. Hook Points and C Functions Reference">
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
<tr><th colspan="3" align="center">Chapter 68. Executable Command Summary</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="console_commands.php">Prev</a> </td>
<th width="60%" align="center">Part X. Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="hooks.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="exe"></a>Chapter 68. Executable Command Summary</h2></div></div></div>
<p>
    This table lists all executable commands alphabetically giving a
    brief description. Click the command name to see detailed
    information.
  </p>
<div class="table">
<a name="exe.commands-all"></a><p class="title"><b>Table 68.1. Executable commands</b></p>
<div class="table-contents"><table summary="Executable commands" border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th>
            Command/Description
          </th>
<th>
            Class
          </th>
</tr></thead>
<tbody>
<tr>
<td>
            <a class="link" href="executable.ad_summary.php" title="ad_summary">ad_summary</a>
            – Summarize the adaptive module actions
          </td>
<td>
            adaptive
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.create_ssl_cert.php" title="create_ssl_cert">create_ssl_cert</a>
            – Create a self-signed SSL certificate
          </td>
<td>
            security
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.credmgr.php" title="credmgr">credmgr</a> –
            Manipulate credentials used with the securecreds module
          </td>
<td>
            security
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_adtool.php" title="ec_adtool">ec_adtool</a>
            – Adjust adaptive parameters in a cluster
            configuration
          </td>
<td>
            adaptive
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_console.php" title="ec_console">ec_console</a>
            – Connect to Momentum to perform introspection and
            administration
          </td>
<td>
            console
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_ctl.php" title="ec_ctl">ec_ctl</a> –
            Start, stop, or restart the Momentum Application Server
          </td>
<td>
            service
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_dkim_ctl.php" title="ec_dkim_ctl">ec_dkim_ctl</a>
            – Manipulate the DK/DKIM database
          </td>
<td>
            module
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_dump_config.php" title="ec_dump_config">ec_dump_config</a>
            – Output the ecelerity.conf file as XML
          </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_lic.php" title="ec_lic">ec_lic</a> –
            Fetch a new license file from Message Systems
          </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_log_trace.php" title="ec_log_trace">ec_log_trace</a>
            – Parse Momentum log files
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_md5passwd.php" title="ec_md5passwd">ec_md5passwd</a>
            – Change the password for a system user's password
          </td>
<td>
            security
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_rotate.php" title="ec_rotate">ec_rotate</a>
            – Rotate Momentum logfiles
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_sendmail.php" title="ec_sendmail">ec_sendmail</a>
            – A sendmail compatibility interface
          </td>
<td>
            misc
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ec_show.php" title="ec_show">ec_show</a> –
            Show spool or message information
          </td>
<td>
            messages
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.eccfg.php" title="eccfg">eccfg</a> –
            Subversion repository management
          </td>
<td>
            config
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.eccmgr.php" title="eccmgr">eccmgr</a> –
            Momentum Cluster Manager
          </td>
<td>
            service
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.eccmgr_ctl.php" title="eccmgr_ctl">eccmgr_ctl</a>
            – Start, stop, or restart the Momentum Cluster Manager
          </td>
<td>
            service
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ecconfigd.php" title="ecconfigd">ecconfigd</a>
            – Momentum Configuration Server
          </td>
<td>
            service
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ecconfigd_ctl.php" title="ecconfigd_ctl">ecconfigd_ctl</a>
            – Start, stop or restart the Momentum Configuration
            Server
          </td>
<td>
            service
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.ecelerity.php" title="ecelerity">ecelerity</a>
            – Momentum Application Server
          </td>
<td>
            service
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.jlog_change_endian.php" title="jlog_change_endian">jlog_change_endian</a>
            – Change the endianness of a jlog
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.jlog_sanity_check.php" title="jlog_sanity_check">jlog_sanity_check</a>
            – Validate that a jlog is free of errors
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.jlogctl.php" title="jlogctl">jlogctl</a> –
            Analyze and maintain jlogs
          </td>
<td>
            logs
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.lu_pull.php" title="lu_pull">lu_pull</a> –
            Update the Live Updates database
          </td>
<td>
            adaptive
          </td>
</tr>
<tr>
<td>
            <a class="link" href="executable.validate_config.php" title="validate_config">validate_config</a>
            – Check the validity of the configuration files
          </td>
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
<a accesskey="p" href="console_commands.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.reference.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="hooks.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 67. Console Commands Summary </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 69. Hook Points and C Functions Reference</td>
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
