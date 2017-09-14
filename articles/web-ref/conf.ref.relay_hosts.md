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

| relay_hosts |
| [Prev](conf.ref.relay_domains.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.remote_smtp_port.php) |

<a name="conf.ref.relay_hosts"></a>
## Name

relay_hosts — configure the list of hosts for which Momentum relays mail

## Synopsis

`Relay_Hosts = ( "10.0.0.1" )`

<a name="idp11119200"></a>
## Description

Momentum is a powerful mail delivery system. As an operator, you can expose your system to abuse by allowing unauthorized machines to send e-mail to domains for which the local instance does not provide mail service. Doing so makes your system an "open relay."

When configured to be an outbound e-mail relay, only trusted machines should be allowed to connect and inject messages. This is controlled by the `Relay_Hosts` option. This option takes a space-separated list of network blocks in CIDR form. CIDR form consists of an IPv4 address followed by a number between 0 and 32 dictating the number of bits in the network portion of the address, as opposed to the host portion.

For example, all addresses in the `loopback` space begin with 127\. The netmask on a loopback device is 255.0.0.0 which sets 8 network bits with the remaining 24 bits used for host addresses within the network. Therefore, the CIDR form of the loopback network is 127.0.0.0/8\. For a class C network (256 IP addresses, 254 hosts), the netmask is 255.255.255.0, which means 24 network bits. The CIDR form of the IP block representing addresses 192.168.10.0 through 192.168.10.255 is 192.168.10.0/24. Single hosts have netmask with all (32) bits set making a host address 10.1.2.3 have a CIDR form 10.1.2.3/32.

### Note

Any hosts specified by this option are not subject to any SMTP authentication that you may have implemented. For more information see [Section 2.2, “Authentication, Authorization and Accounting”](conf.aaa.php "2.2. Authentication, Authorization and Accounting").

The `relay_hosts` option has no effect on restricting access to an HTTP_Listener.

If your private network (10.10.10.0/24) contains machines that you trust and you wish to also enable relaying from the local host, the following `Relay_Hosts` directive would be reasonable:

`Relay_Hosts = ( "127.0.0.0/8" "10.10.10.0/24" )`

Use the same syntax for IPv6 addresses:

`Relay_Hosts = ("127.0.0.1/32" "::1" "10.79.0.0/16" "fd82:7796:815b:af9d::")`

In version 3.0, `Relay_Hosts` is valid in the Peer scope but using Open_Relay is more succinct.

<a name="example.relay_hosts.peer"></a>

**Example 9.13. Relay_Hosts**

```
ESMTP_Listener {
  Peer "10.0.0.0/24" {
    # general options for this netblock here
    # use Open_Relay here instead of Relay_Hosts
    Open_Relay = true
  }
  Listen ":25" {
    Peer "10.0.0.1" {
        # options for 10.0.0.1 here
        SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH LOGIN" )
    }
  }
}
```

<a name="idp11133136"></a>
## Scope

Note that as of version 3.0, the Relay_Hosts option in the global scope follows the same semantics as the rest of the configuration options; if you specify it in both the global scope and in a listener, the listener setting overrides the global setting. In 2.2 and earlier, the two were merged together.

`relay_hosts` is valid in the global, ESMTP_Listener, listen, pathway_group and pathway scopes. While it is valid in the Peer scope, generally speaking, you wouldn't use it in this scope. Use Open_Relay instead.

<a name="idp11136640"></a>
## See Also

[Open_Relay](ecelerity.conf.php#ecelerity.conf3.listener.options.open_relay)

| [Prev](conf.ref.relay_domains.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.remote_smtp_port.php) |
| relay_domains  | [Table of Contents](index.php) |  remote_smtp_port |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)