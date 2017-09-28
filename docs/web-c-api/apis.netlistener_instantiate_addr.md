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

| netlistener_instantiate_addr |
| [Prev](apis.netlistener_clean_accept_construct.php)  | Chapter 38. Netlistener Functions |  [Next](apis.netlistener_stop_instance.php) |

<a name="apis.netlistener_instantiate_addr"></a>
## Name

netlistener_instantiate_addr — Start service on a listener endpoint

## Synopsis

`#include "netlistener.h"`

| `int **netlistener_instantiate_addr** (` | <var class="pdparam">listener</var>, |   |
|   | <var class="pdparam">hdr</var>, |   |
|   | <var class="pdparam">addr</var>`)`; |   |

`netlistener_def * <var class="pdparam">listener</var>`;
`ec_config_header * <var class="pdparam">hdr</var>`;
`const char * <var class="pdparam">addr</var>`;<a name="idp30652720"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Start service on a listener endpoint.

if hdr is NULL, the endpoint will use the default configuration. Note that this function makes no attempt to find a suitable configuration header if hdr is NULL. Returns 1 is the service was scheduled to start, 0 if the listener was set to skip, or if there was some other error.

| [Prev](apis.netlistener_clean_accept_construct.php)  | [Up](netlistener.php) |  [Next](apis.netlistener_stop_instance.php) |
| netlistener_clean_accept_construct  | [Table of Contents](index.php) |  netlistener_stop_instance |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)