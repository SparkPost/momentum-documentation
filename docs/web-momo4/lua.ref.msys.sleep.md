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

| msys.sleep |
| [Prev](lua.ref.msys.runinpool.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.snmpTrap.php) |

<a name="lua.ref.msys.sleep"></a>
## Name

msys.sleep — When called in the scheduler thread, suspend the current session for the specified duration

<a name="idp16385984"></a>
## Synopsis

`msys.sleep(duration_in_seconds);`

`duration_in_seconds: number`<a name="idp16388976"></a>
## Description

When called in the scheduler thread, this function suspends the current session for the specified duration. When called in a secondary thread, or if called on the scheduler thread and suspension is not possible, this function blocks the calling thread for the specified duration in seconds.

<a name="lua.ref.msys.sleep.example"></a>

**Example 70.34. msys.sleep example**

`msys.sleep(0.2)`

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

| [Prev](lua.ref.msys.runinpool.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.snmpTrap.php) |
| msys.runInPool  | [Table of Contents](index.php) |  msys.snmpTrap |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)