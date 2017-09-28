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

| Chapter 8. Sieve++ |
| [Prev](cluster.cidr_server.php)  | Part I. Configuration Guide |  [Next](sieve.differences.php) |

## Chapter 8. Sieve++

**Table of Contents**

<dl class="toc">

<dt>[8.1\. The differences between Sieve and Sieve++](sieve.differences.php)</dt>

<dt>[8.2\. Sieve's Basic Syntax](sieve.syntax.basic.php)</dt>

<dt>[8.3\. RFC Standard Sieve Enhancements](sieve.enhancements.php)</dt>

<dt>[8.4\. Sieve++, Momentum-specific extensions](sieve.ecaddons.php)</dt>

</dl>

Momentum contains a fully loaded Sieve compiler and execution engine. The `sieve` module provides a mechanism for you to specify Sieve scripts that should run at different phases of an SMTP transaction.

### Note

In Momentum version 3.x, Sieve continues to be supported but scripting via Lua is preferred for the following reasons:

*   Sieve has no concept of looping or iterators

*   Simple comparative logic in Sieve is awkward to author

*   Unlike Sieve, new modules do not need explicit C development to enable Lua capabilities

### Warning

You cannot use Sieve with multiple event loops. If you include the Sieve module in your configuration file, Momentum will not start up and a warning will be written to the panic log. If you are upgrading to a multiple event loop configuration of Momentum, be sure to remove the Sieve module from your configuration file.

Sieve++ was developed by Message Systems specifically for Momentum. It provides you with a powerful policy management engine for both inbound and outbound mail.

| [Prev](cluster.cidr_server.php)  | [Up](p.guide.php) |  [Next](sieve.differences.php) |
| 7.10. The `cidr_server`  | [Table of Contents](index.php) |  8.1. The differences between Sieve and Sieve++ |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)