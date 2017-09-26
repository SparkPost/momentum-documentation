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

| 14.4. auth_ds – Datasource based SMTP Authentication |
| [Prev](modules.as_logger.php)  | Chapter 14. Modules Reference |  [Next](modules.auth_ldap.php) |

## 14.4. auth_ds – Datasource based SMTP Authentication

<a class="indexterm" name="idp10542592"></a>

**Configuration Change. ** This feature was introduced in Momentum 2.1.1.

With this module Momentum can provide authenticated SMTP sessions via SMTP AUTH by using any supported datasource as the authentication bridge. When a user connects to Momentum, if authentication is supported, it will attempt to authenticate the user by issuing a query against the configured datasource. If the result of that query is "true" then the user was successfully identified. Since the module uses the datasource layer it can take advantage of the built-in caching mechanism to avoid putting pressure on your authentication data stores. The ds_core module and datasource drivers are loaded automatically as required and do not need to be explicitly included. See [Section 14.25, “ds_core – Datasource Query Core”](modules.ds_core.php "14.25. ds_core – Datasource Query Core") for more information.

The `webui-common.conf` file has a working auth_ds configuration that is enabled by default.

### Note

This feature requires that the ds_core module and at least one datasource driver be loaded.

You may define multiple authentication schemes against different datasources, and configure your listeners to use a different scheme depending on the connecting IP address.

The following example demonstrates how to configure a SQLite database which stores the username and password in clear text, and then directs the LOGIN authentication method to use that database as the authentication store. We recommend employing TLS when using LOGIN authentication, as the password is sent over the wire in clear text.

### Note

Any hosts specified by the `relay_hosts` option are not subject to any SMTP authentication that you may have implemented. For more information see [relay_hosts](conf.ref.relay_hosts.php "relay_hosts").

<a name="example.auth_ds"></a>

**Example 14.4. auth_ds module**

```
# Load the datasource core and define a cache named SQLite
# that uses the database at /path/to/sqlite.db
Module datasource/ds_core ds_core {
  sqlite [
    uri =  "sqlite:/path/to/sqlite.db"
  ]
}

# Load the SQLite datasource driver
Module datasource/ds_sqlite ds_sqlite {}

# Load the authentication module
Module auth/auth_ds auth_ds {
  # register "ecauth" as an authentication scheme
  # this is referenced by the Esmtp_Listener below.
  register:ecauth [
    # This query will return a row containing the value 1 if
    # the username and password match up
    query = "SELECT 1 AS ALLOW FROM USERS WHERE USER = :user
             and PASSWORD = :pass"
    # The query will be presented against the SQLite cache
    cache = "sqlite"
    # parameters for the query will be resolved using the map:userpw
    # defined below
    map = "userpw"
  ]

  # This map is used to resolve the placeholders in the query by substituting
  # the username and password supplied by the user.
  map:userpw [
    user = "%{username}"
    pass = "%{password}"
  ]
}

Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      # Activate the AUTH LOGIN smtp extension
      LOGIN [
        extension = "AUTH"
        extension_argument = "LOGIN"
        # use "ecauth" as the authentication backend
        uri = "ecauth://"
      ]
      continue
    )
  ]
)
```

When a user attempts to authenticate, the SMTP listener routes the authentication attempt to the authentication module, which then uses the query that you've configured. If the results of the query are not already known, a query is run asynchronously to obtain them, and the SMTP session is suspended, allowing Momentum to continue to service other sessions. When the results come back, the first column of the first row is inspected; if it is a non-zero value, then the authentication is considered successful.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

`ucrypt` style encryption support for storing passwords has been added. It is enabled by setting the type parameter in the ecauth block as above. The type parameter can take the values "ucrypt" and "md5" specifying Unix style and digest md5 style respectively. To make use of the new ucrypt support add the following line to the scheme.

`type = "ucrypt"`

If you're using a datasource, such as LDAP, where it is not possible to guarantee the ordering of the results returned, you may add a `password_column` option to the `auth_ds` module configuration to specify which named column holds the password in the result set.

<a name="example.auth_ds.password_column"></a>

**Example 14.5. password_column**

```
# Load the authentication module
Module auth/auth_ds auth_ds {
  register:ecauth [
    ...
    # this scheme returns a password in the column named "password"
    password_column = "password"
    returns_password = "true"
  ]
}
```

### Configuration Options

The following options are available in authentication schemes:

<dl class="variablelist">

<dt>cache</dt>

<dd>

The datasource cache to execute the query against.

</dd>

<dt>map</dt>

<dd>

The parameter expansion map to use.

</dd>

<dt>query</dt>

<dd>

The query to be executed.

</dd>

<dt>type</dt>

<dd>

The encryption type for passwords in the data store. Enabled this by setting the type parameter within the ecauth block. If this is unspecified you can extract this from the data store as well using the `type_column` option.

The type parameter can take the values "ucrypt" and "md5" specifying Unix style and digest md5 style respectively.

</dd>

<dt>type_column</dt>

<dd>

The column name containing the encryption type for a given password. This corresponds with a `type_map` specifier.

</dd>

<dt>type_map</dt>

<dd>

A dictionary that maps a column to an encryption type. See [The `type_map` Option](modules.auth_ds.php#modules.auth_ds.type_map "The type_map Option") for complete information.

</dd>

<dt>returns_password</dt>

<dd>

Whether or not the query returns a password for validation inside the module, or simply a truth value (for validation inside the DB).

</dd>

</dl>

<a name="modules.auth_ds.type_map"></a>**The `type_map` Option. ** Type maps contain key-value pairs where the key is the contents of the column identified by the `type_column` option, and the value is one of the following:

<dl class="variablelist">

<dt>clear</dt>

<dd>

Cleartext

</dd>

<dt>ucrypt</dt>

<dd>

Unix crypt

</dd>

<dt>sha1_hex</dt>

<dd>

SHA1 encryption (hex representation)

</dd>

<dt>sha1_base64</dt>

<dd>

SHA1 encryption (base64 representation)

</dd>

<dt>ssha1</dt>

<dd>

Seeded SHA1 encryption

</dd>

<dt>md5</dt>

<dd>

MD5 encryption

</dd>

<dt>md5_hex</dt>

<dd>

MD5 encryption (hex representation)

</dd>

<dt>md5_base64</dt>

<dd>

MD5 encryption (base64 representation)

</dd>

<dt>hmac_md5</dt>

<dd>

HMAC MD5 encryption

</dd>

<dt>digest-md5</dt>

<dd>

Digest-MD5 encryption

</dd>

<dt>smd5</dt>

<dd>

Seeded MD5 encryption

</dd>

<dt>rfc2307</dt>

<dd>

RFC 2307 encryption specifiers (crypt, md5, smd5, sha, ssha)

</dd>

</dl>

### Parameter expansion maps

Use parameter expansion maps to map authentication parameters into your query. The maps consist of parameter names that map to interpolated value strings based on the authentication parameters listed below. This approach allows Momentum to take advantage of native prepared statement support that may be present in the underlying datasource drivers, while still allowing you a certain amount of freedom for string building.

The right hand side of the expansion maps consists of a string value. The string can contain `%{parametername}`, where `parametername` corresponds to one of the parameters listed below. When the query is executed, the parameter name is expanded to its value before being passed on to the data source. You may interpolate multiple parameters in a single string in this way, if desired.

<dl class="variablelist">

<dt>crypt</dt>

<dd>

Describes the level of crypto in use. Can be one of `clear` (for LOGIN), `md5`, `hmac_md5` (for CRAM-MD5) or `digest-md5` (for DIGEST-MD5).

</dd>

<dt>username</dt>

<dd>

The username.

</dd>

<dt>uri</dt>

<dd>

The uri specified in the listener configuration.

</dd>

<dt>password</dt>

<dd>

The password. This may be cleartext or it may have some level of crypto applied to it, according to the `crypt` parameter.

</dd>

<dt>nonce</dt>

<dd>

The nonce for MD5 based authenticators.

</dd>

<dt>realm , digest-uri</dt>

<dd>

Parameters for DIGEST-MD5 based auth.

</dd>

</dl>

### 14.4.1. Authenticating against MySQL

The following configuration excerpt demonstrates how to configure Momentum to authenticate against MySQL:

<a name="example.auth_ds.mysql"></a>

**Example 14.6. Using MySQL as a data store**

```
# Load the datasource core and define a cache named authdb
# that talks to a mysql server
Module datasource/ds_core ds_core {
  authdb [
    uri =  "mysql:host=localhost;port=3306;dbname=authdb; »
           user=ecdbuser;password=ecdbpassword"
  ]
}

# Load the mysql datasource driver
Module datasource/ds_mysql ds_mysql {}

# Load the authentication module
Module auth/auth_ds auth_ds {
  # register "mysqlauth" as an authentication scheme
  # this is referenced by the Esmtp_Listener below.
  register:mysqlauth [
    # This query will return a row containing the value 1 if
    # the username and password match up
    query = "SELECT 1 AS ALLOW FROM USERS WHERE USER = :user and
             PASSWORD = encrypt(:pass, PASSWORD)"
    # The query will be presented against the MySQL cache
    cache = "authdb"
    # parameters for the query will be resolved using the map:userpw
    # defined below
    map = "userpw"
  ]

  # This map is used to resolve the placeholders in the query by substituting
  # the username and password supplied by the user.
  map:userpw [
    user = "%{username}"
    pass = "%{password}"
  ]
}

Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      # Activate the AUTH LOGIN smtp extension
      LOGIN [
        extension = "AUTH"
        extension_argument = "LOGIN"
        # use "mysqlauth" as the authentication backend
        uri = "mysqlauth://"
      ]
      continue
    )
  ]
)
```

### Note

For licensing reasons the MySQL module does not ship with Momentum and must be downloaded separately. For instructions on downloading and installing this module see [Section 14.25.3.10, “MySQL”](modules.ds_core.php#modules.ds_core.ds_mysql "14.25.3.10. MySQL").

### 14.4.2. Authentication against LDAP

The precise configuration used to implement LDAP based authentication varies depending on your LDAP schema. If you are migrating from our older LDAP auth module, the authentication concept was that the username and password from the SMTP session would be used as the bind name and password used to establish a connection to the LDAP server. If the bind attempt was successful, then the user was deemed to have been authenticated. With *this* module, we also need to obtain results from an LDAP query.

The suggested approach for implementing LDAP authentication using the datasource layer is to craft an LDAP query that returns the common name of the user you are authenticating.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

In the case of an LDAP directory like the Openwave directory, you will need to be able to specify a type_map so that the server can correctly encrypt the provided password for comparison. The following example shows integration against an openwave directory:

<a name="example.auth_ds.ldap"></a>

**Example 14.7. Authenticating using ldap**

```
Module auth/auth_ds auth_ds {
   register:myscheme_openwave [
      query = "ldap:///?mailpassword,mailpasswordtype?sub? »
              (|(maillogin=$user)(mail=$user)(mailalternateaddress=$user))"
      cache = "openwave_directory"
      map = usermap
      returns_password = "true"
      password_column = "mailpassword"
      type_column = "mailpasswordtype"
      type_map = "openwave"
   ]
   map:usermap [
      user = "%{username}"
   ]
   type_map:openwave [
      C = "clear"
      U = "ucrypt"
      H = "sha1_hex"
      S = "ssha1"
      M = "smd5"
   ]
}
```

The LDAP driver supports a bind-only mode that allows connection and authentication without execution of a query. If it succeeds, it returns a "bind" column with a value of 1\. This is useful in cases where it is desirable to pass the credentials through from SMTP authentication to the LDAP directory, for example, to eliminate the need to change the LDAP query if authentication settings change.

The following example shows how to use the bind only feature.

<a name="example.auth_ds.bind"></a>

**Example 14.8. Using the bind-only feature**

```
Module auth/auth_ds auth_ds {
  register:ldapauthscheme [
    query = "ldap://ldaphostname/????bindname=uid=$user%2Cou=people »
           %2Cdc=example%2Cdc=com,x-bindpw=$pass"
    cache = "ldapauth"
    map = "userpw"
  ]
  map:userpw [
    user = "%{username}"
    pass = "%{password}"
  ]
}
```

| [Prev](modules.as_logger.php)  | [Up](modules.php) |  [Next](modules.auth_ldap.php) |
| 14.3. as_logger – Audit series logger  | [Table of Contents](index.php) |  14.5. auth_ldap – LDAP Based SMTP Authentication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)