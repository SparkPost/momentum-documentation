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

| security |
| [Prev](conf.ref.scheduler.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.send_8bitmime.php) |

<a name="conf.ref.security"></a>
## Name

security — Scope for defining which permissions are retained by which user

## Synopsis

`security { ... }`

<a name="idp26452336"></a>
## Description

It is generally agreed that running with "root privileges" is dangerous for Internet servers. As such, Linux exposes a "security" system that allows a non-privileged user to retain certain root privileges.

The following is an example of using the Security scope in a single-node configuration:

<a name="example.security"></a>

**Example 72.7. Security Scope in a Single-node Configuration**

```
Security {
  user = ecuser
  group = ecuser
  # Allow binding to privileged ports without requiring a process restart
  Capabilities = "cap_net_bind_service+ep"
}
```

The following is an example of using the Security scope on a cluster node:

<a name="example.security.cluster"></a>

**Example 72.8. Security Scope in a Cluster Configuration**

```
Security {
  user = ecuser
  group = ecuser
  Capabilities = "cap_net_admin+ep cap_net_bind_service+ep cap_net_raw+ep cap_sys_resource+ep"
}
```

In a cluster configuration, when you accept the default configuration, the definition of the `Security` stanza in the `ecelerity-cluster.conf` file overrides the configuration defined in the `ecelerity.conf` file.

### Warning

We do not recommend that the user in a `Security` stanza be set to `root`. However, if you do set `user` to `root` you will encounter permissions problems because capabilities are exclusive and not cumulative. Specifically, the `dmllog.rt` jlog won't be consumed, because it is written by a process that runs as ecuser, and when you run as root and define `Capabilities`, you lose the "root access to all files" capability unless it's defined in the capabilities set. If you must run as root, comment out the `Capabilities` option.

The following are the options valid in the `security` scope. For additional details about each option, follow the link:

*   [`capabilities`](conf.ref.capabilities.php "capabilities")

*   [`group`](conf.ref.user.php "user")

*   [`user`](conf.ref.user.php "user")

*   [`chroot`](conf.ref.chroot.php "chroot")

*   [`supplemental_groups`](conf.ref.supplemental_groups.php "supplemental_groups")

### Note

Changing the value of options in the `security` scope at runtime requires restarting the ecelerity process—issuing the ec_console command **`config reload`**         will not suffice.

<a name="idp26478736"></a>
## Scope

`security` is valid in the global scope.

<a name="idp26480992"></a>
## See Also

[capabilities](conf.ref.capabilities.php "capabilities"), [chroot](conf.ref.chroot.php "chroot"), [supplemental_groups](conf.ref.supplemental_groups.php "supplemental_groups"), [user](conf.ref.user.php "user"), and [Section 16.3, “`ecelerity-cluster.conf` File”](conf.ref.ecelerity_cluster.conf.php "16.3. ecelerity-cluster.conf File")

| [Prev](conf.ref.scheduler.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.send_8bitmime.php) |
| scheduler  | [Table of Contents](index.php) |  send_8bitmime |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)