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

| 7.2. Message Scope Search Fields |
| [Prev](msc.lucene.query.php)  | Chapter 7. Advanced Search Syntax |  [Next](msc.lucene.query.search.php) |

## 7.2. Message Scope Search Fields

The fields that may be used in a custom Lucene query are as follows:

Fields common to all searches are as follows:

*   `ts` – Timestamp

*   `ty` – Type

*   `tid` – Thread ID

*   `d` – Device type

*   `sid` – Spool ID

*   `bid` – Batch ID

*   `cid` – Conn ID

*   `b` – Binding

*   `bg` – Binding Group

*   `p` – Pathway

*   `pg` – Pathway Group

*   `sip` – Source IP

*   `dip` – Destination IP

*   `u` – User data

*   `pd` – Partner data

*   `f` – Final rule

The device type defaults to "Momentum". For a description of "user data", "partner data" and "final rule", see [Section 3.2, “Runtime Usage”](msc_logger.runtime.php "3.2. Runtime Usage").

### Note

Lucene does not check that the search value for a field is validly formatted—that the FROM header contains the ‘`@`’ character, for example.

The SMTP-specific fields are:

*   `mid` – Message-ID header

    ### Note

    When searching for a message ID you must use angle brackets. For example: `mid:<7A.8C.05819.20F0C4E4@msc-mta1>`

*   `mfl` – MAIL FROM: local part

*   `mfd` – MAIL FROM: domain part

*   `rtl` – RCPT TO: local part

*   `rtd` – RCPT TO: domain part

*   `fh` – From: header

*   `th` – To: header

*   `s` – Subject: header

*   `smtprr` – Remote Response

*   `bc` – Bounce Code

The SMPP-specific fields are:

*   `oc` – Originating code

*   `dc` – Destination code

*   `en` – Endpoint aggregator common name

*   `smpprr` – Remote response

*   `mc` – Message content

| [Prev](msc.lucene.query.php)  | [Up](msc.lucene.query.php) |  [Next](msc.lucene.query.search.php) |
| Chapter 7. Advanced Search Syntax  | [Table of Contents](index.php) |  7.3. Searches |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)