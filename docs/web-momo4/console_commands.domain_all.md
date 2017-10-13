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