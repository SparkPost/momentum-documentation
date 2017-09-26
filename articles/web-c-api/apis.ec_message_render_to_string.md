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

| ec_message_render_to_string |
| [Prev](apis.ec_message_render_part_to_string.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_rsrc_copy.php) |

<a name="apis.ec_message_render_to_string"></a>
## Name

ec_message_render_to_string — Renders a message, swapping it in if needed

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_render_to_string** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`string * <var class="pdparam">str</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp29244896"></a>
## Description

Renders a message, swapping it in if needed.

<a name="idp29246128"></a>

**Example 34.3. ec_message_render_to_string**

```
ec_message_render_to_string(message, &str, EC_MSG_RENDER_OMIT_DOT|EC_MSG_RENDER_XML)
ec_message_render_to_string(mess, NULL, EC_MSG_RENDER_CALCULATE_LENGTH_ONLY)
```

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>str</dt>

<dd>

The address of the string storing the rendition

</dd>

<dt>flags</dt>

<dd>

Flags that control the message parts that are rendered. See the [the section called “Related Constants”](apis.ec_message_render_to_string.php#apis.ec_message_render_to_string.related_constants "Related Constants")

</dd>

</dl>

**Return Values**

Returns the length of the rendered output in bytes.

**Related Constants**

<dl class="variablelist">

<dt>EC_MSG_RENDER_OMIT_DOT</dt>

<dd>

Omit the trailing SMTP termination dot from the rendition

</dd>

<dt>EC_MSG_RENDER_CALCULATE_LENGTH_ONLY</dt>

<dd>

Calculate the length only

</dd>

<dt>EC_MSG_RENDER_HEADERS_ONLY</dt>

<dd>

Render the rfc2822 headers only

</dd>

<dt>EC_MSG_RENDER_XML</dt>

<dd>

Render the output in an XML based format

</dd>

<dt>EC_MSG_RENDER_OMIT_HEADERS</dt>

<dd>

Don't render the rfc2822 headers

</dd>

<dt>EC_MSG_RENDER_OMIT_EPILOGUE</dt>

<dd>

Don't include epilogue

</dd>

<dt>EC_MSG_RENDER_UNSTUFFED</dt>

<dd>

Remove SMTP dot stuffing while rendering, and use LF instead of CRLF

</dd>

<dt>EC_MSG_RENDER_DEBUG</dt>

<dd>

Enable additional output in debugging mode

</dd>

<dt>EC_MSG_RENDER_AVOID_IO</dt>

<dd>

Don't incur disk IO if we can avoid it

</dd>

<dt>EC_MSG_RENDER_SUPPRESS_WRITE_ERRORS</dt>

<dd>

Don't log write errors, useful when rendering to a static string to limit the amount of the message being requested

</dd>

</dl>

**Threading**

It is legal to call this function in any thread.

### Note

This function may induce IO or otherwise block the caller. Blocking in the scheduler thread will lead to degraded performance and should be avoided at all costs. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

<a name="idp29279120"></a>
## See Also

[ec_message_render_headers_to_string](apis.ec_message_render_headers_to_string.php "ec_message_render_headers_to_string")

| [Prev](apis.ec_message_render_part_to_string.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_rsrc_copy.php) |
| ec_message_render_part_to_string  | [Table of Contents](index.php) |  ec_message_rsrc_copy |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)