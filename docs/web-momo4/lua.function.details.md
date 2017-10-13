| Chapter 70. Lua Functions Reference |
| [Prev](apis.ec_httpsrv_request_peer_address)  | Part X. Reference |  [Next](lua.ref.msys.db.execute) |

## Chapter 70. Lua Functions Reference

**Table of Contents**

<dl class="toc">

<dt>[msys.db.execute](lua.ref.msys.db.execute) — Execute a query that is not expected to return data</dt>

<dt>[ac:esmtp_capability_add](lua.ref.ac_esmtp_capability_add) — Add a capability to the EHLO response</dt>

<dt>[ac:esmtp_capability_remove](lua.ref.ac_esmtp_capability_remove) — Remove a capability string from the EHLO response</dt>

<dt>[ac:inbound_session_count](lua.ref.ac_inbound_session_count) — Return the current inbound session count to this listener for the connecting IP</dt>

<dt>[msys.cloudmark.analyze](lua.ref.msys.cloudmark.analyze) — Analyze a message using Cloudmark</dt>

<dt>[msys.cloudmark.add_af_data](lua.ref.msys.cloudmark.add_af_data) — Pass data for use with the Cloudmark ActiveFilter.</dt>

<dt>[msys.cloudmark.score](lua.ref.msys.cloudmark.score) — Scan messages using Cloudmark</dt>

<dt>[msys.cloudmark.score_af](lua.ref.msys.cloudmark.score_af) — Set the Cloudmark ActiveFilter score threshold</dt>

<dt>[msys.cloudmark.set_af_mode_discard](lua.ref.msys.cloudmark.set_af_mode_discard) — Set the Cloudmark ActiveFilter mode to DISCARD.</dt>

<dt>[msys.cloudmark.set_af_mode_keep](lua.ref.msys.cloudmark.set_af_mode_keep) — Set the Cloudmark ActiveFilter mode to KEEP.</dt>

<dt>[msys.cloudmark.set_af_mode_movemsg](lua.ref.msys.cloudmark.set_af_mode_movemsg) — Set the Cloudmark ActiveFilter mode to MOVEMSG.</dt>

<dt>[msys.cloudmark.set_af_msi_address](lua.ref.msys.cloudmark.set_af_msi_address) — Set the address for the Cloudmark ActiveFilter MSI Messages.</dt>

<dt>[msys.apn.apn_status_classifier](lua.ref.msys.apn.apn_status_classifier) — Determine whether the delivery status code represents a permanent or temporary failure</dt>

<dt>[client:do_request](lua.ref.client_do_request) — Perform an HTTP request</dt>

<dt>[client:get_body](lua.ref.client_get_body) — Get the body of an HTTP response</dt>

<dt>[client:get_headers](lua.ref.client_get_headers) — Get HTTP headers</dt>

<dt>[client:get_status](lua.ref.client_get_status) — Return the status of an HTTP request</dt>

<dt>[sess:request_add_header](lua.ref.sess_request_add_header) — Add a header to an HTTP session</dt>

<dt>[sess:request_delete_header](lua.ref.sess_request_delete_header) — Delete a header from an HTTP session</dt>

<dt>[sess:request_finalize](lua.ref.sess_request_finalize) — Finalize changes to an HTTP request</dt>

<dt>[sess:request_set_body](lua.ref.sess_request_set_body) — Set the body of an HTTP session</dt>

<dt>[msys.httpclnt.http_status_classifier](lua.ref.msys.httpclnt.http_status_classifier) — Determine the delivery status of the "DLV_Response_Status" variable</dt>

<dt>[msys.http.client.new](lua.ref.msys.http.client.new) — Create an HTTP client</dt>

<dt>[client:parse_headers](lua.ref.client_parse_headers) — Parse the headers of an HTTP response</dt>

<dt>[client:set_header](lua.ref.client_set_header) — Set an HTTP header</dt>

<dt>[client:set_timeout](lua.ref.client_set_timeout) — Set the timeout for an HTTP client</dt>

<dt>[c:close](lua.ref.curl.c_close) — Close a curl object</dt>

<dt>[c:perform](lua.ref.curl.c_perform) — Perform the file transfer</dt>

<dt>[c:setopt](lua.ref.curl.c_setopt) — Set the option value of a curl object</dt>

<dt>[curl.escape](lua.ref.curl.escape) — URL encode a string</dt>

<dt>[curl.new](lua.ref.curl.new) — Create a cURL object</dt>

<dt>[curl.unescape](lua.ref.curl.unescape) — Unescape URL encoding in strings</dt>

<dt>[msys.core.dns_get_domain](lua.ref.msys.core.dns_get_domain) — Get a domain record</dt>

<dt>[msys.core.get_now_ts](lua.ref.msys.core.get_now_ts) — Get the current time</dt>

<dt>[msys.core.mail_queue_delay_domain](lua.ref.msys.core.mail_queue_delay_domain) — Add a domain record to the delayed queue</dt>

<dt>[msys.core.string_new](lua.ref.msys.core.string_new) — Create an ec_string</dt>

<dt>[msg:code](lua.ref.msg_code) — Get or set the message code</dt>

<dt>[msg:get_envelope2](lua.ref.msg_get_envelope2) — Get envelope values</dt>

<dt>[msg:header](lua.ref.header) — Manipulate message headers</dt>

<dt>[msg:listener_addr](lua.ref.msg_listener_addr) — Get the `recv_via` IP and/or PORT.</dt>

<dt>[msg:reception_peer](lua.ref.msg_reception_peer) — Get the `recv_from` IP and/or PORT.</dt>

<dt>[msg:context_delete](lua.ref.msg_context_delete) — Delete a context variable</dt>

<dt>[msg:context_exists](lua.ref.msg_context_exists) — Check if a context variable exists</dt>

<dt>[msg:context_exists_and_get](lua.ref.msg_context_exists_and_get) — Check if a context variable exists and get it</dt>

<dt>[msg:context_get](lua.ref.msg_context_get) — Get a context variable</dt>

<dt>[msg:context_set](lua.ref.msg_context_set) — Sets a context variable</dt>

<dt>[msgpart:unlink](lua.ref.msgpart_unlink) — Remove the part (and its children) from the MIME tree</dt>

<dt>[msys.core.io_wrapper_open](lua.ref.msys.core.io_wrapper_open) — Open a handle to a resource</dt>

<dt>[msys.cast](lua.ref.msys.cast) — Cast an object to the specified class</dt>

<dt>[msys.config](lua.ref.msys.config) — Set or get configuration values</dt>

<dt>[msys.dnsLookup](lua.ref.msys.dnslookup) — Perform a DNS lookup</dt>

<dt>[msys.expandMacro](lua.ref.msys.expandMacro) — Expand macros (such as sieve, spf and custom_logger macros)</dt>

<dt>[msys.getClassMetaTable](lua.ref.msys.getClassMetaTable) — Return the metatable for the named class</dt>

<dt>[msys.httpsrv.register](lua.ref.msys.httpsrv.register) — Register a Lua function as an HTTP endpoint</dt>

<dt>[msys.idn.to_idn](lua.ref.msys.idn) — Attempts to convert the domain to the IDN format</dt>

<dt>[msys.idn.to_utf8](lua.ref.msys.idn_utf8) — Converts an IDN formatted string to unicode</dt>

<dt>[msys.lock](lua.ref.msys.lock) — The current running OS level thread obtains a lock on the named mutex</dt>

<dt>[msys.parseRFC2822Addresses](lua.ref.msys.parseRFC2822Addresses) — Parse the address string per the address parsing rules defined in RFC2822</dt>

<dt>[msys.readfile](lua.ref.msys.readfile) — Read the entire contents of the specified file or URI</dt>

<dt>[msys.registerAuth](lua.ref.msys.registerAuth) — Register an authentication/authorization scheme that can be used for SMTP or control channel authentication</dt>

<dt>[msys.registerControl](lua.ref.msys.registerControl) — Register a command with the control channel subsystem</dt>

<dt>[msys.registerModule](lua.ref.msys.registerModule) — Register a Lua module with the system.</dt>

<dt>[msys.runInPool](lua.ref.msys.runinpool) — Run a function in a separate threadpool</dt>

<dt>[msys.sleep](lua.ref.msys.sleep) — When called in the scheduler thread, suspend the current session for the specified duration</dt>

<dt>[msys.snmpTrap](lua.ref.msys.snmpTrap) — Issue an SNMP trap</dt>

<dt>[msys.type](lua.ref.msys.type) — Return the type name of the supplied parameter</dt>

<dt>[msys.unlock](lua.ref.msys.unlock) — Release a lock obtained via msys.lock</dt>

<dt>[session:request_url_get](lua.ref.session_request_url_get) — Get the request URL</dt>

<dt>[session:response_status_set_std](lua.ref.session_response_status_set_std) — Set the HTTP status for the session response</dt>

<dt>[json.decode](lua.ref.json.decode) — Create a JSON object from a JSON string</dt>

<dt>[json.encode](lua.ref.json.encode) — Convert a Lua variable or an expression for use with a JSON object</dt>

<dt>[json.new](lua.ref.json.new) — Create an empty JSON object</dt>

<dt>[json.strerror](lua.ref.json.strerror) — Return the description of a JSON error code</dt>

<dt>[msg.batch_id](lua.ref.msg.batch_id) — Return the human-readable ec_message.batch_id</dt>

<dt>[msg.conn_id](lua.ref.msg.conn_id) — Return the human-readable ec_message.conn_id</dt>

<dt>[msg.id](lua.ref.msg.id) — Return the human-readable ec_message.id</dt>

<dt>[msg:address_header](lua.ref.msg_address_header) — Returns address components as an array</dt>

<dt>[msg:binding](lua.ref.msg_binding) — Set or get the message binding</dt>

<dt>[msg:binding_group](lua.ref.msg_binding_group) — Sets the binding_group to the named binding, if one is provided.</dt>

<dt>[msg:body](lua.ref.msg_body) — Set the message body (minus headers) if provided</dt>

<dt>[msg:body_match](lua.ref.msg_body_match) — Streaming interface to a PCRE search of a message body (minus headers)</dt>

<dt>[msg:body_replace](lua.ref.msg_body_replace) — Streaming interface to a PCRE replacement of a message body (minus headers)</dt>

<dt>[msg:build](lua.ref.msg_build) — Create a message</dt>

<dt>[msg:discard](lua.ref.msg_discard) — Silently discard a message</dt>

<dt>[msg:forward](lua.ref.msg_forward) — Forward the current message to recipients other than the original recipients</dt>

<dt>[msg:get_delivery_method](lua.ref.msg_get_delivery_method) — Return the delivery method for a message</dt>

<dt>[msg:get_message_size](lua.ref.msg_get_message_size) — Return the size of a message</dt>

<dt>[msg:inject](lua.ref.msg_inject) — Use this function to send mail</dt>

<dt>[msg:is_mcmt](lua.ref.msg_is_mcmt) — Determine whether a message is a MCMT message</dt>

<dt>[msg:mailfrom](lua.ref.msg_mailfrom) — Sets the 'MAIL FROM' email address if one is provided</dt>

<dt>[msg:makeBoundary](lua.ref.msg_makeBoundary) — Generates a unique boundary string</dt>

<dt>[msg:makeContainer](lua.ref.msg_makeContainer) — Creates a new, unlinked, container message part</dt>

<dt>[msg:makePart](lua.ref.msg_makePart) — Creates a new, unlinked, singleton (or leaf) message part</dt>

<dt>[msg:mime](lua.ref.msg_mime) — Returns the top of the MIME tree for the message, a message part</dt>

<dt>[msg:raw](lua.ref.msg_raw) — Set or returns the message content</dt>

<dt>[msg:raw_match](lua.ref.msg_raw_match) — Streaming interface to a PCRE search of the message content</dt>

<dt>[msg:raw_replace](lua.ref.msg_raw_replace) — Streaming interface to a PCRE replacement of message content</dt>

<dt>[msg:rcptto](lua.ref.msg_rcptto) — Sets the 'RCPT TO' email address if one is provided</dt>

<dt>[msg:routing_domain](lua.ref.msg_routing_domain) — Set or return the routing domain for a message</dt>

<dt>[msg:text](lua.ref.msg_text) — Return the transfer decoded text for the body</dt>

<dt>[msg:text](lua.ref.msg_text1) — Replace the entire message body</dt>

<dt>[msg:text_match](lua.ref.msg_text_match) — Streaming PCRE search across the transfer-decoded, UTF-8 text version of the message body</dt>

<dt>[msg:text_replace](lua.ref.msg_text_replace) — Streaming interface to a PCRE replacement of textual content from the message body</dt>

<dt>[msgpart:addFirstChild](lua.ref.msgpart_addFirstChild) — Adds a child as the first child on this part</dt>

<dt>[msgpart:addLastChild](lua.ref.msgpart_addLastChild) — Adds a child as the last child on this part</dt>

<dt>[msgpart:address_header](lua.ref.msgpart_address_header) — Parse each instance of the named header for RFC2822 addresses</dt>

<dt>[msgpart:body_match](lua.ref.msgpart_body_match) — Streaming interface to a PCRE search of a message body part (minus headers)</dt>

<dt>[msgpart:body_replace](lua.ref.msgpart_body_replace) — Streaming interface to a PCRE replacement of a message body part (minus headers)</dt>

<dt>[msgpart:content_type](lua.ref.msgpart_content_type) — Returns a table of content type related information</dt>

<dt>[msgpart:header](lua.ref.msgpart_header) — Return an array of header values for the given name</dt>

<dt>[msgpart:header](lua.ref.msgpart_header2) — Unset the header name of the current message part</dt>

<dt>[msgpart:header](lua.ref.msgpart_header3) — If mode is replace (or unspecified): first deletes all other headers of that name before appending the new value to the message headers</dt>

<dt>[msgpart:insertAfter](lua.ref.msgpart_insertAfter) — Insert this part into the MIME tree after the given parameter</dt>

<dt>[msgpart:insertBefore](lua.ref.msgpart_insertBefore) — Insert this part into the MIME tree before the given parameter</dt>

<dt>[msgpart:raw_match](lua.ref.msgpart_raw_match) — Streaming interface to a PCRE search of the current message part</dt>

<dt>[msgpart:raw_replace](lua.ref.msgpart_raw_replace) — Streaming interface to a PCRE replacement message part content</dt>

<dt>[msgpart:text](lua.ref.msgpart_text2) — The entire message body part is replaced by the supplied text</dt>

<dt>[msgpart:text](lua.ref.msgpart_text) — Returns the transfer decoded text for the message part, in UTF-8</dt>

<dt>[msgpart:text_match](lua.ref.msgpart_text_match) — Streaming a PCRE search across the transfer decoded UTF-8 text version of the message body part</dt>

<dt>[msgpart:text_replace](lua.ref.msgpart_text_replace) — Streaming interface to a PCRE replacement of textual content from the message body parts</dt>

<dt>[msys.asyncOk](lua.ref.msys.asyncOk) — Check if the current execution environment is suitable for suspend/resume operations</dt>

<dt>[msys.audit.connections](lua.ref.msys.audit.connections) — Return the number of connections that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit.inbound_session_count](lua.ref.msys.audit.inbound_session_count) — Count connections currently established from the specified cidr to the specified service</dt>

<dt>[msys.audit.receptions](lua.ref.msys.audit.receptions) — Return the number of receptions that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit.rejections](lua.ref.msys.audit.rejections) — Return the number of rejections that have occurred for a CIDR block within a configured time window</dt>

<dt>[msys.audit_series.add](lua.ref.msys.audit_series.add) — Adjust the counter for the current time window of a named series</dt>

<dt>[msys.audit_series.count](lua.ref.msys.audit_series.count) — Return the total associated with the named series</dt>

<dt>[msys.audit_series.define](lua.ref.msys.audit_series.define) — Define an audit series</dt>

<dt>[msys.audit_series.remove_item](lua.ref.msys.audit_series.remove_item) — Remove a counter from a named series</dt>

<dt>[msys.av.engines](lua.ref.msys.av.engines) — Return a list of configured engine names in a table</dt>

<dt>[msys.av.scan](lua.ref.msys.av.scan) — Perform a virus scan using the named engine</dt>

<dt>[msys.av.scan_part](lua.ref.msys.av.scan_part) — Perform a virus scan on a specific message part using the named engine</dt>

<dt>[msys.base64.decode](lua.ref.msys.base64.decode) — Decode a base64 encoded string</dt>

<dt>[msys.base64.encode](lua.ref.msys.base64.encode) — Base64-encode a string</dt>

<dt>[msys.bounce.classify](lua.ref.msys.bounce.classify) — Create a bounce classification for a message</dt>

<dt>[msys.bounce.classify_smtp_response](lua.ref.msys.bounce.classify_smtp_response) — Create a bounce classification from SMTP response text and the domain name</dt>

<dt>[msys.brightmail.scan](lua.ref.msys.brightmail.scan) — Use Brightmail to scan messages</dt>

<dt>[msys.cidr.define](lua.ref.msys.cidr.define) — Define a named CIDR object</dt>

<dt>[msys.cidr.query](lua.ref.msys.cidr.query) — Look up address against the named CIDR</dt>

<dt>[msys.cidr.reload](lua.ref.msys.cidr.reload) — Refresh CIDRs of type `datasource` and `rbldnsd`</dt>

<dt>[msys.commtouch.diagnose](lua.ref.msys.commtouch.diagnose) — Scan messages using Commtouch</dt>

<dt>[msys.counter.add](lua.ref.msys.counter.add) — Add to the current value of the specified counter</dt>

<dt>[msys.counter.inc](lua.ref.msys.counter.inc) — Increment a counter</dt>

<dt>[msys.counter.open](lua.ref.msys.counter.open) — Create a counter object</dt>

<dt>[msys.counter.read](lua.ref.msys.counter.read) — Read the specified counter</dt>

<dt>[msys.counter.reset](lua.ref.msys.counter.reset) — Reset a counter</dt>

<dt>[msys.counter.unlink](lua.ref.msys.counter.unlink) — Unlink a counter</dt>

<dt>[msys.db.fetch_row](lua.ref.msys.db.fetch_row) — If successful, return the first row of the query result as a table</dt>

<dt>[msys.db.query](lua.ref.msys.db.query) — Query a datasource</dt>

<dt>[msys.delivery.ob_get_current_message](lua.ref.msys.delivery.ob_get_current_message) — Get the current message from the session context</dt>

<dt>[msys.dumper.Dumper](lua.ref.msys.dumper.Dumper) — Dump information about an object</dt>

<dt>[msys.expurgate.scan](lua.ref.msys.expurgate.scan) — Scan using the Eleven antivirus engine</dt>

<dt>[msys.gauge_cache.dec](lua.ref.msys.gauge_cache.dec) — Decrement the value associated with keystring in the named cache</dt>

<dt>[msys.gauge_cache.define](lua.ref.msys.gauge_cache.define) — Create a cache that can be used to maintain a set of counters</dt>

<dt>[msys.gauge_cache.get](lua.ref.msys.gauge_cache.get) — Look up the value associated with keystring in the named cache</dt>

<dt>[msys.gauge_cache.inc](lua.ref.msys.gauge_cache.inc) — Increment the value associated with `keystring` in the named cache</dt>

<dt>[msys.gauge_cache.remove_item](lua.ref.msys.gauge_cache.remove_item) — Remove the value associated with `keystring` from the named cache</dt>

<dt>[msys.gcm.gcm_classify_error](lua.ref.msys.gcm.gcm_classify_error) — Determine the delivery status of the "DLV_Response_Status" variable</dt>

<dt>[msys.gcm.gcm_get_result_error_code](lua.ref.msys.gcm.gcm_get_result_error_code) — Get the error code from the response results error</dt>

<dt>[msys.pcre.match](lua.ref.msys.pcre.match) — Perform a PCRE regex match operation</dt>

<dt>[msys.pcre.replace](lua.ref.msys.pcre.replace) — Perform a PCRE replace operation</dt>

<dt>[msys.pcre.split](lua.ref.msys.pcre.split) — Perform a PCRE split operation</dt>

<dt>[msys.os.statvfs_read](lua.ref.msys.os.statvfs_read) — Request a snapshot of the stream</dt>

<dt>[msys.os.statvfs_subscribe](lua.ref.msys.os.statvfs_subscribe) — Provide a "stream" for file system statistics (statvfs) updates</dt>

<dt>[msys.qp.decode](lua.ref.msys.qp.decode) — Decode a quoted-printable message</dt>

<dt>[msys.qp.encode](lua.ref.msys.qp.encode) — Quoted-printable encode a string</dt>

<dt>[msys.rfc3464.compute_delivery_status](lua.ref.msys.rfc3464.compute_delivery_status) — Generate RFC3464 compliant delivery status headers</dt>

<dt>[msys.rfc3464.compute_delivery_status_string](lua.ref.msys.rfc3464.compute_delivery_status_string) — Generate RFC3464 compliant delivery status headers</dt>

<dt>[msys.rfc3464.create_mdn](lua.ref.msys.rfc3464.create_mdn) — Generate an MDN from a message</dt>

<dt>[msys.rfc3464.extract_delivery_status](lua.ref.msys.rfc3464.extract_delivery_status) — Return a table of parsed email headers</dt>

<dt>[msys.rfc3464.send_mdn](lua.ref.msys.rfc3464.send_mdn) — Generate and enqueue an MDN</dt>

<dt>[msys.symantec_beik.scan](lua.ref.msys.symantec_beik.scan) — Scan using BEIK</dt>

<dt>[msys.threadpool.count](lua.ref.msys.threadpool.count) — Return the current number of thread pools</dt>

<dt>[msys.threadpool.find](lua.ref.msys.threadpool.find) — Find a thread pool name from a job class ID or a job class ID from a thread pool name</dt>

<dt>[msys.threadpool.stat](lua.ref.msys.threadpool.stat) — Return stats regarding a threadpool</dt>

<dt>[msys.timer.after](lua.ref.msys.timer.after) — execute closure after a given time</dt>

<dt>[msys.timer.at](lua.ref.msys.timer.at) — execute closure at a given time</dt>

<dt>[msys.timer.every](lua.ref.msys.timer.every) — execute closure every interval</dt>

<dt>[msys.validate.dk.get_responsible_domain](lua.ref.msys.validate.dk.get_responsible_domain) — Return the domain responsible for the current message</dt>

<dt>[msys.validate.dk.sign](lua.ref.msys.validate.dk.sign) — Sign a message using a Domain Key</dt>

<dt>[msys.validate.opendkim.get_num_sigs](lua.ref.msys.validate.opendkim.get_num_sigs) — Return the number of DKIM signatures</dt>

<dt>[msys.validate.opendkim.get_sig](lua.ref.msys.validate.opendkim.get_sig) — Get a signature from a DKIM object</dt>

<dt>[msys.validate.opendkim.get_sig_canons](lua.ref.msys.validate.opendkim.get_sig_canons) — Fetch the canonicalizers used for a signature</dt>

<dt>[msys.validate.opendkim.get_sig_domain](lua.ref.msys.validate.opendkim.get_sig_domain) — Fetch the signing domain from a DKIM_SIGINFO object</dt>

<dt>[msys.validate.opendkim.get_sig_errorstr](lua.ref.msys.validate.opendkim.get_sig_errorstr) — Fetch the error associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_flags](lua.ref.msys.validate.opendkim.get_sig_flags) — Fetch the flags associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_hdrsigned](lua.ref.msys.validate.opendkim.get_sig_hdrsigned) — Determine whether a given header was signed</dt>

<dt>[msys.validate.opendkim.get_sig_identity](lua.ref.msys.validate.opendkim.get_sig_identity) — Fetch the identity associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_keysize](lua.ref.msys.validate.opendkim.get_sig_keysize) — Fetch the size of the key used to generate a signature</dt>

<dt>[msys.validate.opendkim.get_sig_selector](lua.ref.msys.validate.opendkim.get_sig_selector) — Fetch the selector associated with a DKIM signature</dt>

<dt>[msys.validate.opendkim.get_sig_signalg](lua.ref.msys.validate.opendkim.get_sig_signalg) — Return the signing algorithm as a string</dt>

<dt>[msys.validate.opendkim.sign](lua.ref.msys.validate.opendkim.sign) — Sign a message using OpenDKIM</dt>

<dt>[msys.validate.opendkim.verify](lua.ref.msys.validate.opendkim.verify) — Verify a DKIM signature</dt>

<dt>[thread.mutex](lua.ref.thread.mutex) — create a new mutex</dt>

<dt>[vctx:add_recipient](lua.ref.vctx_add_recipient) — Add an address to the recipient list for the inbound session</dt>

<dt>[vctx:disconnect](lua.ref.vctx_disconnect) — Disconnect the session associated with the current validation context</dt>

<dt>[vctx:get](lua.ref.vctx_get) — Get the value of a context variable</dt>

<dt>[vctx:recipient_list](lua.ref.vctx_recipient_list) — Return or set the current recipient list</dt>

<dt>[vctx:remove_recipient](lua.ref.vctx_remove_recipient) — Remove an address from the recipient list</dt>

<dt>[vctx:set](lua.ref.vctx_set) — Set the value of a context variable</dt>

<dt>[vctx:set_code](lua.ref.vctx_set_code) — Set the inbound disposition and response message</dt>

<dt>[vctx:tarpit](lua.ref.vctx_tarpit) — Issue a time cost on the inbound session</dt>

<dt>[doc:root](lua.ref.xml.doc_root) — Return the root node of an XML document</dt>

<dt>[doc:tostring](lua.ref.xml.doc_tostring) — Output a DOM document as a string</dt>

<dt>[doc:xpath](lua.ref.xml.doc_xpath) — Perform an XPath query</dt>

<dt>[node:addchild](lua.ref.xml.node_addchild) — Add a child node</dt>

<dt>[node:attribute](lua.ref.xml.node_attribute) — Set or get the attribute of a node</dt>

<dt>[node:children](lua.ref.xml.node_children) — Return an iterator of all child nodes</dt>

<dt>[node:contents](lua.ref.xml.node_contents) — Get or set a text node</dt>

<dt>[node:doc](lua.ref.xml.node_doc) — Return the document object that contains the specified node</dt>

<dt>[node:name](lua.ref.xml.node_name) — Return the name of a node</dt>

<dt>[node:tostring](lua.ref.xml.node_tostring) — Output a node as a string</dt>

<dt>[node:unlink](lua.ref.xml.node_unlink) — Unlink an XML node from its DOM container</dt>

<dt>[xml.parsexml](lua.ref.xml.parsexml) — Create an XML document object</dt>

</dl>

This section details all Lua functions. Functions are ordered alphabetically by name.

### Warning

Many Lua functions act as wrappers for C code which means that the calling code needs to take steps to ensure safety. When calling a C API, make sure that all the arguments are valid as an unexpected `nil` may crash the system or have other undesirable results. Additionally, the data structures returned from C APIs are often shared between C and Lua. The most important consequence of this is that arrays coming from C APIs must only be accessed with existing indices, as opposed to Lua which simply returns `nil` on out-of-bounds access. Failure to do this on a Lua table connected to a C array will cause the system to fail.

| [Prev](apis.ec_httpsrv_request_peer_address)  | [Up](p.reference) |  [Next](lua.ref.msys.db.execute) |
| ec_httpsrv_request_peer_address  | [Table of Contents](index) |  msys.db.execute |

