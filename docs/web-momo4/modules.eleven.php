<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.31. eleven – Eleven eXpurgate Content Scanning</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.ec_logger.php" title="71.30. EC_logger – Momentum-Style Logging">
<link rel="next" href="modules.engage_tracker.php" title="71.32. engagement_tracker – HTTP Engagement Tracking">
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
<tr><th colspan="3" align="center">71.31. eleven – Eleven eXpurgate Content Scanning</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.ec_logger.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.engage_tracker.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.eleven"></a>71.31. eleven – Eleven eXpurgate Content Scanning</h2></div></div></div>
<a class="indexterm" name="idp21656432"></a><p>
    The eleven module implements the spam filter and e-mail
    categorization service available from
    <a class="link" href="http://www.eleven.de/" target="_top">http://www.eleven.de/</a>.
    If you intend to use this module be sure to choose it during
    installation. For more information, see
    <a class="xref" href="post_installation.php#install.additional.packages" title="12.1. Installing Partner Modules">Section 12.1, “Installing Partner Modules”</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.eleven.configuration"></a>71.31.1. Configuration</h3></div></div></div>
<p>
      As with other Validation modules, eleven may be loaded in passive
      mode which means that inbound messages will not be virus scanned
      unless you explicitly call a policy script. In order to enforce
      policy using scripts, this module must be loaded in passive mode.
      Modules are loaded passively by setting the
      <code class="option">enabled</code> option to <code class="literal">false</code>.
    </p>
<p>
      The following is a typical configuration:
    </p>
<div class="example">
<a name="example.eleven3"></a><p class="title"><b>Example 71.58. eleven module</b></p>
<div class="example-contents"><pre class="programlisting">
eleven {
  enabled = false
  work_dir = "/var/tmp"
  update_period = 3600
  license = "/usr/local/eleven/etc/client.key"
  enable_antivir = true
  servers = ( "foo.example.com:55555:1" "bar.example.com:12345:2" )
}</pre></div>
</div>
<br class="example-break"><p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          enable_antivir
        </span></dt>
<dd><p>
            Enables the Avira SAVAPI-based virus detection.
            <span class="emphasis"><em>Note</em></span>: The minor results
            <code class="literal">virus</code> and <code class="literal">outbreak</code> are
            only returned if this option is set to
            <code class="literal">true</code>. Default value is
            <code class="literal">false</code>.
          </p></dd>
<dt><span class="term">
          license
        </span></dt>
<dd><p>
            Absolute path to the user's license. Default value is
            <code class="filename">/usr/local/eleven/etc/client.key</code>.
          </p></dd>
<dt><span class="term">
          servers
        </span></dt>
<dd><p>
            Specifies additional update servers. Each server is
            specified as <em class="replaceable"><code>host:port:priority</code></em>.
            The trailing port and priority fields are optional and, if
            omitted, default to 55555 (the default port for eleven
            updates) and 5 respectively. Priority decreases as the
            numerical value increases with <code class="literal">0</code> being
            the highest possible priority.
          </p></dd>
<dt><span class="term">
          update_period
        </span></dt>
<dd><p>
            How often to poll for updates. Default value is
            <code class="literal">3600</code> seconds, one hour. If this value is
            set to <code class="literal">0</code>, updates are disabled.
          </p></dd>
<dt><span class="term">
          work_dir
        </span></dt>
<dd><p>
            Location of temporary files created by this module. Default
            value is <code class="filename">/var/tmp</code>.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.eleven.lua.functions"></a>71.31.2. Lua Functions</h3></div></div></div>
<p>
      This module makes the Lua function
      <code class="function">msys.expurgate.scan</code> available. For a
      description of how this function is used, see
      <a class="xref" href="lua.ref.msys.expurgate.scan.php" title="msys.expurgate.scan"><span class="refentrytitle">msys.expurgate.scan</span></a>.
    </p>
<h4>
<a name="modules.eleven.scores"></a>Scores</h4>
<p>
      Lua creates a string representation of the major score value.
      These functions annotate the validation context with the following
      values:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          eleven-majorscore – Numeric classification of the scan
        </p></li>
<li class="listitem"><p>
          eleven-minorscore – Numeric minor classification
        </p></li>
<li class="listitem"><p>
          eleven-result – String representation corresponding to
          the eleven-majorscore number
        </p></li>
<li class="listitem"><p>
          eleven-result-subtype – String representation
          corresponding to the eleven-minorscore number
        </p></li>
</ul></div>
<p>
      If an error occurs, <code class="literal">eleven-majorscore</code> is set to
      "error" and <code class="literal">eleven-minorscore</code> holds the error
      message. The same applies to <code class="literal">eleven-result</code> and
      <code class="literal">eleven-result-subtype</code>; if an error occurs
      <code class="literal">eleven-result</code> is set to "error" and
      <code class="literal">eleven-result-subtype</code> is set to the error
      message.
    </p>
<p>
      Otherwise, the major score is set to the numeric major
      classification and the major result is set to a string version of
      that classification number. Its value will be one of the
      following:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          clean
        </p></li>
<li class="listitem"><p>
          suspect
        </p></li>
<li class="listitem"><p>
          spam
        </p></li>
<li class="listitem"><p>
          bulk
        </p></li>
<li class="listitem"><p>
          dangerous
        </p></li>
<li class="listitem"><p>
          unknown
        </p></li>
</ul></div>
<p>
      The minor score is set to the numeric minor classification, and
      the minor result is set to the string representation corresponding
      to the eleven-minorscore number. Its value will be one of the
      following:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          normal
        </p></li>
<li class="listitem"><p>
          empty
        </p></li>
<li class="listitem"><p>
          empty-body
        </p></li>
<li class="listitem"><p>
          almost-empty
        </p></li>
<li class="listitem"><p>
          bounce
        </p></li>
<li class="listitem"><p>
          advertisement
        </p></li>
<li class="listitem"><p>
          porn
        </p></li>
<li class="listitem"><p>
          virus
        </p></li>
<li class="listitem"><p>
          attachment
        </p></li>
<li class="listitem"><p>
          code
        </p></li>
<li class="listitem"><p>
          iframe
        </p></li>
<li class="listitem"><p>
          outbreak
        </p></li>
<li class="listitem"><p>
          url
        </p></li>
<li class="listitem"><p>
          url-count
        </p></li>
<li class="listitem"><p>
          mail-count
        </p></li>
<li class="listitem"><p>
          sender
        </p></li>
</ul></div>
<p>
      <span class="emphasis"><em>Note</em></span>: The minor results
      <code class="literal">virus</code> and <code class="literal">outbreak</code> are only
      returned if the <code class="option">enable_antivir</code> option is set to
      <code class="literal">true</code>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.ec_logger.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.engage_tracker.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.30. EC_logger – Momentum-Style Logging </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.32. engagement_tracker – HTTP Engagement Tracking</td>
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
