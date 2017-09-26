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

| ec_httpsrv_response_io |
| [Prev](apis.ec_httpsrv_response_header_set.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_response_json.php) |

<a name="apis.ec_httpsrv_response_io"></a>
## Name

ec_httpsrv_response_io — Set the session response to an IO object

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_response_io** (` | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">io</var>, |   |
|   | <var class="pdparam">immediate</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`io_object * <var class="pdparam">io</var>`;
`int <var class="pdparam">immediate</var>`;<a name="idp25548608"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Set the session response to an IO object.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

the session to modify

</dd>

<dt>io</dt>

<dd>

the IO object

</dd>

<dt>immediate</dt>

<dd>

whether to buffer immediately or stream it.

</dd>

</dl>

Sets the response payload to the contents of the provided IO object.

If immediate is 0, the system may take a reference the provided IO object and will stream its contents out to the client as part of the response. When the streaming is complete, it will delref the IO object.

If immediate is non-zero, the contents will be read from the IO object and appended to the request via [ec_httpsrv_response_append](apis.ec_httpsrv_response_append.php "ec_httpsrv_response_append") before this function call returns. If reads from the IO object return EAGAIN, then this function will return EAGAIN, and the caller is responsible for managing the repeated call to complete the operation.

**Return Values**

0 if successful, else returns an errno indicating what went wrong. In particular, ENOMEM indicates that insuficient memory was available.

| [Prev](apis.ec_httpsrv_response_header_set.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_response_json.php) |
| ec_httpsrv_response_header_set  | [Table of Contents](index.php) |  ec_httpsrv_response_json |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)