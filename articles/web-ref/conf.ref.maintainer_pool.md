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

| maintainer_pool |
| [Prev](conf.ref.mailfrom_timeout.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.malloc2mmap_threshold.php) |

<a name="conf.ref.maintainer_pool"></a>
## Name

maintainer_pool — configure mail queues, DNS lookup and module events to use multiple threads

## Synopsis

`maintainer_pool = "pool_name"`

<a name="idp10097712"></a>
## Description

**Configuration Change. ** This option is available as of version 3.6.

### Note

In order to use this option you must have a "Supercharger" license. For more information see [Section 2.4, “Configuring for Multiple Event Loops in Momentum 3.6”](conf.multi-core.php "2.4. Configuring for Multiple Event Loops in Momentum 3.6").

Changing the value of this option at runtime requires restarting the ecelerity process—issuing the ec_console command **`config reload`**         will not suffice.

This option is used to create multiple event loops. Set it to the name of an eventloop so that mail queues, DNS lookup and module events use multiple threads. A configuration example follows:

<a name="conf.ref.maintainer_pool.example"></a>

**Example 9.10. maintainer_pool example**

```
eventloop "maint" {
  concurrency = 5
}

maintainer_pool = "maint"
```

Set `concurrency` to a number equal to or less than the number of computer cores.

There is no default value for this option.

<a name="idp10106464"></a>
## Scope

`maintainer_pool` is valid in the global scope.

<a name="idp10108064"></a>
## See Also

[Section 2.4, “Configuring for Multiple Event Loops in Momentum 3.6”](conf.multi-core.php "2.4. Configuring for Multiple Event Loops in Momentum 3.6") and [eventloop](conf.ref.eventloop.php "eventloop")

| [Prev](conf.ref.mailfrom_timeout.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.malloc2mmap_threshold.php) |
| mailfrom_timeout  | [Table of Contents](index.php) |  malloc2mmap_threshold |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)