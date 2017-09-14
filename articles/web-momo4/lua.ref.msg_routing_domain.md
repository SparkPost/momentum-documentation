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

| msg:routing_domain |
| [Prev](lua.ref.msg_rcptto.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_text.php) |

<a name="lua.ref.msg_routing_domain"></a>
## Name

msg:routing_domain — Set or return the routing domain for a message

<a name="idp16951024"></a>
## Synopsis

`msg:routing_domain(...);`

`...: string, optional`<a name="idp16954000"></a>
## Description

Set or return the routing domain for a message. To return the routing domain, use this function with no parameter. Ensure that you return the routing domain in lower case.

In order to set the routing domain you must add the following to your code: `require('msys.extended.message_routing');`. This will register a hook that will allow the routing domain to be set from Lua.

```
-- DB query to find SMS destination. Query returns "domain"
require('msys.datasource');
require('msys.db');
local orig_domain = msg:routing_domain();
local ritr, dberr = msys.db.query("ecdb", "SELECT to_address FROM smpp.sms_address_mapping
WHERE from_address = ?", {orig_domain});
```

### Warning

In some circumstances, using this function or simply requiring it in your policy can cause performance issues, such as causing Momentum to become unresponsive and restart or causing additional overhead per message. To alleviate this, set [keep_message_dicts_in_memory](conf.ref.keep_message_dicts_in_memory.php "keep_message_dicts_in_memory") to `true`.

The data cache used in the preceding example must be defined in your configuration file. For more information, see [Section 71.29, “ds_core - Datasource Query Core”](modules.ds_core.php "71.29. ds_core - Datasource Query Core").

Enable this function with the statement `require('msys.extended.message_routing');`.

### Warning

In the validate_data_spool_each_rcpt phase you can take action on each message, after possible alias expansion. Actions taken in this phase are scoped to an individual recipient.

In the validate_rcptto phase you can validate that a provided recipient string is valid. Actions taken in this phase affect the current batch.

| [Prev](lua.ref.msg_rcptto.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_text.php) |
| msg:rcptto  | [Table of Contents](index.php) |  msg:text |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)