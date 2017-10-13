<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>15.4. Listeners</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="conf.overview.php" title="Chapter 15. Configuration Overview">
<link rel="prev" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">
<link rel="next" href="module_config.php" title="15.5. Modules">
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
<tr><th colspan="3" align="center">15.4. Listeners</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="ecelerity.conf.fallback.php">Prev</a> </td>
<th width="60%" align="center">Chapter 15. Configuration Overview</th>
<td width="20%" align="right"> <a accesskey="n" href="module_config.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="listeners"></a>15.4. Listeners</h2></div></div></div>
<p>
    Momentum is built around a powerful event-based scheduling engine. A
    key part of that engine is responding to events that occur on
    inbound sockets, known as <span class="emphasis"><em>listeners</em></span>. These
    <span class="emphasis"><em>listeners</em></span> are configured in Momentum's
    configuration files. The following is an example of a basic listener
    syntax:
  </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen "*:25" {}
}
</pre>
<p>
    In this example, the listener is the
    <code class="literal">ESMTP_Listener</code>, and the <code class="literal">*:25</code>
    is an example of an address. Multiple addresses can be specified for
    a given listener, allowing you to configure service on multiple
    IP/port or Unix sockets.
  </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      When using any listener, if you change from listening on a
      specific IP address to listening on the "wildcard" address (*) or
      the reverse, you must issue the <span class="command"><strong>config reload</strong></span>
      command twice in order to reactivate the listener. This applies to
      Linux systems only.
    </p>
</div>
<p>
    Momentum supports the following listeners. Follow the links for
    details about each listener type:
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
        <a class="link" href="control_listener.php" title="Chapter 17. Configuring Momentum's System Console">Control_Listener</a> -
        listens for incoming control connections made via the console
      </p></li>
<li class="listitem"><p>
        <a class="link" href="cluster.listeners.php#eccluster_listener" title="16.5.1. ECCluster_Listener Configuration">ECCluster_Listener</a> -
        configures direct, point-to-point communication between cluster
        nodes
      </p></li>
<li class="listitem"><p>
        <a class="link" href="ecstream_listener.php" title="Chapter 18. Configuring Inbound Mail Service Using ECStream">ECStream_Listener</a> -
        enables messages to be injected using the ECStream protocol
      </p></li>
<li class="listitem"><p>
        <a class="link" href="esmtp_listener.php" title="Chapter 19. Configuring Inbound Mail Service Using SMTP">ESMTP_Listener</a> - enables
        messages to be injected using the SMTP protocol
      </p></li>
<li class="listitem"><p>
        <a class="link" href="http_listener.php" title="Chapter 20. Configuring Inbound Mail Service Using HTTP">HTTP_Listener</a> - enables
        messages to be injected using the HTTP protocol
      </p></li>
<li class="listitem"><p>
        <a class="link" href="cluster.listeners.php#msgcserver_listener" title="16.5.2. Msgcserver_Listener Configuration">msgcserver_listener</a> -
        mediates between msgc_servers and between msgc_servers and their
        clients
      </p></li>
</ul></div>
<p>
    In addition to the associated Listener scope, listeners can enclose
    Peer and Listen scopes. For a complete list of the configuration
    options valid in the associated scopes, see
    <a class="xref" href="config.options.summary.php" title="Chapter 66. Configuration Options Summary">Chapter 66, <i>Configuration Options Summary</i></a>.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="listeners.acls"></a>15.4.1. Extended Listener Configuration Using Access Control Lists (ACLs)</h3></div></div></div>
<a class="indexterm" name="idp3044608"></a><a class="indexterm" name="idp3046400"></a><p>
      ACLs are implemented via the Peer scope, which uses the existing
      matching infrastructure to find the most specific CIDR match for a
      given configured value. Fallback works here too, allowing for some
      expressive configurations that are easily understood. For more
      information about fallback, see
      <a class="xref" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">Section 15.3, “Configuration Scopes and Fallback”</a>.
    </p>
<div class="example">
<a name="example.conf.peer"></a><p class="title"><b>Example 15.4. Peer Scope and ACLs</b></p>
<div class="example-contents"><pre class="programlisting">
ESMTP_Listener {
  Peer "10.0.0.0/16" {
    # general options for this netblock here
  }
  Listen ":25" {
    Peer "10.0.0.1" {
      # options for 10.0.0.1 here
      SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH LOGIN" )
    }
  }
}
</pre></div>
</div>
<br class="example-break"><p>
      Options defined in the Peer CIDR block
      <code class="literal">10.0.0.0/16</code> will apply to all IP addresses
      defined by this block unless the connecting IP address is
      <code class="literal">10.0.0.1</code>. In that case, anything defined in the
      peer scope <code class="literal">10.0.0.1</code> takes precedence.
    </p>
<p>
      Note that SMTP extensions are defined using the
      <code class="option">SMTP_Extensions</code> array. SMTP extensions are
      discussed in <a class="xref" href="esmtp_listener.extensions.php" title="19.4. SMTP Extensions">Section 19.4, “SMTP Extensions”</a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="listeners.enable.option"></a>15.4.2. Listener <code class="option">Enable</code> Option</h3></div></div></div>
<p>
      The <code class="option">enable</code> option provides a convenient way to
      temporarily disable a listener, without completely removing the
      listener from the configuration file or having to comment out the
      entire listener stanza.
    </p>
<p>
      For example, the following stanza configures listeners on port 25
      and port 587. Momentum will bind a listener to port 25 but will
      skip port 587 because it is marked as disabled.
    </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen "*:25" {
  }
  Listen "*:587" {
    Enable = false
  }
}
</pre>
<p>
      Note that the <code class="option">enable</code> option is used to enable or
      disable a listener or listen scope and
      <span class="bold"><strong>not</strong></span> the <code class="option">enabled</code>
      option. The <code class="option">enabled</code> option applies only to
      modules, and the <code class="option">enable</code> applies only to listen or
      listener stanzas.
    </p>
<p>
      It is possible to suspend and enable listener sockets individually
      on the fly. If you wish to disable the listener on port 25, as
      shown in the example, issue the command <strong class="userinput"><code>config set
      esmtp_listener listen :25 enable false</code></strong> from the
      console. You can use <span class="command"><strong>config set, get</strong></span> or
      <span class="command"><strong>eval</strong></span> with any one of the listener subsystem
      options.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="listeners.tcpip.listener.syntax"></a>15.4.3. TCP/IP Listen Address Syntax</h3></div></div></div>
<p>
      The following is an example of a TCP/IP listen address
      configuration:
    </p>
<pre class="programlisting">
ESMTP_Listener {
  Listen "*:25" {}
  Listen "127.0.0.1:25" {}
  Listen "[*]:25" {}
}</pre>
<p>
      This example shows a Listener configured as follows:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          *:25
        </span></dt>
<dd>
<p>
            Listens on <code class="literal">INADDR_ANY</code> on port 25.
          </p>
<p>
            When using any listener, if you change from listening on a
            specific IP address to listening on the "wildcard" address
            (*) or the reverse, you must issue the <span class="command"><strong>config
            reload</strong></span> command twice in order to reactivate the
            listener. This applies to Linux systems only.
          </p>
</dd>
<dt><span class="term">
          127.0.0.1:25
        </span></dt>
<dd><p>
            Listens on port 25 of the IP address
            <code class="literal">127.0.0.1</code>.
          </p></dd>
<dt><span class="term">
          [*]:25
        </span></dt>
<dd><p>
            Listens on port 25 of the IPv6 address.
          </p></dd>
</dl></div>
<p>
      For a detailed discussion of IPv6 syntax see
      <a class="xref" href="listeners.php#listeners.ipv6" title="15.4.5. Listeners and IPv6 Addresses">Section 15.4.5, “Listeners and IPv6 Addresses”</a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="listeners.unix.domain.listener.syntax"></a>15.4.4. Unix Domain Listener Address Syntax</h3></div></div></div>
<p>
      The following is an example of a Unix listen address
      configuration:
    </p>
<pre class="programlisting">
Control_Listener {
  Listen "/tmp/2025" {
    File_Mode = 0666
    Listen_Backlog = 500
  }
}
</pre>
<p>
      This example shows a Listener configured on a Unix domain socket
      located at <code class="filename">/tmp/2025</code> with a maximum backlog
      of <code class="literal">500</code>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="listeners.ipv6"></a>15.4.5. Listeners and IPv6 Addresses</h3></div></div></div>
<p>
      IPv6 addresses are case insensitive and can use
      ‘<code class="literal">::</code>’ for zero suppression. For this reason,
      the same address can be expressed in a variety of ways. The
      following examples all represent the same IPv6 address (example
      adapted from
      <a class="link" href="http://tools.ietf.org/html/rfc5952" target="_top">http://tools.ietf.org/html/rfc5952</a>):

</p>
<pre class="programlisting">
  2001:db8:0:0:1:0:0:1

  2001:DB8:0:0:1:0:0:1

  2001:0DB8:0:0:1:0:0:1

  2001:db8::1:0:0:1

  2001:db8::0:1:0:0:1

  2001:0db8::1:0:0:1

  2001:db8:0:0:1::1

  2001:db8:0000:0:1::1

  2001:DB8:0:0:1::1
</pre>
<p>

      The ‘<code class="literal">::</code>’ can only appear once in an
      address.
    </p>
<p>
      When a Listen stanza uses an IPv6 address, you are required to
      enclose the IPv6 address in square brackets, followed by a colon
      and the port, with quotes around the entire address:port. For
      example:
    </p>
<pre class="programlisting">
Listen "[::]:25" {...}
Listen "[0:0:0:0:0:0:0:0]:25" {...}  # equivalent to the previous entry
Listen "[fd82:7796:815b:af9d:230:48ff:fef2:aa4a]:587" {...}
</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
        IPv6 addresses are much more flexible than IPv4 addresses in
        terms of their formatting options. They also use a different
        delimiter character than IPv4 addresses (a colon instead of a
        period). This means that in certain contexts, an IPv6 address
        can create parsing ambiguities.
      </p>
<p>
        In circumstances where a configuration parameter can also
        contain something other than an IP address, the accepted
        convention is to require that an IPv6 address be enclosed in
        square brackets. In practical terms, this means that things like
        the <code class="option">Gateway</code>, <code class="option">Routes</code> and
        <code class="option">Listen</code> options must have IPv6 addresses
        enclosed in brackets. Others, such as <code class="option">Peer</code>,
        <code class="option">Relay_Hosts</code> and
        <code class="option">Prohibited_Hosts</code> do not require the IPv6
        address in brackets.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="ecelerity.conf.fallback.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="conf.overview.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="module_config.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">15.3. Configuration Scopes and Fallback </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 15.5. Modules</td>
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
