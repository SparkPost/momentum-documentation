<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 58. Using the Metrics API for Reporting</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.analytics.php" title="Part VIII. Reporting and Engagement Tracking">
<link rel="prev" href="web-ui.reports.evaluating.campaign.performance.php" title="57.4. Evaluating Your Campaign Performance">
<link rel="next" href="reporting_webhooks.php" title="Chapter 59. Using Webhooks for Event Data">
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
<tr><th colspan="3" align="center">Chapter 58. Using the Metrics API for Reporting</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="web-ui.reports.evaluating.campaign.performance.php">Prev</a> </td>
<th width="60%" align="center">Part VIII. Reporting and Engagement Tracking</th>
<td width="20%" align="right"> <a accesskey="n" href="reporting_webhooks.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="reporting_metrics"></a>Chapter 58. Using the Metrics API for Reporting</h2></div></div></div>
<p>
    <span class="bold"><strong>Introduction</strong></span>
  </p>
<p>
    Throughout the previous sections, you have used the UI to provide
    insight into your message deliverability and campaign performance.
    The examples provided have been simple in nature, yet Momentum
    provides a vast amount of reporting and analytics data. All the
    capabilities provided in the UI are also available using the Metrics
    API.
  </p>
<p>
    The Metrics API enables you to retrieve a wide variety of reporting
    data using the HTTP protocol. You can retrieve a high-level summary
    of the aggregate metrics; group the metrics by various parameters;
    or order them by various conditions. The UI’s powerful drill-down
    capability is mirrored in the Metrics API by applying various
    filters to each of these reports. The reports included in the HTTP
    response are in JSON format.
  </p>
<p>
    <span class="bold"><strong>Reporting Data Using the Metrics
    API</strong></span>
  </p>
<p>
    This section provides instructions to view the engagement data
    generated in the tutorial in
    <a class="xref" href="engagement_tracking_http.php" title="Chapter 61. Tracking Engagement for HTTP">Chapter 61, <i>Tracking Engagement for HTTP</i></a> using the REST
    API, instead of the UI. It introduces the Metrics API, which
    provides the means for retrieving the statistical, real-time data
    captured by Momentum.
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
      <a class="xref" href="engagement_tracking_http.php" title="Chapter 61. Tracking Engagement for HTTP">Chapter 61, <i>Tracking Engagement for HTTP</i></a>. A general
      knowledge of command line tools, JSON, and HTTP protocol is
      required.
    </p>
<p>
      You must have a valid API key to complete this tutorial. If you do
      not, see <a class="xref" href="create_apikey.php" title="Chapter 43. Creating an API Key">Chapter 43, <i>Creating an API Key</i></a>.
    </p>
</div>
<p>
    Follow these steps to report data using the Metrics API:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Request reporting data.
      </p>
<p>
        You retrieve the reporting data by sending a HTTP GET request to
        the appropriate URL. The path part specifies which REST API to
        use. For example to access the Metrics API, you send an HTTP
        request to
        <strong class="userinput"><code>http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/metrics/</code></strong>.
      </p>
<p>
        You can retrieve deliverability metrics that are specific to
        click events by providing the URI of the link in the GET method.
      </p>
<p>
        At the command line, enter the following command:
      </p>
<pre class="programlisting">curl -X GET "https://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/metrics/deliverability/link-name?from=<em class="replaceable"><code>your_date</code></em>&amp;metrics=count_clicked" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <em class="replaceable"><code>your_date</code></em> is in the format
        YYYY-MM-DDTHH:MM, and <em class="replaceable"><code>your_api_key</code></em> is
        your valid API key.
      </p>
</li>
<li class="listitem">
<p>
        Confirm engagement tracking data.
      </p>
<p>
        Confirm that you received the following response at the command
        line:
      </p>
<pre class="programlisting">{  
   "results":{  
      "link_name":"http://www.messagesystems.com",
      "count_clicked":1
   }
}</pre>
<p>
        This response shows that there was one unique click for the link
        to www.messagesystems.com.
      </p>
</li>
</ol></div>
<p>
    Congratulations! You have successfully retrieved reporting data
    using the Metrics API. This tutorial demonstrated retrieving data
    for only one event type. The Metrics API supports many different
    reports. For detailed information about all the reporting options,
    see the Metrics API documentation available at
    <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="web-ui.reports.evaluating.campaign.performance.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.analytics.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="reporting_webhooks.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">57.4. Evaluating Your Campaign Performance </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 59. Using Webhooks for Event Data</td>
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
