<a name="console_commands.reopen_logs"></a>
## Name

reopen logs — close and open log files

## Synopsis

`reopen logs`

<a name="idp13618640"></a>
## Description

This command requests that all logging modules close and reopen their log files. It is up to the specific module implementation to do what is necessary to fulfill the request. This is instrumental in log rotation as the logs are moved to the side and Momentum must close and reopen its file handles to start using new resources.

| [Prev](console_commands.refresh_domain.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.reroute_queue.php) |
| refresh domain  | [Table of Contents](index.php) |  reroute queue |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)