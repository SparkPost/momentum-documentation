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

| 6.5. Profile Fields |
| [Prev](mc3-recipients-list-tags.php)  | Chapter 6. Recipients |  [Next](mc3-content.php) |

## 6.5. Profile Fields

In addition to the predefined recipient fields, you can also create customized data fields. To do this click the PROFILE FIELDS link. You should see something similar to the picture shown below:

<a name="figure-profile-fields"></a>

**Figure 6.11. Creating customized data fields**

![Creating customized data fields](images/profile_fields.jpg)

Any existing profile fields are displayed. To edit a field, click the appropriate row. To delete a field click the check box beside the field and then click the DELETE button. You can select all fields by clicking the check box beside the DELETE button.

Click the CREATE NEW button to add a profile field. Add the field name and choose the data type from the drop-down list box. The data types are `Numeric`, `Short Text` or `Date and Time`.

If you choose a profile data field name that already exists, an error message is displayed. Names are case insensitive so you cannot, for example, have fields named `soccer` and `Soccer`.

### Note

The numeric data type is returned as a floating point number. For example, if you add a profile field named `customerno` and then add a new recipient giving a value of `123` to this field, it will be returned as `123.0000`. If this is not the desired result, use the `Short Text` data type instead.

For example, you may wish to create a profile field called `Political_Affiliation` that identifies a recipient's political affiliation. In this case, you would enter `Political_Affiliation` in the field name text box and choose `Short Text` for the data type. Press the SUBMIT button to create the profile field.

Profile fields appear on the recipient page so when adding or editing recipients you can enter data for profile fields as desired.

If you are bulk loading recipients as described in [Section 6.3, “Import Lists”](mc3-recipients-importing.php "6.3. Import Lists"), and your CSV file contains customized fields, you need to create profile fields before importing data.

### Warning

The system allows you to use spaces when creating profile fields. This is **not** recommended. If you do this you will not be able to change the data type of the field and you will need to url encode profile fields used in query strings.

Also, if you plan to return data in `XML` format from the REST API you cannot use spaces in the names of profile fields.

So that there is no ambiguity regarding the email address field you cannot create a profile field called `emailaddress, EmailAddress, EMAILADDRESS, email, eMail, eMAIL` or `EMAIL`.

| [Prev](mc3-recipients-list-tags.php)  | [Up](mc3-recipients.php) |  [Next](mc3-content.php) |
| 6.4. List Tags  | [Table of Contents](index.php) |  Chapter 7. Content |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)