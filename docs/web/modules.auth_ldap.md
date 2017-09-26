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

| 14.5. auth_ldap – LDAP Based SMTP Authentication |
| [Prev](modules.auth_ds.php)  | Chapter 14. Modules Reference |  [Next](modules.auth_mysql.php) |

## 14.5. auth_ldap – LDAP Based SMTP Authentication

<a class="indexterm" name="idp10649024"></a>
### Note

This module has been deprecated and is no longer available in version 3.0\. We recommend that new deployments use the datasource layer and the datasource based authentication module. See [Section 14.4, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "14.4. auth_ds – Datasource based SMTP Authentication") for more details.

This module allows Momentum to provide authorized SMTP sessions via SMTP AUTH by using an LDAP server as the authentication bridge. When a user connects to Momentum, if authorization is supported, it will attempt to authenticate the user against the named LDAP server and if that "bind" is successful, then the user's SMTP authorization request will be approved.

### 14.5.1. Configuration

Sample for Active Directory:

```
Esmtp_Listener = (
  *:587  [
      0.0.0.0/0 = (
        limits [ idle_time = 300 ]
        LOGIN [
          extension = AUTH
          extension_argument = LOGIN
          # remember: your users will need to include the
          # domain name in their login. e.g.: user@example.com
          uri = "ldap://ad.internal.example.com"
        ]
        continue
      )
  ]
)

Module auth/auth_ldap auth_ldap {
}
```

Sample for OpenLDAP:

```
Esmtp_Listener = (
  *:587     [
      0.0.0.0/0 = (
        limits [ idle_time = 300 ]
        LOGIN [
          extension = AUTH
          extension_argument = LOGIN
          uri = "ldap://uid=%{username},ou=employee,dc=example,dc=com@ldap.internal.example.com"
        ]
        continue
      )
    ]
)

Module auth/auth_ldap auth_ldap {
}
```

The auth_ldap module provides the inner working to support password lookups on the URI schema ldap:// (or ldaps:// for LDAP over SSL). The location following the schema is interpreted as a hostname optionally preceded by a bind DN delimited by an @. If the bind DN is not provided, the bind DN '%{username}' is assumed. This string is interpolated with the username provided during SMTP AUTH.

The hostname may optionally be followed by a :port. If :port is not specified, :389 is assumed. In the case of ldaps:// the port defaults to :636.

The URI: `ldap://ldapserver` would be interpreted as:

`ldap://%{username}@ldapserver:389`
### 14.5.2. Deployment

As this module reauthenticates a user against the provided LDAP server, challenge response password authentication schemes will not work. Momentum will need the username and password in clear form (not hashed) in order to successfully restage the authentication attempt internally to the LDAP server.

The use of SSL/TLS on connections supporting this method of authentication are strongly recommended as it may be possible for an attacker to intercept a user's password otherwise.

| [Prev](modules.auth_ds.php)  | [Up](modules.php) |  [Next](modules.auth_mysql.php) |
| 14.4. auth_ds – Datasource based SMTP Authentication  | [Table of Contents](index.php) |  14.6. auth_mysql – MySQL Based SMTP Authentication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)