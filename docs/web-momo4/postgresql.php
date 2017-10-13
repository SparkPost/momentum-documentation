<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 29. PostgreSQL</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="prev" href="cluster.config.replication.php" title="Chapter 28. Data Replication">
<link rel="next" href="postgresql.server.php" title="29.2. Running the PostgreSQL Server">
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
<tr><th colspan="3" align="center">Chapter 29. PostgreSQL</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.config.replication.php">Prev</a> </td>
<th width="60%" align="center">Part III. Configuring Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="postgresql.server.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="postgresql"></a>Chapter 29. PostgreSQL</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="postgresql.php#postgresql.overview">29.1. PostgreSQL Overview</a></span></dt>
<dt><span class="section"><a href="postgresql.server.php">29.2. Running the PostgreSQL Server</a></span></dt>
<dt><span class="section"><a href="postgresql.client.php">29.3. Using the PostgreSQL Client Program</a></span></dt>
<dt><span class="section"><a href="postgresql.migrating.php">29.4. Dumping and Restoring the Database</a></span></dt>
</dl>
</div>
<a class="indexterm" name="idp3649776"></a><p>
    Momentum includes a PostgreSQL database used by the MTA application.
    There can be only one instance of this database. In a cluster
    configuration, it is installed on the Manager node.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="postgresql.overview"></a>29.1. PostgreSQL Overview</h2></div></div></div>
<p>
      The following describes the default directories and configuration
      related to the PostgreSQL database:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="filename">/var/db</code> – Root database directory for
          PostgreSQL
        </p></li>
<li class="listitem">
<p>
          <code class="filename">/var/db/msyspg</code> – Contains the
          <code class="filename">postgresql.conf</code> configuration file and
          the PID file
        </p>
<p>
          The logging options set in the configuration file are
          discussed in <a class="xref" href="postgresql.php#postgresql.log-files" title="PostgreSQL Log Files">the section called “PostgreSQL Log Files”</a>.
        </p>
<p>
          The msyspg database contains the real-time data collected by
          Momentum and, since this data is retained for two years,
          <span class="bold"><strong>be sure that there is adequate
          space on the drive that hosts the PostgreSQL
          server</strong></span>.
        </p>
</li>
<li class="listitem"><p>
          <code class="filename">/var/db/msyspg/pg_log</code> – Contains the
          PostgreSQL log files, as configured in
          <code class="filename">postgresql.conf</code>
        </p></li>
<li class="listitem">
<p>
          <code class="filename">/opt/msys/3rdParty/bin</code> – Contains the
          PostgreSQL client program <code class="literal">psql</code>
        </p>
<p>
          Other PostgreSQL programs such as <span class="command"><strong>pg_dump</strong></span>
          and <span class="command"><strong>pg_dumpall</strong></span> are also found in this
          directory.
        </p>
</li>
<li class="listitem"><p>
          <code class="filename">/opt/msys/3rdParty/etc/php.d</code> – Contains
          the <code class="filename">ecdb.ini</code> file, which includes the
          database credentials
        </p></li>
</ul></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        We expressly recommend <span class="bold"><strong>against</strong></span>
        using an NFS file system because of concerns about its
        performance in general and its reliability, especially on Linux.
      </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="postgresql.log-files"></a>PostgreSQL Log Files</h3></div></div></div>
<a class="indexterm" name="idp3882352"></a><p>
        The following settings in the
        <code class="filename">postgresql.conf</code> file determine the
        configuration for the PostgreSQL log files:
      </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
            log_directory
          </span></dt>
<dd>
<p>
              Location of the PostgreSQL log files
            </p>
<p>
              Default setting is the
              <code class="filename">/var/db/msyspg/pg_log</code> directory.
            </p>
</dd>
<dt><span class="term">
            log_filename
          </span></dt>
<dd>
<p>
              Format of the logging file name
            </p>
<p>
              At runtime, this is resolved as a four digit
              representation of the year and a two digit representation
              of the month, day, and minute. Default value is
              <code class="literal">postgresql-%Y-%m-%d-%M.log</code>.
            </p>
</dd>
<dt><span class="term">
            logging_collector
          </span></dt>
<dd>
<p>
              Controls log rotation
            </p>
<p>
              Default setting is <code class="literal">on</code>.
            </p>
</dd>
<dt><span class="term">
            log_rotation_size
          </span></dt>
<dd>
<p>
              Controls log rotation
            </p>
<p>
              Default setting is <code class="literal">100MB</code>. With the
              default settings, a new log file will be created after
              100MB have been written into a log file.
            </p>
</dd>
</dl></div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.config.replication.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.configuration.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="postgresql.server.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 28. Data Replication </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 29.2. Running the PostgreSQL Server</td>
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
