<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>16.3. ecelerity-cluster.conf File</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="cluster.php" title="Chapter 16. Cluster-specific Configuration">
<link rel="prev" href="conf.ref.eccluster.conf.php" title="16.2. eccluster.conf File">
<link rel="next" href="conf.ref.msgc_server.conf.php" title="16.4. msgc_server.conf File">
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
<tr><th colspan="3" align="center">16.3. <code class="filename">ecelerity-cluster.conf</code> File</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.eccluster.conf.php">Prev</a> </td>
<th width="60%" align="center">Chapter 16. Cluster-specific Configuration</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.msgc_server.conf.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="conf.ref.ecelerity_cluster.conf"></a>16.3. <code class="filename">ecelerity-cluster.conf</code> File</h2></div></div></div>
<p>
    The <code class="filename">ecelerity-cluster.conf</code> file is a
    cluster-specific configuration file that configures cluster
    behavior. This file is typically used to specify options common to
    all nodes, e.g. the cluster topology. It is included from within
    <code class="filename">ecelerity.conf</code>.
  </p>
<p>
    The following is an example
    <code class="filename">ecelerity-cluster.conf</code> file:
  </p>
<div class="example">
<a name="conf.ref.ecelerity_cluster.conf.example"></a><p class="title"><b>Example 16.3. ecelerity-cluster.conf</b></p>
<div class="example-contents"><pre class="programlisting">
# Security stanza 
# Ensure that you have appropriate privileges
Security {
  user = "ecuser"
  group = "ecuser"
  Capabilities = "cap_net_admin+ep cap_net_bind_service+ep cap_net_raw+ep cap_sys_resource+ep"
}

# Aggregated cluster node logging
ec_logger "ec_logger_cluster" {
  mainlog = "cluster:///var/log/ecelerity/mainlog.cluster=&gt;master"
  paniclog = "cluster:///var/log/ecelerity/paniclog.cluster=&gt;master"
  rejectlog = "cluster:///var/log/ecelerity/rejectlog.cluster=&gt;master"
  acctlog = "cluster:///var/log/ecelerity/acctlog.cluster=&gt;master"
}

bounce_logger "bounce_logger_cluster" {
  bouncelog = "cluster:///var/log/ecelerity/bouncelog.cluster=&gt;master"
}

# ECCluster_Listener stanza
ECCluster_Listener {
  Listen "*:4802" {}
}

# Cluster module 
cluster {
  cluster_group = "ec_cluster"
  control_group = "ec_console"
  logs = [
    rejectlog = "/var/log/ecelerity/rejectlog.cluster"
    paniclog = "/var/log/ecelerity/paniclog.cluster"
    mainlog = "/var/log/ecelerity/mainlog.cluster"
    acctlog = "/var/log/ecelerity/acctlog.cluster"
    bouncelog = "/var/log/ecelerity/bouncelog.cluster"
  ]
  Replicate "inbound_cidr" {}
  Replicate "outbound_cidr" {}
  Replicate "outbound_domains" {}
  Replicate "outbound_binding_domains" {}
  Replicate "shared_named_throttles" {}

  # DuraVIP network topology hints
  Topology "10.1.1.0/24" {
    cidrmask = "32"
    interface = "eth1"
  }
}
</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
      IPv6 addresses are much more flexible than IPv4 addresses in terms
      of their formatting options. They also use a different delimiter
      character than IPv4 addresses (a colon instead of a period). This
      means that in certain contexts, an IPv6 address can create parsing
      ambiguities.
    </p>
<p>
      The accepted convention is to require that, in circumstances where
      a configuration parameter can also contain something other than an
      IP address, that an IPv6 address must be enclosed in square
      brackets. In practical terms, this means that things like the
      <code class="option">Gateway</code>, <code class="option">Routes</code> and
      <code class="option">Listen</code> options must have IPv6 addresses enclosed
      in brackets. Others, such as <code class="option">Peer</code>,
      <code class="option">Relay_Hosts</code> and <code class="option">Prohibited_Hosts</code>
      do not require the IPv6 address in brackets.
    </p>
</div>
<p>
    You <span class="bold"><strong>cannot</strong></span> view the contents of the
    <code class="filename">ecelerity-cluster.conf</code> file using the console
    from the cluster manager. You can only view the contents of this
    file from a cluster node because it is included from the
    <code class="filename">ecelerity.conf</code> file.
  </p>
<p>
    For a discussion of scopes and fallbacks, see
    <a class="xref" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">Section 15.3, “Configuration Scopes and Fallback”</a>.
  </p>
<p>
    For a summary of all the non-module specific configuration options,
    refer to <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
  </p>
<p>
    Modules and their configuration options are discussed in the
    <a class="xref" href="modules.php" title="Chapter 71. Modules Reference">Chapter 71, <i>Modules Reference</i></a>.
  </p>
<p>
    The following sections provide an overview of the configuration
    commonly defined in the <code class="filename">ecelerity-cluster.conf</code>
    file.
  </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
        Security
      </span></dt>
<dd>
<p>
          The definition of the <code class="option">Security</code> stanza in the
          <code class="filename">ecelerity-cluster.conf</code> file applies to
          the cluster nodes only and usually differs from the
          configuration found in the <code class="filename">eccluster.conf</code>
          file.
        </p>
<p>
          For a discussion of the <code class="option">Security</code> stanza
          options, see <a class="xref" href="conf.ref.security.php" title="security"><span class="refentrytitle">security</span></a>.
        </p>
</dd>
<dt><span class="term">
        ECCluster_Listener
      </span></dt>
<dd><p>
          For a discussion of the <code class="option">ECCluster_Listener</code>
          stanza, see <a class="xref" href="cluster.listeners.php#eccluster_listener" title="16.5.1. ECCluster_Listener Configuration">Section 16.5.1, “ECCluster_Listener Configuration”</a>.
        </p></dd>
<dt>
<a name="conf.ref.ecelerity_cluster.conf.logging"></a><span class="term">
        Aggregated Cluster Node Logging
      </span>
</dt>
<dd>
<p>
          For a discussion of using the ec_logger module in aggregated
          logging, see <a class="xref" href="modules.ec_logger.php#modules.ec_logger.cluster" title="71.30.2. Configuration of Aggregated Cluster Node Logging">Section 71.30.2, “Configuration of Aggregated Cluster Node Logging”</a>.
        </p>
<p>
          For a discussion of using the bounce_logger module in
          aggregated logging, see
          <a class="xref" href="modules.bounce_logger.php#modules.bounce_logger.cluster" title="71.13.2. Configuration of Aggregated Cluster Node Logging">Section 71.13.2, “Configuration of Aggregated Cluster Node Logging”</a>.
        </p>
</dd>
<dt><span class="term">
        cluster Module
      </span></dt>
<dd><p>
          For details about the cluster module, see
          <a class="xref" href="modules.cluster.php" title="71.19. cluster – Cluster">Section 71.19, “cluster – Cluster”</a>.
        </p></dd>
</dl></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.eccluster.conf.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="cluster.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.msgc_server.conf.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">16.2. <code class="filename">eccluster.conf</code> File </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 16.4. <code class="filename">msgc_server.conf</code> File</td>
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
