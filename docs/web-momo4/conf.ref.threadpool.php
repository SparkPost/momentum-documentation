<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>threadpool</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="config.options.ref.php" title="Chapter 72. Configuration Options Reference">
<link rel="prev" href="conf.ref.tcp_buffer_size.php" title="tcp_buffer_size">
<link rel="next" href="conf.ref.timestampformat.php" title="timestampformat">
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
<tr><th colspan="3" align="center">threadpool</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="conf.ref.tcp_buffer_size.php">Prev</a> </td>
<th width="60%" align="center">Chapter 72. Configuration Options Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="conf.ref.timestampformat.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="conf.ref.threadpool"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>threadpool — configure thread pool specific options</p>
</div>
<div class="refsection">
<a name="conf.ref.threadpool.description"></a><h2>Description</h2>
<pre class="programlisting">
ThreadPool "SwapOut" {
  Concurrency = 5
}

ThreadPool "SwapIn" {
  Concurrency = 5
}

ThreadPool "Unlink" {
  Backlog = 100
  Concurrency = 6
}

ThreadPool "Batch_Unlink" {
  Concurrency = 4
}

ThreadPool "Close" {
  Concurrency = 0
}

ThreadPool "CPU" {
  Concurrency = 4
}

ThreadPool "IO" {
  Concurrency = 50
}

ThreadPool "SpoolIn" {
  Concurrency = 1
}</pre>
<p>
      Momentum uses a combination of asynchronous IO and thread pools to
      efficiently manage its workload. There are a number of predefined
      thread pools for different classes of work. It is not possible to
      prioritize work within a pool (jobs are queued as FIFO), but it is
      possible to create a pool for jobs that have different relative
      priorities, so that long running jobs won't starve more important
      short-lived jobs.
    </p>
<p>
      The <code class="option">ThreadPool</code> stanza allows you to define or
      modify thread pool characteristics. The standard thread pools are
      listed above, along with their defaults, and you may also define
      new pools simply by specifying the name of the pool. Creating new
      pools isn't very useful unless you assign jobs to the pool;
      various modules allow you to specify alternate pools for their
      tasks so that you can more effectively prioritize the tasks in
      your environment.
    </p>
<p>
      There are three basic attributes for a thread pool in Momentum:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          <code class="literal">Concurrency</code>
        </span></dt>
<dd>
<p>
            The concurrency defines the number of threads in the pool.
            Sizing a pool correctly is important to avoid torturing your
            system. If the pool is intended to be used for CPU intensive
            work, the ideal size is approximately the number of cores
            that you want to assign to the work. If you raise the
            concurrency of such a pool too high, you will cause
            increased context switching and degrade overall system
            performance.
          </p>
<p>
            If the pool is intended to be used for blocking IO
            operations, where the threads are expected to be mostly
            sleeping, you will usually want to increase the number of
            threads to a magic number that gets the most throughput for
            your system. Setting this number too high can increase
            context switching, and with heavily IO bound tasks, can
            increase disk thrashing.
          </p>
<p>
            You should also note that each thread requires its own stack
            space; creating too many threads can consume large portions
            of your address space, particularly on a 32-bit system. Some
            versions of Linux/glibc allocate 10MB per thread by default,
            which can quickly consume your entire address space. You can
            reduce the impact of this problem by setting the thread pool
            stack size (see below).
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              If you use the <a class="xref" href="modules.csapi.php" title="71.23. csapi – Symantec CSAPI Antivirus Support">Section 71.23, “csapi – Symantec CSAPI Antivirus Support”</a>, be sure to set 
              the concurrency of the CPU threadpool to a value that is less
              than the max_concurrency of the csapi module.
            </p>
</div>
<p>
            The concurrency of a pool can be changed at runtime. The
            values for <code class="option">concurrency</code> shown in
            <a class="xref" href="conf.ref.threadpool.php#conf.ref.threadpool.description" title="Description">the section called “Description”</a> are the
            default values.
          </p>
</dd>
<dt><span class="term">
          <code class="literal">Stack_Size</code>
        </span></dt>
<dd>
<p>
            As mentioned above, each thread in the system requires its
            own stack space. The default amount used is system dependent
            and is usually very much higher than the amount you will
            need per thread. If you find that you need to increase the
            number of threads, you may also want to define a smaller
            Stack_Size so that you don't use so much of your address
            space or RAM.
          </p>
<p>
            The amount of stack space you need for a given pool varies
            depending on the usage patterns for that pool. Some jobs
            will need more stack space than others. You should exercise
            caution when adjusting the stack size, setting it too small
            can cause a stack overflow which can lead to memory
            corruption and ultimately a crash.
          </p>
<p>
            The stack size can be changed at runtime, but only affects
            newly spawned threads.
          </p>
</dd>
<dt><span class="term">
          <code class="literal">Backlog</code>
        </span></dt>
<dd>
<p>
            The backlog setting affects the maximum number of jobs that
            can be queued up for a pool. Most pools will not have a
            limit, but some tasks require a braking effect if the system
            can't satisfy the workload in time.
          </p>
<p>
            For instance, the transactional nature of SMTP requires that
            messages are unlinked from the spool "immediately" after the
            receipt of successful delivery so that duplicate delivery
            can not occur if the power were to fail. Since the unlink
            call is a blocking operation, it is pushed to the
            <code class="literal">Unlink</code> pool for processing. If the unlink
            pool backlog were to grow without bound, there is increasing
            risk of sending a great many duplicate deliveries when the
            server restarts after a power failure.
          </p>
<p>
            To mitigate this risk, we put a limit on the maximum length
            of the queue; if pushing a job to the queue would exceed the
            length, then the caller will block until the queue is small
            enough.
          </p>
<p>
            If you find that you need to change the Backlog size for the
            Unlink pool, you should investigate why your disks cannot
            keep up; make sure that you aren't logging to the same
            spindles as your spool, and examine the tuning options for
            those filesystems.
          </p>
<p>
            When using the custom_logger module, it may be necessary to 
            create a thread pool so you can explicitly define its backlog
            option. For more information, see 
            <a class="xref" href="modules.custom_logger.php" title="71.25. custom_logger – User-defined Logging">Section 71.25, “custom_logger – User-defined Logging”</a>.
          </p>
<p>
            The backlog cannot be changed at runtime.
          </p>
</dd>
</dl></div>
</div>
<div class="refsection">
<a name="idp26864768"></a><h2>Scope</h2>
<p>
      ThreadPool is valid in the global scope.
    </p>
</div>
<div class="refsection">
<a name="idp26866592"></a><h2>See Also</h2>
<p>
      <a class="xref" href="conf.ref.domain.php" title="domain"><span class="refentrytitle">domain</span></a>,
      <a class="xref" href="conf.ref.host.php" title="host"><span class="refentrytitle">host</span></a>,
      <a class="xref" href="console_commands.threads.php" title="threads"><span class="refentrytitle">threads</span></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="conf.ref.tcp_buffer_size.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="config.options.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="conf.ref.timestampformat.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">tcp_buffer_size </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> timestampformat</td>
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
