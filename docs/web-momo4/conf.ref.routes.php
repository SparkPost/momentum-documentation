<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>routes</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="config.options.ref.php" title="Chapter 72. Configuration Options Reference">
<link rel="prev" href="conf.ref.rfc2822_trace_headers.php" title="rfc2822_trace_headers">
<link rel="next" href="conf.ref.rset_timeout.php" title="rset_timeout">
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
<tr><th colspan="3" align="center">routes</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.rfc2822_trace_headers.php">Prev</a> </td>
<th width="60%" align="center">Chapter 72. Configuration Options Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.rset_timeout.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="conf.ref.routes"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>routes — configure message routing</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">Routes = ( "smtp://1.2.3.4?pref=10&amp;ttl=300&amp;type=mx" ) </code> </p></div>
<div class="cmdsynopsis"><p><code class="command">Routes = ( "my.local.smart.host" ) </code> </p></div>
<div class="cmdsynopsis"><p><code class="command">Routes = ( "__mx__" ) </code> </p></div>
<div class="cmdsynopsis"><p><code class="command">Routes = ( "smtp://my.local.smart.host?pref=1" "__mx__" ) </code> </p></div>
</div>
<div class="refsection">
<a name="idp26339360"></a><h2>Description</h2>
<p>
      The routes option allows you to specify how you would like mail
      for a given domain to be routed. If this option is specified at
      the global scope, all outbound connections will be made according
      to the route you specified, unless explicitly overridden by
      another routes option for a given domain.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        When delivering mail via ecstream, do not use the
        <code class="option">routes</code> option. Use the
        <a class="xref" href="conf.ref.gateway.php" title="gateway"><span class="refentrytitle">gateway</span></a> option instead.
      </p>
<p>
        After changing the routes array and issuing the <span class="command"><strong>config
        reload</strong></span> command, the new configuration will not take
        effect until the existing domain information has reached its TTL
        and the domain details need to be looked up again. If you need
        to change the routing information immediately, use
        the console command 
        <a class="xref" href="console_commands.refresh_domain.php" title="refresh domain"><span class="refentrytitle">refresh domain</span></a>.
      </p>
</div>
<p>
      At the simplest level, you can implement what other MTAs call
      "smarthosting" by setting the route to the hostname or IP address
      of the local mail routing hub. You can specify more than just a
      single smart host using this configuration option, which allows
      for a much more flexible routing arrangement.
    </p>
<p>
      Each item listed in the routes option is added to the routing
      table for the domain (or globally, if the routes option is not in
      a domain). By default, the routes are listed in preferential
      order, with the first listed item being attempted before any
      others, unless there is an explicit preference applied to the
      item. If the query string doesn't specify a preference or type and
      there is more than one domain or IP address listed, then the first
      item is used exclusively unless it's unavailable, in which case
      the second item is used and so on.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        Message throughput can be greatly reduced if a global route is
        set.
      </p>
</div>
<p>
      Each item can be either a hostname or an IP address to indicate
      that a given host be added to the routing options. It may also be
      the literal string <code class="literal">__mx__</code> which expands to the
      default set of mail exchanges found in DNS for the domain.
    </p>
<p>
      A fourth option is a protocol string of the form
      "smtp://ip?pref=P&amp;ttl=T&amp;port=O&amp;type=Y" where:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">P</code> is a number indicating the MX preference
          (lower values having higher priority).
        </p></li>
<li class="listitem"><p>
          <code class="literal">T</code> is the effective time-to-live for the
          entry in seconds.
        </p></li>
<li class="listitem"><p>
          <code class="literal">O</code> is the port number to use for that host.
          The default port is configured with the
          <code class="literal">Remote_SMTP_Port</code> configuration option. See
          <a class="xref" href="conf.ref.remote_smtp_port.php" title="remote_smtp_port"><span class="refentrytitle">remote_smtp_port</span></a>.
        </p></li>
<li class="listitem"><p>
          <code class="literal">Y</code> is the type of lookup. The value may be
          <code class="literal">mx</code> or <code class="literal">a</code>.
        </p></li>
</ul></div>
<p>
      When a new connection is opened several factors are considered
      when deciding which MX to connect to. Momentum never uses a higher
      preference MX if a lower preference MX is below its connection
      limit and is considered reachable. If there are several MXs of the
      same (lowest available) preference, Momentum attempts to open
      connections to all of them evenly, but when it hits a limit with a
      specific MX, it will stop opening connections to that MX. Momentum
      does not try to balance connections proportional to an MX's limit.
      Also, this does not guarantee that traffic will be equal through
      all equal preference MXs, since individual MX performance and
      network performance to each MX will affect how fast messages are
      able to go out to it. Given these caveats, load balancing can be
      achieved using a configuration such as the following:
    </p>
<pre class="programlisting">
Routes = ( 
           "smtp://10.0.11.7?pref=10" "smtp://10.0.11.8?pref=10"
           "smtp://10.0.11.10?pref=10" "smtp://10.0.11.13?pref=10"
           "smtp://10.0.11.56?pref=10"
         )
</pre>
<p>
      The <code class="option">routes</code> option is also used when the
      <a class="link" href="conf.ref.delivery_method.php" title="delivery_method">delivery_method</a>
      is:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">apn</code> – The Apple Push Notification
          protocol
        </p></li>
<li class="listitem"><p>
          <code class="literal">gcm</code> – The Google Cloud Messages
          protocol
        </p></li>
<li class="listitem"><p>
          <code class="literal">mm7</code> – Multimedia Messaging service
          protocol
        </p></li>
</ul></div>
<p>
      Use <code class="option">routes</code> specifying the protocol, the server
      URL, and the port. The protocol should match the
      <a class="link" href="conf.ref.delivery_method.php" title="delivery_method">delivery_method</a> as
      in the following examples:
    </p>
<pre class="programlisting">
domain "apn_example.com"{
  ...
  delivery_method = "apn"
  routes = ("apn://gateway.push.apple.com?port=2195")
}
domain "gcm.example.com" {
  ...
  delivery_method = "gcm"
  routes = ("gcm://android.google.apis.com?port=443")
}
</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
        Specifying the protocol as <code class="literal">mm7</code>,
        <code class="literal">apn</code> and <code class="literal">gcm</code> is optional.
        Instead, you can use <code class="literal">http</code>.
      </p>
</div>
<p>
      Typically with push notifications, <code class="option">routes</code> will be
      defined within a domain scope applicable to the Apple or Google
      application that is receiving the notifications. For a detailed
      description of configuring Momentum for push notifications see
      <a class="link" href="https://support.messagesystems.com/docs/web-push/" target="_top">Momentum for Mobile Push
      Notifications</a>.
    </p>
<h2>
<a name="idp26373184"></a>IPv6</h2>
<p>
      IPv6 addresses are much more flexible than IPv4 addresses in terms
      of their formatting options. They also use a different delimiter
      character than IPv4 addresses (a colon instead of a period). This
      means that, in certain contexts, an IPv6 address can create
      parsing ambiguities.
    </p>
<p>
      The accepted convention is to require (in circumstances where a
      configuration parameter can also contain something other than an
      IP address) that an IPv6 address must be enclosed in square
      brackets. In practical terms, this means that things like the
      <code class="option">Gateway</code>, <code class="option">Routes</code> and
      <code class="option">Listen</code> options must have IPv6 addresses enclosed
      in brackets. Others, such as <code class="option">Peer</code>,
      <code class="option">Relay_Hosts</code> and
      <code class="option">Prohibited_Hosts</code>, do not require the IPv6 address
      in brackets.
    </p>
</div>
<div class="refsection">
<a name="idp26378064"></a><h2>Scope</h2>
<p>
      <code class="option">routes</code> is valid in the domain and global scopes.
    </p>
</div>
<div class="refsection">
<a name="idp26380336"></a><h2>See Also</h2>
<p>
      <a class="xref" href="conf.ref.gateway.php" title="gateway"><span class="refentrytitle">gateway</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.rfc2822_trace_headers.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="config.options.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.rset_timeout.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">rfc2822_trace_headers </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> rset_timeout</td>
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
