<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Part II. Installing Momentum</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="index.php" title="Momentum 4 Reference Manual">
<link rel="prev" href="licensed_features.supercharger.php" title="4.3. Supercharger">
<link rel="next" href="hardware.requirements.php" title="Chapter 5. Hardware Considerations">
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
<tr><th colspan="3" align="center">Part II. Installing Momentum</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="licensed_features.supercharger.php">Prev</a> </td>
<th width="60%" align="center"> </th>
<td width="20%" align="right"> <a accesskey="n" href="hardware.requirements.php">Next</a>
</td>
</tr>
</table></div>
<div class="part">
<div class="titlepage"><div><div><h1 class="title">
<a name="p.installing"></a>Part II. Installing Momentum</h1></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
<dt><span class="chapter"><a href="hardware.requirements.php">5. Hardware Considerations</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="hardware.requirements.php#hardware.server_roles">5.1. Server Roles</a></span></dt>
<dt><span class="section"><a href="hardware.config_options.php">5.2. Configuration Options</a></span></dt>
<dt><span class="section"><a href="hardware.scaling.php">5.3. Hardware Scaling Approach</a></span></dt>
<dt><span class="section"><a href="hardware.environmental.php">5.4. Environmental Considerations</a></span></dt>
<dt><span class="section"><a href="hardware.config.php">5.5. Hardware Deployment Configuration</a></span></dt>
<dt><span class="section"><a href="production.config.php">5.6. Production Environment Configurations</a></span></dt>
<dt><span class="section"><a href="addl.config.notes.php">5.7. Additional Configuration Notes</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="before_you_begin.php">6. Before You Begin</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="before_you_begin.php#byb.msg.gen.license">6.1. Momentum License</a></span></dt>
<dt><span class="section"><a href="byb.os.php">6.2. Operating System</a></span></dt>
<dt><span class="section"><a href="byb.redundancy.php">6.3. Redundancy</a></span></dt>
<dt><span class="section"><a href="byb.load_balancing.php">6.4. Load Balancing</a></span></dt>
<dt><span class="section"><a href="byb.disable_selinux.php">6.5. Disable SELinux</a></span></dt>
<dt><span class="section"><a href="byb.ntp.php">6.6. Enable Network Time Protocol (NTP)</a></span></dt>
<dt><span class="section"><a href="byb.sysctl.conf.php">6.7. Adjusting <code class="filename">/etc/sysctl.conf</code></a></span></dt>
<dt><span class="section"><a href="byb.set_hostnames.php">6.8. Setting Hostnames</a></span></dt>
<dt><span class="section"><a href="byb.jre.php">6.9. Java Runtime Environment (JRE)</a></span></dt>
<dt><span class="section"><a href="byb.root_and_vertica_dba.php">6.10. Creating <code class="filename">root</code> and <code class="filename">vertica_dba</code>
        Accounts</a></span></dt>
<dt><span class="section"><a href="byb.redefine_ephemeral_ports.php">6.11. Redefining Ephemeral Ports</a></span></dt>
<dt><span class="section"><a href="byb.config_vertica_services.php">6.12. Configuring Locale</a></span></dt>
<dt><span class="section"><a href="byb.config_SSH_and_SSHD.php">6.13. Configuring SSH and SSHD</a></span></dt>
<dt><span class="section"><a href="byb.basic_packages.php">6.14. Basic Required Packages</a></span></dt>
<dt><span class="section"><a href="byb.riak_provisioning.php">6.15. Riak Provisioning</a></span></dt>
<dt><span class="section"><a href="byb.vertica_partition.php">6.16. Separate Vertica Partition</a></span></dt>
<dt><span class="section"><a href="byb.disable_postfix.php">6.17. Disable Postfix and QPIDD</a></span></dt>
<dt><span class="section"><a href="byb.analytics_reqs.php">6.18. Verifying Analytics Node Requirements</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="download_bundle.php">7. Download the Software Bundle and Prepare</a></span></dt>
<dt><span class="chapter"><a href="install_upgrade_packages.php">8. Install / Upgrade the Packages</a></span></dt>
<dt><span class="chapter"><a href="new_installation.php">9. New Installation - All Configurations</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="new_installation.php#install.mta_node">9.1. Configure Your MTA Nodes</a></span></dt>
<dt><span class="section"><a href="install.configure_cassandra.php">9.2. Configure the Cassandra Nodes</a></span></dt>
<dt><span class="section"><a href="install.analytics_nodes.php">9.3. Configure the Analytics Nodes</a></span></dt>
<dt><span class="section"><a href="install.start_remaining_services.php">9.4. Start Remaining Services</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="upgrade.single_node.php">10. Upgrade - Single Node</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="upgrade.single_node.php#upgrade.single_node.preparation">10.1. Preparation</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.vertica_updates.php">10.2. Vertica Updates</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.flyway.php">10.3. Prepare and Run Flyway</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.config_all__nodes.php">10.4. Configuration Changes</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.software_upgrade.php">10.5. Software Upgrade</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.webui.php">10.6. Update Web UI Configuration</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.start_services.php">10.7. Start Services</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.complete_setup.php">10.8. Complete the Software Set Up</a></span></dt>
<dt><span class="section"><a href="upgrade.single_node.configuration.next_steps.php">10.9. Next Steps</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="upgrade.two_tier_configuration_rolling.php">11. Rolling Upgrade - Two-Tier Configuration and Combined Node</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="upgrade.two_tier_configuration_rolling.php#upgrade.two_tier.preparation_rolling">11.1. Overview</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.prepare_all_nodes_rolling.php">11.2. Before You Begin the Upgrade</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.snapshot_cassandra_rolling.php">11.3. Perform a Cassandra Snapshot</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.upgrade_cassandra_rolling.php">11.4. Upgrade Cassandra on the Platform Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.stop_generations_rolling.php">11.5. Stop Transmissions to the First Platform Node</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.ecelerity_rolling.php">11.6. Upgrade Ecelerity and the Cassandra Schema on the First Platform Node</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.stop_transmissions_rolling.php">11.7. Restore Transmissions to the First Platform Node and Stop Transmissions
        to all other Platform Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.upgrade_ecelerity_rolling.php">11.8. Upgrade Ecelerity on the Remaining Platform Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.restore_tranmissions_rolling.php">11.9. Restore Transmissions to the Remaining Platform Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.upgrade_vertica_rolling.php">11.10. Upgrade Vertica on the Analytics Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.flyway_rolling.php">11.11. Prepare and Run Flyway</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.preparation.rpms_rolling.php">11.12. Upgrade Remaining RPMs on Analytics Nodes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.config_all_nodes_rolling.php">11.13. Configuration Changes</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.software_upgrade_rolling.php">11.14. Install the Adaptive Delivery API</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.webui_rolling.php">11.15. Update the Web UI Configuration</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.configuration.start_services_rolling.php">11.16. Start Services</a></span></dt>
<dt><span class="section"><a href="upgrade.two_tier.complete_setup_rolling.php">11.17. Complete the Software Set Up</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="post_installation.php">12. Post-Installation</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="post_installation.php#install.additional.packages">12.1. Installing Partner Modules</a></span></dt>
<dt><span class="section"><a href="install.post-install.config.php">12.2. Reviewing Configuration Files</a></span></dt>
<dt><span class="section"><a href="install.post-install.rotate.php">12.3. Rotating Logfiles</a></span></dt>
<dt><span class="section"><a href="install.post-install.vertica_mgmt_console.php">12.4. Download and Install the Vertica Management Console</a></span></dt>
<dt><span class="section"><a href="install.vertica.license.php">12.5. Upgrading the Vertica License</a></span></dt>
<dt><span class="section"><a href="install.security_considerations.php">12.6. Security Considerations</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="add_remove_platform_nodes.php">13. Adding and Removing Platform Nodes</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="add_remove_platform_nodes.php#node_add">13.1. Adding a Platform Node</a></span></dt>
<dt><span class="section"><a href="node_remove.php">13.2. Removing a Platform Node</a></span></dt>
</dl></dd>
<dt><span class="chapter"><a href="add_remove_analytics_nodes.php">14. Adding and Removing Analytics Nodes</a></span></dt>
<dd><dl>
<dt><span class="section"><a href="add_remove_analytics_nodes.php#node_add_analytics">14.1. Adding an Analytics Node</a></span></dt>
<dt><span class="section"><a href="node_remove_analytics.php">14.2. Removing an Analytics Node</a></span></dt>
</dl></dd>
</dl>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="licensed_features.supercharger.php">Prev</a> </td>
<td width="20%" align="center"> </td>
<td width="40%" align="right"> <a accesskey="n" href="hardware.requirements.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">4.3. Supercharger </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 5. Hardware Considerations</td>
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
