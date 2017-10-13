<a name="conf.ref.max_resident_messages"></a>
## Name

max_resident_messages — threshold above which messages are not held in memory

## Synopsis

`max_resident_messages = 32768`

<a name="idp25394672"></a>
## Description

`max_resident_messages` is used to control the maximum number of messages held concurrently in memory. A value of 0 sets no limit. A rough guide to setting this option is to divide the maximum amount of RAM that you want to reserve for messages by your growbuf_size. For more information about the `growbuf_size` option see [growbuf_size](conf.ref.growbuf_size.php "growbuf_size").

The default value is `32768`. However, this value is typically overridden in the `ecelerity.conf` file and set to `65536`.

### Warning

This is an advanced option. Setting this option to small non-zero values can have deleterious effects on performance. Thorough testing is recommended prior to deployment in a production environment.

<a name="idp25401200"></a>
## Scope

`max_resident_messages` is valid in the binding, binding_group and global scopes.

<a name="idp25403488"></a>
## See Also

[growbuf_size](conf.ref.growbuf_size.php "growbuf_size")

| [Prev](conf.ref.max_resident_active_queue.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.max_resident_transfails.php) |
| max_resident_active_queue  | [Table of Contents](index.php) |  max_resident_transfails |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)