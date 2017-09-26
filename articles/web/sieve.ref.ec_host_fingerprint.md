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

| ec_host_fingerprint |
| [Prev](sieve.ref.ec_header_prefix.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_inc_counter.php) |

<a name="sieve.ref.ec_host_fingerprint"></a>
## Name

ec_host_fingerprint — return genre and detail of the passive host fingerprinting operation

## Synopsis

`ec_host_fingerprint`

<a name="idp14596224"></a>
## Description

The ec_host_fingerprint action requires that the host_fingerprint module be loaded. For more information see [Section 14.30, “fingerprint – Host Fingerprinting”](modules.host_fingerprint.php "14.30. fingerprint – Host Fingerprinting").

### Note

The Host Fingerprinting module was discontinued as of version 2.2.2.30 and is again available as of version 2.2.3.46.

In order to use this command, you must have the Policy Tools suite installed. Passive OS fingerprinting is installed as part of the Policy Tools suite. This functionality yields information about inbound connections.

The `ec_host_fingerprint` function returns the genre and detail regarding the current inbound connection.

<a name="example.ec_host_fingerprint"></a>

**Example 15.58. ec_host_fingerprint example**

```
($genre, $detail) = ec_host_fingerprint;
ec_header_add "X-Host-Fingerprint" "%{i} %{p} ${genre} ${detail}";
```

**Configuration Change. ** This feature is available as of version 2.2.3.46.

As of version 2.2.3.46, passive operating system fingerprinting runs as a daemon that Momentum communicates with over a socket, `/tmp/p0fd`. This daemon is started using the command: **/etc/init.d/ecp0f start** . The fingerprints are all included in the ecp0f package and are located here: `/opt/ecelerity/3rdParty/etc/p0f/`. These fingerprints do not need to be modified.

| [Prev](sieve.ref.ec_header_prefix.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_inc_counter.php) |
| ec_header_prefix  | [Table of Contents](index.php) |  ec_inc_counter |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)