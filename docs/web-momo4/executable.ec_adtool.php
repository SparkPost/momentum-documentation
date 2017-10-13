<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ec_adtool</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="executable, command line, command, ec_adtool">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="exec.cmds.ref.php" title="Chapter 74. Executable Commands Reference">
<link rel="prev" href="executable.credmgr.php" title="credmgr">
<link rel="next" href="executable.ec_console.php" title="ec_console">
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
<tr><th colspan="3" align="center">ec_adtool</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="executable.credmgr.php">Prev</a> </td>
<th width="60%" align="center">Chapter 74. Executable Commands Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="executable.ec_console.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="executable.ec_adtool"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>ec_adtool — adjust adaptive parameters in a cluster configuration</p>
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_adtool delete</code>  [
        common_options
      ] {
        <em class="replaceable"><code>node</code></em>
      }</p></div>
<div class="cmdsynopsis"><p><code class="command">/opt/msys/ecelerity/bin/ec_adtool move</code>  [
        common_options
      ] {
        <em class="replaceable"><code>old_node</code></em> <em class="replaceable"><code>new_node</code></em>
      } [
        -k |--keep
      ] [
        -o |--override
      ]</p></div>
</div>
<div class="refsection">
<a name="idp13736640"></a><h2>Description</h2>
<p>
      Adaptive parameters are saved to Riak as blog data (a JSON
      object). <span class="command"><strong>ec_adtool</strong></span> provides the capability of
      manipulating those parameters and is most useful when you have
      upgraded from an earlier version of Momentum.
    </p>
<p>
      In earlier versions of Momentum, adaptive parameters are stored in
      a SQLite database and all adaptive data are considered local. If
      you have just migrated to a newer version of Momentum, you can use
      this tool to promote the existing parameters from local to global.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        You only need use this tool when the adaptive module is loaded.
        For more information see <a class="xref" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">Section 71.3, “adaptive – Adaptive Delivery”</a>.
      </p>
</div>
<p>
      The options common to all commands are listed below:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          -d | --debug
        </span></dt>
<dd><p>
            Show debug data.
          </p></dd>
<dt><span class="term">
          -f | --from_url <em class="replaceable"><code>url</code></em>
        </span></dt>
<dd><p>
            Specify a Riak server URL where data is read from, for
            example, <code class="literal">http://127.0.0.1:8098</code>. If this
            option is not specified, the default is
            <code class="literal">http://127.0.0.1:8098</code>. A server URL must
            start with <code class="literal">http://</code>.
          </p></dd>
<dt><span class="term">
          -t | --to_url <em class="replaceable"><code>url</code></em>
        </span></dt>
<dd><p>
            Specify a Riak server URL where data is written to. The
            semantic of the option value is the same as that of the
            <code class="option">from_url</code> option. If this option is not
            specified, it defaults to the <code class="option">from_url</code>
            default.
          </p></dd>
<dt><span class="term">
          -v | --verbose
        </span></dt>
<dd><p>
            Use this option for verbose output.
          </p></dd>
</dl></div>
<p>
      Various commands can be used with this executable.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          /opt/msys/ecelerity/bin/ec_adtool delete [ common_options ] {
          node }
        </span></dt>
<dd><p>
            Delete the local parameters for a given node.
          </p></dd>
<dt><span class="term">
          /opt/msys/ecelerity/bin/ec_adtool move [ common_options ] [
          global ]{ <em class="replaceable"><code>old_node</code></em>
          <em class="replaceable"><code>new_node</code></em> } [ -k |--keep ] [ -o
          |--override ]
        </span></dt>
<dd>
<p>
            Move all the local parameters from one node to another. The
            node name is the one used in cluster configuration.
          </p>
<p>
            The <code class="option">keep</code> option retains the source data
            when creating a copy. If you use the
            <code class="option">override</code> option the source data is not
            preserved. The default is not to override.
          </p>
<p>
            Use this command with the <code class="literal">global</code> keyword
            to change the scope of the parameters for the specified
            binding/domain from local to global. For example:
            <strong class="userinput"><code>ec_adtool move mta1 global
            gold-binding</code></strong>.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              Since <code class="literal">global</code> is a keyword, you cannot
              name nodes <code class="literal">global</code>.
            </p>
</div>
</dd>
</dl></div>
<div class="refsection">
<a name="executable.ec_adtool.examples"></a><h3>Examples</h3>
<p>
        When one node is replaced by another, you may need to move the
        local parameters from the old node to the new node. Do this in
        the following way:

</p>
<pre class="programlisting">
shell&gt; ec_adtool –f http://127.0.0.1:8098 move <em class="replaceable"><code>node1</code></em> <em class="replaceable"><code>node2</code></em>
</pre>
<p>

        <code class="literal">–f http://127.0.0.1:8098</code> need not be
        specified since it is the default.
      </p>
<p>
        Delete local scope parameters in the following way:

</p>
<pre class="programlisting">
shell&gt; ec_adtool –f http://127.0.0.1:8098 delete <em class="replaceable"><code>node1</code></em>
</pre>
<p>
      </p>
<p>
        Change the adaptive scope from local to global for a specific
        binding in the following way:

</p>
<pre class="programlisting">
shell&gt; ec_adtool move <em class="replaceable"><code>node1</code></em> global <em class="replaceable"><code>binding_name</code></em>
</pre>
<p>

        In this example, the <code class="option">-f</code> option is not specified
        so the default URL, <code class="literal">http://127.0.0.1:8098</code>, is
        used. Also, since only a binding was specified, only the binding
        age has been moved to the global scope. To move suspensions and
        options to a global scope, specify a binding/domain combination
        as in the following example:
      </p>
<pre class="programlisting">
shell&gt; ec_adtool move mta1 global gold-binding/mydomain.com
</pre>
<p>
        Move parameters from a global to a local scope by reversing the
        positions of the node name and the keyword
        <code class="literal">global</code>.
      </p>
</div>
</div>
<div class="refsection">
<a name="idp11087392"></a><h2>See Also</h2>
<p>
      <a class="xref" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">Section 71.3, “adaptive – Adaptive Delivery”</a>,





      <a class="xref" href="riak.php" title="Chapter 30. Riak">Chapter 30, <i>Riak</i></a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="executable.credmgr.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="exec.cmds.ref.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="executable.ec_console.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">credmgr </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> ec_console</td>
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
