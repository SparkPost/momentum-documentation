<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 37. Using the System Console (ec_console)</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.operations.php" title="Part V. Using the System Console">
<link rel="prev" href="conf.starting.php" title="Chapter 36. Starting Momentum (ecelerity)">
<link rel="next" href="operations.console-commands.php" title="37.2. Console Commands">
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
<tr><th colspan="3" align="center">Chapter 37. Using the System Console (<span class="command"><strong>ec_console</strong></span>)</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.starting.php">Prev</a> </td>
<th width="60%" align="center">Part V. Using the System Console</th>
<td width="20%" align="right"> <a accesskey="n" href="operations.console-commands.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="operations"></a>Chapter 37. Using the System Console (<span class="command"><strong>ec_console</strong></span>)</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="operations.php#operations.console">37.1. Connecting to the Console</a></span></dt>
<dt><span class="section"><a href="operations.console-commands.php">37.2. Console Commands</a></span></dt>
<dt><span class="section"><a href="module_specific_console_commands.using.php">37.3. Using Module-Specific Console Commands</a></span></dt>
<dt><span class="section"><a href="modules.options.console.php">37.4. Setting and Getting Module Options from the Console</a></span></dt>
<dt><span class="section"><a href="operations.console.lua.php">37.5. Creating Custom Console Commands</a></span></dt>
</dl>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="operations.console"></a>37.1. Connecting to the Console</h2></div></div></div>
<p>
      Momentum's online administration, management, and analysis is
      through the Momentum System Console program
      <span class="command"><strong>ec_console</strong></span>, henceforth referred to as the
      console. For details about the available options, see
      <a class="xref" href="executable.ec_console.php" title="ec_console"><span class="refentrytitle">ec_console</span></a>.
    </p>
<p>
      The console can connect to a Momentum instance via a Unix domain
      socket or a TCP/IP socket (with an optional user@ prefix)
      depending upon how the Control_Listener is configured. For details
      on configuring the Control_Listener behavior, see
      <a class="xref" href="control_listener.php" title="Chapter 17. Configuring Momentum's System Console">Chapter 17, <i>Configuring Momentum's System Console</i></a>.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        To connect to the console, you must have root privileges.
      </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp4255632"></a>Connecting via a Unix Domain Socket</h3></div></div></div>
<p>
        The console assumes that Unix domain sockets are located in
        <code class="literal">/tmp</code>. The standard endpoint for a control
        listener is <code class="literal">/tmp/2025</code>. When using the
        standard endpoint to connect to the console, issue the
        <span class="command"><strong>ec_console</strong></span> command with no options:
      </p>
<pre class="screen">shell&gt; /opt/msys/ecelerity/bin/ec_console </pre>
<p>
        If you choose to bind your Control_Listener to a non-standard
        value, issue the <span class="command"><strong>ec_console</strong></span> with an optional
        argument to specify an endpoint, as shown:
      </p>
<pre class="screen">shell&gt; /opt/msys/ecelerity/bin/ec_console /tmp/2030</pre>
<p>
        This will attempt to connect to the local Momentum instance
        listening at <code class="literal">/tmp/2030</code>.
      </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp4209872"></a>Connecting via TCP/IP</h3></div></div></div>
<p>
        To connect via TCP/IP, issue the <span class="command"><strong>ec_console</strong></span>
        with an optional argument to specify the IP address and port.
        The following example attempts to connect the Momentum instance
        located at the IPv4 address 10.2.4.1 on port 2025:
      </p>
<pre class="screen">shell&gt; /opt/msys/ecelerity/bin/ec_console 10.2.4.1:2025</pre>
<p>
        Likewise, you can attempt to connect to the Momentum instance
        located at the IPv6 address
        fd82:7796:815b:af9d:2e0:81ff:fe63:5ce8 on port 2424 in the
        following way:
      </p>
<pre class="screen">shell&gt; /opt/msys/ecelerity/bin/ec_console ec_console [fd82:7796:815b:af9d:2e0:81ff:fe63:5ce8]:2424</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
          IPv6 addresses are much more flexible than IPv4 addresses in
          terms of their formatting options. They also use a different
          delimiter character than IPv4 addresses (a colon instead of a
          period). This means that in certain contexts, an IPv6 address
          can create parsing ambiguities.
        </p>
<p>
          The accepted convention is to require that, in circumstances
          where a configuration parameter can also contain something
          other than an IP address, that an IPv6 address must be
          enclosed in square brackets. In practical terms, this means
          that things like the <code class="option">Gateway</code>,
          <code class="option">Routes</code> and <code class="option">Listen</code> options
          must have IPv6 addresses enclosed in brackets. Others, such as
          <code class="option">Peer</code>, <code class="option">Relay_Hosts</code> and
          <code class="option">Prohibited_Hosts</code> do not require the IPv6
          address in brackets.
        </p>
</div>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp4443728"></a>Connecting Using SSH Tunnel</h3></div></div></div>
<p>
        The <span class="command"><strong>ec_console</strong></span> command has ssh tunnel
        support. Assuming that you have a properly configured
        Control_Listener, you can connect in the following ways:
      </p>
<pre class="screen">
shell&gt; ec_console ssh://user@hostname/ecuser@hostname:2025
shell&gt; ec_console ssh://user:passwd@hostname/ecuser:passwd@*:2025
</pre>
<p>
        You need operating system (OS) credentials for the ssh
        connection to the machine hosting the MTA and console
        credentials because the control listener requires
        authentication. The listener stanza is shown below:
      </p>
<pre class="programlisting">
Control_Listener {
  Enable_Authentication = "true"

  Listen "*:2025" {
  }
  ...
}
</pre>
<p>
        SSH support requires the remote server to support SSH protocol
        version 2, and that the server be configured to allow
        port-forwarding. It is not possible to tunnel Unix domain socket
        connections over SSH.
      </p>
<p>
        For details on configuring authentication, see
        <a class="xref" href="control_auth.php" title="17.2. Control_Listener Authentication">Section 17.2, “Control_Listener Authentication”</a>.
      </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp4449520"></a>Successful Connection</h3></div></div></div>
<p>
        A successful launch of the console will result in output similar
        to the following:
      </p>
<pre class="screen"># /opt/msys/ecelerity/bin/ec_console
##############################################
# ecelerity version: 3.0.10.30987
# Copyright (c) 1999-2009 Message Systems, Inc.
# All Rights Reserved.
##############################################</pre>
<p>
        By default, an interactive console session is established, and
        the console client provides line editing features and tab
        completion (it will load your <code class="filename">~/.inputrc</code> on
        startup). In this mode, the version of the remote server is
        displayed at connect time.
      </p>
<p>
        The console client enters batching mode if it detects that it is
        not connected to a terminal or if additional command line
        parameters beyond the listener endpoint are specified. For
        example, you can list all your active modules and then exit in
        the following way:

</p>
<pre class="screen">
shell&gt; ec_console /tmp/2025 module list
</pre>
<p>

        For a TCP/IP connection to localhost requiring authentication of
        the user, <code class="literal">admin</code>, use the following command:

</p>
<pre class="screen">
shell&gt; ec_console admin@localhost:2025 module list
</pre>
<p>

        You will be asked for admin's password before the
        <span class="command"><strong>module list</strong></span> command executes. Batch mode
        suppresses the version information that is normally displayed at
        connect time and disables advanced line editing features.
      </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp4311824"></a>Exiting the Console</h3></div></div></div>
<p>
        To exit the console, enter the <span class="command"><strong>quit</strong></span> command.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.starting.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.operations.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="operations.console-commands.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 36. Starting Momentum (<span class="command"><strong>ecelerity</strong></span>) </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 37.2. Console Commands</td>
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
