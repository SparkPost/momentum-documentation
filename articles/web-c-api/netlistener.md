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

| Chapter 38. Netlistener Functions |
| [Prev](apis.module_get_hook_head.php)  | Part II. C API |  [Next](apis.accept_construct_get_message_construct.php) |

## Chapter 38. Netlistener Functions

**Table of Contents**

<dl class="toc">

<dt>[accept_construct_get_message_construct](apis.accept_construct_get_message_construct.php) — Add a function to return message_construct from accept_construct</dt>

<dt>[netlistener_clean_accept_construct](apis.netlistener_clean_accept_construct.php) — Deletes a reference to a *netlistener* instance</dt>

<dt>[netlistener_instantiate_addr](apis.netlistener_instantiate_addr.php) — Start service on a listener endpoint</dt>

<dt>[netlistener_stop_instance](apis.netlistener_stop_instance.php) — Stop service on a listener endpoint</dt>

<dt>[netlistener_register4](apis.netlistener_register4.php) — Register a listener, overriding the default TCP receive and send buffers that are set by the netlistener layer</dt>

</dl>

For a discussion of net listeners in Momentum see [Section 1.4.1.1, “Defining a Netlistener”](arch.secondary.apis.php#arch.netlistener "1.4.1.1. Defining a Netlistener").

| [Prev](apis.module_get_hook_head.php)  | [Up](pt.apis.php) |  [Next](apis.accept_construct_get_message_construct.php) |
| module_get_hook_head  | [Table of Contents](index.php) |  accept_construct_get_message_construct |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)