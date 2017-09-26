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

| 6.4. The `mc_auth.conf` File |
| [Prev](mc.conf.mc_mgr.conf.php)  | Chapter 6. Configuration Files in Version 3.5 and Higher |  [Next](mc.conf.pe2.conf.php) |

## 6.4. The `mc_auth.conf` File

As of version 3.6, the `/opt/msys/pe2/etc/mc_auth.conf` file is created during installation if you choose to enable encrypted password support. This file is include in the other component configuration files. The sample `mc_auth.conf` file is reproduced below.

```
# Reversible Encryption support
# DO NOT DISABLE THIS if you enabled it during installation
securecreds {}

# This file is created by the installer and contains credential information
# for the Message Central database; this is used even when you are authenticating
# from LDAP, as Message Central maintains its own record of roles.
include "/opt/msys/etc/installer/ecelerity.d/mcdb.conf"

# This is the default authentication scheme shipped with Message Central.
# If you want to enable LDAP based authentication instead, you will need to
# replace the mcauth scheme with one that points at your LDAP server.
auth_ds {
  Scheme "mcauth" {
    Authenticate {
      query = "SELECT password from maincontrol.users where username = :user"
      cache = "mcdb"
      map = [
        user = "%{username}"
      ]
      type = "md5"
      returns_password = "true"
      password_column = "password"
    }
  }
}
```

[The securecreds Module](https://support.messagesystems.com/docs/web-ref/modules.securecreds.php) is documented in the Momentum reference manual. Likewise, see [The auth_ds Module](https://support.messagesystems.com/docs/web-ref/modules.auth_ds.php) for more information about auth_ds.

| [Prev](mc.conf.mc_mgr.conf.php)  | [Up](mc.conf.3.5.php) |  [Next](mc.conf.pe2.conf.php) |
| 6.3. The `mc_mgr.conf` File  | [Table of Contents](index.php) |  6.5. The `pe2.conf` File |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)