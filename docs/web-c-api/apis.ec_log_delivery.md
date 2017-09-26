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

| ec_log_delivery |
| [Prev](apis.ec_log_attempt.php)  | Chapter 31. Logging Functions |  [Next](apis.ec_log_permanent_failure.php) |

<a name="apis.ec_log_delivery"></a>
## Name

ec_log_delivery — Record Momentum deliveries

## Synopsis

`#include "log.h"`

| `void **ec_log_delivery** (` | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">notestr</var>`)`; |   |

`ec_message * <var class="pdparam">message</var>`;
`domain_record * <var class="pdparam">domain</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`const string * <var class="pdparam">notestr</var>`;<a name="idp26683808"></a>
## Description

This function records Momentum deliveries.

**Parameters**

<dl class="variablelist">

<dt>message</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>domain</dt>

<dd>

A pointer to a domain_record struct. For documentation of this data structure see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record").

</dd>

<dt>now</dt>

<dd>

A pointer to a timeval struct, which may be NULL.

</dd>

<dt>notestr</dt>

<dd>

Typical use is to pass `NULL` to this parameter, in which case the string to log is pulled from the message construct. You may override this by passing your own Delivery Status Notification (DSN) to use for logging the delivery attempt.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_log_attempt.php)  | [Up](logging.php) |  [Next](apis.ec_log_permanent_failure.php) |
| ec_log_attempt  | [Table of Contents](index.php) |  ec_log_permanent_failure |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)