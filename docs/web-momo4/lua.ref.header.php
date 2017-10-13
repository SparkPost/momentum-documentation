<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msg:header</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msg_get_envelope2.php" title="msg:get_envelope2">
<link rel="next" href="lua.ref.msg_listener_addr.php" title="msg:listener_addr">
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
<tr><th colspan="3" align="center">msg:header</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msg_get_envelope2.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msg_listener_addr.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.header"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msg:header — Manipulate message headers</p>
</div>
<div class="refsection">
<a name="idp15811504"></a><h2>Synopsis</h2>
<pre class="literallayout">
require('msys.extended.message')

</pre>
<p>
      <code class="function">msg:header(hdr, value, mode)</code>
    </p>
<pre class="literallayout">
hdr: string
value: string (optional)
mode: string (optional)
</pre>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        This Lua function may not give expected results for multi-part
        MIME messages such as an MCMT message. It will behave as
        expected in the first MIME part. Consider using
        <a class="xref" href="lua.ref.msgpart_header.php" title="msgpart:header"><span class="refentrytitle">msgpart:header</span></a>.
      </p>
</div>
</div>
<div class="refsection">
<a name="idp15816912"></a><h2>Description</h2>
<p>
      This function may be used to manipulate message headers in a
      variety of ways: get, set, delete, prepend, append, and replace.
    </p>
<p>
      In order to <span class="emphasis"><em>get</em></span> headers, pass only the first
      parameter and msg:header returns an array of header values. The
      headers will have RFC2047 header encoding removed, which means
      that any non-ASCII characters that are properly encoded according
      to MIME will be translated to UTF-8 text.
    </p>
<p>
      When used to <span class="emphasis"><em>delete</em></span> a header, specify the
      name of the header you wish to delete and pass an empty string,
      <code class="code">""</code>, as the second parameter.
    </p>
<p>
      If <code class="literal">mode</code> is <code class="literal">replace</code> (or
      omitted) then the following occurs: first all other headers of
      that name are deleted and then the new value is appended to the
      message headers. If <code class="literal">mode</code> is
      <code class="literal">prepend</code>, existing headers are preserved with
      the same name and the new value is prepended to the message. If
      the <code class="literal">mode</code> is <code class="literal">append</code>, existing
      headers are preserved with the same name and the new value is
      appended to the message. If the <code class="literal">value</code> is a
      table, multiple headers are added. When setting headers, any
      non-ASCII content will be subject to RFC2047 MIME header encoding,
      and stored in the header as UTF-8 encoded text.
    </p>
<div class="example">
<a name="lua.ref.msg_header.example.get"></a><p class="title"><b>Example 70.23. Getting a Header: Pass One Parameter</b></p>
<div class="example-contents"><pre class="programlisting">
local header_list;
header_list =  msg:header("X-Custom-Header");
local hdrval = header_list[1];
</pre></div>
</div>
<br class="example-break"><p>
      Note that when getting a header, the return value is a table.
    </p>
<div class="example">
<a name="lua.ref.msg_header.example.delete"></a><p class="title"><b>Example 70.24. Delete a Header: Pass Two Parameters</b></p>
<div class="example-contents"><pre class="programlisting">
  msg:header("X-Custom-Header", "");
</pre></div>
</div>
<br class="example-break"><p>
      In this case, the return value of the
      <code class="function">msg:header</code> function is a boolean.
    </p>
<div class="example">
<a name="lua.ref.msg_header.example.set"></a><p class="title"><b>Example 70.25. Setting a Header: Pass Two Parameters</b></p>
<div class="example-contents"><pre class="programlisting">
  msg:header("X-Custom-Header", "header value");
</pre></div>
</div>
<br class="example-break"><p>
      When adding a header, the third parameter defaults to
      <code class="literal">append</code>. If you wish to prepend the header
      specify <code class="literal">prepend</code> as the third parameter. In this
      case, the return value of the <code class="function">msg:header</code>
      function is a boolean.
    </p>
<div class="example">
<a name="lua.ref.msg_header.example.replace"></a><p class="title"><b>Example 70.26. Replace a Header: Pass Three Parameters</b></p>
<div class="example-contents"><pre class="programlisting">
  msg:header("X-Custom-Header", "123456", "replace");
</pre></div>
</div>
<br class="example-break"><p>
      In this case the return value of the
      <code class="function">msg:header</code> function is also a boolean.
    </p>
</div>
<div class="refsection">
<a name="idp15840240"></a><h2>See Also</h2>
<p>
      <a class="xref" href="lua.ref.msg_body.php" title="msg:body"><span class="refentrytitle">msg:body</span></a> and
      <a class="xref" href="lua.ref.msgpart_header.php" title="msgpart:header"><span class="refentrytitle">msgpart:header</span></a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msg_get_envelope2.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msg_listener_addr.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msg:get_envelope2 </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msg:listener_addr</td>
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
