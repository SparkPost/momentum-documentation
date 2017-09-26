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

| 7.6. Listener Configuration for MCMT |
| [Prev](mm7.mcmt_reception.php)  | Chapter 7. Mobile Momentum MM7 |  [Next](mobility.mm7.aggregator.specific.php) |

## 7.6. Listener Configuration for MCMT

A typical configuration Listener Configuration for MCMT follows:

```
ESMTP_Listener {
  Listen ":25" {
    MCMT_Reception = "allow"
  }
}

mm7_serv {
  mm7_server_default_email_from_address = "test@messagesystems.com"
  mm7_server_default_email_from_domain = "messagesystems.com"
  mm7_server_default_email_to_address = "test@exampleto.com"
  mm7_server_default_email_to_domain = "exampleto.com"
}

mms_logger "mms_logger1" {
  logfile = "/var/log/ecelerity/mmslog.ec"
}

Domain "mm7.messagesystems.com" {
  MM7_MMSC_Server = "127.0.0.1"
}
```

The following options are unique to the listeners used with Mobile Momentum:

*   The `disable_chunked` is a boolean option used within the listener scopes. It is specific to Mobile Momentum and is used for aggregators that do not support chunked transfer-coding. The default value for this option is `false`.

*   Unlike the SMTP listener, there is no `mcmt_reception` option within the HTTP_Listener scope. *This listener is always MCMT enabled* .

| [Prev](mm7.mcmt_reception.php)  | [Up](mobility.mm7.php) |  [Next](mobility.mm7.aggregator.specific.php) |
| 7.5. The `MCMT_Reception` option  | [Table of Contents](index.php) |  7.7. Aggregator-specific Requirements |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)