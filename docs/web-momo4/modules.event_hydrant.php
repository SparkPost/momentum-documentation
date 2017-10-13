<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.33. event_hydrant – Message Tracking</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.engage_tracker.php" title="71.32. engagement_tracker – HTTP Engagement Tracking">
<link rel="next" href="modules.exim_logger.php" title="71.34. exim_logger – Exim Logging">
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
<tr><th colspan="3" align="center">71.33. event_hydrant – Message Tracking</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.engage_tracker.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.exim_logger.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.event_hydrant"></a>71.33. event_hydrant – Message Tracking</h2></div></div></div>
<a class="indexterm" name="idp21748032"></a><p>
    The event_hydrant module is used for tracking messages from
    generation through engagement. It exports a jlog file that provides
    the full disposition status of every message that goes through
    Momentum, including message generation, message reception, message
    delivery, and engagement tracking. Note that this module combines
    the functionality of the ec_logger and bounce_logger with engagement
    tracking.
  </p>
<p>
    Ensure that you have a subscriber for the jlog file generated by
    this module. For an example of a jlog reader, see
    <a class="xref" href="modules.jlog.php#modules.jlog.reader" title="71.43.2. Using JLog::Reader">Section 71.43.2, “Using JLog::Reader”</a>.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Event data, tracking the full disposition status of every message
      that goes through Momentum, is also available in the following:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          UI reports (See <a class="xref" href="web-ui.reports.php" title="Chapter 57. Reports and Engagement Tracking in the UI">Chapter 57, <i>Reports and Engagement Tracking in the UI</i></a>.)
        </p></li>
<li class="listitem"><p>
          <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Metrics API</a>
        </p></li>
<li class="listitem"><p>
          <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Webhooks API</a> or
          Webhooks page of the UI (See
          <a class="xref" href="web-ui.webhooks.php" title="Chapter 60. Managing Your Webhooks in the UI">Chapter 60, <i>Managing Your Webhooks in the UI</i></a>.)
        </p></li>
</ul></div>
<p>
      Therefore, writing the event_hydrant jlog file is typically
      disabled by default. This option must be enabled if you wish to
      create the jlog file.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.event_hydrant.configuration"></a>71.33.1. Configuration</h3></div></div></div>
<p>
      The event_hydrant module is configured in the
      <code class="filename">ecelerity.conf</code> file. The following is the
      default configuration:
    </p>
<div class="example">
<a name="modules.event_hydrant.configuration.example"></a><p class="title"><b>Example 71.60. event_hydrant Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
event_hydrant "event_collector" {
  concurrency = 1
  cust_prefix = "cust_"
  jlog_filename = "jlog:///var/log/ecelerity/event_hydrant.rt=&gt;event_consumer"
  log_click = true
  log_conversion = true
  log_delivery = true
  log_genfail = true
  log_genrejection = true
  log_inband_bounce = true
  log_open = true
  log_outofband_bounce = true
  log_reception = true
  log_rejection = true
  log_tempfail = true
  # Set to "false" by default. Set to "true" to write jlogs
  write_jlog = false
}
</pre></div>
</div>
<br class="example-break"><p>
      The following are the configuration options defined by this
      module:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          concurrency
        </span></dt>
<dd><p>
            Define the number of threads to use. Default value is
            <code class="literal">1</code>.
          </p></dd>
<dt><span class="term">
          cust_prefix
        </span></dt>
<dd><p>
            This option enables you to add your own data to the jlog by
            logging arbitrary context variables. Any context variable
            created using this prefix will be added to the jlog. Default
            value is <code class="literal">cust_</code>. When using Lua policy,
            use <code class="filename">msg:context_set</code> to set the context
            variable.
          </p></dd>
<dt><span class="term">
          jlog_filename
        </span></dt>
<dd>
<p>
            Specify the location, name, and subscriber of the jlog file
            generated by this module. To use this option,
            <code class="option">write_jlog</code> must be set to
            <code class="literal">true</code>. Default value is
            <code class="literal">jlog:///var/log/ecelerity/event_hydrant.rt=&gt;event_consumer</code>.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              For a plain text log, drop the <code class="literal">jlog://</code>
              prefix.
            </p>
</div>
</dd>
<dt><span class="term">
          log_click
        </span></dt>
<dd><p>
            Whether to log click events. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          log_conversion
        </span></dt>
<dd><p>
            Whether to log conversion events. Default value is
            <code class="literal">true</code>. <span class="emphasis"><em>Note</em></span>:
            Conversion events have not yet been implemented.
          </p></dd>
<dt><span class="term">
          log_delivery
        </span></dt>
<dd><p>
            Whether to log deliveries. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          log_genfail
        </span></dt>
<dd>
<p>
            Whether to log message generation failure events. Default
            value is <code class="literal">true</code>.
          </p>
<p>
            An event is recorded for each individual failure. For
            example, if a transmission has 100 recipients and 20 of them
            have invalid email addresses, 20 generation failure events
            are logged.
          </p>
</dd>
<dt><span class="term">
          log_genrejection
        </span></dt>
<dd><p>
            Whether to log a generated message that is rejected by
            policy. Default value is <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          log_inband_bounce
        </span></dt>
<dd><p>
            Whether to log in-band bounces. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          log_open
        </span></dt>
<dd><p>
            Whether to log open events. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          log_outofband_bounce
        </span></dt>
<dd><p>
            Whether to log out-of-band bounces. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          log_reception
        </span></dt>
<dd><p>
            Whether to log receptions. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          log_rejection
        </span></dt>
<dd><p>
            Whether to log rejections. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          log_tempfail
        </span></dt>
<dd><p>
            Whether to log temporary failures. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          write_jlog
        </span></dt>
<dd>
<p>
            Whether to write jlogs. Default value is
            <code class="literal">false</code>. This option must be enabled if you
            wish to create jlogs. The location of the jlog file is
            determined by the <code class="option">jlog_filename</code> option.
          </p>
<p>
            If this option is enabled, logs will be written individually
            on each Platform node so custom applications can read event
            data. You are not required to implement aggregation in order
            to read jlogs.
          </p>
</dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.engage_tracker.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.exim_logger.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.32. engagement_tracker – HTTP Engagement Tracking </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.34. exim_logger – Exim Logging</td>
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
