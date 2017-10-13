<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.20. commtouch_ctasd – Commtouch Spam Protection</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.cluster.php" title="71.19. cluster – Cluster">
<link rel="next" href="modules.compress_spool.php" title="71.21. compress_spool – Dynamic Spool Compression">
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
<tr><th colspan="3" align="center">71.20. commtouch_ctasd – Commtouch Spam Protection</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.cluster.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.compress_spool.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.commtouch"></a>71.20. commtouch_ctasd – Commtouch Spam Protection</h2></div></div></div>
<a class="indexterm" name="idp20662576"></a><p>
    The commtouch_ctasd module provides message diagnosis via the CYREN
    (formerly known as Commtouch) spam and phishing protection
    technology. If you intend to use this module be sure to choose it
    during installation. For more information, see
    <a class="xref" href="post_installation.php#install.additional.packages" title="12.1. Installing Partner Modules">Section 12.1, “Installing Partner Modules”</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.commtouch.configuration"></a>71.20.1. Configuration</h3></div></div></div>
<p>
      As with other Validation modules, the commtouch_ctasd module may
      be loaded in passive mode, which means that inbound messages will
      not be virus scanned unless you invoke a policy script. Modules
      are loaded passively by setting the <code class="option">enabled</code>
      option to <code class="literal">false</code>.
    </p>
<p>
      The following is an example configuration:
    </p>
<div class="example">
<a name="example.commtouch.3"></a><p class="title"><b>Example 71.35. commtouch_ctasd Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
commtouch_ctasd "commtouch_ctasd1" {
  concurrency = 10
  host = "127.0.0.1"
  port = 8088
}</pre></div>
</div>
<br class="example-break"><p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          concurrency
        </span></dt>
<dd><p>
            Default value is <code class="literal">10</code>, meaning that a
            maximum of 10 threads will be used. Assigning a value of
            <code class="literal">0</code> to this option means that no concurrent
            sessions will be used and no messages will be scanned.
          </p></dd>
<dt><span class="term">
          host
        </span></dt>
<dd><p>
            Domain name or IP address of the host. Default value is
            <code class="literal">127.0.0.1</code>.
          </p></dd>
<dt><span class="term">
          port
        </span></dt>
<dd><p>
            Port that the commtouch_ctasd module listens on. Default
            value is <code class="literal">8088</code>. This port is used
            internally by Momentum.
          </p></dd>
</dl></div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.commtouch.ctasd.conf"></a>71.20.1.1. <code class="filename">ctasd.conf</code> File</h4></div></div></div>
<p>
        For the commtouch_ctasd module to work with Momentum, you must
        also edit the <code class="filename">ctasd.conf</code> file. This file is
        found in the
        <code class="filename">/opt/msys/3rdParty/commtouch/etc/</code>
        directory.
      </p>
<p>
        In the connectivity section of the file, replace
        <em class="replaceable"><code>xxxxxxxxxxxxxxxxxxxx</code></em> (a combination
        of the license key and the resolver domain) with the values
        provided by Commtouch:

</p>
<pre class="programlisting">
[Connectivity]
License_key_code = <em class="replaceable"><code>xxxxxxxxxxxxxxxxxxxx</code></em>
Server_address = <em class="replaceable"><code>xxxxxxxxxxxxxxxxxxxx</code></em>
</pre>
<p>
      </p>
<p>
        Momentum communicates with Commtouch over the Internet using
        port <code class="literal">80</code>.
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.commtouch.context.variables"></a>71.20.2. Message Context Variables</h3></div></div></div>
<p>
      The commtouch_ctasd module sets the following message context
      variables:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          commtouch-class
        </span></dt>
<dd><p>
            Settings for this parameter are <code class="literal">unknown</code>,
            <code class="literal">suspect</code>, <code class="literal">bulk</code>,
            <code class="literal">confirmed</code>, and <code class="literal">none</code>.
            If this variable is set, a policy script should take
            appropriate action.
          </p></dd>
<dt><span class="term">
          commtouch-virus-threat
        </span></dt>
<dd><p>
            Settings for this parameter are <code class="literal">nonvirus</code>,
            <code class="literal">medium</code>, <code class="literal">high</code>, and
            <code class="literal">unknown</code>.
          </p></dd>
<dt><span class="term">
          commtouch-ref-id
        </span></dt>
<dd><p>
            <span class="emphasis"><em>Fingerprint</em></span> for the message that is
            useful when communicating with Commtouch
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.commtouch.lua.functions"></a>71.20.3. Lua Functions</h3></div></div></div>
<p>
      This module makes the Lua function
      <code class="function">msys.commtouch.diagnose</code> available. For a
      description of how this function is used, see
      <a class="xref" href="lua.ref.msys.commtouch.diagnose.php" title="msys.commtouch.diagnose"><span class="refentrytitle">msys.commtouch.diagnose</span></a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.commtouch.console"></a>71.20.4. Console Commands</h3></div></div></div>
<p>
      The commtouch_ctasd module can be controlled through the
      <code class="literal">ec_console</code>. The following command is available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          commtouch_ctasd:<em class="replaceable"><code>commtouch_ctasd1</code></em>
          pending
        </span></dt>
<dd><p>
            This command outputs the number of pending jobs.
          </p></dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.cluster.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.compress_spool.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.19. cluster – Cluster </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.21. compress_spool – Dynamic Spool Compression</td>
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
