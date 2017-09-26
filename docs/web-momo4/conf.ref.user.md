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
| [Prev](conf.ref.use_sendfile.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.xclient.php) |

<a name="conf.ref.user"></a>
## Name

user, group — security: user identity to assume after startup

<a name="idp27358336"></a>
## Description

If you are using the `user` and `group` options in a Security stanza, it may be necessary to retain some root privileges. An example of such a need is a module that can stop and start listeners during operation. On Unix, starting a listener during operation would require that the process run as a user who has the ability to perform a `bind` system call to the SMTP port; the SMTP port is reserved and only root can do this.

If Momentum is run as root, it will drop its superuser privileges before processing mail. By doing this, Momentum can limit the damage that could be caused by an attack that compromises the system.

The following is an example of using the user and group options:

<a name="example.user"></a>

**Example 72.11. user and group Configuration**

```
Security {
  user = ecuser
  group = ecuser
  Capabilities = "cap_net_bind_service+ep"
}
```

The default value for both the `user` and the `group` option is `ecuser`.

### Warning

It is strongly recommended that you leave these options as their defaults. If you change these options to something else, you are responsible for maintaining the ownership and permissions of the files used by the Momentum components. This is of particular importance after running an upgrade; the packaging will try to respect existing permissions but there are limits to the level of intelligence that can applied to the installer.

### Note

Changing the value of options in the `security` scope at runtime requires restarting the ecelerity process—issuing the ec_console command **`config reload`**         will not suffice.

<a name="idp27370752"></a>
## Scope

user and group are valid in the security scope.

<a name="idp27372592"></a>
## See Also

[security](conf.ref.security.php "security"), [capabilities](conf.ref.capabilities.php "capabilities"), [chroot](conf.ref.chroot.php "chroot"), and [supplemental_groups](conf.ref.supplemental_groups.php "supplemental_groups")

| [Prev](conf.ref.use_sendfile.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.xclient.php) |
| use_sendfile  | [Table of Contents](index.php) |  xclient |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)