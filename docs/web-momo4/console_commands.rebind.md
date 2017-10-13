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