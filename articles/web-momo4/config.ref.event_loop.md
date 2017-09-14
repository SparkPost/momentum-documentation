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

| event_loop |
| [Prev](conf.ref.enable_fbl_header_insertion.php)  | Chapter 72. Configuration Options Reference |  [Next](config.ref.eventloop.php) |

<a name="config.ref.event_loop"></a>
## Name

event_loop — associate a pool of event loops within a listener scope to use multiple threads

## Synopsis

`event_loop = "pool_name"`

<a name="idp24587648"></a>
## Description

### Note

To use this option, you must have a Supercharger license.

This option is used in a multiple event loop configuration. To configure threading for email reception, assign `event_loop` the name of your `eventloop` inside a listener scope. Note that the name must match what was defined in the EventLoop configuration. See [eventloop](config.ref.eventloop.php "eventloop").

The following is an example configuration clause:

```
ESMTP_Listener {
  # Multi-threading - use event loops in ESMTP listener
  event_loop = "event_loops"

  .
  .
  .
```

For an example multiple event loop configuration, see [Chapter 24, *Configuring Multiple Event Loops*](multi_event_loops.php "Chapter 24. Configuring Multiple Event Loops") .

### Note

If you change the value of `event_loop` at runtime, you must restart the ecelerity process using the executable command [ec_ctl](executable.ec_ctl.php "ec_ctl"). Note: issuing the ec_console command **config reload**        will not work.

There is no default value for this option.

<a name="idp24597168"></a>
## Scope

`event_loop` is valid in the esmtp_listener, the ecstream_listener, the http_listener and the listen scopes within those scopes.

<a name="idp24599072"></a>
## See Also

[eventloop](config.ref.eventloop.php "eventloop")

| [Prev](conf.ref.enable_fbl_header_insertion.php)  | [Up](config.options.ref.php) |  [Next](config.ref.eventloop.php) |
| enable_fbl_header_insertion  | [Table of Contents](index.php) |  eventloop |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)