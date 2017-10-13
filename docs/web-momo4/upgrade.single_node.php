<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 10. Upgrade - Single Node</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.installing.php" title="Part II. Installing Momentum">
<link rel="prev" href="install.start_remaining_services.php" title="9.4. Start Remaining Services">
<link rel="next" href="upgrade.single_node.vertica_updates.php" title="10.2. Vertica Updates">
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
<tr><th colspan="3" align="center">Chapter 10. Upgrade - Single Node</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="install.start_remaining_services.php">Prev</a> </td>
<th width="60%" align="center">Part II. Installing Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="upgrade.single_node.vertica_updates.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="upgrade.single_node"></a>Chapter 10. Upgrade - Single Node</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="section"><a href="upgrade.single_node.php#upgrade.single_node.preparation">10.1. Preparation</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.vertica_updates.php">10.2. Vertica Updates</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.flyway.php">10.3. Prepare and Run Flyway</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.config_all__nodes.php">10.4. Configuration Changes</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.software_upgrade.php">10.5. Software Upgrade</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.webui.php">10.6. Update Web UI Configuration</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.start_services.php">10.7. Start Services</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.complete_setup.php">10.8. Complete the Software Set Up</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.next_steps.php">10.9. Next Steps</a></span></dt>
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
<a class="indexterm" name="idp1218512"></a><p>
    This section documents the upgrade procedures for a local single
    node with both Platform and Analytics functionality.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      Although this is a single node installation, the documentation
      will sometimes refer to Platform and Analytics nodes as if there
      were more than one. This helps the function of each NGINX file
      remain clear in this single node context.
    </p>
</div>
<p>
    This documentation is primarily intended for users who want to
    upgrade Momentum on their own cluster using a copy-and-paste
    procedure.
  </p>
<p>
    If you have properly prepared for the upgrade and follow all
    instructions carefully, the copy-and-paste procedure should take
    approximately two hours to complete.
  </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      You can only perform the upgrade from Momentum 4.1-HF4. If you are
      running a version of Momentum prior to 4.1-HF4, you must first
      upgrade to that version, then upgrade to Momentum 4.2. In
      addition, you must complete the upgrade in a single session.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="upgrade.single_node.preparation"></a>10.1. Preparation</h2></div></div></div>
<p>
      This installation type assumes your node is offline until the
      upgrade completes.
    </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
        You must ensure all generation submissions are stopped and wait
        for the in progress generations to complete. Then continue with
        the upgrade steps.
      </p>
</div>
<p>
      Perform the following steps to prepare for the Momentum upgrade
      and to upgrade Cassandra and Ecelerity.
    </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="upgrade.single_node.preparation.prepare_all_nodes"></a>10.1.1. Prepare the Node</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem"><p>
            Ensure that you have downloaded and installed the software
            on the node. For more information, refer to
            <a class="xref" href="download_bundle.php" title="Chapter 7. Download the Software Bundle and Prepare">Chapter 7, <i>Download the Software Bundle and Prepare</i></a>.
          </p></li>
<li class="listitem">
<p>
            Untar/unzip the bundle.
          </p>
<p>
</p>
<pre class="screen">
tar -xvzf momentum-bundle-4.2.1.50062.rhel6.x86_64.tar.gz
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Change to the bundle directory.
          </p>
<p>
</p>
<pre class="screen">
cd momentum-4.2.1.50062
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Add the local yum repository to upgrade Momentum.
          </p>
<p>
</p>
<pre class="screen">
./setrepodir -i
</pre>
<p>
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="upgrade.single_node.preparation.upgrade_cassandra"></a>10.1.2. Upgrade Cassandra</h3></div></div></div>
<p>
        Upgrade Cassandra from version 2.0.8 to 2.0.15.
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Prepare the database for a snapshot.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              The size of your snapshot will depend on the size of your
              instance. If you do not have enough space available to
              create a snapshot, this command will fail.
            </p>
</div>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Check the Cassandra node status and confirm the
                cassandra node is up and normal.
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
                Compact and flush the database.
              </p>
<p>
</p>
<pre class="screen">
/opt/msys/3rdParty/cassandra/bin/nodetool flush
/opt/msys/3rdParty/cassandra/bin/nodetool compact
/opt/msys/3rdParty/cassandra/bin/nodetool flush
/opt/msys/3rdParty/cassandra/bin/nodetool enableautocompaction
</pre>
<p>
              </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
            Perform a Cassandra global snapshot of all keyspaces.
          </p>
<p>
</p>
<pre class="screen">
/opt/msys/3rdParty/cassandra/bin/nodetool snapshot
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Perform the remaining Cassandra upgrade steps.
          </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Drain and remove the node from the Cassandra cluster.
              </p>
<p>
</p>
<pre class="screen">
/opt/msys/3rdParty/cassandra/bin/nodetool drain
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Stop the Cassandra service.
              </p>
<p>
</p>
<pre class="screen">
service msys-cassandra stop
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Backup the Cassandra configuration files. This is an
                optional step; no changes should need to be merged into
                the new configuration files, but it is good practice to
                perform a backup.
              </p>
<p>
</p>
<pre class="screen">
pushd /opt/msys/3rdParty/cassandra
tar -cf ~/cassandra_conf_2_0_8.tar conf
popd
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Upgrade the Cassandra Redhat Package Manager (RPM). Be
                sure to run this command from the directory containing
                the bundle.
              </p>
<p>
</p>
<pre class="screen">
yum --disablerepo=* --enablerepo=momentum upgrade msys-cassandra
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Compare the new configuration with the backup.
                Differences such as comments, jmver, and JVM variables
                are fine, and you should not have to merge or replace
                anything at this point.
              </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                  Significant differences indicate a problem. If this
                  occurs, you need to correct the issue before
                  continuing. If you cannot correct the issue, revert to
                  your backup.
                </p>
</div>
<p>
</p>
<pre class="screen">
pushd ~
tar -xvf cassandra_conf_2_0_8.tar
diff -r conf /opt/msys/3rdParty/cassandra/conf
popd
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Start Cassandra.
              </p>
<p>
</p>
<pre class="screen">
service msys-cassandra start
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
<a name="upgrade.single_node.preparation.db_rpms"></a>10.1.3. Upgrade DB RPMs</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Uninstall <code class="option">msys-app-users</code>. Erasing the old
            RPM ensures there will be no conflict with the new RPM.
          </p>
<p>
</p>
<pre class="screen">
yum erase msys-app-users
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Install the DB RPMs.
          </p>
<p>
</p>
<pre class="screen">
yum install --disablerepo=* --enablerepo=momentum msys-app msys-app-users-db msys-app-users-api  \
msys-app-metrics-db msys-app-webhooks-batch-db msys-app-webhooks-db msys-app-adaptive-delivery-db
</pre>
<p>
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              If you receive a message indicating that boost-devel is
              not installed, run the following command and then repeat
              the command to install the DB RPMs.
            </p>
<p>
</p>
<pre class="screen">
yum install boost-devel
</pre>
<p>
            </p>
</div>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="upgrade.single_node.preparation.upgrade_vertica"></a>10.1.4. Upgrade Vertica</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Stop services.
          </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Stop metrics.
              </p>
<p>
</p>
<pre class="screen">
service msys-app-metrics-etl stop
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Stop the Webhooks API.
              </p>
<p>
</p>
<pre class="screen">
service msys-app-webhooks-api stop
</pre>
<p>
              </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
            Backup the database.
          </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Get the Vertica node hosts.
              </p>
<p>
</p>
<pre class="screen">
echo "select node_name, host_name from node_resources;" |  /opt/vertica/bin/vsql -U vertica_dba
</pre>
<p>
              </p>
<p>
                Your results should look something like this:
              </p>
<p>
</p>
<pre class="screen">
#Output:
#  node_name      |  host_name
#-----------------+-------------
# v_msys_node0001 | <em class="replaceable"><code>10.77.0.158</code></em>
</pre>
<p>
              </p>
<p>
                Use the IP address displayed in your output in the
                following commands.
              </p>
</li>
<li class="listitem">
<p>
                Create a <code class="filename">backups</code> directory and set
                up <code class="literal">known_hosts</code>.
              </p>
<p>
</p>
<pre class="screen">
su vertica_dba
cd ~
mkdir backups
ssh <em class="replaceable"><code>10.77.0.158</code></em> # answer yes and exit right away
exit # go back to the root user
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Create a configuration file for backup.
              </p>
<p>
</p>
<pre class="screen">
su vertica_dba
cd ~
/opt/vertica/bin/vbr.py --setupconfig
</pre>
<p>
              </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                  If you run into issues or need to restore the backup,
                  please refer to the
                  <a class="link" href="http://my.vertica.com/docs/7.1.x/PDF/HP_Vertica_7.1.x_AdministratorsGuide.pdf" target="_top">
                  HP Vertica Administrators Guide</a>
                </p>
</div>
</li>
<li class="listitem">
<p>
                Answer the following prompts, substituting your IP
                addresses where appropriate. Please note that host names
                must be entered as IP addresses. Hit
                <span class="guibutton">Enter</span> to accept the default
                value.
              </p>
<p>
</p>
<pre class="screen">
Snapshot name (backup_snapshot): upgrade-backup
Backup vertica configurations? (n) [y/n]: y
Number of restore points (1):
Specify objects (no default):
Vertica user name (vertica_dba):
Save password to avoid runtime prompt? (n) [y/n]: y
Password to save in vbr config file (no default):
Node v_msys_node0001
Backup host name (no default): <em class="replaceable"><code>10.77.0.125</code></em>
Backup directory (no default): /var/db/vertica/backups
Config file name (upgrade-backup.ini):
Change advanced settings? (n) [y/n]: n
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Verify the <code class="filename">upgrade-backup.ini</code> file
                (with your host names included).
              </p>
<p>
</p>
<pre class="screen">
cat upgrade-backup.ini
</pre>
<p>
              </p>
<p>
                Your results should look something like this:
              </p>
<p>
</p>
<pre class="screen">
[Misc]
snapshotName = upgrade-backup
verticaConfig = True
restorePointLimit = 1
 
[Database]
dbName = msys
dbUser = vertica_dba
 
[Transmission]
 
[Mapping]
v_msys_node0001 = <em class="replaceable"><code>42upgrade-1.dev.int.messagesystems.com</code></em>:/var/db/vertica/backups
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Ensure the <code class="filename">/var/db/vertica/backups</code>
                directory was created by user vertica_dba, then run the
                backup.
              </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vbr.py -t backup --config-file upgrade-backup.ini
</pre>
<p>
              </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
            Stop the Vertica process (as root).
          </p>
<p>
</p>
<pre class="screen">
# exit #if running as vertica_dba, exit to get to root
service msys-vertica stop
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Upgrade Vertica.
          </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Upgrade the RPM (substituting the appropriate package
                number). Answer <code class="literal">yes</code> when prompted.
              </p>
<p>
</p>
<pre class="screen">
cd /var/tmp/momentum-4.2.1.50062
yum --disablerepo=* --enablerepo=momentum upgrade msys-vertica
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Set up the upgrade options.
              </p>
<p>
</p>
<pre class="screen">
export VERT_CONF='/opt/vertica/config'
export RPMFILE=`/bin/ls $PWD/packages/msys-vertica* | fgrep -v client`
cat &lt;&lt; EOF &gt; ../silent_install
accept_eula = True
data_dir = /var/db/vertica
direct_only = True
failure_threshold = FAIL
license_file = $VERT_CONF/licensing/Message_Systems_vertica.license.key
rpm_file_name = $RPMFILE
spread_subnet = default
vertica_dba_group = verticadba
vertica_dba_user = vertica_dba
vertica_dba_user_dir = /var/db/vertica
vertica_dba_user_password_disabled = True
EOF
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Run the Vertica upgrade utility.
              </p>
<p>
</p>
<pre class="screen">
export VERT_BIN='/opt/vertica/bin'
export VERT_SBIN='/opt/vertica/sbin'
$VERT_SBIN/update_vertica -z ../silent_install 2&gt;&amp;1 | tee ../vertica_update.log
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Start Vertica. Enter your password when prompted.
              </p>
<p>
</p>
<pre class="screen">
service msys-vertica start
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
<a name="upgrade.single_node.preparation.ecelerity"></a>10.1.5. Upgrade Ecelerity and the Cassandra Interface</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            The following steps connect Ecelerity and Cassandra. Perform
            them in the order shown below.
          </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
                Upgrade the RPM packages with yum (this includes all
                Momentum and third party packages).
              </p>
<p>
</p>
<pre class="screen">
yum --disablerepo=* --enablerepo=momentum upgrade
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Set up Cassandra-Momentum compatibility (i.e, the
                Cassandra schema to be used).
              </p>
<p>
</p>
<pre class="screen">
/opt/msys/ecelerity/bin/cassandra_momo_setup.sh --singlenode /opt/msys/ecelerity/etc
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Start ecconfigd.
              </p>
<p>
</p>
<pre class="screen">
service ecconfigd start
</pre>
<p>
              </p>
</li>
<li class="listitem">
<p>
                Start Momentum.
              </p>
<p>
</p>
<pre class="screen">
service ecelerity start
</pre>
<p>
              </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                  If Ecelerity fails to start due to a licensing issue,
                  copy your license to the
                  <code class="filename">/opt/msys/ecelerity/etc/license</code>
                  file on all nodes.
                </p>
</div>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
            Modify the
            <code class="filename">populate_customer_metadata.cql</code> file to
            apply the Cassandra schema.
          </p>
<p>
</p>
<pre class="screen">
sed -i 's/, sending_disabled//' /opt/msys/app/users-api/cql/upgrades/V2015.01.20_02.00.00__populate_customer_metadata.cql
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Apply the Users API schema changes.
          </p>
<p>
</p>
<pre class="screen">
export UPG=/opt/msys/app/users-api/cql/upgrades
export CQLSH=/opt/msys/3rdParty/bin/cqlsh
$CQLSH -k authentication -f $UPG/V2015.01.20_00.00.00__create_customer_metadata.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.01.20_01.00.00__extract_customers.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.01.20_02.00.00__populate_customer_metadata.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.01.21_00.00.00__add_terms_of_use_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.04.09_00.00.00__create_unsuccessful_logins.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.04.10_00.00.00__two_factor.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.04.28_00.00.00__add_is_sso_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.04.28_00.00.00__add_tou_last_updated.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.05.21_00.00.00__add_email_verified_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.05.21_00.00.00__create_email_verification_tokens.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.06.16_00.00.00__add_saml_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.06.17_00.00.00__add_valid_ip_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.06.22_00.00.00__add_last_login_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
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
<a accesskey="p" href="install.start_remaining_services.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.installing.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="upgrade.single_node.vertica_updates.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">9.4. Start Remaining Services </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 10.2. Vertica Updates</td>
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
