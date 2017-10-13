<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.50. opendkim – Open Source DKIM</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="modules, opendkim, signing, validating">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.mxip.php" title="71.49. mxip - IP Addresses In MX Records">
<link rel="next" href="modules.outbound_audit.php" title="71.51. outbound_audit – Outbound traffic analytics">
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
<tr><th colspan="3" align="center">71.50. opendkim – Open Source DKIM</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.mxip.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.outbound_audit.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.opendkim"></a>71.50. opendkim – Open Source DKIM</h2></div></div></div>
<p>
    The opendkim module adds OpenDKIM capabilities to Momentum. It
    implements the DKIM standard and provides for signing email messages
    on a global, per domain, per binding, or per binding-per domain
    basis. You can choose to sign messages through module configuration
    settings or do so at runtime using Lua functions. Validation of DKIM
    messages with the opendkim module is driven only through Lua policy.
  </p>
<p>
    OpenDKIM is an open source implementation of the Domain Keys
    Identified Mail (DKIM) sender authentication system that implements
    the DKIM service. For a full description, see
    <a class="link" href="http://www.opendkim.org/" target="_top">OpenDKIM.org</a>.
    For a general overview of DKIM signing and validation, as well as
    how to generate DKIM public and private keypairs, see
    <a class="xref" href="using_dkim.php" title="Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures">Chapter 23, <i>Using DomainKeys Identified Mail (DKIM) Signatures</i></a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp22328128"></a>71.50.1. Configuration</h3></div></div></div>
<p>
      In your <code class="filename">ecelerity.conf</code> file, set
      <a class="xref" href="conf.ref.opendkim_sign.php" title="opendkim_sign"><span class="refentrytitle">opendkim_sign</span></a> in the appropriate scope
      and configure the opendkim module. The following is an example
      configuration:
    </p>
<div class="example">
<a name="modules.opendkim.example"></a><p class="title"><b>Example 71.74. opendkim Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
Binding_Group "opendkim_signing" {
  opendkim_sign = "true"

  binding "foo"{
    domain "test1.example.com" { opendkim_sign = "true" }
    domain "test2.example.com" { opendkim_sign = "false" }
  }
}

opendkim "opendkim1" {
  header_canon = "relaxed"
  body_canon = "relaxed"
  headerlist = ("from", "to", "message-id", "date", "subject", "Content-Type")
  digest = "rsa-sha256"
  key = "/opt/msys/ecelerity/etc/conf/dkim/%{d}/%{s}.key"
  dkim_domain "ectest.example.com" {
    selector = "dkim-s1024"
  }
}
# reference a Lua script to sign using a script
scriptlet "scriptlet" {
  ...
  script "opendkim_sign" {
    source = "luaScripts.opendkim_sign"
  }
}
</pre></div>
</div>
<br class="example-break"><p>
      This example enables DKIM signing through the module configuration
      settings and at runtime using the Lua script
      <code class="literal">opendkim_sign.lua</code>. DKIM signing using module
      configuration options is controlled by the scope of
      <code class="option">opendkim_sign</code> and by the
      <code class="option">dkim_domain</code> scope.
    </p>
<p>
      The following are the configuration options defined by this
      module:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          base_domain
        </span></dt>
<dd><p>
            Specifies which domain should be used for signing. DKIM
            allows for emails to be signed by a parent domain. For
            example, an email from
            <code class="literal">test@corp.example.com</code> can be signed in
            the <code class="literal">example.com</code> domain. This option is
            only valid within the <code class="option">dkim_domain</code> scope.
          </p></dd>
<dt><span class="term">
          body_canon
        </span></dt>
<dd><p>
            Specifies the canonicalization that should be performed on
            the email body before digesting and signing the message. The
            two supported canonicalizations are
            <code class="literal">simple</code> and <code class="literal">relaxed</code>.
            Default value is <code class="literal">simple</code>.
          </p></dd>
<dt><span class="term">
          body_length_limit
        </span></dt>
<dd><p>
            Whether or not there is a limit on the length of the email
            body. Default value is <code class="literal">false</code>.
          </p></dd>
<dt><span class="term">
          copy_headers
        </span></dt>
<dd><p>
            This option causes all of the headers that were selected for
            signing by <code class="option">headerlist</code> to be
            quoted-printable encoded and placed in the
            <code class="literal">z=</code> tag of the
            <code class="literal">DKIM-Signature</code> header. This can be useful
            for debugging. Default value is <code class="literal">false</code>.
          </p></dd>
<dt><span class="term">
          digest
        </span></dt>
<dd><p>
            Specifies the algorithms that should be used to create the
            message digest and the resulting signature. The supported
            mechanisms are <code class="literal">rsa-sha1</code> and
            <code class="literal">rsa-sha256</code>. Default value is
            <code class="literal">rsa-sha256</code>.
          </p></dd>
<dt>
<a name="modules.opendkim.dkim_domain"></a><span class="term">
          dkim_domain
        </span>
</dt>
<dd>
<p>
            This <span class="emphasis"><em>option</em></span> is a scope within the
            opendkim scope. It is used to define a selector or signing
            domain for specified domains. Use this option in the
            following way:
          </p>
<pre class="programlisting">
opendkim "opendkim1" {
  ...
  selector = "dkim1024"  # default selector
  ...
  
  dkim_domain "corp.example.com" {
    selector = "dkim-s1024"
    base_domain = "example.com"
  }
}
</pre>
<p>
            The following options are valid in this scope:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                <code class="option">base_domain</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">body_canon</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">body_length_limit</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">digest</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">header_canon</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">key</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">key_cache_size</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">neg_keycache_ttl</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">pos_keycache_ttl</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">selector</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">sign_condition</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">testing</code>
              </p></li>
</ul></div>
</dd>
<dt><span class="term">
          header_canon
        </span></dt>
<dd><p>
            Specifies the canonicalization that should be performed on
            the email headers before digesting and signing the message.
            The two supported canonicalizations are
            <code class="literal">simple</code> and <code class="literal">relaxed</code>.
            Due to the way MTAs operate, the simple canonicalization is
            very fragile and prone to failure because of header
            rewriting and rewrapping. Default value is
            <code class="literal">simple</code>.
          </p></dd>
<dt>
<a name="modules.opendkim.headerlist"></a><span class="term">
          headerlist
        </span>
</dt>
<dd>
<p>
            The headerlist configuration directive is required. During
            digestion, DKIM will sign all headers specified in the
            headerlist in the order they are specified. Although there
            is no default headerlist, the DKIM specification requires
            signing the "From" header and any header field that
            describes the role of the signer such as "Sender" or
            "Resent-From". The specification also recommends signing
            "Subject", "Date", all MIME header fields, and all existing,
            non-repeatable header fields.
          </p>
<p>
            The headerlist itself is a comma or space separated list of
            header field names such as <code class="code">headerlist = ( "From",
            "Subject", "Content-Type" )</code>.
          </p>
<p>
            DKIM provides for a signer to sign a non-existent header.
            This mechanism can be used to prevent the header from being
            added to the message during transit. If the header is added
            during transit, the DKIM signature will not verify. Using
            this mechanism, the signer asserts that the header was not
            there when the message was signed. There is no default value
            for this option.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              In the OpenDKIM API, the header list is a global setting;
              consequently, you cannot change the header list per
              message.
            </p>
</div>
</dd>
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
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              Note that Google requires all senders to sign with a 1024
              bit or greater DKIM key size.
            </p>
</div>
<p>
            The file name has two expandable variables that may be used
            to ease deployment over multiple domains: %{d} expands to
            the responsible domain and %{s} expands to the selector.
          </p>
<p>
            If you are working within a cluster environment, you may
            want to consider setting the <code class="option">key</code> option to
            a directory that is under revision control. The recommended
            directory is
            <code class="filename">/opt/msys/ecelerity/etc/conf/dkim/</code>.
            Since the <code class="filename">conf</code> directory is under
            revision control anything stored below this directory will
            also be under revision control. Any files in this directory
            are visible to both the default node configuration and any
            node-specific configuration.
          </p>
</dd>
<dt><span class="term">
          keycache_size
        </span></dt>
<dd><p>
            The key cache size expressed as the number of keys. Default
            value is <code class="literal">2048</code>.
          </p></dd>
<dt><span class="term">
          lifetime
        </span></dt>
<dd><p>
            Specifies the length of time a signature remains valid. An
            expiration value is included in the signature header added
            to each email message. The lifetime of the signature begins
            at signing and expires some time later as determined by the
            <code class="option">lifetime</code> option value. A message will not
            verify after the signature lifetime has expired. The value
            of this option is specified in hours. Default value is
            <code class="literal">0</code>, indicating that the module does not
            mark the signature with <span class="emphasis"><em>any</em></span> expiration
            timestamp.


          </p></dd>
<dt><span class="term">
          neg_keycache_ttl
        </span></dt>
<dd><p>
            In the event that the key is not already in the cache, the
            amount of time in seconds before retrieving it again.
            Default value is <code class="literal">3600</code>.
          </p></dd>
<dt><span class="term">
          oversign_headerlist
        </span></dt>
<dd><p>
            This option asserts headers. It has no default value.
          </p></dd>
<dt><span class="term">
          pos_keycache_ttl
        </span></dt>
<dd><p>
            Total time in seconds for items to stay in the cache before
            fetching them again. Default value is
            <code class="literal">300</code>.
          </p></dd>
<dt><span class="term">
          selector
        </span></dt>
<dd><p>
            Specifies the DKIM selector to be used for signing. During
            verification, the <code class="option">selector</code> is used, along
            with the signing domain, to retrieve the signing domain's
            public key. The key retrieved will be contained in the DNS
            TXT record for {selector}._domainkey.{domain}. There is no
            default value for this option.
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
            context key will be set to the username used during
            authorization. When an SMTP client is allowed to relay
            through Momentum because of an entry in the
            <a class="xref" href="conf.ref.relay_hosts.php" title="relay_hosts"><span class="refentrytitle">relay_hosts</span></a> option or a
            <code class="literal">relaying</code> declaration in an ESMTP_Listener
            IP access control list, the
            <a class="link" href="policy.context.variables.php#predefined-context-conn-global" title="Table 63.1. Global Predefined Connection Context Variables">can_relay</a>
            context key is set to <code class="literal">true</code>.
          </p>
<p>
            In most corporate environments,
            <code class="option">sign_condition</code> should be
            <code class="literal">auth_user</code>. In large sending architectures
            where the relaying SMTP clients are implicitly trusted,
            <code class="option">sign_condition</code> should be
            <code class="literal">can_relay</code>. There is no default value for
            this option.
          </p>
</dd>
<dt><span class="term">
          skip_headerlist
        </span></dt>
<dd><p>
            Array of the headers that will be skipped. For more
            information about headers, see
            <a class="xref" href="modules.opendkim.php#modules.opendkim.headerlist">
          headerlist
        </a>.
            There is no default value for this option.
          </p></dd>
<dt><span class="term">
          testing
        </span></dt>
<dd><p>
            Set this option to <code class="literal">true</code> if you are not in
            a production environment. Default value is
            <code class="literal">false</code>.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.opendkim.lua.functions"></a>71.50.2. Lua Functions</h3></div></div></div>
<p>
      You can sign OpenDKIM domains using module configuration settings
      or at runtime using Lua functions. The Lua APIs mirror the
      OpenDKIM API. In order to sign at runtime, you must create a Lua
      policy script and reference it from the
      <a class="link" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">scriptlet</a> module as shown
      in <a class="xref" href="modules.opendkim.php#modules.opendkim.example" title="Example 71.74. opendkim Configuration">Example 71.74, “opendkim Configuration”</a>.
    </p>
<p>
      Verification of DKIM messages is only driven through Lua policy.
    </p>
<p>
      Loading the opendkim module exposes the following Lua functions:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_num_sigs.php" title="msys.validate.opendkim.get_num_sigs"><span class="refentrytitle">msys.validate.opendkim.get_num_sigs</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig.php" title="msys.validate.opendkim.get_sig"><span class="refentrytitle">msys.validate.opendkim.get_sig</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_canons.php" title="msys.validate.opendkim.get_sig_canons"><span class="refentrytitle">msys.validate.opendkim.get_sig_canons</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_domain.php" title="msys.validate.opendkim.get_sig_domain"><span class="refentrytitle">msys.validate.opendkim.get_sig_domain</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_errorstr.php" title="msys.validate.opendkim.get_sig_errorstr"><span class="refentrytitle">msys.validate.opendkim.get_sig_errorstr</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_flags.php" title="msys.validate.opendkim.get_sig_flags"><span class="refentrytitle">msys.validate.opendkim.get_sig_flags</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php" title="msys.validate.opendkim.get_sig_hdrsigned"><span class="refentrytitle">msys.validate.opendkim.get_sig_hdrsigned</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_identity.php" title="msys.validate.opendkim.get_sig_identity"><span class="refentrytitle">msys.validate.opendkim.get_sig_identity</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_keysize.php" title="msys.validate.opendkim.get_sig_keysize"><span class="refentrytitle">msys.validate.opendkim.get_sig_keysize</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_selector.php" title="msys.validate.opendkim.get_sig_selector"><span class="refentrytitle">msys.validate.opendkim.get_sig_selector</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.get_sig_signalg.php" title="msys.validate.opendkim.get_sig_signalg"><span class="refentrytitle">msys.validate.opendkim.get_sig_signalg</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.sign.php" title="msys.validate.opendkim.sign"><span class="refentrytitle">msys.validate.opendkim.sign</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.validate.opendkim.verify.php" title="msys.validate.opendkim.verify"><span class="refentrytitle">msys.validate.opendkim.verify</span></a>
        </p></li>
</ul></div>
<p>
      The following OpenDKIM objects are passed in to or returned by
      these functions:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">DKIM</code> – A signing or verifying context
          for a message
        </p></li>
<li class="listitem"><p>
          <code class="literal">DKIM_SIGINFO</code> – Private handle
          referencing information about a particular signature on a
          signed message
        </p></li>
<li class="listitem"><p>
          <code class="literal">DKIM_STAT</code> – Return value or status
        </p></li>
</ul></div>
<p>
      For more information about these data types, see
      <a class="link" href="http://www.opendkim.org/libopendkim/index.html" target="_top">OpenDKIM
      Library</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.mxip.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.outbound_audit.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.49. mxip - IP Addresses In MX Records </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.51. outbound_audit – Outbound traffic analytics</td>
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
