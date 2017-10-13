<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.db.execute</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="next" href="lua.ref.ac_esmtp_capability_add.php" title="ac:esmtp_capability_add">
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
<tr><th colspan="3" align="center">msys.db.execute</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.function.details.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.ac_esmtp_capability_add.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.db.execute"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.db.execute — Execute a query that is not expected to return data</p>
</div>
<div class="refsection">
<a name="idp14553488"></a><h2>Synopsis</h2>
<pre class="literallayout">
require('msys.db')
require('msys.datasource')

</pre>
<p>
      <code class="function">success, errmsg = msys.db.execute(cachename, query,
      queryparams, options);</code>
    </p>
<pre class="literallayout">
cachename: string
query: string
queryparams: table (optional)
options: table (optional)
</pre>
</div>
<div class="refsection">
<a name="idp14770480"></a><h2>Description</h2>
<p>
      Execute a query that is not expected to return data. The
      parameters are as follows:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">cachename</code> – Name of the datasource
          cache to be queried
        </p></li>
<li class="listitem">
<p>
          <code class="literal">query</code> – Query to be presented to the
          cache
        </p>
<p>
          The query may use placeholder characters in the form
          <code class="literal">:name, ?</code>, or <code class="literal">$name</code>
          depending on the underlying driver. If the
          <code class="literal">?</code> placeholder is used, then
          <code class="literal">queryparams</code> must be a table with numeric
          keys, with index <code class="literal">1</code> corresponding to the
          first <code class="literal">?</code> in the query string. Otherwise, the
          keys must be string keys with names that match up to the
          defined parameters. For instance, <code class="literal">$name</code> or
          <code class="literal">:name</code> expect to find a parameter in the
          table using the key name; the leading <code class="literal">$</code> or
          <code class="literal">:</code> is removed before looking up the value.
        </p>
</li>
<li class="listitem">
<p>
          <code class="literal">queryparams</code> – Lua table object with
          parameters to bind into the query
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            The SQL standard requires the use of the "<code class="literal">IS [NOT]
            NULL"</code> syntax in a predicate for matching against
            <code class="literal">NULL</code>. A predicate
            "<code class="literal"><em class="replaceable"><code>field_name</code></em> =
            ?</code>" would result in an error if a query parameter
            is <code class="literal">NULL</code>. A Lua <code class="literal">nil</code> is
            equivalent to an SQL <code class="literal">NULL</code>.
          </p>
</div>
</li>
<li class="listitem">
<p>
          <code class="literal">options</code> – Lua table object containing
          additional options that affect this query
        </p>
<p>
          If <code class="literal">options</code> is specified, it must be a
          table. The following options are permitted:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: circle; ">
<li class="listitem"><p>
              <code class="literal">nocache</code> – Boolean value. If set
              to <code class="literal">true</code>, bypass the cache and force the
              query to be presented to the underlying datasource.
            </p></li>
<li class="listitem"><p>
              <code class="literal">raise_error</code> – Boolean value. If
              set to <code class="literal">true</code>, raise an exception
              (lua_error) on error containing the error string. Default
              value is <code class="literal">true</code>.
            </p></li>
</ul></div>
</li>
</ul></div>
<p>
      Enable this function with the statement
      <code class="code">require('msys.db');</code> and also include the statement
      <code class="code">require('msys.datasource');</code>.
    </p>
<p>
      This function returns the following:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          If query succeeds – Returns <code class="literal">true</code>.
        </p></li>
<li class="listitem"><p>
          If query fails and <code class="literal">raise_error</code> is set to
          <code class="literal">false</code> – Returns
          <code class="literal">false</code> indicating query faliure and
          <code class="literal">errmsg</code> indicating what failed.
        </p></li>
<li class="listitem"><p>
          If the query fails and <code class="literal">raise_error</code> is set
          to <code class="literal">true</code> – Raises an exception.
        </p></li>
</ul></div>
<p>
      The idiom for issuing a query and working with the results is:
    </p>
<div class="example">
<a name="lua.ref.msy.db.execute.example"></a><p class="title"><b>Example 70.1. lua.ref.msy.db.execute example</b></p>
<div class="example-contents"><pre class="programlisting">
require('msys.datasource');
require('msys.db');

local success, errmsg;
local cache, query, raise_error;
...

  success, errmsg = msys.db.execute (cache, query, nil, { raise_error = false });
  if (success == true) then
    print ("Query succeeded");
  elseif (success == false) then
    print ("Query failed: " .. errmsg);
  else
    print ("Unknown state");
  end
...
</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
        The data cache used in the preceding example must be defined in
        your configuration file. For more information, see
        <a class="xref" href="modules.ds_core.php" title="71.29. ds_core - Datasource Query Core">Section 71.29, “ds_core - Datasource Query Core”</a>.
      </p>
</div>
</div>
<div class="refsection">
<a name="idp14857648"></a><h2>See Also</h2>
<p>
      <a class="xref" href="lua.ref.msys.db.query.php" title="msys.db.query"><span class="refentrytitle">msys.db.query</span></a>,
      <a class="xref" href="lua.ref.msys.db.fetch_row.php" title="msys.db.fetch_row"><span class="refentrytitle">msys.db.fetch_row</span></a>,
      <a class="xref" href="implementing.policy.scriptlets.php" title="62.2. Policy Scriptlets">Section 62.2, “Policy Scriptlets”</a>
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.function.details.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.ac_esmtp_capability_add.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 70. Lua Functions Reference </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> ac:esmtp_capability_add</td>
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
