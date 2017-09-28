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

| audit_series_add |
| [Prev](sieve.ref.audit_series.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.audit_service.php) |

<a name="sieve.ref.audit_series_add"></a>
## Name

audit_series_add — Add to a named series

## Synopsis

`audit_series_add` { *`series_name`* } { *`interval,number`* } [ *`amount_to_add`* ]
`audit_series_add` { *`$hash`* }

<a name="idp28696448"></a>
## Description

Audit series enable IP-address based events to be tracked over a rolling set of time windows. For further background, see [the section called “Audit series”](sieve.ecaddons.php#sieve.ectypes_audit_series "Audit series").

### Note

As of version 3.4, this feature supports IPv6.

IPv6 addresses are much more flexible than IPv4 addresses in terms of their formatting options. They also use a different delimiter character than IPv4 addresses (a colon instead of a period). This means that in certain contexts, an IPv6 address can create parsing ambiguities.

The accepted convention is to require that, in circumstances where a configuration parameter can also contain something other than an IP address, that an IPv6 address must be enclosed in square brackets. In practical terms, this means that things like the `Gateway`, `Routes` and `Listen` options must have IPv6 addresses enclosed in brackets. Others, such as `Peer`, `Relay_Hosts` and `Prohibited_Hosts` do not require the IPv6 address in brackets.

`audit_series_add` increments the count associated with the IP address (see `ip` argument) by the provided amount, in the audit series having the specified name and monitor.

The `monitor` is a "interval,number" string that specifies a time interval in seconds, and the number of windows of that size. E.g., "300,6" specifies that the series should have six windows of 300 seconds each.

There are two forms for this command. The first form takes positional arguments, and the second form takes named arguments, passed as keys with their corresponding values in a hash. These keys are supported:

<dl class="variablelist">

<dt>series</dt>

<dd>

A string identifying the series, for example, "mycounter".

</dd>

<dt>monitor</dt>

<dd>

A string identifying the monitor, for example, "300,6".

</dd>

<dt>count</dt>

<dd>

The number to add to the current window. The count defaults to 1.

</dd>

<dt>replicate</dt>

<dd>

If this key is not used or its value is `0` then there is no replication. A value of `1` means do a `metrics` type of replication for this add, meaning that all nodes get updated audit_series data. A value of `-1` means do a `eccmgr_metrics` type of replication which updates eccmgr but not other nodes. Named audit series replication must be configured and the replicate type must be set in the cluster module as indicated. For more information see [Section 7.7.1.5, “Replicated named audit series”](cluster.config.replication.php#cluster.replicated_audit_series "7.7.1.5. Replicated named audit series").

</dd>

<dt>ip</dt>

<dd>

IP address to insert. If this is not specified, the remote side of the current active connection is used.

</dd>

<dt>serialize</dt>

<dd>

To use `audit_series_add` on a single-node set this key to `1`.

</dd>

</dl>

### Note

This feature requires the inbound_audit module. See [Section 14.41, “inbound_audit – Inbound traffic analytics”](modules.inbound_audit.php "14.41. inbound_audit – Inbound traffic analytics") for more information.

<a name="example.audit_series_add"></a>

**Example 16.8. audit_series_add example (first form)**

`audit_series_add "mycounter" "1800,3" "3";`
<a name="example.audit_series_add.second"></a>

**Example 16.9. audit_series_add example (second form)**

```
$args = hash_create;
hash_set $args "series" "mycounter";
hash_set $args "monitor" "1,10";
hash_set $args "count" 2;
audit_series_add $args;
```

When using `audit_series_add`, on a single-node you need to set `serialize` to `1`. Add the following line to your script before invoking `audit_series_add`:

`hash_set $args "serialize" 1;`

| [Prev](sieve.ref.audit_series.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.audit_service.php) |
| audit_series  | [Table of Contents](index.php) |  audit_service |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)