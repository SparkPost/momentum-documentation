<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.30. EC_logger – Momentum-Style Logging</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">
<link rel="next" href="modules.eleven.php" title="71.31. eleven – Eleven eXpurgate Content Scanning">
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
<tr><th colspan="3" align="center">71.30. EC_logger – Momentum-Style Logging</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.ds_core.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.eleven.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.ec_logger"></a>71.30. EC_logger – Momentum-Style Logging</h2></div></div></div>
<a class="indexterm" name="idp21571376"></a><p>
    The EC_logger module is used for tracking messages from generation
    through delivery. It creates log files that provide the disposition
    status of every message that goes through Momentum, including
    message generation, message reception, and message delivery.
  </p>
<p>
    This module provides up to five logs, depending upon its
    configuration. For details about the format of each log, follow the
    corresponding link:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <a class="link" href="log_formats.mainlog.php" title="35.7. mainlog">main log</a> - logs message
        disposition including reception, delivery, transient failure,
        and permanent failure events
      </p></li>
<li class="listitem"><p>
        <a class="link" href="log_formats.paniclog.php" title="35.8. paniclog">paniclog</a> - aids in
        debugging system errors by logging system events
      </p></li>
<li class="listitem"><p>
        <a class="link" href="log_formats.rejectlog.php" title="35.9. rejectlog">rejectlog</a> - logs
        records of inbound messages that are rejected by Momentum,
        either due to policy or protocol deviations
      </p></li>
<li class="listitem"><p>
        <a class="link" href="log_formats.php#log_formats.acctlog" title="35.1. acctlog">acctlog</a> - logs both
        authentication entries and authorization entries for the
        ESMTP_Listener and Control_Listener
      </p></li>
<li class="listitem"><p>
        <a class="link" href="log_formats.importlog.php" title="35.6. importlog">importlog</a> - logs
        outcome of spool imports (By default, no log rotation is
        performed for this log.)
      </p></li>
</ul></div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.ec_logger.node"></a>71.30.1. Configuration</h3></div></div></div>
<p>
      To configure the ec_logger module, load it in the
      <code class="filename">ecelerity.conf</code> file. The following is the
      default configuration:
    </p>
<div class="example">
<a name="modules.ec_logger.node.example"></a><p class="title"><b>Example 71.55. ec_logger Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
ec_logger "ec_logger"
{
   mainlog = "/var/log/ecelerity/mainlog.ec"
   rejectlog = "/var/log/ecelerity/rejectlog.ec"
   paniclog = "/var/log/ecelerity/paniclog.ec"
   acctlog = "/var/log/ecelerity/acctlog.ec"
   #importlog is not written by default
   #importlog = "/var/log/ecelerity/importlog.ec"
   heartbeat = 60
}</pre></div>
</div>
<br class="example-break"><p>
      This configuration instructs Momentum to write a
      <code class="filename">mainlog</code> file to
      <code class="filename">/var/log/ecelerity/mainlog.ec</code> and a
      <code class="filename">rejectlog</code> file to
      <code class="filename">/var/log/ecelerity/rejectlog.ec</code>. Together,
      these logs provide a full picture of all the mail transiting
      Momentum. Both log files are included in the default
      configuration.
    </p>
<p>
      The <code class="filename">paniclog</code> file is written to
      <code class="filename">/var/log/ecelerity/paniclog.ec</code>. This log file
      is used to debug errors in your system. Under normal
      circumstances, this log should be empty, excepting informational
      startup messages. It is recommended that you periodically check
      your <code class="filename">paniclog.ec</code> (or schedule a cron job to
      do it for you) to look for any anomalous events. This log file is
      included in the default configuration.
    </p>
<p>
      The <code class="filename">acctlog</code> file is an accounting log and is
      written to <code class="filename">/var/log/ecelerity/acctlog.ec</code>.
      Configure this log if you are using authentication or
      authorization for the ESMTP_Listener or Control_Listener. This log
      file is included in the default configuration. For additional
      details, see <a class="xref" href="inbound_smtp.php#inbound_smtp.logging.auth" title="19.5.5. Logging SMTP Authentication Events">Section 19.5.5, “Logging SMTP Authentication Events”</a>
      and <a class="xref" href="control_authz.php" title="17.4. Control_Listener Authorization">Section 17.4, “Control_Listener Authorization”</a>.
    </p>
<p>
      The <code class="filename">importlog</code> file is written to
      <code class="filename">/var/log/ecelerity/importlog.ec</code>. This log
      records the outcome of a spool import operation. This log file is
      not included in the default configuration. For more information,
      see <a class="xref" href="console_commands.spool_import.php" title="spool import"><span class="refentrytitle">spool import</span></a>.
    </p>
<p>
      The <code class="option">heartbeat</code> option sets the interval at which
      "heartbeat" entries will be written to the logs. Default value is
      <code class="literal">60</code>. The heartbeat entries in the logs are
      essential for proper operation of the real time stats pieces, and
      changing the default value of <code class="option">heartbeat</code> is not
      recommended unless advised to do so by Message Systems support.
    </p>
<p>
      In the configuration, you can also control the permissions of the
      various log files and specify precisely which events to log or not
      to log.
    </p>
<p>
      To control the permissions, add the following lines to your
      <code class="filename">ecelerity.conf</code> file:
    </p>
<pre class="programlisting">
mainlog_mode = 0644
paniclog_mode = 0644
rejectlog_mode = 0644
acctlog_log_mode = 0644
importlog_mode = 0644
</pre>
<p>
      Note that the default value is 0644. Be sure to assign octal
      numbers to these options.
    </p>
<p>
      The following directives enable you to specify which events to log
      or not to log. Events will be logged based on the following lines
      in your <code class="filename">ecelerity.conf</code> file:
    </p>
<pre class="programlisting">
log_receptions = &lt;true|false:  default true&gt;
log_deliveries = &lt;true|false:  default true&gt;
log_transient_failures = &lt;true|false:  default true&gt;
log_permanent_failures = &lt;true|false:  default true&gt;
log_rejections = &lt;true|false:  default true&gt;
log_errors = &lt;true|false:  default true&gt;
</pre>
<p>
      Typically, you will want to log deliveries, receptions, and
      errors.
    </p>
<p>
      The default log files created by this logger are rotated by the
      utility script <span class="command"><strong>ec_rotate</strong></span>. For more information,
      see <a class="xref" href="executable.ec_rotate.php" title="ec_rotate"><span class="refentrytitle">ec_rotate</span></a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.ec_logger.cluster"></a>71.30.2. Configuration of Aggregated Cluster Node Logging</h3></div></div></div>
<p>
      When the ec_logger is defined in the
      <code class="filename">ecelerity-cluster.conf</code> file, it configures the files used to create aggregated text logs of
      node events.
    </p>
<p>
      The default <code class="filename">ecelerity-cluster.conf</code> file
      defines the following ec_logger:
    </p>
<div class="example">
<a name="modules.ec_logger.cluster.example"></a><p class="title"><b>Example 71.56. ec_logger in ecelerity-cluster.conf</b></p>
<div class="example-contents"><pre class="programlisting">
ec_logger "ec_logger_cluster" {
  mainlog = "cluster:///var/log/ecelerity/mainlog.cluster=&gt;master"
  paniclog = "cluster:///var/log/ecelerity/paniclog.cluster=&gt;master"
  rejectlog = "cluster:///var/log/ecelerity/rejectlog.cluster=&gt;master"
  acctlog = "cluster:///var/log/ecelerity/acctlog.cluster=&gt;master"
}
</pre></div>
</div>
<br class="example-break"><p>
      Momentum provides two facilities that aid
      administrators in setting up cluster-wide consolidated logging.
      The first is a node-local clustered I/O layer: <code class="option">cluster://</code> URI
      schema. A typical log destination looks like
      <code class="option">cluster:///var/log/ecelerity/<em class="replaceable"><code>log_name</code></em>.cluster=&gt;master</code>
    </p>
<p>
      where
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">cluster://</code> tells the I/O abstraction layer
          to use node-local segmented data format.
        </p></li>
<li class="listitem"><p>
          <code class="literal">/var/log/ecelerity/<em class="replaceable"><code>log_name</code></em>.cluster</code>
          is the directory in which the node-local log stream will be
          stored (created on demand).
        </p></li>
<li class="listitem"><p>
          <code class="literal">=&gt;master</code> specifies that a subscriber
          named "master" should be added to the node-local log stream if
          it is created on demand.
        </p></li>
</ul></div>
<p>
      For log aggregation,
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">cluster://</code> URI schema is an alias for
          <code class="literal">jlog://</code>. It tells the io_wrapper subsystem
          that we are opening a jlog and not a regular file.
        </p></li>
<li class="listitem"><p>
          <code class="literal">/var/log/ecelerity/<em class="replaceable"><code>log_name</code></em>.cluster</code>
          is the path.
        </p></li>
<li class="listitem"><p>
          <code class="literal">=&gt;master</code> is an optional parameter that
          jlog uses to create a subscriber when opening the log for
          writing.
        </p></li>
</ul></div>
<p>
      If there were no subscribers, items in the log could be deleted
      immediately. Normally, readers will add their own subscriber, but
      you do not want data to go missing between the time the writer
      first creates the jlog and the time a reader first opens it, so
      you provide the name of one of the readers. The default subscriber name is
      <code class="literal">master</code>.
    </p>
<p>
      The jlog files created on a node by lines such as <code class="literal">mainlog
      =
      "cluster:///var/log/ecelerity/mainlog.cluster=&gt;master"</code>
      in the ec_logger module, are processed by
      <code class="filename">eccmgr</code> to create a text file on the log aggregator.
    </p>
<p>
      Creating this logger causes the node to produce logs in the durable
      journalled jlog format. On its own, this causes logs to accumulate
      on disk. For them to find their way to the log aggregator, the
      <code class="option">logs</code> dictionary within the cluster module needs
      to be configured to publish those jlogs. For details, see
      <a class="xref" href="modules.cluster.php#option.logs.dictionary">
          logs
        </a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.ec_logger.eccmgr"></a>71.30.3. Configuration for the Cluster Manager</h3></div></div></div>
<p>
      The ec_logger module can also be used to configure log events that
      occur on the cluster manager. Configuration is similar to
      <a class="xref" href="modules.ec_logger.php#modules.ec_logger.node" title="71.30.1. Configuration">Section 71.30.1, “Configuration”</a> with the
      exception that the ec_logger module is loaded in the
      <code class="filename">eccluster.conf</code> file.
    </p>
<p>
      The default <code class="filename">eccluster.conf</code> file defines the
      following loggers:
    </p>
<div class="example">
<a name="modules.ec_logger.eccmgr.example"></a><p class="title"><b>Example 71.57. Logger in eccluster.conf</b></p>
<div class="example-contents"><pre class="programlisting">
ec_logger "ec_logger"
{
  rejectlog = "/var/log/eccluster/rejectlog.ec"
  mainlog = "/var/log/eccluster/mainlog.ec"
  heartbeat = "0"
  paniclog = "/var/log/eccluster/paniclog.ec"
}</pre></div>
</div>
<br class="example-break"><p>
      Values are specified for the <code class="filename">rejectlog</code> and
      <code class="filename">mainlog</code> because <code class="filename">eccmgr</code>
      runs inside the ecelerity process and will otherwise try to open
      the default log files.
    </p>
<p>
      Since <code class="filename">eccmgr</code> does not transit messages, only
      the <code class="filename">paniclog</code> will have entries. For this same
      reason, the <code class="option">heartbeat</code> option is turned off,
      otherwise the <code class="filename">rejectlog</code> and
      <code class="filename">mainlog</code> will be filled with heartbeat
      markers.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.ec_logger.console"></a>71.30.4. Console Commands</h3></div></div></div>
<p>
      The ec_logger module is accessible through the
      <code class="filename">ec_console</code> for run-time configuration and
      control.
    </p>
<p>
      The following <span class="command"><strong>ec_logger</strong></span> commands are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          ec_logger:<em class="replaceable"><code>ec_logger1</code></em> help
        </span></dt>
<dd>
<p>
            Using this command displays the available console commands.
            The output is as follows:
          </p>
<pre class="screen">
reopen logs
	Close and reopen log files
</pre>
</dd>
<dt><span class="term">
          ec_logger:<em class="replaceable"><code>ec_logger1</code></em> reopen logs
        </span></dt>
<dd><p>
            Closes and reopens the logs.
          </p></dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.ds_core.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.eleven.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.29. ds_core - Datasource Query Core </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.31. eleven – Eleven eXpurgate Content Scanning</td>
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
