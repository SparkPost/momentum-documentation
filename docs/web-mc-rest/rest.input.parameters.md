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

| 7.4. Input Parameters |
| [Prev](rest.curl.php)  | Chapter 7. Using the API |  [Next](rest.response.formats.php) |

## 7.4. Input Parameters

### 7.4.1. GET and DELETE requests

The parameters are passed as GET parameters in the URL. For example:

`GET /v1.0/recipient?orgid=2`

Additional parameters are passed in by separating them with ampersands, as is usual for HTTP:

`GET /v1.0/recipient?orgid=2&limit=20`

Additional parameters are defined in [Section 7.7, “Query Restrictions”](rest.query.restrictions.php "7.7. Query Restrictions"). The values must be URL encoded.

### 7.4.2. POST and PUT Requests

There are two main styles that can be used for passing in input data. The first is using HTML Form compatible encoding:

```
POST /v1.0/mailing
Content-Type: application/x-www-form-urlencoded

orgid=2&type=api-triggered&name=Example+Mailing
```

In this scheme, to reference a nested property, such as `mailing.sample.period`, the parameter name "sample.period" would be used. The www-form-urlencoded scheme does not support passing in array style data.

The second style is passing in the data encoded in [JSON](http://json.org/), which allows richly structured data to be passed:

```
POST /v1.0/mailing?orgid=2
Content-Type: application/json

{type:"api-triggered",name:"Example Mailing",}
```

Note that this passes the `orgid` as a GET parameter. This is required for objects that do not include the `orgid` parameter as part of their definition.

The latter form is especially useful in a read-modify-write sequence when combined with the JSON response format. An example using cURL follows:

<a name="rest.post.put.read"></a>

**Example 7.1. REST read-modify-write example**

shell> curl -s -S -u "*`username:password`*" "http://*`rest_server`*/v1.0/recipient?orgid=1&rid=2" \
 -X GET > recipient_2.json
shell> vi recipient_2.json
shell> curl -s -S -u "*`username:password`*" "http://*`rest_server`*/v1.0/recipient?orgid=1" \
 -X POST -H 'Content-type: application/json' -d @recipient_2.json

In [Example 7.1, “REST read-modify-write example”](rest.input.parameters.php#rest.post.put.read "Example 7.1. REST read-modify-write example") a GET request specifying a specific recipient ID is written to file. That file is then edited and POSTed back to the REST server in order to update a recipient record.

### Note

POST expects data without enclosing square brackets.

If the modifiedDate in what you PUT or POST does not match the value on the server side, your PUT or POST will fail with a `409 Conflict` giving the response `modifiedDate: null`. When using PUT or POST with the mailing API, if modifiedDate is not present, the API will try to create a new mailing.

Note that you must also include the email address as well as the recipient ID if you wish to update a recipient record.

| [Prev](rest.curl.php)  | [Up](rest.using.php) |  [Next](rest.response.formats.php) |
| 7.3. cURL as a Testing Tool  | [Table of Contents](index.php) |  7.5. Response Formats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)