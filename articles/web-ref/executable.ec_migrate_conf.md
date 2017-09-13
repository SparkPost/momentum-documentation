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

| ec_migrate_conf |
| [Prev](executable.ec_md5passwd.php)  | 11.2. Executable Commands |  [Next](executable.ec_rotate.php) |

<a name="executable.ec_migrate_conf"></a>
## Name

ec_migrate_conf — migrate from Momentum version 2.2 to version 3.0

## Synopsis

`/opt/msys/ecelerity/bin/ec_migrate_conf` { *`/path/to/file`* } [ *`/other/file`* ]

<a name="idp13710736"></a>
## Description

**ec_migrate_conf** converts a `ecelerity.conf` file from version 2.2 syntax to version 3.0 syntax. Specify the configuration file that you wish to convert and optionally the conversion file. Use this command in the following way:

`shell> /opt/msys/ecelerity/bin/ec_migrate_conf ecelerity.conf`

In this case the configuration file is converted in place and the original is saved as `ecelerity.conf.bak`. You can also specify a new configuration file using redirection:

shell> /opt/msys/ecelerity/bin/ec_migrate_conf  <
  `conf_file` > *`new.conf`*

This will read the specified configuration file and output the changed file the new configuration file.

If your configuration file includes other files, you must migrate each file individually. Once your original file has been converted, use the **ec_dump_config** command to validate the script migration prior to starting Momentum. For more information see [ec_dump_config](executable.ec_dump_config.php "ec_dump_config").

<a name="ec_migrate_conf.using"></a>
### Using ec_migrate_conf

<a class="indexterm" name="idp13720128"></a>

This script generates a syntactically valid configuration file. Find below a description of the actions taken.

The following deprecated options are removed:

*   `async_close_concurrency`

*   `async_reception_swap_out`

*   `extensions_dir`

*   `async_sending_swap_in`

*   `async_spool_in`

*   `async_swap_out`

*   `async_swap_in`

*   `async_unlink_backlog`

*   `async_unlink_concurrency`

*   `batch_unlink_concurrency`

*   `worker_cpu_concurrency`

*   `worker_io_concurrency`

*   `control_listener_timeout`

The following modules no longer exist and are removed:

*   auth_ldap

*   auth_mysql

If you had ec_logger and bounce_loggers named ec_logger_rt and bounce_logger_rt, these will be removed from your configuration file. If you are using the web UI, these loggers are required. Add the following code to your configuration file:

```
ec_logger "ec_logger_rt" {
  mainlog = "jlog:///var/log/ecelerity/mainlog.rt=>ec_rt_stats"
  rejectlog = "jlog:///var/log/ecelerity/rejectlog.rt=>ec_rt_stats"
  log_errors = "false"
}

bounce_logger "bounce_logger_rt" {
  bouncelog = "jlog:///var/log/ecelerity/bouncelog.rt=>ec_rt_stats"
}
```

The following modules need not be explicitly referenced in the configuration file and are removed.

*   jlog

*   persist_io

*   ds_sqlite

*   bzip2

*   http_io

*   gzip

*   syslog_io

*   ds_ldap

*   ds_csv

*   ds_cdb

*   ds_iowrapper

*   ds_mysql

*   ds_pgsql

*   ds_odbc

To migrate regex_binding2 modules use the **migrate_regex_binding2** command. For more information see [migrate_regex_binding2](executable.migrate_regex_binding2.php "migrate_regex_binding2").

The migration script returns a message to the user telling what was converted. Review this message.

<a name="idp13757760"></a>
## See Also

[migrate_regex_binding2](executable.migrate_regex_binding2.php "migrate_regex_binding2") and [ec_dump_config](executable.ec_dump_config.php "ec_dump_config")

| [Prev](executable.ec_md5passwd.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_rotate.php) |
| ec_md5passwd  | [Table of Contents](index.php) |  ec_rotate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)