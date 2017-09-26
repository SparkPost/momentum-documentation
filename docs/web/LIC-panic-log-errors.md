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

| D.6. The LIC Errors |
| [Prev](FD-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](LOG1-panic-log-errors.php) |

## D.6. The LIC Errors

In this section errors are sorted by severity.

<a name="LIC-table-panic-log-errors"></a>

**Table D.6. LIC errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | LIC | ioctl(BIOCSETIF): *`strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | LIC | Your license contains invalid formatting | Consult your vendor |
| DCRITICAL | LIC | Invalid license (expired *`days`* ago) | Consult your vendor |
| DCRITICAL | LIC | License expires in *`days`* days | Consult your vendor |
| DCRITICAL | LIC | MultiVIP bindings violates license | Consult your vendor |
| DCRITICAL | LIC | Invalid license [*`node->key`* | Consult your vendor |
| DCRITICAL | LIC | Master license file not valid | Consult your vendor |
| DCRITICAL | LIC | License Digest Bad *`sha1_len`* | Consult your vendor |
| DCRITICAL | LIC | Invalid license | Consult your vendor |
| DCRITICAL | LIC | No license file present at: *`filename`* | Copy your license file to the `/opt/ecelerity/etc` directory |
| DCRITICAL | LIC | Could not read license file at: *`filename`* | Consult your vendor |
| DCRITICAL | LIC | Could not parse license file at: *`filename`* | Consult your vendor |
| DCRITICAL | LIC | Terminating unlicensed instance. Please contact Message Systems to acquire a new license. | Consult your vendor |
| DCRITICAL | LIC | Terminating unlicensed instance. | Please contact MessageSystems to acquire a license |
| DCRITICAL | LIC | Please contact MessageSystems to acquire a new license. | See message |
| DCRITICAL | LIC | Terminating unlicensed instance. | Please contact Message Systems |
| DCRITICAL | LIC | Please contact Message Systems to acquire a new license. | Please contact Message Systems |
| DCRITICAL | LIC | License Digest Bad *`sha1_len`* | Contact your vendor |
| DCRITICAL | LIC | Invalid license | Contact your vendor |
| DCRITICAL | LIC | License machine mismatch | Contact your vendor |
| DCRITICAL | LIC | No license file present at: *`filename`* | Move your license file to the indicated location. |
| DCRITICAL | LIC | Could not read license file at: *`filename`* | Contact your vendor |
| DCRITICAL | LIC | Terminating unlicensed instance | Contact your vendor |
| DCRITICAL | LIC | Please contact Message Systems to acquire a new license | See message |
| DERROR | LIC | device: *`pcap_strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Limiting Inbound Throttle to *`copy`* | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Limiting Outbound Throttle to *`copy`* | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Licensed unlimited MultiVIP bindings | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Licensing *`rnb`* of *`nb`* possible MultiVIP bindings | Consult your vendor |
| DERROR | LIC | Validated MAC address *`macstr`* on interface *`ifname`* | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Validated IP address *`inputstr`* on interface *`ifname`* | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Valid license | Consult your vendor |
| DERROR | LIC | License machine mismatch | Consult your vendor. |
| DERROR | LIC | Validating software license | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Virtual Machine Environment Detected: *`vmname`* | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Valid license | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | __ecelerity_startup_message | An internal error occurred. Contact support if it persists. |
| DERROR | LIC | Validating software license | An internal error occurred. Contact support if it persists. |
| DWARNING | LIC | socket: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DWARNING | LIC | socket: *`strerror`* | An internal error occurred. Contact support if it persists. |

| [Prev](FD-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](LOG1-panic-log-errors.php) |
| D.5. The FD Errors  | [Table of Contents](index.php) |  D.7. The LOG1 Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)