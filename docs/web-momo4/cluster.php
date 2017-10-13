<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 16. Cluster-specific Configuration</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="prev" href="conf.ref.ecelerity.conf.php" title="15.6. ecelerity.conf File">
<link rel="next" href="conf.ref.eccluster.conf.php" title="16.2. eccluster.conf File">
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
<tr><th colspan="3" align="center">Chapter 16. Cluster-specific Configuration</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.ecelerity.conf.php">Prev</a> </td>
<th width="60%" align="center">Part III. Configuring Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.eccluster.conf.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="cluster"></a>Chapter 16. Cluster-specific Configuration</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="cluster.php#cluster.config_files">16.1. Cluster-specific Configuration Files</a></span></dt>
<dt><span class="section"><a href="conf.ref.eccluster.conf.php">16.2. <code class="filename">eccluster.conf</code> File</a></span></dt>
<dt><span class="section"><a href="conf.ref.ecelerity_cluster.conf.php">16.3. <code class="filename">ecelerity-cluster.conf</code> File</a></span></dt>
<dt><span class="section"><a href="conf.ref.msgc_server.conf.php">16.4. <code class="filename">msgc_server.conf</code> File</a></span></dt>
<dt><span class="section"><a href="cluster.listeners.php">16.5. Cluster-specific Listeners</a></span></dt>
<dt><span class="section"><a href="cluster.config.failover.php">16.6. Configuring Momentum for High Availability and Failover</a></span></dt>
<dt><span class="section"><a href="cluster.riak.configuration.php">16.7. Configuring Riak in a Cluster</a></span></dt>
</dl>
</div>
<p>
    Clustering is based on the concept of having a cluster of machines
    that communicate using a group communication messaging bus. A
    cluster is comprised of at least one Manager node and one or more
    MTA nodes. The Manager in the cluster will be your central point of
    management for the cluster. Ideally, a cluster will have a dedicated
    gigabit network for transmission of replicated data and internal
    message moves.
  </p>
<p>
    The clustering capabilities of Momentum enable the following
    features:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        Centralized management of configuration for multiple MTA nodes
      </p></li>
<li class="listitem"><p>
        Replicated, redundant, configuration repository with revision
        control
      </p></li>
<li class="listitem"><p>
        Log aggregation pulling log files from MTA nodes to centralized
        location(s) on the network
      </p></li>
<li class="listitem"><p>
        Replication of a variety of real-time metrics to allow
        cluster-wide coordination for inbound and outbound traffic
        shaping
      </p></li>
<li class="listitem"><p>
        <span class="trademark">DuraVIP</span>™ (Momentum's IP Failover
        mechanism)
      </p></li>
</ul></div>
<p>
    Momentum assumes that the cluster network is a trusted network,
    meaning that it leaves host based authentication to be implemented
    by the network administrator at an appropriate firewall on the
    network.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Momentum's installer does not support setting up subclusters
      during installation. Consult professional services if subclusters
      is a requirement.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="cluster.config_files"></a>16.1. Cluster-specific Configuration Files</h2></div></div></div>
<p>
    A Momentum cluster installation is configured using the
    <a class="link" href="conf.ref.ecelerity.conf.php" title="15.6. ecelerity.conf File"><code class="filename">ecelerity.conf</code></a>
    file similar to a Momentum single node configuration. However,
    additional configuration files are needed:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <a class="link" href="conf.ref.eccluster.conf.php" title="16.2. eccluster.conf File"><code class="filename">eccluster.conf</code></a>
        - Momentum Cluster Manager configuration file
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.ecelerity_cluster.conf.php" title="16.3. ecelerity-cluster.conf File"><code class="filename">ecelerity_cluster.conf</code></a>
        - Cluster-specific configuration file included from within
        <code class="filename">ecelerity.conf</code>
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.msgc_server.conf.php" title="16.4. msgc_server.conf File"><code class="filename">msgc_server.conf</code></a>
        - Cluster messaging bus configuration file included from within
        the <code class="filename">eccluster.conf</code> file on the cluster
        manager and from the <code class="filename">ecelerity-cluster.conf</code>
        file on nodes
      </p></li>
</ul></div>
<p>
    The default cluster-enabled configuration is located in the
    <code class="filename">/opt/msys/ecelerity/etc/conf/default</code>
    subdirectory. Simple deployments will not typically need to edit the
    cluster portions of this configuration. If you intend to use
    <span class="trademark">DuraVIP</span>™ or to more tightly control the scope
    of replicate data, you will need to edit the configuration in the
    cluster stanza of the <code class="filename">ecelerity-cluster.conf</code>
    file.
  </p>
<p>
    There are numerous configuration options that are cluster-specific.
    Some of these options such as
    <code class="option">cluster_max_outbound_connections</code> are visible in
    various scopes, but most options specific to cluster configuration
    are defined in the <a class="link" href="modules.cluster.php" title="71.19. cluster – Cluster">cluster </a>
    module.
  </p>
<p>
    The non-module specific configuration options are listed in
    <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
  </p>
<p>
    Modules and their configuration options are discussed in the
    <a class="xref" href="modules.php" title="Chapter 71. Modules Reference">Chapter 71, <i>Modules Reference</i></a>.
  </p>
<p>
    For general information about Momentum's configuration files, see
    <a class="xref" href="conf.overview.php#conf.files" title="15.1. Configuration Files">Section 15.1, “Configuration Files”</a>.
  </p>
<p>
    For additional details about editing your configuration files, see
    <a class="xref" href="conf.overview.php#conf.manual.changes" title="15.1.4. Changing Configuration Files">Section 15.1.4, “Changing Configuration Files”</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.config_files.mgmt"></a>16.1.1. Cluster-specific Configuration Management</h3></div></div></div>
<p>
      Momentum configuration files are maintained in a version control
      repository and exported to your cluster network via the
      <a class="link" href="conf.overview.php#conf.ecconfigd" title="15.1.3. Configuration Management (ecconfigd)"><code class="filename">ecconfigd</code></a>
      service running on the cluster manager. This daemon is
      auto-configuring and will replicate your configuration
      repositories to all participating cluster nodes. On the cluster
      manager, the repository resides in the
      <code class="filename">/var/ecconfigd/repo</code> directory. Nodes pull
      their configuration from this repository and store their working
      copy in the <code class="filename">/opt/msys/ecelerity/etc/conf</code>
      directory.
    </p>
<p>
      The default installation has a cron job deployed on the nodes that
      uses <a class="link" href="executable.eccfg.php" title="eccfg"><span class="command"><strong>eccfg
      pull</strong></span></a> to update the local configuration from the
      <code class="filename">ecconfigd</code> service. <span class="command"><strong>eccfg</strong></span>
      is built in such a way that these updates are applied atomically
      to the configuration checkout directory.
    </p>
<p>
      The tools that operate on the configuration checkout directory try
      very hard to avoid leaving it in a broken state. Every minute,
      each node will attempt to update its directory to match the
      repository. If you have made local changes to the directory, the
      update will attempt to merge updates from the repository with your
      changes. The update process will only modify the directory if the
      complete revision was able to be pulled. In other words, it will
      not modify the configuration checkout directory if doing so causes
      a conflict and will never leave a directory with a half-applied
      update.
    </p>
<p>
      In some situations, it is possible to put the configuration
      replication into a conflicted state. For instance, in a two node
      cluster, if one of the nodes is unplugged from the network while
      configuration changes are made and committed on both nodes, when
      the network cable is re-connected, the configuration will attempt
      to sync but will notice that conflicting changes have been made.
      If conflicting changes were found, <code class="filename">ecconfigd</code>
      will warn you and provide you with instructions on how to resolve
      the conflict. You may need to manually resolve the conflicting
      configuration files. For instructions on changing configuration
      files, see <a class="xref" href="conf.overview.php#conf.manual.changes" title="15.1.4. Changing Configuration Files">Section 15.1.4, “Changing Configuration Files”</a>.
    </p>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="cluster.config_files.mgmt.cluster"></a>16.1.1.1. Repository Working Copy for Cluster</h4></div></div></div>
<p>
        On the client side of the configuration management, each node
        has a working copy checkout of the repository located at
        <code class="filename">/opt/msys/ecelerity/etc/conf</code>. The following
        are descriptions of the subdirectories in a cluster
        configuration:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
            <code class="filename">global</code> – location for sharing
            cluster-wide configuration information between nodes
          </p>
<p>
            Every node has access to this subdirectory.
          </p>
</li>
<li class="listitem">
<p>
            <code class="filename">default</code> – contains your default
            configuration files, which are shared across multiple nodes
          </p>
<p>
            <code class="literal">default</code> is the name of the default
            subcluster and represents the default configuration for
            nodes in that subcluster.
          </p>
</li>
<li class="listitem">
<p>
            <code class="filename"> <em class="replaceable"><code>nodename</code></em> </code>
            – contains node-specific configuration files
          </p>
<p>
            When you create a node-specific configuration file, a
            directory bearing the node name and a node-specific
            <code class="filename">ecelerity.conf</code> file are created on
            <span class="emphasis"><em>all</em></span> nodes in the cluster.
          </p>
<p>
            When nodes use common values for a number of options, if you
            wish you can put these options in a configuration file
            stored in the <code class="filename">global</code> directory rather
            than repeating them in each
            <code class="filename">/opt/msys/ecelerity/etc/conf/<em class="replaceable"><code>nodename</code></em>/ecelerity.conf</code>
            file. However, you must add include statements to the
            <code class="filename">/opt/msys/ecelerity/etc/conf/<em class="replaceable"><code>nodename</code></em>/ecelerity.conf</code>
            file on each node.
          </p>
</li>
<li class="listitem"><p>
            <code class="filename"> <em class="replaceable"><code>peer</code></em> </code> –
            any files shared by multiple nodes in a single subcluster
          </p></li>
</ul></div>
<p>
        By default the order is:
      </p>
<pre class="screen">
/opt/msys/ecelerity/etc
/opt/msys/ecelerity/etc/conf/global
/opt/msys/ecelerity/etc/conf/{NODENAME}
/opt/msys/ecelerity/etc/conf/default
</pre>
<p>
        Directories are separated by the standard path separator.
      </p>
<p>
        If you wish to change the search order, set the environment
        variable <code class="literal">EC_CONF_SEARCH_PATH</code>. For more
        information about <code class="literal">EC_CONF_SEARCH_PATH</code>, see
        <a class="xref" href="environment_file.php" title="Chapter 31. Configuring the Environment File">Chapter 31, <i>Configuring the Environment File</i></a>.
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.config_files.local.include"></a>16.1.2. Using Node-local <code class="literal">include</code> Files</h3></div></div></div>
<p>
      If you have any configurations specific to a particular node,
      fallback values for configuration options in that node-local
      configuration file <span class="emphasis"><em>cannot</em></span> be included via the
      <code class="filename">/opt/msys/ecelerity/etc/conf/ecelerity.conf</code>
      file. For an included file, the parent file's path is added to the
      search path, so if a file is included from
      <code class="filename">/opt/msys/ecelerity/etc/conf/default/ecelerity.conf</code>,
      the search path becomes:
    </p>
<pre class="programlisting">
/opt/msys/ecelerity/etc/conf/default:/opt/msys/ecelerity/etc:/opt/msys/ecelerity/etc/conf/global:»
  /opt/msys/ecelerity/etc/conf/<em class="replaceable"><code>nodename</code></em>:/opt/msys/ecelerity/etc/conf/default
</pre>
<p>
      If there are minor differences between nodes, you can include a
      local node configuration file as discussed in the following the
      example:
    </p>
<p>
      For one node, you want <code class="literal">OPTION = "FOO"</code>.
    </p>
<p>
      For another node, you want <code class="literal">OPTION = "BAR"</code>.
    </p>
<p>
      Do not define <code class="literal">OPTION</code> in the
      <code class="filename">ecelerity.conf</code> file.
    </p>
<p>
      Set <code class="literal">OPTION</code> in a
      <code class="filename">node-local.conf</code> file in all the
      <code class="filename">/opt/msys/ecelerity/etc/conf/<em class="replaceable"><code>nodename</code></em></code>
      directories.
    </p>
<p>
      Add an "include node-local.conf" statement to
      <code class="filename">/opt/msys/ecelerity/etc/default/ecelerity.conf</code>.
    </p>
<p>
      If there are major differences between node configurations, it is
      probably simpler to create a separate configuration file for each
      node as described in
      <a class="xref" href="cluster.php#cluster.config_files.mgmt.cluster" title="16.1.1.1. Repository Working Copy for Cluster">Section 16.1.1.1, “Repository Working Copy for Cluster”</a>.
    </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.ecelerity.conf.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.configuration.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.eccluster.conf.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">15.6. <code class="filename">ecelerity.conf</code> File </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 16.2. <code class="filename">eccluster.conf</code> File</td>
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
