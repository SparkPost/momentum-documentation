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

| ec_message_get_envelope |
| [Prev](apis.ec_message_get_delivery_method.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_get_envelope2.php) |

<a name="apis.ec_message_get_envelope"></a>
## Name

ec_message_get_envelope — Returns information from the envelope of the message

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_get_envelope** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">localpart</var>, |   |
|   | <var class="pdparam">llen</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">dlen</var>, |   |
|   | <var class="pdparam">isnull</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">flags</var>`;
`char * <var class="pdparam">localpart</var>`;
`int <var class="pdparam">llen</var>`;
`char * <var class="pdparam">domain</var>`;
`int <var class="pdparam">dlen</var>`;
`int * <var class="pdparam">isnull</var>`;<a name="idp28278928"></a>
## Description

Fetches information from the envelope of the message.

<a name="idp28280160"></a>

**Example 34.1. ec_message_get_envelope Example**

`ec_message_get_envelope(message, EC_MSG_ENV_FROM|EC_MSG_ENV_COMPLETE, emailaddr, sizeof(emailaddr), NULL, 0, &is_null)`
**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>flags</dt>

<dd>

An int parameter as follows:

*   If flags includes `EC_MSG_ENV_FROM` then the envelope sender will be the source of the information.

*   If flags includes `EC_MSG_ENV_TO`, then the envelope recipient will be the source of the information.

*   If `EC_MSG_ENV_COMPLETE` is contained in flags, then the address will be copied into the localpart buffer only, without any protocol decoration (eg: no MAIL FROM:<>CRLF).

### Warning

It is not valid to pass `EC_MSG_ENV_FROM | EC_MSG_ENV_TO` as a parameter to flags. See also [the section called “The `EC_MSG_ENV_COMPLETE` Flag”](apis.ec_message_get_envelope.php#apis.ec_message_get_envelope.complete "The EC_MSG_ENV_COMPLETE Flag").

</dd>

<dt>localpart</dt>

<dd>

The address of localpart buffer which is llen bytes long. The localpart of the email address will be copied into the provided localpart buffer if it is not NULL.

</dd>

<dt>llen</dt>

<dd>

The size of the localpart buffer. No more than llen bytes will be copied into the buffer, and the buffer is guaranteed to be NUL terminated.

</dd>

<dt>domain</dt>

<dd>

The address of domain buffer which is dlen bytes long. The domain of the email address will be copied into the provided domain buffer if it is not NULL.

</dd>

<dt>dlen</dt>

<dd>

The size of the domain buffer. No more than dlen bytes will be copied into the buffer and the buffer is guaranteed to be NUL terminated.

</dd>

<dt>isnull</dt>

<dd>

A pointer to int. If isnull is not NULL, then it will be set to 1 to indicate that the address is the null email address. It will be set to 0 otherwise.

</dd>

</dl>

**The `EC_MSG_ENV_COMPLETE` Flag**

If you want the complete email address you must use the `EC_MSG_ENV_COMPLETE` flag. Consider the following code invoked during the log_delivery hook:

```
ec_message_get_envelope(msg, EC_MSG_ENV_TO|EC_MSG_ENV_COMPLETE, to, sizeof(to), NULL, 0, NULL);
fprintf(stderr, "with complete: %s\n", to);
ec_message_get_envelope(msg, EC_MSG_ENV_TO, to1, sizeof(to1), NULL, 0, NULL);
fprintf(stderr, "withOUT complete: %s\n", to1);
```

The first print statement outputs the complete rcptto address, for example, `test@example.com`. The second print statement outputs the localpart only, for example, `test`.

**Return Values**

Returns 1 on success (including if the envelope address is empty) and 0 if the address is not understood by the system.

**Threading**

It is legal to call this function in any thread.

<a name="idp28310912"></a>
## See Also

[ec_message_set_envelope](apis.ec_message_set_envelope.php "ec_message_set_envelope")

| [Prev](apis.ec_message_get_delivery_method.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_get_envelope2.php) |
| ec_message_get_delivery_method  | [Table of Contents](index.php) |  ec_message_get_envelope2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)