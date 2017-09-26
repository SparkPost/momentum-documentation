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

| Chapter 18. Links |
| [Prev](rest.Assests.php)  |   |  [Next](rest.reporting.php) |

## Chapter 18. Links

To record end user clicks, Message Central 3.x replaces the hyperlinks within an email with an internally defined Link object. The Link object makes it possible to track clicks by first sending users to the click/asset tracking server(s), recording the click and then redirecting the user to the target URL. A link record is used to store the original URL of the hyperlink and to define a unique ID for it.

For details of the Link object see [Section 25.10, “link”](rest.autogen.struct.link.php "25.10. link").

Find the Link APIs below:

*   `GET /v1.0/link?orgid=2`

    Enumerate the links defined by the system. This API returns an array of Link objects. This array may be ordered, formatted or limited as described in [Section 7.7, “Query Restrictions”](rest.query.restrictions.php "7.7. Query Restrictions").

*   `GET /v1.0/link?orgid=2&linkid=123`

    This API returns the specified link based on its id

*   `PUT /v1.0/link?orgid=2&linkid=123`

    `POST /v1.0/link?orgid=2&linkid=123`

    Update (or create if linkid is omitted) a Link object. The PUT/POST payload is expected to be a valid Link object, either as a JSON payload or as HTML-form style parameters.

*   It is not possible to DELETE Links. Links do not have change-conflict detection; in the event that conflicting changes are made, the most recent change will be the one that takes effect, and a 409 response will NOT be issued.

You can create a link with all fields populated. In the following way. Assume a data file `data/link_sample_1`:

```
{
  "url": "www.google.com/map",
  "type": "Tracking",
  "group": "default",
  "name": "New Link 2"
}
```

You can create a Link in the following way:

```
shell>  curl -s -S -u "admin:admin_pass" "http://rest_node/v1.0/link?orgid=1" -X POST -H \
  'Content-type: application/json' -d @data/link_sample_1
```

## Changing an URL After Delivery

As of version 3.5, it is possible to change a destination URL after a message has already left the system. This is helpful if there is an expired offer at an original destination and recipients need to be redirected to a different page. It’s also important if a typo in the URL is discovered after the message has already been sent.

Update a Link using the read-modify-write sequence described in [Example 7.1, “REST read-modify-write example”](rest.input.parameters.php#rest.post.put.read "Example 7.1. REST read-modify-write example"). However, in addition to changing the URL, you must also set the `refresh` field to `true`. Find below, an example of a JSON Link object with `refresh` set to `false`:

```
{
  "linkid": 106,
  "url": "http:\/\/www.nytimes.com",
  "name": "Link to CNN",
  "type": "Tracking",
  "group": "default",
  "refresh": false
}
```

## Updating Links

You can update links using the read-modify-write sequence described in [Example 7.1, “REST read-modify-write example”](rest.input.parameters.php#rest.post.put.read "Example 7.1. REST read-modify-write example").

When a Link is updated through the REST API it resets the cache entries of all mailings that may be using that link. This does not apply to links that are personalized. Personalized links have encoding in the URL and cannot be modified. For a description of personalized links see [Creating Personalized Links](https://support.messagesystems.com/docs/web-mc-user/mc3-content-source-mode.php#mc3-content-adding-personalized-link).

### Warning

Updating a link by altering the database does not reset the link cache. For this reason use the REST API to update links.

| [Prev](rest.Assests.php)  |   |  [Next](rest.reporting.php) |
| Chapter 17. Assets  | [Table of Contents](index.php) |  Chapter 19. Reports |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)