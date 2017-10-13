<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 2. Life of A Message</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.intro.php" title="Part I. Introduction to Momentum">
<link rel="prev" href="components.php" title="Chapter 1. Components">
<link rel="next" href="roles_behaviors.php" title="Chapter 3. Roles and Behaviors">
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
<tr><th colspan="3" align="center">Chapter 2. Life of A Message</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="components.php">Prev</a> </td>
<th width="60%" align="center">Part I. Introduction to Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="roles_behaviors.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="loam"></a>Chapter 2. Life of A Message</h2></div></div></div>
<div class="simplesect">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="loam.inject"></a>Inject SMTP Messages or Transmissions</h2></div></div></div>
<p>
      Messages are injected into Momentum 4.x either through SMTP or
      HTTP. SMTP injection requires you to have a fully-formed message
      available for injection. HTTP injection uses a transmission JSON
      object submitted through Momentum via the Transmissions API.
      Transmissions specify a content template and a list of recipients,
      both of which may be previously stored or explicitly included in
      the transmission.
    </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="loam.image"></a></h2></div></div></div>
<div class="figure">
<a name="life_of_a_message.image"></a><p class="title"><b>Figure 2.1. Life of A Message</b></p>
<div class="figure-contents"><div class="mediaobject"><img src="images/life_of_a_message.png" alt="Life of A Message"></div></div>
</div>
<br class="figure-break">
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="loam.generate.message"></a>Generate Message</h2></div></div></div>
<p>
      Momentum will acknowledge that it accepted a transmission
      submitted via HTTP with an “HTTP 200” response. For
      transmissions with multiple recipients, message generation (that
      is, a mail merge) is performed after the submission. During the
      mail merge, Momentum will generate messages that include
      personalized substitution data on a per-recipient basis.
    </p>
<p>
      For single recipient transmissions, the message is generated
      within the HTTP request (default behavior). If an individual
      recipient’s message fails during message generation, Momentum
      reports the failure via the Event Hose.
    </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="loam.apply.policy"></a>Apply Policy</h2></div></div></div>
<p>
      Messages injected over SMTP or generated by Momentum pass through
      policy phases (or hook points) such as
      <code class="literal">set_binding</code>,
      <code class="literal">final_validation</code>, etc. Momentum then assigns
      the message to a binding (i.e., an outgoing IP address used to
      send a message). Once the message is accepted via SMTP or
      generated following a transmission submission, Momentum writes it
      to disk (in the <code class="filename">/var/spool/ecelerity</code>
      directory). If the message does not pass the validation checks, it
      is rejected due to policy.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        The message will still remain in memory; it is only written to
        disk as a backup in case of a failure or significant delay
        issues.
      </p>
</div>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="loam.queue"></a>Queue</h2></div></div></div>
<p>
      Momentum adds messages to the binding/domain active queues. Every
      active binding on the Momentum servers and every domain (which
      will receive the message) create an active queue. For example, if
      there are 20 IPs sending to 100 domains, then there would be 2,000
      active queues.
    </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="loam.delivery"></a>Delivery</h2></div></div></div>
<p>
      Messages in the active queue will try to communicate with the
      recipient domains. Each active queue will connect to the remote
      host for delivery of the message.
    </p>
<p>
      Adaptive Delivery monitors everything associated with attempts to
      deliver the message, evaluates feedback, and makes adjustments to
      the traffic shaping options in the active queues to ensure the
      messages are delivered.

      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            Negative feedback will cause traffic shaping options to be
            adjusted for fewer connections and fewer messages being
            sent.
          </p></li>
<li class="listitem"><p>
            No negative feedback will result in adjustments for
            increased connections and more messages being sent.
          </p></li>
</ul></div>
<p>

      The ISP sends a “250 OK” after the messages have been accepted
      for delivery.
    </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="loam.engagement.tracking"></a>Engagement Tracking</h2></div></div></div>
<p>
      Momentum uses Engagement Tracking to track opens and clicks. This
      activity occurs on the Platform node. Opens and clicks for the
      campaign can then be monitored and reviewed via the web-based UI,
      Metrics API, and Webhooks API.
    </p>
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="loam.intro.reporting"></a>Reporting</h2></div></div></div>
<p>
      The event hose reports all aspects of the message disposition to
      the Analytics database, including any messages generated via HTTP
      injection.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="components.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.intro.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="roles_behaviors.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 1. Components </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 3. Roles and Behaviors</td>
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
