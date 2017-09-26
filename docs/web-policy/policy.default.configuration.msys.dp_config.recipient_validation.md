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

| 4.12. msys.dp_config.recipient_validation |
| [Prev](policy.default.configuration.msys.dp_config.mail_from_domain_validate.php)  | Chapter 4. Configuration Details |  [Next](policy.default.configuration.msys.dp_config.relay_authorization.php) |

## 4.12. msys.dp_config.recipient_validation

Use this policy if you wish to perform per-recipient or per-domain recipient validation.

Recipient Validation requires that a datasource be setup in the `ecelerity.conf` file. For instructions on how to create datasources see [ds_core Module](https://support.messagesystems.com/docs/web-ref/modules.ds_core.php). The name of this datasource is used as the value for the `ds_name` element.

If this policy is enabled, any `Relay_Domains` defined in `ecelerity.conf` will mean that any recipient in such domains will be allowed without any query against the defined datasource. If you wish to perform per- recipient validation then do **not** define the domains in question using the `Relay_Domains` configuration setting. For more information about this configuration option see [relay_domains](https://support.messagesystems.com/docs/web-ref/conf.ref.relay_domains.php).

This policy is designed to be used on 'inbound' systems, and may be disabled if the system is an 'outbound' system (in this case relay checking should be enabled).

Find below the sample excerpt included in the `dp_config.lua` file.

```
msys.dp_config.recipient_validation = {
  -- Whether or not to perform recipient validation
  -- Disabled by default, enable if you want to define a recipient validation
  -- policy
  check = true,

  -- Name of the datasource.  If you only want to honor Relay_Domains from
  -- ecelerity.conf then you should not define either ds_name or query.
  -- ds_name = "ldap",

  -- Query, $rcpt is the placeholder for the recipient's email address,
  -- depending on the datasource it may also be ':rcpt'.  If you only
  -- want to check the domain, use $domain or :domain
  -- query = "ldap:///DC=domain,DC=com?mail,status?sub?mail=$rcpt",

  -- Attribute to compare for mailbox status (suspended, active, etc).
  -- Must be queried in the provided URI.  To not perform a status attribute
  -- check comment out the following line.
  -- status_attribute = "status",

  -- Acceptable status values, all other status values will be rejected.
  -- May include Lua-compatible patterns as well as static strings.
  -- status_values = { "active", "online", "other" },

  -- Enable DHA prevention
  dha_prevention = true,
};
```

The elements of this configuration table are as follows:

<dl class="variablelist">

<dt>check</dt>

<dd>

Whether or not to use this configuration item.

</dd>

<dt>ds_name</dt>

<dd>

The name for the datasource. If you only want to honor `Relay_Domains` then you should *not* define either ds_name or query.

</dd>

<dt>query</dt>

<dd>

In the sample code above, `$rcpt` is the placeholder for the recipient's email address, depending on the datasource it may also be `:rcpt`. If you only want to check the domain, use `$domain` or `:domain`. Use the syntax required by the driver for the specific datasource.

</dd>

<dt>status_attribute</dt>

<dd>

Attribute to compare for mailbox status (suspended, active, etc). Must be queried in the provided URI. To not perform a status attribute check comment out this element.

</dd>

<dt>status_values</dt>

<dd>

Acceptable status values, all other status values will be rejected. May include Lua-compatible patterns as well as static strings.

</dd>

<dt>dha_prevention</dt>

<dd>

Enable DHA prevention.

</dd>

</dl>

| [Prev](policy.default.configuration.msys.dp_config.mail_from_domain_validate.php)  | [Up](policy.default.configuration.php) |  [Next](policy.default.configuration.msys.dp_config.relay_authorization.php) |
| 4.11. msys.dp_config.mail_from_domain_validate  | [Table of Contents](index.php) |  4.13. msys.dp_config.relay_authorization |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)