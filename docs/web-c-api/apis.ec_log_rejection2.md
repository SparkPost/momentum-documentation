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

| ec_log_rejection2 |
| [Prev](apis.ec_log_rejection.php)  | Chapter 31. Logging Functions |  [Next](apis.ec_log_transient_failure.php) |

<a name="apis.ec_log_rejection2"></a>
## Name

ec_log_rejection2 — Records rejection of an incoming message

## Synopsis

`#include "log.h"`

| `void **ec_log_rejection2** (` | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">phase</var>, |   |
|   | <var class="pdparam">format</var>, |   |
|   | <var class="pdparam">...</var>`)`; |   |

`struct timeval * <var class="pdparam">now</var>`;
`accept_construct * <var class="pdparam">ac</var>`;
`validate_context * <var class="pdparam">ctx</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`int <var class="pdparam">phase</var>`;
`const char * <var class="pdparam">format</var>`;
`<var class="pdparam">...</var>`;<a name="idp26775872"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.5.

Records rejection of an incoming message.

**Parameters**

<dl class="variablelist">

<dt>now</dt>

<dd>

A pointer to a timeval struct, which may be NULL.

</dd>

<dt>ac</dt>

<dd>

An accept construct. For a description of this data type see [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct").

</dd>

<dt>dr</dt>

<dd>

A domain record. For a description of this data type see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record").

</dd>

<dt>msg</dt>

<dd>

An ec_message. For a description of this data type see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>phase</dt>

<dd>

This parameter corresponds to the message state. it must be one of the following constants:

```
#define MC_STATE_START 0
#define MC_STATE_START_RESPONSE 1
#define MC_STATE_EHLO 2
#define MC_STATE_EHLO_RESPONSE 3
#define MC_STATE_MAILFROM 4
#define MC_STATE_MAILFROM_RESPONSE 5
#define MC_STATE_RCPTTO 6
#define MC_STATE_RCPTTO_RESPONSE 7
#define MC_STATE_DATA 8
#define MC_STATE_BODY 9
#define MC_STATE_BODY_RESPONSE 10
#define MC_STATE_ASYNC_BODY_RESPONSE 11
#define MC_STATE_OK 12 /* preparing to send OK after data */
#define MC_STATE_RELAYING_DENIED 13
#define MC_STATE_EXTENSION_1 14
#define MC_STATE_EXTENSION_2 15
#define MC_STATE_EXTENSION_3 16
#define MC_STATE_EXTENSION_4 17
#define MC_STATE_CONCURRENCY_LIMIT 18
#define MC_STATE_RCPTTO_LIST_RESPONSE 19
#define MC_STATE_RCPTTO_LIST_FINAL_RESPONSE 20
#define MC_STATE_SETUP 21
#define MC_STATE_MCMT_FIXUP 22
#define MC_STATE_COUNT 23
```
</dd>

<dt>format</dt>

<dd>

The format string.

</dd>

<dt>...</dt>

<dd>

The variable argument.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp26797872"></a>
## See Also

For more information on log formats see [ec_logger – Momentum-Style Logging](https://support.messagesystems.com/docs/web-ref/modules.ec_logger.php) and [Log Formats](https://support.messagesystems.com/docs/web-ref/log_formats.php).

| [Prev](apis.ec_log_rejection.php)  | [Up](logging.php) |  [Next](apis.ec_log_transient_failure.php) |
| ec_log_rejection  | [Table of Contents](index.php) |  ec_log_transient_failure |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)