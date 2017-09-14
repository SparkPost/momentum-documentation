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

| Appendix A. Custom Delivery Modules |
| [Prev](structs.validate_context.php)  |   |  [Next](custom_channels.overview.php) |

## Custom Delivery Modules

**Table of Contents**

<dl class="toc">

<dt>[A.1\. Overview](custom_channels.overview.php)</dt>

<dt>[A.2\. Momentum Modules](custom_channels.momo.module.api.php)</dt>

<dt>[A.3\. Custom Delivery Module Setup](custom_channels.custom.module.api.php)</dt>

<dt>[A.4\. Custom Callback Functions](custom_channels.custom.routines.php)</dt>

<dt>[A.5\. Compiling in C](custom_channels.compiling.php)</dt>

</dl>

With the ever-increasing demand, more and more channels are needed for message delivery. Yet most outbound delivery channels can share many of the same functionalities such as connection establishment and management, message queuing management, and delivery result handling. Given these similarities, custom channels can be implemented with a reusable and extensible message delivery architecture. The Generic HTTP Client provides an HTTP transport layer that supports custom delivery channels using HTTP protocol for sending messages/notifications and receiving responses. The delivery channel can support any higher level protocol that uses HTTP for transport as long as the protocol is synchronous in nature (i.e. sends request –> waits for response –> sends next request) and is acting as a client.

This document describes how to extend the Generic HTTP Client module to build a custom delivery channel using the C programming language. It is intended for software developers proficient in extending Momentum using the module API. As a prerequisite, you should be familiar with the information provided in [Section 1.3, “Primary Momentum APIs”](arch.primary.apis.php "1.3. Primary Momentum APIs").

| [Prev](structs.validate_context.php)  |   |  [Next](custom_channels.overview.php) |
| 68.86. validate_context  | [Table of Contents](index.php) |  A.1. Overview |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)