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

| rebind |
| [Prev](console_commands.pid.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.refresh_domain.php) |

<a name="console_commands.rebind"></a>
## Name

rebind — rebind the messages in a binding or domain

## Synopsis

`rebind` { *`binding_name`* } [ *`domain_name`* ]

<a name="idp13855360"></a>
## Description

The **rebind** command directs Momentum to re-evaluate the binding assignment of the messages in the specified binding or domain. Typically this is performed when an online change to binding assignments has been made and the administrator wishes to have it apply retroactively to messages already in the system without a reboot.

For example, the following command could be used to rebind all the messages currently in the TEST binding.

```
10:47:35 /tmp/2025> rebind TEST
Rebound 62415 messages.
```

You could also rebind all messages across all bindings:

```
10:47:35 /tmp/2025> rebind all
Rebound 69497 messages.
```

Or messages on a particular domain/binding combination:

```
10:47:35 /tmp/2025> rebind TEST aol.com
Rebound 952 messages.
```

This command can take a long time to complete if you have a large number of messages eligible for rebinding. Please use with prudence on production systems.

| [Prev](console_commands.pid.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.refresh_domain.php) |
| pid  | [Table of Contents](index.php) |  refresh domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)