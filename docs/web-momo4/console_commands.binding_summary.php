<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>binding summary</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="console.cmds.ref.php" title="Chapter 73. Non-Module-Specific Console Commands">
<link rel="prev" href="console_commands.binding_flush_domain.php" title="binding flush domain">
<link rel="next" href="console_commands.cache_list.php" title="cache list">
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
<tr><th colspan="3" align="center">binding summary</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="console_commands.binding_flush_domain.php">Prev</a> </td>
<th width="60%" align="center">Chapter 73. Non-Module-Specific Console Commands</th>
<td width="20%" align="right"> <a accesskey="n" href="console_commands.cache_list.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="console_commands.binding_summary"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>binding summary — show binding statistics</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">binding summary</code>  [ 
          <em class="replaceable"><code>&lt;binding name&gt;</code></em>
          |   
          <em class="replaceable"><code>&lt;binding slot&gt;</code></em>
          |   
          group:<em class="replaceable"><code>&lt;binding group&gt;</code></em>
         ]</p></div>
</div>
<div class="refsection">
<a name="idp14172528"></a><h2>Description</h2>
<p>
      <span class="command"><strong>binding summary</strong></span> will produce metrics such as
      queue sizes, message counts and throughput rates since startup
      over all the bindings. If a specific binding name, binding slot or
      binding group name is given, the metrics will be for the specified
      binding or binding group.
    </p>
<pre class="screen">
10:47:35 /tmp/2025&gt; binding summary
Summary Statistics For Binding default
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:     12
        Successfully Delivered Messages:      0
        Failed Messages:      0
        Received Messages:      0
        Resident Messages:      0
        Delivery Rate:   0.00 messages/second
        Reception Rate:   0.00 messages/second
        Uptime:    590 seconds
Summary Statistics For Binding example
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    506
        Failed Messages:      0
        Received Messages:    506
        Resident Messages:      0
        Delivery Rate:   0.86 messages/second
        Reception Rate:   0.86 messages/second
        Uptime:    590 seconds
Summary Statistics For Binding example2
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    494
        Failed Messages:      0
        Received Messages:    494
        Resident Messages:      0
        Delivery Rate:   0.84 messages/second
        Reception Rate:   0.84 messages/second
        Uptime:    590 seconds

09:37:38 ecelerity(/tmp/2025)&gt; binding summary example
Summary Statistics For Binding example
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    506
        Failed Messages:      0
        Received Messages:    506
        Resident Messages:      0
        Delivery Rate:   0.85 messages/second
        Reception Rate:   0.85 messages/second
        Uptime:    596 seconds

09:37:44 ecelerity(/tmp/2025)&gt; binding summary group:group1
Summary Statistics For Binding example in Binding Group group1
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    506
        Failed Messages:      0
        Received Messages:    506
        Resident Messages:      0
        Delivery Rate:   0.84 messages/second
        Reception Rate:   0.84 messages/second
        Uptime:    602 seconds
Summary Statistics For Binding example2 in Binding Group group1
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    494
        Failed Messages:      0
        Received Messages:    494
        Resident Messages:      0
        Delivery Rate:   0.82 messages/second
        Reception Rate:   0.82 messages/second
        Uptime:    602 seconds

********************************************
Summary Statistics For Binding Group group1
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:   1000
        Failed Messages:      0
        Received Messages:   1000
        Incore Messages:      0
        Delivery Rate:   1.66 messages/second
        Reception Rate:   1.66 messages/second
        Uptime:    602 seconds

09:37:50 ecelerity(/tmp/2025)&gt;
      </pre>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          Open Connections
        </span></dt>
<dd><p>
            The current number of established outbound sessions.
          </p></dd>
<dt><span class="term">
          Active Queue Size
        </span></dt>
<dd><p>
            The number of messages in the system that require immediate
            delivery attempts.
          </p></dd>
<dt><span class="term">
          Total Queue Size
        </span></dt>
<dd><p>
            The sum of all queues.
          </p></dd>
<dt><span class="term">
          Successfully Delivered Messages
        </span></dt>
<dd><p>
            The number of messages successfully delivered by Momentum
            since it was started or since the last summary reset.
          </p></dd>
<dt><span class="term">
          Failed Messages
        </span></dt>
<dd><p>
            The number of outbound messages permanently failed since it
            was started or since the last summary reset.
          </p></dd>
<dt><span class="term">
          Received Messages
        </span></dt>
<dd><p>
            The number of message received by Momentum for deliver since
            it was started or since the last summary reset.
          </p></dd>
<dt><span class="term">
          Delivery Rate
        </span></dt>
<dd><p>
            The average number of messages/second delivered (successful
            and unsuccessful) since Momentum was started or since the
            last summary reset.
          </p></dd>
<dt><span class="term">
          Reception Rate
        </span></dt>
<dd><p>
            The avergage number of messages/second received for delivery
            since Momentum was started or since the last summary reset.
          </p></dd>
<dt><span class="term">
          Uptime
        </span></dt>
<dd><p>
            The number of seconds that Momentum has been running
            continuously.
          </p></dd>
</dl></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
        If the name you provide is a binding group, then the output will
        show a listing of all the bindings that are part of that group,
        followed by a summary for the group.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="console_commands.binding_flush_domain.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="console.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="console_commands.cache_list.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">binding flush domain </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> cache list</td>
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
