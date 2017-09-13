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

| 25.10. link |
| [Prev](rest.autogen.struct.dict.vctx.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.list.php) |

## 25.10. link

The link object is used by Message Central when you want to track clicks on links.

*   **linkid** – The unique identifier for this link.

    This property is a key field. Its data type is `int`.

*   **url** – The target URL.

    This property is not a key field. Its data type is `string`.

*   **name** – The descriptive name of the link.

    This property is not a key field. Its data type is `string`.

*   **type** – The type of the link. The system pre-defines the following: 'Tracking', 'Ignore', 'Unsubscribe', 'Open',

    This property is not a key field. Its data type is `string`. The default value for this property is `Tracking`.

*   **group** – The link group. defaults to 'default'.

    This property is not a key field. Its data type is `map`. The default value for this property is `0`.

    For a description of this mapping see [Section 26.5, “linkgroups”](rest.autogen.map.linkgroups.php "26.5. linkgroups").

*   **refresh** – The link refresh option. defaults to 'false'. Currently the click tracker caches the linkid => URL mapping in a SQLite database. This is done for performance reasons so that data for the Link does not have to be fetched every time from the database If the Link parameters such as URL is modified then the refresh parameter can be set to 'true' so as to indicate to the the click tracker process that the link was updated and if click tracker process has a entry corresponding to this link in its cache it may need to update the cache.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `false`.

| [Prev](rest.autogen.struct.dict.vctx.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.list.php) |
| 25.9. dict:vctx  | [Table of Contents](index.php) |  25.11. list |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)