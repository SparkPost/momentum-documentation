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

| cluster_max_outbound_connections |
| [Prev](conf.ref.clear_mail_queue_maintainers.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.cluster_outbound_throttle_connections.php) |

<a name="conf.ref.cluster_max_outbound_connections"></a>
## Name

cluster_max_outbound_connections — set the maximum number of outbound connections for a scope and enforce it across a cluster

## Synopsis

`Cluster_Max_Outbound_Connections = 128`

<a name="idp4558592"></a>
## Description

This will limit the number of outbound connections across the cluster to an individual binding to the specified value. It can also be set at a global level, which enforces the limit on every domain in the cluster. The global value can be overridden by setting it in a `Binding` stanza. Furthermore, this option can be used in a `Host` stanza to limit the connections to a particular MX as shown in [the section called “Scope”](conf.ref.cluster_max_outbound_connections.php#conf.ref.cluster_max_outbound_connections.scope "Scope"). *Note*: When used in the Host scope, `Cluster_Max_Outbound_Connections` limits the number of connections **to** the particular MX.

The default value for this option is `-1` meaning that an unlimited number of connections are allowed.

### Note

When this option is used in scopes other than the Host scope, The cluster module must have the outbound_domains parameter configured as defined here: [Section 7.5.1, “Replication Configuration”](cluster.replication.php#cluster.replication.features "7.5.1. Replication Configuration").

**Configuration Change. ** This feature is available starting from Momentum 2.2.

<a name="conf.ref.cluster_max_outbound_connections.scope"></a>
## Scope

cluster_max_outbound_connections is valid in the binding, domain and global scopes. *Note*: This option is not valid when defined in a binding contained within a binding_group.

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.26.

cluster_max_outbound_connections is also valid in the host scope.

Used within a Host scope, this enforces a limit on the number of connections to a particular MX. The Host should be listed exactly as it exists in the DNS MX record. (Do not specify an equivalent IP address or hostname). For example, the console can be used to obtain the MX records for a given domain, and then a Host stanza can be written to limit connections to a particular MX.

```
16:33:51 ecelerity(/tmp/2025)> dig messagesystems.com
submitted
16:34:01 ecelerity(/tmp/2025)> domain messagesystems.com
Domain 'messagesystems.com' has 1 MXs and a TTL of 86394 seconds
  [10 edge.omniti.com. TTL:594]
```

This domain has only one MX record (edge.omniti.com). A Host stanza to limit connections to it would look like this:

```
Host edge.omniti.com {
  Cluster_Max_Outbound_Connections = 2
}
```

1.  binding::host

2.  host

3.  binding::domain

4.  binding

5.  domain

6.  global

<a name="idp4583056"></a>
## See Also

[max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections") [host](conf.ref.host.php "host") [Section 2.4, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "2.4. Configuration Scopes and Fallback")

| [Prev](conf.ref.clear_mail_queue_maintainers.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.cluster_outbound_throttle_connections.php) |
| clear_mail_queue_maintainers  | [Table of Contents](index.php) |  cluster_outbound_throttle_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)