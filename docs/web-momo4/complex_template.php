<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 53. Using Complex Templates</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.http_rest.php" title="Part VII. Message Generation (HTTP)">
<link rel="prev" href="sending_cc_bcc.php" title="Chapter 52. Sending Emails as CC and BCC">
<link rel="next" href="p.analytics.php" title="Part VIII. Reporting and Engagement Tracking">
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
<tr><th colspan="3" align="center">Chapter 53. Using Complex Templates</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="sending_cc_bcc.php">Prev</a> </td>
<th width="60%" align="center">Part VII. Message Generation (HTTP)</th>
<td width="20%" align="right"> <a accesskey="n" href="p.analytics.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="complex_template"></a>Chapter 53. Using Complex Templates</h2></div></div></div>
<p>
    <span class="bold"><strong>Introduction</strong></span>
  </p>
<p>
    Most likely, your messaging needs go way beyond the simple examples
    provided in the previous tutorials. Yet, these examples form the
    basis for creating effective, high-volume messaging campaigns. By
    further exploring the capabilities of Momentum's powerful templating
    language, you can create templates that implement complex structures
    such as conditional statements, looping, and customized links.
  </p>
<p>
    <span class="bold"><strong>Creating a Complex Stored Template Using the
    REST API</strong></span>
  </p>
<p>
    In this section, you will learn about advanced features of the
    templating language. It combines many of the topics discussed in
    previous tutorials to create and use a complex template.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      This tutorial assumes that you have completed the tutorials in
      <a class="xref" href="stored_template.php" title="Chapter 47. Creating Stored Templates">Chapter 47, <i>Creating Stored Templates</i></a> and
      <a class="xref" href="using_template.php" title="Chapter 49. Using Stored Templates">Chapter 49, <i>Using Stored Templates</i></a>.
    </p>
<p>
      A general knowledge of command line tools, JSON, HTTP protocol,
      and templating languages is required. As a prerequisite, you
      should also be familiar with the information provided in the
      Substitutions Reference section of the
      <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>
      documentation.
    </p>
<p>
      You must have a valid API key to complete this tutorial. If you do
      not, see <a class="xref" href="create_apikey.php" title="Chapter 43. Creating an API Key">Chapter 43, <i>Creating an API Key</i></a>.
    </p>
</div>
<p>
    Follow these steps to create a complex template:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Specify your input data for the template.
      </p>
<p>
        This example demonstrates using substitution data and Momentum's
        templating language to create a complex template for a flight
        notification email. It also introduces the "html" content type,
        which gives you a richer look and feel than a plain-text
        message.
      </p>
<p>
        In addition to the simple substitution shown in previous
        tutorials, this example uses a conditional statement to form the
        message body. If there is no departing airport specified in the
        substitution data provided with the transmission, the message
        body will inform the recipient that there are no travel plans.
        Otherwise, the message body will provide the recipient with the
        departing and arriving airport and city based on the
        substitution data provided for that specific recipient. The
        conditional statement is the following:
      </p>
<pre class="screen">{{if not Airports[departAirport]}}
  Hi {{ firstName or 'there' }}, You do not appear to be traveling anywhere. This email must be a mistake.
{{else}}
{{if Airports[departAirport] and Airports[departAirport].city then}}
  Hi {{ firstName or 'there' }}, You are planning a trip from {{departAirport}} in {{Airports[departAirport].city}} »
  to {{arriveAirport}} in {{Airports[arriveAirport].city}}.
{{end}}
{{end}}</pre>
<p>
        This example also demonstrates how substitution data can be used
        to custom a link within the message body. The customized link is
        the following:
      </p>
<pre class="screen">The weather in {{Airports[arriveAirport].city}} is &lt;a href=\"http://www.theweathernetwork.com/weather/»
{{Airports[arriveAirport].country}}/{{Airports[arriveAirport].region}}/{{Airports[arriveAirport].weatherc}}»
\"target=\"_blank\"&gt; {{Airports[arriveAirport].city}}.</pre>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">complex_template.json</code>.
      </p>
<p>
        Note that the "html" part must be all on one line. Multiple
        lines are shown here for readability.
      </p>
<pre class="screen">{
   "id":"complex_template",
   "published":false,
   "options":{
      "open_tracking":true,
      "click_tracking":true
   },
   "content":{
      "from":"{{senderAddress}}",
      "subject":"This is a {{SubjectText}} of a flight notification from {{departAirport}} to {{arriveAirport}}",
      "html":"&lt;p&gt;{{if not Airports[departAirport]}}Hi {{ firstName or 'there' }},&lt;br&gt;You do not appear to be traveling »
      anywhere. This email must be a mistake.&lt;br&gt;{{else}}{{if Airports[departAirport] and Airports[departAirport].city »
      then}}Hi {{ firstName or 'there' }},&lt;br&gt;You are planning a trip from {{departAirport}} in {{Airports[departAirport]»
      .city}} to{{arriveAirport}} in {{Airports[arriveAirport].city}}.&lt;br&gt;{{end}}The weather in {{Airports[arriveAirport]»
      .city}} is &lt;a href=\"http://www.theweathernetwork.com/weather/{{Airports[arriveAirport].country}}/{{Airports[arrive»
      Airport].region}}/{{Airports[arriveAirport].weatherc}}\"target=\"_blank\"&gt; {{Airports[arriveAirport].city}}.{{end}}»
      &lt;/a&gt;&lt;/p&gt;"
   }
}</pre>
</li>
<li class="listitem">
<p>
        Store your template as a draft.
      </p>
<p>
        At the command line, enter the following command to store your
        template:
      </p>
<pre class="programlisting">curl -X POST http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/templates/ \
-d @<em class="replaceable"><code>path/to/file/</code></em>complex_template.json \
-H "Content-Type: application/json" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">complex_template.json</code> is the name of
        your JSON file, <code class="literal">application/json</code> specifies
        the format as JSON, and <em class="replaceable"><code>your_api_key</code></em>
        is your valid API key.
      </p>
<p>
        If successful, the following response will be displayed at the
        command line:
      </p>
<pre class="screen">{  
   "results":{  
      "id":"complex_template"
   }
}</pre>
<p>
        This response shows that the request was successful.
      </p>
</li>
</ol></div>
<p>
    <span class="bold"><strong>Create Transmission</strong></span>
  </p>
<p>
    Follow these steps to send an email using your template:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Specify your input data for the transmission.
      </p>
<p>
        As in the tutorial on using a simple stored template, you use a
        template by specifying its identifier and the recipient-specific
        data as input data in the JSON blob that will be included in the
        Transmissions API call.
      </p>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">complex_subdata.json</code>. Be sure to use your
        information for sender address, recipient address, and recipient
        name.
      </p>
<pre class="screen">{  
   "options":{  
      "open_tracking":true,
      "click_tracking":true
   },
   "return_path":"<em class="replaceable"><code>sender@your_address.com</code></em>",
   "substitution_data":{  
      "senderAddress":"<em class="replaceable"><code>sender@your_address.com</code></em>",
      "SubjectText":"complex template example",
      "Airports":{  
        "YYZ":{  
            "code":"YYZ",
            "city":"Toronto",
            "name":"Toronto International Airport",
            "country":"canada",
            "region":"ontario",
            "weatherc":"toronto"
         },
         "SFO":{  
            "code":"SFO",
            "city":"San Francisco",
            "name":"San Francisco International Airport",
            "country":"united-states",
            "region":"california",
            "weatherc":"san-francisco"
         },
        "BWI":{  
            "code":"BWI",
            "city":"Baltimore",
            "name":"Baltimore-Washington International Airport",
            "country":"united-states",
            "region":"maryland",
            "weatherc":"baltimore"
         }
      }
   },
   "recipients":[  
      {  
         "address":{  
            "email":"<em class="replaceable"><code>recipient@their_address.com</code></em>"
         },
         "substitution_data":{  
            "firstName":"<em class="replaceable"><code>recipient first name</code></em>",
            "departAirport":"YYZ",
            "arriveAirport":"SFO"
         }
      }
   ],
   "content":{  
      "template_id":"complex_template",
      "use_draft_template":true
   }
}</pre>
<p>
        The recipient-specific data JSON blob can include any number of
        substitutions. In this example, the transmission JSON structure
        includes multiple options for airports, while the recipient JSON
        structure includes only one recipient. You can easily expand
        either structure for multiple substitution values.
      </p>
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
-d @<em class="replaceable"><code>path/to/file/</code></em>complex_subdata.json \
-H "Content-Type: application/json" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">complex_subdata.json</code> is the name of
        your JSON file, <code class="literal">application/json</code> specifies
        the format as JSON, and <em class="replaceable"><code>your_api_key</code></em>
        is your valid API key.
      </p>
<p>
        If successful, a response similar to the following will be
        displayed at the command line:
      </p>
<pre class="screen">{  
   "results":{  
      "total_rejected_recipients":0,
      "total_accepted_recipients":1,
      "id":"<em class="replaceable"><code>11936056773443588</code></em>"
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
        Verify that your recipient received a personalized email. Open
        the email and click the link included in the message body.
      </p>
</li>
<li class="listitem">
<p>
        Open the UI and navigate to the Engagement report. In the
        Engagement report, confirm that your message was successfully
        injected into Momentum (Targeted), accepted by the ISP
        (Accepted), and opened (Unique Confirmed Opens) and that the
        link was clicked (Unique Clicks), as shown in
        <a class="xref" href="complex_template.php#figure_engagement_example" title="Figure 53.1. Engagement Report">Figure 53.1, “Engagement Report”</a>.
      </p>
<div class="figure">
<a name="figure_engagement_example"></a><p class="title"><b>Figure 53.1. Engagement Report</b></p>
<div class="figure-contents"><div class="mediaobject"><img src="images/engagement_weather.png" alt="Engagement Report"></div></div>
</div>
<br class="figure-break">
</li>
</ol></div>
<p>
    Congratulations! You have used your knowledge of the REST API to
    create and use a complex template. For additional information, see
    <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum REST API</a>.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="sending_cc_bcc.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.http_rest.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="p.analytics.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 52. Sending Emails as CC and BCC </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Part VIII. Reporting and Engagement Tracking</td>
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
