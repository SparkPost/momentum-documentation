<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Appendix B. MIB Files</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.appendix.php" title="Part XI. Appendix">
<link rel="prev" href="message_responses.php" title="Appendix A. Message Responses">
<link rel="next" href="snmp-mib.pergroup.php" title="B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3">
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
<tr><th colspan="3" align="center">Appendix B. MIB Files</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="message_responses.php">Prev</a> </td>
<th width="60%" align="center">Part XI. Appendix</th>
<td width="20%" align="right"> <a accesskey="n" href="snmp-mib.pergroup.php">Next</a>
</td>
</tr>
</table></div>
<div class="appendix">
<div class="titlepage"><div><div><h1 class="title">
<a name="snmp-mib"></a>MIB Files</h1></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="snmp-mib.php#snmp-mib-per-domain-metrics">B.1. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics</a></span></dt>
<dt><span class="section"><a href="snmp-mib.pergroup.php">B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3</a></span></dt>
<dt><span class="section"><a href="snmp-mib.omniti.php">B.3. The <code class="filename">OMNITI-SNMP-MIB.txt</code> file</a></span></dt>
</dl>
</div>
<p>
    A Management Information Base (MIB) file contains information
    used to manage entities in a network. This information is 
    accessed by a protocol such as Simple Network Management 
    Protocol (SNMP).
  </p>
<p>
    Every managed device and SNMP equipment vendor in the network
    maintains values in the MIB. Object Identifiers (OIDs) uniquely
    identify each entity in the MIB hierarchy, which is typically
    depicted in a tree structure. Each branch of the tree has a
    number and a name, and the complete path from the top of the
    tree to the entity forms the name of that entity.
  </p>
<p>
    For example, the Enterprise MIB for OmniTI assigned by the 
    Internet Assigned Numbers Authority is
    <code class="literal">1.3.6.1.4.1.19552</code>. This is further subdivided
    by products. For example, Momentum (Ecelerity) has the MIB
    <code class="literal">1.3.6.1.4.1.19552.1</code>.
  </p>
<p>
    Within Momentum (ecelerity),
    <code class="literal">1.3.6.1.4.1.19552.1.1</code> is defined as product
    information with further subdivisions as shown below:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <code class="literal">1.3.6.1.4.1.19552.1.1.1</code> – string, Product
        Name (Ecelerity)
      </p></li>
<li class="listitem"><p>
        <code class="literal">1.3.6.1.4.1.19552.1.1.2</code> – string, version
        (_EC_VER)
      </p></li>
<li class="listitem"><p>
        <code class="literal">1.3.6.1.4.1.19552.1.1.3 </code> – string, build
        date (__DATE__)
      </p></li>
</ul></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      The per-domain metrics exposed via Momentum's OCC-MIB do not
      support the SNMP GETNEXT operation, which means that you can't 
      walk domain statistics with programs such as snmpwalk.
      Therefore, to get per-domain statistics via SNMP, you must know
      in advance what domain to query. This is fine for monitoring known
      domains, but you can't use SNMP to get a snapshot of the mail
      queues.
    </p>
</div>
<p>
    For your convenience, the <code class="filename">OMNITI-SNMP-MIB.txt</code>
    file found in the <code class="filename">/opt/msys/ecelerity/docs/</code>
    directory is reproduced in this appendix.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="snmp-mib-per-domain-metrics"></a>B.1. 1.3.6.1.4.1.19552.1.2 – Per-domain Metrics</h2></div></div></div>
<p>
      The per-domain MIB is defined as:
      <code class="literal">1.3.6.1.4.1.19552.1.2.L.A.B.C.S.G</code> where
      <code class="literal">A.B.C</code> indicates the domain name, and
      <code class="literal">L</code> represents the length of that domain. For
      example, <code class="literal">aol.com</code> would be represented as:
    </p>
<pre class="screen">
7.97.111.108.46.99.111.109
7  a   o   l  .  c   o   m
</pre>
<p>
      In this case <code class="literal">7</code> indicates the length of
      'aol.com'. The length and the binding identifier replace
      <code class="literal">L.A.B.C</code> in the MIB. <code class="literal">G</code>
      corresponds to the MTAGroupIndexID (see RFC 2789, MTA MIB).
      <code class="literal">S</code> represents the metric type. We define the
      following metrics:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          0: domain name
        </p></li>
<li class="listitem"><p>
          1: receptions
        </p></li>
<li class="listitem"><p>
          2: failures
        </p></li>
<li class="listitem"><p>
          3: deliveries
        </p></li>
<li class="listitem"><p>
          4: transient failures
        </p></li>
<li class="listitem"><p>
          5: outbound connections
        </p></li>
<li class="listitem"><p>
          6: active queue size
        </p></li>
<li class="listitem"><p>
          7: delayed queue size
        </p></li>
</ul></div>
<p>
      For more information about Mail Monitoring MIBs, see
      <a class="link" href="http://tools.ietf.org/html/rfc2789" target="_top">RFC2789</a>.
    </p>
<p>
      The <code class="literal">aol.com</code> domain name would have the
      following entry on the default binding:
      1.3.6.1.4.1.19552.1.2.7.97.111.108.46.99.111.109.0.1: string
      'aol.com'.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="snmp-mib-MTAGroupIndexID"></a>B.1.1. Determining the ID for an MTAGroupIndexID</h3></div></div></div>
<p>
        The MTAGroupIndexID can be determined by using snmpwalk and
        subtracting 1 from last number of the desired binding. You can
        also use snmpwalk to get the MTAGroupIndexID in order to
        determine per-domain stats.
      </p>
<p>
        For example:
      </p>
<pre class="screen">
shell&gt; /opt/msys/3rdParty/bin/snmpwalk -v1 -c public
10.79.20.132:8162 1.3.6.1.4.1.19552.1.3
SNMPv2-Example::enterprises.19552.1.3.1.1 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.1.2 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.1.3 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.1.4 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.2.1 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.2.2 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.2.3 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.2.4 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.3.1 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.3.2 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.3.3 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.3.4 = Counter32: 0
SNMPv2-Example::enterprises.19552.1.3.4.1 = STRING: "none/all"
SNMPv2-Example::enterprises.19552.1.3.4.2 = STRING: "none/default"
SNMPv2-Example::enterprises.19552.1.3.4.3 = STRING: "none/cdp"
SNMPv2-Example::enterprises.19552.1.3.4.4 = STRING: "none/example"
</pre>
<p>
        In the output above, <code class="literal">cdp</code> and
        <code class="literal">example</code> are binding names. The
        MTAGroupIndexID of <code class="literal">cdp</code> is
        <code class="literal">2</code> because <code class="literal">2</code> is one less
        than the last number in
        <code class="literal">SNMPv2-SMI::enterprises.19552.1.3.4.3</code>.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="message_responses.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.appendix.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="snmp-mib.pergroup.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Appendix A. Message Responses </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3</td>
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
