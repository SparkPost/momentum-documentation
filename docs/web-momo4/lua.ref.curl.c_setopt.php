<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>c:setopt</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="lua.function.details.php" title="Chapter 70. Lua Functions Reference">
<link rel="prev" href="lua.ref.curl.c_perform.php" title="c:perform">
<link rel="next" href="lua.ref.curl.escape.php" title="curl.escape">
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
<tr><th colspan="3" align="center">c:setopt</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="lua.ref.curl.c_perform.php">Prev</a> </td>
<th width="60%" align="center">Chapter 70. Lua Functions Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="lua.ref.curl.escape.php">Next</a>
</td>
</tr>
</table></div>
<div class="refentry">
<a name="lua.ref.curl.c_setopt"></a><div class="titlepage"></div>
<div class="refnamediv">
<h2>Name</h2>
<p>c:setopt — Set the option value of a curl object</p>
</div>
<div class="refsection">
<a name="idp15432240"></a><h2>Synopsis</h2>
<pre class="literallayout">
require('curl');

</pre>
<p>
      <code class="function">c:setopt(option, value);</code>
    </p>
<pre class="literallayout">
option: numeric
value: mixed
</pre>
</div>
<div class="refsection">
<a name="idp15435952"></a><h2>Description</h2>
<p>
      Where <code class="literal">c</code> is a curl object, set an option value.
      The first parameter is a number representing a cURL option; it can
      be any one of the options listed below at
      <a class="xref" href="lua.ref.curl.c_setopt.php#lua.ref.c_setopt.callbacks" title="Callback Options">the section called “Callback Options”</a> and following. A
      predefined constant <code class="constant">curl.OPT_XXXX</code> corresponds
      to the <code class="constant">CURLOPT_XXXX</code> constant defined in the
      libcurl interface <code class="filename">curl/curl.h</code>.
    </p>
<p>
      All enumeration types and define macros from libCURL 7.14.0 are
      exported to the curl namespace with the following name
      substitutions:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="constant">CURL_XXXX</code> becomes
          <code class="constant">curl.XXXX</code>
        </p></li>
<li class="listitem"><p>
          <code class="constant">CURLXXXX</code> becomes
          <code class="constant">curl.XXXX</code>
        </p></li>
</ul></div>
<p>
      The data type and value of the second parameter depends upon the
      first parameter. The second parameter may be any one of the
      following types:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="literal">function</code>
        </p></li>
<li class="listitem"><p>
          <code class="literal">string</code>
        </p></li>
<li class="listitem"><p>
          <code class="literal">numeric</code>
        </p></li>
<li class="listitem"><p>
          <code class="literal">boolean</code>
        </p></li>
</ul></div>
<p>
      In the following example <code class="function">c:setopt</code> is invoked
      passing a string as the second parameter, passing a number and
      finally passing a function.
    </p>
<div class="example">
<a name="lua.ref.c_setopt.example"></a><p class="title"><b>Example 70.16. c:setopt example</b></p>
<div class="example-contents"><pre class="programlisting">
c = curl.new();
c:setopt(curl.OPT_URL, "http://example.com/index.php");
c:setopt(curl.OPT_HTTP_VERSION, 1.1);
c:setopt(curl.OPT_WRITEFUNCTION, function(userdata, datastring) print(datastring); »
  return string.len(datastring); end);
c:perform();
</pre></div>
</div>
<br class="example-break"><p>
      Listed below are all curl options supported by libCURL grouped by
      type. For complete documentation of the cURL options consult the
      man page.
    </p>
<div class="refsection">
<a name="lua.ref.c_setopt.callbacks"></a><h3>Callback Options</h3>
<p>
        The following options are used with callback functions. When
        using any one of these options the second parameter must be a
        function. The first parameter is a DATA option and the second is
        a Lua <span class="bold"><strong>function</strong></span> that will act on
        the data that is returned.
      </p>
<h2>
<a name="curlopt_readfunctionandcurlopt_readdata"></a>curl.OPT_READFUNCTION and curl.OPT_READDATA</h2>
<p>
        Sets the <code class="constant">READFUNCTION</code> option, which is used
        to override the source of data used in an upload operation. The
        callback must have the following signature:
      </p>
<pre class="programlisting">function(userdata, size)
  -- return a string of no more than "size" bytes, or nil when
  -- EOF is reached 
end
</pre>
<p>
        When <code class="constant">OPT_READFUNCTION</code> is set, it implicitly
        sets <code class="constant">OPT_READDATA</code> to the curl object. You
        may set this separately; the value of
        <code class="constant">OPT_READDATA</code> is passed as the first
        parameter to the <code class="constant">READFUNCTION</code>.
      </p>
<h2>
<a name="curlopt_writefunctionandcurlopt_writedata"></a>curl.OPT_WRITEFUNCTION and curl.OPT_WRITEDATA</h2>
<p>
        Sets the <code class="constant">WRITEFUNCTION</code> option, which is
        used to override the destination of data received from download
        operation. The callback must have the following signature:
      </p>
<pre class="programlisting">
function(userdata, datastring)
  -- datastring is the incoming data to store
  -- return an integer indicating how many bytes were stored
end
</pre>
<p>
        When <code class="constant">OPT_WRITEFUNCTION</code> is set, it
        implicitly sets <code class="constant">OPT_WRITEDATA</code> to the curl
        object. You may set this separately; the value of
        <code class="constant">OPT_WRITEDATA</code> is passed as the first
        parameter to the <code class="constant">WRITEFUNCTION</code>.
      </p>
<h2>
<a name="curlopt_headerfunctionandcurlopt_headerdata"></a>curl.OPT_HEADERFUNCTION and curl.OPT_HEADERDATA</h2>
<p>
        Sets the <code class="constant">HEADERFUNCTION</code> option, which is
        used to override the destination of header or meta data received
        from a download operation. The callback must have the following
        signature:
      </p>
<pre class="programlisting">
function(userdata, datastring)
  -- datastring is the incoming data to store
  -- return an integer indicating how many bytes were stored
end
</pre>
<p>
        When <code class="constant">OPT_HEADERFUNCTION</code> is set, it
        implicitly sets <code class="constant">OPT_HEADERDATA</code> to the curl
        object. You may set this separately; the value of
        <code class="constant">OPT_HEADERDATA</code> is passed as the first
        parameter to the <code class="constant">HEADERFUNCTION</code>.
      </p>
<h2>
<a name="curlopt_progressfunctionandcurlopt_progressdata"></a>
  curl.OPT_PROGRESSFUNCTION and curl.OPT_PROGRESSDATA</h2>
<p>
        Sets the <code class="constant">PROGRESSFUNCTION</code> option, which is
        used to override the destination of header or meta data received
        from download operation. Note that curl.OPT_NOPROGRESS must be
        set to false for the <code class="constant">PROGRESSFUNCTION</code> to be
        called. The callback must have the following signature:
      </p>
<pre class="programlisting">
function(userparam, dltotal, dlnow, uptotal, upnow)
  -- return 0 (or omit a return statement) to allow the operation
  -- to continue. Returning any other integer value will cause
  -- the operation to abort
end
</pre>
<p>
        When <code class="constant">OPT_PROGRESSFUNCTION</code> is set, it
        implicitly sets <code class="constant">OPT_PROGRESSDATA</code> to the
        curl object. You may set this separately; the value of
        <code class="constant">OPT_PROGRESSDATA</code> is passed as the first
        parameter to the <code class="constant">PROGRESSFUNCTION</code>.
      </p>
<h2>
<a name="curlopt_ioctlfunctionandcurlopt_ioctldata"></a>curl.OPT_IOCTLFUNCTION and curl.OPT_IOCTLDATA</h2>
<p>
        Sets the <code class="constant">IOCTLFUNCTION</code> option, which is
        used to override some aspects of the cURL library
        operation—consult the cURL documentation to find out more
        about this. The callback must have the following signature:
      </p>
<pre class="programlisting">
function(userparam, command)
  -- command is a numeric code
  -- return a numeric code dependent upon the result of the ioctl
  -- operation.  Consult the cURL documentation for more
  -- information.
end
</pre>
<p>
        When <code class="constant">OPT_IOCTLFUNCTION</code> is set, it
        implicitly sets <code class="constant">OPT_IOCTLDATA</code> to the curl
        object. You may set this separately; the value of
        <code class="constant">OPT_IOCTLDATA</code> is passed as the first
        parameter to the <code class="constant">IOCTLFUNCTION</code>.
      </p>
<a name="curlopt_seekfunctionandcurlopt_seekdata"></a><pre class="programlisting">curl.OPT_SEEKFUNCTION and curl.OPT_SEEKDATA</pre>
<p>
        Sets the <code class="constant">SEEKFUNCTION</code> option, which is used
        to seek around in the input stream for resumed uploads. The
        callback must have the following signature:
      </p>
<pre class="programlisting">
function(userparam, offset, origin)
  -- Return 0 on success, 1 on failure or 2 to indicate that seeking
  -- is incompatible and that cURL should workaround it by reading
  -- and discarding the data
end
</pre>
<p>
        When <code class="constant">OPT_SEEKFUNCTION</code> is set, it implicitly
        sets <code class="constant">OPT_SEEKDATA</code> to the curl object. You
        may set this separately; the value of
        <code class="constant">OPT_SEEKDATA</code> is passed as the first
        parameter to the <code class="constant">SEEKFUNCTION</code>.
      </p>
</div>
<div class="refsection">
<a name="lua.ref.curl.c_setopt.stringlistoptions"></a><h3>String List Options</h3>
<p>
        The following options can be set to a string or a list of
        strings, or a <code class="literal">nil</code> value to clear a previously
        configured list of strings. For example:
      </p>
<pre class="programlisting">
c:setopt(curl.OPT_HTTPHEADER, "X-Foo: Bar",
    "Content-Type: application/json");
c:setopt(curl.OPT_HTTPHEADER, nil);
</pre>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="constant">curl.OPT_HTTP200ALIASES</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_HTTPHEADER</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_HTTPPOST</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_POSTQUOTE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_PREQUOTE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_QUOTE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SOURCE_POSTQUOTE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SOURCE_PREQUOTE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SOURCE_QUOTE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_TELNETOPTIONS</code>
          </p></li>
</ul></div>
</div>
<div class="refsection">
<a name="lua.ref.curl.c_setopt.stringoptions"></a><h3>String options</h3>
<p>
        The following options can be set to either a string or a
        <code class="literal">nil</code> value. The <code class="literal">nil</code> value
        is generally used to cancel or clear a previously set option.
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="constant">curl.OPT_CAINFO</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_CAPATH</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_COOKIE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_COOKIEFILE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_COOKIEJAR</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_CUSTOMREQUEST</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_EGDSOCKET</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_ENCODING</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTPPORT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTP_ACCOUNT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_INTERFACE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_KRB4LEVEL</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_NETRC_FILE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_POSTFIELDS</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_PROXY</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_PROXYUSERPWD</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_RANDOM_FILE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_RANGE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_REFERER</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SOURCE_URL</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SOURCE_USERPWD</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSLCERT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSLCERTTYPE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSLENGINE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSLKEY</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSLKEYPASSWD</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSLKEYTYPE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSL_CIPHER_LIST</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_URL</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_USERAGENT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_USERPWD</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_WRITEINFO</code>
          </p></li>
</ul></div>
</div>
<div class="refsection">
<a name="idp15553392"></a><h3>Numeric options</h3>
<p>
        The following options are set to a numeric value:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="constant">curl.OPT_BUFFERSIZE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_CLOSEPOLICY</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_CONNECTTIMEOUT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_DNS_CACHE_TIMEOUT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTPSSLAUTH</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTP_RESPONSE_TIMEOUT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTP_SSL</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_HTTPAUTH</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_HTTP_VERSION</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_INFILESIZE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_INFILESIZE_LARGE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_IPRESOLVE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_LOW_SPEED_LIMIT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_LOW_SPEED_TIME</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_MAXCONNECTS</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_MAXFILESIZE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_MAXFILESIZE_LARGE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_MAXREDIRS</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_NETRC</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_PORT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_POSTFIELDSIZE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_POSTFIELDSIZE_LARGE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_PROXYAUTH</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_PROXYPORT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_PROXYTYPE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_RESUME_FROM</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_RESUME_FROM_LARGE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSLVERSION</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSL_VERIFYHOST</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_TIMECONDITION</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_TIMEOUT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_TIMEVALUE</code>
          </p></li>
</ul></div>
</div>
<div class="refsection">
<a name="idp15598816"></a><h3>Boolean options</h3>
<p>
        The following options are set to boolean,
        <code class="literal">true</code> or <code class="literal">false</code> only.
        (<code class="literal">0</code> and <code class="literal">1</code> are not permitted
        and result in an error.)
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="constant">curl.OPT_AUTOREFERER</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_COOKIESESSION</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_CRLF</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_DNS_USE_GLOBAL_CACHE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FAILONERROR</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FILETIME</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FOLLOWLOCATION</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FORBID_REUSE</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FRESH_CONNECT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTPAPPEND</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTPLISTONLY</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTP_CREATE_MISSING_DIRS</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTP_USE_EPRT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_FTP_USE_EPSV</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_HEADER</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_HTTPGET</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_HTTPPROXYTUNNEL</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_NOBODY</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_NOPROGRESS</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_NOSIGNAL</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_POST</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_PUT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSLENGINE_DEFAULT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_SSL_VERIFYPEER</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_TCP_NODELAY</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_TRANSFERTEXT</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_UNRESTRICTED_AUTH</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_UPLOAD</code>
          </p></li>
<li class="listitem"><p>
            <code class="constant">curl.OPT_VERBOSE</code>
          </p></li>
</ul></div>
</div>
<div class="refsection">
<a name="idp15641552"></a><h3>See Also</h3>
<p>
        <a class="xref" href="lua.ref.curl.new.php" title="curl.new"><span class="refentrytitle">curl.new</span></a>
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="lua.ref.curl.c_perform.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="lua.function.details.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="lua.ref.curl.escape.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">c:perform </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> curl.escape</td>
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
