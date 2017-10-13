<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.57. reception_timing - Reception Timing Modules</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.postfix_logger.php" title="71.56. postfix_logger – Postfix Logging">
<link rel="next" href="modules.response_transcode.php" title="71.58. response_transcode – Module">
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
<tr><th colspan="3" align="center">71.57. reception_timing - Reception Timing Modules</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.postfix_logger.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.response_transcode.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.reception_timing"></a>71.57. reception_timing - Reception Timing Modules</h2></div></div></div>
<a class="indexterm" name="idp22662400"></a><p class="config"><b>Configuration Change. </b>
      This feature is available in Momentum 4.2 and later.
    </p>
<p>
    The <code class="literal">reception_timing</code> and
    <code class="literal">reception_timing_logger</code> modules provide
    information on how long it takes Momentum to receive or reject
    messages over SMTP. The timing information, which is reported for
    receptions, rejections, and unexpected disconnections during SMTP
    reception, includes the following:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        The time it took to receive the message. This is measured from
        receiving the MAIL FROM up to the point where the "250 OK"
        response can be sent back to the SMTP client during data.
      </p></li>
<li class="listitem"><p>
        The time it took to scan the message. This is measured from
        receiving the message body data (i.e., after CRLF "." CRLF) up
        to the point where the "250 OK" response can be sent back. This
        includes the data, data_spool, data_spool_each_rcpt (also called
        "each_rcpt"), and final_validation SMTP phases, as well as
        others that are run after receiving the body content, but before
        the message is enqueued.
      </p></li>
<li class="listitem"><p>
        Data about the source IP address and port, the destination IP
        address and port, and the pathway. This helps customers
        distinguish between multiple services running on the same
        Momentum instance, so they can see if a particular service is
        slow to receive messages (e.g., due to policy script bugs).
      </p></li>
</ul></div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.reception_timing.prerequisites"></a>71.57.1. Pre-Requisites</h3></div></div></div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.reception_timing.prerequisites.chunk_logger"></a>71.57.1.1. chunk_logger</h4></div></div></div>
<p>
        The <code class="literal">chunk_logger</code> module must be loaded and
        configured. This module is used to log the data.
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; "><li class="listitem">
<p>
            Example configuration to load the
            <code class="literal">chunk_logger</code> module with a specific
            timestamp format:
          </p>
<pre class="programlisting">
chunk_logger "chunk_logger" {
   timestamp_format = "%m:%d:%H:%M:%S"
   destination = "/var/log/ecelerity/policylog.cl" 
}
</pre>
</li></ul></div>
<p>
        You may also wish to add the chunk_logger log file to
        <code class="literal">ec_rotate.conf</code>, to ensure that it is rotated
        daily. For more information, see
        <a class="xref" href="modules.chunk_logger.php" title="71.15. chunk_logger Module">Section 71.15, “chunk_logger Module”</a> and
        <a class="xref" href="executable.ec_rotate.php" title="ec_rotate"><span class="refentrytitle">ec_rotate</span></a>.
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          The chunk_logger can also be used to log arbitrary data from
          Lua.
        </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.reception_timing.prerequisites.msg-id_header"></a>71.57.1.2. Message-ID Header</h4></div></div></div>
<p>
        The logger will attempt to include the Message-ID header
        contents in the timing log. For that to work, the policy scripts
        in the system must be set to store the Message-ID header in the
        <code class="literal">cl_MID</code> context variable in the message part
        of the message context.
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; "><li class="listitem">
<p>
            Sample Lua code to retrieve the Message-ID header and store
            it in the message context:
          </p>
<pre class="programlisting">
hdrs = msg:header("Message-ID"); 
if hdrs ~= nil and hdrs[1] ~= nil then
   msg:context_set(msys.core.ECMESS_CTX_MESS, "cl_MID", hdrs[1]); 
end
</pre>
</li></ul></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
          To run this code in the data phase, you must wrap it in
          <code class="literal">msys.runInPool()</code> to avoid blocking the
          scheduler thread.
        </p>
<p>
          Also, the context variable name is not currently configurable.
        </p>
</div>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.reception_timing.receptions"></a>71.57.2. Receptions</h3></div></div></div>
<p>
      Reception records will only be logged after the entire message has
      been received. Internally, Momentum gives each recipient its own
      copy of the message with its own message ID. A message with
      multiple recipients will have multiple message IDs, one per
      recipient. There is also a batch ID, which is the same for all
      recipients. Both the message ID and batch ID are logged.
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
          Example reception line for a message with a single recipient:
        </p>
<pre class="programlisting">
1356769421: received after 0.040929 s (scanned in 0.000519 s) size=1005 src=127.0.0.1:37656 \
   dst=127.0.0.1:8710 pathway=default ID=00/00-10012-D88AED05 batch-ID=00/00-10012-D88AED05 \
   Message-ID=""
</pre>
</li>
<li class="listitem">
<p>
          Example reception line for a message with three recipients.
          The Momentum message ID ("ID=...") is different for each
          recipient while the batch ID is the same.
        </p>
<pre class="programlisting">
1356769421: received after 0.041026 s (scanned in 0.000625 s) size=1078 src=127.0.0.1:37658 \
   dst=127.0.0.1:8710 pathway=default ID=10/00-10012-D88AED05 batch-ID=10/00-10012-D88AED05 \
   Message-ID="" 
1356769421: received after 0.041026 s (scanned in 0.000625 s) size=1078 src=127.0.0.1:37658 \
   dst=127.0.0.1:8710 pathway=default ID=20/00-10012-D88AED05 batch-ID=10/00-10012-D88AED05 \
   Message-ID="" 
1356769421: received after 0.041026 s (scanned in 0.000625 s) size=1078 src=127.0.0.1:37658 \
   dst=127.0.0.1:8710 pathway=default ID=30/00-10012-D88AED05 batch-ID=10/00-10012-D88AED05 \
   Message-ID=""
</pre>
</li>
</ul></div>
<p>
      Recipients are not logged in the timing log. It is assumed that
      <code class="literal">ec_logger</code> or <code class="literal">custom_logger</code>
      has been configured to log message IDs so that they can be
      cross-referenced if needed.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.reception_timing.rejections"></a>71.57.3. Rejections</h3></div></div></div>
<p>
      Rejections can occur at many points during SMTP reception,
      including MAIL FROM, RCPT TO, DATA, CRLF "." CRLF. Rejections may
      also include dropping the SMTP connection. The module logs
      reject-and-continue and reject-with-disconnect exactly the same
      way.
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
          Example rejection after MAIL FROM:
        </p>
<pre class="programlisting">
1356769436: rejected after 0.000000 s (scanned in 0.000000 s) size=0??? src=127.0.0.1:40587 \
   dst=127.0.0.1:8879 pathway=default ID=00/00-10822-C98AED05 batch-ID=00/00-10822-C98AED05 \
   Message-ID="" phase=4 (awaiting mailfrom)
</pre>
</li>
<li class="listitem">
<p>
          Example rejection after RCPT TO:
        </p>
<pre class="programlisting">
1356769441: rejected after 0.000435 s (scanned in 0.000000 s) size=0??? src=127.0.0.1:41931 \
   dst=127.0.0.1:8992 pathway=default ID=00/00-11022-1A8AED05 batch-ID=00/00-11022-1A8AED05 \
   Message-ID="" phase=6 (awaiting rcptto)
</pre>
</li>
<li class="listitem">
<p>
          Example rejection of multiple RCPT TOs:
        </p>
<pre class="programlisting">
1356769441: rejected after 0.000576 s (scanned in 0.000000 s) size=0??? src=127.0.0.1:41932 \
   dst=127.0.0.1:8992 pathway=default ID=10/00-11022-1A8AED05 batch-ID=10/00-11022-1A8AED05 \
   Message-ID="" phase=6 (awaiting rcptto) 
1356769441: rejected after 0.001893 s (scanned in 0.000000 s) size=0??? src=127.0.0.1:41932 \
   dst=127.0.0.1:8992 pathway=default ID=10/00-11022-1A8AED05 batch-ID=10/00-11022-1A8AED05 \
   Message-ID="" phase=6 (awaiting rcptto) 
1356769441: rejected after 0.002541 s (scanned in 0.000000 s) size=0??? src=127.0.0.1:41932 \
   dst=127.0.0.1:8992 pathway=default ID=10/00-11022-1A8AED05 batch-ID=10/00-11022-1A8AED05 \
   Message-ID="" phase=6 (awaiting rcptto) 
</pre>
</li>
<li class="listitem">
<p>
          Example rejection during the data phase:
        </p>
<pre class="programlisting">
1356769445: rejected after 1.039839 s (scanned in 1.000001 s) size=1008 src=127.0.0.1:57889 \
   dst=127.0.0.1:8702 pathway=default ID=00/00-11224-4A8AED05 batch-ID=00/00-11224-4A8AED05 \
   Message-ID="" phase=9 (reading body) 
</pre>
</li>
<li class="listitem">
<p>
          Example rejection of multiple recipients during the data
          phase:
        </p>
<pre class="programlisting">
1356769446: rejected after 1.040390 s (scanned in 1.000000 s) size=1075 src=127.0.0.1:57890 \
   dst=127.0.0.1:8702 pathway=default ID=10/00-11224-5A8AED05 batch-ID=10/00-11224-5A8AED05 \
   Message-ID="" phase=9 (reading body) 
1356769446: rejected after 1.040390 s (scanned in 1.000000 s) size=1075 src=127.0.0.1:57890 \
   dst=127.0.0.1:8702 pathway=default ID=10/00-11224-5A8AED05 batch-ID=10/00-11224-5A8AED05 \
   Message-ID="" phase=9 (reading body)
1356769446: rejected after 1.040390 s (scanned in 1.000000 s) size=1075 src=127.0.0.1:57890 \
   dst=127.0.0.1:8702 pathway=default ID=10/00-11224-5A8AED05 batch-ID=10/00-11224-5A8AED05 \
   Message-ID="" phase=9 (reading body)       
</pre>
</li>
<li class="listitem">
<p>
          Example rejection of multiple recipients during the each_rcpt
          phase:
        </p>
<pre class="programlisting">
1356769460: rejected after 3.043582 s (scanned in 3.003623 s) size=1123 src=127.0.0.1:49148 \
   dst=127.0.0.1:8956 pathway=default ID=10/00-11629-1B8AED05 batch-ID=10/00-11629-1B8AED05 \
   Message-ID="" phase=12 (async body response) 
1356769460: rejected after 3.043582 s (scanned in 3.003623 s) size=1123 src=127.0.0.1:49148 \
   dst=127.0.0.1:8956 pathway=default ID=10/00-11629-1B8AED05 batch-ID=10/00-11629-1B8AED05 \
   Message-ID="" phase=12 (async body response) 
1356769460: rejected after 3.043582 s (scanned in 3.003623 s) size=1123 src=127.0.0.1:49148 \
   dst=127.0.0.1:8956 pathway=default ID=10/00-11629-1B8AED05 batch-ID=10/00-11629-1B8AED05 \
   Message-ID="" phase=12 (async body response)      
      </pre>
</li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.disconnects"></a>71.57.4. Unexpected Disconnects</h3></div></div></div>
<p>
      An "unexpected disconnect" occurs when the SMTP client disconnects
      without receiving a "250 OK" after data or without sending a QUIT
      command; that is, when the SMTP client disconnects while sending a
      message or without waiting for a response after sending CRLF "."
      CRLF.
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
          Example unexpected disconnect after client sent MAIL FROM:
        </p>
<pre class="programlisting">
1356769476: unexpected disconnect after 1.001713 s (scanned in 0.000000 s) size=0??? src=127.0.0.1:43877 \
   dst=127.0.0.1:9192 pathway=default ID=00/00-12431-3C8AED05 batch-ID=00/00-12431-3C8AED05 Message-ID="" \
   phase=6 (awaiting rcptto)
</pre>
</li>
<li class="listitem">
<p>
          Example unexpected disconnect after client sent RCPT TO:
        </p>
<pre class="programlisting">
1356769481: unexpected disconnect after 1.002820 s (scanned in 0.000000 s) size=0??? src=127.0.0.1:58014 \
   dst=127.0.0.1:9106 pathway=default ID=00/00-12631-8C8AED05 batch-ID=00/00-12631-8C8AED05 Message-ID="" \
   phase=6 (awaiting rcptto)       
</pre>
</li>
<li class="listitem">
<p>
          Example unexpected disconnect after client sent the data, but
          before sending CRLF "." CRLF:
        </p>
<pre class="programlisting">
1356769486: unexpected disconnect after 1.002144 s (scanned in 0.000000 s) size=0??? src=127.0.0.1:42835 \
   dst=127.0.0.1:9447 pathway=default ID=00/00-12832-DC8AED05 batch-ID=00/00-12832-DC8AED05 Message-ID="" \
   phase=9 (reading body)       
</pre>
</li>
<li class="listitem">
<p>
          Example unexpected disconnect after client sent the data:
        </p>
<pre class="programlisting">
1356769563: unexpected disconnect after 0.007025 s (scanned in 0.007025 s) size=504 src=127.0.0.1:45734 \
   dst=127.0.0.1:9262 pathway=default ID=00/00-15446-B19AED05 batch-ID=00/00-15446-B19AED05 Message-ID="" \
   phase=12 (async body response)        
</pre>
</li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.smtp.reception.states"></a>71.57.5. SMTP Reception States</h3></div></div></div>
<p>
      SMTP stage numbers, reception states, and descriptions are listed
      below:
    </p>
<div class="table">
<a name="modules.reception.states"></a><p class="title"><b>Table 71.1. SMTP Reception States</b></p>
<div class="table-contents"><table summary="SMTP Reception States" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
              Stage #
            </th>
<th>
              Reception State
            </th>
<th>
              Description
            </th>
</tr></thead>
<tbody>
<tr>
<td>
              0
            </td>
<td>
              just connected
            </td>
<td> </td>
</tr>
<tr>
<td>
              1
            </td>
<td>
              sending banner
            </td>
<td> </td>
</tr>
<tr>
<td>
              2
            </td>
<td>
              awaiting ehlo/helo
            </td>
<td> </td>
</tr>
<tr>
<td>
              3
            </td>
<td>
              sending ehlo/helo response
            </td>
<td>
              Processing the EHLO/HELO command, and then sending the
              SMTP response. This includes running any EHLO phase policy
              scripts / hooks.
            </td>
</tr>
<tr>
<td>
              4
            </td>
<td>
              awaiting mailfrom
            </td>
<td> </td>
</tr>
<tr>
<td>
              5
            </td>
<td>
              sending mailfrom response
            </td>
<td>
              Processing the MAIL FROM command, and then sending the
              SMTP response. This includes running any MAIL FROM phase
              policy scripts / hooks.
            </td>
</tr>
<tr>
<td>
              6
            </td>
<td>
              awaiting rcptto
            </td>
<td> </td>
</tr>
<tr>
<td>
              7
            </td>
<td>
              sending rcptto response
            </td>
<td>
              Processing the RCPT TO command, and then sending the SMTP
              response. This includes running any RCPT TO phase policy
              scripts / hooks.
            </td>
</tr>
<tr>
<td>
              8
            </td>
<td>
              data phase
            </td>
<td>
              Send back the "354 continue" message in response to the
              DATA command.
            </td>
</tr>
<tr>
<td>
              9
            </td>
<td>
              reading body
            </td>
<td>
              Waiting for the SMTP client to the message (headers and
              body), and the terminating CRLF "." CRLF.
            </td>
</tr>
<tr>
<td>
              10
            </td>
<td>
              sending body response
            </td>
<td>
              The message has been received, and is being processed with
              the data phase policy scripts / hooks.
            </td>
</tr>
<tr>
<td>
              11
            </td>
<td>
              async body handler
            </td>
<td> </td>
</tr>
<tr>
<td>
              12
            </td>
<td>
              async body response
            </td>
<td>
              The message has been received, and is being processed with
              the data_spool and each_rcpt phase policy scripts / hooks.
            </td>
</tr>
<tr>
<td>
              13
            </td>
<td>
              relaying denied
            </td>
<td> </td>
</tr>
<tr>
<td>
              14
            </td>
<td>
              extension 1
            </td>
<td> </td>
</tr>
<tr>
<td>
              15
            </td>
<td>
              extension 2
            </td>
<td> </td>
</tr>
<tr>
<td>
              16
            </td>
<td>
              extension 3
            </td>
<td> </td>
</tr>
<tr>
<td>
              17
            </td>
<td>
              extension 4
            </td>
<td> </td>
</tr>
<tr>
<td>
              18
            </td>
<td>
              concurrency limit
            </td>
<td> </td>
</tr>
<tr>
<td>
              19
            </td>
<td>
              rcptto list response
            </td>
<td> </td>
</tr>
<tr>
<td>
              20
            </td>
<td>
              rcptto list final response
            </td>
<td> </td>
</tr>
<tr>
<td>
              21
            </td>
<td>
              esmtp setup phase
            </td>
<td> </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.configuration"></a>71.57.6. Configuration</h3></div></div></div>
<p>
      There are no configuration options. Load the timing module as
      shown below:
    </p>
<pre class="programlisting">
reception_timing reception_timing1 { 
} 

reception_timing_logger reception_timing_logger1 { 
} 
</pre>
<p>
      Both parts need to be loaded; otherwise, the timing data will not
      be collected or logged correctly.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        The <code class="literal">reception_timing</code> module is not compatible
        with the Supercharger feature.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.postfix_logger.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.response_transcode.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.56. postfix_logger – Postfix Logging </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.58. response_transcode – Module</td>
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
