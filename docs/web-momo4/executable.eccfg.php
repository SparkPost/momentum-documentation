<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>eccfg</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="executable, command line, command, eccfg">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="exec.cmds.ref.php" title="Chapter 74. Executable Commands Reference">
<link rel="prev" href="executable.ec_show.php" title="ec_show">
<link rel="next" href="executable.eccmgr.php" title="eccmgr">
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
<tr><th colspan="3" align="center">eccfg</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="executable.ec_show.php">Prev</a> </td>
<th width="60%" align="center">Chapter 74. Executable Commands Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="executable.eccmgr.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="executable.eccfg"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>eccfg — Subversion repository management</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        -h
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        bootstrap [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] --clustername <em class="replaceable"><code>name</code></em> | --singlenode [<em class="replaceable"><code>host[:port]</code></em>]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        clone [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] <em class="replaceable"><code>source destination</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        commit [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] [--add-all] [--message <em class="replaceable"><code>message</code></em>] [--delete-all] [--message <em class="replaceable"><code>message</code></em>]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        delete [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] <em class="replaceable"><code>file [...]</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        overlay [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] <em class="replaceable"><code>source destination</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        pull [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] [--auto] [--mine | --theirs | --manual]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        put [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] [--message <em class="replaceable"><code>message</code></em>] <em class="replaceable"><code>source destination</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        put [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] [--message <em class="replaceable"><code>message</code></em>] running
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        resolve [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] [--revert]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        revert [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] <em class="replaceable"><code>file ...</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        status [--quiet | --debug] [--username <em class="replaceable"><code>name</code></em>] [--password <em class="replaceable"><code>pass</code></em>] [--wc <em class="replaceable"><code>path</code></em>] <em class="replaceable"><code>file ...</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster clusters
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster conflict <em class="replaceable"><code>cluster</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster copy [--with-history] <em class="replaceable"><code>cluster destination</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster create <em class="replaceable"><code>cluster</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster master [<em class="replaceable"><code>cluster</code></em>]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster override <em class="replaceable"><code>cluster node</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster resolve <em class="replaceable"><code>cluster</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster resume <em class="replaceable"><code>cluster node</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/eccfg</code>  [
        subcluster slaves [<em class="replaceable"><code>cluster</code></em>]
      ]</p></div>
</div>
<div class="refsection">
<a name="idp11008096"></a><h2>Description</h2>
<p>
      <span class="command"><strong>eccfg</strong></span> is the Momentum version control
      management tool used to track and update configuration file
      changes. The version control management tool that Momentum uses is
      Subversion. When Momentum is first installed, configuration files
      such as <code class="filename">ecelerity.conf</code> are checked in to a
      repository and working copies are distributed to the nodes (if in
      a cluster configuration). <span class="command"><strong>eccfg</strong></span> interacts with
      the resident <code class="filename">ecconfigd</code> daemon to manage your
      configuration files.
    </p>
<p>
      Unlike Subversion, <span class="command"><strong>eccfg</strong></span> does not act on your
      current working directory. <span class="command"><strong>eccfg</strong></span> targets the
      <code class="filename">/opt/msys/ecelerity/etc/conf</code> directory and
      will affect any files in that directory or below that directory.
      If you wish to limit your interaction to files in a specific
      directory, use the <code class="option">--wc
      <em class="replaceable"><code>/path/to/directory</code></em></code> option.
    </p>
<p>
      In a Momentum cluster, where a number of nodes share the same
      configuration, version control management is especially important
      for ensuring that configuration changes are synchronized out
      across all nodes. In a single-node configuration or a cluster
      where the configuration of each node is relatively unique, the
      more important role for version control management is tracking
      changes. If a new configuration is not working as expected, it's
      easy to revert changes.
    </p>
<p>
      If you change any configuration files or add configuration files,
      it is strongly recommended that you track such changes using the
      revision control system. Reverting changes and distributing them
      is most easily managed in this way. Files and directories that are
      under revision control must be owned by <code class="literal">ecuser</code>.
      <span class="command"><strong>eccfg</strong></span> sets the ownership of all new files and
      directories to <code class="literal">ecuser</code>, prior to calling the
      actual <span class="command"><strong>svn add</strong></span> command.
    </p>
<p>
      Situations such as the following typically require the use of this
      command:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          Updating any configuration files that are under revision
          control – See <a class="xref" href="conf.overview.php#conf.manual.changes" title="15.1.4. Changing Configuration Files">Section 15.1.4, “Changing Configuration Files”</a>.
        </p></li>
<li class="listitem"><p>
          Adding new configuration files that are "included" using the
          <code class="literal">include</code> directive – See
          <a class="xref" href="conf.overview.php#conf.adding.configuration.files" title="15.1.5. Adding Configuration Files">Section 15.1.5, “Adding Configuration Files”</a>.
        </p></li>
<li class="listitem"><p>
          Adding Lua policy scripts – See
          <a class="xref" href="implementing.policy.scriptlets.php#policy.best.practices" title="62.2.4. Creating Policy Scripts">Section 62.2.4, “Creating Policy Scripts”</a>.
        </p></li>
</ul></div>
<p>
      In most circumstances, you will only need to use a limited number
      of the <span class="command"><strong>eccfg</strong></span> commands. The commonly used
      <span class="command"><strong>eccfg</strong></span> commands are highlighted in the following
      sections.
    </p>
<p>
      <span class="command"><strong>eccfg</strong></span> has two different modes of operation:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          working-copy – This mode interacts with the local
          working copy and is used to checkout, checkin, and update your
          configuration files. It is also used to clone or overlay one
          path with another path in a single subcluster. Each node can
          be part of at most one subcluster.
        </p></li>
<li class="listitem"><p>
          subcluster – This mode allows configuration of multiple
          subclusters, as well as creation of new subclusters (as empty
          or as a copy of an existing subcluster). This mode does not
          affect files on disk.
        </p></li>
</ul></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
        All options (with leading hyphens) can be shortened as long as
        they are still unique and can be specified with a single hyphen.
        So --message can be shortened to -m for every command except
        pull, where -pul is sufficient.
      </p>
</div>
<div class="refsection">
<a name="idp11030576"></a><h3>Working Copy Commands</h3>
<p>
        All of the following commands interact with a working copy or
        the current subcluster files only. There are a number of common
        options that can be use; some of the options are actually
        required for correct operation (e.g. <code class="option">--username</code>
        and <code class="option">--password</code> are required to commit changes).
        The default username is <code class="literal">admin</code> and the
        password is whatever you assigned during installation.
      </p>
<div class="refsection">
<a name="idp11033904"></a><h4>Common Options</h4>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
              --quiet
            </span></dt>
<dd><p>
                Can be used in scripts to eliminate most of the details
                output by the eccfg script. Errors will still be
                printed.
              </p></dd>
<dt><span class="term">
              --debug
            </span></dt>
<dd><p>
                If this option is passed to any working-copy command,
                the script will output detailed information about the
                actions performed by each command. This can be very
                useful when diagnosing problems. --quiet and --debug are
                mutually exclusive.
              </p></dd>
<dt><span class="term">
              --username and --password
            </span></dt>
<dd><p>
                When performing actions that require authentication to
                the repository, you must pass both of these
                options.These options require the credentials of a user
                with administrative privileges.
                <span class="emphasis"><em>Note</em></span>: The administrative user
                created during installation is named
                <code class="literal">admin</code> and the password for this user
                is whatever you supplied during installation. If you
                don't specify a <code class="option">username</code>, the value of
                this option defaults to the value of the environment
                variable, <code class="literal">USER</code>. If you don't supply a
                <code class="option">password</code>, <span class="command"><strong>eccfg</strong></span>
                interactively requests one.
              </p></dd>
<dt><span class="term">
              --working-copy
            </span></dt>
<dd><p>
                If you do not pass this option, any command that acts on
                a working copy path will target the
                <code class="filename">/opt/msys/ecelerity/etc/conf</code>
                directory.
              </p></dd>
</dl></div>
</div>
<div class="refsection">
<a name="idp14295824"></a><h4>Subcommands</h4>
<p>
          </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
                <span class="command"><strong>bootstrap</strong></span> --clustername
                <em class="replaceable"><code>name</code></em> | --singlenode
                <em class="replaceable"><code>[host[:port]]</code></em>
              </span></dt>
<dd>
<p>
                  Check out the cluster-wide config from a specific
                  server. Can only be done once (without deleting the
                  resulting working copy).
                </p>
<p>
                  This step is normally performed by the installation
                  script and checks out the configuration files from the
                  ecconfigd repository into a standard location on disk:
                  <code class="filename">/opt/msys/ecelerity/etc/conf</code>.
                </p>
<p>
                  The <code class="option">--clustername</code> and
                  <code class="option">--singlenode</code> options are mutually
                  exclusive. The former configures this node to be a
                  member of a subcluster and also causes the node to
                  require Spread to be running before
                  <code class="filename">ecconfigd</code> can be started.
                </p>
</dd>
<dt><span class="term">
                <span class="command"><strong>commit</strong></span> [--add-all] [--message
                <em class="replaceable"><code>"message"</code></em>]
              </span></dt>
<dd>
<p>
                  <span class="emphasis"><em>Commonly Used Command</em></span>
                </p>
<p>
                  Commit local changes back to the repo. Commits any
                  changed files in the standard location,
                  <code class="filename">/opt/msys/ecelerity/etc/conf</code>,
                  unless a different location was specified with the
                  <code class="option">--working-copy</code> option.
                </p>
<p>
                  If there are files not present in the repository, the
                  script will prompt as to whether they should be added
                  unless the <code class="option">--add-all</code> option was
                  specified. <span class="emphasis"><em>Note</em></span>: the commit
                  message must be in quotation marks if the message
                  includes whitespace.
                </p>
<p>
                  If there are no changes, you will see the message:
                  <code class="literal">Nothing to commit</code>. Otherwise, you
                  will see a message such as the following:

</p>
<pre class="screen">
Sending        default/ecelerity.conf
Transmitting file data.
Committed revision 47.
</pre>
<p>
                </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                    <span class="emphasis"><em>Committing changes does not automatically
                    load them into the running ecelerity
                    process.</em></span> For details, see See
                    <a class="xref" href="conf.overview.php#conf.manual.changes" title="15.1.4. Changing Configuration Files">Section 15.1.4, “Changing Configuration Files”</a>
                    and
                    <a class="xref" href="conf.overview.php#conf.adding.configuration.files" title="15.1.5. Adding Configuration Files">Section 15.1.5, “Adding Configuration Files”</a>.
                  </p>
</div>
</dd>
<dt><span class="term">
                <span class="command"><strong>commit</strong></span> [--delete-all] [--message
                <em class="replaceable"><code>"message"</code></em>]
              </span></dt>
<dd>
<p>
                  Commit local changes back to the repo. Commits any
                  changed files in the standard location,
                  <code class="filename">/opt/msys/ecelerity/etc/conf</code>,
                  unless a different location was specified with the
                  <code class="option">--working-copy</code> option.
                </p>
<p>
                  If the <code class="option">--delete-all</code> option is not
                  specified and files have been removed from the
                  repository using a file system command such as
                  <span class="command"><strong>rm</strong></span>, the script will prompt as to
                  whether such files should be deleted.
                  <span class="emphasis"><em>Note</em></span>: the commit message must be
                  in quotation marks if the message includes whitespace.
                </p>
</dd>
<dt><span class="term">
                <span class="command"><strong>clone</strong></span>
                <em class="replaceable"><code>source</code></em>
                <em class="replaceable"><code>destination</code></em>
              </span></dt>
<dd>
<p>
                  Copy one directory in the repository to another in a
                  single transaction, replacing the target if it exists.
                </p>
<p>
                  This is used, for example, to make a copy of the
                  node-specific configuration from one node to another
                  node. The destination files are completely deleted
                  and/or replaced by the source files. If there are
                  additional files in the destination path, they are not
                  retained. See the command overlay for a different mode
                  of operation.
                </p>
</dd>
<dt><span class="term">
                <span class="command"><strong>delete</strong></span> <em class="replaceable"><code>file
                ...</code></em>
              </span></dt>
<dd>
<p>
                  <span class="emphasis"><em>Commonly Used Command</em></span>
                </p>
<p>
                  Delete one or more files from the repo. Changes do not
                  take effect until an <span class="command"><strong>eccfg</strong></span>
                  <code class="literal">commit</code> is performed.
                </p>
<p>
                  When a file name is specified, this command queues
                  that file for removal from the repository. If a
                  directory is specified, that directory is queued for
                  recursive removal from the repository. In both cases
                  this command must be followed by a commit.
                </p>
<p>
                  If you wish to remove a file or directory that is
                  under revision control, do not use
                  <span class="command"><strong>rm</strong></span>: instead use <span class="command"><strong>eccfg
                  delete</strong></span>. For example, if you wish to remove a
                  directory named <code class="literal">myscripts</code> that is
                  immediately below your current directory, issue the
                  commands:

</p>
<pre class="screen">
shell&gt; /opt/msys/ecelerity/bin/eccfg delete ––username admin ––password admin_passwd myscripts
shell&gt; /opt/msys/ecelerity/bin/eccfg commit ––username admin ––password admin_passwd
</pre>
<p>
                </p>
<p>
                  In most cases, when you are removing a file from the
                  repository, you will also need to remove references to
                  this file from a configuration file.
                </p>
</dd>
<dt><span class="term">
                <span class="command"><strong>overlay</strong></span> <em class="replaceable"><code>source
                destination</code></em>
              </span></dt>
<dd>
<p>
                  Merge one directory in the repo into another,
                  overwriting any existing files in the destination
                  directory with those from the source, but retaining
                  any files in the destination not present in the
                  source.
                </p>
<p>
                  See the clone command for a method to replace the
                  destination entirely with the source.
                </p>
</dd>
<dt><span class="term">
                <span class="command"><strong>pull</strong></span> [--auto] [--mine | --theirs |
                --manual]
              </span></dt>
<dd>
<p>
                  <span class="emphasis"><em>Commonly Used Command</em></span>
                </p>
<p>
                  Pull client config from the repository. Requires write
                  access on <code class="filename">/opt/msys/ecelerity/etc</code>
                  for initial checkout and to rename the directory on
                  pull. As with any revision control system, it is best
                  practice to update the working copy of the repository
                  prior to making any changes.
                </p>
<p>
                  <span class="command"><strong>eccfg pull</strong></span> does not do a subversion
                  update in place; instead, it does a new checkout to
                  another directory, and if successful replaces the
                  original directory with the new one. This causes the
                  directory you used to be in to become unlinked and for
                  this reason you will see the message:

</p>
<pre class="screen">
OK
Note: your current working directory has been invalidated by the "pull"
command.  You will need to run "cd /opt/msys/ecelerity/etc/conf"
to return to the same location in the file system.
</pre>
<p>

                  Follow the instructions to 'return' to the repository
                  working directory.
                </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
                      --auto
                    </span></dt>
<dd><p>
                        Used by the cron scripts to authenticate using
                        the service password, in order to keep the local
                        working copy in sync with the repo.
                      </p></dd>
<dt><span class="term">
                      --mine --theirs --manual
                    </span></dt>
<dd>
<p>
                        If an update or pull would cause a conflict (due
                        to local changes that overlap with changes
                        already committed to the repo), pull will
                        normally refuse to proceed. These three flags
                        can be used to mediate the update process.
                        "--mine" means that local changes will always be
                        preferred; "--theirs" will prefer the upstream
                        changes from the repository. If you want to
                        manually resolve conflicts, the "--manual" flag
                        will use Subversion's normal conflict handling
                        to produce conflict files.
                      </p>
<p>
                        <span class="emphasis"><em>Note</em></span>: if you use any of
                        these switches, please make sure to commit your
                        changes (after resolving any conflicts), since
                        the working copy will no longer be in sync with
                        the repository. You will then need to send a
                        "config reload" to the Momentum process.
                      </p>
</dd>
</dl></div>
<p>
                  If and only if the pull operation is completed without
                  conflict, then eccfg will automatically issue a
                  "config reload" to the running Momentum process.
                </p>
</dd>
<dt><span class="term">
                <span class="command"><strong>put</strong></span>
              </span></dt>
<dd>
<p>
                  Copy a single file into the repo if and only if it is
                  different from the version already in the repo. Not
                  used during normal operation; use commit instead.
                </p>
<p>
                  There is one special case where put is used -- a cron
                  job is configured during installation to automatically
                  save the entire running config of a node (if it has
                  changed) to a parallel path in the repo. This happens
                  every 5 minutes by default and can be used to make
                  sure that any local, uncommitted, changes made to a
                  node will not be lost due to a disk failure if the
                  changes are not committed to the normal path.
                </p>
</dd>
<dt><span class="term">
                <span class="command"><strong>resolve</strong></span> <em class="replaceable"><code>file
                ...</code></em>
              </span></dt>
<dd><p>
                  Clear the conflict state on files that have been
                  manually resolved. This command must be used after
                  resolving conflicts created by <span class="command"><strong>pull</strong></span>
                  <code class="option">--manual</code>.
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>revert</strong></span> <em class="replaceable"><code>file
                ...</code></em>
              </span></dt>
<dd><p>
                  Undo local changes (including deletion) to files in
                  the local checkout.
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>status</strong></span>
              </span></dt>
<dd><p>
                  Print a status summary of changes made to the local
                  checkout.
                </p></dd>
</dl></div>
<p>
        </p>
</div>
</div>
<div class="refsection">
<a name="idp14685584"></a><h3>Subcluster Commands</h3>
<p>
        The following subcommands all interact directly with the
        ecconfigd daemon and effect changes to the collection of
        subclusters as a whole. All of the subcluster commands are
        prefaced with the "subcluster" keyword.
      </p>
<div class="refsection">
<a name="idp14687456"></a><h4>Subcommands</h4>
<p>
          </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
                <span class="command"><strong>clusters</strong></span>
              </span></dt>
<dd><p>
                  Outputs a single line containing a space-separated
                  list of all subclusters known to the local ecconfigd
                  server. If any of the subclusters are in a
                  <span class="emphasis"><em>CONFLICT</em></span> state, the clustername
                  will be prefixed with a "!" character.
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>conflict</strong></span>
                <em class="replaceable"><code>cluster</code></em>
              </span></dt>
<dd><p>
                  Force the specified subcluster into a CONFLICT state.
                  When this occurs, no working copies can be updated and
                  no changes can be committed. This only affects this
                  single subcluster to be affected; any other subcluster
                  can continue to operate normally.
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>copy</strong></span> [--with-history]
                <em class="replaceable"><code>source destination</code></em>
              </span></dt>
<dd>
<p>
                  Duplicate one repository's contents to another. There
                  are two modes of operation:
                </p>
<p>
                  If the <code class="option">--with-history</code> option is
                  passed, the destination subcluster must not already
                  exist. A new subcluster repository will be created and
                  the entire source repository history will be
                  duplicated. This is probably most useful when creating
                  a geographically distributed cluster, where the new
                  subcluster will be managed independently of the
                  original subcluster.
                </p>
<p>
                  Without the <span class="command"><strong>--with-history</strong></span> flag,
                  the tip of the source cluster will be copied over the
                  top of the tip of the destination cluster. This is
                  most useful when copying a test subcluster to a
                  production subcluster, where the end result of all
                  configuration changes is all that is important.
                </p>
</dd>
<dt><span class="term">
                <span class="command"><strong>create</strong></span>
                <em class="replaceable"><code>cluster</code></em>
              </span></dt>
<dd><p>
                  Creates a new subcluster, populated with the
                  configuration template files provided in the package.
                  This is exactly the same behavior as occurs during a
                  fresh install. This is most useful when creating a new
                  subcluster which is nothing like any of the existing
                  subclusters.
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>master</strong></span>
                [<em class="replaceable"><code>cluster</code></em>]
              </span></dt>
<dd><p>
                  An informational command, it shows the hostname of the
                  current MASTER repository for the specified cluster.
                  If you do not pass a cluster name, it returns the
                  MASTER for the first subcluster listed (which usually
                  means the first subcluster in alphabetical order).
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>override</strong></span> <em class="replaceable"><code>cluster
                node</code></em>
              </span></dt>
<dd><p>
                  Force a specific node to become the MASTER for the
                  specifed subcluster. This choice is sticky (survives
                  reboots, etc) and can be used to mandate a specific
                  node to stay MASTER, regardless of normal election
                  rules. This state can be reversed with the resume
                  subcommand.
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>resume</strong></span> <em class="replaceable"><code>cluster
                node</code></em>
              </span></dt>
<dd><p>
                  Restore the subcluster to normal/election operation.
                  This option is also sticky, so that nodes that were in
                  override mode when they went offline will be able to
                  recover when they reconnect. The node that is passed
                  to this subcommand is merely forced to become MASTER
                  for the moment. If anything that would normally
                  trigger an election occurs, any node could potentially
                  be elected the next MASTER.
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>slaves</strong></span>
                [<em class="replaceable"><code>cluster</code></em>]
              </span></dt>
<dd><p>
                  Returns a space-delimited list of all SLAVE nodes for
                  the specified subcluster.
                </p></dd>
<dt><span class="term">
                <span class="command"><strong>resolve</strong></span>
                <em class="replaceable"><code>cluster</code></em>
              </span></dt>
<dd><p>
                  Request that the cluster's nominal MASTER attempt to
                  resolve the CONFLICT state. If the CONFLICT was caused
                  by a missing sync to a slave, the master will attempt
                  to resync the slave. If the conflict can be resolved
                  automatically, then the entire subcluster will switch
                  back to a normal state. See the online documentation
                  for more details.
                </p></dd>
</dl></div>
<p>
        </p>
</div>
</div>
</div>
<div class="refsection">
<a name="idp14721088"></a><h2>See Also</h2>
<p>
      <a class="xref" href="executable.ecconfigd.php" title="ecconfigd"><span class="refentrytitle">ecconfigd</span></a>,
      <a class="xref" href="conf.overview.php#conf.ecconfigd" title="15.1.3. Configuration Management (ecconfigd)">Section 15.1.3, “Configuration Management (<span class="command"><strong>ecconfigd</strong></span>)”</a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="executable.ec_show.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="exec.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="executable.eccmgr.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">ec_show </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> eccmgr</td>
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
