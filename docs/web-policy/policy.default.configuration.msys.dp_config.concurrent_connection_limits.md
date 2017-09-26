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

| 4.5. msys.dp_config.concurrent_connection_limits |
| [Prev](policy.default.configuration.msys.dp_config.fcdns.php)  | Chapter 4. Configuration Details |  [Next](policy.default.configuration.msys.dp_config.audit_series.php) |

## 4.5. msys.dp_config.concurrent_connection_limits

This table determines the behavior with respect to concurrent connection limits.

Find below the sample excerpt included in the `dp_config.lua` file.

```
msys.dp_config.concurrent_connection_limits = {
  { check = true,
    mask = "/32",
    limit = 10,
    service = "SMTP",
    honor_whitelist = { "global" },
  },
  { check = true,
    mask = "/24",
    limit = 100,
    service = "SMTP",
    honor_whitelist = { "global" },
  },
  -- System-wide connection limit, don't honor the whitelists here
  { check = true,
    mask = "/0",
    limit = 20000,
    service = "SMTP",
  }
};
msys.dp_config.audit_series = {};
```

The elements of this configuration table are as follows:

<dl class="variablelist">

<dt>check</dt>

<dd>

Whether or not to use this configuration item.

</dd>

<dt>mask</dt>

<dd>

The CIDR mask to use.

</dd>

<dt>limit</dt>

<dd>

The number of concurrent connections you wish to allow. When this limit is exceeded, the code `421` is issued along with the message `connection limit exceeded`.

</dd>

<dt>service</dt>

<dd>

The type of service you are using. Typically this will be `SMTP`.

</dd>

<dt>honor_whitelist</dt>

<dd>

A table listing any applicable whitelists set in the `msys.dp_config.whitelist` table.

</dd>

</dl>

In order to use any of the audit series configuration tables you must include `msys.dp_config.audit_series`. These configuration tables are only relevant in a cluster configuration.

| [Prev](policy.default.configuration.msys.dp_config.fcdns.php)  | [Up](policy.default.configuration.php) |  [Next](policy.default.configuration.msys.dp_config.audit_series.php) |
| 4.4. msys.dp_config.fcdns  | [Table of Contents](index.php) |  4.6. msys.dp_config.audit_series |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)