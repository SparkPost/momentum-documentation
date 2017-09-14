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

| 14.21. conntrol – Fine-Grained Connection Control |
| [Prev](modules.compress_spool.php)  | Chapter 14. Modules Reference |  [Next](modules.csapi.php) |

## 14.21. conntrol – Fine-Grained Connection Control

<a class="indexterm" name="idp18627808"></a>

The Connection Control module is designed to allow control over how connections are established into Momentum. The module currently implements one check - early data sending, which is designed to spot so-called ratware.

### 14.21.1. Early Sender Detection

Early sender detection causes Momentum to pause before its initial banner is sent to a connecting client. If the client sends data before the banner, and `disconnect_ratware` is set, then Momentum will disconnect them. To enable this, you can use the following stanza:

<a name="example.conntrol.3"></a>

**Example 14.36. conntrol module**

```
conntrol "conntrol1" {
  banner = "220-Welcome to Momentum!\r\n"
  pause_time = 2
  disconnect_ratware = "421 my.host.name service denied to those who send before the banner\r\n"
}
```

This will set a custom banner and a two second delay for that banner. If the `disconnect_ratware` parameter is also set, it must be a valid SMTP protocol response string. With these three parameters set, this module will immediately send the defined response and disconnect the peer, possibly bypassing other policy. For this reason, we generally recommend that customers not use the `disconnect_ratware` option and instead look at the `early_talker` validation context variable using a policy script; this gives greater flexibility. The conntrol module context variables are listed in the following section.

### 14.21.2. Conntrol Runtime Usage

The conntrol module sets the following context variables:

<dl class="variablelist">

<dt>conntrol_bad_commands</dt>

<dd>

The number of valid SMTP commands that were sent, but had syntax errors.

</dd>

<dt>conntrol_unrecognized_commands</dt>

<dd>

The number of unrecognized commands seen in this SMTP session.

</dd>

<dt>early_talker</dt>

<dd>

This variable holds the literal string `yes` if the peer started issuing commands before Momentum sent the initial SMTP banner.

</dd>

</dl>

| [Prev](modules.compress_spool.php)  | [Up](modules.php) |  [Next](modules.csapi.php) |
| 14.20. compress_spool – Dynamic Spool Compression  | [Table of Contents](index.php) |  14.22. csapi – The Content Scanning API Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)