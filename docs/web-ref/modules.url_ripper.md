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

| 14.75. url_ripper – URL Extraction |
| [Prev](tls_macros.php)  | Chapter 14. Modules Reference |  [Next](lua.php) |

## 14.75. url_ripper – URL Extraction

<a class="indexterm" name="idp21631392"></a>

The Message Systems url_ripper module is designed to be a comprehensive toolkit for DNS-based content correlation. The url_ripper functions as a normal DNS block list (DNSBL) on the connecting IP address as well as a right-hand side block list (RHSBL) on the domain of the envelope sender, the domains of email addresses in any headers, the URLs contained in the email body (even in transfer encoded content), and content that has been obfuscated with HTML encoding.

Additionally, the URLs and domains found can be resolved to IP addresses and those IP addresses will be looked up in the DNSBL.

In order to use this module, you must choose to install the Policy Tools suite during installation.

### 14.75.1. Configuration

<a name="example.url_ripper.3"></a>

**Example 14.106. url_ripper module**

```
url_ripper "url_ripper1" {
  base = "multi.surbl.org"
  bits = [
    0.0.0.1 = "list1_hits"
    0.0.0.2 = "list2_hits"
    0.0.0.4 = "list3_hits"
    0.0.0.8 = "list4_hits"
    0.0.0.16 = "list5_hits"
    0.0.0.32 = "list6_hits"
    0.0.0.64 = "list7_hits"
    0.0.1.0 = "list8_hits"
  ]
  values = [
    127.0.0.2 = "simple_hits"
  ]
  address_headers = ( "Return-Path" "From" "Sender" "Reply-To" "Errors-To")

}
```

### Note

This module used to support `checklist_suppress_hostnames` and `checklist_suppress_ips` options, options dependent upon the deprecated `checklist` module. You can replace this functionality with Sieve or Lua datasource functions. For more information see [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core") and [msys.dp_config.whitelist](https://support.messagesystems.com/docs/web-policy/policy.default.configuration.php#policy.default.configuration.msys.dp_config.whitelist). In Momentum 3.x, Lua is preferred for the reasons outlined in [Section 5.2, “Implementing Policy Using Scriptlets”](implementing.policy.scriptlets.php "5.2. Implementing Policy Using Scriptlets").

<dl class="variablelist">

<dt>address_headers</dt>

<dd>

This option explicitly specifies headers from which emails (and in turn mailbox domains) should be extracted.

</dd>

<dt>base</dt>

<dd>

describes the base domain under which prospects should be resolved.

</dd>

<dt>bits</dt>

<dd>

The bits options allows for multi-value lists to be used. If a bitwise AND between the provided key and the list-resolved IP address in question is non-zero, then the key is considered a match and the context key associated with the value is incremented by one.

</dd>

<dt>forward</dt>

<dd>

If set to false, this option disables the conversion of hostnames to IPs and the DNSBL lookups of those IPs. The default value is `true`.

</dd>

<dt>max_lookups</dt>

<dd>

This option limits the number of DNSBL lookups acting as a brake in case of a possible denial of service attack. The default value is `100`.

</dd>

<dt>values</dt>

<dd>

The values option is the traditional "exact match" style list check. If the list-resolved IP address in question exactly matches the key, then the context key associated with the value is incremented by one.

</dd>

</dl>

### 14.75.2. Operational Example

Use of the url_ripper module is complicated (mostly due to abusers using complicated methods to avoid detection). As such, an example of operation is warranted. In this example, multi.surbl.org will be the DNSBL base domain.

```
<<< 220 server ESMTP ecelerity 1.2 (r4169) Mon, 16 May 2005 09:45:48 -0400
>>> EHLO sender.example.com
<<< 250-edge.omniti.com says EHLO to 192.0.2.100
<<< 250-8BITMIME
<<< 250 PIPELINING
```

Here (actually at connect), the module will resolve 100.2.0.192.multi.surbl.org to an IP address. This resulting IP address will be processed through the configuration and the appropriate context variables will be updated to reflect any matches.

```
>>> MAIL FROM:<sender@mail.example.com>
<<< 250 MAIL FROM accepted
```

Now the mailbox domain mail.example.com is found in the envelope sender. The base domain example.com is mapped to example.com.multi.surbl.org and is resolved to an IP and it is processed. Additionally, mail.example.com is resolved to an IP address and that IP is reversed and looked up, just as was the connecting IP address.

```
>>> RCPT TO:<test@test.omniti.com>
<<< 250 RCPT TO accepted.
>>> DATA
<<< 354 continue.  finished with "\r\n.\r\n"
>>>

From: "Abuser" <superabuser@superabuser.com>
Subject: Abuse!
Content-Type: text/html
Content-Transfer-Encoding: base64

PGh0bWw+Cjxib2R5Pgo8YSBocmVmPSJodHRwOi8vd3d3LmNvdmVydGFidXNlci5jby51ayI+Q2xp
Y2sgaGVyZSB0byBidXkgc29tZXRoaW5nPC9hPi4KPC9ib2R5Pgo8L2h0bWw+Cg==
.
```

At this point, a large amount of information is extracted from the above message part. First, superabuser.com is extracted from the From: header. Next the body is base64 decoded to:

```
<html>
<body>
<a href="http://www.covertabuser.co.uk">Click here to buy something</a>.
</body>
</html>
```

And www.covertabuser.co.uk is extracted.

Both superabuser.com and www.covertabuser.co.uk are resolved via A records to IP addresses (192.0.2.10 and 192.0.2.20, respectively) and inverted. Next, they are normalized to RHSBL format (superabuser.com and covertabuser.co.uk, respectively).

The list is consulted by resolving A records for:

*   `10.2.0.192.multi.surbl.org`

*   `20.2.0.192.multi.surbl.org`

*   `superabuser.com.multi.surbl.org`

*   `covertabuser.co.uk.multi.surbl.org`

Any A records found are checked against the configuration file and the local message context is updated to reflect any matches.

In the example above, if `forward` was set to `false` the EHLO hostname (sender.example.com) would not be converted to an IP address and queried against DNSBL, and mail.example.com from the MAIL FROM and test.omniti.com from RCPT TO would only be looked up as domains. Also, there would be no lookup for 10.2.0.192.multi.surbl.org or 20.2.0.192.multi.surbl.org from the body, just superabuser.com.multi.surbl.org and covertabuser.co.uk.multi.surbl.org.

### 14.75.3. url_ripper Sieve Usage

When the sieve module is loaded passively, the **ec_url_ripper** Sieve command can be used at runtime. For more information see [ec_url_ripper](sieve.ref.ec_url_ripper.php "ec_url_ripper").

| [Prev](tls_macros.php)  | [Up](modules.php) |  [Next](lua.php) |
| 14.74. tls_macros Module  | [Table of Contents](index.php) |  Chapter 15. Lua Function Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)