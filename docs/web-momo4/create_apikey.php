<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 43. Creating an API Key</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.http_rest.php" title="Part VII. Message Generation (HTTP)">
<link rel="prev" href="p.http_rest.php" title="Part VII. Message Generation (HTTP)">
<link rel="next" href="web-ui.apikeys.php" title="Chapter 44. Managing Your API Keys">
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
<tr><th colspan="3" align="center">Chapter 43. Creating an API Key</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="p.http_rest.php">Prev</a> </td>
<th width="60%" align="center">Part VII. Message Generation (HTTP)</th>
<td width="20%" align="right"> <a accesskey="n" href="web-ui.apikeys.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="create_apikey"></a>Chapter 43. Creating an API Key</h2></div></div></div>
<p class="config"><b>Configuration Change. </b>
      As of version 4.1, API authentication is enabled by default. For
      instructions to disable it, see <a class="xref" href="auth.php" title="Chapter 21. Enforcing REST API/UI User Authentication">Chapter 21, <i>Enforcing REST API/UI User Authentication</i></a>. When
      disabled, an apikey and <code class="literal">Authorization</code> header is
      no longer required.
    </p>
<p>
    <span class="bold"><strong>Introduction</strong></span>
  </p>
<p>
    Momentum offers a set of REST API enabling client applications to
    integrate with Momentum and perform actions associated with
    generating messages and reporting analytics data. To ensure security
    for your application, Momentum enforces API authentication by
    default. All REST APIs require that you authenticate with every
    request by specifying an <code class="literal">Authorization</code> header.
    The value of the <code class="literal">Authorization</code> header must be a
    valid API key with the appropriate permissions to use the API. For
    examples of supplying the <code class="literal">Authorization</code> header,
    refer to the cURL examples in the following sections or any of the
    individual REST API request examples in the
    <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a> documentation.
  </p>
<p>
    If you are the system administrator, you can generate an API key
    using the web-based UI.
  </p>
<p>
    <span class="bold"><strong>Creating an API Key</strong></span>
  </p>
<p>
    This section provides instructions to create an API key in the UI.
    Take care to record and safeguard your API keys at all times. You
    cannot retrieve an API key after it has been created.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      For this tutorial, you will need a web browser to access the UI.
      The UI supports Firefox and Internet Explorer, version 9 and 10.
      All browsers must have cookies and JavaScript enabled.
    </p>
<p>
      You must also have system administration privileges.
    </p>
</div>
<p>
    Follow these steps to create an API key:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
        Open the UI by pointing your web browser at the appropriate IP
        address and log in using your administrator credentials.
      </p></li>
<li class="listitem">
<p>
        Click <em class="replaceable"><code>admin</code></em> in the upper-right
        corner, as shown in <a class="xref" href="create_apikey.php#figure_admin_icon" title="Figure 43.1. Login">Figure 43.1, “Login”</a>,
        to open the <span class="guilabel">Settings</span> section.
      </p>
<div class="figure">
<a name="figure_admin_icon"></a><p class="title"><b>Figure 43.1. Login</b></p>
<div class="figure-contents"><div class="mediaobject"><img src="images/username_icon.png" alt="Login"></div></div>
</div>
<br class="figure-break">
</li>
<li class="listitem">
<p>
        In the <span class="guilabel">Settings</span> section, click the
        <span class="guilabel">New API Key</span> icon in the upper-right corner
        to open the <span class="guilabel">Create New API Key</span> form, as
        shown in <a class="xref" href="create_apikey.php#figure_create_api_key" title="Figure 43.2. Create New API Key">Figure 43.2, “Create New API Key”</a>.
      </p>
<div class="figure">
<a name="figure_create_api_key"></a><p class="title"><b>Figure 43.2. Create New API Key</b></p>
<div class="figure-contents"><div class="mediaobject"><img src="images/create_apikey.png" alt="Create New API Key"></div></div>
</div>
<br class="figure-break">
</li>
<li class="listitem">
<p>
        Enter the following information:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            Label - User-friendly label for the API key
          </p></li>
<li class="listitem">
<p>
            Account Password - Password for account to verify access
          </p>
<p>
            Your password is required to securely authorize this
            addition to your account.
          </p>
</li>
</ul></div>
</li>
<li class="listitem"><p>
        Select the grant types that you want from the list displayed. It
        is always best practice to ONLY select the permissions that are
        necessary. To complete the examples in the following sections,
        you will need all grant types. For an explanation of the
        permissions, see <a class="xref" href="web-ui.apikeys.php#web-ui.apikeys.viewing" title="44.1. Viewing Your API Keys">Section 44.1, “Viewing Your API Keys”</a>.
      </p></li>
<li class="listitem"><p>
        When complete, click <span class="guibutton">Create</span> to create
        your new API key. If the API key is successfully created, a
        message will display upon return to the
        <span class="guilabel">Settings</span> section showing the value of the
        API key.
      </p></li>
<li class="listitem">
<p>
        Record the value of your API key to use in the following
        tutorials.
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          Be sure to copy and paste the API key when it is displayed.
          Following the creation of an API key, you can modify its
          grants and associated label, but the UI will no longer expose
          the original value. Please take care to record and safeguard
          your API keys at all times.
        </p>
</div>
</li>
</ol></div>
<p>
    Congratulations! You have successfully created an API key using
    Momentum's UI. In addition to the creating an API key, you can
    manage your existing API keys using the UI. For more information,
    see <a class="xref" href="web-ui.apikeys.php" title="Chapter 44. Managing Your API Keys">Chapter 44, <i>Managing Your API Keys</i></a>.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="p.http_rest.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.http_rest.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="web-ui.apikeys.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Part VII. Message Generation (HTTP) </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 44. Managing Your API Keys</td>
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
