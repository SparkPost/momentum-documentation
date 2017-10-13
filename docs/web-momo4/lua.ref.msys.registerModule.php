<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.registerModule</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msys.registerControl.php" title="msys.registerControl">
<link rel="next" href="lua.ref.msys.runinpool.php" title="msys.runInPool">
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
<tr><th colspan="3" align="center">msys.registerModule</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msys.registerControl.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.runinpool.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.registerModule"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.registerModule — Register a Lua module with the system.</p>
</div>
<div class="refsection">
<a name="idp16300352"></a><h2>Synopsis</h2>
<p>
      <code class="function">msys.registerModule(modname, table);</code>
    </p>
<pre class="literallayout">
modname: string
table: table
</pre>
</div>
<div class="refsection">
<a name="idp16303344"></a><h2>Description</h2>
<p>
      Register a Lua module with the system. The first parameter is the
      name of the module. This is currently only used in error messages,
      but should be unique by module for future expansion. The module
      name should match the name you set in the
      <code class="literal">script</code> stanza within the script module. The
      second parameter is a function table; the keys of the table
      correspond to defined callouts. The idiom for registering a module
      is:
    </p>
<pre class="programlisting">
require("msys.core")

local mod = {};

function mod:validate_ehlo(str, accept, vctx)
  print("ehlo string is:", msys.expandMacro("%{vctx_conn:ehlo_string}"));
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("ehlo_phase", mod);
</pre>
<p>
      The predefined functions are:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          init()
        </p></li>
<li class="listitem"><p>
          deinit()
        </p></li>
<li class="listitem"><p>
          validate_connect(accept, vctx)
        </p></li>
<li class="listitem"><p>
          validate_ehlo(str, accept, vctx)
        </p></li>
<li class="listitem"><p>
          validate_mailfrom(str, accept, vctx)
        </p></li>
<li class="listitem"><p>
          validate_rcptto(msg, str, accept, vctx)
        </p></li>
<li class="listitem"><p>
          validate_data(msg, accept, vctx)
        </p></li>
<li class="listitem"><p>
          validate_data_spool(msg, accept, vctx)
        </p></li>
<li class="listitem"><p>
          validate_data_spool_each_rcpt(msg, accept, vctx)
        </p></li>
<li class="listitem"><p>
          validate_set_binding(msg)
        </p></li>
<li class="listitem"><p>
          validate_rcptto_list(list_node, vctx)
        </p></li>
<li class="listitem"><p>
          validate_rcptto_list_final(node, vctx)
        </p></li>
<li class="listitem"><p>
          validate_dealloc()
        </p></li>
</ul></div>
<p>
      <code class="function">init</code> Registration point for long-lived state,
      such as timed events or control functions. You should avoid using
      the <code class="function">init</code> routine unless necessary, as it ties
      up an additional interpreter on the main scheduler thread. In the
      current architecture, things set up via the
      <code class="function">init</code> routine have strong thread affinity with
      the scheduler thread and are not suitable for scheduling jobs to
      thread pools. The init event occurs when the script module's init
      routine is called. A configuration reload should suffice to
      trigger this event.
    </p>
<p>
      The <code class="function">init</code> routine must return
      <code class="literal">true</code> if it successfully initializes. Any other
      return value results in a failure to apply the configuration.
    </p>
<p>
      <code class="function">deinit</code> is the resource destruction point for
      things that were set up via the <code class="function">init</code> routine.
      It must return true if it was successful, otherwise it can result
      in resources not being cleaned up.
    </p>
<p>
      <code class="function">validate_dealloc()</code> maps to the
      <code class="function">validate_local_dealloc</code> function from the
      validation subsystem. <code class="function">validate_dealloc()</code> is
      only invoked if defined and if an earlier phase of processing
      invoked Lua code from this module. Its purpose is to allow your
      code a chance to act when the validate_context is torn down. If
      you used "self" in an earlier validation phase, it will be
      available in this function. You do not (and should not) need to
      define this callback unless you are doing something esoteric and
      accessing resources outside of the usual garbage collection
      mechanism. In most cases, your per-session state will be collected
      automatically.
    </p>
<h2>
<a name="idp16327520"></a>Hook Points</h2>
<p>
      Hook points may also be registered, for example:
    </p>
<pre class="programlisting">
-- reroute all mail via example.com
function mod:core_config_get_message_routing_domain(scope, msg, buff)
  buff:set("example.com");
  return #buff;
end</pre>
<p>
      When invoking hooks, if the hook is defined as having a
      <code class="literal">char *</code> parameter followed by an
      <code class="literal">int</code> parameter, then the pair will be used to
      construct an <code class="literal">ec_string</code> object that uses the
      string as the storage with a maximum length as given by the
      integer parameter. This allows modification of the string without
      ambiguity of the ownership of the associated memory.
    </p>
<p>
      Because this function is in the <code class="literal">msys</code> namespace,
      an explicit <code class="code">require</code> is not necessary.
    </p>
</div>
<div class="refsection">
<a name="idp16332976"></a><h2>See Also</h2>
<p>
      <a class="xref" href="implementing.policy.scriptlets.php" title="62.2. Policy Scriptlets">Section 62.2, “Policy Scriptlets”</a>,
      <a class="xref" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">Section 71.60, “scriptlet - Lua Policy Scripts”</a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msys.registerControl.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.runinpool.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msys.registerControl </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.runInPool</td>
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
