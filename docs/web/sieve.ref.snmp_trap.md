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

| snmp_trap |
| [Prev](sieve.ref.smtp_callback_verify.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.split.php) |

<a name="sieve.ref.snmp_trap"></a>
## Name

snmp_trap — Send SNMP traps from a Sieve script

## Synopsis

`snmp_trap` { *`hash`* }

<a name="idp15931504"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

`snmp_trap` sends an SNMPv2 trap described by the given hash, which must be created by [hash_create](sieve.ref.hash_create.php "hash_create"). The hash may have the following elements:

<dl class="variablelist">

<dt>address</dt>

<dd>

IP address of the server to send the trap to. If no address is specified, the port and community options are ignored and the trap is sent to the server(s) specified by one or more `Trap_Destination` stanzas within the `SNMP_TRAPS` stanza in [SNMP](conf.ref.snmp.php "SNMP").

</dd>

<dt>port</dt>

<dd>

UDP port number on the destination server, as specified by `address`, to send the trap to. The default port number is UDP port 162.

</dd>

<dt>community</dt>

<dd>

Set the Community option value to the desired SNMP community the traps are to be a part of. "Public" is the default value for this option.

</dd>

<dt>mib</dt>

<dd>

The object identifier (OID) to use for the trap. The default value is a generic trap using the OmniTI Enterprise MIB, "1.3.6.1.4.1.19552.1.4.7".

</dd>

<dt>trapvar.type</dt>

<dd>

The type of trap variable to send. This may be one of the following: "COUNTER", "GAUGE", "STRING", "IPADDRESS". "STRING" is the default value for this option.

</dd>

<dt>trapvar.mib</dt>

<dd>

The object identifier (OID) to use for the trap variable. The default value corresponds to a generic trap using the OmniTI Enterprise MIB and is "1.3.6.1.4.1.19552.1.4.1.0".

</dd>

<dt>trapvar</dt>

<dd>

The actual contents of the trap variable to send. This option specifies the data to be transferred in the trap.

</dd>

</dl>

The following example will send an SNMP trap to the server specified by the `SNMP_TRAPS` stanza of [SNMP](conf.ref.snmp.php "SNMP") (if any) when a message is received that contains a `X-Spam-Status` header with a value of `Yes`.

<a name="example.snmp_trap"></a>

**Example 15.122. snmp trap using global settings**

```
if header :contains "X-Spam-Status" "Yes" {
        $hash = hash_create;
        hash_set $hash "trapvar" "SPAM detected";

        snmp_trap $hash;
        ec_action 550 "spam detected";
    }
```

To send the trap to a specific host and port combination, something like the following can be used.

<a name="example.snmp_trap.second"></a>

**Example 15.123. snmp trap to specific host and port**

```
if header :contains "X-Spam-Status" "Yes" {
        $hash = hash_create;
        hash_set $hash "address" "10.1.2.3";
        hash_set $hash "port" 1062;
        hash_set $hash "trapvar" "SPAM detected";

        snmp_trap $hash;
        ec_action 550 "spam detected";
    }
```

| [Prev](sieve.ref.smtp_callback_verify.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.split.php) |
| smtp_callback_verify  | [Table of Contents](index.php) |  split |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)