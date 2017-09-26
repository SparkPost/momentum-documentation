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

| Chapter 5. Implementing Policy with Momentum |
| [Prev](operations.multivip.php)  | Part I. Configuration Guide |  [Next](policy.validation.php) |

## Chapter 5. Implementing Policy with Momentum

**Table of Contents**

<dl class="toc">

<dt>[5.1\. Validation and the Validation Context](policy.validation.php)</dt>

<dt>[5.2\. Implementing Policy Using Scriptlets](implementing.policy.scriptlets.php)</dt>

<dt>[5.3\. Default Policy Scriptlets](default.policy.scriptlets.php)</dt>

<dt>[5.4\. Implementing Policy Using Sieve](policy.implementing.php)</dt>

<dt>[5.5\. Setting Context Based on Connecting IP](policy.context-based-on-ip.php)</dt>

<dt>[5.6\. Best Practices for Manually Created Policy Scripts](policy.best.practices.php)</dt>

<dt>[5.7\. Conclusion](policy.conclusion.php)</dt>

</dl>

<a class="indexterm" name="idp2924496"></a><a name="policy.flow-diagram"></a>

**Figure 5.1. Mail flow through Momentum**

![](images/ecelerity-flow.png)

In order to effectively implement your site policy in Momentum, it is important to understand how mail transits through Momentum. [Figure 5.1, “Mail flow through Momentum”](policy.php#policy.flow-diagram "Figure 5.1. Mail flow through Momentum") gives a visual representation that will be useful in the following discussion.

Momentum waits for connections to be made to its ESMTP Listener. Once a connection has been made, the SMTP session undergoes a validation process, which allows you to perform various validation checks at each stage of the SMTP conversation. These validation checks can be passive (collecting information) or active (perhaps terminating the connection).

Once a message has passed all the validation checks, it is sent to the IO layer, which attempts to journal the message to the spool. Once the message is successfully stored in the spool, an acknowledgment is returned to the sender, and the message is enqueued to the delivery subsystem.

The delivery subsystem looks at each message to decide which MultiVIP© binding will be used for outbound delivery. It then determines the domain for the recipient and attempts to connect to the domain's mail exchange and deliver the mail onwards.

| [Prev](operations.multivip.php)  | [Up](p.guide.php) |  [Next](policy.validation.php) |
| 4.6. MultiVIP© Interfaces  | [Table of Contents](index.php) |  5.1. Validation and the Validation Context |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)