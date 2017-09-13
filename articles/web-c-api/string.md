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

| Chapter 51. String Functions |
| [Prev](apis.ec_ssl_set_verify_errmsg.php)  | Part II. C API |  [Next](apis.ec_asprintf.php) |

## Chapter 51. String Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_asprintf](apis.ec_asprintf.php) — Momentum asprintf function</dt>

<dt>[ec_snprintf](apis.ec_snprintf.php) — Momentum snprintf function</dt>

<dt>[ec_vasprintf](apis.ec_vasprintf.php) — Momentum vasprintf function</dt>

<dt>[ec_vprintf](apis.ec_vprintf.php) — vprintf-like function that takes an output parameter and a write function</dt>

<dt>[ec_vsnprintf](apis.ec_vsnprintf.php) — Momentum vsnprintf function</dt>

<dt>[string_destroy](apis.string_destroy.php) — Destroy a string</dt>

<dt>[string_init_type](apis.string_init_type.php) — Initialize a string and pre-allocate its storage, specifying its backing type</dt>

<dt>[stringprint_domainname](apis.stringprint_domainname.php) — Renders a domain name, respecting the raw-domain rendering mode</dt>

<dt>[stringprintf](apis.stringprintf.php) — Print a formatted string</dt>

<dt>[stringwrite2](apis.stringwrite2.php) — Convert a character array to an ec_string</dt>

<dt>[stringwrite_canonical_crlf](apis.stringwrite_canonical_crlf.php) — Write a string terminated by a carriage return and line feed</dt>

<dt>[stringwrite_config_bool](apis.stringwrite_config_bool.php) — Output a boolean to the system console</dt>

<dt>[stringwrite_config_int](apis.stringwrite_config_int.php) — Output an integer to the system console</dt>

<dt>[stringwrite_config_list](apis.stringwrite_config_list.php) — Output a list to the system console</dt>

<dt>[stringwrite_config_string](apis.stringwrite_config_string.php) — Output a string to the system console</dt>

<dt>[stringwrite_strings](apis.stringwrite_strings.php) — write 1 or more NUL-terminated C-strings to the provided string</dt>

<dt>[strlcat](apis.strlcat.php) — Size-bounded C string concatenation function</dt>

<dt>[strlcpy](apis.strlcpy.php) — Size-bounded C string copying function</dt>

<dt>[strncasestrn](apis.strncasestrn.php) — Find a binary substring within a binary string, case insensitive</dt>

<dt>[strnchrn](apis.strnchrn.php) — Searches a string for the first occurence of any of a set of characters</dt>

<dt>[strnstrn](apis.strnstrn.php) — Find a binary substring within a binary string</dt>

<dt>[suffix_tree_stringprint_next](apis.suffix_tree_stringprint_next.php) — print suffixes in the tree to a string, one at a time</dt>

</dl>

| [Prev](apis.ec_ssl_set_verify_errmsg.php)  | [Up](pt.apis.php) |  [Next](apis.ec_asprintf.php) |
| ec_ssl_set_verify_errmsg  | [Table of Contents](index.php) |  ec_asprintf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)