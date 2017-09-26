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

| 14.66. smtp_auth_proxy - SMTP Authentication Proxy |
| [Prev](modules.sievelib.php)  | Chapter 14. Modules Reference |  [Next](modules.smtp_cbv.php) |

## 14.66. smtp_auth_proxy - SMTP Authentication Proxy

<a class="indexterm" name="idp21352512"></a>

**Configuration Change. ** This feature is available as beta in Momentum 3.6.5.

The `smtp_auth_proxy` module allows your edge SMTP servers to forward SMTP AUTH requests onto one or more SMTP servers, with optional lookup of the authentication host for a particular user.

<a name="modules.smtp_auth_proxy.example"></a>

**Example 14.96. Example Configuration**

```
smtp_auth_proxy {
  # Host for forwarding the SMTP AUTH request.
  host = some.smtp.server
  port = 25
  timeout = 60

  # Optionally query a database to look up the SMTP server
  # for auth for a particular user.
  ds_cache = smtp_auth_proxy
  query = "SELECT host FROM auth_servers WHERE username = :username, localpart = :localpart, domain = :domain;"
}

Esmtp_Listener {
  SMTP_Extensions = ("AUTH LOGIN" XREMOTEIP XDUMPCONTEXT XCLIENT XSETCONTEXT)

  AuthLoginParameters = [
      log_authentication = "true"
      uri = "smtp_auth_proxy://"
  ]

  Listen ":25" {}
}
```

### Note

Any hosts specified by the `relay_hosts` option are not subject to any SMTP authentication that you may have implemented. Likewise when `open_relay` is set to `true`. For more information see [relay_hosts](conf.ref.relay_hosts.php "relay_hosts").

| [Prev](modules.sievelib.php)  | [Up](modules.php) |  [Next](modules.smtp_cbv.php) |
| 14.65. sievelib – The sievelib Module  | [Table of Contents](index.php) |  14.67. smtp_cbv – SMTP Callback Verification |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)