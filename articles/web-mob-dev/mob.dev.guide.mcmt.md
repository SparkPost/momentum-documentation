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

| Appendix A. The Multi-Channel Message Type (MCMT) |
| [Prev](MM7_Server_Received_Message_Validation_Hook.examples.php)  | Part III. MM7 Hooks |  [Next](mobility.mcmt.injection.php) |

## The Multi-Channel Message Type (MCMT)

**Table of Contents**

<dl class="toc">

<dt>[A.1\. The Multi-Channel Message Type (MCMT)](mob.dev.guide.mcmt.php#mobility.mcmt)</dt>

<dt>[A.2\. The MCMT Format](mobility.mcmt.injection.php)</dt>

</dl>

## A.1. The Multi-Channel Message Type (MCMT)

A MCMT message is a multi-part MIME message. A required part of a MCMT message is an email attachment (Content-Type: message/rfc2822). There are other optional parts with content suitable for delivery over non-email channels such as SMPP and/or MM7\. When an MCMT message is received, the core engine will only process the message/rfc2822 and, in fact removes all parts of the message that are are not message/rfc2822.

When the data payload is received, Momentum will recognize that a message is MCMT and adjust its internal representation. The `MCMT_Reception` option has three possible settings (see [The MCMT_Reception option](https://support.messagesystems.com/docs/web-mobility/mm7.mcmt_reception.php)). The value of this option determines how a MCMT message is handled. The following flow chart shows the different options.

<a name="figure.mcmt"></a>

**Figure A.1. MCMT message flow**

![MCMT message flow](images/mcmt.png)

A description of the format of a MCMT message follows.

| [Prev](MM7_Server_Received_Message_Validation_Hook.examples.php)  | [Up](p.mm7.php) |  [Next](mobility.mcmt.injection.php) |
| 30.3. Examples  | [Table of Contents](index.php) |  A.2. The MCMT Format |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)