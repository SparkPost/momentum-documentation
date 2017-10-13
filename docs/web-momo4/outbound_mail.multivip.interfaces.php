<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>25.3. MultiVIP© Interfaces</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="outbound_mail.php" title="Chapter 25. Configuring Outbound Mail Delivery">
<link rel="prev" href="outbound_mail.prohibited.hosts.php" title="25.2. Prohibited_Hosts">
<link rel="next" href="outbound_mail.traffic.shaping.php" title="25.4. Throttling and Traffic Shaping">
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
<tr><th colspan="3" align="center">25.3. MultiVIP© Interfaces</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="outbound_mail.prohibited.hosts.php">Prev</a> </td>
<th width="60%" align="center">Chapter 25. Configuring Outbound Mail Delivery</th>
<td width="20%" align="right"> <a accesskey="n" href="outbound_mail.traffic.shaping.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="outbound_mail.multivip.interfaces"></a>25.3. MultiVIP© Interfaces</h2></div></div></div>
<a class="indexterm" name="idp3618464"></a><div class="mediaobject"><img src="images/multivip.png"></div>
<p>
    MultiVIP© technology allows Momentum to transparently deliver
    different messages from different IP addresses. This is most
    commonly used when two or more customers are sending mail through a
    single Momentum instance, and it is desirable (for quality of
    service reasons) for messages from each client to originate from
    unique IP addresses that have been assigned to them.
  </p>
<p>
    Many ISPs enforce policies on an IP level. This means that if a
    message from IP address 1.2.3.4 violates the terms of the ISP's
    service, the ISP may choose to stop accepting mail from that IP
    address. Obviously, it is undesirable for a foreign decision
    refusing one client's emails to degrade the quality of service of an
    unrelated client. By assigning client 1 the IP address 1.2.3.4 and
    client 2 the IP address 1.2.3.5 and dictating that all messages from
    each client leave Momentum from their assigned IP address, the
    likelihood of policy enforcement against client 1 inadvertently
    effecting client 2 is drastically reduced. MultiVIP© is a
    mechanism for adding IP addresses for transit to Momentum and
    specifying which messages should leave the system from each IP
    address.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="outbound_mail.multivip.interfaces.configuration"></a>25.3.1. Configuration</h3></div></div></div>
<p>
      Setting up a MultiVIP© interface is a two-step process:
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
          In your configuration file, use the <code class="option">bindings</code>
          stanza to declare the interfaces to bind to (called
          "Bindings"). A binding declaration is required for every
          interface to which you want to bind messages. For details, see
          <a class="xref" href="conf.ref.binding.php" title="binding"><span class="refentrytitle">binding</span></a>.
        </p></li>
<li class="listitem"><p>
          Set the rules or "policy" to inform Momentum as to which
          messages should transit which bindings. For details, see
          <a class="xref" href="policy.php" title="Chapter 62. Implementing Policy with Momentum">Chapter 62, <i>Implementing Policy with Momentum</i></a>.
        </p></li>
</ol></div>
<p>
      Messages that are not assigned to a specific binding will fallback
      to the <code class="literal">default</code> binding. Ensure that this
      fallback binding meets your needs. For details, see
      <a class="xref" href="conf.ref.binding.php#conf.ref.binding.default" title="default Binding">the section called “<code class="literal">default</code> Binding”</a>.
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        When using bindings, Momentum binds the local side of SMTP
        connections to the IP address specified. This can potentially
        impact deliverability if the local source IP address has no
        route to the destination IP address.
      </p>
<p>
        For example, if the delivery of a message requires contacting a
        machine on a private network (for a multi-homed machine) and the
        global and all explicit bindings are specified as public IP
        addresses, it is likely that these internally destined messages
        will be undeliverable.
      </p>
<p>
        Binding names are case-sensitive. Spaces and colons are not
        allowed in binding names.
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="outbound_mail.multivip.interfaces.removal"></a>25.3.2. Removing a Binding</h3></div></div></div>
<p>
      When you are removing a binding that is in use, do the following:
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
          Examine the binding assignment to determine if there are any
          policy settings associated with the binding.
        </p></li>
<li class="listitem"><p>
          If there are no policy settings, suspend the binding and apply
          the configuration changes. For information about suspending a
          binding, see
          <a class="xref" href="conf.ref.suspend_delivery.php" title="suspend_delivery"><span class="refentrytitle">suspend_delivery</span></a>.
        </p></li>
<li class="listitem"><p>
          Examine the mail queue. If there is mail for the suspended
          binding, reassign it to another binding. If the queued
          messages are not reassigned to another binding, they will go
          to the <code class="literal">default</code> binding. For more
          information, see <a class="xref" href="console_commands.showqueue.php" title="showqueue"><span class="refentrytitle">showqueue</span></a>
          and
          <a class="xref" href="console_commands.reroute_queue.php" title="reroute queue"><span class="refentrytitle">reroute queue</span></a>.
        </p></li>
<li class="listitem"><p>
          Once all reassigned messages are out of the queue, restart
          ecelerity to fully remove the binding from the configuration.
        </p></li>
</ol></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="outbound_mail.prohibited.hosts.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="outbound_mail.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="outbound_mail.traffic.shaping.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">25.2. Prohibited_Hosts </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 25.4. Throttling and Traffic Shaping</td>
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
