| thread.mutex |
| [Prev](lua.ref.msys.validate.opendkim.verify.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.vctx_add_recipient.php) |

<a name="lua.ref.thread.mutex"></a>
## Name

thread.mutex — create a new mutex

<a name="idp19220608"></a>
## Synopsis

`thread.mutex(type);`

`type: integer, optional`<a name="idp19223584"></a>
## Description

Create a new mutex for coordinating access to critical sections. The optional parameter may be one of the following:

*   `thread.MUTEX_NORMAL` – this is the default value

*   `thread.MUTEX_RECURSIVE` – define a recursive lock. Returns a mutex object that supports "lock", "unlock" and "trylock" methods.

*   `thread.MUTEX_ERRORCHECK` – define an error-checking lock. Returns a mutex object that supports "lock", "unlock" and "trylock" methods.

This function returns a mutex object.

Example code follows:

```
counter_lock = thread.mutex()
counter = 0;

function counter_inc()
   counter_lock:lock()
   counter = counter + 1
   counter_lock:unlock()
end

function counter_get()
   local value
   counter_lock:lock()
   value = counter
   counter_lock:unlock()
   return value
end

-- Incrementing the counter will now have consistent results regardless of
-- which threads call this function
counter_inc()
print("value is", counter_get())
```

Enable this function with the statement `require('thread');`.

<a name="idp19233296"></a>
## See Also

[msys.runInPool](lua.ref.msys.runinpool.php "msys.runInPool"), [msys.sleep](lua.ref.msys.sleep.php "msys.sleep"), [msys.lock](lua.ref.msys.lock.php "msys.lock"), [msys.unlock](lua.ref.msys.unlock.php "msys.unlock")

| [Prev](lua.ref.msys.validate.opendkim.verify.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_add_recipient.php) |
| msys.validate.opendkim.verify  | [Table of Contents](index.php) |  vctx:add_recipient |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)