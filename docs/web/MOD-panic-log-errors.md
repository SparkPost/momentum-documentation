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

| D.9. The MOD Errors |
| [Prev](MEM-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](NET-panic-log-errors.php) |

## D.9. The MOD Errors

In this section errors are sorted by severity.

<a name="MOD-table-panic-log-errors"></a>

**Table D.9. MOD errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | MOD | dk_sign: value of 'neg_keycache_ttl' must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dk_sign: value of 'pos_keycache_ttl' must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dk_sign: value of 'keycache_size' must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | domainkeys: option '*`k`*' unrecognized | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | domainkeys: error accessing global keyfile '*`keyfile`*', errno=*`err`* | Check the path and permissions of the key file |
| DCRITICAL | MOD | domainkeys: No global selector defined and domain *`k`* has no local selector defined | Each configured domain needs a global selector or key file |
| DCRITICAL | MOD | domainkeys: No global keyfile defined and domain *`k`* has no local keyfile defined | Each configured domain needs a global selector or key file |
| DCRITICAL | MOD | domainkeys: config error inside *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | domainkeys: domain option *`k`* unrecognized | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | domainkeys: error accessing keyfile '*`keyfile`*' for domain *`dc->name`*, errno=*`err`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | a java io appears to have broken a message | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | a java logging appears to have broken a message | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | a perl module appears to have broken a message | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | a perl logging appears to have broken a message | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | auth_ds: scheme *`auth.scheme`* has incomplete type_column definition | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scope must be one of base, onelevel, or subtree | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | missing db info | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mysql_auth: value passed to dbport is not a valid number | The port value must be numeric |
| DCRITICAL | MOD | auth_radius: value passed to NAS-IP-Address is not a valid IP address | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | auth_radius: value passed to NAS-Identifier is not a valid number | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | auth_radius: *`key`*: unsupported complex config type *`type`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | auth_radius: *`key`*: missing host parameter | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | auth_radius: *`key`*: port portion of host parameter invalid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | auth_radius: *`key`*: missing secret parameter | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | auth_radius: *`key`*: timeout parameter invalid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | auth_radius: *`key`*: max_tries parameter invalid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | radius auth: requires configuration | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | radius auth: configuration issue? | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ec_cluster: Shutting down all clustering | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sp_log_open failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot connect to mbus (is mbusd_monitor running?) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ec_cluster: SMTP client state machine registration failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ec_cluster: SMTP client stat machine registration failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ec_cluster: *`key`* is of unsupported complex config type *`type`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ec_cluster: Module ec_cluster may only be loaded once | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | nodename not specified and gethostname failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | nodename '*`nodename`*' did not resolve | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | *`nodename`* resolved to 127.0.0.1, which is invalid for clustering. Check `/etc/hosts` and ensure *`nodename`* has a unique IP address | See message |
| DCRITICAL | MOD | ds_core: failed to create thread key | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: *`cache->name`*: failed to init cache | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: *`cache->name`*: serialized cache with 0 lifetime is an invalid configuration | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: failed to init query cache *`cache->name`*: URI has bogus syntax: *`uri`* | Check the URI parameter in your configuration file |
| DCRITICAL | MOD | ds_core: failed to init query cache *`cache->name`*: unable to find driver "*`driver_name`* | Check that the appropriate module is loaded in your configuration file |
| DCRITICAL | MOD | ds_core: cannot initialize concurrency limiter | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | s_core: datasource driver *`name`* loaded multiple times | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: configuration error inside *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: value passed to cache_size is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: value passed to cache_life is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: value passed to max_rows is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: invalid configuration *`k`* inside *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_core: cache *`rec->name`* has no datasource uri configured | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ds_odbc: value passed to long_threshold is not valid | See error message |
| DCRITICAL | MOD | class value out of range | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | persistio: Invalid config option *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Unable to open Pickup dir *`pickup_path`*, error code *`LastError`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Failed to start pickup thread, error code *`LastError`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pipe_io: shutting down to avoid data loss with URI *`ctx->url`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pipe_io: could not reinvoke pipe to *`ctx->reader`* for URI *`ctx->url`* (*`strerror`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pipe_io: *`ctx->reader`* keeps exiting; giving up on URI *`ctx->url`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | quarantine '*`conf.quarantine_path`*' must exist | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | quarantine: unable to create spool context | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | quarantine *`conf.quarantine_path`* is locked by pid *`other`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | quarantine: could not get thread-local data | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ==hash dump start== | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ==hash dump: key=(*`key`*), value=(*`item->value.v.str.buffer`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ==hash dump end== | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | statp: interval must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | statp: statp *`key`* takes a boolean value | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | tls_passphrase: your platform has some quirks that make this module unusable | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | compress_spool: value passed to minimum_size is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | compress_spool: Use_MMAP is not compatible with spool compression | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | compress_spool: unknown compression scheme "*`compress`*", do you need to load another module? | See message |
| DCRITICAL | MOD | maildir got *`ips`* ips | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pipe_transport: value passed as code is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | suppress_spool: Spool_On_Unclean_Shutdown must be true or false | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | suppress_spool: value passes as Num_Retries is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | bounce_logger: Could not create thread pool | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | bounce_logger: Could not open log files | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | failed to open log files | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Should log permanent failures but no format | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Should log transient failures but no format | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Should log deliveries but no format | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Should log receptions but no format | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize ec logger queue lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize ec logger queue error lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot find custom_logger thread pool *`conf->pool_name`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot create custom_logger thread pool | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot set ec logger queue error lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize ec logger queue lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | failed to open logs files | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize ec logger queue error lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot create ec_logger thread pool | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot open paniclog *`conf->paniclog`* (*`DEFAULT_PANICLOG`*). Check that the configured directory exists and is writable | See message |
| DCRITICAL | MOD | Cannot open mainlog. Check that the configured directory exists and is writable | See message |
| DCRITICAL | MOD | Cannot initialize ec logger queue lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize postfix logger lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initiate outbound audit lock mutex | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pe2_logger: invalid value for batch_interval | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pe2_logger: timestamp_format recognized as strftime format, but has no conversion specifiers! | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Malloc failed: *`FILE`* *`LINE`* | Check memory usage |
| DCRITICAL | MOD | pe2_logger: unable to init mutex | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pe_logger: value passed as port is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pe_logger: SpoolPrefix must be exactly 8 characters | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | PELOG-*`xxxx`* Cannot get hostname | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | PELOG-*`xxxx`* Cannot resolve hostname *`host_name`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | PE logging needs Database/Host/User/Password set | See message |
| DCRITICAL | MOD | Cannot initialize pe logger queue lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize pe logger queue lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize pe logger queue semaphore | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initalize pe logger thread attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot set detached state for pe logger thread | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot spawn pe logger thread | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Malloc failed: *`FILE`* *`LINE`* | Check memory usage |
| DCRITICAL | MOD | Cannot open mainlog. Check that the configured directory exists and is writable | See message |
| DCRITICAL | MOD | Cannot open paniclog. Check that the configured directory exists and is writable | See message |
| DCRITICAL | MOD | Cannot open paniclog. Check that the configured directory exists and is writable | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize postfix logger queue lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize postfix logger lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sendmail_logger: Cannot open log files | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sendmail_logger: Cannot initialize paniclog mutex attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sendmail_logger: Cannot initialize paniclog mutex | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sendmail_logger: Unknown thread pool '*`conf->pool_name`*' referenced | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sendmail_logger: Cannot create thread pool | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | *`pattern`* is not a valid PCRE (*`pcreerr`*) pattern | See message |
| DCRITICAL | MOD | commtouch: concurrency must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | commtouch: Failed to allocate config | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | commtouch: concurrency must be an integer | Check the value of the concurrency parameter |
| DCRITICAL | MOD | commtouch: Port must be an integer between 1 and 65535 | Change the port that Commtouch is listening on |
| DCRITICAL | MOD | VAS: value passed as score is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | VAS: value passed as hoax is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | VAS: value passed as adult is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | VAS: value passed as money is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | VAS: value passed as health is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | VAS: value passed as goods is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | alias: unsupported complex config type: *`type`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | alias: missing query declaration for alias scheme *`alias`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | alias: invalid syntax in map:*`map`* param: *`k`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | alias: '*`key`*' is not an alias or map definition | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | alias: unknown option: *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | alias: could not find alias scheme*`k`* last used in *`v`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | alias: could not find map:*`scheme->mapname`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: you must edit your `ecelerity.conf` and load the antivirus module as a Validate module rather than a generic module for your configuration to continue operating as you expect | See message |
| DCRITICAL | MOD | antivirus: cache_size: not a valid number: *`value`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: timeout: not a valid number: *`value`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: num_workers setting is deprecated, use max_concurrency instead | `max_concurrency` limits how many antivirus threads may be run simultaneously |
| DCRITICAL | MOD | antivirus: num_workers: not a valid number: *`value`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: max_concurrency: not a valid number: *`value`* | Check the value of this option in your antivirus module |
| DCRITICAL | MOD | antivirus: error_code: not a valid number: *`value`* | The default value is 451 |
| DCRITICAL | MOD | *`value`* is not a valid thread pool name | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | No configuration for *`self->module_name`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | *`conf->engine->name`* max_concurrency must be >= 0 | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | *`conf->engine->nam`*e: failed to init concurrency limiter | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | quarantine module (required by *`conf->engine->name`* antivirus) is not present | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: cache init failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: failed to create tls key *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: *`conf->engine->name`* is misconfigured; I can't choose a suitable scanning method with this configuration | Check your antivirus module configuration |
| DCRITICAL | MOD | antivirus: bitdefender unable to dlopen bdcore: *`dlerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: bitdefender CoreInit returned *`st`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: bitdefender unable to set BDENG_PATH: *`errno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize async lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize condition | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | brightmail: failed to init mutex | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | bm: value passed as idle_timeout is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | bm: value passed as max_tries is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | bm: cannot init concurrency limiter | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | bm: value passed as num_workers is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | bm: value passed as max_size is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | bm: value passed as timeout is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | checklist: value passed as filemode is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | checklist: value passed as user_lru_size is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dns_rbl: config error inside key | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | checklist: lists must have a source table | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | checklist: lists must specify their type | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | checklist: unknown list type: *`cp`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | checklist: database not configured | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Failed to open sqlite database *`conf->database`* *`errstr`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Do you need to run ec_dbupgrade? | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | checklist: *`addrstr`* is not a valid IPv4 | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | clamav: invalid daemon address *`value`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | clamav: No daemon specified | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | cloudmark: max_body_length must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cloudmark CMAE: cannot initialize library: *`CMAE_StrError`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | can't get network info for *`ipbuf1`*, *`ipbuf2`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | can't online *`ipbuf1`*, *`ipbuf2`*, *`if_error`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | can't online *`ipbuf1`*, *`ipbuf2`*, *`if_error`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | asked to own a VIP that is not configured | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | can't get network info for *`ipbuf1`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | can't offline *`ipbuf1`*, *`if_error`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | shutting down DuraVIPs | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Double reference of binding '*`dvb->name`*' unacceptable for clustering. | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | *`node->def->prefix`*_listener '*`node->address`*' cannot be both DuraVIP and a duravip_follow | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | DuraVIP marked on INADDR_ANY *`node->def->prefix`*_listener *`node->address`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | DuraVIP marked on non IPv4 *`node->def->prefix`*_listener *`node->address`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | '*`cfghdr->name`*' marked as duravip_follow, which is currently not supported for bindings. Having a listener follow a binding is best. | See message |
| DCRITICAL | MOD | '*`cfghdr->name`*' cannot be a DuraVIP | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Missing capability: cap_net_admin | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Missing capability: cap_net_bind_service | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Missing capability: cap_net_raw | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Missing capability: cap_sys_chroot | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Missing capability: cap_sys_resource | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Clustering with DuraVIP requires enhanced privileges. Please add the following stanza to your global config: Security { Capabilities = "cap_net_admin+ep cap_net_bind_service+ep cap_net_raw+ep cap_sys_chroot+ep cap_sys_resource+ep" } | See message |
| DCRITICAL | MOD | Clustering with DuraVIP requires the MTA be run as root. Remove the 'user' and 'group' settings from the 'security' stanza in your `ecelerity.conf` file. | See message |
| DCRITICAL | MOD | Local node address cannot be DuraVIP | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | balancing views within a nonexistent group | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | maturing views within a nonexistent group | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mature request on unknown DuraVIP | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | [mature] group with no members??? | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | [mature] unassigned vips with no members??? | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | unknown spc *`spc`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Unknown shared cache parameter *`p2`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | ec_shared_metrics: Unknown log event type *`p2`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | unsupported outbound throttle type *`type`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | conntrol: value passed as pause time is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dcc: value passed as client id is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dcc: value passed as reject threshold is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim: value passed as lifetime is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim_sign: value of 'neg_keycache_ttl' must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim_sign: value of 'pos_keycache_ttl' must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim_sign: value of 'keycache_size' must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim: option '*`k`*' unrecognized | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim: error accessing global keyfile '*`config->keyfile`*', errno=*`err`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | DKIM: No global selector defined and domain *`K`* has no local selector defined | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | DKIM: No global keyfile defined and domain *`k`* has no local keyfile defined | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim: config error inside *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim: value passed as lifetime in ext_conf is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | DKIM: domain option '*`k`*' unrecognized | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | dkim: error accessing keyfile '*`keyfile`*' for domain *`name`*, errno=*`err`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | fsav: No daemon specified | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | host_fingerprint: *`buff`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | host_figureprint: value passed as max_cache_size is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | UNIMPLEMENTED, use p0f_lookcache | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | FINDMASQ | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | DESCMASQ | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | You can only have on fingerprinter | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initialize cache lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot initalize ec fingerprint thread attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot set detached state for ec fingerprint thread | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Cannot spawn fingerprinting thread | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: No daemon specified | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: failed to load kaspersky kernel **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: failed to initialize kaspersky kernel, hr=*`hr`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: loader not found **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: invalid av database path **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: product not registered (has someone tampered with it?) **Platform: Windows**  | See message |
| DCRITICAL | MOD | kav: no valid license found, or license expired **Platform: Windows**  | Contact your vendor |
| DCRITICAL | MOD | kav: *`strerror`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: SDK version *`version`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: Engine version *`evers`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: using license file *`KeyFileName`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: license will expire on (*`dd/mm/yy`*) **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: *`NumberOfViruses`* known viruses; last database update was on *`dd/mm/yy`* at *`hh:mm:ss`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: failed to reload av databases, hr=*`hr`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | kav: reloaded database kav: *`NumberOfViruses`* known viruses; last database update was on *`mm/dd/yy`* at *`hh:mm:ss`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mail_loop can be loaded only once | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mail_loop: value passed as Max_Received_Headers is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mail_loop: value passed as code is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mtamark: no configuration | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: panda api initilaization failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | antivirus: panda cannot open item buffer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Binding Group *`group`* does not exist or is empty | Check your configuration file |
| DCRITICAL | MOD | Binding *`key`* does not exist | Check your configuration file |
| DCRITICAL | MOD | *`value`* does not parse | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | seedlist: incomplete configuration | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | seedlist: could not open cache: *`conf->cache_file`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | seedlist: pattern /*`pattern`*/ error at offset *`erroffset:error`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | seedlist: pattern /*`pattern`*/ must contain a named *`sub-pattern`* 'campaignid' | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | script *`script`* cannot be run in the *`phase`* phase | Change the phase for this script |
| DCRITICAL | MOD | sieve: Hook *`hookname`* not found | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sieve: invalid thread pool name *`name`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sieve: Could not parse prototype *`proto`* for hook *`hookname`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sieve: Unsupported return type *`ret`* for hook *`hookname`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sieve: Unsupported argument type *`tok`* for hook *`hookname`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | sieve: failed to compile script *`scriptname`* for hook *`hookname`* | Check script syntax |
| DCRITICAL | MOD | sieve: badness for hook *`hookname`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mod_sieve: cache_life in conf in not a valid number | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mod_sieve: cache_size in conf in not a valid number | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | mod_sieve: invalid runtime_error mode | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | cache size not valid. | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | cache life not valid. | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | config error inside *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | faild to create cache for smtp_cbv. | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | spf: invalid add_headers setting *`value`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | spf: invalid add_authentication_results setting *`value`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | spf_process: value for spf status code is not a valid number | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: no configuration found. You must configure a secret at a bare minimum | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | You must configure a secret | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: alwaysrewrite must be either 'true' or 'false' | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: noforward must be either 'true' or 'false' | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: noreverse must be either 'true' or 'false' | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: separator must be a single character | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: separator: invalid value | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: maxage must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: hashlength must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | srs: hashmin must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: VSInit failed with code *`rc`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: VSSetTempPath(*`conf->tmp_dir`*) failed with code *`rc`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: VSSetMemoryDecompressSize (*`conf->mem_decomp_size`*) failed with code *`rc`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: setting path to *`conf->pat_path`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: VSReadVirusPattern(lpt$vpn) failed with code *`rc`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: VSReadVirusPattern(tmblack) failed with code *`rc`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: VSReadVirusPattern(tmwhite) failed with code *`rc`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: VSReadVirusPattern(tmaptn) failed with code *`rc`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | trend: invalid integer value for memory_decompress_size *`value`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: config error inside *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: invalid dot notation mask: *`k`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: masks must contain exactly one bit | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: IP collision in values | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: unknown set type: *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: max_lookups in conf is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: forward must be true or false | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: no configuration | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: no base domain | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | url_ripper: no reactions configured | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | CTXFLT-*`xxxxx`*: error compiling regex: *`errstr`* in string *`iter->object.vstring`* at offset *`erroff`* | There is an error in the syntax of the regular expression. Fix your configuration file to continue. |
| DCRITICAL | MOD | ec_cluster: Shutting down all clustering | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | unsupported outbound throttle type *`type`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: panic: *`msg`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: failed to init root state | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | failed to replace require | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | The module providing scriptlet objtype *`objtype->type_name`* needs to be recompiled in order to run with this version of ecelerity | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: script_ttl must be a positive integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: gc_pause must be a positive integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: gc_stepmul must be a positive integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: invalid configuration option '*`key`*' | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: max_spare_per_master must be a positive integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: this module may only be loaded onc | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: failed to initialize | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | scriptlet: no usable methods found for module *`modname`* in registerModule call | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pe2_logger: invalid value for batch_interval | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pe2_logger: timestamp_format recognized as strftime format, but has no conversion specifiers! | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | Malloc failed: *`FILE`* *`LINE`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | pe2_logger: unable to init mutex | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | adknowledge taglines: timeout must be an integer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | adknowledge taglines: no affid specified | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MOD | adknowledge taglines: no basedomain specified | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | *`hook_first`*: can't register hook | An internal error happened during hook registration, the module in question has an error or is using an outdated API. |
| DERROR | MOD | *`hook_first`*: can't register a NULL hook | An internal error happened during hook registration, the module in question has an error or is using an outdated API. |
| DERROR | MOD | *`hook_last`*: can't register a NULL hook | An internal error happened during hook registration, the module in question has an error or is using an outdated API. |
| DERROR | MOD | domainkeys: unsupp digest: *`hash_method`* | The only supported mechanism is rsa-sha1 |
| DERROR | MOD | domainkeys: unsupp canonicalization: *`canon_method`* | Check your configuration file. Only simple and nofws are supported as values for the cannon parameter. |
| DERROR | MOD | domainkeys: dns callback with no closure -- cannot reschedule | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | domainkeys: Failed to create RSA key from buffer | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | domainkeys: unsupp digest: *`hash_method`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | domainkeys: unsupp canonicalization: *`canon_method`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | domainkeys: RSA_sign failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | dkim_siv_sign: invalid first argument type *`sieve_type_of_arg`* | Check your Sieve script |
| DERROR | MOD | domainkeys: Implicit domain configuration disabled since no global selector and/or key format is defined | Each configured domain needs a global selector or key file |
| DERROR | MOD | java io module was unable to process a large message | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | java logging module was unable to process a large message | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | java validate module was unable to process a large message | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pinterp module was unable to process a large message | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pinterp logging module was unable to process a large message | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | senderid: extracted PRA too large: [*`addr->localpart.l`*]@[*`addr->domain.l`*] | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | auth_ds: unsupported complex config type: *`type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | auth_ds: missing query declaration for auth scheme *`auth.scheme`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | auth_ds: missing cache declaration for auth scheme *`auth.scheme`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | auth_ds: missing query declaration for authz scheme *`handler.scheme`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | auth_ds: missing cache declaration for authz scheme *`handler.scheme`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | auth_ds: could not find map:*`mapname`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | auth_ds: could not find map: *`query_groups.mapname`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ldap_auth: escaping could cause overrun *`value`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ldap auth bridging supports cleartext password protocols only | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ldap_auth: interpolated bind DN exceeded max size of *`buff`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ldap_auth: interpolated host exceeded max size of *`buff`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ldap_auth: value passed as ldapport is not a valid number | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ldap_auth: could not connect to ldap server *`errno`*, *`errstring`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ldap_auth: could not bind user *`ldapuser`*(*`rv`*): *`ldap_errstring`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ldap_auth: interpolated query exceeded max size of *`buff`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mysql_auth: mysql validator could not connect to database: *`mysql_error`* | See error message |
| DERROR | MOD | mysql_auth: mysql validator could not use "*`dbname`*": *`mysql_error`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mysql_auth: escaping could cause overrun *`value`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mysql supports cleartext password protocols only | Do not use encryption? |
| DERROR | MOD | mysql_auth: interpolated query exceeded max size of *`buff`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mysql_auth: *`mysql_error`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mysql_auth: query returned with no fields | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | radius auth: rad_send_request result= *`state->result`* - *`strerro`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | radius auth: rad_auth_open failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | radius auth: rad_create_request failed - *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | radius auth: challenge response not supported | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | radius auth: unknown access response from server | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_worker: failed to execute *`query`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_worker: failed to prepare *`query`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_worker: failed to connect | Check the configuration of the host, user or password for the URI parameter for the cache. Check that the database server is online. |
| DERROR | MOD | ds_core: cache *`cache->name`* references a non-existent driver. Did you forget to load a module? | See message |
| DERROR | MOD | ds_cdb: unable to open cdb file: *`file`* | Check the path to the CDB database and the file permissions |
| DERROR | MOD | ds_core: query presented against undefined cache *`cachename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: invalid datasource URI specified: *`uri`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: URI used for failed connection attempt contains newlines datasource: check for accidental word wrapping in your config file | See message |
| DERROR | MOD | datasource: no driver specified | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: unknown driver *`value`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: failed to connect driver *`value`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: failed to prepare | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: named parameters used, but this is a positional query | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: no parameters were passed, and this query requires them | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: could not find param *`param->text`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: positional parameters used, but this is named query | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: not enough positional parameters were supplied | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: unable to find parameter | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | datasource: unable to quote parameter | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_core: query presented against undefined cache *`cachename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_csv: failed to execute query | Check the syntax of your query |
| DERROR | MOD | ds_csv: failed to parse query: *`query`* | Check the syntax of your SQL statement |
| DERROR | MOD | ds_csv: failed to open datafile:*`S->file`* | Check the path to your CSV file and the file permissions |
| DERROR | MOD | ds_csv: failed to execute query | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_iowrapper: failed to rewrite query | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_ldap_connect: ds_ldap_url_parser [*`rc`*] *`ldap_err`* for URL *`url`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_ldap_connect: ds_ldap_build_cache_url failed for URL *`url`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_ldap_connect: ds_ldap_url_parser [*`rc`*] *`ldap_err2string`* for URL *`url`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_ldap_connect: ds_ldap_build_cache_url failed for URL *`url`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_ldap_connect: ds_ldap_url_parser [*`rc`*] *`ldap_errstring`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_mysql: execute failed: *`mysql_errno`* *`mysql_error`* | See error message |
| DERROR | MOD | ds_mysql: use_result failed: *`mysql_errno`* *`mysql_error`* | See error message |
| DERROR | MOD | ds_mysql: missing dbname during connect | Check the URI parameter in the ds_core module |
| DERROR | MOD | ds_mysql: missing user name during connect | Check the URI parameter in the ds_core module |
| DERROR | MOD | ds_mysql: connect failed: *`mysql_errno`* *`mysql_error`* | See error message |
| DERROR | MOD | ODBC error: *`where`*, *`code`*, *`state`*, *`buf`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_odbc: [ *`stmt->query_len`* *`stmt->query`*] unable to describe param *`nparam`*. Check that the procedure exists and is executable for this database user. | See error message |
| DERROR | MOD | ds_odbc: conversion from *`charset`* to *`DSODBC_UNICODE_CHARSET`* failed for parameter *`param_no`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_odbc: *`where`* an error occurred, but no details were provided | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_pgsql: execute (*`query`*) failed: *`status`* *`PQresultErrorMessage`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_pgsql: connect failed: *`PQerrorMessage`* | Check that the PostgreSQL module is loaded |
| DERROR | MOD | ds_sieve: missing cache name for :datasource: include *`uri`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_sieve: error parsing params to ec_include *`uri`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_sieve: "*`uri`*" query failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_query: error while getting cachename parameter | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_query: error while getting query parameter | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mod_sieve: error parsing params to ds_query | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_query: "*`query`*" query failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_sieve: "*`uri`*" query had no result object | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_sieve: "*`uri`*" query column 0 had no size | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_sqlite: error during execute: *`ret`* *`sqlite3_errmsg`* | See error message |
| DERROR | MOD | ds_sqlite: error fetching *`ret`* *`sqlite3_errmsg`* | See error message |
| DERROR | MOD | failed to access sqlite datasource *`path`*,*`ret`* *`sqlite3_errmsg`*/<unknown> | Check the path to your SQLite database and check the file permissions |
| DERROR | MOD | ds_sqlite: failed prepare:*`ret`* *`sqlite3_errmsg`* ds_sqlite: query to prepare was: *`query`* | Check the syntax of your prepared statement |
| DERROR | MOD | bounce_classifier: invalid type for domain lookup: *`type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: invalid type: *`type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: broken line: domain: too few fields | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: broken line: *`domain`* *`code_s`*: code is not valid | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: broken line: *`domain`* *`code_s`*: too few fields | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: broken line: *`code_s`*: too few fields | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: broken line: *`code_s`*, *`dsn`*: code is not valid | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: unknown type | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: malformed query *`file`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: your query (*`query`*) returned *`ncols`* rows when 3 were expected. Please modify your query. | See message |
| DERROR | MOD | bounce_classifier: your query (*`query`*) returned *`ncols`* rows when 2 were expected. Please modify your query. | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: code (*`code_s`*:/null) is invalid | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bounce_classifier: no pattern provided | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bzip2io: malformed URI *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bzip2io: BZ2_bzopen(*`url->path`*) failed *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bzip2io: BZ2_bzdopen(*`fd`*, *`modestr`*) failed for path *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bzip2io: open(*`url->path`*) failed *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Refresh called with no cached copy | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb: Query failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb: got size *`col->size`* type *`data_type`* from the datasource | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb: Address *`address`* not valid | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb: got size *`col->size`* type *`data_type`* from the datasource | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb: CIDR entry not found | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb: *`name`* not a configured cidr name | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb: Query failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb: *`name`* not a configured cidr name | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb_rbldnsd: Query specified without 'want' parameter | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb_rbldnsd: failed to open datafile: *`file`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cidrdb_rbldnsd: Invalid string *`field.buffer`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_cidrdb: Invalid cidrdb query *`query`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_cidrdb: failed to execute query | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_cidrdb: failed to parse query: *`query`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_cidrdb: cidrname must be a defined cidr | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ds_cidrdb: only supports 'value' cidrdbs | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | gzipio: open(*`url->path`*) failed *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | gzipio: malformed URI *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | gzipio: gzdopen(*`fd`*, *`modestr`*) failed for path *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | gzipio: gzdopen(*`fd`*, modestr) failed for path *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | gzipio: gzopen(*`url->path`*) failed *`errno`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ICU: no converter for charset *`destcharset`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ICU: conversion failed, code *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ICU: icu_case_fold converting to UChar failed. Error code *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ICU: case folding with UChar failed. Error code *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | sieve: converting from UChar failed. Error code *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cluster logger file error: jlog[*`filename`*] *`jlog_ctx_err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cluster logger error: unsupported options *`options`* on *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | persistio: Failed to create persist cache directory *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | persistio: Unable to open reader for *`filename`* *`errno`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | persistio: rename *`tmpbuf`* to *`filepath.buffer`* failed *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | persistio: io_wrapper_open of cache file failed *`filepath.buffer`*, *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pickup: unable to determine recipients for message | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: unable to allocate pipe_io_conf (*`strerror`*) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: malformed URI *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: no args given in URI *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: could not understand argument '*`value`*' to clear_env in URI *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: could not understand argument '*`value`*' to reinvoke in URI *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: could not understand argument '*`value`*' to shutdown_on_failure in URI *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: unable to create pipe_ctx for URI *`filename`* (*`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: unable to open pipe to *`ctx->reader`* for URI *`filename`* (*`strerror`*) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: trouble writing to pipe to *`ctx->reader`* for URI *`ctx->url`*(*`strerror`*) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_io: ECELERITY_MEMORY=NOREPLACE must be set in the environment on this platform for correct operation | Set this variable in the `environment` file. For the location of this file on your OS, see the manual. |
| DERROR | MOD | quarantine: metadata open of *`filename`* failed *`sqlite3_errmsg`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Check ownership and permissions on *`conf.quarantine_path`*. Do you need to run **ec_dbupgrade**? | See message |
| DERROR | MOD | quarantine: metadata handlers failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: invalid mailfrom | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: invalid rcpt | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: first message part is not available | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: begin meta data failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: insert meta data failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: commit meta data failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine meta info save failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine metadata save failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: removal failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine remove failed: *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: *`filename`* spool in failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: failed to reinstate message from quarantine | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: metadata table create failed [*`i`*]:*`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: created initial metadata table | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: metadata index1 create failed: *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: created metadata index(1) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: metadata index2 create failed: *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: created metadata index(2) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: metadata trigger1 create failed: *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | quarantine: created metadata trigger(1) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | sched: command: *`command`* returned: *`info.response.buffer`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | sched: could not open backing store: *`conf->cache_file`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_thread_pool_get_queue_size: *`class`* is not a valid jobclass | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_pcre_match: the first parameter must be a string | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_pcre_match: the second parameter must be a string | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | failed to get store PCRE_ERROR_NOMEMORY | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | how weird! | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | the first parameter must be a stringlist or number | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | the first parameter must be a string or a number | Check your Sieve script? |
| DERROR | MOD | the second parameter must be a string or a number | Check your Sieve script? |
| DERROR | MOD | the first parameter is not a valid number | Check your Sieve script? |
| DERROR | MOD | the first parameter is invalid for the operation | Check your Sieve script? |
| DERROR | MOD | the second parameter is not a valid number | Check your Sieve script? |
| DERROR | MOD | the second parameter is invalid for the operation | Check your Sieve script? |
| DERROR | MOD | invalid operands for ec_*`name`* | Check your Sieve script? |
| DERROR | MOD | invalid oprands for ec_div | Check your Sieve script? |
| DERROR | MOD | division by zero in ec_div | Check your Sieve script? |
| DERROR | MOD | invalid oprand for ec_*`func`* | Check your Sieve script? |
| DERROR | MOD | ec_set_binding: the first parameter must be a string | Check your Sieve script? |
| DERROR | MOD | ec_set_binding: binding *`binding`* does not exist | Check your Sieve script? |
| DERROR | MOD | ec_set_binding_group: the first parameter must be a string | Check your Sieve script? |
| DERROR | MOD | the first parameter must be a sieve string | Check your Sieve script? |
| DERROR | MOD | ec_rfc2047_encode_header usage: {string} | Check your Sieve script? |
| DERROR | MOD | ec_rfc2047_encode_addresses usage: {addresses} | Check your Sieve script? |
| DERROR | MOD | ec_rfc3464_delivery_status usage: [hash] | Check your Sieve script? |
| DERROR | MOD | ec_valid_binding usage: {string} | Check your Sieve script? |
| DERROR | MOD | ec_valid_binding_group usage: {string} | Check your Sieve script? |
| DERROR | MOD | sievelib.snmp_trap: Called without a seng | Check your Sieve script? |
| DERROR | MOD | snmp_trap usage: {hash} | Check your Sieve script? |
| DERROR | MOD | non-numeric replication flag | Check your Sieve script? |
| DERROR | MOD | ec_cache_init takes 1-3 parameters | Check your Sieve script? |
| DERROR | MOD | ec_gauge_cache_dec <cache> <key> | Check your Sieve script? |
| DERROR | MOD | bad metrics format *`buflen, buf`*      | Check your Sieve script? |
| DERROR | MOD | disable_esmtp_capability <capability> | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | advertize_esmtp_capability <capability> | Check your Sieve script? |
| DERROR | MOD | spf_macro: invalid macro *`input->buffer`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | statp: sendto() bindings error *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | statp: check that rrdd is running; check permissions/ownership on *`conf->socket_path`* | See message |
| DERROR | MOD | statp conf not initialized! | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | statp: database open failed *`conf->database_path`*, *`ret`*, *`errmsg`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | statp: binding list failed *`ret`*, *`errmsg`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | statp: Socket error *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | statp: domain list failed *`ret`*, *`errmsg`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | statp module initialized | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir mkdir *`path`* failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir *`path`* invalid: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir *`path`* is not a directory | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir *`path`* has incorrect permissions | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir filename too long | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir cannot open file (*`dest`*): *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir cannot fchmod file (*`dest`*) *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir bad write to *`dest`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir fsync failed *`dest`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir link failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir needs basedir | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir could not detect any ip addresses | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir basedir *`conf->basedir`* invalid: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir basedir *`conf->basedir`* is not a directory | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir *`conf->basedir`* has incorrect permissions: *`mode`* vs *`conf->dirmode`* | Change permissions? |
| DERROR | MOD | maildir(*`conf->basedir`*) initialized | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir: write_tmpfile failed: *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maildir: tmpfile_to_new failed:*`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_transport: pipe() failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_transport: fork() failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_transport bad write to dest | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_transport program_name must be set | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_transport program name *`conf->filename`* invalid: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_transport program *`conf->filename`* is not executable: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pipe_transport(*`conf->filename`*) initialized | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Cannot open bouncelog. Check that the configured directory exists and is writable | See message |
| DERROR | MOD | CL-*`xxxx`* tr requires a parameter | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CL-*`xxxx`* tr requires a parameter | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CL-*`xxxx`* tr the same number of input and output parameters | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | customer_logger module has not yet been configured | See message |
| DERROR | MOD | Cannot open mainlog. Check that the configured directory exists and is writable. | See message |
| DERROR | MOD | Cannot open delivery_logfile. Check that the configured directory exists and is writable. | See message |
| DERROR | MOD | Cannot open xfer_logfile. Check that the configured directory exists and is writable. | See message |
| DERROR | MOD | Cannot open reception_logfile. Check that the configured directory exists and is writable | See message |
| DERROR | MOD | Cannot open permanent_failure_logfile. Check that the configured directory exists and is writable | See message |
| DERROR | MOD | Cannot open transient_failure_logfile. Check that the configured directory exists and is writable | See message |
| DERROR | MOD | Cannot open paniclog. Check that the configured directory exists and is writable | See message |
| DERROR | MOD | Cannot open mainlog *`mainlog`* (*`strerror`*). Check that the configured directory exists and is writable | See message |
| DERROR | MOD | Cannot open rejectlog *`rejectlog`* (*`strerror`*). Check that the configured directory exists and is writable | See message |
| DERROR | MOD | Cannot open acctlog *`acctlog`* (*`strerror`*). Check that the configured directory exists and is writable | See message |
| DERROR | MOD | Cannot open importlog *`importlog`* (*`strerror`*). Check that the configured directory exists and is writable | See message |
| DERROR | MOD | Cannot open paniclog. Check that the configured directory exists and is writable | See message |
| DERROR | MOD | error getting hostname: *`errno`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | unable to rename *`ent->filename`* to *`filename`*, *`errno`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pe2_logger: unable to open filename | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pe_logger initialized | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Disabling transient failure logging in the sendmail_logger module with log_transient_failures is deprecated; please remove this setting from your config | See message |
| DERROR | MOD | sendmail_logger: Cannot open mainlog , *`conf->mainlog`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | sendmail_logger: Cannot open paniclog *`conf->mainlog`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CommTouch CreateMessage Failed: Type=*`Type`*, Code=*`Code`*, Desc=*`Description`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CommTouch GetEnvelope Failed: Type=*`Type`*, Code=*`Code`*, Desc=*`Description`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CommTouch GetRecipients Failed: Type=*`Type`*, Code=*`Code`*, Desc=*`Desc`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CommTouch Stream Create Failed: Type=*`Type`*, Code=*`Code`*, Desc=*`Desc`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CommTouch ClassifyMessage Failed: Type=*`Type`*, Code=*`Code`*, Desc=*`Desc`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | commtouch: commtouch_scan called without a seng> | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CommTouch Main_create Failed: Type=*`Type`*, Code=*`Code`*, Desc=*`Desc`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | CommTouch Authenticate Failed: Type=*`Type`*, Code=*`Code`*, Desc=*`Desc`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | commtouch_ctasd: conf not defined | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | commtouch-ctasd: Failed to create curlh | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | commtouch: first message part is not available | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | commtouch-ctasd: Curl failure *`res`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | commtouch-ctasd: CTASD returned error *`cterror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | commtouch: commtouch_scan called without a seng | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ^\\d\\.\\d\\.\\d\\.\\d$ is not a valid regular expression (*`pcreerr`*) pattern | See message |
| DERROR | MOD | *`pattern`* is not a valid regular expression (*`pcreerr`*) pattern | See message |
| DERROR | MOD | VAS: cannot initialize library: *`stError.m_uiCode`*, *`stError.m_uiNestedErrorCode`*, *`stError.m_szDetails`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | VIRCOM error *`stError.m_uiCode`*, *`stError.m_uiNestedErrorCode`*, *`stError.m_szDetails`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | VIRCOM score: *`iScore`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | VIRCOM error (*`uiError`*,): *`stError.m_szDetails`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | alias: missing cache declaration for alias scheme *`alias`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | alias: unknown substitution *`sub`* in map:*`map`* param: *`k`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender unable to allocate a core handle | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender unable to set plugins path to *`conf->plugins`*, error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to load plugins from path *`conf->plugins`* error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to set update callback error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to enable archive scanning, error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to enable email scanning, error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to set context data, error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to set callback error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to delete context data, error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender unable to allocate a core handle | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender unable to set plugins path to *`conf->plugins`*, error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to load plugins from path conf->plugins, error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to get CoreInformation *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to uninitialize CORE, error *`st`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender failed to unload bdcore.so, error *`dlerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: bitdefender successfully unloaded bdcore.so | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* server address is invalid: *`address`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* no port specified: *`address`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM: server port: not a valid number: *`cp`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* unknown address type: *`address`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* could not resolve *`address`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM: server port: not a valid number: *`cp`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* server address contains invalid port: *`address`*, *`cp`*, *`port`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* unknown address family in server address | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* failed to create socket: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* failed to connect to server: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* failed to put server socket in non-blocking mode: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | BM-*`xxxxx`* Failed to read capabilities, remote end not speaking SBAS? | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | retrieving data from *`clist->table`* returned *`ret`*, *`errstr`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | checklist: Failed to create registry table: *`errmsg`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | checklist: error while creating default tables: *`errmsg`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | clamav socket() failed (*`conf->daemon`*), *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | clamav connect failed (*`conf->daemon`*), *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | clamav connect ioctl set nonblock failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | clamav initiation failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cloudmark: Called without a seng | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cloudmark_score_analysis: the first parameter must be a string | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Binding *`binding->name`* referenced more than once. Broken. | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Binding *`binding`* referenced more than once. Broken. | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DURAVIP-MERGE VIEW ERROR-*`xxxxx`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | No member info for *`ipbuf1`* removing from *`view->private_name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP services for <no name> do not match view services for *`iew->private_name`*. vip current owner *`isvip->current_owner`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP address does not match view address | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | multiple preferred views preferred_views for *`ipbuf1`* marking broken. Fix your configuration. | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | received arp update on bad group *`group`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | received arp update with bad length *`len`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | duravip_follow is set to default binding | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | duravip_follow is set to *`parent`*, which does not exist | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | *`node->def->prefix`*_listener '*`node->address`*' cannot duravip_follow *`parent`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP view announcment failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | malformed durvip view received *`advance`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | membership integrity failure | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Group info not found during balance | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | duravip inconsistency, owner not a member | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | attempting to invoke balance for non-existent group or group leader | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | attempting to invoke balance for other group | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP balance announcement failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP heartbeat send failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bad packet for balance request | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | attempting to invoke balance from non leader | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | balance request from different EVS view | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | my EVS view *`groupinfo->gid.id[0]`*; *`groupinfo->gid.id[1]`*: *`groupinfo->gid.id[2]`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | balance in view *`gid.id[0]`*, *`gid.id[1]`*, *`gid.id[2]`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | maturing vip within a nonexistent group | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | attempting to invoke maturation for other group | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP mature announcment failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | short packet mature request | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | attempting to invoke maturation from non leader | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mature request from different EVS view | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | malformed mature request | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | asked to manage DuraVIP we think is broken | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | [mature/*`preferred`*] DuraVIP already has an owner *`vips[j]->current_owner`* but assigning to *`members[i]->nodeinfo->privatename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP owned interface not online *`addstr`* - chk# *`vip->chk_cnt`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP interface restart - can't get network info for *`addstr`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP interface restart - can't online *`addstr`*, *`ipbuf2`*, *`if_error`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP restarted *`addstr`*, *`ipbuf2`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP restart - bringing up ESMTP services | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP restart - bringing up ECSTREAM services | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP restart - bringing up CONTROL services | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP restart - bringing up POP3 services | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP interface <name not available> - *`addstr`* is not owned | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP mature announcment failed *`err`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Failed join on messaging bus: *`ret`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Failed connection to messaging bus*`which`*:*`sld`* at *`ecc_conf->mbus_daemon`*: *`ret`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Error on messaging bus: *`len`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_cluster: unknown message type *`command_type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECMMOVE-*`xxxxx`*: eccmgr job connect timed out | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRJOB-*`xxxxx`*: cluster job handshake job abort failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRJOB-*`xxxxx`*: sjc is null *`jobid`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRJOB-*`xxxxx`*: cluster job handshake failed - *`job->member_private_name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRJOB-*`xxxxx`*: cluster job handshake failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRJOB-*`xxxxx`*: cluster job handshake job abort failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRJOB-*`xxxxx`*: cluster job handshake job abort failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | socket(): failed *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ioctl(): nonblock failed *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bind(): failed *`strerror`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | connect(): failed *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Failed to process DML log [*`definition`*] Error: *`ret`*, *`errstr`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRLOG-*`xxxxx`*: Log Move Job Restart Failed - Job will not be restarted | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRLOG-*`xxxxx`*: Start Cluster Job Failed During Log Move Create | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMGRLOG-*`xxxxx`*: Start Cluster Job Failed During DML Move Create | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Scanner already initialized | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid Parameter | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid IContentScanner Policy | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Empty IContentScanner Policy | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Out Of Memory | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec File Not Found | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Load message catalog failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec An unexpected exception was caught | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec An unknown exception was caught | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid default file extension | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid quarantine server | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid MIME inclusion list | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid MIME exclusion list | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid extension inclusion list | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid extension exclusion list | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec AV Scanner not initialized on Scan | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec NAV error during scan file | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Result deprecated SetExtensionExclusionList and SetextensionExclusionListRegEx called | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Result deprecated SetExtensionInclusionList and SetExtensionInclusionListRegEx called. | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Result deprecated SetMIMEExclusionList and SetMIMEExclusionListRegEx called | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid audit threat categories | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid deny threat categories | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Cannot reinitialize | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Definitions directory not specified | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Liveupdate init failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Definitions missing | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Engline load failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Cannot duplicate audit and deny categories | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec DEC Scanner not initialized on Scan | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid DEC Policy on Scan | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container maximum depth reached while processing *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container maximum depth reached while processing *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container maximum extract size reached while processing *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container maximum cumulative size reached while processing *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container maximum files reached while processing *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Encrypted container deleted: *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Encrypted container detected: *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Malformed container deleted: *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Malformed container detected: *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Partial result detected: *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ntivirus: symantec Outer container is MIME | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec MIME parsing failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container extract failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container open failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container access failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container update failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container close failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container file extract failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container file access failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Container file spli | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Temporary file access failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid parameters | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Out of memory | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Scan engine exception | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Decompose file error | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Decomposer initialization failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Scanner re-initialized | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Definitions directory not initialized | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Temporary directory access failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid file modification | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec File too large | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Child file size unknown | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec File size less than minimum extract size | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Unknown container algorithm was detected by Decomposer | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Buffer size too small | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Could not create output *`it->Filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Encrypted container child found | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec There are no license features registered | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec A license manager cannot be created or a memory error occurred while accessing a license library API. | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec A license manager cannot be created. A license manager is required to access the licensing library API | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the ccAntiSpam scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the antivirus scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the DDR scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the decomposer scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the email attribute scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the file attribute scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the file type scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the key word scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the URL lists scanner feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the quarantine server feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the antispam content feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the antivirus content feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the DDR content feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec The license for the URL lists content feature cannot be created | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Generic Results | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec DECScanner Results | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec License Results | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec InitContentScanner: pass in NULL localContentScanner pointer | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec InitContentScanner: failed to create scanner results | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec InitContentScanner: failed to initialize localContentScanner | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec LocalContentScanner DEC scanner initialize Failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec LocalContentScanner antivirus scanner initialize failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Problem registering feature *`featureName`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec RegisterAllFeatures: pass in NULL pointer licensePolicy | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec *`Features`* feature(s) failed registration | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Invalid licensing policy. Registration failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec CreateScanningPolicy: pass in NULL pointer of Content Scanner | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Failed to create Content policy | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec RegisterScanningPolicy: failed to register policy | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Update rollback failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Unable to rollback | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Invalid update license | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Reinitialize scanner failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | LiveUpdate not supported | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Update source file error | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Update destination file error | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Unknown error | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Failed to create Update policy | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec MakeFactory: failed to create scanner factory! | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec MakeLocalContentScanner: failed to create conf->localContentScanner! | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec InitContentScanner: failed to create scanner results | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec pass in NULL pointer of scanner and/or policy | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec ScanFile: Failed to create IRequestInfo | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec ScanFile: Failed to create scanner results | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec Scanning failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ScanStream: pass in NULL pointer parameter(s) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ScanStream: pass in NULL IO pointer | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: symantec ScanStream: Failed to create IRequestInfo | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ScanStream: Cannot create IContentScannerResults | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ScanStream: Cannot create IContentScannerScanStream | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Scan Failure on stream start | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Scan Failure on SendBytes | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Scan Failure on SendBytes | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | dcc: no valid server configured | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | dcc: can't deschedule session | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | dcc: didn't transmit complete packet on sock *`dcc_client_socket`* [*`errno`*] *`strerror`* *`sockaddr_to_string`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | dkim: dns callback with no closure -- cannot reschedule | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: Failed to create RSA key from buffer | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: unsupp digest: *`hash_method`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: unsupp canonicalization: *`hdr_canon_method`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: unsupp canonicalization: *`bdy_canon_method`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: Cannot sign - No header list configured | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: Corrupt sign header list - can't create signature h tag | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: RSA_sign failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: failed to inject test reflection | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | dkim_siv_sign: invalid first argument type *`type_of_arg`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: Implicit domain configuration disabled since no global selector and/or key format is defined | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DKIM: Digestor *`lname`* not found | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | dkim: could not load private key from *`keyfile`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | dkim: private key cache insertion failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECMM-*`xxxxx`* no accept closure | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: eicar unable to open file *`filename`* for scanning | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: fsav_open_session failed: *`rv`*, *`fsav_error_to_string`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: fsecure antivirus daemon offline | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: fsav_scan_file failed: *`rv`*, *`fsav_error_to_string`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: [*`d`*] fsav shmget(*`key, d_len`*       ,) attempt *`retry`* failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: fsav: try configuring file_base to avoid this error | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: fsav lost shared memory: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: fsav shmat failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: fsav lost shared memory: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Spawning fingerprinter for *`value`*, *`key`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | sieve *`label`* *`action/a->reqd_capability`* uses deprecated APIs | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | audit_cluster: bad metrics format (*`buflen`*) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | can't open *`fname strerror`*           | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | inbound_audit: Serialize error returned *`errno`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: write timeoute after *`written, seconds`*          | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: poll failed after *`written strerror`*           | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav unknown address type: *`h_addrtype`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav could not resolve *`daemon`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav unknown address type: *`tmp_family`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav socket failed (*`daemon`*) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav connect failed (*`daemon`*) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav connect ioctl set nonblock failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav initiation failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kav could not connect/use AV connection | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kav antivirus daemon offline | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kav error reading banner | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kav error status *`status`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav sending temp file failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav read response error | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav bogus response: *`mtc.gb_donebuffer`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kav error writing NETSCAN | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kav unexpected NETSCAN respone *`status`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kav error reading data from stream | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kav error writing data | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kaspersky: unable to open file for scanning | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: kaspersky: you need to configure file_base to enable scanning of large messages | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav: virus scan failed, hr=*`hr`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav: queue overflow, increase your queue_length setting **Platform: Windows**  | See message |
| DERROR | MOD | kav: license limited **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | kav: *`strerror`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mtamark: internal inconsistency | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | antivirus: panda failed to load *`conf->impl`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | *`pattern`* is not a valid PCRE (*`pcreerr`*) pattern | See message |
| DERROR | MOD | Binding *`key`* does not exist | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | header:*`tmp`* is not a valid pattern | See message |
| DERROR | MOD | *`value`* is not a valid PCRE (*`pcreerr`*) in binding *`key`* | See message |
| DERROR | MOD | seedlist: sqlite error: *`errstr`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | seedlist: could not open: *`conf->seedlist_file`* *`errno`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | seedlist: problem parsing "*`buffer`*", | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mod_sieve: args passed to regular include mechanism; include will not be processed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mod_sieve: unable to create io_job "*`uri`*" for reading | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | *`foo`* *`uri`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | mod_sieve: failed to parse sieve script from "*`uri`*" | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | script *`script`* cannot be run in the *`cb`* phase, leaving existing script in-place | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | sieve: unsupported complex config type: *`type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | sieve: config key *`key`* is not a recognized option | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | sieve: no script specified for hook *`hookname`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | no session context | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | smtp_cbv: first parameter must be a string | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | smtp_cbv: first parameter can't be a null address | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | smtp_cbv: first parameter is not a valid email address *`address`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | smtp_cbv: second parameter must be a string | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | smtp_cbv: second parameter too long | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | smtp_cbv: second parameter is not a valid email address (*`from`*) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | text_search rwlock attr init failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | text_search rwlock init failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | text_search mutex attr init failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | text_search mutex init failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | text_search has no configuration | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | text_search ruleset has not path *`file`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | text_search ruleset *`filename`* *`dlerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Could not find symbol(s) in *`conf->ruleset`*: *`dlerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | trend: VSOpenResource returned *`rc`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | trend: reload failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | url_ripper: *`key`* is not stored in hash for sieve | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | url_ripper: internal inconsistency | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | shared data failed to join group for *`obj->name`*: *`rc`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | shared data failed to join group for *`k`* (*`rc`*) | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | replication membership of unknown type: *`obj->rep_type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | shared replication of unknown type: *`obj->rep_type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | shared application of unknown type: *`obj->rep_type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | *`DLOG1`*, *`fmt`*, *`arg`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | DuraVIP address does not match view address | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_cluster: Local binding *`binding_name`* not found for message in #mmove binding | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | No binding name found for binding *`old_binding_slot`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_cluster: Message binding is #mmove, but #mmove_binding not found in the message blobs, message in trouble | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cluster_debug(DERROR, "ec_cluster: Could not extract binding name from *`domain`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ECCMESS-*`xxxxx`* state machine error | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | cannot open reader *`subscriber`* on *`path`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | logserver thread failed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_cluster: log to server failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared: long domain name *`domain`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared: conn migration *`src->domain`* *`dest->domain`*' too long | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | buffer too short in veto hook | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | bump_specific_outbound_connections: key exceeds buffer size | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | publish lazy action of unknown type *`rep_action`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | malformed hash replication packet on *`self->hdr.name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ignoring malformed snap on *`self->hdr.name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | malformed cache snap on *`self->hdr.name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | shared out of order snapshot packet [part->snapped =current] | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | malformed replication packet on *`self->hdr.name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | shared out of order snapshot packet [part->snapped=current] | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared: short packet on gaugetable | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | malformed replication packet on *`self->hdr.name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared_lazy_gauge_table: keylen doesn't fit in a packet | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared: gaugetable serialization error! | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared: short packet on trans | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | replication replay log write failed: *`rep_action`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | publish laxy action of unknown type *`rep_action`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared_throttles: Activity announce with no closure | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared_throttle: Invalid sigma value *`node_a / sum_a`*          from activity *`node_a`* sum *`sum_a`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared_throttles: Only one instance of named throttles allowed | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | ec_shared_throttles: Failed to create shared throttle cache | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | unexpected type *`ncost->type`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | Announcement of throttle cost update failed got *`size`* expected *`size`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: *`co->name`* error: expected a single return value, got *`value`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet-*`xxxxx`*: *`co->name`* error: *`lua_tostring`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: Unsupported return type '*`rettype`*' for callout *`name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: Unsupported argument type '*`tok`*' for callout *`name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: require *`rule->value`* failed: *`lua_tostring`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: Unsupported argument size *`def->size`* while " "processing hook *`co->name`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet-*`xxxxx`*: *`co->name`* error: *`lua_tostring`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet-*`xxxxx`*: Could not parse prototype *`proto`* for hook *`hookname`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: this session already has an event! | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: could not find saved session event! | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: *`mod->name`*:*`name`* yielded execution, but it is not safe to do so | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: *`mod->name`*:*`name`* returned VALIDATE_AGAIN, but it is not safe to do so | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: *`mod->name`*:*`name`* must return one of msys.VALIDATE_CONT msys.VALIDATE_DONE or msys.VALIDATE_AGAIN | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | *`lua_tostring`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet-*`xxxxx`*: *`mod->name`* error: *`lua_tostring`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: scpt_resume called on a thread that has no resume handler | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | scriptlet: *`b.len`* *`b.buffer`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | error getting hostname: *`errno`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | unable to rename *`ent->filename`* to *`filename`* errno=*`errno`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | pe2_logger: unable to open *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | adknowledge taglines: Failed to create curlh | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | adknowledge taglines: Curl failure *`res`* | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | *`FILE`*:*`LINE`* failed to identify start of tagline, bailing | An internal error occurred. Contact support if it persists. |
| DERROR | MOD | *`FILE`*:*`LINE`* failed to identify end of tagline, bailing | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | domainkeys: granularity required *`responsible_localpart`* != *`g`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | domainkeys: unsupported key type*`keytype`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | domainkeys: dns-cache gave me a null node | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | domainkeys: No one is responsible for this message | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | Selector and/or key path not defined for *`dconf->name`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | domainkeys: unsupport q=*`key`*, "q" | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | domainkeys: No one is responsible for this message | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ds_worker: lost a connection | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ec_ldap_execute: *`error`* [*`rv`*] *`ldap_errstring`* / *`errstr`* query: *`query`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ec_ldap_execute: *`error`* *`rv`* *`ldap_err`* *`query`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ec_ldap_execute: successful query: *`query`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ec_ldap_connect: ds_ldap_url_parser [*`rc`*] *`ldap_err`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ec_ldap_execute: successful query: *`query`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | cidrdb_rbldnsd: Default entry not found in file, using 127.0.0.2 | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | cidrdb_rbldnsd: Default entry not found in *`file`*, using the emtpy string | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | http_open: with unsupported mode *`options`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | http_open: *`error`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | persist_open: with unsupported mode *`options`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | persistio: mkstemp failed *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | persistio: io_wrapper_fdopen failed *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | persistio: io_wrapper_copy_to_string failed *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | pipe_io: clear_env enabled, but no enN given in URI *`filename`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | Failed to persist job *`jobid`* ("*`command`*"): *`errstr`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | Failed to remove job *`jobid`*: [*`errstr`*] | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | sched: scheduled jobs cannot be persisted as the backing store was ommitted | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | mi_logger: could not find a key we should have found *`mid_info->key`*, *`mid_info->domain`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | mi_logger: could not find a domain we should have found *`mid_info->key`*, *`mid_info->domain`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | pe2_logger: failed to convert address with inet_ntop: *`errmsg`*, *`extra`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: couldn't generate temp file in *`dir`*: *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: failed to write to temp file *`tfile`*, *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: *`conf->engine->name`* doesn't support scanning messages larger than the legacy_message_threshold; scanning only the first *`copied`* bytes | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: *`conf->engine->name`* doesn't support scanning messages larger than the legacy_message_threshold; scanning only the first *`copied`* bytes. If you configure file_base, you may be able to resolve this message | Check your antivirus module configuration |
| DWARNING | MOD | antivirus: *`conf->engine->name`* checking *`piece.len`* bytes took *`seconds`* seconds | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | brightmail: incomplete read on socket *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | brightmail: got unexpected rcpt *`rcpt`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | brightmail: Called without a seng | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | BM-*`xxxxx`* no rcpt list | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | BM-*`xxxxx`* not a valid rcpt | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | BM-*`xxxxx`* only handly rcpt (*`i`*) once: *`rcptto`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: clam write timeout after *`written`*, *`seconds`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: clam poll failed after *`written`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: clamav reestablishing connection for retry (fd=*`fd`*) | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: clamav could not connect/use AV connection | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: clamav daemon offline | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: clamav communication error | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | clamav read response error | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | clam bogus response: *`mtc.gb_donebuffer`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | cloudmark_scan: this message got no body p=*`p`* b=*`p->body`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | Cloudmark CMAE:*`CMAE_StrError`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | listener '*`cfghdr->name`*' cannot duravip_follow *`parent`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | upgrading *`node->def->prefix`*_listener '*`node->address`*' to DuraVIP | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | upgrading '*`cfghdr->name`*' to DuraVIP | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ec_cluster: malformed cluster solicitation | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ec_cluster: cluster solicitation received: *`ci`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | ec_cluster: malformed cluster response | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | domainkeys: failed to expand *`fmt`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | domainkeys: private key cache insertion failed | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | dkim: dns-cache gave me a null node | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | setup_xdfn, called out of order | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | setup_xprt called out of order | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: fsav could not use AV connection | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: fsav_shmscan_file failed: *`rv`*, *`fsav_error_to_string`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | fp: could not getsockname() | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | antivirus: kav reestablished connection for retry *`fd`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | url_ripper: udc can't remove *`it->query.query.name`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | url_ripper: udhc can't remove [name] *`it->query.query.name`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | malformed data replication packet on *`name`* len *`len`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | replication packet on unknown object *`name`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | replication type mismatch *`rep_type: ntohs`*       != *`obj->rep_type:obj->object_type`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | "shared_lazy membership on *`obj->hdr.name`* | An internal error occurred. Contact support if it persists. |
| DWARNING | MOD | shared_replay membership on *`obj->hdr.name`* | An internal error occurred. Contact support if it persists. |

| [Prev](MEM-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](NET-panic-log-errors.php) |
| D.8. The MEM Errors  | [Table of Contents](index.php) |  D.10. The NET Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)