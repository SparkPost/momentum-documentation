<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.28. domainkeys – Yahoo! DomainKeys</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.dnsbuf.php" title="71.27. dnsbuf – Dynamically Set the DNS UDP Buffer Size">
<link rel="next" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">
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
<tr><th colspan="3" align="center">71.28. domainkeys – Yahoo! DomainKeys</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.dnsbuf.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.ds_core.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.domainkeys"></a>71.28. domainkeys – Yahoo! DomainKeys</h2></div></div></div>
<a class="indexterm" name="idp21294224"></a><p>
    The domainkeys module, comprised of dk_sign and dk_validate, add
    Yahoo! DomainKeys capabilities to Momentum. Together, these modules
    implement the DomainKeys standard, providing for conditionally
    signing outbound messages and validating DomainKeys signatures for
    inbound messages.
  </p>
<p>
    DomainKeys is a technology proposal that can bring "yes or no" back
    to the decision process by giving email providers a mechanism for
    verifying both the domain of each email sender and the integrity of
    the messages sent (i.e,. that they were not altered during transit).
    For a general overview of DomainKeys signing and validation, as well
    as how to generate DomainKeys public and private keypairs, see
    <a class="xref" href="using_domainkeys.php" title="Chapter 22. Using Yahoo! DomainKeys">Chapter 22, <i>Using Yahoo! DomainKeys</i></a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.domainkeys.signing"></a>71.28.1. Signing Configuration</h3></div></div></div>
<p>
      The dk_sign module provides the ability to conditionally attach
      DomainKeys signatures to emails that are submitted into the MTA.
    </p>
<p>
      In your <code class="filename">ecelerity.conf</code> file, set
      <a class="xref" href="conf.ref.domainkeys.php" title="domainkeys"><span class="refentrytitle">domainkeys</span></a> in the appropriate scope and
      configure the dk_sign module. The following is an example
      configuration:
    </p>
<div class="example">
<a name="example.dk_sign.3"></a><p class="title"><b>Example 71.44. dk_sign module</b></p>
<div class="example-contents"><pre class="programlisting">
dk_sign "dk_sign1" {
  sign_condition = "can_relay"
  canon = "nofws"
  digest = "rsa-sha1"
  key = "/opt/msys/ecelerity/etc/conf/dk/%{d}/%{s}.key"
  dk_domain "example.com" {
    selector = "s1024"
  }
  dk_domain "corp.example.com" {
    selector = "s1024"
    base_domain = "example.com"
  }
}
</pre></div>
</div>
<br class="example-break"><p>
      The following are the configuration options defined by the dk_sign
      module. Any option can appear as a dk_sign or dk_domain scope
      configuration option with the exception of the
      <code class="option">base_domain</code> option which can only appear within
      the <code class="literal">dk_domain</code> scope.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          base_domain
        </span></dt>
<dd><p>
            Specifies which domain should be used for the signing.
            DomainKeys allows for emails to be signed by a parent
            domain. For example, a mail from
            <code class="literal">test@corp.example.com</code> can be signed in
            the <code class="literal">example.com</code> domain. This option is
            only valid within the <code class="literal">dk_domain</code> scope.
          </p></dd>
<dt><span class="term">
          canon
        </span></dt>
<dd><p>
            Specifies the canonicalization that should be performed on
            the email before digesting and signing the message. The two
            supported canonicalizations are <code class="literal">simple</code>
            and <code class="literal">nofws</code>. Due to the way MTAs operate,
            the simple canonicalization is very fragile and prone to
            failure due to header rewriting and rewrapping.
            <code class="literal">nofws</code> canonicalization should always be
            used instead of <code class="literal">simple</code>. The
            <code class="literal">nofws</code> canonicalization removes all
            whitespace within the body and the eighth bit of the data
            before calculating the hash.
          </p></dd>
<dt><span class="term">
          digest
        </span></dt>
<dd><p>
            Specifies the algorithms that should be used to create the
            message digest and resulting signature. The only supported
            mechanism is <code class="literal">rsa-sha1</code>.
          </p></dd>
<dt><span class="term">
          <em class="replaceable"><code>domain</code></em> [ ... ]
        </span></dt>
<dd><p>
            The system will automatically find the appropriate key if a
            top-level key file is defined and the domains use the same
            selector. If the selectors differ, a domain subconfiguration
            must be specified. When a message is received, the
            responsible sender is determined by looking for the domain
            part of the email address used in the "Sender" or "From"
            header (in that order). That subconfiguration for that
            domain is used for signing.
          </p></dd>
<dt><span class="term">
          headerlist
        </span></dt>
<dd><p>
            The configuration directive is optional and instructs
            Momentum that only the specified headers should be signed in
            the order specified during digestion. This option can be
            used to sign only a limited subset of headers. By default,
            the implementation will extract all appropriate headers,
            sign them, and manufacture a headerlist for use with that
            message. The final headerlist describing the order and
            inclusion of headers will be included in the
            DomainKey-Signature as the h= value.
          </p></dd>
<dt><span class="term">
          key
        </span></dt>
<dd>
<p>
            This option is required and specifies the location of the
            RSA private key file on disk. The key file must be readable
            by the user that Momentum is running as and must be in
            Privacy Enhanced Mail (PEM) format.
          </p>
<p>
            The file name has two expandable variables that may be used
            to ease deployment over multiple domains: %{d} expands to
            the responsible domain and %{s} expands to the selector.
          </p>
</dd>
<dt><span class="term">
          keycache_size
        </span></dt>
<dd><p>
            Key cache size expressed as the number of keys. Default
            value is 2048.
          </p></dd>
<dt><span class="term">
          neg_keycache_ttl
        </span></dt>
<dd><p>
            In the event that the key is not already in the cache, the
            amount of time in seconds before retrieving it again.
            Default value is 3600.
          </p></dd>
<dt><span class="term">
          pos_keycache_ttl
        </span></dt>
<dd><p>
            Total time in seconds for items to stay in the cache before
            fetching them again. Default value is 300.
          </p></dd>
<dt><span class="term">
          selector
        </span></dt>
<dd><p>
            Specifies the DomainKeys selector to be used for signing.
            The selector is required per the DomainKeys specification.
            Selectors allow for easier key management as multiple keys
            can be phased in and out over time. When accessing the
            appropriate public key for a signature, the TXT record for
            {selector}._domainkey.{domain} is resolved.
          </p></dd>
<dt><span class="term">
          sign_condition
        </span></dt>
<dd>
<p>
            Specifies which validation context variable must exist as a
            predicate to signing messages. When an SMTP client performs
            an SMTP AUTH action, the
            <a class="link" href="policy.context.variables.php#predefined-context-conn-global" title="Table 63.1. Global Predefined Connection Context Variables">auth_user</a>
            connection context variable will be set to the username used
            during authorization. When an SMTP client is allowed to
            relay through Momentum because of an entry in
            <a class="xref" href="conf.ref.relay_hosts.php" title="relay_hosts"><span class="refentrytitle">relay_hosts</span></a> option or a
            <code class="option">relaying</code> declaration in an ESMTP_Listener
            IP access control list, the
            <a class="link" href="policy.context.variables.php#predefined-context-conn-global" title="Table 63.1. Global Predefined Connection Context Variables">can_relay</a>
            connection context variable is set to "true."
          </p>
<p>
            In most corporate environments,
            <code class="option">sign_condition</code> should be
            <code class="literal">auth_user</code>. In large sending architectures
            where the relaying SMTP clients are implicitly trusted,
            <code class="option">sign_condition</code> should be
            <code class="literal">can_relay</code>. In highly-structured sending
            architectures where ecstream injection is the only method,
            this option can be omitted entirely, with the result that
            any message for which a key exists will be signed.
          </p>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.domainkeys.validation"></a>71.28.2. Validation Configuration</h3></div></div></div>
<p>
      The dk_validate module performs validation on all inbound messages
      received via SMTP.
    </p>
<p>
      In your <code class="filename">ecelerity.conf</code> file, load the
      dk_validate module, as shown:
    </p>
<div class="example">
<a name="example.dk_validate.3"></a><p class="title"><b>Example 71.45. dk_validate module</b></p>
<div class="example-contents"><pre class="programlisting">
dk_validate "dk_validate1" {
}</pre></div>
</div>
<br class="example-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.domainkeys.context.variables"></a>71.28.3. Message Context Variables</h3></div></div></div>
<p>
      The domainkeys module sets one message context variable:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          dk_status
        </span></dt>
<dd>
<p>
            Returns the domain key status, which can have one of the
            following values:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                good
              </p></li>
<li class="listitem"><p>
                bad
              </p></li>
<li class="listitem"><p>
                bad (key type)
              </p></li>
<li class="listitem"><p>
                bad (no key)
              </p></li>
<li class="listitem"><p>
                bad (key revoked)
              </p></li>
<li class="listitem"><p>
                bad (public key)
              </p></li>
<li class="listitem"><p>
                bad (malformed signature)
              </p></li>
<li class="listitem"><p>
                bad (unsupported query type)
              </p></li>
</ul></div>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.domainkeys.lua.functions"></a>71.28.4. Lua Functions</h3></div></div></div>
<p>
      Loading the domainkeys module exposes the following Lua functions:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.dk.get_responsible_domain.php" title="msys.validate.dk.get_responsible_domain"><span class="refentrytitle">msys.validate.dk.get_responsible_domain</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.dk.sign.php" title="msys.validate.dk.sign"><span class="refentrytitle">msys.validate.dk.sign</span></a>
        </p></li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.domainkeys.console"></a>71.28.5. Console Commands</h3></div></div></div>
<p>
      The domainkeys module can be controlled through the
      <code class="filename">ec_console</code>. The following commands are
      available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          dk_sign:<em class="replaceable"><code>dk_sign1</code></em> stats
        </span></dt>
<dd><p>
            Display statistics relating to domain key signing.
          </p></dd>
<dt><span class="term">
          dk_sign:<em class="replaceable"><code>dk_sign1</code></em> flush keycache
        </span></dt>
<dd><p>
            This command flushes all entries from the keycache. If you
            alter the private key run this command after doing so.
          </p></dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.dnsbuf.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.ds_core.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.27. dnsbuf – Dynamically Set the DNS UDP Buffer Size </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.29. ds_core - Datasource Query Core</td>
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
