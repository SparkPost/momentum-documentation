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

| Chapter 70. Lua Functions Reference |
| [Prev](apis.ec_httpsrv_request_peer_address.php)  | Part X. Reference |  [Next](lua.ref.msys.db.execute.php) |

## Chapter 70. Lua Functions Reference

**Table of Contents**

<dl class="toc">

<dt>[msys.db.execute](lua.ref.msys.db.execute.php) — Execute a query that is not expected to return data</dt>

<dt>[ac:esmtp_capability_add](lua.ref.ac_esmtp_capability_add.php) — Add a capability to the EHLO response</dt>

<dt>[ac:esmtp_capability_remove](lua.ref.ac_esmtp_capability_remove.php) — Remove a capability string from the EHLO response</dt>

<dt>[ac:inbound_session_count](lua.ref.ac_inbound_session_count.php) — Return the current inbound session count to this listener for the connecting IP</dt>

<dt>[msys.cloudmark.analyze](lua.ref.msys.cloudmark.analyze.php) — Analyze a message using Cloudmark</dt>

<dt>[msys.cloudmark.add_af_data](lua.ref.msys.cloudmark.add_af_data.php) — Pass data for use with the Cloudmark ActiveFilter.</dt>

<dt>[msys.cloudmark.score](lua.ref.msys.cloudmark.score.php) — Scan messages using Cloudmark</dt>

<dt>[msys.cloudmark.score_af](lua.ref.msys.cloudmark.score_af.php) — Set the Cloudmark ActiveFilter score threshold</dt>

<dt>[msys.cloudmark.set_af_mode_discard](lua.ref.msys.cloudmark.set_af_mode_discard.php) — Set the Cloudmark ActiveFilter mode to DISCARD.</dt>

<dt>[msys.cloudmark.set_af_mode_keep](lua.ref.msys.cloudmark.set_af_mode_keep.php) — Set the Cloudmark ActiveFilter mode to KEEP.</dt>

<dt>[msys.cloudmark.set_af_mode_movemsg](lua.ref.msys.cloudmark.set_af_mode_movemsg.php) — Set the Cloudmark ActiveFilter mode to MOVEMSG.</dt>

<dt>[msys.cloudmark.set_af_msi_address](lua.ref.msys.cloudmark.set_af_msi_address.php) — Set the address for the Cloudmark ActiveFilter MSI Messages.</dt>

<dt>[msys.apn.apn_status_classifier](lua.ref.msys.apn.apn_status_classifier.php) — Determine whether the delivery status code represents a permanent or temporary failure</dt>

<dt>[client:do_request](lua.ref.client_do_request.php) — Perform an HTTP request</dt>

<dt>[client:get_body](lua.ref.client_get_body.php) — Get the body of an HTTP response</dt>

<dt>[client:get_headers](lua.ref.client_get_headers.php) — Get HTTP headers</dt>

<dt>[client:get_status](lua.ref.client_get_status.php) — Return the status of an HTTP request</dt>

<dt>[sess:request_add_header](lua.ref.sess_request_add_header.php) — Add a header to an HTTP session</dt>

<dt>[sess:request_delete_header](lua.ref.sess_request_delete_header.php) — Delete a header from an HTTP session</dt>

<dt>[sess:request_finalize](lua.ref.sess_request_finalize.php) — Finalize changes to an HTTP request</dt>

<dt>[sess:request_set_body](lua.ref.sess_request_set_body.php) — Set the body of an HTTP session</dt>

<dt>[msys.httpclnt.http_status_classifier](lua.ref.msys.httpclnt.http_status_classifier.php) — Determine the delivery status of the "DLV_Response_Status" variable</dt>

<dt>[msys.http.client.new](lua.ref.msys.http.client.new.php) — Create an HTTP client</dt>

<dt>[client:parse_headers](lua.ref.client_parse_headers.php) — Parse the headers of an HTTP response</dt>

<dt>[client:set_header](lua.ref.client_set_header.php) — Set an HTTP header</dt>

<dt>[client:set_timeout](lua.ref.client_set_timeout.php) — Set the timeout for an HTTP client</dt>

<dt>[c:close](lua.ref.curl.c_close.php) — Close a curl object</dt>

<dt>[c:perform](lua.ref.curl.c_perform.php) — Perform the file transfer</dt>

<dt>[c:setopt](lua.ref.curl.c_setopt.php) — Set the option value of a curl object</dt>

<dt>[curl.escape](lua.ref.curl.escape.php) — URL encode a string</dt>

<dt>[curl.new](lua.ref.curl.new.php) — Create a cURL object</dt>

<dt>[curl.unescape](lua.ref.curl.unescape.php) — Unescape URL encoding in strings</dt>

<dt>[msys.core.dns_get_domain](lua.ref.msys.core.dns_get_domain.php) — Get a domain record</dt>

<dt>[msys.core.get_now_ts](lua.ref.msys.core.get_now_ts.php) — Get the current time</dt>

<dt>[msys.core.mail_queue_delay_domain](lua.ref.msys.core.mail_queue_delay_domain.php) — Add a domain record to the delayed queue</dt>

<dt>[msys.core.string_new](lua.ref.msys.core.string_new.php) — Create an ec_string</dt>

<dt>[msg:code](lua.ref.msg_code.php) — Get or set the message code</dt>

<dt>[msg:get_envelope2](lua.ref.msg_get_envelope2.php) — Get envelope values</dt>

<dt>[msg:header](lua.ref.header.php) — Manipulate message headers</dt>

<dt>[msg:listener_addr](lua.ref.msg_listener_addr.php) — Get the `recv_via` IP and/or PORT.</dt>

<dt>[msg:reception_peer](lua.ref.msg_reception_peer.php) — Get the `recv_from` IP and/or PORT.</dt>

<dt>[msg:context_delete](lua.ref.msg_context_delete.php) — Delete a context variable</dt>

<dt>[msg:context_exists](lua.ref.msg_context_exists.php) — Check if a context variable exists</dt>

<dt>[msg:context_exists_and_get](lua.ref.msg_context_exists_and_get.php) — Check if a context variable exists and get it</dt>

<dt>[msg:context_get](lua.ref.msg_context_get.php) — Get a context variable</dt>

<dt>[msg:context_set](lua.ref.msg_context_set.php) — Sets a context variable</dt>

<dt>[msgpart:unlink](lua.ref.msgpart_unlink.php) — Remove the part (and its children) from the MIME tree</dt>

<dt>[msys.core.io_wrapper_open](lua.ref.msys.core.io_wrapper_open.php) — Open a handle to a resource</dt>

<dt>[msys.cast](lua.ref.msys.cast.php) — Cast an object to the specified class</dt>

<dt>[msys.config](lua.ref.msys.config.php) — Set or get configuration values</dt>

<dt>[msys.dnsLookup](lua.ref.msys.dnslookup.php) — Perform a DNS lookup</dt>

<dt>[msys.expandMacro](lua.ref.msys.expandMacro.php) — Expand macros (such as sieve, spf and custom_logger macros)</dt>

<dt>[msys.getClassMetaTable](lua.ref.msys.getClassMetaTable.php) — Return the metatable for the named class</dt>

<dt>[msys.httpsrv.register](lua.ref.msys.httpsrv.register.php) — Register a Lua function as an HTTP endpoint</dt>

<dt>[msys.idn.to_idn](lua.ref.msys.idn.php) — Attempts to convert the domain to the IDN format</dt>

<dt>[msys.idn.to_utf8](lua.ref.msys.idn_utf8.php) — Converts an IDN formatted string to unicode</dt>

<dt>[msys.lock](lua.ref.msys.lock.php) — The current running OS level thread obtains a lock on the named mutex</dt>

<dt>[msys.parseRFC2822Addresses](lua.ref.msys.parseRFC2822Addresses.php) — Parse the address string per the address parsing rules defined in RFC2822</dt>

<dt>[msys.readfile](lua.ref.msys.readfile.php) — Read the entire contents of the specified file or URI</dt>

<dt>[msys.registerAuth](lua.ref.msys.registerAuth.php) — Register an authentication/authorization scheme that can be used for SMTP or control channel authentication</dt>

<dt>[msys.registerControl](lua.ref.msys.registerControl.php) — Register a command with the control channel subsystem</dt>

<dt>[msys.registerModule](lua.ref.msys.registerModule.php) — Register a Lua module with the system.</dt>

<dt>[msys.runInPool](lua.ref.msys.runinpool.php) — Run a function in a separate threadpool</dt>

<dt>[msys.sleep](lua.ref.msys.sleep.php) — When called in the scheduler thread, suspend the current session for the specified duration</dt>

<dt>[msys.snmpTrap](lua.ref.msys.snmpTrap.php) — Issue an SNMP trap</dt>

<dt>[msys.type](lua.ref.msys.type.php) — Return the type name of the supplied parameter</dt>

<dt>[msys.unlock](lua.ref.msys.unlock.php) — Release a lock obtained via msys.lock</dt>

<dt>[session:request_url_get](lua.ref.session_request_url_get.php) — Get the request URL</dt>

<dt>[session:response_status_set_std](lua.ref.session_response_status_set_std.php) — Set the HTTP status for the session response</dt>

<dt>[json.decode](lua.ref.json.decode.php) — Create a JSON object from a JSON string</dt>

<dt>[json.encode](lua.ref.json.encode.php) — Convert a Lua variable or an expression for use with a JSON object</dt>

<dt>[json.new](lua.ref.json.new.php) — Create an empty JSON object</dt>

<dt>[json.strerror](lua.ref.json.strerror.php) — Return the description of a JSON error code</dt>

<dt>[msg.batch_id](lua.ref.msg.batch_id.php) — Return the human-readable ec_message.batch_id</dt>

<dt>[msg.conn_id](lua.ref.msg.conn_id.php) — Return the human-readable ec_message.conn_id</dt>

<dt>[msg.id](lua.ref.msg.id.php) — Return the human-readable ec_message.id</dt>

<dt>[msg:address_header](lua.ref.msg_address_header.php) — Returns address components as an array</dt>

<dt>[msg:binding](lua.ref.msg_binding.php) — Set or get the message binding</dt>

<dt>[msg:binding_group](lua.ref.msg_binding_group.php) — Sets the binding_group to the named binding, if one is provided.</dt>

<dt>[msg:body](lua.ref.msg_body.php) — Set the message body (minus headers) if provided</dt>

<dt>[msg:body_match](lua.ref.msg_body_match.php) — Streaming interface to a PCRE search of a message body (minus headers)</dt>

<dt>[msg:body_replace](lua.ref.msg_body_replace.php) — Streaming interface to a PCRE replacement of a message body (minus headers)</dt>

<dt>[msg:build](lua.ref.msg_build.php) — Create a message</dt>

<dt>[msg:discard](lua.ref.msg_discard.php) — Silently discard a message</dt>

<dt>[msg:forward](lua.ref.msg_forward.php) — Forward the current message to recipients other than the original recipients</dt>

<dt>[msg:get_delivery_method](lua.ref.msg_get_delivery_method.php) — Return the delivery method for a message</dt>

<dt>[msg:get_message_size](lua.ref.msg_get_message_size.php) — Return the size of a message</dt>

<dt>[msg:inject](lua.ref.msg_inject.php) — Use this function to send mail</dt>

<dt>[msg:is_mcmt](lua.ref.msg_is_mcmt.php) — Determine whether a message is a MCMT message</dt>

<dt>[msg:mailfrom](lua.ref.msg_mailfrom.php) — Sets the 'MAIL FROM' email address if one is provided</dt>

<dt>[msg:makeBoundary](lua.ref.msg_makeBoundary.php) — Generates a unique boundary string</dt>

<dt>[msg:makeContainer](lua.ref.msg_makeContainer.php) — Creates a new, unlinked, container message part</dt>

<dt>[msg:makePart](lua.ref.msg_makePart.php) — Creates a new, unlinked, singleton (or leaf) message part</dt>

<dt>[msg:mime](lua.ref.msg_mime.php) — Returns the top of the MIME tree for the message, a message part</dt>

<dt>[msg:raw](lua.ref.msg_raw.php) — Set or returns the message content</dt>

<dt>[msg:raw_match](lua.ref.msg_raw_match.php) — Streaming interface to a PCRE search of the message content</dt>

<dt>[msg:raw_replace](lua.ref.msg_raw_replace.php) — Streaming interface to a PCRE replacement of message content</dt>

<dt>[msg:rcptto](lua.ref.msg_rcptto.php) — Sets the 'RCPT TO' email address if one is provided</dt>

<dt>[msg:routing_domain](lua.ref.msg_routing_domain.php) — Set or return the routing domain for a message</dt>

<dt>[msg:text](lua.ref.msg_text.php) — Return the transfer decoded text for the body</dt>

<dt>[msg:text](lua.ref.msg_text1.php) — Replace the entire message body</dt>

<dt>[msg:text_match](lua.ref.msg_text_match.php) — Streaming PCRE search across the transfer-decoded, UTF-8 text version of the message body</dt>

<dt>[msg:text_replace](lua.ref.msg_text_replace.php) — Streaming interface to a PCRE replacement of textual content from the message body</dt>

<dt>[msgpart:addFirstChild](lua.ref.msgpart_addFirstChild.php) — Adds a child as the first child on this part</dt>

<dt>[msgpart:addLastChild](lua.ref.msgpart_addLastChild.php) — Adds a child as the last child on this part</dt>

<dt>[msgpart:address_header](lua.ref.msgpart_address_header.php) — Parse each instance of the named header for RFC2822 addresses</dt>

<dt>[msgpart:body_match](lua.ref.msgpart_body_match.php) — Streaming interface to a PCRE search of a message body part (minus headers)</dt>

<dt>[msgpart:body_replace](lua.ref.msgpart_body_replace.php) — Streaming interface to a PCRE replacement of a message body part (minus headers)</dt>

<dt>[msgpart:content_type](lua.ref.msgpart_content_type.php) — Returns a table of content type related information</dt>

<dt>[msgpart:header](lua.ref.msgpart_header.php) — Return an array of header values for the given name</dt>

<dt>[msgpart:header](lua.ref.msgpart_header2.php) — Unset the header name of the current message part</dt>

<dt>[msgpart:header](lua.ref.msgpart_header3.php) — If mode is replace (or unspecified): first deletes all other headers of that name before appending the new value to the message headers</dt>

<dt>[msgpart:insertAfter](lua.ref.msgpart_insertAfter.php) — Insert this part into the MIME tree after the given parameter</dt>

<dt>[msgpart:insertBefore](lua.ref.msgpart_insertBefore.php) — Insert this part into the MIME tree before the given parameter</dt>

<dt>[msgpart:raw_match](lua.ref.msgpart_raw_match.php) — Streaming interface to a PCRE search of the current message part</dt>

<dt>[msgpart:raw_replace](lua.ref.msgpart_raw_replace.php) — Streaming interface to a PCRE replacement message part content</dt>

<dt>[msgpart:text](lua.ref.msgpart_text2.php) — The entire message body part is replaced by the supplied text</dt>

<dt>[msgpart:text](lua.ref.msgpart_text.php) — Returns the transfer decoded text for the message part, in UTF-8</dt>

<dt>[msgpart:text_match](lua.ref.msgpart_text_match.php) — Streaming a PCRE search across the transfer decoded UTF-8 text version of the message body part</dt>

<dt>[msgpart:text_replace](lua.ref.msgpart_text_replace.php) — Streaming interface to a PCRE replacement of textual content from the message body parts</dt>

<dt>[msys.asyncOk](lua.ref.msys.asyncOk.php) — Check if the current execution environment is suitable for suspend/resume operations</dt>

<dt>[msys.audit.connections](lua.ref.msys.audit.connections.php) — Return the number of connections that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit.inbound_session_count](lua.ref.msys.audit.inbound_session_count.php) — Count connections currently established from the specified cidr to the specified service</dt>

<dt>[msys.audit.receptions](lua.ref.msys.audit.receptions.php) — Return the number of receptions that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit.rejections](lua.ref.msys.audit.rejections.php) — Return the number of rejections that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit_series.add](lua.ref.msys.audit_series.add.php) — Adjust the counter for the current time window of a named series</dt>

<dt>[msys.audit_series.count](lua.ref.msys.audit_series.count.php) — Return the total associated with the named series</dt>

<dt>[msys.audit_series.define](lua.ref.msys.audit_series.define.php) — Define an audit series</dt>

<dt>[msys.audit_series.remove_item](lua.ref.msys.audit_series.remove_item.php) — Remove a counter from a named series</dt>

<dt>[msys.av.engines](lua.ref.msys.av.engines.php) — Return a list of configured engine names in a table</dt>

<dt>[msys.av.scan](lua.ref.msys.av.scan.php) — Perform a virus scan using the named engine</dt>

<dt>[msys.av.scan_part](lua.ref.msys.av.scan_part.php) — Perform a virus scan on a specific message part using the named engine</dt>

<dt>[msys.base64.decode](lua.ref.msys.base64.decode.php) — Decode a base64 encoded string</dt>

<dt>[msys.base64.encode](lua.ref.msys.base64.encode.php) — Base64-encode a string</dt>

<dt>[msys.bounce.classify](lua.ref.msys.bounce.classify.php) — Create a bounce classification for a message</dt>

<dt>[msys.bounce.classify_smtp_response](lua.ref.msys.bounce.classify_smtp_response.php) — Create a bounce classification from SMTP response text and the domain name</dt>

<dt>[msys.brightmail.scan](lua.ref.msys.brightmail.scan.php) — Use Brightmail to scan messages</dt>

<dt>[msys.cidr.define](lua.ref.msys.cidr.define.php) — Define a named CIDR object</dt>

<dt>[msys.cidr.query](lua.ref.msys.cidr.query.php) — Look up address against the named CIDR</dt>

<dt>[msys.cidr.reload](lua.ref.msys.cidr.reload.php) — Refresh CIDRs of type `datasource` and `rbldnsd`</dt>

<dt>[msys.commtouch.diagnose](lua.ref.msys.commtouch.diagnose.php) — Scan messages using Commtouch</dt>

<dt>[msys.counter.add](lua.ref.msys.counter.add.php) — Add to the current value of the specified counter</dt>

<dt>[msys.counter.inc](lua.ref.msys.counter.inc.php) — Increment a counter</dt>

<dt>[msys.counter.open](lua.ref.msys.counter.open.php) — Create a counter object</dt>

<dt>[msys.counter.read](lua.ref.msys.counter.read.php) — Read the specified counter</dt>

<dt>[msys.counter.reset](lua.ref.msys.counter.reset.php) — Reset a counter</dt>

<dt>[msys.counter.unlink](lua.ref.msys.counter.unlink.php) — Unlink a counter</dt>

<dt>[msys.db.fetch_row](lua.ref.msys.db.fetch_row.php) — If successful, return the first row of the query result as a table</dt>

<dt>[msys.db.query](lua.ref.msys.db.query.php) — Query a datasource</dt>

<dt>[msys.delivery.ob_get_current_message](lua.ref.msys.delivery.ob_get_current_message.php) — Get the current message from the session context</dt>

<dt>[msys.dumper.Dumper](lua.ref.msys.dumper.Dumper.php) — Dump information about an object</dt>

<dt>[msys.expurgate.scan](lua.ref.msys.expurgate.scan.php) — Scan using the Eleven antivirus engine</dt>

<dt>[msys.gauge_cache.dec](lua.ref.msys.gauge_cache.dec.php) — Decrement the value associated with keystring in the named cache</dt>

<dt>[msys.gauge_cache.define](lua.ref.msys.gauge_cache.define.php) — Create a cache that can be used to maintain a set of counters</dt>

<dt>[msys.gauge_cache.get](lua.ref.msys.gauge_cache.get.php) — Look up the value associated with keystring in the named cache</dt>

<dt>[msys.gauge_cache.inc](lua.ref.msys.gauge_cache.inc.php) — Increment the value associated with `keystring` in the named cache</dt>

<dt>[msys.gauge_cache.remove_item](lua.ref.msys.gauge_cache.remove_item.php) — Remove the value associated with `keystring` from the named cache</dt>

<dt>[msys.gcm.gcm_classify_error](lua.ref.msys.gcm.gcm_classify_error.php) — Determine the delivery status of the "DLV_Response_Status" variable</dt>

<dt>[msys.gcm.gcm_get_result_error_code](lua.ref.msys.gcm.gcm_get_result_error_code.php) — Get the error code from the response results error</dt>

<dt>[msys.pcre.match](lua.ref.msys.pcre.match.php) — Perform a PCRE regex match operation</dt>

<dt>[msys.pcre.replace](lua.ref.msys.pcre.replace.php) — Perform a PCRE replace operation</dt>

<dt>[msys.pcre.split](lua.ref.msys.pcre.split.php) — Perform a PCRE split operation</dt>

<dt>[msys.os.statvfs_read](lua.ref.msys.os.statvfs_read.php) — Request a snapshot of the stream</dt>

<dt>[msys.os.statvfs_subscribe](lua.ref.msys.os.statvfs_subscribe.php) — Provide a "stream" for file system statistics (statvfs) updates</dt>

<dt>[msys.qp.decode](lua.ref.msys.qp.decode.php) — Decode a quoted-printable message</dt>

<dt>[msys.qp.encode](lua.ref.msys.qp.encode.php) — Quoted-printable encode a string</dt>

<dt>[msys.rfc3464.compute_delivery_status](lua.ref.msys.rfc3464.compute_delivery_status.php) — Generate RFC3464 compliant delivery status headers</dt>

<dt>[msys.rfc3464.compute_delivery_status_string](lua.ref.msys.rfc3464.compute_delivery_status_string.php) — Generate RFC3464 compliant delivery status headers</dt>

<dt>[msys.rfc3464.create_mdn](lua.ref.msys.rfc3464.create_mdn.php) — Generate an MDN from a message</dt>

<dt>[msys.rfc3464.extract_delivery_status](lua.ref.msys.rfc3464.extract_delivery_status.php) — Return a table of parsed email headers</dt>

<dt>[msys.rfc3464.send_mdn](lua.ref.msys.rfc3464.send_mdn.php) — Generate and enqueue an MDN</dt>

<dt>[msys.symantec_beik.scan](lua.ref.msys.symantec_beik.scan.php) — Scan using BEIK</dt>

<dt>[msys.threadpool.count](lua.ref.msys.threadpool.count.php) — Return the current number of thread pools</dt>

<dt>[msys.threadpool.find](lua.ref.msys.threadpool.find.php) — Find a thread pool name from a job class ID or a job class ID from a thread pool name</dt>

<dt>[msys.threadpool.stat](lua.ref.msys.threadpool.stat.php) — Return stats regarding a threadpool</dt>

<dt>[msys.timer.after](lua.ref.msys.timer.after.php) — execute closure after a given time</dt>

<dt>[msys.timer.at](lua.ref.msys.timer.at.php) — execute closure at a given time</dt>

<dt>[msys.timer.every](lua.ref.msys.timer.every.php) — execute closure every interval</dt>

<dt>[msys.validate.dk.get_responsible_domain](lua.ref.msys.validate.dk.get_responsible_domain.php) — Return the domain responsible for the current message</dt>

<dt>[msys.validate.dk.sign](lua.ref.msys.validate.dk.sign.php) — Sign a message using a Domain Key</dt>

<dt>[msys.validate.opendkim.get_num_sigs](lua.ref.msys.validate.opendkim.get_num_sigs.php) — Return the number of DKIM signatures</dt>

<dt>[msys.validate.opendkim.get_sig](lua.ref.msys.validate.opendkim.get_sig.php) — Get a signature from a DKIM object</dt>

<dt>[msys.validate.opendkim.get_sig_canons](lua.ref.msys.validate.opendkim.get_sig_canons.php) — Fetch the canonicalizers used for a signature</dt>

<dt>[msys.validate.opendkim.get_sig_domain](lua.ref.msys.validate.opendkim.get_sig_domain.php) — Fetch the signing domain from a DKIM_SIGINFO object</dt>

<dt>[msys.validate.opendkim.get_sig_errorstr](lua.ref.msys.validate.opendkim.get_sig_errorstr.php) — Fetch the error associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_flags](lua.ref.msys.validate.opendkim.get_sig_flags.php) — Fetch the flags associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_hdrsigned](lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php) — Determine whether a given header was signed</dt>

<dt>[msys.validate.opendkim.get_sig_identity](lua.ref.msys.validate.opendkim.get_sig_identity.php) — Fetch the identity associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_keysize](lua.ref.msys.validate.opendkim.get_sig_keysize.php) — Fetch the size of the key used to generate a signature</dt>

<dt>[msys.validate.opendkim.get_sig_selector](lua.ref.msys.validate.opendkim.get_sig_selector.php) — Fetch the selector associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_signalg](lua.ref.msys.validate.opendkim.get_sig_signalg.php) — Return the signing algorithm as a string</dt>

<dt>[msys.validate.opendkim.sign](lua.ref.msys.validate.opendkim.sign.php) — Sign a message using OpenDKIM</dt>

<dt>[msys.validate.opendkim.verify](lua.ref.msys.validate.opendkim.verify.php) — Verify a DKIM signature</dt>

<dt>[thread.mutex](lua.ref.thread.mutex.php) — create a new mutex</dt>

<dt>[vctx:add_recipient](lua.ref.vctx_add_recipient.php) — Add an address to the recipient list for the inbound session</dt>

<dt>[vctx:disconnect](lua.ref.vctx_disconnect.php) — Disconnect the session associated with the current validation context</dt>

<dt>[vctx:get](lua.ref.vctx_get.php) — Get the value of a context variable</dt>

<dt>[vctx:recipient_list](lua.ref.vctx_recipient_list.php) — Return or set the current recipient list</dt>

<dt>[vctx:remove_recipient](lua.ref.vctx_remove_recipient.php) — Remove an address from the recipient list</dt>

<dt>[vctx:set](lua.ref.vctx_set.php) — Set the value of a context variable</dt>

<dt>[vctx:set_code](lua.ref.vctx_set_code.php) — Set the inbound disposition and response message</dt>

<dt>[vctx:tarpit](lua.ref.vctx_tarpit.php) — Issue a time cost on the inbound session</dt>

<dt>[doc:root](lua.ref.xml.doc_root.php) — Return the root node of an XML document</dt>

<dt>[doc:tostring](lua.ref.xml.doc_tostring.php) — Output a DOM document as a string</dt>

<dt>[doc:xpath](lua.ref.xml.doc_xpath.php) — Perform an XPath query</dt>

<dt>[node:addchild](lua.ref.xml.node_addchild.php) — Add a child node</dt>

<dt>[node:attribute](lua.ref.xml.node_attribute.php) — Set or get the attribute of a node</dt>

<dt>[node:children](lua.ref.xml.node_children.php) — Return an iterator of all child nodes</dt>

<dt>[node:contents](lua.ref.xml.node_contents.php) — Get or set a text node</dt>

<dt>[node:doc](lua.ref.xml.node_doc.php) — Return the document object that contains the specified node</dt>

<dt>[node:name](lua.ref.xml.node_name.php) — Return the name of a node</dt>

<dt>[node:tostring](lua.ref.xml.node_tostring.php) — Output a node as a string</dt>

<dt>[node:unlink](lua.ref.xml.node_unlink.php) — Unlink an XML node from its DOM container</dt>

<dt>[xml.parsexml](lua.ref.xml.parsexml.php) — Create an XML document object</dt>

</dl>

This section details all Lua functions. Functions are ordered alphabetically by name.

### Warning

Many Lua functions act as wrappers for C code which means that the calling code needs to take steps to ensure safety. When calling a C API, make sure that all the arguments are valid as an unexpected `nil` may crash the system or have other undesirable results. Additionally, the data structures returned from C APIs are often shared between C and Lua. The most important consequence of this is that arrays coming from C APIs must only be accessed with existing indices, as opposed to Lua which simply returns `nil` on out-of-bounds access. Failure to do this on a Lua table connected to a C array will cause the system to fail.

| [Prev](apis.ec_httpsrv_request_peer_address.php)  | [Up](p.reference.php) |  [Next](lua.ref.msys.db.execute.php) |
| ec_httpsrv_request_peer_address  | [Table of Contents](index.php) |  msys.db.execute |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)