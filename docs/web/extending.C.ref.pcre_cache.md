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

| pcre_cache |
| [Prev](extending.C.ref.events.php)  | Chapter 17. C API Reference |  [Next](extending.C.ref.timed-events.php) |

<a name="extending.C.ref.pcre_cache"></a>
## Name

ec_pcre_compile, ec_pcre_delref — pcre caching facility

## Synopsis

```
#include "ec_pcre.h"

typedef struct pcre_cache_elt {
  pcre *re; 
  pcre_extra *ree;
  ec_cache_elt *elt;
} ec_pcre_elt;

ec_cache_t *pcre_cache;
```

| `ec_pcre_elt * **ec_pcre_compile** (` | <var class="pdparam">pattern</var>, |   |
|   | <var class="pdparam">compile_options</var>, |   |
|   | <var class="pdparam">study_options</var>, |   |
|   | <var class="pdparam">errorptr</var>, |   |
|   | <var class="pdparam">erroroffset</var>, |   |
|   | <var class="pdparam">tables</var>`)`; |   |

`const char * <var class="pdparam">pattern</var>`;
`int <var class="pdparam">compile_options</var>`;
`int <var class="pdparam">study_options</var>`;
`const char ** <var class="pdparam">errorptr</var>`;
`int * <var class="pdparam">erroroffset</var>`;
`const unsigned char * <var class="pdparam">tables</var>`;

| `void **ec_pcre_delref** (` | <var class="pdparam">elt</var>`)`; |   |

`ec_pcre_elt * <var class="pdparam">elt</var>`;<a name="idp16796000"></a>
## Description

A potential performance bottleneck is the repeated recompilation of regular expressions. This caching implementation wraps [ec_cache](extending.C.ref.ec_cache.php "ec_cache") to let module writers quickly and easily add cached regular expressions to their modules.

`ec_pcre_compile` attempts to find the regex with pattern: *`pattern`*, and options of *`compile_options`* and *`study_options`*. If an error occurs, the *`errorptr`* and *`erroroffset`* parameters will be set. It returns an ec_pcre_elt if successful, or `NULL` if it fails. It is the callers responsibility to delref the element when it is no longer required.

`ec_pcre_delref` must be used to release the resources held by the element when it is no longer required. The *`elt`* parameter points to an ec_pcre_elt returned by `ec_pcre_compile`.

<a name="idp16803824"></a>

**Example 17.2. Making use of cached regexes**

```
#include "config.h"
#include "ec_pcre.h"

...

  int rc;
  ec_pcre_elt *elt = ec_pcre_compile(pattern, compile_options, study_options, errorptr, eoffset, table);

  rc = pcre_exec(elt->re, elt->ree, ...);

  ec_pcre_delref(elt);

...
```

<a name="idp16806176"></a>
## See also

[ec_cache](extending.C.ref.ec_cache.php "ec_cache") [PCRE documentation](http://www.pcre.org/pcre.txt)

| [Prev](extending.C.ref.events.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.ref.timed-events.php) |
| events  | [Table of Contents](index.php) |  timed events |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)