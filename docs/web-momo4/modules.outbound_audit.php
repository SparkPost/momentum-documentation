<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.51. outbound_audit – Outbound traffic analytics</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.opendkim.php" title="71.50. opendkim – Open Source DKIM">
<link rel="next" href="modules.outbound_smtp_auth.php" title="71.52. outbound_smtp_auth">
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
<tr><th colspan="3" align="center">71.51. outbound_audit – Outbound traffic analytics</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.opendkim.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.outbound_smtp_auth.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.outbound_audit"></a>71.51. outbound_audit – Outbound traffic analytics</h2></div></div></div>
<a class="indexterm" name="idp22451312"></a><p>
    The outbound_audit module provides time-series analytics on the
    behavior of receiving domains. It is designed to help spot emergent
    issues, such as blocking, tarpitting, etc. The outbound_audit module
    differs from the standard analytics available in Momentum in that it
    allows you to compare short-term real-time data with data from
    earlier time windows. This makes it easy to spot changes in
    behavior.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp22453968"></a>71.51.1. Configuration</h3></div></div></div>
<p>
      The following is an example configuration:
    </p>
<div class="example">
<a name="example.outbound_audit.3"></a><p class="title"><b>Example 71.75. outbound_audit Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
outbound_audit "outbound_audit1"
{
  monitors = ( "300,6" "1800,4" )
  monitor_domains = on
  threshold = 100
}
</pre></div>
</div>
<br class="example-break"><p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          domainlist = domain1[,domain2,...]
        </span></dt>
<dd><p>
            Hardcode a list of domains that you want to store data for.
            This overrides and supercedes the
            <code class="literal">threshold</code> setting.
          </p></dd>
<dt><span class="term">
          monitor_domains = (on|off)
        </span></dt>
<dd><p>
            Monitor individual domains, or simply hold global
            time-series data.
          </p></dd>
<dt><span class="term">
          monitors = ( "window-size, number-of-windows" ... )
        </span></dt>
<dd><p>
            Create monitoring window(s) <span class="emphasis"><em>window-size</em></span>
            seconds long, and maintain
            <span class="emphasis"><em>number-of-windows</em></span> windows historically.
            In the example above, we create two different time-series: 5
            minutes for the past half hour, and 30 minutes for the past
            6 hours.
          </p></dd>
<dt><span class="term">
          threshold = size
        </span></dt>
<dd><p>
            Only store time-series data for domains if they have
            transited more than <span class="emphasis"><em>size</em></span> messages. This
            helps control memory usage by not storing long-term data for
            small domains.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.outbound_audit.console"></a>71.51.2. Console Commands</h3></div></div></div>
<p>
      Use the following console commands below to access outbound_audit
      data:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          outbound_audit:<em class="replaceable"><code>outbound_audit1</code></em>
          clear all
        </span></dt>
<dd><p>
            Zero-out all statistics.
          </p></dd>
<dt><span class="term">
          outbound_audit:<em class="replaceable"><code>outbound_audit1</code></em>
          clear domain [domain]
        </span></dt>
<dd><p>
            Zero-out a domain's statistics.
          </p></dd>
<dt><span class="term">
          outbound_audit:<em class="replaceable"><code>outbound_audit1</code></em>
          domain_list {add|delete} [domain]
        </span></dt>
<dd><p>
            Runtime addition/deletion of a domain in the monitoring
            list.
          </p></dd>
<dt><span class="term">
          outbound_audit:<em class="replaceable"><code>outbound_audit1</code></em> show
          all
        </span></dt>
<dd><p>
            Dump all collected time-series data for all collected
            domains. This can be a large amount of data.
          </p></dd>
<dt><span class="term">
          outbound_audit:<em class="replaceable"><code>outbound_audit1</code></em> show
          domain [domain]
        </span></dt>
<dd><p>
            Dump all collected time-series data for the specified
            domain.
          </p></dd>
<dt><span class="term">
          outbound_audit:<em class="replaceable"><code>outbound_audit1</code></em> show
          domains
        </span></dt>
<dd><p>
            List the names of all domains which have collected data.
          </p></dd>
<dt><span class="term">
          outbound_audit:<em class="replaceable"><code>outbound_audit1</code></em> show
          global
        </span></dt>
<dd><p>
            Show the global (aggregated) time-series data.
          </p></dd>
</dl></div>
<p>
      The following is an example of a query of the outbound_audit
      module's time-series data:
    </p>
<pre class="programlisting">
11:32:29 ecelerity(2025)&gt; outbound_audit:<em class="replaceable"><code>outbound_audit1</code></em> show domain aol.com
aol.com 300/0: r: 107 d: 111 dt: 8.20 t: 2 f: 0
aol.com 300/1: r: 190 d: 168 dt: 8.65 t: 1 f: 0
aol.com 300/2: r: 143 d: 154 dt: 8.91 t: 0 f: 0
aol.com 300/3: r: 264 d: 283 dt: 8.87 t: 1 f: 1
aol.com 300/4: r: 240 d: 216 dt: 9.16 t: 3 f: 0
aol.com 300/5: r: 194 d: 207 dt: 6.60 t: 0 f: 0
aol.com 300/6: r: 264 d: 248 dt: 7.78 t: 3 f: 0
</pre>
<p>
      The fields for this output are as follows:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          domain
        </span></dt>
<dd><p>
            The domain name of the receiving domain being queried.
          </p></dd>
<dt><span class="term">
          window size/window offset
        </span></dt>
<dd><p>
            The size of the window being displayed, plus the number of
            the window. Thus <code class="literal">300/0</code> is the current 5
            minute window, while <code class="literal">300/2</code> is the 5
            minute window that occured 10 minutes ago (i.e., two windows
            back from current).
          </p></dd>
<dt><span class="term">
          r: receptions
        </span></dt>
<dd><p>
            The number of message received by Momentum for that domain
            during that window.
          </p></dd>
<dt><span class="term">
          d: deliveries
        </span></dt>
<dd><p>
            The number of messages successfuly delivered to that domain
            during that window.
          </p></dd>
<dt><span class="term">
          dt: delivery time
        </span></dt>
<dd><p>
            The average delivery time for a successful delivery to that
            domain during that window, in seconds. It is not
            time-in-spool, but time between connection and a successful
            delivery.
          </p></dd>
<dt><span class="term">
          t: transient failures
        </span></dt>
<dd><p>
            The number of transient failures (4xx response codes) for
            delivery attempts to that domain during that window.
          </p></dd>
<dt><span class="term">
          f: permanent failures
        </span></dt>
<dd><p>
            The number of permanent failures (5xx response codes) for
            delivery attempts to that domain during that window.
          </p></dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.opendkim.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.outbound_smtp_auth.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.50. opendkim – Open Source DKIM </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.52. outbound_smtp_auth</td>
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
