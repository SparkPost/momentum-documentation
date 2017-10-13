| msys.config |
| [Prev](lua.ref.msys.cast.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.dnslookup.php) |

<a name="lua.ref.msys.config"></a>
## Name

msys.config — Set or get configuration values

<a name="idp16055168"></a>
## Synopsis

`msys.config(action, parameters);`

```
action: string
parameters: string
```
<a name="idp16058160"></a>
## Description

Corresponds to the [config](console_commands.config.php "config") system console command, and can be used to get or set configuration values. For example:

```
local mob, tmob = msys.config("get", "max_outbound_connections");
local ymob, tymob = msys.config("get", "domain", "yahoo.com", "max_outbound_connections");
```

This function returns two values:

*   The value of the configuration option

*   The textual output from the command (what you would have seen had you typed it via ec_console)

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

| [Prev](lua.ref.msys.cast.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.dnslookup.php) |
| msys.cast  | [Table of Contents](index.php) |  msys.dnsLookup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)