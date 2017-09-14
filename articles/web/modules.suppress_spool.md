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

| 14.56. suppress_spool – Deferred Message Spooling |
| [Prev](modules.stats_producer.php)  | Chapter 14. Modules Reference |  [Next](modules.syslog_io.php) |

## 14.56. suppress_spool – Deferred Message Spooling

<a class="indexterm" name="idp13035232"></a>

The primary bottleneck for most MTAs is spooling messages to disk. To be fully RFC compliant, an MTA must complete writing a message to disk before they communicate to the sender that it has been received. The purpose of this is so that in the event of crash or power failure, the MTA will not lose any messages.

For many outbound-oriented mailers and ESPs, this safety can be pushed back up into their application. If messages can be regenerated dynamically, then in the event of a crash it may be sufficent simply to know which messages have been delivered, so that the queue can be emptied and messages regenerated.

In this case, an administrator can gain considerable performance benefit from deferring spool attempts with the `suppress_spool` module. The `suppress_spool` module works by completely avoiding writing a message to disk until one of two things happens:

*   The configured threshold of retries in the `suppress_spool` module is reached.

*   A memory based policy decision (notably [max_resident_active_queue](conf.ref.max_resident_active_queue.php "max_resident_active_queue")) causes a forced spool write.

### 14.56.1. Configuration

To enable deferred spooling you can use the following configuration:

<a name="example.suppress_spool"></a>

**Example 14.77. suppress_spool module**

```
_Unsafe_Spool = true
IO_System io/suppress_spool suppress_spool {
  Num_Retries = 2
}
```

The `_unsafe_spool` line disables Momentum's internal protections to guarantee that a message is actually written to disk before acceptance. The module stanza loads the `suppress_spool` module and instructs it to only spool messages which have had three unsuccessful delivery attempts, namely, those that have been retried twice.

### Warning

This module is dangerous and can result in data loss if you experience a crash.

| [Prev](modules.stats_producer.php)  | [Up](modules.php) |  [Next](modules.syslog_io.php) |
| 14.55. stats_producer – Stats Producer Module  | [Table of Contents](index.php) |  14.57. syslog_io – The syslog_io Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)