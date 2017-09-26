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

| flush domain |
| [Prev](console_commands.fingerprint_rejection_summary.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.help.php) |

<a name="console_commands.flush_domain"></a>
## Name

flush domain — perform delivery attempt on delayed queue of a domain

## Synopsis

`flush domain` { *`domain_name`* }

<a name="idp13349184"></a>
## Description

The **flush domain**        command takes a domain name as an argument and immediately performs a delivery attempt for each message in the delayed queue.

Momentum has its own retry schedule based on the the number of previous attempts and the retry_interval configuration parameter (see Configuration section for details). Issuing this command will cause Momentum to disregard its internally calculated time to next retry for each message in the delayed queue and set it to "now."

If a remote domain (just-revived.com) has had delivery problems and has just come "back online," all messages to that domain could be immediately attempted by performing the following command:

```
10:47:35 /tmp/2025> flush domain just-revived.com
just-revived.com flushed.  12521 messages requeued.
```

You may substitute `all` for the domain name to apply to all domains.

| [Prev](console_commands.fingerprint_rejection_summary.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.help.php) |
| fingerprint rejection summary  | [Table of Contents](index.php) |  help |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)