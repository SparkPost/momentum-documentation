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

| 2.1. The `ecelerity.conf` File |
| [Prev](conf.php)  | Chapter 2. Configuration |  [Next](conf.aaa.php) |

## 2.1. The `ecelerity.conf` File

This chapter serves as an introduction to the Momentum configuration file, describing how to configure Momentum for some common use cases. A more detailed reference can be found in [ecelerity.conf](ecelerity.conf.php "ecelerity.conf").

### Note

If the values assigned to any options contain whitespace or any of the characters ‘`#`, ‘`/`, ‘`"`, ‘`'`, ‘`=`, ‘`{`, ‘`}`, ‘`[`, ‘`]`, ‘`(`, ‘`)` they must be enclosed by quotation marks. Note that binding names cannot contain spaces.

All configuration options are case insensitive. For example, you can define an SMTP listener as `ESMTP_Listener` or `esmtp_listener`.

### 2.1.1. Comments and Whitespace

In common with many other Unix configuration files, the `ecelerity.conf` file uses the `#` (commonly referred to as "hash", "pound" or "octothorpe") symbol to introduce a single line comment. Whitespace is unimportant in the various configuration stanzas; feel free to pad the whitespace as you see fit for maximum readability.

### 2.1.2. Configuring Inbound Mail Service and a Control Listener

**Listeners**

Momentum is built around a powerful event based scheduling engine. A key part of that engine is responding to events that occur on inbound sockets, known as *listeners*.

A minimal listener configuration in a typical setup will look something like the following, which configures SMTP on port 25 and **ec_console** on the default TCP and Unix endpoints.

```
# Listen for mail from port 25 on any address
ESMTP_Listener = (
  *:25
)

# Accept online control connections from the local machine
Control_Listener = (
  /tmp/2025
  *:2025 <proto=ipv4> [
    0.0.0.0/0    = (
      DIGEST-MD5 [
        uri = "digest:///opt/ecelerity/etc/console_passwd"
      ]
    )
  ]
)
```

Given this control listener configuration, connecting to the system console from the command line specifying the **/opt/ecelerity/bin/ec_console** command connects via a Unix socket. To connect via TCP/IP specify `localhost:2025` following the **ec_console** command. For more information about the **ec_console** command see [Section 4.1, “The Momentum System Console”](operations.console.php "4.1. The Momentum System Console"). For more information about listeners see [ecelerity.conf](ecelerity.conf.php "ecelerity.conf").

In the ESMTP_Listener configuration, `*:25` instructs Momentum to bind to all IP addresses on port 25 and listen for SMTP traffic. If you want to restrict the listener to a particular IP address, you may do so using the following configuration snippet, which configures SMTP service on the private IP address `10.10.10.1`:

```
# Listen for mail from port 25 on the address 10.10.10.1
ESMTP_Listener = (
  10.10.10.1:25
)
```
**Relay_Hosts**

Momentum is a powerful mail delivery system. As an operator, you can expose your system to abuse by allowing unauthorized machines to send e-mail to domains for which the local instance does not provide mail service. Doing so makes your system an "open relay."

When configured to be an outbound e-mail relay, only trusted machines should be allowed to connect and inject mails. This is controlled with the `Relay_Host`. This option takes a space-separated list of IPv4 network blocks in Classless Inter-Domain Routing (CIDR) form. CIDR form consists of an IPv4 address followed by a number (between 0 and 32) dictating the number of bits in the netmask.

For example, all addresses in the "loopback" space begin with 127\. The netmask on a loopback device is 255.0.0.0 which has 8 bits set, so the CIDR form of a loopback network is 127.0.0.0/8. For a class C network (256 IP address, 254 usable), the netmask is 255.255.255.0, which contains 24 active bits. The CIDR form of the IP block representing addresses 192.168.10.0 through 192.168.10.255 is 192.168.10.0/24\. Single hosts have netmask with all (32) bits set making a host IP 10.1.2.3 have a CIDR form 10.1.2.3/32.

If your private network (10.10.10.0 netmask 255.255.255.0) contains machines that you trust and you wish to additionally enable relaying from the local host the following `Relay_Hosts` directive would be reasonable:

`Relay_Hosts = ( 127.0.0.0/8 10.10.10.0/24 )`

`Relay_Hosts` is also valid within a listener ACL stanza. For more information see [relay_hosts](conf.ref.relay_hosts.php "relay_hosts").

**Relay_Domains**

When configured as an inbound mail relay or gateway, it is necessary to specify for which domains you are willing to accept mail. Accepting mail from anyone destined to anywhere would make you an open relay and vulnerable to abuse.

With the `Relay_Domains` option, you may specify a list of domains and left-globbed domains for which the instance will relay mail (accept for delivery). Left-globbed domains are of the form `*fixed.ending`. `*.omniti.com` would **not** match omniti.com (as the dot is required), but would match test.omniti.com, mail.omniti.com, foo.omniti.com, etc. `*omniti.com` would match omniti.com. However, it would also match badomniti.com, which is usually undesirable, so in most cases the asterisk should be followed by a period.

To accept mail for the domain example.com and all subdomains under it, one would specify:

`Relay_Domains = ( example.com *.example.com )`
### 2.1.3. Configuring outbound mail delivery

**Routing mail**

By default, Momentum will use DNS to resolve the MX records for a destination domain to decide which machine(s) it will connect to when delivering the mail. You can override the use of MX records using the `Gateway` or `Routes` configuration options. When set, Momentum will attempt to resolve the gateway using MX records. If there are no MX records, it will attempt to resolve it as an A record and use the resultant list of IP addresses. The gateway option can be set per binding, per domain or at the global level. In addition, you can configure either LMTP or SMTP for delivery methods, and specify the remote port number to use, allowing a great deal of flexibility in customizing routing.

```
# route all mail to a "smart host"
Gateway = 10.10.10.50

# Except for mail for local.example.com
Domain local.example.com {
  # which is routed to this address
  Gateway = 10.10.10.20
  # using LMTP
  Delivery_Method = LMTP
}
```
**Prohibited_Hosts**

Some providers use DNS tricks to deter systems they feel are abusing their resources. One technique is to return a loopback or other local address to you when you query their MX records.

There are some addresses you may never want to deliver mail to. For example, when configured as an outbound e-mail relay you have no reason to deliver mail to your own IP, or any loopback addresses on your machine. To prevent delivery to loopback addresses (127.0.0.0/8) or the null route 0.0.0.0, you can use the following line:

`Prohibited_Hosts = ( 127.0.0.0/8 0.0.0.0 )`
### Note

This setting does not in any way affect where you can receive mail from, only where you can deliver mail to.

**MultiVIP© Interfaces**

Momentum allows you to attach outbound mail to one of a number of virtual interfaces, known as `bindings`, enabling you to specify which IP address(es) are used and also to enforce particular terms of service. MultiVIP© technology allows you to bind messages based on a variety of criteria, and allows third-party vendors to provide modules that expand the binding logic even further.

```
# customer-1 rules
binding "customer-1" {
  # use 10.10.10.1 as the source IP for customer-1 mail
  bind_address = 10.10.10.1
}

# customer-2 rules
binding "customer-2" {
  # use 10.10.10.2 as the source IP for customer-2 mail
  bind_address = 10.10.10.2
}
```

**Configuration Change. ** The regex_binding modules are discontinued in version 3.0\. Use Sieve or scriptlets instead.

More details on MultiVIP© can be found in [Section 4.4, “MultiVIP© Interfaces”](operations.multivip.php "4.4. MultiVIP© Interfaces").

**Throttling and Traffic Shaping**

Momentum provides a variety of options that allow you to control its network traffic profile, such as the rate at which outbound connections are established, the rate at which messages are transmitted and the number of connections that are established to a given domain. These options can be set per-binding and per-domain, following the usual fall-back rules (see [Section 2.4, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "2.4. Configuration Scopes and Fallback")) allowing a great deal of flexibility.

```
# limit customer-1 to sending 60 messages every 3 seconds
binding "customer-1" {
  outbound_throttle_messages = "60/3"
}

# Customer-2 rules
binding "customer-2" {
  # make no more than 20 concurrent connections to a given domain
  max_outbound_connections = 20

  # make no more than 40 concurrent connections to example.com
  domain "example.com" {
    max_outbound_connections = 40
  }
}
```
**Outbound TLS**

You may configure Momentum to use TLS on a per-domain or global basis when delivering mail. The `TLS` option is used to control whether TLS will be used and the behavior of Momentum if TLS negotiation fails. The default value of `no` means that Momentum will not attempt to use TLS at all. The value `ifavailable` will enable opportunistic use of TLS; if the remote host advertises TLS support and the TLS negotiation succeeds, the mail will be delivered over TLS. If the negotiation fails, the message is put back into the delayed queue and retried later. The last possible value is `required`.

### Warning

Setting TLS to `required` causes Momentum to deliver the mail only if TLS is successfully negotiated.

In addition to enabling the `TLS`, you will also need to configure other TLS related properties, such as the certificate to present to the remote server, if any, the allowed certificate authority list used to validate the remote server, and perhaps the list of allowed ciphers to use for the connection. All of these options are configurable at the global, binding and domain scopes.

```
# TLS settings for customer-1
binding "customer-1" {
  tls_key = "/path/to/customer1.key"
  tls_certificate = "/path/to/customer2.cert"

  domain "trusted.partner.example.com" {
    tls = "required"
    tls_ca = "/path/to/customer1/partners.cabundle"
  }
}
```
**Outbound XCLIENT support**

It is often useful for a relay to be able to propagate the original sender IP address to a remote relay so that it can apply more intelligent policy rules to the message. The XCLIENT SMTP extension specifies a protocol for doing exactly that. The `XCLIENT` configuration option allows you to specify whether Momentum should use XCLIENT when the remote host advertises support for it.

Configuration is similar to TLS configuration, with possible values being `no` to not use XCLIENT (the default), `ifavailable` to use it if it is advertised and `required` to prevent delivery if the remote host does not support XCLIENT.

### Warning

Setting XCLIENT to `required` causes Momentum to deliver the mail only if the remote client supports XCLIENT.

```
binding "customer-1" {
  XCLIENT = "ifavailable"

  domain "relay.example.com" {
    XCLIENT = "required"
  }
}
```

### 2.1.4. Environment Variables and Startup Scripts

<a class="indexterm" name="idp597056"></a>

Some modules require that environment variables be set or adjusted on startup. Likewise, it can be useful to execute specific scripts on startup or shutdown. If Momentum is started up using the **ec_ctl** script then any environment variables included in the `environment` file will be set and any startup scripts in the `rc.includes` directory will be executed.

**2.1.4.1. The `environment` File**

Environment variables can be set in the `/opt/ecelerity/etc/environment` file. The variables that can be set are as follows:

*   `BINDIR` – the path to the Momentum `bin` directory, typically `/opt/ecelerity/bin` .

*   `CONFFILE` – the path to the `ecelerity.conf` file to be used.

*   `CONTROL` – the path to a Unix domain control listener endpoint. This parameter should match what you have configured for your Control_Listener in `ecelerity.conf`.

*   `EC_DIGEST_REALM` – The MD5 digest realm. For more information see [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd").

*   `ECELERITY_MEMORY` – to use pipe_io on Linux this variable must be set to `NOREPLACE`.

*   `EXTRA_ARGS` – additional parameters to pass to Momentum.

*   `LD_LIBRARY_PATH` – in case the ld path needs to be augmented. This mechanism is used for module specific adjustments to the environment.

*   `PLAT` – the platform name.

*   `TRY` – number of times to loop waiting for Momentum to start up.

For examples of using the `environment` file see [Section 14.42.3, “Pipe IO Wrapper on Linux”](modules.pipeio.php#modules.pipeio.environment.file "14.42.3. Pipe IO Wrapper on Linux") and also [ec_ctl](executable.ec_ctl.php "ec_ctl").

**2.1.4.2. The `rc.includes` Directory**

The `rc.includes` directory under the `/opt/ecelerity/bin` directory allows third party module providers and local administrators to add startup and shutdown procedures to the **ec_ctl** script. For example, use this directory for scripts that initiate database recovery, set environment variables, or check for necessary mount points.

Start scripts must be named start.*`purpose`* and stop scripts stop.*`purpose`*. **ec_ctl** will use `sh .` to include each script named in this format. For an example script see [Section 2.5, “Starting Momentum”](conf.starting.php "2.5. Starting Momentum").

### 2.1.5. Further Configuration Options

Momentum configuration is covered in the form of a detailed reference in [ecelerity.conf](ecelerity.conf.php "ecelerity.conf").

| [Prev](conf.php)  | [Up](conf.php) |  [Next](conf.aaa.php) |
| Chapter 2. Configuration  | [Table of Contents](index.php) |  2.2. Authentication, Authorization and Accounting |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)