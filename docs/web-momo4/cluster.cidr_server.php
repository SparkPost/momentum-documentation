<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 39. CIDR Server</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.operations.php" title="Part V. Using the System Console">
<link rel="prev" href="cluster.config.operations.eccmgr.console.php" title="38.2. Console Commands for the Cluster Manager">
<link rel="next" href="p.smtp_injections.php" title="Part VI. SMTP Injection">
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
<tr><th colspan="3" align="center">Chapter 39. CIDR Server</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="cluster.config.operations.eccmgr.console.php">Prev</a> </td>
<th width="60%" align="center">Part V. Using the System Console</th>
<td width="20%" align="right"> <a accesskey="n" href="p.smtp_injections.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="cluster.cidr_server"></a>Chapter 39. CIDR Server</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc"><dt><span class="section"><a href="cluster.cidr_server.php#cluster.cidr_cli">39.1. <code class="literal">cidr_cli</code> Utility</a></span></dt></dl>
</div>
<p>
    The <span class="command"><strong>cidr_server</strong></span> is part of a cluster console
    installation. It queries the data created by an as_logger module and
    displays the result in the cluster console. The
    <code class="literal">cidr_server</code> is run as a daemon, so it starts
    automatically whenever the host server is rebooted. To start this
    service after installation, issue the command

</p>
<pre class="screen">
/etc/init.d/cidr_server
</pre>
<p>
  </p>
<p>
    At any time you may start, stop, or restart the
    <code class="literal">cidr_server</code> using

</p>
<pre class="screen">
/opt/msys/ecelerity/bin/cidr_server_ctl <em class="replaceable"><code>option</code></em>
</pre>
<p>
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      The cidr_server listens on port <code class="literal">9000</code>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="cluster.cidr_cli"></a>39.1. <code class="literal">cidr_cli</code> Utility</h2></div></div></div>
<p>
      The command-line utility <span class="command"><strong>cidr_cli</strong></span> offers the
      same functions as <span class="command"><strong>cidr_server</strong></span>.



      To invoke this interface enter

</p>
<pre class="screen">
/opt/msys/ecelerity/bin/cidr_cli
</pre>
<p>

      This changes the cursor to <code class="literal">cidr&gt;</code>, opening
      the <code class="literal">cidr</code> shell.
    </p>
<p>
      From this command-line interface, you can have immediate and
      customized access to data created by the
      <a class="link" href="modules.as_logger.php" title="71.7. as_logger – Audit Series Logger">as_logger</a>. The
      syntax used to query these data files is described in the
      following sections.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.cidr_cli.grammar"></a>39.1.1. <code class="literal">cidr_cli</code> Grammar</h3></div></div></div>
<p>
        The expressions that can be used within the
        <code class="literal">cidr</code> shell are listed below.
      </p>
<div class="table">
<a name="cluster.cidr_cli.table"></a><p class="title"><b>Table 39.1. cidr_cli Grammar</b></p>
<div class="table-contents"><table border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                BNF
              </th>
<th>
                Expression
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                list ::=
              </td>
<td>
                "show available"
              </td>
</tr>
<tr>
<td>
                show ::=
              </td>
<td>
                "show count for" cidr "in" seriesname query
              </td>
</tr>
<tr>
<td>
                cidr ::=
              </td>
<td>
                ip/mask
              </td>
</tr>
<tr>
<td>
                seriesname ::=
              </td>
<td>
                seriesunion | serieslist
              </td>
</tr>
<tr>
<td>
                serieslist ::=
              </td>
<td>
                series (, series )*
              </td>
</tr>
<tr>
<td>
                seriesunion ::=
              </td>
<td>
                "union(" serieslist ")"
              </td>
</tr>
<tr>
<td>
                series ::=
              </td>
<td>
                word
              </td>
</tr>
<tr>
<td>
                query ::=
              </td>
<td>
                (queryparams)*
              </td>
</tr>
<tr>
<td>
                queryparams ::=
              </td>
<td>
                datespec | cidrsize | order | aggregate | limit |
                threshold
              </td>
</tr>
<tr>
<td>
                datespec ::=
              </td>
<td>
                fromto | on | since
              </td>
</tr>
<tr>
<td>
                fromto ::=
              </td>
<td>
                "from" date "to" date
              </td>
</tr>
<tr>
<td>
                since ::=
              </td>
<td>
                "since" date
              </td>
</tr>
<tr>
<td>
                on ::=
              </td>
<td>
                "on" date
              </td>
</tr>
<tr>
<td>
                date ::=
              </td>
<td>
                iso8601-date-format
              </td>
</tr>
<tr>
<td>
                cidrsize ::=
              </td>
<td>
                "cidrsize" num "to" num | "cidrsize" num
              </td>
</tr>
<tr>
<td>
                order ::=
              </td>
<td>
                "order by cidr" | "order by count"
              </td>
</tr>
<tr>
<td>
                aggregate ::=
              </td>
<td>
                "aggregate daily" | "aggregate"
              </td>
</tr>
<tr>
<td>
                limit ::=
              </td>
<td>
                "limit" num
              </td>
</tr>
<tr>
<td>
                threshold ::=
              </td>
<td>
                "threshold" num
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break"><div class="note">
<h3 class="title">Note</h3>
<p>
          This component fully supports IPv6 addresses.
        </p>
<p>
          IPv6 addresses are much more flexible than IPv4 addresses in
          terms of their formatting options. They also use a different
          delimiter character than IPv4 addresses (a colon instead of a
          period). This means that in certain contexts, an IPv6 address
          can create parsing ambiguities.
        </p>
<p>
          The accepted convention is to require that, in circumstances
          where a configuration parameter can also contain something
          other than an IP address, that an IPv6 address must be
          enclosed in square brackets. In practical terms, this means
          that things like the Gateway, Routes, and Listen options must
          have IPv6 addresses enclosed in brackets. Others, such as
          <code class="option">Peer</code>, <code class="option">Relay_Hosts</code>, and
          <code class="option">Prohibited_Hosts</code> do not require the IPv6
          address in brackets.
        </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="cluster.cidr_cli.using"></a>39.1.2. Using <code class="literal">cidr_cli</code>
</h3></div></div></div>
<p>
        What you do from the cidr shell is determined by the audit
        series that you have defined. The most useful command to use
        when first entering the <code class="literal">cidr</code> shell is

</p>
<pre class="screen">
show available
</pre>
<p>

        This command displays the various data files that you can query.
        The following is a sample output:
      </p>
<pre class="programlisting">
spam : 20080423T123000 =&gt; 20080610T201500
virus : 20080425T080000 =&gt; 20080610T201500
invalid_recipient : 20080423T121500 =&gt; 20080610T201500
</pre>
<p>
        In this example, the site's administrators have defined audit
        series named <code class="literal">spam</code>, <code class="literal">virus</code>,
        and <code class="literal">invalid_recipients</code>. Following each name
        is the time period for which data is available. Since the source
        IP address is recorded for each event, you can obtain event
        counts by IP address or CIDR block. In each case a counter is
        incremented using <span class="command"><strong>msys.audit_series.add</strong></span>
        during the each_rcpt phase.
      </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
          No error message is displayed if your query syntax is
          incorrect. If your query has no output it may indicate an
          empty result set <span class="emphasis"><em>or</em></span> incorrect syntax.
        </p>
</div>
<p>
        You can query data files in a variety of ways. The following are
        examples of how to create queries using the cidr_cli interface.
      </p>
<h4>
<a name="idp4137392"></a>Example 1:</h4>
<p>
        To show individual IP addresses followed by the associated
        count, issue

</p>
<pre class="screen">
show count for 0.0.0.0/0 in spam since 20080423 
</pre>
<p>

        The output is shown in the following:
      </p>
<pre class="programlisting">
10.79.18.1/32      :     35217
10.79.18.2/32      :     25350
10.79.18.3/32      :     21291
10.79.18.4/32      :     21183
10.79.18.5/32      :     20933
...
10.79.18.63/32     :     21179
10.79.18.64/32     :     12183
10.79.18.130/32    :         5
127.0.0.1/32       :         2
</pre>
<h4>
<a name="idp4139600"></a>Example 2:</h4>
<p>
        To find the top ten /32s since 2008-04-23 on the spam and virus
        audit series, issue

</p>
<pre class="screen">
show count for 0.0.0.0/0 in spam, virus since 20080423 order by count limit 10
</pre>
<p>

        The output is shown in the following:
      </p>
<pre class="programlisting">
10.79.18.1/32      : 35217,1264
10.79.18.2/32      : 25350,0
10.79.18.61/32     : 21381,3421
10.79.18.30/32     : 21374,0
10.79.18.57/32     : 21335,8760
10.79.18.6/32      : 21322,0
10.79.18.3/32      : 21291,0
10.79.18.50/32     : 21271,16437
10.79.18.14/32     : 21236,0
10.79.18.24/32     : 21222,8790
</pre>
<p>
        The numbers following the ‘<code class="literal">:</code>’ are the
        counts for the <code class="literal">spam</code> and
        <code class="literal">virus</code> data files, respectively. To determine
        the top ten IP series for a specific day, replace
        <code class="literal">since</code> with <code class="literal">on</code> followed by
        the day of interest.
      </p>
<h4>
<a name="idp4144608"></a>Example 2:</h4>
<p>
        To find the top /24s on 2008-04-23 on the sum of spam and virus
        audit series, issue

</p>
<pre class="screen">
<strong class="userinput"><code>show count for 0.0.0.0/0 in union(spam, virus) on 20080424 cidrsize 24 order by count limit 1</code></strong>
</pre>
<p>

        The output is shown in the following:
      </p>
<pre class="programlisting">
10.79.18.0/24      :     18492
</pre>
<p>
        Since this query selects from a union, only one numeric result
        follows the IP address.
      </p>
<h4>
<a name="idp4147600"></a>Example 3:</h4>
<p>
        To determine the breakdown of the total count by IP address
        using the IP address series output in the previous query, issue

</p>
<pre class="screen">
show count for 10.79.18.0/24 in union(spam, virus) on 20080424
</pre>
<p>

        The output is shown in the following:
      </p>
<pre class="programlisting">
10.79.18.1/32      :     14071
10.79.18.2/32      :      4421
</pre>
<p>
        The absolute figures shown above are perhaps less interesting
        than knowing the percentage of suspect mail, something that
        could readily be done by creating an audit_series to track the
        total number of mails.
      </p>
<p>
        Time periods can be specified in units other than days. For
        example, to look at data between noon and 1 PM on a specific
        day, you would use the expression <code class="literal">from 20080605T120000
        to 20080605T130000</code>.
      </p>
<h4>
<a name="idp4151408"></a>Example 4:</h4>
<p>
        To inspect the cache, issue

</p>
<pre class="screen">
<span class="command"><strong>cache details</strong></span>
</pre>
<p>

        If there is data in the cache, you should see output similar to
        the following:
      </p>
<pre class="programlisting">
$VAR1 = [
'/var/log/eccluster/aslogger/spam.20080424T200000',
'/var/log/eccluster/aslogger/spam.20080424T201500',
...
'/var/log/eccluster/aslogger/spam.20080424T233000',
'/var/log/eccluster/aslogger/spam.20080424T234500'
];
</pre>
<p>
        The <code class="literal">spam</code> series files appear in the directory
        defined by the <code class="literal">base_dir</code> parameter in the
        <code class="filename">cidr_maintain.conf</code> file, in this case the
        <code class="filename">/var/log/eccluster/aslogger</code> directory. For
        more information about the
        <code class="filename">cidr_maintain.conf</code> file, see
        <a class="xref" href="modules.as_logger.php#module.as_logger.cidr_maintain.conf" title="71.7.2. cidr_maintain.conf File">Section 71.7.2, “<code class="filename">cidr_maintain.conf</code> File”</a>.
      </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
          There is no command to exit the <code class="literal">cidr</code> shell;
          use

          <span class="keycap"><strong>Ctrl</strong></span>+<span class="keycap"><strong>D</strong></span>

          .
        </p>
</div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="cluster.config.operations.eccmgr.console.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.operations.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="p.smtp_injections.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">38.2. Console Commands for the Cluster Manager </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Part VI. SMTP Injection</td>
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
