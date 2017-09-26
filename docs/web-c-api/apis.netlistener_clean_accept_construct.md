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

| netlistener_clean_accept_construct |
| [Prev](apis.accept_construct_get_message_construct.php)  | Chapter 38. Netlistener Functions |  [Next](apis.netlistener_instantiate_addr.php) |

<a name="apis.netlistener_clean_accept_construct"></a>
## Name

netlistener_clean_accept_construct — Deletes a reference to a *netlistener* instance

## Synopsis

`#include "netlistener.h"`

| `void **netlistener_clean_accept_construct** (` | <var class="pdparam">ac</var>`)`; |   |

`accept_construct * <var class="pdparam">ac</var>`;<a name="idp30634128"></a>
## Description

Deletes a reference to a *netlistener* instance.

**Parameters**

<dl class="variablelist">

<dt>ac</dt>

<dd>

The address of an [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct") associated with the session. A reference to the `netlistener_instance` field is deleted.

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is *only* legal to call this function in the `Scheduler` thread.

| [Prev](apis.accept_construct_get_message_construct.php)  | [Up](netlistener.php) |  [Next](apis.netlistener_instantiate_addr.php) |
| accept_construct_get_message_construct  | [Table of Contents](index.php) |  netlistener_instantiate_addr |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)