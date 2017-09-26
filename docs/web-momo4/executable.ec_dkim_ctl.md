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
| [Prev](executable.ec_ctl.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.ec_dump_config.php) |

<a name="executable.ec_dkim_ctl"></a>
## Name

ec_dkim_ctl — manipulate the DK/DKIM database

## Synopsis

`/opt/msys/ecelerity/bin/ec_dkim_ctl` [ --add-dk *`domain,selector,keyfile`* ]

`/opt/msys/ecelerity/bin/ec_dkim_ctl` [ --add-dkim *`domain,selector,keyfile`* ]

`/opt/msys/ecelerity/bin/ec_dkim_ctl` [ --delete-dk *`domain`* ]

`/opt/msys/ecelerity/bin/ec_dkim_ctl` [ --delete-dkim *`domain`* ]

`/opt/msys/ecelerity/bin/ec_dkim_ctl` [ -h ]

`/opt/msys/ecelerity/bin/ec_dkim_ctl` [ --list ]

### Note

When adding a domain, use commas to separate values.

<a name="idp11502048"></a>
## Description

**ec_dkim_ctl** is used to manipulate a small SQLite database that can be used in conjunction with the DK and DKIM actions for signing e-mail messages. If the database does not already exist, adding a domain creates the `dkim_db` database in the `/var/log/ecelerity` directory. Its schema is as follows:

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

<a name="idp11521792"></a>
## See Also

[Chapter 22, *Using Yahoo! DomainKeys*](using_domainkeys.php "Chapter 22. Using Yahoo! DomainKeys") , [Chapter 23, *Using DomainKeys Identified Mail (DKIM) Signatures*](using_dkim.php "Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures") 

| [Prev](executable.ec_ctl.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.ec_dump_config.php) |
| ec_ctl  | [Table of Contents](index.php) |  ec_dump_config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)