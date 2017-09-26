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

| ec_message_get_envelope2 |
| [Prev](apis.ec_message_get_envelope.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_get_first_part.php) |

<a name="apis.ec_message_get_envelope2"></a>
## Name

ec_message_get_envelope2 — Return information from the envelope of the message

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_get_envelope2** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">localpart</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">isnull</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">flags</var>`;
`string * <var class="pdparam">localpart</var>`;
`string * <var class="pdparam">domain</var>`;
`int * <var class="pdparam">isnull</var>`;<a name="idp28324224"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.0.9.

Returns information from the envelope of the message.

If flags includes `EC_MSG_ENV_FROM` then the envelope sender will be the source of the information. If flags includes `EC_MSG_ENV_TO`, then the envelope recipient will be the source of the information. The local portion of the address will be copied into the localpart buffer if it is not NULL. Similarly, the domain portion of the address will be copied into the domain buffer if it is not NULL.

If `isnull` is not NULL, then it will be set to `1` if the address is the null sender address, `0` otherwise. If `EC_MSG_ENV_COMPLETE` is contained in flags, then the address will be copied into the localpart buffer only, without any protocol decoration (eg: no MAIL FROM:<>CRLF).

**The EC_MSG_ENV_COMPLETE Flag**

To retrieve the complete email address, the localpart and the domain name, you must use the `EC_MSG_ENV_COMPLETE` flag. See also [ec_message_get_envelope](apis.ec_message_get_envelope.php "ec_message_get_envelope").

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

The [ec_message](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>flags</dt>

<dd>

Any OR'ed combination of `EC_MSG_ENV_XXX` flags shown below. However, *It is not valid to pass `EC_MSG_ENV_FROM | EC_MSG_ENV_TO` as the flags parameter.* 

</dd>

<dt>localpart</dt>

<dd>

Storage for the local portion of the address.

</dd>

<dt>domain</dt>

<dd>

Storage for the domain portion of the address.

</dd>

<dt>isnull</dt>

<dd>

If not NULL, this parameter will be set to `1` to indicate that the address is the null sender address, `0` otherwise.

</dd>

</dl>

**Related Constants**

<dl class="variablelist">

<dt>`EC_MSG_ENV_FROM`</dt>

<dd>

Operate on the envelope sender.

</dd>

<dt>`EC_MSG_ENV_TO`</dt>

<dd>

Operate on the envelope recipient.

</dd>

<dt>`EC_MSG_ENV_COMPLETE`</dt>

<dd>

Ignore the domain parameter; the entire address is either in or will be placed in the localpart buffer.

</dd>

</dl>

**Return Values**

Returns `1` on success, `0` if the address is not understood by the system.

**Threading**

It is legal to call this function in any thread.

<a name="idp28357728"></a>
## See Also

[ec_message_get_envelope](apis.ec_message_get_envelope.php "ec_message_get_envelope")

| [Prev](apis.ec_message_get_envelope.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_get_first_part.php) |
| ec_message_get_envelope  | [Table of Contents](index.php) |  ec_message_get_first_part |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)