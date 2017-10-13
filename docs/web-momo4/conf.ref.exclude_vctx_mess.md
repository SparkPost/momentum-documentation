| exclude_vctx_mess |
| [Prev](conf.ref.exclude_vctx_conn.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.expensive_batch_assessment.php) |

<a name="conf.ref.exclude_vctx_mess"></a>
## Name

exclude_vctx_mess — exclude validation context keys from being journaled in the spool metadata.

## Synopsis

`Exclude_VCTX_Mess = ("regex$" "otherregex")`

<a name="idp24663408"></a>
## Description

With more advanced policy configurations, the aggregate size of the validation context data retained in memory may become significant, especially if `keep_message_dicts_in_memory` is enabled.

`Exclude_VCTX_Mess` allows you to specify a list of one or more Perl-compatible regular expressions. During swap out, the keys to the message dictionary are compared against the patterns listed by `Exclude_VCTX_Mess`. If a key matches, then that data value will be deleted from the dictionary.

Note that keys that have special significance to the core product (these typically have a `#` prefix) can not be filtered by this module.

```
# filters all keys ending in _string from the per-message context
Exclude_VCTX_Mess = ( "_string$" )
```
<a name="idp24669568"></a>
## Scope

Exclude_VCTX_Mess is valid in the global, binding, binding_group, and domain scopes.

<a name="idp24671440"></a>
## See Also

[exclude_vctx_mess](conf.ref.exclude_vctx_mess.php "exclude_vctx_mess"), [keep_message_dicts_in_memory](conf.ref.keep_message_dicts_in_memory.php "keep_message_dicts_in_memory")

| [Prev](conf.ref.exclude_vctx_conn.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.expensive_batch_assessment.php) |
| exclude_vctx_conn  | [Table of Contents](index.php) |  expensive_batch_assessment |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)