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

| 10.2. Macros |
| [Prev](mc-template-syntax.php)  | Chapter 10. Template Syntax |  [Next](enhanced.dynamic.content.php) |

## 10.2. Macros

Macros are similar to predefined place holders, but have two differences: macros accept parameters that affect how they are evaluated, and macros do not use a ‘`:`’ character after the equals sign.

[Table 10.4, “Template Macros”](mc-template-syntax-macros.php#mc-template-syntax-macros-table "Table 10.4. Template Macros") lists the available macros.

<a name="mc-template-syntax-macros-table"></a>

**Table 10.4. Template Macros**

| Macro | Description |
| --- | --- |
| [[%= *`expr`* %]](mc-template-syntax-macros.php#mc.perl.expr.macro "10.2.1. Perl Escape Macro") | evaluates a Perl expression |
| [[%= get("*`url`*") %]](mc-template-syntax-macros.php#mc.get.macros "10.2.2. get and getexternal Macros") | gets personalized content from a URL |
| [[%= get("file://*`path_to_file`*") %]](mc-template-syntax-macros.php#mc.get.macros "10.2.2. get and getexternal Macros") | gets personalized content from a file |
| [[%= get("file://*`path_to_file`*") %]](mc-template-syntax-macros.php#mc.get.macros "10.2.2. get and getexternal Macros") | gets personalized content from a file |
| [[%= getexternal("*`url`*") %]](mc-template-syntax-macros.php#mc.get.macros "10.2.2. get and getexternal Macros") | gets content from a URL |
| [[%= getexternal("file://*`path_to_file`*") %]](mc-template-syntax-macros.php#mc.get.macros "10.2.2. get and getexternal Macros") | gets content from a file |
| [[%= LINK("*`linkid`*", *`occurrence`*, "*`url`*", "*`name`*", "*`type`*", *`groupid`*, *`accept`*) %]](mc-template-syntax-macros.php#mc.link.macros "10.2.3. LINK and ULINK Macros") | creates a personalized tracked link |
| [[%= ULINK("*`linkid`*", "*`wwwbase`*", "*`data_for_webui`*") %]](mc-template-syntax-macros.php#mc.link.macros "10.2.3. LINK and ULINK Macros") | creates a tracked link |
| [[%= RFC2047(*`expr`*) %]](mc-template-syntax-macros.php#mc.mime.macros "10.2.4. MIME Header Encoding Macro") | apply the default MIME header encoding to *`expr`* |
| [[%= RFC2047(*`expr`*, *`encname`*) %]](mc-template-syntax-macros.php#mc.mime.macros "10.2.4. MIME Header Encoding Macro") | apply the *`encname`* MIME header encoding to *`expr`* |
| [[%= RFC2047(:*`userinfokey`*) %]](mc-template-syntax-macros.php#mc.mime.macros "10.2.4. MIME Header Encoding Macro") | apply the default MIME header encoding to the :*`userinfokey`* placeholder |
| [[%= RFC2047(:*`userinfokey`*, *`encname`*) %]](mc-template-syntax-macros.php#mc.mime.macros "10.2.4. MIME Header Encoding Macro") | apply the *`encname`* MIME header encoding to the :*`userinfokey`* placeholder |
| [[%= UNSUBGROUP(*`groupid`*, "*`prompt`*") %]](mc-template-syntax-macros.php#mc.unsub.macros "10.2.5. Unsubscribe Macros") | create a link to unsubscribe from a group |
| [[%= UNSUBTAG(*`tagid`*, "*`prompt`*") %]](mc-template-syntax-macros.php#mc.unsub.macros "10.2.5. Unsubscribe Macros") | create a link to unsubscribe from a tag |
| [[%= VIEWINBROWSER("*`label`*") %]](mc-template-syntax-macros.php#mc.view.in.browser.macro "10.2.6. "View in Browser" Link Macro") | create a link |
| [[%= VIEWINBROWSER("*`label`*", "*`url`*") %]](mc-template-syntax-macros.php#mc.view.in.browser.macro "10.2.6. "View in Browser" Link Macro") | create a link specifying an URL |

### 10.2.1. Perl Escape Macro

The Perl macro allows you to insert a Perl expression into a template, allowing you to programmatically customize templates and create more dynamic content.

Syntax:

[%= *`expr`* %]

*   *`expr`* is a Perl expression. *`expr`* is evaluated as a string, and the result is substituted for the macro in the template.

Example 1:

`[%= 1 + 2 %]`

When example 1 is evaluated, the result is `3`.

You can use the bracket syntax without the equals sign to escape from the template language syntax into regular Perl syntax. When in Perl syntax, the template's generated output is represented by the `$rv` variable. To append output to the template, append it to `$rv`.

Example 2:

`Hello [% $rv .= "There"; %]`

When example 2 is evaluated, it expands to `Hello There`, which is then substituted for the macro in the template.

### Warning

`$rv` is the internal variable that Message Central uses to hold the entire contents of the template during generation. You **must** append values to this variable rather than simply assigning values to it. If you use the assignment operator, the template will be truncated and the entire mailing may fail.

If you run into validation errors when using the Perl escape, check your Perl syntax. A common mistake is to omit the semicolon from the end of *each* statement.

### Note

**Prior to version 3.6** , each Perl escape was treated as a separate code environment. For example, when creating content in source code mode, if you defined a variable at the top of your code in one Perl escape, you could not later reference it in a different Perl escape.

### 10.2.2. get and getexternal Macros

The **get** and **getexternal** macros retrieve information from an external data source, such as a URL or a file. When the template is compiled, Message Central requests information from the server specified by *`url`* or file://*`path_to_file`* and interprets the information returned as HTML; the HTML content from the external source is substituted for the macro in the template. This request is performed once per generator run.

The **getexternal** macro does not support personalized content for recipients; use the **get** macro to do this. The **get** macro does not support link tracking, and can cause performance to suffer.

Syntax:

[%= get("*`url`*") %]

[%= get("file://*`path_to_file`*") %]

[%= getexternal(*`"url`*") %]

[%= getexternal("file://*`full/path/to/file`*") %]

*   *`url`* is the full URL to the external content you want to import data from. You must enclose the URL in quotation marks (`"`).

*   *`full/path/to/file`* is the full path to a file you want to import data from. You must start the path with `file://`, and enclose the entire string in quotation marks. You must also have sufficent rights to access the file. If you wish to get an external image file, use the `img` tag rather than this macro.

### Warning

Using a recursive reference to the same URL in the **get** or **getexternal** macros is not supported.

Example:

`[%= getexternal("http://example.com/numbers/") %]`

The page specified is retrieved and substituted for the macro in the template.

### 10.2.3. LINK and ULINK Macros

There are two macros you can use for link tracking: **LINK** and **ULINK**. The **LINK** macro allows you to use personalization; the **ULINK** macro allows you to use an alternate base URL.

Any links created with the **LINK** and **ULINK** macros are collected on the Link Tracking tab of the web UI. Links in the text-only portion of the content are shown in the Links in Text Part list, and have the word "`TEXT`" appended to the URL name. See the section [Content Link Tracking](https://support.messagesystems.com/docs/web-mc-user/mc3-content-link-tracking.php) in the *User Guide for Message Central 3.x Web UI*                                      for further information.

**10.2.3.1. LINK**

The **LINK** macro expands to a tracked link URL. You can user personalization with the **LINK** macro.

Syntax:

[%= LINK('*`linkid`*', *`occurrence`*, '*`url`*', '*`name`*', '*`type`*', *`groupid`*, *`accept`*) %]

*   *`linkid`* must be a link ID that has already been created. You must enclose the link ID in single quote marks (`'`).

*   *`occurrence`* is an occurrence number that can be used to distinguish the location of *`linkid`* within the page.

*   *`url`* is the link to track. You must enclose the URL in single quote marks (`'`).

*   *`name`* is the name of the link. You must enclose the name in single quote marks (`'`).

*   *`type`* is the type of link. You must enclose the type in quotation marks (`'`).

    ### Note

    The type name is case sensitive.

*   *`groupid`* is the group ID of the link.

*   *`accept`* is used in the web UI only. It is set to true (1) when *`url`* exists and is valid. The accept field is in the backend database, but the backend does not care about its value.

You can use personalization fields inside a **LINK** macro. A personalization field can be specified inside curly braces, as shown in the example.

Example:

`<a href='[%= LINK('2', 0, 'http://example.com/?email={emailaddress}', 'email', 'Tracking', 0, 0) %]'>Send email</a>`

This example expands to `<a href='http://example.com/t/AQ/Aw/AQ/AQ/Ag/AQ/FHyl'>Send email</a>`, which encodes a tracking link to `http://example.com/?email=sender@example.com`.

**10.2.3.2. ULINK**

The **ULINK** macro allows you to specify an alternate base URL.

Syntax:

[%= ULINK("*`linkid`*", "*`wwwbase`*", "*`data_for_webui`*") %]

*   *`linkid`* is the link ID of the alternate base URL. You must enclose the link ID in quotation marks (`"`).

*   *`wwwbase`* is the base URL. You must enclose the URL in quotation marks (`"`).

*   *`data_for_webui`* is optional data to be tracked in the web UI. You must enclose the data in quotation marks (`"`).

    Omit this parameter if you do not want to use it.

Example:

`<a href='[%= ULINK("1", "http://example.com", "Alternate") %]'>Home</a>`

This example expands to `<a href='http://example.com/t/AQ/AA/AA/AQ/AA/AQ/AA/HO8G'>Home</a>`, which creates a link with the text `Home`, and sends the data "Alternate" to the web UI.

### 10.2.4. MIME Header Encoding Macro

The **RFC2047** macro applies MIME header encoding. This macro is designed for use in the header only. It cannot be used in the body of an email.

### Warning

When specifying character encoding, any string within the RFC 2047 macro must be within the character encoding range of the specified encoding. If there is a mismatch, unknown characters usually display as ‘`?`’ when previewing messages.

We do not support using commas within custom headers since the comma is used as a delimiter.

If you use these macros with unencoded text, extra whitespace appears. For example `"Hi [%= RFC2047(:firstname,iso-2022-jp) %][%= rfc2047(:lastname) %] Recip"` results in two spaces following `Hi` and two spaces preceding `Recip`. As a workaround, do not mix macros with unencoded text. Rewrite the preceding example as:

```
[%= RFC2047(Hi ) %][%= RFC2047(:firstname,iso-2022-jp) %][%= rfc2047(:lastname) %]»
[%= RFC2047(Recip) %]
```

*Note*: The ‘`»`’ character is used above because lengthy lines are truncated in some forms of the documentation. (See [Section 1, “Typographical Conventions Used in This Document”](preface.php#typographical "1. Typographical Conventions Used in This Document").) There should be no space between `[%= rfc2047(:lastname) %]` and `[%= RFC2047(Recip) %]`.

Syntax:

[%= RFC2047(*`expr`*) %]

[%= RFC2047(*`expr, encname`*         ) %]

[%= RFC2047(:*`userinfokey, encname`*         ) %]

[%= RFC2047(:*`userinfokey`*) %]

*   Parameter one is a string; it can be either a string (*`expr`*) or a placeholder (:*`userinfokey`*). The macro evaluates the string and applies a MIME header encoding to the result.

*   *`encname`* is an encoding name, such as UTF-8\. This parameter is optional; the default encoding is UTF-8.

    ### Note

    Message Systems strongly recommends that you use UTF-8 encoding.

Example 1:

`[%= RFC2047("3 for \302\2431") %]`

### Note

`\302\2431` is the octal code for the pound sign (`£`).

The string in example 1, encoded as ASCII, expands to `=?utf-8?B?IjMgZm9yIMKjMSI=?=`, which is equivalent to `"3 for £1"`.

Example 2:

`[%= RFC2047(:fullname, utf-8) %]`

Example 2 will encode `:fullname` with the UTF-8 encoding.

### 10.2.5. Unsubscribe Macros

The unsubscribe macros generate a link that, when clicked, will unsubscribe the recipient from the specified group or tag.

Syntax:

[%= UNSUBGROUP(*`groupid`*, "*`prompt`*") %]

[%= UNSUBTAG(*`tagid`*, "*`prompt`*") %]

*   *`groupid`* is the ID of an existing group.

*   *`tagid`* is the ID of an existing tag.

*   *`prompt`* is the text for the link. You must enclose the string in quotation marks (`"`).

Example 1:

`[%= UNSUBGROUP(1, "Unsubscribe from the user group") %]`

Example 1 expands to `<a href="http://example.com/RR/AQ/AA/AA/AQ/AA/AA/AQ/SM4e">"Unsubscribe from the user group"/a>`, which creates a link with the text `Unsubscribe from the user group`.

Example 2:

`[%= UNSUBTAG(1, "Unsubscribe from the favorites list") %]`

Example 2 expands to `<a href="http://example.com/R/AQ/AA/AA/AQ/AA/AA/AQ/SM4e">Unsubscribe from the favorites list 1</a>`, which creates a link with the text `Unsubscribe from the favorites list`.

### 10.2.6. "View in Browser" Link Macro

The **VIEWINBROWSER** macro creates link that will take the user to a web-hosted version of the HTML (or plain text) portion of the mailing. Clicking on the link records a click against an internal view-in-browser link as well as an open event.

If an URL is passed to the **VIEWINBROWSER** macro, it creates a link using that URL that will take the user to a web-hosted version of the HTML (or plain text) portion of the mailing.

Syntax:

[%= VIEWINBROWSER("*`label`*") %]

[%= VIEWINBROWSER("*`label`*", *`url`*) %]

*   *`label`* is the text of the link to create. You must enclose the string in quotation marks (`"`).

    ### Note

    If you do not specify a *`url`* parameter, in the event that the content cannot be rendered (for example, if the mailing and/or recipient have been archived), the user will see a message informing them that their content is no longer available.

*   *`url`* is the URL you want to redirect the user to in the event that the content cannot be rendered (for example, if the mailing was archived). This parameter is optional; omit it if you do not want to specify an URL.

Example 1:

`[%= VIEWINBROWSER("Click here if you can't see the message") %]`

Example 1 expands to `http://example.com/v/AQ/AA/AA/AQ/AA/AA/AA/wABx`, which creates a link to a web-hosted version of the content.

Example 2:

`[%= VIEWINBROWSER("Click here if you can't see the message", http://example.com/) %]`

Example 2 expands to `<a href="http://example.com/v/AQ/AA/AA/AQ/AA/AA/AA/wABx">Click here if you can't see the message</a>`, which creates a link with the text `Click here if you can't see the message` pointing to the specified URL, where the content will be hosted.

| [Prev](mc-template-syntax.php)  | [Up](mc-template-syntax.php) |  [Next](enhanced.dynamic.content.php) |
| Chapter 10. Template Syntax  | [Table of Contents](index.php) |  Chapter 11. Enhanced Dynamic Content |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)