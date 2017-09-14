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

| local_changes_file |
| [Prev](conf.ref.lmtp_port.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.local_changes_only.php) |

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