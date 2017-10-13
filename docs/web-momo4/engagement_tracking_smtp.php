<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 41. Tracking Engagement for SMTP</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.smtp_injections.php" title="Part VI. SMTP Injection">
<link rel="prev" href="smtp_injection.php" title="Chapter 40. Adjusting your Client Mail Application">
<link rel="next" href="x-msys-api_header.php" title="41.2. Using the X-MSYS-API Header for Engagement Tracking">
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
<tr><th colspan="3" align="center">Chapter 41. Tracking Engagement for SMTP</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="smtp_injection.php">Prev</a> </td>
<th width="60%" align="center">Part VI. SMTP Injection</th>
<td width="20%" align="right"> <a accesskey="n" href="x-msys-api_header.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="engagement_tracking_smtp"></a>Chapter 41. Tracking Engagement for SMTP</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="engagement_tracking_smtp.php#engagement_tracking_smtp.intro">41.1. Introduction</a></span></dt>
<dt><span class="section"><a href="x-msys-api_header.php">41.2. Using the X-MSYS-API Header for Engagement Tracking</a></span></dt>
<dt><span class="section"><a href="engagement_tracking_smtp.policy.php">41.3. Using Policy for Engagement Tracking</a></span></dt>
<dt><span class="section"><a href="engagement_tracking_smtp.escaping.php">41.4. Escaping {{ and }} in SMTP Message Body</a></span></dt>
</dl>
</div>
<p class="config"><b>Configuration Change. </b>
      Engagement tracking for SMTP injections is available as of
      version 4.1-HF4.
    </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="engagement_tracking_smtp.intro"></a>41.1. Introduction</h2></div></div></div>
<p>
      Understanding how your messaging is or isn't performing is a
      critical factor in creating a successful campaign. Just knowing
      that your messages are being delivered is not enough. You need to
      know how your customers interact with your message content. Are
      your customers opening your messages? Are they clicking the links
      you provide? Momentum provides real-time event tracking data,
      enabling you to track campaigns as they are being sent and to make
      modifications to improve customer engagement.
    </p>
<p>
      Engagement describes how a recipient interacts with your message.
      An engagement event occurs when the recipient opens an email or
      clicks a link within an email. Engagement tracking is globally
      enabled or disabled in Momentum's configuration. When a message is
      injected using SMTP, you can override the configuration for a
      specific message by specifying the attributes in an optional
      X-MSYS-API header or through policy by specifying the
      corresponding context variables. See
      <a class="xref" href="x-msys-api_header.php" title="41.2. Using the X-MSYS-API Header for Engagement Tracking">Section 41.2, “Using the X-MSYS-API Header for Engagement Tracking”</a> and
      <a class="xref" href="engagement_tracking_smtp.policy.php" title="41.3. Using Policy for Engagement Tracking">Section 41.3, “Using Policy for Engagement Tracking”</a>,
      respectively.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        To track engagement in SMTP messages, you must load the
        <a class="link" href="modules.smtpapi.php" title="71.67. smtpapi – SMTP Engagement Tracking">smtpapi module</a>
        and configure the associated configuration options. See
        <a class="xref" href="modules.smtpapi.php#modules.smtpapi.config.options" title="71.67.4. Configuration Options for Engagement Tracking">Section 71.67.4, “Configuration Options for Engagement Tracking”</a>. By
        default, open tracking and click tracking for SMTP injections
        are disabled in Momentum's configuration and the associated
        configuration options are set to default values.
      </p>
<p>
        For the order of precedence of the engagement tracking options,
        see <a class="xref" href="modules.smtpapi.php#modules.smtpapi.enable" title="71.67.3. Enabling Engagement Tracking">Section 71.67.3, “Enabling Engagement Tracking”</a>.
      </p>
</div>
<p>
      When engagement tracking is enabled, you can also specify
      engagement data for the message by including the X-MSYS-API header
      or by using the Lua policy context variables. This data is
      included in the tracked URLs for each message. For open tracking,
      Momentum inserts an open-tracked image into the message. For click
      tracking, Momentum converts the target link into a click-tracked
      link. By default, metadata is included for open and click
      tracking, if specified.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If you want to exclude metadata from click tracking, change the
        configuration option in the engagement_tracker module. See
        <a class="xref" href="modules.engage_tracker.php" title="71.32. engagement_tracker – HTTP Engagement Tracking">Section 71.32, “engagement_tracker – HTTP Engagement Tracking”</a>.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="smtp_injection.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.smtp_injections.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="x-msys-api_header.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 40. Adjusting your Client Mail Application </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 41.2. Using the X-MSYS-API Header for Engagement Tracking</td>
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
