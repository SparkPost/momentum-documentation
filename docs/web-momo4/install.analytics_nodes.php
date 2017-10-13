<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>9.3. Configure the Analytics Nodes</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="installation">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="new_installation.php" title="Chapter 9. New Installation - All Configurations">
<link rel="prev" href="install.configure_cassandra.php" title="9.2. Configure the Cassandra Nodes">
<link rel="next" href="install.start_remaining_services.php" title="9.4. Start Remaining Services">
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
<tr><th colspan="3" align="center">9.3. Configure the Analytics Nodes</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="install.configure_cassandra.php">Prev</a> </td>
<th width="60%" align="center">Chapter 9. New Installation - All Configurations</th>
<td width="20%" align="right"> <a accesskey="n" href="install.start_remaining_services.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="install.analytics_nodes"></a>9.3. Configure the Analytics Nodes</h2></div></div></div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.first_analytics_nodes"></a>9.3.1. Configure the First Analytics Node</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1"><li class="listitem">
<p>
            To help configure NGINX on Application nodes, copy the
            sample configuration files <span class="bold"><strong>from any
            MTA node </strong></span>to the <span class="bold"><strong>first
            Application node</strong></span> only (which is arbitrary).
          </p>
<p>
</p>
<pre class="screen">
ssh -l root analytics1.yourdomain.com mkdir -p /opt/msys/ecelerity/etc
scp -r /opt/msys/ecelerity/etc/sample-configs analytics1.yourdomain.com:/opt/msys/ecelerity/etc
</pre>
<p>
          </p>
</li></ol></div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="install.first_analytics_nodes.etl_and_webhooks"></a>9.3.1.1. Provide Database Configuration for APIs</h4></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
              On the first Analytics node, configure the files that provide
              server information about Vertica and/or Cassandra nodes for
              use by various APIs. These four files, along with the database
              host that they need to provide, are listed below:

              </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                    <code class="filename">/opt/msys/app/adaptive-delivery-api/config/production.json</code>
                    - Provides Vertica host names.
                  </p></li>
<li class="listitem"><p>
                    <code class="filename">/opt/msys/app/metrics-api/config/production.json</code>
                    - Provides Vertica host names.
                  </p></li>
<li class="listitem"><p>
                    <code class="filename">/opt/msys/app/webhooks-api/config/production.json</code>
                    - Provides Vertica and Cassandra host names.
                  </p></li>
<li class="listitem"><p>
                    <code class="filename">/opt/msys/app/users-api/config/production.json</code>
                    - Provides Vertica and Cassandra host names.
                  </p></li>
</ul></div>
<p>
            </p>
<p>
              Be sure each of your files look like the samples below,
              with appropriate servers substituted.
            </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                 Your final <code class="filename">production.json</code> files must not
                 have any comment lines in them, and the last line within the
                 <code class="literal">hosts</code> stanzas must not have a comma at the end.
              </p>
</div>
<p>
</p>
<pre class="screen">
#  Configure Vertica hosts for the adaptive-delivery-api and metrics-api
#  Example for metrics-api
#  Repeat for adaptive-delivery-api
#  cat &gt; /opt/msys/app/metrics-api/config/production.json
{
  "vertica": {
    "hosts": [
      "analytics1.yourdomain.com",
      "analytics2.yourdomain.com",
      ...
      "analyticsN.yourdomain.com"      
    ]
  }
}
            </pre>
<p>

</p>
<pre class="screen">
#  Configure Cassandra and Vertica hosts for the webhooks-api
#  cat &gt; /opt/msys/app/webhooks-api/config/production.json
{
  "vertica": {
    "hosts": [
      "analytics1.yourdomain.com",
      "analytics2.yourdomain.com",
      ...
      "analyticsN.yourdomain.com"      
    ]
  },
  "cql": {
    "contactPoints": [
      "cassnode1.yourdomain.com",
      "cassnode2.yourdomain.com",
       ...
      "cassnodeN.yourdomain.com"
    ]
  }
}
            </pre>
<p>

</p>
<pre class="screen">
#  Configure Cassandra hosts for the users-api
#  cat &gt; /opt/msys/app/users-api/config/production.json
{
  "cassandra": {
    "hosts": [
      "cassnode1.yourdomain.com",
      "cassnode2.yourdomain.com",
       ...
      "cassnodeN.yourdomain.com"
    ]
  }
}
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Configure the Web UI.
            </p>
<p>
              </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                    Copy <code class="filename">default.json</code> to
                    <code class="filename">production.json</code>.
                  </p>
<p>
</p>
<pre class="screen">cp /opt/msys/app/webui/scripts/config/default.json /opt/msys/app/webui/scripts/config/production.json</pre>
<p>
                  </p>
</li>
<li class="listitem">
<p>
                    Edit <code class="filename">production.json</code> to be sure
                    that the following options are set in the
                    <code class="option">auth</code> stanza:
                  </p>
<pre class="screen">enabled=true, apiHost=false, apiPort=false</pre>
</li>
<li class="listitem">
<p>
                    Ensure that <code class="option">enabled=true</code> is set in
                    the <code class="option">adaptiveDelivery</code> stanza. The
                    auth and adaptiveDelivery stanzas should look like
                    this:

</p>
<pre class="screen">                    
"auth" : {
    "enabled": true,
    "cookieDuration": 1209600,
    "apiPort" : false,
    "apiHost" : false,
    "apiPrefix" : "/api/v1"
  },
  "adaptiveDelivery" : {
    "enabled": true,
    "apiPort" : false,
    "apiHost" : false,
    "apiPrefix" : "/api/v1/adaptive-delivery"
  }
                    </pre>
<p>
                  </p>
</li>
</ol></div>
<p>
            </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="install.first_analytics_nodes.nginx"></a>9.3.1.2. Configure NGINX Analytics Routing</h4></div></div></div>
<p>
          On the Application nodes, an NGINX process acts as a
          proxy/load balancer for various API endpoints.
        </p>
<p>
          In the following steps you will create and/or edit the following files:
        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/momo_upstream.conf</code>(port
              2081)
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/webui_upstream.conf</code>(port
              2082)
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_metrics_upstream.conf</code>(port
              2083)
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf</code>(port
              2084)
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_users_upstream.conf</code>(port
              2085)
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf</code>(port
              2086)
            </p></li>
</ul></div>
<p>
          In each file, you will edit the associated “upstream
          stanza.” Take special note of the corresponding ports that
          are used in each configuration file in parentheses above.
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
             If you are installing a Combined nodes cluster,
             you will already have performed some of these steps
             during the <a class="xref" href="new_installation.php#install.mta_node" title="9.1. Configure Your MTA Nodes">Section 9.1, “Configure Your MTA Nodes”</a> section.
          </p>
</div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
              Copy the files above from the
              <code class="filename">/opt/msys/ecelerity/etc/sample-configs/nginx/</code>
              directory to the
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d</code>
              directory.
            </p></li>
<li class="listitem">
<p>
              The <code class="filename">momo_upstream.conf</code> file
              determines the routing for incoming REST requests that
              need to be routed to Platform/MTA nodes. Edit the
              <code class="option">upstream momo</code> stanza to point to
              <span class="bold"><strong>all MTA nodes</strong></span> on port
              2081.
            </p>
<p>
</p>
<pre class="screen">
# Example
# cat &gt; /opt/msys/3rdParty/nginx/conf.d/momo_upstream.conf
upstream momo-rest {
   server <em class="replaceable"><code>mta1.yourdomain.com</code></em>:2081;
   server <em class="replaceable"><code>mta2.yourdomain.com</code></em>:2081;
       ...
   server mtaN.yourdomain.com:2081;
   least_conn;
}
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Edit the remaining <code class="filename">*_upstream.conf</code>
              files as follows. Configure the associated
              <code class="filename">upstream *</code> stanzas by listing all the
              Analytics nodes in your cluster, along with the proper
              port (shown in parentheses above). These configuration
              files determine the routing for incoming API calls.
            </p>
<p>
              For example, edit the <code class="option">upstream
              api_webhooks</code> stanza to include
              <span class="bold"><strong>all Analytics nodes</strong></span> so
              that incoming Webhooks API requests get properly routed to
              Analytics nodes on port 2084. The remaining files are
              nearly identical except for the name of the upstream
              stanza and the port associated with the server.
            </p>
<p>
</p>
<pre class="screen">
# Example
# cat &gt; /opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf
upstream api_webhooks {
   server <em class="replaceable"><code>analytics1.yourdomain.com</code></em>:2084;
   server <em class="replaceable"><code>analytics2.yourdomain.com</code></em>:2084;
       ...
   server analyticsN.yourdomain.com:2084;
   least_conn;
}
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              After you have properly configured the NGINX files above,
              test the nginx configuration.
            </p>
<p>
</p>
<pre class="screen">
service msys-nginx configtest
</pre>
<p>
            </p>
<p>
              Your results should look like this:
            </p>
<p>
</p>
<pre class="screen">
nginx: the configuration file /opt/msys/3rdParty/nginx/conf/nginx.conf syntax is ok
nginx: configuration file /opt/msys/3rdParty/nginx/conf/nginx.conf test is successful
</pre>
<p>
            </p>
</li>
</ol></div>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.remaining_analytics_nodes"></a>9.3.2. Configure the Remaining Analytics Nodes by Copying Files</h3></div></div></div>
<p>
        Copy these configuration files from the FIRST Analytics node to
        each of the remaining Analytics nodes.

        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/momo_upstream.conf</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/webui_upstream.conf</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_metrics_upstream.conf</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_users_upstream.conf</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/app/webui/scripts/config/production.json</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/app/adaptive-delivery-api/config/production.json</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/app/metrics-api/config/production.json</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/app/webhooks-api/config/production.json</code>
            </p></li>
<li class="listitem"><p>
              <code class="filename">/opt/msys/app/users-api/config/production.json</code>
            </p></li>
</ul></div>
<p>
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.configure_vertica"></a>9.3.3. Configure Vertica</h3></div></div></div>
<p>
        Follow the steps below to create the Vertica database on the
        first Analytics node.
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Configure an environment variable prior to running the
            Vertica installer. Use the <span class="bold"><strong>IP
            addresses</strong></span> for each Vertica node in your
            deployment. These should be the same IP addresses that you
            configured in step
            <a class="xref" href="install_upgrade_packages.php#install_upgrade_packages.vertica_ips">4</a> of
            <a class="xref" href="install_upgrade_packages.php" title="Chapter 8. Install / Upgrade the Packages">Chapter 8, <i>Install / Upgrade the Packages</i></a>.
          </p>
<p>
</p>
<pre class="screen">
export SERVERS=<em class="replaceable"><code>1.2.3.1</code></em>,<em class="replaceable"><code>1.2.3.2</code></em>, ... ,<em class="replaceable"><code>1.2.3.n</code></em>
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Create the database.
          </p>
<p>
</p>
<pre class="screen">
su -l vertica_dba -c "/opt/vertica/bin/admintools --tool create_db \
--hosts=$SERVERS --database=msys" 2&gt;&amp;1 | tee -a vertica_install.log
</pre>
<p>
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              This may take a few minutes.
            </p>
</div>
</li>
<li class="listitem">
<p>
            Go to the database directory.
          </p>
<p>
</p>
<pre class="screen">
cd /opt/msys/app/db
chmod 777 scripts/*.sh
su vertica_dba
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Configure the tables by running the Flyway data migration
            tool.
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/app/db/flyway migrate -user=vertica_dba \
  -configFile=/opt/msys/app/db/conf/flyway.properties \
  -outOfOrder=true -schemas=momo -placeholders.schema=momo \
  -placeholders.api_user=vertica_api -placeholders.etl_user=vertica_etl \
  -locations=filesystem:/opt/msys/app/db/schema -jarDirs= -q
</pre>
<p>
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              Flyway will run a series of scripts, after which you may
              receive warnings of type 'Error SQL State: 42611 - Error Code:
              6100' and/or regarding using <code class="literal">outOfOrder</code> mode.
              These are about best practices from Vertica and can
              safely be ignored as they do not apply once the scripts
              have run.
            </p>
</div>
</li>
<li class="listitem">
<p>
            Configure the storage locations.
          </p>
<p>
</p>
<pre class="screen">
./scripts/metrics_storage_location.sh
./scripts/webhooks_storage_location.sh
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Set a configuration parameter.
          </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vsql -U vertica_dba -c "SELECT set_config_parameter('MergeOutInterval', 180);"
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Run the updates to the tuple mover.
          </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vsql -U vertica_dba -f /opt/msys/app/db/scripts/V2015.07.09_14.35.00__update_tuple_mover.sql
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Trigger move out.
          </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vsql -U vertica_dba -c "select do_tm_task('moveout');"
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Monitor and verify the move out (all rows in
            <code class="literal">region_in_use_size_kb</code> should contain zeroes).
          </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vsql -U vertica_dba -c "select * from wos_container_storage;"
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Run the Write Optimize Store (WOS) resource pool update.
          </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vsql -U vertica_dba -f /opt/msys/app/db/scripts/V2015.07.09_14.45.00__update_wos.sql
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Run the repartition.
          </p>
<p>
</p>
<pre class="screen">
echo "set search_path='momo';\\i /opt/msys/app/db/data-migrations/V2015.01.27_14.30.00__repartition_msg_events.sql" | \
    /opt/vertica/bin/vsql -U vertica_dba
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Configure projections.
          </p>
<p>
            If you have <span class="bold"><strong>more than one Vertica
            node</strong></span>, run the following command:
          </p>
<p>
</p>
<pre class="screen">
export VERT_MULTI_OR_SINGLE=multinode
</pre>
<p>
          </p>
<p>
            If you are running a <span class="bold"><strong>single Vertica node</strong></span>,
            run this command:
          </p>
<p>
</p>
<pre class="screen">
export VERT_MULTI_OR_SINGLE=singlenode
</pre>
<p>
          </p>
<p>
            Configure the projections:

</p>
<pre class="screen">
echo "set search_path='momo';\\i /opt/msys/app/db/projections/${VERT_MULTI_OR_SINGLE}_sql/latest_metrics_projection.sql" | \
   /opt/vertica/bin/vsql -U vertica_dba
echo "set search_path='momo';\\i /opt/msys/app/db/projections/${VERT_MULTI_OR_SINGLE}_sql/latest_webhooks_projection.sql" | \
   /opt/vertica/bin/vsql -U vertica_dba
echo "set search_path='momo';\\i /opt/msys/app/db/projections/${VERT_MULTI_OR_SINGLE}_sql/latest_ad_projections.sql" | \
   /opt/vertica/bin/vsql -U vertica_dba
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Ensure that Vertica will successfully restart during future
            system reboots.
          </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/admintools -t set_restart_policy -d msys --policy always
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Exit the Vertica database administrator user bash session.
          </p>
<p>
</p>
<pre class="screen">
exit
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="install.configure_cassandra.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="new_installation.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="install.start_remaining_services.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">9.2. Configure the Cassandra Nodes </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 9.4. Start Remaining Services</td>
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
