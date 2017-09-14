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

| 2.2. LDAP and The REST API |
| [Prev](rest.accessing.php)  | Chapter 2. Accessing the API |  [Next](rest.accessing.ssl.php) |

## 2.2. LDAP and The REST API

As of Message Central version 3.6, it is possible to authenticate using LDAP rather than the Message Central database.

To use LDAP with the REST API you must follow the instructions given at [LDAP Configuration](https://support.messagesystems.com/docs/web-mc/mc3.ldap.php). Once completed, LDAP will be automatically enabled. As with the web UI, there must be matching LDAP and Message Central accounts for this to work.

The REST API currently supports both HTTP basic authentication and HTTP digest authentication. With LDAP authentication enabled, only HTTP basic authentication will be supported because the web server must have the plaintext password to authenticate against the LDAP service.

SSL is required when using HTTP basic authentication with the REST API.

| [Prev](rest.accessing.php)  | [Up](rest.accessing.php) |  [Next](rest.accessing.ssl.php) |
| Chapter 2. Accessing the API  | [Table of Contents](index.php) |  2.3. Accessing with SSL |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)