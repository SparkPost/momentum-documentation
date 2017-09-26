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

| 4.13. msys.dp_config.relay_authorization |
| [Prev](policy.default.configuration.msys.dp_config.recipient_validation.php)  | Chapter 4. Configuration Details |  [Next](policy.default.configuration.msys.dp_config.audit_series.invalid_recipients.php) |

## 4.13. msys.dp_config.relay_authorization

This policy allows SMTP-authenticated users to relay. To use this policy you must configure SMTP authentication in `ecelerity.conf` using the [auth_ds Module](https://support.messagesystems.com/docs/web-ref/modules.auth_ds.php) and the appropriate ESMTP_Listener options.

Onnet IP addresses. If this option is defined, the source IP address will be checked against the configured datasource, and if it matches will be allowed to relay messages.

### Warning

In `default_policy.conf` relaying is allowed from any host because all recipient validation is performed by default_policy.lua. If recipient validation and relay authorization is disabled here, that will make this system an open relay, so use caution.

Find below the sample excerpt included in the `dp_config.lua` file.

```
msys.dp_config.relay_authorization = {
  check = false,

  onnet = {
    type = "rbldnsd",
    refresh = 1800,
    source = "/opt/msys/ecelerity/etc/onnet.txt",
    record_type = "TXT",
    default_value = "",
  };

  onnet = {
    type = "datasource",
    refresh = 1800,
    cachename = "sqlite",
    query = "SELECT 1 as val, cidr FROM onnet",
    cidr_column = "cidr",
    value_column = "val",
    default_value = "",
  };

  -- Allow SMTP-authenticated users to relay
  -- Note that you still must configure SMTP authentication in ecelerity.conf
  -- using the auth_ds module and the appropriate ESMTP_Listener options.
  allow_smtp_auth = true
};
```

The elements of this configuration table are as follows:

<dl class="variablelist">

<dt>check</dt>

<dd>

Whether or not to use this configuration item.

### Warning

By default `msys.dp_config.relay_authorization` is disabled—the `check` element is set to `false`. If you do not enable this policy and you are using the `default_policy.conf` file be sure to change the value of [relay_hosts](https://support.messagesystems.com/docs/web-ref/conf.ref.relay_hosts.php). If you leave `check` as `false` and you use the `default_policy.conf` file (where `relay_hosts` is set to `( "0.0.0.0/0" )`) your MTA is effectively an open relay.

</dd>

<dt>onnet</dt>

<dd>

IP addresses. If this option is defined, the source IP address will be checked against the configured datasource, and if it matches will be allowed to relay messages.

<dl class="variablelist">

<dt>type</dt>

<dd>

Two types are supported, either from a datasource (such as a database or LDAP) or an RBLDNSD file. This element is required and must be either "datasource" or "rbldnsd". The configuration elements vary depending upon which type is defined.

</dd>

<dt>refresh</dt>

<dd>

This element must be defined and it must be an integer greater than or equal to 0.

</dd>

<dt>source</dt>

<dd>

The path to the rbldnsd source file on disk. This element is only applicable to the "rbldnsd" type.

</dd>

<dt>record_type</dt>

<dd>

The record type is only applicable to the "rbldnsd" type and must be either `A` or `TXT`.

</dd>

<dt>default_value</dt>

<dd>

Must always be `""`.

</dd>

<dt>cachename</dt>

<dd>

The name of the Datasource as defined in `ecelerity.conf`. This element is only applicable to datasources.

</dd>

<dt>query</dt>

<dd>

A `SELECT` query. This option is only applicable to the `datasource` type.

</dd>

<dt>cidr_column</dt>

<dd>

The name of the column containing the CIDR block. This element is only applicable to the `datasource` type.

</dd>

<dt>value_column</dt>

<dd>

The name of the column containing the value (the value is ignored but something must be there).

</dd>

</dl>

</dd>

<dt>allow_smtp_auth</dt>

<dd>

Whether or not to allow SMTP-authenticated users to relay. Note that you still must configure SMTP authentication in `ecelerity.conf` using the auth_ds module and the appropriate ESMTP_Listener options.

</dd>

</dl>

| [Prev](policy.default.configuration.msys.dp_config.recipient_validation.php)  | [Up](policy.default.configuration.php) |  [Next](policy.default.configuration.msys.dp_config.audit_series.invalid_recipients.php) |
| 4.12. msys.dp_config.recipient_validation  | [Table of Contents](index.php) |  4.14. msys.dp_config.audit_series.invalid_recipients |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)