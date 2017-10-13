<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.62. seedlist – Seedlist Integration</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.securecreds.php" title="71.61. securecreds – Password Encryption/Credential Retrieval">
<link rel="next" href="modules.sendmail_logger.php" title="71.63. sendmail_logger – Sendmail Logging">
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
<tr><th colspan="3" align="center">71.62. seedlist – Seedlist Integration</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.securecreds.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.sendmail_logger.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.seedlist"></a>71.62. seedlist – Seedlist Integration</h2></div></div></div>
<a class="indexterm" name="idp22912176"></a><p>
    The seedlist module allows for seamless, zero-effort integration
    with the popular deliverability monitoring service, ReturnPath's
    <a class="link" href="http://www.returnpath.net/commercialsender/monitoring/" target="_top">
    Mailbox Monitor</a>. Services of this nature automatically
    monitor your deliverability into various ISPs by having you send a
    copy of every campaign/mailing to a set of unique addresses, which
    they then poll on a regular basis. Momentum's seedlist module
    simplifies this process by allowing you to pass the list of seeds to
    the MTA, as well as define criteria that distinguish unique
    campaigns (for example matching a VERP pattern or a particular
    header). When Momentum detects a new campaign, it will send a copy
    of the new campaign to every address on the seedlist. Campaigns are
    determined by patterns specified in either the
    <code class="option">match_verp</code> or <code class="option">match_header</code>
    options.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      The Momentum seedlist module was designed with ReturnPath seed
      lists in mind, not real email addresses. If you use the seedlist
      module in conjunction with Message Central, this module will send
      a copy of the first email it sees to the entire seedlist
      <span class="emphasis"><em>as a copy</em></span>. What this means is that if the
      first email to hit the seedlist module was customized for "John
      Smith", then that exact email will be copied and send to
      <span class="emphasis"><em>all</em></span> the addresses in the seedlist. This is by
      design because this is how ReturnPath seed lists work. However, if
      your seedlist has <span class="emphasis"><em>real</em></span> email addresses in it,
      then recipients will get a copy of John Smith's customized email.
      That also means that if those real people click or open the email,
      it will represent a click or open associated with John Smith. This
      is probably not what you want.
    </p>
<p>
      If you are using ReturnPath seeds and just want to test domain
      penetration, with generic mail then use this module. If you want
      to send customized mail to each recipient in a real-person seed
      list, then you should create a target list of Message Central
      recipients.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp22920800"></a>71.62.1. Configuration</h3></div></div></div>
<p>
      The following is a typical seedlist configuration:
    </p>
<div class="example">
<a name="example.seedlist.2"></a><p class="title"><b>Example 71.86. seedlist Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
seedlist "seedlist1" {
  seedlist_file = "/opt/msys/ecelerity/etc/conf/default/seeds"
  no_seed_condition = "context_variable"
  match_verp = ( "bounces-(?P&lt;campaignid&gt;\w+)" )
}</pre></div>
</div>
<br class="example-break"><p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          cache_name
        </span></dt>
<dd><p>
            Identifies datasource cache. Default value is
            <code class="literal">ecdb</code>. There should be no need to change
            this option.
          </p></dd>
<dt><span class="term">
          insert_campaign_header
        </span></dt>
<dd><p>
            (Optional) Allows Momentum to add a header to the seedlist
            copy mails that contains just the campaign identifier
            extracted by the matching rules. This can be convenient for
            integrating against services like Return Path's Mailbox
            Monitor, which prefer you to use a header to uniquely
            identify campaigns.
          </p></dd>
<dt><span class="term">
          mail_from
        </span></dt>
<dd><p>
            If a sender is using a VERP'd MAIL FROM and doing
            unsubscribe management using this MAIL FROM, users can be
            unintentionally unsubscribed if a seed address bounces. In
            such cases, use this option to override the MAIL FROM in the
            envelope of generated seeds.
          </p></dd>
<dt><span class="term">
          match_verp
        </span></dt>
<dd><p>
            Tells Momentum how to detect a new campaign. Momentum
            applies the specified pattern to the envelope sender (MAIL
            FROM) of the message and tries to extract the campaign
            identifier. You must extract the campaign identifier into a
            subexpression named <code class="literal">campaignid</code>. The
            localpart of your VERP address should be constructed so that
            a unique expression is extracted to the
            <code class="literal">campaignid</code> identifier. For example,
            <code class="literal">bounces-123-456@bounces.foo.com</code> will
            extract '123-456' into the <code class="literal">campaignid</code>
            identifier. This will enable the seedlist module to
            recognize your campaign as new.
          </p></dd>
<dt><span class="term">
          no_seed_condition
        </span></dt>
<dd><p>
            Tells Momentum to check for the context variable that you
            specify. If that variable is set to
            <span class="bold"><strong>ANY</strong></span> value, the message is
            assumed <span class="emphasis"><em>not</em></span> to be part of that
            campaign.
          </p></dd>
<dt><span class="term">
          schema_name
        </span></dt>
<dd><p>
            Identifies a PostgreSQL schema. Default value is
            <code class="literal">seedlist</code>. There should be no need to
            change this option.
          </p></dd>
<dt><span class="term">
          seedlist_file
        </span></dt>
<dd><p>
            Sets the path to the file containing the list of
            <span class="emphasis"><em>seed</em></span> email addresses to which to send
            copies. This file should contain the destination addresses,
            one per line. It is recommended practice to store the
            seedlist file in the repository. You can add arbitrary files
            to the repository in exactly the same way that configuration
            files are added. For more information, see
            <a class="xref" href="conf.overview.php#conf.adding.configuration.files" title="15.1.5. Adding Configuration Files">Section 15.1.5, “Adding Configuration Files”</a>.
          </p></dd>
</dl></div>
<p>
      In addition to matching VERP'd senders, you can also match against
      headers in the mail, for instance:
    </p>
<div class="example">
<a name="example.seedlist.headers.3"></a><p class="title"><b>Example 71.87. seedlist VERP</b></p>
<div class="example-contents"><pre class="programlisting">
seedlist "seedlist1" {
  seedlist_file = "/opt/msys/ecelerity/etc/conf/default/seeds"
  no_seed_condition = "context_variable"
  match_verp = ( "bounces-(?P&lt;campaignid&gt;\w+)" )
  match_header Message-ID {
    pattern = ( "foo-(?P&lt;campaignid&gt;\w+)"
                "bar-(?P&lt;campaignid&gt;\w+)" )
  }
  insert_campaign_header = "X-Campaign-ID"
}</pre></div>
</div>
<br class="example-break"><p>
      This example matches the original VERP header, as well as two
      possible patterns, against the <code class="literal">Message-ID</code>
      header in the mail. You can specify an arbitrary number of
      patterns—they will be applied in order until one matches. If
      there are no matches, the mail will not be considered part of a
      campaign and a message will not be sent to the seedlist.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.seedlist.runtime.usage"></a>71.62.2. Runtime Usage</h3></div></div></div>
<p>
      For custom processing from a Lua script, use the
      <code class="function">seedlist_generate_seed</code> hook point. After seed
      generation, the message context variable,
      <code class="literal">#seedlist-orig-from</code>, is accessible from this
      hook point and contains the original MAIL FROM of the triggering
      message. You can take a custom processing step, such as inspecting
      the <code class="literal">#seedlist-orig-from</code> context variable and
      rewriting the MAIL FROM.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.securecreds.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.sendmail_logger.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.61. securecreds – Password Encryption/Credential Retrieval </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.63. sendmail_logger – Sendmail Logging</td>
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
