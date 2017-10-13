<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.10. beik – Symantec Brightmail™ Engine Integration Kit</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.auth_radius.php" title="71.9. auth_radius – RADIUS based SMTP Authentication">
<link rel="next" href="modules.bind_address_secondary.php" title="71.11. bind_address_secondary – Dual-stack IPv4/IPv6 Support">
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
<tr><th colspan="3" align="center">71.10. beik – Symantec <span class="trademark">Brightmail</span>™ Engine
      Integration Kit</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.auth_radius.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.bind_address_secondary.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.beik"></a>71.10. beik – Symantec <span class="trademark">Brightmail</span>™ Engine
      Integration Kit</h2></div></div></div>
<a class="indexterm" name="idp19981952"></a><p>
    The beik module is an anti-spam module that provides support for the
    Symantec <span class="trademark">Brightmail</span>™ Engine Integration Kit
    (BEIK). Because BEIK is an in-process version of the brightmail
    module, it provides superior performance.
  </p>
<p>
    If you intend to use this module, be sure to choose it during
    installation. The beik module is licensed by Symantec. Register this
    license as instructed by Symantec. Momentum supports version
    <code class="literal">6.3</code> of Brightmail Engine Integration kit. For
    more information, see <a class="xref" href="post_installation.php#install.additional.packages" title="12.1. Installing Partner Modules">Section 12.1, “Installing Partner Modules”</a>.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Upon installation, this module applies the "Service Provider Full"
      rule set. Previously the "Service Provider Express" set was
      applied. If you are using a low-performance machine, you may wish
      to revert to the "Service Provider Express" rule set.
    </p>
</div>
<p>
    You must have a valid <code class="filename">cert.pem</code> file in place to
    use the beik module with Momentum. Take the following steps:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
        Get the
        <code class="filename"><em class="replaceable"><code>file_name</code></em>.slf</code>
        file from Symantec.
      </p></li>
<li class="listitem">
<p>
        To create a <code class="filename">cert.pem</code> file, run the
        following command as root:

</p>
<pre class="programlisting">
shell&gt; /opt/msys/3rdParty/symantec/beik/sbin/register        \
          -c /opt/msys/3rdParty/symantec/beik/etc/bmiconfig.xml \
          -l <em class="replaceable"><code>file_name</code></em>.slf
</pre>
<p>
      </p>
</li>
<li class="listitem">
<p>
        Stop ecelerity by issuing the command:

</p>
<pre class="programlisting">
shell&gt; /etc/init.d/ecelerity stop
</pre>
<p>
      </p>
</li>
<li class="listitem"><p>
        Add a beik stanza to your <code class="filename">ecelerity.conf</code>
        file and commit this changed file to the repository as described
        in <a class="xref" href="conf.overview.php#conf.manual.changes" title="15.1.4. Changing Configuration Files">Section 15.1.4, “Changing Configuration Files”</a>.
      </p></li>
<li class="listitem">
<p>
        Start BEIK by issuing the command:

</p>
<pre class="programlisting">
shell&gt; /etc/init.d/msys-beik start
</pre>
<p>
      </p>
</li>
<li class="listitem">
<p>
        Restart ecelerity by issuing the command:

</p>
<pre class="programlisting">
shell&gt; /etc/init.d/ecelerity start
</pre>
<p>
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          You must restart ecelerity for these changes to have effect.
          Using <span class="command"><strong>config reload</strong></span> is ineffective here.
        </p>
</div>
</li>
</ol></div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.beik.configuration"></a>71.10.1. Configuration</h3></div></div></div>
<p>
      Unlike other validation modules, BEIK is always loaded in passive
      mode. When a module is loaded in passive mode, inbound messages
      will not be virus scanned unless you explicitly call the
      appropriate scripting action.
    </p>
<p>
      The following is an example configuration:
    </p>
<div class="example">
<a name="idp20003664"></a><p class="title"><b>Example 71.18. beik Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
beik {
  use_wire_rep = true
  bmiconfig_path = "/opt/msys/3rdParty/symantec/beik/etc/bmiconfig.xml"
  header_padding = 512
}</pre></div>
</div>
<br class="example-break"><p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          accum_pool
        </span></dt>
<dd><p>
            Which thread pool to use when accumulating data against the
            scanned message. Default value is the <code class="literal">IO</code>
            thread pool.
          </p></dd>
<dt><span class="term">
          bmiconfig_path
        </span></dt>
<dd><p>
            Indicates the full path to the BEIK configuration file
            <code class="filename">bmiconfig.xml</code>. Default value is
            <code class="filename">/opt/msys/3rdParty/symantec/beik/etc/bmiconfig.xml</code>.
            For more information about this file, see the documentation
            provided by Symantec.
          </p></dd>
<dt><span class="term">
          header_padding
        </span></dt>
<dd><p>
            When <code class="option">use_wire_rep</code> is not or cannot be used,
            the number assigned to <code class="option">header_padding</code> is
            added as padding to an internal allocation to avoid an
            additional call to <code class="function">realloc</code>. Sizing for
            this is guided by approximate size of the trace headers
            added by <span class="emphasis"><em>this</em></span> MTA. The value of
            <code class="option">header_padding</code> should be larger than those
            trace headers, otherwise the internal memory buffers may
            need to be <code class="function">realloc</code>'d. Default value is
            <code class="literal">512</code>.
          </p></dd>
<dt><span class="term">
          scan_pool
        </span></dt>
<dd><p>
            Which thread pool to use when scanning a message. Default
            value is the <code class="literal">CPU</code> thread pool. For more
            information about defining thread pools, see
            <a class="xref" href="conf.ref.threadpool.php" title="threadpool"><span class="refentrytitle">threadpool</span></a>.
          </p></dd>
<dt><span class="term">
          use_wire_rep
        </span></dt>
<dd>
<p>
            If use_wire_rep = <code class="literal">true</code> (the default
            setting) and the message is “small” (i.e., it is less
            than <code class="option">large_message_threshold</code>), then a
            dot-stuffed representation of the message is held entirely
            in memory and can be used as received, rather than loading
            pieces of the message as needed.
          </p>
<p>
            If use_wire_rep = <code class="literal">false</code>, or if the
            message is “large,” then a dot-unstuffed representation
            of the message will be generated and passed to the module.
            This involves more memory allocations (malloc) and copying
            of data (memcpy).
          </p>
<p>
            To summarize:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                use_wire_rep = <code class="literal">true</code> and small
                message: no modifications will be passed to BEIK
              </p></li>
<li class="listitem"><p>
                use_wire_rep = <code class="literal">true</code> and large
                message: modifications will be passed to BEIK
              </p></li>
<li class="listitem"><p>
                use_wire_rep = <code class="literal">false</code>: modifications
                will be passed to BEIK
              </p></li>
</ul></div>
<p>
            All messages that pass through the system are stored on disk
            dot-stuffed. This provides a more efficient transfer by
            eliminating the need to decode and then re-encode a message
            before it is sent.
          </p>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.beik.lua.functions"></a>71.10.2. Lua Functions</h3></div></div></div>
<p>
      This module makes the Lua function
      <code class="function">msys.symantec_beik.scan</code> available. For a
      description of how this function is used, see
      <a class="xref" href="lua.ref.msys.symantec_beik.scan.php" title="msys.symantec_beik.scan"><span class="refentrytitle">msys.symantec_beik.scan</span></a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.beik.ipv6"></a>71.10.3. beik and IPv6</h3></div></div></div>
<p>
      The beik module does <span class="bold"><strong>not</strong></span>
      currently support IPv6 addresses.
    </p>
<p>
      If you attempt to inject and scan a message with an IPv6 address
      you will see an error in the panic log similar to the following:
    </p>
<pre class="programlisting">
1337205547:BEIK: bmiProcessConnection() fatal error [0x3000006] client: The API received an invalid argument
</pre>
<p>
      There is no other indication of an error.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.beik.console"></a>71.10.4. Console Commands</h3></div></div></div>
<p>
      The beik module can be controlled through the
      <code class="literal">ec_console</code>. The following command is available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          beik reload
        </span></dt>
<dd><p>
            Use this command to reload the beik module. You do not need
            to manually invoke this command; it is triggered by the
            updates service, msys-beik.
          </p></dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.auth_radius.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.bind_address_secondary.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.9. auth_radius – RADIUS based SMTP Authentication </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.11. bind_address_secondary – Dual-stack IPv4/IPv6 Support</td>
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
