<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 61. Tracking Engagement for HTTP</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.analytics.php" title="Part VIII. Reporting and Engagement Tracking">
<link rel="prev" href="web-ui.webhooks.delete.php" title="60.5. Deleting a Webhook">
<link rel="next" href="p.policy.php" title="Part IX. Writing Policy">
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
<tr><th colspan="3" align="center">Chapter 61. Tracking Engagement for HTTP</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="web-ui.webhooks.delete.php">Prev</a> </td>
<th width="60%" align="center">Part VIII. Reporting and Engagement Tracking</th>
<td width="20%" align="right"> <a accesskey="n" href="p.policy.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="engagement_tracking_http"></a>Chapter 61. Tracking Engagement for HTTP</h2></div></div></div>
<p>
    <span class="bold"><strong>Introduction</strong></span>
  </p>
<p>
    Understanding how your messaging is or isn't performing is a
    critical factor in creating a successful campaign. Just knowing that
    your messages are being delivered is not enough. You need to know
    how your customers interact with your message content. Are your
    customers opening your messages? Are they clicking the links you
    provide? Momentum provides real-time event tracking data, enabling
    you to track campaigns as they are being sent and to make
    modifications to improve customer engagement.
  </p>
<p>
    Engagement describes how a recipient interacts with your message. An
    engagement event occurs when the recipient opens an email or clicks
    a link within an email. By default, open tracking and click tracking
    are enabled in Momentum's configuration, if Message Generation is
    selected during installation. You can override the configuration
    option for a specific stored template by specifying the attributes
    in the template or for a specific transmission by specifying the
    attributes in the transmission. For details about these attributes,
    see the Transmissions and Templates API documentation available at
    <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      If you want to disable engagement tracking globally, change the
      configuration option in the msg_gen module. See
      <a class="xref" href="modules.msg_gen.php" title="71.48. msg_gen – Message Generation">Section 71.48, “msg_gen – Message Generation”</a>.
    </p>
</div>
<p>
    When you create your recipient lists and transmissions, you specify
    various attributes including metadata using the
    <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>. This data is
    included in the tracked URLs for each message. For open tracking,
    Momentum inserts an open-tracked image into the message. For click
    tracking, Momentum converts the target link into a click-tracked
    link. By default, metadata is included for open and click tracking,
    if specified.
  </p>
<p class="config"><b>Configuration Change. </b>
      Version 4.1 and earlier include metadata in open tracking only. As
      of version 4.1-HF4, metadata is available in open tracking and
      optionally in click tracking.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      If you want to exclude metadata from click tracking, change the
      configuration option in the
      <a class="xref" href="modules.engage_tracker.php" title="71.32. engagement_tracker – HTTP Engagement Tracking">Section 71.32, “engagement_tracker – HTTP Engagement Tracking”</a> module.
    </p>
<p>
      Tracked links include an expiry time of 1 year. After that time,
      engagement events will not be reported for that specific message.
    </p>
</div>
<p>
    With click and open tracking enabled, you can track engagement using
    the REST API or a specially designed report in the UI. The
    Engagement report enables you to drill down to the level of a link
    within your message. Using this report, you can quickly view the
    number of messages that were accepted, were opened, and had a link
    selected and view how many times a link within your message was
    clicked.
  </p>
<p>
    <span class="bold"><strong>Including a Link in the Message
    Body</strong></span>
  </p>
<p>
    This section provides instructions to send an email using an inline
    template with a link in the message body and track engagement in the
    UI. The template will show how to override the configuration option,
    in the event you have globally disabled this feature. Later sections
    will discuss tracking engagement data and retrieving reporting data
    using the REST API.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Engagement events are emitted by Message Generation, which is
      licensed separately from the core Momentum platform. For this
      tutorial, you must have Message Generation.
    </p>
<p>
      This tutorial assumes that you have completed the tutorial in
      <a class="xref" href="message_gen.php" title="Chapter 45. Generating a Transmission">Chapter 45, <i>Generating a Transmission</i></a>. A general knowledge of
      command line tools, JSON, HTTP protocol, and templating languages
      is required.
    </p>
<p>
      You must have a valid API key to complete this tutorial. If you do
      not, see <a class="xref" href="create_apikey.php" title="Chapter 43. Creating an API Key">Chapter 43, <i>Creating an API Key</i></a>.
    </p>
</div>
<p>
    Follow these steps to create a transmission with a link in the
    message body:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Specify your input data.
      </p>
<p>
        This example uses the simple inline template from the tutorial
        in <a class="xref" href="message_gen.php" title="Chapter 45. Generating a Transmission">Chapter 45, <i>Generating a Transmission</i></a> as a starting
        point and adds a link in the message body.
      </p>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">sample_link.json</code>. Be sure to use your
        sender and recipient addresses.
      </p>
<pre class="screen">{  
   "options":{  
      "open_tracking":true,
      "click_tracking":true
   },
   "return_path":"<em class="replaceable"><code>sender@your_address.com</code></em>",
   "recipients":[  
      {  
         "address":{  
            "email":"<em class="replaceable"><code>recipient@their_address.com</code></em>"
         }
      }
   ],
   "content":{  
      "from":"<em class="replaceable"><code>sender@your_address.com</code></em>",
      "subject":"Tracking Engagement",
      "text":"Welcome to Momentum!\r\nClick http://www.messagesystems.com to learn more about Momentum."
   }
}</pre>
<p>
        The "content" object includes a link to the Message Systems,
        Inc. website so that you can verify click tracking in the UI.
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          The <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Substitutions Reference</a>
          in the REST API documentation provides important information
          about including links in your messages. See the sections on
          <span class="emphasis"><em>Personalized Links</em></span>, <span class="emphasis"><em>Link
          Names</em></span>, <span class="emphasis"><em>URLs Generated Using Substitution
          Data</em></span>, and <span class="emphasis"><em>Links and Substitution
          Expressions Within Substitution Values</em></span>.
        </p>
</div>
<p>
        Engagement tracking is globally enabled or disabled in your
        configuration settings. You can override this setting at the
        transmission or template level. If your engagement tracking is
        disabled by default, include the following attributes as shown
        in this example to override open and click tracking at the
        transmission level.
      </p>
<pre class="programlisting">"options":{
  "open_tracking":true,
  "click_tracking":true
}</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
          The precedence for engagement tracking options, from highest
          to lowest is as follows:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              transmission level
            </p></li>
<li class="listitem"><p>
              template level
            </p></li>
<li class="listitem"><p>
              msg_gen level
            </p></li>
</ul></div>
<p>
          For example, if click tracking is not specified at the
          transmission level, the "click_tracking" attribute at the
          template level is used. If the template level is also not
          specified, the setting of the configuration option in the
          msg_gen module is used.
        </p>
<p>
          By default, open tracking and click tracking are enabled in
          Momentum's configuration, if Message Generation is selected
          during installation.
        </p>
</div>
</li>
<li class="listitem">
<p>
        Inject your message into Momentum.
      </p>
<p>
        At the command line, enter the following command to inject your
        email:
      </p>
<pre class="programlisting">curl -X POST http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/transmissions/ \
 -d @<em class="replaceable"><code>path/to/file/</code></em>sample_link.json \
 -H "Content-Type: application/json" \
 -H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">sample_link.json</code> is the name of your
        JSON file, <code class="literal">application/json</code> specifies the
        format as JSON, and <em class="replaceable"><code>your_api_key</code></em> is
        your valid API key.
      </p>
<p>
        If successful, a response similar to the following will be
        displayed at the command line:
      </p>
<pre class="screen">{  
   "results":{  
      "total_rejected_recipients":0,
      "total_accepted_recipients":1,
      "id":"<em class="replaceable"><code>11668787484950529</code></em>"
   }
}</pre>
<p>
        This response shows that one email was accepted and none were
        rejected.
      </p>
</li>
</ol></div>
<p>
    <span class="bold"><strong>View Engagement Data</strong></span>
  </p>
<p>
    Follow these steps to view your engagement data:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Open the email and click the link.
      </p>
<p>
        Verify that your recipient received the email. Open the email
        and click the link included in the message body.
      </p>
</li>
<li class="listitem">
<p>
        Open the UI and navigate to the Engagement report. In the
        Engagement report, confirm that your message was successfully
        injected into Momentum (Targeted), accepted by the ISP
        (Accepted), and opened (Unique Confirmed Opens) and that the
        link was clicked (Unique Clicks), as shown in
        <a class="xref" href="engagement_tracking_http.php#figure_engagement" title="Figure 61.1. Engagement Report">Figure 61.1, “Engagement Report”</a>.
      </p>
<div class="figure">
<a name="figure_engagement"></a><p class="title"><b>Figure 61.1. Engagement Report</b></p>
<div class="figure-contents"><div class="mediaobject"><img src="images/engagement.png" alt="Engagement Report"></div></div>
</div>
<br class="figure-break">
</li>
</ol></div>
<p>
    Congratulations! You have successfully sent an email with a link and
    tracked the engagement of your message in the UI. To learn more
    about using the Engagement report, see
    <a class="xref" href="web-ui.reports.evaluating.campaign.performance.php" title="57.4. Evaluating Your Campaign Performance">Section 57.4, “Evaluating Your Campaign Performance”</a>.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="web-ui.webhooks.delete.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.analytics.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="p.policy.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">60.5. Deleting a Webhook </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Part IX. Writing Policy</td>
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
