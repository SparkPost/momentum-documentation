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
