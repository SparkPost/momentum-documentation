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

| 20.2. External Data: Overview |
| [Prev](rest.external.data.php)  | Chapter 20. Accessing External Data |  [Next](rest.external.data.retention.php) |

## 20.2. External Data: Overview

This section describes the details of how Direct Access mode mailings are launched and generated. It is an overview that is intended to be of use for determining the context of the problem when troubleshooting any issues that may occur, or when designing test cases.

### Mailing Creation

Direct access mailings can be created using the web UI or the mailing creation REST APIs with "type": "directaccess". The metadata used by the Web UI to build the input forms for the different drivers is available through the REST API: `/v1.0/mailing/directaccess/drivers`. In order to see what sort of data the system expects, review this section.

### Scheduling

The process of scheduling a direct access mailing is identical to the process used for a regular mailing. On the back end, a row is inserted into the database, which is polled every minute by the scheduler.

### Getting the External Data

The scheduler starts up an embedded Perl interpreter and passes the contents of BuildSQL to it and other information such as the mailing and org ids. The embedded Perl loads the appropriate external data driver and commences pulling rows from the external data source. Each row is written to a block file on disk. After each block file is full, the scheduler marks that block file as ready to be generated.

### Launching Generators In the Manager

Every so often, each manager in the system checks in with the scheduler to see if there is any work to be done. When block files have been marked ready, the manager launches a generator for that mailing.

### Pulling Block File Data to the Generator

The generator connects to the scheduler and requests a block of mailing data. Each row received is parsed into the same data structure as in normal operation. As mail is sent, progress information is written to a jlog instead of being recorded in-band in the main Message Central 3.x database.

### Loading Progress Data In the Manager

Every so often, the Manager reads all existing Generator jlogs and sends progress information to two places:

1.  the scheduler

2.  the main database

The data sent to the scheduler is recorded in the block file, to protect against double-sending in the event of a system outage. The data sent to the main database is used to create recipient records for use in reporting and in web views of email content.

| [Prev](rest.external.data.php)  | [Up](rest.external.data.php) |  [Next](rest.external.data.retention.php) |
| Chapter 20. Accessing External Data  | [Table of Contents](index.php) |  20.3. Retention of External Data |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)