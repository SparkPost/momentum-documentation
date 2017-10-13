<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.73. url_ripper – URL Extraction</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="tls_macros.php" title="71.72. tls_macros – TLS-related Logging">
<link rel="next" href="config.options.ref.php" title="Chapter 72. Configuration Options Reference">
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
<tr><th colspan="3" align="center">71.73. url_ripper – URL Extraction</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="tls_macros.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="config.options.ref.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.url_ripper"></a>71.73. url_ripper – URL Extraction</h2></div></div></div>
<a class="indexterm" name="idp23292880"></a><p>
    The url_ripper module is designed to be a comprehensive toolkit for
    DNS-based content correlation. The url_ripper functions as a normal
    DNS block list (DNSBL) on the connecting IP address as well as a
    right-hand side block list (RHSBL) on the domain of the envelope
    sender, the domains of email addresses in any headers, the URLs
    contained in the email body (even in transfer encoded content), and
    content that has been obfuscated with HTML encoding.
  </p>
<p>
    Additionally, the URLs and domains found can be resolved to IP
    addresses and those IP addresses will be looked up in the DNSBL.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      To use the url_ripper module, you must choose to install the
      Policy Tools suite during installation.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp23297152"></a>71.73.1. Configuration</h3></div></div></div>
<p>
      The following is an example configuration:
    </p>
<div class="example">
<a name="example.url_ripper.3"></a><p class="title"><b>Example 71.99. url_ripper Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
url_ripper "url_ripper1" {
  base = "multi.surbl.org"
  bits = [
    0.0.0.1 = "list1_hits"
    0.0.0.2 = "list2_hits"
    0.0.0.4 = "list3_hits"
    0.0.0.8 = "list4_hits"
    0.0.0.16 = "list5_hits"
    0.0.0.32 = "list6_hits"
    0.0.0.64 = "list7_hits"
    0.0.1.0 = "list8_hits"
  ]
  values = [
    127.0.0.2 = "simple_hits"
  ]
  address_headers = ( "Return-Path" "From" "Sender" "Reply-To" "Errors-To")

}</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
        This module no longer supports the
        <code class="literal">checklist_suppress_hostnames</code> and
        <code class="literal">checklist_suppress_ips</code> options, which were
        dependent upon the deprecated <code class="literal">checklist</code>
        module. You can replace this functionality with Lua datasource
        functions. For more information, see
        <a class="xref" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">Section 71.29, “ds_core - Datasource Query Core”</a> and
        <a class="link" href="https://support.messagesystems.com/docs/web-policy/policy.default.configuration.php#policy.default.configuration.msys.dp_config.whitelist" target="_top">msys.dp_config.whitelist</a>.
      </p>
</div>
<p>
      The following are the configuration options defined within this
      module:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          address_headers
        </span></dt>
<dd><p>
            Explicitly specifies headers from which emails (and in turn
            mailbox domains) should be extracted.
          </p></dd>
<dt><span class="term">
          base
        </span></dt>
<dd><p>
            Describes the base domain under which prospects should be
            resolved.
          </p></dd>
<dt><span class="term">
          bits
        </span></dt>
<dd><p>
            Allows for multi-value lists to be used. If a bitwise AND
            between the provided key and the list-resolved IP address in
            question is non-zero, then the key is considered a match and
            the context key associated with the value is incremented by
            one.
          </p></dd>
<dt><span class="term">
          forward
        </span></dt>
<dd><p>
            If set to <code class="literal">false</code>, this option disables the
            conversion of hostnames to IPs and the DNSBL lookups of
            those IPs. Default value is <code class="literal">true</code>.
          </p></dd>
<dt><span class="term">
          max_lookups
        </span></dt>
<dd><p>
            Limits the number of DNSBL lookups acting as a brake in case
            of a possible denial of service attack. Default value is
            <code class="literal">100</code>.
          </p></dd>
<dt><span class="term">
          values
        </span></dt>
<dd><p>
            Traditional "exact match" style list check. If the
            list-resolved IP address in question exactly matches the
            key, the context key associated with the value is
            incremented by one.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp23327280"></a>71.73.2. Operational Example</h3></div></div></div>
<p>
      Use of the url_ripper module is complicated, mostly due to abusers
      using complicated methods to avoid detection. As such, an example
      of operation is warranted. In this example, multi.surbl.org will
      be the DNSBL base domain.
    </p>
<pre class="programlisting">
&lt;&lt;&lt; 220 server ESMTP ecelerity 1.2 (r4169) Mon, 16 May 2005 09:45:48 -0400
&gt;&gt;&gt; EHLO sender.example.com
&lt;&lt;&lt; 250-edge.omniti.com says EHLO to 192.0.2.100
&lt;&lt;&lt; 250-8BITMIME
&lt;&lt;&lt; 250 PIPELINING
</pre>
<p>
      At connect, the module will resolve 100.2.0.192.multi.surbl.org to
      an IP address. This resulting IP address will be processed through
      the configuration, and the appropriate context variables will be
      updated to reflect any matches.
    </p>
<pre class="programlisting">
&gt;&gt;&gt; MAIL FROM:&lt;sender@mail.example.com&gt;
&lt;&lt;&lt; 250 MAIL FROM accepted
</pre>
<p>
      Now the mailbox domain mail.example.com is found in the envelope
      sender. The base domain example.com is mapped to
      example.com.multi.surbl.org, is resolved to an IP, and is
      processed. Additionally, mail.example.com is resolved to an IP
      address, and that IP is reversed and looked up, just as was the
      connecting IP address.
    </p>
<pre class="programlisting">
&gt;&gt;&gt; RCPT TO:&lt;test@test.omniti.com&gt;
&lt;&lt;&lt; 250 RCPT TO accepted.
&gt;&gt;&gt; DATA
&lt;&lt;&lt; 354 continue.  finished with "\r\n.\r\n"
&gt;&gt;&gt;

From: "Abuser" &lt;superabuser@superabuser.com&gt;
Subject: Abuse!
Content-Type: text/html
Content-Transfer-Encoding: base64

PGh0bWw+Cjxib2R5Pgo8YSBocmVmPSJodHRwOi8vd3d3LmNvdmVydGFidXNlci5jby51ayI+Q2xp
Y2sgaGVyZSB0byBidXkgc29tZXRoaW5nPC9hPi4KPC9ib2R5Pgo8L2h0bWw+Cg==
.
</pre>
<p>
      At this point, a large amount of information is extracted from the
      above message part. First, superabuser.com is extracted from the
      From: header. Next the body is base64 decoded to:
    </p>
<pre class="programlisting">
&lt;html&gt;
&lt;body&gt;
&lt;a href="http://www.covertabuser.co.uk"&gt;Click here to buy something&lt;/a&gt;.
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>
      And www.covertabuser.co.uk is extracted.
    </p>
<p>
      Both superabuser.com and www.covertabuser.co.uk are resolved via A
      records to IP addresses (192.0.2.10 and 192.0.2.20, respectively)
      and inverted. Next, they are normalized to RHSBL format
      (superabuser.com and covertabuser.co.uk, respectively).
    </p>
<p>
      The list is consulted by resolving A records for:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">10.2.0.192.multi.surbl.org</code>
        </p></li>
<li class="listitem"><p>
          <code class="literal">20.2.0.192.multi.surbl.org</code>
        </p></li>
<li class="listitem"><p>
          <code class="literal">superabuser.com.multi.surbl.org</code>
        </p></li>
<li class="listitem"><p>
          <code class="literal">covertabuser.co.uk.multi.surbl.org</code>
        </p></li>
</ul></div>
<p>
      Any A records found are checked against the configuration file,
      and the local message context is updated to reflect any matches.
    </p>
<p>
      In the example above, if <code class="option">forward</code> was set to
      <code class="literal">false</code>, the EHLO hostname (sender.example.com)
      would not be converted to an IP address and queried against DNSBL,
      and mail.example.com from the MAIL FROM and test.omniti.com from
      RCPT TO would only be looked up as domains. Also, there would be
      no lookup for 10.2.0.192.multi.surbl.org or
      20.2.0.192.multi.surbl.org from the body, just
      superabuser.com.multi.surbl.org and
      covertabuser.co.uk.multi.surbl.org.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="tls_macros.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="config.options.ref.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.72. tls_macros – TLS-related Logging </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 72. Configuration Options Reference</td>
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
