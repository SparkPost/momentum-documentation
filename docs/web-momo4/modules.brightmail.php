<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.14. brightmail – Symantec Brightmail™ Content Scanning Support</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.bounce_logger.php" title="71.13. bounce_logger – Momentum-Style Bounce Logging">
<link rel="next" href="modules.chunk_logger.php" title="71.15. chunk_logger Module">
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
<tr><th colspan="3" align="center">71.14. brightmail – Symantec <span class="trademark">Brightmail</span>™ Content
      Scanning Support</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.bounce_logger.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.chunk_logger.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.brightmail"></a>71.14. brightmail – Symantec <span class="trademark">Brightmail</span>™ Content
      Scanning Support</h2></div></div></div>
<a class="indexterm" name="idp20183088"></a><p>
    The brightmail module provides a mechanism for checking the current
    inbound message context (for each recipient) against a Symantec
    Brightmail AntiSpam content server.
  </p>
<p>
    If you intend to use this module, be sure to choose it during
    installation. You will also need to purchase a license from
    Symantac. For more information, see
    <a class="xref" href="post_installation.php#install.additional.packages" title="12.1. Installing Partner Modules">Section 12.1, “Installing Partner Modules”</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.brightmail.configuration"></a>71.14.1. Configuration</h3></div></div></div>
<div class="example">
<a name="example.brightmail.3"></a><p class="title"><b>Example 71.23. brightmail Configuration</b></p>
<div class="example-contents">
<p>
        The following is an example configuration:
      </p>
<pre class="programlisting">
brightmail "brightmail1"{
  server = "10.10.10.20:41111"
  num_workers = 10
  sieve_mode = "on"
  sieve_prefix = "brightmail"
  max_size = 2048
  timeout = 15
}
</pre>
</div>
</div>
<br class="example-break"><p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          idle_timeout
        </span></dt>
<dd><p>
            Open connections to the brightmail server are cached. This
            option defines how long to keep an idle connection open.
          </p></dd>
<dt><span class="term">
          max_messages_per_connection
        </span></dt>
<dd><p>
            The brightmail module will drop a connection after
            processing this many messages. Set this option to
            <code class="literal">0</code> to process an unlimited number. Default
            value is <code class="literal">0</code>.
          </p></dd>
<dt><span class="term">
          max_size
        </span></dt>
<dd><p>
            Specifies the number of bytes sent to the brightmail server.
            For example, if this is set to <code class="literal">2048</code> and a
            message of 4,000 bytes is received, only
            <code class="literal">2048</code> will be sent to the Brightmail
            server.
          </p></dd>
<dt><span class="term">
          max_tries
        </span></dt>
<dd><p>
            Number of times to attempt a connection to the brightmail
            server; if we can't connect and max_tries is greater than
            one, retry the connection <code class="option">max_tries</code> number
            of times.
          </p></dd>
<dt><span class="term">
          num_workers
        </span></dt>
<dd><p>
            Specifies the concurrency of access to the Brightmail
            service. For numbers greater than zero, this specifies the
            number of threads that will be used to concurrently
            communicate with Brightmail. Each thread will have its own
            TCP/IP connection to the server and be capable of handling
            new messages serially. 0 (zero) has a special meaning:
            exactly one connection will be made synchronously to the
            main Momentum process and thus block other operations—this
            is highly discouraged.
          </p></dd>
<dt><span class="term">
          server
        </span></dt>
<dd><p>
            Specifies the IP address and port on which the Brightmail
            service should be reached. Since the module makes a TCP
            connection, it is not essential that it run on the same
            server as Momentum. Instead of an IP address, you can also
            specify the hostname.
          </p></dd>
<dt><span class="term">
          sieve_mode
        </span></dt>
<dd>
<p>
            Specifies whether to operate in script-only mode or not. If
            this option is active, then no brightmail checking will
            occur unless called for directly from a Lua script. If the
            module is loaded with "sieve_mode = off", the scanner will
            be run from the module (rather than a script) for all
            messages in the data phase. If you set
            <code class="option">sieve_mode</code> to <code class="literal">on</code>, you
            need to invoke the brightmail_scanner manually. This can be
            invoked at the data, spool, or each_rcpt phases. It will not
            work at the connect, ehlo, mailfrom, or rcptto phases. If
            you do not want brightmail to see a given message, do not
            call <code class="function">msys.brightmail.scan</code> for that
            message.
          </p>
<p>
            This option must be set to <code class="literal">on</code> if you wish
            to use the Lua function,
            <a class="xref" href="lua.ref.msys.brightmail.scan.php" title="msys.brightmail.scan"><span class="refentrytitle">msys.brightmail.scan</span></a>.
          </p>
</dd>
<dt><span class="term">
          sieve_prefix
        </span></dt>
<dd><p>
            Specifies a name for a specific brightmail server instance.
            Allows you to concurrently interface with any number of
            servers that use the brightmail module. This setting also
            determines the prefix for the validation context variable.
            See <a class="xref" href="modules.brightmail.php#modules.brightmail.context.variables" title="71.14.2. Message Context Variables">Section 71.14.2, “Message Context Variables”</a>.
            Default value is <code class="literal">brightmail</code>.
          </p></dd>
<dt><span class="term">
          timeout
        </span></dt>
<dd><p>
            Specifies the maximum time to wait for a response before
            assuming a failure on the part of the brightmail server.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.brightmail.context.variables"></a>71.14.2. Message Context Variables</h3></div></div></div>
<p>
      The brightmail module sets one message context variable in the
      event of an error:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          <em class="replaceable"><code>brightmail</code></em>::error
        </span></dt>
<dd><p>
            This variable, if it exists, contains information pertaining
            to the error that occurred while attempting to process the
            current message through the Brightmail service.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.brightmail.lua.functions"></a>71.14.3. Lua Functions</h3></div></div></div>
<p>
      This module makes the Lua function
      <code class="function">msys.brightmail.scan</code> available. For a
      description of how this function is used, see
      <a class="xref" href="lua.ref.msys.brightmail.scan.php" title="msys.brightmail.scan"><span class="refentrytitle">msys.brightmail.scan</span></a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.bounce_logger.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.chunk_logger.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.13. bounce_logger – Momentum-Style Bounce Logging </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.15. chunk_logger Module</td>
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
