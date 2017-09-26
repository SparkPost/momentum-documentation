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

| default_binding |
| [Prev](conf.ref.debug_flags.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.default_charset.php) |

<a name="conf.ref.default_binding"></a>
## Name

default_binding — control usage of the "default" binding

## Synopsis

`default_binding = "normal"`

`default_binding = "suspended"`

`default_binding = "none"`

<a name="idp8795600"></a>
## Description

The default binding is the binding that a message belongs to when no other binding applies. For more information see [the section called “The "default" Binding”](conf.ref.binding.php#conf.ref.binding.default "The "default" Binding").

For customers using MultiVIP© interfaces, it may be desirable never to use the 'default' binding. There are two options for this. If `Default_Binding` is set to `none`, then messages that would fall into the default binding will generate a 451 transient failure back to the generating software.

The default value for this option is `normal`

If you wish to suspend delivery for the default binding, do it in the following way:

```
binding "default" {
  suspend_delivery = true
}
```
<a name="idp8801712"></a>
## Scope

`default_binding` is valid in the global scope.

<a name="idp8803744"></a>
## See Also

[Section 4.6, “MultiVIP© Interfaces”](operations.multivip.php "4.6. MultiVIP© Interfaces"), [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery"), [binding](conf.ref.binding.php "binding")

| [Prev](conf.ref.debug_flags.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.default_charset.php) |
| debug_flags  | [Table of Contents](index.php) |  default_charset |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)