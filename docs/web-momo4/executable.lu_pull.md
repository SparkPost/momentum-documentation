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

| lu_pull |
| [Prev](executable.jlogctl.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.validate_config.php) |

<a name="executable.lu_pull"></a>
## Name

lu_pull — update the Live Updates database

## Synopsis

`/opt/msys/ecelerity/bin/lu_pull` [ --ad_update_only | -a ]

`/opt/msys/ecelerity/bin/lu_pull` [ --ad_updatesdir *`/path/to/updatesdir`* ]

`/opt/msys/ecelerity/bin/lu_pull` [ --feedback *`/path/to/feedback_dir`* ]

`/opt/msys/ecelerity/bin/lu_pull` [ --help ]

`/opt/msys/ecelerity/bin/lu_pull` [ --license *`/path/to/license`* ]

`/opt/msys/ecelerity/bin/lu_pull` [ --product *`productname`* ]

`/opt/msys/ecelerity/bin/lu_pull` [ --proxy *`proxy_url`* --proxy_user *`username`* --proxy_password *`password`* ]

`/opt/msys/ecelerity/bin/lu_pull` [ --updatesdir *`/path/to/updatesdir`* ]

`/opt/msys/ecelerity/bin/lu_pull` [ --url *`update_url`* ]

`/opt/msys/ecelerity/bin/lu_pull` [ --version *`version_number`* ]

<a name="idp12665088"></a>
## Description

The **lu_pull** command is used to update the Live Updates database either for bounce or adaptive rules.

<dl class="variablelist">

<dt>--ad_update_only</dt>

<dd>

Update adaptive rules only.

</dd>

<dt>--ad_updatesdir *`/path/to/updatesdir`*</dt>

<dd>

Override the default adaptive rules location, `/opt/msys/ecelerity/etc/msys`.

</dd>

<dt>--feedback *`/path/to/feedback_dir`*</dt>

<dd>

The location of the bounce classification files. The default value for this option is `/opt/msys/ecelerity/etc/updates`.

</dd>

<dt>--help</dt>

<dd>

Display the command options.

</dd>

<dt>--license *`/path/to/license`*</dt>

<dd>

The default value for this option is `/opt/msys/ecelerity/etc/license`. Use this option to overrride the default.

</dd>

<dt>--product *`productname`*</dt>

<dd>

Override the default productname. The default value for this option is `ecelerity`.

</dd>

<dt>--proxy *`proxy_url`* --proxy_user *`username`* --proxy_password *`password`*</dt>

<dd>

If you are using a proxy server to access updates use this option to specify the proxy server and your credentials. Use of a proxy server with live updates is discussed in [Using a Proxy Server](https://support.messagesystems.com/docs/web-ad/ad.adaptive.automated.proxy.php).

</dd>

<dt>--url *`update_url`*</dt>

<dd>

Override the default update URL. The default for this option is `https://support.messagesystems.com`.

</dd>

<dt>--updatesdir *`/path/to/updatesdir`*</dt>

<dd>

Override the default update directory. The default value for this option is `/opt/msys/ecelerity/etc/updates`.

</dd>

<dt>--version *`version_number`*</dt>

<dd>

Override the product version of the installation. For example, if you would like to run lu_pull from a 3.2 installation to pull down a 3.0 update, you can do that using this option. This is strictly for testing purpose. We do not support using it in production.

</dd>

</dl>

<a name="idp12695168"></a>
## See Also

[Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery")

| [Prev](executable.jlogctl.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.validate_config.php) |
| jlogctl  | [Table of Contents](index.php) |  validate_config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)