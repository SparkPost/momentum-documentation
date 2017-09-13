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

| 14.38. mtamark – MTAMARK |
| [Prev](modules.maildir.php)  | Chapter 14. Modules Reference |  [Next](modules.outbound_audit.php) |

## 14.38. mtamark – MTAMARK

<a class="indexterm" name="idp12378688"></a>
### Note

MTAMARK is deprecated and removed in Momentum 2.2 and can be handled via [Section 14.54, “spf Modules – spf_macros, spf_v1 and senderid (SPF v2)”](modules.spf.php "14.54. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)") or [Section 14.24, “domainkeys – Yahoo! DomainKeys”](modules.domainkeys.php "14.24. domainkeys – Yahoo! DomainKeys").

MTAMARK is a proposed sender authentication standard. Similar to SPF, MTAMARK has two compenents:

*   DNS SRV policy records published by the sender to designate whether a given host is authorized to send mail on the Internet.

*   A policy engine to be implemented by receivers which can find and act on these policy records.

Unlike SPF, MTAMARK makes no attempts to work at the domain level. Instead it is simply designed to identify hosts which are not supposed to be sending any mail at all.

### 14.38.1. Configuration

MTAMARK configuration is very simple. To load the module you must add the following to your config:

<a name="idp12387712"></a>

**Example 14.58. mtamark module**

```
Validate validate/mtamark mtamark {
  Action = Markup
}
```

This directs Momentum to analyze the message and if an MTAMARK record exists to set the following context variables:

<dl class="variablelist">

<dt>`mtamark`</dt>

<dd>

`true` for success, `false` for failure

</dd>

<dt>`mtamark_contact`</dt>

<dd>

The responsible party for the IP in question in the event of failures.

</dd>

</dl>

| [Prev](modules.maildir.php)  | [Up](modules.php) |  [Next](modules.outbound_audit.php) |
| 14.37. maildir – Maildir Delivery Support  | [Table of Contents](index.php) |  14.39. outbound_audit – Outbound traffic analytics |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)