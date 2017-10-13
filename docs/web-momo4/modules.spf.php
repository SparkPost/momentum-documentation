<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.smtpapi.php" title="71.67. smtpapi – SMTP Engagement Tracking">
<link rel="next" href="modules.static_routes.php" title="71.69. static-routes - Static Routes">
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
<tr><th colspan="3" align="center">71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.smtpapi.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.static_routes.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.spf"></a>71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)</h2></div></div></div>
<a class="indexterm" name="idp23084592"></a><a class="indexterm" name="idp23086384"></a><p>
    Sender Policy Framework (SPF) is an emerging standard for
    sender-based authentication which provides a framework for
    administrators, through DNS TXT records, to specify authorized
    senders for the domains they control. SPFv1 performs validation on
    the domain found in the envelope sender (sometimes defined as the
    MAIL FROM header). SPFv2 (also known as Sender ID) supports MAIL
    FROM validation, but adds the concept of Purported Responsible
    Address (PRA), which defines an algorithm for selecting among a set
    of RFC2822 headers. The domain for validation is extracted from the
    appropriate header as defined by the PRA header selection algorithm.
    For a more detailed description of the differences between spf_v1
    and senderid, see
    <a class="link" href="http://www.openspf.org/SPF_vs_Sender_ID" target="_top">SPF_vs_Sender_ID</a>.
  </p>
<p>
    SPF consists of two basic components:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        DNS records published by senders, which describe their policies
      </p></li>
<li class="listitem"><p>
        A parsing engine for receivers, which looks up the published
        policies for inbound mail and takes actions based on it
      </p></li>
</ul></div>
<p>
    A full description of SPF is available at
    <a class="link" href="http://spf.pobox.com" target="_top">http://spf.pobox.com</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp23094240"></a>71.68.1. Configuration</h3></div></div></div>
<p>
      The following is a basic configuration for the SPF modules:
    </p>
<div class="example">
<a name="example.spf_v1.3"></a><p class="title"><b>Example 71.93. spf Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
spf_macros {
}
spf_v1 "spf_v1" {
  default_rule = "?all"
  add_headers = true
  add_authentication_results = true
  context_variable = "spf_status"
  fail_fallback_string = "SPF validation failure"
  softfail_fallback_string = "SPF validation soft failure"
  nxdomain_override_string = "Could not resolve sender's domain"
  temperror_override_string = "Temporary SPF failure"
}

senderid "senderid" {
  default_rule = "?all"
  default_pra_rule = "?all"
  add_headers = true
  add_authentication_results = true
  context_variable = "senderid_status"
  context_pra_variable = "senderid_pra_status"
  fail_fallback_string = "SPF validation failure"
  softfail_fallback_string = "SPF validation soft failure"
  nxdomain_override_string = "Could not resolve sender's domain"
}
</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
        To alter the SMTP session disposition, use scripts to implement
        policy based on the results of SPF or SenderID validation. For
        more information about the scriptlet module, see
        <a class="xref" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">Section 71.60, “scriptlet - Lua Policy Scripts”</a>.
      </p>
</div>
<p>
      In the default configuration, the SPF modules have the following
      settings:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          <code class="literal">add_headers = true</code>
        </span></dt>
<dd><p>
            Add a <code class="literal">Received-SPF</code> header to the message
            for Mail User Agent based categorization.
          </p></dd>
<dt><span class="term">
          <code class="literal">context_pra_variable =
          "senderid_pra_status"</code>
        </span></dt>
<dd><p>
            What message context variable to store the SenderID PRA
            status in, so that its status may be acted on in another
            module.
          </p></dd>
<dt><span class="term">
          <code class="literal">context_variable = "spf_status"</code>
        </span></dt>
<dd><p>
            What message context variable to store the SPF status in, so
            that its status may be acted on in another module.
          </p></dd>
<dt><span class="term">
          <code class="literal">default_pra_rule = "?all"</code>
        </span></dt>
<dd><p>
            Set the default rule for a domain not implementing SenderID.
            The default behavior is to use <code class="literal">?all</code>, as
            indicated by the SenderID specification.
          </p></dd>
<dt><span class="term">
          <code class="literal">default_rule = "?all"</code>
        </span></dt>
<dd><p>
            Set the default rule for a domain not implementing SPF. The
            default behavior is to use <code class="literal">?all</code>, as
            indicated by the SPF specification.
          </p></dd>
<dt><span class="term">
          <code class="literal">fail_code = 250</code>
        </span></dt>
<dd><p>
            SMTP code to return in the event of a hard failure (i.e.
            ‘<code class="literal">-</code>’). This option is not configurable
            and always defaults to 250 (success). To override this
            value, use a policy script.
          </p></dd>
<dt><span class="term">
          <code class="literal">fail_fallback_string = "SPF validation
          failure"</code>
        </span></dt>
<dd><p>
            Text DSN to return to the client in the event of a failure.
          </p></dd>
<dt><span class="term">
          <code class="literal">nxdomain_code = 550</code>
        </span></dt>
<dd><p>
            SMTP code to return in the event that the sender's domain is
            nonexistent. This option is not configurable and always
            defaults to 250. To override this value, use a policy
            script.
          </p></dd>
<dt><span class="term">
          <code class="literal">nxdomain_override_string = "Could not resolve
          sender's domain"</code>
        </span></dt>
<dd><p>
            Text DSN to return to the client in the event of a
            non-existent sending domain.
          </p></dd>
<dt><span class="term">
          <code class="literal">pass_code = 250</code>
        </span></dt>
<dd><p>
            SMTP code to return in the event of a successful validation.
            This option is not configurable and always defaults to 250
            (success). To override this value, use a policy script.
          </p></dd>
<dt><span class="term">
          <code class="literal">permerror_code = 250</code>
        </span></dt>
<dd><p>
            SMTP code to return in the event of an unexpected error.
            This option is not configurable and always defaults to 250
            (success). To override this value, use a policy script.
          </p></dd>
<dt><span class="term">
          <code class="literal">softfail_code = 250</code>
        </span></dt>
<dd><p>
            SMTP code to return in the event of a soft failure (i.e.
            <code class="literal">~</code>). This option is not configurable and
            always defaults to 250 (success). To override this value,
            use a policy script.
          </p></dd>
<dt><span class="term">
          <code class="literal">softfail_fallback_string = "SPF validation soft
          failure"</code>
        </span></dt>
<dd><p>
            Text DSN to return to the client in the event of a soft
            failure.
          </p></dd>
<dt><span class="term">
          <code class="literal">unknown_code = 250</code>
        </span></dt>
<dd><p>
            SMTP code to return in the event an 'unknown' (i.e.
            ‘<code class="literal">?</code>’) result. For a description of the
            SPF mechanism syntax, see
            <a class="link" href="http://www.openspf.org/SPF_Record_Syntax" target="_top">SPF
            Record Syntax</a>. This option is not configurable and
            always defaults to 250 (success). To override this value,
            use a policy script.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp23139136"></a>71.68.2. Passive Detection</h3></div></div></div>
<p>
      The default action of the SPF module is to accept everything
      (except for non-existent sender domains) and set a context
      variable for taking adminstrative action in other modules.
    </p>
<p>
      SPF is an authentication technology, and as such a positive
      authentication does not necessarily represent that the message is
      'good' or 'wanted', but simply that the sender is who they claim
      to be. Furthermore, since it is IP-based, SPF does not work with
      forwarders, and thus <code class="literal">-all</code> (the indicator that
      the domain sends no mail at all) should only be used for domains
      that absolutely never send any mail. Unfortunately, there is poor
      understanding of the ramifications of <code class="literal">-all</code> even
      within the SPF community and thus it is widely regarded as
      irresponsible to reject on negative results. This does not mean
      that SPF is useless, only that to be effective it needs to be
      combined with some sort of authorization setup, for example a
      reputation, accreditation, or domain-based whitelist/blacklist
      solution. SPF is only part of a comprehensive anti-spam strategy.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.spf.macros"></a>71.68.3. spf_macros</h3></div></div></div>
<p>
      The following macro letters are expanded:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          s = &lt;sender&gt;
        </span></dt>
<dd><p>
            The "s" macro expands to the &lt;sender&gt; argument. It is
            an e-mail address with a localpart, an "@" character, and a
            domain.
          </p></dd>
<dt><span class="term">
          l = localpart of &lt;sender&gt;
        </span></dt>
<dd><p>
            The "l" macro expands to just the localpart of the sender.
            Note also that if the original &lt;sender&gt; had no
            localpart, the localpart is set to "postmaster" in initial
            processing.
          </p></dd>
<dt><span class="term">
          o = domain of &lt;sender&gt;
        </span></dt>
<dd><p>
            The "o" macro expands to just the domain part of the sender.
          </p></dd>
<dt><span class="term">
          d = &lt;domain&gt;
        </span></dt>
<dd><p>
            The "d" macro expands to the current domain on which an SPF
            lookup is being performed.
          </p></dd>
<dt><span class="term">
          i = remote connecting &lt;ip&gt;
        </span></dt>
<dd>
<p>
            For IPv4 addresses, this macro expands to the standard
            dotted-quad format.
          </p>
<p>
            For IPv6 addresses, the "i" macro expands to a dot-format
            address; it is intended for use in %{ir}.
          </p>
</dd>
<dt><span class="term">
          p = the validated domain name of &lt;ip&gt;
        </span></dt>
<dd><p>
            The "p" macro expands to the validated domain name of
            &lt;ip&gt;. The procedure for finding the validated domain
            name is defined in Section 5.5 of the SPF specification. If
            the &lt;domain&gt; is present in the list of validated
            domains, it SHOULD be used. If a subdomain of the
            &lt;domain&gt; is present, it SHOULD be used. Otherwise, any
            name from the list may be used. If there are no validated
            domain names or if a DNS error occurs, the string "unknown"
            is used.
          </p></dd>
<dt><span class="term">
          v = the string "in-addr" for &lt;ip&gt;
        </span></dt>
<dd><p>
            The "v" macro expands the in-addr.arpa form of the
            &lt;ip&gt; that would typically be used for a PTR lookup.
          </p></dd>
<dt><span class="term">
          h = HELO/EHLO domain
        </span></dt>
<dd><p>
            This is the argument passed to the HELO/EHLO command that
            started the current SMTP session.
          </p></dd>
<dt><span class="term">
          c = SMTP client IP (easily readable format)
        </span></dt>
<dd><p>
            The "c" macro expands similarly to the "i" macro with the
            noted exception that IPv6 addresses are printed in hex, not
            dotted decimal.
          </p></dd>
<dt><span class="term">
          t = current timestamp
        </span></dt>
<dd><p>
            The "t" macro expands to the decimal representation of the
            approximate number of seconds since the Epoch (Midnight,
            January 1st, 1970, UTC). This is the same value as is
            returned by the POSIX time() function.
          </p></dd>
<dt><span class="term">
          &lt;number&gt; = zero or more digits
        </span></dt>
<dd><p>
            The number transformer indicates the number of right-hand
            parts to use, after optional reversal. If a number is
            specified, the value MUST be nonzero. If no numbers are
            specified or if the value specifies more parts than are
            available, all the available parts are used.
          </p></dd>
<dt><span class="term">
          'r' = reverse value, splitting on dots by default
        </span></dt>
<dd><p>
            The 'r' transformer indicates a reversal operation. The
            original string is tokenized on the given delimiter, the
            tokens are reassembled in reverse order with the given
            delimiter.
          </p></dd>
</dl></div>
<p>
      Within the SPF system, macros may be expanded as the SPF
      specification dictates by enclosing the desired macro arguments
      within <code class="code">%{macro}</code>. The <code class="code">spf_macros</code> module
      also exports these macros as a general macro language that can be
      used within other modules. When SPF macros are used in that
      context, they must be name-spaced as <code class="code">%{spfv1:macro}</code>
      so as not to conflict with other macro languages.
    </p>
<p>
      SPF macros may be followed immediately by the following
      transformation operations. If transformers or delimiters are
      provided, the replacement value for a macro letter is split into
      parts. After performing any reversal operation and/or removal of
      left-hand parts, the parts are rejoined using "." and not the
      original splitting characters.
    </p>
<p>
      By default, strings are split on "." (dots). Note that no special
      treatment is given to leading, trailing or consecutive delimiters,
      and so the list of parts may contain empty strings. Macros may
      specify delimiter characters, which are used instead of ".".
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp23174592"></a>71.68.4. SPF Macro Examples</h3></div></div></div>
<p>
      These macro examples are taken directly from the SPF
      specification.
    </p>
<pre class="programlisting">
      The &lt;sender&gt; is strong-bad@email.example.com.
      The IPv4 SMTP client IP is 192.0.2.3.
      The IPv6 SMTP client IP is 2001:DB8::CB01.
      The PTR domain name of the client IP is mx.example.org.

   macro                       expansion
   -------  ----------------------------
   %{s}     strong-bad@email.example.com
   %{o}                email.example.com
   %{d}                email.example.com
   %{d4}               email.example.com
   %{d3}               email.example.com
   %{d2}                     example.com
   %{d1}                             com
   %{dr}               com.example.email
   %{d2r}                  example.email
   %{l}                       strong-bad
   %{l-}                      strong.bad
   %{lr}                      strong-bad
   %{lr-}                     bad.strong
   %{l1r-}                        strong

   macro-string                                               expansion
   --------------------------------------------------------------------
   %{ir}.%{v}._spf.%{d2}             3.2.0.192.in-addr._spf.example.com
   %{lr-}.lp._spf.%{d2}                  bad.strong.lp._spf.example.com

   %{lr-}.lp.%{ir}.%{v}._spf.%{d2}
                       bad.strong.lp.3.2.0.192.in-addr._spf.example.com

   %{ir}.%{v}.%{l1r-}.lp._spf.%{d2}
                           3.2.0.192.in-addr.strong.lp._spf.example.com

   %{d2}.trusted-domains.example.net
                                example.com.trusted-domains.example.net

   IPv6:
   %{ir}.%{v}._spf.%{d2}                               1.0.B.C.0.0.0.0.
   0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.8.B.D.0.1.0.0.2.ip6._spf.example.com
</pre>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.smtpapi.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.static_routes.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.67. smtpapi – SMTP Engagement Tracking </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.69. static-routes - Static Routes</td>
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
