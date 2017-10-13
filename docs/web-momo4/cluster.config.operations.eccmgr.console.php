<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>38.2. Console Commands for the Cluster Manager</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="cluster.config.operations.php" title="Chapter 38. Using the Cluster Manager (eccmgr)">
<link rel="prev" href="cluster.config.operations.php" title="Chapter 38. Using the Cluster Manager (eccmgr)">
<link rel="next" href="cluster.cidr_server.php" title="Chapter 39. CIDR Server">
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
<tr><th colspan="3" align="center">38.2. Console Commands for the Cluster Manager</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.config.operations.php">Prev</a> </td>
<th width="60%" align="center">Chapter 38. Using the Cluster Manager (<span class="command"><strong>eccmgr</strong></span>)</th>
<td width="20%" align="right"> <a accesskey="n" href="cluster.cidr_server.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="cluster.config.operations.eccmgr.console"></a>38.2. Console Commands for the Cluster Manager</h2></div></div></div>
<p>
      The following console commands can be issued from within the
      <span class="command"><strong>eccmgr</strong></span> service. These commands are mainly
      concerned with broadcasting or unicasting commands to other
      cluster nodes.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt>
<a name="cluster.config.operations.eccmgr.console.broadcast"></a><span class="term">
          broadcast <em class="replaceable"><code>command</code></em>
        </span>
</dt>
<dd><p>
            Broadcast a console command to the cluster. For a list of
            available console commands, see
            <a class="xref" href="console_commands.php" title="Chapter 67. Console Commands Summary">Chapter 67, <i>Console Commands Summary</i></a>.
          </p></dd>
<dt>
<a name="cluster.config.operations.eccmgr.console.broadcast.cluster"></a><span class="term">
          broadcast cluster duravip move
          <em class="replaceable"><code>from_host</code></em>
          <em class="replaceable"><code>to_host</code></em>
        </span>
</dt>
<dd>
<p>
            The only safe way to do a duravip move is using a
            <span class="command"><strong>broadcast cluster duravip move</strong></span> command.
            This guarantees that both the node that currently owns the
            address and the new owner will be in sync. For example:
          </p>
<pre class="programlisting">
/tmp/2025&gt; broadcast cluster duravip move <em class="replaceable"><code>10.0.5.139</code></em> to <em class="replaceable"><code>hostname</code></em>
</pre>
<p>
            Furthermore, if there is a mismatch between the machine's
            hostname and the spread node name (i.e. if the hostname is
            fully qualified) the move will not succeed.
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
          subcluster broadcast <em class="replaceable"><code>subcluster
          command</code></em>
        </span></dt>
<dd>
<p>
            This command works in the same way as the <span class="command"><strong>broadcast
            <em class="replaceable"><code>command</code></em></strong></span> but sends the
            command only to the subcluster identified by
            <em class="replaceable"><code>subcluster</code></em>.
          </p>
<p>
            For example to broadcast a command to all nodes on the
            <code class="literal">west</code> subcluster, you would issue the
            command <strong class="userinput"><code>subcluster broadcast west
            <em class="replaceable"><code>command</code></em></code></strong>.
          </p>
</dd>
<dt><span class="term">
          subcluster retrieve <em class="replaceable"><code>subcluster
          command</code></em>
        </span></dt>
<dd>
<p>
            This command works in the same way as the <span class="command"><strong>retrieve
            <em class="replaceable"><code>command</code></em></strong></span> but retrieves
            the responses only from the subcluster identified by
            <em class="replaceable"><code>subcluster</code></em>.
          </p>
<p>
            For example to retrieve the responses to a command broadcast
            to all nodes on the <code class="literal">west</code> subcluster, you
            would issue the command <strong class="userinput"><code>subcluster retrieve west
            <em class="replaceable"><code>command</code></em></code></strong>.
          </p>
</dd>
<dt><span class="term">
          flush control cache
        </span></dt>
<dd><p>
            Clear the results buffer. After executing this command, you
            will not be able to retrieve previous commands.
          </p></dd>
<dt><span class="term">
          help
        </span></dt>
<dd><p>
            Show a help message, listing available commands and their
            brief usages.
          </p></dd>
<dt><span class="term">
          info
        </span></dt>
<dd>
<p>
            Show general information about the cluster group and the
            cluster node.
          </p>
<p>
            This command is analogous to the similarly named cluster
            module console command, described in
            <a class="xref" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">Section 71.19.4, “Cluster Module-specific Console Commands”</a>.
          </p>
</dd>
<dt><span class="term">
          retrieve <em class="replaceable"><code>command</code></em>
        </span></dt>
<dd><p>
            Retrieve the responses to a command broadcasted by the
            cluster manager.
          </p></dd>
<dt><span class="term">
          retrieve_node <em class="replaceable"><code>node</code></em>
          <em class="replaceable"><code>command</code></em>
        </span></dt>
<dd><p>
            Retrieve the responses to a unicasted/broadcasted command
            from the specified node of the cluster.
          </p></dd>
<dt><span class="term">
          show cluster membership
        </span></dt>
<dd>
<p>
            Show current cluster members and their roles (nodes, manager
            or other).
          </p>
<p>
            This command is analogous to the similarly named cluster
            module console command described in
            <a class="xref" href="modules.cluster.php#modules.cluster.console" title="71.19.4. Cluster Module-specific Console Commands">Section 71.19.4, “Cluster Module-specific Console Commands”</a>,
            i.e., the output of <span class="command"><strong>show cluster
            membership</strong></span> while in XML format, is identical to
            the output of the cluster module command <span class="command"><strong>cluster
            membership</strong></span>.
          </p>
</dd>
<dt><span class="term">
          shutdown
        </span></dt>
<dd><p>
            Shutdown the cluster manager.
          </p></dd>
<dt><span class="term">
          unicast <em class="replaceable"><code>node</code></em>
          <em class="replaceable"><code>command</code></em>
        </span></dt>
<dd><p>
            Unicast a <a class="link" href="console_commands.php" title="Chapter 67. Console Commands Summary"> console
            command</a> to the specified node in the cluster.
          </p></dd>
<dt><span class="term">
          version
        </span></dt>
<dd><p>
            Display version and copyright information of eccmgr.
          </p></dd>
<dt><span class="term">
          config
        </span></dt>
<dd>
<p>
            You can use the <a class="xref" href="console_commands.config.php" title="config"><span class="refentrytitle">config</span></a>
            commands for online configuration tuning. Commonly used
            commands include:
          </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
                config [set | get | eval] [
                <em class="replaceable"><code>scope</code></em> ]
                <em class="replaceable"><code>option_name</code></em> [
                <em class="replaceable"><code>value</code></em> ]
              </span></dt>
<dd><p>
                  Set, get, or eval any of the options in the
                  <code class="filename">eccluster.conf</code>.
                </p></dd>
<dt><span class="term">
                config showrecurse
              </span></dt>
<dd><p>
                  View all options that affect the cluster manager. This
                  command displays options found in the
                  <code class="filename">eccluster.conf</code> file.
                </p></dd>
</dl></div>
</dd>
</dl></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.config.operations.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="cluster.config.operations.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="cluster.cidr_server.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 38. Using the Cluster Manager (<span class="command"><strong>eccmgr</strong></span>) </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 39. CIDR Server</td>
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
