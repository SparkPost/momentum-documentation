<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>domain</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="config.options.ref.php" title="Chapter 72. Configuration Options Reference">
<link rel="prev" href="conf.ref.domain_for_unqualified_sender_address.php" title="domain_for_unqualified_sender_address">
<link rel="next" href="conf.ref.domainkeys.php" title="domainkeys">
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
<tr><th colspan="3" align="center">domain</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.domain_for_unqualified_sender_address.php">Prev</a> </td>
<th width="60%" align="center">Chapter 72. Configuration Options Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.domainkeys.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="conf.ref.domain"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>domain — configure domain specific options</p>
</div>
<div class="refsection">
<a name="idp24451232"></a><h2>Description</h2>
<pre class="programlisting">
domain "example.com" {
  # domain-specific settings
}

binding example {
  domain "example.com" {
    # domain-specific settings for the "example" binding
  }
}
</pre>
<p>
      Use the <code class="option">domain</code> stanza to define per-domain
      configuration options. You can nest <code class="option">domain</code>
      stanzas beneath <code class="option">binding</code> stanzas creating a
      binding:domain configuration. For additional details, see
      <a class="xref" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">Section 15.3, “Configuration Scopes and Fallback”</a>.
    </p>
<p>
      In addition to defining <code class="option">domain</code> stanzas using
      domain names, you can also use IP addresses:
    </p>
<pre class="programlisting">
domain "192.0.43.10" {
}
</pre>
<p>
      When declaring IPv6 domains, use the following syntax:
    </p>
<pre class="programlisting">
domain "[IPv6:fd82:7796:815b:be0:222:19ff:fe52:3629]" {
  # domain specific settings
}
</pre>
<p><a name="conf.ref.domain.regex"></a><b>Regex Domains. </b>
        In addition to specifying a domain by domain name, you may use
        Perl-compatible regular expression (PCRE) syntax to define a
        "Regex Domain". Using regex domains, you can define common rules
        for domains that have similar configurations, without needing to
        specify the rules for every possible matching domain.
      </p>
<pre class="programlisting">
domain "example.com" {
  max_outbound_connections = 20
}

domain "/(?:^|[.])example[.](?:com|co[.]uk)$/" {
  max_outbound_connections = 15
  max_deliveries_per_connection = 5
}
</pre>
<p>
      In the example above, mail for <code class="literal">example.com</code> will
      use no more than 20 connections, and will send no more than 5
      messages on a given connection before tearing it down. Mail for
      <code class="literal">example.co.uk</code> will have
      <code class="option">max_deliveries_per_connection</code> set to 5 and
      <code class="option">max_outbound_connections</code> set to 15, as would mail
      for any sub-domain of <code class="literal">example.com</code> or
      <code class="literal">example.co.uk</code>.
    </p>
<p>
      Option resolution will always match a value defined in a normal
      <code class="option">domain</code> stanza before looking for a matching regex
      domain stanza in the same container, which is why
      <code class="literal">example.com</code> would have
      <code class="option">max_outbound_connections</code> set to 20, despite it
      being set to 15 in the regex domain stanza that matches.
    </p>
<p>
      If multiple regex domain stanzas are declared in the same
      container, normal domain stanzas are checked first before finding
      a match from the regex domain stanzas in the order that the regex
      domain stanzas were declared in the configuration file.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        You almost always want to anchor the start and end of your
        regular expressions when using them for regex domains, otherwise
        they will perform substring matching which might have unexpected
        side effects, such as matching subdomains of "bad guy" domains
        and routing unwanted mail via trusted interfaces.
      </p>
</div>
<p>
      For domain naming when using Momentum Mobile, see
      <a class="link" href="https://support.messagesystems.com/docs/web-mobility/mobility.mm7.multiprotocol.php" target="_top">Multi-protocol
      Domain Naming</a>.
    </p>
</div>
<div class="refsection">
<a name="idp24470704"></a><h2>Scope and Valid Options</h2>
<p>
      <code class="option">domain</code> is valid in the binding, binding_group,
      and global scopes.
    </p>
<p>
      For a complete list of options valid in the domain scope, refer to
      <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
    </p>
</div>
<div class="refsection">
<a name="idp24474672"></a><h2>See Also</h2>
<p>
      <a class="xref" href="conf.ref.binding.php" title="binding"><span class="refentrytitle">binding</span></a>,
      <a class="xref" href="conf.ref.host.php" title="host"><span class="refentrytitle">host</span></a>,
      <a class="xref" href="conf.ref.match_cache_life.php" title="match_cache_life"><span class="refentrytitle">match_cache_life</span></a>,
      <a class="xref" href="conf.ref.match_cache_size.php" title="match_cache_size"><span class="refentrytitle">match_cache_size</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.domain_for_unqualified_sender_address.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="config.options.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.domainkeys.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">domain_for_unqualified_sender_address </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> domainkeys</td>
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
