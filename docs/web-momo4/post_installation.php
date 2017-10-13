<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 12. Post-Installation</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.installing.php" title="Part II. Installing Momentum">
<link rel="prev" href="upgrade.two_tier.complete_setup_rolling.php" title="11.17. Complete the Software Set Up">
<link rel="next" href="install.post-install.config.php" title="12.2. Reviewing Configuration Files">
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
<tr><th colspan="3" align="center">Chapter 12. Post-Installation</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="upgrade.two_tier.complete_setup_rolling.php">Prev</a> </td>
<th width="60%" align="center">Part II. Installing Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="install.post-install.config.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="post_installation"></a>Chapter 12. Post-Installation</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="post_installation.php#install.additional.packages">12.1. Installing Partner Modules</a></span></dt>
<dt><span class="section"><a href="install.post-install.config.php">12.2. Reviewing Configuration Files</a></span></dt>
<dt><span class="section"><a href="install.post-install.rotate.php">12.3. Rotating Logfiles</a></span></dt>
<dt><span class="section"><a href="install.post-install.vertica_mgmt_console.php">12.4. Download and Install the Vertica Management Console</a></span></dt>
<dt><span class="section"><a href="install.vertica.license.php">12.5. Upgrading the Vertica License</a></span></dt>
<dt><span class="section"><a href="install.security_considerations.php">12.6. Security Considerations</a></span></dt>
</dl>
</div>
<p>
    After you install Momentum 4, you will need to perform some
    additional actions and consider some potential security issues in
    order to complete your installation.

    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <a class="xref" href="post_installation.php#install.additional.packages" title="12.1. Installing Partner Modules">Section 12.1, “Installing Partner Modules”</a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="install.post-install.config.php" title="12.2. Reviewing Configuration Files">Section 12.2, “Reviewing Configuration Files”</a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="install.post-install.rotate.php" title="12.3. Rotating Logfiles">Section 12.3, “Rotating Logfiles”</a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="install.vertica.license.php" title="12.5. Upgrading the Vertica License">Section 12.5, “Upgrading the Vertica License”</a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="install.security_considerations.php" title="12.6. Security Considerations">Section 12.6, “Security Considerations”</a>
        </p></li>
</ul></div>
<p>
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="install.additional.packages"></a>12.1. Installing Partner Modules</h2></div></div></div>
<p>
      See the specific module documentation for more information.
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          Policy Tools suite – This package contains tools for
          receivers and requires the pcap library. This gives you
          passive OS fingerprinting (p0f) and the url_ripper module,
          needed for SURBL. For more information, see
          <a class="xref" href="modules.url_ripper.php" title="71.73. url_ripper – URL Extraction">Section 71.73, “url_ripper – URL Extraction”</a> and
          <a class="xref" href="glossary.php#gloss-p0f" title="Passive operating system (OS) fingerprinting">Passive operating system (OS) fingerprinting</a>.
        </p></li>
<li class="listitem"><p>
          Commtouch content scanning – This package provides the CYREN
          (formerly known as Commtouch) spam protection technology. Only
          install this module if you have a license from CYREN. For more
          information, see <a class="xref" href="modules.commtouch.php" title="71.20. commtouch_ctasd – Commtouch Spam Protection">Section 71.20, “commtouch_ctasd – Commtouch Spam Protection”</a>.
        </p></li>
<li class="listitem"><p>
          Cloudmark Authority® content scanning – This package
          provides the Cloudmark spam technology. Only install this
          module if you have a license from Cloudmark. For more
          information, see <a class="xref" href="modules.cloudmark.php" title="71.18. cloudmark – Cloudmark Authority® Content Scanning">Section 71.18, “cloudmark – Cloudmark Authority® Content Scanning”</a>.
        </p></li>
<li class="listitem"><p>
          Eleven eXpurgate content scanning – This package provides
          the eXpurgate spam technology. For more information see
          <a class="xref" href="modules.eleven.php" title="71.31. eleven – Eleven eXpurgate Content Scanning">Section 71.31, “eleven – Eleven eXpurgate Content Scanning”</a>.
        </p></li>
<li class="listitem"><p>
          Symantec CSAPI antivirus support – This package provides
          integration of the Symantec content scanners. Only install
          this module if you have a license from Symantec. For more
          information, see <a class="xref" href="modules.csapi.php" title="71.23. csapi – Symantec CSAPI Antivirus Support">Section 71.23, “csapi – Symantec CSAPI Antivirus Support”</a>.
        </p></li>
<li class="listitem"><p>
          Symantec <span class="trademark">Brightmail</span>™ Engine Integration
          Kit – This package is an in-process version of the
          Brightmail module. Only install this module if you have a
          license from Symantec. For more information, see
          <a class="xref" href="modules.beik.php" title="71.10. beik – Symantec Brightmail™ Engine Integration Kit">Section 71.10, “beik – Symantec <span class="trademark">Brightmail</span>™ Engine
      Integration Kit”</a>.
        </p></li>
<li class="listitem"><p>
          Symantec <span class="trademark">Brightmail</span>™ content scanning
          support – This package checks inbound content against a
          Symantec Brightmail AntiSpam content server. Only install this
          module if you have a license from Symantec. For more
          information, see <a class="xref" href="modules.brightmail.php" title="71.14. brightmail – Symantec Brightmail™ Content Scanning Support">Section 71.14, “brightmail – Symantec <span class="trademark">Brightmail</span>™ Content
      Scanning Support”</a>.
        </p></li>
<li class="listitem"><p>
          Ecelerity Developer Tools – You only need to install these
          tools if you are compiling your own extensions on the machine
          on which it is installed. Files related to this package are
          found under the <code class="filename">/opt/msys/ecelerity</code>
          directory.
        </p></li>
</ul></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="upgrade.two_tier.complete_setup_rolling.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.installing.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="install.post-install.config.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">11.17. Complete the Software Set Up </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 12.2. Reviewing Configuration Files</td>
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
