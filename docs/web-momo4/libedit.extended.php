<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>D.2. Extended Commands</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="libedit.php" title="Appendix D. Key Binding Reference for ec_console">
<link rel="prev" href="libedit.php" title="Appendix D. Key Binding Reference for ec_console">
<link rel="next" href="glossary.php" title="Glossary">
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
<tr><th colspan="3" align="center">D.2. Extended Commands</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="libedit.php">Prev</a> </td>
<th width="60%" align="center">Appendix D. Key Binding Reference for ec_console</th>
<td width="20%" align="right"> <a accesskey="n" href="glossary.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="libedit.extended"></a>D.2. Extended Commands</h2></div></div></div>
<p>
      The following extended commands may appear in your
      <code class="filename">.editrc</code> or may be entered directly into the
      console by entering extended command mode (

      <span class="keycap"><strong>Esc</strong></span> <span class="keycap"><strong>X</strong></span>

      by default), and then typing in the extended command and pressing
      <span class="keycap"><strong>Enter</strong></span>.
    </p>
<div class="table">
<a name="extended_commands"></a><p class="title"><b>Table D.2. Extended Commands</b></p>
<div class="table-contents"><table border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th> Extended Command </th>
<th> Description </th>
</tr></thead>
<tbody>
<tr>
<td> bind </td>
<td>
              <pre class="synopsis">bind [-a] [-e] [-k] [-l] [-r] [-s] [-v] [key [command]]</pre>
              
              <p>
                Without options, list all bound keys, and the editor command to
                which each is bound. If key is supplied, show the bindings for
                key. If key command is supplied, bind command to key. Options
                include:
              </p>
              
              <div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                    <code class="option">-a</code> - List or change key bindings in the vi(1) mode alternate
                    (command mode) key map.
                  </p></li>
<li class="listitem"><p>
                      <code class="option">-e</code> - Bind all keys to the standard GNU Emacs-like bindings
                    </p></li>
<li class="listitem"><p>
                      <code class="option">-k</code> - <em class="parameter"><code>key</code></em> is interpreted as a symbolic
                      arrow key name, which may be one of `up', `down', `left'
                      or `right'.
                    </p></li>
<li class="listitem"><p>
                      <code class="option">-l</code> - List all editor commands and a short description of each.
                    </p></li>
<li class="listitem"><p>
                      <code class="option">-r</code> - Remove a key's binding.
                    </p></li>
<li class="listitem"><p>
                      <code class="option">-s</code> - <em class="parameter"><code>command</code></em> is taken as a literal
                      string and treated as terminal input when
                      <em class="parameter"><code>key</code></em> is typed. Bound keys in
                      <em class="parameter"><code>command</code></em> are themselves
                      reinterpreted, and this continues for ten levels of
                      interpretation. <em class="parameter"><code>command</code></em> may be one of the commands
                      documented in <a class="xref" href="libedit.php#libedit.emacs.editor" title="D.1. Editor Commands">Section D.1, “Editor Commands”</a>.
                    </p></li>
<li class="listitem"><p>
                      <code class="option">-v</code> - Bind all keys to the standard vi(1) -like bindings.
                    </p></li>
<li class="listitem">
<p>
                    <code class="option">key [command]</code> - <em class="parameter"><code>key</code></em> and 
                    <em class="parameter"><code>command</code></em> can contain control characters
                    of the form <code class="literal">^character</code> (e.g.,
                    <code class="literal">^A</code>), and the following backslashed escape
                    sequences:
                  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
                      <code class="option">\a</code> - Bell
                    </p></li>
<li class="listitem"><p>
                      <code class="option">\b</code> - Backspace
                    </p></li>
<li class="listitem"><p>
                      <code class="option">\e</code> - Escape
                    </p></li>
<li class="listitem"><p>
                      <code class="option">\f</code> - Formfeed
                    </p></li>
<li class="listitem"><p>
                      <code class="option">\n</code> - Newline
                    </p></li>
<li class="listitem"><p>
                      <code class="option">\r</code> - Carriage return
                    </p></li>
<li class="listitem"><p>
                      <code class="option">\t</code> - Horizontal tab
                    </p></li>
<li class="listitem"><p>
                      <code class="option">\v</code> - Vertical tab
                    </p></li>
<li class="listitem"><p>
                      <code class="option">\nnn</code> - The ASCII character corresponding 
                      to the octal number nnn.
                    </p></li>
</ul></div>
<p>
                    NOTE: `\' nullifies the special meaning of the following character, if
                    it has any, notably `\' and `^'.
                  </p>
</li>
</ul></div>
              
            </td>
</tr>
<tr>
<td> echotc </td>
<td>
              <pre class="synopsis">echotc [-sv] arg ...</pre>
              <p>
                Exercise terminal capabilities given in <code class="literal">arg ...</code>. 
                If arg is ‘baud’, ‘cols’, ‘lines’, ‘rows’, ‘meta or’ ‘tabs’, the
                value of that capability is printed, with “yes” or “no” indicating
                that the terminal does or does not have that capability.
              </p>
              <p>
                <code class="literal">-s</code> returns an emptry string for non-existent 
                capabilities, rather than causing an error.
                <code class="literal">-v</code> causes messages to be verbose.
              </p>
            </td>
</tr>
<tr>
<td> edit </td>
<td>
              <pre class="synopsis">edit [on | off]</pre>
              <p>
                Enable or disable the editline functionality in a program.
              </p>
            </td>
</tr>
<tr>
<td> history </td>
<td> 
              <pre class="synopsis">history</pre>
              <p>
                List the history.
              </p>
            </td>
</tr>
<tr>
<td> telltc </td>
<td>
              <pre class="synopsis">telltc</pre>
              <p>
                List the values of all the terminal capabilities (see termcap(5)).
              </p>
            </td>
</tr>
<tr>
<td> settc </td>
<td>  
              <pre class="synopsis">settc cap val</pre>
              
              <p>
                Set the terminal capability cap to val, as defined in
                termcap(5). No sanity checking is done.
              </p>
            </td>
</tr>
<tr>
<td> setty </td>
<td> 
              <pre class="synopsis">setty [-a] [-d] [-q] [-x] [+mode] [-mode] [mode]</pre>
              <p>
                Control which tty modes that editrc won’t allow the user to
                change. <code class="literal">-d</code>, <code class="literal">-q</code>, or 
                <code class="literal">-x</code> tells setty to act on the ‘edit’,
                ‘quote’, or ‘execute’ set of tty modes respectively;
                defaulting to <code class="literal">-x</code>.
              </p>
              <p>
                Without other arguments, setty lists the modes in the chosen set
                that are fixed on (‘+mode’) or off (‘-mode’). <code class="literal">-a</code> 
                lists all tty modes in the chosen set regardless of the setting.
                With +mode, -mode or mode, fixes mode on or off or removes control
                of mode in the chosen set.
              </p>
            </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="libedit.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="libedit.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="glossary.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Appendix D. Key Binding Reference for ec_console </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Glossary</td>
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
