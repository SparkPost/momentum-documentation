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

| 4.23. msys.dp_config.cloudmark |
| [Prev](policy.default.configuration.msys.dp_config.commtouch.php)  | Chapter 4. Configuration Details |  [Next](policy.default.configuration.msys.dp_config.antivirus.php) |

## 4.23. msys.dp_config.cloudmark

Scan messages using Cloudmark. To use this configuration item you must have the cloudmark module loaded. For more information see [cloudmark Module](https://support.messagesystems.com/docs/web-ref/modules.cloudmark.php).

Find below the sample excerpt included in the `dp_config.lua` file.

```
require("msys.cloudmark");
msys.dp_config.cloudmark = {
  scan = true,
  score_threshold = 95,
  isspam_disposition = "reject",
  honor_whitelist = { "global" }
};
```

The elements of this configuration table are as follows:

<dl class="variablelist">

<dt>scan</dt>

<dd>

Whether or not to scan using this engine.

</dd>

<dt>score_threshold</dt>

<dd>

Set the threshold past which a message will be tagged as spam.

</dd>

<dt>isspam_disposition</dt>

<dd>

Action to take when a message is determined to be spam. Legal actions are `reject` and `discard`.

</dd>

<dt>honor_whitelist</dt>

<dd>

A table listing any applicable whitelists set in the `msys.dp_config.whitelist` table.

</dd>

<dt>process_result</dt>

<dd>

Define a function to process the scan result. `process_result` info is a table: { rc = rc, verdict = verdict }. For more information see [Section 4.21, “msys.dp_config.beik”](policy.default.configuration.msys.dp_config.beik.php "4.21. msys.dp_config.beik").

</dd>

</dl>

| [Prev](policy.default.configuration.msys.dp_config.commtouch.php)  | [Up](policy.default.configuration.php) |  [Next](policy.default.configuration.msys.dp_config.antivirus.php) |
| 4.22. msys.dp_config.commtouch  | [Table of Contents](index.php) |  4.24. msys.dp_config.antivirus |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)