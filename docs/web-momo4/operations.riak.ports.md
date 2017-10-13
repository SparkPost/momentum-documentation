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

| 30.3. Riak Ports |
| [Prev](riak.service.php)  | Chapter 30. Riak |  [Next](operations.riak.backups.php) |

## 30.3. Riak Ports

Riak uses the following ports:

*   `TCP 8098` – Defines the HTTP interface used to query and update the data store. By default, this is bound to the loopback interface but will need to be opened on a cluster private network so that Message Systems applications can communicate with it. The port and IP addresses used for HTTP are controlled by the `http` setting in `app.config`.

*   `TCP 8099` – Defines the cluster handoff protocol interface used by Riak to synchronize its data. This port needs to be opened on a cluster private network so that Riak nodes can talk to each other. The port and IP address used for handoff are controlled by the `handoff_port` and `handoff_ip` settings in `app.config`.

*   `TCP 8087` – Defines an alternative "Protocol Buffers" interface for querying Riak. This is not used by Message Systems and is disabled in our default packaging.

*   `TCP 4369` – In a cluster configuration Riak uses the Erlang Port Mapper daemon (epmd) to resolve node identifiers. By default epmd binds to port 4369\. For more information, see [the section called “Erlang and Firewalls”](operations.riak.ports.php#operations.riak.ports.erlang "Erlang and Firewalls").

None of these ports should be exposed to the public Internet; we strongly recommend that access to these ports from untrusted networks be blocked by a firewall.

### Erlang and Firewalls

The maximum number of concurrent ports used by Erlang is defined in the `/opt/msys/3rdParty/riak/etc/vm.args` file by the variable `ERL_MAX_PORTS`. If port usage needs to be restricted, we recommend defining a range of ports equal to the number of nodes in the cluster. For details on network security and firewall configurations, consult the [Riak](http://http://docs.basho.com/riak/latest/) documentation.

| [Prev](riak.service.php)  | [Up](riak.php) |  [Next](operations.riak.backups.php) |
| 30.2. Running the Riak Service  | [Table of Contents](index.php) |  30.4. Backups |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)