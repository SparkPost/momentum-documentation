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

| 7.7. Query Restrictions |
| [Prev](rest.conventions.php)  | Chapter 7. Using the API |  [Next](rest.orgs.object.php) |

## 7.7. Query Restrictions

All object enumeration APIs accept the following parameters to modify which subset of the total data is returned.

*   `limit`

    Specifies the maximum number of objects that will be returned. The default is `20`. You may specify `limit=all` to return all possible objects, but we discourage this practice, as it can place the system under high load. Instead, we recommend the use of the offset parameter to implement pagination.

*   `offset`

    Specifies an offset into the set of objects. The default is `0`, meaning that the first limit objects will be returned. If it is set to `10`, then objects 10 through 10 + limit will be returned.

*   `orderBy`

    Specifies that the objects be ordered by the specified property name, ascending. `orderBy=name` will order the data alphabetically by name.

*   `whereColName` and `whereColValue`

    When used together, allows the returned data to be filtered to include only objects where a specified property is equal to a specified value. `whereColName=name&whereColValue=lemon` will return only objects with a name property equal to `lemon`.

*   `extraWhereClause`

    Can be used to construct more advanced filtering syntax. Use of this parameter requires knowledge of the underlying database schema. At this time, we do not guarantee API stability of the database schema, meaning that we may opt to change it as we see fit, with no guarantees of backwards compatibility. As such, integrations that use this parameter will need to be reviewed and tested prior to rolling out new releases of Message Central 3.x, to ensure that they will continue to function.

*   `includeArchived`

    When set to true, the set of returned objects will include those that have been marked as archived. When omitted, or set to false (the default), such objects will be excluded from the returned data.

| [Prev](rest.conventions.php)  | [Up](rest.using.php) |  [Next](rest.orgs.object.php) |
| 7.6. General Conventions  | [Table of Contents](index.php) |  Chapter 8. Orgs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)