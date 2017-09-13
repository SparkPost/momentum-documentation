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

| D.5. The FD Errors |
| [Prev](DNSDS-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](LIC-panic-log-errors.php) |

## D.5. The FD Errors

In this section errors are sorted by severity.

<a name="FD-table-panic-log-errors"></a>

**Table D.5. FD errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | FD | Could not open pidfile: *`file`* | Check that there is not another ecelerity process running. |
| DCRITICAL | FD | pidfile *`file`* owned by pid *`opid`* | Another ecelerity process is running. |
| DCRITICAL | FD | failed to open my own process token: *`errno`* *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | I don't know who I am! *`errno`* *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | Failed to SetSecurityDescriptorDacl: *`errno`* *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHDP-*`xxxxx`* failed scheduler initialization | An internal error occurred, please contact support. |
| DCRITICAL | FD | Attempted to schedule a nonexistent event | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHDP-*`xxxxx`* invalid mask returned for fd *`e->fd`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHDP-*`xxxxx`* internal scheduler error *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHEP-*`xxxxx`* epoll_create failed | An internal error occurred, please contact support. |
| DCRITICAL | FD | Attempted to schedule a nonexistant event | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHEP-*`xxxxx`* invalid event for *`e->fd`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | Cannot create kqueue: *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | Attempted to schedule a nonexistant event **Platform: OSX**  | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHOSX-*`xxxxx`* attempted to schedule invalid event for fd *`e->fd`* **Platform: OSX**  | An internal error occurred, please contact support. |
| DCRITICAL | FD | Attempted to schedule a nonexistant event | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCH-*`xxxxx`* invalid event for fd *`e->fd`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHSP-*`xxxxx`* port_associate failed for *`fd`* *`errno`* *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHSP-*`xxxxx`* port_dissociate failed for *`fd`* *`errno`* *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHSP-*`xxxxx`* failed scheduler intialization | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHSP-*`xxxxx`*: asynch event notification initializer failed | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHSP-*`xxxxx`*: asynch event notification non-block failed | An internal error occurred, please contact support. |
| DCRITICAL | FD | Attempted to schedule a nonexistant event | An internal error occurred, please contact support. |
| DCRITICAL | FD | SCHSP-*`xxxxx`* invalid event *`e->fd`* | An internal error occurred, please contact support. |
| DCRITICAL | FD | Please add `Scheduler = "poll"` to your configuration file and try starting again | See message |
| DCRITICAL | FD | Abort, attempted to schedule a nonexistent event | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | SCHSE-*`xxxxx`* invalid event *`e->fd`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | No schedulers could be started. Terminating. | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | requested file descriptors (*`max_fd`*) too small for requested outbound connections (*`max_ob`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Could not set nofiles high enough! Check your kernel settings for max open files. | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | nofiles (*`rlim.rlim_cur`*) too small for requested outbound connections (*`max_ob`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Cannot initialize soft_bounce queue lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Cannot initialize soft_bounce queue lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Cannot initialize sp async lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Cannot initialize sp async semaphore | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | chroot requested and failed: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Cannot find gid for group *`str`*, *`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | setgid(*`gid`*) failed: [*`errno`*], *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | invalid supplemental groups item | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | setgroups() failed: [*`errno`*], *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | setuid(*`uid`*) failed: [*`errno`*], *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | failed to unlink *`filename`*: [win32 err: *`LastError`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | SCHDP-*`xxxxx`* failed scheduler initialization | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Attempted to schedule a nonexistant event | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | SCHDP-*`xxxxx`* invalid mask returned for fd *`e->fd`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | SCHDP-*`xxxxx`* internal scheduler error *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Attempted to schedule a nonexistant event | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | SCH-*`xxxxx`* invalid event for fd *`e->fd`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | failure during read on *`uri`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Cannot initialize lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Cannot initialize lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | FD | Cannot initialize unlink queue semaphore: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | CONN-*`xxxxx`* *`dr->domain`* *`ip`* failed to create socket *`errsave`* *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | CONN-*`xxxxx`* failed to make socket non-blocking *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | LookupAccountName(*`name`*) failed: *`err`* *`strerror`*) | The indicated user does not appear to exist. |
| DERROR | FD | error building DACL for pipe | An internal error occurred, please contact support. |
| DERROR | FD | ec_win32_close: internal close(*`fd`*) failed: ret=*`ret`* errno=*`errno`* **Platform: Windows**  | An internal error occurred. Contact support if it persists. |
| DERROR | FD | string: write errno=*`errno`*, *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | Could not open pidfile: *`file`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | pidfile *`file`* owned by pid *`opid`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | Could not write pidfile: *`file`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | could not stat *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | could not open *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | could not stat *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | could not open *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | invalid auth uri *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | unkown type of auth uri *`filename`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | could not open *`uri`* | An internal error occurred. Contact support if it persists. |
| DERROR | FD | missing command_construct in authz_check!? | An internal error occurred. Contact support if it persists. |
| DERROR | FD | missing command buffer in authz check!? | An internal error occurred. Contact support if it persists. |
| DERROR | FD | missing authorization uri | An internal error occurred. Contact support if it persists. |
| DERROR | FD | snmp: error calling "socket()": *`errno strerror`*           | An internal error occurred. Contact support if it persists. |
| DERROR | FD | snmp: error calling "bind()": *`errno strerror`*           | An internal error occurred. Contact support if it persists. |
| DWARNING | FD | SCHDP-*`xxxxx`* invalid mask | An internal error occurred. If this persists, please contact support. |
| DWARNING | FD | SCHEP-*`xxxxx`* invalid mask | An internal error occurred, please contact support. |
| DWARNING | FD | Cannot install event for fd: *`e->fd`* | An internal error occurred. If this persists, please contact support. |
| DWARNING | FD | SCHKQ-*`xxxxx`* invalid mask | An internal error occurred. If this persists, please contact support. |
| DWARNING | FD | SCHOSX-*`xxxxx`* invalid mask **Platform: OSX**  | An internal error occurred. If this persists, please contact support. |
| DWARNING | FD | SCHED-*`xxxxx`* Not freeing event *`event`* from callback *`event->callback`* | An internal error occurred. If this persists, please contact support. |
| DWARNING | FD | SCHSP-*`xxxxx`* invalid mask | An internal error occurred, please contact support. |
| DWARNING | FD | SCHSE-*`xxxxx`* invalid mask | An internal error occurred. Contact support if it persists. |
| DWARNING | FD | rlimit nofiles: *`rlim.rlim_cur`* | An internal error occurred. Contact support if it persists. |
| DWARNING | FD | SCHDP-*`xxxxx`* invalid mask | An internal error occurred. Contact support if it persists. |
| DWARNING | FD | SCHED-*`xxxxx`* Not freeing event *`event`* from callback *`event->callback`* | An internal error occurred. Contact support if it persists. |

| [Prev](DNSDS-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](LIC-panic-log-errors.php) |
| D.4. The DNSDS Errors  | [Table of Contents](index.php) |  D.6. The LIC Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)