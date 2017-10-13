<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ec_config_rsrc_get</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="hooks.php" title="Chapter 69. Hook Points and C Functions Reference">
<link rel="prev" href="hooks.config_rsrc_setup.php" title="config_rsrc_setup">
<link rel="next" href="apis.ec_httpsrv_register_auth.php" title="ec_httpsrv_register_auth">
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
<tr><th colspan="3" align="center">ec_config_rsrc_get</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="hooks.config_rsrc_setup.php">Prev</a> </td>
<th width="60%" align="center">Chapter 69. Hook Points and C Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="apis.ec_httpsrv_register_auth.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="apis.ec_config_rsrc_get"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>ec_config_rsrc_get — Return a resource list blobject from the configuration system</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="funcsynopsis">
<pre class="funcsynopsisinfo">#include "configuration.h" 

      </pre>
<table border="0" class="funcprototype-table" summary="Function synopsis" style="cellspacing: 0; cellpadding: 0;">
<tr>
<td><code class="funcdef">
          ec_blobject * <b class="fsfunc">ec_config_rsrc_get</b>
        (</code></td>
<td>
<var class="pdparam">id</var>, </td>
<td> </td>
</tr>
<tr>
<td> </td>
<td>
<var class="pdparam">registering</var><code>)</code>;</td>
<td> </td>
</tr>
</table>
<div class="paramdef-list">
<code>ec_atomic_t <var class="pdparam">id</var></code>;<br><code>int <var class="pdparam">registering</var></code>;</div>
<div class="funcprototype-spacer"> </div>
</div>
</div>
<div class="refsect1">
<a name="idp8663440"></a><h2>Description</h2>
<p>
      This function returns a resource list blobject from the
      configuration system.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        When you are finished with the returned object, you must call
        <a class="link" href="https://support.messagesystems.com/docs/web-c-api/apis.ec_blobject_delref.php" target="_top">ec_blobject_delref</a>
        to dispose of it.
      </p>
</div>
<p>
      When the <code class="literal">registering</code> parameter is
      <code class="constant">EC_CFG_RSRC_REGISTERING</code>, the configuration
      system will return the resource list from the
      currently-being-assembled configuration transaction. If the
      resource list does not exist in the currently-being-assembled
      transaction, then it will be created.
    </p>
<p>
      When the <code class="literal">registering</code> parameter is
      <code class="constant">EC_CFG_RSRC_CONSUMING</code>, the configuration
      system will return the resource list from the currently active
      configuration transaction. If the resource list does not exist in
      the active transaction, NULL will be returned.
    </p>
<p>
      The configuration system semantics are such that there will be a
      new instance of the resource list for each new configuration
      generation. That means that modules that register resources
      against this list will need to ensure that they register them
      explicitly from their ext_init module function each time it is
      invoked with <code class="constant">EC_MODULE_INIT_INIT</code>.
    </p>
<p></p>
<h4>
<a name="idp7798672"></a>Parameters</h4>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          id
        </span></dt>
<dd><p>
            Resource list identifier returned by
            <code class="function">ec_config_rsrc_create</code>


          </p></dd>
<dt><span class="term">
          registering
        </span></dt>
<dd>
<p>
            Constant that indicates either a read or a write operation.
          </p>
<p>
            It can be one of the following values:
          </p>
<pre class="programlisting">
/** Indicates that the caller is consuming the existing, committed resource */
#define EC_CFG_RSRC_CONSUMING   0
/** Indicates that the caller is modifying the pending resource */
#define EC_CFG_RSRC_REGISTERING 1
</pre>
</dd>
</dl></div>
<h4>
<a name="idp7805328"></a>Return Values</h4>
<p>
      This function returns a
      <a class="link" href="https://support.messagesystems.com/docs/web-c-api/structs.ec_blobject.php" target="_top">ec_blobject</a>
      or <code class="literal">NULL</code>.
    </p>
<h4>
<a name="idp7807376"></a>Threading</h4>
<p>


      This hook can be called in any thread.
    </p>
</div>
<div class="refsect1">
<a name="idp7808848"></a><h2>See Also</h2>
<p>
      <a class="xref" href="hooks.config_rsrc_setup.php" title="config_rsrc_setup"><span class="refentrytitle">config_rsrc_setup</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="hooks.config_rsrc_setup.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="hooks.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="apis.ec_httpsrv_register_auth.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">config_rsrc_setup </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> ec_httpsrv_register_auth</td>
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
