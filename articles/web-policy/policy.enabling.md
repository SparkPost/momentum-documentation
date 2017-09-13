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

| Chapter 1. Enabling the Policy Scripts |
| [Prev](policy.preface.php)  |   |  [Next](policy.configuration.options.php) |

## Chapter 1. Enabling the Policy Scripts

As of version 3.2, default Lua policy scripts are included with Momentum. After installing Momentum you can configure policy by editing the `/opt/msys/ecelerity/etc/sample-configs/dp_config.lua` file. This document describes the available options, notes their default status and explains the policies that they enforce.

The built-in Lua policy scripts are not enabled by default. To use them you must add a `default_policy.conf` file to your configuration. To do this make use of the `/opt/msys/ecelerity/etc/sample-configs/default_policy.conf` file. Instructions for adding a configuration file are found in [Best Practices for Adding Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.adding.configuration.files.php).

### Note

Since the policy scripts are written in Lua you must enable the scriptlet module. For information about this module see [scriptlet Module](https://support.messagesystems.com/docs/web-ref/modules.scriptlet.php). The audit series modules are dependent on the inbound_audit module. For information about this module see [inbound_audit Module](https://support.messagesystems.com/docs/web-ref/modules.inbound_audit.php). The relay authorization configuration is dependent on the auth_ds module. For information about this module see [auth_ds Module](https://support.messagesystems.com/docs/web-ref/modules.auth_ds.php). The early talker configuration is dependent on the conntrol module. For information about this module see [conntrol Module](https://support.messagesystems.com/docs/web-ref/modules.conntrol.php).

In addition to enabling the `default_policy.conf` file, you must configure a `dp_config.lua` file. Use the existing `/opt/msys/ecelerity/etc/sample-configs/dp_config.lua` file and save it to a directory under the `/opt/msys/ecelerity/etc/conf/default` directory. Also copy the `/opt/msys/ecelerity/etc/sample-configs/custom_policy.lua` to the same directory as the `dp_config.lua` file. Add these files to the repository as well. For more information about the repository directory structure see [The Momentum Configuration Server: ecconfigd](https://support.messagesystems.com/docs/web-ref/conf.ecconfigd.php). This document describes all the configuration options in the `dp_config.lua` file. For your convenience these files are reproduced in [Appendix A, *The `dp_config.lua` and `custom_policy.lua` Files*](policy.appendix.php "Appendix A. The dp_config.lua and custom_policy.lua Files") .

In addition to defining connection limits, whitelists and other policy-related items, the default policy scripts can also be used to configure various partner modules. These modules include:

*   [BEIK](https://support.messagesystems.com/docs/web-ref/modules.beik.php)

*   [Commtouch](https://support.messagesystems.com/docs/web-ref/modules.commtouch.php)

*   [Cloudmark](https://support.messagesystems.com/docs/web-ref/modules.cloudmark.php)

*   [Content Scanning Application Programming Interface (CSAPI)](https://support.messagesystems.com/docs/web-ref/modules.csapi.php)

Enable the modules you intend to use. Note: *The beik and csapi modules are included in the `default_policy.conf` file. The cloudmark and commtouch modules are not.*                                                                                                                     In order to use the default policy scripts, AV modules must be loaded in "passive" mode. For more information see [Module Overview](https://support.messagesystems.com/docs/web-ref/modules.overview.implicit.php).

| [Prev](policy.preface.php)  |   |  [Next](policy.configuration.options.php) |
| Preface  | [Table of Contents](index.php) |  Chapter 2. Configuration Items |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)