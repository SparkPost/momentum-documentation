<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.9. auth_radius – RADIUS based SMTP Authentication</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.auth_ds.php" title="71.8. auth_ds – Datasource based SMTP Authentication">
<link rel="next" href="modules.beik.php" title="71.10. beik – Symantec Brightmail™ Engine Integration Kit">
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
<tr><th colspan="3" align="center">71.9. auth_radius – RADIUS based SMTP Authentication</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.auth_ds.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.beik.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.auth_radius"></a>71.9. auth_radius – RADIUS based SMTP Authentication</h2></div></div></div>
<a class="indexterm" name="idp19937808"></a><p>
    The <code class="literal">auth_radius</code> module allows Momentum to provide
    authenticated SMTP sessions via SMTP AUTH using up to 10 RADIUS
    servers. The authentication mode is limited to simple
    authentication; challenge/response RADIUS authentication is not
    supported.
  </p>
<p>
    The following example demonstrates how to configure Momentum to pass
    LOGIN credentials through to RADIUS. We recommend employing TLS when
    using LOGIN authentication, as the password is sent over the wire in
    clear text. Two radius servers are configured; when an
    authentication attempt is made, the servers will be tried in the
    order that they were listed in the configuration file. If no
    response is received within the configured <code class="option">timeout</code>,
    then the request will be repeated against that server until the
    maximum number of retries is reached. If a retry would exceed
    <code class="option">max_tries</code> then the next server will be attempted.
    If no response is received from any of the radius servers, an error
    will be logged and authentication will not succeed. Otherwise, the
    radius server indicates whether authentication succeeded and this is
    reflected in the SMTP session.
  </p>
<div class="example">
<a name="example.auth_radius.3"></a><p class="title"><b>Example 71.16. auth_radius module</b></p>
<div class="example-contents"><pre class="programlisting">
# Configure the RADIUS client
auth_radius {
  NAS-IP-Address = 10.0.0.1 # the IP address of this SMTP server
  server "one" {
    host = "radius-1.example.com"
    secret = "secret1"
    max_tries = "1"
    timeout = "30"
  }
  server "two" {
    host = "radius-2.example.com"
    secret = "secret2"
    max_tries = "2"
    timeout = "30"
  }
}
Esmtp_Listener {
  Listen ":25" {
    Peer "0.0.0.0/0" {
      SMTP_Extensions = (
        "ENHANCEDSTATUSCODES"
        "STARTTLS"
        "AUTH LOGIN"
      )
       # use RADIUS as the authentication backend
      AuthLoginParameters = [
        uri = "radius://"
      ]
    }
  }
  Idle_Time = 300
  SMTP_Extensions = (
    "ENHANCEDSTATUSCODES"
  )
}
</pre></div>
</div>
<br class="example-break"><p>
    The RADIUS protocol says that a RADIUS client "SHOULD" send either
    <code class="option">NAS-IP-Address</code> or <code class="option">NAS-Identifier</code>,
    perhaps even both. The Momentum RADIUS client implementation does
    not force you to specify either. If you are configuring a cluster,
    and your RADIUS server doesn't require either of these options to be
    present (the FreeRADIUS server implementation is one that does not),
    you might find it simplest to omit them from your configuration
    file.
  </p>
<h3>
<a name="idp19947792"></a>Configuration Options</h3>
<p>
    The following options are supported:
  </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
        NAS-IP-Address
      </span></dt>
<dd><p>
          Specifies the IP address of the RADIUS client. This may be
          omitted, but some RADIUS server implementations require either
          NAS-IP-Address or NAS-Identifier to be present in the request
          packet.
        </p></dd>
<dt><span class="term">
        NAS-Identifier
      </span></dt>
<dd><p>
          A 32-bit integer client identifier. This may be omitted, but
          some RADIUS server implementations require either
          NAS-IP-Address or NAS-Identifier to be present in the request
          packet.
        </p></dd>
</dl></div>
<p>
    RADIUS servers can be defined using the dictionary syntax shown
    above; the dictionary name must be prefixed with
    <code class="literal">server:</code> to be recognized as a server definition.
    The portion of the name after the colon is arbitrary, but should be
    unique among the radius servers being defined. The contents of the
    server dictionary can have the following keys:
  </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
        host
      </span></dt>
<dd><p>
          The hostname or IP address of the RADIUS server. If a colon is
          present in the string then the left side of the string will be
          used as the hostname/IP address and the right hand side will
          be used as the port number on the server. If left unspecified,
          the RADIUS standard port number of 1812 will be used.
        </p></dd>
<dt><span class="term">
        secret
      </span></dt>
<dd><p>
          A secret string shared between the client and the server.
        </p></dd>
<dt><span class="term">
        max_tries
      </span></dt>
<dd><p>
          The maximum number of times we'll try this RADIUS server for a
          given authentication attempt.
        </p></dd>
<dt><span class="term">
        timeout
      </span></dt>
<dd><p>
          The maximum number of seconds to wait for a response from this
          RADIUS server before trying again or giving up.
        </p></dd>
</dl></div>
<p>
    You can additionally provide a 'map' that is applied to the provided
    username and password. This allows for the addition of default
    domain to usernames, etc. The allowable keys in the map are
    <code class="literal">username</code> and <code class="literal">password</code>, which
    sets the mapping for the username passed into RADIUS, respectively.
    The contents of the map stanza look like the following:
  </p>
<div class="example">
<a name="example.auth_radius.map.3"></a><p class="title"><b>Example 71.17. auth_radius map</b></p>
<div class="example-contents"><pre class="programlisting">
auth_radius {
  NAS-IP-Address = 10.0.0.1 # the IP address of this SMTP server
  server "one" {
    host = "radius-1.example.com"
    secret = "secret1"
    max_tries = "1"
    timeout = "30"
  }
  map [
    username = "%{username_localpart}@%{username_domain||example.com}"
  ]
}</pre></div>
</div>
<br class="example-break"><p>
    This stanza has the effect of providing a default domain on the
    username provided to RADIUS in the event that a domain was not
    provided. Possible template values are:
  </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
        username
      </span></dt>
<dd><p>
          The provided username.
        </p></dd>
<dt><span class="term">
        username_localpart
      </span></dt>
<dd><p>
          The email localpart of the provided username.
        </p></dd>
<dt><span class="term">
        username_domain
      </span></dt>
<dd><p>
          The email domain of the provided username.
        </p></dd>
<dt><span class="term">
        password
      </span></dt>
<dd><p>
          The password provided.
        </p></dd>
<dt><span class="term">
        ||
      </span></dt>
<dd><p>
          If the token to the left of the <code class="literal">||</code> is the
          empty string, then the value to the right of the
          <code class="literal">||</code> will be used in its place.
        </p></dd>
</dl></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.auth_ds.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.beik.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.8. auth_ds – Datasource based SMTP Authentication </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.10. beik – Symantec <span class="trademark">Brightmail</span>™ Engine
      Integration Kit</td>
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
