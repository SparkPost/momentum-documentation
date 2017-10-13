<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Glossary</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="index.php" title="Momentum 4 Reference Manual">
<link rel="prev" href="libedit.extended.php" title="D.2. Extended Commands">
<link rel="next" href="copyrights.php" title="Appendix E. Copyright Notices">
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
<tr><th colspan="3" align="center">Glossary</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="libedit.extended.php">Prev</a> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="copyrights.php">Next</a>
</td>
</tr>
</table></div>
<div class="glossary">
<div class="titlepage"><div><div><h1 class="title">
<a name="glossary"></a>Glossary</h1></div></div></div>
<dl>
<dt>
<a name="gloss.amqp"></a><span class="glossterm">Advanced Message Queuing Protocol</span> (AMQP)</dt>
<dd class="glossdef"><p>
        AMQP is an open standard for message-oriented middleware used by
        Momentum 4. For more information see
        <a class="link" href="http://www.amqp.org/" target="_top">ampq.org</a>.
      </p></dd>
<dt>
<a name="gloss.aggregator"></a><span class="glossterm">Aggregator</span>
</dt>
<dd class="glossdef"><p>
        In a Momentum 4 cluster configuration, an aggregator or cluster
        aggregation node is a node used for cluster log aggregation. If
        you require log aggregation, you must install Momentum 4 on the
        aggregator first. An aggregator is referred to as a Platform
        node but it does not perform any messaging functions.
      </p></dd>
<dt>
<a name="gloss.campaign"></a><span class="glossterm">Campaign</span>
</dt>
<dd class="glossdef"><p>
        All messages based on a single piece of copy. A campaign
        contains recipients and template information. You may have a
        campaign group that contains related messages.
      </p></dd>
<dt>
<a name="gloss.click.tracking"></a><span class="glossterm">Click Tracking</span>
</dt>
<dd class="glossdef"><p>
        Tracking of clicks on the links within a message. In order to
        track clicks set the <code class="literal">click_tracking</code> field of
        the transmission object to <code class="literal">true</code>.
      </p></dd>
<dt>
<a name="gloss.content"></a><span class="glossterm">Content</span>
</dt>
<dd class="glossdef"><p>
        A component of the template that can include: html, text, SMS
        MMS rich media, push payload, or other recipient-viewable data.
      </p></dd>
<dt>
<a name="gloss.conversion"></a><span class="glossterm">Conversion</span>
</dt>
<dd class="glossdef"><p>
        When the recipient of a message performs the desired action;
        receiver goes beyond open and click.
      </p></dd>
<dt>
<a name="gloss.eec"></a><span class="glossterm">Email Experience Council</span> (EEC)</dt>
<dd class="glossdef"><p>
        The EEC is a global organization that strives to enhance the
        image of email marketing and communications, while actively
        advocating its importance to business. For more information see
        <a class="link" href="http://www.emailexperience.org/" target="_top">Email Experience
        Council</a>.
      </p></dd>
<dt>
<a name="gloss.injection.metadata"></a><span class="glossterm">Injection Metadata</span>
</dt>
<dd class="glossdef"><p>
        Key value pairs associated with an injection which are included
        in the event stream and are available for filtering or
        reporting. These key value pairs are also given to the
        substitution engine as a convenience to the customer (with
        recipient metadata taking precedence over injection metadata
        when there are conflicts).
      </p></dd>
<dt>
<a name="gloss.injection.substitution.data"></a><span class="glossterm">Injection Substitution Data</span>
</dt>
<dd class="glossdef"><p>
        Injection-specific JSON data which is supplied to the
        substitution engine. Recipient substitution data takes
        precedence over injection substitution data. Unlike metadata,
        substitution data is not included in any event streams and is
        not available for filtering or reporting.
      </p></dd>
<dt>
<a name="gloss-ip-warmup"></a><span class="glossterm">IP Warmup</span>
</dt>
<dd class="glossdef">
<p>
        The concept behind "IP Warmup" is that new IPs need to build a
        reputation with ISPs. For example, if you send 100,000 emails
        from a newly acquired IP address that has no history, most large
        ISPs will block email from this address. IP Warmup slowly
        increases the send rate on new IPs so that ISPs have time to
        gauge customer feedback. If there are minimal spam/abuse reports
        then the ISP will allow an increased send rate.
      </p>
<p>
        Sometimes an IP with a good reputation will accidentally send
        bad content and damage its own reputation. In such cases, it may
        be necessary to re-establish a good reputation by temporarily
        suspending sending, reducing the send rate, or by "re-warming"
        the IP address. With Momentum, this is achieved using the
        adaptive module, which automatically sets any new bindings to
        "zero days old" and then slowly increases the send rate unless
        it starts seeing negative feedback. If this happens, the adaptive
        module throttles or temporarily suspends the IP address according
        to internal rules. For more information about the adaptive module,
        see <a class="xref" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">Section 71.3, “adaptive – Adaptive Delivery”</a>.
      </p>
</dd>
<dt>
<a name="gloss.json"></a><span class="glossterm">JavaScript Object Notation</span> (JSON)</dt>
<dd class="glossdef"><p>
        JSON is a lightweight data interchange format. It is the input
        and output format used by the REST API.
      </p></dd>
<dt>
<a name="gloss.mime"></a><span class="glossterm">Multipurpose Internet Mail Extensions</span> (MIME)</dt>
<dd class="glossdef"><p>
        The standard that specifies the format of email messages so that
        they can be exchanged between different MTAs.
      </p></dd>
<dt>
<a name="gloss.open.tracking"></a><span class="glossterm">Open Tracking</span>
</dt>
<dd class="glossdef"><p>
        Track the opening of messages.
      </p></dd>
<dt>
<a name="gloss-p0f"></a><span class="glossterm">Passive operating system (OS) fingerprinting</span> (p0f)</dt>
<dd class="glossdef"><p>
        During network communication, passively collect information
        about the remote device with the intent of inferring the OS.
        Doing this makes improved TCP/IP communication possible. You
        must install the Policy Tools suite to enable p0f.
      </p></dd>
<dt>
<a name="gloss.quorum"></a><span class="glossterm">Quorum</span>
</dt>
<dd class="glossdef">
<p>
        In cluster configurations a quorum is the minimum number of
        active machines that will allow Momentum to continue
        functioning. Should any nodes go down, you need a quorum within
        both your Platform servers and within your Analytics servers in
        order for Momentum to continue functioning. For Momentum, 51% or
        more active nodes makes up a quorum.
      </p>
<p>
        Whenever quorum is lost and regained, the node(s) that lost
        quorum must inquire whether they have lost the jobs that they
        were previously working on. This is necessary to minimize the
        number of duplicate messages that are sent.
      </p>
<p>
        What constitutes a quorum has implications for redundancy. For
        example, you cannot support redundancy with only two Analytics
        and two Platform nodes. Should any one node go down, you will
        not have the 51% required for a quorum. Redundancy is only
        supported with clusters of three or more Analytics
        <span class="emphasis"><em>and</em></span> Platform nodes.
      </p>
</dd>
<dt>
<a name="gloss.raw.clicks"></a><span class="glossterm">Raw Clicks</span>
</dt>
<dd class="glossdef"><p>
        Sum of links clicked per recipient, over multiple recipients.
        For example, Recipient 1 clicks 1 link. Recipient 2 clicks 2
        different links. Recipient 3 clicks 5 different links (out of
        the 20 links in the message). That's a total of 8 Raw Clicks.
        Raw clicks are also known as "uncooked clicks".
      </p></dd>
<dt>
<a name="gloss.recipient.metadata"></a><span class="glossterm">Recipient Metadata</span>
</dt>
<dd class="glossdef"><p>
        Key value pairs associated with a recipient which are included
        in the event stream and are available for filtering/reporting.
        These key value pairs are also given to the substitution engine
        as a convenience to the customer.
      </p></dd>
<dt>
<a name="gloss.recipient.substitution.data"></a><span class="glossterm">Recipient Substitution Data</span>
</dt>
<dd class="glossdef"><p>
        Recipient-specific JSON data which is supplied to the
        substitution engine. Unlike metadata, substitution data is not
        included in any event streams and is not available for filtering
        or reporting.
      </p></dd>
<dt>
<a name="gloss.recipients"></a><span class="glossterm">Recipients</span>
</dt>
<dd class="glossdef"><p>
        Persons receiving a message. Typically information regarding
        recipients is extracted from a data store. Recipients are passed
        to the transmission API as JSON objects.
      </p></dd>
<dt>
<a name="gloss.rest"></a><span class="glossterm">Representational State Transfer</span> (REST)</dt>
<dd class="glossdef"><p>
        Web services available over HTTP. Using REST you can interact
        with Momentum 4 programmatically.
      </p></dd>
<dt>
<a name="gloss.rfc2821"></a><span class="glossterm">Request for Comments (RFC) 2821</span>
</dt>
<dd class="glossdef"><p>
        A self-contained specification of the basic protocol for the
        Internet electronic mail transport.
      </p></dd>
<dt>
<a name="gloss.rfc2822"></a><span class="glossterm">Request for Comments (RFC) 2822</span>
</dt>
<dd class="glossdef"><p>
        Specifies a syntax for text messages that are sent between
        computer users, within the framework of  "electronic mail"
        messages.
      </p></dd>
<dt>
<a name="gloss.send"></a><span class="glossterm">Send (Injection type)</span>
</dt>
<dd class="glossdef"><p>
        Message components (header, text, HTML, SMS, etc) submitted via
        API and Momentum will perform substitutions and assemble the
        multi-part MIME format.
      </p></dd>
<dt>
<a name="gloss.send.raw"></a><span class="glossterm">Send Raw (Injection type)</span>
</dt>
<dd class="glossdef"><p>
        Injecting a fully formed (multi-part MIME) message via an API
        (still subject to substitutions and tagging).
      </p></dd>
<dt>
<a name="gloss.send.template"></a><span class="glossterm">Send Template (Injection type)</span>
</dt>
<dd class="glossdef"><p>
        Generate messages by using an API that injects structured data
        to be used with a stored template.
      </p></dd>
<dt>
<a name="gloss.smtp.injection"></a><span class="glossterm">SMTP Injection</span>
</dt>
<dd class="glossdef"><p>
        Injecting a message via SMTP (rather than a template).
      </p></dd>
<dt>
<a name="gloss.substitution.engine"></a><span class="glossterm">Substitution Engine</span>
</dt>
<dd class="glossdef"><p>
        A system component that personalizes each individual message. It
        takes as input a piece of UTF-8 data which contains substitution
        syntax such as "Hello {{ name }}", and JSON representing the
        key/value pairs to be substituted. The engine outputs expanded
        UTF-8 data.
      </p></dd>
<dt>
<a name="gloss.tag"></a><span class="glossterm">Tag</span>
</dt>
<dd class="glossdef"><p>
        A client-defined label that can be applied to a message. Tags
        can be inherited from a campaign.


      </p></dd>
<dt>
<a name="gloss.template"></a><span class="glossterm">Template</span>
</dt>
<dd class="glossdef"><p>
        A collection of message components (headers, text, html, SMS and
        attachments). Each component (with the exception of attachments)
        is run through the substitution engine prior to construction of
        the MIME.
      </p></dd>
<dt>
<a name="gloss.total.clicks"></a><span class="glossterm">Total Clicks</span>
</dt>
<dd class="glossdef"><p>
        Every click in a message, including duplicates. You're counting
        clicks.
      </p></dd>
<dt>
<a name="gloss.total.clicks.per.link"></a><span class="glossterm">Total Clicks per Link</span>
</dt>
<dd class="glossdef"><p>
        Every click on a particular link.
      </p></dd>
<dt>
<a name="gloss.total.conversions"></a><span class="glossterm">Total Conversions</span>
</dt>
<dd class="glossdef"><p>
        All conversions.
      </p></dd>
<dt>
<a name="gloss.total.opens"></a><span class="glossterm">Total Opens</span>
</dt>
<dd class="glossdef"><p>
        All opens that were recorded by open tracking.
      </p></dd>
<dt>
<a name="gloss.transactional"></a><span class="glossterm">Transactional Message</span>
</dt>
<dd class="glossdef"><p>
        A transactional message is a message that has only one
        recipient. The
        <a class="xref" href="modules.msg_gen.php#modules.gen_transactional_threads">
          gen_transactional_threads
        </a> option
        ensures that these kinds of messages are handled efficiently by
        minimizing database access wherever possible.
      </p></dd>
<dt>
<a name="gloss.transmission"></a><span class="glossterm">Transmission</span>
</dt>
<dd class="glossdef"><p>
        A collection of messages belonging to the same organization and
        the same campaign; also know as a mailing.
      </p></dd>
<dt>
<a name="gloss.unique.clicks"></a><span class="glossterm">Unique Clicks</span>
</dt>
<dd class="glossdef"><p>
        The number of recipients that clicked on any link in the
        message. You're counting recipients. From the example in
        <a class="xref" href="glossary.php#gloss.raw.clicks" title="Raw Clicks">Raw Clicks</a>, that's 3 Unique clicks.
      </p></dd>
<dt>
<a name="gloss.unique.confirmed.opened"></a><span class="glossterm">Unique Confirmed Opened</span>
</dt>
<dd class="glossdef"><p>
        Number of recipients who opened messages. This is recorded using
        the open tracking pixel <span class="emphasis"><em>or</em></span>, if images are
        blocked, it is recorded when the user clicks any link including
        the unsubscribe link. This metric applies to both HTML and plain
        text emails. (Unique Opens plus Unique Clicks that do not have a
        corresponding Unique Open.)
      </p></dd>
<dt>
<a name="gloss.unique.conversions"></a><span class="glossterm">Unique Conversions</span>
</dt>
<dd class="glossdef"><p>
        Number of recipients that convert.
      </p></dd>
<dt>
<a name="gloss.unique.opens"></a><span class="glossterm">Unique Opens</span>
</dt>
<dd class="glossdef"><p>
        Number of recipients who opened messages. This is recorded by
        the open tracking pixel.
      </p></dd>
<dt>
<a name="gloss.verp"></a><span class="glossterm">Variable Envelope Return Path</span> (VERP)</dt>
<dd class="glossdef"><p>
        This technique specifies a different return path for every
        message making it possible to associate bounced message with a
        specific sender so that invalid addresses can be removed from
        mailing lists. For more information see
        <a class="link" href="http://tools.ietf.org/html/rfc3464" target="_top">"RFC
        3464"</a>.
      </p></dd>
</dl>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="libedit.extended.php">Prev</a> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right"> <a accesskey="n" href="copyrights.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">D.2. Extended Commands </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Appendix E. Copyright Notices</td>
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
