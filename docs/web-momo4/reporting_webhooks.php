<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 59. Using Webhooks for Event Data</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.analytics.php" title="Part VIII. Reporting and Engagement Tracking">
<link rel="prev" href="reporting_metrics.php" title="Chapter 58. Using the Metrics API for Reporting">
<link rel="next" href="web-ui.webhooks.php" title="Chapter 60. Managing Your Webhooks in the UI">
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
<tr><th colspan="3" align="center">Chapter 59. Using Webhooks for Event Data</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="reporting_metrics.php">Prev</a> </td>
<th width="60%" align="center">Part VIII. Reporting and Engagement Tracking</th>
<td width="20%" align="right"> <a accesskey="n" href="web-ui.webhooks.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="reporting_webhooks"></a>Chapter 59. Using Webhooks for Event Data</h2></div></div></div>
<p>
    <span class="bold"><strong>Introduction</strong></span>
  </p>
<p>
    Webhooks provide an alternate way to get reporting data from
    Momentum. Instead of passively polling for data, webhooks push
    batches of events when they happen. Webhooks act as user-defined
    HTTP callbacks. When you create a webhook, you register a URL and
    specify the events for which you want reporting data. When those
    events occur, Momentum will post the data to your URL in batches of
    10k or 30 seconds, whichever comes first. Your application can then
    perform whatever action is required based on your specific needs.
    Webhooks enables you to fully integrate your custom application with
    Momentum. If the endpoint does not respond within six seconds, it
    adds it to a retry queue to be sent at a later date. If a batch
    continues to fail, it will attempt to retry at a backoff interval
    for four hours. If a batch fails for four hours, it will be deleted.
  </p>
<p>
    You can create webhooks to push data for various types of events.
    When an event occurs, a batch of event data is HTTP POSTed to your
    target URL. This batch consists of one or more event records, each
    composed of a payload wrapped in a type-specific JSON envelope. The
    payload includes all the data related to that specified event.
  </p>
<div class="tip">
<h3 class="title">Tip</h3>
<p>
      To respond quickly to a batch of events, defer any processing
      until after the 2xx response is made to the webhooks system.
      Non-2xx errors will be eventually retried. (Avoid retries by
      listening to http close events. These events will notify when
      Momentum webhooks timeout. Stopping executing code on the batch
      that timed out will help overall performance because that batch
      will be retried.)
    </p>
</div>
<p>
    <span class="bold"><strong>Receiving Event Data Using Webhooks</strong></span>
  </p>
<p>
    This section provides instructions to create a webhook using the
    REST API. It introduces you to the Webhooks API. You will create a
    webhook for tracking engagement data and generate this data by
    sending the email that you created in the tutorial on tracking
    engagement.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Generation and engagement events are emitted by Message
      Generation, which is licensed separately from the core Momentum
      platform. For this tutorial, you must have Message Generation.
    </p>
<p>
      This tutorial assumes that you have completed the tutorial in
      <a class="xref" href="engagement_tracking_http.php" title="Chapter 61. Tracking Engagement for HTTP">Chapter 61, <i>Tracking Engagement for HTTP</i></a>. A general
      knowledge of command line tools, JSON, HTTP protocol, and
      templating languages is required.
    </p>
<p>
      You must have a valid API key to complete this tutorial. If you do
      not, see <a class="xref" href="create_apikey.php" title="Chapter 43. Creating an API Key">Chapter 43, <i>Creating an API Key</i></a>.
    </p>
<p>
      You will also need a URL to receive the event data.
    </p>
</div>
<p>
    Follow these steps to receive event data using webhooks:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Specify your webhook properties.
      </p>
<p>
        You create a webhook by first specifying the webhook’s
        properties in a JSON blob that will be included in the Webhooks
        API call. You must specify a name for the webhook, the URL of
        the target to which to send the event data, and the event types
        that will trigger the webhook.
      </p>
<p>
        Optionally, you can include an authentication token. This token
        is present in the X-MessageSystems-Webhook-Token header of POST
        requests to the target URL and can be used in your target
        application to confirm that data is coming from your webhook.
        This simple example does not use authentication.
      </p>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">webhook_example.json</code>. Be sure to use your
        URL for the target.
      </p>
<pre class="screen">{
  "name": "Example webhook",
  "target": "http://<em class="replaceable"><code>your_targetURL.com</code></em>",
  "events": [
    "injection",
    "delivery",
    "open",
    "click"
  ]
}</pre>
<p>
        Note that this example will get data for injection, delivery,
        open, and click event types.
      </p>
</li>
<li class="listitem">
<p>
        Create your webhook.
      </p>
<p>
        You create a webhook by sending a HTTP POST request to the
        appropriate URL with your JSON blob. To access the Webhooks API,
        you send an HTTP request to
        <strong class="userinput"><code>http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/webhooks/</code></strong>.
      </p>
<p>
        At the command line, enter the following command to create your
        webhook:
      </p>
<pre class="programlisting">curl -X POST http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/webhooks/ \
-d @<em class="replaceable"><code>path/to/file/</code></em>webhook_example.json \
-H "Content-Type: application/json" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">webhook_example.json</code> is the name of
        your JSON file, <code class="literal">application/json</code> specifies
        the format as JSON, and <em class="replaceable"><code>your_api_key</code></em>
        is your valid API key.
      </p>
<p>
        On creation, a test POST is sent to the target URL for
        validation. If this request does not receive an HTTP 200
        response, your request to the Webhook API will fail with HTTP
        400, and the webhook will not be created.
      </p>
<p>
        If the test POST is successful, a response similar to the
        following will be displayed at the command line:
      </p>
<pre class="screen">{  
   "results":{  
      "id":"<em class="replaceable"><code>1cc94ef0-ab17-11e4-b135-0ff9de159aa7</code></em>",
      "links":[  
         {  
            "href":"<em class="replaceable"><code>http://your.server.domain/api/v1/webhooks/1cc94ef0-ab17-11e4-b135-0ff9de159aa7</code></em>",
            "rel":"urn.msys.webhooks.webhook",
            "method":[  
               "GET",
               "PUT"
            ]
         }
      ]
   }
}</pre>
</li>
<li class="listitem">
<p>
        Inject a message into Momentum.
      </p>
<p>
        After a 1 minute activation time, the new webhook will be ready
        to receive event data. Send the email that you created in the
        tutorial in
        <a class="xref" href="engagement_tracking_http.php" title="Chapter 61. Tracking Engagement for HTTP">Chapter 61, <i>Tracking Engagement for HTTP</i></a>.
      </p>
</li>
<li class="listitem">
<p>
        Open the email and click the link.
      </p>
<p>
        Open the email and click the link included in the message body.
      </p>
</li>
<li class="listitem">
<p>
        Confirm receipt of event data.
      </p>
<p>
        Confirm that the event data posted to your target URL. Your
        click event data should be similar to the following:
      </p>
<pre class="screen">{
 "msys": {
  "track_event": {
      "user_agent":"<em class="replaceable"><code>Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.77.4 (KHTML, like Gecko) »
        Version/7.0.5 Safari/537.77.4</code></em>",
      "message_id":"<em class="replaceable"><code>0000632c8b54d53f0a00</code></em>",
      "customer_id":"<em class="replaceable"><code>1</code></em>",
      "delv_method":"rest",
      "timestamp":"<em class="replaceable"><code>1418407074</code></em>",
      "type":"click",
      "node_name":"<em class="replaceable"><code>example_node</code></em>",
      "target_link_url":"http://messagesystems.com",
      "transmission_id":"<em class="replaceable"><code>11898458545848322</code></em>",
      "accept_language":"en-us",
    }
  }
}</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
          The response shown is an example. For the latest mapping of
          the fields that constitute a payload for a given event type,
          see the Webhooks API documentation at
          <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
        </p>
</div>
</li>
</ol></div>
<p>
    Congratulations! You have successfully created a webhook using the
    Webhooks API. In addition to the POST method used in this example,
    the Webhooks API supports several other methods. You can find more
    information in the Webhooks API documentation available at
    <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
  </p>
<p>
    <span class="bold"><strong>Managing Webhooks using the UI</strong></span>
  </p>
<p>
    You can alos create and manage your webhooks in the web-based UI.
    For detailed instructions, see <a class="xref" href="web-ui.webhooks.php" title="Chapter 60. Managing Your Webhooks in the UI">Chapter 60, <i>Managing Your Webhooks in the UI</i></a>.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="reporting_metrics.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.analytics.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="web-ui.webhooks.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 58. Using the Metrics API for Reporting </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 60. Managing Your Webhooks in the UI</td>
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
