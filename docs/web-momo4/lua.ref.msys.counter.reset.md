<a name="lua.ref.msys.counter.reset"></a>
## Name

msys.counter.reset — Reset a counter

<a name="idp17866480"></a>
## Synopsis

`msys.counter.reset(object_or_path);`

`object_or_path: mixed`<a name="idp17869408"></a>
## Description

Resets the given counter object or counter associated with the given path to `0`. If the supplied counter path does not have a counter associated with it, then it is created with strict semantics.

Enable this function with the statement `require('msys.counter');`.

You can also use the [counter](console_commands.counter.php "counter") console command to display and manipulate counters.

<a name="idp17873904"></a>
## See Also

[msys.counter.inc](lua.ref.msys.counter.inc.php "msys.counter.inc"), [msys.counter.add](lua.ref.msys.counter.add.php "msys.counter.add"), [msys.counter.open](lua.ref.msys.counter.open.php "msys.counter.open"), [msys.counter.unlink](lua.ref.msys.counter.unlink.php "msys.counter.unlink")

| [Prev](lua.ref.msys.counter.read.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.counter.unlink.php) |
| msys.counter.read  | [Table of Contents](index.php) |  msys.counter.unlink |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)