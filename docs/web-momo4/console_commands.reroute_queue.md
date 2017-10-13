<a name="console_commands.reroute_queue"></a>
## Name

reroute queue — move messages from queues of one domain to queues of the other

## Synopsis

`reroute queue` { *`domain_name1`* } { *`domain_name2`* }

<a name="idp12023472"></a>
## Description

The **reroute queue**       command requires two domain names as its arguments. It will move messages from queues of the first domain to the queues of the second domain.

```
10:47:35 /tmp/2025> reroute queue relay.com newrelay.com
Moved 100 messages from 'relay.com' to 'newrelay.com'
```

| [Prev](console_commands.reopen_logs.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.show_inbound.php) |
| reopen logs  | [Table of Contents](index.php) |  show inbound |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)