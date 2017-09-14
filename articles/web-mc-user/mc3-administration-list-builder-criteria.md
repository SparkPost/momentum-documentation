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

| 11.8. List Builder Criteria |
| [Prev](mc3-administration-link-types.php)  | Chapter 11. Administration |  [Next](mc3-administration-process-manager.php) |

## 11.8. List Builder Criteria

The List Builder Criteria page determines which fields will show up in the criteria list boxes used when adding a criterion to a list. (See, for example, [Figure 6.6, “Simple list”](mc3-recipients-lists.php#figure-simple-list "Figure 6.6. Simple list").)

To view existing list builder criteria fields, choose the LIST BUILDER CRITERIA menu option from the ADMIN menu.

When no filters are applied, you should see all the fields related to recipients, historical data, profile fields, tags and any relations that you have created.

### Note

Historical data fields are only available when you are creating a list for recipient targeting. These fields cannot be used for segmentation and do not display if a list is being used for content segmentation. See [Section 6.2.1, “Adding a new List”](mc3-recipients-lists.php#mc3-recipients-adding-lists "6.2.1. Adding a new List").

You can add to this page by clicking the ADD CRITERIA button. You should see something similar to the following:

<a name="figure-add-criteria"></a>

**Figure 11.16. Add criteria**

![Add criteria](images/add_criteria.jpg)

To add a field as a criterion, simply select the desired object. You can also select the operators that are associated with an object. This lets you remove unnecessary operators.

For a complete list of operators see [Figure 11.9, “Numeric operators”](mc3-administration-relations.php#figure-relations-operators "Figure 11.9. Numeric operators") and following. Not all operators are valid in all circumstances. For example, the `Exactly X days ahead` operator doesn't make sense used with the `lastname` field.

### Note

The `Less than X days ahead` operator includes dates in the past and `More than X days ago` includes dates in the future.

| [Prev](mc3-administration-link-types.php)  | [Up](mc3-administration.php) |  [Next](mc3-administration-process-manager.php) |
| 11.7. Link Types  | [Table of Contents](index.php) |  11.9. Process Manager |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)