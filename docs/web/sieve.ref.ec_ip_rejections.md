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

| ec_ip_rejections |
| [Prev](sieve.ref.ec_ip_receptions_cluster.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_ip_rejections_cluster.php) |

<a name="sieve.ref.ec_ip_rejections"></a>
## Name

ec_ip_rejections — Audit how many rejections an IP address has made

## Synopsis

`ec_ip_rejections` { *`time_series_index`* } [ *`mask`* ]
`ec_ip_rejections` { *`$hash`* }

<a name="idp14827552"></a>
## Description

`ec_ip_rejections` returns a string containing the number of rejections that have occurred for a CIDR block within a configured time window. The referenced CIDR block is constructed by applying the `mask` option value to the SMTP connection's remote IP address. There are two forms of this command.

In the first form, the `time_series_index` value selects a monitor corresponding to its position in the inbound_audit configuration stanza (A `time_series_index` of '0' corresponds to the first monitor in the inbound_audit configuration stanza). The audit data returned for this monitor is based on a weighted sliding average of the current time window within this monitor and the previous time window, thus smoothing the transition between windows. If `mask` is not specified, the default value of '32' is used to compute the CIDR block.

In the second form, a hash is used to pass the arguments. These keys are supported:

<dl class="variablelist">

<dt>monitor</dt>

<dd>

A string matching a monitor definition within the inbound_audit configuration stanza, for example, "300,6". By default the first monitor listed in the configuration stanza is used.

</dd>

<dt>period_start</dt>

<dd>

Starting window number. The default is 0, which is the chronologically current window. For example, if the inbound_audit configuration stanza defines a monitor as "300,6", then the monitor contains six windows numbered 0 (current) through 5 (oldest). Each time window in this example is 300 seconds duration.

</dd>

<dt>period_end</dt>

<dd>

Ending window number. It defaults to the value of `period_start`. If this key is specified, its value is a window number (which should be equal to or greater than period_start). The result will be an aggregate sum over the window range.

</dd>

<dt>mask</dt>

<dd>

This is the mask used to compute CIDR block. The mask defaults to '32'.

</dd>

</dl>

### Note

This feature requires the inbound_audit module. See [Section 14.33, “inbound_audit – Inbound traffic analytics”](modules.inbound_audit.php "14.33. inbound_audit – Inbound traffic analytics") for more information.

<a name="example.ec_ip_rejections"></a>

**Example 15.71. ec_ip_rejections example (first form)**

```
$rejections = ec_ip_rejections "0" "32";
$c_rejections = ec_ip_rejections "0" "24";
if ec_test :value "gt" :comparator "i;ascii-numeric" "${rejections}" "1000" {
  ec_tarpit 10 "too many rejections /32";
}

if ec_test :value "gt" :comparator "i;ascii-numeric" "${c_rejections}" "10000" {
  ec_tarpit 10 "too many rejections /24";
}
```

<a name="example.ec_ip_rejections.second"></a>

**Example 15.72. ec_ip_rejections example (second form)**

```
$args = hash_create;
hash_set $args "period_start" "0";
hash_set $args "period_end" "2";
hash_set $args "monitor" "300,6";
hash_set $args "mask" "32";
$count = ec_ip_rejections $args;

if ec_test :value "gt" :comparator "i;ascii-numeric" "${count}" "10000" {
  ec_tarpit 10 "too many rejections /32 in last fifteen minutes";
}
```

| [Prev](sieve.ref.ec_ip_receptions_cluster.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_ip_rejections_cluster.php) |
| ec_ip_receptions_cluster  | [Table of Contents](index.php) |  ec_ip_rejections_cluster |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)