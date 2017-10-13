<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>9.2. Configure the Cassandra Nodes</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="installation">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="new_installation.php" title="Chapter 9. New Installation - All Configurations">
<link rel="prev" href="new_installation.php" title="Chapter 9. New Installation - All Configurations">
<link rel="next" href="install.analytics_nodes.php" title="9.3. Configure the Analytics Nodes">
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
<tr><th colspan="3" align="center">9.2. Configure the Cassandra Nodes</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="new_installation.php">Prev</a> </td>
<th width="60%" align="center">Chapter 9. New Installation - All Configurations</th>
<td width="20%" align="right"> <a accesskey="n" href="install.analytics_nodes.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="install.configure_cassandra"></a>9.2. Configure the Cassandra Nodes</h2></div></div></div>
<p>
      The Cassandra distributed database can be configured to run on its
      own cluster of nodes OR together on the MTA nodes. You must know
      the name and IP address of each Cassandra cluster node (or
      Platform node if you are combining it with an MTA) before you can
      configure Cassandra.
    </p>
<p>
      Follow all steps below on the first Cassandra node until reaching the final
      numbered step in this section, which is to configure the remaining nodes.
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
          Each Cassandra cluster must have a unique name that is shared
          by all nodes in that cluster. The name of the cluster is used
          to prevent machines in one logical cluster from joining
          another. All nodes participating in a cluster must have the
          same <code class="option">cluster_name</code> value. Create a Cassandra
          cluster name and set it as an environment variable.
        </p>
<p>
</p>
<pre class="screen">
export CLUSTER="CAS-12345678"
echo $CLUSTER &gt;/var/tmp/cass.cluster
</pre>
<p>
        </p>
</li>
<li class="listitem"><p>
          Copy the
          <code class="filename">/opt/msys/3rdParty/cassandra/conf/cassandra.yaml.dist</code>
          file to
          <code class="filename">/opt/msys/3rdParty/cassandra/conf/cassandra.yaml</code>.
        </p></li>
<li class="listitem">
<p>
          Edit the
          <code class="filename">/opt/msys/3rdParty/cassandra/conf/cassandra.yaml</code>
          file. Set or change the following configuration options:

          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                <code class="option">cluster_name: '</code><em class="replaceable"><code>your-cluster-name</code></em>
                <code class="option">'</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">listen_address: </code><em class="replaceable"><code>your-firstCassNode-IP</code></em>
              </p></li>
<li class="listitem"><p>
                <code class="option">rpc_address: 0.0.0.0</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">rpc_max_threads: 200</code>
              </p></li>
<li class="listitem"><p>
                <code class="option">thrift_framed_transport_size_in_mb: 25</code>
              </p></li>
<li class="listitem"><p>
                Replace the default Cassandra root
                <code class="option">/var/lib/cassandra/</code> with
                <code class="option">/var/db/cassandra/</code> in all three places
                it appears (<code class="filename">data_file_directories</code>,
                <code class="filename">commitlog_directory</code>, and
                <code class="filename">saved_caches_directory</code>). Be sure to retain
                the existing directory names beneath the root at each of those places.
              </p></li>
<li class="listitem">
<p>
                Ensure the following option is formatted as shown below:
              </p>
<p>
</p>
<pre class="screen">
<code class="option">seed_provider:
- class_name: org.apache.cassandra.locator.SimpleSeedProvider
  parameters:
  - seeds: "</code><em class="replaceable"><code>cassnode1.example.com,cassnode2.example.com,cassnode3.example.com</code></em><code class="option">"</code>
</pre>
<p>
              </p>
<p>
                Configure <span class="bold"><strong>EXACTLY THREE</strong></span>
                Cassandra hostnames in the seeds parameter. It is not critical
                which of your Cassandra hostnames are in this list as long as
                the parameter has exactly three hostnames set.
              </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                  If you are performing a single node install, configure one
                  Cassandra hostname in the seeds parameter.
                </p>
</div>
</li>
</ul></div>
<p>
        </p>
</li>
<li class="listitem">
<p>
          Set your environment variables to handle singlenode OR
          multinode configurations.
        </p>
<p>
          For environments with a single Cassandra node, run the
          following:
        </p>
<p>
</p>
<pre class="screen">
export CASS_MULTI_OR_SINGLE=singlenode
export CASS_CLUSTER_OR_SINGLE=singlenode
</pre>
<p>
        </p>
<p>
          For environments with multiple Cassandra nodes, run the
          following:
        </p>
<p>
</p>
<pre class="screen">
export CASS_MULTI_OR_SINGLE=multinode
export CASS_CLUSTER_OR_SINGLE=cluster
</pre>
<p>
        </p>
</li>
<li class="listitem">
<p>
          Start the Cassandra service.
        </p>
<p>
</p>
<pre class="screen">
service msys-cassandra start
sleep 30
</pre>
<p>
        </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
            It is possible to get a FAILURE result message on first startup, even though the
            startup actually succeeded. Perform the next step below to determine the real
            status. If you do not get the indicated result, check logs at
            <code class="filename">/var/log/msys-cassandra/</code> for error messages.
          </p>
</div>
</li>
<li class="listitem">
<p>
          Check the status of the Cassandra service.
        </p>
<p>
</p>
<pre class="screen">
service msys-cassandra status
</pre>
<p>
        </p>
<p>
          Your results should look something like this:
        </p>
<p>
</p>
<pre class="screen">
Datacenter: datacenter1
=======================
Status=Up/Down
|/ State=Normal/Leaving/Joining/Moving
--  Address      Load       Tokens  Owns (effective)  Host ID                               Rack
UN  10.77.0.158  45.89 KB   256     100.0%            a5732aca-b808-417b-a83b-ac97b4693694  rack1
</pre>
<p>
        </p>
</li>
<li class="listitem">
<p>
          Apply the initial Cassandra schema. <span class="bold"><strong>Do
          this only on the first Cassandra node in the
          cluster.</strong></span>
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            You can safely ignore any 'Invalid column name' messages
            that may appear.
          </p>
</div>
<p>
</p>
<pre class="screen">
export PATH=/opt/msys/3rdParty/bin:$PATH
export IPADDRESS=`host $HOSTNAME | cut -d' ' -f4`
 
cd /opt/msys/ecelerity/etc
 
../bin/cassandra_momo_setup.sh --$CASS_MULTI_OR_SINGLE $PWD | \
  tee -a /opt/msys/app/users-api/cql/cassandra_schema.log
 
cd /opt/msys/app/users-api/cql
 
cqlsh $IPADDRESS -f load_${CASS_CLUSTER_OR_SINGLE}_keyspace.cql \
  2&gt;&amp;1 | tee -a /opt/msys/app/users-api/cql/cassandra_schema.log
 
cqlsh $IPADDRESS -k authentication \
  -f upgrades/V2015.01.20_00.00.00__create_customer_metadata.cql \
  2&gt;&amp;1 | tee -a /opt/msys/app/users-api/cql/cassandra_schema.log
 
cqlsh $IPADDRESS -k authentication \
  -f  upgrades/V2015.01.21_00.00.00__add_terms_of_use_column.cql \
  2&gt;&amp;1 | tee -a /opt/msys/app/users-api/cql/cassandra_schema.log
 
cqlsh $IPADDRESS -k authentication \
  -f upgrades/V2015.05.21_00.00.00__add_email_verified_column.cql \
  2&gt;&amp;1 | tee -a /opt/msys/app/users-api/cql/cassandra_schema.log
 
cd /opt/msys/app/webhooks-api/cql
 
cqlsh $IPADDRESS -f load_${CASS_CLUSTER_OR_SINGLE}_keyspace.cql \
  2&gt;&amp;1 | tee -a /opt/msys/app/users-api/cql/cassandra_schema.log

cqlsh $IPADDRESS -k webhooks \
  -f upgrades/V2015.08.12_12.00.00__add_auth_columns.cql \
  2&gt;&amp;1 | tee -a /opt/msys/app/users-api/cql/cassandra_schema.log
</pre>
<p>
        </p>
</li>
<li class="listitem">
<p>
          Configure the remaining Cassandra nodes
        </p>
<p>
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
                Configure Cassandra's yaml file on all remaining nodes.
              </p>
<p>
                From the first Cassandra node, copy
                <code class="filename">/opt/msys/3rdParty/cassandra/conf/cassandra.yaml</code>
                to each remaining Cassandra node.
              </p>
<pre class="screen">
cd /opt/msys/3rdParty/cassandra/conf
scp cassandra.yaml cass2.com:/opt/msys/3rdParty/cassandra/conf/
                </pre>
</li>
<li class="listitem"><p>
                On every node, edit
                <code class="filename">/opt/msys/3rdParty/cassandra/conf/cassandra.yaml</code>
                to be sure that this option <code class="option">listen_address:
                w.x.y.z</code> matches the IP address of the node.
              </p></li>
<li class="listitem">
<p>
                Start the Cassandra service on each node.
              </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
                  Do not start the Cassandra on two or more nodes
                  simultaneously. Allow Cassandra startup to fully
                  complete on an individual node prior to starting on
                  the next one.
                </p>
</div>
<p>
</p>
<pre class="screen">
service msys-cassandra start
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                After you have started Cassandra service on each node,
                check the status on any node.
              </p>
<p>
</p>
<pre class="screen">
service msys-cassandra status
</pre>
<p>

                You should see all the nodes in the cluster. Something
                like this:
              </p>
<pre class="screen">
Datacenter: datacenter1
=======================
Status=Up/Down
|/ State=Normal/Leaving/Joining/Moving
--  Address      Load       Tokens  Owns   Host ID                               Rack
UN  10.77.0.177  91.92 KB   256     31.2%  fbe23d7b-0c7b-4a45-90bb-20373ff3948b  rack1
UN  10.77.0.233  110.98 KB  256     35.4%  2713fb8f-b188-4b0b-9d11-b76506e922bc  rack1
UN  10.77.0.235  111.41 KB  256     33.3%  88a7616c-36b9-4aa0-9ddc-db24ad76115c  rack1
                </pre>
</li>
</ul></div>
<p>
        </p>
</li>
</ol></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="new_installation.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="new_installation.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="install.analytics_nodes.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 9. New Installation - All Configurations </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 9.3. Configure the Analytics Nodes</td>
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
