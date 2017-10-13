<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.48. msg_gen – Message Generation</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.msgc.php" title="71.47. msgc – Message Systems Group Communication">
<link rel="next" href="modules.mxip.php" title="71.49. mxip - IP Addresses In MX Records">
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
<tr><th colspan="3" align="center">71.48. msg_gen – Message Generation</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.msgc.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.mxip.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.msg_gen"></a>71.48. msg_gen – Message Generation</h2></div></div></div>
<p>
    The msg_gen module handles message generation, which is triggered by
    injecting messages using HTTP. The module accepts the components of
    a transmission, including recipient list, template, and message
    content, and constructs a personalized message for each recipient.
    The generated message is then queued for delivery. Each transmission
    is handled independently, and the creation of all messages is
    managed as a trackable unit. The tracking and logging of messages
    post generation is handled by other modules.
  </p>
<p>
    Typically, the msg_gen module should not be altered, with the
    exception of the open tracking and click tracking options. By
    default, both options are enabled during installation. If you want
    to disable these features globally, change the configuration options
    in the msg_gen module.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      To use the msg_gen module, you must be licensed for Message
      Generation support.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.msg_gen.configuration"></a>71.48.1. Configuration</h3></div></div></div>
<p>
      The msg_gen module is configured in the
      <code class="filename">msg_gen.conf</code> file that is created during
      installation. See <a class="xref" href="conf.ref.msg_gen.conf.php" title="20.2. msg_gen.conf File">Section 20.2, “<code class="filename">msg_gen.conf</code> File”</a>.
      The following is an example configuration:
    </p>
<div class="example">
<a name="modules.msg_gen.configuration.example"></a><p class="title"><b>Example 71.72. msg_gen Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
msg_gen {
  click_tracking_enabled = "true"
  open_tracking_enabled = "true"
  cluster_cfg = true
  quorum = 2
  gen_count = 3
  gen_transactional_threads = 3
  start_time_max_schedule_interval = "31536000"
  engagement_tracking_host = "example.com:81"
  # A node stanza for each Platform node
  # The node stanza only appears in a Platform cluster
  # configuration.
  node "node1.lan" {
    mta_id = 1
    votes = 1
  }
  node "node2.lan" {
    mta_id = 2
    votes = 1
  }
  node "node3.lan" {
    mta_id = 3
    votes = 1
  }
}
</pre></div>
</div>
<br class="example-break"><p>
      The following are the configuration options defined within this
      module:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          click_tracking_enabled
        </span></dt>
<dd><p>
            Enable or disable click tracking for messages generated
            using HTTP. Default value is <code class="literal">true</code>. You
            can override this setting for a specific template or
            transmission by specifying the click_tracking field in the
            <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
          </p></dd>
<dt><span class="term">
          click_tracking_scheme
        </span></dt>
<dd><p>
            Whether your click tracker uses HTTP or HTTPS. Default value
            is <code class="literal">http</code>.
          </p></dd>
<dt><span class="term">
          cluster_cfg
        </span></dt>
<dd><p>
            Whether the installation is a stand-alone or cluster. Node
            clauses are not present for a stand-alone installation.
          </p></dd>
<dt><span class="term">
          engagement_tracking_host
        </span></dt>
<dd><p>
            Identify the Platform node that is used for engagement
            tracking. This option is set during installation, and the
            server identified must have an active DNS name. The default
            port, also assigned during installation, is port
            <code class="literal">80</code> in a cluster installation and port
            <code class="literal">81</code> in a stand-alone installation.
          </p></dd>
<dt>
<a name="modules.gen_count"></a><span class="term">
          gen_count
        </span>
</dt>
<dd><p>
            Define the thread count used for message generation. Default
            value is <code class="literal">2</code>. This option is valid in the
            msg_gen module and <a class="xref" href="modules.msg_gen.php#modules.msg_gen.node">
          node
        </a>
            scopes. When set to <code class="literal">0</code> within the node
            scope, it indicates that the particular node cannot generate
            messages but can participate in voting for quorum. If this
            option is changed at runtime, you must restart the ecelerity
            process.
          </p></dd>
<dt>
<a name="modules.gen_transactional_threads"></a><span class="term">
          gen_transactional_threads
        </span>
</dt>
<dd>
<p>
            Configure the transactional thread pool used to handle small
            (single-recipient) non-scheduled transmissions submitted to
            this node. It may be zero or a positive number.
          </p>
<p>
            When set to a positive number, <code class="literal">n</code>, the
            <code class="option">msg_gen</code> module creates a thread pool with
            <code class="literal">n</code> threads to handle transactional
            (single-recipient) transmissions (see
            <a class="xref" href="glossary.php#gloss.transactional" title="Transactional Message">Transactional Message</a>). The database will
            not be used while generating non-scheduled single-recipient
            messages, as the transmission API provides all required data
            about transmission, template, and recipients. No database
            access is needed to generate these messages, and so the
            processing burden is reduced. However, database access is
            still required to store and access tags and to generate
            scheduled transmissions.
          </p>
<p>
            If <code class="option">gen_transactional_threads</code> is set to
            <code class="literal">0</code>, then the transactional thread pool is
            disabled and the thread pool specified by
            <code class="option">gen_count</code> is used to interact with the
            database to generate transactional mailings.
          </p>
<p>
            The default value is <code class="literal">2</code>, and is only
            applicable when <code class="option">gen_count</code> is set to a value
            greater than zero. This option is valid in the msg_gen
            module and <a class="xref" href="modules.msg_gen.php#modules.msg_gen.node">
          node
        </a> scopes.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              If this option is changed at runtime, you must restart the
              ecelerity process.
            </p>
</div>
</dd>
<dt>
<a name="modules.msg_gen.node"></a><span class="term">
          node
        </span>
</dt>
<dd>
<p>
            The msg_gen module contains a <code class="option">node</code> stanza
            for each Platform node. The options within this scope should
            not typically be altered.
          </p>
<p>
            The node names within the node stanzas must match the names
            used in the peers stanza in
            <a class="xref" href="modules.msgc.php#modules.msgc.msgc_server" title="71.47.1. msgc_server Module">Section 71.47.1, “msgc_server Module”</a>.
          </p>
</dd>
<dt><span class="term">
          open_tracking_enabled
        </span></dt>
<dd><p>
            Enable or disable open tracking for messages generated using
            HTTP. Default value is <code class="literal">true</code>. You can
            override this setting for a specific template or
            transmission by specifying the open_tracking field in the
            <a class="link" href="https://support.messagesystems.com/docs/web-rest/v1_index.html" target="_top">Momentum 4 REST API</a>.
          </p></dd>
<dt><span class="term">
          open_tracking_scheme
        </span></dt>
<dd><p>
            Whether your open tracker uses HTTP or HTTPS. Default value
            is <code class="literal">http</code>.
          </p></dd>
<dt>
<a name="modules.scheduled_interval_delete"></a><span class="term">
          scheduled_interval_delete
        </span>
</dt>
<dd>
<p>
            The amount of time prior to a scheduled transmission during
            which you cannot delete the transmission. The default value
            is <code class="literal">600</code> seconds. If you attempt to delete
            a transmission within the specified timeframe, the request
            will be denied. For example, if
            <code class="option">scheduled_interval_delete</code> is set to 420
            seconds but the transmission is scheduled to run in 300
            seconds, the delete request will be denied.
          </p>
<p>
            The minimum setting is 60 seconds. If the value is set to
            less than 60, the software will override that setting and
            use 60.
          </p>
</dd>
<dt>
<a name="modules.start_time_max_schedule_interval"></a><span class="term">
          start_time_max_schedule_interval
        </span>
</dt>
<dd><p>
            Maximum allowed time in the future for which a transmission
            can be scheduled. Time is in seconds. The default value is
            <code class="literal">31536000</code> seconds (1 year). This value is
            added to the current time to determine the latest time that
            can be specified for a scheduled send.
          </p></dd>
</dl></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
        The precedence for engagement tracking options, from highest to
        lowest is as follows:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            transmission level
          </p></li>
<li class="listitem"><p>
            template level
          </p></li>
<li class="listitem"><p>
            msg_gen level
          </p></li>
</ul></div>
<p>
        For example, if click_tracking is not specified at the
        transmission level, the value at the template level is used. If
        the template level is also not specified, the setting of the
        configuration option in the msg_gen module is used.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.msgc.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.mxip.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.47. msgc – Message Systems Group Communication </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.49. mxip - IP Addresses In MX Records</td>
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
