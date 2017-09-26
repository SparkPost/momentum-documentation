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

| 11.2. Message Retention |
| [Prev](mobility.message.retry.php)  | Chapter 11. Retrying Messages |  [Next](glossary.php) |

## 11.2. Message Retention

By default, messages are stored in the Riak database for fourteen days (1209600 seconds). This length of time is determined by `expiry_secs` in the `/opt/msys/3rdParty/riak/etc/app.config` file.

The relevant section of this configuration file is reproduced below.:

```
{<<"mstore">>, riak_kv_bitcask_backend, [
  {data_root, "/var/db/riak/mstore"},
  {expiry_secs, 1209600}
]},
```

To adjust the length of time that messages are retained, change the value of `expiry_secs`.

For more information about Riak see [Riak](https://support.messagesystems.com/docs/web-ref/operations.riak.php).

| [Prev](mobility.message.retry.php)  | [Up](mobility.message.retry.php) |  [Next](glossary.php) |
| Chapter 11. Retrying Messages  | [Table of Contents](index.php) |  Glossary |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)