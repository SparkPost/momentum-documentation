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

| ecelerity.conf |
| [Prev](conf.ref.files.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.address_metrics_cleanse_interval.php) |

<a name="ecelerity.conf"></a>
## Name

ecelerity.conf — Momentum configuration file

<a name="idp3769360"></a>
## Description

The `/opt/ecelerity/etc/ecelerity.conf` file is the master configuration file for the Momentum application server.

<a name="idp3771488"></a>
## Comments, Whitespace and Includes

In common with many other Unix configuration files, the `ecelerity.conf` file uses the `#` (commonly referred to as "hash", "pound" or "octothorpe") symbol to introduce a single line comment. Whitespace is unimportant in the various configuration stanza; feel free to pad the whitespace as you see fit for maximum readability.

Starting with Momentum 1.2.12, you may use C-style comments in your ecelerity.conf. C-style comments begin with `/*` and end with `*/`. Any text between those two markers will be ignored by Momentum. C-style comments do not nest.

Also since Momentum 1.2.12, you may break apart your configuration into multiple files and reference them using the `include` statement.

`include "/opt/ecelerity/etc/other.conf"`

Momentum 2.0 expands the include statement to allow the inclusion of a directory. When the referenced path is a directory, all the files within that directory are included in lexical order. Hidden files (those whose names begin with a single period) are not included. Sub-directories are not automatically processed.

```
# assuming that /opt/ecelerity/etc/config.d is a directory
# each file in that directory will be included
include "/opt/ecelerity/etc/config.d"
```

Momentum 2.1 further expands the include mechanism so that included files are routed via the modular IO wrapper layer, allowing configuration to be loaded from any URI which has a registered handler in the Momentum core. Of primary interest here is the `eccmgr` wrapper, which pulls configuration data from the versioned configuration repository that is managed by **eccmgr**, part of the Momentum clustering support.

`include "eccmgr://user:passwd@10.10.10.11:2026/boot/default"`<a name="ecelerity.conf.listeners"></a>
## Listeners

Momentum is built around a powerful event based scheduling engine. A key part of that engine is responding to events that occur on inbound sockets, known as *listeners*.

The basic listener syntax is as follows:

```
Esmtp_Listener = (
  *:25
)
```

The `*:25` is an example of an address; multiple addresses can be specified for a given listener, allowing you to configure service on multiple IP/port, Unix socket or named pipe endpoints.

Momentum supports three major types of listener for serving SMTP, Control and ECStream clients.

<a name="ecelerity.conf.control_listener"></a>
## Control_Listener

```
Control_Listener = (
  /tmp/2025
  *:2025 <proto=ipv4> [
    0.0.0.0/0    = (
      DIGEST-MD5 [
        uri = digest:///opt/ecelerity/etc/console_passwd ]
    )
  ]
)
```

Configures the end-point(s) on which Momentum should listen for incoming control connections (made via `ec_console` or the web console). For local-only configurations, a Unix domain socket may be appropriate. If your network is reasonably secure, you can specify an IPv4 address and port for TCP/IP services.

The Control_Listener supports `ALWAYS-ALLOW`, `LOGIN` and `DIGEST-MD5` extended properties. For more information see [Section 2.2.2, “Configuring Authentication for the Control Listener”](conf.aaa.php#conf.control_authen "2.2.2. Configuring Authentication for the Control Listener").

<a name="ecelerity.conf.ecstream_listener"></a>
## ECStream_Listener

Configures the end-point(s) on which Momentum should listen for incoming ECStream connections. This list can contain any number of Unix domain sockets and/or IP:port addresses for TCP/IP service.

The ECStream protocol is a bare-bones, high performance injection mechanism. It does not support any extended properties.

```
# What IPs and ports Ecelerity should listen on for incoming ECStream.
# Format is a list of IP:port pairs.  Wildcards are accepted for IPs.
ECStream_Listener = ( *:1825,5 <proto=ipv4> )
```
<a name="ecelerity.conf.esmtp_listener"></a>
## ESMTP_Listener

Configures the end-point(s) on which Momentum should listen for incoming SMTP connections. This list can contain any number of Unix domain sockets and/or IP:port addresses for TCP/IP service.

The ESMTP_Listener supports all of the extended properties and extensions described below.

```
Esmtp_Listener = (
  *:25 [
  ### Globally set a 5 minute timeout on IPv4 connections
  ### Continue means we do not stop here... keep matching and applying
          0.0.0.0/0 = (   personality [
                            # expire connections after 5 minutes
                            idle_time = 300
                            # set example.com as the hostname in my banner
                            banner_hostname = "example.com"
                            # use this host when forming Received headers
                            received_hostname = "mx-0-1.example.com"
                            # send this static banner instead of the default
                            static_banner = "220 my.mail.server ESMTP"
                          ]
                          continue
                       )

   ### We are an open relay for 10.1.2.3
   10.1.2.3/32 = ( relay_for_sending_domains )

   ### 10.1.2.4 is allowed to send mail with envelope sender domains matching
   ### from client1.com and client2.com
   10.1.2.4/32 = ( relay_for_sending_domains [
                       client1.com = true
                       client2.com = true
                     ]
                     context [
                       client = "ACME Inc."
                     ]
                  )
   ### Password based auth
   10.0.0.0/8 = (
                DIGEST-MD5 [
                  extension = AUTH
                  extension_argument = DIGEST-MD5
                  uri = file:///opt/ecelerity/etc/smtp_passwd
                  realm = "SMTP Users"
                ]
               )
   ### IPv6 addresses if you need them would be
#  ::1/0 =     ( personality
#                  [ idle_time = 300 ]
#              )
    ]
    )
```
<a name="ecelerity.conf.tcpip.listener.syntax"></a>
## TCP/IP Listener Address Syntax

```
Esmtp_Listener = (
  *:25
  [::1]:25
  127.0.0.1:25
  *:587,200
  *:587,200~20
)
```

<dl class="variablelist">

<dt>*:25</dt>

<dd>

This configures Momentum to listen on `INADDR_ANY` on port 25.

</dd>

<dt>127.0.0.1:25</dt>

<dd>

Listens on port 25 of the IP address `127.0.0.1`.

</dd>

<dt>[::1]:25</dt>

<dd>

Listens on port 25 of the IPv6 address `::1`.

</dd>

<dt>*:587,200</dt>

<dd>

Listens on port 587 on `INADDR_ANY` using a `listen` backlog of 200\. This is the maximum backlog that can be configured prior to version 2.2.3.47\. If unspecified, the default backlog is 5.

</dd>

<dt>*:587,200~20</dt>

<dd>

Listens on port 587 on `INADDR_ANY` using a `listen` backlog of 200 with a concurrency of 20.

On Unix platforms, a concurrency of 20 means that 20 threads will be spawned to process `accept` calls. On Windows platforms, a concurrency of 20 means that 20 separate asynchronous `accept` calls will be initiated.

**Configuration Change. ** This feature is available as of version 2.2.3.47.

As of version 2.2.3.47 the listen backlog can be set greater than `200`.

### Note

Momentum is no longer supported on the Windows platform.

</dd>

</dl>

<a name="ecelerity.conf.unix.domain.listener.syntax"></a>
## Unix Domain Listener Address Syntax

```
Control_Listener = (
  /tmp/2025
  /tmp/2025,200
  /tmp/2025,200~20
)
```

<dl class="variablelist">

<dt>/tmp/2025</dt>

<dd>

Listens on a Unix domain socket located at `/tmp/2025`.

</dd>

<dt>/tmp/2025,200</dt>

<dd>

Listens on a Unix domain socket located at `/tmp/2025` using a `listen` backlog of 200\. This is the maximum backlog that can be configured. If unspecified, the default backlog is 5.

**Configuration Change. ** This feature is available as of version 2.2.3.47.

As of version 2.2.3.47 the listen backlog can be set greater than `200`.

</dd>

<dt>/tmp/2025,200~20</dt>

<dd>

Listens on a Unix domain socket located at `/tmp/2025` using a `listen` backlog of 200 with a concurrency of 20; 20 threads will be spawned to process `accept` calls.

</dd>

</dl>

<a name="ecelerity.conf.named.pipe.listener.syntax"></a>
## Named Pipe Listener Address Syntax

Starting with Momentum 2.0, on Windows platforms, you can request that Momentum listen for connections on a named pipe instance. The following example creates a named pipe that will accept control connections from CREATOR_OWNER (typically `ecuser`), the `Administrator` user and members of the local `Administrators` group--all other users will be denied access.

### Note

Momentum is no longer supported on Windows.

```
Control_Listener = (
  \ecconsole
  \ecconsole~10
)
```

<dl class="variablelist">

<dt>\ecconsole</dt>

<dd>

Creates 5 instances of the named pipe `\\.\pipe\ecconsole`. This implies that a maximum of 5 clients can be connected at one time.

</dd>

<dt>\ecconsole~10</dt>

<dd>

Creates 10 instances of the named pipe `\\.\pipe\ecconsole`. A maximum of 10 clients can be connected at one time.

</dd>

</dl>

If you have more complicated access control requirements, you may provide a custom NT security ACL using the following syntax:

```
Control_Listener = (
  \ecconsole~5 [
    # Deny 'JoeBloggs'
    DENY = (
      YOURDOMAIN\JoeBloggs
    )
    # Allow 'UserName' and members of 'GroupName' to control Momentum
    ALLOW = (
      YOURDOMAIN\UserName
      YOURDOMAIN\GroupName
    )
)
```

### Note

Momentum is no longer supported on Windows.

Usually, you will only need to specify ALLOW entries in the ACL, as the default policy is to deny access unless explicitly allowed. If you allow a group to administer your Momentum instance, but want to prevent certain members of that group from accessing it, you can specify DENY entries. Note that the order is important; your DENY entries (if any) should precede your ALLOW entries.

<a name="ecelerity.conf.listener.attributes"></a>
## Listener Attributes

A number of attributes may be specified that affect the listener behavior. Attributes are specified inside angle-brackets using `name=value` syntax:

```
Esmtp_Listener = (
  *:25
  *:587 <name="value" othername="othervalue">
)
```
<a name="idp3854240"></a>
### The "status" Attribute

It may be necessary to temporarily disable a listener; the `status` attribute provides a convenient way to express this, without completely removing the listener from the configuration file, and without having to out-comment the entire listener stanza.

The following stanza configures listeners on port 25 and port 587; Momentum will bind a listener to port 25 but will skip port 587 because it is marked as disabled.

```
Esmtp_Listener = (
  *:25
  *:587 <status="disabled">
)
```
<a name="idp3857904"></a>
### The "proto" Attribute

When using `INADDR_ANY` listeners, it can be useful to explicitly specify whether an IPv4 or an IPv6 address should be bound. The `proto` allows you to do just that; you may specify either `ipv4`, `ipv6` or `both` for the value.

The following stanza configures Momentum to listen to on port 25 on any address of IPv4, and on port 587 on any IPv6 address.

```
Esmtp_Listener = (
  *:25  <proto=ipv4>
  *:587 <proto=ipv6>
)
```
<a name="ecelerity.conf.listener.config.acls"></a>
## Extended Listener Configuration Using Access Control Lists (ACLs)

Rulesets and/or properties can be applied to an inbound connection if it matches a specific IP access control list (IP ACL). IP ACLs are specified in common CIDR format which is an IP address in dot notation followed by a decimal representation of the number of bits that should be matched (between 0 and 32 for IPv4 and between 0 and 128 for IPv6). For example, 1.2.3.4/32 would match one exact IPv4 address while 192.168.0.0/16 would match any IPv4 address with the same 16 most significant bits (all IPs starting with 192.168).

```
Esmtp_Listener = (
  *:25  [
    1.2.3.4/32 = (
      # The single host 1.2.3.4 would trigger this (empty) ruleset only
    )

    192.168.0.0/16 = (
      # any machine who's IP address starts with 192.168 will trigger
      # this (empty) ruleset

      # this continue statement will cause any addition ACL rules to
      # be considered, so the 192.168\. machines will also have the
      # 0.0.0.0/0 ruleset applied
      continue
    )

    0.0.0.0/0 = (
      # all other machines will trigger this (empty) ruleset
    )
  ]
)
```

The IP ACL syntax allows for a variety of different properties and extensions to be applied to a connection. A detailed list follows.

<a name="idp3867872"></a>
## The "continue" Property

Instructs Momentum to process this ACL and all of the listener options attached to it, as well as to continue processing the rest of the IP ACL "chain". This is useful for setting default directives once while still allowing for more detailed directives on more refined ACLs.

<a name="ecelerity.conf.esmtp.personality"></a>
## Configuring Limits, The "personality" Property

The personality block allows you to specify how the MTA will act with respect to identity and various limits.

<dl class="variablelist">

<dt>starttls_injection_policy</dt>

<dd>

**Configuration Change. ** This feature is available starting from Momentum 2.2.3.49.

This option deals with the security issue described by CVE-2011-0411 (Common Vulnerablities and Exposures). It has three legal values: `allow`, `reject`, `ignore`. The default value is `reject`.

When set to `reject`, if any commands are present in a buffer immediately after a STARTTLS command, then the STARTTLS is rejected and the connection is dropped. This event will be logged in the rejectlog. If the value is `ignore`, then any commands after a STARTTLS are ignored. Commands after the successful TLS negotiation will be interpreted. The value of `allow` will cause the ESMTP listener to process commands after a STARTTLS even before successful SSL negotiation.

</dd>

<dt>listener_sessions</dt>

<dd>

specifies the maximum number of concurrent sessions that can be established to this listener.

</dd>

<dt>service_sessions</dt>

<dd>

specifies the maximum number of concurrent sessions that can be established to all listeners for this service (e.g. ESMTP, ECStream).

</dd>

<dt>idle_time</dt>

<dd>

The number of seconds of inactivity before a client is disconnected.

</dd>

<dt>max_receptions_per_connection</dt>

<dd>

The maximum number of messages allowed in a single session, after which a 421 error will be returned.

</dd>

<dt>max_recipients_per_connection</dt>

<dd>

**Configuration Change. ** This feature was introduced in Momentum 2.1.1.

The maximum number of recipients allowed in a single session, after which a 421 error will be returned.

</dd>

<dt>max_recipients_per_message</dt>

<dd>

**Configuration Change. ** This feature was introduced in Momentum 2.1.1.

The maximum number of recipients allowed in a message, after which a 421 error will be returned.

</dd>

<dt>message_size</dt>

<dd>

The maximum number of bytes allowed in a single message before a "resources exhausted" message is returned to the client.

</dd>

<dt>banner_hostname</dt>

<dd>

Specifies the banner hostname that will be displayed to the remote client upon connecting. This is specific to the ESMTP service.

</dd>

<dt>static_banner</dt>

<dd>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Specifies the entire banner that will be displayed to the remote client upon connecting. You must include 220 as the beginning of your replacement string. Example Replacement: 220 my.mail.server ESMTP

</dd>

<dt>received_hostname</dt>

<dd>

This is the hostname that will be placed in the received headers that are added to the messages as it transits Momentum.

</dd>

<dt>Allow_Trailing_Whitespace_In_Commands</dt>

<dd>

**Configuration Change. ** This feature is available as of version 2.2.3.46.

When set to true, this option instructs Momentum to ignore white spaces found between an address and angle brackets in the RCPT TO or MAIL FROM commands, for example `< user@company.com >`. The default value for this option is `false`.

</dd>

</dl>

<a name="ecelerity.conf.xclient.extension"></a>
## XCLIENT Extension for SMTP

Implements the receiving side of an XCLIENT capable interaction. XCLIENT allows trusted senders to alter the connecting IP address and other connection-level identifiers to appear to be someone they are not. This is used for internally trusted re-mailing. More information on XCLIENT can be found at [http://www.postfix.org/XCLIENT_README.html](http://www.postfix.org/XCLIENT_README.html).

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      XCLIENT [ extension = "XCLIENT" ]
      continue
    )
  ]
)
```
<a name="ecelerity.conf.enhancedstatuscodes.extension"></a>
## ENHANCEDSTATUSCODES for SMTP

Advertise support for the Enhanced-Status-Codes extension as defined in RFC 2034\. `ENHANCEDSTATUSCODE` is the EHLO keyword value associated with this extension. This capability makes reporting of success and errors more precise.

```
Esmtp_Listener = (
  *:25,200 <proto=ipv4> [
    0.0.0.0/0 = (
      # Advertise RFC 2034 support for smart SMTP clients
      ENHANCEDSTATUSCODES [
        extension = ENHANCEDSTATUSCODES
      ]
    )
  ]
)
```
<a name="ecelerity.conf.xremoteip.extension"></a>
## XREMOTEIP Extension for SMTP

This extension enables a connecting client to change the perceived IP address from which it connected. This is useful when the Momentum instance is deployed behind a trusted SMTP gateway. If enabled, then the remote client may, at anytime, present **XREMOTEIP <IP address>**              and Momentum will alter all identifying information to appear as if the client originally connected from the provided IP address.

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      XREMOTEIP [ extension = "XREMOTEIP" ]
      continue
    )
  ]
)
```
<a name="ecelerity.conf.xdumpcontext.extension"></a>
## XDUMPCONTEXT Extension for SMTP

Enables the dumping of connection and message contexts during an SMTP conversation via an XDUMPCONTEXT command. This is mainly useful for debugging.

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      XDUMPCONTEXT [ extension = "XDUMPCONTEXT" ]
      continue
    )
  ]
)
```

```
% telnet 10.80.116.84 25
Trying 10.80.116.84...
Connected to ecbuild-14.int.omniti.net (10.80.116.84).
Escape character is '^]'.
220 ecbuild-14 ESMTP ecelerity HEAD r(9610M) Wed, 08 Mar 2006 16:21:51 -0500
ehlo there
250-ecbuild-14 says EHLO to 10.80.116.73
250-PIPELINING
250-XDUMPCONTEXT
250-8BITMIME
250-AUTH=LOGIN
250-AUTH LOGIN
250 STARTTLS
XDUMPCONTEXT
250-[connection] ehlo_domain there
250-[connection] ehlo_string ehlo there
250 XDUMPCONTEXT complete
```
<a name="idp3927856"></a>
## ALWAYS-ALLOW Property

If present, the connection will succeed and will automatically be authenticated as the `anonymous` user.

<a name="ecelerity.conf.esmtp.authentication"></a>
## ESMTP_Listener and Authentication

<a name="ecelerity.conf.cram-md5.authentication"></a>
### CRAM-MD5 Authentication

Implements the CRAM-MD5 authentication mechanism specified in RFC 2195\. A "uri" parameter is required specifying which uri to use for authentication. As the CRAM-MD5 protocol does not make use of any secure precalculated values, the passwords stored in the file (if it is a `file://` uri) must be stored in clear text.

To advertise this auth mechanism over SMTP, the "extension = AUTH" and "extension_argument = CRAM-MD5" must be specified.

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      CRAM-MD5 [
        extension = "AUTH"
        extension_argument = "CRAM-MD5"
        uri = "file:///opt/ecelerity/etc/cram_md5_passwd"
      ]
      continue
    )
  ]
)
```
<a name="ecelerity.conf.digest-md5.authentication"></a>
### DIGEST-MD5 Authentication

Implements the DIGEST-MD5 authentication mechanism specified in RFC 2831\. A "uri" parameter is required specifying which uri to use for authentication. DIGEST-MD5 supports secure precomputed values, so the passwords may be stored "hashed" or in clear text. By default, passwords returned from the provided uri should be hashed. If the parameter "stored_cleartext" is set to "true", the passwords will be expected in clear text and the hash will be computed internally before matching.

DIGEST-MD5 authenticates users within a given realm. This realm can be specified by adding a "realm" parameter valued as needed. If left unspecified, the server hostname will be used.

To advertise this auth mechanism over SMTP, the "extension = AUTH" and "extension_argument = DIGEST-MD5" must be specified.

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      DIGEST-MD5 [
        extension = "AUTH"
        extension_argument = "DIGEST-MD5"
        uri = "digest:///opt/ecelerity/etc/smtp_passwd"
        realm = "my choice of realm"
      ]
      continue
    )
  ]
)
```
<a name="ecelerity.conf.cleartext.authentication"></a>
### Cleartext LOGIN Authentication

Implements the LOGIN authentication mechanism specified in RFC 2222\. A "uri" parameter is required specifying which uri to use for authentication. As the LOGIN protocol does not make use of any secure precalculated values, the passwords stored in the file (if it is a file:// uri) must be stored in clear text.

To advertise this auth mechanism over SMTP, the "extension = AUTH" and "extension_argument = LOGIN" must be specified.

### Warning

Note that the LOGIN mechanism both stores passwords in clear text locally and transmits the username and password credentials in clear text over the network. This authentication mechanism (as defined by standards) is in no way "secure." It should be avoided unless absolutely necessary; if you must use it, use it in conjunction with TLS.

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      LOGIN [
        extension = "AUTH"
        extension_argument = "LOGIN"
        uri = "file:///opt/ecelerity/etc/unsafe_passwd"
      ]
      continue
    )
  ]
)
```
<a name="ecelerity.conf.TLS"></a>
## STARTTLS Extension for SMTP

The following stanza enables Transport Layer Security (TLS) support for SMTP:

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      TLS [
        extension = "STARTTLS"
        certificate = "/path/to/cert.pem"
        key = "/path/to/key.pem"
        clientca = "/path/to/clientca.bundle"
        ciphers = "DEFAULT"
      ]
      continue
    )
  ]
)
```

The attributes have the following meanings:

<dl class="variablelist">

<dt>certificate</dt>

<dd>

Specifies the path to the certificate file.

</dd>

<dt>key</dt>

<dd>

Specifies the path to the key that matches the certificate file.

</dd>

<dt>clientca</dt>

<dd>

Specifies the path to the cabundle that specifies the list of allowed certificate issuers to use when verifying a client that presents a certificate.

</dd>

<dt>ciphers</dt>

<dd>

Specifies which ciphers to use. The list is a standard OpenSSL cipher list, as described in `ciphers` in the OpenSSL documentation.

</dd>

</dl>

<a name="ecelerity.conf.validation.context.variables"></a>
## Defining Connection-based Validation Context Variables, The "context" Property

Provides a mechanism to set arbitrary connection context key value pairs. The connection context is visible to all validation modules and the Sieve infrastructure. It allows the efficient assignment of metadata to connections based on the listener and arbitrary ACLs.

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      context [
        name = "value"
        othername = "othervalue"
      ]
      continue
    )
  ]
)
```

For an example of using context key value pairs see [Example 5.3, “Connection context variables in ESMTP_Listener”](policy.context-based-on-ip.php#policy.context-based-on-ip.ex "Example 5.3. Connection context variables in ESMTP_Listener").

### Bypassing Validation Modules

It is possible to bypass validation modules by adding a context variable to your listener. Do this by creating a context variable with the name __bypass_*`module_name`* and setting its value to `true`. For example, to bypass the spf_v1 module create a variable called `__bypass_spf_v1` and set its value to `true`.

<a name="ecelerity.conf.relay_for_sending_domains"></a>
## relay_for_sending_domains

Provides a mechanism for finer control over SMTP relaying. If specified with no parameters, it allows unrestricted use of the instance as an SMTP relay (a.k.a. open relay) from the IP ACL that was matched.

If parameters of the form "domainname = true" are specified, then relaying will be allowed from that IP ACL if the sender domain matches one of the specified domain names.

### Note

The Relay_Hosts options will override any restrictions enacted by this option for the IP addresses specified in Relay_Hosts.

<a name="ecelerity.conf.loading.modules"></a>
## Runtime Extensibility; Loading Modules

Momentum has a number of different classes of extension modules that can be configured to either add new features or alter the existing behavior of the server. See [Chapter 14, *Modules Reference*          ](modules.php "Chapter 14. Modules Reference") for a complete list of modules that ship with Momentum.

There are several types of module, each described in more detail in the following sections of the manual: [module](conf.ref.module.php "module"), [logger](conf.ref.logger.php "logger"), [io_system](conf.ref.io_system.php "io_system"), [validate](conf.ref.validate.php "validate") [interpreter](conf.ref.interpreter.php "interpreter").

<a name="idp3975264"></a>
## SNMP Support

Momentum features a built-in SNMP agent that exposes real-time metrics for consumption by SNMP capable consumers or by third-party SNMP Managers. Momentum's SNMP agent supports and provides information for Mail Monitoring MIB (MTA-MIB) objects as specified in RFC 2789\. Additionally, the agent provides Momentum product information objects, several system level MIB objects and extends the MTA-MIB. Momentum product objects, and MTA-MIB extensions are defined in OmniTI's enterprise MIB.

SNMP configuration is described in detail in [SNMP](conf.ref.snmp.php "SNMP").

<a name="idp3978416"></a>
## RFC Compliance/Conformance Options

E-mail is built on top of a large number of different standards documents. By default, Momentum is configured to conform to and support all of those standards. However, in some deployments, it is sometimes desirable to detour from those standards in the interests of performance and manageability.

The following settings allow you to detour from the various standards-defined behavior. In some cases this is partially allowed by the standards, but in others, it is frowned upon. Make sure you understand the impact of such a change before deploying it.

[allow_null_envelope_sender](conf.ref.allow_null_envelope_sender.php "allow_null_envelope_sender"), [date_header](conf.ref.date_header.php "date_header"), [generate_bounces](conf.ref.generate_bounces.php "generate_bounces"), [generate_bounces_for_multi_recipient_policy_rejections](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php "generate_bounces_for_multi_recipient_policy_rejections"), [lone_lf_in_body](conf.ref.lone_lf_in_body.php "lone_lf_in_body"), [lone_lf_in_headers](conf.ref.lone_lf_in_headers.php "lone_lf_in_headers"), [require_ehlo](conf.ref.require_ehlo.php "require_ehlo"), [messageid_header](conf.ref.messageid_header.php "messageid_header") [trace_headers](conf.ref.trace_headers.php "trace_headers")

<a name="idp3987888"></a>
## Timeout Configuration Options

The following options configure various different timeouts or intervals:

[body_timeout](conf.ref.body_timeout.php "body_timeout"), [connect_timeout](conf.ref.connect_timeout.php "connect_timeout"), [connect_timeout_to_delay](conf.ref.connect_timeout_to_delay.php "connect_timeout_to_delay"), [dns_expire_interval](conf.ref.dns_expire_interval.php "dns_expire_interval"), [ehlo_timeout](conf.ref.ehlo_timeout.php "ehlo_timeout"), [host_failure_retry](conf.ref.host_failure_retry.php "host_failure_retry"), [idle_timeout](conf.ref.idle_timeout.php "idle_timeout"), [mailfrom_timeout](conf.ref.mailfrom_timeout.php "mailfrom_timeout"), [max_retries](conf.ref.max_retries.php "max_retries"), [message_expiration](conf.ref.message_expiration.php "message_expiration"), [min_dns_ttl](conf.ref.min_dns_ttl.php "min_dns_ttl"), [mx_failures_to_delay](conf.ref.mx_failures_to_delay.php "mx_failures_to_delay"), [rcptto_timeout](conf.ref.rcptto_timeout.php "rcptto_timeout"), [retry_interval](conf.ref.retry_interval.php "retry_interval"), [rset_timeout](conf.ref.rset_timeout.php "rset_timeout")

<a name="idp3998448"></a>
## Traffic Shaping Options

The following options affect the network traffic characteristics of Momentum, affecting the rate at which inbound and outbound connections are accepted or initiated and the volume of traffic on those connections.

[connection_allocation_aggressiveness](conf.ref.connection_allocation_aggressiveness.php "connection_allocation_aggressiveness"), [inbound_throttle_messages](conf.ref.inbound_throttle_messages.php "inbound_throttle_messages"), [max_deliveries_per_connection](conf.ref.max_deliveries_per_connection.php "max_deliveries_per_connection"), [max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections"), [outbound_throttle_connections](conf.ref.outbound_throttle_connections.php "outbound_throttle_connections"), [outbound_throttle_messages](conf.ref.outbound_throttle_messages.php "outbound_throttle_messages"), [server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections"), [server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections.php "server_reserve_outbound_connections").

<a name="idp4005312"></a>
## Resource Budgeting Options

The following options tune the resource consumption of Momentum, affecting memory consumption, disk I/O and concurrency.

[async_close_concurrency](conf.ref.async_close_concurrency.php "async_close_concurrency"), [async_swap_in](conf.ref.async_swap_in.php "async_swap_in"), [async_swap_out](conf.ref.async_swap_out.php "async_swap_out"), [async_unlink_concurrency](conf.ref.async_unlink_concurrency.php "async_unlink_concurrency"), [disk_queue_drain_rate](conf.ref.disk_queue_drain_rate.php "disk_queue_drain_rate"), [drop_body_after_trans_fail](conf.ref.drop_body_after_trans_fail.php "drop_body_after_trans_fail"), [force_fsync](conf.ref.force_fsync.php "force_fsync"), [max_resident_active_queue](conf.ref.max_resident_active_queue.php "max_resident_active_queue"), [tcp_buffer_size](conf.ref.tcp_buffer_size.php "tcp_buffer_size"), [_unsafe_spool](conf.ref.unsafe_spool.php "_unsafe_spool"), [Use_MMAP](conf.ref.use_mmap.php "Use_MMAP"), [worker_cpu_concurrency](conf.ref.worker_cpu_concurrency.php "worker_cpu_concurrency"), [worker_io_concurrency](conf.ref.worker_io_concurrency.php "worker_io_concurrency")

<a name="idp4016448"></a>
## Security Options

[capabilities](conf.ref.capabilities.php "capabilities"), [chroot](conf.ref.chroot.php "chroot"), [user](conf.ref.user.php "user")

<a name="idp4019632"></a>
## Routing Options

[domain](conf.ref.domain.php "domain"), [host](conf.ref.host.php "host"), [blackhole](conf.ref.blackhole.php "blackhole"), [delivery_method](conf.ref.delivery_method.php "delivery_method"), [fully_resolve_before_smtp](conf.ref.fully_resolve_before_smtp.php "fully_resolve_before_smtp"), [gateway](conf.ref.gateway.php "gateway"), [lmtp_port](conf.ref.lmtp_port.php "lmtp_port"), [prohibited_hosts](conf.ref.prohibited_hosts.php "prohibited_hosts"), [relay_domains](conf.ref.relay_domains.php "relay_domains"), [relay_hosts](conf.ref.relay_hosts.php "relay_hosts"), [remote_smtp_port](conf.ref.remote_smtp_port.php "remote_smtp_port"), [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery"), [xclient](conf.ref.xclient.php "xclient")

<a name="idp4028528"></a>
## Outbound TLS Options

[tls](conf.ref.tls.php "tls"), [tls_ca](conf.ref.tls_ca.php "tls_ca"), [tls_certificate](conf.ref.tls_certificate.php "tls_certificate"), [tls_ciphers](conf.ref.tls_ciphers.php "tls_ciphers"), [tls_key](conf.ref.tls_key.php "tls_key"), [tls_verify](conf.ref.tls_verify.php "tls_verify")

<a name="idp4033408"></a>
## Bounce Processing Options

[bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior"), [bounce_domains](conf.ref.bounce_domains.php "bounce_domains"), [bounce_pattern](conf.ref.bounce_pattern.php "bounce_pattern"), [bounce_suppress_list](conf.ref.bounce_suppress_list.php "bounce_suppress_list"), [bounces_inline_original](conf.ref.bounces_inline_original.php "bounces_inline_original"), [generate_bounces](conf.ref.generate_bounces.php "generate_bounces"), [generate_bounces_for_multi_recipient_policy_rejections](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php "generate_bounces_for_multi_recipient_policy_rejections"), [mailerdaemon](conf.ref.mailerdaemon.php "mailerdaemon"), [mdn_failures_notify](conf.ref.mdn_failures_notify.php "mdn_failures_notify")

<a name="idp4040128"></a>
## Virtual Hosting

[binding](conf.ref.binding.php "binding"), [bind_address](conf.ref.bind_address.php "bind_address"), [binding_group](conf.ref.binding_group.php "binding_group"), [hostname](conf.ref.hostname.php "hostname"), [match_domain](conf.ref.match_domain.php "match_domain")

<a name="idp4044736"></a>
## Miscellaneous

A complete list of options can be found at [Chapter 9, *Ecelerity.conf Configuration Reference*](conf.ref.php "Chapter 9. Ecelerity.conf Configuration Reference") , which may include settings that are otherwise uncategorized on this page.

| [Prev](conf.ref.files.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.address_metrics_cleanse_interval.php) |
| 9.2. Configuration Files and Option Details  | [Table of Contents](index.php) |  address_metrics_cleanse_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)