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

| 6.3. Banner |
| [Prev](msc.server.protocol.commands.php)  | Chapter 6. Message Scope Server |  [Next](msc.server.request.php) |

## 6.3. Banner

When the client connects to the GIMME server, a banner is printed stating the protocol version, the subcluster name and the node name on which the GIMME server is running. The banner looks like this: GIMME V:[N] SUBCLUSTER:[*`subcluster_name`*] NODE:[*`node_name`*]. In this example:

*   `N:` – Version of the GIMME protocol supported by the server. The client MUST parse the version and determine whether it is able to speak the specified version of the protocol. If it cannot, it MUST disconnect.

*   `subcluster_name` – The name of the subcluster to which the node running the GIMME server belongs. This name will always be `default` for servers running on the Momentum 2.2 platform.

*   `node_name` – The name of the node running the GIMME server.

The GIMME server supports a concurrent client limit. This theoretically helps mitigate issues caused by slow servers as Ingestor nodes will skip over a full GIMME server. If the number of currently connected clients is exceeded by the current client, the server will respond with FULL when it answers the connection, instead of with the standard GIMME banner.

| [Prev](msc.server.protocol.commands.php)  | [Up](msc.server.php) |  [Next](msc.server.request.php) |
| 6.2. Protocol Commands  | [Table of Contents](index.php) |  6.4. Request |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)