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

| 3.2. Web Console Authentication |
| [Prev](webconsole.admin.php)  | Chapter 3. The Web Console |  [Next](webconsole.configuration.php) |

## 3.2. Web Console Authentication

### 3.2.1. Digest HTTP Authentication

A web console user is added during installation. This user has access to the web console using digest HTTP authentication. If you wish to add other users run **`/opt/ecapache/bin/ec_uipasswd useradd <user> <pass>`**                       . To give a user administrative privileges run **`/opt/ecapache/bin/ec_uipasswd priv <user> admin`**                   . Doing this adds a user to the URI defined in the access control list of the Control_Listener stanza. Typically this URI has a value of `digest:///opt/ecelerity/etc/console_passwd`.

### Note

The **ec_uipasswd** command is not available when using Momentum in a cluster configuration. To add users to the web console use [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd").

For help using the **ec_uipasswd** command, enter **/opt/ecapache/bin/ec_uipasswd --`help`**         . You should see the following output:

```
Usage:
ec_uipasswd [options] (command) (username) [additional arguments]

Examples:
ec_uipasswd useradd testuser
ec_uipasswd userdel testuser
ec_uipasswd bindingadd testuser binding1.com binding2.com testbindings.*
ec_uipasswd bindingdel testuser testbindings.* binding1.com
ec_uipasswd priv testuser admin
ec_uipasswd priv testuser user

Commands:
useradd         Creates a new webconsole user.
userdel         Deletes a webconsole user.
bindingadd      Adds a binding for a specified webconsole user.
bindingdel      Removes a binding for a specified webconsole user.
priv            Sets the access privileges for a specified user.

Options:
-h, --help      Display help information.
-v, --version   Display version information
```

**Configuration Change. ** This feature is available starting from Momentum 2.2.

### 3.2.2. Enabling Database Authentication for the Web Console

Instead of using HTTP Digest authentication you can use database authentication to control access to the web console. To enable database authentication add the following to your `ecelerity.conf` file:

```
Module datasource/ds_core ds_core {
    webconsoleauthdb [
        cache_life = "10"
        uri = "sqlite:/opt/ecapache/data/auth_db"
    ]
}

Module datasource/ds_sqlite ds_sqlite {
}

Module auth/auth_ds auth_ds {
    register:webconsoleauth [
        cache = "webconsoleauthdb"
        map = "userpw"
        query = "SELECT password FROM auth WHERE username = :user"
        returns_password = "true"
        type = "md5"
    ]
        map:userpw [
        user = "%{username}"
    ]
}
```

Also modify your Control_Listener stanza to use the `webconsoleauthdb` data source:

```
Control_Listener = (
  /tmp/2025
  *:2025 <proto=ipv4> [
    0.0.0.0/0 = ( DIGEST-MD5
      [ realm = "Momentum Console"
        uri = "webconsoleauth://" ]
    )
  ]
)
```

Users must be added to the `auth_db` database referenced by the datasource module option `uri`. This database is created in the `/opt/ecapache/data/` directory when Momentum is installed. The table `auth_db.auth` table has the following structure:

```
CREATE TABLE auth (
    username  TEXT PRIMARY KEY,
    password  TEXT,
    privilege TEXT DEFAULT "user"
);
```

To add a user, navigate to the `/opt/ecapache/data` directory and execute the command **`/opt/ecelerity/3rdParty/sqlite-3.3/bin/sqlite3 auth_db`**          and then INSERT a record. By default a new user has `user` privileges. Create an administrative user in the following way:

`sqlite> INSERT INTO auth VALUES("superuser", "password", "admin");`

Be sure to create an administrative user so that you can have full access to the web console. For more information see [Section 3.2.2.2, “Administering Users From the Web Console”](webconsole.authentication.php#webconsole.administer.users "3.2.2.2. Administering Users From the Web Console").

**3.2.2.1. The `user` Web Console User**

A user created with the `user` privilege has no access to the Config or Domain tabs of the web console nor is this user associated with any bindings. When a non-admin user first logs in, the following message is displayed on the dashboard page:

```
No valid bindings have been assigned to your account. To display any
information, you must have a least one valid binding assigned to your
account. Contact your administrator to correct this problem.
```

In order to associate a user with a binding you must create a record in the `auth_db.bindings` table. This table has the following structure:

```
CREATE TABLE bindings (
    username  TEXT,
    binding   TEXT,
    PRIMARY KEY (username, binding)
);
```

Associate an unprivileged user with a binding by issuing an SQL statement such as the following:

`sqlite> INSERT INTO bindings VALUES('regular_user','examplebinding');`

Doing this gives the unprivileged user, `regular_user` access to data related to the binding `examplebinding`.

**3.2.2.2. Administering Users From the Web Console**

Rather than administering users from the SQLite command line, you can administer them from the web console. If you are using database authentication, a Manage Users link appears at the top of the Config page. This link only appears when a user with `admin` privileges is logged in. Clicking this link takes you to the `Manage Users` page pictured below:

<a name="fig.webconsole.admin.users"></a>

**Figure 3.1. Administer users**

![Administer users](images/webconsole/ecweb_admin_user.png)

You can delete a user by clicking the check box associated with the user and then clicking the Delete Selected button. You may delete any user except the original administrative user.

Click the Add User button in order to add a user. You may then choose a user name and password.

Users are always created with `user` privileges. To give a user `admin` privileges, click the user's name and choose `admin` from the Privilege Level drop-down list box.

You can add a binding for a user in the same way. Click the user's name and then add the desired binding.

<a name="fig.webconsole.binding.user"></a>

**Figure 3.2. Add a binding to a user**

![Add a binding to a user](images/webconsole/ecweb_add_user_binding.png)

| [Prev](webconsole.admin.php)  | [Up](webconsole.php) |  [Next](webconsole.configuration.php) |
| 3.1. Administering the Web Console  | [Table of Contents](index.php) |  3.3. Configuration of Momentum |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)