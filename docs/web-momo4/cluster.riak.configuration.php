<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>16.7. Configuring Riak in a Cluster</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="cluster.php" title="Chapter 16. Cluster-specific Configuration">
<link rel="prev" href="cluster.config.failover.php" title="16.6. Configuring Momentum for High Availability and Failover">
<link rel="next" href="control_listener.php" title="Chapter 17. Configuring Momentum's System Console">
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
<tr><th colspan="3" align="center">16.7. Configuring Riak in a Cluster</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.config.failover.php">Prev</a> </td>
<th width="60%" align="center">Chapter 16. Cluster-specific Configuration</th>
<td width="20%" align="right"> <a accesskey="n" href="control_listener.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="cluster.riak.configuration"></a>16.7. Configuring Riak in a Cluster</h2></div></div></div>
<p>
      In a cluster configuration, by default,
      <a class="link" href="riak.php" title="Chapter 30. Riak">Riak</a> is installed on every node. Each
      node requires a unique name to participate in the cluster. During
      installation, the installer automatically assigns names, which are
      stored in the
      <code class="filename">/opt/msys/3rdParty/riak/etc/vm.args</code>
      configuration file and specified with the "-name" parameter
      switch.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If the IP address or interface is changed, this parameter must
        be updated and the ring status updated in the following way;
        <strong class="userinput"><code>riak-admin reip riak-subcluster_name@oldip
        riak-subcluster_name@newip</code></strong>. The local service
        <span class="bold"><strong>must not be running</strong></span>
        for this to work; make sure the service is disabled and stopped
        while this operation is carried out.
      </p>
<p>
        On a singlenode installation, the name defaults to
        <code class="literal">riak-<em class="replaceable"><code>subcluster_name</code></em>@127.0.0.1</code>.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.riak.configuration.joining"></a>16.7.1. Joining a Node to a Riak Cluster</h3></div></div></div>
<p>
        To configure a node to join the Riak cluster after installation,
        follow these steps:
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Shut down the ecelerity process on the node by issuing the
            command:

</p>
<pre class="screen">
shell&gt; /etc/init.d/ecelerity stop
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            In
            <code class="filename">/opt/msys/3rdParty/riak/etc/app.config</code>,
            ensure that <code class="literal">http</code> is bound to both
            <code class="literal">{127.0.0.1, 8098}</code> and
            <code class="literal">{<em class="replaceable"><code>local_node_ip</code></em>,
            8098}</code>.
          </p>
<p>
            For example: <code class="literal">{http, [{127.0.0.1, 8098},
            {10.70.20.131, 8098} ]}</code>.
          </p>
</li>
<li class="listitem">
<p>
            Start Riak by issuing the command:

</p>
<pre class="screen">
shell&gt; /etc/init.d/msys-riak start  
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Use the riak-admin command to join the MTA to the Riak
            cluster:

</p>
<pre class="screen">
shell&gt; /opt/msys/3rdParty/riak/bin/riak-admin cluster join riak-<em class="replaceable"><code>cluster_name@manager_IP</code></em>
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Use the riak-admin command to verify that all nodes are
            joined together

</p>
<pre class="screen">
shell&gt; /opt/msys/3rdParty/riak/bin/riak-admin status 
</pre>
<p>

            The <code class="literal">ring_members</code> line of the command
            output should be similar to the following:

</p>
<pre class="screen">
ring_members : ['riak-default@10.70.20.129','riak-default@10.70.20.131', ... ]
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Restart the ecelerity process:

</p>
<pre class="screen">
shell&gt; /etc/init.d/ecelerity start  
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.riak.configuration.removing"></a>16.7.2. Removing a Node from a Riak Cluster</h3></div></div></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
          Serious performance issues can occur if inactive or
          misbehaving Riak nodes are not removed from the cluster.
        </p>
</div>
<p>
        To remove a node from a Riak cluster, go to the command line on
        the node you wish to remove and issue the following Riak
        command:
      </p>
<pre class="screen">
shell&gt; /opt/msys/3rdParty/riak/bin/riak-admin cluster leave
</pre>
<p>
        In cases where the Riak node is misbehaving or unresponsive and
        you cannot use the <code class="literal">cluster leave</code> command, use
        the <code class="literal">cluster force-remove</code> command:
      </p>
<pre class="screen">
shell&gt; /opt/msys/3rdParty/riak/bin/riak-admin cluster force-remove riak-<em class="replaceable"><code>cluster_name@ip_address</code></em>
</pre>
<p>
        In this example, the Riak node
        <code class="literal">riak-<em class="replaceable"><code>cluster_name@ip_address</code></em></code>
        will be removed from the node that executes this command forcing
        the removal of the target node from the ring. The
        <code class="literal">cluster force-remove</code> command should only be
        used in cases where it is not possible to properly
        <code class="literal">cluster leave</code>, as <span class="bold"><strong>data
        on the removed node will not be handed off</strong></span>.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.riak.configuration.checking"></a>16.7.3. Checking Riak Cluster Communication</h3></div></div></div>
<p>
        To check that all nodes are joined together, use the following
        test:
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Log in to any node, go to the command line, and insert a
            record into Riak:
          </p>
<pre class="screen">
shell&gt; curl -X PUT -H "Content-Type: text/plain" \
http://127.0.0.1:8098/riak/adctrl/test-record -d "A test"
</pre>
</li>
<li class="listitem">
<p>
            Log in to another node and retrieve the record:
          </p>
<pre class="screen">
shell&gt; curl http://127.0.0.1:8098/riak/adctrl/test-record
</pre>
<p>
            If "A test" is output to the screen, then the two Riak
            servers are joined.
          </p>
</li>
<li class="listitem"><p>
            Repeat the previous step for every node in the cluster.
          </p></li>
<li class="listitem">
<p>
            When you've finished testing, remove the test record:

</p>
<pre class="screen">
shell&gt; curl -X DELETE http://127.0.0.1:8098/riak/adctrl/test-record
</pre>
<p>
          </p>
</li>
</ol></div>
<p>
        If you fail to retrieve the test record, check that the Riak
        nodes are joined by using the command:

</p>
<pre class="screen">
shell&gt; /opt/msys/3rdParty/riak/bin/riak-admin status 
</pre>
<p>
      </p>
<p>
        In the output, look for the <code class="literal">ring_members</code> line
        and verify that there is an entry
        <code class="literal">'riak-<em class="replaceable"><code>cluster_name@ip_address</code></em>'</code>
        for each node in the cluster. If this is not the case, then the
        Riak servers may be partially joined or not joined at all. Join
        the missing node or nodes to the cluster as described in
        <a class="xref" href="cluster.riak.configuration.php#cluster.riak.configuration.joining" title="16.7.1. Joining a Node to a Riak Cluster">Section 16.7.1, “Joining a Node to a Riak Cluster”</a>
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          In a cluster configuration, messages in the panic log such as
          <code class="literal">adaptive_db_sync: Couldn't connect to
          server</code> may indicate the failure of one or more Riak
          servers. If you see such messages, check the status of your
          Riak servers using the <span class="command"><strong>riak-admin</strong></span> command.
        </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.config.failover.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="cluster.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="control_listener.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">16.6. Configuring Momentum for High Availability and Failover </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 17. Configuring Momentum's System Console</td>
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
