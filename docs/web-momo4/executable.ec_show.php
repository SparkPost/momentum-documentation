<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ec_show</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="executable, command line, command, ec_show">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="exec.cmds.ref.php" title="Chapter 74. Executable Commands Reference">
<link rel="prev" href="executable.ec_sendmail.php" title="ec_sendmail">
<link rel="next" href="executable.eccfg.php" title="eccfg">
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
<tr><th colspan="3" align="center">ec_show</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="executable.ec_sendmail.php">Prev</a> </td>
<th width="60%" align="center">Chapter 74. Executable Commands Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="executable.eccfg.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="executable.ec_show"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>ec_show — show spool or message information</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_show</code>  [
        -c <em class="replaceable"><code>config_file</code></em>
      ] [
        --end_date <em class="replaceable"><code>PCRE</code></em>
      ] [
        -h
      ] [
        -m <em class="replaceable"><code>message id</code></em>
      ] [
        -n
      ] [
        --recipient <em class="replaceable"><code>PCRE</code></em>
      ] [
        -s
      ] [
        --sender <em class="replaceable"><code>PCRE</code></em>
      ] [
        --start_date <em class="replaceable"><code>PCRE</code></em>
      ]</p></div>
</div>
<div class="refsection">
<a name="idp9159936"></a><h2>Description</h2>
<p>
      <code class="literal">ec_show</code> is a utility to show spool or message
      information. It can also show messages matching a specified PCRE
      (<a class="link" href="http://www.pcre.org/" target="_top">Perl
      Compatible Regular Expression</a>).
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        <code class="option">ec_show</code> provides a "best guess" calculation of retries 
        and next_attempt based on the messages on disk. (Retries and next_attempt 
        (and code) are not rewritten to disk for cost and performance reasons.) 
        If you need exact information for these values, use the ec_console command 
        <a class="xref" href="console_commands.message_details.php" title="message details"><span class="refentrytitle">message details</span></a>, which looks at the 
        live message's metadata in memory.
      </p>
</div>
<p>
      <code class="literal">ec_show</code> has the following options:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          -c <em class="replaceable"><code>/path/to/config</code></em>
        </span></dt>
<dd><p>
            Specify a Momentum configuration file to work with.
          </p></dd>
<dt><span class="term">
          --end_date <em class="replaceable"><code>PCRE</code></em>
        </span></dt>
<dd><p>
            Show the messages whose creation time is no later than the
            time specified in the PCRE.
          </p></dd>
<dt><span class="term">
          -h
        </span></dt>
<dd><p>
            Show a help message.
          </p></dd>
<dt><span class="term">
          -m <em class="replaceable"><code>message_id</code></em>
        </span></dt>
<dd><p>
            Show the message specified by
            <em class="replaceable"><code>message_id</code></em>.
          </p></dd>
<dt><span class="term">
          -n
        </span></dt>
<dd><p>
            Show the count of messages in the spool only.
          </p></dd>
<dt><span class="term">
          --recipient <em class="replaceable"><code>PCRE</code></em>
        </span></dt>
<dd><p>
            Show the messages whose recipients match the specified PCRE.
          </p></dd>
<dt><span class="term">
          -s
        </span></dt>
<dd><p>
            Show spool the directory including the messages. Spool
            directory is the default or the file specified by the
            Momentum configuration file.
          </p></dd>
<dt><span class="term">
          --sender <em class="replaceable"><code>PCRE</code></em>
        </span></dt>
<dd><p>
            Show the messages whose sender match the specified PCRE.
          </p></dd>
<dt><span class="term">
          --start_date <em class="replaceable"><code>PCRE</code></em>
        </span></dt>
<dd><p>
            Show the messages whose creation time is no earlier than the
            time specified in the PCRE.
          </p></dd>
</dl></div>
<p>
      Find below the output of the command <span class="command"><strong>ec_show -s</strong></span>
      when there is one message in the message queue:
    </p>
<pre class="screen">
  Message: 00/00-02001-C6DD1CA4
  ID: (slot: 1254219116, pid: 2001, counter: 0)
  BatchID: (slot: 1254219116, pid: 2001, counter: 0)
  ConnID: (slot: 1254219116, pid: 2001, counter: 1)
  Swapped: Yes
  Created: 2009-09-29 06:11:56
  Next Attempt: 2009-09-29 06:11:56
  Retries: 0
  Received From: ESMTP 192.168.0.5:47780
  Received Via: 192.168.0.50:25
  Sender: peter@kubuntu
  Recipient: peter@gmail.com
  Code:
  Size: 505
  Connection Context: [
  connection_message_count = "1"
  pathway = "default"
  ehlo_domain = "kubuntu"
  connection_rcpt_count = "1"
  can_relay = "true"
  ehlo_string = "EHLO kubuntu"
  message_rcpt_count = "1"
  ]
  Message Context: [
  rcptto_string = "RCPT TO:&lt;peter@gmail.com&gt;"
    mailfrom_localpart = "peter"
    mailfrom_string = "MAIL FROM:&lt;peter@kubuntu&gt;"
      rcptto_localpart = "peter"
      rcptto_domain = "gmail.com"
      mailfrom_domain = "kubuntu"
      ]

      Return-Path: &lt;peter@kubuntu&gt;
        Received: from [192.168.0.5] ([192.168.0.5:47780] helo=kubuntu)
        by centos (envelope-from &lt;peter@kubuntu&gt;)
          (ecelerity 3.0.16.33344 r(33348)) with ESMTP
          id 00/00-02001-C6DD1CA4; Tue, 29 Sep 2009 06:11:56 -0400
          Date: Tue, 29 Sep 2009 10:11:58 -0400
          Message-ID: &lt;00.00.02001.C6DD1CA4@centos&gt;
            To: peter@gmail.com
            From: peter@kubuntu
            Subject: test Tue, 29 Sep 2009 10:11:58 -0400
            X-Mailer: swaks v20061116.0 jetmore.org/john/code/#swaks

            This is a test mailing

            .

</pre>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="executable.ec_sendmail.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="exec.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="executable.eccfg.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">ec_sendmail </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> eccfg</td>
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
