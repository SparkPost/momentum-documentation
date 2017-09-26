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

| Chapter 22. Data Integration: Reporting |
| [Prev](rest.data.integration.php)  |   |  [Next](rest.version35.php) |

## Chapter 22. Data Integration: Reporting

External data sources are used by mailings of type = 'directaccess'. These mailings create "transient" recipients in Message Central 3.x; these recipients refer to a record in some external data store, so the following report provides data on how to map back to that external recipient information.

`GET /v1.0/report/mailing/events?orgid=2&mid=22`

Enumerates data from a mailing. Works for both regular and 'directaccess' mailings. `mid` can be a comma separated list of mailing ids.

The only additional recognized parameters are:

*   `externalid` – You must pass in this parameter to return data for a "directaccess" mailing. This field is the key field in the external table that uniquely identifies each recipient. Use the following syntax: GET /v1.0/report/mailing/events?orgid=1&mid=2&externalid=*`client_id`*.

    For example, where the key field in the external table is `client_id`, get information about the mailing in the following way:

    `GET  "http://rest_server/v1.0/report/mailing/events?orgid=5&mid=14&format=csv&externalid=client_id";`

    This should return information in the following format:

    ```
    mid,rid,externalid,email,event,details,date
    14,98311,1,fred@example.com,D,"250 OK tls= tls_cipher=
    auth_user=","2011-02-02 14:25:35+00"
    ...
    ```

    ### Note

    Specifying an external ID applies to `directaccess` mailings only. For mailings that use the internal Message Central database, the name of the ID field for recipients is already known.

*   `startDate and endDate`

This API returns an array of events with the following structure:

```
{
  // The Message Central mailing ID
  mid: 15,
  // The email address that was delivered to
  email: "user@host.com"
  // The Message Central contact ID
  rid: 42,
  // Token indicating event type ('C', 'O', 'B', 'D', '?')
  event: 'D',
  // Any additional details about the event
  details: '250 2.0.0 Ok: queued as 86C17380000D2',
  date: '2010-09-10 21:02:16+00'
}
```

`GET /v1.0/report/mailing/summary?orgid=2&mid=22`

Summarizes data from a 'directaccess' mailing. `mid` can be a comma separated list of mailing ids.

This API returns an array of events with the following structure:

```
{
  // The Message Central mailing ID
  mid: 15,
  // The name of the statistic being returned
  name: 'Sent',
  // Any detail necessary with current statistic
  details: null,
  // The integer value returned for the current statistic
  intval: 42
}
```

| [Prev](rest.data.integration.php)  |   |  [Next](rest.version35.php) |
| Chapter 21. Data Drivers  | [Table of Contents](index.php) |  Chapter 23. Changes in Version 3.5 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)