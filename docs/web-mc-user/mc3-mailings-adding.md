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

| 5.2. Creating a Mailing |
| [Prev](mc3-mailings.php)  | Chapter 5. Mailings |  [Next](mc3-mailings-editing.php) |

## 5.2. Creating a Mailing

To create a new mailing, click the NEW MAILING button on the MAILINGS page. You should see something similar to the following:

<a name="figure-new-mailing"></a>

**Figure 5.3. New mailing**

![New mailing](images/new_mailing.jpg)

Enter a name and description in the appropriate text boxes and choose a campaign from the Campaign drop down list box.

### Note

Do *not* use commas in mailing names. Doing this can create problems when the mailing state is changed to `ready`.

Note that you cannot have duplicate mailing names.

For single mailings that are not associated with a campaign, you can choose the `No Campaign` option.

Choose from the Type drop down list box. The available schedule options are:

*   `Immediate Mailing` – Run this mailing when the RUN button is pressed.

*   `Scheduled Mailing` – Start delivery at a specific time.

*   `Recurring Mailing` – Run this mailing at specified intervals.

*   `API-Triggered Mailing` – Trigger the mailing by a REST API call. For more information see "[REST API for Message Central 3.x](https://support.messagesystems.com/docs/web-mc-rest/)".

*   `Direct Access Mailing` – Select recipients from an external data source. For more information see [Section 5.3.3.1, “Direct Access Mailing”](mc3-mailings-editing.php#mc3-mailings-direct-access "5.3.3.1. Direct Access Mailing").

*   `A/B Split Mailing` – determine the content used based on a sample mailing. For more information see [Section 5.3.5, “A/B Split Test”](mc3-mailings-editing.php#mc3-mailings-ab-split "5.3.5. A/B Split Test").

For a more complete definition of the mailing types see the [Glossary](mc3-glossary.php "Glossary").

### Warning

After creating a mailing you cannot change its type.

Because of a database constraint, the maximum number of messages that can be sent for the life of a mailing is four billion. This applies to all mailing types. Failure will occur if the cumulative number of messages reaches this limit. To avoid failure, prior to reaching this value the mailing must be duplicated or re-created.

Press the CREATE button to create the mailing.

Once the mailing is created, you can edit the mailing as described in [Section 5.3, “Editing a Mailing”](mc3-mailings-editing.php "5.3. Editing a Mailing").

| [Prev](mc3-mailings.php)  | [Up](mc3-mailings.php) |  [Next](mc3-mailings-editing.php) |
| Chapter 5. Mailings  | [Table of Contents](index.php) |  5.3. Editing a Mailing |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)