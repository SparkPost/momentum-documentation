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

| D.10. The NET Errors |
| [Prev](MOD-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](SMTP-panic-log-errors.php) |

## D.10. The NET Errors

In this section errors are sorted by severity.

<a name="NET-table-panic-log-errors"></a>

**Table D.10. NET errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | NET | NLSN-*`xxxxx`* config system returned username *`user`* with no uid. Consult your vendor. | The indicated user does not appear to exist on your system. |
| DCRITICAL | NET | NLSN-*`xxxxx`* config system returned group *`group`* with no gid. Consult your vendor. | The indicated group does not appear to exist on your system. |
| DCRITICAL | NET | NLSN-*`xxxxx`* thread pool *`poolname`* doesn't exist in *`inst->def->prefix`*_listener *`inst->address`* | The configured asynchronous accept thread pool for you listener does not exist. |
| DCRITICAL | NET | failed to create accept job | An internal error occurred. Please contact support. |
| DCRITICAL | NET | POP3-*`xxxxx`* invalid run-time type | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | POP3-*`xxxxx`* invalid value for idle_timeout | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | POP3-*`xxxxx`* invalid run-time rule | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | Could not create socket: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | Could not bind to socket: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | [*`e->fd`*] read of bad size *`len`* != *`pair`* (*`strerror`*) | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | [map] *`oip`*:ntohs <=> *`fip`*:*`ntohs`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | Short packet *`len`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | We don't tackle non-TCP, blindly reinjecting | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | [flags/ack] *`tcppkt`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | [src] *`ip`*:*`ntohs`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | [dst] *`ip`*:*`ntohs`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | [sourcing from *`ip`*:*`ntohs`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | sinking to *`ip:ntohs`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | TCP session unmapped, blindly reinjecting | An internal error occurred. Contact support if it persists. |
| DCRITICAL | NET | Could not open divert socket. Exiting. | An internal error occurred. Contact support if it persists. |
| DERROR | NET | Unplumbed binding *`binding_slo`* interface not plumbed | An internal error occurred. Contact support if it persists. |
| DERROR | NET | MQ-*`xxxxx`* legacy re-assemble fail | A legacy message failed to be reconstituted to a non-legacy format after being passed to a legacy module. |
| DERROR | NET | NLSN-*`xxxxx`* errno *`errno`*: nropen too low consider increasing 1) kernel settings for max open files and/or 2) ecelerity config option `Server_Max_Outbound_Connections` | See message |
| DERROR | NET | NLSN-*`xxxxx`*: invalid use of ipany | There is a syntax error in your listener configuration. |
| DERROR | NET | NLSN-*`xxxxx`* invalid port: *`inst->def->prefix`*_listener *`inst->address`* *`inst->la.port`* | The configured port for your listener is invalid. |
| DERROR | NET | NLSN-*`xxxxx`* backlog too high *`inst->def->prefix`*_listener *`inst->address`* | The configured listen queue backlog for you listener is too high. |
| DERROR | NET | NLSN-*`xxxxx`* backlog too low *`inst->def->prefix`*_listener *`inst->address`* | The configured listen queue backlog for your listener is too low. |
| DERROR | NET | NLSN-*`xxxxx`* unable to parse *`inst->def->prefix`*_listener *`inst->address`* | There is a syntax error in your listener configuration. |
| DERROR | NET | NLSN-*`xxxxx`* invalid address for <legacy> listener *`address`* | The configured bind address for your listener could not be parsed. |
| DERROR | NET | NPLSN-*`xxxxx`* *`inst->def->prefix`*_listener *`inst->address`* [*`inst->la.parallel`* instances] | An internal error occurred, please contact support. |
| DERROR | NET | CTL-*`xxxxx`* invalid run-time rule | An internal error occurred. Contact support if it persists. |
| DERROR | NET | unknown ACL method: *`rname`* | An internal error occurred. Contact support if it persists. |
| DERROR | NET | ECSTRM-*`xxxxx`* invalid run-time type | An internal error occurred. Contact support if it persists. |
| DERROR | NET | ECSTRM-*`xxxxx`* invalid run-time rule *`rname`* | An internal error occurred. Contact support if it persists. |
| DERROR | NET | ESMTP-*`xxxxx`* invalid run-time rule *`rname`* | An internal error occurred. Contact support if it persists. |
| DERROR | NET | ESMTP-*`xxxxx`* invalid run-time type | An internal error occurred. Contact support if it persists. |
| DERROR | NET | IFEDLPI-*`xxxxx`* cannot plumb *`areq->ifname`* does that interface exist? | An internal error occurred. Contact support if it persists. |
| DERROR | NET | arp cache read failed | An internal error occurred. Contact support if it persists. |
| DERROR | NET | SNMP bind to *`sockaddr_to_string`* failed | An internal error occurred. Contact support if it persists. |
| DERROR | NET | snmp: Warning: NO communities defined, SNMP community set to '" DEFAULT_COMM "' ! | An internal error occurred. Contact support if it persists. |
| DWARNING | NET | NLSN-*`xxxxx`* failed accept(*`e->fd`*) errno: *`errno`* | A call to accept() failed with the indicated errno. Either the server or the OS is misconfigured. |
| DWARNING | NET | NLSN-*`xxxxx`* exception raised on socket *`e->fd`* (*`errno`*) *`strerror`* | An exception was raised on the indicated socket, this may indicate a networking issue on your host. If this error persists, contact support. |

| [Prev](MOD-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](SMTP-panic-log-errors.php) |
| D.9. The MOD Errors  | [Table of Contents](index.php) |  D.11. The SMTP Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)