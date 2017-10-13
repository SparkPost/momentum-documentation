<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>scope_max_outbound_connections</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="config.options.ref.php" title="Chapter 72. Configuration Options Reference">
<link rel="prev" href="conf.ref.rset_timeout.php" title="rset_timeout">
<link rel="next" href="conf.ref.scheduler.php" title="scheduler">
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
<tr><th colspan="3" align="center">scope_max_outbound_connections</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.rset_timeout.php">Prev</a> </td>
<th width="60%" align="center">Chapter 72. Configuration Options Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.scheduler.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="conf.ref.scope_max_outbound_connections"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>scope_max_outbound_connections — provide traffic shaping for outbound connections</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">scope_max_outbound_connections = 20</code> </p></div>
</div>
<div class="refsection">
<a name="idp26403600"></a><h2>Description</h2>
<p>
      <code class="option">scope_max_outbound_connections</code> provides for 
      finer-grained manipulation of the number of outbound connections
      than does <code class="option">server_max_outbound_connections</code>. 
      When used in different scopes its behavior is as follows:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          In the global scope, it behaves like
          <code class="option">server_max_outbound_connections</code>
        </p></li>
<li class="listitem"><p>
          In a Global::Domain scope, it determines the maximum number of
          connections to the specified domain across all bindings
        </p></li>
<li class="listitem"><p>
          In a Binding_Group::Domain scope, it determines the maximum
          number of connections to the specified domain across all the
          bindings in that Binding Group
        </p></li>
<li class="listitem"><p>
          In a Binding::Domain scope, it behaves like
          <code class="option">max_outbound_connections</code>
        </p></li>
<li class="listitem"><p>
          In a Global::Host scope it determines the maximum number of
          connections to the specified host across all bindings
        </p></li>
</ul></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
        <code class="option">server_reserve_outbound_connections</code> must be set
        to <code class="literal">0</code> in order for
        <code class="option">scope_max_outbound_connections</code> to work properly
        in the Global::Domain scope. However, when
        <code class="option">server_reserve_outbound_connections</code> is set to
        <code class="literal">0</code> and the server is under load, low volume
        domains may be starved of connections.
      </p>
</div>
<p>
      <code class="option">scope_max_outbound_connections</code> is disabled by default. 
      When it is not set then <code class="option">max_outbound_connections</code> or
      <code class="option">server_max_outbound_connections</code> is used, depending on 
      the context.
    </p>
<p>
      You might want to use this option in circumstances where two MX
      names resolve to a list of identical IP addresses. This is
      currently the case with <code class="literal">wanadoo.fr</code> and
      <code class="literal">orange.fr</code>. Any given sending host cannot have
      more than three simultaneous connections to any given host for
      <span class="bold"><strong>both</strong></span> domains. To ensure that you
      are working within these parameters, use
      <code class="option">scope_max_outbound_connections</code> in the following
      way:
    </p>
<pre class="programlisting">
domain "/^(wanadoo|orange)\.fr$/" {
   scope_max_outbound_connections = 3
}
</pre>
<p>
      With this configuration both domains are considered as one for the
      sake of total outbound connections.
    </p>
<p>
      To highlight how <code class="option">scope_max_outbound_connections</code>
      differs from <code class="option">max_outbound_connections</code> consider
      the following example:
    </p>
<pre class="programlisting">
domain "/^(aol|yahoo).com$/" {
  max_outbound_connections = 5
}
</pre>
<p>
      The preceding example is identical to the following configuration:
    </p>
<pre class="programlisting">
domain "aol.com" {
  max_outbound_connections = 5
}

domain "yahoo.com" {
  max_outbound_connections = 5
}
</pre>
<p>
      This gives a maximum of 5 outbound connections for
      <span class="emphasis"><em>each</em></span> domain.
    </p>
</div>
<div class="refsection">
<a name="idp26426272"></a><h2>Scope</h2>
<p>
      scope_max_outbound_connections is valid in the global, binding,
      binding_group, domain, and host scopes.
    </p>
</div>
<div class="refsection">
<a name="idp26428176"></a><h2>See Also</h2>
<p>
      <a class="xref" href="conf.ref.max_outbound_connections.php" title="max_outbound_connections"><span class="refentrytitle">max_outbound_connections</span></a>,
      <a class="xref" href="conf.ref.server_max_outbound_connections.php" title="server_max_outbound_connections"><span class="refentrytitle">server_max_outbound_connections</span></a>,
      <a class="xref" href="conf.ref.server_reserve_outbound_connections.php" title="server_reserve_outbound_connections"><span class="refentrytitle">server_reserve_outbound_connections</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.rset_timeout.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="config.options.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.scheduler.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">rset_timeout </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> scheduler</td>
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
