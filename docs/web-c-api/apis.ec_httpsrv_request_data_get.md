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

| ec_httpsrv_request_data_get |
| [Prev](apis.ec_httpsrv_request_content_type_get.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_request_data_get_json.php) |

<a name="apis.ec_httpsrv_request_data_get"></a>
## Name

ec_httpsrv_request_data_get — Gets a handle on the request payload data

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_request_data_get** (` | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">io</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`io_object ** <var class="pdparam">io</var>`;<a name="idp25289728"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Gets a handle on the request payload data.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

the session to interrogate

</dd>

<dt>io</dt>

<dd>

returns the IO object.

</dd>

</dl>

**Return Values**

0 on success, or an errno value indicating the cause of the problem if unsuccessful.

The returned IO object will decode any transfer encoding that was applied to the incoming request and return the raw data on each io_wrapper_read() call invoked on the object.

Each call returns a new IO object that references the session. If buffered operations are used on this IO object, and multiple instances exist, the behavior of the stream will be undefined. Regular block IO reads should behave in a predictable manner (io_wrapper_read).

The system does not guarantee that the IO object is seekable; some incoming transfer encodings may make this impractical. If a handler requires the ability to seek, then it should consider copying the contents of the stream to some other storage.

Reading from the io object may result in EAGAIN if the upload has not yet completed.

| [Prev](apis.ec_httpsrv_request_content_type_get.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_request_data_get_json.php) |
| ec_httpsrv_request_content_type_get  | [Table of Contents](index.php) |  ec_httpsrv_request_data_get_json |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)