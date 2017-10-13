<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Momentum 4 Reference Manual</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="description" content="This book documents Momentum 4. Document generated on:">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
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
    <div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Momentum 4 Reference Manual</th></tr></table></div>
<div class="list-of-figures">
<p><b>List of Figures</b></p>
<dl>
<dt>1.1. <a href="components.php#architecture.image">Momentum 4 Components</a>
</dt>
<dt>2.1. <a href="loam.php#life_of_a_message.image">Life of A Message</a>
</dt>
<dt>5.1. <a href="hardware.config_options.php#config_options.image">Configuration Options</a>
</dt>
<dt>22.1. <a href="using_domainkeys.php#figure_domainkeys_schematic">DomainKeys schematic</a>
</dt>
<dt>23.1. <a href="using_dkim.php#figure_dkim_schematic">DKIM schematic</a>
</dt>
<dt>43.1. <a href="create_apikey.php#figure_admin_icon">Login</a>
</dt>
<dt>43.2. <a href="create_apikey.php#figure_create_api_key">Create New API Key</a>
</dt>
<dt>44.1. <a href="web-ui.apikeys.php#figure_username_icon">admin Username</a>
</dt>
<dt>44.2. <a href="web-ui.apikeys.php#figure_apikeys_list">API Keys Table</a>
</dt>
<dt>44.3. <a href="web-ui.apikeys.create.php#figure_create_apikey">Create New API Key</a>
</dt>
<dt>44.4. <a href="web-ui.apikeys.update.php#figure_update_apikey">Update API Key</a>
</dt>
<dt>44.5. <a href="web-ui.apikeys.update.php#figure_edit_apikey">Edit API Key</a>
</dt>
<dt>44.6. <a href="web-ui.apikeys.delete.php#figure_delete_apikey">Delete API Key</a>
</dt>
<dt>44.7. <a href="web-ui.apikeys.delete.php#figure_confirm_delete_apikey">Confirm Delete</a>
</dt>
<dt>48.1. <a href="web-ui.templates.php#figure_templates_list">Templates Table</a>
</dt>
<dt>48.2. <a href="web-ui.templates.create.php#figure_new_template">New Template</a>
</dt>
<dt>48.3. <a href="web-ui.templates.create.php#figure_template_details">Template Details</a>
</dt>
<dt>48.4. <a href="web-ui.templates.create.php#figure_html_content">HTML Content</a>
</dt>
<dt>48.5. <a href="web-ui.templates.create.php#figure_text_content">Text Content</a>
</dt>
<dt>48.6. <a href="web-ui.templates.preview.php#figure_test_data">Test Data</a>
</dt>
<dt>48.7. <a href="web-ui.templates.preview.php#figure_preview_template">Preview Template</a>
</dt>
<dt>48.8. <a href="web-ui.templates.preview.php#figure_preview_details">Preview Template Details</a>
</dt>
<dt>48.9. <a href="web-ui.templates.preview.php#figure_select_test">Send Test</a>
</dt>
<dt>48.10. <a href="web-ui.templates.preview.php#figure_send_test">Send Test Form</a>
</dt>
<dt>48.11. <a href="web-ui.templates.publish.php#figure_publish_template">Publish Template</a>
</dt>
<dt>48.12. <a href="web-ui.templates.delete.php#figure_delete_template">Delete Template</a>
</dt>
<dt>53.1. <a href="complex_template.php#figure_engagement_example">Engagement Report</a>
</dt>
<dt>55.1. <a href="web-ui.php#figure_summary_report">User Interface</a>
</dt>
<dt>55.2. <a href="web-ui.php#figure_recipient_list">Recipient Lists Table</a>
</dt>
<dt>55.3. <a href="web-ui.php#figure_list_upload">Upload New Recipient List</a>
</dt>
<dt>55.4. <a href="web-ui.php#figure_list_details">Example Recipient List Details</a>
</dt>
<dt>55.5. <a href="web-ui.php#figure_list_update">Update Recipient List</a>
</dt>
<dt>55.6. <a href="web-ui.php#figure_confirm_list_delete">Confirm Delete</a>
</dt>
<dt>56.1. <a href="reporting_ui.php#figure_summary">User Interface</a>
</dt>
<dt>56.2. <a href="reporting_ui.php#figure_navigation">Navigating the UI</a>
</dt>
<dt>57.1. <a href="web-ui.reports.php#figure_navigation_menu">Navigating Reports</a>
</dt>
<dt>57.2. <a href="web-ui.reports.php#figure_metrics_list">Metrics Drop-down List</a>
</dt>
<dt>57.3. <a href="web-ui.reports.php#figure_summary_graph">Summary Graph</a>
</dt>
<dt>57.4. <a href="web-ui.reports.php#figure_summary_table">Summary Table</a>
</dt>
<dt>57.5. <a href="web-ui.reports.php#figure_time">Time Period Drop-down List</a>
</dt>
<dt>57.6. <a href="web-ui.reports.php#figure_custom_range">Custom Range</a>
</dt>
<dt>57.7. <a href="web-ui.reports.php#figure_node">Node Drop-down List</a>
</dt>
<dt>57.8. <a href="web-ui.reports.php#figure_filter_by_search">Filter by Search</a>
</dt>
<dt>57.9. <a href="web-ui.reports.php#figure_filter_by_entry">Filter by Table Entry</a>
</dt>
<dt>57.10. <a href="web-ui.reports.viewing.reports.php#figure_bounces_report">Bounces Report</a>
</dt>
<dt>57.11. <a href="web-ui.reports.viewing.reports.php#figure_bounces_by_category">Bounce Rates By Type and By Category</a>
</dt>
<dt>57.12. <a href="web-ui.reports.viewing.reports.php#figure_bounce_messages">Bounce Messages Table</a>
</dt>
<dt>57.13. <a href="web-ui.reports.viewing.reports.php#figure_rejections_report">Rejections Report</a>
</dt>
<dt>57.14. <a href="web-ui.reports.viewing.reports.php#figure_accepted_report">Accepted Report</a>
</dt>
<dt>57.15. <a href="web-ui.reports.viewing.reports.php#figure_delayed_report">Delayed Report</a>
</dt>
<dt>57.16. <a href="web-ui.reports.adaptive.delivery.php#figure_adaptive_report">Adaptive Delivery Report</a>
</dt>
<dt>57.17. <a href="web-ui.reports.adaptive.delivery.php#figure_adaptive_time">Time Period Drop-down List</a>
</dt>
<dt>57.18. <a href="web-ui.reports.adaptive.delivery.php#figure_suspension_detail">Adaptive Delivery Graph</a>
</dt>
<dt>57.19. <a href="web-ui.reports.adaptive.delivery.php#figure_suspension_detailed">Expanded View</a>
</dt>
<dt>57.20. <a href="web-ui.reports.adaptive.delivery.php#figure_adaptive_details">Adaptive Delivery Table</a>
</dt>
<dt>57.21. <a href="web-ui.reports.evaluating.campaign.performance.php#figure_engagement_report">Engagement Report</a>
</dt>
<dt>60.1. <a href="web-ui.webhooks.php#figure_webhooks_list">Webhooks List</a>
</dt>
<dt>60.2. <a href="web-ui.webhooks.create.php#figure_create_webhook">Create New Webhook</a>
</dt>
<dt>60.3. <a href="web-ui.webhooks.create.php#figure_event_types">Event Types</a>
</dt>
<dt>60.4. <a href="web-ui.webhooks.test.php#figure_test_webhook">Test Webhook</a>
</dt>
<dt>60.5. <a href="web-ui.webhooks.test.php#figure_test_request">Test Request</a>
</dt>
<dt>60.6. <a href="web-ui.webhooks.test.php#figure_test_response">Test Response</a>
</dt>
<dt>60.7. <a href="web-ui.webhooks.update.php#figure_update_webhook">Update Webhook</a>
</dt>
<dt>60.8. <a href="web-ui.webhooks.update.php#figure_edit_webhook">Edit Webhook</a>
</dt>
<dt>60.9. <a href="web-ui.webhooks.delete.php#figure_delete_webhook">Delete Webhook</a>
</dt>
<dt>60.10. <a href="web-ui.webhooks.delete.php#figure_confirm_delete">Confirm Delete</a>
</dt>
<dt>61.1. <a href="engagement_tracking_http.php#figure_engagement">Engagement Report</a>
</dt>
<dt>62.1. <a href="policy.php#policy.flow-diagram">Momentum Policy Phases</a>
</dt>
<dt>70.1. <a href="lua.ref.msys.counter.open.php#fig.console_command.counter">Counter semantics</a>
</dt>
<dt>72.1. <a href="conf.ref.connection_allocation_aggressiveness.php#conf.ref.connagg-diagram">Connection Allocation Aggressiveness</a>
</dt>
</dl>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer"><tr>
<td width="40%" align="left" valign="top"> </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> </td>
</tr></table></div>
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
