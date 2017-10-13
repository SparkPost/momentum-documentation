| default_binding |
| [Prev](conf.ref.debug_flags.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.default_charset.php) |

<a name="conf.ref.default_binding"></a>
## Name

default_binding — control usage of the "default" binding

## Synopsis

`default_binding = "normal"`

`default_binding = "suspended"`

`default_binding = "none"`

<a name="idp24174192"></a>
## Description

The default binding is the binding that a message belongs to when no other binding applies. The default value is `normal`.

If you are using MultiVIP© interfaces, you may want to use one of the following options rather than the 'default' binding:

*   If `default_binding` is set to `none`, then messages that would fall into the default binding will generate a 451 transient failure back to the generating software.

*   If `default_binding` is set to `suspended`, you can suspend delivery for the default binding using the [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery") option.

<a name="idp24181936"></a>
## Scope

`default_binding` is valid in the global scope.

<a name="idp24184192"></a>
## See Also

[suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery"), [binding](conf.ref.binding.php "binding"), and [the section called “`default` Binding”](conf.ref.binding.php#conf.ref.binding.default "default Binding")

| [Prev](conf.ref.debug_flags.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.default_charset.php) |
| debug_flags  | [Table of Contents](index.php) |  default_charset |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)