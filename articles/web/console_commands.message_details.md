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

| message details |
| [Prev](console_commands.memory.php)  | 12.2. System Console Commands |  [Next](console_commands.message_fail.php) |

<a name="console_commands.message_details"></a>
## Name

message details — show detailed message information

## Synopsis

`message details` [ *`full | body`*         ] { *`message_id`* }

<a name="idp9854576"></a>
## Description

While all messages are stored on disk in the spool and can be manually inspected there, Momentum also provides a mechanism to view message details from within the console.

Given a message id, you can request the metadata details on that message, the body of the message (including headers) or the metadata concatenated with the body (including headers).

To show just the metadata, issue the command with the message id as a single parameter.

```
10:47:35 /tmp/2025> message details 53/6B-18426-1AAEACF3
Message: 53/6B-18426-1AAEACF3
Message Type: full message
               Created: 2003-12-01 02:15:45
          Next Attempt: 2003-12-01 18:11:25
               Retries: 5
          Received Via: SMTP 10.0.0.103 (IPv4)
                Sender: sender-849629@senderdomain.com
             Recipient: someaddress@example.com
                  Code: 451 No valid hosts (too many connection failures)
                  Size: 11317
```

If only the body is desired, then the command should take the form:

`message details body 53/6B-18426-1AAEACF3`

If both the metadata and the body are desired, the "full" option should be used:

`message details full 53/6B-18426-1AAEACF3`
### Note

`message details` cannot show details for a message that is in the process of being delivered.

| [Prev](console_commands.memory.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.message_fail.php) |
| memory  | [Table of Contents](index.php) |  message fail |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)