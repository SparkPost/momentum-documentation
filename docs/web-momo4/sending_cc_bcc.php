<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 52. Sending Emails as CC and BCC</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.http_rest.php" title="Part VII. Message Generation (HTTP)">
<link rel="prev" href="using_list.php" title="Chapter 51. Using Stored Recipient Lists">
<link rel="next" href="complex_template.php" title="Chapter 53. Using Complex Templates">
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
<tr><th colspan="3" align="center">Chapter 52. Sending Emails as CC and BCC</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="using_list.php">Prev</a> </td>
<th width="60%" align="center">Part VII. Message Generation (HTTP)</th>
<td width="20%" align="right"> <a accesskey="n" href="complex_template.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="sending_cc_bcc"></a>Chapter 52. Sending Emails as CC and BCC</h2></div></div></div>
<p class="config"><b>Configuration Change. </b>
      Sending emails as BCC is supported as of version 4.1-HF4.
    </p>
<p>
    <span class="bold"><strong>Introduction</strong></span>
  </p>
<p>
    An email's header provides details about the sender and recipients,
    in addition to descriptive information about the message. Typically,
    the header will include "From", displaying who sent the message, and
    "To", displaying who received the message. However, you can also
    send an email as a Carbon Copy ("CC") or Blind Carbon Copy ("BCC").
  </p>
<p>
    Carbon Copy or "CC" indicates that the recipient received a "copy"
    of an email that was sent to another recipient. The email's header
    will include "To", showing the original recipient, and "CC", showing
    the recipient who received the copy. Recipients will see the email
    addresses of all the persons who received the email. Conversely,
    Blind Carbon Copy or "BCC" indicates that the recipient also
    received a "copy" of an email that was sent to another recipient,
    however, the recipients do not know to who the email was copied. The
    email's header will include only "To". The <span class="emphasis"><em>BCC</em></span>
    recipient's email address is not visible to the other recipients.
    This capability enables you to protect the email addresses of your
    recipients. To maintain your recipient's privacy, you can send the
    email to yourself and <span class="emphasis"><em>BCC</em></span> all your recipients.
  </p>
<p>
    When you create your transmission using the REST API, you can
    include <span class="emphasis"><em>CC</em></span> and <span class="emphasis"><em>BCC</em></span>
    recipients by using optional fields available in the Template and
    Recipient Lists API. You must specify separate data for your "To",
    "CC", and "BCC" recipients. Ensure that this data is, in fact, a
    carbon copy of each other. When "CC" and "BCC" are specified, your
    recipients will then receive emails with the appropriate header.
  </p>
<p>
    <span class="bold"><strong>Sending Email with <span class="emphasis"><em>CC</em></span> and
    <span class="emphasis"><em>BCC</em></span> Recipients </strong></span>
  </p>
<p>
    In this tutorial, you will learn how to send an email as a
    <span class="emphasis"><em>CC</em></span> and <span class="emphasis"><em>BCC</em></span> using the REST
    API. It will build on your knowledge of the Template and Recipient
    Lists API by using optional fields to specify the
    <span class="emphasis"><em>CC</em></span> and <span class="emphasis"><em>BCC</em></span> recipients. The
    example in this tutorial specifies the recipients inline and uses a
    simple inline template with a plain-text message, but the
    transmission can also reference a stored template and recipient
    list.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      This tutorial assumes that you have completed the tutorial in
      <a class="xref" href="stored_list.php" title="Chapter 50. Creating Stored Recipient Lists">Chapter 50, <i>Creating Stored Recipient Lists</i></a>. A general knowledge of command line
      tools, JSON, HTTP protocol, and templating languages is required.
    </p>
<p>
      You must have a valid API key to complete this tutorial. If you do
      not, complete the tutorial in <a class="xref" href="create_apikey.php" title="Chapter 43. Creating an API Key">Chapter 43, <i>Creating an API Key</i></a>.
    </p>
</div>
<p>
    Follow these steps to send a simple transmission with
    <span class="emphasis"><em>CC</em></span> and <span class="emphasis"><em>BCC</em></span> recipients:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Specify your input data.
      </p>
<p>
        The Recipient List API supports a "header_to" field in the
        "address" attribute. This field will be displayed in the "To"
        header instead of the "email" field of the recipient. To send an
        email as a <span class="emphasis"><em>CC</em></span> or <span class="emphasis"><em>BCC</em></span>,
        you must specify the <span class="emphasis"><em>CC</em></span> or
        <span class="emphasis"><em>BCC</em></span> recipient using the "email" field and
        the recipient that you want displayed in the "To" header using
        the "header_to" field in the "recipients" JSON array. Each
        recipient must have the same substitution data and meta data, if
        included in the transmission.
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          The "header_to" field is not designed to be used with
          email_rfc822 templates.
        </p>
</div>
<p>
        The Template API supports a "headers" field in the "content"
        JSON array. This field is a JSON dictionary that can be used to
        specify additional headers in your emails, such as "CC". To
        include a "CC" header in your email, you must specify the
        <span class="emphasis"><em>CC</em></span> recipient in the "recipients" JSON
        array, as previously described, and in the "headers" field in
        the "content" JSON array using the "CC" field.
      </p>
<p>
        Note that the <span class="emphasis"><em>BCC</em></span> and
        <span class="emphasis"><em>To</em></span> recipients are not specified in the
        "headers" field. The "To" header is generated from the
        <em class="replaceable"><code>to_recipient's</code></em> "email" field. For
        details about constructing additional headers using the
        "headers" field, see the Template API documentation available at
        <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
      </p>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">cc_bcc_example.json</code>. Be sure to use your
        sender address and recipient addresses. Note that the
        "header_to" fields are a carbon copy of the "To" recipient's
        email address.
      </p>
<pre class="screen">{  
   "return_path":"<em class="replaceable"><code>sender@return_path.com</code></em>",
   "recipients":[  
      {  
         "address":{  
            "email":"<em class="replaceable"><code>to_recipient@their_address.com</code></em>"
         },
         "substitution_data":{  
            "some_sub_data":"Momentum"
         }
      },
      {  
         "address":{  
            "email":"<em class="replaceable"><code>cc_recipient@their_address.com</code></em>",
            "header_to":"<em class="replaceable"><code>to_recipient@their_address.com</code></em>"
         },
         "substitution_data":{  
            "some_sub_data":"Momentum"
         }
      },
      {  
         "address":{  
            "email":"<em class="replaceable"><code>bcc_recipient@their_address.com</code></em>",
            "header_to":"<em class="replaceable"><code>to_recipient@their_address.com</code></em>"
         },
         "substitution_data":{  
            "some_sub_data":"Momentum"
         }
      }
   ],
   "content":{  
      "from":"<em class="replaceable"><code>sender@your_address.com</code></em>",
      "headers":{  
         "CC":"<em class="replaceable"><code>cc_recipient@their_address.com</code></em>"
      },
      "subject":"Sending Email with CC and BCC Recipients",
      "text":"Welcome to {{some_sub_data}}!\r\nThis is an example of including a CC and BCC header."
   }
}</pre>
<p>
        In this example, the email will be sent to the
        <em class="replaceable"><code>to_recipient</code></em>, as indicated in the
        email's "To" header, and a copy of the email will be sent to the
        <em class="replaceable"><code>cc_recipient</code></em>, as indicated in the
        email's "CC" header. A second copy will be sent to the
        <em class="replaceable"><code>bcc_recipient</code></em>. However, this
        recipient's email address will not be displayed.
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          There is no support for <code class="literal">rcpt_type</code> in the
          webhook events. To track the <code class="literal">rcpt_type</code> of
          each message copy, you must include this information in the
          recipient level meta data.
        </p>
</div>
<p>
        We recommend you submit one set of message copies per submission
        so that you can correlate reports using the transmission ID. If
        you submit multiple sets of message copies, you can correlate
        the copies by providing your own tracking data element in the
        meta data for each message in the set.
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
-d @<em class="replaceable"><code>path/to/file/</code></em>cc_bcc_example.json \
-H "Content-Type: application/json" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">cc_bcc_example.json</code> is the name of
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
      "total_accepted_recipients":3,
      "id":"<em class="replaceable"><code>11977354662379529</code></em>"
   }
}</pre>
<p>
        This response shows that three emails were accepted and none
        were rejected.
      </p>
</li>
<li class="listitem">
<p>
        Confirm your email delivery.
      </p>
<p>
        Each recipient (To, CC, BCC, and archive) is counted as a
        targeted message. As a result, each <span class="emphasis"><em>CC</em></span> and
        <span class="emphasis"><em>BCC</em></span> message, as well as the archive copy of
        the nmessage, is given a unique tracking URL.
      </p>
<p>
        Verify that your recipients received the emails, then open the
        UI and confirm that your message was successfully injected into
        Momentum (Targeted) and accepted by the ISP (Accepted). For
        instructions to view reports in the UI, see
        <a class="xref" href="reporting_ui.php" title="Chapter 56. Using the UI for Reporting">Chapter 56, <i>Using the UI for Reporting</i></a>.
      </p>
</li>
</ol></div>
<p>
    Congratulations! You have used your knowledge of the REST API to
    send an email as a <span class="emphasis"><em>CC</em></span> and
    <span class="emphasis"><em>BCC</em></span>. You can find more information about the
    attributes used in the Templates and Recipient Lists API
    documentation available at <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4
    REST API</a>.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="using_list.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.http_rest.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="complex_template.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 51. Using Stored Recipient Lists </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 53. Using Complex Templates</td>
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
