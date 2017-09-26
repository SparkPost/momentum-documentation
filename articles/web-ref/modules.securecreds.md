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

| 14.61. securecreds – Module |
| [Prev](modules.scriptlet.php)  | Chapter 14. Modules Reference |  [Next](modules.seedlist.php) |

## 14.61. securecreds – Module

<a class="indexterm" name="idp21116624"></a>

**Configuration Change. ** This feature is available as of version 3.2.

The securecreds module enforces password encryption and implements credential retrieval operations when certain facilities are accessed. If this module is enabled the following facilities make use of it:

*   All datasource modules

*   ecconfigd, repository management

*   eccfg, the user tool for direct interaction with the configuration repository

*   web UI

OpenSSL’s EVP API performs the encryption and decryption using a selectable block cipher and block mode, which will default to AES-256 using cipher-block chaining (CBC). Selectable ciphers are determined by OpenSSL’s available implementations.

This module is used in conjunction with the [credmgr](executable.credmgr.php "credmgr") tool.

### Note

If during installation you choose to enable encrypted passwords the credentials database and key are created at the default location. Root has read/write access to this database and ecuser has read access. This is enforced by having credmgr explicitly set the ownership and permissions appropriately on the credentials files. If you wish to use secure credentials on each node, be sure to enable encryption on each node during installation.

If reversible encryption was not selected during installation, and you later wish to use this module, you must create the secure credentials database and the encryption key using the [credmgr](executable.credmgr.php "credmgr") tool. You must also create the following entries in the credentials database:

*   **credmgr set_cred --hostname=_ecconfigd_ -u ecuser -f ecconfigd -p *`password`***                                                                       

*   **credmgr set_cred --hostname=*`hostname`* -u ecuser -f pgsql -p *`password`***                                                                    

*   **credmgr set_cred --hostname=*`hostname`* -u ecuser -f ecdb -p *`password`***                                                                   

*   **credmgr set_cred --hostname=localhost -u ecuser -f pgsql -p *`password`***                                                                 

*   **credmgr set_cred --hostname=localhost -u ecuser -f ecdb -p *`password`***                                                                

### 14.61.1. Configuration

```
securecreds {
  Credentials = "/opt/msys/etc/credentials.db"
  Key = "/opt/msys/etc/credentials.key"
}
```

<dl class="variablelist">

<dt>Credentials</dt>

<dd>

This option defines the location of the credentials database. The default value for this option is `/opt/msys/etc/credentials.db`. This database is created using **credmgr**. In a cluster configuration this database must be present on each node.

</dd>

<dt>Key</dt>

<dd>

The location of the credentials key file. The default value for this option is `/opt/msys/etc/credentials.key`. This key is created using **credmgr**. In a cluster configuration this key must be present on each node.

</dd>

</dl>

### Warning

We strongly recommend that you not change the default values of these options. If you absolutely must change the location of these files please create symlinks to the default locations. Also note that the credentials database and key are local to each node in a cluster.

| [Prev](modules.scriptlet.php)  | [Up](modules.php) |  [Next](modules.seedlist.php) |
| 14.60. scriptlet – Module  | [Table of Contents](index.php) |  14.62. seedlist – Seedlist Integration |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)