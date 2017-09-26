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

| domain all |
| [Prev](console_commands.domain.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.fail_domain.php) |

<a name="console_commands.domain_all"></a>
## Name

domain all — show statistics for all domains

## Synopsis

`domain all`

<a name="idp14072816"></a>
## Description

The **domain all**     command shows statistics for all domains. Sample output is shown below:

```
04:59:52 /tmp/2025> domain all
Domain summary:
Domain:                    macbook.lan  C:  0  A:      0  D:     8  S:     0
Domain:                      yahoo.com  C:  1  A:      1  D:     0  S:     1
Totals: C:   1  A:      1  D:     8  S:     1
```

The output shows a summary for each domain stanza defined in your configuration file and totals for all domains. The name of the domain is followed by the number of connections, the items in the active and the delayed queues and the successful deliveries.

You can use the command **domains** as an alias for **domain all** . See also [domain](console_commands.domain.php "domain").

| [Prev](console_commands.domain.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.fail_domain.php) |
| domain  | [Table of Contents](index.php) |  fail domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)