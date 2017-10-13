| jlog_sanity_check |
| [Prev](executable.jlog_change_endian.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.jlogctl.php) |

<a name="executable.jlog_sanity_check"></a>
## Name

jlog_sanity_check — validate that a jlog is free of errors

## Synopsis

`/opt/msys/jlog/bin/jlog_sanity_check` { le | be } *`jlog`*

<a name="idp13239056"></a>
## Description

This command inspects the contents of a jlog, and reports any errors or inconsistencies it finds. If the jlog is OK, nothing is printed.

The first argument indicates the endianness of the system on which the jlog was written (`le` for little-endian architectures like i386 and `be` for big-endian architectures like sparc).

The second argument is the path to the jlog you want to check.

This command should be run as `ecuser`.

| [Prev](executable.jlog_change_endian.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.jlogctl.php) |
| jlog_change_endian  | [Table of Contents](index.php) |  jlogctl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)