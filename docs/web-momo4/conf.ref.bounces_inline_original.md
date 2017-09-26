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

| bounces_inline_original |
| [Prev](conf.ref.bounce_suppress_list.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.capabilities.php) |

<a name="conf.ref.bounces_inline_original"></a>
## Name

bounces_inline_original — how much of the original message to include in MDNs

## Synopsis

`bounces_inline_original = "headers"`

`bounces_inline_original = "none"`

`bounces_inline_original = "all"`

<a name="idp23795280"></a>
## Description

If the system has been configured to generate bounce messages for failed deliveries, the bounce message will start with a brief description of the error followed by some information about the original message.

The parameters control which, if any, parts of the original message are included in the bounce message.

<dl class="variablelist">

<dt>none</dt>

<dd>

causes the original message to be omitted from the bounce message.

</dd>

<dt>headers</dt>

<dd>

causes only the headers of the original message to be appended to the bounce message.

</dd>

<dt>all</dt>

<dd>

causes the entire original message, including headers, to be appended to the bounce message.

</dd>

</dl>

The default value is `headers`.

<a name="idp23804928"></a>
## Scope

bounces_inline_original is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.bounce_suppress_list.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.capabilities.php) |
| bounce_suppress_list  | [Table of Contents](index.php) |  capabilities |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)