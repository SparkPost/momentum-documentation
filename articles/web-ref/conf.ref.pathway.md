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

| pathway |
| [Prev](conf.ref.outbound_throttle_messages.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.pathway_group.php) |

<a name="conf.ref.pathway"></a>
## Name

pathway — a grouping of inbound configuration options

<a name="idp10570336"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.24.

The `Pathway` *scope* is used to group inbound configuration options that you wish to apply to a specific ESMTP_Listener. A Pathway scope may be defined in the global scope or within a Pathway_Group scope.

```
Pathway "example1" {
  allow_null_envelope_sender = true
}

Pathway_Group "group1" {

  Pathway "example2" {
    idle_time = 400
  }
}
```

The usual fallback semantics apply to options valid in the Pathway scope. The value that an option assumes, in order of decreasing precedence, is as follows:

1.  Pathway_Group::Pathway

2.  Pathway

3.  Pathway_Group

4.  Global

A Pathway is associated with a specific ESMTP_Listener or a Listen or Peer scope within an ESMTP_Listener by setting the `Pathway` *option* within that scope. For example:

```
Pathway "example1" {
  allow_null_envelope_sender = true
}

ESMTP_Listener {
  Listen ":25" {
    ...
    **Pathway = "example1"** 
  }
}
```

Pathway_groups are used for logical groupings only and cannot be associated with ESMTP_Listeners.

Unlike bindings, Pathways can be set by Sieve actions; since a Pathway is just a message context variable, you can set it in the following way:

`vctx_mess_set "pathway" "example1"`<a name="idp10585008"></a>
## Scope

The Pathway scope is valid in the global scope and within a Pathway group scope.

The Pathway *option* references a Pathway scope and is valid within an ESMTP_Listener or within a Listen or Peer scope within an ESMTP_Listener.

Options valid within the Pathway scope are listed in the following section.

<a name="pathway-options-table"></a>

**Table 9.31. pathway options**

| Option/Description | Default | Scopes |
| --- | --- | --- |
| **[alias_schemes](conf.ref.alias_schemes.php "alias_schemes")** – Enable named alias expansion schemes |   | domain, global, pathway, pathway_group |
| **[allow_ip_literal](conf.ref.allow_ip_literal.php "allow_ip_literal")** – Allow IP addresses in email addresses | true | esmtp_listener, global, listen, pathway, pathway_group, peer |
| **[allow_null_envelope_sender](conf.ref.allow_null_envelope_sender.php "allow_null_envelope_sender")** – Allow the null envelope sender in email addresses | true | esmtp_listener, global, listen, pathway, pathway_group, peer |
| **[allow_trailing_whitespace_in_commands](conf.ref.allow_trailing_whitespace_in_commands.php "allow_trailing_whitespace_in_commands")** – Allow trailing white space at the end of an SMTP command | false | esmtp_listener, global, listen, pathway, pathway_group, peer |
| **[always_allow](conf.aaa.php#conf.control_authen.overriding "2.2.2.3. Overriding Authentication")** – When set to true, authentication is considered to have succeeded, unless always_deny is set | false | control_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer |
| **[always_deny](conf.aaa.php#conf.control_authen.overriding "2.2.2.3. Overriding Authentication")** – If set to true, authentication is considered to have failed | false | control_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer |
| **[authcrammd5parameters](conf.aaa.php#conf.inbound-auth.cram-md5 "2.2.1.2. CRAM-MD5 authentication")** – Configure CRAM-MD5 authentication |   | control_listener, esmtp_listener, listen, pathway, pathway_group |
| **[authdigestmd5parameters](conf.aaa.php#conf.inbound-authdigest-md5 "2.2.1.1. DIGEST-MD5 Authentication")** – Configure DIGEST-MD5 authentication |   | control_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[authloginparameters](conf.aaa.php#conf.control_authen.clear.text "2.2.2.1. Clear Text LOGIN authentication for a Control_Listener")** – Configure clear text login authentication |   | control_listener, esmtp_listener, listen, pathway, pathway_group |
| **[authplainparameters](conf.aaa.php#conf.inbound-auth.plain.text "2.2.1.4. Plain Text Authentication")** – Configure plain text login authentication |   | esmtp_listener, http_listener, listen, pathway, pathway_group, xmpp_listener |
| **[banner_hostname](ecelerity.conf.php#ecelerity.conf3.listener.options.banner_hostname)** – Specifies the banner hostname that will be displayed to the remote client upon connecting |   | esmtp_listener, listen, pathway, pathway_group, peer |
| **[bounce_domains](conf.ref.bounce_domains.php "bounce_domains")** – Configure the list of domains eligible for bounce processing |   | global, pathway, pathway_group |
| **[context](ecelerity.conf.php#ecelerity.conf3.listener.options.context)** – Use to set arbitrary connection context key value pairs |   | esmtp_listener, listen, pathway, pathway_group, peer |
| **[default_charset](conf.ref.default_charset.php "default_charset")** – Control the character set | us-ascii | global, pathway, pathway_group |
| **[disable_chunked](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.listener.php)** – An option used with aggregators who do not support chunked transfer-coding (Mobile Momentum) | false | http_listener, listen, pathway, pathway_group, peer |
| **[domain_for_unqualified_recipient_addresses](conf.ref.domain_for_unqualified_recipient_addresses.php "domain_for_unqualified_recipient_addresses")** – Configure a domain which will be used to resolve delivery for unqualified addresses |   | esmtp_listener, global, listen, pathway, pathway_group, peer |
| **[domain_for_unqualified_sender_address](conf.ref.domain_for_unqualified_sender_address.php "domain_for_unqualified_sender_address")** – Configure a domain which will be used to substitute for unqualified sender addresses |   | esmtp_listener, global, listen, pathway, pathway_group, peer |
| **[ecstream_idle_time](ecelerity.conf.php#ecelerity.conf.ecstream_listener "ECStream_Listener")** – The number of seconds of inactivity before a client is disconnected (ECStream only) | 300 | ecstream_listener, listen, pathway, pathway_group, peer |
| **[ecstream_max_batch_size](ecelerity.conf.php#ecelerity.conf.ecstream_listener "ECStream_Listener")** – The maximum number of ECStream messages to accept before dropping back into the scheduler (ECStream only) | 10000 | ecstream_listener, listen, pathway, pathway_group, peer |
| **[enable_authentication](conf.ecelerity.conf.php#conf.inbound-mail "2.1.2. Configuring Inbound Mail Service and a Control Listener")** – Whether or not to enable authentication |   | control_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer |
| **[generate_bounces_for_multi_recipient_policy_rejections](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php "generate_bounces_for_multi_recipient_policy_rejections")** – Generate MDNs after reception for policy rejections | true | global, pathway, pathway_group |
| **[idle_time](ecelerity.conf.php#ecelerity.conf3.listener.options.idle_time)** – The number of seconds of inactivity before a client is disconnected | 0 | esmtp_listener, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[inbound_throttle_messages](conf.ref.inbound_throttle_messages.php "inbound_throttle_messages")** – Rate limit inbound mail |   | global, pathway, pathway_group |
| **[listener_sessions](ecelerity.conf.php#ecelerity.conf3.listener.options.listener_sessions)** – Specifies the maximum number of concurrent sessions that can be established to a listener | 0 | esmtp_listener, listen, pathway, pathway_group, peer |
| **[log_requests_to_paniclog](https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php)** – Whether to log REST injection requests | false | http_listener, listen, pathway, pathway_group, peer |
| **[max_message_size](ecelerity.conf.php#ecelerity.conf3.listener.options.max_message_size)** – The maximum number of bytes allowed in a single message | 0 | esmtp_listener, listen, pathway, pathway_group, peer |
| **[max_receptions_per_connection](ecelerity.conf.php#ecelerity.conf3.listener.options.max_receptions_per_connection)** – The maximum number of messages allowed in a single session | 0 | esmtp_listener, global, listen, pathway, pathway_group, peer |
| **[max_recipients_per_message](ecelerity.conf.php#ecelerity.conf3.listener.options.max_recipients_per_message)** – The maximum number of recipients allowed in a message | 0 | esmtp_listener, listen, pathway, pathway_group, peer |
| **[max_request_size](https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php)** – Limit the size of an HTTP request |   | http_listener, listen, pathway, pathway_group, peer |
| **[mcmt_reception](https://support.messagesystems.com/docs/web-mobility/mm7.mcmt_reception.php)** – Configure a listener to accept the Multi-Channel Message Type (Mobile Momentum) | passthru | esmtp_listener, listen, pathway, pathway_group, peer |
| **[open_relay](ecelerity.conf.php#ecelerity.conf3.listener.options.open_relay)** – Whether the MTA is an open relay or not | false | esmtp_listener, listen, pathway, pathway_group, peer |
| **[received_hostname](ecelerity.conf.php#ecelerity.conf3.listener.options.received_hostname)** – The hostname that is placed in the received headers |   | esmtp_listener, listen, pathway, pathway_group, peer |
| **[relay_domains](conf.ref.relay_domains.php "relay_domains")** – Configure the list of domains for which Momentum relays mail |   | global, pathway, pathway_group |
| **[relay_for_sending_domains](ecelerity.conf.php#ecelerity.conf3.listener.options.relay_for_sending_domains)** – Domains that may use the MTA as a relay |   | esmtp_listener, listen, pathway, pathway_group, peer |
| **[relay_hosts](conf.ref.relay_hosts.php "relay_hosts")** – Configure the list of hosts for which Momentum relays mail |   | esmtp_listener, global, listen, pathway, pathway_group, peer |
| **[require_ehlo](conf.ref.require_ehlo.php "require_ehlo")** – Reject mail from clients that do not say HELO | false | esmtp_listener, global, listen, pathway, pathway_group, peer |
| **[rfc2821_allow_whitespace_in_envelope](conf.ref.rfc2821_allow_whitespace_in_envelope.php "rfc2821_allow_whitespace_in_envelope")** – Permit trailing white space before the final CRLF | false | global, pathway, pathway_group |
| **[rfc2821_pedantic_address_rules](conf.ref.rfc2821_pedantic_address_rules.php "rfc2821_pedantic_address_rules")** – Allow relaxation of enforcement of the rfc2821 address rules | true | global, pathway, pathway_group |
| **[rfc2822_date_header](conf.ref.rfc2822_date_header.php "rfc2822_date_header")** – Allow relaxation of enforcement of the rfc2822 address rules | ifneeded | global, pathway, pathway_group |
| **[rfc2822_lone_lf_in_body](conf.ref.rfc2822_lone_lf_in_body.php "rfc2822_lone_lf_in_body")** – Allow relaxation of enforcement of the rfc2822 address rules | ignore | global, pathway, pathway_group |
| **[rfc2822_lone_lf_in_headers](conf.ref.rfc2822_lone_lf_in_headers.php "rfc2822_lone_lf_in_headers")** – Allow relaxation of enforcement of the rfc2822 address rules | pedantic | global, pathway, pathway_group |
| **[rfc2822_max_line_length](conf.ref.rfc2822_max_line_length.php "rfc2822_max_line_length")** – Allow relaxation of enforcement of the rfc2822 address rules | ignore | global, pathway, pathway_group |
| **[rfc2822_max_line_length_policy](conf.ref.rfc2822_max_line_length_policy.php "rfc2822_max_line_length_policy")** – Determine how non-RFC-compliant line lengths are handled | none | global, pathway, pathway_group |
| **[rfc2822_messageid_header](conf.ref.rfc2822_messageid_header.php "rfc2822_messageid_header")** – Allow relaxation of enforcement of the rfc2822 address rules | ifneeded | global, pathway, pathway_group |
| **[rfc2822_missing_headers](conf.ref.rfc2822_missing_headers.php "rfc2822_missing_headers")** – Allow relaxation of enforcement of the rfc2822 address rules | reject | global, pathway, pathway_group |
| **[rfc2822_trace_headers](conf.ref.rfc2822_trace_headers.php "rfc2822_trace_headers")** – Allow relaxation of enforcement of the rfc2822 address rules | true | global, pathway, pathway_group |
| **[service_sessions](ecelerity.conf.php#ecelerity.conf3.listener.options.service_sessions)** – The maximum number of concurrent sessions that can be established to all listeners | 0 | esmtp_listener, listen, pathway, pathway_group, peer |
| **[smtp_extensions](ecelerity.conf.php#ecelerity.conf3.extensions "SMTP Extensions")** – Array of SMTP extensions |   | esmtp_listener, listen, pathway, pathway_group, peer |
| **[starttls_injection_policy](conf.ref.starttls_injection_policy.php "starttls_injection_policy")** – Protect against SMTP injections prior to TLS | reject | esmtp_listener, listen, pathway, pathway_group, peer |
| **[static_banner](ecelerity.conf.php#ecelerity.conf3.listener.options.static_banner)** – The banner that is displayed to the remote client |   | esmtp_listener, listen, pathway, pathway_group, peer |
| **[tls_allow_renegotiation](conf.ref.tls_allow_renegotiation.php "tls_allow_renegotiation")** – Whether to enable OpenSSL TLS renegotiation | true | ecstream_listener, esmtp_listener, http_listener, listen, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_certificate](conf.ref.tls_certificate.php "tls_certificate")** – Certificate to use for inbound and outbound mail |   | binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_ciphers](conf.ref.tls_ciphers.php "tls_ciphers")** – Allowable ciphers for a TLS session |   | binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_client_ca](conf.ref.tls_client_ca.php "tls_client_ca")** – Certificate authority for inbound mail |   | ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_key](conf.ref.tls_key.php "tls_key")** – the TLS key to use for outbound mail or inbound mail |   | binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_protocols](conf.ref.tls_protocols.php "tls_protocols")** – Allowable ciphers for TLS inbound and outbound sessions |   | binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer |
| **[tls_verified_peer_can_relay](ecelerity.conf.php#ecelerity.conf3.listener.options "Listener Options")** – Verification that peer can relay | false | ecstream_listener, esmtp_listener, listen, pathway, pathway_group, peer |
| **[tls_verified_peer_is_authorized](https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php)** – Mark requests that use a verified SSL Client certificate as being authorized | false | http_listener, listen, pathway, peer |
| **[tls_verify_mode](conf.ref.tls_verify_mode.php "tls_verify_mode")** – Determine whether a TLS certificates is required |   | ecstream_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[use_ssl](ecelerity.conf.php#ecelerity.conf3.listener.options.use_ssl)** – Whether to use SSL verification | false | ecstream_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer |

<a name="idp10771808"></a>
## See Also

[pathway_group](conf.ref.pathway_group.php "pathway_group")

| [Prev](conf.ref.outbound_throttle_messages.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.pathway_group.php) |
| outbound_throttle_messages  | [Table of Contents](index.php) |  pathway_group |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)