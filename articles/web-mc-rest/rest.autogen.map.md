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

| Chapter 26. REST Mappings |
| [Prev](rest.autogen.struct.spamcheck3.5.php)  |   |  [Next](rest.autogen.map.contactstatus.php) |

## Chapter 26. REST Mappings

**Table of Contents**

<dl class="toc">

<dt>[26.1\. bouncetypes](rest.autogen.map.php#rest.autogen.map.bouncetypes)</dt>

<dt>[26.2\. contactstatus](rest.autogen.map.contactstatus.php)</dt>

<dt>[26.3\. contenttypes](rest.autogen.map.contenttypes.php)</dt>

<dt>[26.4\. datatypes](rest.autogen.map.datatypes.php)</dt>

<dt>[26.5\. linkgroups](rest.autogen.map.linkgroups.php)</dt>

<dt>[26.6\. linktypes](rest.autogen.map.linktypes.php)</dt>

<dt>[26.7\. mailingrules](rest.autogen.map.mailingrules.php)</dt>

<dt>[26.8\. mailingstates](rest.autogen.map.mailingstates.php)</dt>

<dt>[26.9\. mailingtypes](rest.autogen.map.mailingtypes.php)</dt>

<dt>[26.10\. recordstatustypes](rest.autogen.map.recordstatustypes.php)</dt>

<dt>[26.11\. targetcriteriaclass](rest.autogen.map.targetcriteriaclass.php)</dt>

<dt>[26.12\. targetcriteriatypes](rest.autogen.map.targetcriteriatypes.php)</dt>

<dt>[26.13\. typeofmailings](rest.autogen.map.typeofmailings.php)</dt>

</dl>

This chapter describes the possible values for REST struct fields with a data type of `map`.

## 26.1. bouncetypes

This mapping relates to [Section 25.26, “report.segmentstatistics”](rest.autogen.struct.report.segmentstatistics.php "25.26. report.segmentstatistics")

*   **10** (Hard Bounce) – bounce type is Hard Bounce

*   **20** (Soft Bounce - General) – bounce type is Soft Bounce - General

*   **21** (Soft Bounce - DNS Failure) – bounce type is Soft Bounce - DNS Failure

*   **22** (Soft Bounce - Mailbox Full) – bounce type is Soft Bounce - Mailbox Full

*   **23** (Soft Bounce - Message Size Too Large) – bounce type is Soft Bounce - Message Size Too Large

*   **24** (Soft Bounce - Message Timed Out) – bounce type is Soft Bounce - Message Timed Out

*   **25** (Soft Bounce - Failed Administratively) – bounce type is Soft Bounce - Failed Administratively

*   **30** (Bounce - No Email Address) – bounce type is Bounce - No Email Address

*   **40** (General Bounce) – bounce type is General Bounce

*   **50** (Mail Block - General) – bounce type is Mail Block - General

*   **51** (Mail Block - Known Spammer) – bounce type is Mail Block - Known Spammer

*   **52** (Mail Block - Spam Content Detected) – bounce type is Mail Block - Spam Content Detected

*   **53** (Mail Block - Attachment Detected) – bounce type is Mail Block - Attachment Detected

*   **54** (Mail Block - Relaying Denied) – bounce type is Mail Block - Relaying Denied

*   **60** (Auto Reply) – bounce type is Auto Reply

*   **70** (Transient Bounce) – bounce type is Transient Bounce

*   **80** (Subscribe Request) – bounce type is Subscribe Request

*   **90** (Unsubscribe Request) – bounce type is Unsubscribe Request

*   **100** (Challenge-Response Message) – bounce type is Challenge-Response Message

*   **1** (Undetermined) – bounce type is Undetermined

| [Prev](rest.autogen.struct.spamcheck3.5.php)  |   |  [Next](rest.autogen.map.contactstatus.php) |
| 25.27. spamcheck 3.5  | [Table of Contents](index.php) |  26.2. contactstatus |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)