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

| showqueue |
| [Prev](console_commands.show_outbound.php)  | 12.2. System Console Commands |  [Next](console_commands.shutdown.php) |

<a name="console_commands.showqueue"></a>
## Name

showqueue — show queue information

## Synopsis

`showqueue` [ binding *`binding_name`* ] { *`domain_name`* } [ *`limit,offset`* ]

<a name="idp10067712"></a>
## Description

The **showqueue** command is used to list the messages in the queue for a particular domain. The first optional argument is the binding name. If no binding is specified, the default binding will be used. A domain name must be specified. The final optional argument is a "maximum" to show and an "offset" at which to start displaying. This argument defaults to "100,0" if omitted.

To display all the bindings on a domain execute the command **showqueue binding all *`example.com`***                             .

The output from the domain example.com which has one message in the active queue and one in the delayed queue, both destined to leave via the default binding, might look as follows:

```
10:47:35 /tmp/2025> showqueue example.com
[active/default] B3/1D-18426-471AACF3 Created: 1070244212
  From: <sender@postalengine.com> To: <rcpt1@example.com>
[delayed/default] B3/79-18426-4A4BACF3 Created: 1070244212
  From: <sender@postalengine.com> To: <rcpt2@example.com>
```

you can also list the messages in the queue for a particular domain on a particular binding by specifying a binding name as shown in the following example:

**Configuration Change. ** This feature is available starting from Momentum 2.2.

```
10:47:35 /tmp/2025> showqueue binding smtp-01 example.com
[active/smtp-01] 00/00-21047-B5581944 Created: 1150387547
  From: <sender@example.com> To: <rcpt2@example.com>
[delayed/smtp-01] 10/00-21047-B5581944 Created: 1150387547
  From: <sender@example.com> To: <rcpt1@example.com>
```

| [Prev](console_commands.show_outbound.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.shutdown.php) |
| show outbound  | [Table of Contents](index.php) |  shutdown |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)