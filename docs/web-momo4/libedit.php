<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Appendix D. Key Binding Reference for ec_console</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.appendix.php" title="Part XI. Appendix">
<link rel="prev" href="smtp-response-codes.php" title="Appendix C. SMTP Response Codes">
<link rel="next" href="libedit.extended.php" title="D.2. Extended Commands">
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
<tr><th colspan="3" align="center">Appendix D. Key Binding Reference for ec_console</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="smtp-response-codes.php">Prev</a> </td>
<th width="60%" align="center">Part XI. Appendix</th>
<td width="20%" align="right"> <a accesskey="n" href="libedit.extended.php">Next</a>
</td>
</tr>
</table></div>
<div class="appendix">
<div class="titlepage"><div><div><h1 class="title">
<a name="libedit"></a>Key Binding Reference for ec_console</h1></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="libedit.php#libedit.emacs.editor">D.1. Editor Commands</a></span></dt>
<dt><span class="section"><a href="libedit.extended.php">D.2. Extended Commands</a></span></dt>
</dl>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="libedit.emacs.editor"></a>D.1. Editor Commands</h2></div></div></div>
<p>
    <span class="command"><strong>ec_console</strong></span> uses the <code class="literal">libedit</code> 
    library to provide command line editing facilities. By default,
    libedit starts in Emacs mode, which provides built-in commands 
    that you can combine into macros to automate your work. You
    can change the default setting by configuring your
   <code class="filename">.editrc</code> file. 
  </p>
<div class="table">
<a name="emacs_and_editor_commands"></a><p class="title"><b>Table D.1. Editor Commands</b></p>
<div class="table-contents"><table border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th> Default Emacs Key Binding </th>
<th> Editor Command </th>
<th> Description </th>
</tr></thead>
<tbody>
<tr>
<td> Ctrl+@ </td>
<td> em-set-mark </td>
<td> Set the mark at cursor. </td>
</tr>
<tr>
<td> Ctrl+A </td>
<td> ed-move-to-beg </td>
<td> Move cursor to the beginning of line. </td>
</tr>
<tr>
<td> Ctrl+B </td>
<td> ed-prev-char </td>
<td> Move to the left one character. </td>
</tr>
<tr>
<td> Ctrl+C </td>
<td> ed-tty-sigint </td>
<td> Tty interrupt character. </td>
</tr>
<tr>
<td> Ctrl+D </td>
<td> em-delete-or-list </td>
<td> Delete character under cursor or list completions if at end of line. </td>
</tr>
<tr>
<td> Ctrl+E </td>
<td> ed-move-to-end </td>
<td> Move cursor to the end of line. </td>
</tr>
<tr>
<td> Ctrl+F </td>
<td> ed-next-char </td>
<td> Move to the right one character. </td>
</tr>
<tr>
<td> Ctrl+H </td>
<td> ed-delete-prev-char </td>
<td> Delete the character to the left of the cursor. </td>
</tr>
<tr>
<td> Ctrl+J, Ctrl+M </td>
<td> ed-newline </td>
<td> Execute command. </td>
</tr>
<tr>
<td> Ctrl+K, Ctrl+U </td>
<td> ed-kill-line </td>
<td> Cut to the end of line. </td>
</tr>
<tr>
<td> Ctrl+L </td>
<td> ed-clear-screen </td>
<td> Clear screen leaving current line at the top. </td>
</tr>
<tr>
<td> Ctrl+N </td>
<td> ed-next-history </td>
<td> Move to the next history line. </td>
</tr>
<tr>
<td> Ctrl+O </td>
<td> ed-tty-flush-output </td>
<td> Tty flush output characters. </td>
</tr>
<tr>
<td> Ctrl+P </td>
<td> ed-prev-history </td>
<td> Move to the previous history line. </td>
</tr>
<tr>
<td> Ctrl+Q </td>
<td> ed-tty-start-output </td>
<td> Tty allow output characters. </td>
</tr>
<tr>
<td> Ctrl+R </td>
<td> ed-redisplay </td>
<td> Redisplay everything. </td>
</tr>
<tr>
<td> Ctrl+S </td>
<td> ed-tty-stop-output </td>
<td> Tty disallow output characters. </td>
</tr>
<tr>
<td> Ctrl+T </td>
<td> ed-transpose-chars </td>
<td> Exchange the character to the left of the cursor with the one under it. </td>
</tr>
<tr>
<td> Ctrl+V </td>
<td> ed-quoted-insert </td>
<td> Add the next character typed verbatim. </td>
</tr>
<tr>
<td> Ctrl+W </td>
<td> em-kill-region </td>
<td> Cut area between mark and cursor and save in cut buffer. </td>
</tr>
<tr>
<td> Ctrl+Y </td>
<td> em-yank </td>
<td> Paste cut buffer at cursor position. </td>
</tr>
<tr>
<td> Ctrl+Z </td>
<td> ed-tty-sigtstp </td>
<td> Tty suspend character. </td>
</tr>
<tr>
<td> Ctrl+[ </td>
<td> em-meta-next </td>
<td> Add 8th bit to next character typed. </td>
</tr>
<tr>
<td> Ctrl+\ </td>
<td> ed-tty-sigquit </td>
<td> Tty quit character. </td>
</tr>
<tr>
<td> Ctrl+] </td>
<td> ed-tty-dsusp </td>
<td> Tty delayed suspend character. </td>
</tr>
<tr>
<td> Esc Backspace </td>
<td> ed-delete-prev-word </td>
<td> Delete from beginning of current word to cursor. </td>
</tr>
<tr>
<td> Esc Ctrl+_ </td>
<td> em-copy-prev-word </td>
<td> Copy current word to cursor. </td>
</tr>
<tr>
<td> Esc B </td>
<td> ed-prev-word </td>
<td> Move to the beginning of the current word. </td>
</tr>
<tr>
<td> Esc C </td>
<td> em-capital-case </td>
<td> Capitalize the characters from cursor to end of current word. </td>
</tr>
<tr>
<td> Esc D </td>
<td> em-delete-next-word </td>
<td> Cut from cursor to end of current word. </td>
</tr>
<tr>
<td> Esc F </td>
<td> em-next-word </td>
<td> Move next to end of current word. </td>
</tr>
<tr>
<td> Esc L </td>
<td> em-lower-case </td>
<td> Lowercase the characters from cursor to end of current word. </td>
</tr>
<tr>
<td> Esc N </td>
<td> ed-search-next-history </td>
<td> Search next in history for a line matching the current. </td>
</tr>
<tr>
<td> Esc P </td>
<td> ed-search-prev-history </td>
<td> Search previous in history for a line matching the current. </td>
</tr>
<tr>
<td> Esc U </td>
<td> em-upper-case </td>
<td> Uppercase the characters from cursor to end of current word. </td>
</tr>
<tr>
<td> Esc W </td>
<td> em-copy-region </td>
<td> Copy area between mark and cursor to cut buffer. </td>
</tr>
<tr>
<td> </td>
<td> ed-argument-digit </td>
<td> Digit that starts argument. </td>
</tr>
<tr>
<td> </td>
<td> ed-delete-next-char </td>
<td> Delete character under cursor. </td>
</tr>
<tr>
<td> </td>
<td> ed-digit </td>
<td> Adds to argument or enters a digit. </td>
</tr>
<tr>
<td> </td>
<td> ed-end-of-file </td>
<td> Indicate end of file. </td>
</tr>
<tr>
<td> </td>
<td> ed-insert </td>
<td> Add character to the line. </td>
</tr>
<tr>
<td> </td>
<td> ed-next-line </td>
<td> Move down one line. </td>
</tr>
<tr>
<td> </td>
<td> ed-prev-line </td>
<td> Move up one line. </td>
</tr>
<tr>
<td> </td>
<td> ed-sequence-lead-in </td>
<td> First character in a bound sequence. </td>
</tr>
<tr>
<td> </td>
<td> ed-start-over </td>
<td> Erase current line and start from scratch. </td>
</tr>
<tr>
<td> </td>
<td> ed-unassigned </td>
<td> Indicates unbound character. </td>
</tr>
<tr>
<td> </td>
<td> em-exchange-mark </td>
<td> Exchange the cursor and mark. </td>
</tr>
<tr>
<td> </td>
<td> em-gosmacs-traspose </td>
<td> Exchange the two characters before the cursor. </td>
</tr>
<tr>
<td> </td>
<td> em-inc-search-next </td>
<td> Emacs incremental next search. </td>
</tr>
<tr>
<td> </td>
<td> em-inc-search-prev </td>
<td> Emacs incremental reverse search. </td>
</tr>
<tr>
<td> </td>
<td> em-kill-line </td>
<td> Cut the entire line and save in cut buffer. </td>
</tr>
<tr>
<td> </td>
<td> em-toggle-overwrite </td>
<td> Switch from insert to overwrite mode or vice versa. </td>
</tr>
<tr>
<td> </td>
<td> em-universal-argument </td>
<td> Universal argument (argument times 4). </td>
</tr>
<tr>
<td> </td>
<td> vi-add </td>
<td> Vi enter insert mode after the cursor. </td>
</tr>
<tr>
<td> </td>
<td> vi-add-at-eol </td>
<td> Vi enter insert mode at end of line. </td>
</tr>
<tr>
<td> </td>
<td> vi-change-case </td>
<td> Vi change case of character under the cursor and advance one character. </td>
</tr>
<tr>
<td> </td>
<td> vi-change-meta </td>
<td> Vi change prefix command. </td>
</tr>
<tr>
<td> </td>
<td> vi-change-to-eol </td>
<td> Vi change to end of line. </td>
</tr>
<tr>
<td> </td>
<td> vi-command-mode </td>
<td> Vi enter command mode (use alternative key bindings). </td>
<td> </td>
</tr>
<tr>
<td> </td>
<td> vi-delete-meta </td>
<td> Vi delete prefix command. </td>
</tr>
<tr>
<td> </td>
<td> vi-delete-prev-char </td>
<td> Vi move to previous character (backspace). </td>
</tr>
<tr>
<td> </td>
<td> vi-end-word </td>
<td> Vi move to the end of the current space delimited word. </td>
</tr>
<tr>
<td> </td>
<td> vi-insert </td>
<td> Vi enter insert mode. </td>
</tr>
<tr>
<td> </td>
<td> vi-insert-at-bol </td>
<td> Vi enter insert mode at the beginning of line. </td>
</tr>
<tr>
<td> </td>
<td> vi-kill-line-prev </td>
<td> Vi cut from beginning of line to cursor. </td>
</tr>
<tr>
<td> </td>
<td> vi-list-or-eof </td>
<td> Vi list choices for completion or indicate end of file if empty line. </td>
</tr>
<tr>
<td> </td>
<td> vi-next-char </td>
<td> Vi move to the character specified next. </td>
</tr>
<tr>
<td> </td>
<td> vi-next-space-word </td>
<td> Vi move to the next space delimited word. </td>
</tr>
<tr>
<td> </td>
<td> vi-next-word </td>
<td> Vi move to the next word. </td>
</tr>
<tr>
<td> </td>
<td> vi-paste-next </td>
<td> Vi paste previous deletion to the right of the cursor. </td>
</tr>
<tr>
<td> </td>
<td> vi-paste-prev </td>
<td> Vi paste previous deletion to the left of the cursor. </td>
</tr>
<tr>
<td> </td>
<td> vi-prev-char </td>
<td> Vi move to the character specified previous. </td>
</tr>
<tr>
<td> </td>
<td> vi-prev-space-word </td>
<td> Vi move to the previous space delimited word. </td>
</tr>
<tr>
<td> </td>
<td> vi-prev-word </td>
<td> Vi move to the previous word. </td>
</tr>
<tr>
<td> </td>
<td> vi-repeat-next-char </td>
<td> Vi repeat current character search in the same search direction. </td>
</tr>
<tr>
<td> </td>
<td> vi-repeat-prev-char </td>
<td> Vi repeat current character search in the opposite search direction. </td>
</tr>
<tr>
<td> </td>
<td> vi-repeat-search-next </td>
<td> Vi repeat current search in the same search direction. </td>
</tr>
<tr>
<td> </td>
<td> vi-repeat-search-prev </td>
<td> Vi repeat current search in the opposite search direction. </td>
</tr>
<tr>
<td> </td>
<td> vi-replace-char </td>
<td> Vi replace character under the cursor with the next character typed. </td>
</tr>
<tr>
<td> </td>
<td> vi-replace-mode </td>
<td> Vi enter replace mode. </td>
</tr>
<tr>
<td> </td>
<td> vi-search-next </td>
<td> Vi search history next. </td>
</tr>
<tr>
<td> </td>
<td> vi-search-prev </td>
<td> Vi search history previous. </td>
</tr>
<tr>
<td> </td>
<td> vi-substitute-char </td>
<td> Vi replace character under the cursor and enter insert mode. </td>
</tr>
<tr>
<td> </td>
<td> vi-substitute-line </td>
<td> Vi substitute entire line. </td>
</tr>
<tr>
<td> </td>
<td> vi-to-end-word </td>
<td> Vi move to the end of the current word. </td>
</tr>
<tr>
<td> </td>
<td> vi-to-next-char </td>
<td> Vi move up to the character specified next. </td>
</tr>
<tr>
<td> </td>
<td> vi-to-prev-char </td>
<td> Vi move up to the character specified previous. </td>
</tr>
<tr>
<td> </td>
<td> vi-undo </td>
<td> Vi undo last change. </td>
</tr>
<tr>
<td> </td>
<td> vi-zero </td>
<td> Vi move to the beginning of line. </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="smtp-response-codes.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.appendix.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="libedit.extended.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Appendix C. SMTP Response Codes </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> D.2. Extended Commands</td>
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
