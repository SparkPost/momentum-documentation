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

| msys.snmpTrap |
| [Prev](lua.ref.msys.sleep.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.type.php) |

<a name="lua.ref.msys.snmpTrap"></a>
## Name

msys.snmpTrap — Issue an SNMP trap

<a name="idp24786176"></a>
## Synopsis

`msys.snmpTrap(traptable);`

`traptable: table`<a name="idp24788864"></a>
## Description

Issue an SNMP trap. `traptable` has the following permitted keys:

*   `type` specifies the type of the payload. Can be one of string, counter, gauge or IP.

*   `payload` if `type` is a string, `payload` must be a string. If `type` is a counter or gauge, then this must be a number. If `type` is an IP, then it must be a valid IPv4 address.

*   `address` the IPv4 destination address for the trap. If unspecified, the trap will be sent to all configured `Trap_Destination` stanzas in the config file.

*   `port` the target port number. If not specified, defaults to the SNMP standard port assigned by IANA.

*   `community` the community name. If not specified, this parameter defaults to `public`.

*   `mib` the OID identifying the trap.

*   `trapvar.mib` the OID identifying the trap variable. If not specified, 1.3.6.1.4.1.19552.1.4.1.0 is used (the OmniTI Enterprise MIB assignment). For more information see [Appendix B, *MIB Files*](snmp-mib.php "Appendix B. MIB Files") .

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

<a name="idp24805136"></a>
## See Also

[SNMP](conf.ref.snmp.php "SNMP")

| [Prev](lua.ref.msys.sleep.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.type.php) |
| msys.sleep  | [Table of Contents](index.php) |  msys.type |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)