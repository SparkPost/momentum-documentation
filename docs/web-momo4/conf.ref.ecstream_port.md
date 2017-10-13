| ecstream_port |
| [Prev](conf.ref.drop_body_after_trans_fail.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.ecstream_timeout.php) |

<a name="conf.ref.ecstream_port"></a>
## Name

ecstream_port — configure the port for ecstream deliveries

## Synopsis

`ecstream_port = 1825`

<a name="idp24512240"></a>
## Description

When Momentum is set to [perform delivery via ecstream](conf.ref.delivery_method.php "delivery_method"), this option sets the *destination* port that will be used. The default value is `1825`.

<a name="conf.ref.ecstream_port.example"></a>

**Example 72.6. ecstream_port example**

```
domain “gold.example.com” {
  delivery_method = "ECSTREAM"
  ecstream_port = 31337
}
```

<a name="idp24518096"></a>
## Scope

ecstream_port is valid in the binding, binding_group, domain, and global scopes.

<a name="idp24519968"></a>
## See Also

[delivery_method](conf.ref.delivery_method.php "delivery_method")

| [Prev](conf.ref.drop_body_after_trans_fail.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.ecstream_timeout.php) |
| drop_body_after_trans_fail  | [Table of Contents](index.php) |  ecstream_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)