<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>lu_pull</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="executable, command line, command, lu_pull">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="exec.cmds.ref.php" title="Chapter 74. Executable Commands Reference">
<link rel="prev" href="executable.jlogctl.php" title="jlogctl">
<link rel="next" href="executable.validate_config.php" title="validate_config">
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
<tr><th colspan="3" align="center">lu_pull</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="executable.jlogctl.php">Prev</a> </td>
<th width="60%" align="center">Chapter 74. Executable Commands Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="executable.validate_config.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="executable.lu_pull"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>lu_pull — update the Live Updates database</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --ad_update_only | -a
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --ad_updatesdir <em class="replaceable"><code>/path/to/updatesdir</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --feedback <em class="replaceable"><code>/path/to/feedback_dir</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --help
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --license <em class="replaceable"><code>/path/to/license</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --product <em class="replaceable"><code>productname</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --proxy <em class="replaceable"><code>proxy_url</code></em> --proxy_user <em class="replaceable"><code>username</code></em> --proxy_password <em class="replaceable"><code>password</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --updatesdir <em class="replaceable"><code>/path/to/updatesdir</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --url <em class="replaceable"><code>update_url</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/lu_pull</code>  [
        --version <em class="replaceable"><code>version_number</code></em>
      ]</p></div>
</div>
<div class="refsection">
<a name="idp12665088"></a><h2>Description</h2>
<p>
      The <span class="command"><strong>lu_pull</strong></span> command is used to update the Live
      Updates database either for bounce or adaptive rules.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          --ad_update_only
        </span></dt>
<dd><p>
            Update adaptive rules only.
          </p></dd>
<dt><span class="term">
          --ad_updatesdir <em class="replaceable"><code>/path/to/updatesdir</code></em>
        </span></dt>
<dd><p>
            Override the default adaptive rules location,
            <code class="filename">/opt/msys/ecelerity/etc/msys</code>.
          </p></dd>
<dt><span class="term">
          --feedback <em class="replaceable"><code>/path/to/feedback_dir</code></em>
        </span></dt>
<dd><p>
            The location of the bounce classification files. The default
            value for this option is
            <code class="filename">/opt/msys/ecelerity/etc/updates</code>.
          </p></dd>
<dt><span class="term">
          --help
        </span></dt>
<dd><p>
            Display the command options.
          </p></dd>
<dt><span class="term">
          --license <em class="replaceable"><code>/path/to/license</code></em>
        </span></dt>
<dd><p>
            The default value for this option is
            <code class="filename">/opt/msys/ecelerity/etc/license</code>. Use
            this option to overrride the default.
          </p></dd>
<dt><span class="term">
          --product <em class="replaceable"><code>productname</code></em>
        </span></dt>
<dd><p>
            Override the default productname. The default value for this
            option is <code class="literal">ecelerity</code>.
          </p></dd>
<dt><span class="term">
          --proxy <em class="replaceable"><code>proxy_url</code></em> --proxy_user
          <em class="replaceable"><code>username</code></em> --proxy_password
          <em class="replaceable"><code>password</code></em>
        </span></dt>
<dd><p>
            If you are using a proxy server to access updates use this
            option to specify the proxy server and your credentials. Use
            of a proxy server with live updates is discussed in
            <a class="link" href="https://support.messagesystems.com/docs/web-ad/ad.adaptive.automated.proxy.php" target="_top">Using
            a Proxy Server</a>.
          </p></dd>
<dt><span class="term">
          --url <em class="replaceable"><code>update_url</code></em>
        </span></dt>
<dd><p>
            Override the default update URL. The default for this option
            is <code class="literal">https://support.messagesystems.com</code>.
          </p></dd>
<dt><span class="term">
          --updatesdir <em class="replaceable"><code>/path/to/updatesdir</code></em>
        </span></dt>
<dd><p>
            Override the default update directory. The default value for
            this option is
            <code class="filename">/opt/msys/ecelerity/etc/updates</code>.
          </p></dd>
<dt><span class="term">
          --version <em class="replaceable"><code>version_number</code></em>
        </span></dt>
<dd><p>
            Override the product version of the installation. For
            example, if you would like to run lu_pull from a 3.2
            installation to pull down a 3.0 update, you can do that
            using this option. This is strictly for testing purpose. We
            do not support using it in production.
          </p></dd>
</dl></div>
</div>
<div class="refsection">
<a name="idp12695168"></a><h2>See Also</h2>
<p>
      <a class="xref" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">Section 71.3, “adaptive – Adaptive Delivery”</a>
      
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="executable.jlogctl.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="exec.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="executable.validate_config.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">jlogctl </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> validate_config</td>
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
