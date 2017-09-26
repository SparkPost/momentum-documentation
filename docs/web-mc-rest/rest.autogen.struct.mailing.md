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

| 25.15. mailing |
| [Prev](rest.autogen.struct.mailing.segment.php)  | Chapter 25. REST Structs |  [Next](rest.autogen.struct.org.php) |

## 25.15. mailing

The mailing type represents a number of facets of a mailing. The short-form mailing object contains the basic properties of a mailing. The full mailing object contains all the details, including scheduling, targeting and segmentation information.

*   **name** – The name of the mailing. Limited to 128 characters.

    This property is not a key field. Its data type is `string`.

*   **mid** – The unique ID for the mailing.

    This property is a key field. Its data type is `int`.

*   **type** – Indicates what type of mailing this is.

    This property is not a key field. Its data type is `map`.

    For a description of this mapping see [Section 26.9, “mailingtypes”](rest.autogen.map.mailingtypes.php "26.9. mailingtypes").

*   **startDate** – When the mailing should start generating. It will not generate before this time. For recurring mailings, this defines the start of the time period in which the recurrence will be evaluated, and is not necessarily the time at which the first send will occur.

    This property is not a key field. Its data type is `datetime`.

*   **endDate** – When the mailing should stop generating. If this date is in the past, then no further generation will be triggered for this mailing. Leaving it null means that there is no end date.

    This property is not a key field. Its data type is `datetime`.

*   **blockSize** – Specifies how many recipients will be generated in a given block by a generator. The default is 100,000; you may leave this field out during creation to get the default value. If the effective runSQL is an expensive query, and the block size is "too small", you introduce latency at the start of each generated block of mail. Conversely, if this value is "too big", you may artificially limit the number of generators that could run in parallel. Most users will not change this value.

    This property is not a key field. Its data type is `int`. The default value for this property is `100000`.

*   **description** – The description of the mailing

    This property is not a key field. Its data type is `string`.

*   **state** – The state of the mailing, can be one of: 'created', 'approved', 'building', 'built', 'running', 'finished', 'archived', 'cancelled' If omitted during creation, it will be set to 'created'.

    This property is not a key field. Its data type is `map`. The default value for this property is `1`.

    For a description of this mapping see [Section 26.8, “mailingstates”](rest.autogen.map.mailingstates.php "26.8. mailingstates").

*   **buildSQL** – For advanced users, the buildSQL can be set instead of the lists property. This requires some advanced knowledge of the system schema. It is recommend that this be left out during creation and/or kept set to null unless you know to set it to something else.

    This property is not a key field. Its data type is `string`.

*   **runSQL** – For advanced users, the runSQL can be set to override how the mailing gathers personalization data for the generation process. Most users will omit this field or leave it set to null to let the system determine the appropriate query at the right time.

    This property is not a key field. Its data type is `string`.

*   **class** – The classification of this mailing. Can be one of 'none', 'mass', 'lifecycle', 'transactional'. This field is informational only; it does not affect processing of the mail in this version of Message Central.

    This property is not a key field. Its data type is `map`.

    For a description of this mapping see [Section 26.13, “typeofmailings”](rest.autogen.map.typeofmailings.php "26.13. typeofmailings").

*   **rule** – For mailings of type=ab-split, defines how the winning split is selected. Valid values are 'byclick' or 'byopen'. For recurrent mailings, this controls whether a given recipient will receive any copies of the mailing beyond their first. If left unspecified during creation, the default value is inherited from the mailingrule set in the associated campaign.

    This property is not a key field. Its data type is `map`. The default value for this property is `0`.

    For a description of this mapping see [Section 26.7, “mailingrules”](rest.autogen.map.mailingrules.php "26.7. mailingrules").

*   **splitsize** – Indicates the total number of recipients that will be mailed to when A/B splitting is used. This is computed as the sum of the segment sizes.

    This property is not a key field. This property is readonly. Its data type is `int`.

*   **splitperiod** – The number of hours over which the splitting will be carried out. Only valid for type: 'ab-split' mailings.

    This property is not a key field. Its data type is `int`.

*   **suspended** – If set to true, the mailing is suspended. Suspended mailings continue to generate, but are held back at the Momentum nodes.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `false`.

*   **campaign** – which campaign the mailing is associated with. if omitted during creation, the mailing will be associated with a default campaign. If passed as an integer value, it is treated as a campaign ID, otherwise it is treated as the campaign name.

    This property is not a key field. Its data type is `campaignid`.

*   **approved** – Whether the mailing has been approved If the campaign is set to require approval, then a given mailing will not be eligible for generation until the approved property is set to true and the mailginState is advanced to 'approved'.

    This property is not a key field. Its data type is `boolean`.

*   **DKIM** – Whether DomainKeys Identified Mail (DKIM) should be enabled for this mailing. The default is "false" As per DomainKeys, the system administrator is responsible for configuring the Momentum instance appropriately to make this work.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `false`.

*   **DomainKeys** – Whether DomainKeys should be enabled for this mailing. The default is "false" Setting this to true will request DK signing at the Momentum instance. The system administrator is responsible for configuring the Momentum instance appropriately to make this work.

    This property is not a key field. Its data type is `boolean`. The default value for this property is `false`.

*   **count** – The computed count of recipients that will receive this mailing.

    This property is not a key field. This property is readonly. Its data type is `int`.

*   **countStartDate** – The time at which the last count started.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **countEndDate** – The time at which the last count completed.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **countError** – The error message (if any) that was encountered when a count was attempted. An error has occurred when the count is a negative number. This is a Read-only field.

    This property is not a key field. This property is readonly. Its data type is `string`.

*   **status** – Indicates the status of the Content

    This property is not a key field. Its data type is `map`.

    For a description of this mapping see [Section 26.10, “recordstatustypes”](rest.autogen.map.recordstatustypes.php "26.10. recordstatustypes").

*   **createdDate** – Records when the mailing was created.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **modifiedDate** – Records when the mailing was last modified.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **sentDate** – Records when the mailing was last sent.

    This property is not a key field. This property is readonly. Its data type is `datetime`.

*   **priority** – Defines the relative priority of this mailing.

    This property is not a key field. Its data type is `int`.

*   **generatorlimit** – Sets the upper limit on the number of generators that may be used to generate for this mailing.

    This property is not a key field. Its data type is `int`.

*   **segments** – An array of segment objects that describe the segmentation of the mail. Segmentation is used to assign alternate content based on certain criteria, or to assign the same content, but report on click/open success by demographics, or used with the 'ab-split' mailing type for A/B testing.

    This property is not a key field. Its data type is `mailing.segment`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **recur** – For a mailing of type 'recurrent', this property specifies the scheduled recurrence for the mailing. Accepted values are roughly equivalent to unix crontab specifiers, such as: "* * * * *", or "* * '1 day'".

    This property is not a key field. Its data type is `string`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **lists** – Most mailings will use the "lists" property to specify a composition of lists to select the recipients for the mailing. The lists are composed logically: select ... where memberof(included-lists) and not memberof(excluded-lists).

    This property is not a key field. Its data type is `mailing.lists`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **vctx** – Context information to be passed to Momentum.

    This property is not a key field. Its data type is `dict:vctx`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

*   **quota** – Sets an upper bound on the number of recipients that will be mailed to.

    This property is not a key field. Its data type is `int`.

| [Prev](rest.autogen.struct.mailing.segment.php)  | [Up](rest.autogen.structs.php) |  [Next](rest.autogen.struct.org.php) |
| 25.14. mailing.segment  | [Table of Contents](index.php) |  25.16. org |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)