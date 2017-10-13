<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>credmgr</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="executable, command line, command, credmgr">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="exec.cmds.ref.php" title="Chapter 74. Executable Commands Reference">
<link rel="prev" href="executable.create_ssl_cert.php" title="create_ssl_cert">
<link rel="next" href="executable.ec_adtool.php" title="ec_adtool">
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
<tr><th colspan="3" align="center">credmgr</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="executable.create_ssl_cert.php">Prev</a> </td>
<th width="60%" align="center">Chapter 74. Executable Commands Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="executable.ec_adtool.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="executable.credmgr"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>credmgr — manipulate credentials used with the securecreds module</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/credmgr</code>  {
        create_db
      }</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/credmgr</code>  {
        create_key
      }</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/credmgr</code>  {
        del_cred
      }</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/credmgr</code>  {
        get_cred
      }</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/credmgr</code>  {
        set_cred
      }</p></div>
</div>
<div class="refsection">
<a name="idp12744464"></a><h2>Description</h2>
<p>
      <span class="command"><strong>credmgr</strong></span> is used in conjunction with the
      <a class="link" href="modules.securecreds.php" title="71.61. securecreds – Password Encryption/Credential Retrieval">securecreds</a> module. Use
      it to create the credentials database and the credentials key and
      to set, get, and delete credentials. If you are not using the
      securecreds module, you do not need to be concerned with this
      command.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If you are using this tool in a cluster configuration, you must
        use this tool to set up credentials on each node.
      </p>
</div>
<p>
      The credentials database is implemented as a SQLite 3 database.
      Note the following points:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          If during installation you choose to enable encrypted
          passwords, the credentials database and key are created at the
          default location. Root has read/write access to this database
          and ecuser has read access. This is enforced by having credmgr
          explicitly set the ownership and permissions appropriately on
          the credentials files.
        </p></li>
<li class="listitem"><p>
          In a cluster configuration, the credential database and key
          are local to each node.
        </p></li>
<li class="listitem"><p>
          The credentials database stores usernames and passwords for
          facilities (or services) running on specified hosts.
        </p></li>
<li class="listitem"><p>
          The username, hostname, and facility name serve as the primary
          key into the credentials database.
        </p></li>
<li class="listitem"><p>
          The password is stored in an encrypted form and can be
          decrypted using the credentials key. The key file should only
          be available to the root and ecuser system accounts. This is
          enforced by <span class="command"><strong>credmgr</strong></span>, which explicitly sets
          the ownership and permissions.
        </p></li>
</ul></div>
<p>
      The actions that you can perform using this command are:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">create_db</code> – create the SQLite
          database where the credentials will be stored. If you wish to
          use the securecreds module, perform this action immediately
          after installation.
        </p></li>
<li class="listitem"><p>
          <code class="literal">create_key</code> – create the encryption
          key. If you change an existing key, all encrypted passwords
          will be re-encrypted.
        </p></li>
<li class="listitem"><p>
          <code class="literal">del-cred</code> – delete the credentials
          for the specified user or hostname.
        </p></li>
<li class="listitem"><p>
          <code class="literal">get_cred</code> – when used with no other
          options, gets all credentials. Otherwise, this action
          retrieves the credentials of the specified user or hostname.
          If the user does not exist, no credentials are displayed.
        </p></li>
<li class="listitem"><p>
          <code class="literal">set_cred</code> – set the credentials for
          the specified user or hostname. Create credentials if the user
          does not exist.
        </p></li>
</ul></div>
<p>
      The options available with <span class="command"><strong>credmgr</strong></span> are listed
      below. Not all options are applicable to all actions.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          -d <em class="replaceable"><code>db_file</code></em>
        </span></dt>
<dd>
<p>
            Set the location of the credentials database file. Use this
            option with the <code class="literal">create_db</code> action. The
            default value for this option is
            <code class="filename">/opt/msys/ecelerity/etc/credentials.db</code>.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              We strongly recommend that you <span class="emphasis"><em>not</em></span>
              change the default location of the credentials database.
              If you absolutely must change the location of this file
              please create a symlink to the default location.
            </p>
</div>
</dd>
<dt><span class="term">
          -k <em class="replaceable"><code>key_file</code></em>
        </span></dt>
<dd>
<p>
            Set the location of the encryption key file. Use this option
            with the <code class="literal">create_key</code> action. The default
            value for this option is
            <code class="filename">/opt/msys/ecelerity/etc/credentials.key</code>.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              We strongly recommend that you <span class="emphasis"><em>not</em></span>
              change the default location of the encryption key. If you
              absolutely must change the location of this file please
              create a symlink to the default location.
            </p>
</div>
</dd>
<dt>
<span class="term">
          -h <em class="replaceable"><code>hostname</code></em>
        , </span><span class="term">
          --hostname=<em class="replaceable"><code>hostname</code></em>
        </span>
</dt>
<dd><p>
            Set, get or delete the credentials associated with the
            specified hostname. Use this option along with the
            <code class="option">username</code> and <code class="option">facility</code>
            options.
          </p></dd>
<dt>
<span class="term">
          -u <em class="replaceable"><code>username</code></em>
        , </span><span class="term">
          --username=<em class="replaceable"><code>username</code></em>
        </span>
</dt>
<dd><p>
            Set, get, or delete the credentials associated with the
            specified username. Use this option along with the
            <code class="option">facility</code> and <code class="option">hostname</code>
            options.
          </p></dd>
<dt>
<span class="term">
          -f <em class="replaceable"><code>facility</code></em>
        , </span><span class="term">
          --facility=<em class="replaceable"><code>facility</code></em>
        </span>
</dt>
<dd>
<p>
            Set, get, or delete the credentials associated with the
            specified facility. The facility name identifies the type of
            service associated with a set of credentials. For example,
            “ldap” indicates that the credentials apply to
            an LDAP service. Use this option along with the
            <code class="option">username</code> and <code class="option">hostname</code>
            options.
          </p>
<p>
            Facility names are as follows:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                <code class="literal">pgsql</code> – the built-in
                PostgreSQL database
              </p></li>
<li class="listitem"><p>
                <code class="literal">odbc</code> – any ODBC databases
              </p></li>
<li class="listitem"><p>
                <code class="literal">mysql</code> – any MySQL databases
              </p></li>
<li class="listitem"><p>
                <code class="literal">ldap</code> – any LDAP services
              </p></li>
<li class="listitem"><p>
                <code class="literal">proxy</code> – any proxy server
                service
              </p></li>
<li class="listitem"><p>
                <code class="literal">eccfg</code> – version control
                management tool. Use the hostname
                <code class="literal">ecconfigd</code> and the username
                <code class="literal">ecuser</code> with this facility.
              </p></li>
<li class="listitem"><p>
                <code class="literal">ecconfigd</code> – configuration
                management server. Use the hostname
                <code class="literal">_ecconfigd_</code> and the username
                <code class="literal">ecuser</code> with this facility
              </p></li>
</ul></div>
</dd>
<dt>
<span class="term">
          -p <em class="replaceable"><code>password</code></em>
        , </span><span class="term">
          --password=<em class="replaceable"><code>password</code></em>
        </span>
</dt>
<dd><p>
            Set, get, or delete a password in plain text. Use this
            option along with the <code class="option">username</code>
            <code class="option">hostname</code> and <code class="option">facility</code>
            options.
          </p></dd>
<dt><span class="term">
          -P
        </span></dt>
<dd><p>
            When specified in list credential mode
            (<code class="literal">get_cred</code> with no other options), this
            option shows clear text passwords
          </p></dd>
<dt><span class="term">
          --cipher=[aes | des_ede3_cbc |...]
        </span></dt>
<dd><p>
            Encrypt or decrypt a cipher type. This option defaults to
            <code class="literal">aes</code>. Use <strong class="userinput"><code>man enc</code></strong>
            for all supported ciphers on your system.
          </p></dd>
<dt><span class="term">
          --key_size=[16 | 24 | 32]
        </span></dt>
<dd><p>
            Length of the key size, in octets. This option defaults to
            <code class="literal">32</code>.
          </p></dd>
<dt><span class="term">
          --block_mode=[cbc | ecb | ofb |...]
        </span></dt>
<dd><p>
            Encrypt or decrypt block mode. This option defaults to
            <code class="literal">cbc</code>.
          </p></dd>
</dl></div>
<p>
      Examples of usage follow:
    </p>
<div class="example">
<a name="executable.credmgr.examples"></a><p class="title"><b>Example 74.1. credmgr examples</b></p>
<div class="example-contents"><pre class="programlisting">
/opt/msys/ecelerity/bin/credmgr create_db -d /opt/msys/ecelerity/etc/credentials.db
            : create database at given place
/opt/msys/ecelerity/bin/credmgr create_key -k /opt/msys/ecelerity/etc/credentials.key
            : create keyfile at given place, with default encryption/decryption algorithm:
              aes_256_cbc on Linux
/opt/msys/ecelerity/bin/credmgr get_cred
            : list all the user entries in the database, without credential/password
/opt/msys/ecelerity/bin/credmgr get_cred -P
            : list all the entries in the database, with credential/password shown as clear text
/opt/msys/ecelerity/bin/credmgr get_cred --hostname=host1 --username=user1 --facility=facy1
            : retrieve the password for the user defined by hostname(host1), username(user1)
            &amp; facility(facy1)
/opt/msys/ecelerity/bin/credmgr set_cred --hostname=host1 --username=user1 --facility=facy1 \
            -p password1
            : set the password for the user with hostname(host1),
              username(user1) &amp; facility(facy1) to "password1"
              password is updated for existing user
/opt/msys/ecelerity/bin/credmgr del_cred --hostname=host1 --username=user1 --facility=facy1
            : delete the credential entry for the user with hostname(host1), username(user1)
            &amp; facility(facy1)
</pre></div>
</div>
<br class="example-break">
</div>
<div class="refsection">
<a name="idp13566480"></a><h2>See Also</h2>
<p>
      <a class="xref" href="modules.securecreds.php" title="71.61. securecreds – Password Encryption/Credential Retrieval">Section 71.61, “securecreds – Password Encryption/Credential Retrieval”</a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="executable.create_ssl_cert.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="exec.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="executable.ec_adtool.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">create_ssl_cert </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> ec_adtool</td>
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
