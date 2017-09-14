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

| 7.2. Editing New Content |
| [Prev](mc3-content.php)  | Chapter 7. Content |  [Next](mc3-content-source-mode.php) |

## 7.2. Editing New Content

To manipulate existing content, click the content row that you wish to edit. If you are creating new content, you should see something similar to the following:

<a name="figure-edit-content"></a>

**Figure 7.3. Editing content**

![Edit content](images/edit_content.jpg)

The TO text box defaults to the macro, `[%= :prettyTo %]`. At run time this macro will be replaced by the recipient address. For more information about macros see ["Macros"](https://support.messagesystems.com/docs/web-mc/mc-template-syntax.php).

If your mailing is an immediate mailing you may wish to manually edit the TO and the FROM text boxes. If you do this, please ensure that you use ASCII text in these text boxes and that you do not leave the TO address blank.

Click the up arrow button to toggle the `REPLY-TO` line and the Add Header link.

### 7.2.1. Adding a Custom Header

Click the up arrow button on the left to toggle the `REPLY-TO` line and the Add Header link. Click the Add Header link to add a custom header to your mailing. You should see something similar to the following.

<a name="figure-custom-header"></a>

**Figure 7.4. Custom header**

![Custom header](images/custom_header.jpg)

Enter the desired custom header in the text box. Any number of custom headers may added by clicking the Add Header link. Use the x button to remove any existing custom

When setting headers, any non-ASCII content will be subject to RFC2047 MIME header encoding, and stored as UTF-8 encoded text.

### Warning

Prior to version 3.1 the Add Header link allowed you to change the content type and the mime-version assigned by Message Central. Do *not* change these values. These headers are maintained by Message Central, and changing them can lead to unexpected results.

As of version 3.1, Message Central manages these headers on your behalf.

### 7.2.2. Creating an Email Body

When creating the body of an email, you can choose to create the email body in design mode, source mode or text mode. Use the TEXT button for text email content. The SOURCE button is for users who are comfortable creating an HTML email by hand coding it and the DESIGN button is a WYSIWYG HTML editor.

### Note

In certain circumstances, you may experience difficulties editing the body of an email using Internet Explorer 8\. The cursor may act unpredictably when using the folowing keys:

*   delete

*   enter

*   space

This is a known bug when using textareas in IE 8.

**7.2.2.1. Using the Content Editor**

The Message Central content editor is a WYSIWYG HTML editor. This editor comes equipped with standard tools for setting such things as the font family and the font size.

### Warning

Currently you cannot use open or closed parentheses in email content. As a workaround use the HTML entity, `&#40;` for a ‘`(`’ and `&#41;` for a ‘`)`’.

Likewise, you must use the HTML entity, `&#64;` for the ‘`@`’ sign. You cannot use ‘`@`’ in either a hardcoded link or within an anchor tag in source code mode.

You can also justify text and bold or underline it. Mousing over a tool reveals a hint that describes a tool's functionality. Some tools are only active depending upon the location of the cursor or when text is selected.

Adding and removing links is discussed separately in [Section 7.2.5, “Adding a Link”](mc3-content-editing.php#mc3-content-adding-link "7.2.5. Adding a Link").

### Warning

Switching from HTML mode to design mode opens an alert box warning that hand-coded HTML markup may be altered. **This also applies to custom Perl code.**                                   Do not switch modes if you wish to preserve HTML markup or Perl code exactly as you have entered it.

**7.2.2.2. Personalization and Tools**

Click PERSONALIZATION to drop down a list box of database fields that can be inserted into the email body. You may choose from any field in the recipient table or any relational or aggregate field that you have created. (Relational fields are described in [Section 11.5, “Relational Data”](mc3-administration-relations.php "11.5. Relational Data")). You can delete a personalization field by mousing over it and clicking the x button.

### Note

If you intend to use an aggregate field in a macro see [Section 11.5.2.1, “Creating Aggregate Fields”](mc3-administration-relations.php#mc3-administration-relations-aggregate-field "11.5.2.1. Creating Aggregate Fields").

If you wish, you can click personalization fields and enter default values. This is particularly useful if there are records where this field is an empty string.

The TOOLS drop-down list box is used to insert the following objects:

*   Image – Insert an image.

*   Content Container – Insert a text block. This is useful for inserting text blocks and protecting them from change if necessary. For more detail see [Section 7.2.3, “The Content Container Tool”](mc3-content-editing.php#mc3-content-container-tool "7.2.3. The Content Container Tool").

*   Conditional Content – Add conditional content, personalizing it if desired. For more detail see [Section 7.2.4, “Conditional Content”](mc3-content-editing.php#mc3-content-conditional "7.2.4. Conditional Content").

*   External Content – Add external content. At runtime the generator gets the specified URL and interprets it as HTML. .

*   View in Browser – Use this tool to insert clickable text of your choosing, an URL for example. These clicks are trackable.

*   Unsubscribe From Tag Text – Use this tool to remove a preference. When adding untag text you must select a tag for removal and enter a text description. See the LIST TAGS menu for a list of all available tags.

*   Unsubscribe Text – Unsubscribe message and link.

### 7.2.3. The Content Container Tool

In version 3.3, the Content Container tool replaces the text block and protected text tools.

To add a text block, choose the Content Container tool from the TOOLS list box. This inserts "Content Container" into the body of the email. Clicking Content Container opens a pop-up version of the editor. Enter the desired text and close the pop-up editor when you are finished.

You can protect a text block by checking the Make this a protected content block check box. In this way you can avoid accidentally changing text. This check box only appears when you are creating a *template*. Protecting text does not make sense when you are creating blank content.

In source code mode, the content container is as follows:

```
[% # === Content Container Start -- please do not edit below this line === %]
  content goes here
  [% # === Content Container End -- please do not edit above this line === %]
```

### 7.2.4. Conditional Content

You can open the conditional content editor from design mode, by choosing Conditional Content from the Tools list box. This displays Conditional Content Container in the body of the email. Clicking this label opens the conditional content editor.

### Note

When using Internet Explorer 9 you may need to click this label a number of times before the conditional content editor appears.

As of version 3.3, you can check for specific values for any personalization field and adjust content accordingly.

To add conditional content follow these steps:

1.  Create your `if` statement. In the example [Figure 7.5, “Dynamic personalized content”](mc3-content-editing.php#figure-dynamic-personalize-content "Figure 7.5. Dynamic personalized content") below, the email domain is tested against `yahoo.com`.

2.  In the body of the editor, enter the text that should display when the `if` condition is met.

3.  If desired, click the Add Condition link. Note that the text associated with the `if` statement is no longer visible.

4.  Specify the `else if` condition.

5.  Enter the text that should display when the `else if` condition is met.

6.  Repeat steps 3, 4 and 5 as needed.

7.  Enter text for the `otherwise` case.

8.  Apply your changes.

<a name="figure-dynamic-personalize-content"></a>

**Figure 7.5. Dynamic personalized content**

![Dynamic personalized content](images/personalize_content.jpg)

All the fields that can be used to personalize content appear in the list box. For a complete list see [Appendix A, *Fields Used in Conditional Content*](mc3-content-conditional-fields.php "Appendix A. Fields Used in Conditional Content") .

To edit the text associated with a condition, click on the "eye" symbol to the left of a condition. To remove a condition mouse over the condition and click the x.

### Note

Do not forget to enter text for the `otherwise` case and be sure to apply your changes when finished.

You can also protect a text block by checking the Make this a protected content block check box. In this way you can avoid accidentally changing text. This check box only appears when you are creating a *template*. Protecting text does not make sense when you are creating blank content.

Only non-template versions of content can be protected. Checking this box will still allow changes to the contents of each condition when editing a template. Furthermore, protection is only effective in design mode, as users can change whatever they like when in source mode.

It is also possible to personalize content for different *segments* of a mailing. To do this choose `Segment` from the list box of the `if` or `else` statement and identify the desired segment. Only existing segments are shown. To create a segment see [Section 6.2, “Lists/Segments”](mc3-recipients-lists.php "6.2. Lists/Segments").

In source code mode you can also use default values with personalized content. For information about personalizing content in source code mode see ["Enhanced Dynamic Content in Version 3.3"](https://support.messagesystems.com/docs/web-mc/enhanced.dynamic.content.php).

### Note

You cannot use a targeting list as a segment in conditional content—historical data such as "opened mailing" is not available. As a workaround you can create a new segment (as described at [Section 6.2, “Lists/Segments”](mc3-recipients-lists.php "6.2. Lists/Segments")) using the desired criteria. You can then use this segment in conditional content.

For example, suppose you created a mailing on Monday to all recipients in an Org and wish, later in the week, to send a mailing to recipients who have not opened Monday's mailing. In this case the segment would identify all recipients where Monday's mailing is unopened.

### 7.2.5. Adding a Link

You can add links to an email by using the link icon on the left side of the HTML editor control panel. To enable this icon you must first select text or an image.

<a name="figure-add-link"></a>

**Figure 7.6. Adding a link**

![Adding a link](images/add_link.jpg)

Enter the URL for your link. You can also choose a target type and the text for the title of the anchor.

### Note

In order for links to work reliably, they should be fully formed URLs beginning with `http://` as shown in [Figure 7.6, “Adding a link”](mc3-content-editing.php#figure-add-link "Figure 7.6. Adding a link").

You must always use valid HTML in source code mode. For example, if you are creating a link you cannot use a bare ‘`&`’; you must use the character entity, `&amp;`.

You can remove a link from an email by selecting it and choosing the remove link icon from the content editor tools.

### Note

When editing links in source code mode, it is often easier to delete the entire tag and retype the URL. This ensures that the system re-encodes the new link and correctly generates the internal ID it needs for tracking purposes. Always verify changes by saving the content, and reviewing the link in the LINK TRACKING tab.

For users that use the API to create content and find it easier not to delete the entire macro, be sure to edit the Link ID by changing it to `N0`. The application will automatically create a valid internal ID when the content is resaved. For example, given the link `<a href="[%= LINK("125", 1, "www.yahoo.com/?={firstname}", " Google ", "Tracking", 0, 0) %]" > Yahoo </a>`, change `125` to `N0`.

### 7.2.6. Converting HTML to Text

Content created in source or design mode can easily be converted to text. Click the TEXT button on the editor tool bar and a GET TEXT button appears as shown below:

<a name="figure-convert-text"></a>

**Figure 7.7. Converting HTML to text**

![Converting HTML to text](images/convert_to_text.jpg)

### Note

The GET TEXT button will not appear if there is no HTML to convert.

By pressing the GET TEXT button, the existing text content is replaced, converting the current HTML to text. During conversion extra whitespace is removed and a best effort is made at preserving the spacing that HTML would have provided. The text is not styled in any way.

The rules for conversion are as follows:

*   Image tags are removed.

*   Personalized or conditional content is retained.

*   All HTML and CSS tags are removed.

*   URLs referenced in the HREF attribute remain, with the text between the anchor tags displayed first followed by the text in the HREF attribute.

*   The first time you view the generated text, all URLs are displayed as links (for example, `http://example.com`). Each time you view the text after that, all URLs are displayed as **LINK** macros (for example, `[%= LINK('101', 1, 'http://example.com', 'example.com TEXT', 'Tracking', 0, 0) %]`), and the string `TEXT` is added to the name parameter.

*   If the content contains any of the following macros: `UNSUBGROUP(…), UNSUBTAG(…), UNSUBSCRIBE(…), VIEWINBROWSER(…)` or `:unsubscribe`, the content is converted to text. These macros will detect the context of the output and if it is a text context then they will return text without any HTML and convert any HTML entities to the appropriate UTF-8 character. If the context of the output is HTML, the macros function as currently documented.

*   If the macro `UNSUBGROUP(tagid,prompt)` is expanded then the text returned will be in the format "prompt url" and the URL will be a valid encoded URL.

*   If the macro `UNSUBTAG(tagid,prompt)` is expanded then the text returned will be in the format "prompt url" and the URL will be a valid encoded URL.

*   If the macro `UNSUBSCRIBE(prompt)` is expanded then the text returned will be in the format "prompt url" and the URL will be a valid encoded URL.

*   If the macro `VIEWINBROWSER(prompt)` or `VIEWINBROWSER(prompt,url)` is expanded then the text returned will be in the format "prompt url" and the URL will be a valid encoded URL. If an URL is specified in the second parameter of the macro, it will behave as currently documented and provide a redirect if the content cannot be rendered.

*   If the macro `:unsubscribe` is expanded then the text returned will be in the format "unsubscribe url" and the URL will be a valid encoded URL.

*   If the HTML is converted to text then the HTML entities will be converted to the appropriate UTF-8 characters.

*   If the user has embedded Perl code and the Perl code contains HTML then the content is converted to text mode and any HTML in the embedded Perl code will remain in the text version.

### Note

HTML content created through the REST API must be manually converted to text.

| [Prev](mc3-content.php)  | [Up](mc3-content.php) |  [Next](mc3-content-source-mode.php) |
| Chapter 7. Content  | [Table of Contents](index.php) |  7.3. Using SOURCE Mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)