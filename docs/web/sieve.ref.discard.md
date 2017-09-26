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

| discard |
| [Prev](sieve.ref.disable_esmtp_capability.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.disclaimer_add.php) |

<a name="sieve.ref.discard"></a>
## Name

discard, ec_discard — discard the current message; it will not be delivered

## Synopsis

`discard`

`ec_discard` [ *`reason`* ]

<a name="idp13570016"></a>
## Description

Discard is used to silently throw away the message. It does so by simply canceling the implicit keep. If discard is used with other actions, the other actions still happen. Discard is compatible with all other actions. (For instance fileinto+discard is equivalent to fileinto.)

If discard throws the message away, the message will appear (to the sender) to have been accepted and delivered; no error status or out-of-band delivery notification will occur.

In the following script, any mail from the bad-guy.com domain is thrown out.

<a name="example.discard"></a>

**Example 15.17. discard example**

```
if envelope :domain :is "from" "bad-guy.com" {
  discard;
}
```

This is a terminal action; no further Sieve rules will be run for the current message in the current phase.

For an overview of Sieve actions see [Section 8.2.2, “Actions”](sieve.syntax.basic.php#sieve.syntax.basic.actions "8.2.2. Actions").

| [Prev](sieve.ref.disable_esmtp_capability.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.disclaimer_add.php) |
| disable_esmtp_capability  | [Table of Contents](index.php) |  disclaimer_add |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)