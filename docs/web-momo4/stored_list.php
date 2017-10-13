<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 50. Creating Stored Recipient Lists</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.http_rest.php" title="Part VII. Message Generation (HTTP)">
<link rel="prev" href="using_template.php" title="Chapter 49. Using Stored Templates">
<link rel="next" href="using_list.php" title="Chapter 51. Using Stored Recipient Lists">
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
<tr><th colspan="3" align="center">Chapter 50. Creating Stored Recipient Lists</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="using_template.php">Prev</a> </td>
<th width="60%" align="center">Part VII. Message Generation (HTTP)</th>
<td width="20%" align="right"> <a accesskey="n" href="using_list.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="stored_list"></a>Chapter 50. Creating Stored Recipient Lists</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc"><dt><span class="section"><a href="stored_list.php#manage_list_ui">50.1. Managing Recipient Lists using the UI</a></span></dt></dl>
</div>
<p class="config"><b>Configuration Change. </b>
      Version 4.1 and later support stored recipient lists.
    </p>
<p>
    <span class="bold"><strong>Introduction</strong></span>
  </p>
<p>
    As consumer behaviors and preferences continue to change rapidly,
    it’s critical that you send the right message to the right
    customer at the right time and place. Creating different recipient
    lists based on various demographic information enables you to
    personalize messages and to provide relevant content to your
    customers. Momentum's message generation supports creating stored
    recipient lists, to reuse in future campaigns, using the REST API .
    The REST API also supports associating tags, metadata, and
    substitution data with a recipient, providing further insight into
    your customer engagement.
  </p>
<p>
    As in the case of an "inline" recipient list, the recipient list
    must be in JSON format and can use the substitution engine's
    powerful features. Note that recipient substitution data takes
    precedence over transmission substitution data.
  </p>
<p>
    <span class="bold"><strong>Creating a Stored Recipient List</strong></span>
  </p>
<p>
    This section provides instructions to create a stored recipient list
    using the REST API. It introduces you to the Recipient Lists API,
    which provides the means to create and manage your recipient lists.
  </p>
<div class="note">
<h3 class="title">Note</h3>
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
    Follow these steps to create a stored recipient list:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Specify your recipient information.
      </p>
<p>
        You create a stored recipient list by first specifying all
        recipient data in a JSON blob that will be included in the
        Recipient Lists API call. The recipient data includes required
        and optional attributes. At a minimum, you must specify the
        recipient's email address.
      </p>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">simple_list.json</code>. Be sure to use your
        information for recipient addresses and recipient names.
      </p>
<pre class="screen">{  
   "id":"simple_list",
   "recipients":[  
      {  
         "address":{  
            "email":"<em class="replaceable"><code>recipient1@their_address.com</code></em>",
            "name":"<em class="replaceable"><code>recipient1</code></em>"
         }
      },
      {  
         "address":{  
            "email":"<em class="replaceable"><code>recipient2@their_address.com</code></em>",
            "name":"<em class="replaceable"><code>recipient2</code></em>"
         }
      }
   ]
}</pre>
<p>
        As for inline recipient lists, the "recipients" object includes
        the email address for each recipient.
      </p>
<p>
        An identifier for the recipient list is optional. However, this
        field will be required to identify the recipient list when it is
        used in a transmission. If an "id" is not specified, one will be
        generated when the recipient list is created.
      </p>
</li>
<li class="listitem">
<p>
        Store your recipient list.
      </p>
<p>
        You store your recipient list by sending a HTTP POST request to
        the appropriate URL with your JSON blob. To access the Recipient
        Lists API, you send an HTTP request to
        <strong class="userinput"><code>http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/recipient-lists/</code></strong>.
      </p>
<p>
        At the command line, enter the following command to store your
        recipient list:
      </p>
<pre class="programlisting">curl -X POST http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/recipient-lists/ \
-d @<em class="replaceable"><code>path/to/file/</code></em>simple_list.json \
-H "Content-Type: application/json" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">simple_list.json</code> is the name of your
        JSON file, <code class="literal">application/json</code> specifies the
        format as JSON, and <em class="replaceable"><code>your_api_key</code></em> is
        your valid API key.
      </p>
<p>
        If successful, the following response will be displayed at the
        command line:
      </p>
<pre class="screen">{  
   "results":{  
      "total_rejected_recipients":0,
      "total_accepted_recipients":2,
      "name":"simple_list",
      "id":"simple_list"
   }
}</pre>
<p>
        This response shows that a list including two recipients was
        successfully stored.
      </p>
</li>
<li class="listitem">
<p>
        View your stored recipient list.
      </p>
<p>
        You can retrieve details about your recipient list by specifying
        its identifier in the URI path of the GET method. To retrieve
        the recipients contained in a list, you must include the
        <strong class="userinput"><code>show_recipients=true</code></strong> query parameter in
        the API call.
      </p>
<p>
        At the command line, enter the following command to retrieve the
        recipient list object:
      </p>
<pre class="programlisting">curl -X GET http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/recipient-lists/simple_list?show_recipients=true \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <em class="replaceable"><code>your_api_key</code></em> is your valid API
        key.
      </p>
<p>
        If successful, a response similar to the following will be
        displayed at the command line:
      </p>
<pre class="screen">{  
   "results":{  
      "id":"simple_list",
      "name":"simple_list",
      "description":"",
      "total_accepted_recipients":2,
      "recipients":[  
         {  
            "address":{  
               "email":"<em class="replaceable"><code>recipient1@their_address.com</code></em>",
               "name":"<em class="replaceable"><code>recipient1</code></em>"
            },
            "return_path":""
         },
         {  
            "address":{  
               "email":"<em class="replaceable"><code>recipient2@their_address.com</code></em>",
               "name":"<em class="replaceable"><code>recipient2</code></em>"
            },
            "return_path":""
         }
      ]
   }
}</pre>
</li>
</ol></div>
<p>
    Congratulations! You have created your first stored recipient list
    using Momentum's Recipient Lists API. To learn more about managing
    recipient lists, see the Recipient Lists API documentation available
    at <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="manage_list_ui"></a>50.1. Managing Recipient Lists using the UI</h2></div></div></div>
<p class="config"><b>Configuration Change. </b>
        Version 4.2 and later support managing your recipient lists
        using the UI.
      </p>
<p>
      You can also create and manage your recipient lists using the
      web-based UI. For detailed instructions, see
      <a class="xref" href="web-ui.php#web-ui.recipients" title="55.1. Recipient Lists">Section 55.1, “Recipient Lists”</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="using_template.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.http_rest.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="using_list.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 49. Using Stored Templates </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 51. Using Stored Recipient Lists</td>
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
