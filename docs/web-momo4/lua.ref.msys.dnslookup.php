<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.dnsLookup</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msys.config.php" title="msys.config">
<link rel="next" href="lua.ref.msys.expandMacro.php" title="msys.expandMacro">
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
<tr><th colspan="3" align="center">msys.dnsLookup</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msys.config.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.expandMacro.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.dnslookup"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.dnsLookup — Perform a DNS lookup</p>
</div>
<div class="refsection">
<a name="idp16071728"></a><h2>Synopsis</h2>
<p>
      <code class="function">msys.dnsLookup(name, recordtype, options);</code>
    </p>
<pre class="literallayout">
name: string
recordtype: string (optional)
options: table (optional)
</pre>
</div>
<div class="refsection">
<a name="idp16074768"></a><h2>Description</h2>
<p>
      Perform a DNS lookup. The parameters are as follows:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">name</code>
        </p></li>
<li class="listitem">
<p>
          <code class="literal">recordtype</code> – If not specified,
          <code class="literal">recordtype</code> defaults to
          <code class="literal">A</code>. Otherwise, it is a string from the
          following list:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
              <code class="literal">A </code> Lookup the IPv4 address
            </p></li>
<li class="listitem"><p>
              <code class="literal">AAAA</code> Lookup the IPv6 address
            </p></li>
<li class="listitem"><p>
              <code class="literal">TXT</code> Lookup a TXT record
            </p></li>
<li class="listitem"><p>
              <code class="literal">MX</code> Lookup an MX record
            </p></li>
<li class="listitem"><p>
              <code class="literal">PTR</code> Lookup a PTR record
            </p></li>
<li class="listitem"><p>
              <code class="literal">NS</code> Lookup an NS record
            </p></li>
</ul></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
            If <code class="literal">recordtype</code> is passed an invalid value,
            then an exception is thrown. In this case, the inbound
            session will return a 421 error.
          </p>
</div>
</li>
<li class="listitem">
<p>
          <code class="literal">options</code> – Table with the following
          keys:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
              <code class="literal">priority</code> – Either true or false.
              If unspecified, false is assumed.
            </p></li>
<li class="listitem"><p>
              <code class="literal">server</code> – Optional alternate DNS
              server to query instead of the system default resolver
            </p></li>
</ul></div>
</li>
</ul></div>
<p>
      Because this function is in the <code class="literal">msys</code> namespace,
      an explicit <code class="code">require('msys')</code> is not necessary.
    </p>
<p>
      This function returns the following:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
          On success, the return value is a table containing the
          results.
        </p>
<p>
          For records with a preference value, if
          <code class="literal">priority</code> is set to <code class="literal">true</code>,
          the values returned are themselves tables with the first
          element being the preference value and the second element the
          string value. Otherwise, the values returned are just the
          string values. Regardless of the value of the
          <code class="literal">priority</code> setting, the returned records are
          ordered based on their preference, with the "best" record
          first. For other records, the values are simply string values
          that are ordered as they appear in the DNS response.
        </p>
</li>
<li class="listitem">
<p>
          For a failed lookup, two values are returned:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
              <code class="literal">nil</code> to indicate error
            </p></li>
<li class="listitem"><p>
              <code class="literal">errmsg</code> the error message
            </p></li>
</ul></div>
</li>
</ul></div>
<p>
      The idiom for performing a DNS lookup is:
    </p>
<pre class="programlisting">
local results, errmsg, result;

results, errmsg = msys.dnsLookup('messagesystems.com', 'A');

if results == nil then
  print("ERROR: " .. errmsg);
  return;
end

if results ~= nil then
    for k,v in ipairs(results) do
      print("key: " .. k .. "and value: " .. v)
    end
end
</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
        Results of <code class="literal">msys.dnsLookup()</code> invocations in
        your policy scripts can also be queried from the system console
        by using 
        <a class="link" href="console_commands.dns_cache.php" title="dns_cache">dns_cache stats</a>.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msys.config.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.expandMacro.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msys.config </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.expandMacro</td>
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
