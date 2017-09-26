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

| Chapter 9. Campaigns |
| [Prev](rest.orgs.object.php)  |   |  [Next](rest.mailing.overview.php) |

## Chapter 9. Campaigns

Campaigns act as containers for Mailings. If you install the Message Central web UI there is a default campaign with the id of `1`. If the web UI is not installed there is no default campaign.

## The Campaign Object Definition

For details of the Campaign object see [Section 25.2, “campaign”](rest.autogen.struct.campaign.php "25.2. campaign").

### Note

Time zone abreviations such as EST or IST should be avoided. Date/time values should be in RFC3339 format, which is a profile of ISO 8601\. Time zones should be represented as a numeric offset such as `-04:00` or `+05:30` or the suffix "Z" may be used to represent UTC. So a full date/time value may look like "`2012-10-19T16:39:57-08:00`" or "`2012-06-12T23:20:50Z`". The system will try to interpret other formats but unexpected results may occur if the format uses an abreviation shared by multiple time zones.

Find the Campaign APIs below:

*   `GET /v1.0/campaign?orgid=2`

    Enumerate campaigns. This API returns an array of Campaign objects. This array may be ordered, formatted or limited as described in [Section 7.7, “Query Restrictions”](rest.query.restrictions.php "7.7. Query Restrictions").

*   `GET /v1.0/campaign?orgid=2&campid=123`

    This API returns a Campaign object based on the specified campaign id. Responds with a 404 error if the campaign does not exist. You may also add `full=true` as a parameter to populate the vctx property of the campaign object.

*   `GET /v1.0/campaign?orgid=2&name=sales+kick`

    This API returns a Campaign object based on the specified name. You may also add `full=true` as a parameter.

*   `PUT /v1.0/campaign?orgid=2&campid=123`

    Updates the specified campaign. This API returns the campid on success (status 200), issues an error if it fails.

    `POST /v1.0/campaign?orgid=2&campid=123`

    Update (or create if `campid` is omitted) a campaign

    Creates a new campaign and returns the campaign id on success (status 200). On failure an error is issued. The PUT/POST payload is expected to be a valid Campaign object, either as a JSON payload or as HTML-form style parameters.

## Updating a Campaign

When updating a campaign, if the modifiedDate in what you PUT or POST does not match the value on the server side, your PUT or POST will fail with the message `409 Conflict` giving the response `modifiedDate: null`. When using PUT or POST with the campaign API, if modifiedDate is not present, the API will try to create a new mailing. This is true for all objects that have a modifiedDate field.

The easiest way to update an existing campaign is to use the read-modify-write sequence described in [Example 7.1, “REST read-modify-write example”](rest.input.parameters.php#rest.post.put.read "Example 7.1. REST read-modify-write example").

| [Prev](rest.orgs.object.php)  |   |  [Next](rest.mailing.overview.php) |
| Chapter 8. Orgs  | [Table of Contents](index.php) |  Chapter 10. Mailing |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)