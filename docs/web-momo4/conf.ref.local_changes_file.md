<a name="conf.ref.local_changes_file"></a>
## Name

local_changes_file — the file for writing local configuration changes

## Synopsis

`local_changes_file = "/opt/msys/ecelerity/etc/local_changes.conf"`

<a name="idp25131120"></a>
## Description

`local_changes_file` sets the name of a configuration file which must be writable, and which is implicitly loaded after all other configuration files regardless of its placement in the `ecelerity.conf` file. Since it must be writable and files included twice are read-only, the `local_changes_file` cannot point to the same file as any 'include' directive, and it cannot point to the main configuration file. Since the `local_changes_file` is effectively loaded at the end of the main configuration file, options set in it are able to override any setting in any other configuration file; if it were loaded at some other point, options set after that point could not be overridden by it.

If `local_changes_file` is not defined, and the main configuration file is writable, then changes are written to the main configuration file. If `local_changes_file` is not defined, and the main configuration file is read-only, then a virtual file not associated with any real path is used to hold changes; in this case, the [config writeback](console_commands.config.php#config_writeback) command will issue a warning stating that not all portions of the configuration could be saved, and show the contents of the virtual file. This situation can be remedied by setting the `local_changes_file` to a valid path and issuing the **config writeback**           command again, at which point changes in the virtual file will be saved to the newly configured location.

<a name="idp25138880"></a>
## Scope

local_changes_file is valid in the global scope.

<a name="idp25140720"></a>
## See Also

[local_changes_only](conf.ref.local_changes_only.php "local_changes_only")

| [Prev](conf.ref.lmtp_port.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.local_changes_only.php) |
| lmtp_port  | [Table of Contents](index.php) |  local_changes_only |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)