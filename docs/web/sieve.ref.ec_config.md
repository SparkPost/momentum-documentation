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

| ec_config |
| [Prev](sieve.ref.ec_cluster_cache_set.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_disconnect.php) |

<a name="sieve.ref.ec_config"></a>
## Name

ec_config — get Momentum configuration from Sieve

## Synopsis

`ec_config` { "get" | "eval" } [ *`<anonymous scope name>`*              | *`<scope name>`*        *`<instance name>`*        ...] { *`optname`* }

<a name="idp13932320"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This action implements a subset of the console config command. Only the get and eval actions are currently supported, but otherwise behavior is identical. Simple option values are returned as strings, options that would be specified in parentheses in the config file (such as lists or ACLs) are returned as stringlists, and dictionary options are returned as hashes. Simple options that can be set multiple times (such as Match_Domain in the Binding scope) are returned as a stringlist containing all the configured values. For more information, see [config](console_commands.config.php "config").

<a name="example.ec_config"></a>

**Example 15.32. ec_config example**

```
$opt = ec_config "get" "Debug_Flags" "DEBUG";
# first, see if the option was set
if type :is $opt "stringlist" {
  # now check the option value
  $dummy = join "," $opt;
  if ec_test $dummy "SMTP" {
    ec_log "SMTP debugging is turned on";
  }
}
```

| [Prev](sieve.ref.ec_cluster_cache_set.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_disconnect.php) |
| ec_cluster_cache_set  | [Table of Contents](index.php) |  ec_disconnect |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)