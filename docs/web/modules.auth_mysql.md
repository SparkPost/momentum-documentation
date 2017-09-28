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

| 14.6. auth_mysql – MySQL Based SMTP Authentication |
| [Prev](modules.auth_ldap.php)  | Chapter 14. Modules Reference |  [Next](modules.auth_radius.php) |

## 14.6. auth_mysql – MySQL Based SMTP Authentication

<a class="indexterm" name="idp10666192"></a>
### Note

This module has been deprecated and is no longer available in version 3.0\. We recommend that new deployments use the datasource layer and the datasource based authentication module. See [Section 14.4, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "14.4. auth_ds – Datasource based SMTP Authentication") for more details.

This module allows Momentum to provide authorized SMTP sessions via SMTP AUTH by using a MySQL server as the authentication bridge. When a user connects to Momentum, if authorization is supported, it will attempt to authenticate the user by querying the MySQL server. If that query returns meaningful results, then the user's SMTP authorization request will be approved.

### 14.6.1. Configuration

```
Esmtp_Listener = (
  *:587     [
      0.0.0.0/0 = (
        limits [ idle_time = 300 ]
        LOGIN [
          extension = AUTH
          extension_argument = LOGIN
          uri = "mysql://noop"
        ]
        continue
      )
    ]
)

Module auth/auth_mysql auth_mysql {
  dbname = "phpmasterdb"
  dbhost = "localhost"
  dbuser = "mail"
  dbpass = "chooseabettersecret"
  dbport = 3306
  dbquery = "SELECT username FROM users WHERE username = '%{username}'
             AND passwd = encrypt('%{password}', passwd)"
}
```

If `dbport` is not specified, `3306` is assumed.

### 14.6.2. Deployment

Momentum will need the username and password in clear form (not hashed) in order to successfully connect to the MySQL database. The use of SSL/TLS on connections supporting this method of authentication are strongly recommended, as it may be possible for an attacker to intercept a user's password otherwise.

| [Prev](modules.auth_ldap.php)  | [Up](modules.php) |  [Next](modules.auth_radius.php) |
| 14.5. auth_ldap – LDAP Based SMTP Authentication  | [Table of Contents](index.php) |  14.7. auth_radius – RADIUS based SMTP Authentication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)