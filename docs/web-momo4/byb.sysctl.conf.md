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

| 6.7. Adjusting `/etc/sysctl.conf` |
| [Prev](byb.ntp.php)  | Chapter 6. Before You Begin |  [Next](byb.set_hostnames.php) |

## 6.7. Adjusting `/etc/sysctl.conf`

Momentum 4 uses a large number of connections and is able to establish them quickly. This can overwhelm the operating system if special parameters are not used. These issues can be addressed by configuring the following lines in `/etc/sysctl.conf`:

```
net.ipv4.tcp_tw_reuse = 1
net.ipv4.tcp_tw_recycle = 1
net.core.somaxconn = 1024
net.core.rmem_max = 262144
vm.max_map_count = 768000
net.core.wmem_max = 262144
```

These options are described below:

*   `net.ipv4.tcp_tw_reuse` – Reuse sockets in the TIME_WAIT state for new connections when it is safe from a protocol viewpoint. Setting this to `1` enables reuse of open connections, increasing efficiency.

*   `net.ipv4.tcp_tw_recycle` – This kernel parameter enables fast recycling of TIME_WAIT sockets. A setting of `1` enables the reuse of sockets without the normal wait time.

*   `net.core.somaxconn = 1024` – This kernel parameter controls the number of incoming connections. Increasing it to `1024` allows Momentum to process more open connections.

*   `net.core.rmem_max` – This kernel parameter raises the maximum operating system receive buffer size for all types of connections.

*   `vm.max_map_count` – This kernel parameter controls mapped areas and needs to be increased.

*   `net.core.wmem_max` – This kernel parameter raises the maximum operating system send buffer size for all types of connections.

| [Prev](byb.ntp.php)  | [Up](before_you_begin.php) |  [Next](byb.set_hostnames.php) |
| 6.6. Enable Network Time Protocol (NTP)  | [Table of Contents](index.php) |  6.8. Setting Hostnames |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)