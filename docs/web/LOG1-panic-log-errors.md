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

| D.7. The LOG1 Errors |
| [Prev](LIC-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](MEM-panic-log-errors.php) |

## D.7. The LOG1 Errors

In this section errors are sorted by severity.

<a name="LOG1-table-panic-log-errors"></a>

**Table D.7. LOG1 errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | LOG1 | the module containing *`io_wrapperiow->scheme`* uses old APIs and needs to be recompiled | See error message |
| DCRITICAL | LOG1 | LOG-*`xxxxx`* logging subsystem failed startup *`strerror`* | The logging subsystem failed to start. Another preceding error should indicate the specific error that occurred. |
| DCRITICAL | LOG1 | Caught signal *`sig_num`* | The process received the indicated signal. |
| DCRITICAL | LOG1 | could not open /dev/null: *`devnull`* *`errno`* | Could not open /dev/null. Check permissions and contact support if the problem persists. |
| DCRITICAL | LOG1 | Service control manager requests *`opcode`* system shutdown **Platform: Solaris**  | The Solaris svcs manager has requested a shutdown. |
| DCRITICAL | LOG1 | no valid configuration | Your configuration file is invalid. A previous error will have listed the specific error. |
| DCRITICAL | LOG1 | heartbeat_init failure | An internal error has occurred. If this persists across a restart, please contact support. |
| DCRITICAL | LOG1 | watchdog reset | The server has hung for more than watchdog_interval seconds and has been automatically restarted. |
| DCRITICAL | LOG1 | MEM-*`xxxxx`* You must set ECELERITY_MEMORY=NOREPLACE in your environment for this configuration to work | When using certain modules, set this variable in the `environment` file. For the location of this file on your OS see the manual. |
| DCRITICAL | LOG1 | NLSN-*`xxxxx`*: '*`listener->hashkey`*' declared in configuration file is unknown to Ecelerity. Do you need to load a module? | An unknown listener type is declared in your configuration. Either the configuration is in error, or the module providing the listener is not loaded. |
| DCRITICAL | LOG1 | SEMH-*`xxxxx`* ReleaseSemaphore: *`LastError`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | SEMH-*`xxxxx`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | SEMH-*`xxxxx`* ec_sem_wait: *`LastError`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | SMTP-*`xxxxx`* *`conn->fd`* *`dc->bytes`* *`dc->towrite`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Unable to spool internal message *`spool_name`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | SPSYNC-*`xxxxx`* missing object for *`spoolname`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Assertion *`what`* failed at *`file`* *`lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | ec_control_parse_argv: too many captures. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | DBGTLS-*`xxxxx`* shutdown after stack trace | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | pre_drop_privileges_hook signalled an error | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | SEC-*`xxxxx`* config system returned username *`user`* with no uid. Consult your vendor | Consult your vendor |
| DCRITICAL | LOG1 | SEC-*`xxxxx`* config system returned group *`group`* with no gid. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | security: invalid capabilities string | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | seteuid(*`uid`*) failed: [*`errno`*], *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | security: cap_set_proc(*`capabilities`*) failed: *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | security: capability sets not supported! | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | post_drop_privileges_hook signalled an error | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Aborting at *`file`*, *`lineno`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | hash table size inconsistency. One or more modules needs to be rebuilt for this version of " PRODUCTNAME ". | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | *`msg`*, *`arg`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | module post_init failed: *`mod->_inst->module_symbol`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | THPL-*`xxxxx`*: sync completion triggered in async tail. Consult your vendor. (submitted from *`job->file`*:*`job->line`*) | Consult your vendor |
| DCRITICAL | LOG1 | THPL-*`xxxxx`*: job->worker is NULL in async call. Consult your vendor. (submitted from *`job->file`*:*`job->line`*) | Consult your vendor |
| DCRITICAL | LOG1 | THPL-*`xxxxx`*: invalid job class in submitted job. Consult your vendor for assistance (submitted from *`file`*:*`line`*) | Consult your vendor |
| DCRITICAL | LOG1 | THPL-*`xxxxx`*: submitted job is missing worker routine. Consult your vendor for assistance (submitted from *`file`*:*`line`*) | Consult your vendor |
| DCRITICAL | LOG1 | THPL-*`xxxxx`*: job routine [*`name`*] run synchronously but wants to continue asynchronously. Consult your vendor if you experience instability. (submitted from *`file`*:*`line`*) | Consult your vendor |
| DCRITICAL | LOG1 | THPL-*`xxxxx`*: failed to start *`Q->name`* worker thread *`i`* of *`concurrency`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | THPL-*`xxxxx`*: failed to init backlog semaphore for name *`queue`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | that pool is still set to defer | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | validate API version *`shared.module_api_version`* is not supported in this build | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Exceeded maximum (*`MAX_JVM_OPTIONS`*) jvm options | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Unsupported option: *`key`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | mutex_init failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | couldn't localize thread data | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | perl: parent sees handler, clone does not! | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | value for concurrency is not valid | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | mutex_init failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | couldn't localize thread data | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | configuration failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | PHP-*`xxxxx`*: failed to parse your PHP code | Check the syntax of your PHP code? |
| DCRITICAL | LOG1 | Failed to init PHP TSRM! | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Failed to initialize PHP | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | context access out of bounds *`w`* | This can only happen with improper use of the internal context fetching APIs |
| DCRITICAL | LOG1 | ECMSG-*`xxxxx`* lock: errno=*`errno`* *`strerror`* | A message's mutex is broken. This should only happen if an * internal threading error has occurred. |
| DCRITICAL | LOG1 | ECMSG-*`xxxxx`* unlock: errno=*`errno`*, *`strerror`* | a message's mutex is broken. This should only happen if an internal threading error has occurred. |
| DCRITICAL | LOG1 | MSGLC-*`xxxxx`* Legacy code is holding on to an email_message too long | This indicates an implementation issue in a legacy module |
| DCRITICAL | LOG1 | Invalid memory type specified in string_init_type, consult your vendor | Consult your vendor |
| DCRITICAL | LOG1 | UTL-*`xxxxx`* type *`opt->type`* unhandled for option *`opt->name`*, consult your vendor | Consult your vendor |
| DCRITICAL | LOG1 | a module that provides string interpolation services behaved badly. Consult your vendor to address this issue | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* invalid arguments to compile_fallback_element. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* invalid scope *`name scope_name_len`*                , *`element`*. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* scope name *`scope_name_len`*, *`element`* is too long. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* can't declare global as a child of *`scope->render_name`*. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* Cannot register options within scope *`scope_name_len`*, *`element`*. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* Inheritance path length is incorrect, consult your vendor | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* attempted to register *`pun.scope->inh_name`* as an anonymous scope when it is already registered as a named scope. | See message |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* attempted to register *`pun.scope->inh_name`* as a named scope when it is already registered as an anonymous scope. | See message |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* syntax error in fallback description '*`deDCsc`*', consult your vendor | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* regex bindings are not supported | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* regex binding groups are not supported | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* regex pathways are not supported | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* regex pathway groups are not supported | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* error: unterminated regex *`cfghdr->myscope->scope_name`*: *`cfghdr->name`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* error compiling regex for *`cfghdr->myscope->render_name`* *`cfghdr->name`*: *`error`* (offset *`erroroffset`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* couldn't add matching instance to instances array in parent | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* couldn't add first matching instance to instances array in parent | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`*: *`scope_name`* is not valid in the *`parent->myscope->inh_name`* scope | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`*: failed to allocate *`scope->scope_name`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* Scope not of the correct type | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* array append failed while matching | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`*: duplicate binding name *`cfghdr->name`* | Check your configuration file |
| DCRITICAL | LOG1 | CFG-*`xxxxx`*: duplicate pathway name '*`cfghdr->name`*' | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* destroy_pathway_scope_instance can't remove instance *`cfghdr->name`* from pathways_by_name. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* option *`option->name`* registered multiple times with different closures. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* option *`option->name`* is already registered in scope *`scope->render_name`*. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* probably shouldn't happen | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* Unhandled config type *`option->type`* . Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* the impossible has happened. Consult your vendor | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`*: unhandled config type. Consult your vendor | Consult your vendor |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* could not find or instantiate a toplevel_cfghdr for option *`option->name`*. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | Syntax error in *`source`*:*`lineno`* near *`value`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | token_to_ecdict failed near:*`T->value`* [ ... ] in *`T->source`*:*`T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* error compiling regex *`regex`*: *`error`* (offset *`erroroffset`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | invalid local address *`address`* in control listener | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | invalid ACL in control listener | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`*: fatal error while parsing *`MT->source`*:*`MT->lineno`*. Please consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | Module initialization failed: *`T->value`* = *`T->children->value`* in *`T->source`*, *`T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Module initialization failed near: *`T->value`* [ ... ] *`T->source`*:*`T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Module initialization failed near: *`T->value`* = ( ... ) *`T->source`*:*`T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Module *`name`* initialization failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Module modifier must be either 'enabled' or 'disabled'; you have '*`tmp->value`*' *`T->source`*: *`T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Too many modifiers for module loader in *`T->source`*:*`T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | No module path specified in *`T->source`*:*`T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | No module symbol specified in *`T->source`*:*`T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Cannot load *`image symbol`*         (*`T->source:T->lineno`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* the impossible has happened. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | Didn't expect a name for *`child_scope->inh_name`* at *`T->source:T->lineno`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | You cannot change the settings for the default binding with a 'Binding default' stanza, change them in the global scope instead | See message |
| DCRITICAL | LOG1 | *`log.buffer`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | You cannot change the settings for the default binding group with a 'Binding_Group default' stanza, change them in the global scope instead | See message |
| DCRITICAL | LOG1 | You cannot change the settings for the default pathway with a 'Pathway default' stanza, change them in the global scope instead | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | You cannot change the settings for the default pathway group with a 'Pathway_Group default' stanza, change them in the global scope instead | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Didn't expect context type *`T->context_type`* here | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | "*`T->value`*" is not a valid option name or stanza in scope *`cfghdr->myscope->inh_name`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | CFG-*`xxxxx`* Failed to initialize global scope. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | Error in configuration file *`configfile`* | Review your *`configfile`* |
| DCRITICAL | LOG1 | shutdown requested via console *`cc->auth_info.user`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | ECCMGRLOG:*`job->key`* unknown job type | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | dml logger thread pool creation failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Critical cluster error! Nodes *`nodeinfo->nodename`* and *`iternode->nodename`* have the same IP address *`address`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | ABI mismatch for authz handler | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | AUTHZ-*`xxxxx`*: authz module broken. Consult your vendor. | Consult your vendor |
| DCRITICAL | LOG1 | auth_plain: Auth response too short | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Failed to open *`pctx->file`*. Do you need to run ec_dbupgrade?, | See message |
| DCRITICAL | LOG1 | sieve[*`seng->sieve->source`*:*`lineno`*]: *`len`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | antivirus: panda couldn't map " #sym " | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | pav AVSystem initilaization failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | Service control manager requests *`opcode`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | failed to query status *`GetLastError`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | failed to query status *`GetLastError`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | failed to get handle on the "*`svcname`*" service *`GetLastError`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | failed to get manager *`GetLastError`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | read command: *`len len buf`*          **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | my response is *`response`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | event_write returned *`x`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | write returned *`x`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | binding: *`s.buffer`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LOG1 | global: *`s.buffer`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | IO-*`xxxxx`* module *`i0->shared.module_name`* appears to have broken a message during IO. System instability may result. Consult your vendor to address this issue | A module was unable to correctly reconstitute a message after converting it to a legacy message format. Contact support. |
| DERROR | LOG1 | unknown io_wrapper URI scheme: *`scheme`* | The indicated uri scheme cannot be understood by the server. |
| DERROR | LOG1 | logging module *`l0->shared.module_name`* was unable to process a large message | A message could not be converted into a legacy message format for a legacy module. Please contact support. |
| DERROR | LOG1 | LOG-*`xxxxx`* module *`l0->shared.module_name`* encountered a broken message during logging. System instability may result. Consult your vendor to address this issue | A module encountered an error while converting a message back from a legacy format. Please consult support. |
| DERROR | LOG1 | LOG-*`xxxxx`* unable to render a large message down to a legacy format to pass to the legacy " #name " hook. You may be missing log entries as a result. Consult your vendor to address this issue | A module encountered an error converting a message to a legacy format for a legacy module. Please contact support. |
| DERROR | LOG1 | LOG-*`xxxxx`* a message appears to be broken. System instability may result. Consult your vendor to address this issue | A legacy message failed to be reconstituted to a non-legacy format after being passed to a legacy module. |
| DERROR | LOG1 | *`hook_lookup`* prototype '*`hook_proto`*' cannot be parsed | An internal error happened during hook registration, the module in question has an error or is using an outdated API. |
| DERROR | LOG1 | NLSN-*`xxxxx`* unsupported address family type *`address->sa_family`* for *`inst->def->prefix`*_listener *`inst->address`* | The bind address specified for your listener could not be understood. |
| DERROR | LOG1 | SFTBNC-*`xxxxx`*: generate_soft_bounce_message_preamble broke message. Consult your vendor. | Consult your vendor |
| DERROR | LOG1 | SFTBNC-*`xxxxx`*: generate_soft_bounce broke message. Consult your vendor. | Consult your vendor |
| DERROR | LOG1 | SFTBNC-*`xxxxx`*: generate_soft_bounce returned broken message. Consult your vendor. | Consult your vendor |
| DERROR | LOG1 | SFTBNC-*`xxxxx`*: post_generate_soft_bounce broke message. Consult your vendor | Consult your vendor |
| DERROR | LOG1 | SFTBNC-*`xxxxx`*: post_generate_soft_bounce broke bounce_mess. Consult your vendor. | Consult your vendor |
| DERROR | LOG1 | SFTBNC-*`xxxxx`*: internal_inject_no_log on broken email_message. Consult your vendor. | Consult your vendor |
| DERROR | LOG1 | SFTBNC-*`xxxxx`*: internal_inject on broken email_message. Consult your vendor. | Consult your vendor |
| DERROR | LOG1 | SPSYNC-*`xxxxx`* missing (large) object for *`spoolname`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | the core_finalize_validation_hook damaged a message to the point where " LONGPRODUCTNAME " cannot parse it any longer. This message is being 421'd. Consult your vendor to remedy this issue. | Consult your vendor |
| DERROR | LOG1 | SPOOL-*`xxxxx`* *`spoolname`* calc=*`calc_msg_size`* len=*`len`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ec_message_select_binding_by_group() called with a NULL group | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ec_message_select_binding_by_group() NULL domain found | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ec_message_select_binding_by_group: Nonexistent or empty binding group *`group`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Failed to connect to: *`ctx->eccmgr`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Unresolvable parse error on message, logging content to *`path_lf`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Unresolvable parse error on message, and unable to log content: errno=*`errno`* *`strerror`* check permissions on /var/log/ecelerity/traces | See message |
| DERROR | LOG1 | VLDTE-*`xxxxx`* module *`v0->shared.module_name`* appears to have broken a message during binding assignment. System instability may result. Consult your vendor to address this issue. | Consult your vendor |
| DERROR | LOG1 | context access out of bounds*`w`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | module *`shared.module_name`* returned VALIDATE_AGAIN incorrectly | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | the core_post_validate_data_spool_each_rcpt_hook encountered a message damaged to the point where LONGPRODUCTNAME " cannot parse it any longer. This message is being 421'd. Consult your vendor to remedy this issue | Consult your vendor |
| DERROR | LOG1 | module *`shared.module_name`* encountered a message damaged to the point where LONGPRODUCTNAME cannot parse it any longer This message is being 421'd. Consult your vendor to remedy this issue. | Consult your vendor |
| DERROR | LOG1 | java: no java.io.ByteArrayInputStream | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no java.io.ByteArrayInputStream(byte[]) | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no java.lang.StringBuffer | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no java.lang.StringBuffer(String) | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: make message of bad type | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`jp_ecdict`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`jp_ecdict`*(long) | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`clazz`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no (long)*`clazz`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`clazz`*() | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no java.util.Date | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no java.util.Date(long) | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no java.net.InetAddress | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no java.net.InetAddress(B) | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no com.omniti.ecelerity.ECInetAddress | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no com.omniti.ecelerity.ECInetAddress constructor | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`*, *`jinterp_hooks[method].name]`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`fixup`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`fixup.bootstrap`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Embedded JVM License Validated | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Starting JVM... | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: (JNIEnv *)*`env`* is a bastard | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Could not parse prototype *`proto`* for *`hook`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Could not parse prototype for *`hook`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Unsupported return type '*`ret`*' | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Unsupported argument type: *`tok`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Unsupported argument size *`a->size`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no class *`js->classname`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: *`js->hook`* does not implement *`js->jproto`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`* *`jinterp_hooks[method].name]`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: Date(long) failed | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: could not build java.lang.String | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`* *`jinterp_hooks[can_log_error].name]`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: could not build java.lang.String | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no class *`js->classname`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`js->classname`*.compile *`jproto`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | java: no *`list->module`*. *`jinterp_hooks[method].name`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | perl_error(call cv): *`(SvPVx(ERRSV, PL_na)`*         | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | perl_error(invoke method *`method`*): *`(SvPV(ERRSV, PL_na))`*          | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Perl Interpreter License Validated | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | perl: fatal could not reinstate closure | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | perl event delegator received an closure not managed by perl! | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | perl_error: *`(SvPVx(ERRSV, PL_na))`*          | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | perl_error: *`(SvPVx(ERRSV, PL_na))`*          | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | PHP-*`xxxxx`*: Failed to evaluate your PHP code | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | *`str_length`*, *`str`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | PHP: *`message`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | PHP Interpreter License Validated | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ife_sockpacket: num_ifs is 0, reloading | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ife_sockpacket: num_ifs is now *`num_ifs`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | #where = *`p->where`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ECMSG-*`xxxxx`*: write failed | Failed to write out a message's context, a preceding error may give more context |
| DERROR | LOG1 | ECMSG-*`xxxxx`*: copy_to_string x=*`x`* expected *`value`* (write_to=*`write_to`* seek_to=*`seek_to`*) | A message's rendering differs from the length we had previously calculated. This generally reflects an internal issue with the MIME parse results for the message. |
| DERROR | LOG1 | ECMSG-*`xxxxx`*: preamble fixup failed | The message has an unhandleable structure and will be turned away |
| DERROR | LOG1 | ECMSG-*`xxxxx`*: boundary write failed | A write to the message during MIME reassembly failed. A preceding error may give more contex |
| DERROR | LOG1 | ECMSG-*`xxxxx`*: part write failed | A write to the message during MIME reassembly failed. A preceding error may give more context |
| DERROR | LOG1 | ECMSG-*`xxxxx`*: body write failed *`strerror`* | A write to the message during MIME reassembly failed. A preceding error may give more context. |
| DERROR | LOG1 | ECMSG-*`xxxxx`*: epilogue write failed (body_end=*`part->body_end`* epilogue_end=*`part->epilogue_end`*) | A write to the message during MIME reassembly failed. A preceding error may give more context |
| DERROR | LOG1 | MSGLG-*`xxxxx`* assemble to legacy failed | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | MSGLG-*`xxxxx`* unable to reconcile message passed to email_message_allocate_anonymous | This indicates an implementation issue in a legacy module |
| DERROR | LOG1 | MSGLG-*`xxxxx`* failed to reassemble to legacy in email_message_allocate_anonymous | This indicates an implementation issue in a legacy module |
| DERROR | LOG1 | MSGLG-*`xxxxx`* assemble to legacy failed | This indicates either an implementation issue in a legacy module or an issue in converting a message into a legacy-compatible data structure |
| DERROR | LOG1 | state = MPS_HEADERS | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | state = MPS_BODY | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | state = MPS_PROLOGUE | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | state = MPS_EPILOGUE | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | MPS_REPARSE_BODY | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | The Extensions_Dir option is deprecated and should be removed from your configuration file. If you *need* to change it from the default, edit your `ec_ctl` script and add the `-e` command line switch to the `EXTRA_ARGS` variable | See message |
| DERROR | LOG1 | jlog_io_wrapper: Malformed when parameter *`ctmp`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | cluster logger file error: already exists *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | cluster logger file error: jlog[*`filename`*] *`jlog_ctx_err`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | cluster logger error: unsupported options *`options`* on *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Clustering License Validated | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | jlog_io_wrapper: Malformed when parameter *`ctmp`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | cluster logger file error: already exists *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | PKUP:*`xxxxx`* swap out failed for *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | PKUP:*`xxxxx`* pickup monitor starting for *`conf->pickup_path`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | PELOG-*`xxxx`* *`mysql_errno`* *`mysql_error`* | See message |
| DERROR | LOG1 | PELOG-*`xxxx`* semaphore/queue mismatch | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | License for *`name`* anti-virus expired *`age`* days ago. | Consult your vendor |
| DERROR | LOG1 | antivirus: bitdefender scan callback called with no thread context | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | Failed to process DML log[*`p`*] Error: *`errstr`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | dcc: server rejected our password | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | dcc: signature looks broken | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | dcc: server reports error *`pkt_buf.err.msg`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | dcc: failed to enqueue packet in sl | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | dkim: failed to expand *`fmt`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | invalid authz handler uri *`uri`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | could not find authz handler for uri (*`uri`*), *`uri`*, *`uri`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sk_tool: Trying to send a NULL body | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | *`format`* *`ap`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ec_config: argument *`i`* is not a string | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ec_config: unhandled array option type *`opt->type`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ec_config: unhandled option type *`opt->type`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ec_config: error: *`str.buffer`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sieve: iconv_open(*`destcharset`*, *`srccharset`*) failed, consider using the ICU module. | See message |
| DERROR | LOG1 | sieve: could not convert from empty charset to UTF-8 | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | -- | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sieve: included file cannot be run in the *`seng->phase`* phase | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | this sieve script[*`s->source`*] cannot be run in this callback phase | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | legacy | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | rfc2822:headers em=*`em`* body *`em->body`* *`em->body_len`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | *`buf`* *`ap`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sieve: a module returned SIV_AGAIN while processing an include that should be run synchronously. this is a module bug; contact your vendor | Contact your vendor |
| DERROR | LOG1 | sieve: failed to open *`filename:strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sieve: failed to allocate memory for script *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sieve: running sieve script for hook *`hookname`*... script triggered VALIDATE_AGAIN which is not supported when running under a hook. system instability may result | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sieve: Unsupported argument size while processing hook *`hookname`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sieve: failed to reconcile legacy message for *`hookname`* hook | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | sieve: re-assemble broke for legacy message in *`hookname`* hook | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | jlog_io_wrapper: Malformed when parameter *`ctmp`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | cluster logger file error: already exists *`filename`*) | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | cluster logger file error: jlog[*`filename`*] *`jlog_ctx_err`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | cluster logger error: unsupported options *`options`* on *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | LOG1 | ECLOGMOVE-*`xxxxx`* | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | IOWRP-*`xxxxx`*: stringwrite2 failed errno=*`errno`* *`strerror`* | An internal error occurred. If this persists, please contact support. |
| DWARNING | LOG1 | IOWRP-*`xxxxx`*: io_wrapper_read failed. Going to return *`tot`* anyway errno=*`errno`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | IOWRP-*`xxxxx`*: io_wrapper_read failed errno= *`errno`* *`strerror`* | A read operation failed. If this persists, please contact support. |
| DWARNING | LOG1 | CTRL-*`xxxxx`*: response packet too large; not speaking control protocol? | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | CTRL-*`xxxxx`*: malloc() failed; not speaking control protocol? | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | CTRL-*`xxxxx`*: read() failed: *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | CTRL-*`xxxxx`*: End-of-file on communications channel | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | echash_gauge_unserialize: data format error | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | THPL-*`xxxxx`* lost *`generic_tq_size`* jobs in *`lost_queue->name`* pool | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | st->body *`filename`* errno=*`errno`* *`strerror`* | Failed to open a message body for reading, *`strerror`* lends context |
| DWARNING | LOG1 | st->headers *`filename`* errno=*`errno`*, *`strerror`* | Failed to open a message body for reading, *`strerror`* lends context |
| DWARNING | LOG1 | checklist: *`argv`* is not a valid IPv4 Address | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | auth_plain: Auth response too short | An internal error occurred. Contact support if it persists. |
| DWARNING | LOG1 | auth_plain: authorization and authentication ID mismatch | An internal error occurred. Contact support if it persists. |

| [Prev](LIC-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](MEM-panic-log-errors.php) |
| D.6. The LIC Errors  | [Table of Contents](index.php) |  D.8. The MEM Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)