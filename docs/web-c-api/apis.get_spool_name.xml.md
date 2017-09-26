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

| get_spool_name |
| [Prev](apis.get_disk_queue_size.php)  | Chapter 49. Spool-related Functions |  [Next](apis.mid_to_spool_name.xml.php) |

<a name="apis.get_spool_name.xml"></a>
## Name

get_spool_name — Get the spool name from the message ID

## Synopsis

`#include "spool.h"`

| `char * **get_spool_name** (` | <var class="pdparam">mid</var>`)`; |   |

`message_id * <var class="pdparam">mid</var>`;<a name="idp35116640"></a>
## Description

Get the spool name from the message ID.

**Parameters**

<dl class="variablelist">

<dt>mid</dt>

<dd>

The message id.

</dd>

</dl>

**Return Values**

On success, this function returns the spool name.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp35123040"></a>
## See Also

[Section 68.60, “message_id”](structs.message_id.php "68.60. message_id")

| [Prev](apis.get_disk_queue_size.php)  | [Up](spool.php) |  [Next](apis.mid_to_spool_name.xml.php) |
| get_disk_queue_size  | [Table of Contents](index.php) |  mid_to_spool_name |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)