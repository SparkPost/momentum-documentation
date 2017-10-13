<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>14.2. Removing an Analytics Node</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="nodes">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="add_remove_analytics_nodes.php" title="Chapter 14. Adding and Removing Analytics Nodes">
<link rel="prev" href="add_remove_analytics_nodes.php" title="Chapter 14. Adding and Removing Analytics Nodes">
<link rel="next" href="p.configuration.php" title="Part III. Configuring Momentum">
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
<tr><th colspan="3" align="center">14.2. Removing an Analytics Node</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="add_remove_analytics_nodes.php">Prev</a> </td>
<th width="60%" align="center">Chapter 14. Adding and Removing Analytics Nodes</th>
<td width="20%" align="right"> <a accesskey="n" href="p.configuration.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="node_remove_analytics"></a>14.2. Removing an Analytics Node</h2></div></div></div>
<p>
      To remove an Analytics node (Vertica+Application) from a cluster,
      follow the documentation provided by HP on removing a Vertica
      node, removing all NGINX upstream references, and removing
      references in API configurations.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        You cannot remove nodes that are critical for K-safety. For more
        information, see
        <a class="link" href="https://my.vertica.com/docs/7.1.x/HTML/Content/Authoring/Glossary/K-Safety.htm" target="_top"> HP
        Vertica documentation</a>.
      </p>
</div>
<div class="note">
<h3 class="title">Note</h3>
<p>
        These instructions apply to Momentum 4.2.1.<em class="replaceable"><code>x</code></em>,
        where <code class="literal">x</code> &gt; or = <code class="literal">11</code>
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_remove_analytics.update_platform_config_files"></a>14.2.1. Update Configuration Files on all Platform/MTA/Log Aggregator Nodes</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
            From the first platform node, remove the application node
            from the "upstream api_webhooks" stanza in the
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf</code>
            file.
          </p></li>
<li class="listitem">
<p>
            Set the node variable to the FQDN of the application node
            being removed. Do the same for the other MTA nodes in the
            cluster. (This example assumes there are three platform
            nodes in the cluster, but all should be provided here.)
          </p>
<p>
</p>
<pre class="screen">
export NODE=remove.app.node.fully.qualified.name;
export MTA2=plat2.fully.qualified.name;
export MTA3=plat3.fully.qualified.name;
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Update the <code class="filename">production.json</code> files on all
            platform nodes.
          </p>
<p>
</p>
<pre class="screen">
export PATH=/opt/msys/3rdParty/bin/:$PATH
for f in \
  /opt/msys/app/metrics-etl/config/production.json \
  /opt/msys/app/webhooks-etl/config/production.json \
  /opt/msys/app/adaptive-delivery-etl/config/production.json \
  ; do
  tmpf=$(mktemp --tmpdir=$(dirname $f) -t)
  jq "del(.vertica.hosts[] | select(.==\"$NODE\"))" -a -M $f &gt; $tmpf
  if [ $? = 0 ]; then
    mv -f $tmpf $f
    echo "$f updated";
  fi
done
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Copy the modified configuration files to all remaining
            platform nodes (provide more or fewer hostname variables as
            needed).
          </p>
<p>
</p>
<pre class="screen">
for f in \
  /opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf \
  /opt/msys/app/metrics-etl/config/production.json \
  /opt/msys/app/webhooks-etl/config/production.json \
  /opt/msys/app/adaptive-delivery-etl/config/production.json \
  ; do
  scp $f $MTA2:$f
  scp $f $MTA3:$f
done
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Restart all affected services on each platform node.
          </p>
<p>
</p>
<pre class="screen">
service msys-app-metrics-etl restart
service msys-app-webhooks-etl restart
service msys-nginx reload
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_remove_analytics.update_application_config_files"></a>14.2.2. Update Configuration Files on Remaining Application Nodes</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Remove the application node from the "upstream" stanzas in
            the following <code class="filename">nginx/conf.d</code> files on the
            first application node.
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf</code>
              </p></li>
<li class="listitem"><p>
                <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf</code>
              </p></li>
<li class="listitem"><p>
                <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_users_upstream.conf</code>
              </p></li>
<li class="listitem"><p>
                <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_metrics_upstream.conf</code>
              </p></li>
<li class="listitem"><p>
                <code class="filename">/opt/msys/3rdParty/nginx/conf.d/webui_upstream.conf</code>
              </p></li>
</ul></div>
</li>
<li class="listitem">
<p>
            Set the node variable to the FQDN of the application node
            being removed. Do the same for the other application nodes
            in the cluster. (This example assumes there are currently
            four application nodes in the cluster, but all should be
            provided here.)
          </p>
<p>
</p>
<pre class="screen">
export NODE=remove.app.node.fully.qualified.name; 
export NODE2=app2.fully.qualified.name; 
export NODE3=app3.fully.qualified.name;
              </pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Update the <code class="filename">production.json</code> files on all
            application nodes.
          </p>
<p>
</p>
<pre class="screen">
export PATH=/opt/msys/3rdParty/bin/:$PATH
for f in \
  /opt/msys/app/webhooks-api/config/production.json \
  /opt/msys/app/adaptive-delivery-api/config/production.json \
  /opt/msys/app/adaptive-delivery-api/cron/config/production.json \
  /opt/msys/app/metrics-api/config/production.json \
  /opt/msys/app/metrics-api/cron/config/production.json \
  ; do
  tmpf=$(mktemp --tmpdir=$(dirname $f) -t)
  jq "del(.vertica.hosts[] | select(.==\"$NODE\"))" -a -M $f &gt; $tmpf
  if [ $? = 0 ]; then
    mv -f $tmpf $f
    echo "$f updated";
  fi
done
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Copy the modified configuration files to the original
            Analytics nodes.
          </p>
<p>
</p>
<pre class="screen">
for f in \
  /opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf \
  /opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf \
  /opt/msys/3rdParty/nginx/conf.d/api_users_upstream.conf \
  /opt/msys/3rdParty/nginx/conf.d/api_metrics_upstream.conf \
  /opt/msys/3rdParty/nginx/conf.d/webui_upstream.conf \
  /opt/msys/app/webhooks-api/config/production.json \
  /opt/msys/app/adaptive-delivery-api/config/production.json \
  /opt/msys/app/adaptive-delivery-api/cron/config/production.json \
  /opt/msys/app/metrics-api/config/production.json \
  /opt/msys/app/metrics-api/cron/config/production.json \
  ; do
  scp $f $NODE2:$f
  scp $f $NODE3:$f
done
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Restart the services on all remaining application nodes.
          </p>
<p>
</p>
<pre class="screen">
service msys-app-metrics-api restart
service msys-app-users-api restart
service msys-app-webhooks-api restart
service msys-nginx reload
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_remove_analytics.vertica"></a>14.2.3. Remove the Node from the Vertica Cluster</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
            Follow
            <a class="link" href="https://my.vertica.com/docs/7.1.x/HTML/Content/Authoring/AdministratorsGuide/ManageNodes/RemovingNodesFromADatabase.htm" target="_top"> instructions
            provided by HP</a> to remove a Vertica node from a
            cluster.
          </p></li>
<li class="listitem"><p>
            Perform backups as necessary.
          </p></li>
</ol></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="add_remove_analytics_nodes.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="add_remove_analytics_nodes.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="p.configuration.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 14. Adding and Removing Analytics Nodes </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Part III. Configuring Momentum</td>
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
