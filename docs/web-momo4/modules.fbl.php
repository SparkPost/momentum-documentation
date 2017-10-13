<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.35. fbl - Feedback Loop</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.exim_logger.php" title="71.34. exim_logger – Exim Logging">
<link rel="next" href="modules.host_fingerprint.php" title="71.36. fingerprint – Host Fingerprinting">
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
<tr><th colspan="3" align="center">71.35. fbl - Feedback Loop</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.exim_logger.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.host_fingerprint.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.fbl"></a>71.35. fbl - Feedback Loop</h2></div></div></div>
<a class="indexterm" name="idp21825680"></a><p>
    The feedback loop (fbl) module is used to manage feedback loop
    services offered by many ISPs. It provides for FBL message
    processing, original message header processing, and log file
    generation based on these services.
  </p>
<p>
    Providers such as Yahoo, AOL, Hotmail, Comcast, and others offer
    feedback loop services to qualified senders. The ISP will send a
    notification email to the sender every time that one of their users
    clicks on a “This is Spam” or “Report Abuse” type button.
    Qualified senders are usually required to maintain specific
    receiving addresses to close the feedback loop such as
    <code class="literal">abuse@domain.com</code> and
    <code class="literal">unsubscribe@domain.com</code>. When Momentum receives
    this message, it extracts the X-MSFBL header, decodes it, and then
    logs it.
  </p>
<p>
    Typically, this notification email is in Abuse Reporting Format
    (ARF), yet not all ISPs use the ARF format. Some use the "Junk
    e-Mail Reporting Program" (JMR). You can still use the fbl module
    with the JMR format. However, it lacks the message/feedback-report
    MIME part which means that you cannot know the feedback type.
  </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      If you change the configuration of this module at runtime, you
      must restart the ecelerity process in order for your changes to
      take effect. To do this issue the command:
      <strong class="userinput"><code>/etc/init.d/ecelerity restart</code></strong>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.fbl.configuration"></a>71.35.1. Configuration</h3></div></div></div>
<p>
      The fbl module is configured through a configuration file using a
      stanza such as:
    </p>
<div class="example">
<a name="example.fbl.3"></a><p class="title"><b>Example 71.62. fbl Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
fbl {
  Auto_Log = true # default is "false"
  Log_Path = “/var/log/ecelerity/fbllog.ec” # this is the default
  Addresses = ( “^.*@fbl.foo.com” ) # default is unset
  Header_Name = “X-MSFBL” # this is the default
  User_String = “%{vctx_mess:my_context_variable}” # default is unset
  Message_Disposition = “blackhole” # default is blackhole, also allowed to set to "pass"
  Condition = “can_relay” # default is unset, should be name of a vctx entry
}</pre></div>
</div>
<br class="example-break"><p>
      In this configuration, the module will catch all mail addressed to
      the <code class="literal">fbl.foo.com</code> domain, process it as an FBL
      notification message, log it to
      <code class="filename">/var/log/ecelerity/fbllog.ec</code>, and then
      blackhole the message. Outgoing messages will have a custom header
      injected (in this case named <code class="literal">X-MSFBL</code>) with
      sending information encoded to support later extraction when a
      feedback loop is triggered.
    </p>
<p>
      The fbl module can be used in conjunction with the jlog module to
      enable real-time reading of the log using the following syntax for
      the Log_Path option:
    </p>
<pre class="programlisting">
Log_Path = "jlog:///var/log/ecelerity/fbllog.rt=&gt;master"
</pre>
<p>
      For more information about the jlog module see
      <a class="xref" href="modules.jlog.php" title="71.43. jlog – jlog-Formatted Logging">Section 71.43, “jlog – jlog-Formatted Logging”</a>.
    </p>
<p>
      For details about the fbllog file format, see
      <a class="xref" href="log_formats.fbllog.php" title="35.4. fbllog">Section 35.4, “<code class="filename">fbllog</code>”</a>.
    </p>
<p>
      The following are options valid in the fbl scope:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          Addresses
        </span></dt>
<dd>
<p>
            List of one or more regular expressions defining the
            mailboxes for receiving FBL reports
          </p>
<p>
            In order to be processed, these addresses must be added to
            the <a class="xref" href="conf.ref.relay_domains.php" title="relay_domains"><span class="refentrytitle">relay_domains</span></a> option.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              If a domain in this list also appears in the
              <a class="xref" href="conf.ref.bounce_domains.php" title="bounce_domains"><span class="refentrytitle">bounce_domains</span></a> list, then the
              incoming FBL complaint message destined to that domain
              will be logged to <span class="bold"><strong>both</strong></span>
              <a class="link" href="log_formats.bouncelog.php" title="35.3. bouncelog">bouncelog</a> and
              <a class="link" href="log_formats.fbllog.php" title="35.4. fbllog">fbllog</a>.
            </p>
</div>
</dd>
<dt><span class="term">
          Auto_Log
        </span></dt>
<dd>
<p>
            Whether or not to log to the default log file. Default value
            is <code class="literal">false</code>.
          </p>
<p>
            In order for header insertion to work, this option must be
            set to <code class="literal">true</code> and the
            <a class="xref" href="conf.ref.enable_fbl_header_insertion.php" title="enable_fbl_header_insertion"><span class="refentrytitle">enable_fbl_header_insertion</span></a>
            option must be enabled.
          </p>
</dd>
<dt><span class="term">
          Condition
        </span></dt>
<dd>
<p>
            This option should be set to the name of a message context
            variable. By default, this option is unset.
          </p>
<p>
            It is used to enable conditional FBL message markup. You can
            run in 'auto' mode defining which messages are marked up for
            FBL processing based on which bindings/domains have
            <code class="option">Enable_FBL_Header_Insertion</code> defined as
            <code class="literal">enabled</code> within their scope. Otherwise,
            you can drive the fbl markup logic through policy scripting
            by setting the context variable defined in the FBL context
            variable setting.
          </p>
</dd>
<dt><span class="term">
          Header_Name
        </span></dt>
<dd>
<p>
            Defines the name of the header in which the MTA will include
            encoded information. Default value is
            <code class="literal">X-MSFBL</code>.
          </p>
<p>
            By default, this is a base64 encoded string with the
            following format:
            <code class="literal">rcptlocalpart@rcptdomain@binding@bindinggroup@userstring</code>.
          </p>
<p>
            On inbound processing, the MTA will look for the
            <code class="option">header</code> and extract the data. If the header
            is not found in the original message, no FBL processing will
            be performed and the message will be handled per the
            <code class="option">Message_Disposition</code> setting.
          </p>
</dd>
<dt><span class="term">
          Log_Path
        </span></dt>
<dd>
<p>
            Defines the log file. Default value is
            <code class="filename">/var/log/ecelerity/fbllog.ec</code>.
          </p>
<p>
            If you want to aggregate fbl logs on the cluster manager,
            add <code class="code">fbllog =
            "/var/log/ecelerity/fbllog.cluster"</code> to the
            <code class="option">logs</code> dictionary of the cluster module. For
            details, see
            <a class="xref" href="modules.cluster.php#option.logs.dictionary">
          logs
        </a>.
          </p>
<p>
            For an sample configuration see
            <a class="xref" href="cluster.config.logging.centalized.logging.php" title="26.2. Centralized Logging Example">Section 26.2, “Centralized Logging Example”</a>.
          </p>
</dd>
<dt><span class="term">
          Message_Disposition
        </span></dt>
<dd><p>
            Set to <code class="literal">blackhole</code> to dispose after logging
            or <code class="literal">pass</code> to pass the message on to the
            <code class="option">Addresses</code>.
          </p></dd>
<dt><span class="term">
          User_String
        </span></dt>
<dd>
<p>
            User-defined string included in the logs.
          </p>
<p>
            The validation connection and message contexts are typical
            candidates for logging (either pre-defined context values or
            context values that you define through the Policy Editor).
            If you want to log a context variable that is not
            predefined, you will need to use a script to pull that value
            into the validation context in the each_rcpt phase. The
            each_rcpt phase corresponds to the <code class="literal">EACH
            RECIPIENT</code> phase in the policy editor.
          </p>
<p>
            The user string uses Sieve++-style macros and expands them,
            while most other custom logging uses custom_logger-style
            macros which have a different format.
          </p>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp21875376"></a>71.35.2. <code class="option">Enable_FBL_Header_Insertion </code>Option</h3></div></div></div>
<p>
      You can select whether to use this module or not by setting the
      <code class="option">Enable_FBL_Header_Insertion</code> option to
      <code class="literal">enabled</code> or <code class="literal">disabled</code>. The
      <code class="option">Enable_FBL_Header_Insertion</code> option is valid in
      the global, binding, binding_group, and domain scopes. Note that
      you must also define the fbl module <code class="option">Auto_Log</code> as
      true in order for header insertion to work.
    </p>
<div class="example">
<a name="idp21879808"></a><p class="title"><b>Example 71.63. fbl usage</b></p>
<div class="example-contents"><pre class="programlisting">
Enable_FBL_Header_Insertion = disabled

Domain "aol.com" {
   Enable_FBL_Header_Insertion = enabled
}

Binding "foo" {
   Domain "yahoo.com" {
     Enable_FBL_Header_Insertion = enabled
   }
}</pre></div>
</div>
<br class="example-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="module.fbl.scripting"></a>71.35.3. Scripting</h3></div></div></div>
<h4>
<a name="idp21883040"></a>Lua Scripts</h4>
<p>
      With Lua, FBL scripting is typically implemented by the adaptive
      module. For more information see
      <a class="link" href="https://support.messagesystems.com/docs/web-ad/ad.rules.sweep.rules.php" target="_top">Sweep Rules –
      Configuring Bounce and FBL Behavior</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.exim_logger.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.host_fingerprint.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.34. exim_logger – Exim Logging </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.36. fingerprint – Host Fingerprinting</td>
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
