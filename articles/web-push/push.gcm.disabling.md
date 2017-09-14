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

| 7.2. Disabling GCM |
| [Prev](push.gcm.using.php)  | Chapter 7. Using GCM |  [Next](push.gcm.lua.php) |

## 7.2. Disabling GCM

If you enable GCM at the domain level you can disable GCM for a specific domain by removing the `routes` and the `delivery_method` options from the scope where you wish to disable GCM. In [Example 7.1, “Configuring for GCM”](push.gcm.using.php#push.gcm.configuring.gcm "Example 7.1. Configuring for GCM") all you need do is remove the GCM-related options from any Google push domains that you have defined. (*Note*: Apps are domain-specific so if you need to disable notifications for a specific app, disable the appropriate domain.)

### Note

If you have some domains that are GCM enabled and some that are not, do not configure GCM-related options in a global context (excepting the HTTP options shown at [Section 5.2.1.1, “HTTP Protocol Configuration”](push.gcm.other.options.php#push.gcm.http.options "5.2.1.1. HTTP Protocol Configuration") which are identical for all domains). Only set them within the domain scope as shown in [Example 7.1, “Configuring for GCM”](push.gcm.using.php#push.gcm.configuring.gcm "Example 7.1. Configuring for GCM").

To disable GCM entirely, remove the `gcm` module, the gcm_logger module and any options used to configure GCM.

| [Prev](push.gcm.using.php)  | [Up](push.gcm.using.php) |  [Next](push.gcm.lua.php) |
| Chapter 7. Using GCM  | [Table of Contents](index.php) |  Chapter 8. GCM and Lua |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)