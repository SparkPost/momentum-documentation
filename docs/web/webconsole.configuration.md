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

| 3.3. Configuration of Momentum |
| [Prev](webconsole.authentication.php)  | Chapter 3. The Web Console |  [Next](webconsole.reports.php) |

## 3.3. Configuration of Momentum

**Configuration Change. ** This feature was introduced in Momentum 2.1.

### 3.3.1. Global Configuration

**3.3.1.1. Server Control**<a name="fig.webconsole.global"></a>

**Figure 3.3. Master server control**

![](images/webconsole/ecweb_globalconfig.png)

To shutdown the server, click the Shutdown button. To restart the server, click the Restart Server button. *Note*: These options will only execute if you are logged in as an `admin` user. For more information see [Section 3.2.1, “Digest HTTP Authentication”](webconsole.authentication.php#webconsole.httpauthentication "3.2.1. Digest HTTP Authentication"). To revert any configuration changes, click the Revert to Last Configuration button.

**3.3.1.2. Basic**<a name="fig.webconsole.global.basic"></a>

**Figure 3.4. Basic configuration**

![](images/webconsole/ecweb_basic.png)
**3.3.1.3. General Options**

<dl class="variablelist">

<dt>Suspend Delivery</dt>

<dd>

See [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery")

</dd>

<dt>Override EHLO Hostname</dt>

<dd>

See [ehlo_hostname](conf.ref.ehlo_hostname.php "ehlo_hostname")

</dd>

<dt>Generate Bounces</dt>

<dd>

See [generate_bounces](conf.ref.generate_bounces.php "generate_bounces")

</dd>

<dt>Fully Resolve Before SMTP</dt>

<dd>

See [fully_resolve_before_smtp](conf.ref.fully_resolve_before_smtp.php "fully_resolve_before_smtp")

</dd>

<dt>Mailer Daemon</dt>

<dd>

See [mailerdaemon](conf.ref.mailerdaemon.php "mailerdaemon")

</dd>

<dt>Hostname</dt>

<dd>

See [hostname](conf.ref.hostname.php "hostname")

</dd>

<dt>Relay Hosts</dt>

<dd>

See [relay_hosts](conf.ref.relay_hosts.php "relay_hosts")

</dd>

<dt>Bind Address</dt>

<dd>

See [bind_address](conf.ref.bind_address.php "bind_address")

</dd>

</dl>

**3.3.1.4. Standards Compliance**

<dl class="variablelist">

<dt>Allow Null Envelope Sender</dt>

<dd>

See [allow_null_envelope_sender](conf.ref.allow_null_envelope_sender.php "allow_null_envelope_sender")

</dd>

<dt>Require Ehlo</dt>

<dd>

See [require_ehlo](conf.ref.require_ehlo.php "require_ehlo")

</dd>

<dt>Trace Headers</dt>

<dd>

See [trace_headers](conf.ref.trace_headers.php "trace_headers")

</dd>

<dt>Date Header</dt>

<dd>

See [date_header](conf.ref.date_header.php "date_header")

</dd>

<dt>Lone LF in Headers</dt>

<dd>

See [lone_lf_in_headers](conf.ref.lone_lf_in_headers.php "lone_lf_in_headers")

</dd>

<dt>Lone Linefeed in Body</dt>

<dd>

See [lone_lf_in_body](conf.ref.lone_lf_in_body.php "lone_lf_in_body")

</dd>

</dl>

**3.3.1.5. Relay Domains**

See [relay_domains](conf.ref.relay_domains.php "relay_domains")

**3.3.1.6. SNMP**

Configures basic SNMP settings. See [SNMP](conf.ref.snmp.php "SNMP").

<a name="fig.webconsole.global.snmp"></a>

**Figure 3.5. SNMP configuration**

![](images/webconsole/ecweb_snmp.png)

<dl class="variablelist">

<dt>Community</dt>

<dd>

Sets the community string for the agent. Defaults to "public".

</dd>

<dt>SysContact</dt>

<dd>

Sets the system contact string for the agent. Default is null.

</dd>

<dt>SysLocation</dt>

<dd>

Sets the system location string for the agent. Default is null.

</dd>

<dt>SysDescription</dt>

<dd>

Sets the system description string for the agent. Default is null.

</dd>

</dl>

**3.3.1.7. Traffic Shaping**

Configures various tunable parameters governing inbound and outbound message traffic.

<a name="fig.webconsole.global.trafficshaping"></a>

**Figure 3.6. Traffic shaping configuration**

![](images/webconsole/ecweb_trafficshaping.png)

<dl class="variablelist">

<dt>Max Outbound Connections</dt>

<dd>

See [max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections")

</dd>

<dt>Server Max Outbound Connections</dt>

<dd>

See [server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections")

</dd>

<dt>Server Reserve Outbound Connections</dt>

<dd>

See [server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections.php "server_reserve_outbound_connections")

</dd>

<dt>Maximum SMTP Batch Size</dt>

<dd>

See [max_deliveries_per_connection](conf.ref.max_deliveries_per_connection.php "max_deliveries_per_connection")

</dd>

<dt>Inbound Throttle Messages</dt>

<dd>

See [inbound_throttle_messages](conf.ref.inbound_throttle_messages.php "inbound_throttle_messages")

</dd>

<dt>Outbound Throttle Messages</dt>

<dd>

See [outbound_throttle_messages](conf.ref.outbound_throttle_messages.php "outbound_throttle_messages")

</dd>

</dl>

**3.3.1.8. Timeouts**

Global timeout values. These values will be inherited by all subsequent Domain and Binding configurations, unless explicitly overridden.

<a name="fig.webconsole.global.timeouts"></a>

**Figure 3.7. Timeouts configuration**

![](images/webconsole/ecweb_timeouts.png)
**3.3.1.9. Connection Timeouts**

<dl class="variablelist">

<dt>Connect Timeout</dt>

<dd>

See [connect_timeout](conf.ref.connect_timeout.php "connect_timeout")

</dd>

<dt>EHLO Timeout</dt>

<dd>

See [ehlo_timeout](conf.ref.ehlo_timeout.php "ehlo_timeout")

</dd>

<dt>MAIL FROM Timeout</dt>

<dd>

See [mailfrom_timeout](conf.ref.mailfrom_timeout.php "mailfrom_timeout")

</dd>

<dt>RCPT TO Timeout</dt>

<dd>

See [rcptto_timeout](conf.ref.rcptto_timeout.php "rcptto_timeout")

</dd>

<dt>DATA Timeout</dt>

<dd>

See [body_timeout](conf.ref.body_timeout.php "body_timeout")

</dd>

<dt>RSET Timeout</dt>

<dd>

See [rset_timeout](conf.ref.rset_timeout.php "rset_timeout")

</dd>

<dt>Idle Session Timeout</dt>

<dd>

See [idle_timeout](conf.ref.idle_timeout.php "idle_timeout")

</dd>

</dl>

**3.3.1.10. Retrying Messages**

<dl class="variablelist">

<dt>Message Expiration</dt>

<dd>

See [message_expiration](conf.ref.message_expiration.php "message_expiration")

</dd>

<dt>Maximum Number of Retries</dt>

<dd>

See [max_retries](conf.ref.max_retries.php "max_retries")

</dd>

<dt>Base Retry Period</dt>

<dd>

See [retry_interval](conf.ref.retry_interval.php "retry_interval")

</dd>

</dl>

**3.3.1.11. Other Timeouts**

<dl class="variablelist">

<dt>DNS Expire Interval</dt>

<dd>

See [dns_expire_interval](conf.ref.dns_expire_interval.php "dns_expire_interval")

</dd>

<dt>Host Failure Retry</dt>

<dd>

See [host_failure_retry](conf.ref.host_failure_retry.php "host_failure_retry")

</dd>

</dl>

**3.3.1.12. Bounces**<a name="fig.webconsole.global.bounces"></a>

**Figure 3.8. Bounces configuration**

![](images/webconsole/ecweb_gblbounces.png)

<dl class="variablelist">

<dt>Bounce Suppress List</dt>

<dd>

See [bounce_suppress_list](conf.ref.bounce_suppress_list.php "bounce_suppress_list")

</dd>

<dt>Bounce Domains</dt>

<dd>

See [bounce_domains](conf.ref.bounce_domains.php "bounce_domains")

</dd>

<dt>Bounce Pattern</dt>

<dd>

See [bounce_pattern](conf.ref.bounce_pattern.php "bounce_pattern")

</dd>

<dt>Bounce Behavior</dt>

<dd>

See [bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior")

</dd>

</dl>

**3.3.1.13. Advanced**
### Warning

These options should be treated carefully, as they can have dramatic, negative effects on performance if not applied properly. Thorough testing of non-default settings should be performed prior to production deployment.

<a name="fig.webconsole.global.advanced"></a>

**Figure 3.9. Advanced configuration**

![](images/webconsole/ecweb_advanced.png)

<dl class="variablelist">

<dt>Disk Queue Drain Rate</dt>

<dd>

See [disk_queue_drain_rate](conf.ref.disk_queue_drain_rate.php "disk_queue_drain_rate")

</dd>

<dt>Remote SMTP Port</dt>

<dd>

See [remote_smtp_port](conf.ref.remote_smtp_port.php "remote_smtp_port")

</dd>

<dt>Max Resident Active Queue</dt>

<dd>

See [max_resident_active_queue](conf.ref.max_resident_active_queue.php "max_resident_active_queue")

</dd>

<dt>MX Failures To Delay</dt>

<dd>

See [mx_failures_to_delay](conf.ref.mx_failures_to_delay.php "mx_failures_to_delay")

</dd>

<dt>TCP Buffer Size</dt>

<dd>

See [tcp_buffer_size](conf.ref.tcp_buffer_size.php "tcp_buffer_size")

</dd>

<dt>Async Swap Out</dt>

<dd>

See [async_swap_out](conf.ref.async_swap_out.php "async_swap_out")

</dd>

<dt>Async Swap In</dt>

<dd>

See [async_swap_in](conf.ref.async_swap_in.php "async_swap_in")

</dd>

<dt>Async Unlink Concurrency</dt>

<dd>

See [async_unlink_concurrency](conf.ref.async_unlink_concurrency.php "async_unlink_concurrency")

</dd>

<dt>Gateway</dt>

<dd>

See [gateway](conf.ref.gateway.php "gateway")

</dd>

<dt>Prohibited Hosts</dt>

<dd>

See [prohibited_hosts](conf.ref.prohibited_hosts.php "prohibited_hosts")

</dd>

<dt>Use MMAP</dt>

<dd>

See [Use_MMAP](conf.ref.use_mmap.php "Use_MMAP")

</dd>

</dl>

### 3.3.2. Domains

Domain configurations are used to define specific behavior for messages sent to the named domain. The parameters available are described below. Any configuration parameters entered into a domain configuration stanza will override values configured globally.

<a name="fig.webconsole.domains"></a>

**Figure 3.10. Domain configuration**

![](images/webconsole/ecweb_domain_addnew.png)
**3.3.2.1. Domain Name and Behavior**

<dl class="variablelist">

<dt>Domain Name</dt>

<dd>

See [domain](conf.ref.domain.php "domain")

</dd>

<dt>Suspend</dt>

<dd>

See [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery")

</dd>

<dt>Blackhole</dt>

<dd>

See [blackhole](conf.ref.blackhole.php "blackhole")

</dd>

</dl>

**3.3.2.2. Connection Details**

<dl class="variablelist">

<dt>Require all MXs to resolve before starting delivery</dt>

<dd>

See [fully_resolve_before_smtp](conf.ref.fully_resolve_before_smtp.php "fully_resolve_before_smtp")

</dd>

<dt>Override EHLO Hostname</dt>

<dd>

See [ehlo_hostname](conf.ref.ehlo_hostname.php "ehlo_hostname")

</dd>

<dt>Use XCLIENT</dt>

<dd>

See [xclient](conf.ref.xclient.php "xclient")

</dd>

<dt>Delivery Method</dt>

<dd>

See [delivery_method](conf.ref.delivery_method.php "delivery_method")

</dd>

<dt>Delay Before Retrying Down Hosts</dt>

<dd>

See [host_failure_retry](conf.ref.host_failure_retry.php "host_failure_retry")

</dd>

<dt>Gateway for All Mail</dt>

<dd>

See [gateway](conf.ref.gateway.php "gateway")

</dd>

</dl>

**3.3.2.3. Bounces**

<dl class="variablelist">

<dt>Include entire message</dt>

<dd>

See [bounces_inline_original](conf.ref.bounces_inline_original.php "bounces_inline_original")

</dd>

<dt>Send out-of-band bounces</dt>

<dd>

See [generate_bounces](conf.ref.generate_bounces.php "generate_bounces")

</dd>

<dt>Set sender for bounces</dt>

<dd>

See [mdn_failures_notify](conf.ref.mdn_failures_notify.php "mdn_failures_notify")

</dd>

<dt>Set mailerdaemon in bounces</dt>

<dd>

See [mailerdaemon](conf.ref.mailerdaemon.php "mailerdaemon")

</dd>

</dl>

**3.3.2.4. Connection Timeouts**

<dl class="variablelist">

<dt>Connect</dt>

<dd>

See [connect_timeout](conf.ref.connect_timeout.php "connect_timeout")

</dd>

<dt>EHLO</dt>

<dd>

See [ehlo_timeout](conf.ref.ehlo_timeout.php "ehlo_timeout")

</dd>

<dt>MAIL FROM</dt>

<dd>

See [mailfrom_timeout](conf.ref.mailfrom_timeout.php "mailfrom_timeout")

</dd>

<dt>RCPT TO</dt>

<dd>

See [rcptto_timeout](conf.ref.rcptto_timeout.php "rcptto_timeout")

</dd>

<dt>DATA</dt>

<dd>

See [body_timeout](conf.ref.body_timeout.php "body_timeout")

</dd>

<dt>RSET</dt>

<dd>

See [rset_timeout](conf.ref.rset_timeout.php "rset_timeout")

</dd>

<dt>Idle Sessions</dt>

<dd>

See [idle_timeout](conf.ref.idle_timeout.php "idle_timeout")

</dd>

</dl>

**3.3.2.5. Retrying Messages**

<dl class="variablelist">

<dt>Message Expiration</dt>

<dd>

See [message_expiration](conf.ref.message_expiration.php "message_expiration")

</dd>

<dt>Maximum Number of Retries</dt>

<dd>

See [max_retries](conf.ref.max_retries.php "max_retries")

</dd>

<dt>Base Retry Period</dt>

<dd>

See [retry_interval](conf.ref.retry_interval.php "retry_interval")

</dd>

</dl>

**3.3.2.6. TLS**

<dl class="variablelist">

<dt>Enable TLS</dt>

<dd>

See [tls](conf.ref.tls.php "tls")

</dd>

<dt>TLS Usage</dt>

<dd>

See [tls](conf.ref.tls.php "tls")

</dd>

<dt>TLS Key</dt>

<dd>

See [tls_key](conf.ref.tls_key.php "tls_key")

</dd>

<dt>TLS Certificate</dt>

<dd>

See [tls_certificate](conf.ref.tls_certificate.php "tls_certificate")

</dd>

<dt>TLS Ciphers</dt>

<dd>

See [tls_ciphers](conf.ref.tls_ciphers.php "tls_ciphers")

</dd>

</dl>

**3.3.2.7. Traffic Shaping**

<dl class="variablelist">

<dt>Max Outbound Connections</dt>

<dd>

See [max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections")

</dd>

<dt>Maximum SMTP Batch Size</dt>

<dd>

See [max_deliveries_per_connection](conf.ref.max_deliveries_per_connection.php "max_deliveries_per_connection")

</dd>

<dt>Throttle Outbound Messages</dt>

<dd>

See [outbound_throttle_messages](conf.ref.outbound_throttle_messages.php "outbound_throttle_messages")

</dd>

<dt>Throttle Outbound Connections</dt>

<dd>

See [outbound_throttle_connections](conf.ref.outbound_throttle_connections.php "outbound_throttle_connections")

</dd>

</dl>

**3.3.2.8. Performance Tuning**

<dl class="variablelist">

<dt>Max Resident Active Queue</dt>

<dd>

See [max_resident_active_queue](conf.ref.max_resident_active_queue.php "max_resident_active_queue")

</dd>

<dt>MX Failures to Delay</dt>

<dd>

See [mx_failures_to_delay](conf.ref.mx_failures_to_delay.php "mx_failures_to_delay")

</dd>

<dt>Connect Timeout to Delay</dt>

<dd>

See [connect_timeout_to_delay](conf.ref.connect_timeout_to_delay.php "connect_timeout_to_delay")

</dd>

<dt>Drop Body After Trans Fail</dt>

<dd>

See [drop_body_after_trans_fail](conf.ref.drop_body_after_trans_fail.php "drop_body_after_trans_fail")

</dd>

</dl>

### 3.3.3. Bindings

For more information on bindings, see [Section 4.4, “MultiVIP© Interfaces”](operations.multivip.php "4.4. MultiVIP© Interfaces")

<a name="fig.webconsole.binding"></a>

**Figure 3.11. Binding configuration**

![](images/webconsole/ecweb_addnewbinding.png)
**3.3.3.1. Binding Name and Behavior**

<dl class="variablelist">

<dt>Binding Name</dt>

<dd>

See [binding](conf.ref.binding.php "binding")

</dd>

<dt>Suspend</dt>

<dd>

See [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery")

</dd>

<dt>Blackhole</dt>

<dd>

See [blackhole](conf.ref.blackhole.php "blackhole")

</dd>

</dl>

**3.3.3.2. Connection Details**

<dl class="variablelist">

<dt>Require all MXs to resolve before starting delivery</dt>

<dd>

See [fully_resolve_before_smtp](conf.ref.fully_resolve_before_smtp.php "fully_resolve_before_smtp")

</dd>

<dt>Override EHLO Hostname</dt>

<dd>

See [ehlo_hostname](conf.ref.ehlo_hostname.php "ehlo_hostname")

</dd>

<dt>Use XCLIENT</dt>

<dd>

See [xclient](conf.ref.xclient.php "xclient")

</dd>

<dt>Delivery Method</dt>

<dd>

See [delivery_method](conf.ref.delivery_method.php "delivery_method")

</dd>

<dt>Delay Before Retrying Down Hosts</dt>

<dd>

See [host_failure_retry](conf.ref.host_failure_retry.php "host_failure_retry")

</dd>

<dt>Gateway for All Mail</dt>

<dd>

See [gateway](conf.ref.gateway.php "gateway")

</dd>

</dl>

**3.3.3.3. Bounces**

<dl class="variablelist">

<dt>Include entire message</dt>

<dd>

See [bounces_inline_original](conf.ref.bounces_inline_original.php "bounces_inline_original")

</dd>

<dt>Send out-of-band bounces</dt>

<dd>

See [generate_bounces](conf.ref.generate_bounces.php "generate_bounces")

</dd>

<dt>Set sender for bounces</dt>

<dd>

See [mdn_failures_notify](conf.ref.mdn_failures_notify.php "mdn_failures_notify")

</dd>

<dt>Set mailerdaemon in bounces</dt>

<dd>

See [mailerdaemon](conf.ref.mailerdaemon.php "mailerdaemon")

</dd>

</dl>

**3.3.3.4. Connection Timeouts**

<dl class="variablelist">

<dt>Connect</dt>

<dd>

See [connect_timeout](conf.ref.connect_timeout.php "connect_timeout")

</dd>

<dt>EHLO</dt>

<dd>

See [ehlo_timeout](conf.ref.ehlo_timeout.php "ehlo_timeout")

</dd>

<dt>MAIL FROM</dt>

<dd>

See [mailfrom_timeout](conf.ref.mailfrom_timeout.php "mailfrom_timeout")

</dd>

<dt>RCPT TO</dt>

<dd>

See [rcptto_timeout](conf.ref.rcptto_timeout.php "rcptto_timeout")

</dd>

<dt>DATA</dt>

<dd>

See [body_timeout](conf.ref.body_timeout.php "body_timeout")

</dd>

<dt>RSET</dt>

<dd>

See [rset_timeout](conf.ref.rset_timeout.php "rset_timeout")

</dd>

<dt>Idle Sessions</dt>

<dd>

See [idle_timeout](conf.ref.idle_timeout.php "idle_timeout")

</dd>

</dl>

**3.3.3.5. Personality**

<dl class="variablelist">

<dt>Binding Address</dt>

<dd>

See [bind_address](conf.ref.bind_address.php "bind_address")

</dd>

<dt>Group</dt>

<dd>

See [binding_group](conf.ref.binding_group.php "binding_group")

</dd>

</dl>

**3.3.3.6. TLS**

<dl class="variablelist">

<dt>Enable TLS</dt>

<dd>

See [tls](conf.ref.tls.php "tls")

</dd>

<dt>TLS Usage</dt>

<dd>

See [tls](conf.ref.tls.php "tls")

</dd>

<dt>TLS Key</dt>

<dd>

See [tls_key](conf.ref.tls_key.php "tls_key")

</dd>

<dt>TLS Certificate</dt>

<dd>

See [tls_certificate](conf.ref.tls_certificate.php "tls_certificate")

</dd>

<dt>TLS Ciphers</dt>

<dd>

See [tls_ciphers](conf.ref.tls_ciphers.php "tls_ciphers")

</dd>

</dl>

**3.3.3.7. Traffic Shaping**

<dl class="variablelist">

<dt>Max Outbound Connections</dt>

<dd>

See [max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections")

</dd>

<dt>Maximum SMTP Batch Size</dt>

<dd>

See [max_deliveries_per_connection](conf.ref.max_deliveries_per_connection.php "max_deliveries_per_connection")

</dd>

<dt>Throttle Outbound Messages</dt>

<dd>

See [outbound_throttle_messages](conf.ref.outbound_throttle_messages.php "outbound_throttle_messages")

</dd>

<dt>Throttle Outbound Connections</dt>

<dd>

See [outbound_throttle_connections](conf.ref.outbound_throttle_connections.php "outbound_throttle_connections")

</dd>

</dl>

**3.3.3.8. Performance Tuning**

<dl class="variablelist">

<dt>Max Resident Active Queue</dt>

<dd>

See [max_resident_active_queue](conf.ref.max_resident_active_queue.php "max_resident_active_queue")

</dd>

<dt>MX Failures to Delay</dt>

<dd>

See [mx_failures_to_delay](conf.ref.mx_failures_to_delay.php "mx_failures_to_delay")

</dd>

<dt>Connect Timeout to Delay</dt>

<dd>

See [connect_timeout_to_delay](conf.ref.connect_timeout_to_delay.php "connect_timeout_to_delay")

</dd>

<dt>Drop Body After Trans Fail</dt>

<dd>

See [drop_body_after_trans_fail](conf.ref.drop_body_after_trans_fail.php "drop_body_after_trans_fail")

</dd>

</dl>

### 3.3.4. SMTP Listeners

For more information on SMTP listeners, see [the section called “ESMTP_Listener”](ecelerity.conf.php#ecelerity.conf.esmtp_listener "ESMTP_Listener").

<a name="fig.webconsole.listener"></a>

**Figure 3.12. ESMTP_Listener configuration**

![](images/webconsole/ecweb_addnewlistener.png)
**3.3.4.1. Listener Personality**

<dl class="variablelist">

<dt>Banner Hostname</dt>

<dd>

See [the section called “Configuring Limits, The "personality" Property”](ecelerity.conf.php#ecelerity.conf.esmtp.personality "Configuring Limits, The "personality" Property")

</dd>

<dt>Received Hostname</dt>

<dd>

See [the section called “Configuring Limits, The "personality" Property”](ecelerity.conf.php#ecelerity.conf.esmtp.personality "Configuring Limits, The "personality" Property")

</dd>

</dl>

**3.3.4.2. TLS**

<dl class="variablelist">

<dt>Enable TLS</dt>

<dd>

See [tls](conf.ref.tls.php "tls")

</dd>

<dt>TLS Key</dt>

<dd>

See [tls_key](conf.ref.tls_key.php "tls_key")

</dd>

<dt>TLS Certificate</dt>

<dd>

See [tls_certificate](conf.ref.tls_certificate.php "tls_certificate")

</dd>

<dt>TLS Ciphers</dt>

<dd>

See [tls_ciphers](conf.ref.tls_ciphers.php "tls_ciphers")

</dd>

</dl>

**3.3.4.3. Connection Limits**

<dl class="variablelist">

<dt>Idle Timeout</dt>

<dd>

See [idle_timeout](conf.ref.idle_timeout.php "idle_timeout")

</dd>

<dt>Batch Limit</dt>

<dd>

Set the `max_receptions_per_connection` option. See [the section called “Configuring Limits, The "personality" Property”](ecelerity.conf.php#ecelerity.conf.esmtp.personality "Configuring Limits, The "personality" Property")

</dd>

<dt>Max Message Size</dt>

<dd>

See [the section called “Configuring Limits, The "personality" Property”](ecelerity.conf.php#ecelerity.conf.esmtp.personality "Configuring Limits, The "personality" Property")

</dd>

</dl>

**3.3.4.4. SMTP Extensions**

<dl class="variablelist">

<dt>XCLIENT</dt>

<dd>

See [xclient](conf.ref.xclient.php "xclient")

</dd>

<dt>XDUMPCONTEXT</dt>

<dd>

See [the section called “XDUMPCONTEXT Extension for SMTP”](ecelerity.conf.php#ecelerity.conf.xdumpcontext.extension "XDUMPCONTEXT Extension for SMTP")

</dd>

<dt>IPMM</dt>

<dd>

IPMM

</dd>

</dl>

### 3.3.5. Logging

<a name="fig.webconsole.logger"></a>

**Figure 3.13. Logger configuration**

![](images/webconsole/ecweb_addnewlogger.png)
**3.3.5.1. Logger Type**

The logger types in this drop-down list box are:

*   `ec_logger` – This is the Momentum-style logging module. See [Section 14.26, “ec_logger – Momentum-Style Logging”](modules.ec_logger.php "14.26. ec_logger – Momentum-Style Logging").

*   `custom` – This is the custom logging module. See [Section 14.19, “custom_logger – Customizable Logging”](modules.custom_logger.php "14.19. custom_logger – Customizable Logging").

The Logger Name text box is used for the name of the logger module.

**3.3.5.2. Log File Locations**

<dl class="variablelist">

<dt>Main Log Location</dt>

<dd>

The `mainlog.ec` file.

</dd>

<dt>Panic Log Location</dt>

<dd>

The `paniclog.ec` file.

</dd>

<dt>Reject Log Location</dt>

<dd>

The `rejectlog.ec` file.

</dd>

</dl>

See [Section 14.26, “ec_logger – Momentum-Style Logging”](modules.ec_logger.php "14.26. ec_logger – Momentum-Style Logging") and [Section 4.3, “Logging”](operations.logging.php "4.3. Logging") for more information about the log files.

**3.3.5.3. Log Contents**

<dl class="variablelist">

<dt>Receptions</dt>

<dd>

This corresponds to the `log_receptions` option.

</dd>

<dt>Deliveries</dt>

<dd>

This corresponds to the `log_deliveries` option.

</dd>

<dt>Permanent Failures</dt>

<dd>

This corresponds to the `log_permanent_failures` option.

</dd>

<dt>Transient Failures</dt>

<dd>

This corresponds to the `log_transient_failures` option.

</dd>

</dl>

See [Section 14.26, “ec_logger – Momentum-Style Logging”](modules.ec_logger.php "14.26. ec_logger – Momentum-Style Logging") and [Section 4.3, “Logging”](operations.logging.php "4.3. Logging") for more information about these options.

### 3.3.6. Binding Matching Rules

<a name="fig.webconsole.bindingmatch"></a>

**Figure 3.14. Binding match configuration**

![](images/webconsole/ecweb_addnewbindingmatch.png)

This is the interface that is used to map messages into bindings.

| [Prev](webconsole.authentication.php)  | [Up](webconsole.php) |  [Next](webconsole.reports.php) |
| 3.2. Web Console Authentication  | [Table of Contents](index.php) |  3.4. Dashboard, Queue, Log and Bounce Reports |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)