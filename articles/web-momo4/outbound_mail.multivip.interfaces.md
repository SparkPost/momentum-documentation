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

| 25.3. MultiVIP© Interfaces |
| [Prev](outbound_mail.prohibited.hosts.php)  | Chapter 25. Configuring Outbound Mail Delivery |  [Next](outbound_mail.traffic.shaping.php) |

## 25.3. MultiVIP© Interfaces

<a class="indexterm" name="idp3618464"></a>![](images/multivip.png)

MultiVIP© technology allows Momentum to transparently deliver different messages from different IP addresses. This is most commonly used when two or more customers are sending mail through a single Momentum instance, and it is desirable (for quality of service reasons) for messages from each client to originate from unique IP addresses that have been assigned to them.

Many ISPs enforce policies on an IP level. This means that if a message from IP address 1.2.3.4 violates the terms of the ISP's service, the ISP may choose to stop accepting mail from that IP address. Obviously, it is undesirable for a foreign decision refusing one client's emails to degrade the quality of service of an unrelated client. By assigning client 1 the IP address 1.2.3.4 and client 2 the IP address 1.2.3.5 and dictating that all messages from each client leave Momentum from their assigned IP address, the likelihood of policy enforcement against client 1 inadvertently effecting client 2 is drastically reduced. MultiVIP© is a mechanism for adding IP addresses for transit to Momentum and specifying which messages should leave the system from each IP address.

### 25.3.1. Configuration

Setting up a MultiVIP© interface is a two-step process:

1.  In your configuration file, use the `bindings` stanza to declare the interfaces to bind to (called "Bindings"). A binding declaration is required for every interface to which you want to bind messages. For details, see [binding](conf.ref.binding.php "binding").

2.  Set the rules or "policy" to inform Momentum as to which messages should transit which bindings. For details, see [Chapter 62, *Implementing Policy with Momentum*](policy.php "Chapter 62. Implementing Policy with Momentum") .

Messages that are not assigned to a specific binding will fallback to the `default` binding. Ensure that this fallback binding meets your needs. For details, see [the section called “`default` Binding”](conf.ref.binding.php#conf.ref.binding.default "default Binding").

### Warning

When using bindings, Momentum binds the local side of SMTP connections to the IP address specified. This can potentially impact deliverability if the local source IP address has no route to the destination IP address.

For example, if the delivery of a message requires contacting a machine on a private network (for a multi-homed machine) and the global and all explicit bindings are specified as public IP addresses, it is likely that these internally destined messages will be undeliverable.

Binding names are case-sensitive. Spaces and colons are not allowed in binding names.

### 25.3.2. Removing a Binding

When you are removing a binding that is in use, do the following:

1.  Examine the binding assignment to determine if there are any policy settings associated with the binding.

2.  If there are no policy settings, suspend the binding and apply the configuration changes. For information about suspending a binding, see [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery").

3.  Examine the mail queue. If there is mail for the suspended binding, reassign it to another binding. If the queued messages are not reassigned to another binding, they will go to the `default` binding. For more information, see [showqueue](console_commands.showqueue.php "showqueue") and [reroute queue](console_commands.reroute_queue.php "reroute queue").

4.  Once all reassigned messages are out of the queue, restart ecelerity to fully remove the binding from the configuration.

| [Prev](outbound_mail.prohibited.hosts.php)  | [Up](outbound_mail.php) |  [Next](outbound_mail.traffic.shaping.php) |
| 25.2. Prohibited_Hosts  | [Table of Contents](index.php) |  25.4. Throttling and Traffic Shaping |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)