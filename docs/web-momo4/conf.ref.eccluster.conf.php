<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>16.2. eccluster.conf File</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="cluster.php" title="Chapter 16. Cluster-specific Configuration">
<link rel="prev" href="cluster.php" title="Chapter 16. Cluster-specific Configuration">
<link rel="next" href="conf.ref.ecelerity_cluster.conf.php" title="16.3. ecelerity-cluster.conf File">
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
<tr><th colspan="3" align="center">16.2. <code class="filename">eccluster.conf</code> File</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.php">Prev</a> </td>
<th width="60%" align="center">Chapter 16. Cluster-specific Configuration</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.ecelerity_cluster.conf.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="conf.ref.eccluster.conf"></a>16.2. <code class="filename">eccluster.conf</code> File</h2></div></div></div>
<p>
    The <code class="filename">eccluster.conf</code> file configures the behavior
    of the Momentum Cluster Manager <a class="xref" href="executable.eccmgr.php" title="eccmgr"><span class="refentrytitle">eccmgr</span></a>.
    Note that it does not configure the behavior of cluster nodes. This
    file is found in the
    <code class="filename">/opt/msys/ecelerity/etc/conf/default/</code>
    directory.
  </p>
<p>
    The following is an example <code class="filename">eccluster.conf</code>
    file:
  </p>
<div class="example">
<a name="conf.ref.eccluster.conf.example"></a><p class="title"><b>Example 16.1. eccluster.conf file</b></p>
<div class="example-contents"><pre class="programlisting">
# Security stanza 
Security {
  user = "ecuser"
  group = "ecuser"
}

# Logs stanza
Logs {
  logfile = "/var/log/eccluster/%Y/%m/%d/%{l}/%{s}/%{n}"
  file_mode = "0640"
  dir_mode = "0755"
}

# Control_Listener stanza
Control_Listener {
  AuthDigestMD5Parameters = [
    uri = "ecauth://"
  ]
  Enable_Authentication = "true"

  Enable_Authorization = "false"
  AuthorizationParameters = [
    uri = "ecauth://"
  ]

  Listen "/tmp/2025" {
    Enable_Authentication = "false"
  }
  Listen "127.0.0.1:2025" {
  }
}

# Cluster Manager event logging
# troubleshoot the eccmgr instance by looking for its logs
# in /var/log/eccluster/paniclog.ec
ec_logger "ec_logger"
{
  rejectlog = "/var/log/eccluster/rejectlog.ec"
  mainlog = "/var/log/eccluster/mainlog.ec"
  heartbeat = "0"
  paniclog = "/var/log/eccluster/paniclog.ec"
#  acctlog = "/var/log/eccluster/acctlog.ec"
}

# Include auxillary information prepared by the installer; this must be the
# last thing in the top level eccluster.conf file
readonly_include "/opt/msys/etc/installer/eccmgr.d/ecdb.conf"
</pre></div>
</div>
<br class="example-break"><p>
    Using the console from the cluster manager, you can view the
    contents of the <code class="filename">eccluster.conf</code> file. For
    instance, if your configuration matches the example above, the
    output of <span class="command"><strong>config show Logs</strong></span> is as follows:

</p>
<pre class="screen">
/tmp/2025&gt; config show Logs
dir_mode = "0755"
logfile = "/var/log/eccluster/%Y/%m/%d/%{l}/%{s}/%{n}"
file_mode = "0640"
</pre>
<p>

    Since the <code class="filename">eccluster.conf</code> file is specific to
    the cluster manager, you cannot view the <code class="literal">Logs</code>
    scope from the console on a cluster node.
  </p>
<p>
    For a discussion of scopes and fallbacks, see
    <a class="xref" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">Section 15.3, “Configuration Scopes and Fallback”</a>.
  </p>
<p>
    For a summary of all the non-module specific configuration options,
    refer to <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
  </p>
<p>
    Modules and their configuration options are discussed in the
    <a class="xref" href="modules.php" title="Chapter 71. Modules Reference">Chapter 71, <i>Modules Reference</i></a>.
  </p>
<p>
    The following sections provide an overview of the configuration
    commonly defined in the <code class="filename">eccluster.conf</code> file.
  </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
        Security
      </span></dt>
<dd><p>
          For a discussion of the <code class="option">Security</code> stanza
          options, see <a class="xref" href="conf.ref.security.php" title="security"><span class="refentrytitle">security</span></a>.
        </p></dd>
<dt><span class="term">
        Control_Listener
      </span></dt>
<dd><p>
          The <code class="option">Control_Listener</code> stanza, specifies the
          port on which <code class="filename">eccmgr</code> listens. On Unix
          systems, <code class="filename">eccmgr</code> listens at
          <code class="literal">/tmp/2025</code> by default. For a discussion of
          the Control_Listener, see <a class="xref" href="control_listener.php" title="Chapter 17. Configuring Momentum's System Console">Chapter 17, <i>Configuring Momentum's System Console</i></a>.
        </p></dd>
<dt><span class="term">
        Cluster Manager Event Logging
      </span></dt>
<dd>
<p>
          For a discussion of using the ec_logger module on the cluster
          manager, see <a class="xref" href="modules.ec_logger.php#modules.ec_logger.eccmgr" title="71.30.3. Configuration for the Cluster Manager">Section 71.30.3, “Configuration for the Cluster Manager”</a>.
        </p>
<p>
          For a discussion of using the bounce_logger module on the
          cluster manager, see
          <a class="xref" href="modules.bounce_logger.php#modules.bounce_logger.eccmgr" title="71.13.3. Configuration for the Cluster Manager">Section 71.13.3, “Configuration for the Cluster Manager”</a>.
        </p>
</dd>
<dt>
<a name="conf.ref.eccluster.conf.logs"></a><span class="term">
        Log Aggregation
      </span>
</dt>
<dd>
<p>
          The <code class="option">Logs</code> scope must be configured in order to
          aggregate node logs on the log aggregator. The following is
          the default configuration in the
          <code class="filename">eccluster.conf</code> file:
        </p>
<div class="example">
<a name="conf.ref.eccluster.conf.logs.stanza"></a><p class="title"><b>Example 16.2. Logs Stanza</b></p>
<div class="example-contents"><pre class="programlisting">
Logs {
  logfile = "/var/log/eccluster/%Y/%m/%d/%{l}/%{s}/%{n}"
  file_mode = "0640"
  dir_mode = "0755"
}
</pre></div>
</div>
<br class="example-break"><p>
          The following options are valid in the <code class="option">Logs</code>
          scope.
        </p>
<div class="variablelist"><dl class="variablelist">
<dt>
<a name="eccluster.conf.logs.control_cache"></a><span class="term">
              Control_Cache
            </span>
</dt>
<dd><p>
                Name of the cache file storing asynchronous responses to
                clusterwide Momentum inquiries
              </p></dd>
<dt>
<a name="eccluster.conf.logs.dir_mode"></a><span class="term">
              Dir_Mode
            </span>
</dt>
<dd><p>
                Octal representation of the file permissions of newly
                created log directories
              </p></dd>
<dt>
<a name="eccluster.conf.logs.file_mode"></a><span class="term">
              File_Mode
            </span>
</dt>
<dd><p>
                Octal representation of the file permissions of newly
                created log files
              </p></dd>
<dt>
<a name="eccluster.conf.logs.logfile"></a><span class="term">
              Logfile
            </span>
</dt>
<dd>
<p>
                Defines the full pathname of the log file to be written.
              </p>
<p>
                As <code class="filename">eccmgr</code> is capable of writing log
                files into several distinct locations, a simple
                interpolation set is provided. All of the POSIX strftime
                macros are supported (see the POSIX strftime standard),
                as well as two special interpolations. %{n} will
                interpolate to the name of the cluster node that
                generated the log line in question. %{l} will
                interpolate to the name of the log as named in the logs
                section of the cluster configuration in the
                <code class="filename">ecelerity.conf</code>. For more
                information about the POSIX strftime macros, see
                <a class="link" href="http://www.opengroup.org/onlinepubs/009695399/functions/strftime.html" target="_top">
                strftime</a>.
              </p>
<p>
                There is no restriction on the value assigned to this
                option as long as it creates a valid path after all the
                macros get expanded; it does not have to exist
                beforehand, <code class="filename">eccmgr</code> will create
                directories as needed, hence the
                <code class="option">Dir_Mode</code>.
              </p>
</dd>
<dt>
<a name="eccluster.conf.logs.max_idle"></a><span class="term">
              Max_Idle
            </span>
</dt>
<dd><p>
                Maximum number of seconds a log file may be left open
                without writing a new log entry to it
              </p></dd>
<dt>
<a name="eccluster.conf.logs.max_open"></a><span class="term">
              Max_Open
            </span>
</dt>
<dd><p>
                Maximum number of concurrently open log files
              </p></dd>
</dl></div>
<p>
          The example configuration,
          <a class="xref" href="conf.ref.eccluster.conf.php#conf.ref.eccluster.conf.logs.stanza" title="Example 16.2. Logs Stanza">Example 16.2, “Logs Stanza”</a>, creates
          logs under <code class="filename">/var/log/eccluster</code> according
          to the <code class="option">logfile</code> setting. This is processed by
          <code class="function">strftime</code> expanding the macros as follows:
        </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
              %Y
            </span></dt>
<dd><p>
                Four digit representation of the year
              </p></dd>
<dt><span class="term">
              %m
            </span></dt>
<dd><p>
                Two digit representation of the month
              </p></dd>
<dt><span class="term">
              %d
            </span></dt>
<dd><p>
                Two digit representation of the day of the month
              </p></dd>
</dl></div>
<p>
          Additional special place holders are as follows:
        </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
              %{l}
            </span></dt>
<dd><p>
                Expands to the name of the log specified as the key in
                the <code class="option">logs</code> dictionary configured within
                the cluster scope of the
                <code class="filename">ecelerity-cluster.conf</code> file. See
                <a class="xref" href="modules.cluster.php#option.logs.dictionary">
          logs
        </a>
              </p></dd>
<dt><span class="term">
              %{n}
            </span></dt>
<dd><p>
                Expands to the name of the node
              </p></dd>
<dt><span class="term">
              %{s}
            </span></dt>
<dd><p>
                Expands to the name of the subcluster to which the node
                belongs
              </p></dd>
</dl></div>
<p>
          For example, the mainlog, being pulled from
          <code class="literal">node1</code>, where <code class="literal">node1</code> is a
          member of the subcluster named <code class="literal">mycluster</code>,
          the data would be logged to:
          <code class="filename">/var/log/eccluster<em class="replaceable"><code>/year/month/day/</code></em>mainlog/mycluster/node1</code>.
        </p>
<p>
          In addition to the place holders shown above, all of the POSIX
          <code class="function">strftime</code> macros are supported. For more
          information, see
          <a class="link" href="http://www.opengroup.org/onlinepubs/009695399/functions/strftime.html" target="_top">strftime</a>.
        </p>
<p>
          There are no requirements regarding the structure of the
          filenames, nor is there any expectation that you have
          configured centralized logging, so you are free to adjust the
          <code class="option">logfile</code> parameter to suit your needs as long
          as <code class="option">logfile</code> defines a valid path after all the
          macros get expanded. The path does not have to exist
          beforehand, <code class="filename">eccmgr</code> will create
          directories as needed.
        </p>
</dd>
<dt><span class="term">
        Included Files
      </span></dt>
<dd><p>
          The
          <code class="filename">/opt/msys/etc/installer/eccmgr.d/ecdb.conf</code>
          file contains the definition of the <code class="literal">ecdb</code>
          datasource file.
        </p></dd>
<dt><span class="term">
        as_logger Module
      </span></dt>
<dd><p>
          The <a class="link" href="modules.as_logger.php" title="71.7. as_logger – Audit Series Logger">as_logger</a> module
          is specific to the cluster manager. It must be manually added
          to the <code class="filename">eccluster.conf</code> file, if needed.
        </p></dd>
</dl></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="cluster.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.ecelerity_cluster.conf.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 16. Cluster-specific Configuration </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 16.3. <code class="filename">ecelerity-cluster.conf</code> File</td>
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
