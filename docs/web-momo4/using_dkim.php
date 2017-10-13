<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="prev" href="using_domainkeys.validation.php" title="22.2. DomainKeys Validation">
<link rel="next" href="using_dkim.validation.php" title="23.2. DKIM Validation">
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
<tr><th colspan="3" align="center">Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="using_domainkeys.validation.php">Prev</a> </td>
<th width="60%" align="center">Part III. Configuring Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="using_dkim.validation.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="using_dkim"></a>Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="using_dkim.php#using_dkim.signing">23.1. DKIM Signing</a></span></dt>
<dt><span class="section"><a href="using_dkim.validation.php">23.2. DKIM Validation</a></span></dt>
</dl>
</div>
<p>
    DomainKeys Identified Mail (DKIM) is a mechanism that allows
    verification of the source and contents of email messages. Using
    DKIM, sending domains can include a cryptographic signature in
    outgoing email messages. A message's signature may be verified by
    any (or all) MTAs during transit and by the Mail User Agent (MUA)
    upon delivery. A verified signature indicates the message was sent
    by the sending domain and the message was not altered in transit. A
    signature that fails verification indicates the message may have
    been altered during transit or that the sender is fraudulently using
    the sending domain name. Unsigned messages contain no guarantee
    about the sending domain or integrity of the message contents. For
    more information about DKIM, see
    <a class="link" href="http://tools.ietf.org/html/draft-ietf-dkim-base-00" target="_top">
    draft-ietf-dkim-base-00</a>.
  </p>
<p>
    To determine subsequent handling of incoming email messages, service
    providers may use the success/failure of DKIM signature verification
    or the lack of a DKIM signature. The provider can drop invalid
    messages without impacting the final recipient, exposing the results
    of DKIM verification directly to the recipient, or exposing the lack
    of a signature directly to the recipient. Additionally, service
    providers may use signature verification as the basis for persistent
    reputation profiles to support anti-spam policy systems or to share
    with other service providers.
  </p>
<p>
    <a class="xref" href="using_dkim.php#figure_dkim_schematic" title="Figure 23.1. DKIM schematic">Figure 23.1, “DKIM schematic”</a> gives a graphical view of
    how DKIM works.
  </p>
<div class="figure-float">
<div class="figure">
<a name="figure_dkim_schematic"></a><p class="title"><b>Figure 23.1. DKIM schematic</b></p>
<div class="figure-contents"><div class="mediaobject"><img src="images/gr_dkeys_1.gif"></div></div>
</div>
<br class="figure-break">
</div>
<h2>
<a name="idp2443696"></a>For Sending Servers</h2>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Set up
      </p>
<p>
        The domain owner (typically the team running the email systems
        within a company or service provider) generates a public/private
        key pair to use for signing all outgoing messages (multiple key
        pairs are allowed). The public key is published in DNS, and the
        private key is made available to their DKIM-enabled outbound
        email servers. This is step "A" in the diagram to the right.
      </p>
</li>
<li class="listitem">
<p>
        Signing
      </p>
<p>
        When each email is sent by an authorized end-user within the
        domain, the DKIM-enabled email system automatically uses the
        stored private key to generate a digital signature of the
        message. This signature is included in a DKIM-Signature header
        and prepended to the email. The email is then sent on to the
        recipient's mail server. This is step "B" in the diagram to the
        right.
      </p>
</li>
</ol></div>
<h2>
<a name="idp2693888"></a>For Receiving Servers</h2>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Preparation
      </p>
<p>
        The DKIM-enabled receiving email system extracts and parses the
        message's DKIM-Signature header. The signing domain asserted by
        the header is used to fetch the signer's public key from DNS.
        This is step "C" in the diagram to the right.
      </p>
</li>
<li class="listitem">
<p>
        Verification
      </p>
<p>
        The signer's public key is then used by the receiving mail
        system to verify that the signature contained in the
        DKIM-Signature header was generated by the sending domain's
        private key. This proves that the email was truly sent by, and
        with the permission of, the claimed sending domain. It also
        provides that all the headers signed by the sending domain and
        the message body were not altered during transit.
      </p>
</li>
<li class="listitem">
<p>
        Delivery
      </p>
<p>
        The receiving email system uses the outcome of signature
        verification along with other local policies and tests to
        determine the disposition of the message. If local policy does
        not prohibit delivery, the message is passed to the user's
        inbox. Optionally, the email recipient may be informed of the
        results of the signature verification. This is step "D" in the
        diagram on the right.
      </p>
</li>
</ol></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="using_dkim.signing"></a>23.1. DKIM Signing</h2></div></div></div>
<p>
      Enabling DKIM signing in Momentum is a two-step process:
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
          Generate public and private keys for each signing domain and
          create the DKIM public key DNS records for those domains.
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; "><li class="listitem"><p>
              For instructions, see
              <a class="xref" href="using_dkim.php#using_dkim.generating" title="23.1.1. Generating DKIM Keys">Section 23.1.1, “Generating DKIM Keys”</a>
            </p></li></ul></div>
</li>
<li class="listitem">
<p>
          Configure Momentum to conditionally attach DKIM signatures to
          emails that are submitted into the MTA.
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              Load the opendkim module. For details, see
              <a class="xref" href="modules.opendkim.php" title="71.50. opendkim – Open Source DKIM">Section 71.50, “opendkim – Open Source DKIM”</a>.
            </p></li>
<li class="listitem"><p>
              Configure the opendkim module to sign messages or write
              policy to do so at runtime using Lua functions. For
              details, see
              <a class="xref" href="modules.opendkim.php#modules.opendkim.lua.functions" title="71.50.2. Lua Functions">Section 71.50.2, “Lua Functions”</a>.
            </p></li>
<li class="listitem"><p>
              Set the <code class="option">opendkim_sign</code> option to
              <code class="literal">true</code> in the appropriate scope to enable
              DKIM signing on a global, per domain, per binding, or per
              binding-per domain basis. For details, see
              <a class="xref" href="conf.ref.opendkim_sign.php" title="opendkim_sign"><span class="refentrytitle">opendkim_sign</span></a>.
            </p></li>
</ul></div>
</li>
</ol></div>
<p>
      To control how OpenDKIM signing statistics are recorded, see
      <a class="xref" href="conf.ref.signing_stats.php" title="signing_stats"><span class="refentrytitle">signing_stats</span></a>. The console
      command <a class="xref" href="console_commands.signing_stats.php" title="signing_stats"><span class="refentrytitle">signing_stats</span></a>
      is used to examine signing statistics and
      <a class="xref" href="console_commands.signing_stats_reset.php" title="signing_stats reset"><span class="refentrytitle">signing_stats reset</span></a> resets
      statistics.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="using_dkim.generating"></a>23.1.1. Generating DKIM Keys</h3></div></div></div>
<p>
        The OpenSSL cryptography toolkit is used to generate RSA keys
        for DKIM. As an example, the following openssl commands are used
        to generate public and private keys for the domain
        <code class="literal">example.com</code> with a selector called
        <code class="literal">dkim1024</code>. Typically, the directory
        <code class="filename">/opt/msys/ecelerity/etc/conf/dkim</code> is used
        for key storage.
      </p>
<pre class="screen">
# mkdir -p /opt/msys/ecelerity/etc/conf/dkim/example.com
# openssl genrsa -out /opt/msys/ecelerity/etc/conf/dkim/example.com/dkim1024.key 1024
# openssl rsa -in /opt/msys/ecelerity/etc/conf/dkim/example.com/dkim1024.key \
        -out /opt/msys/ecelerity/etc/conf/dkim/example.com/dkim1024.pub -pubout -outform PEM
</pre>
<p>
        All DKIM verification implementations must support key sizes of
        512, 768, 1024, 1536, and 2048 bits. A signer may choose to sign
        messages using any of these sizes and may use a different size
        for different selectors. Larger key sizes provide greater
        security but impose higher CPU costs during message signing and
        verification.
      </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
          Note that Google requires all senders to sign with a 1024 bit
          or greater DKIM key size.
        </p>
</div>
<p>
        The resulting public key should look similar to:
      </p>
<pre class="screen">
-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCrZXNwzXOk0mRqPcgSUOnmVHro
rg/BZHybpiBoDS/g6IaMjmVwaQf2E72x9yDBTgiUBtTCqydQRZJ3EbfYfvo+WAHq
2yz6HKR0XCwMDSE2S3brVe7mbV/GPEvnCuFPPEVjbfL4w0tEAd8Seb5h07uVQqy1
Q7jIOnF5fG9AQNd1UQIDAQAB
-----END PUBLIC KEY-----
</pre>
<p>
        Once the public and private keys have been generated, create a
        DNS text record for
        <code class="literal">dkim1024._domainkey.example.com</code>. The DNS
        record contains several DKIM "tag=value" pairs and should be
        similiar to the record shown below:
      </p>
<pre class="screen">
dkim1024._domainkey.example.com. 86400 IN TXT
"v=DKIM1; k=rsa; h=sha256; t=y; p=MHww...QAB"
</pre>
<p>
        DKIM DNS text record tags are defined below (do not include the
        quotes below when including a tag value in the DNS text record):
      </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
            v=
          </span></dt>
<dd><p>
              DKIM key record version. The value of this tag must be set
              to "DKIM1".
            </p></dd>
<dt><span class="term">
            k=
          </span></dt>
<dd><p>
              Key type. This tag defines the syntax and semantics of the
              p= tag value. Currently, this tag should have the value
              "rsa".
            </p></dd>
<dt><span class="term">
            h=
          </span></dt>
<dd><p>
              Hash algorithm. Currently, this tag should have the value
              "sha1" or "sha256".
            </p></dd>
<dt><span class="term">
            t=
          </span></dt>
<dd><p>
              Flags. The only value currently defined is "y". If
              specified, this tag indicates the signing domain is
              testing DKIM.
            </p></dd>
<dt><span class="term">
            p=
          </span></dt>
<dd><p>
              DKIM public key value generated as described above.
            </p></dd>
<dt><span class="term">
            s=
          </span></dt>
<dd><p>
              Service Type. If specified, this tag should be set to "*"
              or "email" which represents all service types or the email
              service type. Currently, "email" is the only service using
              this key.
            </p></dd>
<dt><span class="term">
            n=
          </span></dt>
<dd><p>
              Notes. If specified, the value of this tag is
              quoted-printable text used as a note to anyone reading the
              DNS text record. The tag is not interpreted by DKIM
              verification and should be used sparingly because of space
              limitations of the DNS text record.
            </p></dd>
</dl></div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="using_domainkeys.validation.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.configuration.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="using_dkim.validation.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">22.2. DomainKeys Validation </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 23.2. DKIM Validation</td>
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
