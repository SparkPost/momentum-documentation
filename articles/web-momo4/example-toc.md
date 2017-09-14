Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| Momentum 4 Reference Manual |

**List of Examples**

<dl>

<dt>15.1\. [Domain Scope and Fallback](ecelerity.conf.fallback.php#domain-scope-fallback)</dt>

<dt>15.2\. [Binding Scope and Fallback](ecelerity.conf.fallback.php#binding-scope-fallback)</dt>

<dt>15.3\. [Binding_Group and Fallback](ecelerity.conf.fallback.php#binding-group-fallback)</dt>

<dt>15.4\. [Peer Scope and ACLs](listeners.php#example.conf.peer)</dt>

<dt>16.1\. [eccluster.conf file](conf.ref.eccluster.conf.php#conf.ref.eccluster.conf.example)</dt>

<dt>16.2\. [Logs Stanza](conf.ref.eccluster.conf.php#conf.ref.eccluster.conf.logs.stanza)</dt>

<dt>16.3\. [ecelerity-cluster.conf](conf.ref.ecelerity_cluster.conf.php#conf.ref.ecelerity_cluster.conf.example)</dt>

<dt>17.1\. [Control_Listener Stanza](control_auth.php#control_auth.control_listener.stanza)</dt>

<dt>20.1\. [msg-gen.conf](conf.ref.msg_gen.conf.php#conf.ref.msg_gen.conf.example)</dt>

<dt>28.1\. [Replicated caches](cluster.config.replication.php#cluster.replicatedcache.code)</dt>

<dt>34.1\. [ec_rotate.conf](log_rotating.php#conf.ref.ec_rotate.conf.default)</dt>

<dt>37.1\. [Create console command](operations.console.lua.php#operations.console.lua.registerControl)</dt>

<dt>62.1\. [Connection Context Variables in ESMTP_Listener](policy.php#policy.context-based-on-ip3.ex)</dt>

<dt>62.2\. [EHLO Example](implementing.policy.scriptlets.php#policy.scriptlets.ehlo.example)</dt>

<dt>62.3\. [Scriptlet Configuration](implementing.policy.scriptlets.php#policy.scriptlets.configuration)</dt>

<dt>70.1\. [lua.ref.msy.db.execute example](lua.ref.msys.db.execute.php#lua.ref.msy.db.execute.example)</dt>

<dt>70.2\. [ac:esmtp_capability_add example](lua.ref.ac_esmtp_capability_add.php#lua.ref.ac_esmtp_capability_add.example)</dt>

<dt>70.3\. [msys.cloudmark.add_af_data Example](lua.ref.msys.cloudmark.add_af_data.php#lua.ref.msys.cloudmark.add_af_data.example)</dt>

<dt>70.4\. [msys.cloudmark.score example](lua.ref.msys.cloudmark.score.php#lua.ref.msys.cloudmark.score.example)</dt>

<dt>70.5\. [msys.cloudmark.score_af Example](lua.ref.msys.cloudmark.score_af.php#lua.ref.msys.cloudmark.score_af.example)</dt>

<dt>70.6\. [msys.cloudmark.set_af_mode_discard Example](lua.ref.msys.cloudmark.set_af_mode_discard.php#lua.ref.msys.cloudmark.set_af_mode_discard.example)</dt>

<dt>70.7\. [msys.cloudmark.set_af_mode_keep Example](lua.ref.msys.cloudmark.set_af_mode_keep.php#lua.ref.msys.cloudmark.set_af_mode_keep.example)</dt>

<dt>70.8\. [msys.cloudmark.set_af_mode_movemsg Example](lua.ref.msys.cloudmark.set_af_mode_movemsg.php#lua.ref.msys.cloudmark.set_af_mode_movemsg.example)</dt>

<dt>70.9\. [msys.cloudmark.set_af_msi_address Example](lua.ref.msys.cloudmark.set_af_msi_address.php#lua.ref.msys.cloudmark.set_af_msi_address.example)</dt>

<dt>70.10\. [msys.apn_classify_error example](lua.ref.msys.apn.apn_status_classifier.php#lua.ref.msys.apn_classify_error.example)</dt>

<dt>70.11\. [client:do_request example](lua.ref.client_do_request.php#lua.ref.client_do_request.example)</dt>

<dt>70.12\. [client:get_status example](lua.ref.client_get_status.php#lua.ref.client_get_status.example)</dt>

<dt>70.13\. [client:set_header example](lua.ref.client_set_header.php#lua.ref.client_set_header.example)</dt>

<dt>70.14\. [c:close example](lua.ref.curl.c_close.php#lua.ref.curl.c_close.example)</dt>

<dt>70.15\. [c:perform example](lua.ref.curl.c_perform.php#lua.ref.curl.c_perform.example)</dt>

<dt>70.16\. [c:setopt example](lua.ref.curl.c_setopt.php#lua.ref.c_setopt.example)</dt>

<dt>70.17\. [curl.escape example](lua.ref.curl.escape.php#lua.ref.curl.escape.example)</dt>

<dt>70.18\. [curl.new example](lua.ref.curl.new.php#lua.ref.curl.new.example)</dt>

<dt>70.19\. [curl.unescape example](lua.ref.curl.unescape.php#lua.ref.curl.unescape.example)</dt>

<dt>70.20\. [Getting a Code](lua.ref.msg_code.php#lua.ref.msg_code.example.get)</dt>

<dt>70.21\. [Setting a Code](lua.ref.msg_code.php#lua.ref.msg_code.example.set)</dt>

<dt>70.22\. [msg:get_envelope2 example](lua.ref.msg_get_envelope2.php#lua.ref.msg_get_envelope2.example.get)</dt>

<dt>70.23\. [Getting a Header: Pass One Parameter](lua.ref.header.php#lua.ref.msg_header.example.get)</dt>

<dt>70.24\. [Delete a Header: Pass Two Parameters](lua.ref.header.php#lua.ref.msg_header.example.delete)</dt>

<dt>70.25\. [Setting a Header: Pass Two Parameters](lua.ref.header.php#lua.ref.msg_header.example.set)</dt>

<dt>70.26\. [Replace a Header: Pass Three Parameters](lua.ref.header.php#lua.ref.msg_header.example.replace)</dt>

<dt>70.27\. [msg:listener_addr example](lua.ref.msg_listener_addr.php#lua.ref.msg_listener_addr.example)</dt>

<dt>70.28\. [msg:reception_peer example](lua.ref.msg_reception_peer.php#lua.ref.msg_reception_peer.example)</dt>

<dt>70.29\. [msys.core.io_wrapper_open](lua.ref.msys.core.io_wrapper_open.php#lua.ref.msys.core.io_wrapper_open.example)</dt>

<dt>70.30\. [msys.httpsrv.register Example](lua.ref.msys.httpsrv.register.php#lua.ref.msys.httpsrv.register.example)</dt>

<dt>70.31\. [msys.idn example](lua.ref.msys.idn.php#msys.idn.to_idn.example)</dt>

<dt>70.32\. [msys.idn example](lua.ref.msys.idn_utf8.php#msys.idn.to_idn_utf8.example)</dt>

<dt>70.33\. [registerControl example](lua.ref.msys.registerControl.php#lua.ref.msys.registerControl.example)</dt>

<dt>70.34\. [msys.sleep example](lua.ref.msys.sleep.php#lua.ref.msys.sleep.example)</dt>

<dt>70.35\. [session:request_url_get Example](lua.ref.session_request_url_get.php#lua.ref.session_request_url_get.example)</dt>

<dt>70.36\. [json.decode example](lua.ref.json.decode.php#lua.ref.json.decode.example)</dt>

<dt>70.37\. [json.encode example](lua.ref.json.encode.php#lua.ref.json.encode.example)</dt>

<dt>70.38\. [json.new example](lua.ref.json.new.php#lua.ref.new.example)</dt>

<dt>70.39\. [json.strerror example](lua.ref.json.strerror.php#lua.ref.json.strerror.example)</dt>

<dt>70.40\. [msg.batch_id example](lua.ref.msg.batch_id.php#lua.ref.msg.batch_id.example)</dt>

<dt>70.41\. [msg:binding example](lua.ref.msg_binding.php#lua.ref.msg_binding.example)</dt>

<dt>70.42\. [msg:get_delivery_method example](lua.ref.msg_get_delivery_method.php#lua.ref.msg_get_delivery_method.example)</dt>

<dt>70.43\. [msgpart:addLastChild example](lua.ref.msgpart_addLastChild.php#lua.ref.msgpart_addLastChild.example)</dt>

<dt>70.44\. [msgpart:content_type example](lua.ref.msgpart_content_type.php#lua.ref.msgpart.content_type.example2)</dt>

<dt>70.45\. [msys.audit.connections example](lua.ref.msys.audit.connections.php#lua.ref.msys.audit.connections.example)</dt>

<dt>70.46\. [audit_series.define example](lua.ref.msys.audit_series.define.php#audit_series.define.example)</dt>

<dt>70.47\. [msys.av.scan example using clamav](lua.ref.msys.av.scan.php#lua.ref.msys.av.scan.example)</dt>

<dt>70.48\. [msys.av.scan_part example using clamav](lua.ref.msys.av.scan_part.php#lua.ref.msys.av.scan_part.example)</dt>

<dt>70.49\. [msys.bounce.classify_smtp_response example](lua.ref.msys.bounce.classify_smtp_response.php#lua.ref.msys.bounce.classify_smtp_response.example)</dt>

<dt>70.50\. [msys.brightmail.scan example](lua.ref.msys.brightmail.scan.php#lua.ref.msys.brightmail.scan.example)</dt>

<dt>70.51\. [msys.cidr.define example](lua.ref.msys.cidr.define.php#lua.ref.msys.cidr.define.example)</dt>

<dt>70.52\. [msys.counter.inc example using counter handles](lua.ref.msys.counter.inc.php#lua.ref.msys.counter.inc.example1)</dt>

<dt>70.53\. [msys.counter.inc example using counter paths](lua.ref.msys.counter.inc.php#lua.ref.msys.counter.inc.example2)</dt>

<dt>70.54\. [msys.counter.read example](lua.ref.msys.counter.read.php#lua.ref.msys.counter.read.example)</dt>

<dt>70.55\. [msys.db.fetch_row example](lua.ref.msys.db.fetch_row.php#lua.ref.msys.db.fetch_row.example)</dt>

<dt>70.56\. [msys.db.query example](lua.ref.msys.db.query.php#lua.ref.msys.db.query.example)</dt>

<dt>70.57\. [msys.delivery.ob_get_current_message example](lua.ref.msys.delivery.ob_get_current_message.php#lua.ref.msys.delivery.ob_get_current_message.example)</dt>

<dt>70.58\. [msys.expurgate.scan example](lua.ref.msys.expurgate.scan.php#lua.ref.msys.expurgate.scan.example)</dt>

<dt>70.59\. [msys.gcm.gcm_classify_error example](lua.ref.msys.gcm.gcm_classify_error.php#lua.ref.msys.gcm.gcm_classify_error.example)</dt>

<dt>70.60\. [msys.os.statvfs_subscribe and msys.os.statvfs_read example](lua.ref.msys.os.statvfs_read.php#lua.ref.msys.os.statvfs_read.example)</dt>

<dt>70.61\. [msys.symantec_beik_scan example](lua.ref.msys.symantec_beik.scan.php#lua.ref.msys.symantec_beik.scan.example)</dt>

<dt>70.62\. [msys.threadpool_stat example](lua.ref.msys.threadpool.stat.php#lua.re.msys.threadpool_stat.example)</dt>

<dt>70.63\. [msys.timer.after example](lua.ref.msys.timer.after.php#lua.ref.msys.timer.after.example)</dt>

<dt>70.64\. [msys.timer.every example](lua.ref.msys.timer.every.php#lua.ref.msys.timer.every.example)</dt>

<dt>70.65\. [msys.validate.opendkim.get_num_sigs example](lua.ref.msys.validate.opendkim.get_num_sigs.php#lua.ref.msys.validate.opendkim.get_num_sigs.example)</dt>

<dt>70.66\. [msys.validate.opendkim.get_num_sigs example](lua.ref.msys.validate.opendkim.get_sig_keysize.php#lua.ref.msys.validate.opendkim.get_sig_keysize.example)</dt>

<dt>70.67\. [msys.validate.opendkim.sign example](lua.ref.msys.validate.opendkim.sign.php#lua.ref.msys.validate.opendkim.sign.example)</dt>

<dt>70.68\. [msys.validate.opendkim.verify example](lua.ref.msys.validate.opendkim.verify.php#lua.ref.msys.validate.opendkim.verify.example)</dt>

<dt>70.69\. [vctx_add_recipient example](lua.ref.vctx_add_recipient.php#lua.ref.vctx_add_recipient.example)</dt>

<dt>70.70\. [vctx:disconnect example](lua.ref.vctx_disconnect.php#lua.ref.vctx_disconnect.example)</dt>

<dt>70.71\. [vctx:set example](lua.ref.vctx_set.php#lua.ref.vctx_set.example)</dt>

<dt>70.72\. [vctx:tarpit example](lua.ref.vctx_tarpit.php#lua.ref.vctx_tarpit.example)</dt>

<dt>70.73\. [doc:root example](lua.ref.xml.doc_root.php#lua.ref.xml.doc_root.example)</dt>

<dt>70.74\. [doc:tostring example](lua.ref.xml.doc_tostring.php#lua.ref.xml.doc_tostring.example)</dt>

<dt>70.75\. [doc:xpath example](lua.ref.xml.doc_xpath.php#lua.ref.xml.doc_xpath.example)</dt>

<dt>70.76\. [node:addchild example](lua.ref.xml.node_addchild.php#lua.ref.xml.node_addchild.example)</dt>

<dt>70.77\. [example](lua.ref.xml.node_attribute.php#lua.ref.xml.node_attribute.example)</dt>

<dt>70.78\. [example](lua.ref.xml.node_children.php#lua.ref.xml.node_children.example)</dt>

<dt>70.79\. [node:contents example](lua.ref.xml.node_contents.php#idp19439728)</dt>

<dt>70.80\. [example](lua.ref.xml.node_doc.php#idp19454864)</dt>

<dt>70.81\. [node:name example](lua.ref.xml.node_name.php#lua.ref.xml.node_name.example)</dt>

<dt>70.82\. [node:tostring example](lua.ref.xml.node_tostring.php#lua.ref.xml.node_tostring.example)</dt>

<dt>70.83\. [node:unlink example](lua.ref.xml.node_unlink.php#idp19504480)</dt>

<dt>70.84\. [xml.parsexml example](lua.ref.xml.parsexml.php#lua.ref.xml.parsexml.example)</dt>

<dt>71.1\. ["ac_auth" in ecelerity.conf](modules.ac_auth.php#example.ac_auth.ref)</dt>

<dt>71.2\. [Custom Auth Handler](modules.ac_auth.php#example.ac_auth_lua)</dt>

<dt>71.3\. [Accessing the Validate Context](modules.ac_auth.php#example.ac_auth.hook)</dt>

<dt>71.4\. [adaptive Configuration](modules.adaptive.php#modules.adaptive.configuration.example)</dt>

<dt>71.5\. [adaptive_sweep_rule_enabled example](modules.adaptive.php#modules.adaptive.adaptive_sweep_rule_enabled.example)</dt>

<dt>71.6\. [adaptive_sweep_rule examples](modules.adaptive.php#modules.adaptive.adaptive_sweep_rule.examples)</dt>

<dt>71.7\. [alerting configuration](modules.alerting.php#example.alerting)</dt>

<dt>71.8\. [antivirus Configuration](modules.antivirus.php#example.antivirus.3)</dt>

<dt>71.9\. [as_logger Configuration](modules.as_logger.php#example.as_logger_3)</dt>

<dt>71.10\. [cidr_maintain crontab entry](modules.as_logger.php#example.as_logger.cidr_maintain_3)</dt>

<dt>71.11\. [password_column](modules.auth_ds.php#example.auth_ds.password_column.3)</dt>

<dt>71.12\. [auth_ds Configuration](modules.auth_ds.php#example.auth_ds.configuration)</dt>

<dt>71.13\. [Using MySQL as a data store](modules.auth_ds.php#example.auth_ds.mysql.3)</dt>

<dt>71.14\. [Authenticating using LDAP](modules.auth_ds.php#example.auth_ds.ldap.3)</dt>

<dt>71.15\. [Using the bind-only feature](modules.auth_ds.php#example.auth_ds.bind.3)</dt>

<dt>71.16\. [auth_radius module](modules.auth_radius.php#example.auth_radius.3)</dt>

<dt>71.17\. [auth_radius map](modules.auth_radius.php#example.auth_radius.map.3)</dt>

<dt>71.18\. [beik Configuration](modules.beik.php#idp20003664)</dt>

<dt>71.19\. [bind_address_secondary Configuration](modules.bind_address_secondary.php#modules.bind_address_secondary.example)</dt>

<dt>71.20\. [bounce_classifier_override Configuration](modules.bounce_classifier_override.php#example.bounce_classifier_override)</dt>

<dt>71.21\. [bounce_logger Configuration](modules.bounce_logger.php#modules.bounce_logger.node.example)</dt>

<dt>71.22\. [bounce_logger in ecelerity-cluster.conf](modules.bounce_logger.php#modules.bounce_logger.cluster.example)</dt>

<dt>71.23\. [brightmail Configuration](modules.brightmail.php#example.brightmail.3)</dt>

<dt>71.24\. [chunk_logger Configuration](modules.chunk_logger.php#example.chunk_logger)</dt>

<dt>71.25\. [Lua Interface](modules.chunk_logger.php#example.chunk_logger.lua_interface)</dt>

<dt>71.26\. [C Interface](modules.chunk_logger.php#example.chunk_logger.c_interface)</dt>

<dt>71.27\. [Specifying a Datasource](modules.cidrdb.php#example.cidrdb.csv)</dt>

<dt>71.28\. [clamav Configuration](modules.clamav.php#example.clamav.3)</dt>

<dt>71.29\. [cloudmark Configuration](modules.cloudmark.php#example.cloudmark.3.2)</dt>

<dt>71.30\. [Configuring the maildir module for use with ActiveFilter](modules.cloudmark.php#example.cloudmark.activefilter)</dt>

<dt>71.31\. [Lua Policy for use with ActiveFilter](modules.cloudmark.php#idp20427536)</dt>

<dt>71.32\. [cluster Configuration](modules.cluster.php#modules.cluster.configuration.example)</dt>

<dt>71.33\. [Replication](modules.cluster.php#conf.ref.ecelerity_cluster.conf.replication)</dt>

<dt>71.34\. [DuraVIP™ Network Topology in the Cluster Module](modules.cluster.php#idp20595088)</dt>

<dt>71.35\. [commtouch_ctasd Configuration](modules.commtouch.php#example.commtouch.3)</dt>

<dt>71.36\. [compress_spool Configuration](modules.compress_spool.php#example.compress_spool.3)</dt>

<dt>71.37\. [conntrol Configuration](modules.conntrol.php#example.conntrol.3)</dt>

<dt>71.38\. [csapi Configuration](modules.csapi.php#modules.csapi.example3.1)</dt>

<dt>71.39\. [custom_bounce_logger module](modules.custom_bounce_logger.php#example.custom_bounce_logger)</dt>

<dt>71.40\. [custom_logger Configuration](modules.custom_logger.php#modules.custom_logger.example)</dt>

<dt>71.41\. [`namespace` example](modules.custom_logger.php#modules.custom_logger.namespace.example)</dt>

<dt>71.42\. [delay_dsn module](modules.delay_dsn.php#example.delay_dsn.3)</dt>

<dt>71.43\. [dnsbuf module](modules.dnsbuf.php#example.dnsbuf)</dt>

<dt>71.44\. [dk_sign module](modules.domainkeys.php#example.dk_sign.3)</dt>

<dt>71.45\. [dk_validate module](modules.domainkeys.php#example.dk_validate.3)</dt>

<dt>71.46\. [Specifying a Datasource](modules.ds_core.php#modules.ds_core.configuration.example)</dt>

<dt>71.47\. [odbc datasource](modules.ds_core.php#example.ds_core.odbc.3)</dt>

<dt>71.48\. [ldap datasource](modules.ds_core.php#example.ds_core.ldap.3)</dt>

<dt>71.49\. [Active Directory Authentication Configuration](modules.ds_core.php#module.ds_core.ldap.authentication.example)</dt>

<dt>71.50\. [csv datasource](modules.ds_core.php#example.ds_core.csv.3)</dt>

<dt>71.51\. [PostgreSQL datasource](modules.ds_core.php#example.ds_core.postgresql.3)</dt>

<dt>71.52\. [cdb datasource](modules.ds_core.php#example.ds_core.cdb.3)</dt>

<dt>71.53\. [iowrapper datasource](modules.ds_core.php#example.ds_core.iowrapper.3)</dt>

<dt>71.54\. [MySQL datasource](modules.ds_core.php#example.ds_core.mysql.3)</dt>

<dt>71.55\. [ec_logger Configuration](modules.ec_logger.php#modules.ec_logger.node.example)</dt>

<dt>71.56\. [ec_logger in ecelerity-cluster.conf](modules.ec_logger.php#modules.ec_logger.cluster.example)</dt>

<dt>71.57\. [Logger in eccluster.conf](modules.ec_logger.php#modules.ec_logger.eccmgr.example)</dt>

<dt>71.58\. [eleven module](modules.eleven.php#example.eleven3)</dt>

<dt>71.59\. [engage_tracker Configuration](modules.engage_tracker.php#modules.engage_tracker.configuration.example)</dt>

<dt>71.60\. [event_hydrant Configuration](modules.event_hydrant.php#modules.event_hydrant.configuration.example)</dt>

<dt>71.61\. [exim_logger Configuration](modules.exim_logger.php#example.exim_logger.3)</dt>

<dt>71.62\. [fbl Configuration](modules.fbl.php#example.fbl.3)</dt>

<dt>71.63\. [fbl usage](modules.fbl.php#idp21879808)</dt>

<dt>71.64\. [fingerprint module](modules.host_fingerprint.php#example.fingerprint3)</dt>

<dt>71.65\. [http_logger Configuration](modules.http_logger.php#modules.http_logger.configuration.example)</dt>

<dt>71.66\. [inbound_audit Configuration](modules.inbound_audit.php#example.inbound_audit.3)</dt>

<dt>71.67\. [ipv6_lookup Configuration](modules.ipv6_lookup.php#modules.ipv6_lookup.example)</dt>

<dt>71.68\. [custom_logger](modules.jlog.php#modules.jlog.reader.custom_logger.example)</dt>

<dt>71.69\. [JLog::Reader example](modules.jlog.php#crm.processing.logs.jlog.reader.example)</dt>

<dt>71.70\. [mail_loop Configuration](modules.mail_loop.php#example.mail_loop.3)</dt>

<dt>71.71\. [maildir module](modules.maildir.php#example.maildir.3)</dt>

<dt>71.72\. [msg_gen Configuration](modules.msg_gen.php#modules.msg_gen.configuration.example)</dt>

<dt>71.73\. [Example Configuration - Test Domain](modules.mxip.php#modules.mxip.test.domain.example)</dt>

<dt>71.74\. [opendkim Configuration](modules.opendkim.php#modules.opendkim.example)</dt>

<dt>71.75\. [outbound_audit Configuration](modules.outbound_audit.php#example.outbound_audit.3)</dt>

<dt>71.76\. [Setting User Name and Password in Lua](modules.outbound_smtp_auth.php#modules.outbound_smtp_auth.example.set_username_pw)</dt>

<dt>71.77\. [Setting Distinct Authorization Parameters](modules.outbound_smtp_auth.php#modules.outbound_smtp_auth.example.set_auth_parms)</dt>

<dt>71.78\. [persist_io module](modules.persistio.php#example.persist_io.3)</dt>

<dt>71.79\. [pipe_io module](modules.pipeio.php#example.pipe_io.3)</dt>

<dt>71.80\. [pipe_transport version](modules.pipe_transport.php#example.pipe_transport.3)</dt>

<dt>71.81\. [posfix_logger Configuration](modules.postfix_logger.php#example.postfix_logger.3)</dt>

<dt>71.82\. [response_transcode module](modules.response_transcode.php#example.response_transcode.3)</dt>

<dt>71.83\. [sched module](modules.sched.php#example.sched.3)</dt>

<dt>71.84\. [scriptlet Configuration](modules.scriptlet.php#modules.scriptlet.code)</dt>

<dt>71.85\. [securecreds module](modules.securecreds.php#example.securecreds)</dt>

<dt>71.86\. [seedlist Configuration](modules.seedlist.php#example.seedlist.2)</dt>

<dt>71.87\. [seedlist VERP](modules.seedlist.php#example.seedlist.headers.3)</dt>

<dt>71.88\. [sendmail_logger module](modules.sendmail_logger.php#example.sendmail_logger.3)</dt>

<dt>71.89\. [Example Configuration](modules.smtp_auth_proxy.php#modules.smtp_auth_proxy.example)</dt>

<dt>71.90\. [smtp_cbv Configuration](modules.smtp_cbv.php#example.smtp_cbv.3)</dt>

<dt>71.91\. [Example Configuration](modules.smtp_rcptto_proxy.php#modules.smtp_rcptto_proxy.example)</dt>

<dt>71.92\. [ESMTP Listener](modules.smtpapi.php#example.smtpapi.esmtp_listener)</dt>

<dt>71.93\. [spf Configuration](modules.spf.php#example.spf_v1.3)</dt>

<dt>71.94\. [Example Configuration](modules.static_routes.php#modules.static_routes.example)</dt>

<dt>71.95\. [suppress_spool module](modules.suppress_spool.php#example.suppress_spool3)</dt>

<dt>71.96\. [syslog_io version 3.0](modules.syslog_io.php#example.syslog.3)</dt>

<dt>71.97\. [Usage](modules.syslog_io.php#example.syslog.paniclog.3)</dt>

<dt>71.98\. [Example custom_logger Configuration](tls_macros.php#example.custom_logger.tls)</dt>

<dt>71.99\. [url_ripper Configuration](modules.url_ripper.php#example.url_ripper.3)</dt>

<dt>72.1\. [Alias_Schemes example](conf.ref.alias_schemes.php#example.alias_schemes.3)</dt>

<dt>72.2\. [authorization](conf.ref.authorization.php#example.authorization.3)</dt>

<dt>72.3\. [Capabilities in a Single-node Configuration](conf.ref.capabilities.php#example.capabilities)</dt>

<dt>72.4\. [Capabilities in a Cluster Configuration](conf.ref.capabilities.php#example.capabilities.cluster)</dt>

<dt>72.5\. [crypto_engine example](conf.ref.crypto_engine.php#example.crypto_engine)</dt>

<dt>72.6\. [ecstream_port example](conf.ref.ecstream_port.php#conf.ref.ecstream_port.example)</dt>

<dt>72.7\. [Security Scope in a Single-node Configuration](conf.ref.security.php#example.security)</dt>

<dt>72.8\. [Security Scope in a Cluster Configuration](conf.ref.security.php#example.security.cluster)</dt>

<dt>72.9\. [Trap_Destination](conf.ref.snmp.php#example.snmp.3)</dt>

<dt>72.10\. [supplemental_groups Example](conf.ref.supplemental_groups.php#conf.ref.supplemental_groups.example)</dt>

<dt>72.11\. [user and group Configuration](conf.ref.user.php#example.user)</dt>

<dt>73.1\. [counter list](console_commands.counter.php#console_commands.counter.list.example)</dt>

<dt>74.1\. [credmgr examples](executable.credmgr.php#executable.credmgr.examples)</dt>

<dt>74.2\. [ec_rotate Command](executable.ec_rotate.php#executable.ec_rotate.example)</dt>

</dl>

|   | [Table of Contents](index.php) |   |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)