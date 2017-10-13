<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Appendix A. Message Responses</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.appendix.php" title="Part XI. Appendix">
<link rel="prev" href="p.appendix.php" title="Part XI. Appendix">
<link rel="next" href="snmp-mib.php" title="Appendix B. MIB Files">
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
<tr><th colspan="3" align="center">Appendix A. Message Responses</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="p.appendix.php">Prev</a> </td>
<th width="60%" align="center">Part XI. Appendix</th>
<td width="20%" align="right"> <a accesskey="n" href="snmp-mib.php">Next</a>
</td>
</tr>
</table></div>
<div class="appendix">
<div class="titlepage"><div><div><h1 class="title">
<a name="message_responses"></a>Message Responses</h1></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc"><dt><span class="section"><a href="message_responses.php#responses-by-code">A.1. Responses Sorted By Codes</a></span></dt></dl>
</div>
<p>
    This appendix lists the various responses that may be returned by
    the MTA when attempting delivery. Where applicable an explanation of
    the response is provided. If a response is marked "[internal]", this
    usually indicates that the message did not originate with an
    external host but from the MTA itself. Messages so marked usually
    appear in the transient and permanent failure logs. Responses are 
    sorted by SMTP code and then enhanced code.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="responses-by-code"></a>A.1. Responses Sorted By Codes</h2></div></div></div>
<p>
      Responses are sorted by SMTP code and then enhanced code.
    </p>
<div class="table">
<a name="table-code"></a><p class="title"><b>Table A.1. Responses sorted by code</b></p>
<div class="table-contents"><table border="1">
<colgroup>
<col>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
              SMTP Code
            </th>
<th>
              Enhanced Code
            </th>
<th>
              Message
            </th>
<th>
              Comment
            </th>
</tr></thead>
<tbody>
<tr>
<td> </td>
<td>
              4.3.0
            </td>
<td>
              Resource limitations, please try later
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              4.3.5
            </td>
<td>
              configuration error, please try later
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              4.3.5
            </td>
<td>
              message not yet parsed, can't reparse
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              4.3.5
            </td>
<td>
              message parse and assemble didn't round-trip
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              4.7.5
            </td>
<td>
              [internal] SSL certificate subject does not match host
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              4.7.5
            </td>
<td>
              [internal] remote node SSL certificate not signed by a
              valid CA
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              4.7.5
            </td>
<td>
              [internal] SSL cert must be signed by a valid CA
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              4.7.5
            </td>
<td>
              [internal] SSL cert common name does not match host
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              5.5.0
            </td>
<td>
              error while reading body
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td> </td>
<td>
              5.7.0
            </td>
<td>
              [internal] Message manually purged
            </td>
<td>
              Used console command, "fail domain name"
            </td>
</tr>
<tr>
<td> </td>
<td>
              5.7.0
            </td>
<td>
              [internal] rejected by policy
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              421
            </td>
<td> </td>
<td>
              This message is being 421'd
            </td>
<td>
              Service is unavailable
            </td>
</tr>
<tr>
<td>
              421
            </td>
<td>
              4.3.0
            </td>
<td>
              message is too large to process at this time
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              421
            </td>
<td>
              4.3.4
            </td>
<td>
              allocated resources exceeded
            </td>
<td>
              System outage
            </td>
</tr>
<tr>
<td>
              421
            </td>
<td>
              4.4.0
            </td>
<td>
              [internal] no MXs for this domain could be reached at this
              time
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              421
            </td>
<td>
              4.4.5
            </td>
<td>
              Service unavailable, concurrency limit reached
            </td>
<td>
              System outage
            </td>
</tr>
<tr>
<td>
              421
            </td>
<td>
              4.4.5
            </td>
<td>
              Service unavailable
            </td>
<td>
              System outage
            </td>
</tr>
<tr>
<td>
              450
            </td>
<td>
              4.4.1
            </td>
<td>
              [internal] Connection Timed Out
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td> </td>
<td>
              [internal] memory shortage while determining tls
              parameters
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.3.0
            </td>
<td>
              transaction failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.1
            </td>
<td>
              [internal] No valid hosts (unable to make any connections)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.1
            </td>
<td>
              [internal] No valid hosts
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send key failed
            </td>
<td>
              Cluster-related error
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send metadata failed
            </td>
<td>
              Cluster-related error
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no METADATA reponse
            </td>
<td>
              Cluster-related error
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no banner
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send HELO/EHLO failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no HELO/EHLO response
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] XCLIENT argument hook failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send XCLIENT failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no XCLIENT response
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] MAIL FROM argument hook failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] MAIL FROM arguments too long
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send MAIL FROM failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no MAIL FROM response
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] RCPT TO argument hook failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] RCPT TO arguments too long
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send RCPT TO failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no RCPT TO response
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send DATA failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no DATA response
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send BODY failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no BODY response
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send RSET failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] no RSET response
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] connection closed by remote host
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.4.2
            </td>
<td>
              [internal] send metadatadicts failed
            </td>
<td>
              Cluster-related error
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.5
            </td>
<td>
              [internal] send XCLUSTERMETADATA failed
            </td>
<td>
              Cluster-related error
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.5
            </td>
<td>
              [internal] no clustermetadata go-ahead
            </td>
<td>
              Cluster-related error
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.5
            </td>
<td>
              [internal] send STARTTLS failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.5
            </td>
<td>
              [internal] no tls go-ahead
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.5
            </td>
<td>
              [internal] TLS negotiation failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.6
            </td>
<td>
              [internal] XCLUSTERMETADATA required but not advertised
            </td>
<td>
              Cluster-related error
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.6
            </td>
<td>
              [internal] STARTTLS required but not advertised
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.6
            </td>
<td>
              [internal] XCLIENT required but not advertised
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              451
            </td>
<td>
              4.7.6
            </td>
<td>
              [internal] XCLUSTERMETADATA supported version not
              advertised
            </td>
<td>
              Cluster-related error
            </td>
</tr>
<tr>
<td>
              452
            </td>
<td>
              4.5.3
            </td>
<td>
              Service unavailable, batch limit reached
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              452
            </td>
<td>
              4.5.3
            </td>
<td>
              Service unavailable, recipients per connection limit
              reached
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              452
            </td>
<td>
              4.5.3
            </td>
<td>
              Service unavailable, recipients per message limit reached
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              454
            </td>
<td> </td>
<td>
              certificate not yet valid: possible clock skew
            </td>
<td>
              SSL related
            </td>
</tr>
<tr>
<td>
              454
            </td>
<td> </td>
<td>
              certificate expired
            </td>
<td>
              SSL related
            </td>
</tr>
<tr>
<td>
              454
            </td>
<td>
              4.4.4
            </td>
<td>
              [internal] no MX or A for domain
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              500
            </td>
<td>
              5.5.2
            </td>
<td>
              unrecognized command
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.1
            </td>
<td>
              MAIL FROM already established
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.2
            </td>
<td>
              RCPT TO syntax error
            </td>
<td>
              Triggered by an invalid address
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.2
            </td>
<td>
              MAIL FROM syntax error
            </td>
<td>
              Triggered by an invalid address
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.2
            </td>
<td>
              invalid EHLO
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.2
            </td>
<td>
              invalid HELO
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.2
            </td>
<td>
              MAIL FROM syntax error
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.2
            </td>
<td>
              RCPT TO syntax error
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.4
            </td>
<td>
              invalid arguments to RSET
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.4
            </td>
<td>
              unexpected argument to DATA
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.4
            </td>
<td>
              Syntax error (no parameters allowed)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              501
            </td>
<td>
              5.5.4
            </td>
<td>
              unexpected command
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              503
            </td>
<td> </td>
<td>
              RCPT TO without MAIL FROM
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              503
            </td>
<td>
              5.5.1
            </td>
<td>
              DATA without MAIL FROM
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              503
            </td>
<td>
              5.5.1
            </td>
<td>
              DATA without RCPT TO
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              503
            </td>
<td>
              5.5.1
            </td>
<td>
              bad sequence of commands
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.3.0
            </td>
<td>
              [internal] message body missing
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.4.4
            </td>
<td>
              [internal] NULL MX domain does not accept mail
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.5.1
            </td>
<td>
              RFC2821 HELO/EHLO needed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Lone CR or LF in headers (see RFC2822 section 2.2)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Missing CR LF . CR LF
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Required headers not found (see RFC2822 section 3.6)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Header not terminated by CR LF (see RFC2822 section 2.2)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Invalid header found (see RFC2822 section 3.6)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Missing required RFC2822 Date field (see RFC2822 section
              3.6)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Lone CR or LF in body (see RFC2822 section 2.3)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Header line too long (see RFC2822 section 3.5)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.6.0
            </td>
<td>
              Body line too long (see RFC2822 section 3.5)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.7.1
            </td>
<td>
              relaying denied
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.7.1
            </td>
<td>
              [internal] discarded by policy
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.7.1
            </td>
<td>
              [internal] processed as FBL message, and disposition is
              blackhole
            </td>
<td>
              FBL module
            </td>
</tr>
<tr>
<td>
              550
            </td>
<td>
              5.7.1
            </td>
<td>
              550 [internal] [oob]
            </td>
<td>
              bounce_logger module
            </td>
</tr>
<tr>
<td>
              551
            </td>
<td>
              5.4.6
            </td>
<td>
              [internal] Private/Loopback Address
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              551
            </td>
<td>
              5.7.1
            </td>
<td>
              recipient blackholed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              552
            </td>
<td>
              5.3.4
            </td>
<td>
              message size limit exceeded
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              554
            </td>
<td> </td>
<td>
              No Valid Domain
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              554
            </td>
<td>
              5.4.4
            </td>
<td>
              [internal] Domain Lookup Failed
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              554
            </td>
<td>
              5.4.5
            </td>
<td>
              [internal] Delivery not attempted (message expired)
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              554
            </td>
<td>
              5.4.7
            </td>
<td>
              [internal] exceeded max retries without delivery
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              554
            </td>
<td>
              5.4.7
            </td>
<td>
              [internal] exceeded max time without delivery
            </td>
<td>
              See message.
            </td>
</tr>
<tr>
<td>
              554
            </td>
<td>
              5.7.0
            </td>
<td>
              [internal] Blackholed
            </td>
<td>
              "Blackhole" option is set to "internal"
            </td>
</tr>
<tr>
<td>
              554
            </td>
<td>
              5.7.0
            </td>
<td>
              [internal] Message manually purged
            </td>
<td>
              Purged messages from the system console
            </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="p.appendix.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.appendix.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="snmp-mib.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Part XI. Appendix </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Appendix B. MIB Files</td>
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
