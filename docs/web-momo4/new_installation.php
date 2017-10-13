<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 9. New Installation - All Configurations</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="installation">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.installing.php" title="Part II. Installing Momentum">
<link rel="prev" href="install_upgrade_packages.php" title="Chapter 8. Install / Upgrade the Packages">
<link rel="next" href="install.configure_cassandra.php" title="9.2. Configure the Cassandra Nodes">
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
<tr><th colspan="3" align="center">Chapter 9. New Installation - All Configurations</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="install_upgrade_packages.php">Prev</a> </td>
<th width="60%" align="center">Part II. Installing Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="install.configure_cassandra.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="new_installation"></a>Chapter 9. New Installation - All Configurations</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="new_installation.php#install.mta_node">9.1. Configure Your MTA Nodes</a></span></dt>
<dt><span class="section"><a href="install.configure_cassandra.php">9.2. Configure the Cassandra Nodes</a></span></dt>
<dt><span class="section"><a href="install.analytics_nodes.php">9.3. Configure the Analytics Nodes</a></span></dt>
<dt><span class="section"><a href="install.start_remaining_services.php">9.4. Start Remaining Services</a></span></dt>
</dl>
</div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      <span class="bold"><strong>The installation and upgrade instructions
      in Chapters 8 through 11 are only applicable in their entirety
      for Momentum 4.x releases prior to 4.2.28.</strong></span>
      For release 4.2.28 and beyond, please refer to the installation
      and upgrade PDF documents available under the desired release's
      folder on the Message Systems Support website's
      <a class="link" href="https://support.messagesystems.com/start.php/" target="_top">Downloads page</a>.
      If you are uncertain as to which document is applicable to your
      situation, please contact your technical support representative.
    </p>
</div>
<p>
    This section documents the installation procedures for use in either a
    local or Amazon Web Services (AWS) environment.
    This installation can be scaled for a variety of
    installation configurations, including singlenode, a cluster with
    three combined Platform and Analytics nodes, and two-tiered
    topologies that have multiple Platform and multiple, separate
    Analytics nodes.
  </p>
<p>
    <span class="bold"><strong>NOTE:</strong></span> If you are installing a
    <span class="bold"><strong>three node combined (or similar) topology</strong></span>,
    each node serves all roles: each node is an MTA node <span class="bold"><strong>and</strong></span>
    a Cassandra node <span class="bold"><strong>and</strong></span> an Analytics node.
  </p>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="install.mta_node"></a>9.1. Configure Your MTA Nodes</h2></div></div></div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.mta_prep"></a>9.1.1. Configuration Preparation Steps for the First MTA</h3></div></div></div>
<p>
        The first node in a cluster requires the installation and
        configuration of some additional services. It is also a
        convenient place to set up stub files that will make the rest of
        the configuration go much faster.
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Ensure you have valid Momentum licenses installed on each
            system in
            <code class="filename">/opt/msys/ecelerity/etc/license</code>. If
            your license has been issued and your server has external
            connectivity, you can run the following command to pull your
            license:
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/ecelerity/bin/ec_lic
</pre>
<p>
          </p>
<p>
            For more information, see
            <a class="xref" href="before_you_begin.php#byb.msg.gen.license" title="6.1. Momentum License">Section 6.1, “Momentum License”</a>.
          </p>
</li>
<li class="listitem">
<p>
            Execute the commands below to create a random service password file named
            <code class="filename">.svcpasswd</code> that can be used by the
            various services to access the database. The commands will store the password
            in a file on the disk on the first node, then have you copy it to
            <span class="bold"><strong>all</strong></span> Platform nodes (in the same location).
          </p>
<p>
            Additionally, logging into the console remotely or making
            manual changes and committing them to the shared config
            repository requires an additional username/password
            combination. By convention, this user is "admin" but you can
            use any username you want by making the appropriate change in
            the below <code class="literal">export ADMINPASS</code> commands:
          </p>
<p>
            Execute the following commands on the first MTA node only:
</p>
<pre class="screen">
mkdir -p /opt/msys/etc
&lt; /dev/urandom tr -dc _A-Z-a-z-0-9 | head -c8 \
  &gt; /opt/msys/etc/.svcpasswd
export SVCPASSWD=`cat /opt/msys/etc/.svcpasswd`
export ADMINPASS=admin
</pre>
<p>
            Execute the following commands on each of the remaining MTA nodes::
</p>
<pre class="screen">
mkdir -p /opt/msys/etc
scp -p <em class="replaceable"><code>mta1.yourdomain.com</code></em>:/opt/msys/etc/.svcpasswd /opt/msys/etc
export SVCPASSWD=`cat /opt/msys/etc/.svcpasswd`
export ADMINPASS=admin
</pre>
<p>

          </p>
</li>
<li class="listitem">
<p>
            Create the PostgreSQL database host file. Ecelerity requires
            a PostgreSQL database for console authentication and other
            minor modules. This is a very low usage database that is
            installed on the first node for simplicity.
          </p>
<p>
</p>
<pre class="screen">
echo $HOSTNAME &gt; /opt/msys/etc/.dbhost
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Configure PostgreSQL with the <code class="filename">ecelerity</code>
            schema.

</p>
<pre class="screen">
service msyspg start
sleep 40
cd /opt/msys/ecelerity/etc
../bin/init_schema --password $SVCPASSWD --admin-password $ADMINPASS
</pre>
<p>

            You should see something like this:

</p>
<pre class="screen">
Loading sql/common.sql into common...done!
Loading sql/console.sql into console...done!
Loading sql/returnpath.sql into returnpath...done!
Loading sql/seedlist.sql into seedlist...done!
Loading sql/adaptive.sql into adaptive...done!              
            </pre>
<p>
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              If there were any problems creating the ecelerity database
              in PostgreSQL invoke:

</p>
<pre class="screen">/opt/msys/3rdParty/bin/dropdb -U ecuser ecelerity</pre>
<p>

              Then try to run <code class="filename">init_schema</code> again.
            </p>
</div>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.two_tier.configuration.ecelerity"></a>9.1.2. Configure Ecelerity</h3></div></div></div>
<p>
        In this section's following numbered steps, you will configure Ecelerity
        <span class="bold"><strong>on the first node only</strong></span>.

        </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
              Start the Ecelerity configuration server,
              <code class="filename">ecconfigd</code>.
            </p>
<p>
              <code class="filename">ecconfigd</code> is used with
              <code class="filename">eccfg</code> to maintain a clusterwide
              configuration using Subversion (and Apache). The ecconfigd
              server is installed on the first MTA node and does not
              rely on any other service being installed or active.
            </p>
</li>
<li class="listitem"><p>
              Check out (bootstrap) the initial ecelerity configuration.
            </p></li>
<li class="listitem"><p>
              Modify the cluster configuration (unless you are
              installing a Single Node).
            </p></li>
<li class="listitem"><p>
              Configure message generation.
            </p></li>
<li class="listitem">
<p>
              Create the ecdb datasource.
            </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                If you are going to manage the cluster-wide
                configuration with your own management tools, continue
                with the instructions to configure the first Platform
                node using <code class="option">ecconfigd</code>. Then disable
                <code class="option">eccfg</code> and <code class="option">ecconfigd</code>,
                import the files into your management package, and
                ensure that the configuration is identical on all
                Platform nodes.
              </p>
</div>
</li>
</ul></div>
<p>

        </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
              Configure and start ecconfigd.
            </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                  Edit
                  <code class="filename">/opt/msys/ecelerity/etc/ecconfigd.conf</code>.
                </p>
<p>
                  Replace

</p>
<pre class="screen">UseCanonicalName DNS</pre>
<p>

                  with

</p>
<pre class="screen">ServerName <em class="replaceable"><code>mta1.yourdomain.com</code></em></pre>
<p>

                  and comment out the following line:

</p>
<pre class="screen">Include "/opt/msys/etc/installer/ecconfigd.d/*.conf"</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Copy the service password to your clipboard so that is
                  it easily accessible for upcoming commands.
                </p>
<p>
</p>
<pre class="screen">
echo $SVCPASSWD
</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Format the password for Subversion. Enter or paste the
                  service password when prompted.
                </p>
<p>
</p>
<pre class="screen">
/opt/msys/ecelerity/bin/create_ssl_cert ecconfigd $HOSTNAME /var/ecconfigd/apache
# htdigest prompts for the password twice and does not support shell redirection
# make sure you copied the service password into your clipboard, i.e. the
# contents of $SVCPASSWD, which we just copied above
/opt/msys/3rdParty/apache/sbin/htdigest -c /var/ecconfigd/repo/svn-auth.htdigest \
  "ecconfigd repo" ecuser
</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Configure the admin user. Enter or paste the admin
                  password when prompted.
                </p>
<p>
</p>
<pre class="screen">
# Use your admin password here (typically "admin", i.e. the contents of $ADMINPASS)
echo $ADMINPASS
/opt/msys/3rdParty/apache/sbin/htdigest /var/ecconfigd/repo/svn-auth.htdigest \
  "ecconfigd repo" admin
</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Start up the ecconfigd service to complete the
                  ecconfigd setup.
                </p>
<p>
</p>
<pre class="screen">
service ecconfigd start
</pre>
<p>
                </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
              Bootstrap the initial ecelerity configuration repository.
            </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                  Set the proper permissions on the directory

</p>
<pre class="screen">
cd /opt/msys/ecelerity/etc
chmod g+ws .
</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  If you are installing multiple MTA nodes, then invoke

</p>
<pre class="screen">
/opt/msys/ecelerity/bin/eccfg bootstrap --clustername default \
  --username admin --password $ADMINPASS
</pre>
<p>
                </p>
<p>
                  Otherwise, if you are installing a singlenode
                  instance, then invoke

</p>
<pre class="screen">
/opt/msys/ecelerity/bin/eccfg bootstrap --singlenode \
  --username admin --password $ADMINPASS
</pre>
<p>
                </p>
<p>
                  Your results should look like this:
                </p>
<p>
</p>
<pre class="screen">
A    /opt/msys/ecelerity/etc/conf/default
A    /opt/msys/ecelerity/etc/conf/default/ecelerity.conf
A    /opt/msys/ecelerity/etc/conf/default/mobile.conf
A    /opt/msys/ecelerity/etc/conf/default/common.conf
A    /opt/msys/ecelerity/etc/conf/default/eccluster.conf
A    /opt/msys/ecelerity/etc/conf/default/messagescope.conf
A    /opt/msys/ecelerity/etc/conf/default/messagescope_remediation.conf
A    /opt/msys/ecelerity/etc/conf/default/ecelerity-cluster.conf
</pre>
<p>
                </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                    If there is an error during this step, you can move
                    the
                    <code class="filename">/opt/msys/ecelerity/etc/conf</code> to
                    a different location such as
                    <code class="filename">/tmp</code>, try to correct possible
                    errors above and try to bootstrap a second time.
                  </p>
</div>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
              Update the <code class="filename">msgc_server.conf</code> cluster
              configuration file.
            </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                Skip this step if you are installing a single node
                instance.
              </p>
</div>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                  Copy the <code class="filename">msgc_server.conf</code> file to
                  the appropriate location.
                </p>
<p>
</p>
<pre class="screen">
cp /opt/msys/ecelerity/etc/sample-configs/default/msgc_server.conf /opt/msys/ecelerity/etc/conf/global/
</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Edit the following lines in
                  <code class="filename">/opt/msys/ecelerity/etc/conf/global/msgc_server.conf</code>.
                  For EACH MTA node that you are installing, substitute
                  the hostnames and IP addresses as appropriate.
                </p>
<p>
</p>
<pre class="screen">
msgc_server {
   peers = [
     mta1.yourdomain.com = "10.77.0.219"
     mta2.yourdomain.com = "10.77.1.6"
       ...
     mtaN.yourdomain.com = "10.77.1.10"
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
              Update the <code class="filename">msg_gen.conf</code> configuration
              file.
            </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                  Copy the <code class="filename">msg_gen.conf</code> file to the
                  appropriate location.
                </p>
<p>
</p>
<pre class="screen">
cp /opt/msys/ecelerity/etc/sample-configs/default/msg_gen.conf /opt/msys/ecelerity/etc/conf/default/
</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Edit the following lines in the
                  <code class="option">cassandra_client</code> stanza in
                  <code class="filename">/opt/msys/ecelerity/etc/conf/default/msg_gen.conf</code>,
                  substituting your <span class="bold"><strong>Cassandra
                  hostnames</strong></span> (which may be the same hostnames
                  as your MTA nodes) as appropriate.
                </p>
<p>
</p>
<pre class="screen">
cassandra_client {
  uri = (
         "name=cassandra_db;host=<em class="replaceable"><code>cass1.yourdomain.com</code></em>;port=9160"
         "name=cassandra_db;host=<em class="replaceable"><code>cass2.yourdomain.com</code></em>;port=9160"
            ...
         "name=cassandra_db;host=<em class="replaceable"><code>cassN.yourdomain.com</code></em>;port=9160"
  )
}
</pre>
<p>
                </p>
<p>
                  In the same file, edit the following lines in the
                  <code class="option">msg_gen</code> stanza, again substituting
                  your hostnames as appropriate.
                </p>
<p>
</p>
<pre class="screen">
msg_gen {
  engagement_tracking_host = "__EXTERNAL_DNS_HOSTNAME__:81"
  cluster_cfg = true
  node <em class="replaceable"><code>mta1.yourdomain.com</code></em> { mta_id = 1  votes = 1 }
  node <em class="replaceable"><code>mta2.yourdomain.com</code></em> { mta_id = 2  votes = 1 }
     ...
  node <em class="replaceable"><code>mtaN.yourdomain.com</code></em> { mta_id = n  votes = 1 }
}
</pre>
<p>
                </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
              Update the <code class="filename">eccluster.conf</code> file.
            </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                  Create an
                  <code class="filename">/opt/msys/ecelerity/etc/conf/default/ecdb.conf</code>
                  with the database source information.
                </p>
<p>
</p>
<pre class="screen">
cat &lt;&lt; EOT &gt; /opt/msys/ecelerity/etc/conf/default/ecdb.conf
Datasource "ecdb" { uri = ( "pgsql:host=$HOSTNAME;dbname=ecelerity;user=ecuser;password=$SVCPASSWD" ) }
EOT
                </pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Replace the following line in the
                  <code class="filename">/opt/msys/ecelerity/etc/conf/default/eccluster.conf</code>
                  file:
                </p>
<p>
</p>
<pre class="screen">
readonly_include "/opt/msys/etc/installer/eccmgr.d/ecdb.conf"
</pre>
<p>
                </p>
<p>
                  With this line:
                </p>
<p>
</p>
<pre class="screen">
readonly_include "ecdb.conf"
</pre>
<p>
                </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
              Update the <code class="filename">/opt/msys/ecelerity/etc/conf/default/ecelerity.conf</code>
              configuration file and commit to the repository.
            </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                  Replace this line:
                </p>
<p>
</p>
<pre class="screen">
readonly_include "/opt/msys/etc/installer/ecelerity.d/"
</pre>
<p>
                </p>
<p>
                  With this line:
                </p>
<p>
</p>
<pre class="screen">
readonly_include "ecdb.conf"
</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Remove the comment character (#) in these TWO lines.
                </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                    If you are performing a singlenode install, then you
                    should only uncomment the
                    <code class="filename">msg_gen.conf</code> line.
                  </p>
</div>
<p>
</p>
<pre class="screen">
# include “msg_gen.conf"
# include "ecelerity-cluster.conf”
</pre>
<p>
                </p>
</li>
<li class="listitem">
<p>
                  Commit the changes.
                </p>
<p>
</p>
<pre class="screen">
/opt/msys/ecelerity/bin/eccfg commit --username admin --password $ADMINPASS \
    --add-all --message "Including cluster config and msg_gen config"
                </pre>
<p>
                </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
              Test the ecelerity configuration. Hit Enter at the first
              Password: prompt, then enter your admin/ADMINPASS user
              name and password when prompted.
            </p>
<p>
</p>
<pre class="screen">
$  /opt/msys/ecelerity/bin/ec_console shim://
# hit enter to get a Username: prompt and use admin/ADMINPASS
# Once you are logged-in you should get a "&gt;" prompt, and be able to type many commands such
# as "version" and "summary"
quit
</pre>
<p>
            </p>
</li>
</ol></div>
<p>
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.two_tier.configuration.rabbitmq"></a>9.1.3. Configure RabbitMQ</h3></div></div></div>
<p>
        Configure RabbitMQ <span class="bold"><strong>on all
        MTA nodes</strong></span>.

        </p>
<div class="orderedlist"><ol class="orderedlist" type="1"><li class="listitem">
<p>
              Configure RabbitMQ.
            </p>
<p>
</p>
<pre class="screen">
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
</li></ol></div>
<p>
      </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.two_tier.configuration.nginx"></a>9.1.4. Configure NGINX</h3></div></div></div>
<p>
        On the MTA nodes, an NGINX process acts as a proxy/load balancer
        for various API endpoints. In this section, you will configure
        NGINX for the MTAs. You will create and/or edit the following files
        on the first MTA node, and then copy selected ones to the remaining MTA nodes.
        If you are installing on combined (MTA + Analytics) nodes, remember that
        every node in the cluster is both an MTA and an Analytics node.
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/click_proxy_upstream.conf</code>
            (port 2081)
          </p></li>
<li class="listitem"><p>
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/momo_upstream.conf</code>
            (port 2081)
          </p></li>
<li class="listitem"><p>
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/webui_upstream.conf</code>
            (port 2082)
          </p></li>
<li class="listitem"><p>
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_metrics_upstream.conf</code>
            (port 2083)
          </p></li>
<li class="listitem"><p>
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf</code>
            (port 2084)
          </p></li>
<li class="listitem"><p>
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_users_upstream.conf</code>
            (port 2085)
          </p></li>
<li class="listitem"><p>
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf</code>
            (port 2086)
          </p></li>
</ul></div>
<p>
        In each file, you will edit the associated “upstream
        stanza”. <span class="bold"><strong>Take special note of the corresponding ports that are
        used in each configuration file</strong></span>.
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
            Copy the files above from the
            <code class="filename">/opt/msys/ecelerity/etc/sample-configs/nginx/</code>
            directory to the
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d</code>
            directory. These provide templates for your changes and already have
            the correct upstream stanza names and ports.
          </p></li>
<li class="listitem">
<p>
            The <code class="filename">click_proxy_upstream.conf</code> file
            determines the routing for incoming click and open requests.
            Edit the <code class="option">upstream click_proxy</code> stanza to
            point to <span class="bold"><strong>all MTA nodes</strong></span> on
            <span class="bold"><strong>port 2081</strong></span> that are
            participating in click and open tracking.
          </p>
<p>
</p>
<pre class="screen">
# Example
# cat &gt; /opt/msys/3rdParty/nginx/conf.d/click_proxy_upstream.conf
upstream click_proxy {
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
            Analytics nodes in your cluster, along with the proper port
            (shown in parentheses above). These configuration files
            determine the routing for incoming API calls.
          </p>
<p>
            For example, edit the <code class="option">upstream api_webhooks</code>
            stanza to include <span class="bold"><strong>all Analytics
            nodes</strong></span> so that the MTA ETL processes can make
            Webhooks API requests on <span class="bold"><strong>port
            2084</strong></span>. The remaining files are nearly identical
            except for the name of the upstream stanza and the port
            associated with the server. The name of the upstream stanza
            for each file is same as the leading portion of the filenaming convention, i.e.
            <em class="replaceable"><code>upstream_stanza_name</code></em><code class="literal">_upstream.conf</code>.
            <code class="filename">momo_upstream.conf</code> is the exception, where the stanza is
            <code class="literal">momo-rest</code>.
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
<li class="listitem"><p>
            When using the client IP address feature for reporting, add
            any external load balancer's IP addresses to the
            <code class="filename">external.lb</code> file, one per line quoted.
          </p></li>
<li class="listitem">
<p>
            If not installing a combined node and
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_webhooks.conf</code>
            does not exist, create it with the following contents.
          </p>
<pre class="screen">
          server {
            listen 2084;
            server_name _;

            location /api/v1/webhooks {
              proxy_pass http://api_webhooks;
            }
          }
          </pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
            Before starting nginx on a combined node, you must remove the
            <code class="filename">/opt/msys/3rdParty/nginx/conf.d/api_webhooks.conf</code>
            file (if it exists), which contains <code class="literal">listen 2084</code>.
          </p>
</div>
</li>
<li class="listitem">
<p>
            Test the nginx configuration.
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
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.two_tier.configuration.etl_webhooks"></a>9.1.5. Configure ETL and Webhooks Agents</h3></div></div></div>
<p>
        There are several agents on the MTA nodes that transfer data to
        the Analytics nodes for further processing and storage.
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1"><li class="listitem">
<p>
            Configure the ETL processes on the MTAs.
          </p>
<p>
            Create the ETL <code class="filename">production.json</code> files,
            as shown below (substituting appropriate Analytics
            hostnames) in these directories on the first MTA node:

            </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                  <code class="filename">/opt/msys/app/adaptive-delivery-etl/config</code>
                </p></li>
<li class="listitem"><p>
                  <code class="filename">/opt/msys/app/metrics-etl/config</code>
                </p></li>
<li class="listitem"><p>
                  <code class="filename">/opt/msys/app/webhooks-etl/config</code>
                </p></li>
</ul></div>
<p>
          </p>
<p>
</p>
<pre class="screen">
# Example
# cat &gt; /opt/msys/app/metrics-etl/config/production.json
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
<div class="note">
<h3 class="title">Note</h3>
<p>
               Your final <code class="filename">production.json</code> files must not
               have any comment lines in them, and the last line within the
               <code class="literal">hosts</code> stanza must not have a comma at the end.
            </p>
</div>
</li></ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="install.remaining_mta_nodes"></a>9.1.6. Configure Remaining MTA Nodes</h3></div></div></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
          Be sure to repeat the steps in this section on
          <span class="bold"><strong>all</strong></span> remaining platform nodes.
        </p>
</div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p><a name="install.copy_config_files"></a>
            To ease configuration of remaining MTA nodes, copy the
            following configuration files to ALL remaining MTA nodes
            FROM the first MTA node
          </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Create and copy <code class="filename">initialnode.txt</code> to
                each of the remaining MTAs:
              </p>
<p>
</p>
<pre class="screen">
echo $HOSTNAME &gt;/var/tmp/initialnode.txt
scp /var/tmp/initialnode.txt mtaN.yourdomain.com:/var/tmp
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Copy the Ecelerity configuration files to the remaining
                MTA nodes.
              </p>
<p>
</p>
<pre class="screen">
scp -r /opt/msys/ecelerity/etc mtaN.yourdomain.com:/opt/msys/ecelerity
</pre>
<p>
              </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                  Because this overwrites the license files on the
                  target nodes, you may need to then remove the files and then
                  re-pull them using the command
                </p>
<p>
</p>
<pre class="screen">
/opt/msys/ecelerity/bin/ec_lic -f
</pre>
<p>
                </p>
</div>
</li>
<li class="listitem">
<p>
                Copy two NGINX configuration files to the remaining MTA
                nodes.
              </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                  Combined nodes will ultimately require additional of the NGINX
                  configuration files to be copied to the remaining nodes in order
                  to support their Anaytics functions. You may choose to do that now,
                  if applicable, or when those steps are covered in section
                  <a class="xref" href="install.analytics_nodes.php#install.remaining_analytics_nodes" title="9.3.2. Configure the Remaining Analytics Nodes by Copying Files">Section 9.3.2, “Configure the Remaining Analytics Nodes by Copying Files”</a>
                </p>
</div>
<p>
</p>
<pre class="screen">
cd /opt/msys/3rdParty/nginx/conf.d
scp click_proxy_upstream.conf api_webhooks_upstream.conf mtaN.yourdomain.com:/opt/msys/3rdParty/nginx/conf.d
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Copy the <code class="filename">production.json</code>
                configuration files to all remaining MTA nodes.
              </p>
<p>
</p>
<pre class="screen">
 # Do this for EACH MTA HOSTNAME
 cd /opt/msys/app
 find . -name production.json | xargs tar cf - | ssh -l root mta2.yourdomain.com cd $PWD \; tar xf -
 </pre>
<p>
              </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
            Log onto each remaining MTA node in the cluster and
            bootstrap the ecelerity configuration repo.
          </p>
<p>
</p>
<pre class="screen">
export INITIALNODE=`cat /var/tmp/initialnode.txt`
export ADMINPASS=admin
cd /opt/msys/ecelerity/etc
chgrp -R ecuser .
chmod g+ws .
chmod -R g+w .
/opt/msys/ecelerity/bin/eccfg bootstrap --clustername default -u admin -p $ADMINPASS $INITIALNODE
</pre>
<p>
          </p>
</li>
<li class="listitem"><p>
            For each remaining MTA node, test Ecelerity configuration
            exactly as you did on the first MTA node as described in
            Step #7 of section
            <a class="xref" href="new_installation.php#install.two_tier.configuration.ecelerity" title="9.1.2. Configure Ecelerity">Section 9.1.2, “Configure Ecelerity”</a>.
          </p></li>
<li class="listitem"><p>
            If not already done so in section
            <a class="xref" href="new_installation.php#install.two_tier.configuration.rabbitmq" title="9.1.3. Configure RabbitMQ">Section 9.1.3, “Configure RabbitMQ”</a>,
            log onto each remaining MTA node and configure RabbitMQ
            exactly as you did on the first MTA node as described in
            that section.
          </p></li>
</ol></div>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="install_upgrade_packages.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.installing.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="install.configure_cassandra.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 8. Install / Upgrade the Packages </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 9.2. Configure the Cassandra Nodes</td>
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
