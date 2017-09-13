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

| binding flush domain |
| [Prev](console_commands.binding_fail_domain_quiet.php)  | 12.2. System Console Commands |  [Next](console_commands.binding_summary.php) |

<a name="console_commands.binding_flush_domain"></a>
## Name

binding flush domain — perform delivery attempt on delayed queue of a domain on a binding

## Synopsis

`binding flush domain` { *`binding_name`* } { *`domain_name`* }

<a name="idp15454384"></a>
## Description

The **binding flush domain**              command takes a domain name and a binding name as arguments and immediately performs a delivery attempt for each message in the delayed queue for that domain/binding pair.

Momentum has its own reattempt schedule based on the the number of previous attempts and the retry_interval configuration parameter (see [retry_interval](conf.ref.retry_interval.php "retry_interval") for details). Issuing this command will cause Momentum to disregard its internally calculated time of next attempt for each message in the delayed queue and set it to "now."

If a remote domain (just-revived.com) has had delivery problems and has just come "back online," all messages to that domain on the binding BINDING1 could be immediately attempted by performing the following command:

```
10:47:35 /tmp/2025> binding flush domain BINDING1 just-revived.com
just-revived.com flushed.  12521 messages requeued.
```

You may substitute `all` for the domain name to apply to all domains.

<a name="idp15460064"></a>
## See Also

[message_expiration](conf.ref.message_expiration.php "message_expiration")

| [Prev](console_commands.binding_fail_domain_quiet.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.binding_summary.php) |
| binding fail domain quiet  | [Table of Contents](index.php) |  binding summary |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)