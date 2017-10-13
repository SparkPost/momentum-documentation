<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.29. ds_core - Datasource Query Core</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.domainkeys.php" title="71.28. domainkeys – Yahoo! DomainKeys">
<link rel="next" href="modules.ec_logger.php" title="71.30. EC_logger – Momentum-Style Logging">
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
<tr><th colspan="3" align="center">71.29. ds_core - Datasource Query Core</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.domainkeys.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.ec_logger.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.ds_core"></a>71.29. ds_core - Datasource Query Core</h2></div></div></div>
<a class="indexterm" name="idp21375504"></a><p>
    The datasource core (ds_core) module provides a modular data access
    and caching layer for consumption by other Momentum modules.
    Datasource driver modules can be loaded to provide access to
    third-party data stores (such as LDAP, ODBC, etc.). A C-language SDK
    is available to allow third parties to build their own datasource
    drivers for use with the datasource layer.
  </p>
<p>
    The datasource layer is designed to cache query results to avoid
    overwhelming the data store. Each cache is configured to query
    against a particular data store and can have distinct size and
    time-to-live (TTL) settings for the data, allowing an administrator
    many opportunities for tuning.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.ds_core.configuration"></a>71.29.1. Configuration</h3></div></div></div>
<p>
      The ds_core module is loaded implicitly as required and need not
      be specified in the configuration file. Nor do datasource drivers
      need to be explicitly loaded. However, you must add the
      appropriate database modules during installation.
    </p>
<p>
      The following options can be specified on a per-cache basis:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          cache_life
        </span></dt>
<dd><p>
            Specifies the time-to-live of a given cache entry, in
            seconds. Default value is <code class="literal">3600</code> seconds.
          </p></dd>
<dt><span class="term">
          cache_size
        </span></dt>
<dd><p>
            Maximum number of cache entries to store in the cache.
            During cache maintenance, if the cache size exceeds this
            amount, the oldest cache entries will be dropped until the
            cache size returns to the configured size. Default value is
            <code class="literal">1000</code>.
          </p></dd>
<dt><span class="term">
          max_rows
        </span></dt>
<dd><p>
            Maximum number of rows to fetch while performing a query.
            This acts as a brake to prevent accidental (or perhaps
            deliberate) querying of a very large number of rows from a
            database. Default value is <code class="literal">100</code> rows. To
            return an unlimited number of rows use
            <code class="literal">-1</code>. <span class="emphasis"><em>Note</em></span>: When
            querying a CSV data source you have no option but to return
            all rows. Otherwise, setting this value to
            <code class="literal">-1</code> is not recommended.
          </p></dd>
<dt><span class="term">
          no_cache
        </span></dt>
<dd><p>
            When set to <code class="literal">true</code>, query results will not
            be cached. Default value is <code class="literal">false</code>.
          </p></dd>
<dt>
<a name="modules.ds_core.pool"></a><span class="term">
          pool
        </span>
</dt>
<dd><p>
            Systems with a large IO pool may run into an issue whereby
            Momentum maintains many idle connections to the datasource
            or datasources that are in use; this can potentially starve
            other machines of connections. By specifying the thread pool
            that is used, you can configure the datasource thread
            <code class="option">pool</code> size independently of the IO pool
            size, dispatching datasource queries on a per-datasource
            basis. The threadpool referenced by this option must be
            defined. For more information about threadpools see
            <a class="xref" href="conf.ref.threadpool.php" title="threadpool"><span class="refentrytitle">threadpool</span></a>. Default value is
            <code class="literal">IO</code>.
          </p></dd>
<dt><span class="term">
          serialized
        </span></dt>
<dd>
<p>
            When set to <code class="literal">true</code>, query results will be
            serialized and published across the cluster. This is most
            effective when used with queries that are expensive to run
            and where the results are likely to be needed on more than
            one node of the cluster within a short time span. To share a
            cache across a cluster, you also need to add a replicate
            stanza to the cluster module. For an example, see
            <a class="xref" href="cluster.config.replication.php#cluster.replicatedcache" title="28.1.6. Replicated Caches">Section 28.1.6, “Replicated Caches”</a>. Default value is 
            <code class="literal">true</code>.
          </p>
<p>
            You are encouraged to create a separate cache dedicated to
            this type of query, should you require it.
          </p>
</dd>
<dt><span class="term">
          uri
        </span></dt>
<dd>
<p>
            Contains all the details required to locate a driver and
            connect to the data source. There is no universal format,
            except that the start of the string, up to the first colon
            (<code class="literal">:</code>) character specifies the driver name.
          </p>
<p>
            Multiple <code class="option">uri</code> lines can be provided and will
            be used in a round-robin fashion for simplistic load
            balancing. It is important that all such datasources return
            identical results, since each URI will be chosen
            sequentially. All URI's are considered equivalent (i.e. no
            one URI can be marked as "preferred"), and no failover
            action will be attempted (except in the sense that "dead"
            connections will be skipped).
          </p>
<p>
            The <code class="option">uri</code> option is an array, letting you
            specify more than one datasource. The following is an
            example configuration:
          </p>
<pre class="programlisting">
Datasource "mssql" {
  uri  = (
           "odbc:DSN=sqlserver;UID=user;PWD=pass"
           "odbc:DSN=sqlserver2;UID=user2;PWD=pass3"
           "odbc:DSN=sqlserver3;UID=user3;PWD=pass3"
           "odbc:DSN=sqlserver4;UID=user4;PWD=pass4"
         )
  cache_size = 200
  cache_life = 360
}</pre>
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.ds_core.datasource"></a>71.29.2. Datasource Scope</h3></div></div></div>
<p>
      The following is an example configuration stanza:
    </p>
<div class="example">
<a name="modules.ds_core.configuration.example"></a><p class="title"><b>Example 71.46. Specifying a Datasource</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "mssql" {
  uri = ( "odbc:DSN=sqlserver;UID=user;PWD=pass" )
  cache_size = 1000
  cache_life = 3600
}
</pre></div>
</div>
<br class="example-break"><p>
      This example loads the datasource core and the ODBC datasource
      driver and configures a cache to query against a MS SQL Server It
      creates a cache named <code class="literal">mssql</code> that will store the
      results of up to 1000 distinct queries. A datasource must have a
      name to identify a given datasource instance in order to apply
      configuration changes. Cache items will remain in the cache for up
      to 3600 seconds.
    </p>
<p>
      If a cache miss occurs, the <code class="option">uri</code> parameter
      specifies how to connect to the datasource to fetch the data. The
      syntax for <code class="option">uri</code> is the driver name followed by a
      single colon character. Everything after the colon is passed
      verbatim to the driver in order to create the connection. What is
      passed varies depending upon the requirements of the driver. In
      the example, the SQLite driver only requires the driver name
      followed by the path to the database. The ODBC driver shown above
      requires a DSN, a user ID and password in addition to the driver
      name. Check driver documentation for the exact syntax.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        The cache name is a token of your choosing. Typically, the name
        reflects the database type as it does in the preceding examples.
        However, the cache name is the value that must be passed to Lua
        database functions when querying a datasource.
        <span class="emphasis"><em>Note</em></span>: "Cache name" and "datasource name"
        are used interchangeably throughout the Message Systems
        documentation.
      </p>
</div>
<p>
      Datasource queries are run in one of the thread pools (almost
      always the IO thread pool, as the data fetch is an IO-bound
      operation), which allows Momentum to continue serving other
      sessions while a query completes. You may specify the threadpool
      using the <code class="option">pool</code> option.
    </p>
<p>
      Datasources are not modules so you cannot determine their names
      using the <span class="command"><strong>module list</strong></span> command. Use
      <span class="command"><strong>config locate datasource</strong></span> instead.
    </p>
<p>
      To set datasource options from the console, use the syntax
      <code class="literal">config set datasource <em class="replaceable"><code>ds_name option
      value</code></em></code>. For example, set the
      <code class="option">cache_life</code> of the datasource defined in
      <a class="xref" href="modules.ds_core.php#modules.ds_core.configuration.example" title="Example 71.46. Specifying a Datasource">Example 71.46, “Specifying a Datasource”</a> in
      the following way:
    </p>
<pre class="programlisting">
07:57:51 /tmp/2025&gt; config set datasource mssql cache_life 3500
</pre>
<h4>
<a name="idp21424176"></a>Character Encoding Support</h4>
<p>
      Where possible, the datasource layer determines the charset
      encoding of the data and stores it in the cache in the form
      requested by the first query for that data. This will usually be
      for UTF-8 data.
    </p>
<p>
      If a driver is unable to determine the charset, Momentum will
      assume that the data is encoded using ISO-8859-1 (latin-1). You
      may override this assumption by setting the
      <code class="option">assume_charset</code> option in the datasource
      declaration:
    </p>
<pre class="programlisting">
assume_charset = "iso-2022-jp"
</pre>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.ds_core.drivers"></a>71.29.2.1. Datasource Drivers</h4></div></div></div>
<p>
        Datasource drivers are loaded automatically as needed and do not
        need to be explicitly included in your configuration. The
        following sections list the available drivers.
      </p>
<p>
        For Lua scripting examples, see:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <a class="xref" href="lua.ref.msys.db.execute.php" title="msys.db.execute"><span class="refentrytitle">msys.db.execute</span></a>
          </p></li>
<li class="listitem"><p>
            <a class="xref" href="lua.ref.msys.db.query.php" title="msys.db.query"><span class="refentrytitle">msys.db.query</span></a>
          </p></li>
<li class="listitem"><p>
            <a class="xref" href="lua.ref.msys.db.fetch_row.php" title="msys.db.fetch_row"><span class="refentrytitle">msys.db.fetch_row</span></a>
          </p></li>
</ul></div>
<div class="section">
<div class="titlepage"><div><div><h5 class="title">
<a name="modules.ds_core.ds_sqlite"></a>71.29.2.1.1. SQLite</h5></div></div></div>
<p>
          The SQLite driver provides access to any SQLite database. This
          driver is installed by default.
        </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h5 class="title">
<a name="modules.ds_core.ds_odbc"></a>71.29.2.1.2. ODBC and unixODBC</h5></div></div></div>
<a class="indexterm" name="idp21441104"></a><h6>
<a name="idp21442000"></a>ODBC</h6>
<p>
          The ODBC driver provides database access to any data source
          for which an ODBC compliant driver is installed.
        </p>
<div class="example">
<a name="example.ds_core.odbc.3"></a><p class="title"><b>Example 71.47. odbc datasource</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "mssql" {
  uri = ( "odbc:DSN=sqlserver;UID=user;PWD=pass" )
  cache_size = 200
  cache_life = 360
}</pre></div>
</div>
<br class="example-break"><p>
          The <em class="parameter"><code>uri</code></em> consists of the string
          <code class="literal">odbc:</code> followed by any valid ODBC connection
          string; the connection string is passed directly to the ODBC
          driver manager to establish the connection.
        </p>
<p>
          The ODBC driver accepts <code class="literal">?</code> and
          <code class="literal">:named</code> style parameters in prepared
          statements.
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            There is an ODBC-specific internal parameter,
            <code class="literal">long_threshold</code>, used for determining
            whether a field data type should be treated as a long value.
            Changing this parameter without the guidance of support is
            not recommended.
          </p>
</div>
<h6>
<a name="idp21450016"></a>unixODBC</h6>
<p>
          The following apply when using unixODBC:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              Package files are stored in directories below the
              <code class="filename">/opt/msys/3rdParty</code> directory.
            </p></li>
<li class="listitem"><p>
              Library files are found in the <code class="filename">lib</code>
              directory (<code class="filename">lib64</code> on 64 bit systems).
            </p></li>
<li class="listitem"><p>
              Executables files are found in the
              <code class="filename">bin</code> directory.
            </p></li>
<li class="listitem"><p>
              If you are installing a driver or configuring an ODBC DSN,
              use the <span class="command"><strong>odbcinst</strong></span> command found in the
              <code class="filename">bin</code> directory. For information on
              using this tool, see
              <a class="link" href="http://www.unixodbc.org/odbcinst.html" target="_top">http://www.unixodbc.org/odbcinst.html</a>.
            </p></li>
<li class="listitem"><p>
              In order for unixODBC to work with Momentum, the
              configuration files <code class="filename">odbc.ini</code> and
              <code class="filename">odbcinst.ini</code> must be installed in the
              <code class="filename">/opt/msys/3rdParty/etc</code> directory.
            </p></li>
<li class="listitem"><p>
              The Message Systems unixODBC package automatically adds
              itself to the appropriate unixODBC configuration files
              when installed. Likewise, when it is removed.
            </p></li>
<li class="listitem"><p>
              The configuration of a unixODBC datasource is identical to
              the configuration of an ODBC datasource.
            </p></li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h5 class="title">
<a name="modules.ds_ldap"></a>71.29.2.1.3. LDAP</h5></div></div></div>
<a class="indexterm" name="idp21464992"></a><p>
          The LDAP driver provides access to LDAP directories, including
          Microsoft ActiveDirectory. The connection URI should be an
          <a class="link" href="http://www.ietf.org/rfc/rfc2255.txt" target="_top">RFC
          2255</a> compliant LDAP URL. Briefly, the format for RFC
          2255 URLs is
          <code class="literal">ldap://host:port/dn?attributes?scope?filter?extensions</code>
        </p>
<p>
          Queries are also specified in the form of an LDAP URL, any
          components of the search criteria that are not specified in
          the query string are taken from the connection URI. Momentum
          supports the RFC 2255 <code class="literal">bindname</code> extension
          for specifying the DN to use for a bind, the commonly used
          <code class="literal">x-bindpw</code> extension to specify the
          associated password, and the additional
          <code class="literal">x-ignore-referrals=(0|1)</code> extension to allow
          disabling following referrals. If you wish to have the DN of
          the resulting object returned as results of the query, you may
          use the 'x-return-dn' extension to define the attribute name
          to assign to the DN in the resulting data set.
        </p>
<p>
          By default, LDAP connections are cached and re-used for
          subsequent queries with the same hostname, port and bind
          parameters. If one wishes to disable such caching, the
          <code class="literal">x-disable-connection-cache=true</code> extension
          may be used.
        </p>
<div class="example">
<a name="example.ds_core.ldap.3"></a><p class="title"><b>Example 71.48. ldap datasource</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "mydirectory" {
  uri = ( "ldap://10.80.116.112" )
  cache_size = 200
  cache_life = 360
}</pre></div>
</div>
<br class="example-break"><p>
          The extensions supported by ds_ldap are:
        </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
              bindname
            </span></dt>
<dd><p>
                DN to use for a bind.
              </p></dd>
<dt><span class="term">
              x-bindpw
            </span></dt>
<dd><p>
                Password associated with the
                <code class="literal">bindname</code>.
              </p></dd>
<dt><span class="term">
              x-connect-timeout
            </span></dt>
<dd><p>
                Number specifying the time-out in seconds for connecting
                to the LDAP server. If this time is exceeded, the query
                fails. The default is determined by your operating
                system, and is typically of the order of several
                minutes.
              </p></dd>
<dt><span class="term">
              x-disable-connection-cache
            </span></dt>
<dd><p>
                If <code class="literal">true</code>, disable re-use of LDAP
                server connections for queries with the same server
                parameters.
              </p></dd>
<dt><span class="term">
              x-ignore-referrals
            </span></dt>
<dd><p>
                If <code class="literal">0</code>, disables following referrals.
              </p></dd>
<dt><span class="term">
              x-ldap-version
            </span></dt>
<dd>
<p>
                Number specifying the LDAP protocol version to use.
              </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                  LDAPS queries that don't specify
                  <code class="literal">x-ldap-version=3</code> are liable to
                  fail.
                </p>
</div>
</dd>
<dt><span class="term">
              x-return-dn
            </span></dt>
<dd><p>
                Attribute name to assign to the DN in the resulting data
                set.
              </p></dd>
<dt><span class="term">
              x-search-timeout
            </span></dt>
<dd><p>
                Number in seconds that specifies: how long ds_ldap
                should wait for a query to complete; how long the server
                should spend processing the query (the search time
                limit). If this time is exceeded, the query fails.
                Default value is <code class="literal">6 </code> seconds.
              </p></dd>
</dl></div>
<p>
          The configuration options supported by ds_ldap are:
        </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
              connection_cache_size
            </span></dt>
<dd><p>
                Maximum number of connections to store in the cache.
                Once this limit is reached, the creation of a new
                connection will cause an existing connection to be
                closed, so that the new connection can be added to the
                cache.
              </p></dd>
<dt><span class="term">
              connection_cache_life
            </span></dt>
<dd><p>
                Maximum age of a connection in the cache, after which
                the connection is closed (and re-opened, if necessary).
                This option is specified in seconds.
              </p></dd>
</dl></div>
<div class="section">
<div class="titlepage"><div><div><h6 class="title">
<a name="modules.ds_ldap.active.directory"></a>71.29.2.1.3.1. Configuring Authentication with Active Directory</h6></div></div></div>
<p>
            To authenticate using Active Directory, create a
            configuration such as the following:
          </p>
<div class="example">
<a name="module.ds_core.ldap.authentication.example"></a><p class="title"><b>Example 71.49. Active Directory Authentication Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "ldap" {
  uri = ( "ldap://example.com" )
  no_cache = true
}

ds_ldap {}

auth_ds {
  Scheme "ecauth" {
    Authenticate {
      query =
"ldap:///????bindname=CN=$user%2cCN=Users%2cDC=int%2cDC=omniti%2cDC=net,x-bindpw=$pass"
      cache = "ldap"
      map = [
        user = "%{username}"
        pass = "%{password}"
      ]
    }
  }
}
Control_Listener {
  AuthLoginParameters = [
    uri = "ecauth://"
  ]
  Enable_Authentication = "true"
  Enable_Authorization = "false"
  AuthorizationParameters = [
    uri = "ecauth://"
  ]
  Listen "/tmp/2025" {
    Enable_Authentication = "false"
  }
  Listen "127.0.0.1:2025" {
  }
}
</pre></div>
</div>
<br class="example-break"><p>
            The Momentum LDAP driver supports a "bindname" extension for
            overriding the DN, user, and password used to connect to
            LDAP. The DN specified in the LDAP query is standard. In
            <a class="xref" href="modules.ds_core.php#module.ds_core.ldap.authentication.example" title="Example 71.49. Active Directory Authentication Configuration">Example 71.49, “Active Directory Authentication Configuration”</a>,
            you'll notice the substitutions for both
            <code class="literal">$user</code> and <code class="literal">$pass</code>. The
            only non-standard additional bit is
            <code class="literal">x-bindpw</code>, which is again supported by our
            LDAP driver.
          </p>
<h7><a name="idp21506544"></a>Limiting Access by Roles</h7><p>
            You can limit access to specific roles defined in Active
            directory by creating an LDAP query to specify only a single
            group or multiple groups in the query. That query would look
            similar to:
          </p>
<pre class="programlisting">
(&amp;(objectClass=user))(memberOf=cn=$user,cn=GROUPNAME,ou=ORGUNIT,dc=DCPART))
</pre>
<p>
            To a degree the format depends upon on how the LDAP database
            is set up, but generally speaking the user's name is the
            most specific part of the common name.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              If you choose to authenticate using Active Directory, you
              <span class="emphasis"><em>cannot</em></span> also authenticate using the
              Momentum PostgreSQL database. If you wish to use both, you
              must consult with professional services.
            </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h6 class="title">
<a name="modules.ds_ldap.console"></a>71.29.2.1.3.2. Console Commands</h6></div></div></div>
<p>
            The ds_ldap module can be controlled through the
            <code class="literal">ec_console</code>. The following commands are
            available:
          </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
                ds_ldap flush connection cache
              </span></dt>
<dd><p>
                  This command removes all entries from the connection
                  cache.
                </p></dd>
<dt><span class="term">
                ds_ldap show connection cache stats
              </span></dt>
<dd><p>
                  This command outputs statistics relating to the
                  connection cache.
                </p></dd>
</dl></div>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h5 class="title">
<a name="modules.ds_core.ds_csv"></a>71.29.2.1.4. CSV</h5></div></div></div>
<a class="indexterm" name="idp21519280"></a><p>
          The CSV driver provides access to any comma-separated file.
          This driver is installed by default. The following code
          includes the CSV driver and defines the properties of the CSV
          cache:
        </p>
<div class="example">
<a name="example.ds_core.csv.3"></a><p class="title"><b>Example 71.50. csv datasource</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "csv" {
  uri = "csv:"
  max_rows = -1
}
</pre></div>
</div>
<br class="example-break"><p>
          In this example, the <em class="parameter"><code>uri</code></em> parameter
          defines the protocol, and the <em class="parameter"><code>max_rows</code></em>
          parameter is set to <code class="literal">-1</code>, indicating that an
          unlimited number of rows are being returned. Because CSV data
          sources return all rows, they are useful for look-up
          operations where every record must be examined.
        </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h5 class="title">
<a name="modules.ds_core.ds_pgsl"></a>71.29.2.1.5. PostgreSQL</h5></div></div></div>
<a class="indexterm" name="idp21527152"></a><p>
          The PostgreSQL driver provides access to any PostgreSQL
          database. The following code includes the PostgreSQL driver
          and configures a cache to query against a PostgreSQL database:
        </p>
<div class="example">
<a name="example.ds_core.postgresql.3"></a><p class="title"><b>Example 71.51. PostgreSQL datasource</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "pgsql" {
    uri = ( "pgsql:host=example.com;dbname=db_name;user=user_name;»
    password=secret;port=5432" )
}
</pre></div>
</div>
<br class="example-break"><p>
          This data source also makes use of the other configuration
          parameters described in
          <a class="xref" href="modules.ds_core.php#modules.ds_core.configuration" title="71.29.1. Configuration">Section 71.29.1, “Configuration”</a>.
        </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h5 class="title">
<a name="modules.ds_core.ds_cdb"></a>71.29.2.1.6. Constant Database (CDB)</h5></div></div></div>
<a class="indexterm" name="idp21534176"></a><p>
          The CDB driver provides access to any CDB database. This
          driver is installed by default. The following code includes
          the CDB driver and configures a cache to query against a CDB
          database:
        </p>
<div class="example">
<a name="example.ds_core.cdb.3"></a><p class="title"><b>Example 71.52. cdb datasource</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "cdb" {
  uri = ( "cdb:/path/to/data.cdb" )
}
</pre></div>
</div>
<br class="example-break"><p>
          The <em class="parameter"><code>uri</code></em> consists of the string
          <code class="literal">cdb:</code> followed by the path to the CDB
          database.
        </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h5 class="title">
<a name="modules.ds_core.ds_iowrapper"></a>71.29.2.1.7. I/O Wrapper</h5></div></div></div>
<p>
          The I/O Wrapper driver allows the contents of a file to be
          queried and returned as a single row consisting of a single
          column. While this does not sound hugely impressive on its
          own, it provides access to any resource for which an IO
          wrapper exists. For instance, loading the http_io module
          provides support for pulling data over HTTP.
        </p>
<p>
          The I/O wrapper driver is installed by default and supports
          <code class="literal">$named</code> style parameters.
        </p>
<div class="example">
<a name="example.ds_core.iowrapper.3"></a><p class="title"><b>Example 71.53. iowrapper datasource</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "io" {
  uri = "iowrapper:"
  cache_size = 200
  cache_life = 360
}</pre></div>
</div>
<br class="example-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h5 class="title">
<a name="modules.ds_core.ds_mysql"></a>71.29.2.1.8. MySQL</h5></div></div></div>
<p>
          The MySQL driver provides access to a MySQL database. Go to
          the Message Systems support website and download the MySQL
          driver suitable to your operating system, architecture, and
          version of Momentum. Install this driver by issuing the
          command: <strong class="userinput"><code>rpm -Uvh
          mysy-ecelerity-mysql-<em class="replaceable"><code>version.os.arch</code></em>.rpm</code></strong>
          <strong class="userinput"><code>rpm -Uvh
          ecelerity-mysql-<em class="replaceable"><code>version.os.arch</code></em>.rpm</code></strong>
        </p>
<p>
          Add the following to your configuration:
        </p>
<div class="example">
<a name="example.ds_core.mysql.3"></a><p class="title"><b>Example 71.54. MySQL datasource</b></p>
<div class="example-contents"><pre class="programlisting">
Datasource "mysqldb" {
  uri = ( "mysql:host=localhost;port=3306;dbname=ecmail; »
  user=user;password=password" )
}
</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
            For licensing reasons the MySQL module does not ship with
            Momentum and must be downloaded separately.
          </p>
</div>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.ds_core.console"></a>71.29.2.2. ds_core Management Using Console Commands</h4></div></div></div>
<p>
        The datasource module provides the following console commands:
      </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
            ds_core flush <em class="replaceable"><code>cache_name</code></em>
          </span></dt>
<dd>
<p>
              The ds_core flush command takes a single argument
              specifying the name of the cache to flush. The following
              is the output of the command <span class="command"><strong>ds_core flush
              sqlite</strong></span>:
            </p>
<pre class="screen">
flushed 2 entries from cache 'sqlite'
</pre>
<p>
              In this case <code class="literal">sqlite</code> corresponds to a
              cache defined in the following way:
            </p>
<pre class="programlisting">
Datasource "sqlite" {
    uri = ( "sqlite:/path/to/db" )
}
</pre>
<p>
              Datasources are not modules so you cannot determine their
              names using the <span class="command"><strong>module list</strong></span> command.
              Use <span class="command"><strong>config locate datasource</strong></span> instead.
            </p>
</dd>
<dt><span class="term">
            ds_core stats
          </span></dt>
<dd>
<p>
              For each cache, this command prints statistics including
              the hit rate, number of cache hits and misses during
              lookups, number of inserts, and number of deletions. The
              deletions are broken down into entries explicitly
              (manually) deleted, those deleted due to time-to-live
              (ttl) expiration as configured via
              <code class="option">cache_life</code>, and least-recently-used (lru)
              items deleted due to the <code class="option">cache_size</code> being
              reached.
            </p>
<pre class="screen">13:07:12 ecelerity&gt; ds_core stats
cache name                      lookups %                  deletions %
                       elts  hit miss pend  total  inserts man ttl lru  total
---------------------- ----- -------------------- -------- ------------------
ecdb
                           2  72  28   0      335        6   0 100   0      4
</pre>
<p>
              <span class="emphasis"><em>Note</em></span>: Cache names may be truncated;
              only the first 10 characters are shown.
            </p>
</dd>
</dl></div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.domainkeys.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.ec_logger.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.28. domainkeys – Yahoo! DomainKeys </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.30. EC_logger – Momentum-Style Logging</td>
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
