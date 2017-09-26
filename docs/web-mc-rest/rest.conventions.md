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

| 7.6. General Conventions |
| [Prev](rest.response.formats.php)  | Chapter 7. Using the API |  [Next](rest.query.restrictions.php) |

## 7.6. General Conventions

*   All data must be passed in encoded as UTF-8

*   All data will be returned encoded as UTF-8

*   All date time values are encoded per ISO-8601, and are in UTC

*   Except where noted, all operations are scoped to a particular Organization, and thus all REST API calls require that the `orgid` parameter be passed in.

*   POST/PUT actions that create a new object will return the object ID unless otherwise noted

*   POST/PUT actions that create new objects as a batch will return an array of object IDs unless otherwise noted

*   GET operations that enumerate objects accept query-restriction parameters, as listed in [Section 7.7, “Query Restrictions”](rest.query.restrictions.php "7.7. Query Restrictions").

*   Some objects have fields that are defined as being available only when the "full" version of the object is requested. The reason for short versus full representations is that the short form logically maps to a unique row in a database table, whereas the full representation is populated by collecting additional information from one or more joined table rows. When POST/PUT requests are made using the short form of the object, the properties defined by the full form are considered to be unchanged, rather than deleted from the object.

*   In some cases, returned data may include additional fields that are used by the server to aid in change resolution. These fields are not documented here and can be ignored by the application programmer, provided that they are preserved in the payload that is sent back to the server in a read-modify-write sequence.

*   Some objects include a `modifiedDate` property that indicates when the object was last changed. This is used to detect and reject conflicting changes made via the API. If someone has changed the object since you started working with your copy, the server side `modifiedDate` will not match the one you PUT to the server. These conflicts will cause a POST/PUT to fail with a "409 Conflict" HTTP response.

Documentation of the various object structures is done using JavaScript notation; the object structure is expressed as a JavaScript object with comments interspersed. While this is valid for JavaScript, it is a superset of the supported JSON format and feeding in the object complete with comments will result in an error.

| [Prev](rest.response.formats.php)  | [Up](rest.using.php) |  [Next](rest.query.restrictions.php) |
| 7.5. Response Formats  | [Table of Contents](index.php) |  7.7. Query Restrictions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)