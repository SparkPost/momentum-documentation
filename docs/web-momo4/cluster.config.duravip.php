<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 27. DuraVIP™: IP Fail over</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="prev" href="cluster.config.logging.decommissioning.php" title="26.5. Decommissioning a Log Aggregator">
<link rel="next" href="cluster.config.mmove.php" title="27.2. duravip_follow and the #mmove Binding">
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
<tr><th colspan="3" align="center">Chapter 27. <span class="trademark">DuraVIP</span>™: IP Fail over</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.config.logging.decommissioning.php">Prev</a> </td>
<th width="60%" align="center">Part III. Configuring Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="cluster.config.mmove.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="cluster.config.duravip"></a>Chapter 27. <span class="trademark">DuraVIP</span>™: IP Fail over</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="cluster.config.duravip.php#cluster.config.duravip_follow">27.1. IP Addresses and <code class="option">duravip_follow</code></a></span></dt>
<dt><span class="section"><a href="cluster.config.mmove.php">27.2. <code class="option">duravip_follow</code> and the #mmove Binding</a></span></dt>
<dt><span class="section"><a href="cluster.config.arp_all_hosts.php">27.3. Address Resolution Protocol (ARP) traffic</a></span></dt>
<dt><span class="section"><a href="cluster.duravip.conflict.php">27.4. <span class="trademark">DuraVIP</span>™ Configuration Conflicts and Ambiguities</a></span></dt>
</dl>
</div>
<p>
    One of the most important features of Momentum cluster configuration
    is <span class="trademark">DuraVIP</span>™ bindings.
    <span class="trademark">DuraVIP</span>™ maintains the availability of
    MultiVIP© bindings and listener services on the associated IP
    addresses even when node(s) are down, either administratively or due
    to failure. When nodes share the same configuration,
    <span class="trademark">DuraVIP</span>™ bindings provide transparent failover
    in the event that a node fails.
  </p>
<p>
    With <span class="trademark">DuraVIP</span>™, all injection IP addresses and
    outbound IP addresses are assigned automatically to the nodes in the
    cluster, allowing the reception and delivery of messages to be
    divided among the nodes. In the event of node failure, these
    injection IPs and outbound IP addresses are assumed by the remaining
    nodes.
  </p>
<p>
    <span class="trademark">DuraVIP</span>™ completely manages the IP addresses
    that you associate with bindings and listeners. It does this by
    adding or removing IP addresses to the NIC(s) installed in the
    machine. It is an error to configure the main IP address of the box
    as a <span class="trademark">DuraVIP</span>™ enabled IP address, as
    <span class="trademark">DuraVIP</span>™ may decide to unplumb addresses and
    re-provision it on a different node.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      The maximum number of IP aliases that Momentum supports is
      <code class="literal">10240</code>. Also, it is better to enumerate the
      interfaces sequentially rather than assigning them arbitrarily.
    </p>
</div>
<p>
    <span class="trademark">DuraVIP</span>™ requires additional information about
    your network topology so that it knows to which NIC it should attach
    a given IP address. The default
    <code class="filename">ecelerity-cluster.conf</code> file has a cluster
    stanza that contains a Topology stanza:
  </p>
<pre class="programlisting">
cluster {
  ... other options here ...
  # DuraVIP network topology hints
  Topology "10.1.1.0/24" {
    cidrmask = "32"
    interface = "eth1"
  }
}
</pre>
<p>
    This informs the node that any <span class="trademark">DuraVIP</span>™
    enabled IP address in the 10.1.1.0/24 network block should be
    attached to the interface named "eth1" with a mask of 32. The
    cidrmask should almost always be set to 32, otherwise the
    <span class="trademark">DuraVIP</span>™ controlled IP alias will not function
    correctly. (You may omit the cidrmask line completely; it defaults
    to 32).
  </p>
<p>
    If you have a more complex environment where the node has
    <span class="trademark">DuraVIP</span>™ managed IP addresses on multiple
    network blocks you will need to specify a separate Topology stanza
    for each network block that you have <span class="trademark">DuraVIP</span>™s
    for. For additional details, see
    <a class="xref" href="modules.cluster.php#modules.cluster.duravip" title="71.19.3. DuraVIP™ Network Topology">Section 71.19.3, “<span class="trademark">DuraVIP</span>™ Network Topology”</a>.
  </p>
<p>
    Once configured with the Topology hints, you may then annotate your
    binding and/or listeners stanzas to indicate which IPs are
    <span class="trademark">DuraVIP</span>™ enabled:
  </p>
<pre class="programlisting">ESMTP_Listener {
  Listen "10.1.1.1:25" {
    Enable_Duravip = true
  }
  Listen "10.1.1.2:25" {
    Enable_Duravip = true
  }

}
Binding "duravip-1" {
  Enable_Duravip = true
  Bind_Address = "10.1.1.1"
}
Binding "duravip-2" {
  Enable_Duravip = true
  Bind_Address = "10.1.1.2"
}</pre>
<p>
    In the above configuration, when the node starts it will not by
    default start any SMTP listeners (the only listener is marked as
    <span class="trademark">DuraVIP</span>™ enabled). Instead it will first
    unplumb all <span class="trademark">DuraVIP</span>™ enabled IP addresses that
    may already exist on the machine (to ensure that it has a clean
    slate and that none are lingering from a prior invocation), join the
    cluster and, once it has settled and is live and operational, the
    nodes will elect one of the nodes to be the owner of each IP
    address.
  </p>
<p>
    Once an owner has been elected for an IP address, that owner will
    plumb the IP address according to the Topology hints that have been
    configured and start SMTP service for that IP address.
  </p>
<p>
    If the owner of a given IP address goes down, either due to
    administrative action or due to failure, the other nodes will notice
    its departure from the cluster and then hold an election for that IP
    address, assigning it to another node. The IP will then be plumbed
    on the new owning node with minimal interruption to service.
  </p>
<p>
    When the downed node re-joins the cluster, another election will be
    held for ownership of the IP addresses, which will likely cause
    re-assignment of IP addresses back to the downed node.
  </p>
<p>
    When bindings move between nodes, the system will also need to move
    the mail queues for those bindings to the new owning node. This is
    handled transparently. Mail will also be moved between nodes if it
    is injected to a node and that node is not the owner of the binding
    assigned to the message.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      When injecting messages take care that you do not unduly increase
      traffic between nodes. For more information see
      <a class="xref" href="cluster.config.mmove.php" title="27.2. duravip_follow and the #mmove Binding">Section 27.2, “<code class="option">duravip_follow</code> and the #mmove Binding”</a>.
    </p>
<p>
      If you are using a large number of <span class="trademark">DuraVIP</span>™s
      you may need to enable
      <a class="xref" href="conf.ref.use_iflist_cache.php" title="use_iflist_cache"><span class="refentrytitle">use_iflist_cache</span></a>.
    </p>
</div>
<p>
    Performing a <span class="trademark">DuraVIP</span>™ move causes a
    re-evaluate of the binding assignment for all messages in the queue;
    in some circumstances this can be a very resource-intensive
    operation. To avoid possibly exhausting resources, you can check
    with support to see if setting the cluster configuration option,
    <code class="option">unconditional_rebind</code> to <code class="literal">false</code>
    might be required.
  </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      <span class="trademark">DuraVIP</span>™ does not work across different
      subnets, meaning you cannot have a <span class="trademark">DuraVIP</span>™
      migrate between servers on different LAN segments, because there
      is no way to alter the underlying networking. The system will
      allow you to configure <span class="trademark">DuraVIP</span>™s across
      segments, but such configurations will not work properly.
    </p>
</div>
<p>
    Most deployments will want to have a particular node be the
    preferred owner of an IP address, such that, in normal operation of
    the system, that node will be guaranteed to be the node that has the
    IP plumbed. To express this configuration, you will mark the
    listener or binding with your preference:
  </p>
<pre class="programlisting">ESMTP_Listener {
  Listen "10.1.1.1:25" {
    Enable_Duravip = true
    Duravip_Preference = "nodename"
  }
}
Binding "foo" {
  Enable_Duravip = true
  Bind_Address = "10.1.1.1"
  Duravip_Preference = "nodename"
}</pre>
<p>
    The above configuration will cause the IP ownership election to
    favor the node named "nodename" if it is online at the time of the
    election. Otherwise, the IP will be distributed to the next best
    node. It is not possible to configure a second-best preference.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      In a cluster configuration, suspension of a binding can result in
      excessive "#mmoves" between nodes. To avoid this possibility,
      always assign a <code class="option">duravip_preference</code> for any
      bindings used with the Adaptive Delivery module. For more
      information about the Adaptive Delivery module, see
      <a class="xref" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">Section 71.3, “adaptive – Adaptive Delivery”</a>.
    </p>
</div>
<p>
    Some deployments do not always inject on the same IP as the IP that
    they intend to use for binding assignment and will want to preserve
    association between the listener IP and the binding IP. The primary
    motivation for this is to avoid having the cluster perform an
    internal message move, as excessive internal message moves can have
    a negative impact on the performance of the cluster.
  </p>
<pre class="programlisting">ESMTP_Listener {
  Listen "10.1.1.1:25" {
    Duravip_Follow = "bindingname"
  }
}
Binding "bindingname" {
  Enable_Duravip = true
  Bind_Address = "10.2.1.1"
}</pre>
<p>
    In the above configuration, there are
    <span class="trademark">DuraVIP</span>™s on two different networks; the
    10.2.1.1 address is explicitly managed by the
    <span class="trademark">DuraVIP</span>™ system and if/when it is moved to
    another node, the 10.1.1.1 IP address will follow it to the same
    node.
  </p>
<p>
    You may only use <code class="option">Duravip_Follow</code> on listeners to
    make listeners follow bindings; Bindings cannot follow listeners.
    The <span class="trademark">DuraVIP</span>™ entity to follow may be called by
    its name or its IP address. Note that a listener cannot be both
    <code class="option">Enable_Duravip</code> and <code class="option">Duravip_Follow</code>.
  </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      If you modify bindings in the configuration file, a possible race
      condition means that a <span class="command"><strong>config reload</strong></span> taking
      effect on multiple machines at the same time can cause nodes to
      disagree about who owns which binding. For this reason it is
      strongly suggested that you execute the console command
      <span class="command"><strong>broadcast cluster duravip announce view</strong></span>
      immediately after <span class="command"><strong>config reload</strong></span>. Doing this
      synchronizes ownership of the bindings and eliminate a possible
      race condition among the nodes.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="cluster.config.duravip_follow"></a>27.1. IP Addresses and <code class="option">duravip_follow</code>
</h2></div></div></div>
<p>
      You cannot have the same IP address for a listener and a binding
      if the listener is to "duravip_follow" that binding. For example,
      do <span class="bold"><strong>not</strong></span> use a configuration such
      as the following:
    </p>
<pre class="programlisting">
listen "10.110.83.140:25" {
  duravip_follow = "example"
  ...
}
binding "example" {
  bind_address = "10.110.83.140"
  ...
}
</pre>
<p>
      If you want a listener to follow a binding, give the listener and
      the binding different IP addresses. Additionally, you should
      <span class="bold"><strong>not</strong></span> use
      <code class="option">duravip_preference</code> when using
      <code class="option">duravip_follow</code>. If a listener has
      <code class="option">enable_duravip</code> set to true, do not set a
      <code class="option">duravip_preference</code> for this listener.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.config.logging.decommissioning.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.configuration.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="cluster.config.mmove.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">26.5. Decommissioning a Log Aggregator </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 27.2. <code class="option">duravip_follow</code> and the #mmove Binding</td>
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
