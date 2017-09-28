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

| Chapter 20. Accessing External Data |
| [Prev](rest.Report_Mailing_Summary.php)  |   |  [Next](rest.external.data.overview.php) |

## Chapter 20. Accessing External Data

**Table of Contents**

<dl class="toc">

<dt>[20.1\. Creating Mass Mailings](rest.external.data.php#rest.external.data.mass.mailings)</dt>

<dt>[20.2\. External Data: Overview](rest.external.data.overview.php)</dt>

<dt>[20.3\. Retention of External Data](rest.external.data.retention.php)</dt>

</dl>

In Message Central 3.x you can access lists of recipients stored in data stores external to the Message Central 3.x system. This section describes how to access external data for use in what is called a `direct access mailing`.

### Note

If you are running a direct access mailing and restart the database, the [pe2sched](https://support.messagesystems.com/docs/web-mc/mcsched.php) process must be restarted manually in order for the listener to reconnect to the database. This is also applicable to api-triggered mailings.

If you find that the scheduler fails when the mailing rate reaches four mailings per minute, follow the instructions given at [pe2sched](https://support.messagesystems.com/docs/web-mc/mcsched.php).

The first step in getting started with direct access mailings is to determine whether transactional or mass mailings are a better fit for the current use case.

## 20.1. Creating Mass Mailings

Direct access mass mailings should be used when the group of recipients to be emailed is already known at mailing creation time, or can be described using SQL. This mode is suited for use cases such as newsletters. Direct access mass mailings are scheduled and sent normally.

### Using the Web UI

Mass mailings can be created using the normal mailing creation process in the Message Central 3.x web UI by setting the mailing type to `Direct Access`. On the Recipients tab, select the desired driver type, and fill out the requested information. This information will be validated on save, so that any incorrect information can be fixed at that time. For a detailed description see [Direct Access Mailing](https://support.messagesystems.com/docs/web-mc-user/mc3-mailings-editing.php#mc3-mailings-direct-access).

### Using the REST API

Mass Mailings can also be created through the REST API by using the normal mailing creation endpoint and setting "type": "directaccess" in the mailing definition. The "buildSQL" field of the mailing object must contain a JSON object similar to the examples shown [Section 21.1.1, “Driver Examples”](rest.data.integration.php#rest.mailing.data.driver.examples "21.1.1. Driver Examples"). JSON validation is performed in-band with the API call, so if there is a problem with the JSON you have submitted, an error message will be returned.

| [Prev](rest.Report_Mailing_Summary.php)  |   |  [Next](rest.external.data.overview.php) |
| 19.3. Report_Mailing_Summary  | [Table of Contents](index.php) |  20.2. External Data: Overview |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)