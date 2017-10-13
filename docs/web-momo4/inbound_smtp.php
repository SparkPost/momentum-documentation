<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>19.5. ESMTP_Listener Authentication</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="esmtp_listener.php" title="Chapter 19. Configuring Inbound Mail Service Using SMTP">
<link rel="prev" href="esmtp_listener.extensions.php" title="19.4. SMTP Extensions">
<link rel="next" href="inbound_ssl.php" title="19.6. Inbound SSL">
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
<tr><th colspan="3" align="center">19.5. ESMTP_Listener Authentication</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="esmtp_listener.extensions.php">Prev</a> </td>
<th width="60%" align="center">Chapter 19. Configuring Inbound Mail Service Using SMTP</th>
<td width="20%" align="right"> <a accesskey="n" href="inbound_ssl.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="inbound_smtp"></a>19.5. ESMTP_Listener Authentication</h2></div></div></div>
<p>
    Momentum can be configured to perform authentication on SMTP
    connections. It provides out-of-the-box support for authenticating
    remote users against a flat-file using CRAM-MD5, DIGEST-MD5, and
    LOGIN authentication extensions to SMTP. Additional authentication
    back-ends can be plugged into Momentum in the form of authentication
    modules; Momentum ships with authentication modules for a number of
    standard datasources, and third-party vendors may provide others.
    For more details on datasource based authentication modules, see
    <a class="xref" href="modules.auth_ds.php" title="71.8. auth_ds – Datasource based SMTP Authentication">Section 71.8, “auth_ds – Datasource based SMTP Authentication”</a>.
  </p>
<p>
    Upon successful authentication, the following are stored in the
    connection validation context:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <a class="link" href="policy.context.variables.php#predefined-context-conn-global" title="Table 63.1. Global Predefined Connection Context Variables">auth_name</a>
        – Type of authentication
      </p></li>
<li class="listitem"><p>
        <a class="link" href="policy.context.variables.php#predefined-context-conn-global" title="Table 63.1. Global Predefined Connection Context Variables">auth_status</a>
        – Authenticated status
      </p></li>
<li class="listitem"><p>
        <a class="link" href="policy.context.variables.php#predefined-context-conn-global" title="Table 63.1. Global Predefined Connection Context Variables">auth_user</a>
        – Authenticated username
      </p></li>
</ul></div>
<p>
    In addition, the SMTP session will be marked as relayable, setting
    the connection context variable
    <a class="link" href="policy.context.variables.php#predefined-context-conn-global" title="Table 63.1. Global Predefined Connection Context Variables">can_relay</a>
    to "true".
  </p>
<p>
    These results of the authentication attempt will be used to generate
    an <code class="literal">Authentication-Results:</code> header in the mail
    before it is delivered from Momentum.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Hosts are not subject to any SMTP authentication that you may have
      implemented when specified by the
      <a class="link" href="conf.ref.relay_hosts.php" title="relay_hosts"><code class="option">relay_hosts</code></a>
      option or when
      <a class="link" href="conf.ref.open_relay.php" title="open_relay"><code class="option">open_relay</code></a>
      is set to "true".
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="inbound_smtp.digest-md5"></a>19.5.1. DIGEST-MD5 Authentication</h3></div></div></div>
<p>
      Implements the DIGEST-MD5 authentication mechanism specified in
      RFC 2831. A "uri" parameter is required specifying which uri to
      use for authentication. DIGEST-MD5 supports secure pre-computed
      values, so the passwords may be stored "hashed" or in clear text.
      By default, passwords returned from the provided uri should be
      hashed. If the parameter "stored_cleartext" is set to "true", the
      passwords will be expected in clear text and the hash will be
      computed internally before matching.
    </p>
<p>
      DIGEST-MD5 authenticates users within a given realm. This realm
      can be specified by adding a "realm" parameter valued as needed.
      If left unspecified, the server hostname will be used.
    </p>
<p>
      To advertise this auth mechanism over SMTP, the "extension = AUTH"
      and "extension_argument = DIGEST-MD5" must be specified.
    </p>
<p>
      To configure DIGEST-MD5 authentication, configure your
      ESMTP_Listener as shown below. This configures SMTP service on
      port 25 with a ruleset that matches all clients connecting from
      any IP address. Inside that ruleset, the AUTH SMTP extension is
      configured for DIGEST-MD5, using the digest file
      <code class="filename">/opt/msys/ecelerity/etc/smtp_passwd</code> as the
      authentication source. The authentication realm is configured
      using the optional <code class="literal">realm</code> parameter (if left
      unspecified, the hostname of the server is used instead (see
      <a class="xref" href="conf.ref.hostname.php" title="hostname"><span class="refentrytitle">hostname</span></a>)).
    </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen ":25" {
    AuthDigestMD5Parameters = [
      uri = "digest:///opt/msys/ecelerity/etc/smtp_passwd"
      realm = "my choice of realm"
    ]
    SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH DIGEST-MD5" )
  }
}
</pre>
<p>
      The digest file referenced by the <code class="literal">uri</code> parameter
      can be created and updated using the
      <a class="xref" href="executable.ec_md5passwd.php" title="ec_md5passwd"><span class="refentrytitle">ec_md5passwd</span></a> tool.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="inbound_smtp.cram-md5"></a>19.5.2. CRAM-MD5 Authentication</h3></div></div></div>
<p>
      Implements the CRAM-MD5 authentication mechanism specified in RFC
      2195. A "uri" parameter is required specifying which uri to use
      for authentication. As the CRAM-MD5 protocol does not make use of
      any secure precalculated values, the passwords stored in the file
      (if it is a <code class="filename">file://</code> uri) must be stored in
      clear text.
    </p>
<p>
      To advertise this auth mechanism over SMTP, the "extension = AUTH"
      and "extension_argument = CRAM-MD5" must be specified.
    </p>
<p>
      CRAM-MD5 authentication is configured in a similar way to
      DIGEST-MD5, except that the password file stores passwords in
      clear text.
    </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen ":25" {
    AuthCramMD5Parameters = [
      uri = "file:///opt/msys/ecelerity/etc/cram_md5_passwd"
    ]
    SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH CRAM-MD5" )
  }
}
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="inbound_smtp.clear.text"></a>19.5.3. Clear Text LOGIN Authentication</h3></div></div></div>
<p>
      Implements the LOGIN authentication mechanism specified in RFC
      2222. A "uri" parameter is required specifying which uri to use
      for authentication. As the LOGIN protocol does not make use of any
      secure precalculated values, the passwords stored in the file (if
      it is a file:// uri) must be stored in clear text.
    </p>
<p>
      To advertise this auth mechanism over SMTP, the "extension = AUTH"
      and "extension_argument = LOGIN" must be specified.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        Note that the LOGIN mechanism both stores passwords in clear
        text locally and transmits the username and password credentials
        in clear text over the network. This authentication mechanism
        (as defined by standards) is in no way "secure." It should be
        avoided unless absolutely necessary; if you must use it, use it
        in conjunction with TLS.
      </p>
</div>
<p>
      Configuration is similar to CRAM-MD5:
    </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen ":25" {
    AuthLoginParameters = [
      uri = "file:///opt/msys/ecelerity/etc/unsafe_passwd"
    ]
    SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH LOGIN" )
  }
}
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="inbound_smtp.plain.text"></a>19.5.4. Plain Text Authentication</h3></div></div></div>
<p>
      Plain text authentication is handled in the same way as clear
      text:
    </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen ":25" {
    SMTP_Extensions = ("AUTH PLAIN")
    AuthPlainParameters = [
      log_authentication = "true"
      uri = "file:///opt/msys/ecelerity/etc/plain_password"
    ]
  }
}
</pre>
<p>
      The <code class="literal">file://</code> authentication storage scheme
      references the path to a plain text password file. Within this
      file, lines starting with a ‘<code class="literal">#</code> are treated as
      comments and are ignored. The lines are divided into two fields
      separated by a ‘<code class="literal">:</code>' character where the first
      field is the username and the second is the plain text password.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="inbound_smtp.logging.auth"></a>19.5.5. Logging SMTP Authentication Events</h3></div></div></div>
<p>
      You can enable logging of SMTP authentication events by setting
      the <code class="option">log_authentication</code> to <code class="literal">true</code>
      in your SMTP authentication configuration block.
    </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen ":25" {
    AuthCramMD5Parameters = [
      uri = "file:///opt/msys/ecelerity/etc/cram_md5_passwd"
      log_authentication = "true"
    ]
    SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH CRAM-MD5" )
  }
}
</pre>
<p>
      However, you still need to configure an account log logging module
      in order to record the accounting information. Set the
      <code class="option">acctlog</code> option in an
      <a class="link" href="modules.ec_logger.php" title="71.30. EC_logger – Momentum-Style Logging">ec_logger</a> module in your
      configuration. When log authentication is enabled, a line will be
      written to the <code class="filename">acctlog</code> file for every
      authorization event. Each command and its authorization status
      will be logged to the <code class="filename">acctlog</code>. If a command
      is allowed, the role that matched will be included in the log
      entry. For <code class="filename">acctlog</code> format, see
      <a class="xref" href="log_formats.php#log_formats.acctlog" title="35.1. acctlog">Section 35.1, “<code class="filename">acctlog</code>”</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="esmtp_listener.extensions.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="esmtp_listener.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="inbound_ssl.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">19.4. SMTP Extensions </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 19.6. Inbound SSL</td>
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
