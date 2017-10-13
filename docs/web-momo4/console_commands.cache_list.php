<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>cache list</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="console.cmds.ref.php" title="Chapter 73. Non-Module-Specific Console Commands">
<link rel="prev" href="console_commands.binding_summary.php" title="binding summary">
<link rel="next" href="console_commands.cache_stat.php" title="cache stat">
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
<tr><th colspan="3" align="center">cache list</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="console_commands.binding_summary.php">Prev</a> </td>
<th width="60%" align="center">Chapter 73. Non-Module-Specific Console Commands</th>
<td width="20%" align="right"> <a accesskey="n" href="console_commands.cache_stat.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="console_commands.cache_list"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>cache list — list all caches along with their associated attributes</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">cache list</code>  [
        <em class="replaceable"><code>attribute</code></em>
      ...]</p></div>
</div>
<div class="refsection">
<a name="idp13791280"></a><h2>Description</h2>
<p>
      This command lists caches and related statistics. When specific
      parameters such as the query rate are passed in, this command
      displays usage by cache.
    </p>
<pre class="screen">
20:02:48 /tmp/2025&gt; cache list
 alerting_data
 scpt_root
 core:bounce_classify
 core:pcre
 config:match

 5 caches listed.
20:02:49 /tmp/2025&gt; cache stat core:bounce_classify
Name          : core:bounce_classify
Capacity      : 16384
Entries       : 10238
Utilization   :  62.49%
Query Rate    : 1271 q/s
Loads         : 20476
  Hits        : 1527
  Misses      : 18949
  Pending     : 0
Stores        : 18949
Invalidations : 8711
  Forced      : 0
  Expired     : 0
  Capacity    : 8711
Hit Rate      :   7.46%
Workload (R/W):  51.94%
  Reads       : 20476
  Writes      : 18949
20:03:17 /tmp/2025&gt; cache list entries workload
     10179  80.45% alerting_data
        22  99.97% scpt_root
     10238  51.94% core:bounce_classify
         0   0.00% core:pcre
         0   0.00% config:match

 5 caches listed.
20:03:20 /tmp/2025&gt; cache list query-rate
       501 alerting_data
       792 scpt_root
       379 core:bounce_classify
         0 core:pcre
         0 config:match

 5 caches listed.
20:03:29 /tmp/2025&gt; cache list xxx
Valid attributes are [capacity,entries,utilization,loads,stores,hits,misses,
 forced,expired,lru,hit-rate,workload,query-rate]
</pre>
<p>
      The <span class="command"><strong>cache list</strong></span> command is useful for
      determining the cache names to use with the
      <a class="xref" href="console_commands.cache_stat.php" title="cache stat"><span class="refentrytitle">cache stat</span></a> command.
    </p>
<p>
      The optional cache attribute parameters are:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          capacity
        </p></li>
<li class="listitem"><p>
          entries
        </p></li>
<li class="listitem"><p>
          utilization
        </p></li>
<li class="listitem"><p>
          loads
        </p></li>
<li class="listitem"><p>
          stores
        </p></li>
<li class="listitem"><p>
          hits
        </p></li>
<li class="listitem"><p>
          misses
        </p></li>
<li class="listitem"><p>
          forced
        </p></li>
<li class="listitem"><p>
          expired
        </p></li>
<li class="listitem"><p>
          lru (least recently used)
        </p></li>
<li class="listitem"><p>
          hit-rate
        </p></li>
<li class="listitem"><p>
          workload
        </p></li>
<li class="listitem"><p>
          query-rate
        </p></li>
</ul></div>
<p>
      Optional cache attribute parameters are:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          all
        </p></li>
<li class="listitem"><p>
          summary
        </p></li>
<li class="listitem"><p>
          capacity
        </p></li>
<li class="listitem"><p>
          entries
        </p></li>
<li class="listitem"><p>
          used
        </p></li>
<li class="listitem"><p>
          loads
        </p></li>
<li class="listitem"><p>
          stores
        </p></li>
<li class="listitem"><p>
          hits
        </p></li>
<li class="listitem"><p>
          misses
        </p></li>
<li class="listitem"><p>
          forced
        </p></li>
<li class="listitem"><p>
          expired
        </p></li>
<li class="listitem"><p>
          lru (least recently used)
        </p></li>
<li class="listitem"><p>
          replaced
        </p></li>
<li class="listitem"><p>
          hitratio
        </p></li>
<li class="listitem"><p>
          workload
        </p></li>
<li class="listitem"><p>
          queryrate
        </p></li>
</ul></div>
<p>
      The <code class="literal">all</code> parameter shows all attributes. The
      <code class="literal">summary</code> parameter displays the following
      output:

</p>
<pre class="screen">
07:07:00 /tmp/2025&gt; cache list summary
CAPACITY    ENTRIES     USED    HT/TL   RD/WR CACHE
1048576       3507     0.33%   93.72%  57.82% core:named_throttles
1024          1        0.10%   99.75%  99.75% ds_core:ecdb
1024          0        0.00%    0.00%   0.00% ds_core:adaptivedb
16            0        0.00%    0.00%   0.00% 0x2aaabb19f858
16384         312      1.90%   99.96%  99.98% adaptive_lookup:retry_fuzz
16384         16384  100.00%   96.53%  98.30% adaptive_lookup:blackhole
16384         16384  100.00%   99.34%  99.67% adaptive_lookup:max_retry_interval
16384         16384  100.00%   97.62%  98.82% adaptive_lookup:idle_timeout
16384         16384  100.00%   95.67%  97.88% adaptive_lookup:max_resident_active_queue
16384         16384  100.00%   88.47%  94.55% adaptive_lookup:mailfrom_timeout
16384         16384  100.00%   88.47%  94.55% adaptive_lookup:max_recipients_per_batch
16384         16384  100.00%   92.33%  96.31% adaptive_lookup:max_recipients_per_connection
16384         16384  100.00%   96.77%  98.41% adaptive_lookup:outbound_throttle_messages
16384         16384  100.00%   86.54%  93.69% adaptive_lookup:ehlo_timeout
16384         16384  100.00%   98.64%  99.32% adaptive_lookup:max_retries
16384         16384  100.00%   96.96%  98.50% adaptive_lookup:max_outbound_connections
16384         16384  100.00%   97.01%  98.53% adaptive_lookup:suspend_delivery
16384         16384  100.00%   98.63%  99.32% adaptive_lookup:retry_interval
16384         16384  100.00%   87.58%  94.15% adaptive_lookup:body_timeout
16384         16384  100.00%   87.13%  93.95% adaptive_lookup:max_deliveries_per_connection
16384         16384  100.00%   86.27%  93.58% adaptive_lookup:rcptto_timeout
16384         2761    16.85%   95.82%  97.95% adaptive_lookup:rset_timeout
262144        65179   24.86%   98.33%  70.61% alerting_data
2048          653     31.88%   99.96%  99.96% 0x2b59ee386588
4294967295    17       0.00%  100.00% 100.00% scpt_root
256           2        0.78%  100.00% 100.00% core:sieve_scripts
16384         16384  100.00%   15.89%  54.32% core:bounce_classify
128           0        0.00%    0.00%   0.00% core:pcre
4294967295    390289   0.01%   99.93%  99.93% config:match
65536         374      0.57%   99.99%  99.99% retry_state

  30 caches listed.
</pre>
<p>
    </p>
</div>
<div class="refsection">
<a name="idp7330528"></a><h2>See Also</h2>
<p>
      <a class="xref" href="console_commands.cache_stat.php" title="cache stat"><span class="refentrytitle">cache stat</span></a>,
      <a class="xref" href="console_commands.cache_stats.php" title="cache stats"><span class="refentrytitle">cache stats</span></a>,
      <a class="xref" href="conf.ref.match_cache_life.php" title="match_cache_life"><span class="refentrytitle">match_cache_life</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="console_commands.binding_summary.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="console.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="console_commands.cache_stat.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">binding summary </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> cache stat</td>
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
