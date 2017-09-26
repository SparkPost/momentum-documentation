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

| ec_get_message_received_via |
| [Prev](sieve.ref.ec_get_message_received_from_port.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_get_message_received_via_port.php) |

<a name="sieve.ref.ec_get_message_received_via"></a>
## Name

ec_get_message_received_via — Return the IP address that the message was received via

## Synopsis

`ec_get_message_received_via`

<a name="idp29756496"></a>
## Description

`ec_get_message_received_via` returns the IP address of the interface that the message was received on. It returns the address in dot-decimal notation, 192.126.1.20 for example.

In the following script, the IP address returned by ec_get_message_received_via is checked against a specific value and the mail is permanently failed if it does not match.

<a name="example.ec_get_message_received_via"></a>

**Example 16.53. ec_get_message_received_via example**

```
$ip = ec_get_message_received_via;
if not ec_test :is "${ip}" "127.0.0.1" {
  ec_action 550 "ec_get_message_received_via failed.  Expected 127.0.0.1, got ${ip}";
}
```

| [Prev](sieve.ref.ec_get_message_received_from_port.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_get_message_received_via_port.php) |
| ec_get_message_received_from_port  | [Table of Contents](index.php) |  ec_get_message_received_via_port |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)