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

| 2.2. HTTP_Listener |
| [Prev](rest.configuring.php)  | Chapter 2. Configuring Momentum to Use the Injector |  [Next](rest.sample.templates.php) |

## 2.2. HTTP_Listener

The HTTP_Listener is a listener module that can enclose Peer and Listen scopes like other listeners. All the options that are valid in the SMTP_Listener scope and its nested Peer and Listen scopes are likewise valid in the HTTP_Listener scope and its nested scopes.

**Configuration Change. ** As of version 3.6, the default value for `tcp_recv_buffer_size` and `tcp_send_buffer_size` within the HTTP_Listener scope is 32768.

[Example 2.1, “Configuring Momentum for REST Injection”](rest.configuring.php#rest.injector.configuration "Example 2.1. Configuring Momentum for REST Injection") shows a simple listener that listens on port `8081`. You will likely want to implement a more sophisticated listener in order to limit access. The following describes what happens when HTTP requests are made of an HTTP_Listener. The HTTP_Listener performs the following checks before allowing the request handler to execute:

*   IP-based access control restrictions are applied based on the remote address via `always_allow`, `always_deny options` in HTTP_Listener, Listen and Peer stanzas

*   Authentication controls are gated by the `enable_authentication` option in HTTP_Listener, Listen and Peer stanzas

*   `TLS_Certificate, TLS_Ciphers, TLS_Client_CA, TLS_Key, TLS_Verify_Mode` and `Use_SSL` options all affect the use of SSL for the session

*   `TLS_Verified_Peer_Is_Authorized` boolean option is specific to the HTTP_Listener and its scopes. It marks requests that use a verified SSL Client certificate as being authorized (similar to `TLS_Verified_Peer_Can_Relay` in the ESMTP_Listener). The default value for this option is `false`.

*   AuthDigestMD5Parameters stanza is used to control Digest authentication

*   AuthPlainParameters stanza is used to control Basic authentication

### Warning

The `relay_hosts` option has no effect on restricting access to an HTTP_Listener.

The example configuration below makes use of `AuthDigestMD5Parameters` using the default `ecauth` scheme. For a description of this scheme see "[Authorization Using the ecauth Scheme](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.control_authz.ecauth)".

<a name="idp44080"></a>

**Example 2.2. HTTP_Listener Using Built-in Momentum Authentication**

```
# To configure the HTTP_Listener to use Momentum
# authentication, the stanza would look like this:
HTTP_Listener {
  AuthDigestMD5Parameters = [
    uri = "ecauth://"
  ]
  enable_authentication = true
  Listen ":8081" {}
}
```

Apart from the `TLS_Verified_Peer_Is_Authorized` option mentioned above, the following options are used exclusively by the HTTP_Listener and it's nested scopes:

*   The `Max_Request_Size` option limits the size of an HTTP request. This option is similar in function to the `Max_Message_Size` parameter in the ESMTP listener. If this option is not set, there is no limit.

*   The `Log_Requests_to_Paniclog` turns logging on and off. The default value for this option is `false`.

    When set to `true`, an entry such as the following is written to the `paniclog.ec` file:

    `1307461172:192.168.0.197:51216 "POST /v1.0/inject/ HTTP/1.1" 200 224 5.000`

    The fields are as follows;

    1.  A Unix timestamp

    2.  The IP address where the injection originated

    3.  The request method

    4.  The request string

    5.  The protocol

    6.  The status code

    7.  The number of bytes written

    8.  The processing time in milliseconds

All the options valid in the HTTP_Listener and its nested scopes are as follows:

<a name="http_listener-options-table"></a>

**Table 2.1. http_listener options**

| Option/Description | Default | Scopes |
| --- | --- | --- |
| **[accept_queue_backlog](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.accept_queue_backlog)** – The accept queue backlog | 0 | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, msgcserver_listener, xmpp_listener |
| **[always_allow](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.control_authen.overriding)** – If Always_Allow is true, authentication is considered to have succeeded, unless Always_Deny is set | false | control_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer |
| **[always_deny](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.control_authen.overriding)** – If set to true, authentication is considered to have failed | false | control_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer |
| **[authdigestmd5parameters](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.inbound-authdigest-md5)** – Configure DIGEST-MD5 authentication |   | control_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[authplainparameters](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.inbound-auth.plain.text)** – Configure plain text login authentication |   | esmtp_listener, http_listener, listen, pathway, pathway_group, xmpp_listener |
| **[concurrency](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#esmtp_listener_example3)** – Define number of available threads | 0 | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, threadpool, xmpp_listener |
| **[disable_chunked](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.listener.php)** – An option used with aggregators who do not support chunked transfer-coding (Mobile Momentum) | false | http_listener, listen, pathway, pathway_group, peer |
| **[disable_nagle_algorithm](https://support.messagesystems.com/docs/web-ref/conf.ref.disable_nagle_algorithm.php)** – Disable nagle algorithm on sockets | false | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, global, http_listener, listen, xmpp_listener |
| **[enable](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#esmtp_listener_example3)** – Enable or disable a listener scope | true | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, msgcserver_listener, xmpp_listener |
| **[enable_authentication](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.inbound-mail)** – Whether or not to enable authentication |   | control_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer |
| **[events_per_iter](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.events_per_iter)** – Employ when using a Concurrency greater than 1 | 0 | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, xmpp_listener |
| **[file_mode](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.control_listener)** – File access rights in octal notation | 0660 | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, msgcserver_listener, xmpp_listener |
| **[idle_time](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.idle_time)** – The number of seconds of inactivity before a client is disconnected | 0 | esmtp_listener, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[listen](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.attributes)** *(scope)* – Specify the socket that a listener listens on |   | control_listener, ecstream_listener, esmtp_listener, http_listener, msgcserver_listener, xmpp_listener |
| **[listen_backlog](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.listen_backlog)** – The listen backlog | 500 | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, xmpp_listener |
| **[log_requests_to_paniclog](https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php)** – Whether to log REST injection requests | false | http_listener, listen, pathway, pathway_group, peer |
| **[max_request_size](https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php)** – Limit the size of an HTTP request |   | http_listener, listen, pathway, pathway_group, peer |
| **[peer](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.config.acls)** *(scope)* – Create an ACL within a specific listener |   | control_listener, ecstream_listener, esmtp_listener, http_listener, listen, xmpp_listener |
| **[pool_name](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#esmtp_listener_example3)** – Associate a threadpool with a listener |   | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, xmpp_listener |
| **[tcp_recv_buffer_size](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.tcp_recv_buffer_size)** – The size of the TCP receive buffer size | 4096 | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, xmpp_listener |
| **[tcp_send_buffer_size](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.tcp_send_buffer_size)** – The size of the TCP send buffer | 4096 | control_listener, eccluster_listener, ecstream_listener, esmtp_listener, http_listener, listen, xmpp_listener |
| **[tls_certificate](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_certificate.php)** – Certificate to use for inbound and outbound mail |   | binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_ciphers](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_ciphers.php)** – Allowable ciphers for a TLS session |   | binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_client_ca](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_client_ca.php)** – Certificate authority for inbound mail |   | ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_key](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_key.php)** – the TLS key to use for outbound mail or inbound mail |   | binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_verified_peer_is_authorized](https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php)** – Mark requests that use a verified SSL Client certificate as being authorized | false | http_listener, listen, pathway, peer |
| **[tls_verify_mode](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_verify_mode.php)** – How to handle certificates for inbound mail | none | ecstream_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer, xmpp_listener |
| **[use_ssl](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.use_ssl)** – Whether to use SSL verification | false | ecstream_listener, esmtp_listener, http_listener, listen, pathway, pathway_group, peer |

| [Prev](rest.configuring.php)  | [Up](rest.configuring.php) |  [Next](rest.sample.templates.php) |
| Chapter 2. Configuring Momentum to Use the Injector  | [Table of Contents](index.php) |  Chapter 3. Template Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)