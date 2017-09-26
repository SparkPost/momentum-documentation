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

| clear_mail_queue_maintainers |
| [Prev](conf.ref.chroot.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.cluster_max_outbound_connections.php) |

<a name="conf.ref.clear_mail_queue_maintainers"></a>
## Name

clear_mail_queue_maintainers — reschedule the mail queue maintainer

## Synopsis

`clear_mail_queue_maintainers = false`

<a name="idp8546752"></a>
## Description

Reschedule the mail queue maintainer. The default value for this option is `false`.

**Configuration Change. ** As of version 3.6, the default value for this option is `true`.

In some circumstances you may wish to set this option to `true`. Suppose that you have mail in the delayed queue that's been there for a while, and the retry schedule is such that the next maintenance run will be in two hours time. Subsequently, you have a new message delivery attempt that fails transiently, and that message goes to the delayed queue and is set, for example, to be retried in 1200 seconds time. The system will need to reschedule the maintainer so that it runs in 1200 seconds. The default behavior is to schedule a new event for 1200 seconds, and to leave the existing one that will occur in two hours time. The `clear_mail_queue_maintainers` option will remove the existing two hour event and just schedule the 1200 second event. This prevents you from ending up with a lot of redundant maintainer events scheduled for a given domain, which could potentially cause abnormally high memory usage.

<a name="idp8553136"></a>
## Scope

This option is valid in the global scope.

| [Prev](conf.ref.chroot.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.cluster_max_outbound_connections.php) |
| chroot  | [Table of Contents](index.php) |  cluster_max_outbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)