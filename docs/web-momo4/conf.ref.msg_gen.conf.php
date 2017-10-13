<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>20.2. msg_gen.conf File</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="http_listener.php" title="Chapter 20. Configuring Inbound Mail Service Using HTTP">
<link rel="prev" href="http_listener.php" title="Chapter 20. Configuring Inbound Mail Service Using HTTP">
<link rel="next" href="auth.php" title="Chapter 21. Enforcing REST API/UI User Authentication">
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
<tr><th colspan="3" align="center">20.2. <code class="filename">msg_gen.conf</code> File</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="http_listener.php">Prev</a> </td>
<th width="60%" align="center">Chapter 20. Configuring Inbound Mail Service Using HTTP</th>
<td width="20%" align="right"> <a accesskey="n" href="auth.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="conf.ref.msg_gen.conf"></a>20.2. <code class="filename">msg_gen.conf</code> File</h2></div></div></div>
<p>
    The <code class="filename">msg_gen.conf</code> file contains the
    configuration relevant to message generation. This file is included
    from within <code class="filename">ecelerity.conf</code>.
  </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      Restart the ecelerity process if you make any changes to the
      <code class="filename">msg_gen.conf</code> file. Running the
      <strong class="userinput"><code>config reload</code></strong> command will not suffice.
    </p>
</div>
<p>
    The following is an example <code class="filename">msg_gen.conf</code> file:
  </p>
<div class="example">
<a name="conf.ref.msg_gen.conf.example"></a><p class="title"><b>Example 20.1. msg-gen.conf</b></p>
<div class="example-contents"><pre class="programlisting">
httpsrv { }
HTTP_Listener {
  Listen ":2081" {}
}
substitution_engine {}

scriptlet "scriptlet" {
  script "rest_templates" { source = "msys.rest.templates" }
  script "rest_users" { source = "msys.rest.users" }
  script "rest_transmissions" { source = "msys.rest.transmissions" }
  script "open_track" { source = "msys.rest.open_tracker" }
  script "click_tracker" { source = "msys.rest.click_tracker" }
}
# One entry for each Platform node
cassandra_client {
  uri = ("name=cassandra_db;host=192.168.1.204;port=9160"
         "name=cassandra_db;host=192.168.1.206;port=9160")
}

engagement_tracker {}

msg_gen {
  engagement_tracking_host = "example.com:81"
  cluster_cfg = true
  quorum = 2
  # a node stanza for each Platform node
  node node1.lan {
    mta_id = 1
    votes = 1
  }
  node node2.lan {
    mta_id = 2
    votes = 1
  }
}
</pre></div>
</div>
<br class="example-break"><p>
    For a discussion of scopes and fallbacks, see
    <a class="xref" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">Section 15.3, “Configuration Scopes and Fallback”</a>.
  </p>
<p>
    For a summary of all the non-module specific configuration options,
    refer to <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
  </p>
<p>
    Modules and their configuration options are discussed in the
    <a class="xref" href="modules.php" title="Chapter 71. Modules Reference">Chapter 71, <i>Modules Reference</i></a>.
  </p>
<p>
    The following are the modules configured in the
    <code class="filename">msg_gen.conf</code> file:
  </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
        cassandra_client
      </span></dt>
<dd><p>
          This module configuration includes a <code class="literal">uri</code>
          entry for each Platform node in your cluster. Do not change
          this setting.
        </p></dd>
<dt><span class="term">
        engagement_tracker
      </span></dt>
<dd><p>
          This module handles the creation of open-tracked and
          click-tracked links and the corresponding parsing of the links
          when an open or click event occurs. See
          <a class="xref" href="modules.engage_tracker.php" title="71.32. engagement_tracker – HTTP Engagement Tracking">Section 71.32, “engagement_tracker – HTTP Engagement Tracking”</a>.
        </p></dd>
<dt><span class="term">
        HTTP_Listener
      </span></dt>
<dd><p>
          To use the REST API, this listener module must be loaded. By
          default, the HTTP_Listener listens on port 2081. See
          <a class="xref" href="http_listener.php" title="Chapter 20. Configuring Inbound Mail Service Using HTTP">Chapter 20, <i>Configuring Inbound Mail Service Using HTTP</i></a>.
        </p></dd>
<dt><span class="term">
        httpsrv
      </span></dt>
<dd><p>
          To use the REST API, this HTTP server infrastructure module
          must be loaded. See
          <a class="xref" href="modules.httpsrv.php" title="71.38. httpsrv – HTTP Server">Section 71.38, “httpsrv – HTTP Server”</a>.
        </p></dd>
<dt><span class="term">
        msg_gen
      </span></dt>
<dd><p>
          Handles message generation. See
          <a class="xref" href="modules.msg_gen.php" title="71.48. msg_gen – Message Generation">Section 71.48, “msg_gen – Message Generation”</a>.
        </p></dd>
<dt><span class="term">
        scriptlet
      </span></dt>
<dd><p>
          The scriptlet module defined in
          <code class="filename">msg_gen.conf</code> supplements the scriptlet
          module defined in <code class="filename">ecelerity.conf</code>. The
          various <code class="literal">script</code> scopes point to the scripts
          needed to support message generation. Note that the scriptlet
          module instance name, <code class="literal">scriptlet</code>, is the
          same as the scriptlet instance name in the
          <code class="filename">ecelerity.conf</code> file. All instances of the
          scriptlet module must use the same instance name. For more
          information, see <a class="xref" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts">Section 71.60, “scriptlet - Lua Policy Scripts”</a>.
        </p></dd>
<dt><span class="term">
        substitution_engine
      </span></dt>
<dd><p>
          This module handles substitution in the templates. It has no
          configuration options.
        </p></dd>
</dl></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="http_listener.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="http_listener.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="auth.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 20. Configuring Inbound Mail Service Using HTTP </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 21. Enforcing REST API/UI User Authentication</td>
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
