<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>memory</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="console.cmds.ref.php" title="Chapter 73. Non-Module-Specific Console Commands">
<link rel="prev" href="console_commands.mailq.php" title="mailq">
<link rel="next" href="console_commands.message_details.php" title="message details">
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
<tr><th colspan="3" align="center">memory</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="console_commands.mailq.php">Prev</a> </td>
<th width="60%" align="center">Chapter 73. Non-Module-Specific Console Commands</th>
<td width="20%" align="right"> <a accesskey="n" href="console_commands.message_details.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="console_commands.memory"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>memory — report detailed memory usage</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">memory</code>  [
        <em class="replaceable"><code>memory_type</code></em>
      ]</p></div>
</div>
<div class="refsection">
<a name="idp11117408"></a><h2>Description</h2>
<p>
      The <span class="command"><strong>memory</strong></span> command provides a detailed overview
      of the type, count and size of the various memory objects that
      Momentum uses internally. Sample output is displayed below:
    </p>
<pre class="screen">
10:47:35 /tmp/2025&gt; memory
                        memory   buf  active  peak    allocd    current
                        type     size objects objects objects   bytes
------------------------------ ------ ------- ------- ------- ---------
                         Event     36      15      16     101      4096
                      Skiplist     28      75      75     127      4096
                 domain_record     76       1       1      50      4096
                     mx_record     12       1       1     254      4096
                   host_record     44       1       1      84      4096
                 email_message    136       1       1      29      4096
                    RSplayTree     20       7       7     169      4096
                 cidrnode_ipv4     32       6       6     127      4096
                   time_series     24       1       1     169      4096
               skiplistnode(1)     28      53      56     127      4096
               skiplistnode(2)     36      12      15     101      4096
               skiplistnode(3)     44       5       8      84      4096
               skiplistnode(4)     52       2       2      72      4096
          binding_domain_stats    120       1       1      33      4096
                         int32      4      62      62     508      4096
                 ec_hash_table     24      25      25     169      4096
                ec_hash_bucket     16     889     889    1016     16384
                  message_list     20       0       1     169      4096
                      _dq_list      8       0       1     508      4096
                        ip_acl     44      14      14      84      4096
              accept_construct    132       5       5      29      4096
------------------------------ ------ ------- ------- ------- ---------
                                                                  98304

       memory                  current       peak      mmap
       type                    bytes         bytes     count/peak/current %
------------------------------ ----------- ----------- ---------------------
       buf_storage             16384       16384
       message_body            17          17
       sieve                   113         113
       string                  8802        8802
       snmp                    32768       32768
       ec_cache_key            42          42
       ec_interface            72          72
       ecdict                  53503       53503
       ec_fc_fifo              6576128     6576128
       ds_core:datasource      3276        3276
       statp:vsize             429         429
       scriptlet               14957       14957
       scriptlet:lua           221427      221427
------------------------------ ----------- ----------- ---------------------
       6927918

RSS:            8658726            8,658,726   1.66%
System RSS:   115417088          115,417,088  22.08%
</pre>
<p>
      The output of this command can be used to diagnose memory growth
      issues and help determine whether custom modules are leaking
      memory. The output consists of three parts: memory usage of
      objects whose size is fixed, memory usage of objects whose size
      is not fixed, and RSS (resident set size).
    </p>
<p>
      You can provide output in XML format using the
      <span class="command"><strong>xml memory</strong></span> command. You can also pass a memory
      type as an argument by issuing the <span class="command"><strong>memory</strong></span> command
      Valid memory types are those listed under the "memory type" column.
    </p>
<p>
      The column names used in the first part for fixed-size objects
      are:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          memory type
        </span></dt>
<dd><p>
            The name of active objects. Any values shown in this column
            are valid memory types when the memory command is issued
            with a parameter.
          </p></dd>
<dt><span class="term">
          buf size
        </span></dt>
<dd><p>
            The size of a memory type.
          </p></dd>
<dt><span class="term">
          active objects
        </span></dt>
<dd><p>
            Number of active objects for a memory type.
          </p></dd>
<dt><span class="term">
          peak objects
        </span></dt>
<dd><p>
            Peak number of active objects ever used for a memory type.
          </p></dd>
<dt><span class="term">
          allocd objects
        </span></dt>
<dd><p>
            Number of objects pre-allocated for a memory type.
          </p></dd>
<dt><span class="term">
          current bytes
        </span></dt>
<dd><p>
            Total memory allocated for a memory type.
          </p></dd>
</dl></div>
<p>
      Additional column names used for objects whose allocations are not
      of fixed size are:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          peak bytes
        </span></dt>
<dd><p>
            The peak bytes ever allocated to a memory type.
          </p></dd>
<dt><span class="term">
          mmap count/peak/current %
        </span></dt>
<dd><p>
            Percentage of memory allocations that were satisfied using
            mmap, when system allocators are in use.
          </p></dd>
</dl></div>
<p>
      The System RSS represents the current resident set size as seen by
      the underlying operating system. Note that Momentum tracks its own
      RSS which can grow and shrink based on usage. On most Unix
      systems, memory is appropriated by extending a programs heap space
      using the sbrk() call and as such will never decrease in size.
    </p>
<p>
      For more information about memory as it relates to the C API see
      <a class="link" href="https://support.messagesystems.com/docs/web-c-api/memory.php" target="_top">Memory Functions</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="console_commands.mailq.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="console.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="console_commands.message_details.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">mailq </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> message details</td>
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
