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

| Chapter 30. MM7 Server Received Message Validation Hook |
| [Prev](MM7ServerReceivedMessageHook.examples.php)  | Part III. MM7 Hooks |  [Next](MM7ServerReceivedMessageValidationHook.interface.php) |

## Chapter 30. MM7 Server Received Message Validation Hook

**Table of Contents**

<dl class="toc">

<dt>[30.1\. Purpose](MM7ServerReceivedMessageValidationHook.php#MM7ServerReceivedMessageValidationHook.purpose)</dt>

<dt>[30.2\. Interface](MM7ServerReceivedMessageValidationHook.interface.php)</dt>

<dt>[30.3\. Examples](MM7_Server_Received_Message_Validation_Hook.examples.php)</dt>

</dl>

## 30.1. Purpose

The MM7 Server Received Message Validation Hook actually utilizes the Momentum's validate_data_spool_each_rcpt hook point to enable the user to inspect the incoming MM7 request and perform context validation on a per-recipient basis, for example, performing a anti-virus check. This hook is invoked once during ec_message generation for each intended recipient of the request. To implement this hook, the user must implement the validate_data_spool_each_rcpt hook and put all the validation logic for the MM7 request into a control block for MM7 protocol only. See the examples in [Section 30.3, “Examples”](MM7_Server_Received_Message_Validation_Hook.examples.php "30.3. Examples"). Logic outside of the protocol check block will affect all incoming requests in other protocols.

| [Prev](MM7ServerReceivedMessageHook.examples.php)  | [Up](p.mm7.php) |  [Next](MM7ServerReceivedMessageValidationHook.interface.php) |
| 29.3. Examples  | [Table of Contents](index.php) |  30.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)