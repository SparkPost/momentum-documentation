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

| delivery_pool |
| [Prev](conf.ref.delivery_method.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.delivery_response_timeout.php) |

<a name="conf.ref.delivery_pool"></a>
## Name

delivery_pool — associate an eventloop with mail delivery

## Synopsis

`delivery_pool = "pool"`

<a name="idp8926224"></a>
## Description

**Configuration Change. ** This option is available as of version 3.6.

### Note

In order to use this option you must have a "Supercharger" license. For more see [Section 2.4, “Configuring for Multiple Event Loops in Momentum 3.6”](conf.multi-core.php "2.4. Configuring for Multiple Event Loops in Momentum 3.6").

This option is used in a multiple event loop configuration. To perform delivery in the eventloop, assign `delivery_pool` the name of your `eventloop`. There is no default value for the `delivery_pool` option. A configuration example follows:

```
eventloop "pool" {
  concurrency = 10
}

delivery_pool = "pool"

esmtp_listener {
  event_loop = "pool"
  ...
}
```

Set `concurrency` in the eventloop scope to a number equal to or less than the number of computer cores.

### Note

Changing the value of `delivery_pool` at runtime requires restarting the ecelerity process—issuing the ec_console command **`config reload`**         will not suffice.

Note that the `event_loop` option within the listener scope ensures that *reception* is associated with the event loop pool.

<a name="idp8937152"></a>
## Scope

`delivery_pool` is valid in the global scope.

<a name="idp8938800"></a>
## See Also

[eventloop](conf.ref.eventloop.php "eventloop") and [Section 2.4, “Configuring for Multiple Event Loops in Momentum 3.6”](conf.multi-core.php "2.4. Configuring for Multiple Event Loops in Momentum 3.6")

| [Prev](conf.ref.delivery_method.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.delivery_response_timeout.php) |
| delivery_method  | [Table of Contents](index.php) |  delivery_response_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)