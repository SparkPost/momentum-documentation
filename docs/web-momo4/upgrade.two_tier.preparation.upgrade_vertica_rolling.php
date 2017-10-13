<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>11.10. Upgrade Vertica on the Analytics Nodes</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="upgrade.two_tier_configuration_rolling.php" title="Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node">
<link rel="prev" href="upgrade.two_tier.preparation.restore_tranmissions_rolling.php" title="11.9. Restore Transmissions to the Remaining Platform Nodes">
<link rel="next" href="upgrade.two_tier.configuration.flyway_rolling.php" title="11.11. Prepare and Run Flyway">
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
<tr><th colspan="3" align="center">11.10. Upgrade Vertica on the Analytics Nodes</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="upgrade.two_tier.preparation.restore_tranmissions_rolling.php">Prev</a> </td>
<th width="60%" align="center">Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node</th>
<td width="20%" align="right"> <a accesskey="n" href="upgrade.two_tier.configuration.flyway_rolling.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="upgrade.two_tier.preparation.upgrade_vertica_rolling"></a>11.10. Upgrade Vertica on the Analytics Nodes</h2></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
          Stop services.
        </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
              Ensure ETLs are stopped on <span class="bold"><strong>all
              Platform nodes</strong></span>. (Some ETLS may already be
              stopped.) For a combined cluster upgrade, perform this
              action on <span class="bold"><strong>all nodes in the
              cluster</strong></span>.
            </p>
<p>
</p>
<pre class="screen">
service msys-app-metrics-etl stop
service msys-app-webhooks-batch stop
service msys-app-webhooks-transmitter stop
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Stop the Webhooks API on <span class="bold"><strong>all
              Analytics nodes</strong></span>. For a combined cluster
              upgrade, perform this action on <span class="bold"><strong>all
              nodes in the cluster</strong></span>.
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
              Get the Vertica node hosts from the
              <span class="bold"><strong>first Analytics node</strong></span>.
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
# v_msys_node0002 | <em class="replaceable"><code>10.77.0.206</code></em>
# v_msys_node0003 | <em class="replaceable"><code>10.77.0.157</code></em>
</pre>
<p>
            </p>
<p>
              Use the IP addresses displayed in your output in the
              following commands.
            </p>
</li>
<li class="listitem">
<p>
              Create a <code class="filename">backups</code> directory and set up
              <code class="literal">known_hosts</code> on
              <span class="bold"><strong>all Analytics nodes</strong></span>. For
              a combined cluster upgrade, perform this action on
              <span class="bold"><strong>all nodes in the cluster</strong></span>.
            </p>
<p>
</p>
<pre class="screen">
sudo su - vertica_dba &lt;&lt;EOJ
mkdir backups;
ssh-keyscan <em class="replaceable"><code>10.77.0.158</code></em> <em class="replaceable"><code>10.77.0.206</code></em> <em class="replaceable"><code>10.77.0.157</code></em> &gt; .ssh/kh2
cat .ssh/known_hosts &gt;&gt; .ssh/kh2
cat .ssh/kh2 | sort | uniq &gt; .ssh/known_hosts
rm  .ssh/kh2
EOJ
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Create a configuration file for backup
              (<span class="bold"><strong>first Analytics node
              only</strong></span>).
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
              addresses where appropriate (<span class="bold"><strong>first
              Analytics node only</strong></span>).
            </p>
<p>
              Please note that host names must be entered as IP
              addresses. Hit <span class="guibutton">Enter</span> to accept the
              default value.
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
Backup host name (no default): <em class="replaceable"><code>10.77.0.158</code></em>
Backup directory (no default): /var/db/vertica/backups
Node v_msys_node0002
Backup host name (no default): <em class="replaceable"><code>10.77.0.206</code></em>
Backup directory (no default): /var/db/vertica/backups
Node v_msys_node0003
Backup host name (no default): <em class="replaceable"><code>10.77.0.157</code></em>
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
              (with your host names included)
              (<span class="bold"><strong>first Analytics node
              only</strong></span>).
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
v_msys_node0002 = <em class="replaceable"><code>42upgrade-2.dev.int.messagesystems.com</code></em>:/var/db/vertica/backups
v_msys_node0003 = <em class="replaceable"><code>42upgrade-3.dev.int.messagesystems.com</code></em>:/var/db/vertica/backups
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Run the backup (<span class="bold"><strong>first Analytics node
              only</strong></span>).
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
          Stop the Vertica process on <span class="bold"><strong>all
          Analytics nodes (as root)</strong></span>. For a combined cluster
          upgrade, perform this action on <span class="bold"><strong>all
          nodes in the cluster</strong></span>.
        </p>
<p>
</p>
<pre class="screen">
exit #if running as vertica_dba, exit to get to root
service msys-vertica stop
</pre>
<p>
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            From the <span class="bold"><strong>first Analytics
            node</strong></span>, run <code class="literal">exit</code> to exit to
            root.
          </p>
</div>
</li>
<li class="listitem">
<p>
          Ensure all files are configured for the minimum mode.
        </p>
<p>
</p>
<pre class="screen">
find /opt/vertica /var/db/vertica \
   -name .ssh -prune -o \
   -type f -not -perm -755 \
   -exec chmod go+rx,u+rwx {} +
</pre>
<p>
        </p>
</li>
<li class="listitem">
<p>
          Upgrade Vertica on the <span class="bold"><strong>first Analytics
          node</strong></span>.
        </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
              Upgrade the Vertica RPM (substituting the appropriate
              package number). Answer <code class="literal">yes</code> when
              prompted.
            </p>
<p>
</p>
<pre class="screen">
cd /var/tmp/momentum-4.2.1.50062
yum --disablerepo=* --config momentum.repo --enablerepo=momentum upgrade msys-vertica
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
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="upgrade.two_tier.preparation.restore_tranmissions_rolling.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="upgrade.two_tier_configuration_rolling.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="upgrade.two_tier.configuration.flyway_rolling.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">11.9. Restore Transmissions to the Remaining Platform Nodes </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 11.11. Prepare and Run Flyway</td>
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
