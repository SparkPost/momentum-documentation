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

| 15.2. Configuration Options |
| [Prev](conf.overview.php)  | Chapter 15. Configuration Overview |  [Next](ecelerity.conf.fallback.php) |

## 15.2. Configuration Options

Momentum provides a rich set of configuration options. Some options are simple configuration options, while other configuration options are more complex, such as defining data structures.

These configuration options can be defined in the following scopes: global, domain, host, binding, binding_group, security, pathway, pathway_group, listener, listen, peer, threadpool, debug_flags, and cluster, as well as in listener-specific scopes. The various modules that extend the functionality of Momentum are also valid scopes.

### Note

All configuration options are case insensitive. For example, you can define an SMTP listener as `ESMTP_Listener` or `esmtp_listener`.

The default configuration files provide default values such that there should be very few changes required to start sending mail through the Momentum server. However, there are a few parameters you will almost certainly need to change:

*   [relay_host](outbound_mail.relay_hosts.php "25.7. Outbound Email Relay")

*   [relay_domains](esmtp_listener.relay_domains.php "19.2. Inbound Email Relay or Gateway")

*   [Authentication](inbound_smtp.php "19.5. ESMTP_Listener Authentication")

Many other configuration options can be modified, as discussed throughout this manual.

For a summary of all the non-module specific configuration options, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

Modules and their configuration options are discussed in the [Chapter 71, *Modules Reference*](modules.php "Chapter 71. Modules Reference") .

Modify the configuration options in the specific configuration file or use the **config** command for online configuration tuning. For details about this command, see [config](console_commands.config.php "config").

| [Prev](conf.overview.php)  | [Up](conf.overview.php) |  [Next](ecelerity.conf.fallback.php) |
| Chapter 15. Configuration Overview  | [Table of Contents](index.php) |  15.3. Configuration Scopes and Fallback |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)