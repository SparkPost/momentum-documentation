<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.18. cloudmark – Cloudmark Authority® Content Scanning</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.clamav.php" title="71.17. clamav – ClamAV">
<link rel="next" href="modules.cluster.php" title="71.19. cluster – Cluster">
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
<tr><th colspan="3" align="center">71.18. cloudmark – Cloudmark Authority® Content Scanning</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.clamav.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.cluster.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.cloudmark"></a>71.18. cloudmark – Cloudmark Authority® Content Scanning</h2></div></div></div>
<a class="indexterm" name="idp20342944"></a><p class="config"><b>Configuration Change. </b>
      This feature is available in Momentum 4.2 and later.
    </p>
<p>
    The cloudmark module provides message diagnosis via the Cloudmark
    Authority® spam and phishing protection technology.
  </p>
<p>
    If you intend to use this module, be sure to choose it during
    installation. For more information, see
    <a class="xref" href="post_installation.php#install.additional.packages" title="12.1. Installing Partner Modules">Section 12.1, “Installing Partner Modules”</a>.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      If you update the Cloudmark cartridge outside of Momentum
      maintenance releases, you will need to manually reinstall the
      cartridge after your Momentum upgrade.
    </p>
<p>
      The installer does not replace any version of the Cloudmark
      cartridge you manually installed, even if the version in the
      Momentum installer is newer than the version currently installed.
    </p>
</div>
<p>
    When you choose this module during installation the
    msys-cloudmark-<em class="replaceable"><code>version</code></em>.<em class="replaceable"><code>os</code></em>.<em class="replaceable"><code>arch</code></em>.<em class="replaceable"><code>package_type</code></em>
    package is installed. After installation, perform the following
    steps before starting the ecelerity daemon:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
        Get a license file from Cloudmark.
      </p></li>
<li class="listitem"><p>
        Copy this file to <code class="filename">
        /opt/msys/3rdParty/cloudmark/etc/license.cfg</code>.
      </p></li>
<li class="listitem"><p>
        Configure the Cloudmark module as described below.
      </p></li>
</ol></div>
<p>
    The first time that ecelerity is loaded after Cloudmark is enabled,
    it may take a significant amount of time for the signatures to be
    downloaded (as much as 10 minutes). This download process is
    initiated by the line <code class="literal">download micro-updates before init =
    yes</code> in the <code class="filename">license.cfg</code> file. It is
    not recommended that this option be disabled.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cloudmark.configuration"></a>71.18.1. Configuration</h3></div></div></div>
<p>
      Validation modules can be loaded passively, in which case the
      validation system will not call the SMTP transaction hooks defined
      by the module. When a module is loaded in passive mode, inbound
      messages will not be virus scanned unless you explicitly call the
      appropriate Lua action. To load a module passively, set the
      <code class="option">enabled</code> option to <code class="literal">false</code>.
    </p>
<div class="example">
<a name="example.cloudmark.3.2"></a><p class="title"><b>Example 71.29. cloudmark Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
# alternative configuration for Lua operation
# note that there is no instance name
cloudmark {
  enabled = false
  MinimumScore = 80
}</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
        This module is a singleton and is declared without an instance
        name. Also, you must load this module with
        <code class="option">enabled</code> set to <code class="literal">false</code> (as
        shown in <a class="xref" href="modules.cloudmark.php#example.cloudmark.3.2" title="Example 71.29. cloudmark Configuration">Example 71.29, “cloudmark Configuration”</a>) and use policy
        scripts to scan mail. Messages will not be scanned by default.
      </p>
</div>
<p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          Max_Body_Length
        </span></dt>
<dd><p>
            The maximum amount of the body to read for processing (in
            bytes).
          </p></dd>
<dt><span class="term">
          MinimumScore
        </span></dt>
<dd><p>
            A threshold past which a message will be tagged as spam.
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
            generated and passed to the module. This rendered version of
            the message does not include SMTP wrapping (hence, no
            dot-stuffing or SMTP terminator), but does include any
            modifications by the policy scripts. Cloudmark may also use
            any headers added to the message to perform per-customer
            processing; for example, a customer may want to treat some
            ESP mail as spam based on the presence of custom headers.
          </p>
<p>
            To summarize:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                use_wire_rep = <code class="literal">true</code>: no modifications
                will be passed to Cloudmark
              </p></li>
<li class="listitem"><p>
                use_wire_rep = <code class="literal">false</code>: modifications
                will be passed to Cloudmark
              </p></li>
</ul></div>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cloudmark.cartridge"></a>71.18.2. Cartridge Configuration and Momentum</h3></div></div></div>
<p>
      If the following variables are not set in Cloudmark's
      <code class="filename">cartridge.cfg</code> file, then virus results are
      not properly returned to Momentum. Use the following settings:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="option">favor analysis over speed</code> =
          <code class="literal">yes</code>
        </p></li>
<li class="listitem"><p>
          <code class="option">micro-update signature type</code> =
          <code class="literal">comprehensive_sender_rep.4</code> or
          <code class="literal">comprehensive.4</code>
        </p></li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cloudmark.context.variables"></a>71.18.3. Message Context Variables</h3></div></div></div>
<p>
      The cloudmark module sets the following message context
      parameters:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          cmae-score
        </span></dt>
<dd><p>
            The Cloudmark authority score for the message, a number
            between 0 and 100. The higher the number, the more certain
            the engine is that the mail is spam.
          </p></dd>
<dt><span class="term">
          cmae-isspam
        </span></dt>
<dd><p>
            If <code class="literal">MinimumScore</code> is set, the
            <code class="option">cmae-isspam</code> is set to
            <code class="literal">true</code> indicating that the engine has
            determined the message is spam. No action is directly taken
            on the message; that is left to the user to do using a
            policy script.
          </p></dd>
<dt><span class="term">
          cmae-category
        </span></dt>
<dd><p>
            The category assigned to the message by the Cloudmark
            Authority
          </p></dd>
<dt><span class="term">
          cmae-subcategory
        </span></dt>
<dd><p>
            The sub-category assigned to the message by the Cloudmark
            Authority
          </p></dd>
<dt><span class="term">
          cmae-rescan
        </span></dt>
<dd><p>
            The rescan flag. If this flag is set to
            <code class="literal">‘1’</code>, the email would benefit from a
            rescan.
          </p></dd>
<dt><span class="term">
          cmae-analysis
        </span></dt>
<dd><p>
            The Cloudmark Authority analysis header
          </p></dd>
<dt><span class="term">
          cmae-category-desc
        </span></dt>
<dd><p>
            The Cloudmark category name
          </p></dd>
<dt><span class="term">
          cmae-subcategory-desc
        </span></dt>
<dd><p>
            The Cloudmark subcategory name
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cloudmark.lua.functions"></a>71.18.4. Lua Functions</h3></div></div></div>
<p>
      This module makes the Lua functions
      <code class="function">msys.cloudmark.score</code> and
      <code class="function">msys.cloudmark.analyze</code> available. For a
      description of how these functions are used, see
      <a class="xref" href="lua.ref.msys.cloudmark.score.php" title="msys.cloudmark.score"><span class="refentrytitle">msys.cloudmark.score</span></a> and
      <a class="xref" href="lua.ref.msys.cloudmark.analyze.php" title="msys.cloudmark.analyze"><span class="refentrytitle">msys.cloudmark.analyze</span></a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.cloudmark.console"></a>71.18.5. Console Commands</h3></div></div></div>
<p>
      The cloudmark module can be controlled through the
      <code class="literal">ec_console</code>. The following command is available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          cloudmark version
        </span></dt>
<dd>
<p>
            This command outputs version information for the Cloudmark
            engine, for example:
          </p>
<pre class="screen">
10:47:35 /tmp/2025&gt; cloudmark version
CmaeVersion = "2.0.3.29"
CmaeCartridgeVersion = "3046.2.0.23"
</pre>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp20416016"></a>71.18.6. Working with the Cloudmark ActiveFilter</h3></div></div></div>
<p>
      This describes how you can configure Momentum to communicate with
      the Cloudmark ActiveFilter MSI.
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
          Configure Momentum's
          <a class="link" href="modules.maildir.php" title="71.46. maildir – Maildir Delivery Support">maildir</a> module. The
          Cloudmark ActiveFilter MSI consumes this maildir.

          </p>
<div class="example">
<a name="example.cloudmark.activefilter"></a><p class="title"><b>Example 71.30. Configuring the maildir module for use with ActiveFilter</b></p>
<div class="example-contents"><pre class="programlisting">
maildir "maildir1" {
  basedir = "/var/spool/ecelerity/msi_maildir"
  dirmode = 775
  filemode = 664
  create_users = true
  domain_in_path = true
  all_domains = false
  domains = ( "msi.local" )
}
</pre></div>
</div>
<p><br class="example-break">
        </p>
</li>
<li class="listitem">
<p>
          Create the directory that you defined in the
          <code class="option">basedir</code> option (in the example above,
          <code class="literal">/var/spool/ecelerity/msi_maildir</code>) and give
          it the same ownership as the owner running the
          <code class="literal">ecelerity</code> process. This will normally be
          <code class="literal">ecuser</code>.
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            Be sure to create this directory with the same permissions
            as defined in the <code class="option">dirmode</code> option.
          </p>
</div>
</li>
<li class="listitem">
<p>
          Write Lua policy that writes specially formatted email
          messages with XML in the body to the configured maildir.

          </p>
<div class="example">
<a name="idp20427536"></a><p class="title"><b>Example 71.31. Lua Policy for use with ActiveFilter</b></p>
<div class="example-contents"><pre class="programlisting">
require("msys.core");
require("msys.cloudmark");
require("msys.extended.message");
require("msys.extended.vctx");
 
local mod = {};
 
function mod:init()
  
  msys.cloudmark.set_af_mode_movemsg("Inbox", "Spam", "no");
  msys.cloudmark.set_af_msi_address("msi@msi.local");
  
  return 0;
end
 
function mod:validate_rcptto(msg, s, ac, vctx)
  local localpart = vctx:get(msys.core.VCTX_MESS, "rcptto_localpart");
  local domain = vctx:get(msys.core.VCTX_MESS, "rcptto_domain");
  msys.cloudmark.add_af_data(localpart .. "@" .. domain,
                             { custom_key = "custom_value" });
  return msys.core.VALIDATE_CONT;
end
 
function mod:validate_data(msg, ac, vctx)

  -- Set the ActiveFilter score threshold
 
  local score = msys.cloudmark.score_af(msg, ac, vctx, 90);
  return msys.core.VALIDATE_CONT;
end
 
msys.registerModule("af_test", mod);
      </pre></div>
</div>
<p><br class="example-break">
        </p>
</li>
<li class="listitem">
<p>
          Set the AF mode by invoking one of the following functions:

          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                <a class="xref" href="lua.ref.msys.cloudmark.set_af_mode_discard.php" title="msys.cloudmark.set_af_mode_discard"><span class="refentrytitle">msys.cloudmark.set_af_mode_discard</span></a>
              </p></li>
<li class="listitem"><p>
                <a class="xref" href="lua.ref.msys.cloudmark.set_af_mode_keep.php" title="msys.cloudmark.set_af_mode_keep"><span class="refentrytitle">msys.cloudmark.set_af_mode_keep</span></a>
              </p></li>
<li class="listitem"><p>
                <a class="xref" href="lua.ref.msys.cloudmark.set_af_mode_movemsg.php" title="msys.cloudmark.set_af_mode_movemsg"><span class="refentrytitle">msys.cloudmark.set_af_mode_movemsg</span></a>
              </p></li>
</ul></div>
<p>
        </p>
</li>
<li class="listitem"><p>
          Set the address for the ActiveFilter MSI Messages using the
          <a class="xref" href="lua.ref.msys.cloudmark.set_af_msi_address.php" title="msys.cloudmark.set_af_msi_address"><span class="refentrytitle">msys.cloudmark.set_af_msi_address</span></a>
          function. This should correspond to the maildir defined in the
          <code class="literal">maildir</code> module declaration.
        </p></li>
<li class="listitem"><p>
          Set any required custom values using the
          <a class="xref" href="lua.ref.msys.cloudmark.add_af_data.php" title="msys.cloudmark.add_af_data"><span class="refentrytitle">msys.cloudmark.add_af_data</span></a> function;
          for example, the actual account name that you may have queried
          from a directory. By default, Momentum uses the recipient
          address if a custom value is not set.
        </p></li>
<li class="listitem">
<p>
          Set the ActiveFilter score threshold using the
          <a class="xref" href="lua.ref.msys.cloudmark.score_af.php" title="msys.cloudmark.score_af"><span class="refentrytitle">msys.cloudmark.score_af</span></a> function. If
          a message is originally marked as "not spam" and the message
          fingerprint exceeds this score, then it will trigger an
          ActiveFilter update. Similarly, ActiveFilter will be updated
          if a message is marked as spam but is later re-classified as
          "not spam." see .
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            The latter case is only significant in the MOVEMSG
            ActiveFilter mode. If you are discarding messages then there
            is no action to take in the false positive case.
          </p>
</div>
</li>
</ol></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.clamav.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.cluster.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.17. clamav – ClamAV </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.19. cluster – Cluster</td>
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
