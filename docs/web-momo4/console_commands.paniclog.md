<a name="console_commands.paniclog"></a>
## Name

paniclog — show last several entries written to paniclog

## Synopsis

`paniclog`

<a name="idp11465552"></a>
## Description

Momentum maintains, in memory, the last several messages that were written to the paniclog. This command will display the last 10 messages seen on each log level (see the [debug_flags](conf.ref.debug_flags.php "debug_flags") for details).

```
10:47:35 /tmp/2025> paniclog
[Sun 30 Nov 2003 10:31:37] [serious] Validating software license.
[Sun 30 Nov 2003 10:31:37] [serious] Validated MAC address 00:01:02:34:4b:b3
[Sun 30 Nov 2003 10:31:37] [serious] Licensed unlimited MultiVIP bindings.
[Sun 30 Nov 2003 10:31:37] [serious] Valid license.
[Sun 30 Nov 2003 10:31:37] [serious] ndbm_cache initialized
```

| [Prev](console_commands.pager.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.pid.php) |
| \pager  | [Table of Contents](index.php) |  pid |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)