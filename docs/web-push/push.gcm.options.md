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

| Chapter 5. GCM Options |
| [Prev](push.google.php)  | Part II. Configuring Momentum for Google Cloud Messages (GCM) |  [Next](push.gcm.gcm_application_id.php) |

## Chapter 5. GCM Options

**Table of Contents**

<dl class="toc">

<dt>[5.1\. GCM-specific Configuration Options](push.gcm.options.php#push.gcm.gcm-specific.options)</dt>

<dt>[5.2\. Other Configuration Options Used with GCM](push.gcm.other.options.php)</dt>

</dl>

This chapter describes the non-module options related to Google Push notifications. For a description of the options valid within the scope of the Google modules see [Section 6.1, “gcm Module”](push.gcm.modules.php#push.modules.gcm "6.1. gcm Module").

This chapter also contains a section on existing Momentum options that must be configured in order to use GCM.

## 5.1. GCM-specific Configuration Options

These GCM options are valid in some or all of the following scopes: the domain, binding_group, binding and global scopes. Of the GCM-specific options, you must configure `gcm_authorization_token_id`. You can use the default values for other GCM-specific options.

| [Prev](push.google.php)  | [Up](push.google.php) |  [Next](push.gcm.gcm_application_id.php) |
| Part II. Configuring Momentum for Google Cloud Messages (GCM)  | [Table of Contents](index.php) |  gcm_application_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)