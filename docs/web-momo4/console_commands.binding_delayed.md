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

| binding delayed |
| [Prev](console_commands.binding_active.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.binding_fail_domain.php) |

<a name="console_commands.binding_delayed"></a>
## Name

binding delayed — show domains with delayed queue size bigger than threshold on a specified binding

## Synopsis

`binding delayed` { *`binding_name`* } { *`threshold`* }

<a name="idp11825856"></a>
## Description

The **binding delayed**         command presents information concerning the domains on a particular binding with a large number of delayed messages in queue. The command takes a binding name and a single positive integer as an argument which specifies the threshold of interest. The output will include all domains on the given binding whose delayed queues exceed the integer specified.

```
10:47:35 /tmp/2025> binding delayed BINDING1 1000
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

The row detailing the totals represents the totals across *all* domains on the given binding, not just those listed.

<a name="idp7771344"></a>
## See Also

[binding active](console_commands.binding_active.php "binding active")

| [Prev](console_commands.binding_active.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.binding_fail_domain.php) |
| binding active  | [Table of Contents](index.php) |  binding fail domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)