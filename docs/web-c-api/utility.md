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

| Chapter 55. Utility Functions |
| [Prev](apis.time_series_series_has_data.php)  | Part II. C API |  [Next](apis.binding_address_family_matches.php) |

## Chapter 55. Utility Functions

**Table of Contents**

<dl class="toc">

<dt>[binding_address_family_matches](apis.binding_address_family_matches.php) — Validate that the binding in question matches the address family provided</dt>

<dt>[ec_gethostname](apis.ec_gethostname.php) — lowercase gethostname() replacement</dt>

<dt>[ec_hex_decode](apis.ec_hex_decode.php) — decodes bytes from ASCII hex characters</dt>

<dt>[ec_hex_encode](apis.ec_hex_encode.php) — encodes bytes into ASCII hex characters</dt>

<dt>[ec_parse_url](apis.ec_parse_url.php) — parses an RFC 3986 URI</dt>

<dt>[ec_ucs4_from_utf8](apis.ec_ucs4_from_utf8.php) — Decodes a single code point from a utf8 buffer</dt>

<dt>[ec_util_power_2](apis.ec_util_power_2.php) — Round input to next highest power of 2 if it is not a power of 2</dt>

<dt>[get_now](apis.get_now.php) — Populates a `struct timeval` pointer with current data</dt>

<dt>[get_now_ts](apis.get_now_ts.php) — Get the current time</dt>

<dt>[get_scheduler_pid](apis.get_scheduler_pid.php) — Get the Process ID (PID) of the **master scheduler**           thread</dt>

<dt>[getopt_long2](apis.getopt_long2.php) — a thread safe, re-entrant, getopt_long</dt>

<dt>[is_valid_IP](apis.is_valid_IP.php) — Determines whether or not `string` is a valid IP address</dt>

<dt>[is_valid_email](apis.is_valid_email.php) — Determines whether `emailaddr` is a valid email address</dt>

<dt>[isfinite](apis.isfinite.php) — indicates if a number has a finite value</dt>

<dt>[lookuptable_add2](apis.lookuptable_add2.php) — Adds a message to the lookuptable, and calls dns_get_MXs if the domain wasn't in the lookuptable already</dt>

<dt>[mid_to_string](apis.mid_to_string.php) — format a message_id as a human readable string</dt>

<dt>[nearbyint](apis.nearbyint.php) — return the integral value nearest to x according to the prevailing rounding mode</dt>

<dt>[nearbyintf](apis.nearbyintf.php) — return the integral value nearest to x according to the prevailing rounding mode</dt>

<dt>[protocol_string_uc](apis.protocol_string_uc.php) — Returns a protocol string in uppercase</dt>

<dt>[round](apis.round.php) — return the integral value nearest to x rounding half-way cases away from zero, regardless of the current rounding direction</dt>

<dt>[rs_getlist](apis.rs_getlist.php) — Returns the address of the *tail* node in the `RSplayTree`</dt>

<dt>[rs_next](apis.rs_next.php) — Move to the next node in the `RSplayTree` and return the data</dt>

</dl>

This chapter lists a number of utility APIs.

| [Prev](apis.time_series_series_has_data.php)  | [Up](pt.apis.php) |  [Next](apis.binding_address_family_matches.php) |
| time_series_series_has_data  | [Table of Contents](index.php) |  binding_address_family_matches |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)