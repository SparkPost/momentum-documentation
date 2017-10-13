<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>25.5. Outbound TLS</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="outbound_mail.php" title="Chapter 25. Configuring Outbound Mail Delivery">
<link rel="prev" href="outbound_mail.traffic.shaping.php" title="25.4. Throttling and Traffic Shaping">
<link rel="next" href="outbound_mail.outbound.xclient.php" title="25.6. Outbound XCLIENT support">
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
<tr><th colspan="3" align="center">25.5. Outbound TLS</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="outbound_mail.traffic.shaping.php">Prev</a> </td>
<th width="60%" align="center">Chapter 25. Configuring Outbound Mail Delivery</th>
<td width="20%" align="right"> <a accesskey="n" href="outbound_mail.outbound.xclient.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="tls_option"></a>25.5. Outbound TLS</h2></div></div></div>
<p>
    A recent initiative among the large ISPs and receiving domains is to
    use Transport Layer Security protocol (TLS) by default for mail
    traffic. TLS is a standard for providing cryptographic protection of
    communication sessions between two systems. It is derived from the
    earlier standard, Secure Sockets Layer (SSL) and is the replacement
    for SSL. – They are not the same.
  </p>
<p>
    Momentum supports enforced TLS and opportunistic TLS. When TLS is
    enforced, Momentum will deliver messages only if TLS is successfully
    negotiated. Opportunistic TLS enables Momentum to deliver messages
    over TLS if the remote host advertises TLS support and the TLS
    negotiation succeeds but also provides an option to send the message
    as plain-text if the TLS negotiation fails.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="tls_option.configuration"></a>25.5.1. Configuration</h3></div></div></div>
<p>
      Outbound TLS is configured using options in the
      <code class="filename">ecelerity.conf</code> file. You may configure
      Momentum to use TLS in the global, domain, binding, or
      binding_group scope when delivering mail. Momentum 4 supports the
      OpenSSL and GNUTLS libraries.
    </p>
<p class="config"><b>Configuration Change. </b>
        Support for GNUTLS is available as of version 4.1 for SMTP
        reception and SMTP deliveries only. Support for opportunistic
        TLS is available as of version 4.1.
      </p>
<p>
      By default, TLS is disabled. To use TLS, you must change the
      <code class="option">TLS</code> option in the
      <code class="filename">ecelerity.conf</code> file and configure the
      following TLS-related options:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <a class="link" href="config.crypto_lock_method.php" title="crypto_lock_method">crypto_lock_method</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.ssl_lock_method.php" title="ssl_lock_method">ssl_lock_method</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.starttls_injection_policy.php" title="starttls_injection_policy">starttls_injection_policy</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.ref.tls.php" title="tls">tls</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_allow_renegotiation.php" title="tls_allow_renegotiation">tls_allow_renegotiation</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_ca.php" title="tls_ca">tls_ca</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_certificate.php" title="tls_certificate">tls_certificate</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_ciphers.php" title="tls_ciphers">tls_ciphers</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="conf.ref.tls_dhparams_file.php" title="tls_dhparams_file">tls_dhparams_file</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="conf.ref.tls_enable_dhe_ciphers.php" title="tls_enable_dhe_ciphers">tls_enable_dhe_ciphers</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_engine.php" title="tls_engine">tls_engine</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_ifavailable_fallback.php" title="tls_ifavailable_fallback">tls_ifavailable_fallback</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_key.php" title="tls_key">tls_key</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_protocols.php" title="tls_protocols">tls_protocols</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_verified_peer_is_authorized.php" title="tls_verified_peer_is_authorized">tls_verified_peer_is_authorized</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="config.tls_verify.php" title="tls_verify">tls_verify</a>
        </p></li>
</ul></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If you enable TLS, see
        <a class="xref" href="install.security_considerations.php" title="12.6. Security Considerations">Section 12.6, “Security Considerations”</a> for
        information on how to fix the POODLE vulnerability using either
        the <a class="link" href="config.tls_protocols.php" title="tls_protocols">tls_protocols</a>
        option (for OpenSSL) or the
        <a class="link" href="config.tls_ciphers.php" title="tls_ciphers">tls_ciphers</a> option
        (for GNUTLS).
      </p>
</div>
<p>
      The following is an example configuration in the
      <code class="filename">ecelerity.conf</code> file:
    </p>
<pre class="programlisting">
# TLS settings for customer-1
binding "customer-1" {
  tls_key = "/path/to/customer1.key"
  tls_certificate = "/path/to/customer2.cert"

  domain "trusted.partner.example.com" {
    tls = "required"
    tls_ca = "/path/to/customer1/partners.cabundle"
  }
}
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="tls_option.logging"></a>25.5.2. Logging Macros</h3></div></div></div>
<p>
      A number of macros are available to enable logging of details
      about the TLS session used for a delivery attempt. To use these
      macros, you must load the tls_macros module. See
      <a class="xref" href="tls_macros.php" title="71.72. tls_macros – TLS-related Logging">Section 71.72, “tls_macros – TLS-related Logging”</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="outbound_mail.traffic.shaping.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="outbound_mail.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="outbound_mail.outbound.xclient.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">25.4. Throttling and Traffic Shaping </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 25.6. Outbound XCLIENT support</td>
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
