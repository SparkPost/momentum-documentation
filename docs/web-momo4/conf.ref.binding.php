<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>binding</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="config.options.ref.php" title="Chapter 72. Configuration Options Reference">
<link rel="prev" href="conf.ref.bind_address.php" title="bind_address">
<link rel="next" href="conf.ref.binding_auto_replumb.php" title="binding_auto_replumb">
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
<tr><th colspan="3" align="center">binding</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.bind_address.php">Prev</a> </td>
<th width="60%" align="center">Chapter 72. Configuration Options Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.binding_auto_replumb.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="conf.ref.binding"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>binding — configure binding specific options</p>
</div>
<div class="refsection">
<a name="idp11794208"></a><h2>Description</h2>
<pre class="programlisting">
binding "example" {
  # binding-specific settings
}
</pre>
<p>
      Use the <code class="option">binding</code> stanza to define per-binding
      configuration options. You can nest <code class="option">domain</code> and
      <code class="option">host</code> stanzas inside <code class="option">binding</code>
      stanzas to create per-binding per-domain or per-binding per-host
      configurations. For additional details, see
      <a class="xref" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">Section 15.3, “Configuration Scopes and Fallback”</a>.
    </p>
<p>
      Apart from the <code class="option">domain</code> and <code class="option">host</code>
      options, the following options are commonly specified in a
      <code class="option">binding</code> stanza:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <a class="xref" href="conf.ref.bind_address.php" title="bind_address"><span class="refentrytitle">bind_address</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="conf.ref.connect_timeout.php" title="connect_timeout"><span class="refentrytitle">connect_timeout</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="conf.ref.ehlo_hostname.php" title="ehlo_hostname"><span class="refentrytitle">ehlo_hostname</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="conf.ref.generate_bounces.php" title="generate_bounces"><span class="refentrytitle">generate_bounces</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="conf.ref.message_expiration.php" title="message_expiration"><span class="refentrytitle">message_expiration</span></a>
        </p></li>
</ul></div>
<p>
      For a complete list of options valid in the binding scope, refer
      to <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
    </p>
<p>
      The following is an example of a <code class="option">binding</code> stanza:
    </p>
<pre class="programlisting">
# my_binding-1 rules
binding "my_binding-1" {
  bind_address = "10.10.10.1"
  generate_bounces = true
  ehlo_hostname = "my_name-1.com"
}

# my_binding-2 rules
binding "my_binding-2" {
  bind_address = "10.10.10.2"
  generate_bounces = false
  ehlo_hostname = "my_name-2.com"
}</pre>
<p>
      In this example, the source IP for my_binding-1 mail is
      <code class="literal">10.10.10.1</code>, while the source IP for
      my_binding-2 mail is <code class="literal">10.10.10.2</code>.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        Binding names are case-sensitive. Spaces and colons are not
        allowed in binding names.
      </p>
</div>
</div>
<div class="refsection">
<a name="conf.ref.binding.default"></a><h2>
<code class="literal">default</code> Binding</h2>
<p>
      The <code class="literal">default</code> binding is a special case of a
      binding scope. Messages that are not assigned to a specific
      binding will fallback to the <code class="literal">default</code> binding.
      Ensure that <span class="emphasis"><em>all</em></span> messages are assigned to a
      binding or that this fallback binding meets your needs.
    </p>
<p>
      You should ensure that all messages are dealt with in some way. 
      For example, you can create a variable at the top of your
      script with the most general binding, then use 
      <code class="literal">if</code> blocks to assign a message to a more
      specific binding. At the end of the script, if no
      <code class="literal">if</code> condition applies, the
      <code class="literal">else</code> clause would assign the message to the
      general binding.
    </p>
<p>
      Even if you do not assign messages to bindings, youy can use the
      <code class="literal">default</code> binding to alter default behavior by
      setting the values of options in the <code class="literal">default</code>
      binding scope.
    </p>
<p>
      The <code class="literal">default</code> binding is not explicitly defined.
      You can confirm its existence by issuing the ec_console command
      <a class="xref" href="console_commands.binding_summary.php" title="binding summary"><span class="refentrytitle">binding summary</span></a>. You should
      see <code class="literal">Summary Statistics For Binding default</code>
      along with any other bindings you defined.
    </p>
<p>
      Defining and using the <code class="literal">default</code> binding is
      required any time you want to change the behavior of any message
      not assigned to some other binding. You can explicitly define
      the <code class="literal">default</code> binding scope and set options in
      that scope in your configuration file or at runtime using Lua.
    </p>
<p>
      The following is an example configuration:
    </p>
<pre class="programlisting">
binding "default" {
  ehlo_hostname = "example.com"
}
</pre>
<p>
      Setting the <code class="literal">default</code> binding from a script
      is done in exactly the same way as setting any other binding.
      For an example of setting a binding, see
      <a class="xref" href="lua.ref.msg_binding.php" title="msg:binding"><span class="refentrytitle">msg:binding</span></a>.
    </p>
<p>
      In a cluster configuration, if you wish to set an option to
      different values within the <code class="literal">default</code> binding
      scope, you can explicitly define the <code class="literal">default</code>
      binding in the node-specific configuration file and then define
      options within that scope. You can create a node-specific
      configuration file by manually creating it, as described in
      <a class="xref" href="conf.overview.php#conf.adding.configuration.files" title="15.1.5. Adding Configuration Files">Section 15.1.5, “Adding Configuration Files”</a>.
    </p>
</div>
<div class="refsection">
<a name="idp23599344"></a><h2>Scope and Valid Options</h2>
<p>
      <code class="option">binding</code> is valid in the global scope and in the
      binding_group scope.
    </p>
<p>
      For a complete list of options valid in the binding scope, refer
      to <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
    </p>
</div>
<div class="refsection">
<a name="idp23602720"></a><h2>See Also</h2>
<p>
      <a class="xref" href="conf.ref.binding_group.php" title="binding_group"><span class="refentrytitle">binding_group</span></a>,
      <a class="xref" href="conf.ref.domain.php" title="domain"><span class="refentrytitle">domain</span></a>, <a class="xref" href="conf.ref.host.php" title="host"><span class="refentrytitle">host</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.bind_address.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="config.options.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.binding_auto_replumb.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">bind_address </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> binding_auto_replumb</td>
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
