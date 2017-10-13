<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 47. Creating Stored Templates</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.http_rest.php" title="Part VII. Message Generation (HTTP)">
<link rel="prev" href="substitution_data.php" title="Chapter 46. Using Substitution Data">
<link rel="next" href="web-ui.templates.php" title="Chapter 48. Managing Your Templates in the UI">
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
<tr><th colspan="3" align="center">Chapter 47. Creating Stored Templates</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="substitution_data.php">Prev</a> </td>
<th width="60%" align="center">Part VII. Message Generation (HTTP)</th>
<td width="20%" align="right"> <a accesskey="n" href="web-ui.templates.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="stored_template"></a>Chapter 47. Creating Stored Templates</h2></div></div></div>
<p>
    <span class="bold"><strong>Introduction</strong></span>
  </p>
<p>
    A key component of a successful campaign is managing your message
    templates. Being able to design and reuse templates allows you to
    provide a consistent look and feel across all your campaigns.
    Momentum's message generation supports template management enabling
    you to create, update, and reuse stored templates. You can manage
    your templates in a web-based User Interface (UI) or using the REST
    API. Your company can easily build brand-aligned templates once and
    then focus on other challenges, such as who to send the messages to
    and what content is most relevant for each recipient.
  </p>
<p>
    As in the case of an "inline" template, the template content must be
    in JSON format and can use the substitution engine's powerful
    features, such as key/value substitutions, conditional statements,
    and looping. By default, templates are created as drafts. Once
    created, you can perform actions such as update, publish, and
    delete.
  </p>
<p>
    <span class="bold"><strong>Creating a Stored Template Using the REST
    API</strong></span>
  </p>
<p>
    This section provides instructions to create a simple stored
    template using the REST API. It introduces you to the Templates API,
    which provides the means to manage your templates. In this simple
    case, the template will include a plain-text message only.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      This tutorial assumes that you have completed the tutorial in
      <a class="xref" href="substitution_data.php" title="Chapter 46. Using Substitution Data">Chapter 46, <i>Using Substitution Data</i></a>. A general knowledge
      of command line tools, JSON, HTTP protocol, and templating
      languages is required.
    </p>
<p>
      You must have a valid API key to complete this tutorial. If you do
      not, see <a class="xref" href="create_apikey.php" title="Chapter 43. Creating an API Key">Chapter 43, <i>Creating an API Key</i></a>.
    </p>
</div>
<p>
    Follow these steps to create a stored template:
  </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
        Specify your template.
      </p>
<p>
        You create a template by first specifying all input data in a
        JSON blob that will be included in the Templates API call. The
        input data includes required and optional template attributes.
        At a minimum, you must specify the template "id" or "name" along
        with the "content". Content for a template is described in a
        JSON object. At a minimum, it must include a "from" address, a
        "subject", and "html" or "text" string.
      </p>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">simple_template.json</code>. Be sure to use your
        information for sender address.
      </p>
<pre class="screen">{  
   "id":"simple_template",
   "published":false,
   "content":{  
      "from":"<em class="replaceable"><code>sender@your_address.com</code></em>",
      "subject":"Sending Email Using a Stored Template",
      "text":"Hi {{firstName}},\r\nWelcome to {{sender}}!"
   }
}</pre>
<p>
        The attribute "id" identifies the template when it is used in a
        transmission. As for inline templates, the "content" object
        includes the content that will be used to construct the message.
      </p>
<p>
        The "published" attribute indicates whether the template is
        published or is a draft version. By default, templates are
        created as drafts, and this attribute is optional. It is
        included in this example to demonstrate how to publish a
        template later in this tutorial.
      </p>
</li>
<li class="listitem">
<p>
        Store your template as a draft.
      </p>
<p>
        You store your template by sending a HTTP POST request to the
        appropriate URL with your JSON blob. To access the Templates
        API, you send an HTTP request to
        <strong class="userinput"><code>http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/templates/</code></strong>.
      </p>
<p>
        At the command line, enter the following command to store your
        template:
      </p>
<pre class="programlisting">curl -X POST http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/templates/ \
-d @<em class="replaceable"><code>path/to/file/</code></em>simple_template.json \
-H "Content-Type: application/json" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">simple_template.json</code> is the name of
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
      "id":"simple_template"
   }
}</pre>
<p>
        This response shows that the request was successful.
      </p>
</li>
<li class="listitem">
<p>
        Preview your template using substitution data.
      </p>
<p>
        You can preview your template by providing a JSON blob that
        includes substitution data. The "content" of your template will
        be expanded using the "substitution_data."
      </p>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">data_for_template.json</code>. Be sure to use your
        recipient name.
      </p>
<pre class="screen">{  
   "substitution_data":{  
      "firstName":"<em class="replaceable"><code>recipient first name</code></em>",
      "sender":"Momentum"
   }
}</pre>
<p>
        You preview your template by sending a HTTP POST request to the
        appropriate URL. Reference your template identifier and include
        your substitution data JSON blob. To preview a draft template,
        you must also include the <strong class="userinput"><code>draft=true</code></strong>
        query parameter in the API call.
      </p>
<p>
        At the command line, enter the following command to preview your
        template:
      </p>
<pre class="programlisting">curl -X POST http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/templates/simple_template/preview?draft=true \
-d @<em class="replaceable"><code>path/to/file/</code></em>data_for_template.json \
-H "Content-Type: application/json" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">data_for_template.json</code> is the name of
        your JSON file, <code class="literal">application/json</code> specifies
        the format as JSON, and <em class="replaceable"><code>your_api_key</code></em>
        is your valid API key.
      </p>
<p>
        If successful, the response will include the "content" with the
        data substituted, such as the following:
      </p>
<pre class="screen">{  
   "results":{  
      "from":"<em class="replaceable"><code>sender@your_address.com</code></em>",
      "subject":"Sending Email Using a Stored Template",
      "text":"Hi <em class="replaceable"><code>recipient first name</code></em>,\r\nWelcome to Momentum!"
   }
}</pre>
</li>
<li class="listitem">
<p>
        Update and publish your template.
      </p>
<p>
        You can make changes to your template by specifying a JSON blob
        that includes the updates to the template. The "content" object
        given in the update request will completely overwrite any
        existing "content". If you want to modify fields besides
        "content", include the fields to modify. Only those fields
        specified will be updated.
      </p>
<p>
        Using your text editor, create the following JSON file named
        <code class="filename">update_template.json</code>. This file includes
        updates to the content of "content" and changes the "published"
        attribute. Be sure to use your information for sender address.
      </p>
<pre class="screen">{  
   "id":"simple_template",
   "published":true,
   "content":{  
      "from":"<em class="replaceable"><code>sender@your_address.com</code></em>",
      "subject":"Sending Email Using a Stored Template",
      "text":"Hi {{firstName}},\r\nWelcome to {{sender}}!\r\nThis is your first stored template."
   }
}</pre>
<p>
        Publishing a template is just a specific case of an update. You
        publish your template by changing the published attribute to
        true <strong class="userinput"><code>"published": true</code></strong>.
      </p>
<p>
        You update and publish your template by sending a HTTP PUT
        request to the appropriate URL. Reference your template
        identifier and include your updates as the JSON blob.
      </p>
<p>
        At the command line, enter the following command to update and
        publish your template:
      </p>
<pre class="programlisting">curl -X PUT http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/templates/simple_template \
-d @<em class="replaceable"><code>path/to/file/</code></em>update_template.json \
-H "Content-Type: application/json" \
-H "Authorization: <em class="replaceable"><code>your_api_key</code></em>"</pre>
<p>
        where <code class="filename">update_template.json</code> is the name of
        your JSON file, <code class="literal">application/json</code> specifies
        the format as JSON, and <em class="replaceable"><code>your_api_key</code></em>
        is your valid API key.
      </p>
<p>
        If successful, the following response will be displayed at the
        command line:
      </p>
<pre class="screen">{ }</pre>
<p>
        This response shows that the request was successful.
      </p>
</li>
<li class="listitem">
<p>
        Verify your updates.
      </p>
<p>
        You can retrieve a template by specifying its identifier in the
        URI path of the GET method.
      </p>
<p>
        At the command line, enter the following command to retrieve the
        template object:
      </p>
<pre class="programlisting">curl -X GET http://<em class="replaceable"><code>your.server.domain</code></em>/api/v1/templates/simple_template \
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
      "id":"simple_template",
      "name":"simple_template",
      "description":"",
      "published":true,
      "options":{  

      },
      "content":{  
         "from":"<em class="replaceable"><code>sender@your_address.com</code></em>",
         "subject":"Sending Email Using a Stored Template",
         "text":"Hi {{firstName}},\r\nWelcome to {{sender}}!\r\nThis is your first stored template."
      }
   }
}</pre>
<p>
        This response shows your updated template in the results JSON
        structure.
      </p>
</li>
</ol></div>
<p>
    Congratulations! You have created your first stored template using
    Momentum's Templates API. To learn more about managing templates,
    see the Templates API documentation available at
    <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
  </p>
<p>
    <span class="bold"><strong>Managing Templates using the UI</strong></span>
  </p>
<p class="config"><b>Configuration Change. </b>
      Version 4.1 and later support managing your templates using the
      UI.
    </p>
<p>
    You can also create and manage your templates using the web-based
    UI. For detailed instructions, see
    <a class="xref" href="web-ui.templates.php" title="Chapter 48. Managing Your Templates in the UI">Chapter 48, <i>Managing Your Templates in the UI</i></a>.
  </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="substitution_data.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.http_rest.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="web-ui.templates.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 46. Using Substitution Data </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 48. Managing Your Templates in the UI</td>
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
