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

| Chapter 17. Assets |
| [Prev](rest.content.overview.php)  |   |  [Next](rest.links.php) |

## Chapter 17. Assets

The Assets API allows enumeration and creation of assets in the Message Central system.

For details of the Asset object see [Section 25.1, “assets”](rest.autogen.structs.php#rest.autogen.struct.assets "25.1. assets").

## Supported Actions

*   The following actions are supported when issuing a GET request:

    `GET /v1.0/assets?orgid=2`

    Enumerates all the defined asset objects in the system. This API returns an array of "short" asset objects based on the specified query restrictions.

    `GET /v1.0/assets?orgid=2&aid=123`

    This API returns the short asset object identified by ID 123. If no such asset exists, a 404 status will be returned.

    `GET /v1.0/assets?orgid=2&aid=123&full=true`

    This API returns the full asset object identified by ID 123. The full asset object includes the "binary" property of the assets. If no such assets exists, a 404 status will be returned.

*   The following actions are supported when issuing a POST or PUT request.

    There is no API to update or delete an Asset. Attempts to do so throw an exception.

    `PUT /v1.0/assets?orgid=2`

    Creates a new Asset object, returns its asset id(aid), url on success (status 200), if the attempt fails, an error is issued.

    The PUT/POST payload is expected to be a valid Asset object, either as a JSON payload or as HTML-form style parameters.

    Alternatively, you may PUT/POST with a Content-Type: image/png with the entire image data in the body to create the Asset You may set non-asset related parameters such as the name via 'GET' parameters in the URI:

    ```
    POST /v1.0/assets?orgid=2&name=newasset
    Content-Type: image/png

    ....DATA....
    ```

| [Prev](rest.content.overview.php)  |   |  [Next](rest.links.php) |
| Chapter 16. Content  | [Table of Contents](index.php) |  Chapter 18. Links |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)