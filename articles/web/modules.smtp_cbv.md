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

| 14.53. smtp_cbv – SMTP Callback Verification |
| [Prev](modules.sievelib.php)  | Chapter 14. Modules Reference |  [Next](modules.spf.php) |

## 14.53. smtp_cbv – SMTP Callback Verification

<a class="indexterm" name="idp12895728"></a>

This module allows Momentum to perform SMTP Callback Verification (CBV) in its validation process. If this module is loaded, for every inbound message, Momentum will attempt to connect back to the sender domain to determine if the sender address is valid.

### 14.53.1. Configuration

<a name="example.smtp_cbv"></a>

**Example 14.73. smtp_cbv version**

```
Validate validate/smtp_cbv smtp_cbv {
  phase = "mailfrom"
  mailfrom = ""
  map [
    yahoo.net = "yahoo.com"
  ]
}
```

<dl class="variablelist">

<dt>mailfrom</dt>

<dd>

Specifies the mailfrom address to use in the SMTP Callback Verification. If not specified, a null sender address will be used.

</dd>

<dt>map</dt>

<dd>

If the sending domain matches the value listed on the left hand side, Momentum will attempt SMTP CBV with the domain listed on the right hand side.

### Note

This option supports both `mailfrom` and `rcptto` since Momentum 3.1 and Momentum 2.2.3.47\. Prior releases only provide map support for `rcptto`.

</dd>

<dt>phase</dt>

<dd>

Specifies the SMTP phase to start SMTP Callback Verification. It can be either `mailfrom` or `rcptto`.

</dd>

</dl>

The verification result will be stored in a message context variable `smtp_cbv_result`. See below for more information. You may act on the context variable from a script or from other validation modules as part of your site policy.

You can invoke callback verification from Sieve using the `smtp_callback_verify` function. For more information see [smtp_callback_verify](sieve.ref.smtp_callback_verify.php "smtp_callback_verify").

### 14.53.2. smtp_cbv Runtime Usage

The smtp_cbv module sets the following message context variable:

<dl class="variablelist">

<dt>smtp_cbv_result</dt>

<dd>

If the address was verified, that is, if the remote MTA did not permanently reject the CBV attempt, the `smtp_cbv_result` variable will be set to the string `pass`. Other possible values are `error` and `transient`, reflecting permanent and transient errors during the CBV attempt.

</dd>

</dl>

### 14.53.3. Abuse Issues With CBV

Using SMTP CBV can abuse a remote MTA if a large number of inbound messages are forged to look like they have been sent from a third party's domain. Exercise caution before deploying this module.

| [Prev](modules.sievelib.php)  | [Up](modules.php) |  [Next](modules.spf.php) |
| 14.52. sievelib – The sievelib Module  | [Table of Contents](index.php) |  14.54. spf Modules – spf_macros, spf_v1 and senderid (SPF v2) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)