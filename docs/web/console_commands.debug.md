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

| debug |
| [Prev](console_commands.count.php)  | 12.2. System Console Commands |  [Next](console_commands.debug_smtp.php) |

<a name="console_commands.debug"></a>
## Name

debug — retrieve and optionally set debug flags

## Synopsis

`debug` [ debug_flag ]

<a name="idp9592944"></a>
## Description

This command shows the current debugging flags. If a debug_flag is specified, the current debugging flags are updated. Details about debugging flags can be found at [debug_flags](conf.ref.debug_flags.php "debug_flags").

For example:

```
10:47:35 /tmp/2025> debug
Debug Flags {
DEBUG = ( "LOG1" )
INFO = ( "LOG1" )
NOTICE = ( "LOG1" )
WARNING = ( "LOG1" )
ERROR = ( "ALL" )
CRITICAL = ( "ALL" )
START = ( "ALL" )
}
```

*Note:* The `START` subsystem is available as of version 2.2.2.30.

To output SSL information at the WARNING level, do the following:

```
10:47:35 /tmp/2025> debug WARNING (SSL)
Debug Flags {
DEBUG = ( "LOG1" )
INFO = ( "LOG1" )
NOTICE = ( "LOG1" )
WARNING = ( "SSL" )
ERROR = ( "ALL" )
CRITICAL = ( "ALL" )
START = ( "ALL" )
}
```

The debug command has the facility to set and read the debugging level of a module for module specific debugging output as seen in [module](conf.ref.module.php "module"). To determine the debug level of a module issue the command, **debug module *`modulename`***                       . This results in output such as the following:

```
10:47:35 /tmp/2025> debug module ec_logger
ec_logger debug level = ERROR
```

To set the debug level for a given module, use following syntax:

```
10:47:35 /tmp/2025> debug module ec_logger WARNING
ec_logger debug level = WARNING
```

| [Prev](console_commands.count.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.debug_smtp.php) |
| count  | [Table of Contents](index.php) |  debug smtp |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)