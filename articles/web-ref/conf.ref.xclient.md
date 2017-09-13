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

| xclient |
| [Prev](conf.ref.watchdog_interval.php)  | 9.2. Configuration Files and Option Details |  [Next](cluster.ref.php) |

<a name="conf.ref.xclient"></a>
## Name

xclient — use the XCLIENT extension to SMTP for outbound mail

## Synopsis

`XCLIENT = "no|ifavailable|required"`

<a name="idp12463888"></a>
## Description

XCLIENT allows information regarding the original sending host (such as the connecting IP address) to be communicated with the next hop and is useful when Momentum is deployed as a gateway device in a configuration where the internal hosts will benefit from knowing the original connecting IP address. In order to use this feature, the next-hop MTA must support XCLIENT. More information on XCLIENT can be found at [http://www.postfix.org/XCLIENT_README.html](http://www.postfix.org/XCLIENT_README.html)

```
Binding customer-1 {
  XCLIENT = "ifavailable"
  Domain relay.example.com {
    XCLIENT = "required"
  }
}
```

By enabling the XCLIENT option, outbound messages will be preceded by an ESMTP XCLIENT negotiation. If it is required then outbound mail will be transiently failed if the remote mail exchange does not support and accept the XCLIENT negotiation. If set to `ifavailable`, then Momentum will attempt to negotiate XCLIENT with the remote end prior to each message in the stream if the remote mail exchange supports XCLIENT. If that attempt fails, the message will be transmitted without XCLIENT data.

The default value for this directive is `no`.

<a name="idp12469680"></a>
## Scope

xclient is valid in the binding, binding_group, domain and global scopes.

| [Prev](conf.ref.watchdog_interval.php)  | [Up](conf.ref.files.php) |  [Next](cluster.ref.php) |
| watchdog_interval  | [Table of Contents](index.php) |  Chapter 10. Cluster Configuration Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)