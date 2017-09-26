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

| Chapter 14. List |
| [Prev](rest.ProfileField.php)  |   |  [Next](rest.ListTag.php) |

## Chapter 14. List

Message Central 3.x uses List objects to manage query criteria both for targeting recipients and for segmentation. The list objects exposed via the REST API contain two (possibly three) representations of the criteria. For targeting purposes, the List object holds a SQL `where` clause. For segmentation purposes, it also contains a Perl expression. The Message Central 3.x web UI also stores a third representation, which is a structured data object from which it is able to create the SQL and Perl representations.

The web UI representation is not supported as an API at this time, so it should be considered opaque and immutable. If you use the API to change a List that was created by the web UI, then you must clear the `webUIData` property of the object as part of that change, and change the class to `api`.

If your List object references historical, behavioral information as part of its targeting criteria, it will not be compatible with segmentation (which does not have that information available when it is evaluated). In that case, the `perl` property should be set to null.

## List Object Definition

For details of the List object see [Section 25.11, “list”](rest.autogen.struct.list.php "25.11. list")

Find below the List APIs:

*   `GET /v1.0/list?orgid=2`

    Enumerate lists in the system.

    This API returns an array of List objects based on the List object specified in [Section 25.11, “list”](rest.autogen.struct.list.php "25.11. list").

*   `GET /v1.0/list?orgid=2&lid=23`

    Return a list object based on its list ID.

*   `GET /v1.0/list?orgid=2&name=mylist`

    Return a list object based on its name.

*   `DELETE /v1.0/list?orgid=2&lid=23`

    Delete a list based on its list id

*   `POST /v1.0/list?orgid=2&lid=23`

    `PUT /v1.0/list?orgid=2&lid=23`

    Update (or create if the `lid` is omitted) a List.

## Updating a List

When updating a list, if the modifiedDate in what you PUT or POST does not match the value on the server side, your PUT or POST will fail with the message `409 Conflict` giving the response `modifiedDate: null`. When using PUT or POST with the list API, if modifiedDate is not present, the API will try to create a new mailing. This is true for all objects that have a modifiedDate field.

The easiest way to update an existing list is to use the read-modify-write sequence described in [Example 7.1, “REST read-modify-write example”](rest.input.parameters.php#rest.post.put.read "Example 7.1. REST read-modify-write example").

| [Prev](rest.ProfileField.php)  |   |  [Next](rest.ListTag.php) |
| Chapter 13. ProfileField  | [Table of Contents](index.php) |  Chapter 15. ListTag |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)