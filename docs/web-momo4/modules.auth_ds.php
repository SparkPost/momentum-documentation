<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.8. auth_ds – Datasource based SMTP Authentication</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.as_logger.php" title="71.7. as_logger – Audit Series Logger">
<link rel="next" href="modules.auth_radius.php" title="71.9. auth_radius – RADIUS based SMTP Authentication">
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
<tr><th colspan="3" align="center">71.8. auth_ds – Datasource based SMTP Authentication</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.as_logger.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.auth_radius.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.auth_ds"></a>71.8. auth_ds – Datasource based SMTP Authentication</h2></div></div></div>
<a class="indexterm" name="idp19829184"></a><p>
    With this module, Momentum can provide authenticated SMTP sessions
    via SMTP AUTH by using any supported datasource as the
    authentication bridge. When a user connects to Momentum, if
    authentication is supported, it will attempt to authenticate the
    user by issuing a query against the configured datasource. If the
    result of that query is "true", the user was successfully
    identified.
  </p>
<p>
    Since the module uses the datasource layer, it can take advantage of
    the built-in caching mechanism to avoid putting pressure on your
    authentication data stores. For more information about the ds_core
    module and datasource drivers, see
    <a class="xref" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">Section 71.29, “ds_core - Datasource Query Core”</a>.
  </p>
<p>
    You may define multiple authentication schemes against different
    datasources, and configure your listeners to use a different scheme
    depending on the connecting IP address.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Hosts are not subject to any SMTP authentication that you may have
      implemented when specified by the
      <a class="link" href="conf.ref.relay_hosts.php" title="relay_hosts"><code class="option">relay_hosts</code></a>
      option or when
      <a class="link" href="conf.ref.open_relay.php" title="open_relay"><code class="option">open_relay</code></a>
      is set to <code class="literal">true</code>.
    </p>
</div>
<p>
    When a user attempts to authenticate, the SMTP listener routes the
    authentication attempt to the authentication module, which then uses
    the query that you have configured. If the results of the query are
    not already known, a query is run asynchronously to obtain them, and
    the SMTP session is suspended, allowing Momentum to continue to
    service other sessions. When the results come back, the first column
    of the first row is inspected; if it is a non-zero value, then the
    authentication is considered successful.
  </p>
<p>
    If you are using a datasource, such as LDAP, where it is not
    possible to guarantee the ordering of the results returned, you may
    add a <code class="option">password_column</code> option to the
    <code class="literal">auth_ds</code> module configuration to specify which
    named column holds the password in the result set.
  </p>
<div class="example">
<a name="example.auth_ds.password_column.3"></a><p class="title"><b>Example 71.11. password_column</b></p>
<div class="example-contents"><pre class="programlisting">
auth_ds {
  Scheme "ecauth" {
    Authenticate {
      ...
      # this scheme returns a password in the column named "password"
      password_column = "password"
      returns_password = "true"
    }
  }
}
</pre></div>
</div>
<br class="example-break"><div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp19842096"></a>71.8.1. Configuration</h3></div></div></div>
<p>
      This module is loaded automatically as required and does not need
      to be explicitly included. The following is an example
      configuration:
    </p>
<div class="example">
<a name="example.auth_ds.configuration"></a><p class="title"><b>Example 71.12. auth_ds Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
auth_ds {
  Scheme "auth" {
    Authenticate {
      query = "SELECT password FROM webconsole.users WHERE username = :user"
      cache = "auth"
      map = [
        user = "%{username}"
      ]
      type = "md5"
      returns_password = "true"
      password_column = "password"
    }
    QueryGroups {
      query = "SELECT groupname FROM webconsole.groupassignments WHERE username = :user"
      cache = "auth"
      group_column = "groupname"
      map = [
        user = "%{username}"
      ]
    }
    EnumGroups {
      query = "SELECT role from webconsole.roles"
      cache = "auth"
      group_column = "role"
    }
  }
}
</pre></div>
</div>
<br class="example-break"><p>
      The following configuration options are available in
      authentication schemes:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          cache
        </span></dt>
<dd><p>
            Datasource cache to execute the query against.
          </p></dd>
<dt><span class="term">
          EnumGroups
        </span></dt>
<dd>
<p>
            Stanza enumerates all possible groups or roles.
          </p>
<p>
            EnumGroups stanzas can be used to plug in to an external
            authentication system defined in an Authorization stanza.
            For example, the EnumGroup stanza allows you to interrogate
            the groups and then present those in a list for assigning
            permissions via an Authorization stanza. See
            <a class="xref" href="conf.ref.authorization.php" title="authorization"><span class="refentrytitle">authorization</span></a>.
          </p>
</dd>
<dt><span class="term">
          map
        </span></dt>
<dd><p>
            Parameter expansion map to use.
          </p></dd>
<dt><span class="term">
          query
        </span></dt>
<dd><p>
            Query to be executed.
          </p></dd>
<dt><span class="term">
          QueryGroups
        </span></dt>
<dd>
<p>
            All the groups associated with the user.
          </p>
<p>
            QueryGroups stanzas can be used to plug in to an external
            authentication system defined in an Authorization stanza.
            See <a class="xref" href="conf.ref.authorization.php" title="authorization"><span class="refentrytitle">authorization</span></a>.
          </p>
</dd>
<dt><span class="term">
          returns_password
        </span></dt>
<dd><p>
            Whether or not the query returns a password for validation
            inside the module or simply a truth value, for validation
            inside the DB.
          </p></dd>
<dt><span class="term">
          type
        </span></dt>
<dd>
<p>
            Encryption type for passwords in the data store. Enabled
            this by setting the type parameter within the ecauth block.
            If this is unspecified, you can extract this from the data
            store as well using the <code class="option">type_column</code> option.
          </p>
<p>
            The <code class="option">type</code> option can take the values
            "ucrypt" and "md5" specifying Unix style and digest md5
            style respectively.
          </p>
</dd>
<dt><span class="term">
          type_column
        </span></dt>
<dd><p>
            Column name containing the encryption type for a given
            password. This corresponds with the
            <code class="option">type_map</code> option.
          </p></dd>
<dt><span class="term">
          type_map
        </span></dt>
<dd>
<p>
            Dictionary that maps a column to an encryption type.
          </p>
<p>
            Type maps contain key-value pairs where the key is the
            contents of the column identified by the
            <code class="option">type_column</code> option and the value is one of
            the following:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                <span class="bold"><strong>clear</strong></span> – Cleartext
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>digest-md5</strong></span> –
                Digest-MD5 encryption
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>hmac_md5</strong></span> – HMAC
                MD5 encryption
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>md5</strong></span> – MD5
                encryption
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>md5_base64</strong></span> – MD5
                encryption (base64 representation)
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>md5_hex</strong></span> – MD5
                encryption (hex representation)
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>rfc2307</strong></span> – RFC
                2307 encryption specifiers (crypt, md5, smd5, sha, ssha)
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>sha1_base64</strong></span> –
                SHA1 encryption (base64 representation)
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>sha1_hex</strong></span> – SHA1
                encryption (hex representation)
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>smd5</strong></span> – Seeded MD5
                encryption
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>ssha1</strong></span> – Seeded
                SHA1 encryption
              </p></li>
<li class="listitem"><p>
                <span class="bold"><strong>ucrypt</strong></span> – Unix
                crypt
              </p></li>
</ul></div>
</dd>
</dl></div>
<h4>
<a name="idp19895776"></a>Parameter expansion maps</h4>
<p>
      Use parameter expansion maps to map authentication parameters into
      your query. The maps consist of parameter names that map to
      interpolated value strings based on the authentication parameters
      listed below. This approach allows Momentum to take advantage of
      native prepared statement support that may be present in the
      underlying datasource drivers, while still allowing you a certain
      amount of freedom for string building.
    </p>
<p>
      The right hand side of the expansion maps consists of a string
      value. The string can contain <code class="literal">%{parametername}</code>,
      where <code class="literal">parametername</code> corresponds to one of the
      parameters listed below. When the query is executed, the parameter
      name is expanded to its value before being passed on to the data
      source. You may interpolate multiple parameters in a single string
      in this way, if desired.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          crypt
        </span></dt>
<dd><p>
            Describes the level of crypto in use. Valid values are
            <code class="literal">clear</code> (for LOGIN),
            <code class="literal">md5</code>, <code class="literal">hmac_md5</code> (for
            CRAM-MD5) or <code class="literal">digest-md5</code> (for DIGEST-MD5).
          </p></dd>
<dt><span class="term">
          nonce
        </span></dt>
<dd><p>
            nonce for MD5 based authenticators
          </p></dd>
<dt><span class="term">
          password
        </span></dt>
<dd><p>
            The password may be cleartext, or it may have some level of
            crypto applied to it, according to the
            <code class="literal">crypt</code> parameter.
          </p></dd>
<dt>
<span class="term">
          realm
        , </span><span class="term">
          digest-uri
        </span>
</dt>
<dd><p>
            Parameters for DIGEST-MD5 based auth
          </p></dd>
<dt><span class="term">
          uri
        </span></dt>
<dd><p>
            uri specified in the listener configuration
          </p></dd>
<dt><span class="term">
          username
        </span></dt>
<dd><p>
            Username
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.auth_ds.mysql"></a>71.8.2. Authenticating against MySQL</h3></div></div></div>
<p>
      The following configuration excerpt demonstrates how to configure
      Momentum to authenticate against MySQL:
    </p>
<div class="example">
<a name="example.auth_ds.mysql.3"></a><p class="title"><b>Example 71.13. Using MySQL as a data store</b></p>
<div class="example-contents"><pre class="programlisting">
# Define a cache named authdb
# that talks to a mysql server
Datasource "authdb" {
  uri = ( "mysql:host=localhost;port=3306;dbname=ecauth;user=root;password=password" )
}

# Load the authentication module
auth_ds {
  # register "mysqlauth" as an authentication scheme
  # this is referenced by the ESMTP_Listener below.
  Scheme "mysqlauth" {
    Authenticate {
      # This query will return a row containing the value 1 if
      # the username and password match up
        query = "SELECT 1 AS ALLOW FROM users WHERE user_name = :user and
          password = encrypt(:pass, PASSWORD)"
      # The query will be presented against the MySQL cache
      cache = "authdb"
      # This map is used to resolve the placeholders in the query by substituting
      # the username and password supplied by the user.

      map = [
        user = "%{username}"
        pass = "%{password}"
      ]
    }
  }
}

ESMTP_Listener {
  Listen ":25" {
    SMTP_Extensions = (
      "ENHANCEDSTATUSCODES"
      "STARTTLS"
      "AUTH LOGIN"
    )
    AuthLoginParameters = [uri = "mysqlauth://"]
    SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH LOGIN" )
  }
}
</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
        For licensing reasons, the MySQL module does not ship with
        Momentum and must be downloaded separately. For instructions on
        downloading and installing this module, see
        <a class="xref" href="modules.ds_core.php#modules.ds_core.ds_mysql" title="71.29.2.1.8. MySQL">Section 71.29.2.1.8, “MySQL”</a>.
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.auth_ds.ldap"></a>71.8.3. Authentication against LDAP</h3></div></div></div>
<p>
      The precise configuration used to implement LDAP based
      authentication varies depending on your LDAP schema. If you are
      migrating from our older LDAP auth module, the authentication
      concept was that the username and password from the SMTP session
      would be used as the bind name and password used to establish a
      connection to the LDAP server. If the bind attempt was successful,
      the user was deemed to have been authenticated. With
      <span class="emphasis"><em>this</em></span> module, we also need to obtain results
      from an LDAP query.
    </p>
<p>
      The suggested approach for implementing LDAP authentication using
      the datasource layer is to craft an LDAP query that returns the
      common name of the user you are authenticating.
    </p>
<p>
      In the case of an LDAP directory like the Openwave directory, you
      will need to be able to specify a <code class="option">type_map</code> so
      that the server can correctly encrypt the provided password for
      comparison. The following example shows integration against an
      openwave directory:
    </p>
<div class="example">
<a name="example.auth_ds.ldap.3"></a><p class="title"><b>Example 71.14. Authenticating using LDAP</b></p>
<div class="example-contents"><pre class="programlisting">
auth_ds {
  Scheme "myscheme_openwave" {
    Authenticate {
      query = "ldap:///?mailpassword,mailpasswordtype?sub? »
              (|(maillogin=$user)(mail=$user)(mailalternateaddress=$user))"
      cache = "openwave_directory"
      returns_password = "true"
      password_column = "mailpassword"
      type_column = "mailpasswordtype"
      map = [
        user = "%{username}"
      ]
      type_map = [
        C = "clear"
        U = "ucrypt"
        H = "sha1_hex"
        S = "ssha1"
        M = "smd5"
      ]
    }
  }
}
</pre></div>
</div>
<br class="example-break"><p>
      The LDAP driver supports a bind-only mode that allows connection
      and authentication without execution of a query. If it succeeds,
      it returns a "bind" column with a value of 1. This is useful in
      cases where it is desirable to pass the credentials through from
      SMTP authentication to the LDAP directory, for example, to
      eliminate the need to change the LDAP query if authentication
      settings change.
    </p>
<p>
      The following example shows how to use the bind only feature.
    </p>
<div class="example">
<a name="example.auth_ds.bind.3"></a><p class="title"><b>Example 71.15. Using the bind-only feature</b></p>
<div class="example-contents"><pre class="programlisting">
auth_ds {
  Scheme "ldapauthscheme" {
    Authenticate {
      query = "ldap://ldaphostname/????bindname=uid=$user%2Cou=people »
              %2Cdc=example%2Cdc=com,x-bindpw=$pass"
      cache = "ldapauth"
      map =  [
        user = "%{username}"
        pass = "%{password}"
      ]
    }
  }
}
</pre></div>
</div>
<br class="example-break">
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.as_logger.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.auth_radius.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.7. as_logger – Audit Series Logger </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.9. auth_radius – RADIUS based SMTP Authentication</td>
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
