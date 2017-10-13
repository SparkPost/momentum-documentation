| msys.counter.unlink |
| [Prev](lua.ref.msys.counter.reset.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.db.fetch_row.php) |

<a name="lua.ref.msys.counter.unlink"></a>
## Name

msys.counter.unlink — Unlink a counter

<a name="idp17881200"></a>
## Synopsis

`msys.counter.unlink(counter_path);`

`counter_path: string`<a name="idp17884128"></a>
## Description

This removes the counter from the global counter index. The handle will remain in the Lua counter cache for 5 minutes by default.

For a code example see [Example 70.54, “msys.counter.read example”](lua.ref.msys.counter.read.php#lua.ref.msys.counter.read.example "Example 70.54. msys.counter.read example").

Enable this function with the statement `require('msys.counter');`.

You can also use the [counter](console_commands.counter.php "counter") console command to display and manipulate counters.

<a name="idp17889760"></a>
## See Also

[msys.counter.inc](lua.ref.msys.counter.inc.php "msys.counter.inc"), [msys.counter.add](lua.ref.msys.counter.add.php "msys.counter.add"), [msys.counter.open](lua.ref.msys.counter.open.php "msys.counter.open"), [msys.counter.reset](lua.ref.msys.counter.reset.php "msys.counter.reset")

| [Prev](lua.ref.msys.counter.reset.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.db.fetch_row.php) |
| msys.counter.reset  | [Table of Contents](index.php) |  msys.db.fetch_row |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)