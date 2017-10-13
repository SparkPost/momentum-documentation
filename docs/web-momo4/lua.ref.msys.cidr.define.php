<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>msys.cidr.define</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.msys.brightmail.scan.php" title="msys.brightmail.scan">
<link rel="next" href="lua.ref.msys.cidr.query.php" title="msys.cidr.query">
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
<tr><th colspan="3" align="center">msys.cidr.define</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.msys.brightmail.scan.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.msys.cidr.query.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.msys.cidr.define"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>msys.cidr.define — Define a named CIDR object</p>
</div>
<div class="refsection">
<a name="idp17654464"></a><h2>Synopsis</h2>
<p>
        <code class="function">msys.cidr.define(name, options);</code>
      </p>
<pre class="literallayout">
name: string
options: table
</pre>
</div>
<div class="refsection">
<a name="idp17657456"></a><h2>Description</h2>
<p>
        Defines a named CIDR object. A CIDR object is used to
        efficiently track information keyed by network address.
      </p>
<p>
        This function is intended to be used from a module init
        function:
      </p>
<div class="example">
<a name="lua.ref.msys.cidr.define.example"></a><p class="title"><b>Example 70.51. msys.cidr.define example</b></p>
<div class="example-contents"><pre class="programlisting">
local mod = {}
function mod:init()
  msys.cidr.define('mycidr', {
    type = 'rbldnsd',
    default_value = '127.0.0.1',
    source = '/path/to/file'
  });
  return true;
end
msys.registerModule("mymodule", mod);
</pre></div>
</div>
<br class="example-break"><p>
        This code defines a named CIDR object. A CIDR object is used to
        efficiently track information keyed by network address.
      </p>
<p>
        <code class="literal">options</code> is a table that can provide
        additional parameters and control the type of CIDR being
        created. Its elements are as follows:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="literal">type</code> can be
            <code class="literal">datasource</code>, <code class="literal">rbldnsd</code> or
            <code class="literal">empty</code>. For a detailed discussion see
            <a class="xref" href="lua.ref.msys.cidr.define.php#lua.ref.msys.cidr.define.type" title="CIDR Types">the section called “CIDR Types”</a>.
          </p></li>
<li class="listitem"><p>
            <code class="literal">interpolate</code> when true, any dollar sign
            placeholders in the returned data will be replaced by the IP
            address of the connected peer. This is because it is common
            practice for RBL files to use this syntax as a shortcut to
            represent the peer IP.
          </p></li>
<li class="listitem"><p>
            <code class="literal">default_value</code> the value to return when a
            query does not match. The default value is
            <code class="literal">nil</code>. A commonly used alternative is the
            string <code class="literal">127.0.0.0</code> which is typically used
            to indicate no match in DNS based RBLs.
          </p></li>
</ul></div>
<p>
        If <code class="literal">option</code> is not a table, it is assumed to be
        the value of the <code class="literal">type</code> parameter, which
        effectively limits you to <code class="literal">empty</code>, as the other
        types all require more information and will raise an error if
        missing.
      </p>
<p>
        Enable this function with the statement
        <code class="code">require('msys.cidr');</code>.
      </p>
<div class="refsection">
<a name="lua.ref.msys.cidr.define.type"></a><h3>CIDR Types</h3>
<h2>
<a name="idp17676464"></a>datasource</h2>
<p>
          Datasource driven CIDRs are populated by querying a datasource
          via the datasource layer. The following options are valid when
          defining a datasource type CIDR:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              <code class="literal">refresh</code> how often, in seconds, to
              refresh the CIDR from the datasource. The default is 1800
              seconds (30 minutes). If set to 0, the data will only be
              refreshed when manually triggered.
            </p></li>
<li class="listitem"><p>
              <code class="literal">cachename</code> the name of the datasource
              cache against which to present the query.
            </p></li>
<li class="listitem"><p>
              <code class="literal">query</code> the query that will return the
              source data used to build the CIDR. This is run when the
              CIDR is defined and whenever the data is refreshed.
            </p></li>
<li class="listitem"><p>
              <code class="literal">cidr_column</code> the name or ordinal
              position of the column in the dataset that contains the
              CIDR value. If not specified, the first column is assumed.
            </p></li>
<li class="listitem"><p>
              <code class="literal">value_column</code> the name or ordinal
              position of the column in the dataset that contains the
              value associated with the CIDR entry, and that will be
              returned when a query matches. If not specified then
              matching queries will return a true value.
            </p></li>
</ul></div>
<h2>
<a name="idp17685600"></a>rbldnsd</h2>
<p>
          Realtime Block List DNS Daemon (RBLDNSD) files represent a
          serialized CIDR data structure that is used instead of issuing
          DNS lookups against a central server, since a local CIDR
          lookup is much faster.
        </p>
<p>
          RBLDNSD formatting uses ':' as a column delimiter for IPv4 and
          IPv6. But IPv6 also uses ':' as a delimiter, which makes it
          difficult to differentiate between which colons are for the
          RBLDNSD entry and which are for the ipv6 address. To resolve
          this issue, we added a space before the colon (<code class="literal">'
          :'</code>) for the IPv6 address column delimiter.
        </p>
<p>
          As a result, the following format is valid:
        </p>
<p>
          <code class="option">10.79.0.0:&lt;rest of line&gt;</code>
        </p>
<p>
          While this format is not valid:
        </p>
<p>
          <code class="option">1111::0000:&lt;rest of line&gt;</code>
        </p>
<p>
          Instead, you must add a space before the delimiter colon:
        </p>
<p>
          <code class="option">1111::0000 :&lt;rest of line&gt;</code>
        </p>
<p>
          The following options are valid when defining an
          <code class="literal">rbldnsd</code> type CIDR:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              <code class="literal">refresh</code> how often, in seconds, to
              refresh the CIDR from the datasource. The default is 1800
              seconds (30 minutes). If set to 0, the data will only be
              refreshed when manually triggered.
            </p></li>
<li class="listitem"><p>
              <code class="literal">source</code> the URI identifying the location
              of the rbldnsd file. This can be via any protocol
              supported by the I/O wrapper layer.
            </p></li>
<li class="listitem"><p>
              <code class="literal">value</code> either <code class="literal">a</code> or
              <code class="literal">txt</code> to indicate whether the address
              record or the text record from the file should be used
              when loading this CIDR. If not specified, the default is
              <code class="literal">a</code>.
            </p></li>
<li class="listitem"><p>
              <code class="literal">optimize</code> some RBLs are distributed in a
              non-optimal unsorted format. Setting optimize to true will
              optimize the data as it is loaded and result in improved
              runtime performance but will take longer to initialize.
            </p></li>
</ul></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
            Momentum <span class="bold"><strong>does not support</strong></span>
            the RBLDNSD 'hyphen' notation for IPv6 for performance
            concerns. The CIDRDB could become bloated because each IP is
            represented as an individual data structure and due to the
            size of IPv6 addresses. A CIDR mask would work more quickly
            and easily.
          </p>
</div>
<h2>
<a name="idp17702960"></a>empty</h2>
<p>
          This value creates an empty CIDR that you can populate for
          yourself.
        </p>
</div>
</div>
<div class="refsection">
<a name="idp17704256"></a><h2>See Also</h2>
<p>
        <a class="xref" href="modules.cidrdb.php" title="71.16. cidrdb – CIDRDB">Section 71.16, “cidrdb – CIDRDB”</a>,
        <a class="xref" href="lua.ref.msys.cidr.reload.php" title="msys.cidr.reload"><span class="refentrytitle">msys.cidr.reload</span></a>,
        <a class="xref" href="lua.ref.msys.cidr.query.php" title="msys.cidr.query"><span class="refentrytitle">msys.cidr.query</span></a>








      </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.msys.brightmail.scan.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.msys.cidr.query.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">msys.brightmail.scan </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> msys.cidr.query</td>
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
