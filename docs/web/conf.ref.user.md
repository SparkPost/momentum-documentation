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

| user |
| [Prev](conf.ref.use_sendfile.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.validate.php) |

<a name="conf.ref.user"></a>
## Name

user, group — security: user identity to assume after startup

<a name="idp7147568"></a>
## Description

```
Security {
  user = "<replaceable>user name or id</replaceable>" # default none>
  group = "<replaceable>group name or id</replaceable>" # default none>
  # On Linux, allow binding to privileged ports without requiring
  # a process restart
  Capabilities = "cap_net_bind_service+ep"
  # On Solaris, allow binding to privileged ports without requiring
  # a process restart (version 3.0 and higher)
  Privileges = "basic net_privaddr"
}
```

This security feature instructs Momentum, if run as root, to drop its superuser privileges before processing mail. By doing this, Momentum can limit the damage that could be caused by an attack on the system that results in compromise.

If you are using a Security stanza and you want to use DuraVIP bindings in a cluster, you will also need to enable appropriate capabilities so that you can retain certain root privileges. For more information see [capabilities](conf.ref.capabilities.php "capabilities").

### Warning

The default value for both the "user" and the "group" option is `ecuser`. It is strongly recommended that you leave these options as their defaults. If you change these options to something else, you are responsible for maintaining the ownership and permissions of the files used by the Momentum components. This is of particular importance after running an upgrade; the packaging will try to respect existing permissions but there are limits to the level of intelligence that can applied to the installer.

These settings are not supported under Windows; instead, you should configure the Momentum service to run under an alternate account.

### Note

Momentum is no longer supported on Windows.

<a name="idp7156096"></a>
## Scope

user and group are valid in the security scope.

<a name="idp7157744"></a>
## See Also

[chroot](conf.ref.chroot.php "chroot"), [supplemental_groups](conf.ref.supplemental_groups.php "supplemental_groups"), [capabilities](conf.ref.capabilities.php "capabilities"),

| [Prev](conf.ref.use_sendfile.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.validate.php) |
| Use_SendFile  | [Table of Contents](index.php) |  validate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)