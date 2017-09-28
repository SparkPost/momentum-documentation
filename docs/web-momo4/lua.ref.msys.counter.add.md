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

| msys.counter.add |
| [Prev](lua.ref.msys.commtouch.diagnose.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.counter.inc.php) |

<a name="lua.ref.msys.counter.add"></a>
## Name

msys.counter.add — Add to the current value of the specified counter

<a name="idp17778752"></a>
## Synopsis

`msys.counter.add(object_or_path, delta);`

```
object_or_path: mixed
delta: number
```
<a name="idp17781712"></a>
## Description

The first argument is either a path to a counter (for example, `/sites/site_name/errors`) or a counter object that was returned by `msys.counter.open`. If a string is provided containing the path to a counter that does not exist, the counter is created with STRICT semantics. The second argument is atomically added to the current value of the counter.

Enable this function with the statement `require('msys.counter');`. For a code example, see [Example 70.54, “msys.counter.read example”](lua.ref.msys.counter.read.php#lua.ref.msys.counter.read.example "Example 70.54. msys.counter.read example").

You can also use the [counter](console_commands.counter.php "counter") console command to display and manipulate counters.

<a name="idp17787376"></a>
## See Also

[msys.counter.reset](lua.ref.msys.counter.reset.php "msys.counter.reset"), [msys.counter.inc](lua.ref.msys.counter.inc.php "msys.counter.inc"), [msys.counter.open](lua.ref.msys.counter.open.php "msys.counter.open"), [msys.counter.unlink](lua.ref.msys.counter.unlink.php "msys.counter.unlink")

| [Prev](lua.ref.msys.commtouch.diagnose.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.counter.inc.php) |
| msys.commtouch.diagnose  | [Table of Contents](index.php) |  msys.counter.inc |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)