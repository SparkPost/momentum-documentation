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

| msys.runSieveScript |
| [Prev](lua.ref.msys.runinpool.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.shareGet.php) |

<a name="lua.ref.msys.runSieveScript"></a>
## Name

msys.runSieveScript — Run a Sieve script in the specified phase

<a name="idp24701104"></a>
## Synopsis

`msys.runSieveScript(scriptfilename, phase, capabilities);`

```
scriptfilename: string
phase: string
capabilities: number
```
<a name="idp24703872"></a>
## Description

Runs the Sieve script contained in `scriptfilename` as though it were being run in the `phasename` phase. `capabilities` is a mask of Sieve capabilities, OR'd together, as appropriate for the currently executing environment. The Lua "bag" state is passed through to the Sieve interpreter, allowing the message and validation context information to be used by the script. This function returns two values:

*   boolean success indicator

*   error message string if success indicator is false

Possible capability values are:

*   msys.core.SIEVEREQ_MSG

*   msys.core.SIEVEREQ_ENV_FROM

*   msys.core.SIEVEREQ_ENV_TO

*   msys.core.SIEVEREQ_AC

*   msys.core.SIEVEREQ_550_OK

*   msys.core.SIEVEREQ_PHASE_CONNECT

*   msys.core.SIEVEREQ_PHASE_EHLO

*   msys.core.SIEVEREQ_PHASE_MAILFROM

*   msys.core.SIEVEREQ_PHASE_RCPTTO

*   msys.core.SIEVEREQ_PHASE_DATA

*   msys.core.SIEVEREQ_PHASE_SPOOL

*   msys.core.SIEVEREQ_PHASE_EACH_RCPT

*   msys.core.SIEVEREQ_DNS_LOOKUP_OK

*   msys.core.SIEVEREQ_MSG_BODY

*   msys.core.SIEVEREQ_PHASE_ACCEPT

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

| [Prev](lua.ref.msys.runinpool.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.shareGet.php) |
| msys.runInPool  | [Table of Contents](index.php) |  msys.shareGet |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)