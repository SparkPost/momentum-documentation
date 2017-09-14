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

| dec_inbound_connections |
| [Prev](apis.connection_used_for_message.php)  | Chapter 13. Connection-related Functions |  [Next](apis.ec_generate_connection_id.php) |

<a name="apis.dec_inbound_connections"></a>
## Name

dec_inbound_connections — Decrement the number of global inbound connections by 1

## Synopsis

`#include connection.h"`

| `void **dec_inbound_connections** (` | <var class="pdparam">typename</var>, |   |
|   | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">ac</var>`)`; |   |

`char * <var class="pdparam">typename</var>`;
`int <var class="pdparam">fd</var>`;
`accept_construct * <var class="pdparam">ac</var>`;<a name="idp21528736"></a>
## Description

Decrement the number of global inbound connections by `1`.

**Parameters**

<dl class="variablelist">

<dt>char *</dt>

<dd>

The connection type, such as `SMTP`.

</dd>

<dt>fd</dt>

<dd>

The file descriptor of the connection.

</dd>

<dt>ac</dt>

<dd>

The address of an [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct") associated with the session.

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is *only* legal to call this function in the `Scheduler` thread.

<a name="idp21541200"></a>
## See Also

[Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct")

| [Prev](apis.connection_used_for_message.php)  | [Up](connection.php) |  [Next](apis.ec_generate_connection_id.php) |
| connection_used_for_message  | [Table of Contents](index.php) |  ec_generate_connection_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)