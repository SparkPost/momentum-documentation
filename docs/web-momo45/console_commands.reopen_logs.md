| [Prev](console_commands.refresh_domain)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.reroute_queue) |

<a name="console_commands.reopen_logs"></a>
## Name

reopen logs — close and open log files

## Synopsis

`reopen logs`

<a name="idp13618640"></a>
## Description

This command requests that all logging modules close and reopen their log files. It is up to the specific module implementation to do what is necessary to fulfill the request. This is instrumental in log rotation as the logs are moved to the side and Momentum must close and reopen its file handles to start using new resources.

| [Prev](console_commands.refresh_domain)  | [Up](console.cmds.ref) |  [Next](console_commands.reroute_queue) |
| refresh domain  | [Table of Contents](index) |  reroute queue |

