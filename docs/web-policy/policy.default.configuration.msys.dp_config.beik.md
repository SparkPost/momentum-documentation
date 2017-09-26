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

| 4.21. msys.dp_config.beik |
| [Prev](policy.default.configuration.msys.dp_config.message_size_limits.php)  | Chapter 4. Configuration Details |  [Next](policy.default.configuration.msys.dp_config.commtouch.php) |

## 4.21. msys.dp_config.beik

Scan messages using BEIK. To use this configuration item you must have the beik module loaded. For more information see [BEIK Module](https://support.messagesystems.com/docs/web-ref/modules.beik.php). This module is included in the `default_policy.conf` file.

Find below the sample excerpt included in the `dp_config.lua` file.

```
require("msys.symantec_beik");
msys.dp_config.beik = {
  scan = true,
  isspam_disposition = "reject",
  honor_whitelist = { "global" },
};
```

The elements of this configuration table are as follows:

<dl class="variablelist">

<dt>scan</dt>

<dd>

Whether or not to scan using this engine.

</dd>

<dt>isspam_disposition</dt>

<dd>

The action to take when the determination is `spam`. The legal options are `reject` or `discard`.

</dd>

<dt>honor_whitelist</dt>

<dd>

A table listing any applicable whitelists set in the `msys.dp_config.whitelist` table.

</dd>

<dt>process_result</dt>

<dd>

Define a function to process the scan result. process_result info is a table: { rc = rc, verdict = verdict }. For more information see below.

</dd>

</dl>

For all of the content scanners, you may define a 'process_result' function to override all processing of the result. The function is defined like so:

```
msys.dp_config.my_scanner = {
...
...
  process_result = function (msg, vctx, info)
      if info.result == "spam" then
        return vctx:pbp_action(555, "No soup for you"), true;
      end
    end,
};
```

The function is passed three parameters:

1.  `msg` – The ec_message

2.  `vctx` – The validation context

3.  `info` – The information returned by the spam classifier. This will differ for each engine. In this case, see the documentation in [BEIK Module](https://support.messagesystems.com/docs/web-ref/modules.beik.php).

Return values. Must return two values. The first is whether to continue the validate_data phase, which is either msys.core.VALIDATE_CONT to continue or msys.core.VALIDATE_DONE to stop. This does not affect whether the default processing logic will be processed for the spam scanner in question, if you define a process_result function the default logic is never evaluated. The second is a boolean stating whether or not the system-wide 'spam' audit_series should be incremented.

### Note

The `vctx:pbp_action` function used in the example above always returns msys.core.VALIDATE_DONE, and so fulfills one of the requirements for return values for the function assigned to `process_result`. A literal `true` fulfills the other.

The disposition for each content scanner may either be 'discard' or 'reject'.

| [Prev](policy.default.configuration.msys.dp_config.message_size_limits.php)  | [Up](policy.default.configuration.php) |  [Next](policy.default.configuration.msys.dp_config.commtouch.php) |
| 4.20. msys.dp_config.message_size_limits  | [Table of Contents](index.php) |  4.22. msys.dp_config.commtouch |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)