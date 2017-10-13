<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>domain</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="console.cmds.ref.php" title="Chapter 73. Non-Module-Specific Console Commands">
<link rel="prev" href="console_commands.dns_cache.php" title="dns_cache">
<link rel="next" href="console_commands.domain_all.php" title="domain all">
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
<tr><th colspan="3" align="center">domain</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="console_commands.dns_cache.php">Prev</a> </td>
<th width="60%" align="center">Chapter 73. Non-Module-Specific Console Commands</th>
<td width="20%" align="right"> <a accesskey="n" href="console_commands.domain_all.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="console_commands.domain"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>domain — show domain statistics</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">domain</code>  {
        <em class="replaceable"><code>domain_name</code></em>
      }</p></div>
</div>
<div class="refsection">
<a name="idp11355440"></a><h2>Description</h2>
<p>
      The <span class="command"><strong>domain</strong></span> command takes a single argument
      specifying a domain to inspect. The DNS cache is searched and if
      the domain is current in the cache, detailed information about its
      DNS records, queues, and connections are displayed.
    </p>
<p>
      It is important to note the metrics displayed are for the life of
      the domain in the DNS cache. It is possible for the system to
      display zero deliveries for a domain to which Momentum has
      delivered messages if the domain record has been removed and
      subsequently reinserted into the DNS cache.
    </p>
<pre class="screen">10:47:35 /tmp/2025&gt; domain hotmail.com
Domain hotmail.com {
  max_outbound_connections = 20
}
Domain 'hotmail.com' has 4 MXs and a TTL of 1902 seconds
  [5 mx1.hotmail.com TTL:1902]
 *      [65.54.254.129] IPv4 (0.00ms con 10259.03ms dlv) 54.27s since failure
        [65.54.252.99] IPv4 (743.66ms con 11976.77ms dlv)
        [65.54.166.99] IPv4 (77.25ms con 11726.36ms dlv)
                (also used by email.msn.com pref 5)
                (also used by msn.com pref 5)
  [5 mx2.hotmail.com TTL:1902]
        [65.54.252.230] IPv4 (77.13ms con 9427.74ms dlv)
        [65.54.166.230] IPv4 (78.02ms con 10526.13ms dlv)
 =&gt;     [65.54.254.145] IPv4 (77.34ms con 9957.49ms dlv)
                (also used by email.msn.com pref 5)
                (also used by msn.com pref 5)
  [5 mx3.hotmail.com TTL:1902]
        [65.54.167.5] IPv4 (77.30ms con 9198.22ms dlv)
 *      [65.54.254.140] IPv4 (0.00ms con 10567.53ms dlv) 89.27s since failure
        [65.54.253.99] IPv4 (78.24ms con 9187.18ms dlv)
                (also used by email.msn.com pref 5)
                (also used by msn.com pref 5)
  [5 mx4.hotmail.com TTL:1902]
        [65.54.254.151] IPv4 (6827.57ms con 10014.24ms dlv)
        [65.54.253.230] IPv4 (153.76ms con 10711.45ms dlv)
        [65.54.167.230] IPv4 (77.91ms con 9482.38ms dlv)
                (also used by email.msn.com pref 5)
                (also used by msn.com pref 5)
Domain has had 1 consecutive connection failures
Queue:
        Active:        212
        Delayed:       190
Deliveries:     10715
Failures:         612
Active Connections: 12
[ 1] FD:    174  IP:    65.54.252.99  State: reading confirmation (4615.39ms)
[ 2] FD:    270  IP:    65.54.252.99  State: reading confirmation (4605.68ms)
[ 3] FD:    171  IP:   65.54.254.129  State: reading confirmation (332.74ms)
[ 4] FD:    307  IP:    65.54.252.99  State: reading confirmation (3612.59ms)
[ 5] FD:    176  IP:   65.54.252.230  State: reading confirmation (6076.36ms)
[ 6] FD:    163  IP:   65.54.166.230  State: reading confirmation (4025.86ms)
[ 7] FD:     96  IP:   65.54.254.145  State: reading confirmation (5355.87ms)
[ 8] FD:    226  IP:   65.54.166.230  State: reading confirmation (2799.31ms)
[ 9] FD:    209  IP:   65.54.252.230  State: reading confirmation (4293.11ms)
[10] FD:    133  IP:   65.54.254.140  State: after RCPT TO (308.59ms)
[11] FD:    142  IP:     65.54.167.5  State: reading confirmation (3678.08ms)
[12] FD:    118  IP:   65.54.254.151  State: reading confirmation (960.39ms)</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
        This console command manipulates the <span class="emphasis"><em>route
        cache</em></span>, and likewise with the
        <a class="xref" href="console_commands.dig.php" title="dig"><span class="refentrytitle">dig</span></a> and
        <a class="xref" href="console_commands.refresh_domain.php" title="refresh domain"><span class="refentrytitle">refresh domain</span></a> commands. The
        <span class="emphasis"><em>DNS cache</em></span>, as manipulated by the
        <a class="xref" href="console_commands.dns_cache.php" title="dns_cache"><span class="refentrytitle">dns_cache</span></a> series of console
        commands.
      </p>
</div>
<h2>
<a name="idp11365024"></a>Domain Configuration</h2>
<p>
      The configuration will only appear if the domain in question has
      explicit per-domain configuration options set.
    </p>
<pre class="screen">Domain hotmail.com {
  max_outbound_connections = 20
}</pre>
<h2>
<a name="idp11366512"></a>DNS Information</h2>
<p>
      The name of the domain is displayed as well as the number of
      seconds it will continue to be valid in the cache (time-to-live,
      TTL).
    </p>
<pre class="screen">'hotmail.com' has 4 MXs and a TTL of 1902 seconds</pre>
<p>
      shows the domain name (hotmail.com), number of MXs and the number
      of seconds remaining before this record is refreshed.
    </p>
<pre class="screen">[5 mx1.hotmail.com TTL:1902]</pre>
<p>
      displays combined MX and Host information. 5 denotes the MX
      prefrence, mx1.hotmail.com is the MX's hostname and 1902 is the
      DNS TTL.
    </p>
<pre class="screen">[65.54.254.145] IPv4 (77.34ms con 9957.49ms dlv)</pre>
<p>
      displays information representing one of the address records
      A/AAAA (A in this case) for a host. 77.34ms denotes the average
      (decayed) length of time required to establish a connection to
      that IP address. 9957.49ms denotes the average (decayed) amount of
      time spent delivering a single email message (from MAIL FROM to
      receipt of confirmation) to that IP address.
    </p>
<p>
      A '<code class="literal">=&gt;</code>' preceding an IP address indicates
      that it would be chosen for the next connection to this domain if
      a connection were to be opened at this moment.
    </p>
<p>
      A '<code class="literal">*</code>' preceding an IP address indicates that
      the IP address has failed due to a <code class="literal">connect()</code>
      call that could not be completed. Reasons for
      <code class="literal">connect()</code> failures include refused connections
      or connections that timed out during one of the SMTP phases. If
      the address has failed, the age of that failure will be displayed
      at the end of the line as above: "89.27s since failure." This
      indicates how long ago the failure occurred.
    </p>
<h2>
<a name="idp14058448"></a>Active Queue Size</h2>
<p>
      The number of messages in the system that require immediate
      delivery attempts.
    </p>
<h2>
<a name="idp14059424"></a>Delayed Queue Size</h2>
<p>
      The number of messages in the system that have been delayed. A
      message is delayed due to transient delivery failures
      (4<em class="replaceable"><code>xx</code></em> SMTP codes) and a retry time is
      calculated for the message. When that retry time is reached, the
      message will be moved from the delayed queue to the active queue.
    </p>
<h2>
<a name="idp14061056"></a>Deliveries</h2>
<p>
      The total number of messages delivered to this domain since
      insertion into the DNS cache.
    </p>
<h2>
<a name="idp14062048"></a>Failures</h2>
<p>
      The total number of permanently failed delivery attempts to this
      domain since insertion into the DNS cache.
    </p>
<h2>
<a name="idp14063056"></a>Active Connections</h2>
<p>
      The current number of established outbound SMTP sessions.
    </p>
<p>
      Below the count is a list that details the system file descriptor
      and IP address that each SMTP session is using. The state reflects
      the current point in the SMTP transaction and the length of time
      since entering that state.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="console_commands.dns_cache.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="console.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="console_commands.domain_all.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">dns_cache </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> domain all</td>
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
