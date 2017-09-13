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

| outbound_throttle_messages |
| [Prev](conf.ref.outbound_throttle_connections.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.pathway.php) |

<a name="conf.ref.outbound_throttle_messages"></a>
## Name

outbound_throttle_messages — limit the rate at which messages are delivered

## Synopsis

`Outbound_Throttle_Messages = "1"`

`Outbound_Throttle_Messages = "1/60"`

<a name="idp10538784"></a>
## Description

This option allows you to limit the rate at which Momentum will attempt to deliver mail. It can be employed to globally limit throughput or to reduce the rate sent to a particular domain.

If a single integer parameter is provided, Momentum will ensure that no more than the specified number of messages are sent in a given second of time. If a proper fraction parameter is provided, Momentum will limit the number of sent message to the number specified in the numerator over the time window in seconds specified by the denominator. By default this option is not set, indicating an unlimited number of deliveries.

### Note

For best results, a throttle in the same scope and with the same values should also be defined using [outbound_throttle_connections](conf.ref.outbound_throttle_connections.php "outbound_throttle_connections").

If this option is not set or if is set to `0`, there is no limit on the number of messages sent.

<a name="conf.ref.outbound_throttle_messages.fallback"></a>
### Throttles and Fallback

In general, the configuration system works by taking the most specific instance of a given configuration option. Consider the following:

```
opt = "foo"
a {
  b {
    opt = "bar"
  }

  c {}
}
```

In this case, we have a notional option called `opt` specified globally, and within the `b` stanza. If we look it up globally, we get the value "`foo`. If we look it up inside the "`a` stanza, it falls back to global, and we get `foo`. Within the `b` stanza, it's explicitly set to `bar`, and this is the value we receive. Inside the `c` stanza, no value is set, so we fall back to `a`. As no value is set there, we fall back to the global `foo` value. The effective values are shown in the following:

```
opt = "foo"
a {
 opt = "foo"
 b { opt = "bar" }
 c { opt = "foo" }
}
```

Throttles work in a similar way, but are treated "by reference" as opposed to "by value." Consider the following configuration:

```
binding_group "mygroup" {
  Outbound_Throttle_Messages = "10"

  binding "mybinding1" {}

  binding "mybinding2" {}

  domain "mydomain1" {}

}
```

A single throttle structure is created in the scope of the binding group, `mygroup`. However, this doesn't mean that you end up with a new throttle in each scope. The fallback behavior of the configuration system for throttles means that a broader scope throttle *will* apply cumulatively to all subordinate options. In other words, options falling back to a less specific stanza to find a throttle will all affect the throttle together.

In the above configuration the **combined** scopes `mybinding1, mybinding2` and `mydomain1` may send 10 messages cumulatively within a 1 second time period. Thus, if 10 messages go out for `mybinding1, mybinding2` and `mydomain1` will not send out any messages within that second.

The following configuration allows 10 messages per second individually for each scope.

```
binding_group "mygroup" {
  Outbound_Throttle_Messages = "10"

  binding "mybinding1" {
    Outbound_Throttle_Messages = "10"
  }

  binding "mybinding2" {
    Outbound_Throttle_Messages = "10"
  }

  domain "mydomain1" {
    Outbound_Throttle_Messages = "10"
  }
}
```

### Outbound_Throttle_Messages and Regex Domains

Regex Domains can also be considered a scope.

```
Domain "/(?:^|[.])example[.](?:com|co[.]uk)$/" {
  Outbound_Throttle_Messages = 10
}
```

Outbound_Throttle_Messages set in the regex domain shown in the preceding example will impact all domains together, in the same way that a throttle set in a binding_group impacts all bindings.

<a name="idp10561120"></a>
## Scope

outbound_throttle_messages is valid in the binding, binding_group, domain and global scopes.

<a name="idp10562816"></a>
## See Also

[Section 2.6, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "2.6. Configuration Scopes and Fallback")

| [Prev](conf.ref.outbound_throttle_connections.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.pathway.php) |
| outbound_throttle_connections  | [Table of Contents](index.php) |  pathway |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)