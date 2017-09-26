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

| 6.2. The `mc_gen.conf` File |
| [Prev](mc.conf.3.5.php)  | Chapter 6. Configuration Files in Version 3.5 and Higher |  [Next](mc.conf.mc_mgr.conf.php) |

## 6.2. The `mc_gen.conf` File

The `mc_gen.conf` file configures the generator(s). The default `mc_gen.conf` file is as follows:

<a name="idp498784"></a>

**Example 6.2. The `mc_gen.conf` file**

```
mc_gen {
  # The only option available is shown below
  debug_level = "info"
}

mc_db {
  debug_level = "info"
}

mc_smtp_out {
  debug_level = "info"
}

# supported logfile formats include:
#  gen-org%d-mid%d.log
#  gen-org%d-mid%d-YYYYMMDD.log
#  gen-org%d-mid%d-YYYYMMDDHHMMSS.log
#  gen-org%d-mid%d-pid%d.log
#  gen-org%d-mid%d-pid%d-YYYYMMDD.log
#  gen-org%d-mid%d-pid%d-YYYYMMDDHHMMSS.log
# , where the YYYY** are the time the log is created.
# NOTE: for continuous mailing such as api-triggered mailing, pid is stripped if specified.
mc_log {
  log_filename = "/var/log/pe2/gen-org%d-mid%d-pid%d.log"
}
```

The `mc_gen` module determines the log level of the generator component.

The `mc_db` module determines the log level for the database interaction with the component associated with the file it appears in, in this case, the generator. Setting `debug_level` in the mc_db module to `debug` in `mc_gen.conf` only turns on debug level logging for the interaction between the database and the generator.

As with other configuration files, the `mc_log` module defines the location of the log files for the component file it appears in, in this case, the generator logs. If you change the value of this option you must also change the log rotation configuration files. For more information see [Section 9.7, “Log Rotation Configuration Files”](mc-files-log-rotation.php "9.7. Log Rotation Configuration Files").

The `mc_smtp_out` module determines the log level for the SMTP interaction with the component associated with the file it appears in, in this case, the generator. Setting `debug_level` in this module to `debug` in `mc_gen.conf` only turns on debug level logging for the SMTP actions related to the generator.

The supported log file formats are shown in the code example above. At runtime `%d` is replaced by the Org ID, Mailing ID or the process ID as appropriate.

| [Prev](mc.conf.3.5.php)  | [Up](mc.conf.3.5.php) |  [Next](mc.conf.mc_mgr.conf.php) |
| Chapter 6. Configuration Files in Version 3.5 and Higher  | [Table of Contents](index.php) |  6.3. The `mc_mgr.conf` File |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)