<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.os.statvfs_read</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msys.pcre.split.php" title="msys.pcre.split">
<link rel="next" href="lua.ref.msys.os.statvfs_subscribe.php" title="msys.os.statvfs_subscribe">
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
<tr><th colspan="3" align="center">msys.os.statvfs_read</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msys.pcre.split.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.os.statvfs_subscribe.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.os.statvfs_read"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.os.statvfs_read — Request a snapshot of the stream</p>
</div>
<div class="refsection">
<a name="idp18289040"></a><h2>Synopsis</h2>
<pre class="literallayout">
require('msys.os');

</pre>
<p>
        <code class="function">msys.os.statvfs_read(path);</code>
      </p>
<pre class="literallayout">
path: string
</pre>
</div>
<div class="refsection">
<a name="idp18292736"></a><h2>Description</h2>
<p>
        This function provides a "stream" for statvfs updates. This
        guarantees minimal blocking and it is safe to call this
        functions from the context of any thread. The developer first
        requests an ec_statvfs_record_t object by calling
        <code class="function">msys.os.statvfs_subscribe</code>.
      </p>
<p>
        Find below an example of requesting a statvfs snapshot stream on
        <code class="filename">/tmp</code> updated at least every 10 seconds:

</p>
<pre class="programlisting">
r = msys.os.statvfs_subscribe("/tmp", 10);
</pre>
<p>
      </p>
<p>
        <code class="function">msys.os.statvfs_subscribe</code> is guaranteed to
        fail only due to failed memory allocation. If interval is
        <code class="literal">0</code>, then an implementation-default value is
        used for the interval length. After a user has subscribed to a
        snapshot stream associated with a path, they may use
        <code class="function">msys.os.statvfs_read</code> to read the latest
        available snapshot. If several subscriptions exist for a given
        path, the smallest requested interval will be used. If a user
        requests a smaller interval than the default, then the interval
        update occurs on the previous interval edge.
      </p>
<p>
        Find below an example of requesting latest snapshot for
        <code class="filename">/tmp</code> and then printing total available
        kilobytes:

</p>
<pre class="programlisting">
  st, e = msys.os.statvfs_read(cache[path]);
  if (st == nil) then
    print (e);
  else
    print (st["kilobytes_total"]);
  end
</pre>
<p>
      </p>
<p>
        If <code class="literal">st</code> is <code class="literal">nil</code> then
        <code class="literal">e</code> will contain the error message associated
        with the failure. <code class="literal">st</code> is userdata of type
        <code class="literal">ec_statvfs_t</code> and contains values for the
        following keys:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            version
          </p></li>
<li class="listitem"><p>
            kilobytes_available
          </p></li>
<li class="listitem"><p>
            kilobytes_total
          </p></li>
<li class="listitem"><p>
            objects_available
          </p></li>
<li class="listitem"><p>
            objects_total
          </p></li>
</ul></div>
<p>
        The following script example provides "subscribe" and "read"
        commands to ec_console.
      </p>
<div class="example">
<a name="lua.ref.msys.os.statvfs_read.example"></a><p class="title"><b>Example 70.60. msys.os.statvfs_subscribe and msys.os.statvfs_read example</b></p>
<div class="example-contents"><pre class="programlisting">
  require("msys.core");
  require("msys.os");

  local cache = {};

  local function subscribe(cc)
     -- Check the number of parameters
     if cc.argc &lt; 2 then
       print ("You must pass a parameter to this command");
       return;
     end
     local path = cc.argv[1];

     if cache[path] == nil then
      cache[path] = msys.os.statvfs_subscribe(path, 5);
      if (cache[path] == nil) then
        print ("Memory exhausted.");
      else
        print ("Created subscription for " .. path);
      end
     end
  end

  local function read(cc)
     -- Check the number of parameters
     if cc.argc &lt; 2 then
       print("You must pass a parameter to this command");
       return;
     end
     local path = cc.argv[1];
     local st = nil;
     
     if cache[path] == nil then
       print ("ERROR: No subscription found.");
     end

     st, e = msys.os.statvfs_read(cache[path]);
     if (st == nil) then
       print (e);
     else
       print ("Version          : " .. st["version"]);
       print ("Available kB     : " .. st["kilobytes_available"]);
       print ("Total kB         : " .. st["kilobytes_total"]);
       print ("Available objects: " .. st["objects_available"]);
       print ("Total objects    : " .. st["objects_total"]);
     end

     return st;
  end
  
  msys.registerControl("subscribe", subscribe)
  msys.registerControl("read", read)
</pre></div>
</div>
<br class="example-break"><p>
        Enable this function with the statement
        <code class="code">require('msys.os');</code>.
      </p>
<div class="sidebar">
<a name="lua.ref.msys.os.statvfs_read.control_construct"></a><div class="titlepage"><div><div><p class="title"><b>Command Construct Userdata</b></p></div></div></div>
<p>
          The function that performs the registered action, in the
          examples above, accepts as a parameter command_construct
          userdata. <code class="literal">cc.argc</code> returns the number of
          arguments supplied by the console command, with the first
          argument being the command name. <code class="literal">cc.argv[0]</code>
          is the command name and <code class="literal">cc.argv[1]</code> is the
          command option. For more sophisticated argument parsing use
          <code class="code">require("msys.getopt");</code>. For more information
          examine the <code class="filename">getopt.lua</code> file found in the
          <code class="filename">/opt/msys/ecelerity/libexec/scriptlets/msys</code>
          directory.
        </p>
</div>
</div>
<div class="refsection">
<a name="idp18319392"></a><h2>See Also</h2>
<p>
        <a class="xref" href="lua.ref.msys.os.statvfs_subscribe.php" title="msys.os.statvfs_subscribe"><span class="refentrytitle">msys.os.statvfs_subscribe</span></a>,
        <a class="link" href="https://support.messagesystems.com/docs/web-c-api/structs.ec_statvfs.php" target="_top">ec_statvfs</a>,
        <a class="link" href="https://support.messagesystems.com/docs/web-c-api/structs.command_construct.php" target="_top">command_construct</a>
        and <a class="xref" href="lua.ref.msys.registerControl.php" title="msys.registerControl"><span class="refentrytitle">msys.registerControl</span></a>
      </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msys.pcre.split.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.os.statvfs_subscribe.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msys.pcre.split </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.os.statvfs_subscribe</td>
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
