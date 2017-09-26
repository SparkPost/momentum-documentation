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

| ec_uipasswd |
| [Prev](executable.ec_spp.php)  | 11.2. Executable Commands |  [Next](executable.eccfg.php) |

<a name="executable.ec_uipasswd"></a>
## Name

ec_uipasswd — manage users and groups for authentication

## Synopsis

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ addgroup *`groupname`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ adduser *`username`* [*`password`*] ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ assign *`user`* *`group`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ deletegroup *`groupname`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ deleteuser *`username`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ demote *`username`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ -h ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ info *`user_or_group`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ password *`username`* *`new_password`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ promote *`username`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ unassign *`user`* *`group`* ]

`/opt/msys/ecwebui/scripts/ec_uipasswd` [ -v ]

<a name="idp14195536"></a>
## Description

**ec_uipasswd** is used to manage users and groups for the built-in authentication database. When the Message Systems MTA is installed, a PostgreSQL database is created to store user credentials. *This command can only be used to manage the built-in data store*                                                            and, in a cluster configuration, is only available on the node where the web UI is installed.

### Note

In version 3.0, if you use the default configuration settings, web console authentication is handled by the `ecauth` authorization scheme and the `ecdb` datasource. This is the preferred method of authentication. For more information see [webui-common.conf](webui-common.conf.php "webui-common.conf").

Use this command to add users to the web UI. Any users and groups added, show up in the web UI.

<dl class="variablelist">

<dt>addgroup</dt>

<dd>

Add a new group.

</dd>

<dt>adduser</dt>

<dd>

Add a user. If you do not specify a password when this command is invoked you are prompted for one. This option adds a regular user who can be promoted to a superuser using the `promote` option. Currently, superusers are identical to regular users with the additional privilege of being able to administer users through the web UI.

</dd>

<dt>demote</dt>

<dd>

Demote a user from super user status. Currently you cannot use the web UI to demote a user. You must use **ec_uipasswd**.

</dd>

<dt>deletegroup</dt>

<dd>

Delete a group.

</dd>

<dt>deleteuser</dt>

<dd>

Delete a user.

</dd>

<dt>-h</dt>

<dd>

Display help.

</dd>

<dt>info</dt>

<dd>

Display information about the specified user or group.

</dd>

<dt>password</dt>

<dd>

Change a user's password.

</dd>

<dt>promote</dt>

<dd>

Promote a user to super user status. Gives a regular user the capability of administering users through the web UI. Currently you cannot use the web UI to promote an existing user. You must use **ec_uipasswd**.

</dd>

<dt>unassign</dt>

<dd>

Remove a user from a group

</dd>

<dt>-v</dt>

<dd>

Display version information.

</dd>

</dl>

<a name="idp14221728"></a>
## See Also

[Section 3.9, “Administering Users From the Web Console”](web3.users.php "3.9. Administering Users From the Web Console").

| [Prev](executable.ec_spp.php)  | [Up](exe.commands.details.php) |  [Next](executable.eccfg.php) |
| ec_spp  | [Table of Contents](index.php) |  eccfg |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)