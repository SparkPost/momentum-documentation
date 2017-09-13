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

| msys.policyeditor.send_trap |
| [Prev](lua.ref.msys.policyeditor.send_email.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.policyeditor.set_binding.php) |

<a name="lua.ref.msys.policyeditor.send_trap"></a>
## Name

msys.policyeditor.send_trap — Send an SNMP trap

<a name="idp25017296"></a>
## Synopsis

`msys.policyeditor.send_trap(ctx, vars, params);`

```
ctx: table
vars: table
params: table
```

**Configuration Change. ** This function is deprecated. Use `msys.snmpTrap()` to send an SNMP trap. For more information see [msys.snmpTrap](lua.ref.msys.snmpTrap.php "msys.snmpTrap").

<a name="idp25022592"></a>
## Description

Send an SNMP trap

The `ctx` parameter is the context containing objects from the callout, `vars` is a table containing script variables and `params` is a table containing parameters to be passed to this routine.

Defined parameters for `params` are:

*   `type` specifies the data type of the payload. Can be one of "string", "counter", "gauge" or "ip"

*   `payload` the data to be sent with the trap. For "string" data, this must be a string. For "ip" data, this must be a string rendition of an IPv4 address. For "counter" and "gauge" types, it must be numeric.

*   `address` the trap server address; an IPv4 address string.

*   `port` the port number of the trap server

*   `community` the community for authorization purposes with the trap daemon

*   `mib` the mib for the trap. If not specified, defaults to the Ecelerity enterprise MIB ("1.3.6.1.4.1.19552.1.4.7")

*   `trapvarmib` the Object Identifier (OID) to use for the trap variable. If unspecified, defaults to "1.3.6.1.4.1.19552.1.4.1.0".

*   `throttle` if non-zero, limits sending to one trap every "throttle" seconds.

<a name="idp25037824"></a>
## See Also

[Section 3.11, “Automated Alerting Configuration”](web3.automated.alerting.php "3.11. Automated Alerting Configuration")

| [Prev](lua.ref.msys.policyeditor.send_email.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.policyeditor.set_binding.php) |
| msys.policyeditor.send_email  | [Table of Contents](index.php) |  msys.policyeditor.set_binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)