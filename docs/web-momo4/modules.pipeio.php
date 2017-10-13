<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.54. pipe_io – Pipe IO Wrapper</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.persistio.php" title="71.53. persist_io – Persistent IO Wrapper">
<link rel="next" href="modules.pipe_transport.php" title="71.55. pipe_transport – Module">
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
<tr><th colspan="3" align="center">71.54. pipe_io – Pipe IO Wrapper</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.persistio.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.pipe_transport.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.pipeio"></a>71.54. pipe_io – Pipe IO Wrapper</h2></div></div></div>
<a class="indexterm" name="idp22563168"></a><p>
    The <code class="literal">pipe_io</code> module provides facilities for
    writing content via an arbitrary program. Momentum uses an I/O
    abstraction layer for writing logs. With this module, you can
    post-process or transform logs.
  </p>
<p>
    <code class="literal">pipe_io</code> should not be used for post-processing
    the paniclog on Momentum nodes.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp22567008"></a>71.54.1. Configuration</h3></div></div></div>
<p>
      This module is loaded automatically as required and does not
      need to be explicitly included. The configuration is in two
      parts: module-wide error logging and options for a specific pipe.
    </p>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="idp22568832"></a>71.54.1.1. Module Options</h4></div></div></div>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
            error_file
          </span></dt>
<dd><p>
              If the invoked program writes to
              <code class="literal">STDERR</code>, log it to this file. If this is
              not set, nothing will be logged.
            </p></dd>
<dt><span class="term">
            error_mode
          </span></dt>
<dd><p>
              When creating <code class="literal">error_file</code>, use this file
              mode. Defaults to <code class="literal">0666</code>.
            </p></dd>
<dt><span class="term">
            output_file
          </span></dt>
<dd><p>
              If the invoked program writes to <code class="literal">STDOUT</code>,
              log it to this file. If this is not set, nothing will be 
              logged.
            </p></dd>
<dt><span class="term">
            output_mode
          </span></dt>
<dd><p>
              When creating <code class="literal">output_file</code>, use this
              file mode. Defaults to <code class="literal">0666</code>.
            </p></dd>
<dt><span class="term">
            timeout
          </span></dt>
<dd><p>
              When closing the pipe, <code class="literal">timeout</code>
              specifies how many seconds <code class="literal">pipe_io</code>
              should wait for the program to exit normally. If the
              program does not exit normally, <code class="literal">pipe_io</code>
              will terminate it.
            </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="idp22584224"></a>71.54.1.2. URI Parameters</h4></div></div></div>
<p>
        The URI specifies the path to the program that should be
        connected to the read end of the pipe; for example, 
        <code class="filename">pipe:///usr/bin/myscript</code>. The URI
        parameters specify the environment and arguments for the
        program, and how to handle errors.
      </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
            argN
          </span></dt>
<dd><p>
              The Nth command-line parameter.
            </p></dd>
<dt><span class="term">
            clear_env
          </span></dt>
<dd><p>
              If <code class="literal">1</code>, remove all variables from the
              environment. This can be used with <code class="literal">envN</code>
              to specify a complete environment for your program. By
              default, the program will inherit the environment of the
              parent process.
            </p></dd>
<dt><span class="term">
            envN
          </span></dt>
<dd><p>
              Insert a variable into the environment. The value is of
              the form <code class="literal">name=value</code>.
            </p></dd>
<dt><span class="term">
            reinvoke
          </span></dt>
<dd><p>
              If <code class="literal">1</code>, then one attempt will be made to
              restart the program if it exits unexpectedly. This is the
              default. Otherwise no attempt will be made to restart the
              program.
            </p></dd>
<dt><span class="term">
            shutdown_on_failure
          </span></dt>
<dd>
<p>
              If <code class="literal">1</code>, shutdown if the program cannot be
              started, restarted, or exits unexpectedly. This is the
              default behavior One attempt will be made to restart the
              program (see <code class="literal">reinvoke</code>) -- the shutdown
              will occur if that fails.
            </p>
<p>
              If <code class="literal">0</code>, no shutdown will occur, but data
              will be lost silently.
            </p>
</dd>
</dl></div>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp22600800"></a>71.54.2. Post-processing of Clustered Logs</h3></div></div></div>
<p>
        The following example shows the use of
        <code class="literal">pipe_io</code> in
        <code class="filename">eccluster.conf</code> for post-processing of logs
        on the cluster manager.
      </p>
<div class="example">
<a name="example.pipe_io.3"></a><p class="title"><b>Example 71.79. pipe_io module</b></p>
<div class="example-contents"><pre class="programlisting">
pipe_io {
  output_file = "/var/log/eccluster/pipe_io_output.log"
  output_mode = 0664
  error_file = "/var/log/eccluster/pipe_io_error.log"
  error_mode = 0664
  timeout = 5
}

Logs {
  # arg1 = path, last component is the log name
  # arg2 = log name
  # arg3 = node name
  logfile = "pipe:///opt/msys/ecelerity/bin/myscript?arg1=/var/log/eccluster/%Y/%m/%d/%{l}&amp;arg2=%{l}&amp;arg3=%{n}"
  file_mode = "0640"
  dir_mode = "0755"

  # Reopen logs every ten minutes, if there's no activity.
  # The pipe reader is expected to manage its own file handles
  # intelligently, so there is less need for eccmgr to age them out.
  max_idle = "600"
}
</pre></div>
</div>
<br class="example-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp22606720"></a>71.54.3. Other Considerations</h3></div></div></div>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          Pipe readers should not do intensive post-processing, or any
          processing that will introduce significant latency (e.g., database
          access).          
        </p></li>
<li class="listitem"><p>
          Pipe readers should be aware that the write end of the pipe is
          closed when logs are re-opened or when the instance shuts down.      
        </p></li>
<li class="listitem"><p>
          To use this module on Linux, add 
          <code class="literal">export ECELERITY_MEMORY=NOREPLACE</code> to
          <code class="filename">/opt/msys/ecelerity/etc/environment</code>.
        </p></li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp22613680"></a>71.54.4. See Also</h3></div></div></div>
<p>


      <a class="xref" href="environment_file.php" title="Chapter 31. Configuring the Environment File">Chapter 31, <i>Configuring the Environment File</i></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.persistio.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.pipe_transport.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.53. persist_io – Persistent IO Wrapper </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.55. pipe_transport – Module</td>
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
