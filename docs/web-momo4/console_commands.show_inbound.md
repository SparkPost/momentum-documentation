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

| show inbound |
| [Prev](console_commands.reroute_queue.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.show_outbound.php) |

<a name="console_commands.show_inbound"></a>
## Name

show inbound — show all inbound connections

## Synopsis

`show inbound`

<a name="idp12034368"></a>
## Description

This command shows all inbound connections. In the following example, the output has been wrapped for display purpose. "23" is the file descriptor of the related event. "async body response (for 0.264s)" shows the last state of the messages coming in via this connection and the time spent in that state. "[floating]" means the messages coming in via this connection are not handled by the main scheduler right now. -->

```
10:47:35 /tmp/2025> show inbound
23: [inbound/esmtp_message_factory] IPv4 127.0.0.1:47741 async body response
(for 0.264s)  [floating]
```
<a name="idp12037856"></a>
## See Also

[show outbound](console_commands.show_outbound.php "show outbound")

| [Prev](console_commands.reroute_queue.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.show_outbound.php) |
| reroute queue  | [Table of Contents](index.php) |  show outbound |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)