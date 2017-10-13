<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.27. dnsbuf – Dynamically Set the DNS UDP Buffer Size</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.delay_dsn.php" title="71.26. delay_dsn – Delay DSN Generation">
<link rel="next" href="modules.domainkeys.php" title="71.28. domainkeys – Yahoo! DomainKeys">
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
<tr><th colspan="3" align="center">71.27. dnsbuf – Dynamically Set the DNS UDP Buffer Size</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.delay_dsn.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.domainkeys.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.dnsbuf"></a>71.27. dnsbuf – Dynamically Set the DNS UDP Buffer Size</h2></div></div></div>
<a class="indexterm" name="idp21233792"></a><p class="config"><b>Configuration Change. </b>
      This feature is available in Momentum 4.2 and later.
    </p>
<p>
    Momentum does not manipulate the size of UDP sockets it creates and
    uses for DNS queries; instead, it will use the default sizes
    configured by the Operating System. This can create problems for
    clients with too many domains (e.g., tens of thousands) in the
    system. Responses may be dropped, causing unnecessary DNS failures
    and retries, thus further increasing the DNS query volume. The
    <code class="literal">dnsbuf</code> module enables the client to manipulate
    the DNS buffer sizes on demand, on the fly.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.dnsbuf.configuration"></a>71.27.1. Configuration</h3></div></div></div>
<p>
      The <code class="literal">dnsbuf</code> module is configured as follows:
    </p>
<div class="example">
<a name="example.dnsbuf"></a><p class="title"><b>Example 71.43. dnsbuf module</b></p>
<div class="example-contents"><pre class="programlisting">
dnsbuf {
    sndbuf_size = "65536" # Default value is 131072
    rcvbuf_size = "65536" # Default value is 131072
    interval = "30"       # Default value is 60 seconds
}</pre></div>
</div>
<br class="example-break"><div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          sndbuf_size
        </span></dt>
<dd><p>
            The SO_SNDBUF value is set to this value for all UDP DNS
            sockets in the Momentum DNS implementation. Minimum value is
            1024. Note that in Linux the value in the kernel is
            automatically doubled; e.g., when a value of 65536 is
            configured in the module, the kernel will implement a buffer
            size of 131072.
          </p></dd>
<dt><span class="term">
          rcvbuf_size
        </span></dt>
<dd><p>
            The SO_RCVBUF value is set to this value for all UDP DNS
            sockets in the Momentum DNS implementation. Minimum value is
            1024. Note that in Linux the value in the kernel is
            automatically doubled; e.g., when a value of 65536 is
            configured in the module, the kernel will actually implement
            a buffer size of 131072.
          </p></dd>
<dt><span class="term">
          interval
        </span></dt>
<dd><p>
            This parameter determines how often the
            <code class="literal">setsockopt()</code> operations are performed.
            This process must be performed on a periodic basis as there
            is no hook point available in the system that allows the
            task to be performed when new UDP DNS sockets are created.
            The value is defined in terms of seconds.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.dnsbuf.console"></a>71.27.2. dnsbuf Management Using Console Commands</h3></div></div></div>
<p>
      The following console commands are specific to the
      <code class="literal">dnsbuf</code> module.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          config set dnsbuf sndbuf_size <em class="replaceable"><code>xxx</code></em>
        </span></dt>
<dd><p>
            Change the <code class="literal">sndbuf_size</code> value on the fly
            to <em class="replaceable"><code>xxx</code></em>. This does not persist
            after a restart of Ecelerity; therefore, the configuration
            file must also be changed. Note that the change to the DNS
            socket buffer sizes is not immediate. Those values will not
            change until the next interval as described previously.
          </p></dd>
<dt><span class="term">
          config set dnsbuf rcvbuf_size <em class="replaceable"><code>xxx</code></em>
        </span></dt>
<dd><p>
            Change the <code class="literal">rcvbuf_size</code> value on the fly
            to <em class="replaceable"><code>xxx</code></em>. This does not persist
            after a restart of Ecelerity; therefore, the configuration
            file must also be changed. Note that the change to the DNS
            socket buffer sizes is not immediate. Those values will not
            change until the next interval as described previously.
          </p></dd>
<dt><span class="term">
          config set dnsbuf interval <em class="replaceable"><code>xxx</code></em>
        </span></dt>
<dd><p>
            Change how often the <code class="literal">setsockopt()</code>
            operations are performed. This change is not honored until
            the next automatic run; e.g., if the previous value was 60
            and you call 'dnsbuf interval 10' 30 seconds after the last
            run happened, the next run will not happen for 30 seconds,
            but subsequent runs will happen every 10 seconds.
          </p></dd>
<dt><span class="term">
          dnsbuf verify
        </span></dt>
<dd><p>
            Using <code class="literal">getsockopt()</code>, query all active
            sockets for their current buffer sizes and report the
            results. These are the actual values reported by the kernel,
            and take into account the doubling behavior described
            previously. These values may not reflect recent changes made
            to the configured values in the <code class="literal">dnsbuf</code>
            module as the next periodic <code class="literal">setsockopt()</code>
            may not have been called yet.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.dnsbuf.subtleties"></a>71.27.3. Subtleties</h3></div></div></div>
<p>
      The following are subtleties associated with the
      <code class="literal">dnsbuf</code> module:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          When the system starts up, it is common to fail on the first
          attempt to update the buffer sizes. While the DNS system is
          initialized on startup, the UDP sockets are not actually
          created until the first DNS query is pushed into the system.
          Therefore, if a <span class="command"><strong>dnsbuf verify</strong></span> is performed
          right after startup it will likely report the system default
          settings.
        </p></li>
<li class="listitem"><p>
          Worst case, it will take 60 seconds from when the first email
          message is processed by the system to when the DNS buffer
          sizes are raised. The interval could be made smaller, although
          there is a risk that running the
          <code class="literal">setsockopt()</code> routines too often could
          reduce performance.
        </p></li>
<li class="listitem"><p>
          Server numbers are indexed based on their order in the
          <code class="filename">resolv.conf</code> file. So server 0 represents
          the first <code class="option">nameserver</code> line, server 1
          represents the second <code class="option">nameserver</code> line, and so
          on.
        </p></li>
<li class="listitem">
<p>
          The buffer cannot be set beyond the sysctl-defined maximums in
          Linux:
        </p>
<pre class="programlisting">
net.core.rmem_max
net.core.wmem_max
</pre>
<p>
          Note that those values are the post-doubled values; e.g., if
          <code class="literal">net.core.wmem_max</code> is set to 65536, the
          maximum value that will work in the <code class="literal">dnsbuf</code>
          module is <code class="literal">sndbuf_max</code> = 32768.
        </p>
</li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.dnsbuf.limitations"></a>71.27.4. Limitations</h3></div></div></div>
<p>
      The following are limitations of the <code class="literal">dnsbuf</code>
      module:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
          Alternative DNS resolution channels are used by the Sieve
          <code class="literal">ec_dns_lookup</code> action when a custom server
          is specified, e.g.:
        </p>
<pre class="programlisting">
$result = ec_dns_lookup "foo.com" "a" "ns.foo.com";
</pre>
</li>
<li class="listitem"><p>
          The module can only modify the buffer sizes for the primary
          DNS resolution channel. This module cannot alter the UDP
          buffer size for alternative DNS resolution channels.
        </p></li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.dnsbuf.dropped"></a>71.27.5. Determining that DNS Responses are Being Dropped</h3></div></div></div>
<p>
      To determine whether the DNS responses are being dropped because
      the DNS UDP socket buffer is full, look for a corresponding
      increase in the "Pending DNS Queries" statistic from Momentum and
      the UDP packet errors from netstat, e.g.:
    </p>
<pre class="programlisting">
while sleep 1; do (netstat --udp -s | grep error; echo summary |
    /opt/msys/ecelerity/bin/ec_console | grep DNS); echo; done
</pre>
<p>
      The following is an example in which Momentum started with ~30,000
      unresolvable domains in the queue. Notice that the "packet receive
      errors" number has increased, and there are a high number of
      pending DNS queries.
    </p>
<pre class="programlisting">
    1559857 packet receive errors
  DNS A Queries: 924801
  DNS AAAA Queries: 0
  DNS MX Queries: 907577
  Pending DNS Queries: 312

    1559857 packet receive errors
  DNS A Queries: 924803
  DNS AAAA Queries: 0
  DNS MX Queries: 907849
  Pending DNS Queries: 43

    1560125 packet receive errors
  DNS A Queries: 924803
  DNS AAAA Queries: 0
  DNS MX Queries: 908388
  Pending DNS Queries: 311

</pre>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.delay_dsn.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.domainkeys.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.26. delay_dsn – Delay DSN Generation </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.28. domainkeys – Yahoo! DomainKeys</td>
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
