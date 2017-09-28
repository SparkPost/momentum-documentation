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

| ecstream_port |
| [Prev](conf.ref.drop_body_after_trans_fail.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.ecstream_timeout.php) |

<a name="conf.ref.ecstream_port"></a>
## Name

ecstream_port — configure the port for ecstream deliveries

## Synopsis

`ecstream_port = 1825`

<a name="idp24512240"></a>
## Description

When Momentum is set to [perform delivery via ecstream](conf.ref.delivery_method.php "delivery_method"), this option sets the *destination* port that will be used. The default value is `1825`.

<a name="conf.ref.ecstream_port.example"></a>

**Example 72.6. ecstream_port example**

```
domain “gold.example.com” {
  delivery_method = "ECSTREAM"
  ecstream_port = 31337
}
```

<a name="idp24518096"></a>
## Scope

ecstream_port is valid in the binding, binding_group, domain, and global scopes.

<a name="idp24519968"></a>
## See Also

[delivery_method](conf.ref.delivery_method.php "delivery_method")

| [Prev](conf.ref.drop_body_after_trans_fail.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.ecstream_timeout.php) |
| drop_body_after_trans_fail  | [Table of Contents](index.php) |  ecstream_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)