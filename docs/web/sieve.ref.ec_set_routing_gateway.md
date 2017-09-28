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

| ec_set_routing_gateway |
| [Prev](sieve.ref.ec_set_binding.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_shared_throttle.php) |

<a name="sieve.ref.ec_set_routing_gateway"></a>
## Name

ec_set_routing_gateway — dynamically change the gateway based on recipient

## Synopsis

`ec_set_routing_gateway` { *`address`* }

<a name="idp15262640"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.26.

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

This action sets the gateway for the message in much the same way as the [gateway](conf.ref.gateway.php "gateway") configuration option; the message will be queued to the domain specified by the gateway. A gateway set with this action will override a possible Gateway configuration setting that would otherwise be applicable to the message. See also [routes](conf.ref.routes.php "routes") for domain-wide routing. The headers and the body of the message will not be changed.

The required *`address`* parameter can be either a dotted literal IP address, a hostname that resolves to an A record, or a domain name which resolves to one or more MX records.

Sieve scripts using `ec_set_routing_gateway` should be called in the each_rcpt_phase only.

<a name="example.ec_set_routing_gateway"></a>

**Example 15.93. set_routing_gateway example**

```
if envelope :domain :is "to" "do-set_routing_gateway.com" {
  ec_set_routing_gateway "foo.com";
  }
```

### Note

In order to prevent I/O on the scheduler, when using `ec_set_routing_gateway`, the [keep_message_dicts_in_memory](conf.ref.keep_message_dicts_in_memory.php "keep_message_dicts_in_memory") option should be set to true.

<a name="idp15276544"></a>
## See Also

[gateway](conf.ref.gateway.php "gateway"), [routes](conf.ref.routes.php "routes")

| [Prev](sieve.ref.ec_set_binding.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_shared_throttle.php) |
| ec_set_binding  | [Table of Contents](index.php) |  ec_shared_throttle |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)