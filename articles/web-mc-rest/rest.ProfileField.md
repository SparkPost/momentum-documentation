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

| Chapter 13. ProfileField |
| [Prev](rest.recipients.email.php)  |   |  [Next](rest.list.object.php) |

## Chapter 13. ProfileField

Use the profilefield API to enumerate, create and modify profilefields.

Once a profilefield has been created, it can be associated with a recipient via the profileData field of the recipient structure.

For details of the Profilefield object see [Section 25.19, “profilefield”](rest.autogen.struct.profilefield.php "25.19. profilefield").

## Supported Actions

*   The following actions are supported when issuing a GET request:.

    `GET /v1.0/profilefield?orgid=1&pfid=1`

    This API returns information about the specified profilefield.

    `GET /v1.0/profilefield?orgid=1`

    Enumerates all the defined profilefields in the system.

*   The follow actions are supported when issuing a POST or PUT request:.

    `PUT /v1.0/profilefield?orgid=2&pfid=123`

    Updates the specified profilefield. This API returns the profilefield id (pfid) on success (status 200), issues an error if it fails.

    `PUT /v1.0/profilefield?orgid=2`

    Creates a new profilefield, returns its profilefield id on success (status 200), issues an error if it fails.

    The PUT/POST payload is expected to be a valid profilefield object, either as a JSON payload or as HTML-form style parameters.

    You must create profilefields before you can add profileData to a recipient.

    profilefields do not have change-conflict detection; in the event that conflicting changes are made, the most recent change will be the one that takes effect, and a 409 response will NOT be issued.

*   The following actions are supported when issuing a DELETE request.

    `DELETE /v1.0/profilefield?orgid=2&pfid=123`

    In order to delete a piece of profilefield, you may issue the above DELETE request.

| [Prev](rest.recipients.email.php)  |   |  [Next](rest.list.object.php) |
| 12.2. The `email` Field  | [Table of Contents](index.php) |  Chapter 14. List |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)