<a name="conf.ref.spool_mode"></a>
## Name

spool_mode — set the file mode for newly created spool files

## Synopsis

`spool_mode = 0640`

<a name="idp26714400"></a>
## Description

`spool_mode` allows you to set the *`mode`* for the `open` system call used to create spool files. The value must be specified in octal format. The default is `0640`.

Changing the value of this option at runtime requires restarting the ecelerity process (issuing the ec_console command **`config reload`**         will not suffice).

<a name="idp26719136"></a>
## Scope

`spool_mode` is valid in the global scope.

<a name="idp26721392"></a>
## See Also

[spoolbase](conf.ref.spoolbase.php "spoolbase")

| [Prev](conf.ref.soft_bounce_drain_rate.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.spoolbase.php) |
| soft_bounce_drain_rate  | [Table of Contents](index.php) |  spoolbase |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)