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

| gcm_authorization_token_id |
| [Prev](push.gcm.gcm_application_id.php)  | 5.1. GCM-specific Configuration Options |  [Next](push.gcm.gcm_delay_while_idle.php) |

<a name="push.gcm.gcm_authorization_token_id"></a>
## Name

gcm_authorization_token_id — The authorization token that permits sending push notifications

## Synopsis

gcm_authorization_token_id = "*`unique_token_id`*"

<a name="idp547600"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.5.5.

While the `gcm_application_id` provides the application name, this option specifies the authorization token for an application. This token allows you to send push notifications on behalf of a specific client. The token is supplied by Google and is also known as the Server API Key. The key or token identifies a specific mobile application and has an associated whitelist of IP addresses allowed to send notifications; this whitelist must be set up before using GCM.

**gcm_authorization_token_id and Scope**

If this option is configured at the binding level then that binding can only send notifications for the application associated with this token.

If this option is configured at the domain level then all bindings for that domain will send notifications only for the application associated with this token.

If this option is configured at the global level, then Momentum is set up to deliver notifications only for the application associated with this token.

While it is possible for a customer to have more than one server API key for an application, as far as Momentum is concerned a specific connection will serve one mobile application and need one valid authorization token. Multiple connections can send notifications for the same mobile application.

There is no default value for this option but this option must be set; Set it to the key provided by Google.

<a name="idp555728"></a>
## Scope

`gcm_authorization_token_id` is valid in the global, binding_group, binding and domain scopes.

<a name="idp557504"></a>
## See Also

[gcm_application_id](push.gcm.gcm_application_id.php "gcm_application_id")

| [Prev](push.gcm.gcm_application_id.php)  | [Up](push.gcm.options.php#push.gcm.gcm-specific.options) |  [Next](push.gcm.gcm_delay_while_idle.php) |
| gcm_application_id  | [Table of Contents](index.php) |  gcm_delay_while_idle |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)