<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 34. Rotating Logs ec_rotate</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.logs.php" title="Part IV. Logging">
<link rel="prev" href="log_monitoring.php" title="Chapter 33. Log Monitoring">
<link rel="next" href="log_formats.php" title="Chapter 35. Log Formats">
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
<tr><th colspan="3" align="center">Chapter 34. Rotating Logs <span class="command"><strong>ec_rotate</strong></span>
</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="log_monitoring.php">Prev</a> </td>
<th width="60%" align="center">Part IV. Logging</th>
<td width="20%" align="right"> <a accesskey="n" href="log_formats.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="log_rotating"></a>Chapter 34. Rotating Logs <span class="command"><strong>ec_rotate</strong></span>
</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc"><dt><span class="section"><a href="log_rotating.php#conf.ref.ec_rotate.conf">34.1. <code class="filename">ec_rotate.conf</code> File</a></span></dt></dl>
</div>
<p>
    Momentum provides a utility script <span class="command"><strong>ec_rotate</strong></span> that
    you can use to rotate and compress logs that Momentum writes. It is
    recommended that you run this script daily from your system's
    crontab (<code class="filename">/etc/cron.d/msys-ecelerity-core</code>).
  </p>
<p>
    To invoke ec_rotate, execute <span class="command"><strong>ec_rotate</strong></span> as the
    root user. By default, this command will rotate the files specified
    in the <code class="filename">ec_rotate.conf</code> file, compress them using
    <code class="filename">bzip</code>, and keep seven days of logs on disk. For
    details about this script, including options to change its behavior,
    see <a class="xref" href="executable.ec_rotate.php" title="ec_rotate"><span class="refentrytitle">ec_rotate</span></a>. For the default
    configuration, see <a class="xref" href="log_rotating.php#conf.ref.ec_rotate.conf" title="34.1. ec_rotate.conf File">Section 34.1, “<code class="filename">ec_rotate.conf</code> File”</a>.
  </p>
<p>
    The following logfiles are
    <span class="bold"><strong>not</strong></span> rotated by
    <span class="command"><strong>ec_rotate</strong></span>:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <code class="filename">/var/log/msys-nodejs/*.log</code>
      </p></li>
<li class="listitem"><p>
        <code class="filename">/var/log/msys-nginx/*.log</code>
      </p></li>
<li class="listitem"><p>
        <code class="filename">/var/log/msys-rabbitmq/*</code>
      </p></li>
<li class="listitem"><p>
        <code class="filename">/opt/vertica/log/*.log</code>
      </p></li>
<li class="listitem"><p>
        <code class="filename">/opt/vertica/log/**/*.log</code>
      </p></li>
<li class="listitem"><p>
        <code class="filename">/var/db/vertica/msys/*_catalog/vertica.log</code>
      </p></li>
</ul></div>
<p>
    Set up log rotation for these logfiles using a tool of your choice.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="conf.ref.ec_rotate.conf"></a>34.1. <code class="filename">ec_rotate.conf</code> File</h2></div></div></div>
<p>
    The <code class="filename">ec_rotate.conf</code> file is the configuration
    file for the utility script <a class="xref" href="executable.ec_rotate.php" title="ec_rotate"><span class="refentrytitle">ec_rotate</span></a>.
    You do not need to edit this file unless you wish to change the
    default values.
  </p>
<p>
    A sample <code class="filename">ec_rotate.conf</code> file is found in the
    <code class="filename">/opt/msys/ecelerity/etc/sample-configs/</code>
    directory. To change the default <code class="filename">ec_rotate.conf</code>
    file, make the required changes to the sample file and then move it
    to the <code class="filename">/opt/msys/ecelerity/etc/</code> directory.
  </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      Consult with Message Systems support before you make any changes
      to <code class="filename">ec_rotate.conf</code>.
    </p>
</div>
<p>
    The following is the default <code class="filename">ec_rotate.conf</code>
    file:
  </p>
<div class="example">
<a name="conf.ref.ec_rotate.conf.default"></a><p class="title"><b>Example 34.1. ec_rotate.conf</b></p>
<div class="example-contents"><pre class="screen">
# If enabled=yes, then ec_rotate will perform logfile rotation
# on the set of logfiles listed below.
# If you prefer to disable the default action without modifying
# the crontab entry installed by the package, you should do it here
# by setting enabled=no
#################################
# the options are as follows:
# enabled - yes/no - enables ec_rotate to be run
# logfiles - list of log files to rotate
# retention - the number of old log files to retain
# control_socket - the path to the ecelerity Control_Listener socket
# path_to_bzip - where to find the bzip2 binary on your system

enabled=yes

# The list of logfiles to rotate
logfiles =  /var/log/ecelerity/mainlog.ec \
            /var/log/ecelerity/paniclog.ec \
            /var/log/ecelerity/rejectlog.ec \
            /var/log/ecelerity/bouncelog.ec \
            /var/log/ecelerity/acctlog.ec \
            /var/log/ecelerity/smpplog.ec \
            /var/log/ecelerity/ecconfigd.log \
            /var/log/ecelerity/httplog.ec \
            /var/ecconfigd/apache/access.log \
            /var/ecconfigd/apache/error.log 
logdirs = /var/log/ecelerity/adaptive 

retention = 7

# vim:ts=2:sw=2:et:ft=conf:
</pre></div>
</div>
<br class="example-break"><p>
    The following are the options configured in the
    <code class="filename">ec_rotate.conf</code> file:
  </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
        enabled
      </span></dt>
<dd>
<p>
          Whether log file rotation is enabled
        </p>
<p>
          Default value is <code class="literal">yes</code>.
        </p>
</dd>
<dt><span class="term">
        logfiles
      </span></dt>
<dd><p>
          List of logfiles to rotate
        </p></dd>
<dt><span class="term">
        logdirs
      </span></dt>
<dd><p>
          List of log directories to be searched for files with the
          suffix <code class="literal">.log</code> to rotate
        </p></dd>
<dt><span class="term">
        retention
      </span></dt>
<dd><p>
          Retention period in days
        </p></dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="log_monitoring.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.logs.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="log_formats.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 33. Log Monitoring </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 35. Log Formats</td>
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
