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

| ec_log_file |
| [Prev](sieve.ref.ec_log.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_maildir.php) |

<a name="sieve.ref.ec_log_file"></a>
## Name

ec_log_file — log to a file/io wrapper

## Synopsis

`ec_log_file` { *`file uri`*      } { *`arbitrary_text`* }

<a name="idp30225200"></a>
## Description

`ec_log_file` allows you to log arbitrary information to a specified file or io wrapper. Unlike the `ec_log` action the raw message, plus an appended newline, will be written to the file, with no additional context or timestamp information unless present in the user-defined message. The message will be written regardless of the Debug_Flags setting.

<a name="example.ec_log_file"></a>

**Example 16.76. ec_log_file example**

```
if envelope :domain :is "from" "good-guy.com" {
  ec_log_file "/var/log/logfile" "got mail from the good guys";
}
```

<a name="example.ec_log_file.second"></a>

**Example 16.77. ec_log_file example with io wrapper**

```
if envelope :domain :is "from" "good-guy.com" {
  ec_log_file "jlog:///var/log/ecelerity/queue.rt=>master" "got mail from the good guys";
}
```

Be sure that you have permission to write to the directory containing the output file.

Since the Sieve validation phases through the data phase are executed in the scheduler thread, no I/O should be done during these phases. Use this function *after* the data phase.

<a name="idp30234368"></a>
## See Also

[ec_log](sieve.ref.ec_log.php "ec_log")

| [Prev](sieve.ref.ec_log.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_maildir.php) |
| ec_log  | [Table of Contents](index.php) |  ec_maildir |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)