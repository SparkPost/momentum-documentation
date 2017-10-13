<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.60. scriptlet - Lua Policy Scripts</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.sched.php" title="71.59. sched – The Schedule Module">
<link rel="next" href="modules.securecreds.php" title="71.61. securecreds – Password Encryption/Credential Retrieval">
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
<tr><th colspan="3" align="center">71.60. scriptlet - Lua Policy Scripts</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.sched.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.securecreds.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.scriptlet"></a>71.60. scriptlet - Lua Policy Scripts</h2></div></div></div>
<a class="indexterm" name="idp22828096"></a><p>
    The scriptlet module enables the use of
    <a class="link" href="http://www.lua.org/" target="_top">Lua</a> scripts to
    enforce policy. For details about policy, see
    <a class="xref" href="policy.php" title="Chapter 62. Implementing Policy with Momentum">Chapter 62, <i>Implementing Policy with Momentum</i></a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.scriptlet.configuration"></a>71.60.1. Configuration</h3></div></div></div>
<p>
      To use the scriptlet module, the
      <a class="link" href="modules.alerting.php" title="71.4. alerting – Send Alerting Emails">alerting</a> module must be
      loaded, as shown in the following example:
    </p>
<div class="example">
<a name="modules.scriptlet.code"></a><p class="title"><b>Example 71.84. scriptlet Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
alerting {}

scriptlet "scriptlet" {
  script_ttl = 300
  script "boot" {
    source = "msys.boot"
  }
}
</pre></div>
</div>
<br class="example-break"><p>
      The scriptlet module is not a singleton; however, only one named
      instance of the scriptlet module may appear in a configuration at
      a given time. For example, this configuration is valid (each
      instance name is identical; i.e., "scriptlet"):
    </p>
<pre class="programlisting">
scriptlet "scriptlet" {
 &lt;options&gt;
}

scriptlet "scriptlet" {
 &lt;options&gt;
}
</pre>
<p>
      Whereas this configuration is invalid (each instance name is
      different; i.e., "scriptlet" and "other_name"):
    </p>
<pre class="programlisting">
scriptlet "scriptlet" {
 &lt;options&gt;
}

scriptlet "other_name" {
 &lt;options&gt;
}
</pre>
<p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          always_gc
        </span></dt>
<dd><p>
            Whether or not to always garbage collect. Default value is
            <code class="literal">false</code>. With the introduction of threaded
            Lua, this option is redundant.
          </p></dd>
<dt><span class="term">
          gc_pause
        </span></dt>
<dd><p>
            Default value is <code class="literal">200</code>. For more
            information about this option, see the section on "Garbage
            Collection" at
            <a class="link" href="http://www.lua.org/manual/5.1/manual.html" target="_top">http://www.lua.org/manual/5.1/manual.html</a>.
          </p></dd>
<dt><span class="term">
          gc_stepmul
        </span></dt>
<dd><p>
            Default value is <code class="literal">200</code>. For more
            information about this option, see the section on "Garbage
            Collection" at
            <a class="link" href="http://www.lua.org/manual/5.1/manual.html" target="_top">http://www.lua.org/manual/5.1/manual.html</a>.
          </p></dd>
<dt><span class="term">
          max_spare_per_master
        </span></dt>
<dd><p>
            Default value is <code class="literal">5000</code>. 
          </p></dd>
<dt><span class="term">
          reap_interval
        </span></dt>
<dd><p>
            Controls how often to expire spares from the spare thread
            cache. Default value is <code class="literal">1</code>. This is not
            likely to need changing.
          </p></dd>
<dt><span class="term">
          script
        </span></dt>
<dd>
<p>
            In the code example
            <a class="xref" href="modules.scriptlet.php#modules.scriptlet.code" title="Example 71.84. scriptlet Configuration">Example 71.84, “scriptlet Configuration”</a>, "boot" is the name
            of the module that is provided by the script. The boot
            module is located in the
            <code class="filename">/opt/msys/ecelerity/libexec/scriptlets/msys</code>
            directory. It provides core product features so should
            always be loaded.
          </p>
<p>
            Any number of script stanzas may appear within the scriptlet
            module. The script stanza has only one option,
            <code class="option">source</code>, which identifies the location of
            the Lua policy script.
          </p>
<p>
            There is a direct correlation between the name of the script
            stanza and the module it exports. If you are creating your
            own scripts, the script scope name and the name that a
            script is registered as must be the same. For detailed
            information about creating user-defined scripts, see
            <a class="xref" href="implementing.policy.scriptlets.php#policy.best.practices" title="62.2.4. Creating Policy Scripts">Section 62.2.4, “Creating Policy Scripts”</a>.
          </p>
<p>
            For a complete list of all available Lua functions, see
            <a class="xref" href="lua.summary_table.php" title="Chapter 64. Lua Functions Summary">Chapter 64, <i>Lua Functions Summary</i></a>.
          </p>
</dd>
<dt><span class="term">
          script_ttl
        </span></dt>
<dd><p>
            Duration that the script is cached; the default timeout is
            300 seconds. Increasing this value also changes the time
            that resources consumed by the script stay in memory,
            thereby increasing memory usage.
          </p></dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.sched.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.securecreds.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.59. sched – The Schedule Module </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.61. securecreds – Password Encryption/Credential Retrieval</td>
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
