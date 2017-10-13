<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.41. inbound_audit – Inbound traffic analytics</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.ilf_logger.php" title="71.40. ilf_logger – Incremental License Fee Logging">
<link rel="next" href="modules.ipv6_lookup.php" title="71.42. ipv6_lookup – Multi-address-family MX Records">
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
<tr><th colspan="3" align="center">71.41. inbound_audit – Inbound traffic analytics</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.ilf_logger.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.ipv6_lookup.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.inbound_audit"></a>71.41. inbound_audit – Inbound traffic analytics</h2></div></div></div>
<a class="indexterm" name="idp21959664"></a><p>
    The inbound_audit module provides time-series analytics on the
    behavior of sending IPs. It is designed to help spot emergent
    issues, such as abuse, and to provide a mechanism for implementing
    counter-based policy on IPs. The inbound_audit module differs from
    the standard analytics available in Momentum in that it allows you
    to compare short-term real-time data with data from earlier time
    windows. This makes it easy to spot changes in behavior.
  </p>
<p>
    This module is required by the
    <a class="link" href="modules.adaptive.php" title="71.3. adaptive – Adaptive Delivery">adaptive</a> and
    <a class="link" href="modules.alerting.php" title="71.4. alerting – Send Alerting Emails">alerting</a> modules.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp21965248"></a>71.41.1. Configuration</h3></div></div></div>
<p>
      The inbound_audit module is a singleton, so it does not have an
      instance name, There is no configuration necessary in order to use
      many features of this module, apart from the module declaration.
      The definition of "monitors" in the configuration is needed only
      when using the <span class="command"><strong>inbound_audit show ip</strong></span> console
      command. The following is an example configuration:
    </p>
<div class="example">
<a name="example.inbound_audit.3"></a><p class="title"><b>Example 71.66. inbound_audit Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
inbound_audit
{
  monitors = ( "300,6" "1800,4" )
}
</pre></div>
</div>
<br class="example-break"><p>
      The following configuration options are available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          log_dir
        </span></dt>
<dd><p>
            Directory where audit series with the serialized flag set
            are stored. Default value is
            <code class="literal">/var/log/ecelerity/audit_series_logs</code>.
          </p></dd>
<dt><span class="term">
          maintenance_interval
        </span></dt>
<dd><p>
            Default value is <code class="literal">300</code>.
          </p></dd>
<dt><span class="term">
          monitors = ( "window-size,number-of-windows" ... )
        </span></dt>
<dd><p>
            Create monitoring window(s) <span class="emphasis"><em>window-size</em></span>
            seconds long and maintain
            <span class="emphasis"><em>number-of-windows</em></span> windows historically.
            In the example above, we create two different time-series: 5
            minutes for the past half hour, and 30 minutes for the past
            2 hours.
          </p></dd>
<dt><span class="term">
          serialize_dir
        </span></dt>
<dd><p>
            Directory where the audit series state is persisted on
            shutdown and read in on startup. Default value is
            <code class="literal">/var/log/ecelerity/audit_series_persist</code>.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="idp21981024"></a>71.41.2. Lua Functions</h3></div></div></div>
<p>
      Configuring this module makes the following Lua functions
      available:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.audit.rejections.php" title="msys.audit.rejections"><span class="refentrytitle">msys.audit.rejections</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.audit.connections.php" title="msys.audit.connections"><span class="refentrytitle">msys.audit.connections</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.audit.receptions.php" title="msys.audit.receptions"><span class="refentrytitle">msys.audit.receptions</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.audit.inbound_session_count.php" title="msys.audit.inbound_session_count"><span class="refentrytitle">msys.audit.inbound_session_count</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.audit_series.add.php" title="msys.audit_series.add"><span class="refentrytitle">msys.audit_series.add</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.audit_series.count.php" title="msys.audit_series.count"><span class="refentrytitle">msys.audit_series.count</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.audit_series.define.php" title="msys.audit_series.define"><span class="refentrytitle">msys.audit_series.define</span></a>
        </p></li>
<li class="listitem"><p>
          <a class="xref" href="lua.ref.msys.audit_series.remove_item.php" title="msys.audit_series.remove_item"><span class="refentrytitle">msys.audit_series.remove_item</span></a>
        </p></li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.inbound_audit.console"></a>71.41.3. Console Commands</h3></div></div></div>
<p>
      The inbound_audit module can be queried through the
      <code class="literal">ec_console</code>. The following commands are
      available:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          add
        </span></dt>
<dd>
<pre class="synopsis">inbound_audit add <em class="replaceable"><code>series parameters ip increment</code></em></pre>
<p>
            Add a value to a CIDR in a named series.
          </p>
</dd>
<dt><span class="term">
          count_cidr
        </span></dt>
<dd>
<pre class="synopsis">inbound_audit count_cidr <em class="replaceable"><code>ip[/mask] series parameters period_start period_end</code></em></pre>
<p>
            Count a CIDR in a named series.
          </p>
</dd>
<dt><span class="term">
          delete_ip
        </span></dt>
<dd>
<pre class="synopsis">inbound_audit delete_ip <em class="replaceable"><code>ip</code></em> <em class="replaceable"><code>series</code></em> <em class="replaceable"><code>parameters</code></em></pre>
<p>
            Delete an IP from a defined named series.
          </p>
</dd>
<dt><span class="term">
          help
        </span></dt>
<dd>
<pre class="synopsis">inbound_audit help</pre>
<p>
            Show the available commands.
          </p>
<pre class="screen">
show ip &lt;ip[/mask]&gt;
    Display verbose statistics for the specified ip or cidr block
delete_ip &lt;ip&gt; &lt;series&gt; &lt;parameters&gt;
    Delete an IP from a defined named series
count_cidr &lt;ip[/mask]&gt; &lt;series&gt; &lt;parameters&gt; &lt;period_start&gt; &lt;period_end&gt;
    Count a CIDR in a named series
add &lt;series&gt; &lt;parameters&gt; &lt;ip&gt; &lt;increment&gt;
    Add a value to a CIDR in a named series
subtract &lt;series&gt; &lt;parameters&gt; &lt;ip&gt; &lt;decrement&gt;
    Subtract a value from a CIDR in a named series
show all
    Display verbose statistics for all domains as a CSV list
load &lt;series&gt; &lt;filename&gt;
    Load a series from a file.  The the filename can be omitted if
    the file has the same name as the series
</pre>
</dd>
<dt><span class="term">
          load
        </span></dt>
<dd>
<pre class="synopsis">inbound_audit load <em class="replaceable"><code>series</code></em> <em class="replaceable"><code>filename</code></em> </pre>
<p>
            Load a series from a file. The filename can be omitted if
            the file has the same name as the series.
          </p>
</dd>
<dt><span class="term">
          show all
        </span></dt>
<dd>
<pre class="synopsis">inbound_audit show all</pre>
<p>
            Display verbose statistics for all domains as a CSV list.
          </p>
</dd>
<dt><span class="term">
          show ip
        </span></dt>
<dd>
<pre class="synopsis">inbound_audit show ip <em class="replaceable"><code>ip[/mask]</code></em></pre>
<p>
            Dump all collected time-series data for the specified
            IP/netblock.
          </p>
<p>
            When you query the inbound_audit module's time-series data,
            the following formatted data is returned:
          </p>
<pre class="screen">
10:45:03 ecelerity(/tmp/2025)&gt; inbound_audit:inbound_audit1 show ip 10.0.0.0/8
Connections 1800/0: 30
Connections 1800/1: 0
Connections 1800/2: 0
Connections 1800/3: 0
Connections 1800/4: 0
Receptions 1800/0: 1697
Receptions 1800/1: 0
Receptions 1800/2: 0
Receptions 1800/3: 0
Receptions 1800/4: 0
Rejections 1800/0: 0
Rejections 1800/1: 0
Rejections 1800/2: 0
Rejections 1800/3: 0
Rejections 1800/4: 0
</pre>
<p>
            The fields for this output are:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
                <span class="bold"><strong>type of data</strong></span>
              </p>
<p>
                Type is either connections made, messages received, or
                messages rejected.
              </p>
</li>
<li class="listitem">
<p>
                <span class="bold"><strong>window size/window
                offset</strong></span>
              </p>
<p>
                Size of the window being displayed, plus the number of
                the window. For example <code class="literal">300/0</code> is the
                current 5 minute window, while <code class="literal">300/2</code>
                is the 5 minute window that occurred 10 minutes ago
                (i.e., 2 windows before the current window).
              </p>
</li>
<li class="listitem">
<p>
                <span class="bold"><strong>count</strong></span>
              </p>
<p>
                Number of events of the specified type that occurred
                during that window.
              </p>
</li>
</ul></div>
</dd>
<dt><span class="term">
          subtract
        </span></dt>
<dd>
<pre class="synopsis">inbound_audit subtract <em class="replaceable"><code>series parameters ip decrement</code></em></pre>
<p>
            Subtract a value from a CIDR in a named series.
          </p>
</dd>
</dl></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.ilf_logger.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.ipv6_lookup.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.40. ilf_logger – Incremental License Fee Logging </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.42. ipv6_lookup – Multi-address-family MX Records</td>
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
