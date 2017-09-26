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

| fail domain |
| [Prev](console_commands.domain.php)  | 12.2. System Console Commands |  [Next](console_commands.fail_domain_quiet.php) |

<a name="console_commands.fail_domain"></a>
## Name

fail domain — fail messages for a domain with a bounce message

## Synopsis

`fail domain` { *`domain_name`* }

<a name="idp9720896"></a>
## Description

The **fail domain**        command allows the administrative failure of all messages bound for the specified domain. If political issues arise that cannot be resolved or if the domain has been discontinued, it may be necessary to fail all of the messages to that domain. All failed messages will be assigned the following administrative failure message: "554 Message manually purged."

For example, the following command could be used to fail all message for the domain unresolvableproblems.com.

```
10:47:35 /tmp/2025> fail domain unresolvableproblems.com
unresolvableproblems.com purged, 62415 messages failed.
```

Usually, the command is immediately proceded or followed by "blackholing" the domain by issuing a command such as:

`10:47:35 /tmp/2025> config set domain unresolvableproblems.com blackhole inline`<a name="idp9725648"></a>
## See Also

[fail domain quiet](console_commands.fail_domain_quiet.php "fail domain quiet")

| [Prev](console_commands.domain.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.fail_domain_quiet.php) |
| domain  | [Table of Contents](index.php) |  fail domain quiet |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)