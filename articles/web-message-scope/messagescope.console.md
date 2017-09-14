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

| 2.4. messagescope Management Using Console Commands |
| [Prev](modules.messagescope.lua.php)  | Chapter 2. The messagescope Module |  [Next](modules.msc_logger.php) |

## 2.4. messagescope Management Using Console Commands

The messagescope module can be controlled through the `ec_console`; the following command is available:

messagescope pull diff *`timestamp`*

This command instructs the system to pull a new differential update beginning at the timesstamp specified. No response will be generated without a timesstamp.

As with any module, configuration options can be set from ec_console. You can set the following options as shown below:

messagescope set diff_host *`IP_Address`*

This command sets the hostname from which to fetch differential updates. See [diff_host](modules.messagescope.php#modules.messagescope.diff_host) for more information.

messagescope set iteration *`int`*

This command sets the timeout (in seconds) to poll whether list data has been loaded. This should be less than the timeout value.

messagescope set timeout *`int`*

This command sets the maximum time (in seconds) to wait for list data to load before timing out a connection waiting on that data.

| [Prev](modules.messagescope.lua.php)  | [Up](modules.messagescope.php) |  [Next](modules.msc_logger.php) |
| 2.3. Lua Usage  | [Table of Contents](index.php) |  Chapter 3. The msc_logger Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)