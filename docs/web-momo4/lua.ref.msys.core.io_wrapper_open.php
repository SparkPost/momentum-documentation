<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.core.io_wrapper_open</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msgpart_unlink.php" title="msgpart:unlink">
<link rel="next" href="lua.ref.msys.cast.php" title="msys.cast">
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
<tr><th colspan="3" align="center">msys.core.io_wrapper_open</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msgpart_unlink.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.cast.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.core.io_wrapper_open"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.core.io_wrapper_open — Open a handle to a resource</p>
</div>
<div class="refsect1">
<a name="idp16010912"></a><h2>Synopsis</h2>
<p>
      <code class="function">msys.core.io_wrapper_open(filename, options,
      mode);</code>
    </p>
<pre class="literallayout">

filename: string
options: numeric
mode: numeric
</pre>
</div>
<div class="refsect1">
<a name="idp16013504"></a><h2>Description</h2>
<p>
      This function opens a resource and returns a handle to it. For the
      methods that can be used with this file handle see
      <a class="link" href="http://www.lua.org/pil/21.1.html" target="_top">The Simple I/O
      Model</a>.
    </p>
<p>
      Valid <code class="literal">options</code> are the options used with the
      Linux <code class="function">open(3)</code> function such as:
      <code class="code">O_RDONLY, O_RDRW, O_BINARY, O_CREAT, O_APPEND,
      O_WRONLY</code>. Any combination of these flags is valid.
    </p>
<p>
      Mode is an octal number indicating the file mode.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        Writing to a file is a blocking call; If you are creating text
        logs or jlog files be sure to execute write calls to files
        opened using <code class="function">msys.core.io_wrapper_open</code> in a
        separate thread. An example follows.
      </p>
</div>
<div class="example">
<a name="lua.ref.msys.core.io_wrapper_open.example"></a><p class="title"><b>Example 70.29. msys.core.io_wrapper_open</b></p>
<div class="example-contents"><pre class="programlisting">
...
local FLAGS = msys.core.O_CREAT | msys.core.O_APPEND | msys.core.O_WRONLY;
local text_log_data = "This,Is,A,Test,Line\n";
-- Write to text log file in async thread
msys.runInPool('LUA_TXT_LOGS', function()
  local text_log = msys.core.io_wrapper_open(mod["text_log_file.csv"], FLAGS, 0644);
  if not text_log then
    print("ERROR: could not open text log file");
    return;
  end
  text_log:write(text_log_data, #text_log_data);
  text_log = nil;
  end, true);
</pre></div>
</div>
<br class="example-break"><p>
      The code shown in
      <a class="xref" href="lua.ref.msys.core.io_wrapper_open.php#lua.ref.msys.core.io_wrapper_open.example" title="Example 70.29. msys.core.io_wrapper_open">Example 70.29, “msys.core.io_wrapper_open”</a>
      assumes that a separate threadpool has been configured in
      <code class="filename">ecelerity.conf</code> in the following way:
    </p>
<pre class="programlisting">
# Thread pool for Lua custom logs
threadpool "LUA_TXT_LOGS" { concurrency = 10 }
</pre>
<p>
      For more information about threadpools see
      <a class="xref" href="conf.ref.threadpool.php" title="threadpool"><span class="refentrytitle">threadpool</span></a>.
    </p>
<div class="sidebar">
<div class="titlepage"><div><div><p class="title"><b>Bitwise Operators</b></p></div></div></div>
<p>
        To make it easier to work with libraries that use bitmasks as
        part of their API, bitwise logical operators are enabled as
        detailed below. The bitwise operators first convert their
        numeric operands to an integer, apply the operator and then
        generate a standard Lua number result.
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="literal">a &amp; b</code> – bitwise AND, uses the
            __and metatable event (if defined)
          </p></li>
<li class="listitem"><p>
            <code class="literal">a | b</code> – bitwise OR (__or)
          </p></li>
<li class="listitem"><p>
            <code class="literal">a ^^ b</code> – bitwise XOR (__xor)
          </p></li>
<li class="listitem"><p>
            <code class="literal">a &lt;&lt; 1</code> – bitwise shift left
            (__shl)
          </p></li>
<li class="listitem"><p>
            <code class="literal">a &gt;&gt; 1</code> – bitwise shift right
            (__shr)
          </p></li>
<li class="listitem"><p>
            <code class="literal">~a</code> – bitwise negation (__not)
          </p></li>
<li class="listitem"><p>
            <code class="literal">a \ 2</code> – integer division (__intdiv)
          </p></li>
</ul></div>
</div>
</div>
<div class="refsect1">
<a name="idp16037136"></a><h2>See Also</h2>
<p>
      <a class="xref" href="lua.ref.msys.runinpool.php" title="msys.runInPool"><span class="refentrytitle">msys.runInPool</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msgpart_unlink.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.cast.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msgpart:unlink </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.cast</td>
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
