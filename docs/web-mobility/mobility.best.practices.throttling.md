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

| 5.7. Throttling |
| [Prev](mobility.best.practices.sms.to.email.php)  | Chapter 5. SMPP Configuration Best Practices |  [Next](mobility.best.practices.logging.php) |

## 5.7. Throttling

Outbound throttles for SMS submissions may be set in the SMPP domain stanza using the same parameter as for email throttles.

Additionally, the SMSC may set the command status code `ESME_ETHROTTLED` to indicate messages are arriving too quickly. The Mobile Momentum `SMPP_ESME_Throttled_Timeout` option may be set in order to temporarily delay new message submissions. Set the value to the number of seconds to suspend SMS submissions. In the example below, Mobile Momentum stops submitting new message requests for one second upon receiving the `ESME_ETHROTTLED` indication from the SMSC:

```
Domain "somewhere.com" {
  SMPP_SMSC_Server = "10.0.0.1"
  ...
  SMPP_ESME_Throttled_Timeout = 1
  ...
}
```

Refer to the [Momentum V3 Reference](https://support.messagesystems.com/docs/web-ref/) for additional information and for examples of using outbound throttles.

| [Prev](mobility.best.practices.sms.to.email.php)  | [Up](mobility.best.practices.php) |  [Next](mobility.best.practices.logging.php) |
| 5.6. SMS to Email Address Mappings  | [Table of Contents](index.php) |  5.8. SMPP Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)