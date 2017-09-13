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

| Chapter 3. Versioning |
| [Prev](rest.accessing.ssl.php)  |   |  [Next](rest.response.codes.php) |

## Chapter 3. Versioning

To allow for flexibility as Message Central 3.x expands, the REST API uses an explicit versioning scheme that includes an API version number in the URL.

When expanding an API, we will first try to do so in such a way that new features are enabled via optional parameters to the existing set of API functions. If that is not possible to do without altering the semantics of the API then we will create a new API function, either with a different name, or with the same name but a different version number.

For example, if at some point we decided to change the default properties of a newly created mailing, we will create a `v2.0/mailing` REST endpoint with that new behavior, and ensure that the `v1.0/mailing` endpoint continues to have the original behavior. Eventually, we will want to retire obsolete API endpoints. If we decide that we’re going to do this, we will publish a deprecation notice as part of a newer release and will include the date at which the obsolete API will be removed as part of the release and reference documentation. The product releases following that date will not include the obsolete API; any intervening releases will continue to support the API/feature, but the expectation is that you will need to migrate your integration code to the newer APIs before you upgrade past the point where it is removed. Except in relatively rare circumstances (such as removal of a feature that was not widely used), we will always provide a supported feature-equivalent alternative API or set of APIs as part of this deprecation process, along with some information on adapting your integration. We can also offer Professional Services support to work through such a migration.

<a name="table.rest.api"></a>

**Table 3.1. REST API**

| Supported Versions | URL |
| --- | --- |
| v1.0 | http://api.mc.messagesystems.com/v1.0/ |
| v3.5 | http://api.mc.messagesystems.com/v3.5/ |
| v3.7 | http://api.mc.messagesystems.com/v3.7/ |

The API version number is a component of the URL that is used to access the API. For example, the URL `http://api.mc.messagesystems.com/v1.0/` would point to the root of the API v1.0.

| [Prev](rest.accessing.ssl.php)  |   |  [Next](rest.response.codes.php) |
| 2.3. Accessing with SSL  | [Table of Contents](index.php) |  Chapter 4. Common HTTP Status/Response Codes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)