<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.23. csapi – Symantec CSAPI Antivirus Support</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.conntrol.php" title="71.22. conntrol – Fine-Grained Connection Control">
<link rel="next" href="modules.custom_bounce_logger.php" title="71.24. custom_bounce_logger – Custom Bounce Logging">
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
<tr><th colspan="3" align="center">71.23. csapi – Symantec CSAPI Antivirus Support</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.conntrol.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.custom_bounce_logger.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.csapi"></a>71.23. csapi – Symantec CSAPI Antivirus Support</h2></div></div></div>
<a class="indexterm" name="idp20759504"></a><p>
    The Content Scanning Application Programming Interface (CSAPI)
    module provides integration to Symantec's suite of content scanners.
    This module runs in an external process
    (<code class="filename">/opt/msys/ecelerity/sbin/ec_avscan</code>) initiated
    by Momentum during startup.
  </p>
<p>
    If you intend to use this module, be sure to choose it during
    installation. For more information, see
    <a class="xref" href="post_installation.php#install.additional.packages" title="12.1. Installing Partner Modules">Section 12.1, “Installing Partner Modules”</a>.
  </p>
<p>
    The following is a listing of operating system/architecture
    combinations and the version of CSAPI that they support:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        RH4 64 bit – 9.1 with 32 bit emulation
      </p></li>
<li class="listitem"><p>
        RH5 32 bit – 9.1
      </p></li>
<li class="listitem"><p>
        RH4 32 bit – 9.1
      </p></li>
<li class="listitem"><p>
        RH5 64 bit – 9.1 with 32 bit emulation
      </p></li>
</ul></div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.csapi.configuration"></a>71.23.1. Configuration</h3></div></div></div>
<p>
      You must load the antivirus module in order to run the csapi
      module. For more information, see
      <a class="xref" href="modules.antivirus.php" title="71.6. antivirus – Antivirus">Section 71.6, “antivirus – Antivirus”</a>.
    </p>
<p>
      The following is an example configuration:
    </p>
<div class="example">
<a name="modules.csapi.example3.1"></a><p class="title"><b>Example 71.38. csapi Configuration</b></p>
<div class="example-contents">
<p>
        Validation modules can be loaded passively, in which case the
        validation system will not call the SMTP transaction hooks
        defined by the module. When a module is loaded in passive mode
        inbound messages will not be virus scanned unless you explicitly
        call the appropriate scripting action. Modules are loaded
        passively by setting the <code class="option">enabled</code> option to
        <code class="literal">false</code>, as shown in the following example.
      </p>
<pre class="programlisting">
csapi {}
# note that this module is
# also nested inside the antivirus module
antivirus "antivirus1" {
  csapi "csapi1" {
    enabled = false
    action = "pass"
    context_variable = "csapi_status"
    skip_context_variable = "skip_virus_check"
    max_concurrency = 5
  }
}
</pre>
</div>
</div>
<br class="example-break"><div class="warning">
<h3 class="title">Warning</h3>
<p>
        In order to use this module, you must configure it in the global
        scope <span class="bold"><strong>and</strong></span> also within the
        antivirus scope as shown in
        <a class="xref" href="modules.csapi.php#modules.csapi.example3.1" title="Example 71.38. csapi Configuration">Example 71.38, “csapi Configuration”</a>.
      </p>
<p>
        The csapi module is a singleton in the global scope but a
        non-singleton within the antivirus scope. In the global scope,
        this module only supports the <code class="option">enabled</code> and
        <code class="option">debug_level</code> options.
      </p>
</div>
<p>
      This module shares all of the same configuration options as the
      global antivirus module, plus the following csapi-specific
      options:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          max_concurrency
        </span></dt>
<dd>
<p>
            Specifies the maximum number of threads the external scanner
            should use. This setting is
            <span class="bold"><strong>mandatory</strong></span>. If you do not
            set this option, it defaults to a value of
            <code class="literal">1</code>.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              Be sure to set the concurrency of the
              <a class="link" href="conf.ref.threadpool.php" title="threadpool">CPU
              threadpool</a> to a value that is less than the
              <code class="option">max_concurrency</code> of the csapi module.
            </p>
</div>
</dd>
<dt><span class="term">
          max_cumulative_extract_size
        </span></dt>
<dd>
<p>
            Setting this option to <code class="literal">0</code> or leaving this
            option unconfigured will set the maximum cumulative extract
            size (the maxCumulativeExtractSize variable of CSAPI) to
            <code class="literal">209715200</code> (about 200MB). Default value is
            <code class="literal">0</code>.
          </p>
<p>
            This option can be set to a maximum of
            <code class="literal">2147483648</code> (2GB). If you need to set it
            to a value greater than this, you can set it to a maximum of
            <code class="literal">4294967294</code> by starting the ec_avscan
            scanner process in the following way:
          </p>
<pre class="programlisting">
shell&gt; /opt/msys/ecelerity/sbin/ec_avscan -DDEBUG \
  -omaxCumulativeExtractSize=4294967294
</pre>
</dd>
<dt><span class="term">
          max_extract_depth
        </span></dt>
<dd><p>
            Maximum directory depth when extracting an archive. The
            maximum value is 50; the minimum value is 1; and the CSAPI
            default value is 10.
          </p></dd>
<dt><span class="term">
          max_extract_size
        </span></dt>
<dd>
<p>
            Maximum size in bytes of a file extracted from an archive.
            The CSAPI default value is <code class="literal">104857600</code>
            bytes.
          </p>
<p>
            This limit and the following <code class="literal">extract</code>
            limits, exist to avoid potential denial of service attacks
            with messages containing archive files.
          </p>
</dd>
<dt><span class="term">
          max_extract_time
        </span></dt>
<dd><p>
            Maximum amount of time in seconds to spend extracting an
            archive file, a setting of 0 means unlimited. Default value
            is <code class="literal">180</code> seconds.
          </p></dd>
<dt><span class="term">
          max_file_count
        </span></dt>
<dd><p>
            Maximum number of files allowed for a single scan or 0 for
            no limit. Default value is <code class="literal">5000</code>.
          </p></dd>
<dt><span class="term">
          prefer_mem
        </span></dt>
<dd><p>
            This configuration option has not been implemented.


          </p></dd>
<dt><span class="term">
          scanner_log
        </span></dt>
<dd><p>
            Log file for the external scanner. Default value for this
            option is <code class="filename">/var/log/ecelerity/csapi.log</code>.
          </p></dd>
<dt><span class="term">
          scanner_path
        </span></dt>
<dd><p>
            Path to the external scanning process. Normally, you would
            not need to change this value. Default value is
            <code class="filename">/opt/msys/ecelerity/sbin/ec_avscan</code>.
          </p></dd>
<dt><span class="term">
          update_interval
        </span></dt>
<dd><p>
            How often to update the antivirus definitions. Default value
            is <code class="literal">86400</code> (one day).
          </p></dd>
<dt><span class="term">
          use_wire_rep
        </span></dt>
<dd>
<p>
            If use_wire_rep = <code class="literal">true</code> (the default
            setting), then a dot-stuffed representation of the message
            is held entirely in memory and can be used as received,
            rather than loading pieces of the message as needed.
          </p>
<p>
            If use_wire_rep = <code class="literal">false</code>, then a
            dot-unstuffed representation of the message will be
            generated and passed to the module.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              During testing, it has been noted that some viruses avoid
              detection when
              use_wire_rep = <code class="literal">true</code> when used
              with the CSAPI module. We therefore recommend that
              use_wire_rep = <code class="literal">false</code> when
              used with this module.
            </p>
</div>
</dd>
</dl></div>
<p>
      For a list of the configuration options that this module shares
      with other antivirus modules, see
      <a class="xref" href="modules.antivirus.php#modules.antivirus.configuration" title="71.6.1. Configuration">Section 71.6.1, “Configuration”</a>. For the csapi
      module, the default value for the
      <code class="option">context_variable</code> is
      <code class="literal">csapi_status</code>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.csapi.context.variables"></a>71.23.2. Context Variables</h3></div></div></div>
<p>
      The csapi module sets two validation context variables:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          <em class="replaceable"><code>csapi</code></em>_status
        </span></dt>
<dd>
<p>
            Using the <code class="option">context_variable</code> option, you can
            name a context variable whatever you choose. If not set, it
            defaults to
            <code class="literal"><em class="replaceable"><code>engine_name</code></em>_status</code>,
            hence the name <code class="literal">csapi_status</code>. If the
            message is clean, this context variable will not be set.
          </p>
<p>
            If there was a problem scanning the message, it will contain
            <code class="literal">error</code>. Otherwise, it will contain an
            empty string.
          </p>
</dd>
<dt><span class="term">
          virus_info
        </span></dt>
<dd><p>
            If the
            <code class="literal"><em class="replaceable"><code>engine_name</code></em>_status</code>
            context variable is set, this also sets another context
            variable named
            <code class="literal"><em class="replaceable"><code>engine_name</code></em>_status_info</code>,
            which contains the virus name as defined by the CSAPI
            library.
          </p></dd>
</dl></div>
<p>
      See <a class="xref" href="modules.antivirus.php#modules.antivirus.configuration" title="71.6.1. Configuration">Section 71.6.1, “Configuration”</a> for more
      information about antivirus context variables.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.csapi.lua.fucntions"></a>71.23.3. Lua Functions</h3></div></div></div>
<p>
      This module supports the <a class="xref" href="lua.ref.msys.av.scan.php" title="msys.av.scan"><span class="refentrytitle">msys.av.scan</span></a>
      and <a class="xref" href="lua.ref.msys.av.scan_part.php" title="msys.av.scan_part"><span class="refentrytitle">msys.av.scan_part</span></a> Lua functions.
    </p>
<p>
      This function returns four values:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
          The <span class="emphasis"><em>scan status</em></span>, which is one of the
          following values:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
              msys.av.EC_AV_PART_IS_CONTAINER – A container was
              passed to <code class="literal">msys.av.scan</code>.
            </p></li>
<li class="listitem"><p>
              msys.av.EC_AV_NAME_TOO_LONG –
              <code class="literal">av_engine_name</code> is longer than 40
              characters.
            </p></li>
<li class="listitem"><p>
              msys.av.EC_AV_NO_ENGINE – No AV engine is
              configured.
            </p></li>
<li class="listitem"><p>
              msys.av.EC_AV_NOT_SUITABLE_FOR_STREAMING – AV engine
              cannot scan the message that was passed in as a stream.
            </p></li>
<li class="listitem"><p>
              msys.av.EC_AV_ERROR – A runtime error occurred.
              Check the <span class="emphasis"><em>engine scan code</em></span>.
            </p></li>
<li class="listitem"><p>
              msys.av.EC_AV_CLEAN – Message was successfully
              passed to the engine, and it was not classified as
              infected (that is, the scan code was not
              RESULT_VIRUS_FOUND). msys.av.EC_AV_CLEAN can be returned
              if there is a runtime error.
            </p></li>
<li class="listitem"><p>
              msys.av.EC_AV_INFECTED – Message is classified as
              infected if the scan code is RESULT_VIRUS_FOUND. The
              corresponding threat name is returned in the
              <span class="emphasis"><em>informational string</em></span>.
            </p></li>
<li class="listitem"><p>
              msys.av.EC_AV_UNSCANNABLE – Message could not be
              scanned.
            </p></li>
</ul></div>
</li>
<li class="listitem"><p>
          An <span class="emphasis"><em>informational string</em></span>, which typically
          contains the virus name; the precise contents of this string
          depend on the engine.
        </p></li>
<li class="listitem"><p>
          The <span class="emphasis"><em>name of the AV engine</em></span> that detected
          the virus or <code class="literal">nil</code> if no virus was detected.
        </p></li>
<li class="listitem">
<p>
          The <span class="emphasis"><em>engine scan code</em></span> or
          <code class="literal">nil</code> if no engine scan code is available.
        </p>
<p>
          The prefix indicates the category the engine scan code belongs
          to: AVS_ (antivirus scanner), DEC_ (decomposer), LIC_
          (licence), or GEN_ (generic error). Multiple scan codes from
          one or more categories can occur, but only one code is
          returned. Which specific engine scan code is returned depends
          on the following two conditions:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
              If one or more codes in the AVS_ category occur, one of
              the AVS_ codes will be the one returned.
            </p></li>
<li class="listitem"><p>
              If no AVS_ codes occurred (that is, the engine scan codes
              are in the DEC_, LIC_ or GEN_ categories), the specific
              code that will be returned is undefined.
            </p></li>
</ul></div>
<p>
          The following engine scan codes can be returned:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
              AVS_RESULT_SCANNER_NOT_INITIALIZED – Scanner was not
              initialized.
            </p></li>
<li class="listitem"><p>
              AVS_RESULT_VIRUS_FOUND – A virus was found.
            </p></li>
<li class="listitem"><p>
              AVS_RESULT_INVALID_DEFAULT_FILE_EXTENSION – Default
              extension in the policy is invalid.
            </p></li>
<li class="listitem"><p>
              AVS_RESULT_SCANFILE_FAILURE – A scan error occurred.
            </p></li>
<li class="listitem"><p>
              AVS_RESULT_REINITIALIZATION_PROHIBITED – Attempted
              to re-initialize an already initialized scanner.
            </p></li>
<li class="listitem"><p>
              AVS_RESULT_DEFINITIONS_MISSING – Definitions are
              missing or unreadable.
            </p></li>
<li class="listitem"><p>
              AVS_RESULT_ENGINE_LOAD_FAILED – Engine failed to
              load for an unknown reason.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_SCANNER_NOT_INITIALIZED – Decomposer
              scanner is not initialized.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_POLICY_INVALID – Scan policy is invalid.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_MAXIMUM_DEPTH_REACHED – Maximum scan
              depth was reached.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_MAXIMUM_EXTRACT_TIME_EXCEEDED – Maximum
              extract time was reached.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_MAXIMUM_EXTRACT_SIZE_EXCEEDED – Maximum
              extract size was exceeded.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_MAXIMUM_CUMULATIVE_EXTRACT_SIZE_EXCEEDED
              – Maximum cumulative extract size was exceeded.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_MAXIMUM_FILES_EXTRACTED – Maximum file
              count was exceeded.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_ENCRYPTED_CONTAINER_DELETED – An
              encrypted container was deleted.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_ENCRYPTED_CONTAINER_DETECTED – An
              encrypted container was detected.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_MALFORMED_CONTAINER_DELETED – A malformed
              container was deleted.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_MALFORMED_CONTAINER_DETECTED – A
              malformed container was detected.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_PARTIAL_MESSAGE_DETECTED – A partial
              message was detected.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_OUTER_CONTAINER_IS_MIME – Outer container
              is MIME.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_MIME_PARSING_FAILED – Parsing of a MIME
              message failed.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_CONTAINER_EXTRACT_FAILED – Decomposer
              failed to extract the container.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_OPEN_CONTAINER_FAILED – Decomposer failed
              to open the container.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_CONTAINER_ACCESS_FAILED – Decomposer
              failed to access the container.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_UPDATE_CONTAINER_FAILED – The update of
              the container failed.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_CLOSE_CONTAINER_FAILED – Decomposer
              failed to close the container.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_FILE_EXTRACT_FAILED – Decomposer failed
              to extract a child file from a container.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_FILE_ACCESS_FAILED – Decomposer failed to
              access a child file.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_FILE_SPLIT_ACROSS_CONTAINERS – A child
              file is split across containers.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_TEMPFILE_ACCESS_FAILED – Decomposer
              failed to access a temporary file.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_PARAMETER_INVALID – A parameter passed to
              decomposer is invalid.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_OUT_OF_MEMORY – Scanner cannot allocate
              new memory.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_SCAN_ENGINE_EXCEPTION – An exception was
              caught by the decomposer.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_SCAN_FILE_DECOMPOSE_ERROR – A generic
              error occurred when the decomposer was scanning the file.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_INIT_DECOMPOSER_FAILED – Initialization
              of the decomposer failed.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_REINITIALIZATION_PROHIBITED – Decomposer
              has been initialized already.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_DEFINITION_DIR_UNSET – Directory for the
              decomposer is not initialized. This is typically due to a
              failure to call ILocalContentScanner::Initialize().
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_TEMP_DIR_ACCESS_FAILED – Decomposer
              failed to access the temporary directory.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_INVALID_FILE_MODIFICATION – A scanner
              modified a file or container which could not be modified.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_DEF_DIR_ACCESS_FAILED – Decomposer failed
              to access the definition directory.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_FILE_SIZE_TOO_LARGE – File is larger than
              the decomposer is capable of supporting. The maximum file
              size is 2 GB.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_CHILD_FILE_SIZE_UNKNOWN – Extracted file
              size is unknown.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_LESS_THAN_MINIMUM_EXTRACT_SIZE –
              Extracted file size is less than the minimum extract size.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_CONTAINER_UNKNOWN_ALGORITHM – An unknown
              container was detected by decomposer.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_BUFFER_SIZE_TOO_SMALL – ScanMemory was
              called with a bufferSize that is too small to hold the
              output file.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_CREATE_OUTPUT_FILE_FAILED – ScanFile was
              called with an output filename and the output file could
              not be created (for example, because the file already
              exists, is read-only, a directory in the path does not
              exist, etc.)
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_ENCRYPTED_CONTAINER_CHILD_DETECTED – A
              container child is encrypted.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_ABORTED_AFTER_FIRST_THREAT –
              Decomposition of the file was halted after the first
              infected file was found in the parent container.
            </p></li>
<li class="listitem"><p>
              DEC_RESULT_FAILED_INSERTING_NOTIFICATION_IN_EMPTY_BODY_MIME
              – Failed to insert notification message inside an
              email because the e-mail had no message body.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_SCANNER_NOT_INITIALIZED – Scanner was not
              initialized prior to the first attempted use.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_REINITIALIZATION_PROHIBITED – Scanner has
              previously been initialized.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_PARAMETER_INVALID – A parameter is
              invalid.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_POLICY_INVALID – Scan policy is invalid.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_OUT_OF_MEMORY – Scanner cannot allocate
              new memory.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_LOAD_MESSAGE_CATALOG_FAILED – Failed to
              load the message catalog.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_UNEXPECTED_EXCEPTION_CAUGHT – An
              unexpected exception occurred.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_EMPTY_POLICY – Policy was empty or no
              scanners were enabled.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_DEFINITION_DIR_UNSET – Definition
              directory does not exist.
            </p></li>
<li class="listitem"><p>
              GEN_RESULT_AVSCANNER_IN_SCANNINGORDER_NOT_INITIALIZED
              – Scanner was set in the scanning order policy but
              was not initialized.
            </p></li>
<li class="listitem"><p>
              LIC_RESULT_POLICY_INVALID – There are no licensed
              features registered.
            </p></li>
<li class="listitem"><p>
              LIC_RESULT_LICENSE_NOT_INSTALLED – A license manager
              cannot be created or a memory error occurred while
              accessing the license library API.
            </p></li>
<li class="listitem"><p>
              LIC_RESULT_NO_LICENSE_MANAGER – A license manager
              cannot be created. A license manager is required to access
              the license library API.
            </p></li>
<li class="listitem"><p>
              LIC_RESULT_INVALID_AV_SCANNER_LICENSE – The license
              for the AV scanner feature cannot be created.
            </p></li>
<li class="listitem"><p>
              LIC_RESULT_INVALID_DECOMPOSER_SCANNER_LICENSE – The
              license for the decomposer scanner feature cannot be
              created.
            </p></li>
<li class="listitem"><p>
              LIC_RESULT_INVALID_ANTISPAM_UPDATES_LICENSE – The
              license for the antispam content scanner cannot be
              created.
            </p></li>
<li class="listitem"><p>
              LIC_RESULT_INVALID_AV_UPDATES_LICENSE – The license
              for the AV content feature cannot be created.
            </p></li>
</ul></div>
</li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp20925104"></a>71.23.4. Console Commands</h3></div></div></div>
<p>
      The current anti-virus signature version can be found using the
      following <code class="literal">ec_console</code> command:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          antivirus:<em class="replaceable"><code>antivirus1</code></em> version
        </span></dt>
<dd>
<p>
            The following is a sample output, where
            <em class="replaceable"><code>antivirus1</code></em> is the instance name
            for the antivirus module. The line "AV definitions version"
            gives the signature version.
          </p>
<pre class="screen">
12:15:22 /tmp/2025&gt; antivirus:antivirus1 version
antivirus: symantec DEC scanner version number: 5.2.3.6
AV scanner version number: 9.1.3.30
AV definitions version: 20150215.001
Up to date
</pre>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp20931344"></a>71.23.5. Symantec LiveUpdate</h3></div></div></div>
<p>
      Updates are pulled down using Symantec LiveUpdate, which is a Java
      program installed as part of the msys-csapi package. LiveUpdate is
      invoked periodically by the CSAPI library (used by the
      <code class="literal">ec_avscan</code> daemon). The option
      <code class="literal">update_interval</code> controls how often LiveUpdate
      is run.
    </p>
<p>
      LiveUpdate will download the updates, unpack them, and move them
      into an "incoming" directory. That directory is then picked up by
      the <code class="literal">ec_avscan</code> daemon.
      <code class="literal">ec_avscan/CSAPI</code> will then examine the updates
      and apply them.
    </p>
<p>
      LiveUpdate will log its progress to
      <code class="filename">/opt/Symantec/LiveUpdate/liveupdt.log</code>.
      Monitor this log to see if updates are being downloaded
      successfully. If no new logs are appearing in that file, there is
      some issue with <code class="literal">ec_avscan</code> that is preventing it
      from running LiveUpdate.
    </p>
<p>
      LiveUpdate will download updates and unpack them under
      <code class="filename">/tmp</code>. Note that <code class="filename">/tmp</code>
      must have at least 3 GB of free space. Otherwise, LiveUpdate will
      fail and not be able to download and apply new updates.
      <code class="filename">/opt/Symantec/LiveUpdate/liveupdt.log</code> will
      contain an error when there is not enough disk space to download
      and unpack the updates.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.conntrol.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.custom_bounce_logger.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.22. conntrol – Fine-Grained Connection Control </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.24. custom_bounce_logger – Custom Bounce Logging</td>
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
