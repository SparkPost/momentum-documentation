<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ec_log_trace</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="executable, command line, command, ec_log_trace">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="exec.cmds.ref.php" title="Chapter 74. Executable Commands Reference">
<link rel="prev" href="executable.ec_lic.php" title="ec_lic">
<link rel="next" href="executable.ec_md5passwd.php" title="ec_md5passwd">
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
<tr><th colspan="3" align="center">ec_log_trace</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="executable.ec_lic.php">Prev</a> </td>
<th width="60%" align="center">Chapter 74. Executable Commands Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="executable.ec_md5passwd.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="executable.ec_log_trace"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>ec_log_trace — parse Momentum log files</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        -
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --binding=<em class="replaceable"><code>name</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --binding-regex=<em class="replaceable"><code>regex</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --count
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --date
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --dst-ip=<em class="replaceable"><code>IP</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --end=<em class="replaceable"><code>date</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --from=<em class="replaceable"><code>email_address</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --from-domain=<em class="replaceable"><code>domain</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --from-domain-regex=regex
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --from-regex=<em class="replaceable"><code>regex</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        -h or --help
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --id=<em class="replaceable"><code>message_id</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --in or --reception
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        <em class="replaceable"><code>logfile(s)</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --main
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --out or --delivery
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --output=<em class="replaceable"><code>file</code></em> 
         [
          --append
        ]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --perm or --permanent
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --regex
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --to=<em class="replaceable"><code>email_address</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --to-domain=<em class="replaceable"><code>domain</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --to-domain-regex=regex
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --to-regex=regex
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --tran or --transient
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --src-ip=<em class="replaceable"><code>IP</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --src-ip-regex=<em class="replaceable"><code>regex</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --start=<em class="replaceable"><code>date</code></em>
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        -v or --verbose
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --vctx-conn=key[=<code class="option">value</code>]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --vctx-conn-regex=key[=<code class="option">value</code>]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --vctx-mess=key[=<code class="option">value</code>]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --vctx-mess-regex=key[=<code class="option">value</code>]
      ]</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_log_trace</code>  [
        --xml
      ]</p></div>
</div>
<div class="refsection">
<a name="idp11179024"></a><h2>Description</h2>
<p>
      <span class="command"><strong>ec_log_trace</strong></span> parses Momentum log files and
      prints out the contents in human-readable format. It can also find
      log lines matching certain requirements. Log files can be any
      number and combination of eclogger-formatted files, uncompressed
      or bzipped, supplied as command line arguments. If no log file is
      specified, the <code class="filename">mainlog.ec</code> and
      <code class="filename">rejectlog.ec</code> files at the default location
      are processed along with the rotated mainlog and rejectlog files.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        You <span class="bold"><strong>must</strong></span>
        specify the log file files that you wish to process.


      </p>
</div>
<p>
      Options <code class="option">--date</code>, <code class="option">--xml</code>,
      <code class="option">-v</code>, <code class="option">-</code>, <code class="option">--output</code>
      and <code class="option">--append</code> can be used when parsing
      <code class="filename">rejectlog.ec</code> and its rotated files. Other
      options are currently only for <code class="filename">mainlog.ec</code> and
      its rotated files.
    </p>
<p>
      Usage of the options:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          -
        </span></dt>
<dd><p>
            Use <code class="literal">STDIN</code> as input for parsing.
          </p></dd>
<dt><span class="term">
          --binding=<em class="replaceable"><code>name</code></em>
        </span></dt>
<dd><p>
            Show main log records for deliveries, transient and
            permanent failures via the specified binding.
          </p></dd>
<dt><span class="term">
          --binding-regex=<em class="replaceable"><code>name</code></em>
        </span></dt>
<dd><p>
            Show main log records for deliveries, transient and
            permanent failures via the regex binding.
          </p></dd>
<dt><span class="term">
          --count
        </span></dt>
<dd><p>
            Show only the number of log records satisfying specified
            options.
          </p></dd>
<dt><span class="term">
          --date
        </span></dt>
<dd><p>
            Print date and time instead of epoch seconds in the log. For
            example <code class="literal">1268402398</code> becomes <code class="literal">Fri
            Mar 12 08:59:58 2010</code>.
          </p></dd>
<dt><span class="term">
          --dst-ip=<em class="replaceable"><code>IP</code></em>
        </span></dt>
<dd><p>
            Show log records with specified destination IP address.
          </p></dd>
<dt><span class="term">
          --dst-ip-regex=<em class="replaceable"><code>IP</code></em>
        </span></dt>
<dd><p>
            Show log records with regex destination IP address.
          </p></dd>
<dt><span class="term">
          --end=<em class="replaceable"><code>date</code></em>
        </span></dt>
<dd><p>
            Show log records before the end date (inclusive).
            <code class="literal">date</code> can be epoch seconds or in the
            format of "MMM DD HH:MM:SS YYYY". For example, date can be
            1123456789, "Sep 12 18:12:21 2006" or "09 12 18:12:21 2006".
          </p></dd>
<dt><span class="term">
          --from=<em class="replaceable"><code>address</code></em>
        </span></dt>
<dd><p>
            Show only reception log records where the envelope sender is
            the specified address.
          </p></dd>
<dt><span class="term">
          --from-domain=<em class="replaceable"><code>domain</code></em>
        </span></dt>
<dd><p>
            Show only reception log records where the envelope sender's
            domain is the specified domain.
          </p></dd>
<dt><span class="term">
          --from-domain-regex=<em class="replaceable"><code>domain</code></em>
        </span></dt>
<dd><p>
            Show only reception log records where the envelope sender's
            domain is the regex domain.
          </p></dd>
<dt><span class="term">
          --from-regex=<em class="replaceable"><code>address</code></em>
        </span></dt>
<dd><p>
            Show only reception log records where the envelope sender is
            the specified regular expression.
          </p></dd>
<dt><span class="term">
          -h
        </span></dt>
<dd><p>
            Show a help message.
          </p></dd>
<dt><span class="term">
          --id=<em class="replaceable"><code>ID</code></em>
        </span></dt>
<dd><p>
            Show log records with specified message ID. You can use this
            option multiple times.
          </p></dd>
<dt><span class="term">
          --in | --reception
        </span></dt>
<dd><p>
            Show reception log records.
          </p></dd>
<dt><span class="term">
          --main
        </span></dt>
<dd><p>
            Only show records from the mainlogs.
          </p></dd>
<dt><span class="term">
          --out | --delivery
        </span></dt>
<dd><p>
            Show delivery log records.
          </p></dd>
<dt><span class="term">
          --output=<em class="replaceable"><code>file</code></em> [--append]
        </span></dt>
<dd><p>
            Print results to <code class="literal">file</code> instead of
            <code class="literal">STDOUT</code>. Using the optional
            <code class="literal">--append</code> mode, appends to an existing
            file.
          </p></dd>
<dt><span class="term">
          --perm
        </span></dt>
<dd><p>
            Show permanent failure log records. If this is used with
            <code class="option">-v</code>, Reception time, From: and To: address
            of a message that is permanently failed will be printed, as
            well as the failure message.
          </p></dd>
<dt><span class="term">
          --src-ip=<em class="replaceable"><code>IP</code></em>
        </span></dt>
<dd><p>
            Show log records with specified source IP address.
          </p></dd>
<dt><span class="term">
          --src-ip-regex=<em class="replaceable"><code>IP</code></em>
        </span></dt>
<dd><p>
            Show log records with regex source IP address.
          </p></dd>
<dt><span class="term">
          --start=<em class="replaceable"><code>date</code></em>
        </span></dt>
<dd>
<p>
            Show log records after the start date (inclusive).
            <code class="literal">date</code> can be epoch seconds or in the
            format of "MMM DD HH:MM:SS YYYY". For example, date can be
            1123456789, "Sep 12 01:12:21 2006" or "09 12 18:21:21 2006".
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              Currently you cannot specify a start date in the format
              "MMM DD HH:MM:SS YYYY". Use Unix epoch seconds. You can
              use the <span class="command"><strong>date</strong></span> shell command to convert a
              string to Unix epoch seconds.
            </p>
</div>
</dd>
<dt><span class="term">
          --to=<em class="replaceable"><code>address</code></em>
        </span></dt>
<dd><p>
            Show only reception log records where the recipient is the
            specified address.
          </p></dd>
<dt><span class="term">
          --to-domain=<em class="replaceable"><code>domain</code></em>
        </span></dt>
<dd>
<p>
            Show log records where the recipient's domain is the
            specified domain.
          </p>
<p>
            You can specify <code class="literal">--to-domain</code> options
            multiple times.
          </p>
</dd>
<dt><span class="term">
          --to-domain-regex=<em class="replaceable"><code>domain</code></em>
        </span></dt>
<dd><p>
            Show log records where the recipient's domain is the regex
            domain.
          </p></dd>
<dt><span class="term">
          --to-regex=<em class="replaceable"><code>address</code></em>
        </span></dt>
<dd><p>
            Show only reception log records where the recipient is the
            regex address.
          </p></dd>
<dt><span class="term">
          --tran
        </span></dt>
<dd><p>
            Show transient failure log records.
          </p></dd>
<dt><span class="term">
          -v | --verbose
        </span></dt>
<dd><p>
            For <code class="filename">rejectlog.ec</code>, print detailed
            information. For <code class="filename">mainlog.ec</code>, print all
            log information grouped by message id.
          </p></dd>
<dt><span class="term">
          --vctx-conn=key[=value]
        </span></dt>
<dd><p>
            Show reject logs where the validate context for the message
            has the specified key and optional value. Use
            --vctx-conn=key='' to test for a key with an empty value.
          </p></dd>
<dt><span class="term">
          --vctx-conn=key[=value]
        </span></dt>
<dd><p>
            Show reject logs where the validate context for the
            connection has the specified key and optional value. Use
            --vctx-conn=key='' to test for a key with an empty value.
          </p></dd>
<dt><span class="term">
          --vctx-conn-regex=key[=value]
        </span></dt>
<dd><p>
            Show reject logs where the validate context for the
            connection has the regex key and optional value. Use
            --vctx-conn=key='' to test for a key with an empty value.
          </p></dd>
<dt><span class="term">
          --vctx-mess=key[=value]
        </span></dt>
<dd><p>
            Show reject logs where the validate context for the message
            has the specified key and optional value. Use
            --vctx-mess=key='' to test for a key with an empty value.
          </p></dd>
<dt><span class="term">
          --vctx-mess-regex=key[=value]
        </span></dt>
<dd><p>
            Show reject logs where the validate context for the message
            has the regex key and optional value. Use --vctx-mess=key=''
            to test for a key with an empty value.
          </p></dd>
<dt><span class="term">
          --xml
        </span></dt>
<dd><p>
            Print output in XML format.
          </p></dd>
</dl></div>
<div class="refsection">
<a name="idp14587216"></a><h3>Usage Examples</h3>
<p>
        Show counts of receptions, deliveries, temporary failures and
        permanent failures:

</p>
<pre class="programlisting">
shell&gt; ec_log_trace --count
</pre>
<p>
      </p>
<p>
        Show counts of receptions, deliveries, temporary failures and
        permanent failures with a MAIL FROM in the messagesystems.com
        domain.

</p>
<pre class="programlisting">
shell&gt; ec_log_trace--count --from-domain=messagesystems.com
</pre>
<p>
      </p>
<p>
        Show counts of receptions, deliveries, temporary failures and
        permanent failures with a MAIL FROM in the
        <code class="literal">messagesystems.com</code> domain or its subdomains.

</p>
<pre class="programlisting">
shell&gt; ec_log_trace --count --from-domain-regex='.?messagesystems.com$'
</pre>
<p>
      </p>
<p>
        Show all messages from the null sender sent from the client with
        IP address <code class="literal">1.2.3.4</code>.

</p>
<pre class="programlisting">
shell&gt; ec_log_trace --from='&lt;&gt;' --src-ip=1.2.3.4 --verbose
</pre>
<p>
      </p>
<p>
        Show all messages that were delivered, temporarily failed or
        permanently failed by the mail server with IP address 5.6.7.8.
        Note that this will show all temporary failures for 5.6.7.8,
        even if the final deliveries, permanent failures were to a
        different IP address.

</p>
<pre class="programlisting">
shell&gt; ec_log_trace --dst-ip=5.6.7.8 --verbose
</pre>
<p>
      </p>
<p>
        Show all messages received, delivered, temporarily failed or
        permanently failed in the default binding and binding group

</p>
<pre class="programlisting">
shell&gt; ec_log_trace --binding=default --binding-group=default
</pre>
<p>
      </p>
<p>
        Show all reject log entries where "rdnsbl" was set in the
        connection context. This context may have been set by a Sieve
        script.

</p>
<pre class="programlisting">
shell&gt; ec_log_trace --vctx-conn=rdnsbl /var/log/ecelerity/rejectlog.ec*
</pre>
<p>
      </p>
<p>
        Show all reject log entries where "somehdr" begins with "failed"
        in the connection context.

</p>
<pre class="programlisting">
shell&gt; ec_log_trace --vctx-mess-regex='somehdr=^failed ' /var/log/ecelerity/rejectlog.ec*
</pre>
<p>
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="executable.ec_lic.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="exec.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="executable.ec_md5passwd.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">ec_lic </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> ec_md5passwd</td>
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
