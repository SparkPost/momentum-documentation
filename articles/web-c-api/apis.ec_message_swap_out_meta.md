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

| ec_message_swap_out_meta |
| [Prev](apis.ec_message_swap_out.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_unlink_on_free.php) |

<a name="apis.ec_message_swap_out_meta"></a>
## Name

ec_message_swap_out_meta — Write message meta data to disk

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_swap_out_meta** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">force</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">force</var>`;<a name="idp29759280"></a>
## Description

Write message meta data to disk.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>force</dt>

<dd>

An integer indicating whether or not to force (`1`) the swap out.

</dd>

</dl>

**Return Values**

Returns one of EC_MSG_SWAP_RESULT_ERR, EC_MSG_SWAP_RESULT_COMPLETE or EC_MSG_SWAP_RESULT_PARTIAL.

*   `EC_MSG_SWAP_RESULT_ERR (0)` on error.

*   `EC_MSG_SWAP_RESULT_COMPLETE (1)` on success.

*   `EC_MSG_SWAP_RESULT_PARTIAL (2) if the swap out was incomplete.`

**Threading**

It is legal to call this function in any thread. However, as this may block the caller, it should not be called from the Scheduler Thread.

### Note

This function may induce IO or otherwise block the caller. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

| [Prev](apis.ec_message_swap_out.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_unlink_on_free.php) |
| ec_message_swap_out  | [Table of Contents](index.php) |  ec_message_unlink_on_free |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)