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

| 5.3. Default Policy Scriptlets |
| [Prev](implementing.policy.scriptlets.php)  | Chapter 5. Implementing Policy with Momentum |  [Next](policy.implementing.php) |

## 5.3. Default Policy Scriptlets

As of version 3.2, default Lua policy scripts are included with Momentum for receiving. These scriptlets are found in the `/opt/msys/ecelerity/libexec/scriptlets/msys/default_policy.lua` file. These files are discussed in detail in the [Default Policy User Guide](https://support.messagesystems.com/docs/web-policy/index.php).

In order to use the default policy scriptlets you must add the `/opt/msys/ecelerity/etc/sample-configs/default_policy.conf` file to your configuration. For instructions on adding a configuration file see [Section 2.9, “Best Practices for Adding Configuration Files”](conf.adding.configuration.files.php "2.9. Best Practices for Adding Configuration Files").

You will likely need to alter the `default_policy.conf` file to suit your circumstances—by only enabling specific scanners, for example.

In the `default_policy.conf` file you should also enable the datasource(s) suitable for your language encoding. A datasource is necessary for the keyword filter, which is described at the bottom of the `/opt/msys/ecelerity/etc/conf/default/dp_config.lua` file. As of version 3.4, the keyword file, `dp_config.lua`, and `custom_policy.lua` must be copied from `/opt/msys/ecelerity/etc/sample-configs/` to `/opt/msys/ecelerity/etc/conf/default/`.

| [Prev](implementing.policy.scriptlets.php)  | [Up](policy.php) |  [Next](policy.implementing.php) |
| 5.2. Implementing Policy Using Scriptlets  | [Table of Contents](index.php) |  5.4. Implementing Policy Using Sieve |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)