<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>15.5. Modules</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="conf.overview.php" title="Chapter 15. Configuration Overview">
<link rel="prev" href="listeners.php" title="15.4. Listeners">
<link rel="next" href="conf.ref.ecelerity.conf.php" title="15.6. ecelerity.conf File">
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
<tr><th colspan="3" align="center">15.5. Modules</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="listeners.php">Prev</a> </td>
<th width="60%" align="center">Chapter 15. Configuration Overview</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.ecelerity.conf.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="module_config"></a>15.5. Modules</h2></div></div></div>
<p>
    Momentum's module API is at the core of how it is extended. When a
    module is loaded, it is named based on the
    <em class="replaceable"><code>module_name</code></em> specified in the
    configuration. Some modules can have multiple instances loaded with
    different configurations (e.g. to log different sets of information
    into different log files), while other modules are singletons and
    can only be loaded once.
  </p>
<p>
    All modules load automatically if you use any of the options they
    declare or use other resources provided by them. However, the module
    must be explicitly loaded to set its configuration options. Note
    that you do not need to explicitly declare modules that do not have
    options (apart from the <code class="option">enabled</code> and
    <code class="option">debug_level</code> options common to all modules). To
    determine if the module is loaded implicitly, refer to the specific
    module in <a class="xref" href="modules.php" title="Chapter 71. Modules Reference">Chapter 71, <i>Modules Reference</i></a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="module_config.config"></a>15.5.1. Modules Configuration</h3></div></div></div>
<p>
      Modules can be configured by altering the configuration files or
      by setting options with the <span class="command"><strong>config</strong></span> command from
      the console.
    </p>
<p>
      Generally, modules are defined in the configuration files as
      follows:
    </p>
<pre class="programlisting">
modulename "<em class="replaceable"><code>instancename</code></em>" {
  option1 = value1
  option2 = value2
  ...
}
</pre>
<p>
      Most modules have a module name, a scope name, and one or more
      instance names. However, singleton modules do not have instance
      names and can only be loaded once. To determine whether a module
      is a singleton, refer to
      <a class="xref" href="modules.summary.all.modules.php" title="Chapter 65. Modules Summary">Chapter 65, <i>Modules Summary</i></a> or use the
      <span class="command"><strong>module list</strong></span> command from the console. The
      following is an example partial output:
    </p>
<pre class="screen">
...
Module: ds_core
  Scope_Name: ds_core
  Enabled: enabled
  API: Singleton
  Name: ds_core.c
  Description: generic datasource module
Module: ec_logger:ec_logger
  Scope_Name: ec_logger
  Instance_Name: ec_logger
  Enabled: enabled
  API: Logger
  Name: ec_logger.c
  Description: Momentum minimalistic logging module
...
</pre>
<p>
      Whether a module is a singleton effects how module-specific
      console commands are invoked. For details, see
      <a class="xref" href="module_specific_console_commands.using.php" title="37.3. Using Module-Specific Console Commands">Section 37.3, “Using Module-Specific Console Commands”</a>.
    </p>
<p>
      You can also set configuration options from the console at
      runtime. Note that you also need to know whether a module is a
      singleton to set options using this method. For details, see
      <a class="xref" href="modules.options.console.php" title="37.4. Setting and Getting Module Options from the Console">Section 37.4, “Setting and Getting Module Options from the Console”</a>.
    </p>
<p>
      Some modules (typically antivirus modules) must be loaded in
      "passive" mode. To load a module passively, set the
      <code class="option">enabled</code> option to <code class="literal">false</code>. For
      example, use the following syntax in the
      <code class="filename">ecelerity.conf</code> file:

</p>
<pre class="programlisting">
symbolname "name" {
  enabled = false
  debug_level = DEBUG 
  ...
}
</pre>
<p>
    </p>
<p>
      Note that the <code class="option">enabled</code> and
      <code class="option">debug_level</code> options are common to all modules.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="module_config.debugging"></a>15.5.2. Module Debugging</h3></div></div></div>
<p>
      During troubleshooting, it can be useful to have debugging
      information sent to the <code class="filename">paniclog</code>. Module
      debug levels can be set in the configuration files or from the
      console. Note that if the module that you wish to debug is not
      explicitly loaded, you must add it to your configuration file. The
      default debugging level is <code class="literal">ERROR</code>, which will
      cause <code class="literal">ERROR</code> and <code class="literal">CRITICAL</code>
      messages to be logged to the <code class="filename">paniclog</code>.
    </p>
<p>
      To set module debug levels in your configuration, set the
      <code class="literal">debug_level</code> option within the module stanza:
    </p>
<pre class="programlisting">
modulename "<em class="replaceable"><code>Instance_Name</code></em>" {
  ...
  debug_level = DEBUG
}
</pre>
<p>
      The following is an example of setting the debug level of the
      bounce_logger module in the <code class="filename">ecelerity.conf</code>
      file:
    </p>
<pre class="programlisting">
bounce_logger "bounce_logger1"
{
   debug_level = "NOTICE"
   bouncelog = "/var/log/ecelerity/bouncelog.ec"
   bouncelog_mode = 0644
   heartbeat = 60
}
</pre>
<p>
      To set module debug levels in the console, use the
      <span class="command"><strong>config</strong></span> command:
    </p>
<pre class="programlisting">
config set <em class="replaceable"><code>Scope_Name</code></em> <em class="replaceable"><code>Instance_Name</code></em> Debug_Level <em class="replaceable"><code>value</code></em>
</pre>
<p>
      The following is an example of setting the debug level of the
      bounce_logger module in the console:
    </p>
<pre class="programlisting">
config set bounce_logger bounce_logger1 Debug_Level DEBUG
</pre>
<p>
      The debug level is set in the same way as any other module option.
      For a list of all the debug levels, see
      <a class="xref" href="conf.ref.debug_flags.php#conf.ref.debug.levels" title="Table 72.1. Debug levels">Table 72.1, “Debug levels”</a>.
    </p>
<p>
      Be sure to turn off debugging when you are finished, otherwise log
      files can become excessively large.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="module_config.compiled.lua"></a>15.5.3. Creating and Installing a Compiled Lua Module</h3></div></div></div>
<p>
      You can build a native-C module that implements Lua functionality.
      A sample module with extensive notes is provided in the
      <code class="filename">/opt/msys/ecelerity/docs/lua_sample.c</code> file.
      This sample adds functionality to enable suspend and resume
      actions and the ability to receive core Momentum data structures
      as parameters.
    </p>
<p>
      The examples in this file are trivial but demonstrate
      best-practice coding paradigms for integrating with Lua. To build
      these examples perform the following:
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
          During installation, install the Ecelerity developer tools on
          the build machine. (To add this package after installation,
          download
          msys-ecelerity-devel-<em class="replaceable"><code>version.os.arch</code></em>.rpm
          from the Message Systems website.)
        </p></li>
<li class="listitem">
<p>
          Follow the instructions in
          <code class="filename">/opt/msys/ecelerity/docs/lua_sample.c</code> and
          compile the source code using
          <code class="filename">/opt/msys/ecelerity/bin/ecxs</code>.

</p>
<pre class="programlisting">
 shell&gt; /opt/msys/ecelerity/bin/ecxs -c <em class="replaceable"><code>/path/to/</code></em>lua_sample.c
</pre>
<p>
        </p>
</li>
<li class="listitem">
<p>
          Install the module so that it can be found at runtime:
        </p>
<pre class="programlisting">
shell&gt; cp lua_sample.so /opt/msys/ecelerity/libexec/lua
shell&gt; chmod +x /opt/msys/ecelerity/libexec/lua/lua_sample.so
</pre>
</li>
</ol></div>
<p>
      To run the example, create the following Lua script using the
      instructions given at <a class="xref" href="implementing.policy.scriptlets.php#policy.best.practices" title="62.2.4. Creating Policy Scripts">Section 62.2.4, “Creating Policy Scripts”</a>:
    </p>
<pre class="programlisting">
require("lua_sample");
local mod = {};

function mod:validate_data(msg, ac, vctx)
  print("size", lua_sample.size_by_two(msg))
  lua_sample.sleep(5);
  print("after sleep")
  print("answer", lua_sample.mul_by_seven(6));
end

msys.registerModule("sample", mod);
    </pre>
<p>
      Save this file as <code class="filename">samplescript.lua</code>.
    </p>
<p>
      Configure the following scriptlet stanza in your
      <code class="filename">ecelerity.conf</code> file:
    </p>
<pre class="programlisting">
scriptlet "scriptlet" {
  script "sample" {
   source = "samplescript"
  }
}
</pre>
<p>
      For detailed information about how Lua is implemented in Momentum,
      see <a class="xref" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">Section 71.60, “scriptlet - Lua Policy Scripts”</a> and
      <a class="xref" href="implementing.policy.scriptlets.php" title="62.2. Policy Scriptlets">Section 62.2, “Policy Scriptlets”</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="listeners.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="conf.overview.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.ecelerity.conf.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">15.4. Listeners </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 15.6. <code class="filename">ecelerity.conf</code> File</td>
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
