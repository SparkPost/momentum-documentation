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

| ec_message_assign_domain |
| [Prev](apis.ec_message_assemble_to_legacy_email_message.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_assign_domain_by_name.php) |

<a name="apis.ec_message_assign_domain"></a>
## Name

ec_message_assign_domain — Modify the domain record of an ec_message

## Synopsis

`#include "ec_message.h"`

| `void **ec_message_assign_domain** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">dr</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`domain_record * <var class="pdparam">dr</var>`;<a name="idp27732608"></a>
## Description

Modify the domain record of an ec_message. This will increment the reference count on the domain_record passed in.

### Note

You MUST use [ec_message_assign_domain](apis.ec_message_assign_domain.php "ec_message_assign_domain") or [ec_message_assign_domain_by_name](apis.ec_message_assign_domain_by_name.php "ec_message_assign_domain_by_name") to change the domain of an ec_message or you will skew the binding/domain stats.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>dr</dt>

<dd>

A pointer to a domain_record struct. For documentation of this data structure see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record")

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp27744304"></a>
## See Also

[ec_message_get_routing_domain](apis.ec_message_get_routing_domain.php "ec_message_get_routing_domain") [ec_message_assign_domain_by_name](apis.ec_message_assign_domain_by_name.php "ec_message_assign_domain_by_name")

| [Prev](apis.ec_message_assemble_to_legacy_email_message.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_assign_domain_by_name.php) |
| ec_message_assemble_to_legacy_email_message  | [Table of Contents](index.php) |  ec_message_assign_domain_by_name |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)