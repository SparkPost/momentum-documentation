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

| 4.2. Console Commands |
| [Prev](operations.console.php)  | Chapter 4. Operations |  [Next](operations.logging.php) |

## 4.2. Console Commands

Besides the commands listed here, there are also module-specific console commands. Links to these commands are listed in [Section 13.1, “Module-Specific Console Commands”](module_specific_console_commands.php "13.1. Module-Specific Console Commands").

### Note

Preceding a command with `xml` will output the results in XML format.

### 4.2.1. Online Configuration Administration

*   [config](console_commands.config.php "config")

*   [module](console_commands.module.php "module")

*   [write config](console_commands.write_config.php "write config")

### 4.2.2. Information Summary

*   [sp_async](console_commands.sp_async.php "sp_async")

*   [binding summary](console_commands.binding_summary.php "binding summary")

*   [domain](console_commands.domain.php "domain")

*   [summary](console_commands.summary.php "summary")

*   [summary reset](console_commands.summary_reset.php "summary reset")

*   [signing_stats](console_commands.signing_stats.php "signing_stats")

*   [signing_stats reset](console_commands.signing_stats_reset.php "signing_stats reset")

*   [threads](console_commands.threads.php "threads")

*   [unlink stats](console_commands.unlink_stats.php "unlink stats")

### 4.2.3. Queue Size Reporting

*   [active](console_commands.active.php "active")

*   [binding active](console_commands.binding_active.php "binding active")

*   [binding delayed](console_commands.binding_delayed.php "binding delayed")

*   [delayed](console_commands.delayed.php "delayed")

### 4.2.4. Queue Administration per Domain

*   [fail domain](console_commands.fail_domain.php "fail domain")

*   [fail domain quiet](console_commands.fail_domain_quiet.php "fail domain quiet")

*   [flush domain](console_commands.flush_domain.php "flush domain")

*   [rebind](console_commands.rebind.php "rebind")

*   [reroute queue](console_commands.reroute_queue.php "reroute queue")

*   [showqueue](console_commands.showqueue.php "showqueue")

### 4.2.5. Queue Administration per Binding per Domain

*   [binding flush domain](console_commands.binding_flush_domain.php "binding flush domain")

*   [binding fail domain](console_commands.binding_fail_domain.php "binding fail domain")

*   [binding fail domain quiet](console_commands.binding_fail_domain_quiet.php "binding fail domain quiet")

*   [rebind](console_commands.rebind.php "rebind")

*   [showqueue](console_commands.showqueue.php "showqueue")

### 4.2.6. Message Administration

*   [message details](console_commands.message_details.php "message details")

*   [message fail](console_commands.message_fail.php "message fail")

*   [message fail quiet](console_commands.message_fail_quiet.php "message fail quiet")

*   [message retry](console_commands.message_retry.php "message retry")

*   [spool_in](console_commands.spool_in.php "spool_in")

### 4.2.7. Connections Reporting

*   [count](console_commands.count.php "count")

*   [show inbound](console_commands.show_inbound.php "show inbound")

*   [show outbound](console_commands.show_outbound.php "show outbound")

### 4.2.8. Memory Usage Reporting

*   [memory](console_commands.memory.php "memory")

### 4.2.9. Log Information and Manipulation

*   [paniclog](console_commands.paniclog.php "paniclog")

*   [reopen logs](console_commands.reopen_logs.php "reopen logs")

### 4.2.10. Utilities

*   [debug](console_commands.debug.php "debug")

*   [dig](console_commands.dig.php "dig")

*   [dns_cache](console_commands.dns_cache.php "dns_cache")

*   [help](console_commands.help.php "help")

*   [\pager](console_commands.pager.php "\pager")

*   [pid](console_commands.pid.php "pid")

*   [refresh domain](console_commands.refresh_domain.php "refresh domain")

*   [spool import](console_commands.spool_import.php "spool import")

*   [spool import_poll](console_commands.spool_import_poll.php "spool import_poll")

*   [sysinfo](console_commands.sysinfo.php "sysinfo")

*   [tls](console_commands.tls.php "tls")

*   [trace smtp](console_commands.trace_smtp.php "trace smtp")

*   [version](console_commands.version.php "version")

### 4.2.11. Shutting Down

*   [shutdown](console_commands.shutdown.php "shutdown")

### 4.2.12. Deprecated Commands

*   [debug smtp](console_commands.debug_smtp.php "debug smtp")

| [Prev](operations.console.php)  | [Up](operations.php) |  [Next](operations.logging.php) |
| 4.1. The Momentum System Console  | [Table of Contents](index.php) |  4.3. Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)