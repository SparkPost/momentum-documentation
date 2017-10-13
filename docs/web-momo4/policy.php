<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 62. Implementing Policy with Momentum</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.policy.php" title="Part IX. Writing Policy">
<link rel="prev" href="p.policy.php" title="Part IX. Writing Policy">
<link rel="next" href="implementing.policy.scriptlets.php" title="62.2. Policy Scriptlets">
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
<tr><th colspan="3" align="center">Chapter 62. Implementing Policy with Momentum</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="p.policy.php">Prev</a> </td>
<th width="60%" align="center">Part IX. Writing Policy</th>
<td width="20%" align="right"> <a accesskey="n" href="implementing.policy.scriptlets.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="policy"></a>Chapter 62. Implementing Policy with Momentum</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="policy.php#policy.validation">62.1. Validation and the Validation Context</a></span></dt>
<dt><span class="section"><a href="implementing.policy.scriptlets.php">62.2. Policy Scriptlets</a></span></dt>
</dl>
</div>
<a class="indexterm" name="idp6950352"></a><p>
    In order to effectively implement your site policy, it is important
    to understand how mail transits through Momentum and when the policy
    is applied. <a class="xref" href="policy.php#policy.flow-diagram" title="Figure 62.1. Momentum Policy Phases">Figure 62.1, “Momentum Policy Phases”</a> provides
    visual representations of mail injected via HTTP and SMTP.
    Additional policy information is provided after the diagram. For
    more information about the other mail transmission stages, see
    <a class="xref" href="loam.php" title="Chapter 2. Life of A Message">Chapter 2, <i>Life of A Message</i></a>.
  </p>
<div class="figure">
<a name="policy.flow-diagram"></a><p class="title"><b>Figure 62.1. Momentum Policy Phases</b></p>
<div class="figure-contents"><div class="mediaobject"><img src="images/policy_phases.png"></div></div>
</div>
<br class="figure-break"><p>
    All messages go through validation checks, which can be active (such
    as terminating the connection) or passive (such as collecting
    information).
  </p>
<p>
    Messages pass through policy phases (or hook points), which enable
    you to define actions that will be executed at various points during
    validation. These actions can be related to decisions around message
    acceptance, modifying the message, or applying logic based on a
    property of the message. Policy can be defined to act on the
    connection or message associated with the phase of an SMTP session.
    All policy is applied to each message entering Momentum, and all
    policy decisions are made before Momentum accepts the message for
    downstream delivery.
  </p>
<p>
    The policy phases differ for each type of injection. For example,
    messages injected via HTTP pass through:

    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
          msg_gen_data_spool (message modification is generally done in
          this phase)
        </p></li>
<li class="listitem"><p>
          set_binding
        </p></li>
<li class="listitem"><p>
          final_validation
        </p></li>
</ol></div>
<p>

    While messages injected via SMTP pass through:

    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
          connect
        </p></li>
<li class="listitem"><p>
          ehlo
        </p></li>
<li class="listitem"><p>
          mailfrom
        </p></li>
<li class="listitem"><p>
          rcptto
        </p></li>
<li class="listitem"><p>
          data
        </p></li>
<li class="listitem"><p>
          dataspool
        </p></li>
<li class="listitem"><p>
          data_spool_each_rcpt (message modification is generally done
          in this phase)
        </p></li>
<li class="listitem"><p>
          set_binding
        </p></li>
<li class="listitem"><p>
          final_validation
        </p></li>
</ol></div>
<p>
  </p>
<p>
    Momentum then assigns the message to a binding (i.e., an outgoing IP
    address used to send a message) and writes it to disk (in the
    <code class="filename">/var/spool/ecelerity</code> directory).
  </p>
<p>
    If the message does not pass the validation checks, it is rejected
    due to policy.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="policy.validation"></a>62.1. Validation and the Validation Context</h2></div></div></div>
<p>
      The validation process in Momentum is extensible, designed to
      consist of any number of disparate modules provided either by
      Message Systems, a third-party vendor, or developed directly by a
      customer. Momentum provides a validation context which allows
      validation modules to store and share validation information over
      the various policy phases. The final decision about what to do
      with a message (discard, reject, quarantine, modify, forward etc.)
      can be made using policy scripts acting on the same connection or
      message but executing in different phases.
    </p>
<p>
      The validation context contains two dictionaries of information,
      referred to as the <code class="literal">connection context</code> and
      <code class="literal">message context</code> respectively. The former holds
      information associated with the remote client connected to
      Momentum, whereas the latter holds information about the current
      message. The message context is emptied for each message
      transmitted on a given connection, whereas the connection context
      retains its information for the lifetime of that connection.
    </p>
<p>
      A number of context variables are pre-defined by Momentum,
      depending on how the connection was made, and what modules are
      loaded. A complete list of pre-defined context variables can be
      found in <a class="xref" href="policy.context.variables.php" title="Chapter 63. Validation Context Variables">Chapter 63, <i>Validation Context Variables</i></a>. In addition,
      the <a class="xref" href="conf.ref.context.php" title="context"><span class="refentrytitle">context</span></a> option provides a
      mechanism to set arbitrary connection context key value pairs.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="policy.context-based-on-ip"></a>62.1.1. Setting Context Based on Connecting IP</h3></div></div></div>
<p>
        It is often useful to bypass anti-spam checks when you know that
        the sender is a machine on your network. It could be either a
        local user or an internal mail exchange machine that is merely
        forwarding the mail on via Momentum. In the former case, it is
        not good for your own users not to be able to mail out of your
        network, and in the latter case, it does not help you if you are
        tarpitting your own mail infrastructure if spam has managed to
        leak in.
      </p>
<p>
        The example ESMTP_Listener configuration shown in
        <a class="xref" href="policy.php#policy.context-based-on-ip3.ex" title="Example 62.1. Connection Context Variables in ESMTP_Listener">Example 62.1, “Connection Context Variables in ESMTP_Listener”</a> will
        set <code class="literal">my_key</code> and
        <code class="literal">my_other_key</code> in the <code class="literal">connection
        context</code> for machines connecting from the netblock
        0.0.0.0/0 (this matches all connections). It will set the
        <code class="literal">trusted_mx</code> connection context for machines
        connecting from the 10.0.0.0/32 network, which is assumed to be
        a trusted internal network. You can set any arbitrary context
        information using this mechanism.
      </p>
<div class="example">
<a name="policy.context-based-on-ip3.ex"></a><p class="title"><b>Example 62.1. Connection Context Variables in ESMTP_Listener</b></p>
<div class="example-contents"><pre class="programlisting">
ESMTP_Listener {
   Listen "*:25" {
      Peer "0.0.0.0/0" {
         context = [
           my_key = "my_value"
           my_other_key = "my_other_value"
         ]

      }
      Peer "10.0.0.0/32" {
         context = [
            trusted_mx = "yes"
         ]
      }
   }
}
</pre></div>
</div>
<br class="example-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="policy.bypass"></a>62.1.2. Bypassing Validation Modules</h3></div></div></div>
<p>
        To bypass validation modules, add a context variable to your
        listener by creating a context variable with the name
        <code class="literal">__bypass_<em class="replaceable"><code>module_name</code></em></code>
        and setting its value to <code class="literal">true</code>. For example,
        to bypass the spf_v1 module create a variable called
        <code class="literal">__bypass_spf_v1</code> and set its value to
        <code class="literal">true</code>.
      </p>
<p>
        To determine whether a module is a validation module, see
        <a class="xref" href="modules.summary.all.modules.php" title="Chapter 65. Modules Summary">Chapter 65, <i>Modules Summary</i></a>.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="p.policy.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.policy.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="implementing.policy.scriptlets.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Part IX. Writing Policy </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 62.2. Policy Scriptlets</td>
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
