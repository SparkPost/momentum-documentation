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

| 7.2. HTTP Methods |
| [Prev](rest.using.php)  | Chapter 7. Using the API |  [Next](rest.curl.php) |

## 7.2. HTTP Methods

It is the HTTP method that specifies what operation will be done on the resource. The types of operations a certain method performs is outlined below.

*   `GET`

    Retrieves information about the requested resource. GET requests do not modify the system state.

*   `POST` or `PUT`

    Performs a state changing action. We treat POST and PUT as identical verbs. PUT is generally preferred over POST, as some proxy servers and other network intermediaries will sometimes re-issue or re-play POST requests, resulting in undesirable effects.

    Both POST and PUT can be used to create or update an object. An operation will be interpreted as an update if the primary key field is a parameter in the list of arguments. Otherwise the operation is a create.

    For example, the mailing id (mid) is the primary key for the mailing object. If the POST/PUT request contains `mid` as an parameter then it is interpreted as an update. If `mid` is not a parameter, then the action is a create.

*   `DELETE`

    Deletes or removes (or marks for deletion or removal) the requested resource.

    For example, to get the details of recipients in an ORG with the ID of `2` an HTTP GET will be made to `https://api.mc.messagesystems.com/v1.0/recipient?orgid=2`.

    An HTTP PUT (or POST) to the same URL, `https://api.mc.messagesystems.com/v1.0/recipient?orgid=2`, with the required parameters will create the recipient. Then, a HTTP PUT (or POST) to the same URL with the necessary parameters (now including the recipient ID) will update the recipient. To delete the recipient, an HTTP DELETE would be used.

    ### Note

    Recipients that do not possess the unique key fields defined for an org cannot be added. For more information see ["Unique Key Fields"](https://support.messagesystems.com/docs/web-mc-user/mc3-administration.php#mc3-administration-orgs-key-fields).

| [Prev](rest.using.php)  | [Up](rest.using.php) |  [Next](rest.curl.php) |
| Chapter 7. Using the API  | [Table of Contents](index.php) |  7.3. cURL as a Testing Tool |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)