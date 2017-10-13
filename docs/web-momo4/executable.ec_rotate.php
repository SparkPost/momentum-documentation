<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ec_rotate</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="executable, command line, command, ec_rotate">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="exec.cmds.ref.php" title="Chapter 74. Executable Commands Reference">
<link rel="prev" href="executable.ec_md5passwd.php" title="ec_md5passwd">
<link rel="next" href="executable.ec_sendmail.php" title="ec_sendmail">
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
<tr><th colspan="3" align="center">ec_rotate</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="executable.ec_md5passwd.php">Prev</a> </td>
<th width="60%" align="center">Chapter 74. Executable Commands Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="executable.ec_sendmail.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="executable.ec_rotate"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>ec_rotate — rotate Momentum logfiles</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -c | -compress
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -conf <em class="replaceable"><code>/path/to/config_file</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -d | -default
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -l | -logfile <em class="replaceable"><code>/path/to/logfile</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -logdir <em class="replaceable"><code>/path/to/dir</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -n | -nocompress
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -r | -retention <em class="replaceable"><code>number</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -s | -socket <em class="replaceable"><code>/path/to/socket</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_rotate</code>  [
        -v
      ]</p></div>
</div>
<div class="refsection">
<a name="idp13384112"></a><h2>Description</h2>
<p>
      The <span class="command"><strong>ec_rotate</strong></span> command is a utility script used
      to rotate and compress logs that Momentum writes.
    </p>
<p>
      Momentum opens its logfiles at startup and maintains an open
      filehandle to them throughout its life cycle. When you invoke
      <span class="command"><strong>ec_rotate</strong></span>, the <code class="filename">mainlog.ec</code>
      file is moved to <code class="filename">mainlog.ec.1</code>, Momentum is
      instructed to re-open its logfiles, and a new
      <code class="filename">mainlog.ec</code> file is created. Any other
      logfiles configured for rotation are treated in the same way. Unix
      file I/O semantics guarantee that no log lines will be lost
      between the time the file is moved and the logs are re-opened;
      they will simply appear in the older of the logs. To avoid the
      overhead of checking the logfile on every attempt, Momentum relies
      on the user to tell it when the logfile needs to be re-opened.
    </p>
<p>
      The <code class="filename">ec_rotate.conf</code> file specifies the
      configuration for this command. By default,
      <span class="command"><strong>ec_rotate</strong></span> controls log file rotation for the
      following files, compresses these files using
      <code class="filename">bzip</code>, and keeps seven days of logs on disk:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/mainlog.ec</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/paniclog.ec</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/rejectlog.ec</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/bouncelog.ec</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/acctlog.ec</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/smpplog.ec</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/ecconfigd.log</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/httplog.ec</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/ecconfigd/apache/access.log</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/ecconfigd/apache/error.log</code>
        </p></li>
<li class="listitem"><p>
          <code class="filename">/var/log/ecelerity/adaptive</code>
        </p></li>
</ul></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
        The <span class="command"><strong>ec_rotate</strong></span> script is hardcoded to rotate
        the files named above. You only need to change the default
        <code class="filename">ec_rotate.conf</code> file if you wish to change
        the location of these files, if you wish to rotate additional
        files, or if you wish to change the retention period. See
        <a class="xref" href="log_rotating.php#conf.ref.ec_rotate.conf.default" title="Example 34.1. ec_rotate.conf">Example 34.1, “ec_rotate.conf”</a>.
      </p>
</div>
<p></p>
<p>
      The following options change the behavor of the
      <span class="command"><strong>ec_rotate</strong></span> command:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          -c, -compress <em class="replaceable"><code>/path/to/utility</code></em>
        </span></dt>
<dd><p>
            Specify the full path to the compression utility to use for
            compressing logfiles. Default is
            <code class="filename">/usr/bin/bzip2</code>, but
            <code class="filename">/usr/bin/gzip</code> can also be used.
          </p></dd>
<dt><span class="term">
          -conf <em class="replaceable"><code>/path/to/file</code></em>
        </span></dt>
<dd><p>
            Specify a configuration file for
            <span class="command"><strong>ec_rotate</strong></span> to use. Default is
            <code class="filename">ec_rotate.conf</code>.
          </p></dd>
<dt><span class="term">
          -d, -default
        </span></dt>
<dd><p>
            If this option is specified, the script will first try to
            find the configuration file at
            <code class="filename">/opt/msys/ecelerity/etc/ec_rotate.conf</code>.
            If this file exists, it will use it as the configuration
            file. This option has the same effects as <code class="option">-conf
            /opt/msys/ecelerity/etc/ec_rotate.conf</code>. Otherwise,
            files at their default locations will be rotated. For more
            information about the <code class="filename">ec_rotate.conf</code>
            file see
            <a class="xref" href="log_rotating.php#conf.ref.ec_rotate.conf" title="34.1. ec_rotate.conf File">Section 34.1, “<code class="filename">ec_rotate.conf</code> File”</a>.
          </p></dd>
<dt><span class="term">
          -l, -logfile <em class="replaceable"><code>/path/to/file</code></em>
        </span></dt>
<dd><p>
            Specify the logfile(s) to be rotated. May be specified
            multiple times to handle multiple logs. Logs generated by
            any of the Momentum's logging modules can be specified for
            rotation using this option.
          </p></dd>
<dt><span class="term">
          -logdir <em class="replaceable"><code>/path/to/dir</code></em>
        </span></dt>
<dd><p>
            Specify the log directories to be searched and rotate files
            with the suffix <code class="literal">.log</code>. Like the
            <code class="literal">logfile</code> option, this option may be
            specified multiple times to handle multiple directories.
          </p></dd>
<dt><span class="term">
          -n, -nocompress
        </span></dt>
<dd><p>
            Do not compress files while rotating.
          </p></dd>
<dt><span class="term">
          -r, -retention <em class="replaceable"><code>number</code></em>
        </span></dt>
<dd><p>
            Specify the maximum number of logs to keep on disk. Default
            is <code class="literal">7</code>.
          </p></dd>
<dt><span class="term">
          -s, -socket <em class="replaceable"><code>/path/to/socket</code></em>
        </span></dt>
<dd><p>
            Specify path to the Control_Listener socket.
          </p></dd>
</dl></div>
<p>
      The following is an example in which the logfiles are in
      <code class="literal">/var/log/email/</code> and 3 days are kept:
    </p>
<div class="example">
<a name="executable.ec_rotate.example"></a><p class="title"><b>Example 74.2. <span class="command">ec_rotate</span> Command</b></p>
<div class="example-contents"><pre class="screen">
/opt/msys/ecelerity/bin/ec_rotate -l /var/log/email/mainlog.ec \
  -l /var/log/email/paniclog.ec -r 3
</pre></div>
</div>
<br class="example-break">
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="executable.ec_md5passwd.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="exec.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="executable.ec_sendmail.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">ec_md5passwd </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> ec_sendmail</td>
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
