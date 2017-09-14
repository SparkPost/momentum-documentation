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

| 4.25. msys.dp_config.keyword_filter |
| [Prev](policy.default.configuration.msys.dp_config.antivirus.php)  | Chapter 4. Configuration Details |  [Next](policy.customize.php) |

## 4.25. msys.dp_config.keyword_filter

This configuration table defines keywords to search for. The datasource scopes that may be needed by this module are configured in the `default_policy.conf` file.

The supported character sets are:

*   UTF-8

*   GBK

*   ISO-8859-1

*   ISO-2022-JP

*   Big5

All datasource character sets are found in the `/opt/msys/ecelerity/etc/sample-configs/default_policy.conf` file and are enabled.

Find below the sample excerpt included in the `dp_config.lua` file.

```
msys.dp_config.keyword_filter = {
  { scan = false,
    name = "keywords",
    path = "/opt/msys/ecelerity/etc/conf/default/keyword_filter.txt",
    charset = "UTF-8",
    disposition = "reject",
    honor_whitelist = { "global" },
  }
};
```

The elements of this configuration table are as follows:

<dl class="variablelist">

<dt>scan</dt>

<dd>

Whether or not to scan for keywords.

</dd>

<dt>name</dt>

<dd>

Name of the keyword filter, must be unique among keyword filters

</dd>

<dt>path</dt>

<dd>

The absolute path of the file on disk. Store in `/opt/msys/ecelerity/etc/conf/default/` and add to the repository as described in [Best Practices for Adding Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.adding.configuration.files.php).

</dd>

<dt>charset</dt>

<dd>

Define the character set of the file

The default value for this element is `UTF-8`.

</dd>

<dt>disposition</dt>

<dd>

The default value for this element is `reject`. The legal values are `reject` or `discard`.

</dd>

<dt>honor_whitelist</dt>

<dt>process_result</dt>

<dd>

Define a function to process the results. This is explained in detail below.

</dd>

</dl>

Takes msg, vctx and number of matches found in the subject and message together. Note that each MIME part is scanned individually, and the num_found value represents how many were found in the subject plus the MIME part being scanned. The subject header is scanned along with each MIME part.

The file format is one keyword per line. You may search for multiple words in a pattern by separating the words with the '|' character

```
process_result = function (msg, vctx, num_found)
    if num_found >= 2 then
      return vctx:pbp_action(554, "Keyword matches");
    end
  end,
```

| [Prev](policy.default.configuration.msys.dp_config.antivirus.php)  | [Up](policy.default.configuration.php) |  [Next](policy.customize.php) |
| 4.24. msys.dp_config.antivirus  | [Table of Contents](index.php) |  Chapter 5. Customizing Policy |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)