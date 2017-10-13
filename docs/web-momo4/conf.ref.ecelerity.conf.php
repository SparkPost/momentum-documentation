<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>15.6. ecelerity.conf File</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="conf.overview.php" title="Chapter 15. Configuration Overview">
<link rel="prev" href="module_config.php" title="15.5. Modules">
<link rel="next" href="cluster.php" title="Chapter 16. Cluster-specific Configuration">
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
<tr><th colspan="3" align="center">15.6. <code class="filename">ecelerity.conf</code> File</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="module_config.php">Prev</a> </td>
<th width="60%" align="center">Chapter 15. Configuration Overview</th>
<td width="20%" align="right"> <a accesskey="n" href="cluster.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="conf.ref.ecelerity.conf"></a>15.6. <code class="filename">ecelerity.conf</code> File</h2></div></div></div>
<p>
    The <code class="filename">ecelerity.conf</code> file is the master
    configuration file for the Momentum application server. It contains
    general configuration for Momentum, along with other configuration
    files included from within <code class="filename">ecelerity.conf</code>.
  </p>
<p>
    The default search path for the configuration file is:
  </p>
<pre class="programlisting">
/opt/msys/ecelerity/etc/conf/global:/opt/msys/ecelerity/etc/conf/{NODENAME}:»
  /opt/msys/ecelerity/etc/conf/default
</pre>
<p>
    Configuration options defined at the top level of the
    <code class="filename">ecelerity.conf</code> file are defined in a global
    scope. Many of these options can be defined in other scopes for a
    more fine-grained configuration. For example, the
    <code class="option">max_outbound_connections</code> option can be set globally
    to apply to all outbound connections or within a domain scope to
    apply to a specific domain only. You can also set it in both scopes
    if you wish.
  </p>
<p>
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
    The following sections provide an overview of the configuration
    commonly defined in the <code class="filename">ecelerity.conf</code> file.
  </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
        Control Listener
      </span></dt>
<dd><p>
          Momentum's control listener is configured in the
          <code class="filename">ecelerity.conf</code> file. For details, see
          <a class="xref" href="control_listener.php" title="Chapter 17. Configuring Momentum's System Console">Chapter 17, <i>Configuring Momentum's System Console</i></a>.
        </p></dd>
<dt><span class="term">
        Inbound Mail Service Listeners
      </span></dt>
<dd>
<p>
          Momentum's inbound mail service for SMTP or ECStream is
          configured in the <code class="filename">ecelerity.conf</code> file;
          while inbound mail service for HTTP is configured in the
          <code class="filename">msg_gen.conf</code> file included from within
          <code class="filename">ecelerity.conf</code>. Follow each link for
          details:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              SMTP - Simple Mail Transfer Protocol (see
              <a class="xref" href="esmtp_listener.php" title="Chapter 19. Configuring Inbound Mail Service Using SMTP">Chapter 19, <i>Configuring Inbound Mail Service Using SMTP</i></a>.)
            </p></li>
<li class="listitem"><p>
              HTTP - Hypertext Transfer Protocol (see
              <a class="xref" href="http_listener.php" title="Chapter 20. Configuring Inbound Mail Service Using HTTP">Chapter 20, <i>Configuring Inbound Mail Service Using HTTP</i></a>.)
            </p></li>
<li class="listitem"><p>
              ECStream - Custom, bare-bones, high performance injection
              mechanism (see <a class="xref" href="ecstream_listener.php" title="Chapter 18. Configuring Inbound Mail Service Using ECStream">Chapter 18, <i>Configuring Inbound Mail Service Using ECStream</i></a>.)
            </p></li>
</ul></div>
</dd>
<dt><span class="term">
        Cluster Listener
      </span></dt>
<dd><p>
          The ECCluster_Listener configures direct, point-to-point
          communication between cluster nodes and is configured in the
          <code class="filename">ecelerity-cluster.conf</code> file that is
          included from within <code class="filename">ecelerity.conf</code>. For
          details, see <a class="xref" href="cluster.listeners.php#eccluster_listener" title="16.5.1. ECCluster_Listener Configuration">Section 16.5.1, “ECCluster_Listener Configuration”</a>.
        </p></dd>
<dt><span class="term">
        Module Configuration
      </span></dt>
<dd><p>
          Momentum's functionality is extended through its module API.
          Modules can be explicitly loaded and their configuration
          options set in the <code class="filename">ecelerity.conf</code> file.
          For details, see <a class="xref" href="module_config.php" title="15.5. Modules">Section 15.5, “Modules”</a>.
        </p></dd>
<dt><span class="term">
        Outbound Mail Delivery Configuration
      </span></dt>
<dd><p>
          Momentum provides a variety of options that allows you to
          control its outbound mail delivery. For details, see
          <a class="xref" href="outbound_mail.php" title="Chapter 25. Configuring Outbound Mail Delivery">Chapter 25, <i>Configuring Outbound Mail Delivery</i></a>.
        </p></dd>
</dl></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="module_config.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="conf.overview.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="cluster.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">15.5. Modules </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 16. Cluster-specific Configuration</td>
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
