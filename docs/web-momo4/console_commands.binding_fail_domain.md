| binding fail domain |
| [Prev](console_commands.binding_delayed.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.binding_fail_domain_quiet.php) |

<a name="console_commands.binding_fail_domain"></a>
## Name

binding fail domain — fail messages for a domain on a binding with a bounce message

## Synopsis

`binding fail domain` { *`binding_name`* } { *`domain_name`* } [ *`message`* ]

<a name="idp14272240"></a>
## Description

The **binding fail domain**             command allows the administrative failure of all messages bound for the specified domain on the specified binding. If political issues arise that cannot be resolved or if the domain has been discontinued, it may be necessary to fail all of the messages to that domain. Unless an optional message is passed, all failed messages will be assigned the following administrative failure message: "554 Message manually purged."

For example, the following command could be used to fail all messages for the domain unresolvableproblems.com on the binding BINDING1.

```
10:47:35 /tmp/2025> binding fail domain BINDING1 unresolvableproblems.com
unresolvableproblems.com purged, 62415 messages failed.
```

You may substitute `all` for the domain name to apply to all domains.

```
10:47:35 /tmp/2025> binding fail domain BINDING1 all
All domains purged.  62415 messages failed.
```

To pass in a custom failure message, you can append it to your command line, for instance:

```
10:47:35 /tmp/2025> binding fail domain BINDING1 unresolvableproblems.com 554 Administratively failed by Bob
unresolvableproblems.com purged, 62415 messages failed.
```
<a name="idp14278576"></a>
## See Also

[binding fail domain quiet](console_commands.binding_fail_domain_quiet.php "binding fail domain quiet")

| [Prev](console_commands.binding_delayed.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.binding_fail_domain_quiet.php) |
| binding delayed  | [Table of Contents](index.php) |  binding fail domain quiet |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)