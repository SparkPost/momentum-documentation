<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.12. bounce_classifier_override – Override/Augment Bounce Classifications</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.bind_address_secondary.php" title="71.11. bind_address_secondary – Dual-stack IPv4/IPv6 Support">
<link rel="next" href="modules.bounce_logger.php" title="71.13. bounce_logger – Momentum-Style Bounce Logging">
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
<tr><th colspan="3" align="center">71.12. bounce_classifier_override – Override/Augment Bounce Classifications</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.bind_address_secondary.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.bounce_logger.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.bounce_classifier_override"></a>71.12. bounce_classifier_override – Override/Augment Bounce Classifications</h2></div></div></div>
<a class="indexterm" name="idp20060016"></a><div class="note">
<h3 class="title">Note</h3>
<p>
      The Live Bounce Updates service is provided free of charge with
      your support agreement; however, you must configure this module in
      order to use the service. For more information, see
      <a class="xref" href="modules.live.bounce.updates.php" title="71.44. Live Bounce Updates – Live Bounce Updates Service">Section 71.44, “Live Bounce Updates – Live Bounce Updates Service”</a>.
    </p>
</div>
<p>
    Use the bounce_classifier_override module to augment and override
    the built-in bounce classification system. It allows new rules
    (static and wildcarded) and new categories to be registered. Logs
    can be pulled out of either flat files or via an arbitrary
    datasource. The types of datasources available are:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <code class="literal">CSV</code> (installed by default)
      </p></li>
<li class="listitem"><p>
        <code class="literal">SQLite</code> (installed by default)
      </p></li>
<li class="listitem"><p>
        <code class="literal">PostgreSQL</code> (installed by default)
      </p></li>
<li class="listitem"><p>
        <code class="literal">ODBC</code>
      </p></li>
<li class="listitem"><p>
        <code class="literal">LDAP</code>
      </p></li>
</ul></div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.bounce_classifier_override.configuration"></a>71.12.1. Configuration</h3></div></div></div>
<p>
      The following is an example configuration:
    </p>
<div class="example">
<a name="example.bounce_classifier_override"></a><p class="title"><b>Example 71.20. bounce_classifier_override Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
datasource "my_sqlite" {
  uri = ( "sqlite:/path/to/db" )
}

bounce_classifier_override {
  user_smtp_classification_override =
    ":datasource:my_sqlite:SELECT domain, bounce_code, rule FROM overrrides;"
  refresh = 900
  custom_classes = [
    99 = "profanity"
  ]
}
</pre></div>
</div>
<br class="example-break"><p>
      Use the datasource layer to manage your custom classifications in
      a central database rather than in a file. This can make
      distribution of the rules easier in some cases, although those
      rules will effectively be missing if the database is unreachable
      for extended periods of time (e.q. longer than the
      <code class="option">cache_life</code> setting for your selected datasource
      cache).
    </p>
<p>
      There are two kinds of classification overrides, SMTP and Message
      Disposition Notification (MDN). SMTP overrides apply to the
      classification of errors that are returned over the SMTP dialog.
      MDN overrides apply to messages that are received out-of-band with
      the delivery. SMTP overrides can be special-cased to apply only to
      particular domains, whereas MDN overrides apply globally.
    </p>
<p>
      "SMTP bounces" are much more common than "MDN bounces". To
      determine the kind of bounce, look at the connection stage code in
      the bounce log (offset field <code class="literal">11</code>). For a
      description of these codes, see
      <a class="xref" href="log_formats.connection.stages.php" title="35.11. Connection Stages">Section 35.11, “Connection Stages”</a>. The bounce log
      itself is described in
      <a class="xref" href="log_formats.bouncelog.php#log_formats.bounce.record.fields" title="Table 35.4. Bounce Record Fields">Table 35.4, “Bounce Record Fields”</a>.
    </p>
<p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          custom_classes
        </span></dt>
<dd><p>
            Map of user-defined bounce_codes that have a numeric value
            less than 100 and a user-defined description string.
            Registering new bounce codes in this manner will allow you
            to setup <code class="option">user_smtp_classification_override</code>
            and <code class="option">user_mdn_classification_override</code> rules
            to assign to that bounce code. This description string is
            currently available via the custom_logger or other internal
            calls.
          </p></dd>
<dt><span class="term">
          enable_system_updates
        </span></dt>
<dd><p>
            Load unclassified bounce reasons into memory. This option
            must be enabled if you use the Live Bounce Updates service
            provided by Message Systems. Default value is
            <code class="literal">1</code>.
          </p></dd>
<dt><span class="term">
          refresh
        </span></dt>
<dd><p>
            Frequency (in seconds) for refreshing the bounce
            classifications lists. Default value is
            <code class="literal">300</code> seconds.
          </p></dd>
<dt><span class="term">
          system_smtp_classification_override
        </span></dt>
<dd><p>
            Default value is
            <code class="filename">/opt/msys/ecelerity/etc/updates/smtp_classification.ovr</code>.
            Do <span class="bold"><strong>not</strong></span> change this option
            without consulting support.
          </p></dd>
<dt><span class="term">
          system_mdn_classification_override
        </span></dt>
<dd><p>
            Default value is
            <code class="filename">/opt/msys/ecelerity/etc/updates/mdn_classification.ovr</code>.
            Do <span class="bold"><strong>not</strong></span> change this option
            without consulting support.
          </p></dd>
<dt><span class="term">
          user_smtp_classification_override
        </span></dt>
<dd>
<p>
            SMTP classification override file. Default name of this file
            is <code class="literal">user_smtp_classification.ovr</code>.
          </p>
<p>
            This file is found in the
            <code class="filename">/opt/msys/ecelerity/etc/</code> directory. The
            file format for SMTP overrides is:
            <code class="literal">domain,bounce_code,rule</code>, where
          </p>
<p>
            </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                  <code class="literal">domain</code> can be the empty string, in
                  which case the rule is considered to be global.
                  Otherwise, the rule will only apply to responses given
                  when talking to the specified domain.
                </p></li>
<li class="listitem"><p>
                  <code class="literal">bounce_code</code> is the numeric bounce
                  classification code you want to assign. This must
                  either be an internal code or one registered via the
                  <code class="literal">custom_classes</code> directive. For more
                  information about the internal codes, see
                  <a class="xref" href="bounce_logger.classification.codes.php" title="35.10. Bounce Classification Codes">Section 35.10, “Bounce Classification Codes”</a>.
                  When adding new codes be careful not to use existing
                  internal code numbers.
                </p></li>
<li class="listitem"><p>
                  <code class="literal">rule</code> can take one of two forms. If
                  the ‘<code class="literal">|</code>’ character appears
                  anywhere in the string, it will act as a globbing
                  character in a wildcard. Otherwise, the string will be
                  considered a simple static pattern. In both cases, the
                  rule will return true if the pattern matches any
                  substring of the classification text.
                </p></li>
</ul></div>
<p>
          </p>
<p>
            If you use a datasource instead of a flat-file, the
            datasource query must return 3 fields: domain, bounce_code,
            rule.
          </p>
<p>
            Use the prefix
            <code class="literal">:datasource:<em class="replaceable"><code>ds_name:query</code></em></code>
            when assigning a datasource as the value for
            <code class="option">user_smtp_classification_override</code>. Select
            the fields that contain the domain name, the bounce code and
            the rule, in that order. When querying a flat file instead
            of a datasource, simply specify the path to the file.
          </p>
</dd>
<dt><span class="term">
          user_mdn_classification_override
        </span></dt>
<dd>
<p>
            Default name of this file is
            <code class="literal">user_mdn_classification.ovr</code>.
          </p>
<p>
            It is found in the
            <code class="filename">/opt/msys/ecelerity/etc/</code> directory. The
            file format for MDN overrides is:
            <code class="literal">bounce_code,rule</code>, where
          </p>
<p>
            </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                  <code class="literal">bounce_code</code> is the numeric bounce
                  classification code you want to assign. This must
                  either be an internal code or one registered via the
                  <code class="literal">custom_classes</code> directive. For more
                  information about the internal codes, see
                  <a class="xref" href="bounce_logger.classification.codes.php" title="35.10. Bounce Classification Codes">Section 35.10, “Bounce Classification Codes”</a>.
                  When adding new codes be careful not to use existing
                  internal code numbers.
                </p></li>
<li class="listitem"><p>
                  <code class="literal">rule</code> can be of one of two forms. If
                  the ‘<code class="literal">|</code>’ character appears
                  anywhere in the string, it will act as a globbing
                  character in a wildcard. Otherwise, the string will be
                  considered a simple static pattern. In both cases, the
                  rule will return <code class="literal">true</code> if the
                  pattern matches any substring of the classification
                  text.
                </p></li>
</ul></div>
<p>
          </p>
<p>
            Use the prefix
            <code class="literal">:datasource:<em class="replaceable"><code>ds_name:query</code></em></code>
            when assigning a datasource as the value for
            <code class="option">user_mdn_classification_override</code>. Select
            the fields that contain the bounce code and the rule, in
            that order. When querying a flat file instead of a
            datasource, simply specify the path to the file.
          </p>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.bounce_classifier_override.console"></a>71.12.2. Console Commands</h3></div></div></div>
<p>
      The bounce_classifier module can be controlled through
      <code class="literal">ec_console</code>. The following command(s) are
      available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          bounce_classifier_override reload
        </span></dt>
<dd><p>
            Use this command to trigger a manual reload of the bounce
            classification overrides at runtime.
          </p></dd>
<dt><span class="term">
          bounce_classifier_override test
          <em class="replaceable"><code>&lt;my_reply&gt;</code></em>
        </span></dt>
<dd><p>
            Use this command to determine how a specific SMTP reply is
            classified. This command reports the classification followed
            by the rule.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.bounce_classifier_override.lua"></a>71.12.3. Lua Functions</h3></div></div></div>
<p>
      You can also use Lua to classify bounces at runtime. For more
      information see
      <a class="xref" href="lua.ref.msys.bounce.classify_smtp_response.php" title="msys.bounce.classify_smtp_response"><span class="refentrytitle">msys.bounce.classify_smtp_response</span></a>
      and <a class="xref" href="lua.ref.msys.bounce.classify.php" title="msys.bounce.classify"><span class="refentrytitle">msys.bounce.classify</span></a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.bounce_classifier_override.seealso"></a>71.12.4. See Also</h3></div></div></div>
<p>
      <a class="xref" href="modules.live.bounce.updates.php" title="71.44. Live Bounce Updates – Live Bounce Updates Service">Section 71.44, “Live Bounce Updates – Live Bounce Updates Service”</a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.bind_address_secondary.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.bounce_logger.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.11. bind_address_secondary – Dual-stack IPv4/IPv6 Support </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.13. bounce_logger – Momentum-Style Bounce Logging</td>
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
