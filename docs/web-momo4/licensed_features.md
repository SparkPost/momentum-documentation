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

| Chapter 4. Licensed Features |
| [Prev](roles_behaviors.php)  | Part I. Introduction to Momentum |  [Next](licensed_features.adaptive.delivery.php) |

## Chapter 4. Licensed Features

**Table of Contents**

<dl class="toc">

<dt>[4.1\. Message Generation](licensed_features.php#licensed_features.message.generation)</dt>

<dt>[4.2\. Adaptive Delivery](licensed_features.adaptive.delivery.php)</dt>

<dt>[4.3\. Supercharger](licensed_features.supercharger.php)</dt>

</dl>

## 4.1. Message Generation

Message Generation enables you to inject your recipient list, template, and message content separately, using the HTTP protocol. It takes these components of a transmission and generates personalized messages for each recipient. The generation and transmission of messages is triggered by the REST API interface.

You must choose to enable Message Generation during installation. It can be configured to run on a stand-alone or cluster installation. In a cluster configuration, it is not necessary for all nodes to load the message generation module, nor is it necessary for those that do load that module to participate in message generation. For example, you may want to have a node (such as the Manager) solely for establishing a [quorum](glossary.php#gloss.quorum "Quorum"), but not for generating messages.

| [Prev](roles_behaviors.php)  | [Up](p.intro.php) |  [Next](licensed_features.adaptive.delivery.php) |
| Chapter 3. Roles and Behaviors  | [Table of Contents](index.php) |  4.2. Adaptive Delivery |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)