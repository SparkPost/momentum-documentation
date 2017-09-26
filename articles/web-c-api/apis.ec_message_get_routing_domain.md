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

| ec_message_get_routing_domain |
| [Prev](apis.ec_message_get_rcptto.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_get_routing_domain2.php) |

<a name="apis.ec_message_get_routing_domain"></a>
## Name

ec_message_get_routing_domain — Get the routing domain of the message

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_get_routing_domain** (` | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">dlen</var>`)`; |   |

`ec_message * <var class="pdparam">message</var>`;
`char * <var class="pdparam">domain</var>`;
`int <var class="pdparam">dlen</var>`;<a name="idp28490944"></a>
## Description

Get the routing domain of a message.

**Parameters**

<dl class="variablelist">

<dt>message</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>domain</dt>

<dd>

A char pointer referring to the domain string. The domain string must be at least of length MAXDOMAINNAME.

</dd>

<dt>dlen</dt>

<dd>

An integer value indicating the length of the domain string, which should be at least MAXDOMAINNAME length.

</dd>

</dl>

**Return Values**

This function returns a 1 if the call successfully determined the routing domain. It returns a zero (0) if the routing domain could not be identified.

**Threading**

It is legal to call this function in any thread.

<a name="idp28501552"></a>
## See Also

[ec_message_get_routing_domain2](apis.ec_message_get_routing_domain2.php "ec_message_get_routing_domain2").

| [Prev](apis.ec_message_get_rcptto.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_get_routing_domain2.php) |
| ec_message_get_rcptto  | [Table of Contents](index.php) |  ec_message_get_routing_domain2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)