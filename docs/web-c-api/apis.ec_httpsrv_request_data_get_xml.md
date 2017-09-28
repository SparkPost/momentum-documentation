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

| ec_httpsrv_request_data_get_xml |
| [Prev](apis.ec_httpsrv_request_data_get_string.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_request_event_get.php) |

<a name="apis.ec_httpsrv_request_data_get_xml"></a>
## Name

ec_httpsrv_request_data_get_xml — Gets an XML object representation of the request payload data

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_request_data_get_xml** (` | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">xml</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`xmlDocPtr * <var class="pdparam">xml</var>`;<a name="idp25349216"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Gets an XML object representation of the request payload data.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

the session to interrogate

</dd>

<dt>xml</dt>

<dd>

returns the XML document

</dd>

</dl>

Passes the payload data to the libxml2 parser and returns the resultant xmlDocPtr via the xml parameter.

**Return Values**

0 on success, or an errno value indicating any issues with consuming the payload data.

The xml object will be set to the successfully created xml representation of the string on success, otherwise it will be NULL.

It is possible for the return value to be 0 and the xml parameter to be set to NULL. The likely cause of this is that that payload was not valid XML text.

The caller owns the return xml document and is responsible for calling xmlFreeDoc() when it is no longer needed.

| [Prev](apis.ec_httpsrv_request_data_get_string.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_request_event_get.php) |
| ec_httpsrv_request_data_get_string  | [Table of Contents](index.php) |  ec_httpsrv_request_event_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)