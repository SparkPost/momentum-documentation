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

| 6.5. Response |
| [Prev](msc.server.request.php)  | Chapter 6. Message Scope Server |  [Next](msc.server.client.handling.php) |

## 6.5. Response

If the server is unable to find data to send to the client, it responds with NO and disconnects. The client SHOULD wait at least 30 seconds before initiating a new request if it receives this response.

In the case that data is available for the client, the server sends a short header describing the data, followed by the data itself. The header looks like: SIZE:[N] MD5:[H], where:

*   `N` – Number of bytes that will be sent after the header. The client MUST validate that the amount of data it received matches this number. If it receives more or less data, it SHOULD NACK and MUST disconnect.

*   `H` – An MD5 hash of the data that is to be sent. The client MUST validate that an MD5 hash of the received data matches the hash provided here. If it does not, the client SHOULD NACK and MUST disconnect.

There are no format guarantees on the data coming after this header; however, the server MUST not make any changes to the data when calculating the size and hash, nor shall it make intentional changes in transit of the data.

| [Prev](msc.server.request.php)  | [Up](msc.server.php) |  [Next](msc.server.client.handling.php) |
| 6.4. Request  | [Table of Contents](index.php) |  6.6. Client Handling of Data |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)