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

| 14.19. commtouch_ctasd – Commtouch_ctasd Module |
| [Prev](modules.cloudmark.php)  | Chapter 14. Modules Reference |  [Next](modules.compress_spool.php) |

## 14.19. commtouch_ctasd – Commtouch_ctasd Module

<a class="indexterm" name="idp18559728"></a>

The commtouch_ctasd module provides message diagnosis via industry-leading spam and phishing protection technology. If you intend to use this module be sure to choose it during installation. For more information see [Section 1.9, “Installing Additional Packages”](install.additional.packages.php "1.9. Installing Additional Packages").

Momentum version 3.3 uses version `3.01.0017` of Commtouch CTSD. Momentum version 3.4 uses version `4.02.0014`.

### 14.19.1. Configuration

<a name="example.commtouch.3"></a>

**Example 14.33. commtouch_ctasd module**

```
commtouch_ctasd "commtouch_ctasd1" {
  concurrency = 10
  host = "127.0.0.1"
  port = 8088
}
```

<dl class="variablelist">

<dt>concurrency</dt>

<dd>

The default value for this option is `10`, meaning that a maximum of 10 threads will be used. Assigning a value of `0` to this option means that no concurrent sessions will be used and no messages will be scanned.

</dd>

<dt>host</dt>

<dd>

The domain name or IP address of the host. The default value is ‘`127.0.0.1`’.

</dd>

<dt>port</dt>

<dd>

The port that the commtouch_ctasd module listens on. The default value is ‘`8088`’. This port is used internally by Momentum.

</dd>

</dl>

**14.19.1.1. The `ctasd.conf` File**

For the commtouch_ctasd module to work with Momentum, you must also edit the `ctasd.conf` file. Find the connectivity section and replace *`xxxxxxxxxxxxxxxxxxxx`* (a combination of the license key and the resolver domain) with the values provided by Commtouch:

[Connectivity]
License_key_code = *`xxxxxxxxxxxxxxxxxxxx`*
Server_address = *`xxxxxxxxxxxxxxxxxxxx`*

Momentum communicates with Commtouch over the Internet using the well known port, `80`.

This file is found in the `/opt/msys/3rdParty/commtouch/etc/` directory.

### 14.19.2. commtouch Runtime Usage

The commtouch_ctasd module sets three message context validation parameters:

<dl class="variablelist">

<dt>commtouch-class</dt>

<dd>

The settings for this parameter are `unknown`, `suspect`, `bulk`, confirmed and `none`. If this variable is set a policy script should take appropriate action.

</dd>

<dt>commtouch-virus-threat</dt>

<dd>

The settings for this parameter are `nonvirus`, `medium`, `high` and `unknown`.

</dd>

<dt>commtouch-ref-id</dt>

<dd>

This a 'fingerprint' for the message that is useful when communicating with Commtouch.

</dd>

</dl>

As with other Validation modules, the commtouch_ctasd module may be loaded in passive mode which means that inbound messages will not be virus scanned unless you invoke a policy script.

To use Lua see [msys.commtouch.diagnose](lua.ref.msys.commtouch.diagnose.php "msys.commtouch.diagnose").

To use Sieve see [commtouch_scan](sieve.ref.commtouch_scan.php "commtouch_scan").

### 14.19.3. commtouch_ctasd Management Using Console Commands

The commtouch_ctasd module can be controlled through the `ec_console`; the following command is available:

**14.19.3.1. commtouch_ctasd:*`commtouch_ctasd1`* pending**

This command outputs the number of pending jobs.

| [Prev](modules.cloudmark.php)  | [Up](modules.php) |  [Next](modules.compress_spool.php) |
| 14.18. cloudmark – Cloudmark Authority Module  | [Table of Contents](index.php) |  14.20. compress_spool – Dynamic Spool Compression |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)