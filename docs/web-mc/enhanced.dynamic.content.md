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

| Chapter 11. Enhanced Dynamic Content |
| [Prev](mc-template-syntax-macros.php)  |   |  [Next](enhanced.dynamic.content.lists.php) |

## Chapter 11. Enhanced Dynamic Content

**Table of Contents**

<dl class="toc">

<dt>[11.1\. Personalization in a Dynamic Content Macro](enhanced.dynamic.content.php#enhanced.dynamic.content.fields)</dt>

<dt>[11.2\. Using Lists as Arguments in a Dynamic Content Macro](enhanced.dynamic.content.lists.php)</dt>

<dt>[11.3\. Case-insensitive Comparisons](enhanced.dynamic.content.case.insensitive.php)</dt>

</dl>

**Configuration Change. ** This feature is available as of version 3.3.

Message Central versions 3.3 and 3.5 introduce a number of enhancements to personalizing dynamic content. This section describes those enhancements.

<a name="enhanced.dynamic.content.default.values"></a>**Default Values for Personalization Fields. ** Personalization fields can now have default values. For example, to create the macro `macro [%= :firstname %]` with a default value change it to `[%= :firstname default='Customer' %]`. You can also do the same with other personalization fields. For example, to set the default language to `English`, use `[%= :languagecode default='eng' %]`.

There are two new variants on the conditional dynamic content macro:

*   Using personalization fields in a dynamic content Macro

*   Using a list as an argument in a dynamic content Macro

Examples follow.

## 11.1. Personalization in a Dynamic Content Macro

You can check for specific values for any personalization field and adjust content accordingly in the following way:

```
[% if field='fieldname'
  value='value 1' %]
  (any sort of templating code can go here)
[% elsif field='fieldname'
  value='value 2' %]
  (any sort of templating code can go here)
[% else %]
  (any sort of templating code can go here)
[% endif %]
```

For listing of all the fields that are valid for the `if field` test: see ["$userinfo values"](https://support.messagesystems.com/docs/web-mc/mc-template-syntax.php#mc-template-syntax-userinfo-table). You can also use any profile data fields as shown below:

```
[% if field='pd_1' value='10' %]
  (any sort of templating code can go here)
[% else %]
  (any sort of templating code can go here)
[% endif %]
```

Or:

```
[% if field='profile::shoesize' value='10' %]
  (any sort of templating code can go here)
[% else %]
  (any sort of templating code can go here)
[% endif %]
```
<a name="enhanced.personalization.fields"></a>

**Personalization Fields**

You can use personalization fields inside a **LINK** macro. A personalization field doesn't use the standard square bracket and percentage sign; it is specified inside curly braces, as shown by `emailaddress` in the following:

`<a href='[%= LINK('2', 0, 'http://example.com/?email={emailaddress}', 'email', 'Tracking', 0, 0) %]'>Send email</a>`

This example expands to `<a href='http://example.com/t/AQ/Aw/AQ/AQ/Ag/AQ/FHyl'>Send email</a>`, which encodes a tracking link to `http://example.com/?email=sender@example.com`.

| [Prev](mc-template-syntax-macros.php)  |   |  [Next](enhanced.dynamic.content.lists.php) |
| 10.2. Macros  | [Table of Contents](index.php) |  11.2. Using Lists as Arguments in a Dynamic Content Macro |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)