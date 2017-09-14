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

| mailq |
| [Prev](console_commands.help.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.memory.php) |

<a name="console_commands.mailq"></a>
## Name

mailq — show the status of the mail queues

## Synopsis

`mailq` [ --domain | -d *`domain_name`* ... ] [ --binding | -b *`binding_name`* ... ] [ --limit | -l *`number`* ]

<a name="idp14813776"></a>
## Description

When issued with no arguments this command shows counts for the active queue and the delayed queues sorted by binding groups and bindings. Sample output is shown below:

```
Group/Binding                                       Domain      AQ      DQ
--------------------------------------------------------------------------
default/default                                  yahoo.com      11       0
default/gmail                                    gmail.com      25       5
default/#mmove                                   gmail.com       0       0
```

The `Group/Binding` column shows the group and the binding that a domain belongs to. The `default/#move` entry under the `Group/Binding` column is the cluster message movement binding in the `default` binding. This is a virtual binding for moving messages between nodes. `AQ` shows the items in the active queue and `DQ` shows the items in the delayed queue.

Use this command with the `--domain` *`domain_name`* argument to show the statistics for a specific domain. Any number of domains may be specified. The `--binding` option is used in the same way. Limit the output by using the --limit *`number`* option. The default value for `--limit` is `20`.

| [Prev](console_commands.help.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.memory.php) |
| help  | [Table of Contents](index.php) |  memory |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)