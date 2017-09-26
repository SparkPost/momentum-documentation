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

| Chapter 12. Recipients |
| [Prev](rest.triggered.mailing.php)  |   |  [Next](rest.recipients.email.php) |

## Chapter 12. Recipients

**Table of Contents**

<dl class="toc">

<dt>[12.1\. Updating Recipients](rest.recipients.overview.php#rest.recipients.update)</dt>

<dt>[12.2\. The `email` Field](rest.recipients.email.php)</dt>

</dl>

When adding or editing recipients you must use camel case for the following fields:

*   domainName

*   localPart

*   firstName

*   lastName

*   birthDate

*   postalCode

*   countryCode

*   languageCode

*   contentType

*   createdDate

*   modifiedDate

The recipient API call returns these fields as camel case as shown in the following example:

shell> curl -u 'admin:admin' 'http://*`rest_server`*/v1.0/recipient?orgid=1&rid=4'
```
{
   "status":  "subscribed",
   "city":  "Nashville",
   "createdDate":  "2011-02-22T17:  00:  33Z",
   "languageCode":  null,
   "contentType":  "text/html",
   "countryCode":  "US",
   "firstName":  "Billy",
   "domainName":  "myplace.com",
   "phone2":  "",
   "lastName":  null,
   "address2":  "",
   "phone1":  "",
   "birthDate":  null,
   "modifiedDate":  "2011-02-22T17:  30:  40Z",
   "gender":  "M",
   "postalCode":  "",
   "region":  "TN",
   "rid":  4,
   "localPart":  "billy",
   "email":  "billy@myplace.com",
   "address1":  ""
}
```

## Recipient Object Definition

For details of the Recipient structure see [Section 25.20, “recipient”](rest.autogen.struct.recipient.php "25.20. recipient").

### Note

There is no API to delete recipients nor can you perform this action through the web UI. If you wish to remove a recipient from all mailings, change that recipient's status to `unsubscribed`.

The following APIs are used to work with recipients. `rid` in the parameter list corresponds to the recipient id.

*   `GET /v1.0/recipient?orgid=2`

    This API returns an array of short Recipient objects. Responds with a 404 error if the recipient does not exist.

*   `GET /v1.0/recipient?orgid=2&rid=1`

    This API returns a short Recipient object describing the specified recipient.

    ### Note

    As an alternative to `rid`, you may look up a recipient using the email address associated with the recipient. If multiple recipients share the same email address, the return value will be an array of matching recipients.

*   `GET /v1.0/recipient?orgid=2&rid=1&full=true`

    This API returns a fully populated Recipient object describing the specified recipient.

    You may also use the email as noted above.

*   `PUT /v1.0/recipient?orgid=2`

*   `POST /v1.0/recipient?orgid=2`

    Creates a new recipient object, or if the `rid` is specified, updates an existing recipient. This API returns the recipient ID on success and issues an error on failure.

**Configuration Change. ** As of version 3.6, records with illegal email addresses will not be imported and an error message will be output.

## 12.1. Updating Recipients

When updating a recipient, if the modifiedDate in what you PUT or POST does not match the value on the server side, your PUT or POST will fail with the message `409 Conflict` giving the response `modifiedDate: null`. When using PUT or POST with the recipient API, if modifiedDate is not present, the API will try to create a new recipient. This is true for all objects that have a modifiedDate field.

Note that you must include the email address as well as the recipient ID if you wish to do an update. See also [Section 12.2, “The `email` Field”](rest.recipients.email.php "12.2. The email Field").

The easiest way to update an existing recipient is to use the read-modify-write sequence described in [Example 7.1, “REST read-modify-write example”](rest.input.parameters.php#rest.post.put.read "Example 7.1. REST read-modify-write example").

| [Prev](rest.triggered.mailing.php)  |   |  [Next](rest.recipients.email.php) |
| Chapter 11. Triggered Mailings  | [Table of Contents](index.php) |  12.2. The `email` Field |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)