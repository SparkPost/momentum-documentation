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

| ehlo_hostname |
| [Prev](conf.ref.drop_body_after_trans_fail.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.ehlo_timeout.php) |

<a name="conf.ref.ehlo_hostname"></a>
## Name

ehlo_hostname — set the hostname used for EHLO in outbound mail

## Synopsis

`EHLO_Hostname = "example.com"`

`EHLO_Hostname = "__message__"`

`EHLO_Hostname = "__hostname__"`

<a name="idp5075728"></a>
## Description

```
EHLO_Hostname = <string>
EHLO_Hostname = __message__
EHLO_Hostname = __hostname__

Domain example.com {
  EHLO_Hostname = <string>
  EHLO_Hostname = __message__
  EHLO_Hostname = __hostname__
}

Binding example {
  EHLO_Hostname = <string>
  EHLO_Hostname = __message__
  EHLO_Hostname = __hostname__

  Domain example.com {
    EHLO_Hostname = <string>
    EHLO_Hostname = __message__
    EHLO_Hostname = __hostname__
  }
}
```

When delivering messages to remote mail exchanges, Momentum uses the SMTP protocol. This requires initiating the conversation with the remote server using the `EHLO` or `HELO` command. Both commands are followed by the canonical name of the initiator.

When EHLO_Hostname is set to `__message__`, Momentum will extract the domain name from the envelope sender of the outbound message. If you prefer to use the hostname of the local machine (as returned by the `gethostname()` system call, then you may specify the special value `__hostname__`.

Otherwise, an arbitrary hostname may be specified using the first syntax listed above.

The default value for this option is `__hostname__`.

<a name="idp5083264"></a>
## Scope

ehlo_hostname is valid in the binding, binding_group, domain and global scopes.

| [Prev](conf.ref.drop_body_after_trans_fail.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.ehlo_timeout.php) |
| drop_body_after_trans_fail  | [Table of Contents](index.php) |  ehlo_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)