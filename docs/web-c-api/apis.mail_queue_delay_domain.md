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

| mail_queue_delay_domain |
| [Prev](apis.mail_queue_active_queue_for_binding.php)  | Chapter 32. Mail Queue Functions |  [Next](apis.mail_queue_delayed_size.php) |

<a name="apis.mail_queue_delay_domain"></a>
## Name

mail_queue_delay_domain — Add the specified domain record to the delayed queue

## Synopsis

`#include "mail_queue.h"`

| `void **mail_queue_delay_domain** (` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">note</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`char * <var class="pdparam">note</var>`;<a name="idp27075664"></a>
## Description

Add the specified domain record to the delayed queue.

**Parameters**

<dl class="variablelist">

<dt>dr</dt>

<dd>

The domain record. For a description of this struct see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record").

</dd>

<dt>note</dt>

<dd>

The reason associated with the delay, for example, `"451 4.4.1 [internal] manually delayed domain"`.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp27085344"></a>
## See Also

You can obtain a domain_record using [dns_get_domain](apis.dns_get_domain.php "dns_get_domain").

| [Prev](apis.mail_queue_active_queue_for_binding.php)  | [Up](mailq.php) |  [Next](apis.mail_queue_delayed_size.php) |
| mail_queue_active_queue_for_binding  | [Table of Contents](index.php) |  mail_queue_delayed_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)