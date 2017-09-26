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

| Contentv37 |
| [Prev](rest.version37.php)  | Chapter 24. Changes in Version 3.7 |  [Next](rest.Content_Archivev37.php) |

<a name="rest.Contentv37"></a>
## Name

Contentv37 — Content objects represent message content

<a name="idp912656"></a>
## Description

**API Enhancement. ** This feature is available as of version 3.7.

Content objects represent message content.

Content in Message Central 3.7 is defined as a MIME encoded email or MCMT with provision for executing logic according to the syntax explained in [Template Files](https://support.messagesystems.com/docs/web-rest-injector/rest.sample.templates.php). The Content API exposes a Content object representing the MIME structure of the message. The [Content](rest.content.overview.php "Chapter 16. Content") object can also be returned (or set) using its raw format as a complete MIME encoded email or MCMT text.

### Note

As of version 3.7, Content now has an `sms` field. See [Section 25.6, “content 3.7”](rest.autogen.struct.content3.7.php "25.6. content 3.7") and [Section 25.4, “content.sms 3.7”](rest.autogen.struct.content.sms3.7.php "25.4. content.sms 3.7"). When the `sms` key is present, the API generates a MCMT-compatible message.

## Supported Actions

*   The following actions are supported when issuing a GET request:

    `GET /v3.7/content?orgid=2`

    This API enumerates Content objects and returns an array of "short" Content objects based on the specified query restrictions.

    In addition to the base query restriction parameters, you may specify `masterOnly="true"` to return only "master" content, or `masterOnly="false"` to return only non-master content. If `masterOnly` is omitted, both master and non-master content are returned.

    `GET /v3.7/content?orgid=2&cid=123`

    This API returns the short content object identified by ID 123\. If no such content exists, a 404 status will be returned.

    `GET /v3.7/content?orgid=2&cid=123&full=true`

    This API returns the full content object identified by ID 123\. The full content object does not include the `binary` property of attachments. If no such content exists, a 404 status will be returned.

    `GET /v3.7/content?orgid=2&cid=123&binary=true`

    This API returns the full content object identified by ID 123\. The content object includes the `binary` property of attachments. If no such content exists, a 404 status will be returned.

    ```
    GET /v3.7/content.eml?orgid=2&cid=123

    GET /v3.7/content?orgid=2&cid=123&format=eml
    ```

    If the format parameter is set to `eml`, or if the suffix for the endpoint is `eml`, a GET by cid or name will return the content as `message/rfc822`, formatted as a MIME compliant message. The MIME message will be returned in the body portion of the HTTP response:

    ```
    HTTP/1.0 200 OK
    Content-Type: message/rfc822
    Content-Disposition: inline; filename="content-123.eml"

    Content-Type: multipart/alternative
    From: sender@example.com
    To: <%= PrettyTo %>
    MIME-Version: 1.0

    ...
    ```

*   The following actions are supported when issuing a POST or PUT request.

    ### Note

    RFC822 content created using this API is only visible in the web UI if you post it as binary data. For example, when using curl, supply the `--data-binary` switch.

    When using this API, you may choose to add attachments by expanding the attachment array. If you do so, you should omit the `id` property of the attachment that you add so that the API server will realize that it is a new entry.

    `PUT /v3.7/content?orgid=2&cid=123`

    This API updates the specified content. On success (status 200) it returns the content id and issues an error if it fails.

    `PUT /v3.7/content?orgid=2`

    This API creates new content and on success returns its content id (status 200). On failure an error is returned.

    The PUT/POST payload is expected to be a valid Content object, either as JSON payload or as HTML-form style parameters.

    Alternatively, you may PUT/POST with a Content-Type:message/rfc822 or multipart/vnd.msys.mcmt with the entire template content in the body to create or modify the content. You may set non-content related parameters such as `name`, `isMaster` and `status` via 'GET' parameters in the URI:

    ```
    POST /v3.7/content?orgid=2&name=new+content
    Content-Type: message/rfc822

    MIME-Version: 1.0
    From: sender@example.com
    To: <%= :PrettyTo %>

    ...
    ```

    This form of update/creation uses the least server side resources, but puts the burden of creating the MIME structure on the client.

*   The following actions are supported when issuing a DELETE request.

    `DELETE /v3.7/content?orgid=2&cid=123`

    In order to delete a piece of content, you may issue the above DELETE request.

| [Prev](rest.version37.php)  | [Up](rest.version37.php) |  [Next](rest.Content_Archivev37.php) |
| Chapter 24. Changes in Version 3.7  | [Table of Contents](index.php) |  Content_Archivev37 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)