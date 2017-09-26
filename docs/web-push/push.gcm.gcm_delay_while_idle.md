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

| gcm_delay_while_idle |
| [Prev](push.gcm.gcm_authorization_token_id.php)  | 5.1. GCM-specific Configuration Options |  [Next](push.gcm.gcm_dry_run.php) |

<a name="push.gcm.gcm_delay_while_idle"></a>
## Name

gcm_delay_while_idle — Whether or not to send the notification immediately if a device is idle

## Synopsis

`gcm_delay_while_idle = false`

<a name="idp725920"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.5.5.

A device is idle (sleeping) when the screen is off. When this option is `true`, Google will queue messsages until the phone is not idle. If this option is `false`, notifications are sent to the phone whether it is idle or not.

The default value for this option is `false`.

*Note*: If present, the `X-Delay-While-Idle header` extension overrides this option.

<a name="idp732384"></a>
## Scope

`gcm_delay_while_idle` is valid in the global, binding_group, binding and domain scopes.

<a name="idp734240"></a>
## See Also

[Send-to-sync Message](push.gloss.php#push.gloss.send-to-sync "Send-to-sync Message")

| [Prev](push.gcm.gcm_authorization_token_id.php)  | [Up](push.gcm.options.php#push.gcm.gcm-specific.options) |  [Next](push.gcm.gcm_dry_run.php) |
| gcm_authorization_token_id  | [Table of Contents](index.php) |  gcm_dry_run |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)