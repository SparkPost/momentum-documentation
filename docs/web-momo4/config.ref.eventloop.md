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

| eventloop |
| [Prev](config.ref.event_loop.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.events_per_iter.php) |

<a name="config.ref.eventloop"></a>
## Name

eventloop — define a pool of event loops to enable multiple event loop configuration

<a name="idp24605520"></a>
## Description

### Note

To use this option, you must have a Supercharger license. This license specifies a maximum number of event loops. When configuring an event loop, the `concurrency` option in the eventloop scope cannot exceed the licensed number of event loops.

This scope defines a pool of event loops to create a multiple event loop configuration. This eventloop is then associated with specific tasks, such as SMTP reception. In general, we recommend defining only one eventloop pool.

The following is an example configuration clause:

```
EventLoop "event_loops" {
  concurrency = 6
}
```

For an example multiple event loop configuration, see [Chapter 24, *Configuring Multiple Event Loops*](multi_event_loops.php "Chapter 24. Configuring Multiple Event Loops") .

The only option valid in the eventloop scope is `concurrency`. Set the `concurrency` option to a value equal to approximately 75% of the total number of CPUs in the system. If the value of the `concurrency` option exceeds the licensed number of event loops you will see an error message in the log file such as the following:

```
[Wed 19 Jun 2013 11:02:47] <0x29b7510> Event loop license violation
[Wed 19 Jun 2013 11:02:47] <0x29b7510> Invalid license [Event Loop
Concurrency]
[Wed 19 Jun 2013 11:02:47] <0x29b7510> License machine mismatch
```

### Note

You cannot define an eventloop or change its `concurrency` at runtime as these changes require you to restart the ecelerity process. To restart, use the executable command [ec_ctl](executable.ec_ctl.php "ec_ctl"); issuing the ec_console command **config reload**        will not work.

<a name="idp24616448"></a>
## Scope

`eventloop` is valid in the global scope.

<a name="idp24618256"></a>
## See Also

[delivery_pool](config.ref.delivery_pool.php "delivery_pool"), [maintainer_pool](config.ref.maintainer_pool.php "maintainer_pool"), and [event_loop](config.ref.event_loop.php "event_loop")

| [Prev](config.ref.event_loop.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.events_per_iter.php) |
| event_loop  | [Table of Contents](index.php) |  events_per_iter |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)