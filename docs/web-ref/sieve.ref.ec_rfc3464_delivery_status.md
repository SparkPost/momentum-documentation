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

| ec_rfc3464_delivery_status |
| [Prev](sieve.ref.ec_rfc2047_encode_header.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_round.php) |

<a name="sieve.ref.ec_rfc3464_delivery_status"></a>
## Name

ec_rfc3464_delivery_status — return a string containing fields for a RFC3464 DSN

## Synopsis

`ec_rfc3464_delivery_status` [ *`hash`* ]

<a name="idp30447552"></a>
## Description

`ec_rfc3464_delivery_status` returns a string containing fields to populate the report part of a RFC3464 compliant DSN. Each field ends with `\r\n`. Sample output is shown below:

```
Arrival-Date: Tue, 10 Oct 2006 16:17:51 -0400
Reporting-MTA: dns; mx-0-1.example.com

Remote-MTA: dns; mx-s1-1.omniti.com
Diagnostic-Code: smtp; 550 relay not permitted
Action: failed
Final-Recipient: rfc822; rcpt@omniti.com
Last-Attempt-Date: Tue, 10 Oct 2006 16:38:22 -0400
Status: 5.0.0
```

Here is an example to generate a RFC3464 compliant DSN message when a permanent delivery failure happens. You should turn off `generate_bounces` in the `ecelerity.conf` file to avoid sending an extra bounce message.

To configure this script to run at the `core_log_permanent_failure_v1` hook point, use the following configuration:

```
sieve "sieve1"  {
  hook "core_log_permanent_failure_v1" {
    script = /path/to/script
    async = "true"
  }
}

generate_bounces = false
```
<a name="example.ec_rfc3464_delivery_status"></a>

**Example 16.89. ec_rfc3464_delivery_status example: generate and send a DSN**

```
$failed_addr = envelope :all "to";
$to = envelope :all "from";
$from = "";

# Don't bounce to the null sender.
if ec_test :is $to "" {
  stop;
}

$report = ec_rfc3464_delivery_status;
$boundary = ec_mime_boundary_create;

generate_mail_raw $from $to text:
Return-Path: <>
From: Mail Delivery System <Mailer-Daemon@mail.omniti.com>
To: ${to}
Subject: Mail Delivery Failure
Date: %{rfc822:date}
Content-Type: multipart/report; report-type=delivery-status;
 boundary="${boundary}"

--${boundary}
Content-Type: text/plain; charset=UTF-8

This message was created automatically by the mail system (ecelerity).

A message that you sent could not be delivered to one or more of its
recipients. This is a permanent error. The following address(es) failed:
${failed_addr}

--${boundary}
Content-Type: message/delivery-status

${report}
--${boundary}
Content-Type: text/plain; charset=UTF-8
Content-Disposition: inline

------ This is a copy of the headers of the original message. ------

%{rfc2822:headers}
--${boundary}--
.
;
```

You can also pass in a hash of headers to ec_rfc3464_delivery_status, adding custom fields or overriding the standard [RFC 3464](http://www.rfc-editor.org/rfc/rfc3464.txt) per-message and per-recipient fields. See the following example:

```
$h = hash_create;
hash_set $h "X-Foo" "bar";
$report = ec_rfc3464_delivery_status $h;
...
```

### Note

Strings in Sieve are all UTF-8 encoded. It is recommended that you use `Content-Type: text/plain; charset=UTF-8` for a `text/plain` part.

<a name="idp30463712"></a>
## See Also

[generate_mail_raw](sieve.ref.generate_mail_raw.php "generate_mail_raw") [ec_mime_boundary_create](sieve.ref.ec_mime_boundary_create.php "ec_mime_boundary_create")

| [Prev](sieve.ref.ec_rfc2047_encode_header.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_round.php) |
| ec_rfc2047_encode_header  | [Table of Contents](index.php) |  ec_round |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)