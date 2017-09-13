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

| ec_messagescope_query |
| [Prev](apis.ec_md_probe.php)  | Chapter 35. Miscellaneous Functions |  [Next](apis.gcm_classify_error.php) |

<a name="apis.ec_messagescope_query"></a>
## Name

ec_messagescope_query — Query for reputation record

## Synopsis

`#include "modules/validate/ec_messagescope.h"`

| `int **ec_messagescope_query** (` | <var class="pdparam">listname</var>, |   |
|   | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">ip</var>, |   |
|   | <var class="pdparam">to</var>, |   |
|   | <var class="pdparam">from</var>, |   |
|   | <var class="pdparam">error_text</var>, |   |
|   | <var class="pdparam">error_len</var>, |   |
|   | <var class="pdparam">status</var>, |   |
|   | <var class="pdparam">expiration</var>, |   |
|   | <var class="pdparam">version</var>, |   |
|   | <var class="pdparam">parameter</var>`)`; |   |

`const char * <var class="pdparam">listname</var>`;
`ec_message * <var class="pdparam">m</var>`;
`accept_construct * <var class="pdparam">ac</var>`;
`validate_context * <var class="pdparam">ctx</var>`;
`const char * <var class="pdparam">ip</var>`;
`const char * <var class="pdparam">to</var>`;
`const char * <var class="pdparam">from</var>`;
`char * <var class="pdparam">error_text</var>`;
`int <var class="pdparam">error_len</var>`;
`char ** <var class="pdparam">status</var>`;
`char ** <var class="pdparam">expiration</var>`;
`char ** <var class="pdparam">version</var>`;
`char ** <var class="pdparam">parameter</var>`;<a name="idp30047936"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Query for reputation record.

Caller must provide a list name plus supplemental information. Depending on type of the list, additional inputs besides list name are needed: type = IP -- ac/ip is needed. Here ac/ip means with ac or IP. type = IP:recip -- (ac, m)/(ip,to) are needed. type = Envelope -- m/(to,from) are needed.

**Parameters**

<dl class="variablelist">

<dt>listname</dt>

<dd>

- name of the list to be queried.

</dd>

<dt>m</dt>

<dd>

- message.

</dd>

<dt>ac</dt>

<dd>

- accept construct.

</dd>

<dt>ctx</dt>

<dd>

- validation context.

</dd>

<dt>ip</dt>

<dd>

- IP address. Supplemental information for the look up.

</dd>

<dt>to</dt>

<dd>

- rcptto, envelop information.

</dd>

<dt>from</dt>

<dd>

- mailfrom, envelop informatin.

</dd>

<dt>ntries</dt>

<dd>

- this is (ntries)th attempt for the case of return status = 0 (i.e. not ready yet).

</dd>

<dt>wait_interval</dt>

<dd>

- in case of return status = 0, please wait this mount of seconds before trying again.

</dd>

<dt>error_text</dt>

<dd>

- error text. Should be consulted only if return status is -1.

</dd>

<dt>error_len</dt>

<dd>

- buffer length of error_text.

</dd>

<dt>status</dt>

<dd>

- query status: miss, error, hit.

</dd>

<dt>expiration</dt>

<dd>

- expiration time in string format.

</dd>

<dt>version</dt>

<dd>

- version.

</dd>

<dt>parameter</dt>

<dd>

- parameter.

</dd>

</dl>

**Return Values**

-1 for error; 0 for not ready (please try again); 1 for result is returned.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](apis.ec_md_probe.php)  | [Up](misc.php) |  [Next](apis.gcm_classify_error.php) |
| ec_md_probe  | [Table of Contents](index.php) |  gcm_classify_error |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)