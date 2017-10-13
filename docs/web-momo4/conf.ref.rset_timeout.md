<a name="conf.ref.rset_timeout"></a>
## Name

rset_timeout — set the timeout after RSET

## Synopsis

`rset_timeout = 30`

<a name="idp26390176"></a>
## Description

The amount of time in seconds to wait for a response to a `RSET` command. `RSET` commands are used to reset the state of an SMTP session in which a transaction has only partially succeeded. It allows subsequent messages to be delivered down a single SMTP session immediately following a transient or permanent failure response from the remote server before the complete and successful delivery of the prior message. The default value is `30`.

<a name="idp26393744"></a>
## Scope

rset_timeout is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.routes.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.scope_max_outbound_connections.php) |
| routes  | [Table of Contents](index.php) |  scope_max_outbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)