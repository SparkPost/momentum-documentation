<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 31. Configuring the Environment File</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="prev" href="operations.riak.backups.php" title="30.4. Backups">
<link rel="next" href="p.logs.php" title="Part IV. Logging">
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
<tr><th colspan="3" align="center">Chapter 31. Configuring the Environment File</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="operations.riak.backups.php">Prev</a> </td>
<th width="60%" align="center">Part III. Configuring Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="p.logs.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="environment_file"></a>Chapter 31. Configuring the Environment File</h2></div></div></div>
<p>
    Environment variables should be set or adjusted on startup. If
    Momentum is started up using the <a class="xref" href="executable.ec_ctl.php" title="ec_ctl"><span class="refentrytitle">ec_ctl</span></a>
    script, any environment variables included in the
    <code class="filename">environment</code> file will be set.
  </p>
<p>
    Environment variables can be set in the
    <code class="filename">/opt/msys/ecelerity/etc/environment</code> file. The
    variables that can be set are as follows:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <code class="literal">BINDIR</code> – path to the Momentum
        <code class="filename">bin</code> directory, typically
        <code class="filename">/opt/msys/ecelerity/bin</code>
      </p></li>
<li class="listitem"><p>
        <code class="literal">CONFFILE</code> – path to the
        <code class="filename">ecelerity.conf</code> file to be used
      </p></li>
<li class="listitem">
<p>
        <code class="literal">CONTROL</code> – path to a Unix domain control
        listener endpoint
      </p>
<p>
        This parameter should match what you have configured for your
        Control_Listener in <code class="filename">ecelerity.conf</code>.
      </p>
</li>
<li class="listitem">
<p>
        <code class="literal">EC_CONF_SEARCH_PATH</code> – this value defines
        the search path used by
        <a class="link" href="conf.overview.php#conf.ecconfigd" title="15.1.3. Configuration Management (ecconfigd)"><span class="command"><strong>ecconfigd</strong></span></a>
        to determine the applicable configuration file
      </p>
<p>
        Add this variable to the environment file if you wish to change
        the search order.
      </p>
</li>
<li class="listitem"><p>
        <code class="literal">EC_DIGEST_REALM</code> – MD5 digest realm (see
        <a class="xref" href="executable.ec_md5passwd.php" title="ec_md5passwd"><span class="refentrytitle">ec_md5passwd</span></a>.)
      </p></li>
<li class="listitem">
<p>
        <code class="literal">ECELERITY_DNS_BACKEND</code> – the variable for
        setting the DNS resolver.
      </p>
<p>
        The unbound resolver is a modern DNS resolver that is replacing
        Momentum’s older internal ARES resolver. The unbound resolver
        will provide more features, more efficient code, and smoother
        integration with Momentum.
      </p>
<p>
        The unbound server is turned off by default, but can be enabled
        by entering the following lines into
        <code class="literal">/opt/msys/ecelerity/etc/environment</code>:
      </p>
<pre class="programlisting">
ECELERITY_DNS_BACKEND='unbound' 
export ECELERITY_DNS_BACKEND
</pre>
<p>
        To confirm the resolver's status, look for the following line in
        the summary command:
      </p>
<pre class="programlisting">
DNS Resolver: unbound
</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
          The only other valid value is <code class="literal">ares</code>.
        </p>
</div>
</li>
<li class="listitem"><p>
        <code class="literal">ECELERITY_MEMORY</code> – to use pipe_io on Linux,
        this variable must be set to <code class="literal">NOREPLACE</code>
      </p></li>
<li class="listitem"><p>
        <code class="literal">EXTRA_ARGS</code> – additional parameters to pass
        to Momentum
      </p></li>
<li class="listitem"><p>
        <code class="literal">HTTPS_PROXY_PASSWORD</code> – for use with
        Adaptive Delivery (see
        <a class="link" href="https://support.messagesystems.com/docs/web-ad/ad.adaptive.automated.proxy.php" target="_top">Using
        a Proxy Server</a>.)
      </p></li>
<li class="listitem"><p>
        <code class="literal">HTTPS_PROXY_USERNAME</code> – for use with
        Adaptive Delivery (see
        <a class="link" href="https://support.messagesystems.com/docs/web-ad/ad.adaptive.automated.proxy.php" target="_top">Using
        a Proxy Server</a>.)
      </p></li>
<li class="listitem">
<p>
        <code class="literal">LD_LIBRARY_PATH</code> – in case the ld path needs
        to be augmented
      </p>
<p>
        This mechanism is used for module specific adjustments to the
        environment.
      </p>
</li>
<li class="listitem"><p>
        <code class="literal">PLAT</code> – platform name
      </p></li>
<li class="listitem">
<p>
        <code class="literal">TMPDIR</code> – specify a temporary directory
      </p>
<p>
        Ecelerity creates an executable file in TMPDIR (a file used by
        the Lua Timed Events support). If you do not set TMPDIR, it
        defaults to <code class="filename">/tmp</code>. If, as a security
        measure, you mount <code class="filename">/tmp</code> with the
        <code class="option">noexec</code> option and you also want to use Lua
        Timed Events, you need to set TMPDIR to a directory that permits
        executable scripts.
      </p>
</li>
<li class="listitem">
<p>
        <code class="literal">TRY</code> – number of times to loop waiting for
        Momentum to start up
      </p>
<p>
        For examples of usage, see
        <a class="xref" href="executable.ec_ctl.php" title="ec_ctl"><span class="refentrytitle">ec_ctl</span></a> and
        <a class="xref" href="executable.ecconfigd_ctl.php" title="ecconfigd_ctl"><span class="refentrytitle">ecconfigd_ctl</span></a>.
      </p>
</li>
</ul></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
      The <code class="literal">GIMLI_WATCHDOG_INTERVAL</code>,
      <code class="literal">GIMLI_WATCHDOG_START_INTERVAL</code>, and
      <code class="literal">GIMLI_WATCHDOG_STOP_INTERVAL</code> variables set the
      interval for restarting Momentum when it has been unresponsive.
      For more details execute <strong class="userinput"><code>man -M /opt/msys/gimli/man
      monitor</code></strong>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="operations.riak.backups.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.configuration.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="p.logs.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">30.4. Backups </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Part IV. Logging</td>
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
