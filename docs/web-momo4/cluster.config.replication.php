<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 28. Data Replication</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="prev" href="cluster.duravip.conflict.php" title="27.4. DuraVIP™ Configuration Conflicts and Ambiguities">
<link rel="next" href="postgresql.php" title="Chapter 29. PostgreSQL">
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
<tr><th colspan="3" align="center">Chapter 28. Data Replication</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.duravip.conflict.php">Prev</a> </td>
<th width="60%" align="center">Part III. Configuring Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="postgresql.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="cluster.config.replication"></a>Chapter 28. Data Replication</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc"><dt><span class="section"><a href="cluster.config.replication.php#cluster.replication.features">28.1. Replication Configurations</a></span></dt></dl>
</div>
<p>
    The clustered Replication feature provided by the Momentum
    clustering suite is an extensive set of data sharing and aggregation
    facilities for representing information across node boundaries.
  </p>
<p>
    Replication is managed using the Replication scope within the
    cluster module. For details about this scope, see
    <a class="xref" href="modules.cluster.php#modules.cluster.replication" title="71.19.2. Replication Scope">Section 71.19.2, “Replication Scope”</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="cluster.replication.features"></a>28.1. Replication Configurations</h2></div></div></div>
<p>
      There are special replication facilities that are used for
      enforcing cluster wide reception and delivery behaviors. These
      facilities exist to count inbound connections by IP address as
      well as outbound connections by both IP address and domain. To
      enable these facilities, you use the following configuration:
    </p>
<pre class="programlisting">
cluster {
  # ... other cluster config ...
  Replicate "inbound_cidr" {}
  Replicate "outbound_cidr" {}
  Replicate "outbound_domains" {}
  Replicate "outbound_binding_domains" {}
  Replicate "shared_named_throttles" {}
}
</pre>
<p>
      Given the above configuration, Momentum will track cluster-wide
      inbound SMTP connections by IP address in the
      <code class="literal">inbound_cidr</code> replicated data structure, the
      outbound SMTP connections by IP address in the
      <code class="literal">outbound_cidr</code> replicated data structure, and
      the outbound SMTP connections by destination domain in the
      <code class="literal">outbound_domains</code> replicated data structure.
      <code class="literal">outbound_binding_domains</code> tracks outbound
      connections in the cluster scope.


    </p>
<p>
      From the console you can view the configuration using the
      <span class="command"><strong>cluster shared list</strong></span> command:
    </p>
<pre class="screen">
22:36:50 ecelerity(2025)&gt; cluster shared list
Currently managed objects:
                  inbound_cidr [lazy, cidrtree w/ snapshots]
                 outbound_cidr [lazy, cidrtree w/ snapshots]
              outbound_domains [lazy, gauge table w/ snapshots]
</pre>
<p>
      For a complete list of the cluster commands available from the
      console, see <a class="xref" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">Section 71.19.4, “Cluster Module-specific Console Commands”</a>.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp3809760"></a>28.1.1. Tracking inbound connections via inbound_cidr</h3></div></div></div>
<p>
        On a running system, investigating the contents of the
        <code class="option">inbound_cidr</code> storage will show us the inbound
        connections to our cluster:
      </p>
<pre class="screen">
22:45:34 ecelerity(2025)&gt; cluster shared show inbound_cidr
lazy, snapped cidrtree 'inbound_cidr', view 'global'
     31                         10.0.0.0/8
     31                         10.0.0.0/24
      4                         10.0.0.0/25
      4                         10.0.0.103/32
     27                         10.0.0.160/27
     27                         10.0.0.176/29
     27                         10.0.0.180/31
     14                         10.0.0.180/32
     13                         10.0.0.181/32
</pre>
<p>
        The above output shows the view of inbound SMTP connections per
        IP address aggregated across the entire cluster. In order to
        view the inbound connection counts to a particular node, we can
        ask for the view of that information from the perspective of any
        node by appending <code class="code">from nodename</code> where
        <code class="option">nodename</code> is the name of the node:
      </p>
<pre class="screen">
22:45:40 ecelerity(2025)&gt; cluster shared show inbound_cidr from relay-0-1
lazy, snapped cidrtree 'inbound_cidr', view '#ec1-12137#relay-0-1'
      5                         10.0.0.0/8
      5                         10.0.0.0/24
      5                         10.0.0.160/27
      5                         10.0.0.176/29
      5                         10.0.0.180/31
      4                         10.0.0.180/32
      1                         10.0.0.181/32

22:45:59 ecelerity(2025)&gt; cluster shared show inbound_cidr from relay-0-2
lazy, snapped cidrtree 'inbound_cidr', view '#ec1-48616#relay-0-2'
      7                         10.0.0.0/8
      7                         10.0.0.0/24
      3                         10.0.0.103/32
      4                         10.0.0.160/27
      4                         10.0.0.180/31
      2                         10.0.0.180/32
      2                         10.0.0.181/32
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp3847296"></a>28.1.2. Tracking outbound connections via outbound_cidr</h3></div></div></div>
<p>
        To look at the outbound SMTP connections by IP address, we can
        use the same command as above, replacing
        <code class="option">inbound_cidr</code> with
        <code class="option">outbound_cidr</code>, yielding an identical data
        layout and meaning (excepting the data represents outbound
        connections).
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp3850240"></a>28.1.3. Tracking outbound connections via outbound_domain</h3></div></div></div>
<p>
        The outbound connections tallied by destination domain can be
        viewed by specifying the <code class="option">outbound_domain</code> shared
        structure:
      </p>
<pre class="screen">
23:05:30 ecelerity(2025)&gt; cluster shared show outbound_domain
lazy, snapped gauge table 'outbound_domain', view 'global'
                                                     aol.com:           10
                                               bellsouth.net:           23
                                                 hotmail.com:          246
                                                  omniti.com:            5
                                                   yahoo.com:           65
</pre>
<p>
        Just as in any shared structure view, you can limit the display
        to the perspective of any participating node by appending
        <code class="code">from nodename</code> to the command. To see the view from
        relay-0-1 instead of the cluster-wide aggregate, we can issue
        the following command:
      </p>
<pre class="screen">
23:05:34 ecelerity(2025)&gt; cluster shared show outbound_domain from relay-0-1
lazy, snapped gauge table 'outbound_domain', view '#ec1-12137#relay-0-1'
                                                     aol.com:            1
                                               bellsouth.net:            4
                                                 hotmail.com:           26
                                                   yahoo.com:           30
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.replication.inbound_audit"></a>28.1.4. Replicated inbound audit metrics</h3></div></div></div>
<p>
        We can use this feature with
        <a class="xref" href="modules.inbound_audit.php" title="71.41. inbound_audit – Inbound traffic analytics">Section 71.41, “inbound_audit – Inbound traffic analytics”</a> in order to maintain
        cluster-wide time series views of inbound connections,
        receptions, and rejections from any IP address or CIDR block.

</p>
<pre class="screen">
cluster {
  # ... other cluster configuration ...
  Replicate "metrics" {
    parameters="connect;reception;rejection"
  }
}
</pre>
<p>

        With this configuration, it's also necessary to define one or
        more audit series for the inbound audit module.

</p>
<pre class="screen">
inbound_audit {
  # keep audit data for the last half hour,
  # placed into six windows of 5 min (300s) each
  monitors = ("300,6")
}
</pre>
<p>
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          The inbound_audit module is a singleton and does not have an
          instance name. This affects the way the module is defined and
          also the way that console commands are invoked.
        </p>
<p>
          The adaptive module is cluster-aware. To enable this
          capability, a <code class="literal">replicate "metrics"</code> stanza
          must be declared and the <code class="option">parameters</code> must be
          set to <code class="literal">audit_series</code>.
        </p>
</div>
<p>
        With such a configuration we can view connections, receptions,
        and rejections over the entire cluster for the last half hour
        from any IP address or CIDR block. From the console, this can be
        done using a command of this form:
      </p>
<pre class="screen">
09:16:03 ecelerity&gt; inbound_audit:inbound_audit1 show ip 127.0.0.0/8
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.replicated_audit_series"></a>28.1.5. Replicated named audit series</h3></div></div></div>
<p>
        Named audit series are a more general mechanism than the inbound
        audit metrics. We can use them to maintain time series for any
        events we wish—in comparison, the inbound audit metrics can
        track only connections, receptions, and rejections. Since the
        source IP address is recorded for each event, we can obtain
        event counts by IP address or CIDR block. These named audit
        series can be replicated across a cluster by including
        <code class="option">audit_series</code> in the metrics replication stanza.

</p>
<pre class="screen">
cluster {
  # ... other cluster configuration ...
  Replicate  "metrics" {
    parameters="audit_series"
  }
}
</pre>
<p>

        With this configuration, you can use Lua to add data to a named
        series and specify that it be replicated. You can also obtain
        counts from these series. See
        <a class="xref" href="lua.ref.msys.audit_series.add.php" title="msys.audit_series.add"><span class="refentrytitle">msys.audit_series.add</span></a> and
        <a class="xref" href="lua.ref.msys.audit_series.define.php" title="msys.audit_series.define"><span class="refentrytitle">msys.audit_series.define</span></a>.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.replicatedcache"></a>28.1.6. Replicated Caches</h3></div></div></div>
<p>
        In addition to the other built-in replication objects, we can
        dynamically replicate arbitrary key-value pairs across all nodes
        of the cluster using replicated caches.
      </p>
<div class="example">
<a name="cluster.replicatedcache.code"></a><p class="title"><b>Example 28.1. Replicated caches</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "mycache" {
  uri = ("odbc:DSN=sqlserver;UID=user;PWD=pass")
  serialized = true
}

cluster {
  # ... other cluster configuration ...
  Replicate "mycache" {
    type = "cache"
  }
}
</pre></div>
</div>
<br class="example-break"><p>
        Note that if you have the replicate type defined as
        <code class="literal">cache</code>, you must supply the
        <code class="literal">replication_name</code> of the cache and that name
        must match the cache name defined in the ds_core module. In
        <a class="xref" href="cluster.config.replication.php#cluster.replicatedcache.code" title="Example 28.1. Replicated caches">Example 28.1, “Replicated caches”</a>, for example, the
        name <code class="literal">mycache</code> referenced in the cluster stanza
        is defined in the Datasource scope of the ds_core module. For
        more information about using the ds_core module, see
        <a class="xref" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">Section 71.29, “ds_core - Datasource Query Core”</a>.
      </p>
<p>
        This stanza can be repeated any number of times, specifying a
        unique <code class="option">replication_name</code> for each cache.
        Key-value pairs can be inserted into, or retrieved from, the
        replicated cache at run time using Lua. See
        <a class="xref" href="lua.ref.msys.gauge_cache.define.php" title="msys.gauge_cache.define"><span class="refentrytitle">msys.gauge_cache.define</span></a> and
        <a class="xref" href="lua.ref.msys.gauge_cache.get.php" title="msys.gauge_cache.get"><span class="refentrytitle">msys.gauge_cache.get</span></a>.
      </p>
<p>
        By default, nodes that join the cluster will receive new or
        updated key-value pairs as they are inserted into the cache. Any
        pre-existing key-value pairs present on other nodes will not be
        populated into the cache on a new node until the key-value pair
        is updated. To change this behavior, snapshots can be enabled on
        a per-cache basis. This causes all pre-existing key-value pairs
        on the other nodes to be populated on a new node as soon as it
        joins the cluster.
      </p>
<pre class="screen">
cluster {
  # ... other cluster configuration ...
  Replicate "mycache" {
    type = "cache"
    parameters="snapshot"
  }
}
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.replication.named_throttles"></a>28.1.7. Shared named throttles</h3></div></div></div>
<p>
        Cluster-wide enforcement of name-keyed throttles is supported in
        the MTA. The following stanza must be placed in the cluster
        module configuration to enable the shared throttles:
      </p>
<pre class="screen">
cluster {
  # ... other cluster configuration ...
  Replicate "shared_named_throttles" {}
}
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.replication.outbound_throttles"></a>28.1.8. Shared Outbound Throttles</h3></div></div></div>
<p>
        Cluster-wide outbound connection and message throttles are
        supported in the MTA, using the
        <a class="xref" href="conf.ref.cluster_outbound_throttle_connections.php" title="cluster_outbound_throttle_connections"><span class="refentrytitle">cluster_outbound_throttle_connections</span></a>
        and
        <a class="xref" href="conf.ref.cluster_outbound_throttle_messages.php" title="cluster_outbound_throttle_messages"><span class="refentrytitle">cluster_outbound_throttle_messages</span></a>
        configuration parameters. The cluster stanza must include a
        <code class="option">replicate</code> directive to enable outbound message
        throttles (OBTM) or outbound connection throttles (OBTC).
      </p>
<pre class="screen">
cluster {
  # ... other cluster configuration ...
  Replicate "OBTM" {}   # outbound message throttles
  Replicate "OBTC" {}   # outbound connection throttles
}
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.replication.gauge_cache"></a>28.1.9. Shared Gauge Caches</h3></div></div></div>
<p>
        A gauge cache is a collection of named counters (gauges), which
        are manipulated by increment or decrement operations. For the
        Lua functions, see
        <a class="xref" href="lua.ref.msys.gauge_cache.inc.php" title="msys.gauge_cache.inc"><span class="refentrytitle">msys.gauge_cache.inc</span></a> and
        <a class="xref" href="lua.ref.msys.gauge_cache.dec.php" title="msys.gauge_cache.dec"><span class="refentrytitle">msys.gauge_cache.dec</span></a>. When gauge cache
        replication is enabled, increments or decrements are broadcast
        to all nodes on the cluster.
      </p>
<pre class="screen">
cluster {
  # ... other cluster configuration ...
  Replicate "metrics" {
    parameters="gauge_cache"
  }
}
</pre>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.duravip.conflict.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.configuration.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="postgresql.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">27.4. <span class="trademark">DuraVIP</span>™ Configuration Conflicts and Ambiguities </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 29. PostgreSQL</td>
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
