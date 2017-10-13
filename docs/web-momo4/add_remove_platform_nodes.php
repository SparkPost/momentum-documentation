<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 13. Adding and Removing Platform Nodes</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="nodes">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.installing.php" title="Part II. Installing Momentum">
<link rel="prev" href="install.security_considerations.php" title="12.6. Security Considerations">
<link rel="next" href="node_remove.php" title="13.2. Removing a Platform Node">
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
<tr><th colspan="3" align="center">Chapter 13. Adding and Removing Platform Nodes</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="install.security_considerations.php">Prev</a> </td>
<th width="60%" align="center">Part II. Installing Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="node_remove.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="add_remove_platform_nodes"></a>Chapter 13. Adding and Removing Platform Nodes</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="add_remove_platform_nodes.php#node_add">13.1. Adding a Platform Node</a></span></dt>
<dt><span class="section"><a href="node_remove.php">13.2. Removing a Platform Node</a></span></dt>
</dl>
</div>
<p>
    This chapter describes how to add and remove a Platform node (MTA +
    Cassandra) to and from an existing Momentum 4.2 cluster.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="node_add"></a>13.1. Adding a Platform Node</h2></div></div></div>
<p>
      This section describes how to add a Platform node, which involves
      installing the new node then making some manual configuration
      changes on the new node and on the existing nodes.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        These instructions apply to Momentum 4.2.1.<em class="replaceable"><code>x</code></em>,
        where <code class="literal">x</code> &gt; or = <code class="literal">11</code>
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_add.prepare_first_node"></a>13.1.1. Prepare the First Platform Node</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Add the new node to the ecelerity configuration
            files on the existing first platform node
            (or log aggregator node, if present).
          </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Add the node to message generation by updating the
                following stanzas in <code class="filename">msg_gen.conf</code>.
              </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                    cassandra_client - duplicate an existing line and
                    change the host name to match the new host.
                  </p></li>
<li class="listitem"><p>
                    msg_gen - copy/paste one of the existing "node"
                    stanzas and update the node name and set a new,
                    unique <code class="literal">mta_id</code>.
                  </p></li>
</ul></div>
<p>
</p>
<pre class="screen">
# Edit /opt/msys/ecelerity/etc/conf/default/msg_gen.conf 
# Example.  Assumes 3 nodes in current cluster.  Adding node4.
 
cassandra_client {
  uri = (
    # all of the servers running cassandra in the following format
    # "name=cassandra_db;host=Fully.Qualified.Domain.Name;port=9160"
    "name=cassandra_db;host=node1.int.messagesystems.com;port=9160"
    "name=cassandra_db;host=node2.int.messagesystems.com;port=9160"
    "name=cassandra_db;host=node3.int.messagesystems.com;port=9160"
# Add the new line here:
    "name=cassandra_db;host=node4.int.messagesystems.com;port=9160"
  )
}
msg_gen {
  engagement_tracking_host = "__EXTERNAL_DNS_HOSTNAME__:81"
  # set the following to false if only using a single MTA
  # cluster_cfg = true
  # Repeat the following structure for as many hosts in C* cluster
  # The mta_id must be a unique integer &lt; 255
  node node1.int.messagesystems.com { mta_id = 1  votes = 1 }
  node node2.int.messagesystems.com { mta_id = 2  votes = 1 }
  node node3.int.messagesystems.com { mta_id = 3  votes = 1 }
# Add the new line here:
  node node4.int.messagesystems.com { mta_id = 4  votes = 1 }
}
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Add the node to the ecelerity cluster by updating the
                following stanza in
                <code class="filename">msgc_server.conf</code>.
              </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; "><li class="listitem"><p>
                    peers - add an additional line for the new host (use
                    both hostname and correct IP address).
                  </p></li></ul></div>
<p>
</p>
<pre class="screen">
# Edit /opt/msys/ecelerity/etc/conf/global/msgc_server.conf
# Example.  Assumes 3 nodes in current cluster.  Adding node4.
 
msgc_server {
   peers = [
     node1.int.messagesystems.com = "10.77.0.93"
     node2.int.messagesystems.com = "10.77.0.94"
     node3.int.messagesystems.com = "10.77.0.95"
# Add the new line here:
     node4.int.messagesystems.com = "10.77.0.96"
   ]
}
</pre>
<p>
              </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
            Use eccfg to commit the modified configuration,
            substituting your own admin password if environmental variable
            $ADMINPASS is not defined.
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/ecelerity/bin/eccfg commit -u admin -p $ADMINPASS -m 'Add new Platform node to ecelerity cluster'
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Restart affected services.
          </p>
<p>
</p>
<pre class="screen">
service ecelerity restart
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Update the nginx configuration files.
          </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Update the
                <code class="filename">click_proxy_upstream.conf</code> nginx
                configuration file by adding a "server" line for the new
                Platform host.
              </p>
<div class="tip">
<h3 class="title">Tip</h3>
<p>
                  If Engagement Tracking hosts are separate from the
                  Platform nodes and you do not expect your Platform
                  node to handle clicks/opens, then you do not have to
                  update this file.
                </p>
</div>
<p>
</p>
<pre class="screen">
# Edit /opt/msys/3rdParty/nginx/conf.d/click_proxy_upstream.conf
 
#  In click_proxy_upstream.conf, modify the upstream click_proxy stanza:
     upstream click_proxy {
     server node1.int.messagesystems.com:2081;
     server node2.int.messagesystems.com:2081;
     server node3.int.messagesystems.com:2081;
#  Add the new server line here:
     server node4.int.messagesystems.com:2081;
     least_conn;
   }
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Reload the nginx configuration.
              </p>
<p>
</p>
<pre class="screen">
service msys-nginx reload
</pre>
<p>
              </p>
</li>
</ol></div>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_add.update_remaining_nodes"></a>13.1.2. Update the Remaining Existing Platform Nodes</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
            Update the <code class="filename">click_proxy_upstream.conf</code>
            file on all remaining existing Platform nodes. You can copy the file
            from the first node to the remaining ones.
          </p></li>
<li class="listitem">
<p>
            Restart affected services on each Platform node.
          </p>
<p>
</p>
<pre class="screen">
service ecelerity restart
service msys-nginx reload
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_add.configure_platform_node"></a>13.1.3. Configure the new Platform Node</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Copy the Momentum 4.2 bundle to the new node, unpack it, and
            activate the included yum repository.
          </p>
<p>
            <span class="bold"><strong>NOTE:</strong></span> Here, and throughout the node
            addition and removal documentation, specific releases and revisions
            shown are just examples, and your appropriate Momentum software
            bundle will be different.
          </p>
<p>
</p>
<pre class="screen">
cd /var/tmp
tar -zxf momentum-bundle-4.2.1.50062.rhel6.x86_64.tar.gz
cd momentum-4.2.1.50062/
./setrepodir
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Install the meta package
            <code class="option">msys-role-platform</code>.
          </p>
<p>
</p>
<pre class="screen">
yum install -y --config momentum.repo --enablerepo momentum msys-role-platform
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Bootstrap the Ecelerity configuration from the first server,
            substituting your own admin password if environmental variable
            $ADMINPASS is not defined.
.
          </p>
<p>
</p>
<pre class="screen">
chown -R ecuser:ecuser /opt/msys/ecelerity/etc/
cd /opt/msys/ecelerity/etc/
../bin/eccfg bootstrap --clustername default -u admin -p $ADMINPASS <em class="replaceable"><code>FIRST.NODE.FQDN</code></em>
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Copy the existing configuration files from the first
            Platform node to the new node, substituting or setting
            the new node's hostname for environmental variable $NEWNODE.
          </p>
<p>
</p>
<pre class="screen">
# execute this on the first Platform node
for file in \
  /opt/msys/3rdParty/cassandra/conf/cassandra.yaml \
  /opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf \
  /opt/msys/3rdParty/nginx/conf.d/click_proxy_upstream.conf \
  /opt/msys/app/metrics-etl/config/production.json \
  /opt/msys/app/adaptive-delivery-etl/config/production.json \
  /opt/msys/app/webhooks-etl/config/production.json \
  /opt/msys/etc/ ;
do
  scp -r $file $NEWNODE:$file
done
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Update the <code class="filename">cassandra.yaml</code> file on the
            new Platform node to replace
            <code class="literal">listen_address</code> with the correct local IP
            address for the new node.
          </p>
<p>
</p>
<pre class="screen">
# example
vim /opt/msys/3rdParty/cassandra/conf/cassandra.yaml
# Edit this line:
listen_address: 10.77.0.245
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Start Cassandra on the new node.
          </p>
<p>
</p>
<pre class="screen">
# service msys-cassandra start
</pre>
<p>
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              Depending on the amount of existing data in your Cassandra
              database, this may falsely report as failed (because the init script only
              waits a fixed amount of time for the service to start).
              Perform the next step below to determine the real
              status. If you do not get the indicated result, submit the
              start service command again, and if the desired result still does not result,
              check logs at <code class="filename">/var/log/msys-cassandra/</code> for error messages.
            </p>
</div>
</li>
<li class="listitem">
<p>
            After Cassandra starts, check that the database has been
            replicated (UN means Up Normal) using <code class="literal">service
            msys-cassandra status</code> or
            <code class="literal">/opt/msys/3rdParty/cassandra/bin/nodetool
            status</code>. You should expect to see the new node
            participating in the Cassandra cluster.
          </p>
<p>
</p>
<pre class="screen">
service msys-cassandra status
 
Note: Ownership information does not include topology; for complete information, specify a keyspace
Datacenter: datacenter1
=======================
Status=Up/Down
|/ State=Normal/Leaving/Joining/Moving
--  Address      Load       Tokens  Owns   Host ID                               Rack
UN  10.77.0.245  215.57 KB  256     25.8%  1b00204c-5dc4-44b8-a024-c1ba47b07233  rack1
UN  10.77.1.8    178.35 KB  256     23.7%  28e2d1b9-80f6-40f8-b399-4533b2cfb103  rack1
UN  10.77.1.12   196.56 KB  256     23.2%  4addf36b-10f9-48fb-98c9-e5acf2c19970  rack1
UN  10.77.0.227  203.12 KB  256     27.3%  5525b410-3f3e-49ec-a176-0efa2383f3f4  rack1
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Configure RabbitMQ on the new platform node.
          </p>
<p>
</p>
<pre class="screen">
# kill off qpidd service, which (if running) can interfere with RabbitMQ
service qpidd stop
/sbin/chkconfig qpidd off
export THIRDPARTY=/opt/msys/3rdParty
export RABBITMQCTL="$THIRDPARTY/sbin/rabbitmqctl"
export RABBITMQADMIN="$THIRDPARTY/sbin/rabbitmqadmin"
service msys-rabbitmq start
$RABBITMQADMIN declare exchange name=momentum_metrics type=topic
$RABBITMQADMIN declare queue name=msg_events
$RABBITMQADMIN declare binding source=momentum_metrics \
  destination=msg_events \
  routing_key=msys.*
$RABBITMQCTL add_user rabbitmq "p1-Vk0lXy"
$RABBITMQCTL set_user_tags rabbitmq administrator
$RABBITMQCTL set_permissions -p '/' rabbitmq '.*' '.*' '.*'
$RABBITMQCTL delete_user guest
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Start all remaining services on the new node.
          </p>
<p>
</p>
<pre class="screen">
/etc/init.d/msys-riak start
/etc/init.d/msys-app-metrics-etl start
/etc/init.d/msys-app-adaptive-delivery-etl start
/etc/init.d/ecelerity start
/etc/init.d/msys-nginx start
/etc/init.d/msys-app-webhooks-etl start
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_add.update_analytics_nodes"></a>13.1.4. Update the Analytics Nodes</h3></div></div></div>
<p>
        Perform the following steps on each Analytics node in your
        cluster.
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Update the <code class="filename">momo_upstream.conf</code> nginx
            configuration file by adding the new Platform hostname to
            the upstream stanza.
          </p>
<p>
</p>
<pre class="screen">
# Edit /opt/msys/3rdParty/nginx/conf.d/momo_upstream.conf
 
#  In momo_upstream.conf, modify the upstream momo-rest stanza with the new Platform hostname
     upstream momo-rest {
       server node1.int.messagesystems.com:2081;
       server node2.int.messagesystems.com:2081;
       server node3.int.messagesystems.com:2081;
#  Add the new Platform server host here:
       server node4.int.messagesystems.com:2081;
       least_conn;
   }
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Update two <code class="filename">production.json</code> files.
          </p>
<p>
</p>
<pre class="screen">
# Update the following file by ADDING the new Platform host to the "cassandra:hosts" array
# /opt/msys/app/users-api/config/production.json
 
# Example:
# Add this line below the former last-node line: "node4.int.messagesystems.com"
# You must also add a trailing comma at the end of the former last-node line.
{
  "cassandra": {
    "hosts": [
      "node1.int.messagesystems.com",
      "node2.int.messagesystems.com",
      "node3.int.messagesystems.com"
    ]
  }
}

# Update the following file by ADDING the new Platform host to the "cql:contactPoints" array
# /opt/msys/app/webhooks-api/config/production.json

# Example:
# Add this line below the former last-node line: "node4.int.messagesystems.com"
# You must also add a trailing comma at the end of the former last-node line.
{
  "cql": {
    "contactPoints": [
      "node1.int.messagesystems.com",
      "node2.int.messagesystems.com",
      "node3.int.messagesystems.com"
    ]
  }
}
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Restart all applicable services.
          </p>
<p>
</p>
<pre class="screen">
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
<a name="node_add.final_steps"></a>13.1.5. Final Steps</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Confirm that the new node has been properly added to the
            Momentum cluster.
          </p>
<p>
</p>
<pre class="screen">
echo "cluster membership" | /opt/msys/ecelerity/bin/ec_console
</pre>
<p>
          </p>
</li>
<li class="listitem"><p>
            Ensure that the <code class="filename">momo_upstream.conf</code> and
            <code class="filename">msg_gen.conf</code> files were properly
            configured on your new node by confirming that the node is
            generating messages from REST transmissions.
          </p></li>
<li class="listitem">
<p>
            On all original Platform nodes, the Cassandra database will
            have duplicate keys that have now been distributed to the
            added node. Run the following command on each
            Platform/Cassandra node:
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/3rdParty/cassandra/bin/nodetool cleanup
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="install.security_considerations.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.installing.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="node_remove.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">12.6. Security Considerations </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 13.2. Removing a Platform Node</td>
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
