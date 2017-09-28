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

| smtp_callback_verify |
| [Prev](sieve.ref.reverse_delim.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.snmp_trap.php) |

<a name="sieve.ref.smtp_callback_verify"></a>
## Name

smtp_callback_verify — Perform smtp callback on an email address

## Synopsis

`smtp_callback_verify` { *`email_address`* } [ *`sender_address`* ]

<a name="idp15903200"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

`smtp_callback_verify` performs a smtp callback on an *`email_address`* you specify. You need to load the [Section 14.53, “smtp_cbv – SMTP Callback Verification”](modules.smtp_cbv.php "14.53. smtp_cbv – SMTP Callback Verification") module passively to use this action.

You can specify an optional *`sender_address`* to use as the MAIL FROM: address when performing the callback. If this argument is not specified, the default value in the config file will be used. Specifying this argument will not change the `mailfrom` value in the config file.

This action returns a stringlist, ["status", "message"]. `status` is one of `pass`, `fail`, `transient`, or `error`. `message` is the full DSN (Delivery Status Notification).

<a name="example.smtp_callback_verify"></a>

**Example 15.121. smtp_callback_verify example**

In the following script, a smtp callback is performed on all incoming mails with a NULL sender address. The `ecelerity.conf` for this setup looks something like the following:

```
Validate validate/smtp_cbv smtp_cbv passive{
      phase = "mailfrom"
}

Validate validate/sieve sieve {
  mailfrom_phase1 = "/path/to/myscript.siv"
}
```

and the contents of `myscript.siv`:

```
$from = envelope "from";
($rv) = smtp_callback_verify "${from}";
if ec_test :is "${rv}" "fail" {
  ec_action 550 "from address not reachable";
}
```

<a name="idp15919248"></a>
## See Also

[Section 14.53, “smtp_cbv – SMTP Callback Verification”](modules.smtp_cbv.php "14.53. smtp_cbv – SMTP Callback Verification"),

| [Prev](sieve.ref.reverse_delim.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.snmp_trap.php) |
| reverse_delim  | [Table of Contents](index.php) |  snmp_trap |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)