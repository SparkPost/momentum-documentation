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

| 5.5. Persistent Connections |
| [Prev](mobility.best.practices.delivery.receipts.php)  | Chapter 5. SMPP Configuration Best Practices |  [Next](mobility.best.practices.sms.to.email.php) |

## 5.5. Persistent Connections

Normally, SMPP connections are established by Mobile Momentum whenever traffic is destined for an SMPP domain. The connection is kept open until the SMPP inactivity timer expires. While this may be fine for most MT based applications, it does not guarantee that an SMPP connection is in place when an SMSC has SMS messages to send. As a solution, persistent SMPP connections may be specified in the configuration when a permanent SMPP connection is needed.

The following example shows how the `SMPP_Persistent_Connections` option is associated with a binding that specifies the configuration of a persistent connection(s):

```
Domain "somewhere.com" {
  SMPP_SMSC_Server = "10.0.0.1"
  ...
  Max_Outbound_Connections = 1
  SMPP_Bind_Type = "Transmitter"
  SMPP_Persistent_Connections = [ Persist_This = 1 ]
  ...
}
```

```
Binding "Persist_This"  {
  Max_Outbound_Connections = 1
  SMPP_Bind_Type = "Receiver"
}
```

In this example, the SMPP domain `somewhere.com` establishes a bind transmitter SMPP connection as needed for outgoing MT traffic and will maintain a single bind receiver SMPP connection for MO traffic.

For more information see [smpp_persistent_connections](mobility.conf.smpp_persistent_connections.php "smpp_persistent_connections").

| [Prev](mobility.best.practices.delivery.receipts.php)  | [Up](mobility.best.practices.php) |  [Next](mobility.best.practices.sms.to.email.php) |
| 5.4. Delivery Receipts  | [Table of Contents](index.php) |  5.6. SMS to Email Address Mappings |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)