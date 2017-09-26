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

| 4.6. MultiVIP© Interfaces |
| [Prev](operations.logging.php)  | Chapter 4. Operations |  [Next](policy.php) |

## 4.6. MultiVIP© Interfaces

<a class="indexterm" name="idp2908864"></a>![](images/multivip.png)

MultiVIP© technology allows Momentum to transparently deliver different messages from different IP addresses. This is most commonly used when two or more customers are sending mail through a single Momentum instance and it is desirable (for quality of service reasons) for messages from each client to originate from unique IP addresses that have been assigned to them.

Many ISPs enforce policies on an IP level. This means that if a message from IP address 1.2.3.4 violates the terms of their service, they may choose to stop accepting mail from that IP address. Obviously, it is undesirable for a foreign decision refusing one client's emails to degrade the quality of service of an unrelated client. By assigning client 1 the IP address 1.2.3.4 and client 2 the IP address 1.2.3.5 and dictating that all messages from each client leave Momentum from their assigned IP address, the likelihood of policy enforcement against client 1 inadvertently effecting client 2 is drastically reduced. MultiVIP© is a mechanism for adding IP addresses for transit to Momentum and specifying which messages should leave the system from each IP address.

Setting up a MultiVIP© interface is a two-step process. First you must declare the interfaces to bind to (called "Bindings"), then rules must be put in place to let Momentum know which messages should transit which bindings.

### 4.6.1. Declaring Bindings

Binding *`BINDINGNAME`* {
  Bind_Address = <address>
 [EHLO_Hostname = <__message__|__hostname__|literal string>]
 [Max_Outbound_Connections = <number>]
 [Suspend_Delivery = <true|false>]
}

A binding declaration needs to be made for every interface you want to bind messages to.

### Warning

When using bindings, Momentum binds the local side of SMTP connections to the IP address specified. This can potentially impact deliverability if the local source IP address has no route to the destination IP address.

For example, if the delivery of a message requires contacting a machine on a private network (for a multi-homed machine) and the global and all explicit bindings are specified as public IP addresses, it is likely that these internally destined messages will be undeliverable.

You should also be aware that binding names are case-sensitive.

For more information about bindings, see [binding](conf.ref.binding.php "binding").

| [Prev](operations.logging.php)  | [Up](operations.php) |  [Next](policy.php) |
| 4.5. Logging  | [Table of Contents](index.php) |  Chapter 5. Implementing Policy with Momentum |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)