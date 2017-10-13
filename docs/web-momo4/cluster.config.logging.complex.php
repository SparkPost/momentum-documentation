<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>26.3. Complex Centralized Logging Deployments</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="log_aggregation.php" title="Chapter 26. Log Aggregation">
<link rel="prev" href="cluster.config.logging.centalized.logging.php" title="26.2. Centralized Logging Example">
<link rel="next" href="cluster.config.logging.redundancy.php" title="26.4. Redundant Logs">
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
<tr><th colspan="3" align="center">26.3. Complex Centralized Logging Deployments</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.config.logging.centalized.logging.php">Prev</a> </td>
<th width="60%" align="center">Chapter 26. Log Aggregation</th>
<td width="20%" align="right"> <a accesskey="n" href="cluster.config.logging.redundancy.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="cluster.config.logging.complex"></a>26.3. Complex Centralized Logging Deployments</h2></div></div></div>
<p>
      More complex deployments may arrange for the logs for a given
      subcluster to be aggregated on a custer manager local to that
      subcluster. Consider an environment with "east" and "west"
      subclusters, where the intention is for logs from the "east"
      subcluster to be journalled on a cluster manager node physically
      located in the east, and similarly, logs from "west" logged to a
      cluster manager in the west. The east subcluster has nodes "east1"
      and "east2", and the west subcluster has nodes "west1" and
      "west2".
    </p>
<p>
      There are two ways to configure this deployment. The first is
      using the <code class="filename">eccluster.conf</code> file:
    </p>
<pre class="programlisting">
Logs {
    logfile = "/var/log/eccluster/%Y/%m/%d/%{l}/%{s}/%{n}"
    file_mode = "0640"
    dir_mode = "0755"

    Manager "eastmgr" {
        # Note that The default for Subscriber here is ("eastmgr", "master")
        Node "west1" {
            Subscriber = () # don't pull anything from west1
        }
        Node "west2" {
            Subscriber = () # don't pull anything from west2
        }
    }
    Manager "westmgr" {
        # Note that The default for Subscriber here is ("westmgr", "master")
        Node "east1" {
            Subscriber = () # don't pull anything from east1
        }
        Node "east2" {
            Subscriber = () # don't pull anything from east2
        }
    }
}
</pre>
<p>
      For this to work, you would save this to
      <code class="filename">/opt/msys/ecelerity/etc/conf/global/eccluster.conf</code>
      and remove
      <code class="filename">/opt/msys/ecelerity/etc/conf/default/eccluster.conf</code>
      so that there is just one configuration file for all the cluster
      managers across the cluster.
    </p>
<p>
      This configuration instructs the cluster managers to ignore the
      nodes from the opposing subcluster and has the convenience of
      centralizing the log pulling logic. The trade off is that
      complexity of the cluster manager configuration will grow as the
      number of nodes and subclusters increases.
    </p>
<p>
      An alternate configuration to achieve the same end result is to
      leave <code class="filename">eccluster.conf</code> as the default and
      instead alter the <code class="filename">ecelerity-cluster.conf</code> file
      for the "west" subcluster so that the aggregated cluster node
      logging section is the following:
    </p>
<pre class="programlisting">
ec_logger "ec_logger_cluster" {
    mainlog = "cluster:///var/log/ecelerity/mainlog.cluster=&gt;westmgr"
    paniclog = "cluster:///var/log/ecelerity/paniclog.cluster=&gt;westmgr"
    rejectlog = "cluster:///var/log/ecelerity/rejectlog.cluster=&gt;westmgr"
    acctlog = "cluster:///var/log/ecelerity/acctlog.cluster=&gt;westmgr"
}

bounce_logger "bounce_logger_cluster" {
    bouncelog = "cluster:///var/log/ecelerity/bouncelog.cluster=&gt;westmgr"
}
</pre>
<p>
      Modify the same section for the "east" subcluster, as follows:
    </p>
<pre class="programlisting">
ec_logger "ec_logger_cluster" {
    mainlog = "cluster:///var/log/ecelerity/mainlog.cluster=&gt;eastmgr"
    paniclog = "cluster:///var/log/ecelerity/paniclog.cluster=&gt;eastmgr"
    rejectlog = "cluster:///var/log/ecelerity/rejectlog.cluster=&gt;eastmgr"
    acctlog = "cluster:///var/log/ecelerity/acctlog.cluster=&gt;eastmgr"
}

bounce_logger "bounce_logger_cluster" {
    bouncelog = "cluster:///var/log/ecelerity/bouncelog.cluster=&gt;eastmgr"
}
</pre>
<p>
      This configuration changes the subscriber name on the jlogs to
      match the name of the cluster manager node that you want to pull
      the log file. By default, the cluster manager will try to pull
      jlogs using its nodename as the subscriber, and then try to pull
      logs with the subscriber name of "master". Since there are no
      longer any jlogs targeting the "master" subscriber, the net result
      of this configuration change is that the "eastmgr" cluster manager
      will pull all the logs from nodes in the "east" subcluster
      (because they target "eastmgr" as a subscriber) and similarly, the
      "westmgr" cluster manager will pull all the logs from the nodes in
      the "west" subcluster.
    </p>
<p>
      In a more complex deployment scenario, you may want to have
      multiple cluster managers pull the same set of logs from a given
      node. Declare multiple subscribers by changing the "=&gt;mgrname"
      portion of the filename, as follows:
    </p>
<pre class="programlisting">
ec_logger "ec_logger_cluster" {
    mainlog = "cluster:///var/log/ecelerity/mainlog.cluster?subscribers=mgr1,mgr2,mgr3"
    ...
}
</pre>
<p>
      Repeat this change for each log file that you want to export in
      this way.
    </p>
<p>
      Note that each subscriber that you declare will maintain a
      checkpoint for the log data in the jlog. If a subscriber never
      consumes data from the jlog, the jlog will continue to grow and
      occupy an increasing amount of disk space. For this reason, ensure
      that you only provision subscribers that will be actively
      consuming data from the jlog.
    </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.config.logging.centalized.logging.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="log_aggregation.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="cluster.config.logging.redundancy.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">26.2. Centralized Logging Example </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 26.4. Redundant Logs</td>
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
