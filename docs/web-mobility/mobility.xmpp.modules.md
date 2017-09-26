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

| Chapter 10. Mobile Momentum XMPP |
| [Prev](p.xmpp.php)  | Part III. Mobile Momentum XMPP |  [Next](modules.xmpp_logger.php) |

## Chapter 10. Mobile Momentum XMPP

**Table of Contents**

<dl class="toc">

<dt>[10.1\. The XMPP Module and Listener](mobility.xmpp.modules.php#modules.xmpp)</dt>

<dt>[10.2\. The XMPP Logger Module](modules.xmpp_logger.php)</dt>

<dt>[10.3\. Roster and Presence](mobility.xmpp.modules.roster.presence.php)</dt>

<dt>[10.4\. Lua XMPP Functions](xmpp.lua.functions.php)</dt>

<dt>[10.5\. Converting MCMT to XMPP](mcmt2xmpp.php)</dt>

<dt>[10.6\. Filtering Out Chat State Notifications](mcmt2xmpp.caveat.php)</dt>

</dl>

As of Momentum version 3.4 the Extensible Messaging and Presence Protocol (XMPP) modules are available. XMPP is a messaging protocol based on XML typically used for sending and receiving instant messages. This protocol is sometimes called the `Jabber` protocol.

Implementing XMPP entails configuring the xmpp and xmpp_logger modules and an xmpp_listener. You will also have to configure appropriate domains as XMPP servers or clients. The disposition for XMPP messages is controlled by specifying the `XMPP_Role` option in a Domain stanza. When this option is set to `server`, incoming streams for that domain are allowed.

Additionally, in order to maintain rosters and show the network availability of contacts, Lua sources must be added to the scriptlet module.

## 10.1. The XMPP Module and Listener

If you wish to use Momentum's XMPP capabilities, first add the following xmpp module to your configuration file:

`xmpp {}`

This module has no options apart from the `enabled` and `debug_level` options common to all modules. If you wish to use the `debug_level` option see [Module Debugging](https://support.messagesystems.com/docs/web-ref/modules.overview.implicit.php#modules.overview.debugging).

You cannot add the xmpp_listener before adding the xmpp module.

### 10.1.1. xmpp_listener

The xmpp_listener is built on Momentum's existing listener infrastructure, so it allows both IPv4 and IPv6 connections. This Listener accepts XMPP client and XMPP server streams and is configured in the same way as other Momentum listeners. However, this listener must use authentication as shown in the following:

<a name="modules.xmpp.xmpp_listener.example"></a>

**Example 10.1. xmpp_listener configuration**

```
xmpp_listener {
  AuthPlainParameters = [
     # you may use any auth storage scheme here, such as auth_ds,
     # but it must provide access to the password in clear text
     uri = "file:///opt/msys/etc/passwd"
  ]

  Listen "*:5222" {} # xmpp client port
}
```

The Listener stanza must contain a [AuthPlainParameters](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.inbound-auth.plain.text) or a [AuthDigestMD5Parameters](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.inbound-authdigest-md5) stanza indicating the password file.

The client-server port is customizable by the client. However, since the "well-known" port is 5222, if you are not using this port you'll need to ensure that anyone connecting to the server reconfigures their client.

Options valid in the xmpp_listener scope are as follows:

<a name="xmpp_listener-options-table"></a>

**Table 10.1. xmpp_listener options**

| Option/Description | Default | Scopes |
| --- | --- | --- |
| **[accept_queue_backlog](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.esmtp_listener)** – The accept queue backlog | 0 | listen, xmpp_listener |
| **[authdigestmd5parameters](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.inbound-authdigest-md5)** – Configure DIGEST-MD5 authentication |   | listen, pathway, pathway_group, peer, xmpp_listener |
| **[authplainparameters](https://support.messagesystems.com/docs/web-ref/conf.aaa.php#conf.inbound-auth.plain.text)** – Configure plain text login authentication |   | listen, pathway, pathway_group, xmpp_listener |
| **[concurrency](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.esmtp_listener)** – Define number of available threads | 0 | listen, threadpool, xmpp_listener |
| **[disable_nagle_algorithm](https://support.messagesystems.com/docs/web-ref/conf.ref.disable_nagle_algorithm.php)** – Disable nagle algorithm on sockets | false | global, listen, xmpp_listener |
| **[enable](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.esmtp_listener)** – Enable or disable a listener scope | true | listen, xmpp_listener |
| **[events_per_iter](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.events_per_iter)** – Employ when using a Concurrency greater than 1 | 0 | listen, xmpp_listener |
| **[file_mode](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.control_listener)** – File access rights in octal notation | 0660 | xmpp_listener |
| **[idle_time](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.idle_time)** – The number of seconds of inactivity before a client is disconnected | 0 | listen, pathway, pathway_group, peer, xmpp_listener |
| **[listen](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.attributes)** *(scope)* – Specify the socket that a listener listens on |   | xmpp_listener |
| **[listen_backlog](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.listen_backlog)** – The listen backlog | 500 | listen, xmpp_listener |
| **[peer](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.config.acls)** *(scope)* – Create an ACL within a specific listener |   | listen, xmpp_listener |
| **[pool_name](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#esmtp_listener_example3)** – Associate a threadpool with a listener |   | listen, xmpp_listener |
| **[tcp_recv_buffer_size](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.tcp_recv_buffer_size)** – The size of the TCP receive buffer size | 4096 | listen, xmpp_listener |
| **[tcp_send_buffer_size](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.listener.options.tcp_send_buffer_size)** – The size of the TCP send buffer | 4096 | listen, xmpp_listener |
| **[tls_certificate](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_certificate.php)** – Certificate to use for inbound and outbound mail |   | binding, binding_group, domain, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_ciphers](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_ciphers.php)** – Allowable ciphers for a TLS session |   | binding, binding_group, domain, global, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_client_ca](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_client_ca.php)** – Certificate authority for inbound mail |   | global, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_key](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_key.php)** – the TLS key to use for outbound mail or inbound mail |   | binding, binding_group, domain, global, listen, pathway, pathway_group, peer, xmpp_listener |
| **[tls_verify_mode](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_verify_mode.php)** – How to handle certificates for inbound mail | none | listen, pathway, pathway_group, peer, xmpp_listener |

### 10.1.2. XMPP_Role Domain and XMPP_Dialback_Secret Options

The `XMPP_Role` option is valid in the domain scope and is used to define which domains are acting as XMPP servers and which as clients.

The `XMPP_Dialback_Secret` is used in the domain scope in order to define the string used for the encrypted hash when generating and verifying the server dialback key.

Server dialback is defined at [XEP-0220](http://xmpp.org/extensions/xep-0220.html) as follows:

"This specification defines the Server Dialback protocol, which is used between XMPP servers to provide identity verification. Server Dialback uses the Domain Name System (DNS) as the basis for verifying identity; the basic approach is that when a receiving server accepts a server-to-server connection from an originating server, it does not process traffic over the connection until it has verified a key with an authoritative server for the domain asserted by the originating server. "

These configuration options are used in the following way:

```
domain "#xmpp#remotexmpp.example.com" {
  XMPP_Role = "client"
  XMPP_Dialback_Secret = "myS3cr3T"
}
```

In the previous example, setting `XMPP_Role` to `client` enables XMPP server-to-server connections to the domain `remotexmpp.example.com`. For more information about specifying protocols with domain names see [Section 7.4, “Multi Protocol Domain Naming”](mobility.mm7.multiprotocol.php "7.4. Multi Protocol Domain Naming").

When the role option is set to `server`, incoming streams are allowed for the specified domain. When it is set to `client`, you enable outgoing server-to-server connections on that domain.

Outgoing IPv6 support has the same behavior and caveats as it does for outgoing IPv6 SMTP.

**Dialback and Solaris**

Because Solaris does not include the backported SHA256 library functions, server dialback does not work properly on this operating system. As a workaround include the following dkim module on Solaris systems:

`dkim_sign "dkim_sign1" {}`

Adding this module simply forces Momentum to load the Solaris-compatible sha256 library. There is no dependency on DKIM functionality for this feature to work.

| [Prev](p.xmpp.php)  | [Up](p.xmpp.php) |  [Next](modules.xmpp_logger.php) |
| Part III. Mobile Momentum XMPP  | [Table of Contents](index.php) |  10.2. The XMPP Logger Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)