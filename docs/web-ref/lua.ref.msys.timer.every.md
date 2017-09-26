Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| msys.timer.every |
| [Prev](lua.ref.msys.timer.at.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.validate.dk.get_responsible_domain.php) |

<a name="lua.ref.msys.timer.every"></a>
## Name

msys.timer.every — execute closure every interval

<a name="idp27079984"></a>
## Synopsis

`msys.timer.every(interval, closure, name);`

```
interval: number
closure: string
name: string, optional
```
<a name="idp27082736"></a>
## Description

The returned timer is already scheduled when the function returns; no additional schedule call is required. The returned object is a timer object with the following methods:

*   timer:stop() – cancel the timer

*   timer:start() – reschedule the timer

*   timer:name() – return the name used when the timer was created

### Warning

The `stop` method is not thread-safe. Make sure that you only call `timer:stop` from the scheduler thread.

`name` is an optional parameter that can be interrogated from the timer using `timer:name()`. The name is simply a label associated with the instance; it is not a unique identifier for the event and can not be used to locate an event by name.

The garbage collection handler of the timer object will implicitly stop the timer so that dangling references are prevented. As a consequence the following code is incorrect: `msys.timer.after(10, do_something)` since the return value will be collectible immediately and will likely cancel the timer before it fires. Likewise, the following will fail for the same reasons: `local timer = msys.timer.after(10, do_something)`. Instead, use a global variable, or something traceable from a stronger reference to keep your timer instance alive.

The timed event callback function is called from the scheduler thread; you should avoid blocking or lengthy operations.

<a name="lua.ref.msys.timer.every.example"></a>

**Example 15.64. msys.timer.every example**

```
require("msys.core");
require 'msys.timer';

rep = msys.timer.every(2, function ()
  print("rep: I am the 2 second repeating timer")
end, "repeater")
```

Enable this function with the statements `require('msys.timer');` and `require("msys.core");`.

<a name="idp27097696"></a>
## See Also

[msys.timer.at](lua.ref.msys.timer.at.php "msys.timer.at"), [msys.timer.after](lua.ref.msys.timer.after.php "msys.timer.after")

| [Prev](lua.ref.msys.timer.at.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.validate.dk.get_responsible_domain.php) |
| msys.timer.at  | [Table of Contents](index.php) |  msys.validate.dk.get_responsible_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)