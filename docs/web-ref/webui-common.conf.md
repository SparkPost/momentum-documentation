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

| webui-common.conf |
| [Prev](ecelerity.conf.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.adaptive_backstore_leveldb.php) |

<a name="webui-common.conf"></a>
## Name

webui-common.conf — Momentum web UI configuration file for the `ecdb` datasource and the `ecauth` authorization scheme

<a name="idp7293328"></a>
## Description

`/opt/msys/ecelerity/etc/conf/default/webui-common.conf` defines the `ecdb` datasource and the `ecauth` authorization scheme. These are used by both ecelerity and eccmgr when accessing the web UI and the user management database.

By default, this file is included in the `ecelerity.conf` file.

```
# Holds definitions needed by both ecelerity and eccmgr when used with
# the webui and user management database

Datasource "ecdb" {
  uri = ( "pgsql:dbname=ecelerity;user=ecuser" )
}

auth_ds {
  Scheme "ecauth" {
    Authenticate {
      query = "SELECT password from webconsole.users where username = :user"
      cache = "ecdb"
      map = [
        user = "%{username}"
      ]
      type = "md5"
      returns_password = "true"
      password_column = "password"
    }

    QueryGroups {
      query = "SELECT groupname from webconsole.groupassignments where username = :user"
      cache = "ecdb"
      group_column = "groupname"
      map = [
        user = "%{username}"
      ]
    }

    EnumGroups {
      query = "SELECT role from webconsole.roles"
      cache = "ecdb"
      group_column = "role"
    }
  }
}
```
<a name="idp7298416"></a>
## Datasource Stanza

The `datasource` module specifies the datasource that the `auth_ds` module uses. By default, the `datasource` module points to a PostgreSQL database.

### Note

The `ecdb` datasource defined in the `webui-common.conf` file is a temporary stub overridden by the `/opt/msys/etc/installer/ecelerity.d/ecdb.conf` file created during installation. For more information see [Section 2.2.3.1, “Authorization Using the `ecauth` Scheme”](conf.aaa.php#conf.control_authz.ecauth "2.2.3.1. Authorization Using the ecauth Scheme").

<a name="idp7303840"></a>
## auth_ds Module

The `auth_ds` module provides datasource-based SMTP authentication SMTP sessions for both the control listener and the web console.

The `ecauth` scheme is the authentication scheme referenced by the control listener in the default `ecelerity.conf` file, which enables authentication for a TCP/IP connection to the control listener.

<dl class="variablelist">

<dt>Authenticate Stanza</dt>

<dd>

The `Authenticate` stanza verifies login credentials.

The `ecauth` scheme verifies credentials by checking the `webconsole.users` table in the ecelerity database.

</dd>

<dt>QueryGroups Stanza</dt>

<dd>

The `QueryGroups` stanza searches for all the groups associated with the user. If you define this stanza, you must define the `cache` option within the scope of `QueryGroups`.

The `ecauth` scheme queries for groups by checking the `webconsole.groupassignments` table in the ecelerity database.

</dd>

<dt>EnumGroups Stanza</dt>

<dd>

The `EnumGroups` stanza enumerates all possible groups or roles.

The `ecauth` scheme queries for groups or roles by checking the `webconsole.roles` table in the ecelerity database.

</dd>

</dl>

<a name="idp7319024"></a>
## Using Alternate Datasources

To use an alternate datasource (such as MySQL), you must do two things:

*   You must change the `uri` option in the `Datasource` stanza.

*   You must make the appropriate changes to the `Authenticate`, `QueryGroups` and `EnumGroups` stanzas.

For example, you would make the following changes to use MySQL.

```
# Define a cache named authdb
# that talks to a mysql server

Datasource "authdb" {
  uri = ( "mysql:host=localhost;port=3306;dbname=authdb; »
           user=ecdbuser;password=ecdbpassword" )
}

# Load the authentication module
auth_ds {
  # register "mysqlauth" as an authentication scheme
  Scheme "mysqlauth" {
    Authenticate {
      # This query will return a row containing the value 1 if
      # the username and password match up
      query = "SELECT 1 AS ALLOW FROM USERS WHERE USER = :user and
               PASSWORD = encrypt(:pass, PASSWORD)"
      # The query will be presented against the MySQL cache
      cache = "authdb"
      # This map is used to resolve the placeholders in the query by substituting
      # the username and password supplied by the user.

      map = [
          user = "%{username}"
          pass = "%{password}"
      ]
    }
    QueryGroups {
      query = "SELECT gname from webconsole.mygroups where username = :user"
      cache = "ecdb"
      group_column = "gname"
      map = [
        user = "%{username}"
        pass = "%{password}"
      ]
    }

    EnumGroups {
      query = "SELECT user_role from webconsole.roles"
      cache = "ecdb"
      group_column = "user_role"
    }
  }
}
```
<a name="idp7327856"></a>
## Using External Authentication Systems

If you want to plug into an external authentication system that is defined in an `Authorization` stanza, you must configure the `EnumGroups` and `QueryGroups` stanzas. For example, you can use the `EnumGroups` stanza to return a list of all groups, and then present those groups in a list for for assigning permissions via an `Authorization` stanza. For more information see [Section 14.7, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "14.7. auth_ds – Datasource based SMTP Authentication").

<a name="idp7332160"></a>
## See Also

[Section 2.2, “Authentication, Authorization and Accounting”](conf.aaa.php "2.2. Authentication, Authorization and Accounting")

[Section 2.2.3.1, “Authorization Using the `ecauth` Scheme”](conf.aaa.php#conf.control_authz.ecauth "2.2.3.1. Authorization Using the ecauth Scheme")

[Section 3.9, “Administering Users From the Web Console”](web3.users.php "3.9. Administering Users From the Web Console")

[Section 14.7, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "14.7. auth_ds – Datasource based SMTP Authentication")

[Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core")

| [Prev](ecelerity.conf.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.adaptive_backstore_leveldb.php) |
| ecelerity.conf  | [Table of Contents](index.php) |  adaptive_backstore_leveldb |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)