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

| 26.7. mailingrules |
| [Prev](rest.autogen.map.linktypes.php)  | Chapter 26. REST Mappings |  [Next](rest.autogen.map.mailingstates.php) |

## 26.7. mailingrules

This mapping relates to [Section 25.2, “campaign”](rest.autogen.struct.campaign.php "25.2. campaign"), [Section 25.15, “mailing”](rest.autogen.struct.mailing.php "25.15. mailing")

*   **0** (none) – No rule is set, or is applicable.

*   **1** (byopen) – The winning segment is determined using the "open" volume.

*   **2** (byclick) – The winning segment is determined using the "click" volume.

*   **3** (recurrent1stonly) – Recurrent mailings will not be sent to the same recipient more than once.

*   **4** (recurrentall) – Recurrent mailings will be sent to all eligible recipients, regardless of whether they have already received a copy of an earlier occurrence of that mailing.

| [Prev](rest.autogen.map.linktypes.php)  | [Up](rest.autogen.map.php) |  [Next](rest.autogen.map.mailingstates.php) |
| 26.6. linktypes  | [Table of Contents](index.php) |  26.8. mailingstates |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)