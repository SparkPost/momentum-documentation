<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>35.10. Bounce Classification Codes</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="log_formats.php" title="Chapter 35. Log Formats">
<link rel="prev" href="log_formats.rejectlog.php" title="35.9. rejectlog">
<link rel="next" href="log_formats.connection.stages.php" title="35.11. Connection Stages">
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
<tr><th colspan="3" align="center">35.10. Bounce Classification Codes</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="log_formats.rejectlog.php">Prev</a> </td>
<th width="60%" align="center">Chapter 35. Log Formats</th>
<td width="20%" align="right"> <a accesskey="n" href="log_formats.connection.stages.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="bounce_logger.classification.codes"></a>35.10. Bounce Classification Codes</h2></div></div></div>
<p>
      The following is a list of bounce classification codes and their
      meanings.
    </p>
<div class="table">
<a name="log_formats.bounce.classification.codes"></a><p class="title"><b>Table 35.16. Bounce Classification Codes</b></p>
<div class="table-contents"><table border="1">
<colgroup>
<col>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
              Classification
            </th>
<th>
              Name
            </th>
<th>
              Description
            </th>
<th>
              Category
            </th>
</tr></thead>
<tbody>
<tr>
<td>
              1
            </td>
<td>
              Undetermined
            </td>
<td>
              The response text could not be identified.
            </td>
<td>
              Undetermined
            </td>
</tr>
<tr>
<td>
              10
            </td>
<td>
              Invalid Recipient
            </td>
<td>
              The recipient is invalid.
            </td>
<td>
              Hard
            </td>
</tr>
<tr>
<td>
              20
            </td>
<td>
              Soft Bounce
            </td>
<td>
              The message soft bounced.
            </td>
<td>
              Soft
            </td>
</tr>
<tr>
<td>
              21
            </td>
<td>
              DNS Failure
            </td>
<td>
              The message bounced due to a DNS failure.
            </td>
<td>
              Soft
            </td>
</tr>
<tr>
<td>
              22
            </td>
<td>
              Mailbox Full
            </td>
<td>
              The message bounced due to the remote mailbox being over
              quota.
            </td>
<td>
              Soft
            </td>
</tr>
<tr>
<td>
              23
            </td>
<td>
              Too Large
            </td>
<td>
              The message bounced because it was too large for the
              recipient.
            </td>
<td>
              Soft
            </td>
</tr>
<tr>
<td>
              24
            </td>
<td>
              Timeout
            </td>
<td>
              The message timed out.
            </td>
<td>
              Soft
            </td>
</tr>
<tr>
<td>
              25
            </td>
<td>
              Admin Failure
            </td>
<td>
              The message was failed by Momentum's configured policies.
            </td>
<td>
              Admin
            </td>
</tr>
<tr>
<td>
              30
            </td>
<td>
              Generic Bounce: No RCPT
            </td>
<td>
              No recipient could be determined for the message.
            </td>
<td>
              Hard
            </td>
</tr>
<tr>
<td>
              40
            </td>
<td>
              Generic Bounce
            </td>
<td>
              The message failed for unspecified reasons.
            </td>
<td>
              Soft
            </td>
</tr>
<tr>
<td>
              50
            </td>
<td>
              Mail Block
            </td>
<td>
              The message was blocked by the receiver.
            </td>
<td>
              Block
            </td>
</tr>
<tr>
<td>
              51
            </td>
<td>
              Spam Block
            </td>
<td>
              The message was blocked by the receiver as coming from a
              known spam source.
            </td>
<td>
              Block
            </td>
</tr>
<tr>
<td>
              52
            </td>
<td>
              Spam Content
            </td>
<td>
              The message was blocked by the receiver as spam.
            </td>
<td>
              Block
            </td>
</tr>
<tr>
<td>
              53
            </td>
<td>
              Prohibited Attachment
            </td>
<td>
              The message was blocked by the receiver because it
              contained an attachment.
            </td>
<td>
              Block
            </td>
</tr>
<tr>
<td>
              54
            </td>
<td>
              Relaying Denied
            </td>
<td>
              The message was blocked by the receiver because relaying
              is not allowed.
            </td>
<td>
              Block
            </td>
</tr>
<tr>
<td>
              60
            </td>
<td>
              Auto-Reply
            </td>
<td>
              The message is an auto-reply/vacation mail.
            </td>
<td>
              Soft
            </td>
</tr>
<tr>
<td>
              70
            </td>
<td>
              Transient Failure
            </td>
<td>
              Message transmission has been temporarily delayed.
            </td>
<td>
              Soft
            </td>
</tr>
<tr>
<td>
              80
            </td>
<td>
              Subscribe
            </td>
<td>
              The message is a subscribe request.
            </td>
<td>
              Admin
            </td>
</tr>
<tr>
<td>
              90
            </td>
<td>
              Unsubscribe
            </td>
<td>
              The message is an unsubscribe request.
            </td>
<td>
              Hard
            </td>
</tr>
<tr>
<td>
              100
            </td>
<td>
              Challenge-Response
            </td>
<td>
              The message is a challenge-response probe.
            </td>
<td>
              Soft
            </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="log_formats.rejectlog.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="log_formats.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="log_formats.connection.stages.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">35.9. <code class="filename">rejectlog</code> </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 35.11. Connection Stages</td>
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
