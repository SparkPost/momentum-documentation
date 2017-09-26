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

| 14.41. pickup – MS SMTP Service Style "Pickup" module (Windows only, now deprecated) |
| [Prev](modules.persistio.php)  | Chapter 14. Modules Reference |  [Next](modules.pipeio.php) |

## 14.41. pickup – MS SMTP Service Style "Pickup" module (Windows only, now deprecated)

<a class="indexterm" name="idp12470592"></a>

The Pickup module implements similar functionality to its namesake in the Microsoft SMTP Service component of IIS. Loading this module will cause Momentum to monitor a so-called "pickup" directory for files; for each file that it finds, it will parse the From:, To: and Cc: headers to build up a sender and recipient list, inject the message into the spool and attempt to deliver it. Once the file has been successfully parsed and placed into the spool, Momentum will delete the original file from the "pickup" directory.

### 14.41.1. Configuration

There is a single configuration directive that informs Momentum which directory it should monitor. The default is to use `\opt\ecelerity\var\spool\ecelerity\pickup`, which is created for you by the installer. If the pickup directory does not exist, Momentum will refuse to start.

```
Module generic/pickup pickup {
	pickup_path = /opt/ecelerity/var/spool/ecelerity/pickup
}
```

| [Prev](modules.persistio.php)  | [Up](modules.php) |  [Next](modules.pipeio.php) |
| 14.40. persist_io – Persistent IO Wrapper  | [Table of Contents](index.php) |  14.42. pipe_io – Pipe IO Wrapper |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)