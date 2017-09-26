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

| pe2_mark_unsubscribed |
| [Prev](sieve.ref.pe2_mark_bounced.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.qp_encode.php) |

<a name="sieve.ref.pe2_mark_unsubscribed"></a>
## Name

pe2_mark_unsubscribed — log unsubscribe events when the pe2_logger module is loaded passively

## Synopsis

`pe2_mark_unsubscribed`

<a name="idp31074176"></a>
## Description

### Note

This function requires that the pe2_logger module be loaded.

Use this function to log unsubscribe events when the pe2_logger module is loaded in passive mode. Note that on an inbound MTA the pe2_logger module must be loaded in passive mode. You may use any Sieve logic you wish to determine whether an incoming message is an unsubscribe. In the following example this is done by prefixing `unsub-` to the local part of the address.

<a name="idp31077328"></a>

**Example 16.117. pe2_mark_unsubscribed example**

```
if envelope :localpart :matches "to" "unsub-*" {
  $res = pe2_mark_unsubscribed;
  if ec_test "${res}" "failure" {
    ec_action 500 "pe2_mark_unsubscribed failed";
  }
  if not ec_test "${res}" "success" {
    ec_action 550 "pe2_mark_unsubscribed failed unexpectedly";
  }
  discard;
}
```

<a name="idp31079616"></a>
## See Also

[Section 14.52, “pe2_logger – Module”](modules.pe2_logger.php "14.52. pe2_logger – Module"), [pe2_mark_bounced](sieve.ref.pe2_mark_bounced.php "pe2_mark_bounced")

| [Prev](sieve.ref.pe2_mark_bounced.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.qp_encode.php) |
| pe2_mark_bounced  | [Table of Contents](index.php) |  qp_encode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)