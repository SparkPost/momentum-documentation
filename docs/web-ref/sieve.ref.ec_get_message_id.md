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

| ec_get_message_id |
| [Prev](sieve.ref.ec_get_message_creation_time.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_get_message_mailfrom.php) |

<a name="sieve.ref.ec_get_message_id"></a>
## Name

ec_get_message_id — Returns the message's unique ID.

## Synopsis

`ec_get_message_id`

<a name="idp29649056"></a>
## Description

`ec_get_message_id` returns the unique (on this Momentum instance) ID of this message. This is the same value that is returned in the 250 OK response when a message is accepted by Momentum, and is related to the spool name of the message. This value also appears in the second (numbered 1) field of main and bounce log entries pertaining to this message. For more information see [Section E.1.1, “The `mainlog.ec` Format”](log_formats.version_3.php#log_formats.mainlog3 "E.1.1. The mainlog.ec Format") and [Section E.1.5, “The bounce_logger”](log_formats.version_3.php#log_formats.bouncelog3 "E.1.5. The bounce_logger").

| [Prev](sieve.ref.ec_get_message_creation_time.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_get_message_mailfrom.php) |
| ec_get_message_creation_time  | [Table of Contents](index.php) |  ec_get_message_mailfrom |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)