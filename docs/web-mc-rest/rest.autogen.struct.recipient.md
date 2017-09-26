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

| 25.20. recipient |
| [Prev](rest.autogen.struct.profilefield.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.recipient3.7.php) |

## 25.20. recipient

Recipient object holds a recipient's information such as name, address etc.. Additional demographic information can be loaded through the profileData field.

*   **rid** – Unique identifier for the recipient.

    This property is a key field. Its data type is `int`.

*   **status** – The status of the Recipient, can be unsubscribed or subscribed, the default status is "subscribed".

    This property is not a key field. Its data type is `map`. The default value for this property is `1`.

    For a description of this mapping see [Section 26.2, “contactstatus”](rest.autogen.map.contactstatus.php "26.2. contactstatus").

*   **email** – The domain name, this is a required field.

    This property is not a key field. Its data type is `string`.

*   **localPart** – The localPart of the email, the part before the '@', this is a required field.

    This property is not a key field. Its data type is `string`.

*   **domainName** – The domain name, this is a required field.

    This property is not a key field. Its data type is `string`.

*   **firstName** – The first name of the contact person.

    This property is not a key field. Its data type is `string`.

*   **lastName** – The last name of the contact person.

    This property is not a key field. Its data type is `string`.

*   **birthDate** – The birth date of the contact person.

    This property is not a key field. Its data type is `string`.

*   **gender** – The gender of the contact person.

    This property is not a key field. Its data type is `string`.

*   **address1** – The address of the contact person, first line.

    This property is not a key field. Its data type is `string`.

*   **address2** – The address of the contact person, second line.

    This property is not a key field. Its data type is `string`.

*   **phone1** – The phone number of the person, first one.

    This property is not a key field. Its data type is `string`.

*   **phone2** – The phone number of the person, second one.

    This property is not a key field. Its data type is `string`.

*   **city** – The city where the contact person lives.

    This property is not a key field. Its data type is `string`.

*   **region** – The region where the contact person lives, equivalent to state in U.S.

    This property is not a key field. Its data type is `string`.

*   **postalCode** – The postal code.

    This property is not a key field. Its data type is `string`.

*   **countryCode** – The two letter ISO standard country code, for example 'US' for the United States.

    This property is not a key field. Its data type is `string`.

*   **languageCode** – The three letter ISO standard language code, for example 'eng' for English.

    This property is not a key field. Its data type is `string`.

*   **contentType** – The content type, text/html, text/plain or multipart/alternative, the default value is "1", indicating text/html.

    This property is not a key field. Its data type is `map`. The default value for this property is `1`.

    For a description of this mapping see [Section 26.3, “contenttypes”](rest.autogen.map.contenttypes.php "26.3. contenttypes").

*   **createdDate** – The date when the recipient record is created.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **modifiedDate** – The date when the recipient record is modified.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **profileData** – This field points to an array of ProfileData structs providing a way of associating many different kinds of data with recipients making it possible to extend a recipient and add information not provided by the other fields. Profile data fields are name-value pairs. Valid names are those that have been used to define a profilefield using the profilefield API. For example, if "customerno" has been defined as the name of a profilefield of type "1" (numeric), then the name-value pair might be "customerno=123". Any number of profileData name-value pairs may be associated with a recipient.

    This property is not a key field. Its data type is `dict:profileData`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **tags** – tags associated with this recipient. a tag is boolean; it is either associated or it is not. Valid tags are defined by the system administrator.

    This property is not a key field. Its data type is `listtag`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **skipEmailValidation** – Whether to skip validation of Email address. Option is added for internal testing. Not intended for end user.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `false`.

| [Prev](rest.autogen.struct.profilefield.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.recipient3.7.php) |
| 25.19. profilefield  | [Table of Contents](index.php) |  25.21. recipient 3.7 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)