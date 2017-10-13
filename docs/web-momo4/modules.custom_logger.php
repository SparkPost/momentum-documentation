<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.25. custom_logger – User-defined Logging</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.custom_bounce_logger.php" title="71.24. custom_bounce_logger – Custom Bounce Logging">
<link rel="next" href="modules.delay_dsn.php" title="71.26. delay_dsn – Delay DSN Generation">
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
<tr><th colspan="3" align="center">71.25. custom_logger – User-defined Logging</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.custom_bounce_logger.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.delay_dsn.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.custom_logger"></a>71.25. custom_logger – User-defined Logging</h2></div></div></div>
<a class="indexterm" name="idp20960112"></a><p>
    Using the custom_logger module, Momentum can write logs for every
    stage of a message's life cycle in user-defined formats and
    including user-defined data. You can log each stage to its own
    logfile or use a combined logfile for all stages. Logging of the
    various stages can be enabled or disabled individually. The
    custom_logger module provides completely configurable logging
    similar to Apache's mod_log_config module.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.custom_logger.configuration"></a>71.25.1. Configuration</h3></div></div></div>
<p>
      The custom_logger module is configured through the
      <code class="filename">ecelerity.conf</code> file using a stanza such as
      the following:
    </p>
<div class="example">
<a name="modules.custom_logger.example"></a><p class="title"><b>Example 71.40. custom_logger Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
custom_logger "custom_logger1"
{
  delivery_logfile = "/var/log/ecelerity/delivery_log"
  delivery_format = "%t %r@%R"
}</pre></div>
</div>
<br class="example-break"><p>
      In this example, the <code class="option">delivery_logfile</code> option
      specifies the log file for the delivery stage, and only deliveries
      will be logged to this path. The <code class="option">delivery_format</code>
      option specifies the fields that will be captured in the log. A
      complete list of format specifiers is given in
      <a class="xref" href="modules.custom_logger.php#modules.custom_logger.formats" title="71.25.8. Log Format Specifiers">Section 71.25.8, “Log Format Specifiers”</a>. You can also use
      literals in the format string simply by adding a field that is not
      preceded by a ‘<code class="literal">%</code>’. For an example,
      see the <code class="literal">@R@</code> field shown in
      <a class="xref" href="modules.custom_logger.php#modules.custom_logger.namespace.example" title="Example 71.41. namespace example">Example 71.41, “<code class="option">namespace</code> example”</a>.
      Don't confuse this with the <code class="literal">@%R@</code> field which is
      the macro for the domain of the envelope RCPT TO.
    </p>
<p>
      Use the following directives to specify a log file for a specific
      stage. Multiple stages may be specified in the configuration
      stanza, but a given stage can only be specified once.
    </p>
<pre class="programlisting">
reception_logfile = "/path/to/logfile"
transient_failure_logfile = "/path/to/logfile"
permanent_failure_logfile = "/path/to/logfile"
xfer_logfile = "/path/to/logfile"
rejection_logfile = "/path/to/logfile"
</pre>
<p>
      Use the following directives to specify format strings for the
      reception, transfer, transient failure, and permanent failure
      stages:
    </p>
<pre class="programlisting">
reception_format = "format_string"
xfer_format = "format_string"
transient_failure_format = "format_string"
permanent_failure_format = "format_string"
rejection_format = "format_string"
</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If a format is specified, logging for that stage is implicitly
        toggled on.
      </p>
</div>
<p>
      Use the following directives to turn logging on or off for a
      specific stage:
    </p>
<pre class="programlisting">
log_deliveries = off
log_receptions = off
log_permanent_failures = off
log_transient_failures = off
log_errors = off
log_rejections = off
</pre>
<p>
      By default, logging is turned off. Set these options on by
      assigning the value ‘<code class="literal">on</code>’. If you
      use any of the above options (excepting
      <code class="option">log_errors</code>), be sure to also specify a format
      string; logging for the specified stage will fail if you do not
      specify a format. The <code class="option">log_errors</code> option logs
      errors to the <code class="filename">paniclog</code>, which is unstructured
      text, so there is no corresponding format option.
    </p>
<p>
      The following are other log files that can be created with their
      default values:
    </p>
<pre class="programlisting">
mainlog = "/var/log/ecelerity/mainlog.cl"
paniclog = "/var/log/ecelerity/paniclog.cl"
</pre>
<p>
      The <code class="filename">mainlog</code> specifies a single log file
      location for consolidation of all logged stages and
      <code class="filename">paniclog</code> defines the location where error
      notifications are written.
    </p>
<p>
      Use the following directive to control the permissions of the
      various log files:
    </p>
<pre class="programlisting">
mainlog_mode = 0644
paniclog_mode = 0644
delivery_log_mode = 0644
reception_log_mode = 0644
permanent_failure_log_mode = 0644
transient_failure_log_mode = 0644
xfer_log_mode = 0644
rejection_log_mode = 0644
</pre>
<p>
      By default, the permissions are set to <code class="literal">0644</code>. Be
      sure to assign octal numbers to these options.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.custom_logger.options"></a>71.25.2. Configuration Options</h3></div></div></div>
<p>
      The following are configuration options valid in the custom_logger
      scope:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          concurrency
        </span></dt>
<dd>
<p>
            Sets the size of the logger thread pool. Default value is
            <code class="literal">1</code>.
          </p>
<p>
            This option is available because it is possible that a
            single logging thread may not be able to keep up with all
            the logging IO. Since the logger holds a reference to the
            message until logging is done, messages stay in the spool
            until the logger is done with them; if the logger is not
            keeping up, there will be more messages in the spool than
            are in the active and delayed queue. (Taking account of the
            fact that some other modules, as well as the process of
            spooling in messages at startup, can also cause the number
            of messages in the system to be more than the active plus
            the delayed queue.) Increasing concurrency can help the
            logger keep up, preventing a backlog of messages from
            building up in the spool.
          </p>
<p>
            To change the <code class="option">concurrency</code> option at runtime
            use the console, issuing the command <strong class="userinput"><code>config set
            custom_logger <em class="replaceable"><code>custom_logger1</code></em>
            concurrency
            <em class="replaceable"><code>new_value</code></em></code></strong>.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              Not all IO wrappers are thread-safe so before adjusting
              this option check with support.
            </p>
</div>
</dd>
<dt><span class="term">
          delivery_format
        </span></dt>
<dd>
<p>
            Specifies the fields that will be captured in the log. There
            is no default value for this option.
          </p>
<p>
            A complete list of format specifiers is given in
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.formats" title="71.25.8. Log Format Specifiers">Section 71.25.8, “Log Format Specifiers”</a>.
            You can also use literals in the format string simply by
            adding a field that is not preceded by a
            ‘<code class="literal">%</code>’.
          </p>
</dd>
<dt><span class="term">
          delivery_log_mode
        </span></dt>
<dd><p>
            File mode of the delivery log specified in octal format.
            Default value is <code class="literal">0644</code>.
          </p></dd>
<dt><span class="term">
          delivery_logfile
        </span></dt>
<dd><p>
            Specifies the log file for the delivery stage and only
            deliveries will be logged to this path. There is no default
            value for this option.
          </p></dd>
<dt><span class="term">
          log_deliveries
        </span></dt>
<dd>
<p>
            Whether or not to log deliveries. Default value is
            <code class="literal">false</code>.
          </p>
<p>
            Set this option on by assigning the value
            <code class="literal">on</code>. If you set this option
            <code class="literal">on</code>, be sure to also specify a format
            string; logging for this stage will fail if you do not
            specify a format.
          </p>
</dd>
<dt><span class="term">
          log_errors
        </span></dt>
<dd>
<p>
            Whether or not to log errors. Default value is
            <code class="literal">false</code>.
          </p>
<p>
            The <code class="option">log_errors</code> option logs errors to the
            paniclog, which is unstructured text, so there is no
            corresponding format option.
          </p>
</dd>
<dt><span class="term">
          log_permanent_failures
        </span></dt>
<dd>
<p>
            Whether or not to log permanent failures. Default value is
            <code class="literal">false</code>.
          </p>
<p>
            Set this option on by assigning the value
            <code class="literal">on</code>. If you set this option
            <code class="literal">on</code> be sure to also specify a format
            string; logging for this stage will fail if you do not
            specify a format.
          </p>
</dd>
<dt><span class="term">
          log_receptions
        </span></dt>
<dd>
<p>
            Whether or not to log receptions. Default value is
            <code class="literal">false</code>.
          </p>
<p>
            Set this option on by assigning the value
            <code class="literal">on</code>. If you set this option
            <code class="literal">on</code>, be sure to also specify a format
            string; logging for this stage will fail if you do not
            specify a format.
          </p>
</dd>
<dt><span class="term">
          log_rejections
        </span></dt>
<dd>
<p>
            Whether or not to log rejections. Default value for this
            option is <code class="literal">false</code>.
          </p>
<p>
            Set this option on by assigning the value
            <code class="literal">on</code>. If you set this option
            <code class="literal">on</code>, be sure to also specify a format
            string; logging for this stage will fail if you do not
            specify a format.
          </p>
</dd>
<dt><span class="term">
          log_transient_failures
        </span></dt>
<dd>
<p>
            Whether or not to log transient failures. Default value is
            <code class="literal">false</code>.
          </p>
<p>
            Set this option on by assigning the value
            <code class="literal">on</code>. If you set this option
            <code class="literal">on</code> be sure to also specify a format
            string; logging for this stage will fail if you do not
            specify a format.
          </p>
</dd>
<dt><span class="term">
          mainlog
        </span></dt>
<dd><p>
            The <code class="option">mainlog</code> option specifies the main log
            file. There is no default value for this option.
          </p></dd>
<dt><span class="term">
          mainlog_mode
        </span></dt>
<dd><p>
            File mode specified in octal format. Default value is
            <code class="literal">0644</code>.
          </p></dd>
<dt><span class="term">
          namespace
        </span></dt>
<dd><p>
            Use this option to specify which macro namespaces should be
            searched when expanding the custom_logger format strings.
            This variable is set using commas to separate different
            namespaces. For more information see
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.namespace" title="71.25.6. The namespace Option">Section 71.25.6, “The <code class="option">namespace</code> Option”</a>.


          </p></dd>
<dt><span class="term">
          paniclog
        </span></dt>
<dd><p>
            The <code class="option">paniclog</code> option specifies the location
            where error notifications are written. There is no default
            value for this option.
          </p></dd>
<dt><span class="term">
          paniclog_mode
        </span></dt>
<dd><p>
            File mode specified in octal format. Default value is
            <code class="literal">0644</code>.
          </p></dd>
<dt><span class="term">
          permanent_failure_format
        </span></dt>
<dd>
<p>
            Specifies the fields that will be captured in the log. There
            is no default value for this option.
          </p>
<p>
            A complete list of format specifiers is given in
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.formats" title="71.25.8. Log Format Specifiers">Section 71.25.8, “Log Format Specifiers”</a>.
            You can also use literals in the format string simply by
            adding a field that is not preceded by a
            ‘<code class="literal">%</code>’.
          </p>
</dd>
<dt><span class="term">
          permanent_failure_log_mode
        </span></dt>
<dd><p>
            File mode specified in octal format. Default value is
            <code class="literal">0644</code>.
          </p></dd>
<dt><span class="term">
          permanent_failure_logfile
        </span></dt>
<dd><p>
            Specifies the log file for permanent failures. There is no
            default value for this option.
          </p></dd>
<dt><span class="term">
          reception_format
        </span></dt>
<dd>
<p>
            Specifies the fields that will be captured in the log.There
            is no default value for this option.
          </p>
<p>
            A complete list of format specifiers is given in
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.formats" title="71.25.8. Log Format Specifiers">Section 71.25.8, “Log Format Specifiers”</a>.
            You can also use literals in the format string simply by
            adding a field that is not preceded by a
            ‘<code class="literal">%</code>’.
          </p>
</dd>
<dt><span class="term">
          reception_log_mode
        </span></dt>
<dd><p>
            File mode specified in octal format. Default value is
            <code class="literal">0644</code>.
          </p></dd>
<dt><span class="term">
          reception_logfile
        </span></dt>
<dd><p>
            Specifies the log file for receptions. There is no default
            value for this option.
          </p></dd>
<dt><span class="term">
          rejection_format
        </span></dt>
<dd>
<p>
            Specifies the fields that will be captured in the log. There
            is no default value for this option.
          </p>
<p>
            A complete list of format specifiers is given in
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.formats" title="71.25.8. Log Format Specifiers">Section 71.25.8, “Log Format Specifiers”</a>.
            You can also use literals in the format string simply by
            adding a field that is not preceded by a
            ‘<code class="literal">%</code>’.
          </p>
</dd>
<dt><span class="term">
          rejection_logfile
        </span></dt>
<dd><p>
            Specifies the log file for rejections. There is no default
            value for this option.
          </p></dd>
<dt><span class="term">
          rejection_log_mode
        </span></dt>
<dd><p>
            File mode specified in octal format. Default value is
            <code class="literal">0644</code>.
          </p></dd>
<dt><span class="term">
          sanitize
        </span></dt>
<dd><p>
            Define how user-supplied data is sanitized. For more
            information see
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.sanitize" title="71.25.7. The sanitize Option">Section 71.25.7, “The <code class="option">sanitize</code> Option”</a>.
          </p></dd>
<dt><span class="term">
          thread_pool
        </span></dt>
<dd><p>
            Default threadpool for the custom_logger. For more
            information see
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.thread_pool" title="71.25.5. The thread_pool Option">Section 71.25.5, “The <code class="option">thread_pool</code> Option”</a>.
          </p></dd>
<dt><span class="term">
          transient_failure_format
        </span></dt>
<dd>
<p>
            Specifies the fields that will be captured in the log. There
            is no default value for this option.
          </p>
<p>
            A complete list of format specifiers is given in
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.formats" title="71.25.8. Log Format Specifiers">Section 71.25.8, “Log Format Specifiers”</a>.
            You can also use literals in the format string simply by
            adding a field that is not preceded by a
            ‘<code class="literal">%</code>’.
          </p>
</dd>
<dt><span class="term">
          transient_failure_log_mode
        </span></dt>
<dd><p>
            File mode specified in octal format. Default value is
            <code class="literal">0644</code>.
          </p></dd>
<dt><span class="term">
          transient_failure_logfile
        </span></dt>
<dd><p>
            Specifies the log file for transient failures. There is no
            default value for this option.
          </p></dd>
<dt><span class="term">
          xfer_format
        </span></dt>
<dd>
<p>
            Specifies the fields that will be captured in the log. There
            is no default value for this option.
          </p>
<p>
            A complete list of format specifiers is given in
            <a class="xref" href="modules.custom_logger.php#modules.custom_logger.formats" title="71.25.8. Log Format Specifiers">Section 71.25.8, “Log Format Specifiers”</a>.
            You can also use literals in the format string simply by
            adding a field that is not preceded by a
            ‘<code class="literal">%</code>’.
          </p>
</dd>
<dt><span class="term">
          xfer_log_mode
        </span></dt>
<dd><p>
            File mode specified in octal format. Default value is
            <code class="literal">0644</code>.
          </p></dd>
<dt><span class="term">
          xfer_logfile
        </span></dt>
<dd><p>
            Specifies the log file for transfers between nodes. There is
            no default value for this option.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.custom_logger.reject.log"></a>71.25.3. custom_logger and the Rejection Log</h3></div></div></div>
<p>
      The custom logger gets most of its information from the message
      object. The message object is not created until the MAILFROM
      stage. If rejection occurs during the preceding phases (accept,
      connect, or ehlo), the only information that is available to the
      rejection log the following:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          Remote IP address
        </p></li>
<li class="listitem"><p>
          Rejection code
        </p></li>
<li class="listitem"><p>
          Timestamp
        </p></li>
</ul></div>
<p>
      For example, suppose you have the following custom_logger
      configuration:
    </p>
<pre class="programlisting">
custom_logger "custom_logger1" {
    rejection_format = "%p @ %s @ %BI @ %A @ %U @ %n @ %h{Subject} @ %r »
@ %R @ %m @ %M @ %i @ %t @ %t{%Y-%m-%d} @ %H @ %mx @ %S"
  rejection_logfile = "/var/log/ecelerity/my_reject.log"
}</pre>
<p>
      If a message is rejected during the connect phase, the rejection
      log entry will resemble the following entry:
    </p>
<pre class="programlisting">
unknown @  @ 00/00-00000-00000000 @  @  @ relaying denied @  @  @  @
@  @ 00/00-00000-00000000 @ 1339007869 @ 2012-06-06 @ 10.79.11.157 @  @
22
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.custom_logger.transient_failure"></a>71.25.4. custom_logger and Transient Failures</h3></div></div></div>
<p>
      If you have a custom logger that reacts to transient failures and
      examines messages, you may experience poor performance, excessive
      memory utilization, and potentially a watchdog timeout if a large
      batch of messages is transiently failed at the same time.
    </p>
<p>
      To manage such situations, set
      <code class="option">inline_transfail_processing</code> to
      <code class="literal">false</code> and adjust the values of
      <code class="option">transfail_drain_rate</code> and
      <code class="option">max_resident_transfails</code>. For more information,
      see <a class="xref" href="conf.ref.inline_transfail_processing.php" title="inline_transfail_processing"><span class="refentrytitle">inline_transfail_processing</span></a>.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        In circumstances where you are logging headers, use the
        <code class="literal">%vctx_mess{v}</code> macro rather than the
        <code class="literal">%h{X}</code> macro, otherwise there may be a
        significant degradation in performance.
      </p>
<p>
        From Lua use the <code class="function">msg:header</code> and the
        <a class="xref" href="lua.ref.msg_context_set.php" title="msg:context_set"><span class="refentrytitle">msg:context_set</span></a> functions.
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.custom_logger.thread_pool"></a>71.25.5. The <code class="option">thread_pool</code> Option</h3></div></div></div>
<p>
      The default threadpool for the custom_logger deploys with a
      default <code class="option">backlog</code> of <code class="literal">1024</code>. In
      some circumstances, this default may be inadequate. To remedy
      this, define a threadpool for the custom logger and associate it
      with the custom_logger module using the
      <code class="option">thread_pool</code> option. The following is an example:
    </p>
<pre class="programlisting">
threadpool "custom_logger1_pool" {
  concurrency = 1
  backlog = 1024
}
custom_logger "custom_logger1" {
  ...
  thread_pool = "custom_logger1_pool"
}
</pre>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        It is possible to define a custom thread pool that uses
        different parameters than the one the custom_logger creates for
        itself by default. The most common parameter to change is the
        <code class="option">backlog</code> option that controls how many
        custom_logger jobs may be queued up at a time. While raising
        this parameter from its default of 1024 may be appropriate in
        certain circumstances, <span class="emphasis"><em>it should always be done under
        guidance from the Message Systems support team</em></span>.
        Specifically, raising this value means that you should also pay
        attention to both the
        <code class="option">server_max_file_descriptors</code> setting, as well as
        the corresponding operating-system level maximum open file
        descriptors limit.
      </p>
</div>
<p>
      For more information about the threadpool scope, see
      <a class="xref" href="conf.ref.threadpool.php" title="threadpool"><span class="refentrytitle">threadpool</span></a>.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        After setting the <code class="option">thread_pool</code> option, you must
        restart the ecelerity process. Issuing the ec_console command
        <strong class="userinput"><code>config reload</code></strong> will not suffice.
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.custom_logger.namespace"></a>71.25.6. The <code class="option">namespace</code> Option</h3></div></div></div>
<p>
      Use this option to specify which macro namespaces should be
      searched, when expanding the custom_logger format strings. This
      variable is set using commas to separate different namespaces.
    </p>
<div class="example">
<a name="modules.custom_logger.namespace.example"></a><p class="title"><b>Example 71.41. <code class="option">namespace</code> example</b></p>
<div class="example-contents"><pre class="programlisting">
namespace = "custom_logger,sieve,mymacros"
mainlog = "/var/log/ecelerity/customlog.ec"
reception_format = "%t@%i@R@%r@%R@%m@%M@%H@%B@%p@%g@%b@%mydate"
...
</pre></div>
</div>
<br class="example-break"><p>
      The default value for <code class="option">namespace</code> is
      <code class="literal">custom_logger,sieve</code>. The preceding example adds
      a namespace called <code class="literal">mymacros</code> in order to
      reference the macro <code class="literal">mydate</code> in the reception
      format string. The <code class="option">mainlog</code> option can be any
      arbitrary name that you choose.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.custom_logger.sanitize"></a>71.25.7. The <code class="option">sanitize</code> Option</h3></div></div></div>
<p>
      User-supplied data coming into the logger can be sanitized of
      newlines, special characters and such. The
      <code class="option">sanitize</code> option has the three following
      parameters, which can be combined arbitrarily:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          special_characters
        </span></dt>
<dd><p>
            Perform standard control character escaping.
          </p></dd>
<dt><span class="term">
          non_printable
        </span></dt>
<dd><p>
            Replace all non-printable characters with their ASCII
            decimal code equivalent.
          </p></dd>
<dt><span class="term">
          tr/.../.../
        </span></dt>
<dd><p>
            Perform tr() style character mapping on the data.
          </p></dd>
</dl></div>
<p>
      For example, the following line will replace all standard control
      characters with their escaped equivalents, and additionally
      convert spaces to underscores:
    </p>
<pre class="programlisting">
  sanitize = "special_characters,tr/ /_/"
]</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.custom_logger.formats"></a>71.25.8. Log Format Specifiers</h3></div></div></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        Do not use any of the following characters as delimiters:
        <code class="literal">a-z or A-Z, two or more ':' or '_'</code>
      </p>
</div>
<p>
      The following list shows the specifiers that can be used as format
      strings. <span class="emphasis"><em>Note</em></span>: Some specifiers only make
      sense used at specific stages.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          Format
        </span></dt>
<dd><p>
            Meaning
          </p></dd>
<dt><span class="term">
          %A
        </span></dt>
<dd><p>
            Authentication method
          </p></dd>
<dt><span class="term">
          %b
        </span></dt>
<dd><p>
            Name of the MultiVIP© binding to which the message is
            assigned
          </p></dd>
<dt><span class="term">
          %B
        </span></dt>
<dd><p>
            Size of the message in bytes (including headers)
          </p></dd>
<dt><span class="term">
          %BI
        </span></dt>
<dd><p>
            Batch ID
          </p></dd>
<dt><span class="term">
          %c
        </span></dt>
<dd><p>
            Heuristic classification of the message from the DSN
            received from the remote MTA (only makes sense for failures)
          </p></dd>
<dt><span class="term">
          %C
        </span></dt>
<dd><p>
            Number of the heuristic classification of the message from
            the DSN received from the remote MTA (only makes sense for
            failures)
          </p></dd>
<dt><span class="term">
          %CI
        </span></dt>
<dd><p>
            Connection ID
          </p></dd>
<dt><span class="term">
          %d
        </span></dt>
<dd>
<p>
            Routing domain is the domain name that the message is queued
            against. Normally this is a real domain name but when you
            assign a Gateway for a domain, the Gateway becomes the
            routing domain. For example:

</p>
<pre class="programlisting">
domain sub.test.example.com {
  gateway = "sinkhole.example.com"
}
</pre>
<p>

            This leads to mail being queued against
            sinkhole.example.com.
          </p>
</dd>
<dt><span class="term">
          %g
        </span></dt>
<dd><p>
            Name of the MultiVIP© binding group to which the message is
            assigned
          </p></dd>
<dt><span class="term">
          %H
        </span></dt>
<dd><p>
            IP address of the remote host
          </p></dd>
<dt><span class="term">
          %h{X}
        </span></dt>
<dd>
<p>
            Value of header 'X', if it exists. If multiple headers
            match, the first and only the first will be used. The text
            in here is escaped as determined by the
            <code class="option">sanitize</code> setting. For example, to obtain
            the value of the "Return-Path" header, specify
            <code class="literal">%h{Return-Path}</code>
          </p>
<p>
            You may be able to improve performance by using the
            <code class="literal">%vctx_mess{v}</code> macro rather than this
            macro. To do this, use a script in the each_rcpt phase to
            extract the header value you wish to log, and copy it into
            the validation context.
          </p>
</dd>
<dt><span class="term">
          %i
        </span></dt>
<dd><p>
            Message-id of the message
          </p></dd>
<dt><span class="term">
          %m
        </span></dt>
<dd><p>
            Local-part of the envelope MAIL FROM:
          </p></dd>
<dt><span class="term">
          %M
        </span></dt>
<dd><p>
            Domain of the envelope MAIL FROM:
          </p></dd>
<dt><span class="term">
          %n
        </span></dt>
<dd><p>
            The text of the DSN returned by the remote server at any
            phase—delivery, transient failure or permanent
            failure. The text in here is escaped as determined by the
            sanitize setting.
          </p></dd>
<dt><span class="term">
          %N
        </span></dt>
<dd><p>
            Number of times the message has been tried
          </p></dd>
<dt><span class="term">
          %P
        </span></dt>
<dd><p>
            Pathway to which the message was assigned
          </p></dd>
<dt><span class="term">
          %p
        </span></dt>
<dd><p>
            Protocol that the message was received via (esmtp, rest, or
            ecstream)
          </p></dd>
<dt><span class="term">
          %PG
        </span></dt>
<dd><p>
            Pathway group to which the message was assigned
          </p></dd>
<dt><span class="term">
          %r
        </span></dt>
<dd><p>
            Local-part of the envelope RCPT TO:
          </p></dd>
<dt><span class="term">
          %R
        </span></dt>
<dd><p>
            Domain of the envelope RCPT TO:
          </p></dd>
<dt><span class="term">
          %s
        </span></dt>
<dd>
<p>
            String description of the delivery stage of the message
            (only meaningful for failures)
          </p>
<p>
            For a list of the different connection phases see
            <a class="xref" href="log_formats.connection.stages.php" title="35.11. Connection Stages">Section 35.11, “Connection Stages”</a>.
          </p>
</dd>
<dt><span class="term">
          %S
        </span></dt>
<dd>
<p>
            Numeric indicator of the stage of the message
          </p>
<p>
            For a list of the different connection phases see
            <a class="xref" href="log_formats.connection.stages.php" title="35.11. Connection Stages">Section 35.11, “Connection Stages”</a>.
          </p>
</dd>
<dt><span class="term">
          %t
        </span></dt>
<dd><p>
            Current time, as a Unix timestamp
          </p></dd>
<dt><span class="term">
          %t{fmt}
        </span></dt>
<dd><p>
            Current time, displayed in the strftime format 'fmt'
          </p></dd>
<dt><span class="term">
          %T
        </span></dt>
<dd>
<p>
            Amount of time the message has spent enqueued on the system
          </p>
<p>
            Defaults to two decimal places.
          </p>
</dd>
<dt><span class="term">
          %T{N}
        </span></dt>
<dd><p>
            Time the message spent in the message queue where
            ‘<code class="literal">N</code>’ indicates the desired
            number of decimal places
          </p></dd>
<dt><span class="term">
          %U
        </span></dt>
<dd><p>
            Authenticated user
          </p></dd>
<dt><span class="term">
          %us{<code class="literal"><em class="replaceable"><code>N</code></em></code>}
        </span></dt>
<dd>
<p>
            Record the timestamp to
            <code class="literal"><em class="replaceable"><code>N</code></em></code> decimal
            places, where
            <code class="literal"><em class="replaceable"><code>N</code></em></code> is:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                1 - deciseconds (1/10th of a second)
              </p></li>
<li class="listitem"><p>
                2 - centiseconds (1/100th of a second)
              </p></li>
<li class="listitem"><p>
                3 - milliseconds (1/1000th of a second)
              </p></li>
<li class="listitem"><p>
                4 - 1/10,000th of a second
              </p></li>
<li class="listitem"><p>
                5 - 1/100,000th of a second
              </p></li>
<li class="listitem"><p>
                6 - microseconds (1/1,000,000th of a second)
              </p></li>
</ul></div>
</dd>
<dt><span class="term">
          %vctx_conn{key}
        </span></dt>
<dd><p>
            Value of entry "key" in the connection context dictionary
          </p></dd>
<dt><span class="term">
          %vctx_mess{key}
        </span></dt>
<dd><p>
            Value of entry "key" in the message context dictionary
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.customm_logger.cluster"></a>71.25.9. Configuration of Aggregated Cluster Node Logging</h3></div></div></div>
<p>
      It is possible to aggregate logs in a cluster configuration. For
      an sample configuration, see
      <a class="xref" href="cluster.config.logging.centalized.logging.php" title="26.2. Centralized Logging Example">Section 26.2, “Centralized Logging Example”</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.custom_bounce_logger.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.delay_dsn.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.24. custom_bounce_logger – Custom Bounce Logging </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.26. delay_dsn – Delay DSN Generation</td>
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
