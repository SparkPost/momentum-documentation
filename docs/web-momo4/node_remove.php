<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>13.2. Removing a Platform Node</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="nodes">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="add_remove_platform_nodes.php" title="Chapter 13. Adding and Removing Platform Nodes">
<link rel="prev" href="add_remove_platform_nodes.php" title="Chapter 13. Adding and Removing Platform Nodes">
<link rel="next" href="add_remove_analytics_nodes.php" title="Chapter 14. Adding and Removing Analytics Nodes">
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
<tr><th colspan="3" align="center">13.2. Removing a Platform Node</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="add_remove_platform_nodes.php">Prev</a> </td>
<th width="60%" align="center">Chapter 13. Adding and Removing Platform Nodes</th>
<td width="20%" align="right"> <a accesskey="n" href="add_remove_analytics_nodes.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="node_remove"></a>13.2. Removing a Platform Node</h2></div></div></div>
<p>
      This section describes how to remove a functional Platform node,
      which involves removing the node from the Cassandra and Momentum
      clusters and making some manual configuration changes on the
      remaining Platform nodes and on the existing Analytics nodes.
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
<a name="node_remove.removing_node"></a>13.2.1. Remove the Node</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
            Remove the node from any external load balancers.
          </p></li>
<li class="listitem">
<p>
            Update the <code class="filename">momo_upstream.conf</code> file from
            all Analytics nodes in your cluster.
          </p>
<p>
</p>
<pre class="screen">
# Edit /opt/msys/3rdParty/nginx/conf.d/momo_upstream.conf
 
#  In momo_upstream.conf, REMOVE the OLD Platform node from the upstream momo-rest stanza
     upstream momo-rest {
       server node1.int.messagesystems.com:2081;
       server node2.int.messagesystems.com:2081;
       server node3.int.messagesystems.com:2081;
#  Example:  Remove the appropriate old Platform server here:
       server node4.int.messagesystems.com:2081;
       least_conn;
   }
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Reload the NGINX configuration on the Analytics nodes.
          </p>
<p>
</p>
<pre class="screen">
# service msys-nginx reload
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Prevent the node from receiving clicks and opens.
          </p>
<p>
            On all Platform nodes, update the
            <code class="filename">click_proxy_upstream.conf</code> file by
            removing the appropriate server line for the Platform host
            that is being removed.
          </p>
<div class="tip">
<h3 class="title">Tip</h3>
<p>
              If Engagement Tracking hosts are separate from the
              Platform nodes, then you do not have to update this file
              as your old Platform node will not have been included in
              this stanza.
            </p>
</div>
<p>
</p>
<pre class="screen">
# /opt/msys/3rdParty/nginx/conf.d/click_proxy_upstream.conf
 
#  In click_proxy_upstream.conf, REMOVE the OLD Platform node from the upstream click_proxy stanza:
     upstream click_proxy {
     server node1.int.messagesystems.com:2081;
     server node2.int.messagesystems.com:2081;
     server node3.int.messagesystems.com:2081;
#  REMOVE the old Platform server line here:
     server node4.int.messagesystems.com:2081;
     least_conn;
   }
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Allow the node time to finish generation.
          </p>
<p>
</p>
<pre class="screen">
$ /opt/msys/ecelerity/bin/ec_console
16:26:02 /tmp/2025&gt; msg_gen joblist    
Job: 84158406797069455 jctl: 4 Restarts: 0 resync: 0 complete: 0 del_pend: 0
      inprog: 1 Recips:    100  LastStart:      1 worker(count: 1 complete: 0)
     
      own  start count s_recip s_count s_total complete fail status state restart seqno finish
        4      1   100       1     100       0        0    0      0     0       0     1      0
Job: 84158406797069346 jctl: 4 Restarts: 0 resync: 0 complete: 0 del_pend: 0
      inprog: 1 Recips:    100  LastStart:      1 worker(count: 1 complete: 0)
     
      own  start count s_recip s_count s_total complete fail status state restart seqno finish
        4      1   100       1     100       0        0    0      0     0       0     1      0
16:26:06 /tmp/2025&gt; msg_gen joblist                                                                                          
Ok
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Stop services on the node.
          </p>
<p>
</p>
<pre class="screen">
service ecelerity stop
service msys-app-metrics-etl stop
service msys-app-webhooks-etl stop
service msys-app-adaptive-delivery-etl stop
service msys-riak stop
service msys-nginx stop
service msys-rabbitmq stop
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_remove.modify_config"></a>13.2.2. Modify the Configuration on the Remaining Platform Nodes</h3></div></div></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
          You can perform the following steps on any remaining Platform
          node.
        </p>
</div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Remove the node from the ecelerity cluster by updating the
            <code class="filename">msgc_server.conf</code> file. Delete the line
            in the peers stanza for the Platform host that you are
            removing.
          </p>
<p>
</p>
<pre class="screen">
# Edit /opt/msys/ecelerity/etc/conf/global/msgc_server.conf
# Example.  Assumes 4 nodes in current cluster.  Removing node4.int.messagesystems.com
 
msgc_server {
   peers = [
     node1.int.messagesystems.com = "10.77.0.93"
     node2.int.messagesystems.com = "10.77.0.94"
     node3.int.messagesystems.com = "10.77.0.95"
#  REMOVE the old Platform node line here:
     node4.int.messagesystems.com = "10.77.0.96"
   ]
}
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Remove the node from message generation by updating the
            following stanzas in <code class="filename">msg_gen.conf</code>.
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                cassandra_client - remove the line that specifies the
                host that you are removing from Message Generation.
              </p></li>
<li class="listitem"><p>
                msg_gen - remove the node that specifies the node that
                you are removing from Message Generation.
              </p></li>
</ul></div>
<p>
</p>
<pre class="screen">
# Edit /opt/msys/ecelerity/etc/conf/default/msg_gen.conf 
# Example.  Assumes 4 nodes in current cluster.  Removing node4.int.messagesystems.com
 
cassandra_client {
  uri = (
    # all of the servers running cassandra in the following format
    # "name=cassandra_db;host=Fully.Qualified.Domain.Name;port=9160"
    "name=cassandra_db;host=node1.int.messagesystems.com;port=9160"
    "name=cassandra_db;host=node2.int.messagesystems.com;port=9160"
    "name=cassandra_db;host=node3.int.messagesystems.com;port=9160"
# Remove the old Platform host line here:
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
#  REMOVE the old Platform node line here:
  node node4.int.messagesystems.com { mta_id = 4  votes = 1 }
}
</pre>
<p>
          </p>
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
$ /opt/msys/ecelerity/bin/eccfg commit -u admin -p $ADMINPASS -m 'Removing a platform node from the cluster'
            </pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Restart ecelerity on ALL of the remaining Platform nodes.
          </p>
<p>
</p>
<pre class="screen">
$ service ecelerity restart
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_remove.production.json"></a>13.2.3. Remove the Node from the <code class="filename">production.json</code> Files</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Remove the node from the
            <code class="filename">production.json</code> files on each Analytics
            node.
          </p>
<p>
</p>
<pre class="screen">
# Update the following file by REMOVING the new Platform host FROM the "cassandra:hosts" array:
# /opt/msys/app/users-api/config/production.json

# Example: Remove this string "pnode4.int.messagesystems.com" from the array:
{
  "cassandra": {
    "hosts": [
      "node1.int.messagesystems.com",
      "node2.int.messagesystems.com",
      "node3.int.messagesystems.com",
# REMOVE the trailing comma from the preceding line, and
# REMOVE the appropriate host from here
      "pnode4.int.messagesystems.com"
    ]
  }
}

# Update the following file by REMOVING the new Platform host FROM the "cql:contactPoints" array:
# /opt/msys/app/webhooks-api/config/production.json
 
# Example: Remove this string "pnode4.int.messagesystems.com" from the array:
{
  "cql": {
    "contactPoints": [
      "pnode1.int.messagesystems.com",
      "pnode2.int.messagesystems.com",
      "pnode3.int.messagesystems.com",
# REMOVE the trailing comma from the preceding line, and
# REMOVE the appropriate host from here
      "pnode4.int.messagesystems.com"
    ]
  }
}
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Restart all applicable services on each Analytics node.
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
<a name="node_remove.decommission_from_cassandra"></a>13.2.4. Decommission the Node from the Cassandra Cluster</h3></div></div></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
          These instructions are based on the assumption that you are
          reducing the size of your Cassandra cluster and not replacing
          a dead node.
        </p>
</div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Run the nodetool command to confirm that all nodes in the
            cluster are up (UN=up, DN=down).
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/3rdParty/cassandra/bin/nodetool status
</pre>
<p>
          </p>
<p>
            Your results should look similar to this:
          </p>
<p>
</p>
<pre class="screen">
$ service msys-cassandra status
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
            Confirm that the node you are removing is marked
            <code class="literal">UN</code>. If it is, decommission the node using
            the <code class="option">nodetool decommission</code> command,
            <span class="bold"><strong> executed on the node that is being removed.
            </strong></span>
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/3rdParty/cassandra/bin/nodetool decommission
</pre>
<p>
          </p>
<p>
            If the node is down (<code class="literal">DN</code>), then use the
            <code class="option">nodetool removenode</code> command, 
            <span class="bold"><strong> executed on the node that is being removed.
            </strong></span>
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/3rdParty/cassandra/bin/nodetool removenode
            </pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Monitor the progress and wait for the node to be
            decommissioned.
          </p>
<p>
</p>
<pre class="screen">
$ /opt/msys/3rdParty/cassandra/bin/nodetool netstats
Mode: LEAVING
</pre>
<p>
          </p>
<div class="tip">
<h3 class="title">Tip</h3>
<p>
              Use <code class="option">watch nodetool netstats</code> to see the
              data leaving the node.
            </p>
</div>
<p>
            Once the decommissioning is complete, you'll see the netstat
            command report "DECOMMISSIONED."
          </p>
<p>
</p>
<pre class="screen">
$ /opt/msys/3rdParty/cassandra/bin/nodetool netstats
Mode: DECOMMISSIONED              
</pre>
<p>
          </p>
<p>
            Confirm that the node has been decommissioned (and therefore
            removed from the Cassandra cluster).
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/3rdParty/cassandra/bin/nodetool status
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            If this node is in the seeds list, then remove the node from
            the seeds parameter in the
            <code class="filename">cassandra.yaml</code> configuration file on
            all remaining Platform nodes in your cluster.
          </p>
<p>
</p>
<pre class="screen">
# Edit /opt/msys/3rdParty/cassandra/conf/cassandra.yaml
# Example.  Assumes 4 nodes in current Cassandra cluster.  Removing node4.int.messagesystems.com
 
# Look for this portion of the file
seed_provider:
- class_name: org.apache.cassandra.locator.SimpleSeedProvider
  parameters:
  - seeds: "node1.int.messagesystems.com, node2.int.messagesystems.com, node3.int.messagesystems.com"
# REMOVE the OLD hostname from the above comma-separated list.
# It is recommended that 3 nodes in your cluster are seed nodes, so you may have to replace this seed with another
# functional Cassandra node in your cluster.
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_remove.move_spool_file"></a>13.2.5. Move the Spool Files</h3></div></div></div>
<p>
        Move the spool files to a functional Platform node. For more
        information, see
        <a class="xref" href="console_commands.spool_import.php" title="spool import"><span class="refentrytitle">spool import</span></a>.
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="node_remove.final_steps"></a>13.2.6. Final Steps</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Confirm that the new node has been properly removed from the
            Momentum cluster. Run the following command on a remaining
            Platform node.
          </p>
<p>
</p>
<pre class="screen">
echo "cluster membership" | /opt/msys/ecelerity/bin/ec_console
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Double-check the Cassandra cluster status.
          </p>
<p>
</p>
<pre class="screen">
service msys-cassandra status
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
<a accesskey="p" href="add_remove_platform_nodes.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="add_remove_platform_nodes.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="add_remove_analytics_nodes.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 13. Adding and Removing Platform Nodes </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 14. Adding and Removing Analytics Nodes</td>
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
