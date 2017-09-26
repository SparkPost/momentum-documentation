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

| 7.3. Using SOURCE Mode |
| [Prev](mc3-content-editing.php)  | Chapter 7. Content |  [Next](mc3-content-previewing.php) |

## 7.3. Using SOURCE Mode

When creating the body of an email, you can choose to create the email body in design mode, source mode or text mode. Use the TEXT button for text email content. The SOURCE button is for users who are comfortable creating an HTML email by hand coding it and the DESIGN button is a WYSIWYG HTML editor.

Take care when creating content in source code mode, especially in the following circumstances:

*   Prior to version 3.3, be sure to close the `<body>` tag correctly. If the `</body>` tag is not present, the tracking pixel will not be included in the mailing.

*   You must always use valid HTML in source code mode. For example, if you are creating a link in source code mode and that link includes a query string, you cannot use a bare ‘`&`’; you must use the character entity, `&amp;`.

### Note

In source code mode you can also use default values with personalized content. For information about personalizing content in source code mode see ["Enhanced Dynamic Content in Version 3.3"](https://support.messagesystems.com/docs/web-mc/enhanced.dynamic.content.php).

As of version 3.6, you can view content in source code mode after a mailing has completed.

### 7.3.1. Using Raw Perl in Content

You may use raw Perl in the body of email content. When you attempt to save such content the syntax of your code is checked.

If you attempt to save content that includes syntax errors, an error message appears at the top of the page. Click `ERROR DETAILS` to display your error. You should see something similar to the following:

```
There is a syntax error in the PERL used to compose this content.
  Your content has not been saved.
  Error Details »

  syntax error at (eval 168) line 42, near ""There"
  $rv "
```

A Perl variable cannot just be added to the content the way a personalization field can (see [Section 7.3.2, “Creating Personalized Links”](mc3-content-source-mode.php#mc3-content-adding-personalized-link "7.3.2. Creating Personalized Links")). You must append it to the `$rv` variable using proper Perl syntax as shown below.

```
[%

my $name = 'Will';

%]

<p>Hello [% $rv .= $name; %]</p>
```

The `$rv` variable is described in "[Perl Escape Macro](https://support.messagesystems.com/docs/web-mc/mc-template-syntax-macros.php#mc.perl.expr.macro)".

### Warning

You will not be able to save your content until the syntax is correct. If you navigate away from the page before correcting syntax you will lose your work.

Do not include comments when escaping to Perl. This may result in blank content.

Each Perl escape is treated as a separate code environment. For example, when creating content in source code mode, if you define a variable in a Perl escape at the beginning of your content, you cannot later reference it in another Perl escape within that content.

When using Perl do not embed a `</body>` tag directly into Perl but rather, concatenate two strings to form the tag. For example, do **not** write the following code:

```
$rv .= '<html><body><p>' . "This is a sample of " . $myvar .
'</p></body></html>';
```

Add the `<body>` tag to your source code outside of the raw Perl. For example:

```
<html>
  <body>
[%
$rv .= '<p>This is a sample of ' . $myvar . '</p>';
%]
  </body>
</html>
```

### 7.3.2. Creating Personalized Links

In design mode you can create personalized links by adding a link as described in [Section 7.2.5, “Adding a Link”](mc3-content-editing.php#mc3-content-adding-link "7.2.5. Adding a Link") and specifying database fields as part of the Link URL. For example, you can enter the following as an URL: `http://www.google.com/search?q={firstname}+{lastname}`. (Note: In this example, the ‘`+`’ character represents the space character.)

In source code mode you can add personalized links in the following way: `<a href="http://www.google.com/search?q={firstname}+{lastname}">Find yourself</a>` However, only fields directly returned from the database are usable in this fashion, not calculated values such as `{currentdate_mm_dd_yyyy}`. For this reason, links such as `http://search.yahoo.com/search?q={currentdate_mm_dd_yyyy}` are not a supported use case.

If you create a link in source code mode and then switch to design mode, your original input will change. For example, the link given in the preceding paragraph will become: `<a target="_blank" href="[%= LINK('102', 1, 'http://www.google.com/search?q={firstname}+{lastname}', 'Find yourself', 'Tracking', 0, 0) %]">Find yourself</a>`.

When you switch to text mode, the first time you view the generated text, all URLs are displayed as links (for example, `http://example.com`). Each time you view the text after that, all URLs are displayed as **LINK** macros (for example, `[%= LINK('101', 1, 'http://example.com', 'example.com TEXT', 'Tracking', 0, 0) %]`), and the string `TEXT` is added to the name parameter.

### 7.3.3. Personalized Links Using the `LINK` Macro

The **LINK** macro allows you to use personalization. Any links created with the **LINK** macro are collected on the Link Tracking tab of the web UI.

As of version 3.7, links in the text-only portion of the content are shown in the Links in Text Part list, and have the word "`TEXT`" appended to the URL name. See the section [Section 7.5, “Content Link Tracking”](mc3-content-link-tracking.php "7.5. Content Link Tracking") for further information.

The **LINK** macro expands to a tracked link URL.

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

### 7.3.4. Custom Source Code Mode Headers

The RFC2047 macro is intended for use in headers. The following example encodes a header using the default encoding, ASCII.

```
[% if ($userinfo->{'homedomain'} eq "mine") { %]
  [%= RFC2047("bounces@mydomain.com") %]
[% }else { %]
  [%= RFC2047("bounces@yourdomain.com") %]
[% }%]
```

You can also change the encoding by using the macro `[%= RFC2047(:userinfokey, encname) %]`. The second parameter defines the ecoding type. We strongly recommend using `utf-8` for the encoding parameter.

### Warning

When using this macro and specifying the character encoding, any string used in the macro must be within the character encoding range of the specified encoding. If there is a mismatch, unknown characters usually display as ‘`?`’ when previewing messages.

We do not support using commas within custom headers since the comma is used as a delimiter.

For more information see "[Macros](https://support.messagesystems.com/docs/web-mc/mc-template-syntax-macros.php#rfc2047.2)".

| [Prev](mc3-content-editing.php)  | [Up](mc3-content.php) |  [Next](mc3-content-previewing.php) |
| 7.2. Editing New Content  | [Table of Contents](index.php) |  7.4. Previewing Content |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)