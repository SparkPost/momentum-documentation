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

| Appendix A. Fields Used in Conditional Content |
| [Prev](mc3-glossary.php)  |   |  [Next](mc3-export-data.php) |

## Fields Used in Conditional Content

This appendix provides a listing of the data fields that can be used in conditional content.

The following list shows database fields followed by the name used in the list box of field names in the web UI.

*   contactid – Contact ID

*   firstname – First Name

*   lastname – Last Name

*   fullname – Full Name

*   domain – Email Domain

*   localpart – Email Localpart

*   emailaddress – Email Address

*   birthdate – Birthdate

*   gender – Gender

*   address1 – Address Line 1

*   address2 – Address Line 2

*   city – City

*   region – Region

*   postalcode – Postal Code

*   countrycode – Country Code

*   phone1 – Phone 1

*   phone2 – Phone 2

*   languagecode – Language Code

Any relational data fields including:

*   xd_contactdetails_address1

*   xd_contactdetails_address2

*   xd_contactdetails_birthdate

*   xd_contactdetails_city

*   xd_contactdetails_contactid

*   xd_contactdetails_contenttypeid

*   xd_contactdetails_countrycode

*   xd_contactdetails_createddate

*   xd_contactdetails_firstname

*   xd_contactdetails_gender

*   xd_contactdetails_languagecode

*   xd_contactdetails_lastname

*   xd_contactdetails_modifieddate

*   xd_contactdetails_phone1

*   xd_contactdetails_phone2

*   xd_contactdetails_postalcode

*   xd_contactdetails_region

*   xd_contacts_contactid

*   xd_contacts_domainid

*   xd_contacts_localpart

*   xd_contacts_statusid

You may also use any profile data fields that have been added. Use the format pd_*`number`* format when in source code mode.

You can also use the profile::*`fieldname`* format for a profile field name. For example `profile::shoesize` would refer to a profile field with the name `shoesize`.

| [Prev](mc3-glossary.php)  |   |  [Next](mc3-export-data.php) |
| Glossary  | [Table of Contents](index.php) |  Appendix B. Exporting Data from MySQL to PostgreSQL |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)