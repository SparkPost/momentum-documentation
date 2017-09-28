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

| delayed |
| [Prev](console_commands.debug_smtp.php)  | 12.2. System Console Commands |  [Next](console_commands.dig.php) |

<a name="console_commands.delayed"></a>
## Name

delayed — show domains with delayed queue size bigger than threshold

## Synopsis

`delayed` { *`threshold`* }

<a name="idp9622064"></a>
## Description

The **delayed** command presents information concerning the domains with a large number of delayed messages in queue. The command takes a single positive integer as an argument which specifies the threshold of interest. The output will include all domains whose delayed queues exceed the integer specified.

```
10:47:35 /tmp/2025> delayed 1000
Domain:                   mailcity.com  C:  0  A:      9  D:  1169  S: 16838
Domain:                   peoplepc.com  C:  0  A:    575  D:  1180  S:  7735
Domain:                       sina.com  C:  3  A:      1  D:  1232  S:  1069
                                Total:  C: 532  A:  22692  D: 34915  S:1953716
```

<dl class="variablelist">

<dt>C</dt>

<dd>

current number of connections

</dd>

<dt>A</dt>

<dd>

current size of the active queue

</dd>

<dt>D</dt>

<dd>

current size of the delayed queue

</dd>

<dt>S</dt>

<dd>

total messages sent during the life of the domain record

</dd>

</dl>

The row detailing the totals represents the totals across *all* domains, not just those listed.

| [Prev](console_commands.debug_smtp.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.dig.php) |
| debug smtp  | [Table of Contents](index.php) |  dig |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)