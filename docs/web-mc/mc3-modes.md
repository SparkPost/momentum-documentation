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

| 1.2. Message Central Web UI and REST API Access, Database-centric Mode, Direct Access Mode |
| [Prev](mc-installation.php)  | Chapter 1. Installing Message Central |  [Next](mc-configurations.php) |

## 1.2. Message Central Web UI and REST API Access, Database-centric Mode, Direct Access Mode

Message Central's features can be accessed using the web UI or the REST API. With the web UI you can access all the features of Message Central; the REST API allows you to access a subset of the features.

The table [Table 1.1, “Web UI and REST API features”](mc3-modes.php#table.mc.webui.v.restapi "Table 1.1. Web UI and REST API features") outlines what features are available using the web UI and the REST API.

<a name="table.mc.webui.v.restapi"></a>

**Table 1.1. Web UI and REST API features**

|   |   | Web UI | Rest API |
| :-: | :-: | :-: | :-: |
| **mailing type**  | immediate | yes | yes |
|   | scheduled | yes | yes |
|   | recurring | yes | yes |
|   | direct access | yes | yes |
|   | API-triggered (transactional) | yes | yes |
|   | A/B split | yes | yes |
| **content** | create and paste content in design mode | yes | no |
|   | personalization (mail merge) | yes | yes |
|   | pre-coded content passed in by API | yes | yes |
|   | external content added via Perl/database | yes | yes |
|   | conditional content (dynamic) | yes | yes |
| **lists** | define lists | yes | yes |
|   | call pre-defined lists | yes | yes |
| **orgs** | create, edit, delete orgs | yes | no |
|   | use existing orgs | yes | yes |
| **reports** | access reports | yes, ALL | yes, **SOME** |

### 1.2.1. Mailings

Message Central *mailings* define how content is sent to a set of recipients. To set up a mailing you need to have:

*   *recipients* who you are sending the mailing to:

    *   in database-centric mode, recipient data comes from the Message Central database.

    *   in direct-access mode, recipient data comes from a database external to Message Central.

*   *content* what you are sending, which can be customized in one of two ways:

    *   with database substitution (personalization) recipient information is merged into the content template to create a personalized message (for example, Dear *`<first name>`*       , Recently, you visited our *`<city>`* store…)

    *   with conditional content recipient information is used to select content based on specified criteria (for example, if recipient is male, address to *`Mr. <last name>`*             , if recipient is female, address to *`Ms. <last name>`*             )

*   a *schedule* when you are sending the mailing:

    *   for *immediate*, *scheduled*, *recurring*, *direct access*        and *A/B split mailings* , the schedule is set by you.

    *   for *API-triggered mailings* , there is no pre-set schedule - the messages are sent in response to an external event.

Message Central sends one message per recipient.

### 1.2.2. Mailing Types

There are six different types of mailings you can use in Message Central. The table [Table 1.2, “Mailing Types”](mc3-modes.php#table.mc.mailing.types "Table 1.2. Mailing Types") outlines the mailing types available.

<a name="table.mc.mailing.types"></a>

**Table 1.2. Mailing Types**

| Type | Description | Schedule | Frequency |
| --- | --- | --- | --- |
| immediate | Mailing to be sent as soon as you put it in the Ready state. | now | one-time event |
| scheduled | Mailing to be sent at a scheduled point in the future. | at scheduled date/time | one-time event |
| recurring | Mailing to be sent at several scheduled points in the future. | at scheduled dates/times | one or more events |
| direct access | Mailing to be sent at a scheduled point in the future, with recipients listed in an external database. | at scheduled date/time | one-time event |
| REST API-triggered | Transactional mailings sent in response to an external event. | ongoing | ad-hoc |
| A/B split | Mailing to be sent to one or more subsets or recipients. | at scheduled date/time | one-time event |

### 1.2.3. Lists

A *list* is a set of criteria that defines a group of recipients. A list can be created in the Message Central UI, or imported into Message Central (either with the web UI or the REST API).

### 1.2.4. Orgs

*Orgs* are distinct data schemas within Message Central that allow you to specify different configurations of Message Central options, such as sets of recipients, mailings and content, as well as time-zone and click-tracker domain. Orgs can be used several different ways:

*   To represent subdivisions within a corporation (for example, GlobalCorp Widget Division and Gadget Division)

*   To represent different clients (for example, MyGadgetCorp and YourWidgetCorp)

*   To access external recipient data (direct-access mode) and internal recipient data (database-centric mode)

You can have one or more orgs; during the installation, a default org (with an ID of `1`) is created.

### Warning

Org names **cannot** have spaces in them.

Mailings, content and recipient data are specific to an org.

### 1.2.5. Reports

Reports and reporting data provide detailed statistics about mailings. This information is available in several ways:

*   in the web UI from the **Reports** menu

*   by creating custom reports that are run in the web UI from the **Custom Apps**      menu

*   by exporting the data for use in other applications

For more information, see the "[Reports](https://support.messagesystems.com/docs/web-mc-user/mc3-reports.php)” chapter of the *User Guide for Message Central Version 3.x Web UI*                                              and the "[Reports](https://support.messagesystems.com/docs/web-mc-rest/rest.reporting.php)" chapter of the *REST API for Message Central 3.x* .

### 1.2.6. Database-centric Mode

*Database-centric mode*      is the default Message Central mode, which allows you to access the widest variety of mailing types immediate, scheduled, recurring, REST API-triggered, and A/B split.

Recipient data comes from the Message Central database, and suppression lists are checked when the mailing is being sent.

Bounces and deliveries are recorded, and out-of-band bounces (OOB) are logged in the Message Central database.

### 1.2.7. Direct Access Mode

*Direct access mode*             allows you to create mailings with recipients selected from an external database, such as customer relationship management (CRM) software, instead of importing the data as is done in database-centric mode. For information on configuring databases for use with Message Central see [ds_core Module](https://support.messagesystems.com/docs/web-ref/modules.ds_core.php).

### Note

Unsubscribe management for direct access mailings is not supported in Message Central. Because direct access mode assumes that all recipient data is managed in an external database, you must include your own unsubscribe links and unsubscribe users in the external database.

**1.2.7.1. Direct Access Mode Statistics and Data Retention**

Once a mailing has been sent, you can track when email messages were delivered and how the recipient interacted with it. Statistics available for direct access mailings include number of deliveries, opens and clicks at both the individual and summary level. This data can be accessed using the Message Central reports or exported through the REST APIs. By default, these records are kept for fourteen days; this retention period can be customized on a per-org basis. For instructions on changing the default retention period, see the section "[Retention of External Data](https://support.messagesystems.com/docs/web-mc-user/mc3-mailings-editing.php#mc3-mailings-direct-access-data-retention)" in the *User Guide for Message Central Version 3.x Web UI* .

| [Prev](mc-installation.php)  | [Up](mc-installation.php) |  [Next](mc-configurations.php) |
| Chapter 1. Installing Message Central  | [Table of Contents](index.php) |  1.3. Installation Configurations |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)