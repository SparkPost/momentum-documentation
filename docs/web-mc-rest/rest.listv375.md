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

| List_Duplicatev37 |
| [Prev](rest.List_Archivev37.php)  | Chapter 24. Changes in Version 3.7 |  [Next](rest.List_Unarchivev37.php) |

<a name="rest.listv375"></a>
## Name

Listv37 — Use this API to create duplicates of a List

<a name="idp1054992"></a>
## Description

**API Enhancement. ** This API is available as of version 3.7.5.

Use the List API to create duplicate Lists. On success, this API returns the ID of the new List.

**Supported Actions**

The following actions are supported when issuing a PUT or POST request. The `orgid` is a required parameter.

`PUT /v3.7/list/duplicate?orgid=1&lid=2`

Create a duplicate of the List in org 1 with the ID `2`. The new list name will be the original name along with a string indicating this is a duplicate list plus the date and the new ID.

PUT /v3.7/list/duplicate?orgid=1&name=`list_name`

Create a duplicate of the List in org 1 with the name `list_name`. The name of the new List will be the current date and time prepended to the new ID.

PUT /v3.7/list/duplicate?orgid=1&lid=2&new_name=`new_list_name`

Create a duplicate of the List with the ID `2` and assign the name `new_list_name` to the duplicated list.

PUT /v3.7/list/duplicate?orgid=1&name=list_name&new_name=*`new_list_name`*

Create a duplicate of the list with name "list_name" and assign the name `new_list_name` to the newly created list.

| [Prev](rest.List_Archivev37.php)  | [Up](rest.version37.php) |  [Next](rest.List_Unarchivev37.php) |
| List_Archivev37  | [Table of Contents](index.php) |  List_Unarchivev37 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)