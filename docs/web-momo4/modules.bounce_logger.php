<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.13. bounce_logger – Momentum-Style Bounce Logging</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.bounce_classifier_override.php" title="71.12. bounce_classifier_override – Override/Augment Bounce Classifications">
<link rel="next" href="modules.brightmail.php" title="71.14. brightmail – Symantec Brightmail™ Content Scanning Support">
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
<tr><th colspan="3" align="center">71.13. bounce_logger – Momentum-Style Bounce Logging</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.bounce_classifier_override.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.brightmail.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.bounce_logger"></a>71.13. bounce_logger – Momentum-Style Bounce Logging</h2></div></div></div>
<a class="indexterm" name="idp20140576"></a><p>
    The ec_logger and event_hydrant modules provide full disposition
    status of every message that goes through Momentum. However, it is
    often convenient to view status of only bounced messages. The
    bounce_logger module writes only inband (or protocol-time) and
    out-of-band bounces to a single log file.
  </p>
<p>
    For details about the bouncelog file format, see
    <a class="xref" href="log_formats.bouncelog.php" title="35.3. bouncelog">Section 35.3, “<code class="filename">bouncelog</code>”</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.bounce_logger.node"></a>71.13.1. Configuration</h3></div></div></div>
<p>
      To configure the bounce_logger module, load it in the
      <code class="filename">ecelerity.conf</code> file. The following is the
      default configuration:
    </p>
<div class="example">
<a name="modules.bounce_logger.node.example"></a><p class="title"><b>Example 71.21. bounce_logger Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
bounce_logger "bounce_logger"
{
   bouncelog = "/var/log/ecelerity/bouncelog.ec"
   bouncelog_mode = 0644
   heartbeat = 60
}</pre></div>
</div>
<br class="example-break"><p>
      This configuration instructs Momentum to write a
      <code class="filename">bouncelog</code> file to
      <code class="filename">/var/log/ecelerity/bouncelog.ec</code> with the file
      permissions 0644.
    </p>
<p>
      The <code class="option">heartbeat</code> option sets the interval at which
      "heartbeat" entries will write to the log. Default value is
      <code class="literal">60</code>. The heartbeat entries in the log are
      essential for proper operation of the real time stats pieces, and
      changing the default value of <code class="option">heartbeat</code> is not
      recommended unless advised to do so by Message Systems support.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If you find that you have rejectlog entries with the reason "550
        5.7.1 [internal] discarded by policy", and you are having
        difficulty in correlating those rejections with your policy
        rules, it could be because your bounce processing configuration
        is set to blackhole any detected bounces. If this is the case,
        you should expect to see a corresponding entry in your bounce
        log, except in the case where the internal bounce classifier has
        determined that the incoming message was classified as
        BC_SUBSCRIBE, a subscription request. The bounce logger does not
        log this type of incoming mail because it does not relate to a
        specific outgoing message originating from your site.
      </p>
</div>
<p>
      In the configuration, you can also specify which events to log or
      not to log. Events will be logged based on the following lines in
      your configuration file:
    </p>
<pre class="programlisting">
log_inband_bounces = &lt;on|off:  default on&gt;
log_outofband_bounces = &lt;on|off:  default on&gt;
log_transient_failures = &lt;on|off:  default on&gt;
</pre>
<p>
      The <code class="option">log_transient_failures</code> option creates a log
      entry of type ‘<code class="literal">T</code>’ in the bounce log along
      with the actual bounce log line. Apart from the type identifier,
      the log entry for a transient failure is the same as other bounce
      log entries. Note that bounce log entries differ in format from
      ec_logger entries. The default value for this option is
      <code class="literal">on</code>.
    </p>
<p>
      The bounce_logger relies on additional global configuration
      options: <a class="xref" href="conf.ref.bounce_domains.php" title="bounce_domains"><span class="refentrytitle">bounce_domains</span></a>,
      <a class="xref" href="conf.ref.bounce_behavior.php" title="bounce_behavior"><span class="refentrytitle">bounce_behavior</span></a>,
      <a class="xref" href="conf.ref.bounce_suppress_list.php" title="bounce_suppress_list"><span class="refentrytitle">bounce_suppress_list</span></a> and
      <a class="xref" href="conf.ref.bounce_pattern.php" title="bounce_pattern"><span class="refentrytitle">bounce_pattern</span></a>.
    </p>
<p>
      The default log file created by this logger is rotated by the
      utility script <span class="command"><strong>ec_rotate</strong></span>. For more information,
      see <a class="xref" href="executable.ec_rotate.php" title="ec_rotate"><span class="refentrytitle">ec_rotate</span></a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.bounce_logger.cluster"></a>71.13.2. Configuration of Aggregated Cluster Node Logging</h3></div></div></div>
<p>
      When the bounce_logger is defined in the
      <code class="filename">ecelerity-cluster.conf</code> file, it configures the files used to create aggregated text logs of
      node events.
    </p>
<p>
      The default <code class="filename">ecelerity-cluster.conf</code> file
      defines the following bounce_logger:
    </p>
<div class="example">
<a name="modules.bounce_logger.cluster.example"></a><p class="title"><b>Example 71.22. bounce_logger in ecelerity-cluster.conf</b></p>
<div class="example-contents"><pre class="programlisting">
bounce_logger "bounce_logger_cluster" {
  bouncelog = "cluster:///var/log/ecelerity/bouncelog.cluster=&gt;master"
}
</pre></div>
</div>
<br class="example-break"><p>
      For a detailed explanation of setting up cluster-wide consolidated
      logging, see <a class="xref" href="modules.ec_logger.php#modules.ec_logger.cluster" title="71.30.2. Configuration of Aggregated Cluster Node Logging">Section 71.30.2, “Configuration of Aggregated Cluster Node Logging”</a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.bounce_logger.eccmgr"></a>71.13.3. Configuration for the Cluster Manager</h3></div></div></div>
<p>
      The bounce_logger module can also be used to configure log events
      that occur on the cluster manager. Configuration is similar to
      <a class="xref" href="modules.bounce_logger.php#modules.bounce_logger.node" title="71.13.1. Configuration">Section 71.13.1, “Configuration”</a> with the
      exception that the bounce_logger module is loaded in the
      <code class="filename">eccluster.conf</code> file.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.bounce_logger.console"></a>71.13.4. Console Commands</h3></div></div></div>
<p>
      The bounce_logger module allows for a limited set of online
      commands via <code class="literal">ec_console</code>:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          bounce_logger:<em class="replaceable"><code>bounce_logger_rt</code></em>
          reopen logs
        </span></dt>
<dd><p>
            If you move a log, use the ec_console command
            <span class="command"><strong>reopen logs</strong></span> to close and reopen all the
            log files.
          </p></dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.bounce_classifier_override.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.brightmail.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.12. bounce_classifier_override – Override/Augment Bounce Classifications </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.14. brightmail – Symantec <span class="trademark">Brightmail</span>™ Content
      Scanning Support</td>
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
