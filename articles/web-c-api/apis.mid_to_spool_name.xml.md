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

| mid_to_spool_name |
| [Prev](apis.get_spool_name.xml.php)  | Chapter 49. Spool-related Functions |  [Next](apis.spool_disk_queue_state.php) |

<a name="apis.mid_to_spool_name.xml"></a>
## Name

mid_to_spool_name — Get the spool name from the message ID

## Synopsis

`#include "spool.h"`

| `int **mid_to_spool_name** (` | <var class="pdparam">mid</var>, |   |
|   | <var class="pdparam">buffer</var>`)`; |   |

`message_id * <var class="pdparam">mid</var>`;
`char * <var class="pdparam">buffer</var>`;<a name="idp35133840"></a>
## Description

Get the spool name from the message ID.

**Parameters**

<dl class="variablelist">

<dt>mid</dt>

<dd>

The message id.

</dd>

<dt>buffer</dt>

<dd>

The buffer for the spool name. This buffer must be at least `SPOOL_NAME_LEN` +1 in length. This constant is defined in `spool.h`.

</dd>

</dl>

**Return Values**

On success, this function returns the length of the spool name.

**Threading**

It is legal to call this function in any thread.

<a name="idp35142624"></a>
## See Also

[Section 68.60, “message_id”](structs.message_id.php "68.60. message_id")

| [Prev](apis.get_spool_name.xml.php)  | [Up](spool.php) |  [Next](apis.spool_disk_queue_state.php) |
| get_spool_name  | [Table of Contents](index.php) |  spool_disk_queue_state |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)