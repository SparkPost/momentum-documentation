<a name="console_commands.message_retry"></a>
## Name

message retry — perform an immediate delivery attempt on a message

## Synopsis

`message retry` { *`message_id`* }

<a name="idp7296864"></a>
## Description

This command takes a message ID as an argument and forces an immediate delivery attempt by placing it in the active queue for the appropriate domain.

```
10:47:35 /tmp/2025> message retry 53/6B-18426-1AAEACF3
Message requeued for delivery
```

| [Prev](console_commands.message_fail_quiet.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.module.php) |
| message fail quiet  | [Table of Contents](index.php) |  module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)