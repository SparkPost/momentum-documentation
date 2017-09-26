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

| 68.51. gcm_request |
| [Prev](structs.event_io_state.php)  | Chapter 68. Structs |  [Next](structs.gcm_message_response.php) |

## 68.51. gcm_request

**Configuration Change. ** This feature is available as of version 3.5.5.

This struct is defined as follows:

```
/* gcm request */
typedef struct _gcm_request {
 struct json_object *json; /* GCM json payload (control and message payload) */
} gcm_request;
```

To use this struct, include the file `modules/mobility/gcm/gcm.h`.

### 68.51.1. See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [Chapter 62, *Hooks in the gcm Scope*](hooks.gcm.php "Chapter 62. Hooks in the gcm Scope") .

| [Prev](structs.event_io_state.php)  | [Up](structs.php) |  [Next](structs.gcm_message_response.php) |
| 68.50. event_io_state  | [Table of Contents](index.php) |  68.52. gcm_message_response |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)