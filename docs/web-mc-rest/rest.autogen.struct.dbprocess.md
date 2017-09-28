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

| 25.7. dbprocess |
| [Prev](rest.autogen.struct.content3.7.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.dict.profileData.php) |

## 25.7. dbprocess

Database process object would provide information on the running database query in the Postgres database server. At any time only the current list of running queries along with information on the process that is running the query is listed. One record would be returned for each running query.

*   **procpid** – Process ID of the server process in postgres database

    This property is a key field. This property is readonly. Its data type is `int`.

*   **usesysid** – User ID of the given server process

    This property is not a key field. This property is readonly. Its data type is `integer`.

*   **usename** – User Name of the given server process

    This property is not a key field. This property is readonly. Its data type is `string`.

*   **query** – Active command of the given server process

    This property is not a key field. This property is readonly. Its data type is `string`.

*   **processdescription** – Gives the process description for the server process from the scoreboard module

    This property is not a key field. This property is readonly. Its data type is `string`.

*   **status** – Gives the last updated status for the server process from the scoreboard module

    This property is not a key field. This property is readonly. Its data type is `string`.

*   **addr** – The IP address of the client connected to the given server process; null if the connection is over a Unix domain socket, also null if the current user is not a superuser nor the same user as that of the session being queried

    This property is not a key field. This property is readonly. Its data type is `string`.

*   **port** – The TCP port number of the client connected to the given server process; -1 if the connection is over a Unix domain socket, null if the current user is not a superuser nor the same user as that of the session being queried

    This property is not a key field. This property is readonly. Its data type is `integer`.

*   **backend_start** – The time at which the given server process was started, or null if the current user is not a superuser nor the same user as that of the session being queried

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **xact_start** – The time at which the given server process' currently executing transaction was started, but only if the current user is a superuser or the same user as that of the session being queried (and track_activities is on)

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **query_start** – The time at which the given server process' currently executing query was started, but only if the current user is a superuser or the same user as that of the session being queried (and track_activities is on)

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **elapsed** – Elapsed time since the currently executing query was started by the server process This field would be used as the default sort field when returning the results of a query to Get the list of DB Processes.

    This property is not a key field. This property is readonly. Its data type is `string`.

*   **waiting** – True if the given server process is waiting for a lock, but only if the current user is a superuser or the same user as that of the session being queried (and track_activities is on)

    This property is not a key field. This property is readonly. Its data type is `boolean`.

| [Prev](rest.autogen.struct.content3.7.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.dict.profileData.php) |
| 25.6. content 3.7  | [Table of Contents](index.php) |  25.8. dict:profileData |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)