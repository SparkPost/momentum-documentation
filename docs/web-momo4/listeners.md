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

| 15.4. Listeners |
| [Prev](ecelerity.conf.fallback.php)  | Chapter 15. Configuration Overview |  [Next](module_config.php) |

## 15.4. Listeners

Momentum is built around a powerful event-based scheduling engine. A key part of that engine is responding to events that occur on inbound sockets, known as *listeners*. These *listeners* are configured in Momentum's configuration files. The following is an example of a basic listener syntax:

```
ESMTP_Listener {
  Listen "*:25" {}
}
```

In this example, the listener is the `ESMTP_Listener`, and the `*:25` is an example of an address. Multiple addresses can be specified for a given listener, allowing you to configure service on multiple IP/port or Unix sockets.

### Warning

When using any listener, if you change from listening on a specific IP address to listening on the "wildcard" address (*) or the reverse, you must issue the **config reload**        command twice in order to reactivate the listener. This applies to Linux systems only.

Momentum supports the following listeners. Follow the links for details about each listener type:

*   [Control_Listener](control_listener.php "Chapter 17. Configuring Momentum's System Console") - listens for incoming control connections made via the console

*   [ECCluster_Listener](cluster.listeners.php#eccluster_listener "16.5.1. ECCluster_Listener Configuration") - configures direct, point-to-point communication between cluster nodes

*   [ECStream_Listener](ecstream_listener.php "Chapter 18. Configuring Inbound Mail Service Using ECStream") - enables messages to be injected using the ECStream protocol

*   [ESMTP_Listener](esmtp_listener.php "Chapter 19. Configuring Inbound Mail Service Using SMTP") - enables messages to be injected using the SMTP protocol

*   [HTTP_Listener](http_listener.php "Chapter 20. Configuring Inbound Mail Service Using HTTP") - enables messages to be injected using the HTTP protocol

*   [msgcserver_listener](cluster.listeners.php#msgcserver_listener "16.5.2. Msgcserver_Listener Configuration") - mediates between msgc_servers and between msgc_servers and their clients

In addition to the associated Listener scope, listeners can enclose Peer and Listen scopes. For a complete list of the configuration options valid in the associated scopes, see [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

### 15.4.1. Extended Listener Configuration Using Access Control Lists (ACLs)

<a class="indexterm" name="idp3044608"></a><a class="indexterm" name="idp3046400"></a>

ACLs are implemented via the Peer scope, which uses the existing matching infrastructure to find the most specific CIDR match for a given configured value. Fallback works here too, allowing for some expressive configurations that are easily understood. For more information about fallback, see [Section 15.3, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "15.3. Configuration Scopes and Fallback").

<a name="example.conf.peer"></a>

**Example 15.4. Peer Scope and ACLs**

```
ESMTP_Listener {
  Peer "10.0.0.0/16" {
    # general options for this netblock here
  }
  Listen ":25" {
    Peer "10.0.0.1" {
      # options for 10.0.0.1 here
      SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH LOGIN" )
    }
  }
}
```

Options defined in the Peer CIDR block `10.0.0.0/16` will apply to all IP addresses defined by this block unless the connecting IP address is `10.0.0.1`. In that case, anything defined in the peer scope `10.0.0.1` takes precedence.

Note that SMTP extensions are defined using the `SMTP_Extensions` array. SMTP extensions are discussed in [Section 19.4, “SMTP Extensions”](esmtp_listener.extensions.php "19.4. SMTP Extensions").

### 15.4.2. Listener `Enable` Option

The `enable` option provides a convenient way to temporarily disable a listener, without completely removing the listener from the configuration file or having to comment out the entire listener stanza.

For example, the following stanza configures listeners on port 25 and port 587\. Momentum will bind a listener to port 25 but will skip port 587 because it is marked as disabled.

```
ESMTP_Listener {
  Listen "*:25" {
  }
  Listen "*:587" {
    Enable = false
  }
}
```

Note that the `enable` option is used to enable or disable a listener or listen scope and **not** the `enabled` option. The `enabled` option applies only to modules, and the `enable` applies only to listen or listener stanzas.

It is possible to suspend and enable listener sockets individually on the fly. If you wish to disable the listener on port 25, as shown in the example, issue the command **`config set esmtp_listener listen :25 enable false`**                                             from the console. You can use **config set, get**          or **eval** with any one of the listener subsystem options.

### 15.4.3. TCP/IP Listen Address Syntax

The following is an example of a TCP/IP listen address configuration:

```
ESMTP_Listener {
  Listen "*:25" {}
  Listen "127.0.0.1:25" {}
  Listen "[*]:25" {}
}
```

This example shows a Listener configured as follows:

<dl class="variablelist">

<dt>*:25</dt>

<dd>

Listens on `INADDR_ANY` on port 25.

When using any listener, if you change from listening on a specific IP address to listening on the "wildcard" address (*) or the reverse, you must issue the **config reload**        command twice in order to reactivate the listener. This applies to Linux systems only.

</dd>

<dt>127.0.0.1:25</dt>

<dd>

Listens on port 25 of the IP address `127.0.0.1`.

</dd>

<dt>[*]:25</dt>

<dd>

Listens on port 25 of the IPv6 address.

</dd>

</dl>

For a detailed discussion of IPv6 syntax see [Section 15.4.5, “Listeners and IPv6 Addresses”](listeners.php#listeners.ipv6 "15.4.5. Listeners and IPv6 Addresses").

### 15.4.4. Unix Domain Listener Address Syntax

The following is an example of a Unix listen address configuration:

```
Control_Listener {
  Listen "/tmp/2025" {
    File_Mode = 0666
    Listen_Backlog = 500
  }
}
```

This example shows a Listener configured on a Unix domain socket located at `/tmp/2025` with a maximum backlog of `500`.

### 15.4.5. Listeners and IPv6 Addresses

IPv6 addresses are case insensitive and can use ‘`::`’ for zero suppression. For this reason, the same address can be expressed in a variety of ways. The following examples all represent the same IPv6 address (example adapted from [http://tools.ietf.org/html/rfc5952](http://tools.ietf.org/html/rfc5952)):

```
2001:db8:0:0:1:0:0:1

  2001:DB8:0:0:1:0:0:1

  2001:0DB8:0:0:1:0:0:1

  2001:db8::1:0:0:1

  2001:db8::0:1:0:0:1

  2001:0db8::1:0:0:1

  2001:db8:0:0:1::1

  2001:db8:0000:0:1::1

  2001:DB8:0:0:1::1
```

The ‘`::`’ can only appear once in an address.

When a Listen stanza uses an IPv6 address, you are required to enclose the IPv6 address in square brackets, followed by a colon and the port, with quotes around the entire address:port. For example:

```
Listen "[::]:25" {...}
Listen "[0:0:0:0:0:0:0:0]:25" {...}  # equivalent to the previous entry
Listen "[fd82:7796:815b:af9d:230:48ff:fef2:aa4a]:587" {...}
```

### Note

IPv6 addresses are much more flexible than IPv4 addresses in terms of their formatting options. They also use a different delimiter character than IPv4 addresses (a colon instead of a period). This means that in certain contexts, an IPv6 address can create parsing ambiguities.

In circumstances where a configuration parameter can also contain something other than an IP address, the accepted convention is to require that an IPv6 address be enclosed in square brackets. In practical terms, this means that things like the `Gateway`, `Routes` and `Listen` options must have IPv6 addresses enclosed in brackets. Others, such as `Peer`, `Relay_Hosts` and `Prohibited_Hosts` do not require the IPv6 address in brackets.

| [Prev](ecelerity.conf.fallback.php)  | [Up](conf.overview.php) |  [Next](module_config.php) |
| 15.3. Configuration Scopes and Fallback  | [Table of Contents](index.php) |  15.5. Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)