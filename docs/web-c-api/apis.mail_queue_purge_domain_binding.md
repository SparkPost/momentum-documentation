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

| mail_queue_purge_domain_binding |
| [Prev](apis.mail_queue_delayed_size.php)  | Chapter 32. Mail Queue Functions |  [Next](apis.mail_queue_size.php) |

<a name="apis.mail_queue_purge_domain_binding"></a>
## Name

mail_queue_purge_domain_binding — Fail all messages for a binding/domain with a given status code

## Synopsis

`#include "mail_queue.h"`

| `int **mail_queue_purge_domain_binding** (` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding_slot</var>, |   |
|   | <var class="pdparam">note</var>, |   |
|   | <var class="pdparam">quiet</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`ec_binding_slot <var class="pdparam">binding_slot</var>`;
`char * <var class="pdparam">note</var>`;
`int <var class="pdparam">quiet</var>`;<a name="idp27116688"></a>
## Description

Fail all messages for a binding/domain with a given delivery status notification (DSN).

**Parameters**

<dl class="variablelist">

<dt>dr</dt>

<dd>

A pointer to a domain_record struct. For documentation of this data structure see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record").

</dd>

<dt>binding_slot</dt>

<dd>

The binding slot.

</dd>

<dt>note</dt>

<dd>

A string containing the DSN to use when purging the messages. If NULL, then the default string used is "554 5.4.4 [internal] Domain Lookup Failed".

</dd>

<dt>quiet</dt>

<dd>

An integer. Typically, EM_FAILED or EM_FAILED_QUIET.

</dd>

</dl>

**Return Values**

This function returns the number of messages failed for the binding/domain.

**Threading**

It is only legal to call this function in the `Scheduler` thread.

<a name="idp27129536"></a>
## See Also

[__get_global_mail_queue](apis.get_global_mail_queue.php "__get_global_mail_queue"), [mail_queue_active_queue_for_binding](apis.mail_queue_active_queue_for_binding.php "mail_queue_active_queue_for_binding"), [mail_queue_delayed_size](apis.mail_queue_delayed_size.php "mail_queue_delayed_size"), and [mail_queue_size](apis.mail_queue_size.php "mail_queue_size").

| [Prev](apis.mail_queue_delayed_size.php)  | [Up](mailq.php) |  [Next](apis.mail_queue_size.php) |
| mail_queue_delayed_size  | [Table of Contents](index.php) |  mail_queue_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)