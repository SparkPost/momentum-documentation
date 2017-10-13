<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>outbound_throttle_messages</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="config.options.ref.php" title="Chapter 72. Configuration Options Reference">
<link rel="prev" href="conf.ref.outbound_throttle_connections.php" title="outbound_throttle_connections">
<link rel="next" href="conf.ref.pathway.php" title="pathway">
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
<tr><th colspan="3" align="center">outbound_throttle_messages</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.outbound_throttle_connections.php">Prev</a> </td>
<th width="60%" align="center">Chapter 72. Configuration Options Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.pathway.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="conf.ref.outbound_throttle_messages"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>outbound_throttle_messages — limit the rate at which messages are delivered</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">outbound_throttle_messages = "1"</code> </p></div>
<div class="cmdsynopsis"><p><code class="command">outbound_throttle_messages = "1/60"</code> </p></div>
</div>
<div class="refsection">
<a name="idp25757440"></a><h2>Description</h2>
<p>
      This option allows you to limit the rate at which Momentum will
      attempt to deliver mail. It can be employed to globally limit
      throughput or to reduce the rate sent to a particular domain.
    </p>
<p>
      If a single integer parameter is provided, Momentum will ensure
      that no more than the specified number of messages are sent in a
      given second of time. If a proper fraction parameter is provided,
      Momentum will limit the number of sent message to the number
      specified in the numerator over the time window in seconds
      specified by the denominator. By default this option is not set,
      indicating an unlimited number of deliveries.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        For best results, a throttle in the same scope and with the same
        values should also be defined using
        <a class="xref" href="conf.ref.outbound_throttle_connections.php" title="outbound_throttle_connections"><span class="refentrytitle">outbound_throttle_connections</span></a>.
      </p>
</div>
<p>
      If this option is not set or if is set to <code class="literal">0</code>,
      there is no limit on the number of messages sent.
    </p>
<div class="refsection">
<a name="conf.ref.outbound_throttle_messages.fallback"></a><h3>Throttles and Fallback</h3>
<p>
        In general, the configuration system works by taking the most
        specific instance of a given configuration option. Consider the
        following:
      </p>
<pre class="programlisting">
opt = "foo"
a {
  b {
    opt = "bar"
  }

  c {}
}
</pre>
<p>
        In this case, we have a notional option called
        <code class="option">opt</code> specified globally, and within the
        <code class="literal">b</code> stanza. If we look it up globally, we get
        the value "<code class="literal">foo</code>. If we look it up inside the
        "<code class="literal">a</code> stanza, it falls back to global, and we
        get <code class="literal">foo</code>. Within the <code class="literal">b</code>
        stanza, it's explicitly set to <code class="literal">bar</code>, and this
        is the value we receive. Inside the <code class="literal">c</code> stanza,
        no value is set, so we fall back to <code class="literal">a</code>. As no
        value is set there, we fall back to the global
        <code class="literal">foo</code> value. The effective values are shown in
        the following:
      </p>
<pre class="programlisting">
opt = "foo"
a {
 opt = "foo"
 b { opt = "bar" }
 c { opt = "foo" }
}
</pre>
<p>
        Throttles work in a similar way, but are treated "by reference"
        as opposed to "by value." Consider the following configuration:
      </p>
<pre class="programlisting">
binding_group "mygroup" {
  Outbound_Throttle_Messages = "10"

  binding "mybinding1" {}

  binding "mybinding2" {}

  domain "mydomain1" {}

}
</pre>
<p>
        A single throttle structure is created in the scope of the
        binding group, <code class="literal">mygroup</code>. However, this doesn't
        mean that you end up with a new throttle in each scope. The
        fallback behavior of the configuration system for throttles
        means that a broader scope throttle <span class="emphasis"><em>will</em></span>
        apply cumulatively to all subordinate options. In other words,
        options falling back to a less specific stanza to find a
        throttle will all affect the throttle together.
      </p>
<p>
        In the above configuration the
        <span class="bold"><strong>combined</strong></span> scopes
        <code class="literal">mybinding1, mybinding2</code> and
        <code class="literal">mydomain1</code> may send 10 messages cumulatively
        within a 1 second time period. Thus, if 10 messages go out for
        <code class="literal">mybinding1, mybinding2</code> and
        <code class="literal">mydomain1</code> will not send out any messages
        within that second.
      </p>
<p>
        The following configuration allows 10 messages per second
        individually for each scope.
      </p>
<pre class="programlisting">
binding_group "mygroup" {
  outbound_throttle_messages = "10"

  binding "mybinding1" {
    outbound_throttle_messages = "10"
  }

  binding "mybinding2" {
    outbound_throttle_messages = "10"
  }

  domain "mydomain1" {
    outbound_throttle_messages = "10"
  }
}
</pre>
<h2>
<a name="idp25778560"></a>outbound_throttle_messages and Regex Domains</h2>
<p>
        Regex Domains can also be considered a scope.
      </p>
<pre class="programlisting">
Domain "/(?:^|[.])example[.](?:com|co[.]uk)$/" {
  Outbound_Throttle_Messages = 10
}
</pre>
<p>
        outbound_throttle_messages set in the regex domain shown in the
        preceding example will impact all domains together, in the same
        way that a throttle set in a binding_group impacts all bindings.
      </p>
</div>
</div>
<div class="refsection">
<a name="idp25781024"></a><h2>Scope</h2>
<p>
      outbound_throttle_messages is valid in the binding, binding_group,
      domain, and global scopes.
    </p>
</div>
<div class="refsection">
<a name="idp25782912"></a><h2>See Also</h2>
<p>
      <a class="xref" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">Section 15.3, “Configuration Scopes and Fallback”</a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.outbound_throttle_connections.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="config.options.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.pathway.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">outbound_throttle_connections </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> pathway</td>
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
