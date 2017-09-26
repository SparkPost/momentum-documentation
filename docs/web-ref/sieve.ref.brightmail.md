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

| brightmail |
| [Prev](sieve.ref.audit_service.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.cidrdb.php) |

<a name="sieve.ref.brightmail"></a>
## Name

*`brightmail`*_is_default, *`brightmail`*_rules, *`brightmail`*_verdict, *`brightmail`*_scanner, *`brightmail`*_tracker — brightmail functions for Sieve

## Synopsis

*`brightmail`*_verdict

*`brightmail`*_is_default

*`brightmail`*_rules

*`brightmail`*_scanner

*`brightmail`*_tracker

<a name="idp28782768"></a>
## Description

These Sieve tests and actions are provided by the [Section 14.14, “brightmail – Brightmail Module”](modules.brightmail.php "14.14. brightmail – Brightmail Module"); you must load and correctly configured this module before using these functions. Be sure to set the brightmail module option, `sieve_mode` to `on`. These functions can be invoked at the data, spool or each_rcpt phases. They will not work at the connect, ehlo, mailfrom or rcptto phases.

### Note

The names of these functions are determined by the value of the `sieve_prefix` configuration setting. For example, if the brightmail module is loaded with `sieve_prefix` set to `bm`, you would, for example, invoke the verdict function using the name `bm_verdict`. The default value of the `sieve_prefix` option is `brightmail`.

The **brightmail_scanner** command is used to force a brightmail scan of a message; it should be called first before *any* of the other brightmail actions. Use this function to get a verdict from brightmail.

```
brightmail_scanner;
if brightmail_verdict :is " " "spam" {
  ec_header_prefix "Subject" "[brightmail] ";
}
```

**brightmail_verdict** returns the text destination from the verdict that applies to the current recipient of the current message. Typical return values would be either `inbox` or `spam`.

You may also use **brightmail_verdict** as a test:

```
brightmail_scanner;
if brightmail_verdict :is " " "spam" {
  ec_header_prefix "Subject" "[brightmail] ";
}
```

**brightmail_is_default** is a test that will yield a positive result if the verdict for the current recipient on the current message is the "default" destination.

The Brightmail protocol signals when the default disposition was found. So rather than matching an explicit default name of "default", you can use the `brightmail_is_default` Sieve action to see if there is a match. This makes your Sieve script independent of what the default verdict is named. `if not brightmail_is_default` effectively means that there is something suspicious about the message.

```
brightmail_scanner;
if not brightmail_is_default {
  ec_tarpit 10 "non default brightmail result";
}
```

**brightmail_rules** returns a stringlist of the rules noted in the verdict applying to the current recipient on the current message. Rules in the brightmail protocol are specified by number.

```
brightmail_scanner;
if brightmail_rules :is " " "111" {
  ec_log "Brightmail rule #111 hit!";
}
```

**brightmail_tracker** returns a string suitable for use as the X-Brightmail-Tracker header.

```
$tracker = brightmail_tracker;
vctx_mess_set "bm_tracker" $tracker;
$ruleslist = brightmail_rules;
$rules = join " " $ruleslist;
vctx_mess_set "bm_rules" $rules;
```

For more information about Brightmail see [http://www.symantec.com/business/products/family.jsp?familyid=brightmail](http://www.symantec.com/business/products/family.jsp?familyid=brightmail) .

| [Prev](sieve.ref.audit_service.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.cidrdb.php) |
| audit_service  | [Table of Contents](index.php) |  cidrdb |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)