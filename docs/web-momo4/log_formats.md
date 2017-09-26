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

| Chapter 35. Log Formats |
| [Prev](log_rotating.php)  | Part IV. Logging |  [Next](adaptive.log.format.php) |

## Chapter 35. Log Formats

**Table of Contents**

<dl class="toc">

<dt>[35.1\. `acctlog`](log_formats.php#log_formats.acctlog)</dt>

<dt>[35.2\. `adaptive` Log](adaptive.log.format.php)</dt>

<dt>[35.3\. `bouncelog`](log_formats.bouncelog.php)</dt>

<dt>[35.4\. `fbllog`](log_formats.fbllog.php)</dt>

<dt>[35.5\. `httplog`](log_formats.httplog.php)</dt>

<dt>[35.6\. `importlog`](log_formats.importlog.php)</dt>

<dt>[35.7\. `mainlog`](log_formats.mainlog.php)</dt>

<dt>[35.8\. `paniclog`](log_formats.paniclog.php)</dt>

<dt>[35.9\. `rejectlog`](log_formats.rejectlog.php)</dt>

<dt>[35.10\. Bounce Classification Codes](bounce_logger.classification.codes.php)</dt>

<dt>[35.11\. Connection Stages](log_formats.connection.stages.php)</dt>

</dl>

## 35.1. `acctlog`

The `acctlog` contains both authentication entries and authorization entries for the ESMTP_Listener and Control_Listener. It is configured in the [ec_logger](modules.ec_logger.php "71.30. EC_logger – Momentum-Style Logging") module.

### 35.1.1. Authentication Records

If enabled for the listener, authentication events for Unix domain sockets are logged one per line. The log entry is an `@` delimited string, such as the following:

`1160503808@N@/tmp/2025@@ec-user@1`

If enabled for the listener, authentication events for TCP/IP listeners are logged one per line. The log entry is an `@` delimited string, such as the following:

`1160172232@N@*:2025@10.80.116.126:37164@ec_user@1`

Note that `@`, `\`, `\n` and other control characters appearing in a field are escaped by adding an `\` before them.

The following is a description of the fields:

<a name="log_formats.authentication.record.fields"></a>

**Table 35.1. Authentication Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1160172232 | Date of authentication in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | N | `N` indicating an authentication entry or `T` indicating an authentication timeout |
| 2 | *:2025 | Listener endpoint on which the event occurred |
| 3 | 10.80.116.126:37164 | IP and port of the peer (For Unix domain connections, this field will be empty.) |
| 4 | ec_user | User name used for the authentication |
| 5 | 1 | 1 indicates the authentication is successful; 0 otherwise. |

### 35.1.2. Authorization Records

A line is written to `acctlog` for every authorization event. The log entry is an `@` delimited string, such as the following:

```
1160503811@Z@/tmp/2025@@ec-user@1@summary@users
1160504707@Z@/tmp/2025@@ec-user@0@shutdown
1160172223@Z@*:2025@10.80.116.126:37162@ec-user@1@summary@users
1160172219@Z@*:2025@10.80.116.126:37162@ec-user@0@shutdown
```

Note that `@`, `\`, `\n` and other control characters appearing in a field are escaped by adding an `\` before them.

The following is a description of the fields:

<a name="log_formats.authorization.record.fields"></a>

**Table 35.2. Authorization Record Fields**

| Offset | Example Field | Description |
| --- | --- | --- |
| 0 | 1160172219 | Date of authorization in Unix timestamp format (seconds since 00:00:00 Jan 1, 1970) |
| 1 | Z | `Z` indicating an authorization entry |
| 2 | /tmp/2025 *or* *:2025 | Listener endpoint on which the event occurred |
| 3 | 10.80.116.126:37162 | IP and port of the peer (For Unix domain connections this field will be blank.) |
| 4 | ec_user | User name used for the authentication |
| 5 | 1 | 1 indicates the user is authorized to run the command; 0 indicates the authorization failed; -1 indicates some error occurred during authorization. |
| 6 | summary | Command that was requested to run |
| 7 | users | Role that matched during successful authorization |

### Note

The `?` type indicator denotes an unknown `acctlog` type.

| [Prev](log_rotating.php)  | [Up](p.logs.php) |  [Next](adaptive.log.format.php) |
| Chapter 34. Rotating Logs **ec_rotate**  | [Table of Contents](index.php) |  35.2. `adaptive` Log |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)