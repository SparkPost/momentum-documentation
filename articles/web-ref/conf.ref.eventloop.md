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
| [Prev](conf.ref.enable_fbl_header_insertion.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.exclude_vctx.php) |

<a name="conf.ref.eventloop"></a>
## Name

eventloop — define a pool of event loops to enable multiple event loop configuration

<a name="idp9558464"></a>
## Description

**Configuration Change. ** This option is available as of version 3.6.

### Note

In order to use this option you must have a "Supercharger" license. This license specifies a maximum number of event loops. When configuring an event loop, the `concurrency` option in the eventloop scope cannot exceed the licensed number of event loops. For more information see [Section 2.4, “Configuring for Multiple Event Loops in Momentum 3.6”](conf.multi-core.php "2.4. Configuring for Multiple Event Loops in Momentum 3.6").

Use this scope to define a pool of event loops to create a multiple event loop configuration. This eventloop is then associated with specific tasks such as SMTP reception as shown in the following example:

```
threadpool "accept" {
  concurrency = 1
}

eventloop "pool" {
  concurrency = 10
}

delivery_pool = "pool"
maintainer_pool = "pool"

esmtp_listener {
  event_loop = "pool"

  listen ":25" {
    concurrency = 1
    pool_name = "accept"
  }
}
```

In general we recommend defining only one eventloop pool. The only option valid in the eventloop scope is `concurrency`. Set the `concurrency` option to a value equal to approximately 75% of the total number of CPUs in the system. If the value of the `concurrency` option exceeds the licensed number of event loops you will see an error message in the log file such as the following:

```
[Wed 19 Jun 2013 11:02:47] <0x29b7510> Event loop license violation
[Wed 19 Jun 2013 11:02:47] <0x29b7510> Invalid license [Event Loop
Concurrency]
[Wed 19 Jun 2013 11:02:47] <0x29b7510> License machine mismatch
```

In the preceding code an event loop pool is defined and this pool is associated with an SMTP listener, SMTP delivery and a maintainer threadpool. The `delivery_pool` option handles threading for email delivery, the `event_loop` option inside the listener scope handles threading for email reception and the `maintainer_pool` option handles threading for other operations.

### Note

An eventloop cannot be defined at runtime and its `concurrency` cannot be changed at runtime. Changing these options requires restarting the ecelerity process—issuing the ec_console command **config reload**        will not suffice.

<a name="idp9571072"></a>
## Scope

`eventloop` is valid in the global scope.

<a name="idp9572720"></a>
## See Also

[delivery_pool](conf.ref.delivery_pool.php "delivery_pool") and [maintainer_pool](conf.ref.maintainer_pool.php "maintainer_pool")

| [Prev](conf.ref.enable_fbl_header_insertion.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.exclude_vctx.php) |
| enable_fbl_header_insertion  | [Table of Contents](index.php) |  exclude_vctx |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)