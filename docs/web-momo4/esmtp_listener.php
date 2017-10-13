<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 19. Configuring Inbound Mail Service Using SMTP</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="prev" href="ecstream_listener.php" title="Chapter 18. Configuring Inbound Mail Service Using ECStream">
<link rel="next" href="esmtp_listener.relay_domains.php" title="19.2. Inbound Email Relay or Gateway">
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
<tr><th colspan="3" align="center">Chapter 19. Configuring Inbound Mail Service Using SMTP</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="ecstream_listener.php">Prev</a> </td>
<th width="60%" align="center">Part III. Configuring Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="esmtp_listener.relay_domains.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="esmtp_listener"></a>Chapter 19. Configuring Inbound Mail Service Using SMTP</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="esmtp_listener.php#esmtp_listener.config">19.1. ESMTP_Listener Configuration</a></span></dt>
<dt><span class="section"><a href="esmtp_listener.relay_domains.php">19.2. Inbound Email Relay or Gateway</a></span></dt>
<dt><span class="section"><a href="esmtp_listener.reconfig_message.php">19.3. <code class="option">Reconfig_Message</code> Option</a></span></dt>
<dt><span class="section"><a href="esmtp_listener.extensions.php">19.4. SMTP Extensions</a></span></dt>
<dt><span class="section"><a href="inbound_smtp.php">19.5. ESMTP_Listener Authentication</a></span></dt>
<dt><span class="section"><a href="inbound_ssl.php">19.6. Inbound SSL</a></span></dt>
<dt><span class="section"><a href="inbound_tls.php">19.7. Inbound TLS</a></span></dt>
</dl>
</div>
<p>
    The ESMTP_Listener is the listener that enables you to inject
    message using SMTP. Momentum can listen on any number of Unix domain
    sockets and/or IP:port addresses for TCP/IP service.
  </p>
<p>
    The ESMTP_Listener supports all of the extended properties and
    extensions described below.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="esmtp_listener.config"></a>19.1. ESMTP_Listener Configuration</h2></div></div></div>
<p>
      The ESMTP_Listener is configured in the
      <code class="filename">ecelerity.conf</code> file and specifies the
      end-point(s) on which Momentum should listen for incoming SMTP
      connections. The following is an example configuration:
    </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen ":25" {
      <span class="bold"><strong>Listen_Backlog = 500</strong></span> # new default, can be set &gt; 200 now
      TCP_Recv_Buffer_Size = 4096
      TCP_Send_Buffer_Size = 4096
      Disable_Nagle_Algorithm = false
  }
  Listen ":587" {
      Enable = "false"
      Accept_Queue_Backlog = 200
      Events_Per_Iter = 20
      Concurrency = 4
      # you need to also create this pool in your configuration,
      # otherwise you get a warning and use the IO pool instead
      Pool_Name = "accept-pool"
  }
  # serve inbound SMTP on port 25 in IPv6
  #Listen "[::1]:25" {}

  # serve inbound SMTP at 192.168.0.1 on port 25 in IPv6
  #Listen "[::192.168.0.1]:25" {}
  # or
  #Listen "[::C0A8:1]:25" {}
}
ThreadPool accept-pool {
  Concurrency = 4
}
</pre>
<p>
      Listen stanzas map 1:1 to an underlying socket, this means that
      <code class="literal">:25</code> (which is the same as *:25) binds to IPv4
      (and perhaps IPv6, depending on the kernel); for explicit IPv6,
      use <code class="literal">[*]:25</code> instead.
    </p>
<p>
      The <code class="option">Pool_Name</code> option associates the
      <code class="literal">accept-pool</code> ThreadPool with the listener.
      <code class="option">Concurrency</code> should have a value that is equal to
      or less than the concurrency defined in the ThreadPool.
    </p>
<p>
      When using threaded accepts for listeners, you must provision the
      thread pool you intend to use via the ThreadPool directive. If the
      thread pool you name is not found or is unspecified, the IO pool
      will be used and a critical message will appear in your log.
    </p>
<p>
      For details about the non-module specific configuration options
      that are valid in the ESMTP_Listener and its nested scopes, refer
      to <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
    </p>
<p>
      Modules and their configuration options are discussed in the
      <a class="xref" href="modules.php" title="Chapter 71. Modules Reference">Chapter 71, <i>Modules Reference</i></a>.
    </p>
<p>
      For general information regarding listeners, see
      <a class="xref" href="listeners.php" title="15.4. Listeners">Section 15.4, “Listeners”</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="ecstream_listener.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.configuration.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="esmtp_listener.relay_domains.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 18. Configuring Inbound Mail Service Using ECStream </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 19.2. Inbound Email Relay or Gateway</td>
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
