| authz id |
| [Prev](console_commands.active.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.authz_roles_list.php) |

<a name="console_commands.authz_id"></a>
## Name

authz id — display the id of the current user

## Synopsis

`authz id`

<a name="idp14041952"></a>
## Description

This command displays the id of the current system console user in XML format; any roles associated with that user are also displayed.

If you are logged in as a user named `tom` who belongs to the group `users`, you should see the following output:

```
<AuthzInformation username="tom">
  <Roles>
    <Role name="users"/>
  </Roles>
</AuthzInformation>
```
<a name="idp14045664"></a>
## See Also

[authz roles list](console_commands.authz_roles_list.php "authz roles list")

| [Prev](console_commands.active.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.authz_roles_list.php) |
| active  | [Table of Contents](index.php) |  authz roles list |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)