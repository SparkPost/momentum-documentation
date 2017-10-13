<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>27.4. DuraVIP™ Configuration Conflicts and Ambiguities</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="cluster.config.duravip.php" title="Chapter 27. DuraVIP™: IP Fail over">
<link rel="prev" href="cluster.config.arp_all_hosts.php" title="27.3. Address Resolution Protocol (ARP) traffic">
<link rel="next" href="cluster.config.replication.php" title="Chapter 28. Data Replication">
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
<tr><th colspan="3" align="center">27.4. <span class="trademark">DuraVIP</span>™ Configuration Conflicts and Ambiguities</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.config.arp_all_hosts.php">Prev</a> </td>
<th width="60%" align="center">Chapter 27. <span class="trademark">DuraVIP</span>™: IP Fail over</th>
<td width="20%" align="right"> <a accesskey="n" href="cluster.config.replication.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="cluster.duravip.conflict"></a>27.4. <span class="trademark">DuraVIP</span>™ Configuration Conflicts and Ambiguities</h2></div></div></div>
<p>
      The <span class="trademark">DuraVIP</span>™ subsystem attempts to make the
      most intelligent and <span class="bold"><strong>safe</strong></span>
      decision regardless of the situation encountered.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp3857552"></a>27.4.1. Preference conflicts</h3></div></div></div>
<p>
        The <span class="trademark">DuraVIP</span>™ configuration attribute
        "duravip_preference" is not a boolean attribute that dictates
        whether the locally configured node should prefer a particular
        IP address. The reasoning is that if configuration files are
        copied between machines, two nodes could prefer the same IP
        address. By requiring the configuration to explicitly name the
        node that should prefer a specific IP address, the likelihood of
        that configuration is dramatically reduced. If, in the unlikely
        event, two different nodes are brought online both configured to
        be the preferred owner of an IP address then that address will
        be marked in conflict and normal election semantics will be
        employed.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp3860528"></a>27.4.2. Services conflicts</h3></div></div></div>
<p>
        As detailed in the configuration section, IP addresses that are
        configured for <span class="trademark">DuraVIP</span>™ on one service
        will be automatically upgraded to <span class="trademark">DuraVIP</span>™
        on all services. However, this does not prevent one node from
        being configured with an ESMTP_Listener on a
        <span class="trademark">DuraVIP</span>™ interface while another node is
        configured with the same <span class="trademark">DuraVIP</span>™
        interface yet without an ESMTP_Listener:
      </p>
<pre class="programlisting">
# node1 configuration
ESMTP_Listener {
  Listen "192.168.0.51:25" {
    Enable_Duravip = "true"
  }
}
Binding example {
  Enable_Duravip = "true"
  Bind_Address = 192.168.0.51
}

# node2 configuration
Binding example {
  Enable_Duravip = "true"
  Bind_Address = 192.168.0.51
}
</pre>
<p>
        In this case, the <span class="trademark">DuraVIP</span>™ subsystem will
        mark the IP address as "UNSAFE." However, that is the extent of
        conflict resolution that will occur. The usual semantics for
        electing an owner of the IP address will be employed. The tag of
        UNSAFE is simply to assist the cluster administrator in finding
        problems.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp3866640"></a>27.4.3. Binding name and IP mismatches</h3></div></div></div>
<p>
        In Momentum, most mechanisms for assigning a message to a
        MultiVIP© binding use the Binding name for such
        assignments. As such, it is essential that the Binding name
        associated with an IP address be consistent across the cluster.
        If it is not, it indicates a misconfiguration that could result
        in messages leaving from the wrong IP address (which is
        unacceptable for multi-client configurations). If the
        <span class="trademark">DuraVIP</span>™ subsystem recognizes such a
        misconfiguration, it will mark the named
        <span class="trademark">DuraVIP</span>™ instance as "BROKEN," and refuse
        to manage it.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp3869904"></a>27.4.4. Disjointed <span class="trademark">DuraVIP</span>™ Participation</h3></div></div></div>
<p>
        The group membership and election processes that drive the
        <span class="trademark">DuraVIP</span>™ subsystem are a dynamic extension
        atop advanced research in the area of highly reliable IP
        services. The system provides a unified and consistent virtual
        membership on a per-IP address basis. What this means is that
        you can have different nodes in the cluster managing different,
        possibly overlapping, <span class="trademark">DuraVIP</span>™ sets.
      </p>
<p>
        While this is certainly possible, it can be hard to understand
        the expected behavior of the system in such complicated
        configurations. As such, it is highly recommended that the
        global set of bindings and listeners managed under
        <span class="trademark">DuraVIP</span>™ are identical on each system.
      </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.config.arp_all_hosts.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="cluster.config.duravip.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="cluster.config.replication.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">27.3. Address Resolution Protocol (ARP) traffic </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 28. Data Replication</td>
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
