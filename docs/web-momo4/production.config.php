<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>5.6. Production Environment Configurations</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="hardware.requirements.php" title="Chapter 5. Hardware Considerations">
<link rel="prev" href="hardware.config.php" title="5.5. Hardware Deployment Configuration">
<link rel="next" href="addl.config.notes.php" title="5.7. Additional Configuration Notes">
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
<tr><th colspan="3" align="center">5.6. Production Environment Configurations</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="hardware.config.php">Prev</a> </td>
<th width="60%" align="center">Chapter 5. Hardware Considerations</th>
<td width="20%" align="right"> <a accesskey="n" href="addl.config.notes.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="production.config"></a>5.6. Production Environment Configurations</h2></div></div></div>
<p>
      This section provides hardware specifications for different target
      volume levels. All systems are rated for use with CPU utilization
      at 50% in order to accommodate traffic spikes. All volumes are
      specified with the assumption of an average message size of 100
      kB.
    </p>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="production.config.basic.cluster"></a>Enterprise Basic Cluster</h3></div></div></div>
<p>
        The Enterprise Basic Configuration consists of three nodes
        running all roles with the resources specified below. The system
        supports the following performance ratings.
      </p>
<div class="table">
<a name="enterprise_basic_performance_ratings"></a><p class="title"><b>Table 5.3. Enterprise Basic - Performance Ratings</b></p>
<div class="table-contents"><table summary="Enterprise Basic - Performance Ratings" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Node Capacity
              </th>
<th>
                <p>
                  Cluster Capacity
                </p>



                <p>
                  (2 Nodes Operational)
                </p>
              </th>
<th>
                <p>
                  Peak Cluster Capacity
                </p>



                <p>
                  (3 Nodes Operational)
                </p>
              </th>
</tr></thead>
<tbody><tr>
<td>
                500,000 Msg/hr
              </td>
<td>
                1 M Msg/hr
              </td>
<td>
                1.5 M Msg/hr
              </td>
</tr></tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_basic_cluster_hw_reqs"></a><p class="title"><b>Table 5.4. Enterprise Basic - Hardware Requirements</b></p>
<div class="table-contents"><table summary="Enterprise Basic - Hardware Requirements" border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Resource
              </th>
<th>
                Minimum Specification
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                CPU
              </td>
<td>
                8 x 2.5 GHz Cores (Min Speed)
              </td>
</tr>
<tr>
<td>
                Memory
              </td>
<td>
                32 GB RAM
              </td>
</tr>
<tr>
<td>
                Network Interface
              </td>
<td>
                1 GB NIC
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_basic_cluster_storage_array"></a><p class="title"><b>Table 5.5. Enterprise Basic - Storage Array Configuration</b></p>
<div class="table-contents"><table summary="Enterprise Basic - Storage Array Configuration" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Array
              </th>
<th>
                Configuration
              </th>
<th>
                Mount Points and Notes
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                All Storage
              </td>
<td>
                6 x 300 GB 15k RPM HDD
              </td>
<td> </td>
</tr>
<tr>
<td>
                Message Spools
              </td>
<td>
                2 x 300 GB in RAID1
              </td>
<td>
                <p>
                  /var/spool/ecelerity
                </p>



                <p>
                  Note: This array should be dedicated to the spools.
                </p>
              </td>
</tr>
<tr>
<td>
                OS, App Binaries, Logs, Platform DB, Analytics DB
              </td>
<td>
                2 x 300 GB in RAID1
              </td>
<td>
                <div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                      OS - / (root)
                    </p></li>
<li class="listitem"><p>
                      Logs - /var/log/ecelerity
                    </p></li>
<li class="listitem"><p>
                      App Binaries - /opt./msys
                    </p></li>
<li class="listitem"><p>
                      Platform DB - /var/db/cassandra
                    </p></li>
<li class="listitem"><p>
                      Analytics DB - /var/db/vertica
                    </p></li>
</ul></div>
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="production.config.standard.cluster"></a>Enterprise Standard Cluster</h3></div></div></div>
<p>
        The Enterprise Standard Configuration consists of three nodes
        running all roles with the resources specified below. The system
        supports the following performance ratings.
      </p>
<div class="table">
<a name="enterprise_standard_performance_ratings"></a><p class="title"><b>Table 5.6. Enterprise Standard - Performance Ratings</b></p>
<div class="table-contents"><table summary="Enterprise Standard - Performance Ratings" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Node Capacity
              </th>
<th>
                <p>
                  Cluster Capacity
                </p>



                <p>
                  (2 Nodes Operational)
                </p>
              </th>
<th>
                <p>
                  Peak Cluster Capacity
                </p>



                <p>
                  (3 Nodes Operational)
                </p>
              </th>
</tr></thead>
<tbody><tr>
<td>
                1 M Msg/hr
              </td>
<td>
                2 M Msg/hr
              </td>
<td>
                3 M Msg/hr
              </td>
</tr></tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_standard_cluster_hw_reqs"></a><p class="title"><b>Table 5.7. Enterprise Standard - Hardware Requirements</b></p>
<div class="table-contents"><table summary="Enterprise Standard - Hardware Requirements" border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Resource
              </th>
<th>
                Minimum Specification
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                CPU
              </td>
<td>
                16 x 2.5 GHz Cores (Min Speed)
              </td>
</tr>
<tr>
<td>
                Memory
              </td>
<td>
                64 GB RAM
              </td>
</tr>
<tr>
<td>
                Network Interface
              </td>
<td>
                1 GB NIC
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_standard_cluster_storage_array"></a><p class="title"><b>Table 5.8. Enterprise Standard - Storage Array Configuration</b></p>
<div class="table-contents"><table summary="Enterprise Standard - Storage Array Configuration" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Array
              </th>
<th>
                Configuration
              </th>
<th>
                Mount Points and Notes
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                All Storage
              </td>
<td>
                8 x 300 GB 15k RPM HDD
              </td>
<td> </td>
</tr>
<tr>
<td>
                Message Spools
              </td>
<td>
                4 x 300 GB in RAID10
              </td>
<td>
                <p>
                  /var/spool/ecelerity
                </p>



                <p>
                  Note: This array should be dedicated to the spools.
                </p>
              </td>
</tr>
<tr>
<td>
                OS, App Binaries, Logs, Platform DB
              </td>
<td>
                2 x 300 GB in RAID1
              </td>
<td>
                <div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                      OS - / (root)
                    </p></li>
<li class="listitem"><p>
                      Logs - /var/log/ecelerity
                    </p></li>
<li class="listitem"><p>
                      App Binaries - /opt./msys
                    </p></li>
<li class="listitem"><p>
                      Platform DB - /var/db/cassandra
                    </p></li>
</ul></div>
              </td>
</tr>
<tr>
<td>
                Analytics DB
              </td>
<td>
                2 x 300 GB in RAID1
              </td>
<td>
                <p>
                  Analytics DB - /var/db/vertica
                </p>



                <p>
                  Note: This array should be dedicated to the Analytics
                  DB.
                </p>
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="production.config.plus.cluster"></a>Enterprise Plus Cluster</h3></div></div></div>
<p>
        The Enterprise Plus Configuration consists of three nodes
        running all roles with the resources specified below. The system
        supports the following performance ratings.
      </p>
<div class="table">
<a name="enterprise_plus_performance_ratings"></a><p class="title"><b>Table 5.9. Enterprise Plus - Performance Ratings</b></p>
<div class="table-contents"><table summary="Enterprise Plus - Performance Ratings" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Node Capacity
              </th>
<th>
                <p>
                  Cluster Capacity
                </p>



                <p>
                  (2 Nodes Operational)
                </p>
              </th>
<th>
                <p>
                  Peak Cluster Capacity
                </p>



                <p>
                  (3 Nodes Operational)
                </p>
              </th>
</tr></thead>
<tbody><tr>
<td>
                1.5 M Msg/hr
              </td>
<td>
                3 M Msg/hr
              </td>
<td>
                4.5 M Msg/hr
              </td>
</tr></tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_plus_cluster_hw_reqs"></a><p class="title"><b>Table 5.10. Enterprise Plus - Hardware Requirements</b></p>
<div class="table-contents"><table summary="Enterprise Plus - Hardware Requirements" border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Resource
              </th>
<th>
                Minimum Specification
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                CPU
              </td>
<td>
                20 x 2.5 GHz Cores (Min Speed)
              </td>
</tr>
<tr>
<td>
                Memory
              </td>
<td>
                64 GB RAM
              </td>
</tr>
<tr>
<td>
                Network Interface
              </td>
<td>
                1 GB NIC
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_plus_cluster_storage_array"></a><p class="title"><b>Table 5.11. Enterprise Plus - Storage Array Configuration</b></p>
<div class="table-contents"><table summary="Enterprise Plus - Storage Array Configuration" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Array
              </th>
<th>
                Configuration
              </th>
<th>
                Mount Points and Notes
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                All Storage
              </td>
<td>
                8 x 600 GB 15k RPM HDD
              </td>
<td> </td>
</tr>
<tr>
<td>
                Message Spools
              </td>
<td>
                4 x 600 GB in RAID10
              </td>
<td>
                <p>
                  /var/spool/ecelerity
                </p>



                <p>
                  Note: This array should be dedicated to the spools.
                </p>
              </td>
</tr>
<tr>
<td>
                OS, App Binaries, Logs, Platform DB
              </td>
<td>
                2 x 600 GB in RAID1
              </td>
<td>
                <div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                      OS - / (root)
                    </p></li>
<li class="listitem"><p>
                      Logs - /var/log/ecelerity
                    </p></li>
<li class="listitem"><p>
                      App Binaries - /opt./msys
                    </p></li>
<li class="listitem"><p>
                      Platform DB - /var/db/cassandra
                    </p></li>
</ul></div>
              </td>
</tr>
<tr>
<td>
                Analytics DB
              </td>
<td>
                2 x 600 GB in RAID1
              </td>
<td>
                <p>
                  Analytics DB - /var/db/vertica
                </p>



                <p>
                  Note: This array should be dedicated to the Analytics
                  DB.
                </p>
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
<div class="simplesect">
<div class="titlepage"><div><div><h3 class="title">
<a name="production.config.scaling.cluster"></a>Enterprise Scaling Cluster</h3></div></div></div>
<p>
        The Enterprise Scaling Configuration consists of both an
        Analytics Cluster and a Platform Cluster. Because large volume
        deployments require more resources for sending than for
        analytics, Message Systems recommends separating the Platform
        and Analytics roles to separate clusters. This configuration
        allows you to scale the Platform cluster independent of the
        analytics cluster. The baseline configuration consists of a
        three-node Analytics Cluster and a three-node Platform Cluster.
        You may scale sending capacity by incrementally adding Platform
        nodes to the cluster as needed.
      </p>
<p>
        The baseline system supports the following performance ratings.
      </p>
<div class="table">
<a name="enterprise_scaling_performance_ratings"></a><p class="title"><b>Table 5.12. Enterprise Scaling - Performance Ratings</b></p>
<div class="table-contents"><table summary="Enterprise Scaling - Performance Ratings" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                <p>
                  Baseline Cluster Capacity
                </p>



                <p>
                  (2 Nodes Operational)
                </p>
              </th>
<th>
                <p>
                  Baseline Peak Cluster Capacity
                </p>



                <p>
                  (3 Nodes Operational)
                </p>
              </th>
<th>
                Incremental Platform Node Capacity
              </th>
</tr></thead>
<tbody><tr>
<td>
                3 M Msg/hr
              </td>
<td>
                4.5 M Msg/hr
              </td>
<td>
                1.5 M Msg/hr
              </td>
</tr></tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_scaling_platform_node_cluster_hw_reqs"></a><p class="title"><b>Table 5.13. Enterprise Scaling - Hardware Requirements for Platform Node</b></p>
<div class="table-contents"><table summary="Enterprise Scaling - Hardware Requirements for Platform Node" border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Resource
              </th>
<th>
                Minimum Specification
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                CPU
              </td>
<td>
                20 x 2.5 GHz Cores (Min Speed)
              </td>
</tr>
<tr>
<td>
                Memory
              </td>
<td>
                64 GB RAM
              </td>
</tr>
<tr>
<td>
                Network Interface
              </td>
<td>
                1 GB NIC
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_scaling_platform_node_cluster_storage_array"></a><p class="title"><b>Table 5.14. Enterprise Scaling - Storage Array Configuration for Platform Node</b></p>
<div class="table-contents"><table summary="Enterprise Scaling - Storage Array Configuration for Platform Node" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Array
              </th>
<th>
                Configuration
              </th>
<th>
                Mount Points and Notes
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                All Storage
              </td>
<td>
                8 x 600 GB 15k RPM HDD
              </td>
<td> </td>
</tr>
<tr>
<td>
                Message Spools
              </td>
<td>
                4 x 600 GB in RAID10
              </td>
<td>
                <p>
                  /var/spool/ecelerity
                </p>



                <p>
                  Note: This array should be dedicated to the spools.
                </p>
              </td>
</tr>
<tr>
<td>
                OS, App Binaries, Logs, Platform DB
              </td>
<td>
                2 x 600 GB in RAID1
              </td>
<td>
                <div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                      OS - / (root)
                    </p></li>
<li class="listitem"><p>
                      Logs - /var/log/ecelerity
                    </p></li>
<li class="listitem"><p>
                      App Binaries - /opt./msys
                    </p></li>
<li class="listitem"><p>
                      Platform DB - /var/db/cassandra
                    </p></li>
</ul></div>
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_scaling_analytics_node_cluster_hw_reqs"></a><p class="title"><b>Table 5.15. Enterprise Scaling - Hardware Requirements for Analytics Node</b></p>
<div class="table-contents"><table summary="Enterprise Scaling - Hardware Requirements for Analytics Node" border="1">
<colgroup>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Resource
              </th>
<th>
                Minimum Specification
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                CPU
              </td>
<td>
                20 x 2.5 GHz Cores (Min Speed)
              </td>
</tr>
<tr>
<td>
                Memory
              </td>
<td>
                64 GB RAM
              </td>
</tr>
<tr>
<td>
                Network Interface
              </td>
<td>
                1 GB NIC
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break"><div class="table">
<a name="enterprise_scaling_analytics_node_cluster_storage_array"></a><p class="title"><b>Table 5.16. Enterprise Scaling - Storage Array Configuration for Analytics Node</b></p>
<div class="table-contents"><table summary="Enterprise Scaling - Storage Array Configuration for Analytics Node" border="1">
<colgroup>
<col>
<col>
<col>
</colgroup>
<thead><tr>
<th>
                Array
              </th>
<th>
                Configuration
              </th>
<th>
                Mount Points and Notes
              </th>
</tr></thead>
<tbody>
<tr>
<td>
                All Storage
              </td>
<td>
                4 x 600 GB 15k RPM HDD
              </td>
<td> </td>
</tr>
<tr>
<td>
                OS, App Binaries, Logs
              </td>
<td>
                2 x 600 GB in RAID1
              </td>
<td>
                <div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                      OS - / (root)
                    </p></li>
<li class="listitem"><p>
                      Logs - /var/log/ecelerity
                    </p></li>
<li class="listitem"><p>
                      App Binaries - /opt./msys
                    </p></li>
</ul></div>
              </td>
</tr>
<tr>
<td>
                Analytics DB
              </td>
<td>
                2 x 600 GB in RAID1
              </td>
<td>
                <p>
                  Analytics DB - /var/db/vertica
                </p>



                <p>
                  Note: This array should be dedicated to the Analytics
                  DB.
                </p>
              </td>
</tr>
</tbody>
</table></div>
</div>
<br class="table-break">
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="hardware.config.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="hardware.requirements.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="addl.config.notes.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">5.5. Hardware Deployment Configuration </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 5.7. Additional Configuration Notes</td>
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
