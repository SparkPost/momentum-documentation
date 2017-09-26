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

| ec_get_message_size |
| [Prev](sieve.ref.ec_get_message_received_via_port.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_get_message_spool_name.php) |

<a name="sieve.ref.ec_get_message_size"></a>
## Name

ec_get_message_size — Return the size of the current message.

## Synopsis

`ec_get_message_size`

<a name="idp14488464"></a>
## Description

**Configuration Change. ** This feature has been available since 2.1.1.15..

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

`ec_get_message_size` returns the size of the current message in bytes. It returns this as a string.

In the following script, the size is checked and if it is greater than 1 megabyte the message is permanently failed.

<a name="example.ec_get_message_size"></a>

**Example 15.55. ec_get_message_size example**

```
$n = ec_get_message_size;
if ec_test :value "ge" :comparator "i;ascii-numeric" $n 1048576 {
  ec_action 550 "message too large.";
}
```

| [Prev](sieve.ref.ec_get_message_received_via_port.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_get_message_spool_name.php) |
| ec_get_message_received_via_port  | [Table of Contents](index.php) |  ec_get_message_spool_name |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)