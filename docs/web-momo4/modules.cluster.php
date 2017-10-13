<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.19. cluster – Cluster</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.cloudmark.php" title="71.18. cloudmark – Cloudmark Authority® Content Scanning">
<link rel="next" href="modules.commtouch.php" title="71.20. commtouch_ctasd – Commtouch Spam Protection">
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
<tr><th colspan="3" align="center">71.19. cluster – Cluster</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.cloudmark.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.commtouch.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.cluster"></a>71.19. cluster – Cluster</h2></div></div></div>
<p>
    The cluster module is used to specify cluster behavior.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cluster.configuration"></a>71.19.1. Configuration</h3></div></div></div>
<p>
      The cluster module is configured in the
      <code class="filename">ecelerity-cluster.conf</code> file. The following is
      the default configuration:
    </p>
<div class="example">
<a name="modules.cluster.configuration.example"></a><p class="title"><b>Example 71.32. cluster Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
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
<br class="example-break"><p>
      The following are the configuration options defined within this
      module:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt>
<a name="option.arp_all_hosts"></a><span class="term">
          arp_all_hosts
        </span>
</dt>
<dd>
<p>
            When plumbing a <span class="trademark">DuraVIP</span>™, you can
            either aggressively send out ARP information to ensure that
            the network knows about the IP address assignment (true) or
            target the ARP to specific hosts of interest (false).
          </p>
<p>
            Default value is <code class="literal">true</code>. You may consider
            changing this to <code class="literal">false</code> if your network
            experiences problems with the burst of ARP traffic around
            the <span class="trademark">DuraVIP</span>™ move.
          </p>
</dd>
<dt>
<a name="option.cluster_group"></a><span class="term">
          cluster_group
        </span>
</dt>
<dd>
<p>
            Defines cluster communication. Default value is
            <code class="literal">ec_cluster</code>. Under normal circumstances,
            this option should be left at the default value.
          </p>
<p>
            The <span class="trademark">DuraVIP</span>™ system will coordinate IP
            ownership responsibilities via the
            <code class="option">cluster_group</code> EVS group.
          </p>
</dd>
<dt>
<a name="option.control_group"></a><span class="term">
          control_group
        </span>
</dt>
<dd>
<p>
            Defines the cluster communication. Default value is
            <code class="literal">ec_console</code>. Under normal circumstances,
            this option should be left at the default value.
          </p>
<p>
            Each node can respond to normal console commands received on
            the <code class="option">control_group</code>. The cluster manager utilizes this group to issue cluster-wide
            configuration commands to update and discover changes in
            configuration information.
          </p>
</dd>
<dt>
<a name="option.duravip_balance_set_size"></a><span class="term">
          duravip_balance_set_size
        </span>
</dt>
<dd>
<p>
            When balancing <span class="trademark">DuraVIP</span>™s, how many to
            process as a batch in response to a balance request.
          </p>
<p>
            Clusters with large numbers of
            <span class="trademark">DuraVIP</span>™s (especially when they are
            not explicitly preferenced) will take less time to converge
            if this number is increased. It is imperative that this
            number be set consistently across all nodes, as inconsistent
            values across the nodes will result in a cluster that will
            not converge (since the nodes will not all agree on the same
            parameters). Therefore, it is strongly recommended that all
            the nodes be brought down before changing this option. The
            value must be greater than <code class="literal">1</code>.
          </p>
</dd>
<dt>
<a name="option.heartbeat_start_delay"></a><span class="term">
          heartbeat_start_delay
        </span>
</dt>
<dd><p>
            How many seconds to wait after startup before the cluster
            heartbeat is activated. Default value is
            <code class="literal">15</code>.
          </p></dd>
<dt>
<a name="option.heartbeats_per_sec"></a><span class="term">
          heartbeats_per_sec
        </span>
</dt>
<dd><p>
            How often to send a heartbeat. The heartbeat is used to help
            detect "byzantine" nodes in the cluster. Default value is
            <code class="literal">1</code>.
          </p></dd>
<dt>
<a name="option.if_check_interval"></a><span class="term">
          if_check_interval
        </span>
</dt>
<dd><p>
            How often to run through a maintenance cycle to make sure
            that the interfaces plumbed on the system match up to the
            cluster internal view. Default value is
            <code class="literal">30</code>.
          </p></dd>
<dt>
<a name="option.if_down_limit"></a><span class="term">
          if_down_limit
        </span>
</dt>
<dd><p>
            As part of the maintenance cycle, when detecting that we
            need to plumb an IP address, how long to wait before
            deciding that we should bring it online. This avoids rapid
            "flapping". Default value is <code class="literal">4</code>.
          </p></dd>
<dt>
<a name="option.log_active_interval"></a><span class="term">
          log_active_interval
        </span>
</dt>
<dd><p>
            This option, along with <code class="option">log_idle_interval</code>,
            is used to tune centralized logging (logmove). When logmove
            is actively sending data to the log aggregator, it will sleep for
            <code class="option">log_active_interval</code> seconds between each
            segment send. When the job idles (no segments are pending),
            then it will sleep for <code class="option">log_idle_interval</code>
            seconds before looking for another segment. Default value is
            <code class="literal">1</code>.
          </p></dd>
<dt>
<a name="option.log_group"></a><span class="term">
          log_group
        </span>
</dt>
<dd><p>
            When this option is enabled, the paniclog messages are
            broadcast over spread, using the specified group name.
            Another spread enabled application or the
            <code class="literal">spuser</code> tool can then listen in on
            paniclog events.
          </p></dd>
<dt>
<a name="option.log_idle_interval"></a><span class="term">
          log_idle_interval
        </span>
</dt>
<dd><p>
            Amount of time to sleep before looking for another segment.
            Default value is <code class="literal">10</code>.
          </p></dd>
<dt>
<a name="option.logs.dictionary"></a><span class="term">
          logs
        </span>
</dt>
<dd>
<p>
            The <code class="option">logs</code> dictionary configures the log file
            server. In conjunction with aggregated logging, the log file
            service makes up the clustered logging solution. This
            service lets subscribers connect to Momentum and request a
            "replay" of logs since their last checkpoint and then
            checkpoint the reader. This is a durable logging mechanism
            for aggregation.
          </p>
<p>
            Default values are as follows:
          </p>
<pre class="programlisting">
  logs = [
    rejectlog = "/var/log/ecelerity/rejectlog.cluster"
    paniclog = "/var/log/ecelerity/paniclog.cluster"
    mainlog = "/var/log/ecelerity/mainlog.cluster"
    acctlog = "/var/log/ecelerity/acctlog.cluster"
    bouncelog = "/var/log/ecelerity/bouncelog.cluster"
  ]
</pre>
<p>
            Each logfile that should be serviced is given a key name and
            corresponding local path that should match the path portion
            of the <code class="option">cluster://</code> log destination specified
            in the other loggers throughout your configuration. This
            dictionary defines the logs that the cluster module on the
            node will tell the log aggregator are available for
            aggregation.
          </p>
<p>
            The log aggregator will periodically attempt to connect to the
            nodes to pull logs. It does this by connecting to the
            address configured in the
            <code class="option">ECCluster_Listener</code> stanza on the node. Once
            connected, it will try to consume records from the jlogs
            published by the node and write that data to log files on
            the log aggregator.
          </p>
</dd>
<dt>
<a name="option.nodeaddr"></a><span class="term">
          nodeaddr
        </span>
</dt>
<dd>
<p>
            Canonical cluster address for the node.
          </p>
<p>
            If not specified,
            <code class="function">gethostbyname(<em class="replaceable"><code>nodename</code></em>)</code>
            is used to determine the address. The address must be
            routable via the cluster network, and must not be 127.0.0.1.
          </p>
</dd>
<dt>
<a name="option.nodename"></a><span class="term">
          nodename
        </span>
</dt>
<dd>
<p>
            Override the node name that is used to canonically identify
            this cluster node.
          </p>
<p>
            The <code class="option">nodename</code> is determined according to the
            following logic: When ec_ctl runs, it determines the node
            name (and subcluster) as configured from
            <code class="filename">cluster.boot</code> and exports EC_SUB_CLUSTER
            and EC_NODE_NAME to the environment. If you do not
            explicitly configure the nodename option, the cluster module
            will look for the EC_NODE_NAME environment variable and take
            that as the value. If EC_NODE_NAME is not set in the
            environment, it will use the system hostname, truncated at
            the first ‘<code class="literal">.</code>’. Note also that modules
            can use the cluster_nodename hook to determine the effective
            value of the <code class="option">nodename</code>.
          </p>
</dd>
<dt>
<a name="option.unconditional_rebind"></a><span class="term">
          unconditional_rebind
        </span>
</dt>
<dd><p>
            Whether the full set_binding logic is invoked when assessing
            messages for internal cluster message moves or whether to
            use an optimization that avoids calling out to whatever
            set_binding logic is in place. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt>
<a name="option.view_balance_interval"></a><span class="term">
          view_balance_interval
        </span>
</dt>
<dd><p>
            How often <span class="trademark">DuraVIP</span>™ views are subject
            to balancing. This option is similar to
            <code class="option">view_mature_time</code> and should to be adjusted
            without consultation with support. Default value is
            <code class="literal">10</code>.
          </p></dd>
<dt>
<a name="option.view_broadcast_interval"></a><span class="term">
          view_broadcast_interval
        </span>
</dt>
<dd><p>
            When non-zero, how often to speculatively broadcast a view
            announcement to the cluster. Should not be needed except in
            rare cases when the cluster does not seem to be in sync with
            views; only enable as directed by support. Default value is
            <code class="literal">0</code>.
          </p></dd>
<dt>
<a name="option.view_mature_time"></a><span class="term">
          view_mature_time
        </span>
</dt>
<dd>
<p>
            How long a <span class="trademark">DuraVIP</span>™ view needs to
            remain unchanged before considering it "mature".
          </p>
<p>
            Increasing the value will make the cluster take longer to
            fully converge and balance <span class="trademark">DuraVIP</span>™s.
            Reducing the value will make it take less time. This option
            should not generally need to be altered, but you may
            consider doing so if the cluster is experiencing
            instability. Best to seek advice from support if that is the
            case. Default value is <code class="literal">5</code>.
          </p>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cluster.replication"></a>71.19.2. Replication Scope</h3></div></div></div>
<p>
      The replication component of the cluster module is considered its
      most powerful and versatile feature. The
      <code class="option">Replicate</code> directive allows you to employ a sound
      and efficient replication framework to the data managed within
      Momentum.
    </p>
<p>
      The default <code class="filename">ecelerity-cluster.conf</code> file
      defines the following replication:
    </p>
<div class="example">
<a name="conf.ref.ecelerity_cluster.conf.replication"></a><p class="title"><b>Example 71.33. Replication</b></p>
<div class="example-contents"><pre class="programlisting">
cluster {
  ...
  Replicate "inbound_cidr" {}
  Replicate "outbound_cidr" {}
  Replicate "outbound_domains" {}
  Replicate "outbound_binding_domains" {}
  Replicate "shared_named_throttles" {}
  ...
}
</pre></div>
</div>
<br class="example-break"><p>
      The following replication types are supported:
    </p>
<div class="variablelist">
<a name="modules.replication.types"></a><p class="title"><b>Replication Types</b></p>
<dl class="variablelist">
<dt><span class="term">
          cache
        </span></dt>
<dd>
<p>
            Replicate a data cache across the cluster
          </p>
<p>
            In addition to native Momentum data, it is possible to
            replicate user controlled data sets as well (such as
            caches). This provides a transparent and convenient
            mechanism to cache data from a module level in a medium that
            is accessible via every node participating in the cluster.
          </p>
</dd>
<dt><span class="term">
          inbound_cidr
        </span></dt>
<dd>
<p>
            Replicate inbound SMTP connections
          </p>
<p>
            Such metrics as the number of current connections from a
            specific netblock are calculated locally by referencing an
            internal structure called a CIDR tree. By specifying
            <code class="option">Replicate "inbound_cidr" {}</code>, you tell the
            clustering subsystem to share all the local information
            about inbound connections tracked in its CIDR tree with
            every other node in the cluster (and vice versa). Using this
            shared information, the replication system will maintain an
            aggregated "cluster-wide" CIDR tree representing
            <span class="bold"><strong>all</strong></span> inbound connections to
            the cluster. This option is included in the default
            <code class="filename">ecelerity-cluster.conf</code> file.
          </p>
</dd>
<dt><span class="term">
          outbound_binding_domains
        </span></dt>
<dd>
<p>
            Replication in support of
            <code class="option">cluster_scope_max_outbound_connections</code>
          </p>
<p>
            The <code class="option">Replicate "outbound_binding_domains" {}</code>
            stanza ensures that the
            <code class="option">cluster_scope_max_outbound_connections</code>
            option works cluster-wide. This option is included in the
            default <code class="filename">ecelerity-cluster.conf</code> file.
          </p>
</dd>
<dt>
<a name="option.outbound_cidr"></a><span class="term">
          outbound_cidr
        </span>
</dt>
<dd>
<p>
            Replicate outbound SMTP connections
          </p>
<p>
            Similar to <code class="option">Replicate "inbound_cidr" {}</code>,
            specifying <code class="option">Replicate "outbound_cidr" {}</code>
            tells the clustering subsystem to share all the local
            information about outbound connections tracked in its CIDR
            tree with every other node in the cluster (and vice versa).
            The same is possible for outbound connections grouped by
            destination domain via <code class="option">Replicate "outbound_domains"
            {}</code>. For outbound connections, it may be desirable
            to be more granular than aggregating on a cluster-wide
            premise. This option is included in the default
            <code class="filename">ecelerity-cluster.conf</code> file.
          </p>
</dd>
<dt><span class="term">
          outbound_domains
        </span></dt>
<dd>
<p>
            Replicate outbound domains
          </p>
<p>
            This option is included in the default
            <code class="filename">ecelerity-cluster.conf</code> file. For
            details, see
            <a class="xref" href="modules.cluster.php#option.outbound_cidr">
          outbound_cidr
        </a>.
          </p>
</dd>
<dt><span class="term">
          OBTM
        </span></dt>
<dd><p>
            Replicate outbound message throttles
          </p></dd>
<dt><span class="term">
          OBTC
        </span></dt>
<dd><p>
            Replicate outbound connection throttles
          </p></dd>
<dt><span class="term">
          shared_named_throttles
        </span></dt>
<dd><p>
            Enable replication of shared throttles
          </p></dd>
<dt><span class="term">
          metrics
        </span></dt>
<dd><p>
            Maintain cluster-wide time series views for an IP address or
            CIDR block
          </p></dd>
<dt><span class="term">
          eccmgr_metrics
        </span></dt>
<dd><p>
            Update the eccmgr but not other nodes
          </p></dd>
</dl>
</div>
<p>
      The following are the options valid within this scope:
    </p>
<div class="variablelist">
<a name="modules.replication.options"></a><p class="title"><b>Options</b></p>
<dl class="variablelist">
<dt><span class="term">
          parameters
        </span></dt>
<dd>
<p>
            Defines which metrics will be replicated across the cluster.
            Possible values for this option are as follows:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                snapshot
              </p></li>
<li class="listitem"><p>
                connect
              </p></li>
<li class="listitem"><p>
                delivery
              </p></li>
<li class="listitem"><p>
                transfail
              </p></li>
<li class="listitem"><p>
                permfail
              </p></li>
<li class="listitem"><p>
                reception
              </p></li>
<li class="listitem"><p>
                rejection
              </p></li>
<li class="listitem"><p>
                audit_series
              </p></li>
<li class="listitem"><p>
                gauge_cache
              </p></li>
</ul></div>
<p>
            You may define multiple values in the following way:
            <code class="code">parameters="connect;reception;rejection"</code>.
          </p>
<p>
            There is no default value for this option.
          </p>
</dd>
<dt><span class="term">
          type
        </span></dt>
<dd><p>
            Replication type, as listed in
            <a class="xref" href="modules.cluster.php#modules.replication.types" title="Replication Types">Replication Types</a>. There is no
            default value for this option.
          </p></dd>
<dt><span class="term">
          max_delay
        </span></dt>
<dd><p>
            Maximum amount of time to buffer replication messages before
            sending them out. Default value is <code class="literal">1.0</code>.
          </p></dd>
<dt><span class="term">
          max_pending
        </span></dt>
<dd><p>
            Maximum number of replication messages to buffer before
            sending them out. Default value is <code class="literal">100</code>.
          </p></dd>
<dt><span class="term">
          max_size
        </span></dt>
<dd><p>
            Maximum size of a replication cache. This option is only
            valid for caches. Default value is <code class="literal">-1</code>
            indicating the maximum supported integer size.
          </p></dd>
<dt><span class="term">
          binding_group
        </span></dt>
<dd><p>
            This paramater is only valid for outbound_cidr and
            outbound_domains replication types. You can define multiple
            groups using the class option to track based on different
            binding groups. There is no default value for this option.
          </p></dd>
<dt><span class="term">
          class
        </span></dt>
<dd>
<p>
            This option is useful when you need multiple replication
            objects for the same type. So, for example, you could make a
            replicate object named <code class="literal">oubound_cidr_foo</code>
            for binding group <code class="literal">foo</code>, but you would then
            have to define the class as <code class="literal">outbound_cidr</code>
            so it knew what type to register for. There is no default
            value for this option.
          </p>
<p>
            In practice this isn't used much, if at all.
          </p>
</dd>
</dl>
</div>
<p>
      For additional information about using the Replication scope, see
      <a class="xref" href="cluster.config.replication.php" title="Chapter 28. Data Replication">Chapter 28, <i>Data Replication</i></a>
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cluster.duravip"></a>71.19.3. <span class="trademark">DuraVIP</span>™ Network Topology</h3></div></div></div>
<p>
      The <span class="trademark">DuraVIP</span>™ featureset maintains the
      availability of MultiVIP© bindings and listener services on IP
      addresses despite node failures. Each binding or listener that
      should be managed in this fashion should be marked with a
      <code class="option">Enable_Duravip = true</code> option.
    </p>
<p>
      The following is the default <span class="trademark">DuraVIP</span>™
      network topology defined in the
      <code class="filename">ecelerity-cluster.conf</code> file:
    </p>
<div class="example">
<a name="idp20595088"></a><p class="title"><b>Example 71.34. <span class="trademark">DuraVIP</span>™ Network Topology in the Cluster Module</b></p>
<div class="example-contents"><pre class="programlisting">
cluster {
  ... other options here ...
  # DuraVIP network topology hints
  Topology "10.1.1.0/24" {
    cidrmask = "32"
    interface = "eth1"
  }
}
</pre></div>
</div>
<br class="example-break"><p>
      Because Momentum is responsible for adding and removing the
      corresponding IP addresses, more information must be known about
      the IP networks and physical interfaces on which these IPs will
      reside. Within the cluster module configuration, the following
      options in the <code class="option">Topology</code> scope provide this
      additional information:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          interface
        </span></dt>
<dd><p>
            In the example <code class="option">Topology</code> scope shown
            previously, <code class="literal">10.1.1.0/24</code> informs the
            clustering module that IPs in the range specified will be
            added to the <code class="literal">eth1</code> ethernet interface.
          </p></dd>
<dt><span class="term">
          cidrmask
        </span></dt>
<dd><p>
            When bringing an IP address online, you must also know the
            netmask it will be using. The cidrmask option indicates the
            number of bits in the netmask for a given IP address. In the
            example, the IP address should be added with a /32 netmask
            (i.e. 255.255.255.255). It is most common to add IP aliases
            with a 255.255.255.255 netmask, but this can vary between
            operating systems.
          </p></dd>
</dl></div>
<p>
      For additional details about <span class="trademark">DuraVIP</span>™, see
      <a class="xref" href="cluster.config.duravip.php" title="Chapter 27. DuraVIP™: IP Fail over">Chapter 27, <i><span class="trademark">DuraVIP</span>™: IP Fail over</i></a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cluster.console"></a>71.19.4. Cluster Module-specific Console Commands</h3></div></div></div>
<p>
      The cluster module can be controlled and queried through the
      console. <span class="emphasis"><em>Note</em></span>: These commands do not execute when
      issued from within the <code class="filename">eccmgr</code> service.
    </p>
<p>
      The following <span class="command"><strong>cluster</strong></span> commands are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          cluster abort &lt;id&gt;
        </span></dt>
<dd><p>
            Abort the job with the specified id.
          </p></dd>
<dt><span class="term">
          cluster arp show
        </span></dt>
<dd>
<p>
            Resolve the MAC addresses of the cluster. Sample output
            follows.

</p>
<pre class="screen">
12:34:15 ecelerity(/tmp/2025)&gt; cluster arp show
10.80.116.204    [00:e0:81:63:5c:e8]  43s
10.80.116.202    [00:30:48:74:28:24]  13s
10.80.116.201    [00:e0:81:63:5d:64]  8s
10.80.117.25     [00:30:48:52:f9:06]  8s
10.80.117.2      [00:00:5e:00:01:0c]  8s
10.80.116.203    [00:30:48:74:29:ee]  8s
</pre>
<p>
          </p>
</dd>
<dt><span class="term">cluster duravip move <em class="replaceable"><code>from_host</code></em>
          <em class="replaceable"><code>to_host</code></em></span></dt>
<dd><p>The only safe way to do a duravip move is using a
          <span class="command"><strong>broadcast cluster duravip move</strong></span> command from within
          the <code class="filename">eccmgr</code> service. For details, see <a class="xref" href="cluster.config.operations.eccmgr.console.php#cluster.config.operations.eccmgr.console.broadcast.cluster">
          broadcast cluster duravip move
          <em class="replaceable"><code>from_host</code></em>
          <em class="replaceable"><code>to_host</code></em>
        </a>.</p></dd>
<dt>
<a name="modules.cluster.console.duravip.announce"></a><span class="term">
          cluster duravip announce view
        </span>
</dt>
<dd>
<p>
            This command announces a view update using the current local
            view.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              If you modify <span class="trademark">DuraVIP</span>™ bindings, a
              possible race condition means that a <span class="command"><strong>config
              reload</strong></span> taking effect on multiple machines at the
              same time can cause nodes to disagree about who owns which
              binding. For this reason, it is strongly suggested that
              you broadcast this command to the cluster by issuing the
              command <span class="command"><strong>broadcast cluster duravip announce
              view</strong></span> immediately after <span class="command"><strong>config
              reload</strong></span>. Doing this synchronizes ownership of the
              bindings and eliminates a possible race condition among
              the nodes.
            </p>
</div>
</dd>
<dt><span class="term">
          cluster duravip debug { on | off }
        </span></dt>
<dd><p>
            Turn <span class="trademark">DuraVIP</span>™ debugging on or off.
          </p></dd>
<dt><span class="term">
          cluster duravip show
        </span></dt>
<dd>
<p>
            Show the current state of <span class="trademark">DuraVIP</span>™
            bindings. Sample output follows.

</p>
<pre class="screen">
12:35:44 ecelerity(/tmp/2025)&gt; cluster duravip show
DuraVIP State:
10.80.116.50/flowgomail-hotmail-50/flowgomail-hotmail-51/flowgomail-hotmail-52: (owned,safe) multivip
	[view stable for 5420 seconds]
	[configuration stable for 5409 seconds]
    	labrat-2 multivip
    	labrat-1 multivip
 *  	labrat-4 multivip
10.80.116.53/flowgomail-hotmail-53: (owned,safe) multivip
	[view stable for 5420 seconds]
	[configuration stable for 5466 seconds]
 *  	labrat-2 multivip
    	labrat-1 multivip
    	labrat-4 multivip
10.80.116.54/flowgomail-hotmail-54: (owned,safe) multivip
	[view stable for 5420 seconds]
	[configuration stable for 5465 seconds]
 *  	labrat-2 multivip
    	labrat-1 multivip
    	labrat-4 multivip
...
</pre>
<p>

            The asterisk on the left indicates that the current machine
            owns that particular <span class="trademark">DuraVIP</span>™.
          </p>
</dd>
<dt><span class="term">
          cluster duravip show tables
        </span></dt>
<dd><p>
            Display the <span class="trademark">DuraVIP</span>™ state tables in
            XML format.
          </p></dd>
<dt><span class="term">
          cluster help
        </span></dt>
<dd><p>
            Display the available console commands.
          </p></dd>
<dt><span class="term">
          cluster info
        </span></dt>
<dd>
<p>
            Display the current operating status and parameters. Sample
            output follows.

</p>
<pre class="screen">
13:38:31 ecelerity(/tmp/2025)&gt; cluster info
Daemon: 4803 [m:#ec0-22787#labrat-1,s:#ec1-22787#labrat-1]
Control Group: ec_console
Cluster Group: ec_cluster (labrat-4 is leader)
Logger Group: none
</pre>
<p>
          </p>
</dd>
<dt><span class="term">
          cluster membership
        </span></dt>
<dd>
<p>
            Display the current operating status and parameters
            including the private name of the node, the node name, and
            the node type. If the node is disconnected, no information
            is available. Sample output follows.

</p>
<pre class="screen">
22:16:53 /tmp/2025&gt; cluster membership
Private Name: #ec0-20768#pono
Node Name: pono
Subcluster: default
Node Type: Momentum
Version: 3.0.10.30663 r(30669)
Address: 10.79.0.20:4802
Groups: ec_console, ec_sc_default, ec_cluster

Private Name: #ec0-08422#uhalehe
Node Name: uhalehe
Subcluster: default
Node Type: Momentum
Version: 3.0.10.30663 r(30669)
Address: 10.79.0.15:4802
Groups: ec_console, ec_sc_default, ec_cluster

Private Name: #barca#barca
Node Name: (Null)
Subcluster: (Null)
Node Type: Manager
Version: 3.0.10.30663 r(30669)
Address: 0.0.0.0:0
Groups: ec_cluster
</pre>
<p>
          </p>
</dd>
<dt><span class="term">
          cluster nodeaddr
        </span></dt>
<dd>
<p>
            Show the cluster protocol service address. Sample output
            follows.

</p>
<pre class="screen">
13:40:17 ecelerity(/tmp/2025)&gt; cluster nodeaddr
10.80.116.201:4802
</pre>
<p>
          </p>
</dd>
<dt><span class="term">
          cluster nodename
        </span></dt>
<dd><p>
            Show the name of the local node.
          </p></dd>
<dt><span class="term">
          cluster reset
        </span></dt>
<dd><div class="warning">
<h3 class="title">Warning</h3>
<p>
              Reset the node cluster membership. This command restarts
              Spread, forcing a new negotiation of
              <span class="trademark">DuraVIP</span>™'s and as such should only
              be used in consultation with support.
            </p>
</div></dd>
<dt><span class="term">
          cluster shared list
        </span></dt>
<dd>
<p>
            This command displays the currently managed objects. For
            example:

</p>
<pre class="screen">
22:36:50 ecelerity(2025)&gt; cluster shared list
Currently managed objects:
                  inbound_cidr [lazy, cidrtree w/ snapshots]
                 outbound_cidr [lazy, cidrtree w/ snapshots]
              outbound_domains [lazy, gauge table w/ snapshots]
</pre>
<p>

            The name of the type of shared object is followed by a
            description. In all current versions of Momentum all our
            objects are "lazy", which refers to a network protocol
            optimization when serializing the data and sharing it with
            the cluster. This is followed by an expanded representation
            of the replication object type; cidrtree, gauge table etc.
          </p>
</dd>
<dt><span class="term">
          cluster shared show <em class="replaceable"><code>obj_name</code></em>
        </span></dt>
<dd>
<p>
            Display the specified shared object. Sample output follows.

</p>
<pre class="screen">
15:26:28 ecelerity(/tmp/2025)&gt; cluster shared show inbound_cidr
lazy, snapped cidrtree 'inbound_cidr', view 'global'
</pre>
<p>
          </p>
</dd>
<dt><span class="term">
          cluster shared show <em class="replaceable"><code>obj_name</code></em> from
          <em class="replaceable"><code>node_name</code></em>
        </span></dt>
<dd><p>
            Display the specified shared object from node's perspective.
          </p></dd>
<dt><span class="term">
          cluster show logs
        </span></dt>
<dd>
<p>
            Show the size, name and location of the cluster logs. Sample
            output follows.

</p>
<pre class="screen">
15:40:34 ecelerity(/tmp/2025)&gt; cluster show logs
mainlog
	[on disk: 1604005 bytes]
	[subscriber: 'master' @ 00000000:0000a43a]
paniclog
	[on disk: 9184 bytes]
	[subscriber: 'master' @ 00000000:00000059]
rejectlog
	[on disk: 3950 bytes]
	[subscriber: 'master' @ 00000000:0000001e]
bouncealllog
	[on disk: 0 bytes]
</pre>
<p>
          </p>
</dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.cloudmark.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.commtouch.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.18. cloudmark – Cloudmark Authority® Content Scanning </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.20. commtouch_ctasd – Commtouch Spam Protection</td>
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
