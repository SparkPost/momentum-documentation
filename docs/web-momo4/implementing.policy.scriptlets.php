<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>62.2. Policy Scriptlets</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="policy.php" title="Chapter 62. Implementing Policy with Momentum">
<link rel="prev" href="policy.php" title="Chapter 62. Implementing Policy with Momentum">
<link rel="next" href="policy.context.variables.php" title="Chapter 63. Validation Context Variables">
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
<tr><th colspan="3" align="center">62.2. Policy Scriptlets</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="policy.php">Prev</a> </td>
<th width="60%" align="center">Chapter 62. Implementing Policy with Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="policy.context.variables.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="implementing.policy.scriptlets"></a>62.2. Policy Scriptlets</h2></div></div></div>
<p>
      Lua scripts provide you with the capability to express the logic
      behind your policy. Aside from being very convenient (policy
      scripts can be reloaded on the fly, allowing real-time adjustment
      of policy without interrupting service), the Momentum
      implementation has extremely low overhead and tightly integrates
      with the event-based architecture, being able to suspend
      processing until asynchronous operations (such as DNS resolution,
      or database queries) complete. Note that variables used in a
      policy script are scoped locally and only persist in the
      particular policy script in which it is defined. Use the
      <a class="link" href="policy.php#policy.validation" title="62.1. Validation and the Validation Context">validation context</a> to
      persist data over different policy phases and policy scripts.
    </p>
<p>
      This section of the manual explains how to implement basic Lua
      policy scripts. For more information about this language, see
      <a class="link" href="http://www.lua.org" target="_top">http://www.lua.org</a>.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        Many Lua functions act as wrappers for C code, which means that
        the calling code needs to take steps to ensure safety. When
        calling a C API, make sure that all the arguments are valid as
        an unexpected <code class="literal">nil</code> may crash the system or
        have other undesirable results. Additionally, the data
        structures returned from C APIs are often shared between C and
        Lua. The most important consequence of this is that arrays
        coming from C APIs must only be accessed with existing indices,
        as opposed to Lua which simply returns <code class="literal">nil</code> on
        out-of-bounds access. Failure to do this on a Lua table
        connected to a C array will cause the system to fail.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="policy.scriptlets.helperfunctions"></a>62.2.1. Helper Functions</h3></div></div></div>
<p>
        The
        <code class="filename">/opt/msys/ecelerity/libexec/scriptlets/msys/</code>
        and
        <code class="filename">/opt/msys/ecelerity/libexec/embed/lua/msys/</code>
        directories contain modules with useful helper functions.
      </p>
<p>
        For a list of all Lua Functions, see
        <a class="xref" href="lua.summary_table.php" title="Chapter 64. Lua Functions Summary">Chapter 64, <i>Lua Functions Summary</i></a>.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="implementing.policy.scriptlets.callouts"></a>62.2.2. Callouts</h3></div></div></div>
<p>
        All user-defined scripts must implement one or more of the
        following function calls:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
            init()
          </p>
<p>
            The registration point for long-lived states, such as timed
            events or control functions. You should avoid using the init
            routine unless necessary, as it ties up an additional
            interpreter on the main scheduler thread. In the current
            architecture, things set up via the init routine have strong
            thread affinity with the scheduler thread and are not
            suitable for scheduling jobs to thread pools.
          </p>
<p>
            The init routine must return <code class="literal">true</code> if it
            successfully initializes. Any other return value results in
            a failure to apply the configuration.
          </p>
</li>
<li class="listitem">
<p>
            deinit()
          </p>
<p>
            The resource destruction point for things that were set up
            in the init phase. This function must return
            <code class="literal">true</code> when successful, otherwise resources
            may not be cleaned up.
          </p>
</li>
<li class="listitem">
<p>
            validate_connect(accept_construct, vctx)
          </p>
<p>
            This function maps to the
            <code class="function">validate_connect</code> C hook of the
            validation subsystem. Return values are one of
            <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_ehlo(str, accept_construct, vctx)
          </p>
<p>
            This function maps to the <code class="function">validate_ehlo</code>
            C hook from the validation subsystem. Return values are one
            of <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_mailfrom(str, accept_construct, vctx)
          </p>
<p>
            This function maps to the
            <code class="function">validate_mailfrom</code> C hook from the
            validation subsystem. Return values are one of
            <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_rcptto(ec_message, str, accept_construct, vctx)
          </p>
<p>
            This function maps to the
            <code class="function">validate_rcptto</code> C hook from the
            validation subsystem. Return values are one of
            <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_data(ec_message, accept_construct, vctx)
          </p>
<p>
            This function maps to the <code class="function">validate_data</code>
            C hook from the validation subsystem. Return values are one
            of <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_data_spool(ec_message, accept_construct, vctx)
          </p>
<p>
            This function maps to the
            <code class="function">validate_data_spool</code> C hook from the
            validation subsystem. Return values are one of
            <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_data_spool_each_rcpt(ec_message, accept_construct,
            vctx)
          </p>
<p>
            This function maps to the
            <code class="function">validate_data_spool_each_rcpt</code> C hook
            from the validation subsystem. Return values are one of
            <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_set_binding(ec_message)
          </p>
<p>
            Maps to the <code class="function">validate_set_binding</code> C hook
            from the validation subsystem. Return values are one of
            <code class="literal">msys.core.VALIDATE_CONT</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_rcptto_list(list_node, vctx)
          </p>
<p>
            Maps to the <code class="function">validate_rcptto_list</code> C hook
            from the validation subsystem. Return values are one of
            <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_rcptto_list_final(node, vctx)
          </p>
<p>
            Maps to the <code class="function">validate_rcptto_list_final</code>
            C hook from the validation subsystem. Return values are one
            of <code class="literal">msys.core.VALIDATE_CONT</code>,
            <code class="literal">msys.core.VALIDATE_AGAIN</code>, or
            <code class="literal">msys.core.VALIDATE_DONE</code>.
          </p>
</li>
<li class="listitem">
<p>
            validate_dealloc()
          </p>
<p>
            This callout maps to the
            <code class="function">validate_local_dealloc</code> C hook from the
            validation subsystem. This callout is only invoked if it is
            defined and if an earlier phase of processing invoked Lua
            code from this module. Its purpose is to allow your code a
            chance to act when the validate_context is torn down. If you
            used "self" in an earlier validation phase, it will be
            available in this function. You do not (and should not) need
            to define this callback unless you are doing something
            esoteric and accessing resources outside of the usual
            garbage collection mechanism. In most cases, your
            per-session state will be collected automatically.
          </p>
</li>
</ul></div>
<p>
        If you attempt to add a function call that does not match one of
        the above function signatures, you'll see an error message
        similar to the following:
      </p>
<pre class="screen">
1251465322:scriptlet: no usable methods found for module
   <em class="replaceable"><code>mod_name</code></em> in registerModule call
</pre>
<p>
        If you are calling Lua helper functions, copy the
        <code class="literal">msg</code> parameter into a table as shown in the
        following:

</p>
<pre class="programlisting">
function mod:validate_set_binding(msg)
  local ctx = {
    ec_message = msg
  };
  ...
end
</pre>
<p>

        At the moment, only the <code class="literal">msg</code> parameter is used
        by existing helpers. Be sure to map it to a field named
        <code class="literal">ec_message</code> as this is the name of the
        underlying type.


      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="default.policy.scriptlets"></a>62.2.3. Default Policy Scripts</h3></div></div></div>
<p>
        Default Lua policy scripts are included with Momentum for
        receiving. These scriptlets are found in the
        <code class="filename">/opt/msys/ecelerity/libexec/scriptlets/msys/default_policy.lua</code>
        file. These files are discussed in detail in the
        <a class="link" href="https://support.messagesystems.com/docs/web-policy/index.php" target="_top">Default
        Policy User Guide</a>.
      </p>
<p>
        In order to use the default policy scriptlets, you must add the
        <code class="filename">/opt/msys/ecelerity/etc/sample-configs/default_policy.conf</code>
        file to your configuration. For instructions on adding a
        configuration file, see
        <a class="xref" href="conf.overview.php#conf.adding.configuration.files" title="15.1.5. Adding Configuration Files">Section 15.1.5, “Adding Configuration Files”</a>.
      </p>
<p>
        You will likely need to alter the
        <code class="filename">default_policy.conf</code> file to suit your
        circumstances—by only enabling specific scanners, for
        example.
      </p>
<p>
        In the <code class="filename">default_policy.conf</code> file, you should
        also enable the datasource(s) suitable for your language
        encoding. A datasource is necessary for the keyword filter,
        which is described at the bottom of the
        <code class="filename">/opt/msys/ecelerity/etc/conf/default/dp_config.lua</code>
        file. The keyword file, <code class="filename">dp_config.lua</code>, and
        <code class="filename">custom_policy.lua</code> must be copied from
        <code class="filename">/opt/msys/ecelerity/etc/sample-configs/</code> to
        <code class="filename">/opt/msys/ecelerity/etc/conf/default/</code>.


      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="policy.best.practices"></a>62.2.4. Creating Policy Scripts</h3></div></div></div>
<p>
        Following best practices when creating policy scripts is
        important, especially in a cluster environment when scripts are
        used on more than one node. Scripts should take advantage of
        Momentum's built-in revision control and be added to the
        repository using the
        <a class="xref" href="executable.eccfg.php" title="eccfg"><span class="refentrytitle">eccfg</span></a> command.
      </p>
<p>
        To create a policy script, perform the following:
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Take steps to avoid conflicts.
          </p>
<p>
            When working with files that are under revision control, it
            is important to take steps to avoid conflicts with changes
            made elsewhere in the system and to be able to track
            changes. For this reason, perform the following actions
            before creating any policy scripts:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                Provision a user account for each admin user, so that
                the history in the repository is meaningful.
              </p></li>
<li class="listitem">
<p>
                Ensure that you have the latest updates on the node
                where you are creating the scripts by running
                <strong class="userinput"><code>/opt/msys/ecelerity/bin/eccfg
                pull</code></strong>.
              </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                  Pay special attention to the instructions for using
                  the <span class="command"><strong>pull</strong></span> command—if the
                  configuration is updated your current directory may be
                  invalidated. For more information, see
                  <a class="xref" href="executable.eccfg.php" title="eccfg"><span class="refentrytitle">eccfg</span></a>.
                </p>
</div>
</li>
</ul></div>
</li>
<li class="listitem">
<p>
            Create a directory for your script.
          </p>
<p>
            Scripts should be created in a directory that is under
            revision control. Create a directory for your scripts in the
            working copy of the repository on a node where you intend to
            run the script:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                If your scripts apply to all nodes in the cluster,
                create this directory under the
                <code class="filename">/opt/msys/ecelerity/etc/conf/default</code>
                directory or store them in the
                <code class="filename">global</code> directory. Typically, policy
                scripts are saved under Momentum's default working copy
                directory
                <code class="filename">/opt/msys/ecelerity/etc/conf/default/scripts</code>.
              </p></li>
<li class="listitem"><p>
                If your scripts apply to only one node, create a
                node-specific directory.
              </p></li>
</ul></div>
</li>
<li class="listitem">
<p>
            Write your script.
          </p>
<p>
            All scripts must
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                Include the <code class="literal">msys.core</code> package.
              </p></li>
<li class="listitem"><p>
                Implement one or more of the function calls described in
                <a class="xref" href="implementing.policy.scriptlets.php#implementing.policy.scriptlets.callouts" title="62.2.2. Callouts">Section 62.2.2, “Callouts”</a>.
              </p></li>
<li class="listitem">
<p>
                Return one of the following values:
              </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
                    <code class="literal">msys.core.VALIDATE_CONT</code> –
                    continue with validation routines.
                  </p></li>
<li class="listitem"><p>
                    <code class="literal">msys.core.VALIDATE_DONE</code> – do
                    not execute any more validation hooks from the same phase.
                  </p></li>
<li class="listitem"><p>
                    <code class="literal">msys.core.VALIDATE_AGAIN</code> – this
                    validation routine is doing something that blocks,
                    so call again later.
                  </p></li>
</ul></div>
</li>
</ul></div>
<p>
            The following is a simple script that runs in the EHLO phase
            and writes an entry to the <code class="filename">paniclog.ec</code>
            file. To create this example, same the script as a file
            named <code class="filename">ehlo_phase.lua</code> in the appropriate
            directory.
          </p>
<div class="example">
<a name="policy.scriptlets.ehlo.example"></a><p class="title"><b>Example 62.2. EHLO Example</b></p>
<div class="example-contents"><pre class="programlisting">
require("msys.core");

local mod = {};

function mod:validate_ehlo(str, accept, vctx)
  print("ehlo string is:", msys.expandMacro("%{vctx_conn:ehlo_string}"));
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("ehlo_phase", mod);
</pre></div>
</div>
<br class="example-break"><p>
            Note that the script requires the
            <code class="literal">msys.core</code> package, the function name
            <code class="literal">validate_ehlo</code> matches the callout
            described in
            <a class="xref" href="implementing.policy.scriptlets.php#implementing.policy.scriptlets.callouts" title="62.2.2. Callouts">Section 62.2.2, “Callouts”</a>,
            and the script returns a legitimate value
            <code class="literal">msys.core.VALIDATE_CONT</code>.
          </p>
<p>
            Failure to return a legitimate value from a scriptlet means
            that the script will not execute properly. For example, if
            you remove the line, <code class="code">return
            msys.core.VALIDATE_CONT;</code> from the script, you should
            see errors similar to the following in the
            <code class="filename">paniclog</code>:
          </p>
<pre class="screen">
1252601378:scriptlet-00147: validate_ehlo error: (null)
1252601378:scriptlet-00239: ehlo_phase error: (null)
</pre>
<p>
            These messages indicate a scriptlet error and give both the
            name of the script and the callout that failed.
          </p>
</li>
<li class="listitem">
<p>
            Update your configuration to properly reference your script.
          </p>
<p>
            After writing a script and saving it to the repository, you
            must include it in the
            <a class="link" href="modules.scriptlet.php" title="71.60. scriptlet - Lua Policy Scripts"><code class="filename">scriptlet</code></a>
            module using a <code class="option">script</code> stanza in your
            <code class="filename">ecelerity.conf</code> file.
          </p>
<p>
            For the example script, create a script scope named
            <code class="literal">ehlo_phase</code> inside the <code class="literal">scriptlet
            "scriptlet"</code> scope. Set the script name to
            <code class="literal">ehlo_phase</code>. Set the
            <code class="option">source</code> option of this scope to
            "<em class="replaceable"><code>myscripts</code></em>.ehlo_phase" replacing
            <em class="replaceable"><code>myscripts</code></em> with the name of the
            directory that you created. The scriptlet stanza should be
            similar to:
          </p>
<div class="example">
<a name="policy.scriptlets.configuration"></a><p class="title"><b>Example 62.3. Scriptlet Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
alerting {}

scriptlet "scriptlet" {
  # this loads default scripts to support enhanced control channel features
  script "boot" {
    source = "msys.boot"
  }
  # this loads the user-defined script
  script "ehlo_phase" {
    source = "myscripts.ehlo_phase"
  }
}
</pre></div>
</div>
<br class="example-break"><p>
            Lua looks for scripts in the repository working directories.
            If your script has been saved to a top level directory, you
            need only specify the script name when defining the
            <code class="option">source</code> option. Otherwise, specify the
            relative path to the script separating directories using the
            ‘<code class="literal">/</code>’ character. In the example above,
            the <code class="filename">ehlo_phase.lua</code> file is in the
            <code class="filename">/opt/mys/ecelerity/etc/conf/default/myscripts</code>
            directory. Names of scripts can be anything you like, as
            long as the name is a valid file system name and does not
            cause an error when the configuration file is parsed.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              You can use either a ‘<code class="literal">.</code>’ or a
              ‘<code class="literal">/</code>’ as a directory separator.
            </p>
</div>
<p>
            Be sure to specify the correct name of your script file as
            the <code class="option">source</code> value within the
            scriptlet::script scope and be sure to drop the file
            extension.
          </p>
<p>
            For example, specifying the file name
            <code class="literal">myscripts.ehlo_phase.lua</code> instead of
            <code class="literal">myscripts.ehlo_phase</code> results in the
            following error:
          </p>
<pre class="screen">
...
Unable to open '/opt/mys/ecelerity/etc/conf/default/myscripts/ehlo_phase/lua.lua',
  errno=2 No such file or directory
</pre>
<p>
            The name of the <code class="option">script</code> scope within the
            scriptlet module can also be anything of your choosing
            though it is good practice to use a name that describes the
            phase that the script runs in. Failure to register a module
            or misregistration does not result in an error when the
            console command <strong class="userinput"><code>config reload</code></strong> is
            issued. At runtime, your script simply will not execute.
          </p>
<p>
            For additional details about editing your configuration
            files, see <a class="xref" href="conf.overview.php#conf.manual.changes" title="15.1.4. Changing Configuration Files">Section 15.1.4, “Changing Configuration Files”</a>.
          </p>
</li>
<li class="listitem">
<p>
            Check the validity of your script.
          </p>
<p>
            Since a malformed configuration file will not reload, using
            <span class="command"><strong>config reload</strong></span> is one way of validating
            your scriptlet syntax. After your configuration has been
            changed, issue the command:
          </p>
<p>
            <strong class="userinput"><code>/opt/msys/ecelerity/bin/ec_console /tmp/2025
            config reload</code></strong>
          </p>
<p>
            If there are errors in your script, the reload may fail and
            display a message such as the following:
          </p>
<pre class="screen">
Module 'scriptlet' instance 'scriptlet' initialization failed while
preparing to commit. Consult your vendor.
</pre>
<p>
            This message usually indicates a syntax error in a script
            file. Note that reloading the configuration will not signal
            an error in <span class="emphasis"><em>registering</em></span> the code
            module. Improperly registered scriptlets do not execute, so
            no error messages will be displayed when the configuration
            is reloaded or at runtime.
          </p>
<p>
            If the configuration fails to reload, Momentum continues to
            function using the running configuration and ignoring your
            changes.
          </p>
<p>
            In a cluster, if you commit before you test on the local
            node, you risk pushing out a broken configuration across
            your cluster/subcluster. Therefore, it is best practice to
            try the <span class="command"><strong>config reload</strong></span> locally until you
            are happy that the configuration operates as expected,
            before making a commit. This may need to be staged; for
            instance, you will likely need to push out
            <span class="trademark">DuraVIP</span>™ or binding configuration
            changes before policy script changes can be made.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              You can also use the
              <code class="filename">/opt/msys/3rdParty/bin/rcluac</code> to
              check Lua syntax.
            </p>
<p>
              However, please note that Message Systems does not provide
              support for the use of any third party tools included or
              referenced by name within our products or product
              documentation; support is the sole responsibility of the
              third party provider.
            </p>
</div>
</li>
<li class="listitem">
<p>
            Debug your script.
          </p>
<p>
            Successfully reloading the configuration file does not
            guarantee that your script will run. Your script may be
            syntactically correct but have semantic errors. As always,
            you should test the functionality of scripts before
            implementing them in a production environment.
          </p>
<p>
            The following are some methods that can be used to debug
            your script:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
                Look in your <code class="filename">paniclog</code>.
              </p>
<p>
                Reloading the configuration will not indicate other
                kinds of errors, such as a misidentified
                <code class="literal">binding</code> field. In this case, you
                would find the following error in
                <code class="filename">/var/log/ecelerity/paniclog.ec</code>:
              </p>
<pre class="screen">
1251382104:datasource: failed to prepare
</pre>
<p>
                This indicates a datasource error in creating the
                prepared statement.
              </p>
<p>
                You can also view the last few entries in the
                <code class="filename">paniclog.ec</code> file by using the
                <a class="xref" href="console_commands.paniclog.php" title="paniclog"><span class="refentrytitle">paniclog</span></a>
                console command.
              </p>
</li>
<li class="listitem">
<p>
                Use the <code class="function">print</code> function.
              </p>
<p>
                If your Lua syntax is correct but you are not seeing the
                desired result, you can log output to your
                <code class="filename">paniclog</code> using the
                <code class="function">print</code> function. Output is formatted
                showing a Unix timestamp, the module name and the print
                argument, as shown in the following example:

</p>
<pre class="screen">
1251200446:scriptlet: Confirming entry in panic log.
</pre>
<p>
              </p>
<p>
                You can also use the <code class="function">print</code>
                statement to output error messages returned by
                functions. For example, the <code class="code">print("set_binding:
                error querying binding:", err);</code> line creates a
                <code class="filename">paniclog</code> entry such as the
                following when there is an SQL error:
              </p>
<pre class="screen">
1251382104:scriptlet: set_binding: error querying binding:
prepare: 1: no such column: bindings
failed to prepare:     SELECT bindings FROM customer_binding WHERE
customer_id = ? LIMIT 1
</pre>
<p>
                This log entry clearly indicates that the query
                references a nonexistent column and can be much more
                helpful than the terse log entry.
              </p>
</li>
<li class="listitem">
<p>
                Dump a variable.
              </p>
<p>
                To output structured information about a variable, you
                can use the <code class="function">msys.dumper.Dumper</code>
                function. To use this function, include the code
                <code class="code">require("msys.dumper");</code>. When you wish to
                output the value of a variable, add the statement
                <code class="code">print(msys.dumper.Dumper(<em class="replaceable"><code>var_name</code></em>));</code>.
              </p>
<p>


                The following is an example of a
                <code class="filename">paniclog</code> entry:
              </p>
<pre class="screen">
1251390180:scriptlet: return { recipient="no-reply@mydomain.com",
  note="No email received at this address", code="550"}
</pre>
</li>
</ul></div>
</li>
<li class="listitem">
<p>
            Commit your changes.
          </p>
<p>
            Once you are satisfied that your scripts function correctly,
            commit your changes. From the directory above your newly
            created directory, use <span class="command"><strong>eccfg</strong></span> to add both
            the directory and the script to the repository:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
                If you are adding a new script, issue the command
              </p>
<p>
                <strong class="userinput"><code>eccfg commit ––username
                <em class="replaceable"><code>admin_user</code></em> ––password
                <em class="replaceable"><code>passwd</code></em> ––add-all
                --message <em class="replaceable"><code>message
                here</code></em></code></strong>.
              </p>
</li>
<li class="listitem"><p>
                If you are editing a script, you need not use the
                <code class="option">––add-all</code> option.
              </p></li>
</ul></div>
</li>
<li class="listitem">
<p>
            Repply your changes, if required.
          </p>
<p>
            In all cases, edits made to the local configuration will
            need to be manually applied to the node via <span class="command"><strong>config
            reload</strong></span>. The <span class="command"><strong>eccfg commit</strong></span>
            command will not do it for you. If you have not reloaded
            your configuration, issue the console command:
          </p>
<p>
            <strong class="userinput"><code>/opt/msys/ecelerity/bin/ec_console /tmp/2025
            config reload</code></strong>
          </p>
<p>
            If your changes affect more than one node, each node will
            check for an updated configuration each minute and
            automatically check out your changes and issue a
            <span class="command"><strong>config reload</strong></span>.
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="policy.scriptlets.examples"></a>62.2.5. Examples</h3></div></div></div>
<p>
        This section includes examples of using policy scripts.
      </p>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="policy.scriptlets.priority"></a>62.2.5.1. Setting the Priority of a Message</h4></div></div></div>
<p>
          In some circumstances, you may wish to deliver certain
          messages ASAP. You can do this by setting the
          <code class="literal">priority</code> of a message in the following way:


        </p>
<pre class="programlisting">
require("msys.core");
require("msys.extended.message");

local mod = {};

function mod:validate_set_binding(msg)
  print("mod:validate_set_binding: Setting msg priority to 1");
  msg.priority = 1;
  return msys.core.VALIDATE_CONT;
  
end

msys.registerModule("binder", mod);
</pre>
<p>
          Message priority is a bit field in the ec_message struct, so
          the only valid values are 0 and 1. The message priority is set
          to <code class="literal">0</code> when a message is created. Set the
          message priority to <code class="literal">1</code> to create a high
          priority message. Normally, messages are pulled from the queue
          in the order they were added. When a message priority is set
          to <code class="literal">1</code>, that message will be pulled first
          from whatever queue it is on.
        </p>
<p>
          Use <code class="literal">msg.priority</code> to read the priority of a
          message.
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            It is important not to overuse the priority setting. High
            priority messages should be reserved for messages that need
            to go out immediately, before other messages. Keeping high
            priority messages to a low percentage of the total message
            volume is important so the high priority messages do not
            cause delays for normal priority messages. A common use case
            for high priority messages is sending out password resets in
            the midst of a major mail campaign.
          </p>
</div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="policy.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="policy.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="policy.context.variables.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 62. Implementing Policy with Momentum </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 63. Validation Context Variables</td>
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
