<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>config</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="console.cmds.ref.php" title="Chapter 73. Non-Module-Specific Console Commands">
<link rel="prev" href="console_commands.cache_stats.php" title="cache stats">
<link rel="next" href="console_commands.count.php" title="count">
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
<tr><th colspan="3" align="center">config</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="console_commands.cache_stats.php">Prev</a> </td>
<th width="60%" align="center">Chapter 73. Non-Module-Specific Console Commands</th>
<td width="20%" align="right"> <a accesskey="n" href="console_commands.count.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="console_commands.config"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>config — online configuration tuning for Momentum</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        begin
       </p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        begin from scratch
       </p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        commit
       </p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        locate
        {
        <em class="replaceable"><code>scope_name</code></em>
      } [
        <em class="replaceable"><code>regex</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        reload
        [
        <em class="replaceable"><code>/alternate/path</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>  { 
          get
          |   
          eval
          |   
          unset
         } [
        <em class="replaceable"><code>scope_name</code></em>
      ...] {
        <em class="replaceable"><code>optname</code></em>
      }</p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        replay
       </p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        rollback
       </p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        set
        [
        <em class="replaceable"><code>scope_name</code></em>
      ...] {
        <em class="replaceable"><code>optname</code></em>
      } {
        <em class="replaceable"><code>value</code></em>
      }</p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        show
        [
        <em class="replaceable"><code>scope_name</code></em>
      ...] [
        <em class="replaceable"><code>option_name</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        showrecurse
        [
        <em class="replaceable"><code>scope_name</code></em>
      ...]</p></div>
<div class="cmdsynopsis"><p><code class="command">config</code>   
        writeback
        [
        <em class="replaceable"><code>/alternate/path</code></em>
      ]</p></div>
</div>
<div class="refsection">
<a name="console_commands.config.original"></a><h2>Description</h2>
<p>
      The <span class="command"><strong>config</strong></span> command enables online configuration
      tuning for Momentum. It has three forms:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
          <span class="command"><strong>config { get | eval | unset } [ scope_name ...] {
          optname }</strong></span>
        </p>
<p>
          The first form takes a <code class="literal">get</code>,
          <code class="literal">eval</code> or <code class="literal">unset</code> mode, zero
          or more scope specifiers, and an option name as arguments. It
          gets, evaluates, or clears the value of the specified option
          in the specified scope, depending on the command given.
        </p>
<p>
          The scope may be a named scope or an anonymous scope. The
          following examples illustrate this:

</p>
<pre class="screen">
10:47:35 /tmp/2025&gt; config set ESMTP_Listener Pathway foo
10:47:35 /tmp/2025&gt; config set ESMTP_Listener Peer 127.0.0.1 Pathway foo
</pre>
<p>

          In these examples, <code class="literal">ESMTP_Listener</code> is an
          anonymous scope name and <code class="literal">Peer</code> is a named
          scope where <code class="literal">127.0.0.1</code> is its instance name.
          Note that you are allowed to have named scopes inside
          anonymous scopes (as in the second example) or anonymous
          scopes inside named scopes. It is also legal to have an
          optional equals sign between the option name and the assigned
          value; this facilitates copying and pasting from the
          <code class="filename">ecelerity.conf</code> file into the console.
          When setting options to values that contain characters such as
          ‘<code class="literal">#</code>’, you must use quotation marks.
        </p>
<p>
          Both <code class="literal">get</code> and <code class="literal">eval</code>
          display the current value of an option, the difference being
          that <code class="literal">eval</code> will fall back to more generic
          scopes (and eventually to the option's default value). On the
          other hand, <code class="literal">get</code> only looks in the scope
          specified. So if an option is not specified within that scope,
          no value is returned. For example, if
          <code class="option">blackhole</code> is not set in your configuration
          file, the following output shows how the result of using
          <code class="literal">get</code> or <code class="literal">eval</code> differs:

</p>
<pre class="screen">
10:47:35 /tmp/2025&gt; config get blackhole
Option 'Blackhole' is not set in scope ''.
10:47:35 /tmp/2025&gt; config eval blackhole
Blackhole = 0
</pre>
<p>
        </p>
<p>
          Using <code class="literal">unset</code>, the value of the specified
          option in the specified scope is cleared; when evaluating the
          value, an unset option will cause the evaluation to fall back
          to a more generic scope or the option's default value. Thus,
          unsetting an option is not the same as setting it to 0, an
          empty string, or that option's default value.
        </p>
</li>
<li class="listitem">
<p>
          <span class="command"><strong>config set [ scope_name ...] { optname } { value
          }</strong></span>
        </p>
<p>
          The second form takes <code class="literal">set</code> as the mode, zero
          or more scope specifiers, an option name, and an option value
          as arguments. It sets a new value for the specified option in
          the specified scope.
        </p>
<p>
          You can set any configuration option in any scope (except
          settings inside legacy modules) using the <span class="command"><strong>config
          set</strong></span> command.
        </p>
</li>
<li class="listitem">
<p>
          <span class="command"><strong>config unset [ scope_name ...] [ option_name
          ]</strong></span>
        </p>
<p>
          The third form takes <code class="literal">unset</code> as the mode and
          one or more scope specifiers, and an option name as arguments.
          When this command is used without specifying an option,
          <span class="emphasis"><em>it unsets all the options in the scope and that
          scope's subscopes, so use it carefully</em></span>. To prevent
          completely deconfiguring a running server by accident,
          unsetting the global scope is not supported.
        </p>
</li>
</ul></div>
<p>
      For a complete list of available configuration options, see
      <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
    </p>
<div class="refsection">
<a name="idp14008368"></a><h3>Setting Boolean Options</h3>
<p>
        Booleans are parsed using <code class="function">ec_atobool</code>, which
        accepts <code class="literal">on</code> or <code class="literal">off</code>,
        <code class="literal">true</code> or <code class="literal">false</code>,
        <code class="literal">enabled</code> or <code class="literal">disabled</code> and
        <code class="literal">0</code> or <code class="literal">1</code>. From the console,
        you can set a boolean to any one of these values. For example:

</p>
<pre class="screen">
07:50:47 /tmp/2025&gt; config set suspend_delivery true
Suspend_Delivery = true
08:02:16 /tmp/2025&gt; config set suspend_delivery 1
Suspend_Delivery = 1
08:02:19 /tmp/2025&gt; config set suspend_delivery enabled
Suspend_Delivery = enabled
08:02:22 /tmp/2025&gt; config set suspend_delivery on
Suspend_Delivery = on
</pre>
<p>

        Any one of the above commands suspends delivery in the global
        scope.
      </p>
</div>
<div class="refsection">
<a name="console_commands.batch.version3.0"></a><h3>Batching <span class="command"><strong>config</strong></span> Commands</h3>
<p>
        You may batch configuration changes by initiating a transaction
        on the console, as shown in the following example:
      </p>
<pre class="screen">
10:47:35 /tmp/2025&gt; config begin
10:47:35 /tmp/2025&gt; config set esmtp_listener listen :587 concurrency 5
10:47:35 /tmp/2025&gt; config set esmtp_listener listen :587 pool_name accept
10:47:35 /tmp/2025&gt; config set threadpool accept concurrency 5
10:47:35 /tmp/2025&gt; config commit
</pre>
<p>
        Use <span class="command"><strong>config begin</strong></span> to begin a transaction. The
        <span class="command"><strong>config commit</strong></span> command ends a transaction and
        activates any options set during the transaction. It changes the
        live configuration only and has <span class="emphasis"><em>no</em></span> effect
        on the configuration file.
      </p>
<p>
        Transactions are isolated from each other; the transaction you
        initiate in your control session is yours alone. If multiple
        transactions are initiated in concurrent sessions, the first to
        commit wins; the losers commit attempt will fail.
      </p>
<p>
        You may <span class="command"><strong>config rollback</strong></span> to cancel a set of
        changes and rollback a transaction.
      </p>
<p>
        You may alternatively <span class="command"><strong>config reload</strong></span> to
        attempt a configuration reload and undo options set from the
        system console. This must happen outside of a transaction (it
        will indicate an error if you have begun a transaction).
      </p>
</div>
<div class="refsection">
<a name="console_commands.config.version3.0"></a><h3>Available Modes</h3>
<p>
        The following are the available modes for the
        <span class="command"><strong>config</strong></span> command:
      </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
            config begin
          </span></dt>
<dd><p>
              Begin a transaction.
            </p></dd>
<dt><span class="term">
            config begin from scratch
          </span></dt>
<dd>
<p>
              Begin a transaction from scratch.
            </p>
<p>
              This command starts an entirely new configuration.
              However, if you issue the command <strong class="userinput"><code>config begin
              from scratch</code></strong> and then the command
              <strong class="userinput"><code>config showrecurse</code></strong>, you will see
              that some options are already set. This is not a bug;
              these settings are the implicit settings you get when you
              load an empty configuration file. You can override them
              with <span class="command"><strong>config set</strong></span>, but you cannot unset
              them because these settings are necessary for proper
              operation. The options that are already set are the
              <code class="option">ThreadPool</code> stanzas, the
              <code class="option">DebugFlags</code> and the
              <code class="option">TimestampFormat</code> option.
            </p>
</dd>
<dt><span class="term">
            config commit
          </span></dt>
<dd><p>
              Commit a transaction.
            </p></dd>
<dt><span class="term">
            config locate
          </span></dt>
<dd>
<p>
              Locate a particular scope.
            </p>
<p>
              Use this command to locate specific scopes. The following
              is an example of the output resulting from issuing the
              command <span class="command"><strong>config locate listen</strong></span>:
            </p>
<pre class="screen">
Listen ":25"
  is at Esmtp_Listener::Listen:\:25:
Listen ":587"
  is at Esmtp_Listener::Listen:\:587:
Listen "127.0.0.1:2025"
  is at Control_Listener::Listen:127.0.0.1\:2025:
Listen "/tmp/2025"
  is at Control_Listener::Listen:/tmp/2025:
</pre>
<p>
              Where a scope has an instance name, that instance name may
              also be specified. For example, the command,
              <span class="command"><strong>config locate listen 127.0.0.1</strong></span> is also
              legal.
            </p>
<p>
              This command is particularly useful for showing the exact
              location of a scope. For example:
            </p>
<pre class="screen">
10:47:35 /tmp/2025&gt; config locate QueryGroups
QueryGroups
  is at auth_ds::Scheme:ecauth:QueryGroups::
</pre>
<p>
              You can then examine the particulars of this scope by
              issuing the command <span class="command"><strong>config show auth_ds Scheme
              ecauth QueryGroups</strong></span>.
            </p>
<p>
              You can also use this command specifying a regular
              expression as an optional argument, for example:
            </p>
<pre class="screen">
12:00:12 /tmp/2025&gt; config locate Scheme ec.+
Scheme "ecauth"
  is at auth_ds::Scheme:ecauth:
</pre>
<p>
              The regex argument need not be quoted unless it contains
              spaces; specifically, enclosing it in forward slashes is
              not necessary and will not work. Note that the use of this
              command with a scope and a regular expression is different
              from regex scopes such as regex domains. In the case of a
              regex domain, (see
              <a class="xref" href="conf.ref.domain.php#conf.ref.domain.regex" title="Regex Domains">Regex Domains</a>) the regular
              expression denoted by <em class="replaceable"><code>pattern</code></em>
              in the command <span class="command"><strong>config locate Domain
              <em class="replaceable"><code>pattern</code></em></strong></span> will be
              matched against the regex domain treated as an ordinary
              string. For example, the command <span class="command"><strong>config locate
              Domain ex.+</strong></span> would locate a regex domain defined
              as:

</p>
<pre class="programlisting">
Domain "/(?:^|[.])example[.](?:com|co[.]uk)$/" {
  ...
}
</pre>
<p>
            </p>
</dd>
<dt><span class="term">
            config reload
          </span></dt>
<dd>
<p>
              Reload configuration options.
            </p>
<p>
              If no file is specified, <span class="command"><strong>config reload</strong></span>
              reloads configuration options from the
              <code class="filename">ecelerity.conf</code> file. You may specify
              an alternate configuration file. Options changed in the
              configuration file come into effect immediately. Momentum
              does not need to be restarted. You may also use
              <span class="command"><strong>config reload</strong></span> to attempt a
              configuration reload to cancel any changes made from the
              console. This must happen outside of a transaction,
              otherwise an error message will be displayed. If you make
              manual changes to your configuration file, issue this
              command to ensure that your changes are put into effect
              immediately.
            </p>
<p>
              Issuing the <span class="command"><strong>config reload</strong></span> command while
              receiving email will trigger the
              <code class="option">Reconfig_Message</code>. For more information
              see <a class="xref" href="esmtp_listener.reconfig_message.php" title="19.3. Reconfig_Message Option">Section 19.3, “<code class="option">Reconfig_Message</code> Option”</a>.
            </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
                Not all options can be changed at runtime. To confirm
                that an option is "dynamic", check the default column of
                the table at <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
                Options that cannot be changed without restarting the
                ecelerity process are marked as
                <code class="literal">non-dynamic</code>.
              </p>
</div>
</dd>
<dt><span class="term">
            config replay
          </span></dt>
<dd>
<p>
              Show changes in a transaction prior to a commit or
              rollback.
            </p>
<p>
              This command can be used in an active transaction; when
              you have issued the command <span class="command"><strong>config
              begin</strong></span> or <span class="command"><strong>config begin from
              scratch</strong></span> but have not yet done a <span class="command"><strong>config
              commit</strong></span> or a <span class="command"><strong>config rollback</strong></span>.
              It prints out all the <span class="command"><strong>config set</strong></span> and
              <span class="command"><strong>config unset</strong></span> commands you have given
              since the start of the transaction. <span class="command"><strong>config
              eval</strong></span> or <span class="command"><strong>config show</strong></span> commands
              are not displayed.
            </p>
<p>
              This command is especially useful if you find that a
              conflict causes your commit to fail. Using <span class="command"><strong>config
              replay</strong></span>, you can determine exactly what changes
              you attempted before rolling back your transaction.
            </p>
</dd>
<dt><span class="term">
            config rollback
          </span></dt>
<dd><p>
              Rollback a transaction.
            </p></dd>
<dt><span class="term">
            config show
          </span></dt>
<dd>
<p>
              View a specific scope.
            </p>
<p>
              <span class="command"><strong>config show</strong></span> and <span class="command"><strong>config
              showrecurse </strong></span>are similar. As with <span class="command"><strong>config
              get</strong></span> or <span class="command"><strong>config eval</strong></span>, you
              supply a path into the configuration tree, but without
              specifying an option name. You can then view the whole
              scope. <span class="command"><strong>config showrecurse</strong></span> also shows
              child scopes.
            </p>
<p>
              Given the following mail_loop configuration:

</p>
<pre class="programlisting">
mail_loop "mail_loop1"
{
  Use_IP = false
}
</pre>
<p>

              Issuing the command <strong class="userinput"><code>config show mail_loop
              mail_loop </code></strong> yields the output:

</p>
<pre class="screen">
Use_IP = false
</pre>
<p>
            </p>
<p>
              The difference between <span class="command"><strong>config show
              <em class="replaceable"><code>scope</code></em></strong></span> and
              <span class="command"><strong>config showrecurse
              <em class="replaceable"><code>scope</code></em></strong></span> is illustrated
              using the following ESMTP listener configuration:

</p>
<pre class="programlisting">
Esmtp_Listener {
  Listen ":25" {
  }
  Listen ":587" {
    Enable = false
    SMTP_Extensions = (
      "ENHANCEDSTATUSCODES"
      "STARTTLS"
      "AUTH LOGIN"
    )
    TLS_Key = "cert.key"
    TLS_Certificate = "cert.pem"
    TLS_Client_CA = "ca-bundle.crt"
    TLS_Ciphers = "DEFAULT"
  }
  Idle_Time = 300
  SMTP_Extensions = (
    "ENHANCEDSTATUSCODES"
  )
}
</pre>
<p>

              Issuing the command <strong class="userinput"><code>config showrecurse
              ESMTP_Listener</code></strong> reproduces the entire
              configuration as shown above. On the other hand, issuing
              the command, <strong class="userinput"><code>config show
              ESMTP_Listener</code></strong>, outputs only the following:

</p>
<pre class="screen">
Listen ":25" { ... }
Listen ":587" { ... }
Idle_Time = 300
SMTP_Extensions = (
  "ENHANCEDSTATUSCODES"
)
</pre>
<p>
            </p>
</dd>
<dt><span class="term">
            config showrecurse
          </span></dt>
<dd><p>
              View a specific scope and its child scopes.
            </p></dd>
<dt>
<a name="config_writeback"></a><span class="term">
            config
            writeback [<em class="replaceable"><code>/optional/alternate/path</code></em>]
          </span>
</dt>
<dd>
<p>
              Write configuration changes to your
              <code class="filename">ecelerity.conf</code> file or an alternate
              file.
            </p>
<p>
              The <span class="command"><strong>config writeback</strong></span> command writes any
              changes you have made to the live configuration back to
              the configuration file or files that the configuration was
              read from originally. If you do not want to overwrite the
              main configuration file, you can provide an alternate
              path. If your configuration has "include" files, edits go
              to the most appropriate place. For example, suppose that
              you have a binding configuration that came from an
              included file, changes to that binding are written back to
              the included file.
            </p>
</dd>
</dl></div>
</div>
<div class="refsection">
<a name="idp11609264"></a><h3>Example <span class="command"><strong>config</strong></span> Commands</h3>
<p>
        Suppose you have the following part in your
        <code class="filename">ecelerity.conf</code> file:
      </p>
<pre class="programlisting">
Message_Expiration = 86400

Domain earthlink.net {
  Message_Expiration = 900
}

Binding smtp-01 {
  EHLO_Hostname = "smtp-01.com"
  Domain relay.com {
    EHLO_Hostname = "relay.com"
  }
}</pre>
<p>
        The following are examples using the
        <span class="command"><strong>config</strong></span> command with outputs:
      </p>
<pre class="screen">10:47:35 /tmp/2025&gt; config get message_expiration
Message_Expiration = 86400

10:47:35 /tmp/2025&gt; config get domain earthlink.net message_expiration
        Message_Expiration = 900

10:47:35 /tmp/2025&gt; config unset domain earthlink.net message_expiration
"Message_Expiration" has been unset. Effective value is now:
        Message_Expiration = 86400

10:47:35 /tmp/2025&gt; config get binding smtp-01 ehlo_hostname
        EHLO_Hostname = "smtp-01.com"

10:47:35 /tmp/2025&gt; config get binding smtp-01 domain relay.com ehlo_hostname
        EHLO_Hostname = "relay.com"

10:47:35 /tmp/2025&gt; config unset binding smtp-01 domain relay.com ehlo_hostname
"EHLO_Hostname" has been unset. Effective value is now:
        EHLO_Hostname = "smtp-01.com"

10:47:35 /tmp/2025&gt; config set Relay_Hosts ( 10.0.0.1 10.0.0.2 )
Relay_Hosts = (
  10.0.0.1
  10.0.0.2
  )</pre>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="console_commands.cache_stats.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="console.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="console_commands.count.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">cache stats </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> count</td>
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
