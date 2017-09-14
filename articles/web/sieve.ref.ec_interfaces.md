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

| ec_interfaces |
| [Prev](sieve.ref.ec_include.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_ip_connections.php) |

<a name="sieve.ref.ec_interfaces"></a>
## Name

ec_interfaces — obtain a list of network interfaces

## Synopsis

`ec_interfaces`

<a name="idp14668864"></a>
## Description

This function returns a stringlist of all IPv4 addresses assigned to the local machine except for localhost (127.0.0.1).

### Note

This feature is an extension to the Sieve system and can be made available by loading the mail_loop module. See [Section 14.36, “mail_loop – Mail Loop Detection”](modules.mail_loop.php "14.36. mail_loop – Mail Loop Detection") for more information.

This function can be useful for detecting spoofing attacks that use the local machine's IP address as the argument to EHLO (a common spamming mistake).

<a name="example.ec_interfaces"></a>

**Example 15.62. ec_interfaces test**

```
$ips = ec_interfaces;
if ec_test :contains "%{spfv1:h}" $ips {
  ec_action 550 "spoof from %{spfv1:i} claiming to be me %{spfv1:h}";
}
stop;
```

| [Prev](sieve.ref.ec_include.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_ip_connections.php) |
| ec_include  | [Table of Contents](index.php) |  ec_ip_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)