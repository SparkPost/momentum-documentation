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

| 25.2. campaign |
| [Prev](rest.autogen.structs.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.content.attachment.php) |

## 25.2. campaign

Campaigns act as containers for Mailings.

*   **campid** – Unique identifier for the campaign.

    This property is a key field. Its data type is `int`.

*   **name** – The campaign name; should be a short, single line string.

    This property is not a key field. Its data type is `string`.

*   **description** – More descriptive text for the campaign. The system does not use this for any particular purpose; you need only record what you want to record in this field.

    This property is not a key field. Its data type is `string`.

*   **startDate** – When the campaign starts. Any mailings associated with this campaign will not be allowed to be generated until this date is reached.

    This property is not a key field. Its data type is `datetime`.

*   **endDate** – When the campaign end. Any mailings associated with this campaign will not be allowed to be generated once this date is reached.

    This property is not a key field. Its data type is `datetime`.

*   **needsApproval** – Whether mailings associated with this campaign need approval. If this is set to true, then the "approved" property of a Mailing must be set to true before the mailing will be allowed to generate. Otherwise the "approved" property is ignored.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `false`.

*   **active** – Whether the campaign is active or not.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `true`.

*   **createdDate** – Records when the mailing was created.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **modifiedDate** – Records when the mailing was last modified.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **vctx** – Context information to be passed to Momentum.

    This property is not a key field. Its data type is `dict:vctx`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **DKIM** – Whether DomainKeys Identified Mail (DKIM) should be enabled for mailings under this campaign The default is "false" As per DomainKeys, the system administrator is responsible for configuring the Momentum instance appropriately to make this work.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `false`.

*   **DomainKeys** – Whether DomainKeys should be enabled for mailings under this campaign . The default is "false" Setting this to true will request DK signing at the Momentum instance. The system administrator is responsible for configuring the Momentum instance appropriately to make this work.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `false`.

*   **mailingrule** – The default mailing rule used for mailings belonging to this campaign (Campaign level config).

    This property is not a key field. Its data type is `map`. The default value for this property is `0`.

    For a description of this mapping see [Section 26.7, “mailingrules”](rest.autogen.map.mailingrules.php "26.7. mailingrules").

| [Prev](rest.autogen.structs.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.content.attachment.php) |
| Chapter 25. REST Structs  | [Table of Contents](index.php) |  25.3. content.attachment |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)