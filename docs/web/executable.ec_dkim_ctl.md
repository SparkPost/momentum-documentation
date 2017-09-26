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

| ec_dkim_ctl |
| [Prev](executable.ec_dbupgrade.php)  | 11.2. Executable Commands |  [Next](executable.ec_dump_config.php) |

<a name="executable.ec_dkim_ctl"></a>
## Name

ec_dkim_ctl — Manipulate the DK/DKIM database

## Synopsis

`/opt/ecelerity/bin/ec_dkim_ctl` [ --add-dk *`domain,selector,keyfile`* ]

`/opt/ecelerity/bin/ec_dkim_ctl` [ --add-dkim *`domain,selector,keyfile`* ]

`/opt/ecelerity/bin/ec_dkim_ctl` [ --delete-dk *`domain`* ]

`/opt/ecelerity/bin/ec_dkim_ctl` [ --delete-dkim *`domain`* ]

`/opt/ecelerity/bin/ec_dkim_ctl` [ -h ]

`/opt/ecelerity/bin/ec_dkim_ctl` [ --list ]

### Note

When adding a domain use commas to separate values.

<a name="idp7496448"></a>
## Description

**ec_dkim_ctl** is used to manipulate a small SQLite database that can be used in conjunction with the DK and DKIM Sieve actions for signing e-mail messages. If the database does not already exist, adding a domain creates the `dkim_db` database in the `/var/log/ecelerity` directory. Its schema is as follows:

```
CREATE TABLE ec_dkim_conf (
  domain varchar(255) PRIMARY KEY,
  selector varchar(255) NOT NULL,
  keyfile varchar(255))

CREATE TABLE ec_dk_conf (
  domain varchar(255) PRIMARY KEY,
  selector varchar(255) NOT NULL,
  keyfile varchar(255))
```

This command has the following options:

<dl class="variablelist">

<dt>--add-dk domain,selector,keyfile</dt>

<dd>

Add a domain to the DomainKeys table with the defined selector and keyfile. The keyfile option may be empty.

</dd>

<dt>--delete-dk domain</dt>

<dd>

Delete a domain from the DomainKeys table.

</dd>

<dt>--add-dkim domain,selector,keyfile</dt>

<dd>

Add a domain to the DKIM table with the defined selector and keyfile. The keyfile option may be empty.

</dd>

<dt>--delete-dkim domain</dt>

<dd>

Delete a domain from the DKIM table

</dd>

<dt>-h</dt>

<dd>

Show a help message.

</dd>

<dt>--list</dt>

<dd>

List the domains in the DK and DKIM tables.

</dd>

<dt>--version or -V</dt>

<dd>

Show version information.

</dd>

</dl>

To use the database configure Momentum as follows:

<a name="example.ec_dkim_ctl"></a>

**Example 11.1. Datasource configuration**

```
Module datasource/ds_core ds_core {
  dkim_db [
    uri = "sqlite:/var/log/ecelerity/dkim_db"
  ]
}

Module datasource/ds_sqlite ds_sqlite { }

Validate validate/sieve sieve {
  hook:core_final_validation [
    script = "/opt/ecelerity/etc/dkim.siv"
    async = "false"
  ]
}
```

For the Sieve functions specific to Domain Keys and DKIM see [ec_dk_responsible_domain](sieve.ref.ec_dk_responsible_domain.php "ec_dk_responsible_domain") and following.

<a name="idp7517536"></a>
## See Also

[Section 14.24, “domainkeys – Yahoo! DomainKeys”](modules.domainkeys.php "14.24. domainkeys – Yahoo! DomainKeys") and [Section 14.22, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.22. dkim – DomainKeys Identified Mail Signatures")

| [Prev](executable.ec_dbupgrade.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_dump_config.php) |
| ec_dbupgrade  | [Table of Contents](index.php) |  ec_dump_config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)