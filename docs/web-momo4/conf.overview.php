<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 15. Configuration Overview</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="prev" href="p.configuration.php" title="Part III. Configuring Momentum">
<link rel="next" href="conf.options.php" title="15.2. Configuration Options">
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
<tr><th colspan="3" align="center">Chapter 15. Configuration Overview</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="p.configuration.php">Prev</a> </td>
<th width="60%" align="center">Part III. Configuring Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.options.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="conf.overview"></a>Chapter 15. Configuration Overview</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="conf.overview.php#conf.files">15.1. Configuration Files</a></span></dt>
<dt><span class="section"><a href="conf.options.php">15.2. Configuration Options</a></span></dt>
<dt><span class="section"><a href="ecelerity.conf.fallback.php">15.3. Configuration Scopes and Fallback</a></span></dt>
<dt><span class="section"><a href="listeners.php">15.4. Listeners</a></span></dt>
<dt><span class="section"><a href="module_config.php">15.5. Modules</a></span></dt>
<dt><span class="section"><a href="conf.ref.ecelerity.conf.php">15.6. <code class="filename">ecelerity.conf</code> File</a></span></dt>
</dl>
</div>
<p>
    Momentum is an exceptionally powerful all-in-one email
    infrastructure solution. As such, it can be configured to provide
    the full range of digital messaging channels and more. This chapter
    gives an overview of Momentum's configuration and provides the
    background needed to configure your system to meet your specific
    application.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="conf.files"></a>15.1. Configuration Files</h2></div></div></div>
<p>
    Momentum's configuration is defined in multiple configuration files.
    The installer creates an initial configuration for you, based on the
    answers you provided to it during installation. This initial
    configuration is based on the sample configuration files found in
    the <code class="filename">/opt/msys/ecelerity/etc/sample-configs</code>
    directory.
  </p>
<p>
    The <code class="filename">ecelerity.conf</code> file is the master
    configuration file for Momentum; while other configuration files are
    specific to a given function or feature. For information about each
    configuration file, follow the links below:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <a class="link" href="conf.ref.eccluster.conf.php" title="16.2. eccluster.conf File"><code class="filename">eccluster.conf</code></a>
        - Momentum Cluster Manager configuration file
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.ecelerity.conf.php" title="15.6. ecelerity.conf File"><code class="filename">ecelerity.conf</code></a>
        - Master Momentum configuration file
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.ecelerity_cluster.conf.php" title="16.3. ecelerity-cluster.conf File"><code class="filename">ecelerity_cluster.con</code></a>
        - Cluster-specific configuration file included from within
        <code class="filename">ecelerity.conf</code>
      </p></li>
<li class="listitem"><p>
        <a class="link" href="log_rotating.php#conf.ref.ec_rotate.conf" title="34.1. ec_rotate.conf File"><code class="filename">ec_rotate.conf</code></a>
        - Configuration file for the utility script
        <span class="command"><strong>ec_rotate</strong></span>
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.msg_gen.conf.php" title="20.2. msg_gen.conf File"><code class="filename">msg_gen.conf</code></a>
        - Message Generation configuration file included from within
        <code class="filename">ecelerity.conf</code>
      </p></li>
<li class="listitem"><p>
        <a class="link" href="conf.ref.msgc_server.conf.php" title="16.4. msgc_server.conf File"><code class="filename">msgc_server.conf</code></a>
        - Momentum cluster messaging bus configuration file
      </p></li>
</ul></div>
<p>
    If you make changes to a configuration file, be sure to use the
    <a class="link" href="conf.overview.php#conf.ecconfigd" title="15.1.3. Configuration Management (ecconfigd)">Momentum Configuration
    Server</a> to commit your changes.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="conf.files.comments"></a>15.1.1. Comments and Whitespace</h3></div></div></div>
<p>
      In common with many other Unix configuration files, Momentum's
      configuration files use the <code class="literal">#</code> (commonly
      referred to as "hash" or "pound" sign) symbol to introduce a
      single line comment. Whitespace is unimportant in the various
      configuration stanza; feel free to pad the whitespace as you see
      fit for maximum readability.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If the values assigned to any options contain whitespace or any
        of the characters ‘<code class="literal">#</code>’,
        ‘<code class="literal">/</code>’, ‘<code class="literal">"</code>’,
        ‘<code class="literal">'</code>’, ‘<code class="literal">=</code>’,
        ‘<code class="literal">{</code>’, ‘<code class="literal">}</code>’,
        ‘<code class="literal">[</code>’, ‘<code class="literal">]</code>’,
        ‘<code class="literal">(</code>’, ‘<code class="literal">)</code>’ they must
        be enclosed by quotation marks. Note that binding names cannot
        contain spaces.
      </p>
</div>
<p>
      You may use C-style comments in your configuration files. C-style
      comments begin with <code class="literal">/*</code> and end with
      <code class="literal">*/</code>. Any text between those two markers will be
      ignored by Momentum. C-style comments do not nest.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="conf.files.includes"></a>15.1.2. Using the <code class="literal">include</code> and
        <code class="literal">readonly_include</code> Directives</h3></div></div></div>
<a class="indexterm" name="idp1027504"></a><p>
      Momentum's configuration is distributed over multiple
      configuration files, which are referenced from within the other
      configuration files. For example, the
      <code class="filename">eccluster.conf</code> file is "included" from the
      <code class="filename">ecelerity.conf</code> file and configures
      cluster-related options in a cluster configuration.
    </p>
<p>
      You may break apart any of your configuration files into multiple
      files and reference them using the <code class="literal">include</code> or
      <code class="literal">readonly_include</code> directives. Both are valid in
      any scope. The following is an example using the
      <code class="literal">include</code> directive:
    </p>
<pre class="programlisting">
include "/opt/msys/ecelerity/etc/other.conf"
</pre>
<p>
      If you break up your configuration file into different files, you
      must add these new files to the repository. For included files,
      the directory that holds the file being included
      <span class="bold"><strong>from</strong></span> is checked before the
      default search path.
    </p>
<p>
      You may also use the <code class="literal">include</code> directive to allow
      the inclusion of a directory, as shown in the following example:
    </p>
<pre class="programlisting">
# assuming that /opt/msys/ecelerity/etc/config.d is a directory
# each file in that directory will be included
include "/opt/msys/ecelerity/etc/config.d"
</pre>
<p>
      When the referenced path is a directory, all the files within that
      directory are included in alphabetical order. Hidden files (those
      whose names begin with a single period) are not included.
      Sub-directories are not automatically processed.
    </p>
<p>
      The <code class="literal">readonly_include</code> directive also supports
      making online changes to the configuration with the
      <a class="link" href="console_commands.config.php" title="config">config set</a> and
      <a class="link" href="console_commands.config.php" title="config">config unset</a>
      commands.
    </p>
<p>
      When making an online change, Momentum must decide to which
      configuration file to save online changes. This decision is
      controlled by the following factors:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="option">Local_Changes_File</code> option
        </p></li>
<li class="listitem"><p>
          <code class="option">Local_Changes_Only</code> option
        </p></li>
<li class="listitem"><p>
          Read-only status of a particular configuration file
        </p></li>
<li class="listitem"><p>
          Whether the operation being performed is replacing an old
          value with a new one or setting a value that has not
          previously been set
        </p></li>
</ul></div>
<p>
      The <code class="option">Local_Changes_File</code> option sets the name of a
      configuration file that must be writable and that is implicitly
      loaded after all other configuration files, regardless of its
      placement in the configuration file. Since it must be writable and
      files included twice are read-only, the
      <code class="option">Local_Changes_File</code> option cannot point to the
      same file as any <code class="literal">include</code> directive, and it
      cannot point to the main configuration file. Since
      <code class="option">Local_Changes_File</code> is effectively loaded at the
      end of the main configuration file, options set in it are able to
      override any setting in any other configuration file. If it were
      loaded at some other point, options set after that point could not
      be overridden by it.
    </p>
<p>
      If the <code class="option">Local_Changes_File</code> option is not defined
      and the main configuration file is writable, changes are written
      to the main configuration file. If
      <code class="option">Local_Changes_File</code> is not defined and the main
      configuration file is read-only, a virtual file not associated
      with any real path is used to hold changes; in this case, the
      <a class="link" href="console_commands.config.php" title="config">config writeback</a>
      command will issue a warning stating that not all portions of the
      configuration could be saved and show the contents of the virtual
      file. This issue can be fixed by setting the
      <code class="option">Local_Changes_File</code> to a valid path and issuing
      the <span class="command"><strong>config writeback</strong></span> command again, at which
      point changes in the virtual file will be saved to the newly
      configured location.
    </p>
<p>
      The <code class="option">Local_Changes_Only</code> option defaults to
      <code class="literal">false</code>. If it is <code class="literal">true</code>, the
      <code class="option">Local_Changes_File</code> option must be defined and all
      changes are saved to the <code class="option">Local_Changes_File</code>. If
      it is <code class="literal">false</code>, changes are distributed as
      described below:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          When replacing a value that has previously been set, if the
          file it was last set in is writable then the change is made
          in-place; i.e., the new option value replaces the old option
          value at the same location in the writable file.
        </p></li>
<li class="listitem"><p>
          If replacing a value that was last set in a read-only file or
          setting a value that was not set previously, then the change
          will go to the first writable file in which the scope instance
          containing the change was defined.
        </p></li>
</ul></div>
<p>
      For an example of the first writable file, assume that
      <code class="filename">ecelerity.conf</code> is configured as follows:
    </p>
<pre class="programlisting">
readonly_include "foo.conf"
include "baz.conf"
    </pre>
<p>
      and <code class="filename">foo.conf</code> contains:
    </p>
<pre class="programlisting">
Domain yahoo.com {
  Gateway = "server.yahoo.com"
  include "bar.conf"
}
</pre>
<p>
      Options set for the first time by commands starting with
      <span class="command"><strong>config set Domain yahoo.com</strong></span> will be saved in
      <code class="filename">bar.conf</code>, since <code class="filename">foo.conf</code>
      is read-only and <code class="filename">baz.conf</code> occurs after
      <code class="filename">bar.conf</code>. The change made by <span class="command"><strong>config
      set Domain yahoo.com gateway "server2.yahoo.com"</strong></span> would
      also end up in <code class="filename">bar.conf,</code> since the original
      location, <code class="filename">foo.conf</code>, is read-only, and
      <code class="filename">bar.conf</code> is the first writable location after
      it.
    </p>
<p>
      Finally, if the scope instance containing the change was only
      encountered in read-only files or not at all, the change will be
      saved to the file defined by the
      <code class="option">Local_Changes_File</code> option. Note that changes,
      even committed changes, are accumulated in in-memory
      representations of the configuration files and are not saved to
      disk until a <span class="command"><strong>config writeback</strong></span> command is
      issued.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        Any configuration files included with the
        <code class="literal">readonly_include</code> directive are read-only. Any
        configuration files included multiple times (overall, not
        necessarily from the same file) are read-only. Any configuration
        files loaded from a URI with a scheme other than 'file://',
        'persist://' are read-only. All other configuration files are
        considered writable.
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="conf.ecconfigd"></a>15.1.3. Configuration Management (<span class="command"><strong>ecconfigd</strong></span>)</h3></div></div></div>
<p>
    Both single-node and clustered installations take advantage of
    Momentum's revision control system for configuration files. Any
    configuration changes should be committed to the Momentum
    Configuration Server <span class="command"><strong>ecconfigd</strong></span>, henceforth
    referred to as the configuration server. On start up, the script in
    the <code class="filename">/etc/init.d</code> directory runs the
    <span class="command"><strong>ecconfigd</strong></span> as a service on the node designated as
    Manager. For details about the configuration server, see
    <a class="xref" href="executable.ecconfigd.php" title="ecconfigd"><span class="refentrytitle">ecconfigd</span></a>. For details about the
    <span class="command"><strong>ecconfigd</strong></span> service in a cluster configuration, see
    <a class="xref" href="cluster.php#cluster.config_files.mgmt" title="16.1.1. Cluster-specific Configuration Management">Section 16.1.1, “Cluster-specific Configuration Management”</a>.
  </p>
<p>
    Use <span class="command"><strong>ecconfigd_ctl</strong></span> to start, stop, or restart the
    configuration server. For details about this command, see
    <a class="xref" href="executable.ecconfigd_ctl.php" title="ecconfigd_ctl"><span class="refentrytitle">ecconfigd_ctl</span></a>.
  </p>
<p>
    Momentum's version control management tool is
    <span class="command"><strong>eccfg</strong></span>. It is used to track and update
    configuration file changes. For details about using this tool, see
    <a class="xref" href="executable.eccfg.php" title="eccfg"><span class="refentrytitle">eccfg</span></a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="conf.ecconfigd.singlenode"></a>15.1.3.1. Repository Working Copy for Single Node</h4></div></div></div>
<p>
      The repository working copy directories are located at
      <code class="filename">/opt/msys/ecelerity/etc/conf/</code>. There are a
      number of directories below this. What they are depends upon
      whether you have installed Momentum in a single-node or cluster
      configuration and whether you have defined any subclusters. The
      following are descriptions of the subdirectories in a single-node
      configuration:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="filename">global</code> – This directory exists but is
          not used in a single-node configuration.
        </p></li>
<li class="listitem"><p>
          <code class="filename">default</code> – files used by a single-node
          configuration
        </p></li>
</ul></div>
<p>
      By default the order is:
    </p>
<pre class="screen">
/opt/msys/ecelerity/etc
/opt/msys/ecelerity/etc/conf/global
/opt/msys/ecelerity/etc/conf/default
</pre>
<p>
      Directories are separated by the standard path separator.
    </p>
<p>
      If you wish to change the search order, set the environment
      variable <code class="literal">EC_CONF_SEARCH_PATH</code>. For more
      information about <code class="literal">EC_CONF_SEARCH_PATH</code>, see
      <a class="xref" href="environment_file.php" title="Chapter 31. Configuring the Environment File">Chapter 31, <i>Configuring the Environment File</i></a>.
    </p>
<p>
      For details about the working copy of the repository in a cluster
      configuration, see
      <a class="xref" href="cluster.php#cluster.config_files.mgmt.cluster" title="16.1.1.1. Repository Working Copy for Cluster">Section 16.1.1.1, “Repository Working Copy for Cluster”</a>.
    </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="conf.manual.changes"></a>15.1.4. Changing Configuration Files</h3></div></div></div>
<p>
    Since the configuration files are under revision control, it is
    important to take steps to avoid conflicts with changes made
    elsewhere in the system and to be able to track changes. For this
    reason, perform the following actions when editing any configuration
    files or script files:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
        Familiarize yourself with the Momentum repository management
        tool <a class="xref" href="executable.eccfg.php" title="eccfg"><span class="refentrytitle">eccfg</span></a>.
      </p></li>
<li class="listitem">
<p>
        Navigate to the appropriate directory:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            For a single-node configuration, navigate to
            <code class="filename">/opt/msys/ecelerity/etc/conf/default</code> .
          </p></li>
<li class="listitem"><p>
            For a cluster configuration, navigate to
            <code class="filename">/opt/msys/ecelerity/etc/conf/default</code> on
            the cluster manager.
          </p></li>
<li class="listitem"><p>
            For node-specific configuration, navigate to the
            sub-directory on the cluster manager that is below
            <code class="filename">/opt/msys/ecelerity/etc/conf</code> and bears
            the name of the node:
            <code class="filename">/opt/msys/ecelerity/etc/conf/<em class="replaceable"><code>nodename</code></em></code>.
          </p></li>
</ul></div>
</li>
<li class="listitem">
<p>
        Make sure that the working copy of the repository is up-to-date
        by issuing the command:
      </p>
<pre class="screen">
eccfg pull --username <em class="replaceable"><code>name</code></em> --password <em class="replaceable"><code>passwd</code></em>
</pre>
</li>
<li class="listitem"><p>
        Make the necessary changes to the configuration file using the
        text editor of your choice.
      </p></li>
<li class="listitem">
<p>
        Test the validity of your changes using the
        <a class="xref" href="executable.validate_config.php" title="validate_config"><span class="refentrytitle">validate_config</span></a> script:
      </p>
<pre class="screen">
/opt/msys/ecelerity/bin/validate_config  
</pre>
</li>
<li class="listitem">
<p>
        Check that your changes are valid by reloading the configuration
        before committing it. Issue the following command:
      </p>
<pre class="screen">
/opt/msys/ecelerity/bin/ec_console /tmp/2025 config reload
</pre>
<p>
        If there are any errors, the new configuration will not load and
        the error message, <code class="literal">"Reconfigure failed"</code>, will
        be displayed.
      </p>
</li>
<li class="listitem">
<p>
        Once you are satisfied with your changes, commit them using the
        following command:
      </p>
<pre class="screen">
/opt/msys/ecelerity/bin/eccfg commit --username <em class="replaceable"><code>admin_user</code></em> \
 --password <em class="replaceable"><code>password</code></em>
</pre>
<p>
        If you are configuring a cluster, you should allow about a
        minute or so for the changes to propagate to all nodes.
      </p>
</li>
<li class="listitem">
<p>
        Implement your changes.
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
            For a single-node configuration, open the console and issue
            the command:
          </p>
<p>
</p>
<pre class="screen">
config reload
</pre>
<p>
          </p>
<p>
            You can view the effective configuration settings using the
            console command <strong class="userinput"><code>config showrecurse</code></strong>.
            You may want to turn the pager on first by entering the
            command, <strong class="userinput"><code>\pager</code></strong>. There is no need to
            restart the ecelerity process.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              Some configuration changes require restarting the
              ecelerity process, as documented throughout this guide.
              Running the <strong class="userinput"><code>config reload</code></strong> command
              will not suffice.
            </p>
</div>
</li>
<li class="listitem">
<p>
            For a cluster configuration, issue the <strong class="userinput"><code>config
            reload</code></strong> command on the cluster manager. The
            changes will be propagated to all of the other nodes and
            will be automatically loaded by the running ecelerity
            processes.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              Some configuration changes require restarting the
              ecelerity process, as documented throughout this guide.
              Running the <strong class="userinput"><code>config reload</code></strong> command
              will not suffice.
            </p>
</div>
</li>
<li class="listitem"><p>
            For a node-specific configuration, use the
            <a class="xref" href="executable.ec_ctl.php" title="ec_ctl"><span class="refentrytitle">ec_ctl</span></a> command to
            restart the ecelerity process. The <strong class="userinput"><code>config
            reload</code></strong> command will not load configuration
            changes.
          </p></li>
</ul></div>
</li>
</ol></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      Avoid leaving uncommitted changes pending, especially in the
      working copy on a node.
    </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="conf.adding.configuration.files"></a>15.1.5. Adding Configuration Files</h3></div></div></div>
<p>
    As discussed in <a class="xref" href="conf.overview.php#conf.files.includes" title="15.1.2. Using the include and readonly_include Directives">Section 15.1.2, “Using the <code class="literal">include</code> and
        <code class="literal">readonly_include</code> Directives”</a>, you
    can split your Momentum configuration into any number of
    configuration files. However, if you add new configuration files you
    must also add them to the repository. Follow these steps:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
        Familiarize yourself with the Momentum repository management
        tool <a class="xref" href="executable.eccfg.php" title="eccfg"><span class="refentrytitle">eccfg</span></a>.
      </p></li>
<li class="listitem">
<p>
        Navigate to the appropriate directory for the changes you intend
        to make. You will save your files to a different directory on a
        different node depending upon how narrowly or widely your
        configuration applies.
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            For a single-node configuration, navigate to
            <code class="filename">/opt/msys/ecelerity/etc/conf/default</code>.
          </p></li>
<li class="listitem"><p>
            For a cluster configuration, navigate to
            <code class="filename">/opt/msys/ecelerity/etc/conf/default</code> on
            the cluster manager.
          </p></li>
<li class="listitem"><p>
            For node-specific configuration, create a sub-directory on
            the cluster manager that is below
            <code class="filename">/opt/msys/ecelerity/etc/conf</code> and bears
            the name of the node:
            <code class="filename">/opt/msys/ecelerity/etc/conf/<em class="replaceable"><code>nodename</code></em></code>.
            Copy the appropriate configuration files from the
            <code class="filename">default</code> directory.
          </p></li>
</ul></div>
</li>
<li class="listitem">
<p>
        Make sure that the working copy of the repository is up-to-date
        by issuing the command:
      </p>
<pre class="screen">
eccfg pull --username <em class="replaceable"><code>name</code></em> --password <em class="replaceable"><code>passwd</code></em>
</pre>
</li>
<li class="listitem"><p>
        Create and save the new configuration file.
      </p></li>
<li class="listitem"><p>
        Open the appropriate configuration file and include the new file
        using the <code class="literal">include</code> directive.
      </p></li>
<li class="listitem">
<p>
        Test the validity of your changes using the
        <a class="xref" href="executable.validate_config.php" title="validate_config"><span class="refentrytitle">validate_config</span></a> script:
      </p>
<pre class="screen">
/opt/msys/ecelerity/bin/validate_config  
</pre>
</li>
<li class="listitem">
<p>
        Check that your changes are valid by reloading the configuration
        before committing it. Issue the following command:
      </p>
<pre class="screen">
/opt/msys/ecelerity/bin/ec_console /tmp/2025 config reload
</pre>
<p>
        If there are any errors, the new configuration will not load and
        the error message, <code class="literal">"Reconfigure failed"</code>, will
        be displayed.
      </p>
</li>
<li class="listitem">
<p>
        Once you are satisfied with your changes, commit them using the
        following command:
      </p>
<pre class="screen">
/opt/msys/ecelerity/bin/eccfg commit --username <em class="replaceable"><code>admin_user</code></em> \
 --password <em class="replaceable"><code>password</code></em>
</pre>
<p>
        If you are configuring a cluster, you should allow about a
        minute or so for the changes to propagate to all nodes.
      </p>
</li>
<li class="listitem">
<p>
        Implement your changes.
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
            For a single-node configuration, open the console and issue
            the command:
          </p>
<p>
</p>
<pre class="screen">config reload
</pre>
<p>
          </p>
<p>
            You can view the effective configuration settings using the
            console command <strong class="userinput"><code>config showrecurse</code></strong>.
            You may want to turn the pager on first by entering the
            command, <strong class="userinput"><code>\pager</code></strong>. There is no need to
            restart the ecelerity process.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              Some configuration changes require restarting the
              ecelerity process, as documented throughout this guide.
              Running the <strong class="userinput"><code>config reload</code></strong> command
              will not suffice.
            </p>
</div>
</li>
<li class="listitem">
<p>
            For a cluster configuration, issue the <strong class="userinput"><code>config
            reload</code></strong> command on the cluster manager. The
            changes will be propagated to all of the other nodes and
            will be automatically loaded by the running ecelerity
            processes.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              Some configuration changes require restarting the
              ecelerity process, as documented throughout this guide.
              Running the <strong class="userinput"><code>config reload</code></strong> command
              will not suffice.
            </p>
</div>
</li>
<li class="listitem"><p>
            For a node-specific configuration, use the
            <a class="xref" href="executable.ec_ctl.php" title="ec_ctl"><span class="refentrytitle">ec_ctl</span></a> command to
            restart the ecelerity process. The <strong class="userinput"><code>config
            reload</code></strong> command will not load configuration
            changes.
          </p></li>
</ul></div>
</li>
</ol></div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="p.configuration.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.configuration.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.options.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Part III. Configuring Momentum </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 15.2. Configuration Options</td>
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
