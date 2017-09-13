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

| adaptive_loader |
| [Prev](executable.ad_summary.php)  | 11.2. Executable Commands |  [Next](executable.adaptivedb.php) |

<a name="executable.adaptive_loader"></a>
## Name

adaptive_loader — the script that loads the adaptive data used by the web UI

## Synopsis

`/opt/msys/ecelerity/bin/adaptive_loader` [ --cache-db *`cache_db_filename`* ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ --driver *`string`* ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ --driver-pass *`driver_password`* ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ --driver-user *`username`* ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ -h | --help ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ -l | --log *`log_file`* ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ --man ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ --no-set-user ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ -P | --pidfile *`pidfile`* ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ --prune-now ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ --retention ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ -u | --user *`user_name`* ]

`/opt/msys/ecelerity/bin/adaptive_loader` [ -v | --verbose ]

<a name="idp12972640"></a>
## Description

This script loads the adaptive data used to create the adaptive reports in the web UI. Typically you should not need to invoke this script directly or change the default options. The default values for all options are determined by [ec_rotate](executable.ec_rotate.php "ec_rotate").

### Note

If you do need to change the default values for options, consult with support.

<dl class="variablelist">

<dt>--cache-db *`cache_db_filename`*</dt>

<dd>

Specify the location of the SQLite cache database to use. This is used to improve performance by caching frequently-used normalized data objects from PostgreSQL on the local server.

In the `ec_rotate.conf` file this is equivalent to setting `adaptive_loader_cache_db`.

</dd>

<dt>--driver *`string`*</dt>

<dd>

Specify an alternate driver connection string. The default value for this option is `dbi:Pg:dbname=ecelerity;connect_timeout=300`.

In the `ec_rotate.conf` file this is equivalent to setting the `adaptive_loader_driver` option.

</dd>

<dt>--driver-pass *`password`*</dt>

<dd>

Specify the driver user password. There is no default value for this option.

</dd>

<dt>--driver-user *`username`*</dt>

<dd>

Specify the databse driver user.

The default value for this option is `ecuser`.

</dd>

<dt>-h | --help</dt>

<dd>

Display the help message and exit.

</dd>

<dt>-l | --log</dt>

<dd>

Specify the jlog file to use. The default value for this option is `/var/log/ecelerity/adaptive.rt`.

In the `ec_rotate.conf` file this is equivalent to setting the `adaptive_loader_log` option.

</dd>

<dt>-m | --man</dt>

<dd>

Display the man page and exit.

</dd>

<dt>--no-set-user</dt>

<dd>

Do not set the user ID. The default is to setuid to `ecuser`.

</dd>

<dt>-P | --pidfile *`pidfile`*</dt>

<dd>

Specify the process ID file. The default value for this option is `/var/run/ecelerity`.

</dd>

<dt>--prune-now</dt>

<dd>

Do an immediate prune of historical data in the database. Under default operation, this only happens on the hour, in order to not put excess load on the database.

</dd>

<dt>--retention</dt>

<dd>

Specify the age of historical data that should be retained when doing a prune of old data from the database. If set to `0`, no data will be pruned. Unless this is used in conjunction with --prune-now, it will only have an effect when the script is run on the hour.

</dd>

<dt>-u | --user *`user_name`*</dt>

<dd>

Define the user that the script will run as. The default value for this option is `ecuser`.

In the `ec_rotate.conf` file this is equivalent to setting the `adaptive_loader_user` option.

</dd>

<dt>-v | --verbose</dt>

<dd>

Output in verbose mode. In the `ec_rotate.conf` file this is equivalent to setting `adaptive_loader_verbose = yes`.

</dd>

</dl>

<a name="idp13011152"></a>
## See Also

[ec_rotate](executable.ec_rotate.php "ec_rotate"), [Section 3.6.10, “Adaptive Reports”](web3.reports.php#web3.reports.adaptive "3.6.10. Adaptive Reports"), [Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery")

| [Prev](executable.ad_summary.php)  | [Up](exe.commands.details.php) |  [Next](executable.adaptivedb.php) |
| ad_summary  | [Table of Contents](index.php) |  adaptivedb |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)