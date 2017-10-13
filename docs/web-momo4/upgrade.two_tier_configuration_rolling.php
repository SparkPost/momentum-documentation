<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.installing.php" title="Part II. Installing Momentum">
<link rel="prev" href="upgrade.single_node.configuration.next_steps.php" title="10.9. Next Steps">
<link rel="next" href="upgrade.two_tier.preparation.prepare_all_nodes_rolling.php" title="11.2. Before You Begin the Upgrade">
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
<tr><th colspan="3" align="center">Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="upgrade.single_node.configuration.next_steps.php">Prev</a> </td>
<th width="60%" align="center">Part II. Installing Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="upgrade.two_tier.preparation.prepare_all_nodes_rolling.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="upgrade.two_tier_configuration_rolling"></a>Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node</h2></div></div></div>
<div class="toc">
<p><b>Table of Contents</b></p>
<dl class="toc">
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
<a class="indexterm" name="idp1149792"></a><p>
    This section documents the upgrade procedures for a local cluster of
    four or more nodes. This installation type assumes your cluster will
    not be taken offline while the upgrade is performed. This
    installation type can be scaled for a variety of configurations,
    with a minimum configuration of three Platform nodes and one
    Analytics node to a maximum configuration of 12 Platform nodes and
    12 Analytics nodes. The most common configuration consists of three
    Platform nodes and three Analytics nodes.
  </p>
<p>
    Instructions for upgrading a combined node configuration are
    included as additional information in specific steps or called out
    in Notes or Warnings.
  </p>
<div class="tip">
<h3 class="title">Tip</h3>
<p>
      In a combined node configuration, Analytics and Platform nodes are
      the same nodes, which means instructions will be done on all nodes
      unless specified otherwise. In addition, primary nodes (i.e., the
      first Platform node and the first Analytics node) are the same
      node, and this node runs the <code class="option">ecconfigd</code>
      configuration manager process.
    </p>
</div>
<div class="note">
<h3 class="title">Note</h3>
<p>
      You can only perform the upgrade from Momentum 4.1-HF4. If you are
      running a version of Momentum prior to 4.1-HF4, you must first
      upgrade to that version, then upgrade to Momentum 4.2. In
      addition, you must complete the upgrade in a single session.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="upgrade.two_tier.preparation_rolling"></a>11.1. Overview</h2></div></div></div>
<p>
      An overview of the rolling upgrade process is shown below.
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
          Pre-upgrade preparation:
        </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem"><p>
              Consider performing a Cassandra compaction.
            </p></li>
<li class="listitem"><p>
              Perform a Vertica repartition.
            </p></li>
</ol></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
            Because these steps may take four to six hours to complete,
            we recommend you complete them before starting the upgrade.
          </p>
</div>
</li>
<li class="listitem">
<p>
          Upgrade the first Platform node.
        </p>
<div class="orderedlist"><ol class="orderedlist" type="a"><li class="listitem"><p>
              Stop all submissions to one node in the cluster and wait
              for all generations started on that node to complete.
            </p></li></ol></div>
</li>
<li class="listitem">
<p>
          Upgrade the remaining Platform nodes.
        </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem"><p>
              Divert all new submissions to the first node.
            </p></li>
<li class="listitem"><p>
              Wait for all generations started on the remaining Platform
              nodes to complete.
            </p></li>
<li class="listitem"><p>
              Upgrade Cassandra.
            </p></li>
<li class="listitem"><p>
              Upgrade the MTA (ecelerity packages and related upgrade
              steps).
            </p></li>
</ol></div>
</li>
<li class="listitem"><p>
          Upgrade the Analytics nodes.
        </p></li>
</ol></div>
<div class="note">
<h3 class="title">Note</h3>
<p>
        Be sure to read the
        <a class="link" href="https://support.messagesystems.com/start.php" target="_top">Release
        Notes</a> for the version of Momentum that you are
        installing.
      </p>
</div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="upgrade.single_node.configuration.next_steps.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.installing.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="upgrade.two_tier.preparation.prepare_all_nodes_rolling.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">10.9. Next Steps </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 11.2. Before You Begin the Upgrade</td>
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
