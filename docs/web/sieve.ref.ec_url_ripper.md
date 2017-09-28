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

| ec_url_ripper |
| [Prev](sieve.ref.ec_trunc.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_valid_binding.php) |

<a name="sieve.ref.ec_url_ripper"></a>
## Name

ec_url_ripper — Extract domains and urls for lookup in DNSBL

## Synopsis

`ec_url_ripper`

<a name="idp15495024"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

`ec_url_ripper` runs in the data phase. It extracts domains and urls in an email's headers and body and looks them up in the DNSBL specified in your Momentum configuration file. Additionally, those domains and urls found can be resolved to IP addresses, which will be looked up. You need to load the [Section 14.58, “url_ripper – URL Extraction”](modules.url_ripper.php "14.58. url_ripper – URL Extraction") module passively to use this action.

This action returns a hash. The hash will be empty if no domains or urls in the email are listed on the specified DNSBL. If any is listed, a hash key will be the corresponding context key specified in the configuration and the associated value will be a string list containing the domains and urls that get listed. The value of the matched context key will also be updated in this case.

<a name="example.ec_url_ripper"></a>

**Example 15.101. ec_url_ripper example**

Using the following script, domains and urls in an email are extracted and looked up in DNSBL. The `ecelerity.conf` for this setup looks something like the following:

omniti_tools has been deprecated in favor of policy_tools. The following configuration information reflects the change.

```
Validate validate/policy_tools url_ripper passive {
  base = "multi.surbl.org"
  bits [
          0.0.1.0 = "xbl_hits"
          0.0.0.1 = "sbl_hits"
          0.0.0.2 = "sc_surbl_hits"
          0.0.0.4 = "ws_surbl_hits"
          0.0.0.8 = "ph_surbl_hits"
          0.0.0.16 = "ob_surbl_hits"
          0.0.0.32 = "ab_surbl_hits"
          0.0.0.64 = "jp_surbl_hits"
  ]
  values [
    127.0.0.2 = "simple_hits"
  ]
  address_headers = Errors-To:From:Reply-To:Return-Path:Sender
}

Validate validate/sieve sieve {
  data_phase1 = "/path/to/myscript.siv"
}
```

and the contents of `myscript.siv`:

```
# Check SURBL
# url_ripper is defined in ecelerity.conf
#
if anyof (
  vctx_mess :contains "xbl_hits" "",
  vctx_mess :contains "sbl_hits" "",
  vctx_mess :contains "sc_surbl_hits" "",
  vctx_mess :contains "ws_surbl_hits" "",
  vctx_mess :contains "ph_surbl_hits" "",
  vctx_mess :contains "ob_surbl_hits" "",
  vctx_mess :contains "ab_surbl_hits" "",
  vctx_mess :contains "jp_surbl_hits" "",
  vctx_mess :contains "simple_hits" ""
) {
  ec_action 550 "SURBL hit!";
}
```

<a name="idp15508384"></a>

**Example 15.102. Example configuration for URIBL check**

For a URIBL check configure the url_ripper module as follows:

```
# ecelerity.conf stanza
#
Validate validate/policy_tools url_ripper {
  base = "multi.uribl.com"
  max_lookups = 100
  forward = true
  checklist_suppress_hostnames = ec_ur_suppress_wl_addresses
  checklist_suppress_ips = ec_ur_suppress_wl_ips
  bits [
    0.0.0.2 = "black_hits"
    0.0.0.4 = "grey_hits"
    0.0.0.8 = "red_hits"
  ]
  address_headers = Errors-To:From:Reply-To:Return-Path:Sender
}
```

Use the following Sieve script for a URIBL check:

```
# Check URIBL
# url_ripper is defined in ecelerity.conf
#
if anyof (
  vctx_mess :contains "black_hits" "",
  vctx_mess :contains "grey_hits" "",
  vctx_mess :contains "red_hits" ""
) {
  ec_action 550 "URIBL hit!";
}
```

<a name="idp15512624"></a>
## See Also

[Section 14.58, “url_ripper – URL Extraction”](modules.url_ripper.php "14.58. url_ripper – URL Extraction")

| [Prev](sieve.ref.ec_trunc.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_valid_binding.php) |
| ec_trunc  | [Table of Contents](index.php) |  ec_valid_binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)