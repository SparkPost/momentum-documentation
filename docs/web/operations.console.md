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

| 4.1. The Momentum System Console |
| [Prev](operations.php)  | Chapter 4. Operations |  [Next](operations.console-commands.php) |

## 4.1. The Momentum System Console

All Momentum online administration, management and analysis can be performed through the Momentum System Console program **ec_console**, henceforth referred to as the console.

The console can connect to a Momentum instance via a Unix domain socket or a TCP/IP socket (with an optional user@ prefix) depending upon how Momentum is configured. See [the section called “Control_Listener”](ecelerity.conf.php#ecelerity.conf.control_listener "Control_Listener") and [Section 2.2.2, “Configuring Authentication for the Control Listener”](conf.aaa.php#conf.control_authen "2.2.2. Configuring Authentication for the Control Listener") for details on configuring Momentum's control listening behavior.

### Connecting via a Unix Domain Socket

The console assumes that Unix domain sockets are located in `/tmp`. The standard endpoint for a control listener is `/tmp/2025`. When using the standard endpoint, connecting to the console simple requires issuing the **ec_console** command with no options.

**ec_console** also takes an optional argument to specify an endpoint if you choose to bind your Control_Listener to a non-standard value. This option is specified in the following way:

`shell> /opt/ecelerity/bin/ec_console /tmp/2030`

This will attempt to connect to the local Momentum instance listening at `/tmp/2030`.

**Connecting Using a Named Pipe**

On Windows, starting with Momentum 2.0, the default is to attempt to connect to \\.\pipe\ecconsole (the suggested default named pipe). Earlier versions of Momentum default to `127.0.0.1:2025`.

`shell> /opt/ecelerity/bin/ec_console ec1`

will attempt to connect to a local Momentum instance listening at `/tmp/ec1`.

`shell> /opt/ecelerity/bin/ec_console \\ec1`

On Windows, starting with Momentum 2.0, this will attempt to connect to the Momentum instance listening on the machine named ec1\. It is actually equivalent to \\ec1\pipe\ecconsole, and you may also specify the full path to the pipe in that format, if you used an alternative name for your named pipe listener.

### Note

Momentum is no longer supported on Windows.

### Connecting via TCP/IP

The following example attempts to connect the Momentum instance located at the IPv4 address 10.2.4.1 on port 2025:

`shell> /opt/ecelerity/bin/ec_console 10.2.4.1:2025`

Likewise, you can attempt to connect to the Momentum instance located at the IPv6 address ::1 on port 2424 in the following way:

`shell> /opt/ecelerity/bin/ec_console ::1.2424`
### Successful Connection

A successful launch of the console will result in output similar to the following:

```
# /opt/ecelerity/bin/ec_console
##############################################
# ecelerity version: 1.0
# Copyright (c) 1999-2009 Message Systems, Inc.
# All Rights Reserved.
##############################################
```

By default, an interactive console session is established, and the console client provides line editing features and tab completion (it will load your `~/.inputrc` on startup). In this mode, the version of the remote server is displayed at connect time.

The console client enters batching mode if it detects that it is not connected to a terminal, or if additional command line parameters beyond the listener endpoint are specified. For example, you can list all your active modules and then exit in the following way:

`shell> ec_console /tmp/2025 module list`

For a TCP/IP connection to localhost requiring authentication of the user, `admin`, use the following command:

`shell> ec_console admin@localhost:2025 module list`

You will be asked for admin's password before the **module list**      command executes. Batch mode suppresses the version information that is normally displayed at connect time and disables advanced line editing features.

To exit the console enter the **quit** command.

| [Prev](operations.php)  | [Up](operations.php) |  [Next](operations.console-commands.php) |
| Chapter 4. Operations  | [Table of Contents](index.php) |  4.2. Console Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)