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

| rset_timeout |
| [Prev](conf.ref.routes.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.scope_max_outbound_connections.php) |

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