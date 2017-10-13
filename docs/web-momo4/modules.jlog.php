<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.43. jlog – jlog-Formatted Logging</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.ipv6_lookup.php" title="71.42. ipv6_lookup – Multi-address-family MX Records">
<link rel="next" href="modules.live.bounce.updates.php" title="71.44. Live Bounce Updates – Live Bounce Updates Service">
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
<tr><th colspan="3" align="center">71.43. jlog – jlog-Formatted Logging</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.ipv6_lookup.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.live.bounce.updates.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.jlog"></a>71.43. jlog – jlog-Formatted Logging</h2></div></div></div>
<a class="indexterm" name="idp22053952"></a><p>
    jlog-formatted logs are binary logs with independent producers,
    which write the logs, and subscribers, which consume the logs.
    Momentum jlogs present themselves as directories in the filesystem.
  </p>
<p>
    Momentum produces jlogs in the following:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        Aggregated cluster node logging (see
        <a class="xref" href="conf.ref.ecelerity_cluster.conf.php" title="16.3. ecelerity-cluster.conf File">Section 16.3, “<code class="filename">ecelerity-cluster.conf</code> File”</a>)
      </p></li>
<li class="listitem"><p>
        event_hydrant module used for tracking messages (see
        <a class="xref" href="modules.event_hydrant.php" title="71.33. event_hydrant – Message Tracking">Section 71.33, “event_hydrant – Message Tracking”</a>)
      </p></li>
<li class="listitem"><p>
        Custom deployments configured to log data to jlog files for
        consumption by another application, such as Perl scripts. In
        turn, these scripts may push the data elsewhere, e.g.: to a
        database. (see <a class="xref" href="modules.custom_logger.php" title="71.25. custom_logger – User-defined Logging">Section 71.25, “custom_logger – User-defined Logging”</a>)
      </p></li>
</ul></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      We expressly recommend <span class="bold"><strong>against</strong></span>
      writing jlogs to an NFS file system because of concerns about its
      performance in general and its reliability, especially on Linux.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp22063744"></a>71.43.1. Configuration</h3></div></div></div>
<p>
      This module is loaded automatically as required and does not need
      to be explicitly included.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        If your system is generating jlogs, ensure that they are being
        consumed. Otherwise, the <code class="filename">/var/log/ecelerity</code>
        partition will become exceedingly large.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="idp22066960"></a>71.43.1.1. jlog Executable Commands</h4></div></div></div>
<p>
        The following executable commands are used for analyzing and
        maintaining jlog files:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <a class="xref" href="executable.jlog_change_endian.php" title="jlog_change_endian"><span class="refentrytitle">jlog_change_endian</span></a>
          </p></li>
<li class="listitem"><p>
            <a class="xref" href="executable.jlog_sanity_check.php" title="jlog_sanity_check"><span class="refentrytitle">jlog_sanity_check</span></a>
          </p></li>
<li class="listitem"><p>
            <a class="xref" href="executable.jlogctl.php" title="jlogctl"><span class="refentrytitle">jlogctl</span></a>
          </p></li>
</ul></div>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.jlog.reader"></a>71.43.2. Using JLog::Reader</h3></div></div></div>
<p>
      Using the JLog::Reader module that ships with Momentum, you can
      read your jlog files with a Perl script. This module is found in
      the
      <code class="filename">/opt/msys/3rdParty/lib/perl5/vendor_perl/5.16.3/x86_64-linux-thread-multi/JLog
      </code> directory on any Momentum node.
    </p>
<p>
      A common use case is to process the jlog files created by a
      custom_logger module. In
      <a class="xref" href="modules.jlog.php#modules.jlog.reader.custom_logger.example" title="Example 71.68. custom_logger">Example 71.68, “custom_logger”</a>, a
      jlog is created at
      <code class="filename">/var/log/ecelerity/delivery_log_rt</code> with a
      subscriber name <code class="literal">my_subscriber</code>.
    </p>
<div class="example">
<a name="modules.jlog.reader.custom_logger.example"></a><p class="title"><b>Example 71.68. custom_logger</b></p>
<div class="example-contents"><pre class="programlisting">
custom_logger "custom_logger_jlog" {
  # custom logging in jlog format
  delivery_logfile = "jlog://var/log/ecelerity/delivery_log_rt=&gt;my_subscriber"
  delivery_format = "%t@%r@%R@%vctx_mess{customerid}"
}
</pre></div>
</div>
<br class="example-break"><p>
      You can read the jlog in the following way:
    </p>
<div class="example">
<a name="crm.processing.logs.jlog.reader.example"></a><p class="title"><b>Example 71.69. JLog::Reader example</b></p>
<div class="example-contents"><pre class="programlisting">
#!/opt/msys/3rdParty/bin/perl
use JLog::Reader;
my $path = "/var/log/ecelerity/delivery_log_rt";
my $subscriber = "my_subscriber";

my $reader = JLog::Reader-&gt;new($path);
$reader-&gt;open($subscriber);

while (my $line = $reader-&gt;read) {
  # Do something with $line such as process and push into a database
}
# If you're done with the various $line's or they were pushed to a db
# successfully set a checkpoint.
$reader-&gt;checkpoint();
# if you're done with reading the log, close it
$reader-&gt;close();
</pre></div>
</div>
<br class="example-break"><p>
      This code opens a jlog and reads each line in that jlog. The
      <code class="literal">$path</code> and <code class="literal">$subscriber</code>
      variables should match those configured in the custom_logger
      module. The <code class="literal">checkpoint</code> method indicates that
      records have been read successfully to this point. Records are
      removed after they have been read by all registered subscribers.
    </p>
<p>
      For more information about JLog::Reader, issue the command
      <strong class="userinput"><code>/opt/msys/3rdParty/bin/perldoc
      JLog::Reader</code></strong>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.ipv6_lookup.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.live.bounce.updates.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.42. ipv6_lookup – Multi-address-family MX Records </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.44. Live Bounce Updates – Live Bounce Updates Service</td>
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
