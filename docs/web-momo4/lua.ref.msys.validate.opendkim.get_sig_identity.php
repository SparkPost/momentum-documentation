<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.validate.opendkim.get_sig_identity</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php" title="msys.validate.opendkim.get_sig_hdrsigned">
<link rel="next" href="lua.ref.msys.validate.opendkim.get_sig_keysize.php" title="msys.validate.opendkim.get_sig_keysize">
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
<tr><th colspan="3" align="center">msys.validate.opendkim.get_sig_identity</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.validate.opendkim.get_sig_keysize.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.validate.opendkim.get_sig_identity"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.validate.opendkim.get_sig_identity — Fetch the identity associated with a DKIM signature</p>
</div>
<div class="refsection">
<a name="idp18940928"></a><h2>Synopsis</h2>
<p>
        <code class="function">msys.validate.opendkim.get_sig_identity(dkim,
        dkim_sig)</code>
      </p>
<p>
</p>
<pre class="literallayout">

dkim: userdata, DKIM type
dkim_sig: userdata, DKIM_SIGINFO type </pre>
<p>
      </p>
</div>
<div class="refsection">
<a name="idp18944432"></a><h2>Description</h2>
<p>
        This function fetches the identity associated with a DKIM
        signature.
      </p>
<p>
        It takes the following parameters:

        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              <code class="literal">dkim</code> – array of DKIM_SIGINFO
              objects created by
              <code class="function">msys.validate.opendkim.verify</code>.
            </p></li>
<li class="listitem"><p>
              <code class="literal">dkim_sig</code> – Use
              <code class="function">msys.validate.opendkim.get_num_sigs</code>
              and <code class="function">msys.validate.opendkim.get_sig</code> to
              get a DKIM_SIGINFO object to pass to this function. For a
              description of the DKIM_SIGINFO object, see
              <a class="link" href="http://www.opendkim.org/libopendkim/dkim_siginfo.html" target="_top">DKIM_DSIGINFO</a>
            </p></li>
</ul></div>
<p>
      </p>
<p>
        This function requires the
        <a class="link" href="modules.opendkim.php" title="71.50. opendkim – Open Source DKIM"><code class="filename">opendkim</code></a>
        module.
      </p>
<p>
        Enable this function with the statement
        <code class="code">require('msys.validate.opendkim');</code>.
      </p>
<p>
        This function returns the identity and the DKIM status
        <code class="literal">DKIM_STAT</code>.
      </p>
<p>
        The DKIM status <code class="literal">DKIM_STAT</code> can be one of the
        following values:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_OK</code> – successful
            completion
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_BADSIG</code> – signature did
            not match headers and body
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_NOSIG</code> – no signature
            present
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_NOKEY</code> – no key available
            for verifying
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_CANTVRFY</code> – cannot get key
            for verifying
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_SYNTAX</code> – message is not
            in valid syntax
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_NORESOURCE</code> – resource
            unavailable
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_INTERNAL</code> – internal error
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_REVOKED</code> – signing key
            revoked
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_INVALID</code> – invalid
            parameter(s)
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_NOTIMPLEMENT</code> – function
            not implemented
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_KEYFAIL</code> – key retrieval
            failed (try again later)
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_CBREJECT</code> – callback
            requested message rejection
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_CBTRYAGAIN</code> – callback
            cannot complete (try again later)
          </p></li>
<li class="listitem"><p>
            <code class="literal">DKIM_STAT_CBERROR</code> – unspecified
            callback error
          </p></li>
</ul></div>
</div>
<div class="refsection">
<a name="idp18977184"></a><h2>See Also</h2>
<p>
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_canons.php" title="msys.validate.opendkim.get_sig_canons"><span class="refentrytitle">msys.validate.opendkim.get_sig_canons</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.sign.php" title="msys.validate.opendkim.sign"><span class="refentrytitle">msys.validate.opendkim.sign</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.verify.php" title="msys.validate.opendkim.verify"><span class="refentrytitle">msys.validate.opendkim.verify</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_num_sigs.php" title="msys.validate.opendkim.get_num_sigs"><span class="refentrytitle">msys.validate.opendkim.get_num_sigs</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig.php" title="msys.validate.opendkim.get_sig"><span class="refentrytitle">msys.validate.opendkim.get_sig</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_domain.php" title="msys.validate.opendkim.get_sig_domain"><span class="refentrytitle">msys.validate.opendkim.get_sig_domain</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_selector.php" title="msys.validate.opendkim.get_sig_selector"><span class="refentrytitle">msys.validate.opendkim.get_sig_selector</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_errorstr.php" title="msys.validate.opendkim.get_sig_errorstr"><span class="refentrytitle">msys.validate.opendkim.get_sig_errorstr</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_flags.php" title="msys.validate.opendkim.get_sig_flags"><span class="refentrytitle">msys.validate.opendkim.get_sig_flags</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_keysize.php" title="msys.validate.opendkim.get_sig_keysize"><span class="refentrytitle">msys.validate.opendkim.get_sig_keysize</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_signalg.php" title="msys.validate.opendkim.get_sig_signalg"><span class="refentrytitle">msys.validate.opendkim.get_sig_signalg</span></a>,
        <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php" title="msys.validate.opendkim.get_sig_hdrsigned"><span class="refentrytitle">msys.validate.opendkim.get_sig_hdrsigned</span></a>
      </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.validate.opendkim.get_sig_keysize.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msys.validate.opendkim.get_sig_hdrsigned </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.validate.opendkim.get_sig_keysize</td>
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
