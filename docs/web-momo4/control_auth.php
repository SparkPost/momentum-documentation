<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>17.2. Control_Listener Authentication</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="control_listener.php" title="Chapter 17. Configuring Momentum's System Console">
<link rel="prev" href="control_listener.php" title="Chapter 17. Configuring Momentum's System Console">
<link rel="next" href="control_acct.php" title="17.3. Control_Listener Accounting">
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
<tr><th colspan="3" align="center">17.2. Control_Listener Authentication</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="control_listener.php">Prev</a> </td>
<th width="60%" align="center">Chapter 17. Configuring Momentum's System Console</th>
<td width="20%" align="right"> <a accesskey="n" href="control_acct.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="control_auth"></a>17.2. Control_Listener Authentication</h2></div></div></div>
<p>
    Momentum can be configured to perform authentication on Control
    connections by using the authentication modules.
  </p>
<p>
    The following is an example <code class="option">Control_Listener</code>
    stanza:
  </p>
<div class="example">
<a name="control_auth.control_listener.stanza"></a><p class="title"><b>Example 17.1. Control_Listener Stanza</b></p>
<div class="example-contents"><pre class="programlisting">
Control_Listener {
  AuthDigestMD5Parameters = [
    uri = "ecauth://"
  ]
  Enable_Authentication = "true"

  Enable_Authorization = "false"
  AuthorizationParameters = [
    uri = "ecauth://"
  ]

  Listen "/tmp/2025" {
    Enable_Authentication = "false"
  }
  Listen "127.0.0.1:2025" {
  }
}
</pre></div>
</div>
<br class="example-break"><p>
    The usual fallback semantics apply to the
    <code class="option">Enable_Authentication</code> option. In the example,
    access to the control listener via TCP requires authentication
    because the fallback value of "Enable_Authentication" is "true". On
    the other hand, authentication is disabled for access via a Unix
    domain socket because <code class="option">Enable_Authentication</code> is set
    to <code class="literal">false</code> in the scope defined by <code class="literal">Listen
    "/tmp/2025"</code>. The <code class="option">Enable_Authorization</code>
    option is used in the same way as the
    <code class="option">Enable_Authentication</code> option.
  </p>
<p>
    The <code class="literal">uri = "ecauth://"</code> inside both
    <code class="option">AuthDigestMD5Parameters</code> and
    <code class="option">AuthorizationParameters</code> references an
    authentication scheme named "<code class="literal">ecauth</code>" defined in
    an auth_ds module. This scheme is created during installation. For
    more information on the <code class="literal">ecauth</code> scheme, see
    <a class="xref" href="control_authz.php#control_authz.ecauth" title="17.4.1. Authorization Using the ecauth Scheme">Section 17.4.1, “Authorization Using the <code class="literal">ecauth</code> Scheme”</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="control_auth.digest-md5"></a>17.2.1. DIGEST-MD5 Authentication</h3></div></div></div>
<p>
      In the following example, <code class="literal">DIGEST-MD5</code> is used to
      authenticate users who try to connect to the console over TCP/IP
      rather than by using a Unix socket.
    </p>
<pre class="programlisting">
Control_Listener {
  Listen /tmp/2025 {}
  Listen ":2025" {
    AuthDigestMD5Parameters = [
      uri = digest:///opt/msys/ecelerity/etc/console_passwd
    ]
  }
}
</pre>
<p>
      The digest file, referenced by the <code class="literal">uri</code>
      parameter, can be created and updated using the
      <a class="xref" href="executable.ec_md5passwd.php" title="ec_md5passwd"><span class="refentrytitle">ec_md5passwd</span></a> tool.
    </p>
<p>
      The <code class="literal">digest://</code> auth storage scheme references
      the path to an htdigest compatible password file. Lines starting
      with a ‘<code class="literal">#</code>’ are treated as comments and are
      ignored. The lines are divided into three fields separated by
      ‘<code class="literal">:</code>’ characters; e.g.
      <code class="literal">user:realm:password</code>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="control_auth.clear.text"></a>17.2.2. Clear Text LOGIN Authentication</h3></div></div></div>
<p>
      The LOGIN mechanism stores passwords in clear text locally and
      transmits the username and password credentials in clear text over
      the network. Configuration is similar to DIGEST-MD5:
    </p>
<pre class="programlisting">
Control_Listener {
  Listen "/tmp/2025" {
    AuthLoginParameters = [
      uri = "file:///opt/msys/ecelerity/etc/unsafe_passwd"
    ]
  }
}
</pre>
<p>
      Currently there's no TLS/SSL support for control listeners, so the
      use of clear text LOGIN with anything other than Unix domain
      sockets is discouraged.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="control_auth.os"></a>17.2.3. Operating System Authentication</h3></div></div></div>
<p>
      On Unix systems, the control listener will implicitly authenticate
      connections made over Unix domain sockets using the system level
      username of the user connecting to the socket.
    </p>
<p>
      By default, the control listener creates Unix domain sockets so
      that they are only accessible to the user identity you have
      configured for ecelerity. To enable connections from other users
      you may specify the file mode using the following syntax:
    </p>
<pre class="programlisting">
Control_Listener {
  Listen "/tmp/2025" {
    File_Mode = 0666
  }
}
</pre>
<p>
      With the socket file permission set to <code class="literal">0666</code>,
      every user who can log in to the system can use
      <span class="command"><strong>ec_console</strong></span> to connect to the server. When using
      system level authentication on a Unix domain socket, all
      authentication and authorization events on that connection will be
      logged to the accounting subsystem. Note that you need to
      configure a location to log accounting information; you can find
      more details on the configuration of the accounting log in
      <a class="xref" href="modules.ec_logger.php" title="71.30. EC_logger – Momentum-Style Logging">Section 71.30, “EC_logger – Momentum-Style Logging”</a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="control_auth.overriding"></a>17.2.4. Overriding Authentication</h3></div></div></div>
<p>
      You can override the results of authentication using the
      <code class="option">always_allow</code> and the <code class="option">always_deny</code>
      options. Consider the following code snippet:
    </p>
<pre class="programlisting">
Control_Listener {
  Listen "127.0.0.1:2025" {
    Enable_Authentication = true
    Peer "127.0.0.1" {
      Always_Allow = true
    }
  }
  ...
}
</pre>
<p>
      In this case, access to <code class="literal">Peer "127.0.0.1"</code> is
      always allowed regardless of the results of authentication.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="control_listener.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="control_listener.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="control_acct.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 17. Configuring Momentum's System Console </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 17.3. Control_Listener Accounting</td>
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
