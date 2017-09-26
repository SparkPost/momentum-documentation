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

| 2.2. Sieve Usage |
| [Prev](modules.messagescope.php)  | Chapter 2. The messagescope Module |  [Next](modules.messagescope.lua.php) |

## 2.2. Sieve Usage

When the messagescope module is loaded the `messagescope_query` and the `messagescope_load` functions are available.

### 2.2.1. The messagescope_query Sieve Function

This function looks up entries in the remediation list passed in as an argument. Depending on the type of list, the phase this function may be used in varies. For example, an IP list may be used in any phase since there's always an IP address associated with an email. On the other hand, a sender or recipient list may only be used after those have been filled in, in validate_rcptto, for example.

This function returns a hash with `status`, `version`, `expiration` and `parameter`. `status` is always filled in, and can be either `hit`, `miss`, or `error`. `error` will only be returned when there is an error in querying the information from the system. This can happen, for example, if the list information is taking too long to populate, or if the remote server is unresponsive. `version` is static and references the version of the information. This is currently always `1`. `expiration` is a Unix timestamp in seconds from the epoch signifying when the entry expires. The `parameter` entry contains user-defined data that can be set by an advanced user in the UI.

<a name="modules.messagescope.sieve.messagescope_query.example"></a>

**Example 2.3. messagescope_query Sieve function**

```
$hash = messagescope_query "Blacklist";
$stat = hash_get $hash "status";
if ec_test :is "${stat}" "hit" {
  ec_log "Blacklist matched";
}
```

This function is typically used in the each_rcpt phase.

### 2.2.2. The messagescope_load Sieve Function

The `messagescope_load` function loads remediation data in the sys_init phase. This function takes one argument, the file that you wish to load.

| [Prev](modules.messagescope.php)  | [Up](modules.messagescope.php) |  [Next](modules.messagescope.lua.php) |
| Chapter 2. The messagescope Module  | [Table of Contents](index.php) |  2.3. Lua Usage |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)