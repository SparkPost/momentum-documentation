<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>17.4. Control_Listener Authorization</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="control_listener.php" title="Chapter 17. Configuring Momentum's System Console">
<link rel="prev" href="control_acct.php" title="17.3. Control_Listener Accounting">
<link rel="next" href="ecstream_listener.php" title="Chapter 18. Configuring Inbound Mail Service Using ECStream">
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
<tr><th colspan="3" align="center">17.4. Control_Listener Authorization</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="control_acct.php">Prev</a> </td>
<th width="60%" align="center">Chapter 17. Configuring Momentum's System Console</th>
<td width="20%" align="right"> <a accesskey="n" href="ecstream_listener.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="control_authz"></a>17.4. Control_Listener Authorization</h2></div></div></div>
<p>
    The authorization subsystem allows you to restrict the ability to
    run console commands based on the role of the user. The role
    membership of the user is determined based on the authenticated
    username. Pluggable authorization modules provide the means to map
    the username to a number of roles (or groups) that can then be
    matched against the rules defined in the Authorization stanza. The
    Authorization stanza is only in effect in the scope where the
    <code class="option">enable_authorization</code> is set to
    <code class="literal">true</code>. For more information about the
    Authorization stanza, see <a class="xref" href="conf.ref.authorization.php" title="authorization"><span class="refentrytitle">authorization</span></a>.
  </p>
<p>
    Logging of authorization events is controlled by the
    <code class="option">Enable_Authorization</code> option. If it is enabled,
    authorization is turned on, triggering the authorization logging
    hook. To capture the information, you must configure an account log
    logging module. Set the <code class="option">acctlog</code> option in an
    <a class="link" href="modules.ec_logger.php" title="71.30. EC_logger – Momentum-Style Logging">ec_logger</a> module in
    your configuration or build your own custom accounting logger. For
    <code class="filename">acctlog</code> format, see
    <a class="xref" href="log_formats.php#log_formats.acctlog" title="35.1. acctlog">Section 35.1, “<code class="filename">acctlog</code>”</a>.
  </p>
<p>
    The following is an example configuration with authorization
    enabled:
  </p>
<pre class="programlisting">
Control_Listener {
  Listen "/tmp/2025" {
    File_Mode = 0666
    AuthorizationParameters = [
      uri = "groups:///opt/msys/ecelerity/etc/console_roles"
    ]
  }

  Listen ":2025" {
    AuthDigestMD5Parameters [
      uri = "digest:///opt/msys/ecelerity/etc/console_passwd"
      log_authentication = "true"
    ]
    Enable_Authorization = "true"
    AuthorizationParameters = [
      uri = "groups:///opt/msys/ecelerity/etc/console_roles"
    ]
  }
}

Authorization {
 Role "root" {
   allow = ( ".*" )
 }
 Role "admin" {
   allow = ( "^config" "^summary$" )
 }
 Role "ec" {
   allow = ( "^flush" )
 }
}
</pre>
<p>
    This configuration enables the <code class="literal">groups</code>
    authorization module that provides Unix style
    <code class="filename">/etc/group</code> and Apache style
    <code class="filename">htgroup</code> flat file database of role membership.
  </p>
<p>
    In this example,
    <code class="filename">/opt/msys/ecelerity/etc/console_roles</code> is being
    used to hold the group membership information.
  </p>
<p>
    The contents of the groups file can be one of the following two
    formats:
  </p>
<pre class="screen">group:user1[,user2,user3, ...]</pre>
<pre class="screen">group:unusedpasswd:user1[,user2,user3, ...]</pre>
<p>
    The following file asserts that the role <code class="literal">root</code>
    applies to users with the username <code class="literal">root</code> and that
    the role <code class="literal">admin</code> applies to users names
    <code class="literal">serv</code> and <code class="literal">ec</code>.
  </p>
<pre class="programlisting">
root:root
admin:serv,ec
</pre>
<p>
    In this example, authorization is enabled for all connections over
    TCP as well as over the Unix domain socket. Note that connections
    over a Unix domain socket are mapped as loopback addresses when
    applying the listener ACL to determine which authentication and
    authorization rulesets to select.
  </p>
<p>
    The <code class="literal">Authorization</code> stanza is used at the global
    level of <code class="filename">ecelerity.conf</code> and details the rules
    for Authorization. The syntax is:
  </p>
<pre class="programlisting">
Authorization {
   Role "name" {
     allow = ( "list" "of" "patterns" )
   }
   Role "othername" {
     allow = ( "list" "of" "patterns" )
   }
}</pre>
<p>
    The authorization system will prevent console commands from being
    run unless an allow entry is explicitly configured. The
    authorization process first enumerates the roles/group membership of
    the user by querying the authorization module. Then the username and
    each role for the user are compared against the authorization rules.
    If the username or rolename matches, the <code class="literal">allow</code>
    rules are processed in the order that they are defined.
  </p>
<p>
    Each <code class="literal">allow</code> rule is a Perl compatible regular
    expression that will be matched against the command being executed.
    If the regular expression matches, processing of authorization rules
    stops and the console command is allowed to execute.
  </p>
<p>
    If no rules matched, the command is not allowed to execute.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="control_authz.ecauth"></a>17.4.1. Authorization Using the <code class="literal">ecauth</code> Scheme</h3></div></div></div>
<p>
      Proper use of an authorization stanza requires that a number of
      different elements be present. This example shows how using the
      <code class="literal">ecdb</code> datasource. The steps are as follows:
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
          Identify a role for the target user within the Authorization
          stanza. In the following example, the user,
          <code class="literal">john</code>, is allowed to execute
          <span class="command"><strong>config</strong></span> commands.
        </p></li>
<li class="listitem"><p>
          Ensure that the user associated with the defined role exists.
        </p></li>
<li class="listitem"><p>
          Define the <code class="option">AuthorizationParameters</code> option
          within the scope of the Control_Listener or within a Listen
          scope within the Control_Listener. In this example, the
          <code class="literal">ecauth</code> authentication scheme is used.
        </p></li>
<li class="listitem"><p>
          Enable authorization. In this case, it is enabled within the
          scope of the TCP/IP Listen stanza.
        </p></li>
</ol></div>
<pre class="programlisting">
Datasource "ecdb" {
  uri = ( "pgsql:host=192.168.0.50;dbname=ecelerity;user=ecuser;password=admin" )
}

auth_ds {
  Scheme "ecauth" {
    Authenticate {
      query = "SELECT password from webconsole.users where username = :user"
      cache = "ecdb"
      map = [
        user = "%{username}"
      ]
      type = "md5"
      returns_password = "true"
      password_column = "password"
    }
  ...
}
Authorization {
 Role "john" {
   allow = ("^config")
 }
 Role "admin" {
   allow = ( "^config" "^summary$" )
 }
 Role "root" {
   allow = ( ".*" )
 }
}
Control_Listener {
  ...
  AuthorizationParameters = [
    uri = "ecauth://"
  ]

  Listen "127.0.0.1:2025" {
    Enable_Authorization = "true"
  }
  ...
}
</pre>
<p>
      Given this Control_Listener configuration, the user
      <code class="literal">john</code> can log in to the Control_Listener at
      127.0.0.1:2025 using TCP/IP in the following way:
    </p>
<pre class="programlisting">
shell&gt; /opt/msys/ecelerity/bin/ec_console john@127.0.0.1:2025
Authorization required for console session
Password:
</pre>
<p>
      If a password is not supplied when issuing the
      <span class="command"><strong>ec_console</strong></span> command, the user will be prompted
      for one as shown in the preceding example.
    </p>
<p>
      Given that this user is allowed commands with the regex pattern
      <code class="literal">^config</code>, he can successfully execute any of the
      <span class="command"><strong>config</strong></span> commands. The default action for
      authorization is to deny. When deciding whether a user is allowed
      to execute a command, the command is matched against the regular
      expressions for all the roles given to that user. For this reason,
      an attempt by john to execute the <span class="command"><strong>summary</strong></span>
      command results in the following error message:
    </p>
<pre class="programlisting">
09:05:45 john@127.0.0.1:2025&gt; summary
Not Authorized for this command
</pre>
<p>
      If account logging is configured, an attempt to execute an
      unauthorized command will create an
      <code class="filename">acctlog.ec</code> entry such as the following:
    </p>
<pre class="programlisting">
1242133558@Z@127.0.0.1:2025@127.0.0.1:49440@john@0@summary
</pre>
<p>
      The last three fields indicate a failed execution of the summary
      command by the user <code class="literal">john</code>. For a description of
      the meaning of all the fields, see
      <a class="xref" href="log_formats.php#log_formats.acctlog" title="35.1. acctlog">Section 35.1, “<code class="filename">acctlog</code>”</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="control_acct.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="control_listener.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="ecstream_listener.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">17.3. Control_Listener Accounting </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 18. Configuring Inbound Mail Service Using ECStream</td>
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
