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

| credmgr |
| [Prev](executable.create_ssl_cert.php)  | 11.2. Executable Commands |  [Next](executable.ec_admigrate.php) |

<a name="executable.credmgr"></a>
## Name

credmgr — manipulate credentials used with the securecreds module

## Synopsis

`/opt/msys/ecelerity/bin/credmgr` { create_db }

`/opt/msys/ecelerity/bin/credmgr` { create_key }

`/opt/msys/ecelerity/bin/credmgr` { del_cred }

`/opt/msys/ecelerity/bin/credmgr` { get_cred }

`/opt/msys/ecelerity/bin/credmgr` { set_cred }

<a name="idp13085744"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.2.

**credmgr** is used in conjunction with the securecreds module. Use it to create the credentials database and the credentials key and to set, get and delete credentials. If you are not using [Section 14.61, “securecreds – Module”](modules.securecreds.php "14.61. securecreds – Module") you do not need to be concerned with this command.

### Note

If you are using this tool in a cluster configuration, you must use this tool to set up credentials on each node.

The credentials database is implemented as a SQLite 3 database. Note the following points:

*   If during installation you choose to enable encrypted passwords the credentials database and key are created at the default location. Root has read/write access to this database and ecuser has read access. This is enforced by having credmgr explicitly set the ownership and permissions appropriately on the credentials files.

*   In a cluster configuration, the credential database and key are local to each node.

*   The credentials database stores usernames and passwords for facilities (or services) running on specified hosts.

*   The username, hostname and facility name serve as the primary key into the credentials database.

*   The password is stored in an encrypted form, and can be decrypted using the credentials key. The key file should only be available to the root and ecuser system accounts. This is enforced by **credmgr** which explicitly sets the ownership and permissions.

The actions that you can perform using this command are:

*   `create_db` – create the SQLite database where the credentials will be stored. If you wish to use the securecreds module, perform this action immediately after installation.

*   `create_key` – create the encryption key. If you change an existing key all encrypted passwords will be re-encrypted.

*   `del-cred` – delete the credentials for the specified user or hostname.

*   `get_cred` – when used with no other options, gets all credentials. Otherwise this action retrieves the credentials of the specified user or hostname. If the user does not exist, no credentials are displayed.

*   `set_cred` – set the credentials for the specified user or hostname. Create credentials if the user does not exist.

The options available with **credmgr** are listed below. Not all options are applicable to all actions.

<dl class="variablelist">

<dt>-d *`db_file`*</dt>

<dd>

Set the location of the credentials database file. Use this option with the `create_db` action. The default value for this option is `/opt/msys/ecelerity/etc/credentials.db`.

### Warning

We strongly recommend that you *not* change the default location of the credentials database. If you absolutely must change the location of this file please create a symlink to the default location.

</dd>

<dt>-k *`key_file`*</dt>

<dd>

Set the location of the encryption key file. Use this option with the `create_key` action. The default value for this option is `/opt/msys/ecelerity/etc/credentials.key`.

### Warning

We strongly recommend that you *not* change the default location of the encryption key. If you absolutely must change the location of this file please create a symlink to the default location.

</dd>

<dt>-h *`hostname`* , --hostname=*`hostname`*</dt>

<dd>

Set, get or delete the credentials associated with the specified hostname. Use this option along with the `username` and `facility` options.

</dd>

<dt>-u *`username`* , --username=*`username`*</dt>

<dd>

Set, get or delete the credentials associated with the specified username. Use this option along with the `facility` and `hostname` options.

</dd>

<dt>-f *`facility`* , --facility=*`facility`*</dt>

<dd>

Set, get or delete the credentials associated with the specified facility. The facility name identifies the type of service associated with a set of credentials. For example, “ldap” indicates that the credentials apply to an LDAP service. Use this option along with the `username` and `hostname` options.

Facility names are as follows:

*   `pgsql` – the built-in PostgreSQL database

*   `odbc` – any ODBC databases

*   `mysql` – any MySQL databases

*   `ldap` – any LDAP services

*   `proxy` – any proxy server service

*   `eccfg` – the repository tool. Use the hostname `ecconfigd` and the username `ecuser` with this facility.

*   `ecconfigd` – the repository server. Use the hostname `_ecconfigd_` and the username `ecuser` with this facility

*   `ecdb` – this facility is used by the web UI. Specify the Momentum PostgreSQL server as the hostname and use the service credentials.

</dd>

<dt>-p *`password`* , --password=*`password`*</dt>

<dd>

Set, get or delete a password in plain text. Use this option along with the `username` `hostname` and `facility` options.

</dd>

<dt>-P</dt>

<dd>

When specified in list credential mode (`get_cred` with no other options), this option shows clear text passwords

</dd>

<dt>--cipher=[aes | des_ede3_cbc |...]</dt>

<dd>

Encrypt or decrypt a cipher type. This option defaults to `aes`. Use **`man enc`**      for all supported ciphers on your system.

</dd>

<dt>--key_size=[16 | 24 | 32]</dt>

<dd>

Length of the key size, in octets. This option defaults to `32`.

</dd>

<dt>--block_mode=[cbc | ecb | ofb |...]</dt>

<dd>

Encrypt or decrypt block mode. This option defaults to `cbc`.

</dd>

</dl>

Examples of usage follow:

<a name="executable.credmgr.examples"></a>

**Example 11.1. credmgr examples**

```
/opt/msys/ecelerity/bin/credmgr create_db -d /opt/msys/ecelerity/etc/credentials.db
            : create database at given place
/opt/msys/ecelerity/bin/credmgr create_key -k /opt/msys/ecelerity/etc/credentials.key
            : create keyfile at given place, with default encryption/decryption algorithm:
              aes_256_cbc on Linux & aes_128_cbc on Solaris
/opt/msys/ecelerity/bin/credmgr get_cred
            : list all the user entries in the database, without credential/password
/opt/msys/ecelerity/bin/credmgr get_cred -P
            : list all the entries in the database, with credential/password shown as clear text
/opt/msys/ecelerity/bin/credmgr get_cred --hostname=host1 --username=user1 --facility=facy1
            : retrieve the password for the user defined by hostname(host1), username(user1)
            & facility(facy1)
/opt/msys/ecelerity/bin/credmgr set_cred --hostname=host1 --username=user1 --facility=facy1 \
            -p password1
            : set the password for the user with hostname(host1),
              username(user1) & facility(facy1) to "password1"
              password is updated for existing user
/opt/msys/ecelerity/bin/credmgr del_cred --hostname=host1 --username=user1 --facility=facy1
            : delete the credential entry for the user with hostname(host1), username(user1)
            & facility(facy1)
```

<a name="idp13161152"></a>
## See Also

[Section 14.61, “securecreds – Module”](modules.securecreds.php "14.61. securecreds – Module")

| [Prev](executable.create_ssl_cert.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_admigrate.php) |
| create_ssl_cert  | [Table of Contents](index.php) |  ec_admigrate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)