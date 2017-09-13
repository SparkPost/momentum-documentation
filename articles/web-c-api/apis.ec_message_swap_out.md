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

| ec_message_swap_out |
| [Prev](apis.ec_message_swap_in.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_swap_out_meta.php) |

<a name="apis.ec_message_swap_out"></a>
## Name

ec_message_swap_out — cause a message to be written to disk

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_swap_out** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">refs</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`ec_message * <var class="pdparam">refs</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp29735584"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

cause a message to be written to disk.

If flags includes EC_MSG_SWAP_OUT_DROP_BODY, then the resources used to reference the message contents will be released after the message has been saved to disk.

If refs is not NULL, then it is assumed to be a message that shares the same content as mess; the underlying IO system may then employ optimizations for storing the message, such as filesystem hard linking.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message

</dd>

<dt>refs</dt>

<dd>

referenced message, may be NULL

</dd>

<dt>flags</dt>

<dd>

EC_MSG_SWAP_OUT_XXX

</dd>

</dl>

**Return Values**

Returns EC_MSG_SWAP_RESULT_ERR (0) on error, EC_MSG_SWAP_RESULT_COMPLETE (1) on success.

### Note

This function may induce IO or otherwise block the caller. Blocking in the scheduler thread will lead to degraded performance and should be avoided at all costs. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

**See Also**

[ec_message_swap_out_meta](apis.ec_message_swap_out_meta.php "ec_message_swap_out_meta")

| [Prev](apis.ec_message_swap_in.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_swap_out_meta.php) |
| ec_message_swap_in  | [Table of Contents](index.php) |  ec_message_swap_out_meta |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)