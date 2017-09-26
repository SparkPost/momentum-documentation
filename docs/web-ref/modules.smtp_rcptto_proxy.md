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

| 14.68. smtp_rcptto_proxy - SMTP Recipient-To Proxy |
| [Prev](modules.smtp_cbv.php)  | Chapter 14. Modules Reference |  [Next](modules.spf.php) |

## 14.68. smtp_rcptto_proxy - SMTP Recipient-To Proxy

<a class="indexterm" name="idp21395952"></a>

**Configuration Change. ** This feature is available as beta in Momentum 3.6.5.

The `smtp_rcptto_proxy` module allows validation of a Lua recipient by doing an SMTP call-forward. This can be useful on edge MTAs to discover whether a user is valid or not. It will create an SMTP session to the specified server and then replay the SMTP conversation up to and including RCPT TO to determine if the recipient would be accepted.

<a name="modules.smtp_rcptto_proxy.example"></a>

**Example 14.98. Example Configuration**

```
/*
 * Syntax:
 *
 * require("msys.beta.rcptto_proxy");
 *
 * local res, err = msys.beta.rcptto_proxy.query({mailfrom = "foo@foo.com",
 *                                           rcptto = "bar@bar.com",
 *                                           host = "smtp.foo.com",
 *                                           port = 25,
 *                                           timeout = 60 -- optional, 60 default
 *                                           });
 *
 * -- res is true if everything succeeded, otherwise false and err is
 * -- set to an appropriate error string
...
```

### Note

No information is provided if the RCPT TO fails. The system just returns "fail".

| [Prev](modules.smtp_cbv.php)  | [Up](modules.php) |  [Next](modules.spf.php) |
| 14.67. smtp_cbv – SMTP Callback Verification  | [Table of Contents](index.php) |  14.69. spf Modules – spf_macros, spf_v1 and senderid (SPF v2) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)