<a name="console_commands.dig"></a>
## Name

dig — submit a domain for DNS MX query

## Synopsis

`dig` [ *`domain`* ]

<a name="idp12047008"></a>
## Description

This command submits a domain for DNS MX query.

```
10:47:35 /tmp/2025> dig mail.omniti.com
submitted
```

### Note

This console command manipulates the *route cache* , and likewise with the [domain](console_commands.domain.php "domain") and [refresh domain](console_commands.refresh_domain.php "refresh domain") commands. The *DNS cache* , as manipulated by the [dns_cache](console_commands.dns_cache.php "dns_cache") series of console commands.

| [Prev](console_commands.delayed.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.dns_cache.php) |
| delayed  | [Table of Contents](index.php) |  dns_cache |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)