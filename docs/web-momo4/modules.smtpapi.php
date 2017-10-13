<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.67. smtpapi – SMTP Engagement Tracking</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.smtp_rcptto_proxy.php" title="71.66. smtp_rcptto_proxy - SMTP Recipient-To Proxy">
<link rel="next" href="modules.spf.php" title="71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)">
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
<tr><th colspan="3" align="center">71.67. smtpapi – SMTP Engagement Tracking</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.smtp_rcptto_proxy.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.spf.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.smtpapi"></a>71.67. smtpapi – SMTP Engagement Tracking</h2></div></div></div>
<p class="config"><b>Configuration Change. </b>
      Engagement tracking for SMTP injections is available as of
      version 4.1-HF4.
    </p>
<p>
    The smtpapi module implements engagement tracking for SMTP
    injections and provides for open-tracked images and click-tracked
    links to be included in the message bodies.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Message Generation is a licensed feature that must be configured in
      order to use SMTP Engagement Tracking. For more information, see
      <a class="xref" href="modules.msg_gen.php" title="71.48. msg_gen – Message Generation">Section 71.48, “msg_gen – Message Generation”</a>.
      
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.smtpapi.config"></a>71.67.1. Configuration</h3></div></div></div>
<p>
      To track engagement in SMTP messages, the smtpapi module must be
      included in the <code class="filename">ecelerity.conf</code> file, as
      follows:
    </p>
<pre class="programlisting">
smtpapi { }
</pre>
<p>
      The smtpapi module has the following dependencies:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          cassandra_client – Used for tag storage (automatically
          loaded)
        </p></li>
<li class="listitem">
<p>
          engagement_tracker – Handles the creation of
          open-tracked and click-tracked links and the corresponding
          parsing of the links when an open or click event occurs and
          determines if metadata is included in click tracking
          (automatically loaded)
        </p>
<p>
          For additional information, see
          <a class="xref" href="modules.engage_tracker.php" title="71.32. engagement_tracker – HTTP Engagement Tracking">Section 71.32, “engagement_tracker – HTTP Engagement Tracking”</a>.
        </p>
</li>
<li class="listitem"><p>
          msys.rest.templates.lua – Provides functionality to
          render the tracking links into the message
        </p></li>
<li class="listitem"><p>
          substitution_engine – Required to substitute the
          rendered links into the message (automatically loaded)
        </p></li>
<li class="listitem"><p>
          httpsrv – Required for http server lua bindings
        </p></li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.smtpapi.hookpoint"></a>71.67.2. Hookpoint</h3></div></div></div>
<p>
      The smtpapi module implements the
      <code class="literal">post_validate_data_spool_each_rcpt</code> hook to
      perform its message examination and transformations.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.smtpapi.enable"></a>71.67.3. Enabling Engagement Tracking</h3></div></div></div>
<p>
      In the default configuration, engagement tracking for SMTP
      injections is disabled and the associated configuration options
      are set to default values. To globally enable engagement tracking,
      change the default configuration. See
      <a class="xref" href="modules.smtpapi.php#modules.smtpapi.config.options" title="71.67.4. Configuration Options for Engagement Tracking">Section 71.67.4, “Configuration Options for Engagement Tracking”</a>.
    </p>
<p>
      You can override the configuration for a specific message by
      specifying the attributes in an optional X-MSYS-API header or
      through policy by specifying the corresponding context variables.
      In these cases, the behavior is determined by the following order
      of precedence, from highest to lowest:
    </p>
<p>
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            Associated context variables in Lua Policy – See
            <a class="xref" href="engagement_tracking_smtp.policy.php" title="41.3. Using Policy for Engagement Tracking">Section 41.3, “Using Policy for Engagement Tracking”</a>.
          </p></li>
<li class="listitem"><p>
            X-MSYS-API header in the SMTP message – See
            <a class="xref" href="x-msys-api_header.php" title="41.2. Using the X-MSYS-API Header for Engagement Tracking">Section 41.2, “Using the X-MSYS-API Header for Engagement Tracking”</a>.
          </p></li>
<li class="listitem"><p>
            Configuration options in the
            <code class="filename">ecelerity.conf</code> file – See
            <a class="xref" href="modules.smtpapi.php#modules.smtpapi.config.options" title="71.67.4. Configuration Options for Engagement Tracking">Section 71.67.4, “Configuration Options for Engagement Tracking”</a>.
          </p></li>
</ul></div>
<p>
    </p>
<p>
      For example, if the <code class="literal">smtpapi_open_tracking</code>
      context variable is not specified, the
      <code class="literal">open_tracking</code> attribute in the X-MSYS-API
      header is used. If this attribute is also not specified, the value
      of the <code class="option">open_tracking_enabled</code> configuration option
      is used.
    </p>
<p>
      While the configuration options for engagement tracking are not
      required when using the X-MSYS-API header or Lua Policy, the value
      of the configuration option will be used if the corresponding
      X-MSYS-API header field or context variable is not specified. This
      is especially important for <code class="option">tracking_domain</code>, as
      the default value of <code class="literal">"localhost:8080"</code> is not
      appropriate for production environments.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.smtpapi.config.options"></a>71.67.4. Configuration Options for Engagement Tracking</h3></div></div></div>
<p>
      When tracking engagement in SMTP messages, configure the following
      options or ensure that the default values meet your needs. For
      details about each option, including the associated context
      variables in Lua Policy and X-MSYS-API header fields, follow each
      link:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <a class="link" href="config.click_tracking_enabled.php" title="click_tracking_enabled">click_tracking_enabled</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.click_tracking_scheme.php" title="click_tracking_scheme">click_tracking_scheme</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.open_tracking_enabled.php" title="open_tracking_enabled">open_tracking_enabled</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.open_tracking_scheme.php" title="open_tracking_scheme">open_tracking_scheme</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tracking_domain.php" title="tracking_domain">tracking_domain</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tracking_link_expiry.php" title="tracking_link_expiry">tracking_link_expiry</a>
        </p></li>
</ul></div>
<p>
      These options are valid in the esmtp_listener, listen, pathway,
      pathway_group, and peer scope.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        The smtpapi does <span class="bold"><strong>NOT</strong></span> fallback
        to the msg_gen level configuration, and there are
        <span class="bold"><strong>NO</strong></span> X-MSYS-API header fallbacks
        for <code class="option">click_tracking_scheme</code>,
        <code class="option">open_tracking_scheme</code>,
        <code class="option">tracking_domain</code>, and
        <code class="option">tracking_link_expiry</code>. Be sure to configure
        these options when using the X-MSYS-API header.
      </p>
</div>
<p>
      The following is an example configuration in the esmtp_listener
      scope:
    </p>
<div class="example">
<a name="example.smtpapi.esmtp_listener"></a><p class="title"><b>Example 71.92. ESMTP Listener</b></p>
<div class="example-contents"><pre class="programlisting">
ESMTP_Listener {
        SMTP_Extensions = (XREMOTEIP XDUMPCONTEXT XCLIENT XSETCONTEXT)
        Listen "127.0.0.1:8650" {
        }
        Listen "[::1]:8650" {}
        open_tracking_enabled = "false"
        click_tracking_enabled = "true"
}</pre></div>
</div>
<br class="example-break">
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.smtp_rcptto_proxy.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.spf.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.66. smtp_rcptto_proxy - SMTP Recipient-To Proxy </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)</td>
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
