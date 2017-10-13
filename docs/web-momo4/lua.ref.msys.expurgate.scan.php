<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.expurgate.scan</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msys.dumper.Dumper.php" title="msys.dumper.Dumper">
<link rel="next" href="lua.ref.msys.gauge_cache.dec.php" title="msys.gauge_cache.dec">
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
<tr><th colspan="3" align="center">msys.expurgate.scan</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msys.dumper.Dumper.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.gauge_cache.dec.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.expurgate.scan"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.expurgate.scan — Scan using the Eleven antivirus engine</p>
</div>
<div class="refsection">
<a name="idp18024656"></a><h2>Synopsis</h2>
<p>
        <code class="function">msys.expurgate.scan(msg, accept, vctx);</code>
      </p>
<pre class="literallayout">
msg: userdata, ec_message type
accept: userdata, accept_construct type
vctx: userdata, validate_context type
</pre>
</div>
<div class="refsection">
<a name="idp18027728"></a><h2>Description</h2>
<p>
        Use this function to scan the mail. You must load and correctly
        configure the eleven module before using this function. Be sure
        to set the eleven module option <code class="option">Enabled</code> to
        <code class="option">false</code>. For details, see
        <a class="xref" href="modules.eleven.php" title="71.31. eleven – Eleven eXpurgate Content Scanning">Section 71.31, “eleven – Eleven eXpurgate Content Scanning”</a>.
      </p>
<p>
        It can be invoked at the data, spool, or each_rcpt phases where
        there is a complete message. It will not work at the connect,
        ehlo, mailfrom, or rcptto phases.
      </p>
<p>
        Enable this function with the statement
        <code class="code">require('msys.expurgate');</code>.
      </p>
<p>
        It takes the following parameters:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="literal">msg</code> – Email to be scored
          </p></li>
<li class="listitem"><p>
            <code class="literal">accept</code> – accept_construct
          </p></li>
<li class="listitem"><p>
            <code class="literal">vctx</code> – Validation context
          </p></li>
</ul></div>
<p>
        The scan result is a tuple consisting of the following:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
            <code class="literal">major-type-string</code> – String values
            for major type:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
                unknown
              </p></li>
<li class="listitem"><p>
                clean
              </p></li>
<li class="listitem"><p>
                suspect
              </p></li>
<li class="listitem"><p>
                spam
              </p></li>
<li class="listitem"><p>
                bulk
              </p></li>
<li class="listitem"><p>
                dangerous
              </p></li>
</ul></div>
</li>
<li class="listitem">
<p>
            <code class="literal">minor-type-string</code> – String values
            for minor type:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
                normal
              </p></li>
<li class="listitem"><p>
                empty
              </p></li>
<li class="listitem"><p>
                empty-body
              </p></li>
<li class="listitem"><p>
                almost-empty
              </p></li>
<li class="listitem"><p>
                bounce
              </p></li>
<li class="listitem"><p>
                advertisement
              </p></li>
<li class="listitem"><p>
                porn
              </p></li>
<li class="listitem"><p>
                virus
              </p></li>
<li class="listitem"><p>
                attachment
              </p></li>
<li class="listitem"><p>
                code
              </p></li>
<li class="listitem"><p>
                iframe
              </p></li>
<li class="listitem"><p>
                outbreak
              </p></li>
<li class="listitem"><p>
                url
              </p></li>
<li class="listitem"><p>
                url-count
              </p></li>
<li class="listitem"><p>
                mail-count
              </p></li>
<li class="listitem"><p>
                sender
              </p></li>
</ul></div>
</li>
<li class="listitem">
<p>
            <code class="literal">major-type-int</code> – Integer values for
            major type:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
                msys.expurgate.TYPE_UNKNOWN
              </p></li>
<li class="listitem"><p>
                msys.expurgate.TYPE_CLEAN
              </p></li>
<li class="listitem"><p>
                msys.expurgate.TYPE_SUSPECT
              </p></li>
<li class="listitem"><p>
                msys.expurgate.TYPE_SPAM
              </p></li>
<li class="listitem"><p>
                msys.expurgate.TYPE_BULK
              </p></li>
<li class="listitem"><p>
                msys.expurgate.TYPE_DANGEROUS
              </p></li>
</ul></div>
</li>
<li class="listitem">
<p>
            <code class="literal">minor-type-int</code> – Integer values for
            minor type:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_NORMAL
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_CLEAN_EMPTY
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_CLEAN_ALMOST_EMPTY
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_CLEAN_EMPTY_BODY
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_CLEAN_BOUNCE
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_BULK_ADV
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_BULK_PORN
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_DANGEROUS_VIRUS
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_DANGEROUS_ATTACHMENT
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_DANGEROUS_CODE
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_DANGEROUS_IFRAME
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_DANGEROUS_OUTBREAK
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_URL
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_URL_COUNT
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_MAIL_COUNT
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_SENDER
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER1
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER2
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER3
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER4
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER5
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER6
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER7
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER8
              </p></li>
<li class="listitem"><p>
                msys.expurgate.SUBTYPE_SUSPECT_USER9
              </p></li>
</ul></div>
</li>
</ul></div>
<p>
        The major and minor types are also set within the validation
        context (VCTX_MESS). Look them up using the following keys:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="literal">eleven-majorscore</code> is mapped to major
            type's integer value (in string format).
          </p></li>
<li class="listitem"><p>
            <code class="literal">eleven-result</code> is mapped to major type's
            string value.
          </p></li>
<li class="listitem"><p>
            <code class="literal">eleven-minorscore</code> is mapped to minor
            type's integer value (in string format).
          </p></li>
<li class="listitem"><p>
            <code class="literal">eleven-result-subtype</code> is mapped to minor
            type's string value.
          </p></li>
</ul></div>
<div class="example">
<a name="lua.ref.msys.expurgate.scan.example"></a><p class="title"><b>Example 70.58. msys.expurgate.scan example</b></p>
<div class="example-contents"><pre class="programlisting">
require("msys.core")
require("msys.extended.message")
require("msys.expurgate")

local function evaluate(vctx, major, minor, major_str, minor_str)
  if major == msys.expurgate.TYPE_CLEAN
    or major == msys.expurgate.TYPE_BULK and minor == msys.expurgate.SUBTYPE_NORMAL then
    return msys.core.VALIDATE_CONT
  else
    vctx:set_code(550, major_str .. "/" .. minor_str .. ":" .. major .. "/" .. minor)
    return msys.core.VALIDATE_DONE
  end
end

local function scan(msg, ac, vctx)
  local a, b, c, d;
  local l, m, n, o;

  msys.expurgate.scan();
  msys.expurgate.scan(nil);
  msys.expurgate.scan(nil, nil);
  msys.expurgate.scan(nil, nil, nil);

  a, b, c, d = msys.expurgate.scan();
  l, m, n, o = msys.expurgate.scan(msg, accept, ctx)

  if a ~= l or b ~= m or c ~= n or d ~= o then
    error("inconsistent return values");
  end

  return a, b, c, d;
end

local mod = {};
function mod:validate_data(msg, accept, vctx)
  local major_type, minor_type, major_str, minor_str = scan(msg, accept, ctx)
  print ("major/minor", major_type .. "/" .. minor_type)
  return evaluate(vctx, major_type, minor_type, major_str, minor_str)
end
msys.registerModule("test_scan", mod);
</pre></div>
</div>
<br class="example-break">
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msys.dumper.Dumper.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.gauge_cache.dec.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msys.dumper.Dumper </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.gauge_cache.dec</td>
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
