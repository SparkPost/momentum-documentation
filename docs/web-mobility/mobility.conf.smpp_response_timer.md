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

| smpp_response_timer |
| [Prev](mobility.conf.smpp_registered_delivery.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_submit_response_message_id_format.php) |

<a name="mobility.conf.smpp_response_timer"></a>
## Name

smpp_response_timer — Specifies the amount of inactivity time (in seconds) on the SMPP session prior to sending an SMPP enquire_link request

## Synopsis

`smpp_response_timer = 15`

<a name="idp1969600"></a>
## Description

This option specifies the amount of time (in seconds and fractions of seconds) that SMPP will wait for a response to an SMPP request. An SMPP request is considered to have failed beyond this time frame.

The default value for this option is `15`.

It is highly recommended that `smpp_response_timer` be less than or equal to `smpp_enquire_link_timeout` and that `smpp_enquire_link_timeout` be less than or equal to `smpp_inactivity_timer`.

<a name="idp1974880"></a>
## Scope

smpp_response_timer is valid in the binding, binding_group, domain and global scopes.

<a name="idp1976768"></a>
## See Also

[smpp_enquire_link_timer](mobility.conf.smpp_enquire_link_timer.php "smpp_enquire_link_timer"), [smpp_inactivity_timer](mobility.conf.smpp_inactivity_timer.php "smpp_inactivity_timer")

| [Prev](mobility.conf.smpp_registered_delivery.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_submit_response_message_id_format.php) |
| smpp_registered_delivery  | [Table of Contents](index.php) |  smpp_submit_response_message_id_format |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)