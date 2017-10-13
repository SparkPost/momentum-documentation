| local_changes_only |
| [Prev](conf.ref.local_changes_file.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.mail_queue_check_vm_interval.php) |

<a name="conf.ref.local_changes_only"></a>
## Name

local_changes_only — whether there is a file for writing local configuration changes

## Synopsis

`local_changes_only = true`

<a name="idp25150384"></a>
## Description

`local_changes_only` defaults to 'false'. If it is 'true', it must be defined and all changes are saved to the `local_changes_file`. If it is 'false', changes are distributed as described below:

*   When replacing a value that has previously been set, if the file it was last set in is writable then the change is made in-place; the new option value replaces the old option value at the same location in the writable file.

*   If replacing a value that was last set in a read-only file or setting a value that was not set previously, then the change will go to the lexically first writable file in which the scope instance containing the change was defined.

<a name="idp25155984"></a>
## Scope

local_changes_only is valid in the global scope.

<a name="idp25157824"></a>
## See Also

[local_changes_file](conf.ref.local_changes_file.php "local_changes_file")

| [Prev](conf.ref.local_changes_file.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.mail_queue_check_vm_interval.php) |
| local_changes_file  | [Table of Contents](index.php) |  mail_queue_check_vm_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)