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

| trace_smtp_mode |
| [Prev](config.tls_verify_mode.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tracking_domain.php) |

<a name="conf.ref.trace_smtp_mode"></a>
## Name

trace_smtp_mode — set the default permissions of trace files

## Synopsis

`trace_smtp_mode = 0640`

<a name="idp27162256"></a>
## Description

This option sets the default permissions of trace files created when using the console command **trace smtp** . As always, the permissions will be modified by the umask of the ecelerity process. When running as user and group `ecuser`, the default value will make the files readable and writable to the `ecuser` user, readable to members of the ecuser group, and not accessible to other users.

Changing the value of this option at runtime requires restarting the ecelerity process (issuing the ec_console command **`config reload`**         will not suffice).

The default value is `0640`.

<a name="idp27167696"></a>
## Scope

`trace_smtp_mode` is valid in the global scope.

<a name="idp27169952"></a>
## See Also

[trace smtp](console_commands.trace_smtp.php "trace smtp")

| [Prev](config.tls_verify_mode.php)  | [Up](config.options.ref.php) |  [Next](config.tracking_domain.php) |
| tls_verify_mode  | [Table of Contents](index.php) |  tracking_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)