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
| [Prev](conf.ref.relay_domains.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.remote_smtp_port.php) |

<a name="conf.ref.relay_hosts"></a>
## Name

relay_hosts — configure the list of hosts for which Momentum relays mail

## Synopsis

`relay_hosts = ( "10.0.0.1" )`

<a name="idp25962208"></a>
## Description

Momentum is a powerful mail delivery system. As an operator, you can expose your system to abuse by allowing unauthorized machines to send e-mail to domains for which the local instance does not provide mail service. Doing so makes your system an "open relay."

When configured to be an outbound e-mail relay, only trusted machines should be allowed to connect and inject messages. This is controlled by the `relay_hosts` option. This option takes a space-separated list of network blocks in Classless Inter-Domain Routing (CIDR) form. CIDR form consists of an IPv4 address followed by a number between 0 and 32 dictating the number of bits in the network portion of the address, as opposed to the host portion.

For example, all addresses in the `loopback` space begin with 127\. The netmask on a loopback device is 255.0.0.0, which sets 8 network bits with the remaining 24 bits used for host addresses within the network. Therefore, the CIDR form of the loopback network is 127.0.0.0/8\. For a class C network (256 IP addresses, 254 hosts), the netmask is 255.255.255.0, which means 24 network bits. The CIDR form of the IP block representing addresses 192.168.10.0 through 192.168.10.255 is 192.168.10.0/24. Single hosts have netmask with all (32) bits set making a host address 10.1.2.3 have a CIDR form 10.1.2.3/32.

### Note

Hosts specified by this option are not subject to any SMTP authentication that you may have implemented. For more information, see [Section 19.5, “ESMTP_Listener Authentication”](inbound_smtp.php "19.5. ESMTP_Listener Authentication").

The `relay_hosts` option has no effect on restricting access to an HTTP_Listener.

If your private network (10.10.10.0/24) contains machines that you trust and you wish to also enable relaying from the local host, the following `relay_hosts` directive would be reasonable:

`relay_hosts = ( "127.0.0.0/8" "10.10.10.0/24" )`

Use the same syntax for IPv6 addresses:

`relay_hosts = ("127.0.0.1/32" "::1" "10.79.0.0/16" "fd82:7796:815b:af9d::")`<a name="idp25972528"></a>
## Scope

The `relay_hosts` option in the global scope follows the same semantics as the rest of the configuration options; if you specify it in both the global scope and in a listener, the listener setting overrides the global setting.

`relay_hosts` is valid in the global, esmtp_listener, listen, pathway_group, and pathway scopes. While it is valid in the Peer scope, generally speaking, you would not use it in this scope. Use `open_relay` instead.

<a name="idp25976512"></a>
## See Also

[open_relay](conf.ref.open_relay.php "open_relay")

| [Prev](conf.ref.relay_domains.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.remote_smtp_port.php) |
| relay_domains  | [Table of Contents](index.php) |  remote_smtp_port |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)