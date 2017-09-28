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

| Chapter 4. Common HTTP Status/Response Codes |
| [Prev](rest.versioning.php)  |   |  [Next](rest.authentication.php) |

## Chapter 4. Common HTTP Status/Response Codes

The common HTTP status or response codes are as follows:

`200 Success`

The request was successful.

`201 Created (Success)`

The request was successful. The requested object/resource was created.

`204 Updated (Success)`

The request was successful. The requested object/resource was updated.

`400 Invalid Request`

There are many possible causes for this error, but this commonly indicates a problem with the structure or content of the XML that your application provided. Carefully review your XML. One simple test approach is to perform a GET on a URI and use the GET response as an input to a PUT for the same resource. With minor modifications, the input can be used for a POST as well.

`401 Unauthorized`

This is an authentication problem. The primary reason is that the API call has either not provided a valid API Key, Account Owner Name and Associated Password or the API call attempted to access a resource (URI) which does not match the Account Owner provided in the login credentials.

`404 URL Not Found`

The URI which was provided was incorrect. Compare the URI you provided with the documented URIs.

`409 Conflict`

There is a problem with the action you are trying to perform. Commonly, you are trying to "Create" (POST) a resource which already exists. In general, if a resource already exists, an application can "Update" the resource with a "PUT" request for that resource.

`415 Unsupported Media Type`

The Media Type (Content Type) of the data you are sending does not match the expected Content Type for the specific action you are performing on the specific Resource you are acting on. Often this is due to an error in the content type you define for your HTTP invocation (GET, PUT, POST). You will also get this error message if you are invoking a method (PUT, POST, DELETE) which is not supported for the Resource (URI) you are referencing.

To understand which methods are supported for each resource, and which content type is expected, see the documentation for that resource. For more information see [Chapter 25, *REST Structs*](rest.autogen.structs.php "Chapter 25. REST Structs") .

`500 Server Error`

There are many possible causes for this error. The problem may be with the API itself, but most commonly there is a problem with the structure or content of XML your application provided. Carefully review your XML and the URL you are using.

| [Prev](rest.versioning.php)  |   |  [Next](rest.authentication.php) |
| Chapter 3. Versioning  | [Table of Contents](index.php) |  Chapter 5. Authentication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)