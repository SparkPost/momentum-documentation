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

| Chapter 16. Content |
| [Prev](rest.ListTag.php)  |   |  [Next](rest.Assests.php) |

## Chapter 16. Content

Content objects represent message content. Content in Message Central 3.x is defined as a MIME encoded email with provisions for executing logic according to the syntax explained in [Template Syntax](https://support.messagesystems.com/docs/web-mc/mc-template-syntax.php).

The Content API exposes a Content object representing the MIME structure of the message.

The Content object can also be returned (or set) using its raw format as a complete MIME encoded email text.

When content is created through the web UI, 'opens' are tracked automatically. When adding content via the REST API you must track opens manually by using the `trackerimage` macro. This macro is defined as follows: `[%= :trackerimage %]` and will be replaced by the open-tracking image. It will render invisibly in an HTML portion of an email message.

Links created through the REST API are also *not* tracked automatically. To track links use the link macro (see [Macros](https://support.messagesystems.com/docs/web-mc/mc-template-syntax-macros.php#link)). Links can be created using the Links API documented at [Chapter 18, *Links*](rest.links.php "Chapter 18. Links").

Perl escapes work in the REST API. For more information see [Perl Escape Macro](https://support.messagesystems.com/docs/web-mc/mc-template-syntax-macros.php#mc.perl.expr.macro).

For details of the Content object definition see [Section 25.5, “content”](rest.autogen.struct.content.php "25.5. content").

Calls to the Content API may be issued in the following ways:

*   `GET /v1.0/content?orgid=2`

    Enumerate Content objects.

    This API returns an array of short Content objects based on the Content object specified in [Section 25.5, “content”](rest.autogen.struct.content.php "25.5. content").

*   `GET /v1.0/content?orgid=2&cid=123`

    This API returns a short Content object based on the specified content id.

*   `GET /v1.0/content?orgid=2&name=mycontent`

    This API returns a short Content object based on the specified content name.

*   `GET /v1.0/content?orgid=2&cid=123&full=true`

    This API returns a full Content object based on the specified content id (or name). Note that full Content objects do not include the binary portion of any attachments.

*   `GET /v1.0/content?orgid=2&cid=123&binary=true`

    This API returns a full Content object based on the specified content id (or name), including the binary portion of any attachments.

*   `GET /v1.0/content.eml?orgid=2&cid=123`

*   `GET /v1.0/content?orgid=2&cid=123&format=eml`

    This API returns the content as a MIME email message.

*   `GET /v1.0/content/attach?orgid=2&cid=123&aid=1`

    This API returns the specified attachment as raw binary.

    Unlike the binary property in the Content object, when the attachment is retrieved via this method, it is returned in the HTTP response using a Content-Type equal to the type property of the attachment and the payload is set to the fully decoded and extracted binary representation of the attachment data. In this example, `aid` is the attachment id.

    For an image attachment, this could potentially be used inside an HTML `img` tag, although this suggestion is made solely for the purpose of illustrating how the data is returned. It is an expensive operation to extract the attachment data, so it is strongly advised that this method be used only when needed and not be used in scenarios where it is frequently requested.

*   **Configuration Change. ** This feature is available as of version 3.3.

    `GET v1.0/content?orgid=1&cid=1&full=true&parseMacroHTML=true&parseMacroText=true`

    When the `parseMacroHTML` parameter is set to `true` **and** the full object is requested, this API returns the parsed JSON macro in the macroHTMLJson element of the Content object.

    When the parseMacroText parameter is set to true and the full object is requested, this API parses the text portion of the content and returns the parsed JSON macro data in the macroTextJson element of the Content object.

    Sample output of HTML content that uses the `getexternal` macro is shown below:

    ```
    <response>
        <name>MyContent</name>
        <cid>1</cid>
        <description/>
        <isMaster>false</isMaster>
        <metaData>
          <mode>design</mode>
          <useDesignMode>true</useDesignMode>
        </metaData>
        <usedInMailing>false</usedInMailing>
        <createdDate>2011-02-11T16:53:24Z</createdDate>
        <modifiedDate>2011-02-11T18:57:24Z</modifiedDate>
        <spamscore>7.525</spamscore>
        <headers>
          <item>To: [%= :prettyTo %]</item>
          <item>From: </item>
          <item>Subject: </item>
          <item>Reply-to: </item>
        </headers>
        <text>

        </text>
        <html><p>[%= getexternal("http://example.com") %]</p>
        </html>
        <macroHTMLJson>
          [
            "<p>",
              {"arg2":false,"arg1":"http://example.com","show_type":"retrieve_value","type":"getexternal"},
            "</p>\r\n"
          ]
        </macroHTMLJson>
      </response>
    ```

*   `PUT /v1.0/content?orgid=2&cid=123`

    `POST /v1.0/content?orgid=2&cid=123`

    Update (or create if `cid` is omitted) a Content object. Updates the specified content. This API returns cid on success (status 200) or issues an error on failure.

    ### Note

    RFC822 content created using this API is only visible in the web UI if you post it as binary data. For example, when using curl, supply the --data-binary switch.

    When using this API, you may choose to add attachments by expanding the attachment array. If you do so, you should omit the "id" property of the attachment so that the server will realize that an entry is new. You also have the option of passing in the attachment data as a base64 encoded string, or omitting it and using one of the following API calls to set the attachment out of band.

    `PUT /v1.0/content/attach?orgid=2&cid=123&aid=1`

    `POST /v1.0/content/attach?orgid=2&cid=123&aid=1`

    Update (or create if `aid` is omitted) an attachment.

    The Content-Type set in the HTTP request will set the "type" property of the attachment, and the MIME specific headers present in the HTTP request will be used to interpret and decode the content payload and set the "headers" property of the attachment.

    ```
    PUT /v1.0/content/attach?orgid=2&cid=123
    Content-Type: text/plain Content-Disposition: inline; filename="hello.txt"

    Hello world!
    ```

    This API call results in the following attachment being added:

    ```
    {
        "binary": "Hello world!",
        "headers": [
            "Content-Disposition: inline; filename=\"hello.txt\""
        ],
        "type": "text/plain",
        "cid": 1
    }
    ```

    Create new content in the following way:

    ```
    PUT /v1.0/content?orgid=1 HTTP/1.0
    Content-Type: application/json

    {
        "headers": [
            "X-From: john@mysite.com",
            "item-From: john@mysite.com"
        ],
        "isMaster": false,
        "html": "<html>....</html>",
        "name": "Content01Test01",
        "description": "Testing of the Content"
    }
    ```

    ### Note

    The REST API doesn't support setting headers via POST parameters; to set headers use a JSON payload as shown above.

*   `DELETE /v1.0/content/attach?orgid=2&cid=123&aid=1`

    Delete the specified attachment

*   `DELETE /v1.0/content?orgid=2&cid=123`

    Delete the specified content

## SMS Content in Version 3.7

As of version 3.7 of the API you can send SMS content via Message Central 3.x. To do this you must set the content `sms` field. For more information about this field see [Section 25.6, “content 3.7”](rest.autogen.struct.content3.7.php "25.6. content 3.7") and [Section 25.4, “content.sms 3.7”](rest.autogen.struct.content.sms3.7.php "25.4. content.sms 3.7").

To send SMS content you must also define the `smsContact` field of recipients. This field is used for an E.164 compliant phone number. You must also set the boolean field, `smsSubscribed`.

Sending SMS content also requires the creation of MCMT content. For a description of this content type see [The MCMT Format](https://support.messagesystems.com/docs/web-mob-dev/mobility.mcmt.injection.php).

## Updating Content

When updating content, if the modifiedDate in what you PUT or POST does not match the value on the server side, your PUT or POST will fail with the message `409 Conflict` giving the response `modifiedDate: null`. When using PUT or POST with the content API, if modifiedDate is not present, the API will try to create a new mailing. This is true for all objects that have a modifiedDate field.

The easiest way to update existing content is to use the read-modify-write sequence described in [Example 7.1, “REST read-modify-write example”](rest.input.parameters.php#rest.post.put.read "Example 7.1. REST read-modify-write example").

| [Prev](rest.ListTag.php)  |   |  [Next](rest.Assests.php) |
| Chapter 15. ListTag  | [Table of Contents](index.php) |  Chapter 17. Assets |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)