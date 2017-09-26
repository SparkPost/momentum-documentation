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

| D.2. The DB Errors |
| [Prev](all-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](DNS-panic-log-errors.php) |

## D.2. The DB Errors

In this section errors are sorted by severity.

<a name="DB-table-panic-log-errors"></a>

**Table D.2. DB errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | DB | MQ-*`xxxxx`* memory shortage processing complete | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | MQ-*`xxxxx`* memory shortage, expect IO on scheduler | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | Could not acquire spool lock from process *`otherguy`* | Another ecelerity process is running. |
| DCRITICAL | DB | Unable to lock the spool; another instance of *`PRODUCTNAME`* is currently running | Another ecelerity process is running. |
| DCRITICAL | DB | Could not open spool lock file under *`spoolbase`* | Either ecelerity does not have write permissions on spoolbase, or that directory does not exist. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* mkdir(*`newdir`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* no space, failed to create spool structure | Remove old logs, increase drive size? |
| DCRITICAL | DB | SPOOL-*`xxxxx`* spool structure build out failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* spool buildout failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* async thread initialization failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* mmap sanity check failed *`filename`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | DCRITICAL, SPOOL-*`xxxxx`* mid mixup: *`spoolname1`* resulted in *`spoolname2`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | System in safe mode and spooling contract not satisfied | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | IO_System module didn't fulfill contract | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* error getting body/overlay | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* *`filename`* read: errno=*`errno`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* *`filename`* [*`errno`*] *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DB | SPOOL-*`xxxxx`* *`filename`*: size is *`file_size`* expected *`body_len`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | GRBUF-*`xxxxx`* failed to swap out growbuf to *`filename`* *`errno`* *`strerror`* | The indicated filename could not be written to. The strerror should give context on why that happened. |
| DERROR | DB | GRBUF-*`xxxxx`* error during write *`errno`* *`strerror`* | A spool file could not be written to. The strerror should give context on why that happened. |
| DERROR | DB | spool module *`i0->shared.module_name`* was unable to process a large message | Legacy modules are unable to process messages larger that legacy_message_threshold. Increase that tunable if you need them to be processed there. |
| DERROR | DB | SPOOL-*`xxxxx`* mkdir(*`newdir`*) *`errno`* *`strerror`* | Check permissions, check space on drive |
| DERROR | DB | SPOOL-*`xxxxx`* [*`errno`*] *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | *`ctx->base`*: Found v1 spools, performing upgrade. | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* failed to completely migrate all contents (*`dirname`*) *`errno`* *`strerror`* | Check *`dirname`*, migrate files manually? |
| DERROR | DB | Finished upgrade with errors, please check spool for extraneous files. | Please check spool for extraneous files |
| DERROR | DB | Finished upgrade | Restart the application? |
| DERROR | DB | SPOOL-*`xxxxx`* *`filename`* [*`errno`*]*`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* meta read len=*`len`* *`filename`* (errno=*`errno`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* meta file is empty | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* message mismatch in meta file *`filename`*, meta says mid=*`actual_mid`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* message mismatch in v2 meta file *`filename`*, meta says mid=*`actual_mid`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* meta data indicates zero size spool file *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* version 1 spool format not supported *`filename`*) | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* unknown/unsupported spool format filenam | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* memory shortage | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* meta data indicates 0 size spool file *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* read *`len`* vs *`toreadlen`* across *`nvec`* vecs [*`errno`*] *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* *`permanaent_or_transient`* spool_in failure | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* spool_in failure *`rv`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* *`filename`* message is apparently 0 sized? *`msg_len`* *`calc_msg_size`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* mess render lost terminator | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* *`filename`* [*`errno`*]*`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* IO module returned IO_FAIL | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* invalid IO_XXX (*`writing`*) return from IO module | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* mess write len=*`len`* [*`errno`*]*`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* *`filename`* build_out: *`errno`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* mess render lost terminator | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* mess render (len=*`len`* != calc=*`calc_msg_size`*) | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* IO module returned IO_FAIL | An internal error occurred. Contact support if it persists. |
| DERROR | DB | DERROR, SPOOL-*`xxxxx`* invalid IO_XXX (*`writing`*) return from IO module | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* *`body_len`*, *`filename`*, [errno]strerror | An internal error occurred. Contact support if it persists. |
| DERROR | DB | SPOOL-*`xxxxx`* invalid (*`hook_res`*) return from pre_swap_out_meta_hook() | An internal error occurred. Contact support if it persists. |
| DERROR | DB | sharing data failed for *`obj->name`*, [*`err`*] | An internal error occurred. Contact support if it persists. |
| DWARNING | DB | SPOOL-*`xxxxx`* prune of *`dirname`* | An internal error occurred. Contact support if it persists. |
| DWARNING | DB | SPOOL-*`xxxxx`* overlay link(*`growbuf_name`*, *`spoolname`*) failed *`errno`* *`strerror`*, will spool the hard way | An internal error occurred. Contact support if it persists. |
| DWARNING | DB | SPOOL-*`xxxxx`* failed to open content file for overlay sanity check (*`spoolname`*, strerror) | An internal error occurred. Contact support if it persists. |
| DWARNING | DB | SPOOL-*`xxxxx`* mess write (len=l*`en`* ,calc=*`calc_msg_size`*) [*`errno`*] *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | DB | MSGBLD-*`xxxxx`* failed to swap out to, *`filename`*, *`errno`*, *`strerror`* | Failed to open an 'L' file for a large message during reception. *`strerror`* will give context. |
| DWARNING | DB | permastore: no default context | An internal error occurred. Contact support if it persists. |
| DWARNING | DB | permastore: no default context | An internal error occurred. Contact support if it persists. |
| DWARNING | DB | permastore: no default context | An internal error occurred. Contact support if it persists. |
| DWARNING | DB | permastore: no default context | An internal error occurred. Contact support if it persists. |

| [Prev](all-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](DNS-panic-log-errors.php) |
| D.1. All Panic Log Errors  | [Table of Contents](index.php) |  D.3. The DNS Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)