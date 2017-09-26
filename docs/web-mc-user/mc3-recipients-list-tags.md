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

| 6.4. List Tags |
| [Prev](mc3-recipients-importing.php)  | Chapter 6. Recipients |  [Next](mc3-administration-profile-fields.php) |

## 6.4. List Tags

List tags are used to identify related recipients and are often referred to as preference groups. Navigate to the list tags page by choosing the LIST TAGS menu. Doing this displays all the list tags that have been created.

Clicking a List Tag name, opens the RECIPIENTS page showing the recipients associated with a list.

If you import a list through the web UI or by using the import script, a tag such as `Import List (admin) 11283945286` is automatically created and associated with the recipients in the list. When importing through the web UI you can change the name of this tag to something more readily identifiable.

To create a new tag, click the NEW TAG button and assign the tag a name.

<a name="figure-list-tags"></a>

**Figure 6.10. List tags**

![List tags](images/list_tags.jpg)

You cannot have duplicate tag names.

Check the Use in list builder check box if you want the tag to be available for list building. If you do not check this box, you can add the tag at a later date as described in [Section 11.8, “List Builder Criteria”](mc3-administration-list-builder-criteria.php "11.8. List Builder Criteria"). The new tag should appear in the Tags text box when editing recipients.

To associate a tag with a recipient, select it when updating a recipient. Tags that are associated with a recipient, appear against a grey background. If you wish to select multiple contiguous tags, press the **shift** key while clicking tags. For non-contiguous tags, use the **control** key. (On a Mac use the **command** key.)

| [Prev](mc3-recipients-importing.php)  | [Up](mc3-recipients.php) |  [Next](mc3-administration-profile-fields.php) |
| 6.3. Import Lists  | [Table of Contents](index.php) |  6.5. Profile Fields |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)