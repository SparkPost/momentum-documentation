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

| 14.27. eleven – Module |
| [Prev](modules.ec_logger.php)  | Chapter 14. Modules Reference |  [Next](modules.exim_logger.php) |

## 14.27. eleven – Module

<a class="indexterm" name="idp12095216"></a>

The `eleven` module implements the spam filter and e-mail categorization service available from [http://www.eleven.de/](http://www.eleven.de/). If you intend to use this module be sure to choose it during installation.

### 14.27.1. Configuration

Find a typical configuration below:

<a name="example.eleven"></a>

**Example 14.47. eleven module**

```
Validate ../modules/partner/eleven eleven {
  work_dir = "/var/tmp"
  update_period = 3600
  license = "/usr/local/eleven/etc/client.key"
  enable_antivir = true
  servers = ( "foo.example.com:55555:1" "bar.example.com:12345:2" )
}
```

The configuration options for the eleven module are as follows:

<dl class="variablelist">

<dt>enable_antivir</dt>

<dd>

This option enables the Avira SAVAPI-based virus detection. *Note*: The minor results `virus` and `outbreak` are only returned if this option is set to `true`. The default value for this option is `false`.

</dd>

<dt>license</dt>

<dd>

The absolute path to the user's license. The default value for this option is `/usr/local/eleven/etc/client.key`.

</dd>

<dt>servers</dt>

<dd>

Use this option to specify additional update servers. Each server is specified as *`host:port:priority`*. The trailing port and priority fields are optional and, if omitted, default to 55555 (the default port for eleven updates) and 5 respectively. Priority decreases as the numerical value increases with `0` being the highest possible priority.

</dd>

<dt>update_period</dt>

<dd>

How often to poll for updates. The default value is `3600` seconds, one hour. If this value is set to `0`, updates are disabled.

</dd>

<dt>work_dir</dt>

<dd>

The location of temporary files created by this module. The default value for this option is `/var/tmp`.

</dd>

</dl>

| [Prev](modules.ec_logger.php)  | [Up](modules.php) |  [Next](modules.exim_logger.php) |
| 14.26. ec_logger – Momentum-Style Logging  | [Table of Contents](index.php) |  14.28. exim_logger – Exim-Compatible Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)