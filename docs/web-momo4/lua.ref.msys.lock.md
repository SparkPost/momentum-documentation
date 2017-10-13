<a name="lua.ref.msys.lock"></a>
## Name

msys.lock — The current running OS level thread obtains a lock on the named mutex

<a name="idp16198992"></a>
## Synopsis

`msys.lock(mutexname);`

`mutexname: string`<a name="idp16201952"></a>
## Description

The current running OS level thread obtains a lock on the named mutex. The caller is responsible for releasing the lock at the earliest appropriate opportunity. Note that the lock is not automatically released when the script is de-scheduled (for example, via `msys.sleep`, `msys.readfile` or the `msys.db.query` functions), so exercise caution.

For example code see [thread.mutex](lua.ref.thread.mutex.php "thread.mutex").

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

<a name="idp16207792"></a>
## See Also

[msys.unlock](lua.ref.msys.unlock.php "msys.unlock")

| [Prev](lua.ref.msys.idn_utf8.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.parseRFC2822Addresses.php) |
| msys.idn.to_utf8  | [Table of Contents](index.php) |  msys.parseRFC2822Addresses |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)