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
<div class="list-of-examples">
<p><b>List of Examples</b></p>
<dl>
<dt>15.1. <a href="ecelerity.conf.fallback.php#domain-scope-fallback">Domain Scope and Fallback</a>
</dt>
<dt>15.2. <a href="ecelerity.conf.fallback.php#binding-scope-fallback">Binding Scope and Fallback</a>
</dt>
<dt>15.3. <a href="ecelerity.conf.fallback.php#binding-group-fallback">Binding_Group and Fallback</a>
</dt>
<dt>15.4. <a href="listeners.php#example.conf.peer">Peer Scope and ACLs</a>
</dt>
<dt>16.1. <a href="conf.ref.eccluster.conf.php#conf.ref.eccluster.conf.example">eccluster.conf file</a>
</dt>
<dt>16.2. <a href="conf.ref.eccluster.conf.php#conf.ref.eccluster.conf.logs.stanza">Logs Stanza</a>
</dt>
<dt>16.3. <a href="conf.ref.ecelerity_cluster.conf.php#conf.ref.ecelerity_cluster.conf.example">ecelerity-cluster.conf</a>
</dt>
<dt>17.1. <a href="control_auth.php#control_auth.control_listener.stanza">Control_Listener Stanza</a>
</dt>
<dt>20.1. <a href="conf.ref.msg_gen.conf.php#conf.ref.msg_gen.conf.example">msg-gen.conf</a>
</dt>
<dt>28.1. <a href="cluster.config.replication.php#cluster.replicatedcache.code">Replicated caches</a>
</dt>
<dt>34.1. <a href="log_rotating.php#conf.ref.ec_rotate.conf.default">ec_rotate.conf</a>
</dt>
<dt>37.1. <a href="operations.console.lua.php#operations.console.lua.registerControl">Create console command</a>
</dt>
<dt>62.1. <a href="policy.php#policy.context-based-on-ip3.ex">Connection Context Variables in ESMTP_Listener</a>
</dt>
<dt>62.2. <a href="implementing.policy.scriptlets.php#policy.scriptlets.ehlo.example">EHLO Example</a>
</dt>
<dt>62.3. <a href="implementing.policy.scriptlets.php#policy.scriptlets.configuration">Scriptlet Configuration</a>
</dt>
<dt>70.1. <a href="lua.ref.msys.db.execute.php#lua.ref.msy.db.execute.example">lua.ref.msy.db.execute example</a>
</dt>
<dt>70.2. <a href="lua.ref.ac_esmtp_capability_add.php#lua.ref.ac_esmtp_capability_add.example">ac:esmtp_capability_add example</a>
</dt>
<dt>70.3. <a href="lua.ref.msys.cloudmark.add_af_data.php#lua.ref.msys.cloudmark.add_af_data.example">msys.cloudmark.add_af_data Example</a>
</dt>
<dt>70.4. <a href="lua.ref.msys.cloudmark.score.php#lua.ref.msys.cloudmark.score.example">msys.cloudmark.score example</a>
</dt>
<dt>70.5. <a href="lua.ref.msys.cloudmark.score_af.php#lua.ref.msys.cloudmark.score_af.example">msys.cloudmark.score_af Example</a>
</dt>
<dt>70.6. <a href="lua.ref.msys.cloudmark.set_af_mode_discard.php#lua.ref.msys.cloudmark.set_af_mode_discard.example">msys.cloudmark.set_af_mode_discard Example</a>
</dt>
<dt>70.7. <a href="lua.ref.msys.cloudmark.set_af_mode_keep.php#lua.ref.msys.cloudmark.set_af_mode_keep.example">msys.cloudmark.set_af_mode_keep Example</a>
</dt>
<dt>70.8. <a href="lua.ref.msys.cloudmark.set_af_mode_movemsg.php#lua.ref.msys.cloudmark.set_af_mode_movemsg.example">msys.cloudmark.set_af_mode_movemsg Example</a>
</dt>
<dt>70.9. <a href="lua.ref.msys.cloudmark.set_af_msi_address.php#lua.ref.msys.cloudmark.set_af_msi_address.example">msys.cloudmark.set_af_msi_address Example</a>
</dt>
<dt>70.10. <a href="lua.ref.msys.apn.apn_status_classifier.php#lua.ref.msys.apn_classify_error.example">msys.apn_classify_error example</a>
</dt>
<dt>70.11. <a href="lua.ref.client_do_request.php#lua.ref.client_do_request.example">client:do_request example</a>
</dt>
<dt>70.12. <a href="lua.ref.client_get_status.php#lua.ref.client_get_status.example">client:get_status example</a>
</dt>
<dt>70.13. <a href="lua.ref.client_set_header.php#lua.ref.client_set_header.example">client:set_header example</a>
</dt>
<dt>70.14. <a href="lua.ref.curl.c_close.php#lua.ref.curl.c_close.example">c:close example</a>
</dt>
<dt>70.15. <a href="lua.ref.curl.c_perform.php#lua.ref.curl.c_perform.example">c:perform example</a>
</dt>
<dt>70.16. <a href="lua.ref.curl.c_setopt.php#lua.ref.c_setopt.example">c:setopt example</a>
</dt>
<dt>70.17. <a href="lua.ref.curl.escape.php#lua.ref.curl.escape.example">curl.escape example</a>
</dt>
<dt>70.18. <a href="lua.ref.curl.new.php#lua.ref.curl.new.example">curl.new example</a>
</dt>
<dt>70.19. <a href="lua.ref.curl.unescape.php#lua.ref.curl.unescape.example">curl.unescape example</a>
</dt>
<dt>70.20. <a href="lua.ref.msg_code.php#lua.ref.msg_code.example.get">Getting a Code</a>
</dt>
<dt>70.21. <a href="lua.ref.msg_code.php#lua.ref.msg_code.example.set">Setting a Code</a>
</dt>
<dt>70.22. <a href="lua.ref.msg_get_envelope2.php#lua.ref.msg_get_envelope2.example.get">msg:get_envelope2 example</a>
</dt>
<dt>70.23. <a href="lua.ref.header.php#lua.ref.msg_header.example.get">Getting a Header: Pass One Parameter</a>
</dt>
<dt>70.24. <a href="lua.ref.header.php#lua.ref.msg_header.example.delete">Delete a Header: Pass Two Parameters</a>
</dt>
<dt>70.25. <a href="lua.ref.header.php#lua.ref.msg_header.example.set">Setting a Header: Pass Two Parameters</a>
</dt>
<dt>70.26. <a href="lua.ref.header.php#lua.ref.msg_header.example.replace">Replace a Header: Pass Three Parameters</a>
</dt>
<dt>70.27. <a href="lua.ref.msg_listener_addr.php#lua.ref.msg_listener_addr.example">msg:listener_addr example</a>
</dt>
<dt>70.28. <a href="lua.ref.msg_reception_peer.php#lua.ref.msg_reception_peer.example">msg:reception_peer example</a>
</dt>
<dt>70.29. <a href="lua.ref.msys.core.io_wrapper_open.php#lua.ref.msys.core.io_wrapper_open.example">msys.core.io_wrapper_open</a>
</dt>
<dt>70.30. <a href="lua.ref.msys.httpsrv.register.php#lua.ref.msys.httpsrv.register.example">msys.httpsrv.register Example</a>
</dt>
<dt>70.31. <a href="lua.ref.msys.idn.php#msys.idn.to_idn.example">msys.idn example</a>
</dt>
<dt>70.32. <a href="lua.ref.msys.idn_utf8.php#msys.idn.to_idn_utf8.example">msys.idn example</a>
</dt>
<dt>70.33. <a href="lua.ref.msys.registerControl.php#lua.ref.msys.registerControl.example">registerControl example</a>
</dt>
<dt>70.34. <a href="lua.ref.msys.sleep.php#lua.ref.msys.sleep.example">msys.sleep example</a>
</dt>
<dt>70.35. <a href="lua.ref.session_request_url_get.php#lua.ref.session_request_url_get.example">session:request_url_get Example</a>
</dt>
<dt>70.36. <a href="lua.ref.json.decode.php#lua.ref.json.decode.example">json.decode example</a>
</dt>
<dt>70.37. <a href="lua.ref.json.encode.php#lua.ref.json.encode.example">json.encode example</a>
</dt>
<dt>70.38. <a href="lua.ref.json.new.php#lua.ref.new.example">json.new example</a>
</dt>
<dt>70.39. <a href="lua.ref.json.strerror.php#lua.ref.json.strerror.example">json.strerror example</a>
</dt>
<dt>70.40. <a href="lua.ref.msg.batch_id.php#lua.ref.msg.batch_id.example">msg.batch_id example</a>
</dt>
<dt>70.41. <a href="lua.ref.msg_binding.php#lua.ref.msg_binding.example">msg:binding example</a>
</dt>
<dt>70.42. <a href="lua.ref.msg_get_delivery_method.php#lua.ref.msg_get_delivery_method.example">msg:get_delivery_method example</a>
</dt>
<dt>70.43. <a href="lua.ref.msgpart_addLastChild.php#lua.ref.msgpart_addLastChild.example">msgpart:addLastChild example</a>
</dt>
<dt>70.44. <a href="lua.ref.msgpart_content_type.php#lua.ref.msgpart.content_type.example2">msgpart:content_type example</a>
</dt>
<dt>70.45. <a href="lua.ref.msys.audit.connections.php#lua.ref.msys.audit.connections.example">msys.audit.connections example</a>
</dt>
<dt>70.46. <a href="lua.ref.msys.audit_series.define.php#audit_series.define.example">audit_series.define example</a>
</dt>
<dt>70.47. <a href="lua.ref.msys.av.scan.php#lua.ref.msys.av.scan.example">msys.av.scan example using clamav</a>
</dt>
<dt>70.48. <a href="lua.ref.msys.av.scan_part.php#lua.ref.msys.av.scan_part.example">msys.av.scan_part example using clamav</a>
</dt>
<dt>70.49. <a href="lua.ref.msys.bounce.classify_smtp_response.php#lua.ref.msys.bounce.classify_smtp_response.example">msys.bounce.classify_smtp_response example</a>
</dt>
<dt>70.50. <a href="lua.ref.msys.brightmail.scan.php#lua.ref.msys.brightmail.scan.example">msys.brightmail.scan example</a>
</dt>
<dt>70.51. <a href="lua.ref.msys.cidr.define.php#lua.ref.msys.cidr.define.example">msys.cidr.define example</a>
</dt>
<dt>70.52. <a href="lua.ref.msys.counter.inc.php#lua.ref.msys.counter.inc.example1">msys.counter.inc example using counter handles</a>
</dt>
<dt>70.53. <a href="lua.ref.msys.counter.inc.php#lua.ref.msys.counter.inc.example2">msys.counter.inc example using counter paths</a>
</dt>
<dt>70.54. <a href="lua.ref.msys.counter.read.php#lua.ref.msys.counter.read.example">msys.counter.read example</a>
</dt>
<dt>70.55. <a href="lua.ref.msys.db.fetch_row.php#lua.ref.msys.db.fetch_row.example">msys.db.fetch_row example</a>
</dt>
<dt>70.56. <a href="lua.ref.msys.db.query.php#lua.ref.msys.db.query.example">msys.db.query example</a>
</dt>
<dt>70.57. <a href="lua.ref.msys.delivery.ob_get_current_message.php#lua.ref.msys.delivery.ob_get_current_message.example">msys.delivery.ob_get_current_message example</a>
</dt>
<dt>70.58. <a href="lua.ref.msys.expurgate.scan.php#lua.ref.msys.expurgate.scan.example">msys.expurgate.scan example</a>
</dt>
<dt>70.59. <a href="lua.ref.msys.gcm.gcm_classify_error.php#lua.ref.msys.gcm.gcm_classify_error.example">msys.gcm.gcm_classify_error example</a>
</dt>
<dt>70.60. <a href="lua.ref.msys.os.statvfs_read.php#lua.ref.msys.os.statvfs_read.example">msys.os.statvfs_subscribe and msys.os.statvfs_read example</a>
</dt>
<dt>70.61. <a href="lua.ref.msys.symantec_beik.scan.php#lua.ref.msys.symantec_beik.scan.example">msys.symantec_beik_scan example</a>
</dt>
<dt>70.62. <a href="lua.ref.msys.threadpool.stat.php#lua.re.msys.threadpool_stat.example">msys.threadpool_stat example</a>
</dt>
<dt>70.63. <a href="lua.ref.msys.timer.after.php#lua.ref.msys.timer.after.example">msys.timer.after example</a>
</dt>
<dt>70.64. <a href="lua.ref.msys.timer.every.php#lua.ref.msys.timer.every.example">msys.timer.every example</a>
</dt>
<dt>70.65. <a href="lua.ref.msys.validate.opendkim.get_num_sigs.php#lua.ref.msys.validate.opendkim.get_num_sigs.example">msys.validate.opendkim.get_num_sigs example</a>
</dt>
<dt>70.66. <a href="lua.ref.msys.validate.opendkim.get_sig_keysize.php#lua.ref.msys.validate.opendkim.get_sig_keysize.example">msys.validate.opendkim.get_num_sigs example</a>
</dt>
<dt>70.67. <a href="lua.ref.msys.validate.opendkim.sign.php#lua.ref.msys.validate.opendkim.sign.example">msys.validate.opendkim.sign example</a>
</dt>
<dt>70.68. <a href="lua.ref.msys.validate.opendkim.verify.php#lua.ref.msys.validate.opendkim.verify.example">msys.validate.opendkim.verify example</a>
</dt>
<dt>70.69. <a href="lua.ref.vctx_add_recipient.php#lua.ref.vctx_add_recipient.example">vctx_add_recipient example</a>
</dt>
<dt>70.70. <a href="lua.ref.vctx_disconnect.php#lua.ref.vctx_disconnect.example">vctx:disconnect example</a>
</dt>
<dt>70.71. <a href="lua.ref.vctx_set.php#lua.ref.vctx_set.example">vctx:set example</a>
</dt>
<dt>70.72. <a href="lua.ref.vctx_tarpit.php#lua.ref.vctx_tarpit.example">vctx:tarpit example</a>
</dt>
<dt>70.73. <a href="lua.ref.xml.doc_root.php#lua.ref.xml.doc_root.example">doc:root example</a>
</dt>
<dt>70.74. <a href="lua.ref.xml.doc_tostring.php#lua.ref.xml.doc_tostring.example">doc:tostring example</a>
</dt>
<dt>70.75. <a href="lua.ref.xml.doc_xpath.php#lua.ref.xml.doc_xpath.example">doc:xpath example</a>
</dt>
<dt>70.76. <a href="lua.ref.xml.node_addchild.php#lua.ref.xml.node_addchild.example">node:addchild example</a>
</dt>
<dt>70.77. <a href="lua.ref.xml.node_attribute.php#lua.ref.xml.node_attribute.example">example</a>
</dt>
<dt>70.78. <a href="lua.ref.xml.node_children.php#lua.ref.xml.node_children.example">example</a>
</dt>
<dt>70.79. <a href="lua.ref.xml.node_contents.php#idp19439728">node:contents example</a>
</dt>
<dt>70.80. <a href="lua.ref.xml.node_doc.php#idp19454864">example</a>
</dt>
<dt>70.81. <a href="lua.ref.xml.node_name.php#lua.ref.xml.node_name.example">node:name example</a>
</dt>
<dt>70.82. <a href="lua.ref.xml.node_tostring.php#lua.ref.xml.node_tostring.example">node:tostring example</a>
</dt>
<dt>70.83. <a href="lua.ref.xml.node_unlink.php#idp19504480">node:unlink example</a>
</dt>
<dt>70.84. <a href="lua.ref.xml.parsexml.php#lua.ref.xml.parsexml.example">xml.parsexml example</a>
</dt>
<dt>71.1. <a href="modules.ac_auth.php#example.ac_auth.ref">"ac_auth" in ecelerity.conf</a>
</dt>
<dt>71.2. <a href="modules.ac_auth.php#example.ac_auth_lua">Custom Auth Handler</a>
</dt>
<dt>71.3. <a href="modules.ac_auth.php#example.ac_auth.hook">Accessing the Validate Context</a>
</dt>
<dt>71.4. <a href="modules.adaptive.php#modules.adaptive.configuration.example">adaptive Configuration</a>
</dt>
<dt>71.5. <a href="modules.adaptive.php#modules.adaptive.adaptive_sweep_rule_enabled.example">adaptive_sweep_rule_enabled example</a>
</dt>
<dt>71.6. <a href="modules.adaptive.php#modules.adaptive.adaptive_sweep_rule.examples">adaptive_sweep_rule examples</a>
</dt>
<dt>71.7. <a href="modules.alerting.php#example.alerting">alerting configuration</a>
</dt>
<dt>71.8. <a href="modules.antivirus.php#example.antivirus.3">antivirus Configuration</a>
</dt>
<dt>71.9. <a href="modules.as_logger.php#example.as_logger_3">as_logger Configuration</a>
</dt>
<dt>71.10. <a href="modules.as_logger.php#example.as_logger.cidr_maintain_3">cidr_maintain crontab entry</a>
</dt>
<dt>71.11. <a href="modules.auth_ds.php#example.auth_ds.password_column.3">password_column</a>
</dt>
<dt>71.12. <a href="modules.auth_ds.php#example.auth_ds.configuration">auth_ds Configuration</a>
</dt>
<dt>71.13. <a href="modules.auth_ds.php#example.auth_ds.mysql.3">Using MySQL as a data store</a>
</dt>
<dt>71.14. <a href="modules.auth_ds.php#example.auth_ds.ldap.3">Authenticating using LDAP</a>
</dt>
<dt>71.15. <a href="modules.auth_ds.php#example.auth_ds.bind.3">Using the bind-only feature</a>
</dt>
<dt>71.16. <a href="modules.auth_radius.php#example.auth_radius.3">auth_radius module</a>
</dt>
<dt>71.17. <a href="modules.auth_radius.php#example.auth_radius.map.3">auth_radius map</a>
</dt>
<dt>71.18. <a href="modules.beik.php#idp20003664">beik Configuration</a>
</dt>
<dt>71.19. <a href="modules.bind_address_secondary.php#modules.bind_address_secondary.example">bind_address_secondary Configuration</a>
</dt>
<dt>71.20. <a href="modules.bounce_classifier_override.php#example.bounce_classifier_override">bounce_classifier_override Configuration</a>
</dt>
<dt>71.21. <a href="modules.bounce_logger.php#modules.bounce_logger.node.example">bounce_logger Configuration</a>
</dt>
<dt>71.22. <a href="modules.bounce_logger.php#modules.bounce_logger.cluster.example">bounce_logger in ecelerity-cluster.conf</a>
</dt>
<dt>71.23. <a href="modules.brightmail.php#example.brightmail.3">brightmail Configuration</a>
</dt>
<dt>71.24. <a href="modules.chunk_logger.php#example.chunk_logger">chunk_logger Configuration</a>
</dt>
<dt>71.25. <a href="modules.chunk_logger.php#example.chunk_logger.lua_interface">Lua Interface</a>
</dt>
<dt>71.26. <a href="modules.chunk_logger.php#example.chunk_logger.c_interface">C Interface</a>
</dt>
<dt>71.27. <a href="modules.cidrdb.php#example.cidrdb.csv">Specifying a Datasource</a>
</dt>
<dt>71.28. <a href="modules.clamav.php#example.clamav.3">clamav Configuration</a>
</dt>
<dt>71.29. <a href="modules.cloudmark.php#example.cloudmark.3.2">cloudmark Configuration</a>
</dt>
<dt>71.30. <a href="modules.cloudmark.php#example.cloudmark.activefilter">Configuring the maildir module for use with ActiveFilter</a>
</dt>
<dt>71.31. <a href="modules.cloudmark.php#idp20427536">Lua Policy for use with ActiveFilter</a>
</dt>
<dt>71.32. <a href="modules.cluster.php#modules.cluster.configuration.example">cluster Configuration</a>
</dt>
<dt>71.33. <a href="modules.cluster.php#conf.ref.ecelerity_cluster.conf.replication">Replication</a>
</dt>
<dt>71.34. <a href="modules.cluster.php#idp20595088"><span class="trademark">DuraVIP</span>™ Network Topology in the Cluster Module</a>
</dt>
<dt>71.35. <a href="modules.commtouch.php#example.commtouch.3">commtouch_ctasd Configuration</a>
</dt>
<dt>71.36. <a href="modules.compress_spool.php#example.compress_spool.3">compress_spool Configuration</a>
</dt>
<dt>71.37. <a href="modules.conntrol.php#example.conntrol.3">conntrol Configuration</a>
</dt>
<dt>71.38. <a href="modules.csapi.php#modules.csapi.example3.1">csapi Configuration</a>
</dt>
<dt>71.39. <a href="modules.custom_bounce_logger.php#example.custom_bounce_logger">custom_bounce_logger module</a>
</dt>
<dt>71.40. <a href="modules.custom_logger.php#modules.custom_logger.example">custom_logger Configuration</a>
</dt>
<dt>71.41. <a href="modules.custom_logger.php#modules.custom_logger.namespace.example"><code class="option">namespace</code> example</a>
</dt>
<dt>71.42. <a href="modules.delay_dsn.php#example.delay_dsn.3">delay_dsn module</a>
</dt>
<dt>71.43. <a href="modules.dnsbuf.php#example.dnsbuf">dnsbuf module</a>
</dt>
<dt>71.44. <a href="modules.domainkeys.php#example.dk_sign.3">dk_sign module</a>
</dt>
<dt>71.45. <a href="modules.domainkeys.php#example.dk_validate.3">dk_validate module</a>
</dt>
<dt>71.46. <a href="modules.ds_core.php#modules.ds_core.configuration.example">Specifying a Datasource</a>
</dt>
<dt>71.47. <a href="modules.ds_core.php#example.ds_core.odbc.3">odbc datasource</a>
</dt>
<dt>71.48. <a href="modules.ds_core.php#example.ds_core.ldap.3">ldap datasource</a>
</dt>
<dt>71.49. <a href="modules.ds_core.php#module.ds_core.ldap.authentication.example">Active Directory Authentication Configuration</a>
</dt>
<dt>71.50. <a href="modules.ds_core.php#example.ds_core.csv.3">csv datasource</a>
</dt>
<dt>71.51. <a href="modules.ds_core.php#example.ds_core.postgresql.3">PostgreSQL datasource</a>
</dt>
<dt>71.52. <a href="modules.ds_core.php#example.ds_core.cdb.3">cdb datasource</a>
</dt>
<dt>71.53. <a href="modules.ds_core.php#example.ds_core.iowrapper.3">iowrapper datasource</a>
</dt>
<dt>71.54. <a href="modules.ds_core.php#example.ds_core.mysql.3">MySQL datasource</a>
</dt>
<dt>71.55. <a href="modules.ec_logger.php#modules.ec_logger.node.example">ec_logger Configuration</a>
</dt>
<dt>71.56. <a href="modules.ec_logger.php#modules.ec_logger.cluster.example">ec_logger in ecelerity-cluster.conf</a>
</dt>
<dt>71.57. <a href="modules.ec_logger.php#modules.ec_logger.eccmgr.example">Logger in eccluster.conf</a>
</dt>
<dt>71.58. <a href="modules.eleven.php#example.eleven3">eleven module</a>
</dt>
<dt>71.59. <a href="modules.engage_tracker.php#modules.engage_tracker.configuration.example">engage_tracker Configuration</a>
</dt>
<dt>71.60. <a href="modules.event_hydrant.php#modules.event_hydrant.configuration.example">event_hydrant Configuration</a>
</dt>
<dt>71.61. <a href="modules.exim_logger.php#example.exim_logger.3">exim_logger Configuration</a>
</dt>
<dt>71.62. <a href="modules.fbl.php#example.fbl.3">fbl Configuration</a>
</dt>
<dt>71.63. <a href="modules.fbl.php#idp21879808">fbl usage</a>
</dt>
<dt>71.64. <a href="modules.host_fingerprint.php#example.fingerprint3">fingerprint module</a>
</dt>
<dt>71.65. <a href="modules.http_logger.php#modules.http_logger.configuration.example">http_logger Configuration</a>
</dt>
<dt>71.66. <a href="modules.inbound_audit.php#example.inbound_audit.3">inbound_audit Configuration</a>
</dt>
<dt>71.67. <a href="modules.ipv6_lookup.php#modules.ipv6_lookup.example">ipv6_lookup Configuration</a>
</dt>
<dt>71.68. <a href="modules.jlog.php#modules.jlog.reader.custom_logger.example">custom_logger</a>
</dt>
<dt>71.69. <a href="modules.jlog.php#crm.processing.logs.jlog.reader.example">JLog::Reader example</a>
</dt>
<dt>71.70. <a href="modules.mail_loop.php#example.mail_loop.3">mail_loop Configuration</a>
</dt>
<dt>71.71. <a href="modules.maildir.php#example.maildir.3">maildir module</a>
</dt>
<dt>71.72. <a href="modules.msg_gen.php#modules.msg_gen.configuration.example">msg_gen Configuration</a>
</dt>
<dt>71.73. <a href="modules.mxip.php#modules.mxip.test.domain.example">Example Configuration - Test Domain</a>
</dt>
<dt>71.74. <a href="modules.opendkim.php#modules.opendkim.example">opendkim Configuration</a>
</dt>
<dt>71.75. <a href="modules.outbound_audit.php#example.outbound_audit.3">outbound_audit Configuration</a>
</dt>
<dt>71.76. <a href="modules.outbound_smtp_auth.php#modules.outbound_smtp_auth.example.set_username_pw">Setting User Name and Password in Lua</a>
</dt>
<dt>71.77. <a href="modules.outbound_smtp_auth.php#modules.outbound_smtp_auth.example.set_auth_parms">Setting Distinct Authorization Parameters</a>
</dt>
<dt>71.78. <a href="modules.persistio.php#example.persist_io.3">persist_io module</a>
</dt>
<dt>71.79. <a href="modules.pipeio.php#example.pipe_io.3">pipe_io module</a>
</dt>
<dt>71.80. <a href="modules.pipe_transport.php#example.pipe_transport.3">pipe_transport version</a>
</dt>
<dt>71.81. <a href="modules.postfix_logger.php#example.postfix_logger.3">posfix_logger Configuration</a>
</dt>
<dt>71.82. <a href="modules.response_transcode.php#example.response_transcode.3">response_transcode module</a>
</dt>
<dt>71.83. <a href="modules.sched.php#example.sched.3">sched module</a>
</dt>
<dt>71.84. <a href="modules.scriptlet.php#modules.scriptlet.code">scriptlet Configuration</a>
</dt>
<dt>71.85. <a href="modules.securecreds.php#example.securecreds">securecreds module</a>
</dt>
<dt>71.86. <a href="modules.seedlist.php#example.seedlist.2">seedlist Configuration</a>
</dt>
<dt>71.87. <a href="modules.seedlist.php#example.seedlist.headers.3">seedlist VERP</a>
</dt>
<dt>71.88. <a href="modules.sendmail_logger.php#example.sendmail_logger.3">sendmail_logger module</a>
</dt>
<dt>71.89. <a href="modules.smtp_auth_proxy.php#modules.smtp_auth_proxy.example">Example Configuration</a>
</dt>
<dt>71.90. <a href="modules.smtp_cbv.php#example.smtp_cbv.3">smtp_cbv Configuration</a>
</dt>
<dt>71.91. <a href="modules.smtp_rcptto_proxy.php#modules.smtp_rcptto_proxy.example">Example Configuration</a>
</dt>
<dt>71.92. <a href="modules.smtpapi.php#example.smtpapi.esmtp_listener">ESMTP Listener</a>
</dt>
<dt>71.93. <a href="modules.spf.php#example.spf_v1.3">spf Configuration</a>
</dt>
<dt>71.94. <a href="modules.static_routes.php#modules.static_routes.example">Example Configuration</a>
</dt>
<dt>71.95. <a href="modules.suppress_spool.php#example.suppress_spool3">suppress_spool module</a>
</dt>
<dt>71.96. <a href="modules.syslog_io.php#example.syslog.3">syslog_io version 3.0</a>
</dt>
<dt>71.97. <a href="modules.syslog_io.php#example.syslog.paniclog.3">Usage</a>
</dt>
<dt>71.98. <a href="tls_macros.php#example.custom_logger.tls">Example custom_logger Configuration</a>
</dt>
<dt>71.99. <a href="modules.url_ripper.php#example.url_ripper.3">url_ripper Configuration</a>
</dt>
<dt>72.1. <a href="conf.ref.alias_schemes.php#example.alias_schemes.3">Alias_Schemes example</a>
</dt>
<dt>72.2. <a href="conf.ref.authorization.php#example.authorization.3">authorization</a>
</dt>
<dt>72.3. <a href="conf.ref.capabilities.php#example.capabilities">Capabilities in a Single-node Configuration</a>
</dt>
<dt>72.4. <a href="conf.ref.capabilities.php#example.capabilities.cluster">Capabilities in a Cluster Configuration</a>
</dt>
<dt>72.5. <a href="conf.ref.crypto_engine.php#example.crypto_engine">crypto_engine example</a>
</dt>
<dt>72.6. <a href="conf.ref.ecstream_port.php#conf.ref.ecstream_port.example">ecstream_port example</a>
</dt>
<dt>72.7. <a href="conf.ref.security.php#example.security">Security Scope in a Single-node Configuration</a>
</dt>
<dt>72.8. <a href="conf.ref.security.php#example.security.cluster">Security Scope in a Cluster Configuration</a>
</dt>
<dt>72.9. <a href="conf.ref.snmp.php#example.snmp.3">Trap_Destination</a>
</dt>
<dt>72.10. <a href="conf.ref.supplemental_groups.php#conf.ref.supplemental_groups.example">supplemental_groups Example</a>
</dt>
<dt>72.11. <a href="conf.ref.user.php#example.user">user and group Configuration</a>
</dt>
<dt>73.1. <a href="console_commands.counter.php#console_commands.counter.list.example">counter list</a>
</dt>
<dt>74.1. <a href="executable.credmgr.php#executable.credmgr.examples">credmgr examples</a>
</dt>
<dt>74.2. <a href="executable.ec_rotate.php#executable.ec_rotate.example"><span class="command">ec_rotate</span> Command</a>
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
