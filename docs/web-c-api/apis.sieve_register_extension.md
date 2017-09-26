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

| sieve_register_extension |
| [Prev](apis.sieve_register_action.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_register_test.php) |

<a name="apis.sieve_register_extension"></a>
## Name

sieve_register_extension — Register a Sieve extension

## Synopsis

`#include "sieve/ecsieve.h"`

| `int **sieve_register_extension** (` | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">action</var>, |   |
|   | <var class="pdparam">reqd_capability</var>, |   |
|   | <var class="pdparam">compile_cb</var>, |   |
|   | <var class="pdparam">action_cb</var>`)`; |   |

`int <var class="pdparam">flags</var>`;
`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">action</var>`;
`const char * <var class="pdparam">reqd_capability</var>`;
`sieve_compile_callback <var class="pdparam">compile_cb</var>`;
`sieve_action_callback <var class="pdparam">action_cb</var>`;<a name="idp33013376"></a>
## Description

Register a Sieve extension.

This function can be used to register an extension, that is an action, a test, or both (depending on the context).

**Parameters**

<dl class="variablelist">

<dt>flags</dt>

<dd>

A combination of `SIV_EXT_*` flags (if any). See [the section called “Sieve Extension Constants”](apis.sieve_register_extension.php#apis.sieve_register_extension.constants "Sieve Extension Constants").

</dd>

<dt>closure</dt>

<dd>

A pointer that's passed to callbacks.

</dd>

<dt>action</dt>

<dd>

The name of the extension in Sieve scripts.

</dd>

<dt>reqd_capability</dt>

<dd>

The name that the script needs to require; `NULL` means the same as `action`.

</dd>

<dt>compile_cb</dt>

<dd>

The callback for the compile phase. This data type is defined as follows:

```
typedef int (*sieve_compile_callback)(void *closure,
  SIEVE *sieve,
  SIEVEARGS *args,
  int *sievereq /* you set *sievereq to SIEVEREQ_XXX required to execute this action */
);
```
</dd>

<dt>action_cb</dt>

<dd>

The callback for the execution phase. This data type is defined as follows:

```
typedef sieve_action_return_t (*sieve_action_callback)
  (void *closure, SENG *seng, SIEVEARGS *args);
```
</dd>

</dl>

**Return Values**

Returns `1` on success, `0` on failure.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="apis.sieve_register_extension.constants"></a>
### Sieve Extension Constants

These constants are defined in the `sieve/ecsieve.h` file as follows:

```
/**
 * extension supports validation API v0.
 * This is implied if you call sieve_register_action() or sieve_register_test() */
#define SIV_EXT_SUPPORTS_V0  1
/**
 * extension can only be run in a test context.  Implied by sieve_register_test().
 * If you register a non SUPPORTS_V0 extension with this flag, you are responsible
 * for calling sieve_set_test_return_value() before your action_cb returns with a
 * non AGAIN value. */
#define SIV_EXT_IS_ONLY_A_TEST 2
/**
 * extension knows how to run as a fully fledged test.
 * This informs the compiler that it should not rig up the extension
 * using the older ec_test style syntax, which would otherwise strip
 * the final parameter from the args passed to the extension.
 *
 * @since 2.2.1.21
 */
#define SIV_EXT_CAN_RUN_AS_TEST 4
```

| [Prev](apis.sieve_register_action.php)  | [Up](sieve.php) |  [Next](apis.sieve_register_test.php) |
| sieve_register_action  | [Table of Contents](index.php) |  sieve_register_test |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)