<a name="console_commands.binding_flush_domain"></a>
## Name

binding flush domain — perform delivery attempt on delayed queue of a domain on a binding

## Synopsis

`binding flush domain` { *`binding_name`* } { *`domain_name`* }

<a name="idp14388448"></a>
## Description

The **binding flush domain**              command takes a domain name and a binding name as arguments and immediately performs a delivery attempt for each message in the delayed queue for that domain/binding pair.

Momentum has its own reattempt schedule based on the the number of previous attempts and the retry_interval configuration parameter (see [retry_interval](conf.ref.retry_interval.php "retry_interval") for details). Issuing this command will cause Momentum to disregard its internally calculated time of next attempt for each message in the delayed queue and set it to "now."

If a remote domain (just-revived.com) has had delivery problems and has just come "back online," all messages to that domain on the binding BINDING1 could be immediately attempted by performing the following command:

```
10:47:35 /tmp/2025> binding flush domain BINDING1 just-revived.com
just-revived.com flushed.  12521 messages requeued.
```

You may substitute `all` for the domain name to apply to all domains.

<a name="idp14394240"></a>
## See Also

[message_expiration](conf.ref.message_expiration.php "message_expiration")

| [Prev](console_commands.binding_fail_domain_quiet.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.binding_summary.php) |
| binding fail domain quiet  | [Table of Contents](index.php) |  binding summary |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)