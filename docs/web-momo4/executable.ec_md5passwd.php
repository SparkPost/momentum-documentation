<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ec_md5passwd</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="executable, command line, command, ec_md5passwd">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="exec.cmds.ref.php" title="Chapter 74. Executable Commands Reference">
<link rel="prev" href="executable.ec_log_trace.php" title="ec_log_trace">
<link rel="next" href="executable.ec_rotate.php" title="ec_rotate">
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
<tr><th colspan="3" align="center">ec_md5passwd</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="executable.ec_log_trace.php">Prev</a> </td>
<th width="60%" align="center">Chapter 74. Executable Commands Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="executable.ec_rotate.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="executable.ec_md5passwd"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>ec_md5passwd — changes the password for a system user's password</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">/opt<span class="phrase">/msys</span>/ecelerity/bin/ec_md5passwd</code>  [
        -h
      ] [
        -f
      ] [
        -r <em class="replaceable"><code>realm</code></em>
      ] [
        <em class="replaceable"><code>username</code></em>
      ] [
        <em class="replaceable"><code>password</code></em>
      ]</p></div>
</div>
<div class="refsection">
<a name="idp10840128"></a><h2>Description</h2>
<p>
      <span class="command"><strong>ec_md5passwd</strong></span> creates a hash of a password using
      the MD5 hash algorithm. The user name and password are required.
      Credentials are stored in
      <code class="filename">/opt<span class="phrase">/msys</span>/ecelerity/etc/console_passwd</code>.
    </p>
<p>
      This command has the following options:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          -h
        </span></dt>
<dd><p>
            Display a help message.
          </p></dd>
<dt><span class="term">
          -f
        </span></dt>
<dd><p>
            Specify a password file to update. The password file is
            defined by the <code class="literal">uri</code> option in the access
            control list of the <code class="literal">Control_Listener</code>
            stanza of <code class="filename">ecelerity.conf</code>. Typically,
            this value is
            <code class="literal">digest:///opt/msys/ecelerity/etc/console_passwd</code>.
            If you do not use the <code class="option">-f</code> option, output is
            sent to the screen and you can copy the output and paste it
            into a text file.
          </p></dd>
<dt><span class="term">
          -r <em class="replaceable"><code>realm</code></em>
        </span></dt>
<dd><p>
            Specify a realm. If not specified, the value of the
            environment variable <code class="literal">EC_DIGEST_REALM</code> is
            used. If <code class="literal">EC_DIGEST_REALM</code> is not set, the
            value <code class="literal">Momentum Console</code> is used.
          </p></dd>
<dt><span class="term">
          <em class="replaceable"><code>username</code></em>
        </span></dt>
<dd><p>
            If you do not specify a user name, you are prompted for one.
            You can update the password of an existing user by
            specifying a user's name.
          </p></dd>
<dt><span class="term">
          <em class="replaceable"><code>password</code></em>
        </span></dt>
<dd><p>
            If you do not specify a password, you are prompted for one.
          </p></dd>
</dl></div>
<p>
      This command is typically used in the following manner:

</p>
<pre class="screen">shell&gt; /opt/msys/ecelerity/bin/ec_md5passwd -f <em class="replaceable"><code>/opt/msys/ecelerity/etc/console_passwd</code></em> <em class="replaceable"><code>new_usr</code></em> <em class="replaceable"><code>passwd</code></em></pre>
<p>
    </p>
<p>
      If the specified file does not exist, it will be created. If the
      path does not exist, an error message will be displayed.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If you decide to use MD5 authentication instead of the
        <code class="literal">ecdb</code> datasource, you must ensure that the
        owner of the <code class="filename">console_passwd</code> file is
        <code class="literal">ecuser:ecuser</code>.
      </p>
</div>
<p>
      If the file, user name and password are omitted, you will be
      prompted to enter the information, as shown in the following
      example:

</p>
<pre class="screen">shell&gt;  /opt/msys/ecelerity/bin/ec_md5passwd
Username: <em class="replaceable"><code>fred</code></em>
Please enter password for <em class="replaceable"><code>fred</code></em>
Password:
Please enter the password again
Password:
Password updated.
Place or replace this line in your password file:
<em class="replaceable"><code>fred</code></em>:Momentum Console:<em class="replaceable"><code>f8cd71a383c02d5e5b0d7eb0385d38ad</code></em></pre>
<p>

      Copy the output of this command into the password file as
      instructed.
    </p>
<p>
      You can also update an existing user's password by specifying the
      user name and then supplying the new password.
    </p>
<p>
      You do not need to restart the MTA after adding a new user.
    </p>
</div>
<div class="refsection">
<a name="idp10868144"></a><h2>See Also</h2>
<p>
      <a class="link" href="control_auth.php#control_auth.digest-md5" title="17.2.1. DIGEST-MD5 Authentication">DIGEST-MD5
      Authentication</a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="executable.ec_log_trace.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="exec.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="executable.ec_rotate.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">ec_log_trace </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> ec_rotate</td>
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
