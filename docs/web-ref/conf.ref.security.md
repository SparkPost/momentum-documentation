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
| [Prev](conf.ref.scope_max_outbound_connections.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.send_8bitmime.php) |

<a name="conf.ref.security"></a>
## Name

security — Scope for defining which permissions are retained by which user

## Synopsis

`security { ... }`

<a name="idp11612448"></a>
## Description

It is generally agreed that running with "root privileges" is dangerous for Internet servers. As such, Linux exposes a "security" system that allows a non-privileged user to retain certain root privileges.

If you are using the `user` and `group` options in a Security stanza it may be necessary to retain some root privileges. An example of such a need is a module that can stop and start listeners during operation. On Unix, starting a listener during operation would require that the process run as a user who has the ability to perform a `bind` system call to the SMTP port; the SMTP port is reserved and only root can do this.

The list of possible capabilities for Linux may vary depending on your Linux distribution, but documentation is found in the `capabilities` manual page. We use the `cap_from_text` library function to process the Linux capabilities string, so we will accept any capability supported by the operating system. The capability adjustment is applied via the `cap_set_proc` library function. If no capabilities string is specified, no privileges are retained; this is the default.

Find below an example of using the Security scope in a stand-alone configuration:

<a name="example.security"></a>

**Example 9.14. Security scope in a Stand-alone Configuration**

```
security {
  user = ecuser
  group = ecuser
  # On Linux, allow binding to privileged ports without requiring
  # a process restart
  capabilities = "cap_net_bind_service+ep"
  # On Solaris, allow binding to privileged ports without requiring
  # a process restart (version 3.0 and higher)
  privileges = "basic net_privaddr"
}
```

Find below an example of using the Security scope on a cluster node:

<a name="example.security.cluster"></a>

**Example 9.15. Security scope in a cluster configuration**

```
security {
  user = ecuser
  group = ecuser
  # Linux
  capabilities = "cap_net_admin+ep cap_net_bind_service+ep cap_net_raw+ep cap_sys_resource+ep"
  # Solaris
  privileges = "basic net_privaddr net_bindmlp sys_resource sys_net_config net_rawaccess"
}
```

The privileges in the previous example make it possible to use DuraVIP™ bindings in a cluster when running as the user, "ecuser".

### Note

On Solaris, in order to validate MAC-based licences add **net_rawaccess** to privileges. Also, note that zones may not have the **net_rawaccess** privilege. For zones you need an IP-based licence or a wildcard licence.

The DuraVIP™ feature of Momentum requires higher privileges than usual in order to manipulate the network interfaces on the machine; for more information see [capabilities](conf.ref.capabilities.php "capabilities").

### Warning

We do not recommend that the user in a `security` stanza be set to `root`. However, if you do set `user` to `root` you will encounter permissions problems because capabilities are exclusive and not cumulative. Specifically, the `dmllog.rt` jlog won't be consumed, because it is written by a process that runs as ecuser, and when you run as root and define `Capabilities`, you lose the "root access to all files" capability unless it's defined in the capabilities set. If you must run as root, comment out the `Capabilities` option.

Options valid in the `security` scope are:

*   `capabilities` (Linux)

*   `privileges` (Solaris)

*   `group`

*   `user`

*   `chroot`

*   `supplemental_groups`

Changing the value of options in the security scope at runtime requires restarting the ecelerity process—issuing the ec_console command **`config reload`**         will not suffice.

<a name="idp11644000"></a>
## Scope

`security` is valid in the global scope.

<a name="idp11646032"></a>
## See Also

[capabilities](conf.ref.capabilities.php "capabilities"), [privileges](conf.ref.privileges.php "privileges"), [chroot](conf.ref.chroot.php "chroot"), [supplemental_groups](conf.ref.supplemental_groups.php "supplemental_groups") and [user](conf.ref.user.php "user")

| [Prev](conf.ref.scope_max_outbound_connections.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.send_8bitmime.php) |
| scope_max_outbound_connections  | [Table of Contents](index.php) |  send_8bitmime |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)