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

| ec_get_message_creation_time |
| [Prev](sieve.ref.ec_get_message_code.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_get_message_id.php) |

<a name="sieve.ref.ec_get_message_creation_time"></a>
## Name

ec_get_message_creation_time — Return the creation_time of the current message.

## Synopsis

`ec_get_message_creation_time`

<a name="idp14300144"></a>
## Description

**Configuration Change. ** This feature has been available since 2.1.1.15..

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

`ec_get_message_creation_time` returns the creation time of the current message. It returns with seconds precision as an integer.

In the following script, the creation_time is checked against a specific value and the mail is permanently failed if it does not match.

<a name="example.ec_get_message_creation_time"></a>

**Example 15.46. ec_get_message_creation_time example**

```
$now = "%{t}";
$nearfuture = ec_add $now "15";
$t = ec_get_message_creation_time;
if ec_test :value "lt" :comparator "i;ascii-numeric" $t $now {
  ec_action 550 "ec_get_message_creation_time failed.  ${t} is less than ${now}";
}
if ec_test :value "gt" :comparator "i;ascii-numeric" $t $nearfuture {
  ec_action 550 "ec_get_message_creation_time failed.  ${t} is greater than than ${nearfuture}";
}
```

| [Prev](sieve.ref.ec_get_message_code.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_get_message_id.php) |
| ec_get_message_code  | [Table of Contents](index.php) |  ec_get_message_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)