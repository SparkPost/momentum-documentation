<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.47. msgc – Message Systems Group Communication</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.maildir.php" title="71.46. maildir – Maildir Delivery Support">
<link rel="next" href="modules.msg_gen.php" title="71.48. msg_gen – Message Generation">
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
<tr><th colspan="3" align="center">71.47. msgc – Message Systems Group Communication</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.maildir.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.msg_gen.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.msgc"></a>71.47. msgc – Message Systems Group Communication</h2></div></div></div>
<a class="indexterm" name="idp22166944"></a><p>
    The Message Systems Group Communication (msgc) consists of two
    modules: msgc_server and msgc_client. These modules provide for
    communication between nodes in a cluster configuration.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.msgc.msgc_server"></a>71.47.1. msgc_server Module</h3></div></div></div>
<p>
      By default, the msgc_server is loaded on every cluster node and
      the cluster manager. This module is responsible for maintaining
      connections with all other msgc_servers in the network (if they
      exist). Using these connections, the msgc_server propagates
      traffic throughout the network as requested. The msgc_server has
      full connectivity to the entire cluster, but without any clients
      making requests, no traffic will flow between the servers.
    </p>
<p>
      In any cluster larger than seven nodes, it will be more efficient
      to deploy dedicated msgc_server instances. However, this will only
      be necessary if massive volumes of multicast traffic are expected
      — carrier networks with large amounts of shared data would
      qualify.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        Momentum will work in cluster configurations with more than
        seven nodes. However, contact Professional Services to discuss
        how best to meet the needs of your specific use case. The volume
        of traffic on the message bus determines the optimal number of
        servers.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.msgc.msgc_server.config"></a>71.47.1.1. Configuration</h4></div></div></div>
<p>
        In a default cluster configuration, this module is configured
        using the <code class="filename">msgc_server.conf</code> file referenced
        from the <code class="filename">eccluster.conf</code> file on the cluster
        manager and from the <code class="filename">ecelerity-cluster.conf</code>
        file on nodes. The following is an example configuration:
      </p>
<pre class="programlisting">
# NOTE: This file MUST live in the global portion of the repository, as it
# must be the same for all nodes in the cluster.

msgc_server {
   peers = [
     node1 = "192.168.0.10"
     node2 = "192.168.0.11"
     manager = "192.168.0.12"
   ]
}</pre>
<p>
        In order for the msgc_server to operate properly, a
        msgcserver_listener must be defined and configured. Inbound
        connections will generally receive membership requests from the
        client side of the connection, which will request subscription
        to various groups. For details about the msgcserver_listener,
        see <a class="xref" href="cluster.listeners.php#msgcserver_listener" title="16.5.2. Msgcserver_Listener Configuration">Section 16.5.2, “Msgcserver_Listener Configuration”</a>.
      </p>
<p>
        The following are the configuration options defined within this
        module:
      </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
            connect_timeout
          </span></dt>
<dd><p>
              Amount of time in seconds to spend waiting for the connect
              system call to return. Default value is
              <code class="literal">60</code>.
            </p></dd>
<dt><span class="term">
            debug_level
          </span></dt>
<dd><p>
              Debug level for this module. Default value is
              <code class="literal">ERROR</code>. For more information, see
              <a class="xref" href="conf.ref.debug_flags.php#conf.ref.debug.levels" title="Table 72.1. Debug levels">Table 72.1, “Debug levels”</a>.
            </p></dd>
<dt><span class="term">
            idle_timeout
          </span></dt>
<dd><p>
              Amount of time in seconds to hold open an idle connection.
              Default value is <code class="literal">30</code>.
            </p></dd>
<dt><span class="term">
            keepalive_interval
          </span></dt>
<dd><p>
              Defines how often a no op packet is sent over the
              connection. Default value is <code class="literal">5</code>.
            </p></dd>
<dt><span class="term">
            max_backlog
          </span></dt>
<dd><p>
              Maximum size of the message queue before declaring the
              connection stuck and killing it (which will automatically
              restart it). Default value is <code class="literal">5000</code>.
            </p></dd>
<dt><span class="term">
            messages_per_iter
          </span></dt>
<dd><p>
              How many messages to send to (or receive from) a
              connection before yielding for other connections. This
              option helps avoid starvation. Default value is
              <code class="literal">20</code>.
            </p></dd>
<dt>
<a name="modules.msgc.msgc_server.config.peers"></a><span class="term">
            peers
          </span>
</dt>
<dd>
<p>
              Defines the nodes that will participate in the cluster.
              The <code class="option">peers</code> dictionary is populated during
              installation.
            </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
                Hostnames in the peers list must be in lowercase. If
                they are not, <code class="option">msgc</code> will not initialize.
              </p>
</div>
</dd>
<dt>
<a name="modules.msgc.msgc_server.config.port"></a><span class="term">
            port
          </span>
</dt>
<dd><p>
              Port used to communicate with the msgc_listener. This
              value must match the port associated with the Listen scope
              of the msgcserver_listener. Default value is
              <code class="literal">4809</code>.
            </p></dd>
<dt><span class="term">
            reconnect_interval
          </span></dt>
<dd><p>
              How long to wait before reconnecting after a connection
              fails. Default value is <code class="literal">5</code>.
            </p></dd>
<dt><span class="term">
            tcpbuf_size
          </span></dt>
<dd><p>
              Size of the TCP buffer in bytes. Default value is
              <code class="literal">131072</code>.
            </p></dd>
</dl></div>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.msgc.msgc_client"></a>71.47.2. msgc_client Module</h3></div></div></div>
<p>
      The msgc_client module communicates with the msgc_server module
      over a single TCP connection defined in the msgcserver_listener.
      The msgc_client will be told which groups to join through Momentum
      hooks that it exposes and registers, which the cluster module will
      then call when it wishes to perform an action such as joining a
      group or sending a message. Furthermore, it will expose hooks that
      the Momentum cluster module will register in order to subscribe to
      multicast and membership messages. msgc_client is responsible for
      connecting to msgc_server in order to participate in the cluster.
    </p>
<p>
      The msgc_client maintains a single TCP connection to its
      configured msgc_server process. Over this connection, it will send
      join and leave messages as appropriate, based on the requests it
      receives from the consumers of its hooks (such as the cluster
      module and the eccmgr process). Once it sends a join request to
      its configured server, it will receive all messages sent to the
      requested group. Likewise, any multicast publish commands that are
      sent through its Momentum hooks will be forwarded over its server
      connection.


    </p>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.msgc_client.configuration"></a>71.47.2.1. Configuration</h4></div></div></div>
<p>
        In the default cluster configuration, the msgc_client module is
        configured in the
        <code class="filename">/opt/msys/ecelerity/default/ecelerity-cluster.conf</code>
        file. The following is an example configuration:
      </p>
<pre class="programlisting">
msgc_client {
   server = ( "127.0.0.1:4809" )
}</pre>
<p>
        The following are the configuration options defined within this
        module:
      </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
            bind_address
          </span></dt>
<dd><p>
              If desired, choose a specific local address to bind to for
              the outbound connection to msgc_server. There is no
              default value for this option.
            </p></dd>
<dt><span class="term">
            connect_timeout
          </span></dt>
<dd><p>
              Amount of time in seconds to spend waiting for the connect
              system call to return. Default value is
              <code class="literal">60</code>.
            </p></dd>
<dt><span class="term">
            debug_level
          </span></dt>
<dd><p>
              Debug level for this module. Default value is
              <code class="literal">ERROR</code>.
            </p></dd>
<dt><span class="term">
            idle_timeout
          </span></dt>
<dd><p>
              Amount of time in seconds to hold open an idle connection.
              Default value is <code class="literal">30</code>.
            </p></dd>
<dt><span class="term">
            keepalive_interval
          </span></dt>
<dd><p>
              Defines how often a no op packet is sent over the
              connection. Default value is <code class="literal">5</code>.
            </p></dd>
<dt><span class="term">
            max_backlog
          </span></dt>
<dd><p>
              Maximum size of the message queue before declaring the
              connection stuck and killing it (which will automatically
              restart it). Default value is <code class="literal">5000</code>.
            </p></dd>
<dt><span class="term">
            messages_per_iter
          </span></dt>
<dd><p>
              How many messages to send to (or receive from) a
              connection before yielding for other connections. This
              option helps avoid starvation. Default value is
              <code class="literal">20</code>.
            </p></dd>
<dt><span class="term">
            reconnect_interval
          </span></dt>
<dd><p>
              How long to wait before reconnecting after a connection
              fails. Default value is <code class="literal">5</code>.
            </p></dd>
<dt><span class="term">
            tcpbuf_size
          </span></dt>
<dd><p>
              Size of the TCP buffer in bytes. Default value is
              <code class="literal">131072</code>.
            </p></dd>
<dt><span class="term">
            server
          </span></dt>
<dd>
<p>
              The msgc_server port must match the port defined for the
              <code class="option">Listen</code> stanza of the msgcserver_listener.
              Default value is <code class="literal">127.0.0.1:4809</code>.
            </p>
<p>
              The loopback address is used because msgc_server is run on
              all managers and nodes in the cluster. The port used with
              this option must match the port defined in
              <a class="xref" href="modules.msgc.php#modules.msgc.msgc_server.config.port">
            port
          </a>.
            </p>
</dd>
</dl></div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.maildir.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.msg_gen.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.46. maildir – Maildir Delivery Support </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.48. msg_gen – Message Generation</td>
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
