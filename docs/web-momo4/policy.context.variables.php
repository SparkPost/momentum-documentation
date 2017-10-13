<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 63. Validation Context Variables</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.policy.php" title="Part IX. Writing Policy">
<link rel="prev" href="implementing.policy.scriptlets.php" title="62.2. Policy Scriptlets">
<link rel="next" href="policy.context-mess.php" title="63.2. Message Context Variables">
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
<tr><th colspan="3" align="center">Chapter 63. Validation Context Variables</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="implementing.policy.scriptlets.php">Prev</a> </td>
<th width="60%" align="center">Part IX. Writing Policy</th>
<td width="20%" align="right"> <a accesskey="n" href="policy.context-mess.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="policy.context.variables"></a>Chapter 63. Validation Context Variables</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="policy.context.variables.php#policy.predefined-context-conn">63.1. Connection Context Variables</a></span></dt>
<dt><span class="section"><a href="policy.context-mess.php">63.2. Message Context Variables</a></span></dt>
</dl>
</div>
<p>
    As mentioned in <a class="xref" href="policy.php#policy.validation" title="62.1. Validation and the Validation Context">Section 62.1, “Validation and the Validation Context”</a>, context
    variables play a significant role when policy is enforced using
    scripts. In addition to user-defined variables, there are predefined
    validation context variables accessible in both the connection
    context and the message context. Not all context variables will be
    set in all cases; some, for example, depend on TLS settings and
    others on which modules are loaded into Momentum. Some context
    variables are defined in a global scope and some in a module scope.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="policy.predefined-context-conn"></a>63.1. Connection Context Variables</h2></div></div></div>
<p>
      Connection context variables are set upon the creation of a
      successful connection and contain information regarding the remote
      client. Connection context variables are predefined, either in a
      global context or within a module. The following tables list the
      global and module-specific variables.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="policy.predefined-context-conn-global"></a>63.1.1. Global Predefined Connection Context Variables</h3></div></div></div>
<p>
        This table lists all connection context variables that are
        predefined globally by Momentum.
      </p>
<div class="table">
<a name="predefined-context-conn-global"></a><p class="title"><b>Table 63.1. Global Predefined Connection Context Variables</b></p>
<div class="table-contents"><table summary="Global Predefined Connection Context Variables" border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Connection Context Variable
              </th>
<th>
                Description
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                <a class="link" href="inbound_smtp.php" title="19.5. ESMTP_Listener Authentication">auth_name</a> –
                Type of authentication
              </td>
<td>
                <p>
                  Description of the form of authentication that was
                  attempted (e.g. PLAIN, LOGIN, CRAM-MD5, DIGEST-MD5).
                </p>



                <p>
                  This variable is available as of the
                  <a class="link" href="https://support.messagesystems.com/docs/web-c-api/hooks.core.validate_auth.php" target="_top">validate_auth</a>
                  hook. For scripting, use the
                  <code class="literal">core_validate_auth_hook</code> callout.
                </p>
              </td>
</tr>
<tr>
<td>
                <a class="link" href="inbound_smtp.php" title="19.5. ESMTP_Listener Authentication">auth_status</a> –
                Authentication status
              </td>
<td>
                <p>
                  When an SMTP client performs an SMTP AUTH action,
                  <code class="literal">auth_status</code> cwill be set to one of
                  "pass", "fail", or "error".
                </p>



                <p>
                  This variable is available as of the
                  <a class="link" href="https://support.messagesystems.com/docs/web-c-api/hooks.core.validate_auth.php" target="_top">validate_auth</a>
                  hook. For scripting, use the
                  <code class="literal">core_validate_auth_hook</code> callout.
                </p>
              </td>
</tr>
<tr>
<td>
                <a class="link" href="inbound_smtp.php" title="19.5. ESMTP_Listener Authentication">auth_user</a> –
                Authenticated username
              </td>
<td>
                <p>
                  When an SMTP client performs an SMTP AUTH action,
                  <code class="literal">auth_user</code> will be set to the
                  username used during authorization.
                </p>



                <p>
                  This variable is available as of the
                  <a class="link" href="https://support.messagesystems.com/docs/web-c-api/hooks.core.validate_auth.php" target="_top">validate_auth</a>
                  hook. For scripting, use the
                  <code class="literal">core_validate_auth_hook</code> callout.
                </p>
              </td>
</tr>
<tr>
<td>
                <a class="link" href="inbound_smtp.php" title="19.5. ESMTP_Listener Authentication">can_relay</a> –
                Whether relaying is allowed
              </td>
<td>
                <p>
                  When an SMTP client is allowed to relay through
                  Momentum because of an entry in
                  <a class="link" href="conf.ref.relay_hosts.php" title="relay_hosts"><code class="option">relay_hosts</code></a>
                  or a relaying declaration in an ESMTP_Listener IP
                  access control list, <code class="literal">can_relay</code> is
                  set to "true".
                </p>



                <p>
                  Accessible as of the
                  <a class="link" href="https://support.messagesystems.com/docs/web-c-api/hooks.core.config_get_domain_relay.php" target="_top">config_get_domain_relay</a>
                  hook.
                </p>
              </td>
</tr>
<tr>
<td>
                connection_message_count – Number of messages on
                the connection
              </td>
<td>

              </td>
</tr>
<tr>
<td>
                connection_rcpt_count – Number of recipients on
                the connection
              </td>
<td>
                <p>
                  This variable counts the <span class="emphasis"><em>total</em></span>
                  number of RCPT TOs on this open connection, while
                  <code class="literal">message_rcpt_count</code> counts the
                  number of RCPT TOs since the last MAIL FROM.
                </p>


              </td>
</tr>
<tr>
<td>
                ehlo_domain – Domain from the EHLO phase
              </td>
<td>
                <p>
                  Accessible as of the EHLO phase.
                </p>
              </td>
</tr>
<tr>
<td>
                ehlo_string – Complete EHLO string
              </td>
<td>
                <p>
                  Accessible as of the EHLO phase.
                </p>
              </td>
</tr>
<tr>
<td>
                message_rcpt_count – Number of recipients for the
                current message
              </td>
<td>
                <p>
                  Since a given message "object" can only have one
                  recipient, multiple recipients are a property of the
                  current session and are tracked at the connection
                  level not the message level. This variable counts the
                  number of RCPT TOs since the last MAIL FROM, while
                  <code class="literal">connection_rcpt_count</code> counts the
                  <span class="emphasis"><em>total</em></span> number of RCPT TOs on this
                  open connection.
                </p>



                <p>
                  Accessible as of the
                  <a class="link" href="https://support.messagesystems.com/docs/web-c-api/hooks.core.validate_data_spool_each_rcpt.php" target="_top">validate_data_spool_each_rcpt</a>
                  hook.
                </p>
              </td>
</tr>
<tr>
<td>
                tls – Whether TLS is in use
              </td>
<td> </td>
</tr>
<tr>
<td>
                tls_cipher – Identifies the cipher in use for a
                TLS enabled session
              </td>
<td>
                <p>
                  Accessible from the
                  <a class="link" href="https://support.messagesystems.com/docs/web-c-api/hooks.core.outbound_tls_ciphers.php" target="_top">outbound_tls_ciphers</a>
                  hook.
                </p>
              </td>
</tr>
<tr>
<td>
                tls_cipher_algbits – Number of bits the algorithm
                is based on
              </td>
<td>
                <p>
                  For example, <code class="literal">128</code>.
                </p>
              </td>
</tr>
<tr>
<td>
                tls_cipher_usebits – Number of bits used
              </td>
<td>
                <p>
                  For example, <code class="literal">40</code>.
                </p>
              </td>
</tr>
<tr>
<td>
                tls_client_cert_subject – Holds the subject of the
                peer certificate for a TLS enabled session
              </td>
<td> </td>
</tr>
<tr>
<td>
                tls_client_cert_subject_cn – Common name of the
                subject of the peer certificate
              </td>
<td> </td>
</tr>
<tr>
<td>
                tls_client_cert_issuer – Holds the issuer of the
                peer certificate for a TLS enabled session
              </td>
<td> </td>
</tr>
<tr>
<td>
                tls_client_cert_issuer_cn – Common name of the
                issuer of the peer certificate
              </td>
<td> </td>
</tr>
<tr>
<td>
                tls_client_verified
              </td>
<td>
                <p>
                  Set to the string <code class="literal">yes</code> if the peer
                  certificate was verified against the configured
                  Certificate Authorities.
                </p>
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="policy.predefined-context-conn-module"></a>63.1.2. Predefined Module-Specific Connection Context Variables</h3></div></div></div>
<p>
        Modules that support predefined module-specific connection
        context variables are listed below:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <a class="link" href="modules.conntrol.php#modules.conntrol.context.variables" title="71.22.2. Connection Context Variables">conntrol
            – Fine-Grained Connection Control</a>
          </p></li>
<li class="listitem"><p>
            <a class="link" href="modules.mail_loop.php#modules.mail_loop.context.variables" title="71.45.2. Connection Context Variables">mail_loop
            – Mail Loop Detection</a>
          </p></li>
</ul></div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="implementing.policy.scriptlets.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.policy.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="policy.context-mess.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">62.2. Policy Scriptlets </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 63.2. Message Context Variables</td>
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
