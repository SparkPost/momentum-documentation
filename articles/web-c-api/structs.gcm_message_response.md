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

| 68.52. gcm_message_response |
| [Prev](structs.gcm_request.php)  | Chapter 68. Structs |  [Next](structs.generic_module_infrastructure.php) |

## 68.52. gcm_message_response

**Configuration Change. ** This feature is available as of version 3.5.5.

This struct is defined as follows:

```
/*
 * gcm reponse structures
 * Encoded from json object returned in http 200 responses.
 * This struct is also used by gcm_response_eval_hook.
 */

/* GCM recipient response - per recipient */
typedef struct _gcm_recipient_response {
 const char *message_id;     /* message id assigned by google */
 const char *registration_id;/* canonical reg id (new id for recipient) */
 const char *error;          /* error reponse */
 enum GCM_ERROR  error_code; /* error code */
} gcm_recipient_response; 

/* GCM message response - per notification */
typedef struct _gcm_message_response {
 int success;        /* Number of successful recipients */
 int failure;        /* Number of recipients that failed */
 int canonical_ids;  /* Number of recipients that have a newer Registration ID */
 /* NOTE - currently not supporting Google Multicast so there
   * is just one results element.  XMPP version of Google GCM
   * does not support Multicast.  If we support multicast then
   * the results need to be an array.
   */
 gcm_recipient_response results; /* response results per recipient */
} gcm_message_response;
```

To use this struct, include the file `modules/mobility/gcm/gcm.h`.

### 68.52.1. See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [Chapter 62, *Hooks in the gcm Scope*](hooks.gcm.php "Chapter 62. Hooks in the gcm Scope") .

| [Prev](structs.gcm_request.php)  | [Up](structs.php) |  [Next](structs.generic_module_infrastructure.php) |
| 68.51. gcm_request  | [Table of Contents](index.php) |  68.53. generic_module_infrastructure |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)