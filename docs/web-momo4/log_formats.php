<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 35. Log Formats</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.logs.php" title="Part IV. Logging">
<link rel="prev" href="log_rotating.php" title="Chapter 34. Rotating Logs ec_rotate">
<link rel="next" href="adaptive.log.format.php" title="35.2. adaptive Log">
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
<tr><th colspan="3" align="center">Chapter 35. Log Formats</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="log_rotating.php">Prev</a> </td>
<th width="60%" align="center">Part IV. Logging</th>
<td width="20%" align="right"> <a accesskey="n" href="adaptive.log.format.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="log_formats"></a>Chapter 35. Log Formats</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="log_formats.php#log_formats.acctlog">35.1. <code class="filename">acctlog</code></a></span></dt>
<dt><span class="section"><a href="adaptive.log.format.php">35.2. <code class="filename">adaptive</code> Log</a></span></dt>
<dt><span class="section"><a href="log_formats.bouncelog.php">35.3. <code class="filename">bouncelog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.fbllog.php">35.4. <code class="filename">fbllog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.httplog.php">35.5. <code class="filename">httplog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.importlog.php">35.6. <code class="filename">importlog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.mainlog.php">35.7. <code class="filename">mainlog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.paniclog.php">35.8. <code class="filename">paniclog</code></a></span></dt>
<dt><span class="section"><a href="log_formats.rejectlog.php">35.9. <code class="filename">rejectlog</code></a></span></dt>
<dt><span class="section"><a href="bounce_logger.classification.codes.php">35.10. Bounce Classification Codes</a></span></dt>
<dt><span class="section"><a href="log_formats.connection.stages.php">35.11. Connection Stages</a></span></dt>
</dl>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="log_formats.acctlog"></a>35.1. <code class="filename">acctlog</code>
</h2></div></div></div>
<p>
      The <code class="filename">acctlog</code> contains both authentication
      entries and authorization entries for the ESMTP_Listener and
      Control_Listener. It is configured in the
      <a class="link" href="modules.ec_logger.php" title="71.30. EC_logger – Momentum-Style Logging">ec_logger</a> module.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp4085376"></a>35.1.1. Authentication Records</h3></div></div></div>
<p>
        If enabled for the listener, authentication events for Unix
        domain sockets are logged one per line. The log entry is an
        <code class="literal">@</code> delimited string, such as the following:
      </p>
<pre class="screen">
1160503808@N@/tmp/2025@@ec-user@1
</pre>
<p>
        If enabled for the listener, authentication events for TCP/IP
        listeners are logged one per line. The log entry is an
        <code class="literal">@</code> delimited string, such as the following:
      </p>
<pre class="screen">
1160172232@N@*:2025@10.80.116.126:37164@ec_user@1
</pre>
<p>
        Note that <code class="literal">@</code>, <code class="literal">\</code>,
        <code class="literal">\n</code> and other control characters appearing in
        a field are escaped by adding an <code class="literal">\</code> before
        them.
      </p>
<p>
        The following is a description of the fields:
      </p>
<div class="table">
<a name="log_formats.authentication.record.fields"></a><p class="title"><b>Table 35.1. Authentication Record Fields</b></p>
<div class="table-contents"><table border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Offset
              </th>
<th>
                Example Field
              </th>
<th>
                Description
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                0
              </td>
<td>
                1160172232
              </td>
<td>
                Date of authentication in Unix timestamp format (seconds
                since 00:00:00 Jan 1, 1970)
              </td>
</tr>
<tr>
<td>
                1
              </td>
<td>
                N
              </td>
<td>
                <code class="literal">N</code> indicating an authentication entry
                or <code class="literal">T</code> indicating an authentication
                timeout
              </td>
</tr>
<tr>
<td>
                2
              </td>
<td>
                *:2025
              </td>
<td>
                Listener endpoint on which the event occurred
              </td>
</tr>
<tr>
<td>
                3
              </td>
<td>
                10.80.116.126:37164
              </td>
<td>
                IP and port of the peer (For Unix domain connections,
                this field will be empty.)
              </td>
</tr>
<tr>
<td>
                4
              </td>
<td>
                ec_user
              </td>
<td>
                User name used for the authentication
              </td>
</tr>
<tr>
<td>
                5
              </td>
<td>
                1
              </td>
<td>
                1 indicates the authentication is successful; 0
                otherwise.
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp4112320"></a>35.1.2. Authorization Records</h3></div></div></div>
<p>
        A line is written to <code class="filename">acctlog</code> for every
        authorization event. The log entry is an <code class="literal">@</code>
        delimited string, such as the following:
      </p>
<pre class="screen">
1160503811@Z@/tmp/2025@@ec-user@1@summary@users
1160504707@Z@/tmp/2025@@ec-user@0@shutdown
1160172223@Z@*:2025@10.80.116.126:37162@ec-user@1@summary@users
1160172219@Z@*:2025@10.80.116.126:37162@ec-user@0@shutdown
</pre>
<p>
        Note that <code class="literal">@</code>, <code class="literal">\</code>,
        <code class="literal">\n</code> and other control characters appearing in
        a field are escaped by adding an <code class="literal">\</code> before
        them.
      </p>
<p>
        The following is a description of the fields:
      </p>
<div class="table">
<a name="log_formats.authorization.record.fields"></a><p class="title"><b>Table 35.2. Authorization Record Fields</b></p>
<div class="table-contents"><table border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Offset
              </th>
<th>
                Example Field
              </th>
<th>
                Description
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                0
              </td>
<td>
                1160172219
              </td>
<td>
                Date of authorization in Unix timestamp format (seconds
                since 00:00:00 Jan 1, 1970)
              </td>
</tr>
<tr>
<td>
                1
              </td>
<td>
                Z
              </td>
<td>
                <code class="literal">Z</code> indicating an authorization entry
              </td>
</tr>
<tr>
<td>
                2
              </td>
<td>
                /tmp/2025 <span class="emphasis"><em>or</em></span> *:2025
              </td>
<td>
                Listener endpoint on which the event occurred
              </td>
</tr>
<tr>
<td>
                3
              </td>
<td>
                10.80.116.126:37162
              </td>
<td>
                IP and port of the peer (For Unix domain connections
                this field will be blank.)
              </td>
</tr>
<tr>
<td>
                4
              </td>
<td>
                ec_user
              </td>
<td>
                User name used for the authentication
              </td>
</tr>
<tr>
<td>
                5
              </td>
<td>
                1
              </td>
<td>
                1 indicates the user is authorized to run the command; 0
                indicates the authorization failed; -1 indicates some
                error occurred during authorization.
              </td>
</tr>
<tr>
<td>
                6
              </td>
<td>
                summary
              </td>
<td>
                Command that was requested to run
              </td>
</tr>
<tr>
<td>
                7
              </td>
<td>
                users
              </td>
<td>
                Role that matched during successful authorization
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break"><div class="note">
<h3 class="title">Note</h3>
<p>
          The <code class="literal">?</code> type indicator denotes an unknown
          <code class="filename">acctlog</code> type.
        </p>
</div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="log_rotating.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.logs.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="adaptive.log.format.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 34. Rotating Logs <span class="command"><strong>ec_rotate</strong></span> </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 35.2. <code class="filename">adaptive</code> Log</td>
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
