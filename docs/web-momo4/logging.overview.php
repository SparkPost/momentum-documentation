<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 32. Logging Overview</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.logs.php" title="Part IV. Logging">
<link rel="prev" href="p.logs.php" title="Part IV. Logging">
<link rel="next" href="logging.configuration.php" title="32.2. Logging Configuration">
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
<tr><th colspan="3" align="center">Chapter 32. Logging Overview</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="p.logs.php">Prev</a> </td>
<th width="60%" align="center">Part IV. Logging</th>
<td width="20%" align="right"> <a accesskey="n" href="logging.configuration.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="logging.overview"></a>Chapter 32. Logging Overview</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="logging.overview.php#logging.overview.files">32.1. Log Files</a></span></dt>
<dt><span class="section"><a href="logging.configuration.php">32.2. Logging Configuration</a></span></dt>
</dl>
</div>
<p>
    Momentum’s logging capabilities are implemented by various
    modules. They are intended to maintain auditing and a history of
    events, providing information such as system errors, message
    disposition, and engagement tracking. The logging subsystems range
    from transactional logs on a server node to replicated server node
    logs, aggregated on the designated log aggregator.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="logging.overview.files"></a>32.1. Log Files</h2></div></div></div>
<p>
      The following are Momentum's logging modules. For additional
      information about use and configuration, follow each link :
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <a class="link" href="modules.adaptive.php#modules.adaptive.options.logging" title="71.3.8. Logging">adaptive</a>
          - logs adaptive delivery events
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.as_logger.php" title="71.7. as_logger – Audit Series Logger">as_logger</a> - journals
          replicated audit series to disk at a configurable, periodic
          interval
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.bounce_logger.php" title="71.13. bounce_logger – Momentum-Style Bounce Logging">bounce_logger</a> -
          provides bounce data and bounce classification
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.chunk_logger.php" title="71.15. chunk_logger Module">chunk_logger</a> -
          provides a safe interface for logging asynchronously from Lua,
          C, and C++
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.custom_logger.php" title="71.25. custom_logger – User-defined Logging">custom_logger</a> -
          enables you to create custom logs defining your own logging
          fields and delimiters
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.ec_logger.php" title="71.30. EC_logger – Momentum-Style Logging">ec_logger</a> - provides
          message disposition status, tracking messages from generation
          through delivery
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.event_hydrant.php" title="71.33. event_hydrant – Message Tracking">event_hydrant</a> -
          provides message disposition status, including message
          generation, message reception, message delivery, and
          engagement tracking
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.exim_logger.php" title="71.34. exim_logger – Exim Logging">exim_logger</a> -
          supports logging in the same style as the Open Source MTA Exim
          (http://www.exim.org)
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.fbl.php" title="71.35. fbl - Feedback Loop">fbl</a> - records all abuse
          messages from feedback loop services offered by many ISPs
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.http_logger.php" title="71.37. http_logger – HTTP Requests and Responses">http_logger</a> - logs
          HTTP requests and responses made by the httpsrv module
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.ilf_logger.php" title="71.40. ilf_logger – Incremental License Fee Logging">ilf_logger</a> -
          provides an easy way to comply with the usage reporting
          requirements contained in the agreement with Message Systems
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.postfix_logger.php" title="71.56. postfix_logger – Postfix Logging">postfix_logger</a> -
          supports logging in the same style as the Open Source MTA
          Postfix (http://www.postfix.org)
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.sendmail_logger.php" title="71.63. sendmail_logger – Sendmail Logging">sendmail_logger</a>
          - supports logging in the same style as the Open Source MTA
          Sendmail (http://www.sendmail.org)
        </p></li>
</ul></div>
<p>
      Momentum can generate logs in two formats:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          text - entries vary based on the type of log. For the log
          formats, see <a class="xref" href="log_formats.php" title="Chapter 35. Log Formats">Chapter 35, <i>Log Formats</i></a>.
        </p></li>
<li class="listitem"><p>
          <a class="link" href="modules.jlog.php" title="71.43. jlog – jlog-Formatted Logging">jlog</a> - binary, consumable
          logs, intended to be consumed by an application. These logs
          will continue to be saved until a consumer reads them.
        </p></li>
</ul></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="p.logs.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.logs.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="logging.configuration.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Part IV. Logging </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 32.2. Logging Configuration</td>
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
