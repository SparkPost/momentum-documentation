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

| ec_dns_lookup |
| [Prev](sieve.ref.ec_dkim_sign.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_error_mode.php) |

<a name="sieve.ref.ec_dns_lookup"></a>
## Name

ec_dns_lookup — perform a DNS record lookup

## Synopsis

`ec_dns_lookup` { *`what`* } { [[ "a" ] | [ "aaaa" ] | [ "txt" ] | [ "ptr" ] | [ "ns" ] | [ "mx" ]] } [ *`server`* ]

<a name="idp14135808"></a>
## Description

This function will perform a DNS resource record lookup on the provided string, searching for the resource record type specified. The return value should be assigned to a variable. If no records are found, the variable will contain an empty string. If one record is found, the variable will contain a string representing the result. If more than one record is found, the variable will contain a stringlist representing the results. For MX lookups, the results will be ordered by the MX priority value, in ascending order.

### Note

Starting with Momentum 2.2, ec_dns_lookup always returns a stringlist. If no records were found then the first element of the stringlist will be an empty string.

For example, in order to determine if the connecting IP address has reverse DNS that resolves to the connecting IP we could:

<a name="example.ec_dns_lookup"></a>

**Example 15.39. ec_dns_lookup example**

```
$ptr = ec_dns_lookup "%{spfv1:ir}.in-addr.arpa" "ptr";
$a = ec_dns_lookup "${ptr}" "a";
if not ec_test :is $a "%{spfv1:i}" {
  # act on lacking FCrDNS
}
```

To check for DNS lookup errors examine the dns_status context variable in the following way:

```
$dns_error = vctx_conn_get "dns_status";
if not ec_test :is "${dns_error}" "" {
  ec_log "got dns error: ${dns_error}";
}
```

`dns_status` may contain one of a number of response codes (RCODE). As defined by RFC 2136, these are:

*   `NOERROR` – No error condition. The text "SUCCESS" is returned in this case.

*   `FORMERR` – The name server was unable to interpret the request due to a format error.

*   `SERVFAIL` – The name server encountered an internal failure while processing this request, for example an operating system error or a forwarding timeout.

*   `NXDOMAIN` – Some name that ought to exist, does not exist.

*   `NOTIMP` – The name server does not support the specified Opcode.

*   `REFUSED` – The name server refuses to perform the specified operation for policy or security reasons.

*   `YXDOMAIN` – Some name that ought not to exist, does exist.

*   `YXRRSET` – Some RRset that ought not to exist, does exist.

*   `NXRRSET` – Some RRset that ought to exist, does not exist.

*   `NOTAUTH` – The server is not authoritative for the zone named in the Zone Section.

*   `NOTZONE` A name used in the Prerequisite or Update Section is not within the zone denoted by the Zone Section.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.34.

The optional *`server`* argument can be used to specify the hostname or IP address of an alternate DNS server to query.

| [Prev](sieve.ref.ec_dkim_sign.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_error_mode.php) |
| ec_dkim_sign  | [Table of Contents](index.php) |  ec_error_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)