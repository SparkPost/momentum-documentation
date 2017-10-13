<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.av.scan_part</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msys.av.scan.php" title="msys.av.scan">
<link rel="next" href="lua.ref.msys.base64.decode.php" title="msys.base64.decode">
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
<tr><th colspan="3" align="center">msys.av.scan_part</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msys.av.scan.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.base64.decode.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.av.scan_part"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.av.scan_part — Perform a virus scan on a specific message part using the named engine</p>
</div>
<div class="refsection">
<a name="idp17521968"></a><h2>Synopsis</h2>
<p>
        <code class="function">msys.av.scan_part(msg_part, av_engine_name,
        validate_context);</code>
      </p>
<pre class="literallayout">
msg_part: userdata, ec_message type
av_engine_name: string, optional
validate_context: userdata, validate_context type, optional </pre>
</div>
<div class="refsection">
<a name="idp17525536"></a><h2>Description</h2>
<p>
        Use this function with AV engines that depend on the AV module,
        such as the clamav module.
      </p>
<p>
        This function performs a virus scan. The scan is done using the
        specified engine or, if no engine is specified, any installed
        engines that are supported by the AV module. if a virus is
        detected by an engine, the function will skip the remaining
        engines and return. For a list of these engines, see
        <a class="xref" href="modules.antivirus.php" title="71.6. antivirus – Antivirus">Section 71.6, “antivirus – Antivirus”</a>.
      </p>
<p>
        Enable this function with the statement
        <code class="code">require('msys.av');</code>.
      </p>
<p>
        This function takes the following parameters:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="literal">msg_part</code>– required message part
            (msys.core:_ec_message_part)
          </p></li>
<li class="listitem"><p>
            <code class="literal">av_engine_name</code> – optional engine
            name
          </p></li>
<li class="listitem"><p>
            <code class="literal">validate_context</code> – optional
            validation context
          </p></li>
</ul></div>
<p>
        If the <code class="literal">validate_context</code> parameter is omitted,
        it will be inferred from the calling environment, if possible.
        If <code class="literal">msg_part</code> is <code class="literal">nil</code>, this
        function will raise an error.
      </p>
<p>
        This function returns four values:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
            The <span class="emphasis"><em>scan status</em></span>, which is one of the
            following values:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
                msys.av.EC_AV_PART_IS_CONTAINER – A container was
                passed to <code class="literal">msys.av.scan</code>.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_NAME_TOO_LONG –
                <code class="literal">av_engine_name</code> is longer than 40
                characters.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_NO_ENGINE – No AV engine is
                configured.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_NOT_SUITABLE_FOR_STREAMING – AV
                engine cannot scan the message that was passed in as a
                stream.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_ERROR – A runtime error occurred.
                For clamav-specific information, see
                <a class="xref" href="modules.clamav.php#modules.clamav.runtime" title="71.17.1.1. clamav Runtime Usage">Section 71.17.1.1, “clamav Runtime Usage”</a>.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_CLEAN – Meaning of this status
                depends on the AV engine.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_INFECTED – Meaning of this status
                depends on the AV engine. For engine-specific
                information, see
                <a class="xref" href="modules.csapi.php#modules.csapi.context.variables" title="71.23.2. Context Variables">Section 71.23.2, “Context Variables”</a> and
                <a class="xref" href="modules.clamav.php#modules.clamav.runtime" title="71.17.1.1. clamav Runtime Usage">Section 71.17.1.1, “clamav Runtime Usage”</a>.
              </p></li>
<li class="listitem"><p>
                msys.av.EC_AV_UNSCANNABLE – Message could not be
                scanned.
              </p></li>
</ul></div>
</li>
<li class="listitem"><p>
            An <span class="emphasis"><em>informational string</em></span>, which
            typically contains the virus name; the precise contents of
            this string depend on the engine.
          </p></li>
<li class="listitem"><p>
            The <span class="emphasis"><em>name of the AV engine</em></span> that detected
            the virus or <code class="literal">nil</code> if no virus was
            detected.
          </p></li>
<li class="listitem"><p>
            The <span class="emphasis"><em>engine scan code</em></span> or
            <code class="literal">nil</code> if no engine scan code is available.
            The scan code returned is specific to the engine reporting
            the error. For engine-specific information, see
            <a class="xref" href="modules.csapi.php#modules.csapi.context.variables" title="71.23.2. Context Variables">Section 71.23.2, “Context Variables”</a> and
            <a class="xref" href="modules.clamav.php#modules.clamav.runtime" title="71.17.1.1. clamav Runtime Usage">Section 71.17.1.1, “clamav Runtime Usage”</a>.
          </p></li>
</ul></div>
<div class="example">
<a name="lua.ref.msys.av.scan_part.example"></a><p class="title"><b>Example 70.48. msys.av.scan_part example using clamav</b></p>
<div class="example-contents"><pre class="programlisting"> require("msys.av");

 local mod = {};

 function mod:validate_data(msg_part, accept, vctx)
   local rc
   local result
   local eng
   local s_code
   rc, result, eng, s_code = msys.av.scan_part(msg_part, "clamav", vctx);
   print ("rc: ", rc, map_to_symbol(rc), " result: ", result, " engine: ", eng, " scan code: ", s_code)
   if rc == msys.av.EC_AV_INFECTED then
     vctx:set_code(550, "The mail contains virus: " .. result)
     return msys.core.VALIDATE_DONE;
   end
   return msys.core.VALIDATE_CONT;
 end

 local function map_to_symbol(rc)
   if rc == msys.av.EC_AV_PART_IS_CONTAINER then
     return "EC_AV_PART_IS_CONTAINER"
   elseif rc == msys.av.EC_AV_NAME_TOO_LONG then
     return "EC_AV_NAME_TOO_LONG"
   elseif rc == msys.av.EC_AV_NO_ENGINE then
     return "EC_AV_NO_ENGINE"
   elseif rc == msys.av.EC_AV_NOT_SUITABLE_FOR_STREAMING then
     return "EC_AV_NOT_SUITABLE_FOR_STREAMING"
   elseif rc == msys.av.EC_AV_ERROR then
     return "EC_AV_ERROR"
   elseif rc == msys.av.EC_AV_CLEAN then
     return "EC_AV_CLEAN"
   elseif rc == msys.av.EC_AV_INFECTED then
     return "EC_AV_INFECTED"
   elseif rc == msys.av.EC_AV_UNSCANNABLE then
     return "EC_AV_UNSCANNABLE"
   else
     return "UNKNOWN"
   end
 end

 msys.registerModule("test_av", mod);</pre></div>
</div>
<br class="example-break">
</div>
<div class="refsection">
<a name="idp17560256"></a><h2>See Also</h2>
<p>
        <a class="xref" href="lua.ref.msys.av.scan.php" title="msys.av.scan"><span class="refentrytitle">msys.av.scan</span></a>
      </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msys.av.scan.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.base64.decode.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msys.av.scan </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.base64.decode</td>
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
