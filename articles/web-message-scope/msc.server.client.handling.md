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

| 6.6. Client Handling of Data |
| [Prev](msc.server.response.php)  | Chapter 6. Message Scope Server |  [Next](msc.server.protocol.termination.php) |

## 6.6. Client Handling of Data

After the data is sent to the client, the client has 60 seconds to reply with an ACK to acknowledge successful transmission of the data. Before replying with an ACK, the client must first verify both data constraints detailed in [Section 6.5, “Response”](msc.server.response.php "6.5. Response"). The client must then successfully process the data in whatever manner is fit. If any errors occur in processing, or the client determines that the data are not meaningful, the client MUST NOT reply with an ACK. The client MUST disconnect if it determines that it cannot reply with an ACK. To alleviate server resources, the client MAY reply with NACK if any error condition is encountered. The server will then reply with FAIL and disconnect, instead of waiting for the 60 second timeout or relying on reading from a closed pipe.

| [Prev](msc.server.response.php)  | [Up](msc.server.php) |  [Next](msc.server.protocol.termination.php) |
| 6.5. Response  | [Table of Contents](index.php) |  6.7. Successful Protocol Termination |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)