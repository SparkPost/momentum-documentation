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

| 6.3. The `mc_mgr.conf` File |
| [Prev](mc.conf.mc_gen.conf.php)  | Chapter 6. Configuration Files in Version 3.5 and Higher |  [Next](mc.conf.mc_auth.conf.php) |

## 6.3. The `mc_mgr.conf` File

The `mc_mgr.conf` file configures the manager. The default `mc_mgr.conf` file is as follows:

<a name="idp1161264"></a>

**Example 6.3. The `mc_mgr.conf` file**

```
mc_mgr {
  # The only option available before 3.7.1 is shown below
  debug_level = "info"
  # The following options are available as of
  # version 3.7.1
  #### Enable or disable batch loading of recordcache jlogs by pe2mgr
  #### default is '1' (enabled).
  recordcache_batch_load = "1"
  #### Enable or disable batch loading of contactinfo logs by pe2mgr
  #### default is '1' (enabled). contactinfo jlog is only
  #### relevant for direct access mailings
  contactinfo_batch_load = "1"
  #### number of lines of recordcache jlogs attempted to load in batch mode
  recordcache_batch_size = "2000"
  #### number of lines of contactinfo jlogs attempted to load in batch mode
  contactinfo_batch_size = "2000"
  #### Maximum number of of lines of jlogs attempted to load in
  #### batch mode at a time
  max_jlog_lines_per_read = "20000"
  #### When batch loading of jlogs by pe2mgr fails fallback to
  #### loading jlogs one by one. Is enabled by default
  retry_batch_load_fail = "1"
}

mc_db {
  debug_level = "info"
}

mc_log {
  log_filename = "/var/log/pe2/mgr.log"
}
```

### mc_mgr

<dl class="variablelist">

<dt>debug_level</dt>

<dd>

This option determines the log level of the manager component. The default value is `INFO`.

</dd>

<dt>recordcache_batch_load</dt>

<dd>

**Configuration Change. ** This option is available as of version 3.7.1.

Enable or disable batch loading of recordcache jlogs by pe2mgr The default is `1` (enabled).

</dd>

<dt>contactinfo_batch_load</dt>

<dd>

**Configuration Change. ** This option is available as of version 3.7.1.

Enable or disable batch loading of contactinfo logs by pe2mgr. The default is value is `1` (enabled). This option is only relevant for direct access mailings.

</dd>

<dt>recordcache_batch_size</dt>

<dd>

**Configuration Change. ** This option is available as of version 3.7.1.

The number of lines of recordcache jlogs to attempt to load in batch mode The default value for this option is `2000`.

</dd>

<dt>contactinfo_batch_size</dt>

<dd>

**Configuration Change. ** This option is available as of version 3.7.1.

The number of lines of contactinfo jlogs to attempt to load in batch mode. The default value for this option is `2000`.

</dd>

<dt>max_jlog_lines_per_read</dt>

<dd>

**Configuration Change. ** This option is available as of version 3.7.1.

The maximum number of of lines of jlogs to attempt to load in batch mode at one time. The default value for this option is `2000`.

</dd>

<dt>retry_batch_load_fail</dt>

<dd>

**Configuration Change. ** This option is available as of version 3.7.1.

When pe2mgr fails to batch load jlogs, fallback to loading jlogs one by one. This option is enabled by default.

</dd>

</dl>

The configuration options added in version 3.7.1 are designed to improve the speed at which jlogs are loaded. Vary the values of these options with the mailing type, the number of mailings, the average size of mailings and the block size of mailings.

The recordcache options are applicable to all mailing types but the contactinfo options are only applicable to direct-access mailings. Note that `contactinfo_batch_load` and `record_cache_batch_load` are on by default even if not explicitly enabled.

### mc_db

The `mc_db` module determines the log level for the database interaction with the component associated with the file it appears in, in this case, the manager. Setting `debug_level` in the mc_db module to `debug` in `mc_mgr.conf` only turns on debug level logging for the interaction between the database and the manager.

### mc_log

As with other configuration files, the `mc_log` module defines the location of the log files for the component associated with the file it appears in, in this case, the manager's logs. If you change the value of this option you must also change the log rotation configuration files. For more information see [Section 9.7, “Log Rotation Configuration Files”](mc-files-log-rotation.php "9.7. Log Rotation Configuration Files").

| [Prev](mc.conf.mc_gen.conf.php)  | [Up](mc.conf.3.5.php) |  [Next](mc.conf.mc_auth.conf.php) |
| 6.2. The `mc_gen.conf` File  | [Table of Contents](index.php) |  6.4. The `mc_auth.conf` File |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)