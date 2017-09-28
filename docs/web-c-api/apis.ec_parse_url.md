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

| ec_parse_url |
| [Prev](apis.ec_hex_encode.php)  | Chapter 55. Utility Functions |  [Next](apis.ec_ucs4_from_utf8.php) |

<a name="apis.ec_parse_url"></a>
## Name

ec_parse_url — parses an RFC 3986 URI

## Synopsis

`#include "misc/ec_url_parse.h"`

| `ec_url_details * **ec_parse_url** (` | <var class="pdparam">url</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`const char * <var class="pdparam">url</var>`;
`int <var class="pdparam">len</var>`;<a name="idp36503328"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

parses an RFC 3986 URI

Given a URI string, this function parses it according to RFC 3986, additionally parsing userinfo similarly to HTTP:

userinfo.user[:userinfo.pass]

and parsing the query similarly to HTTP:

key=value(&key=value)*

into the attrs dictionary. Since some schemes may not have further encoding within the query, or may not use the HTTP-like query encoding, a raw_query as well as a the entire (percent-decoded) query are made available. Failure to decode the query in an HTTP-like manner will not cause an error, but the attrs dictionary will be absent. A path is always returned, even if empty, per the spec. All values returned have been percent-decoded, except for uri and raw_query.

**Parameters**

<dl class="variablelist">

<dt>url</dt>

<dd>

pointer to the URI string to parse

</dd>

<dt>len</dt>

<dd>

length of the URI string to parse

</dd>

</dl>

**Return Values**

Returns an ec_url_details structure on success, or NULL on failure.

| [Prev](apis.ec_hex_encode.php)  | [Up](utility.php) |  [Next](apis.ec_ucs4_from_utf8.php) |
| ec_hex_encode  | [Table of Contents](index.php) |  ec_ucs4_from_utf8 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)