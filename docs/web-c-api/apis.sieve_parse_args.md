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

| sieve_parse_args |
| [Prev](apis.sieve_next_string_arg.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_parse_file.php) |

<a name="apis.sieve_parse_args"></a>
## Name

sieve_parse_args — Parses arguments for a Sieve extension

## Synopsis

`#include "sieve/ecsieve.h"`

| `int **sieve_parse_args** (` | <var class="pdparam">args</var>, |   |
|   | <var class="pdparam">errbuf</var>, |   |
|   | <var class="pdparam">errbuflen</var>, |   |
|   | <var class="pdparam">offset</var>, |   |
|   | <var class="pdparam">fmt</var>, |   |
|   | <var class="pdparam">...</var>`)`; |   |

`SIEVEARGS * <var class="pdparam">args</var>`;
`char * <var class="pdparam">errbuf</var>`;
`int <var class="pdparam">errbuflen</var>`;
`int <var class="pdparam">offset</var>`;
`const char * <var class="pdparam">fmt</var>`;
`<var class="pdparam">...</var>`;<a name="idp32891232"></a>
## Description

This function parses arguments for a Sieve extension.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

The arguments to parse.

</dd>

<dt>errbuf</dt>

<dd>

The buffer to hold the reason for an error.

</dd>

<dt>errbuflen</dt>

<dd>

The size of `errbuf` in bytes.

</dd>

<dt>offset</dt>

<dd>

Which argument to treat as the first.

</dd>

<dt>fmt</dt>

<dd>

A format string that specifies the types of the arguments that you expect.

</dd>

<dt>...</dt>

<dd>

The variable argument(s).

</dd>

</dl>

The format string can be composed from the following place holders:

*   `?` – indicates that the next placeholder is optional. If the argument is not present, then the corresponding variadic arguments will be skipped over unmodified, allowing you to initialize to some default value.

*   `%` – expects a hash parameter. Corresponds to the address of a SIEVEARGS * to hold the hash pointer.

*   `s` – expects a string parameter. Corresponds to the address of a const char * and the address of an int to receive the string and its length.

*   `i` – expects a numeric parameter. Corresponds to the address of a SIEVEARGS * and an u_int32_t to receive its value.

*   `@` – expects a stringlist. Corresponds to the address of a SIEVEARGS* to hold the stringlist pointer.

*   `*` – expects any Sieve value. Corresponds to the address of a SIEVEARGS * to hold the pointer.

*   `:{COMPARATOR}` – an optional Sieve comparator specifier. Corresponds to an int * arg that will be set to one of the `SIEVE_COMP_XXX` comparator identifiers.

*   `:{ADDRESS-PART}` – an optional addressing qualifier, such as `:localpart` or `:domain`. Corresponds to an int * arg that will be set to one of the `SIEVE_ADDRPART_XXX` addressing identifiers.

*   `:{MATCH-TYPE}` – an optional match type specifier, such as `:is`, `:contains` or `:matches`. Corresponds to two int* args that will be set to one of the `SIEVE_MATCH_XXX` identifiers and `SIEVE_REL_XXX` identifiers.*

*   `:{name`} expects a tagged argument `:name` to be present. Has no corresponding argument, unless prefixed by a `?`, in which case the argument must be the address of an int that will be set to `1` if the parameter is present.

*   `:{name:s}` – expects `:name` followed by a string. Corresponding args are as though you specified `s`. The Boolean flag that `:{name}` would have had does not apply to this case. You may specify any argument specifiers inside the curly braces, except for additional tagged argument names (rfc3028 forbids that usage style).

*   `?:{name=i}` – `:name` is optional. Corresponding args are &int, int. The former will be updated to the value of the latter. This can be used to implement mutually exclusive tags. See the example below.

Find below some examples with error handling omitted:

```
const char *str; int str_len; 
sieve_parse_args(args, errbuf, sizeof(errbuf), 0, 's', &str, &str_len);
```

```
SIEVEARGS *arg; 
sieve_parse_args(args, errbuf, sizeof(errbuf), 0,
'@', &arg);
sieve_parse_args(args, errbuf, sizeof(errbuf), 0,
'%', &arg); 
sieve_parse_args(args, errbuf, sizeof(errbuf), 0,
'*', &arg);
```

```
u_int32_t num; sieve_parse_args(args, errbuf, sizeof(errbuf), 0,
'i', &num);
```

```
// requires that :tagged be in the args 
sieve_parse_args(args, errbuf, sizeof(errbuf), 0, ':{tagged}');
```

```
// :tagged is optional 
int tagged = 0; 
sieve_parse_args(args, errbuf, sizeof(errbuf), 0, '?:{tagged}', &tagged);
```

```
// mutually exclusive tags.
// selected will be set to either USE_LOCALPART or USE_DOMAIN 
// depending on whether :localpart or :domain tags were found. 
// or left at 0 if neither were present.
int selected = 0; 
sieve_parse_args(args, errbuf, sizeof(errbuf), 0, '?:{localpart=i}?:{domain=i}',
&selected, USE_LOCALPART, &selected, USE_DOMAIN);
```
**Return Values**

On success this function returns `1`, zero on failure.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.sieve_next_string_arg.php)  | [Up](sieve.php) |  [Next](apis.sieve_parse_file.php) |
| sieve_next_string_arg  | [Table of Contents](index.php) |  sieve_parse_file |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)