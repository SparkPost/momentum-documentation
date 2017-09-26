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

| sieve_hard_error |
| [Prev](apis.sieve_get_validate_context.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_hash_first_item.php) |

<a name="apis.sieve_hard_error"></a>
## Name

sieve_hard_error — Report an error in a Sieve extension

## Synopsis

`#include "sieve/ecsieve.h"`

| `int **sieve_hard_error** (` | <var class="pdparam">seng</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">...</var>`)`; |   |

`SENG * <var class="pdparam">seng</var>`;
`const char * <var class="pdparam">msg</var>`;
`<var class="pdparam">...</var>`;<a name="idp32753280"></a>
## Description

Report an error in a Sieve extension.

The purpose of this routine is to log error information, such as invalid parameters, to the panic log and return from a Sieve extension routine.

If Sieve is configured to fail on a runtime error, this function will set the validation context to reply code 421 (Service not available, closing transmission channel) so that the inbound session will be retried by the sender at a later time.

If Sieve is configured to continue on a runtime error, this function will simply log an error and the script will continue running the next statement.

To set the Sieve error mode see [sieve_set_error_mode](apis.sieve_set_error_mode.php "sieve_set_error_mode").

**Parameters**

<dl class="variablelist">

<dt>seng</dt>

<dd>

The Sieve engine.

</dd>

<dt>msg</dt>

<dd>

The message with format specifiers, if required.

</dd>

<dt>...</dt>

<dd>

The variable argument(s).

</dd>

</dl>

**Return Values**

Returns `SIV_CONT` if Sieve should continue running the script, or `SIV_DONE` if the script should terminate. You must return one of these values from your routine.

**Threading**

It is legal to call this function in any thread.

<a name="idp32767072"></a>
## See Also

[Section 68.73, “SENG (sieve_engine)”](structs.seng.php "68.73. SENG (sieve_engine)")

| [Prev](apis.sieve_get_validate_context.php)  | [Up](sieve.php) |  [Next](apis.sieve_hash_first_item.php) |
| sieve_get_validation_context  | [Table of Contents](index.php) |  sieve_hash_first_item |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)