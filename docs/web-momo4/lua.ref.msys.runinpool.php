<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.runInPool</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msys.registerModule.php" title="msys.registerModule">
<link rel="next" href="lua.ref.msys.sleep.php" title="msys.sleep">
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
<tr><th colspan="3" align="center">msys.runInPool</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msys.registerModule.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.sleep.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.runinpool"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.runInPool — Run a function in a separate threadpool</p>
</div>
<div class="refsection">
<a name="idp16341600"></a><h2>Synopsis</h2>
<p>
      <code class="function">msys.runInPool(pool, closure, ...);</code>
    </p>
<pre class="literallayout">
pool: mixed
closure: mixed
...: mixed, optional
</pre>
</div>
<div class="refsection">
<a name="idp16344608"></a><h2>Description</h2>
<p>
      This function runs a process in a separate threadpool. This can be
      done in a number of ways.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        The first parameter passed to this function may be a thread pool
        name (string) or a thread pool identifier (integer).
      </p>
</div>
<p>
      The following example runs <code class="literal">closure</code> in the
      specified pool, returning the value(s) from the closure to the
      calling script. The calling script is suspended pending completion
      of the closure. Calling <code class="function">msys.runInPool</code>in this
      way is useful for moving processing off the scheduler thread for
      some blocking work.
    </p>
<pre class="programlisting">
status, result = msys.runInPool(pool, closure)
</pre>
<p>
      Return values are the same as <code class="function">pcall</code>; the
      first return value is a boolean indicating whether the function
      was called successfully or not. If it is <code class="literal">true</code>
      then the call was successful and the remaining return value(s) are
      those from the closure. If the status value is
      <code class="literal">false</code>, the second return value holds an error
      message.
    </p>
<p>
      When the third parameter is not specified, it is equivalent to the
      function call: <code class="code">msys.runInPool(pool, closure, false);</code>,
      the boolean indicating that the function specified by
      <code class="literal">closure</code> will <span class="emphasis"><em>not</em></span> be run
      asynchronously.
    </p>
<p>
      To run a closure asynchronously from the execution of the calling
      script explicitly specify the third parameter as
      <code class="literal">true</code>:
    </p>
<pre class="programlisting">
msys.runInPool(pool, closure, true)
</pre>
<p>
      Due to the mechanics of the system, the closure will not start
      executing until the calling script has returned to the scheduler
      (which typically means at the end of each validation phase, or
      when the top level frame on the Lua call stack unwinds). When
      called in this way <span class="emphasis"><em>no results are returned</em></span>.
      The calling script will continue executing the next statement
      immediately; it will not wait for the closure to begin or for
      execution to complete.
    </p>
<p>
      You can also run a closure asynchronously <span class="emphasis"><em>and</em></span>
      execute a function after that closure is complete. To do this call
      <code class="function">msys.runInPool</code> in the following way:
    </p>
<pre class="programlisting">
msys.runInPool(pool, closure, completion_closure)
</pre>
<p>
      When the closure returns, <code class="literal">completion_closure</code>
      will be called on the same OS level thread as
      <code class="literal">closure</code>.
    </p>
<p>
      The completion function can be run in the same threadpool, or in
      the scheduler thread. You might want to have the completion
      function in the scheduler thread to schedule an event, for
      example.
    </p>
<p>
      If the third argument of msys.runInPool is a function, then it
      will be used as the completion function. An optional fourth
      argument allows the completion mode to be specified—if it's set
      to <code class="literal">msys.core.ECTP_COMPLETE_CALLBACK_SCHED</code> then
      the completion function will be called in the scheduler thread;
      otherwise it will be called in the threadpool thread.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        <code class="literal">msys.core.ECTP_COMPLETE_CALLBACK_SCHED</code> is the
        only completion mode that can be passed as the fourth argument.
        All other values will be ignored, and
        <code class="literal">msys.core.ECTP_COMPLETE_CALLBACK</code> will be
        used.
      </p>
</div>
<pre class="programlisting">
status, res = msys.runInPool("IO",
  function()
    -- do some IO intensive work here, such as interrogate the message contents
    return "done"; -- passed back to the 'res' variable
  end,
  function()
    -- Completion function
    print("Done!");
  end,
  msys.core.ECTP_COMPLETE_CALLBACK_SCHED -- Complete in the scheduler
);
</pre>
<p>
      In any of the preceding examples, the <code class="literal">closure</code>
      parameter may be a function reference or a function defined
      inline. For example:
    </p>
<pre class="programlisting">
do_heavy_lifting = function()
  print("doing heavy lifting")
  return true
end
st, res = msys.runInPool('IO', do_heavy_lifting)
</pre>
<p>
      An inline function passed as a parameter would be as follows:
    </p>
<pre class="programlisting">
st, res = msys.runInPool('IO',
  function()
    print("doing heavy lifting")
    return true
  end
)
</pre>
<p>
      New data sharing features that are available in threaded Lua are
      as follows:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">_TLS</code> – session-local storage
        </p></li>
<li class="listitem"><p>
          <code class="literal">_OSTLS</code> – OS-level thread-local storage
        </p></li>
<li class="listitem"><p>
          using <code class="literal">self</code> – When running validation
          functions in Lua, if the callout has a validate_context
          parameter, the "self" parameter can be used as a table to
          store session-local variables. This is similar to the vctx
          dictionaries, but these values can be any Lua value.
        </p></li>
</ul></div>
<pre class="programlisting">
...
-- we want to validate that we ran on a different OS thread, so
-- set a marker we can use in our output
_OSTLS.async_t_marker = 42;

function mod:validate_data(msg, ac, vctx)
 msys.runInPool('CPU', function ()
 print("CPU", "in cpu", _OSTLS.async_t_marker);
 end, true);
 test('validate_data');
 return msys.core.VALIDATE_CONT;
end

function mod:validate_data_spool(msg, ac, vctx)
  msys.runInPool('CPU',
    function ()
      print("CB", "cb data spool", _OSTLS.async_t_marker);
    end,
    function ()
      print("CB", "cb completing", _OSTLS.async_t_marker);
    end
  )
...
end
</pre>
<p>
      Because this function is in the <code class="literal">msys</code> namespace,
      an explicit <code class="code">require</code> is not necessary.
    </p>
</div>
<div class="refsection">
<a name="idp16377008"></a><h2>See Also</h2>
<p>
      <a class="xref" href="lua.ref.thread.mutex.php" title="thread.mutex"><span class="refentrytitle">thread.mutex</span></a>,
      <a class="xref" href="lua.ref.msys.sleep.php" title="msys.sleep"><span class="refentrytitle">msys.sleep</span></a>,
      <a class="xref" href="lua.ref.msys.lock.php" title="msys.lock"><span class="refentrytitle">msys.lock</span></a>,
      <a class="xref" href="lua.ref.msys.unlock.php" title="msys.unlock"><span class="refentrytitle">msys.unlock</span></a>,
      <a class="xref" href="conf.ref.threadpool.php" title="threadpool"><span class="refentrytitle">threadpool</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msys.registerModule.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.sleep.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msys.registerModule </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.sleep</td>
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
