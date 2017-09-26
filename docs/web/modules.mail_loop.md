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

| 14.36. mail_loop – Mail Loop Detection |
| [Prev](modules.kaspersky.php)  | Chapter 14. Modules Reference |  [Next](modules.maildir.php) |

## 14.36. mail_loop – Mail Loop Detection

<a class="indexterm" name="idp12324032"></a>

The mail_loop module provides automatic suppression of potential mail loops with two standard mechanisms:

*   Suppression of delivery attempts to any configured IP interfaces on the machine.

*   Suppression of messages with more than a specified number of Received headers.

### 14.36.1. Configuration

The most basic configuration for the mail loop module is to suppress with a 554 code response a message with more than 20 received headers. That configuration looks like the following:

<a name="example.mail_loop"></a>

**Example 14.56. mail_loop module**

```
Validate validate/mail_loop mail_loop
{
    Use_IP = false
    Max_Received_Headers = 20
}
```

To also suppress delivery to any configured interface on the machine (interface addresses are resolved when Momentum starts), you can use:

`use_ip = true`

If you need to adjust the maximum number of allowed receive headers, you can do so as follows:

```
use_ip = false
max_received_headers = 32
```

The default value for `max_received_headers` is `20`.

### 14.36.2. mail_loop Runtime Usage

If you prefer to handle delivery suppression using policy scripts, you can disable the failing of messages by setting the return code to 250 as follows:

```
use_ip = true
max_received_headers = 32
code = 250
```

### Note

Disabling trace headers will reduce the accuracy of the mail loop detection.

In this case, a loop detection will set one of two connection context variables, depending on what sort of loop was detected.

<dl class="variablelist">

<dt>mail_loop_header_count</dt>

<dd>

Set to the number of received headers detected, if past the Max_Received_Headers count

</dd>

<dt>mail_loop_ip</dt>

<dd>

Set to 'match', if a self-connect was detected.

</dd>

</dl>

The mail_loop module also exposes the ec_interfaces Sieve feature. ec_interfaces is detailed in [ec_interfaces](sieve.ref.ec_interfaces.php "ec_interfaces").

| [Prev](modules.kaspersky.php)  | [Up](modules.php) |  [Next](modules.maildir.php) |
| 14.35. kaspersky – Kaspersky  | [Table of Contents](index.php) |  14.37. maildir – Maildir Delivery Support |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)