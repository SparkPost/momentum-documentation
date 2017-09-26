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

| cluster_outbound_throttle_messages |
| [Prev](conf.ref.cluster_outbound_throttle_connections.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.cluster_scope_max_outbound_connections.php) |

<a name="conf.ref.cluster_outbound_throttle_messages"></a>
## Name

cluster_outbound_throttle_messages — limit the rate at which messages are delivered, and enforce it across the cluster

## Synopsis

`Cluster_Outbound_Throttle_Messages = "1"`

`Cluster_Outbound_Throttle_Messages = "1/60"`

<a name="idp23960688"></a>
## Description

This allows you to limit the rate at which Momentum will attempt to deliver mail. It can be employed to globally limit throughput or to reduce the rate sent to a particular domain.

If a single integer parameter is provided, Momentum will ensure that no more than the specified number of messages are sent in a given second of time. If a proper fraction parameter is provided, Momentum will limit the number of sent message to the number specified in the numerator over the time window in seconds specified by the denominator.

### Note

For best results, a throttle in the same scope and with the same values should also be defined using [cluster_outbound_throttle_connections](conf.ref.cluster_outbound_throttle_connections.php "cluster_outbound_throttle_connections")

The cluster module must be configured with the outbound throttle parameters.

<a name="idp23966000"></a>
## Scope

`cluster_outbound_throttle_messages` is valid in the binding_group, domain, and global scopes.

| [Prev](conf.ref.cluster_outbound_throttle_connections.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.cluster_scope_max_outbound_connections.php) |
| cluster_outbound_throttle_connections  | [Table of Contents](index.php) |  cluster_scope_max_outbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)