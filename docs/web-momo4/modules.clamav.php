<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.17. clamav – ClamAV</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.cidrdb.php" title="71.16. cidrdb – CIDRDB">
<link rel="next" href="modules.cloudmark.php" title="71.18. cloudmark – Cloudmark Authority® Content Scanning">
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
<tr><th colspan="3" align="center">71.17. clamav – ClamAV</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.cidrdb.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.cloudmark.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.clamav"></a>71.17. clamav – ClamAV</h2></div></div></div>
<a class="indexterm" name="idp20294160"></a><p>
    The clamav module is an open source antivirus engine that is part of
    the default Momentum installation.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp20296496"></a>71.17.1. Configuration</h3></div></div></div>
<p>
      The following is an example configuration:
    </p>
<div class="example">
<a name="example.clamav.3"></a><p class="title"><b>Example 71.28. clamav Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
clamav {}
antivirus "antivirus1" {
  clamav "clamav1" {
    daemon = "127.0.0.1:3310"
    timeout = "20"
    action = "pass"
    paranoid = false
    context_variable = "virus"
    skip_context_variable = "skip_virus_check"
    file_base = "/var/tmp"
  }
}</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
        In order to use this module, you must install ClamAV on your
        server and update it as needed or desired. Configure this module
        in the global scope <span class="bold"><strong>and</strong></span> also
        within the antivirus scope as shown in
        <a class="xref" href="modules.clamav.php#example.clamav.3" title="Example 71.28. clamav Configuration">Example 71.28, “clamav Configuration”</a>.
      </p>
<p>
        The clamav module is a singleton in the global scope but a
        non-singleton within the antivirus scope. In the global scope
        this module only supports the <code class="option">enabled</code> and
        <code class="option">debug_level</code> options.
      </p>
<p>
        For more information about Clam AV, see the
        <a class="link" href="http://www.clamav.net/lang/en/" target="_top">ClamAV</a> web
        page.
      </p>
</div>
<p>
      This module uses the configuration options common to all antivirus
      modules, plus the following plus the following clamav-specific
      options:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          daemon
        </span></dt>
<dd><p>
            The ClamAV engine connects to its external daemon over
            TCP/IP. This means the daemon may optionally be run on
            another machine. It runs in the IO pool by default.
          </p></dd>
</dl></div>
<p>
      For a list of the configuration options that this module shares
      with other antivirus modules, see
      <a class="xref" href="modules.antivirus.php#modules.antivirus.configuration" title="71.6.1. Configuration">Section 71.6.1, “Configuration”</a>. For the clamav
      module, the <code class="option">context_variable</code> option defaults to
      <code class="literal">clamav_status</code>.
    </p>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.clamav.runtime"></a>71.17.1.1. clamav Runtime Usage</h4></div></div></div>
<h5>
<a name="idp20313488"></a>Lua Functions</h5>
<p>
        This module supports the <span class="command"><strong>msys.av.scan</strong></span> and the
        <span class="command"><strong>msys.av.scan_part</strong></span> Lua functions.
      </p>
<p>
        These functions return four values:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
            The <span class="emphasis"><em>scan status</em></span>, which is one of the
            following values:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
                msys.av.EC_AV_PART_IS_CONTAINER – A container was
                passed to msys.av.scan.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_NAME_TOO_LONG –
                <code class="literal">av_engine_name</code> is longer than 40
                characters.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_NO_ENGINE – No AV engine is
                configured.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_NOT_SUITABLE_FOR_STREAMING – AV
                engine cannot scan the message that was passed in as a
                stream.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_ERROR – A runtime error occurred.
                This status is returned if the <span class="emphasis"><em>engine scan
                code</em></span> is either <code class="literal">OK</code> or
                <code class="literal">Empty file</code>, and the error text is
                returned in the <span class="emphasis"><em>informational
                string</em></span>.
              </p></li>
<li class="listitem">
<p>
                msys.av.EC_AV_CLEAN – The scan code is either
                <code class="literal">OK</code> or <code class="literal">Empty file</code>,
                and there is no runtime error.
              </p>
<p>
                This includes cases where a runtime error in the AV
                engine occurs.
              </p>
</li>
<li class="listitem"><p>
                msys.av.EC_AV_INFECTED – Message is classified as
                infected if the scan code is
                <span class="bold"><strong>not</strong></span>
                <code class="literal">OK</code> or <code class="literal">Empty file</code>.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_UNSCANNABLE – Message could not be
                scanned.
              </p></li>
</ul></div>
</li>
<li class="listitem"><p>
            An <span class="emphasis"><em>informational string</em></span>, which
            typically contains the virus name; the precise contents of
            this string depend on the engine.
          </p></li>
<li class="listitem"><p>
            The <span class="emphasis"><em>name of the AV engine</em></span> that detected
            the virus or <code class="literal">nil</code> if no virus was
            detected.
          </p></li>
<li class="listitem"><p>
            The <span class="emphasis"><em>engine scan code</em></span> or
            <code class="literal">nil</code> if no engine scan code is available.
            If the scan result is msys.av.EC_AV_CLEAN, this code will be
            either <code class="literal">OK</code> or <code class="literal">Empty
            file</code>.
          </p></li>
</ul></div>
<p>
        For additional details about these functions, see
        <a class="xref" href="lua.ref.msys.av.scan.php" title="msys.av.scan"><span class="refentrytitle">msys.av.scan</span></a> and
        <a class="xref" href="lua.ref.msys.av.scan_part.php" title="msys.av.scan_part"><span class="refentrytitle">msys.av.scan_part</span></a>.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.cidrdb.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.cloudmark.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.16. cidrdb – CIDRDB </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.18. cloudmark – Cloudmark Authority® Content Scanning</td>
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
