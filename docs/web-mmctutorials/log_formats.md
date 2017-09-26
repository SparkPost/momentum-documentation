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

| Chapter 20. Log Formats |
| [Prev](getting.started.raw_log.php)  | Part IV. How-To Guides: Reporting and Tracking |  [Next](log_formats.eventlog.php) |

## Chapter 20. Log Formats

**Table of Contents**

<dl class="toc">

<dt>[20.1\. `bouncelog`](log_formats.php#log_formats.bouncelog)</dt>

<dt>[20.2\. `eventlog`](log_formats.eventlog.php)</dt>

<dt>[20.3\. `fbllog`](log_formats.fbllog.php)</dt>

<dt>[20.4\. `mainlog`](log_formats.mainlog.php)</dt>

<dt>[20.5\. `rejectlog`](log_formats.rejectlog.php)</dt>

<dt>[20.6\. Bounce Classification Codes](bounce_logger.classification.codes.php)</dt>

<dt>[20.7\. Connection Stages](log_formats.connection.stages.php)</dt>

</dl>

## 20.1. `bouncelog`

The `bouncelog` records both in-band and out-of-band bounces.

### 20.1.1. Bounce Records

A bounce line is written to the `bouncelog` for every bounce that SparkPost Elite witnesses.

The log entry is an `@` delimited string, such as the following:

```
1064868656@91/6D-07914-E67BC044@00/00-03736-F4101B54@00/00-04532-A3456B54@B@ »
johndoe@example.fict@info@postalengine.com@group-a@binding-a@21@24@1223@10.0.0.1@554 »
 5.4.7 [internal] exceeded max time without delivery
```

The following is a description of the fields:

<a name="log_formats.bounce.record.fields"></a>

**Table 20.1. Bounce Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1064868656 | Date of reception in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | 91/6D-07914-E67BC044 | Message's unique message-id |
| 2 | 00/00-03736-F4101B54 | Batch ID |
| 3 | 00/00-04532-A3456B54 | Connection ID |
| 4 | B | `B` indicating a bounce or `T` indicating a transient failure |
| 5 | johndoe | Localpart of the recipient of the original message |
| 6 | example.fict | Domain of the recipient |
| 7 | info | Localpart of the envelope sender |
| 8 | postalengine.com | Domain of the envelope sender |
| 9 | group-a | Binding group to which the bounce email was bound, if available |
| 10 | binding-a | Binding to which the bounce email was bound, if available |
| 11 | 21 | Stage of the message (See [Section 20.7, “Connection Stages”](log_formats.connection.stages.php "20.7. Connection Stages").) |
| 12 | 24 | Classification code for the message (See [Section 20.6, “Bounce Classification Codes”](bounce_logger.classification.codes.php "20.6. Bounce Classification Codes").) |
| 13 | 1223 | Message size |
| 14 | 10.0.0.1 | IP address of the server that bounced the message |
| 15 | 554 5.4.7 [internal] exceeded max time without delivery | Raw bounce message from the server |

### 20.1.2. Heartbeat Records

In addition to the record described in the previous section, a heartbeat is written periodically to the log, indicating that SparkPost Elite is still active and may log further data.

The log entry is an `@` delimited string, such as the following:

`1251222268@@@@M1`

The following is a description of the fields:

<a name="log_formats.heartbeat.bounce.fields"></a>

**Table 20.2. Heartbeat record fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1251222268 | Date of delivery in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 |   | Unused |
| 2 |   | Unused |
| 3 |   | Unused |
| 4 | M1 | `M1` indicating a heartbeat |

Having three unused fields ensures that, like other logs, the fifth field is the log entry type. This makes parsing easier.

| [Prev](getting.started.raw_log.php)  | [Up](p.reporting_tracking.php) |  [Next](log_formats.eventlog.php) |
| Chapter 19. Retrieving Reporting Logs  | [Table of Contents](index.php) |  20.2. `eventlog` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)