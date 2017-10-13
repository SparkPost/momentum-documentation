<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.7. as_logger – Audit Series Logger</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.antivirus.php" title="71.6. antivirus – Antivirus">
<link rel="next" href="modules.auth_ds.php" title="71.8. auth_ds – Datasource based SMTP Authentication">
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
<tr><th colspan="3" align="center">71.7. as_logger – Audit Series Logger</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.antivirus.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.auth_ds.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.as_logger"></a>71.7. as_logger – Audit Series Logger</h2></div></div></div>
<a class="indexterm" name="idp19786864"></a><p>
    The as_logger module is designed for use on an <code class="filename">eccmgr</code> instance. It journals replicated audit
    series to disk at a configurable, periodic interval. Audit series
    can be included or excluded from being journalled by specifying
    regular expressions in an inclusion or exclusion list. The files are
    stored in a configurable directory. The name of each file is formed
    from the series name followed by a timestamp. The content of each
    file is a serialized "snapshot" of the audit series at that moment
    (reflecting the interval ending at the moment the file is written).
    The audit series is reset at each interval so that each file
    represents only one data period.
  </p>
<p>
    Post-analysis of these data files can be performed via custom
    scripts. These data files can also be inspected from the cidr_server
    command line using the <span class="command"><strong>cidr_cli</strong></span> command. For more
    information, see <a class="xref" href="cluster.cidr_server.php" title="Chapter 39. CIDR Server">Chapter 39, <i>CIDR Server</i></a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.auth_ds.configuration"></a>71.7.1. Configuration</h3></div></div></div>
<p>
      The as_logger module is a singleton and is configured through the
      <code class="filename">eccluster.conf</code> file with a stanza such as:
    </p>
<div class="example">
<a name="example.as_logger_3"></a><p class="title"><b>Example 71.9. as_logger Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
as_logger
{
  log_interval = 60
  base_dir = "/var/log/eccluster/aslogger"

  # We can log *everything* by default, and
  # then list exclusions that should not be logged.
  series_include_default = "all"
  series_exclude = ( "spam$" "^other" )

  #################################################
  # Alternatively, we can log *nothing* by default,
  # and specify only the series we want to log.
  # series_include_default = none
  # series_include = ( "^keep-" "^myseries$ )
  #################################################
}</pre></div>
</div>
<br class="example-break"><p>
      The following are configuration options valid in the as_logger
      scope:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          base_dir
        </span></dt>
<dd><p>
            Directory where the serialized files should be created.
          </p></dd>
<dt><span class="term">
          log_interval
        </span></dt>
<dd><p>
            Interval in seconds at which the replicated audit_series
            should be serialized to disk. At this interval, files will be created in the directory
            specified by <code class="option">base_dir</code>, named from the
            series name suffixed with a timestamp.
          </p></dd>
<dt><span class="term">
          series_exclude
        </span></dt>
<dd><p>
            List of regular expressions specifying series names that
            should be excluded from serialization. This option is only applicable when
            <code class="option">series_include_default</code> is set to
            <code class="option">all</code>. Remember to use regular expression
            syntax; e.g., "series" performs a substring match;
            "^myseries$" is an exact match, etc.
          </p></dd>
<dt><span class="term">
          series_include
        </span></dt>
<dd><p>
            List of regular expressions specifying series names which
            should be included in serialization. This option is only applicable when
            <code class="option">series_include_default</code> is set to
            <code class="option">none</code>. Remember to use regular expression
            syntax; e.g., "series" performs a substring match;
            "^myseries$" is an exact match, etc.
          </p></dd>
<dt><span class="term">
          series_include_default
        </span></dt>
<dd><p>
            Whether all series are serialized, or not, by default. Valid values are <code class="option">all</code> or
            <code class="option">none</code>. If left unspecified,
            <code class="option">none</code> is assumed.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="module.as_logger.cidr_maintain.conf"></a>71.7.2. <code class="filename">cidr_maintain.conf</code> File</h3></div></div></div>
<p>
      The files created by the as_logger module are maintained by the
      <span class="command"><strong>cidr_maintain</strong></span> command. This command is run from
      the cron job 
      <code class="filename">/etc/cron.d/msys-ecelerity-cidr-server</code>. The
      format of the entry is as follows:
    </p>
<div class="example">
<a name="example.as_logger.cidr_maintain_3"></a><p class="title"><b>Example 71.10. cidr_maintain crontab entry</b></p>
<div class="example-contents"><pre class="programlisting">
0 0 * * * /opt/msys/ecelerity/bin/cidr_maintain -c \
/opt/msys/ecelerity/etc/cidr_maintain.conf 2&gt;&amp;1 &gt; /dev/null
</pre></div>
</div>
<br class="example-break"><p>
      The <span class="command"><strong>cidr_maintain</strong></span> command is invoked with the
      <code class="option">-c</code> option which points to the configuration file.
      In this case, the configuration options used with the
      <span class="command"><strong>cidr_maintain</strong></span> command are found in the
      <code class="filename">/opt/msys/ecelerity/etc/cidr_maintain.conf</code>
      configuration file. Typical settings are shown below.
    </p>
<pre class="programlisting">
# Auto-Discover series cidr databases to maintain
# default is true
auto = true

# Manually list series to maintain, as an alternative to 'auto' mode
# series = rbl zombie

# retain 30 days of data (default)
retention = 30

# condense data one day or older (default)
condense = 0

# Where to look for cidr database files
# default is /var/log/eccluster/aslogger on a manager node,
# or /var/log/ecelerity/audit_series_logs standalone. Leave it unset
# to allow the system to look in the right spot automatically
basedir = "/var/log/eccluster/aslogger"
</pre>
<p>
      The <code class="literal">retention</code> setting determines when data is
      purged, <code class="literal">condense</code> turns file compression off and
      on, and <code class="literal">basedir</code> sets the base directory for log
      files.
    </p>
<p>
      The <code class="literal">auto</code> and <code class="literal">series</code> options
      are useful if you wish to apply different settings to different
      audit series. For example, you could create a file with the
      following settings:
    </p>
<pre class="programlisting">
auto = "false"
series = "rbl"
condense = 30
retention = 60
</pre>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.antivirus.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.auth_ds.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.6. antivirus – Antivirus </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.8. auth_ds – Datasource based SMTP Authentication</td>
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
