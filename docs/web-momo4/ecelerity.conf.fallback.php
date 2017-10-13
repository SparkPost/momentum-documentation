<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>15.3. Configuration Scopes and Fallback</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="conf.overview.php" title="Chapter 15. Configuration Overview">
<link rel="prev" href="conf.options.php" title="15.2. Configuration Options">
<link rel="next" href="listeners.php" title="15.4. Listeners">
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
<tr><th colspan="3" align="center">15.3. Configuration Scopes and Fallback</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.options.php">Prev</a> </td>
<th width="60%" align="center">Chapter 15. Configuration Overview</th>
<td width="20%" align="right"> <a accesskey="n" href="listeners.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="ecelerity.conf.fallback"></a>15.3. Configuration Scopes and Fallback</h2></div></div></div>
<p>
    Momentum has a flexible configuration system that allows many
    options to be set to different values for different hosts, domains,
    bindings, and binding groups:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <a class="link" href="conf.ref.binding_group.php" title="binding_group">binding_group</a> -
        stanza to configure binding_group-specific options
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.binding.php" title="binding">binding</a> - stanza to
        configure binding-specific options
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.domain.php" title="domain">domain</a> - stanza to
        configure MultiVIP© domain-specific options
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.host.php" title="host">host</a> - stanza to configure
        host-specific options
      </p></li>
</ul></div>
<p>
    <code class="option">domain</code> stanzas can be nested inside a
    <code class="option">binding</code> stanza, creating a per-binding, per-domain
    configuration. This is referred to as a
    <code class="literal">binding::domain</code> scope. Also, since hosts may
    appear within bindings, there is also a
    <code class="literal">binding::host</code> scope. Other permutations also
    apply; for example, when a domain is within a binding that is in
    turn a member of a binding group, the scope is
    <code class="literal">binding-group::binding::domain</code>.
  </p>
<p>
    From within the console, you can determine the value of an option
    within a specific scope using <span class="command"><strong>config eval</strong></span>.
  </p>
<p>
    For example, to determine the value of
    <code class="option">Enable_Authentication</code> within the scope of a TCP/IP
    Listen stanza within a Control_Listener, issue the command:
  </p>
<p>
    <strong class="userinput"><code>config eval Control_Listener Listen 127.0.0.1:2025
    Enable_Authentication</code></strong>
  </p>
<p>
    If <code class="option">Enable_Authentication</code> is set to
    <code class="literal">true</code> within the Control_Listener scope and not
    overridden in the TCP/IP Listen stanza, its value will be the
    fallback value of <code class="literal">true</code>.
  </p>
<p>
    Since options may be defined in more than one scope, it can
    sometimes be difficult to determine what value applies. Momentum
    resolves the configuration options by looking for the most specific
    setting it can find; if it doesn't find a precise match, it falls
    back to the parent level(s) and repeats this process until it
    reaches the globally configured value.
  </p>
<p>
    How this works is best demonstrated by example:
  </p>
<div class="example">
<a name="domain-scope-fallback"></a><p class="title"><b>Example 15.1. Domain Scope and Fallback</b></p>
<div class="example-contents"><pre class="programlisting">
max_outbound_connections = 40

domain "example.com" {
  max_outbound_connections = 20
}

domain "someotherexample.com" {
  max_resident_active_queue_size = 500
}
</pre></div>
</div>
<br class="example-break"><p>
    This configures Momentum to open no more than 40 connections to a
    given domain, except for the domain <code class="literal">example.com</code>,
    which is limited to 20 connections. The domain
    <code class="literal">someotherexample.com</code> does not explicitly specify
    a value for <code class="option">max_outbound_connections</code>, so it
    falls-back to the globally configured value of 40.
  </p>
<p>
    A similar fallback occurs when using bindings:
  </p>
<div class="example">
<a name="binding-scope-fallback"></a><p class="title"><b>Example 15.2. Binding Scope and Fallback</b></p>
<div class="example-contents"><pre class="programlisting">
message_expiration = 86400

binding "example" {
  message_expiration = 3600
}

domain "example.com" {
  message_expiration = 120
}

binding "example2" {
  message_expiration = 7200

  domain example.com {
    message_expiration = 86400
  }

  domain "anotherexample.com" {
    max_resident_active_queue_size = 500
  }
}

binding "example3" {

  domain "example.com" {
    max_resident_active_queue_size = 500
  }

  domain "anotherexample.com" {
    message_expiration = 86400
  }
}</pre></div>
</div>
<br class="example-break"><p>
    In this configuration, the message expiration time is 86400 seconds,
    unless the mail is attached to one of the bindings,
    <code class="literal">example</code>, <code class="literal">example2</code> or
    <code class="literal">example3</code>. Mail on binding
    <code class="literal">example</code> is subject to an expiration time of 3600
    seconds. On binding <code class="literal">example2</code>, the expiration time
    is 7200 seconds except for mail destined for the domain
    <code class="literal">example.com</code>, which is set to 86400 seconds.
    Because the most specific setting for the domain
    <code class="literal">example.com</code> is the domain stanza within the
    binding stanza, this is the setting that takes effect. Outside the
    binding <code class="literal">example2</code>, in a global domain stanza,
    <code class="option">message_expiration</code> is set to <code class="literal">120</code>
    for domain <code class="literal">example.com</code>, but this setting will not
    take effect because it is overridden by the more specific setting.
  </p>
<p>
    Note that because the domain <code class="literal">anotherexample.com</code>
    within binding <code class="literal">example2</code> does not specify a value
    for <code class="option">message_expiration</code>, the effective value is
    taken from its parent binding, which is 7200. The same value will be
    used for any other domain routed via that binding unless it is
    explicitly overridden.
  </p>
<p>
    Binding <code class="literal">example3</code> is configured similarly to
    binding <code class="literal">example2</code>, except that it does not specify
    a value for <code class="option">message_expiration</code>. This means that
    mail for domain <code class="literal">anotherexample.com</code> will be
    subject to a message expiration of 86400, because it is explicitly
    configured. All other domains will fall back to the value of their
    parent binding, which, in this case is "unset", so the value will
    fall back again and look for a global domain setting. For the domain
    <code class="literal">example.com</code>, there is a global domain
    configuration that sets message expiration to 120 seconds, so this
    value will be used. For all other domains within this binding, there
    is no global domain stanza so the fallback ends up at the globally
    configured value of 86400.
  </p>
<p>
    Bindings can be nested within binding groups as shown in the
    following example:
  </p>
<div class="example">
<a name="binding-group-fallback"></a><p class="title"><b>Example 15.3. Binding_Group and Fallback</b></p>
<div class="example-contents"><pre class="programlisting">
max_outbound_connections = 30

binding_group "group1" {
  max_outbound_connections = 5

  binding "example" {
    bind_address = 10.10.10.10
    max_outbound_connections = 15

    domain "example.com" {
      #some other options
    }
  }
}
</pre></div>
</div>
<br class="example-break"><p>
    In this specific case, the value of
    <code class="option">max_outbound_connections</code> for domain
    <code class="literal">example.com</code> will be <code class="literal">15</code> because
    <code class="option">max_outbound_connections</code> is not defined within the
    domain <code class="literal">example.com</code>. This option then assumes the
    value of the binding that contains the domain. You can confirm the
    value by opening the console and using <span class="command"><strong>config
    eval</strong></span>. For example:
  </p>
<pre class="screen">
ecelerity(/tmp/2025)&gt; config eval binding_group group1 binding example \
 domain example.com max_outbound_connections Max_Outbound_Connections = 15
</pre>
<p>
    If you remove <code class="option">max_outbound_connections</code> from the
    binding <code class="literal">example</code>, the value of this option for the
    domain <code class="literal">example.com</code> becomes <code class="literal">5</code>,
    namely its value within the binding group that contains domain
    <code class="literal">example.com</code>.
  </p>
<p>
    In summary, the value that a configuration option assumes, in order
    of decreasing precedence, is as follows:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        Value given in a domain stanza within a binding that is part of
        a binding group
      </p></li>
<li class="listitem"><p>
        Value given in a domain stanza within a binding
      </p></li>
<li class="listitem"><p>
        Value given in a domain stanza within a binding_group
      </p></li>
<li class="listitem"><p>
        Value specified within the binding stanza
      </p></li>
<li class="listitem"><p>
        Value specified within a global domain stanza
      </p></li>
<li class="listitem"><p>
        Global setting
      </p></li>
</ul></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.options.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="conf.overview.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="listeners.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">15.2. Configuration Options </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 15.4. Listeners</td>
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
