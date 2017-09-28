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

| Chapter 11. Triggered Mailings |
| [Prev](rest.mailing.overview.php)  |   |  [Next](rest.recipients.overview.php) |

## Chapter 11. Triggered Mailings

### Note

Following a database restart, the [pe2sched](https://support.messagesystems.com/docs/web-mc/mcsched.php) process must be restarted manually in order for the listener to reconnect to the database. This is applicable for both api-triggered mailings and direct access mailings.

You can initiate api-triggered mailings in the following ways:

```
PUT /v1.0/mailing/trigger?orgid=2&mid=2
POST /v1.0/mailing/trigger?orgid=2&mid=2
```

For mailings of `type = 'api-triggered'`, this API call is used to add recipients to the mailing. For example, as part of shopping cart order completion processing, an integration might want to trigger an email confirmation message. There are two cases supported by this API; sending mail to recipients that already exist in the Message Central 3.x recipient database, and sending mail to recipients that may not exist in the Message Central 3.x recipient database.

If you are running a large number of api-triggered mailings and find that the mailings are not triggered promptly you can adjust your configuration settings. For information on which settings to change see [pe2sched.spawn_interval_by_mailing](https://support.messagesystems.com/docs/web-mc/conf.pe2sched.spawn_interval_by_mailing.php).

A very high volume of api-triggered mailings may also make it difficult to add an Org. For more in formation see [Adding an Org](https://support.messagesystems.com/docs/web-mc-user/mc3-administration.php#mc3-administration-orgs-adding).

There is no option to pass a mailing name directly to this API. When you create a mailing as described in [Chapter 10, *Mailing*](rest.mailing.overview.php "Chapter 10. Mailing") the mailing id is returned. Capture this value in a variable.

When you know the mailing name but not the mailing ID you can use the mailing API along with a query restriction to determine the mailing ID. For example:

`GET /v1.0/mailing?orgid=1&extraWhereClause=m.mailingname='MyMailing'`

However, be warned that use of the `extraWhereClause` query restriction depends upon the underlying database schema. There is no guarantee that the database schema will remain unchanged between Message Central 3.x releases. For more information about query restrictions see [Section 7.7, “Query Restrictions”](rest.query.restrictions.php "7.7. Query Restrictions").

### Note

As of Message Central version 3.6, it is possible to authenticate users via LDAP. This may have a performance impact in specific scenarios where a high volume of REST API calls are requested with an expectation of high performance. For example, this may occur during api-triggered mailings or custom reporting.

This API accepts an array of recipient records, so a single call can be used to submit a batch of recipients. Note that submitting extremely large batches via this API is expensive.

If you wish to pass in a recipient ID and a context variable, pass in a JSON object such as the following:

```
{
  //AnoptionalrecipientID.//Ifspecified,
  itmustbeanintegerthatreferencesanexistingrecipient.//Ifitdoesnotreferenceavalidrecipient,
  anerrorwillbereturned.//Ifitisnotspecified,
  orisnull,
  anon-the-flyrecipientrecord//willbecreated"rid": 1,
  //optional;associatessomeinformationthatcanbeaccessedbythemessage//templatecodewhenthisparticularmessageisprocessed.Thiscanbe//avalidJSONvalueandisusefulforpassinginthingsliketheorderID//orevenaserializedrepresentationofthecompleteorderdetails."context": {
    "ordernumber": 123
  }
}
```

The `rid` is a recipient ID and the `context` is a JSON object that defines a context variable and its value. For a description of how to access a JSON object see [$JSON Object](https://support.messagesystems.com/docs/web-mc/mc-template-syntax.php#mc-template-syntax-json).

Typical usage will be as follows. For an existing recipient with an ID of `22`, trigger an email with the context set to "ordernumber" with a value of `123`.

```
PUT /v1.0/mailing/trigger?orgid=2&mid=1
Content-Type: application/json

{
    "rid": 22,
    "context": {
        "ordernumber": 123
    }
}
```

### Warning

When adding existing recipients to an api-triggered mailing as shown above, be sure to add only recipient IDs that are in the database. Do this by first validating IDs.

Triggered mailings that include invalid recipient IDs will never complete.

This warning does not apply when you are generating the recipient IDs on the fly.

This might prove useful as an order confirmation.

You can also trigger an order confirmation email for a recipient by generating the recipient ID on the fly:

```
PUT /v1.0/mailing/trigger?orgid=2&mid=1
Content-Type: application/json

{
    "lastName": "Doe",
    "context": {
        "header": "XYZ-123"
    },
    "email": "user@domain.com",
    "firstName": "John"
}
```

### Note

If you specify an existing email address this API will use the contactid associated with this address otherwise it will create the contact.

Field names are case sensitive; you must use `lastName` rather than `lastname`.

Alternately, instead of the recipient object format, an integer value can be used. In this case, the integer value is assumed to be the recipient ID. For two existing recipients, trigger an email with no context information.

```
PUT /v1.0/mailing/trigger?orgid=2&mid=1
Content-Type: application/json

  [13, 20]
```

| [Prev](rest.mailing.overview.php)  |   |  [Next](rest.recipients.overview.php) |
| Chapter 10. Mailing  | [Table of Contents](index.php) |  Chapter 12. Recipients |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)