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

| 7.5. The `MCMT_Reception` option |
| [Prev](mobility.mm7.multiprotocol.php)  | Chapter 7. Mobile Momentum MM7 |  [Next](mobility.mm7.listener.php) |

## 7.5. The `MCMT_Reception` option

A Multi-Channel Message Type (MCMT) message is a multi-part MIME message. A MCMT message has a required email attachment with the Content-Type: `message/rfc2822` and optionally other parts with content suitable for delivery over non-email channels such as SMPP and MM7.

You can configure a Listener to accept the Multi-Channel Message Type using the `MCMT_Reception` option. This option defaults to `passthru` but can also be set to the values `allow` and `reject`. This option is valid in the Pathway, Pathway_Group, ESMTP_Listener, Peer, and Listen scopes. There is also a connection level validation context variable of the same name that, if set, overrides the value of the `MCMT_Reception` option. If this option is set to `allow`, then the MCMT content will be accepted. If it is set to `reject`, the message will be rejected. If it is set to `passthru` then the message will not be massaged and the MCMT message will be queued "as is" and delivered as though the system has no knowledge of MCMT messages.

### Note

Unlike the SMTP listener, there is no `mcmt_reception` option within the HTTP_Listener scope. *This listener is always MCMT enabled* .

Both SMS and MM7 typically incur a cost to send, so it is prudent to restrict `MCMT_Reception = allow` to a Listen or Peer stanza that enables it on a local or otherwise trusted system.

Since ECSTREAM is a trusted protocol, it is MCMT-enabled by default so does not have this configuration option.

| [Prev](mobility.mm7.multiprotocol.php)  | [Up](mobility.mm7.php) |  [Next](mobility.mm7.listener.php) |
| 7.4. Multi Protocol Domain Naming  | [Table of Contents](index.php) |  7.6. Listener Configuration for MCMT |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)