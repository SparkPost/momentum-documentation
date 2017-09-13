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

| Chapter 31. Logging Functions |
| [Prev](apis.io_wrapper_writev.php)  | Part II. C API |  [Next](apis.ec_log_attempt.php) |

## Chapter 31. Logging Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_log_attempt](apis.ec_log_attempt.php) — Records an attempt to deliver a message</dt>

<dt>[ec_log_delivery](apis.ec_log_delivery.php) — Record Momentum deliveries</dt>

<dt>[ec_log_permanent_failure](apis.ec_log_permanent_failure.php) — Records a permanent failure disposition of a message</dt>

<dt>[ec_log_reception](apis.ec_log_reception.php) — Log a message reception</dt>

<dt>[ec_log_rejection](apis.ec_log_rejection.php) — Records the fact that Momentum rejected an incoming message (deprecated)</dt>

<dt>[ec_log_rejection2](apis.ec_log_rejection2.php) — Records rejection of an incoming message</dt>

<dt>[ec_log_transient_failure](apis.ec_log_transient_failure.php) — Record a transient delivery failure</dt>

</dl>

For a discussion of logging in Momentum see [Logging](https://support.messagesystems.com/docs/web-ref/operations.logging.php), [ec_logger – Momentum-Style Logging](https://support.messagesystems.com/docs/web-ref/modules.ec_logger.php) and [Log Formats](https://support.messagesystems.com/docs/web-ref/log_formats.php).

| [Prev](apis.io_wrapper_writev.php)  | [Up](pt.apis.php) |  [Next](apis.ec_log_attempt.php) |
| io_wrapper_writev  | [Table of Contents](index.php) |  ec_log_attempt |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)