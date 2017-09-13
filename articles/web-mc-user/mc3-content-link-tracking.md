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

| 7.5. Content Link Tracking |
| [Prev](mc3-content-previewing.php)  | Chapter 7. Content |  [Next](mc3-content-attachments.php) |

## 7.5. Content Link Tracking

Use the LINK TRACKING tab to manipulate any links that appear in your content. If you have links in your content, you should see them listed as shown in the following image.

<a name="figure-link-tracking"></a>

**Figure 7.9. Link tracking**

![Link tracking](images/link_tracking_v3.jpg)

As of version 3.7, links in the HTML portion of your content appear in the Links in HTML Part section, and links from the text portion are in the Links in Text Part section. Links from the text portion have the word `TEXT` in the title, to help differentiate them from their HTML link counterparts.

Links appear in the order they appear within the content from left to right, top to bottom.

Change the type or the group of the link by checking the check box to the left of the link and using the drop-down list boxes. If there are no other link types besides "Tracking" then the list box under the "Type" column shown in [Figure 7.9, “Link tracking”](mc3-content-link-tracking.php#figure-link-tracking "Figure 7.9. Link tracking") does not appear.

Link groups and link types are added from the Administration menu. For more information see [Section 11.6, “Link Groups”](mc3-administration-link-groups.php "11.6. Link Groups") and [Section 11.7, “Link Types”](mc3-administration-link-types.php "11.7. Link Types").

### Note

Prior to version 3.3, if you created content with the same link in more than one place, these links were treated as the same link for tracking purposes. This posed a problem if you wished to track different instances of the same link. For example, if you had a link at the top of your email and the same link at the bottom.

If you are not using Message Central 3.3, as a workaround you can add redundant data to the URL by adding a nonexistent target or a meaningless query string. For example, the URLs `http://example.com`, `http://example.com#1` and `http://example.com?1` can be tracked as different links. However, be warned that some sites will try to parse the query string, or might be confused by the anchors so this is not foolproof and would need testing for target links.

| [Prev](mc3-content-previewing.php)  | [Up](mc3-content.php) |  [Next](mc3-content-attachments.php) |
| 7.4. Previewing Content  | [Table of Contents](index.php) |  7.6. Content Attachments |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)