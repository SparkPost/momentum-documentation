| msys.unlock |
| [Prev](lua.ref.msys.type.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.session_request_url_get.php) |

<a name="lua.ref.msys.unlock"></a>
## Name

msys.unlock — Release a lock obtained via msys.lock

<a name="idp16437168"></a>
## Synopsis

`msys.unlock(mutexname);`

`mutexname: string`<a name="idp16440128"></a>
## Description

Releases a lock obtained via msys.lock. **This function must be called from the same OS level thread that obtained it.** 

For example code see [thread.mutex](lua.ref.thread.mutex.php "thread.mutex").

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

<a name="idp16445152"></a>
## See Also

[msys.lock](lua.ref.msys.lock.php "msys.lock")

| [Prev](lua.ref.msys.type.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.session_request_url_get.php) |
| msys.type  | [Table of Contents](index.php) |  session:request_url_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)