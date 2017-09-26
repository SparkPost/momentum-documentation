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

| create_ssl_cert |
| [Prev](executable.ad_summary.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.credmgr.php) |

<a name="executable.create_ssl_cert"></a>
## Name

create_ssl_cert — create a self-signed SSL certificate

## Synopsis

`/opt/msys/ecelerity/bin/create_ssl_cert` { *`service`* } { *`hostname`* } { *`prefix`* } [ *`user`* ]

<a name="idp12917488"></a>
## Description

During installation, self-signed SSL certificates valid for one year are created for some services. Use this command to create a new certificate when the original expires. When a certificate expires, you will see an error such as the following:

```
ERROR: premature EOF in "svn update '--config-dir' '/opt/msys/ecelerity/etc/.eccfg' »
'--username' 'ecuser' '--no-auth-cache' '--non-interactive' '--trust-server-cert' '.'"
svn: OPTIONS of 'https://mail2:2027/config/default/boot': Server certificate »
verification failed: certificate has expired, issuer is not trusted
```

To create a new certificate, first stop the appropriate service and remove the old certificate. Then issue the **create_ssl_cert** command. For example, the following command creates a certificate for the **ecconfigd** service:

shell> /opt/msys/ecelerity/bin/create_ssl_cert ecconfigd *`hostname`* \
/var/ecconfigd/apache ecuser

The parameters passed to this command are as follows:

<dl class="variablelist">

<dt>*`service`*</dt>

<dd>

The following services can be specified with this command:

*   `ecconfigd` - Momentum Configuration Server

    The **ecconfigd** service requires SSL and a certificate is created when Momentum is installed. For this reason, you will see the following message during installation:

    ```
    Generating a 2048 bit RSA private key
    ...
    writing new private key to '/var/ecconfigd/apache/server.key'
    ```

*   `msyspg` - Postgresql Server

    During installation, you can choose to use SSL for PostgreSQL.

</dd>

<dt>*`hostname`*</dt>

<dd>

Specify the hostname of the machine that hosts the service for which you are creating a certificate.

</dd>

<dt>*`prefix`*</dt>

<dd>

For the **ecconfigd** service, use `/var/ecconfigd/apache`. For the **msyspg** service, use `/opt/msys/3rdParty/share/postgresql`.

</dd>

<dt>*`user`*</dt>

<dd>

For the **ecconfigd** service, use `ecuser`. For the **msyspg** service, use `msyspg`. If you do not specify a user, the user defaults to `ecuser`.

</dd>

</dl>

<a name="idp12725216"></a>
## See Also

[ecconfigd](executable.ecconfigd.php "ecconfigd"), [Section 29.2, “Running the PostgreSQL Server”](postgresql.server.php "29.2. Running the PostgreSQL Server")

| [Prev](executable.ad_summary.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.credmgr.php) |
| ad_summary  | [Table of Contents](index.php) |  credmgr |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)