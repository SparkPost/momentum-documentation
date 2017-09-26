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

| 25.6. Outbound XCLIENT support |
| [Prev](tls_option.php)  | Chapter 25. Configuring Outbound Mail Delivery |  [Next](outbound_mail.relay_hosts.php) |

## 25.6. Outbound XCLIENT support

It is often useful for a relay to be able to propagate the original sender IP address to a remote relay so that it can apply more intelligent policy rules to the message. The XCLIENT SMTP extension specifies a protocol for doing exactly that. The `XCLIENT` configuration option allows you to specify whether Momentum should use XCLIENT when the remote host advertises support for it.

Configuration is similar to TLS configuration, with possible values being `no` to not use XCLIENT (the default), `ifavailable` to use it if it is advertised and `required` to prevent delivery if the remote host does not support XCLIENT.

### Warning

Setting XCLIENT to `required` causes Momentum to deliver the mail only if the remote client supports XCLIENT.

The following is an example configuration in the `ecelerity.conf` file:

```
binding "customer-1" {
  XCLIENT = "ifavailable"

  domain "relay.example.com" {
    XCLIENT = "required"
  }
}
```

| [Prev](tls_option.php)  | [Up](outbound_mail.php) |  [Next](outbound_mail.relay_hosts.php) |
| 25.5. Outbound TLS  | [Table of Contents](index.php) |  25.7. Outbound Email Relay |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)