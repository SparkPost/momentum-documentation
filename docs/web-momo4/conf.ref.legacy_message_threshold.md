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

| legacy_message_threshold |
| [Prev](conf.ref.large_message_threshold.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.license.php) |

<a name="conf.ref.legacy_message_threshold"></a>
## Name

legacy_message_threshold — The maximum size allowed for messages being passed to legacy modules

## Synopsis

`legacy_message_threshold = 1048576`

<a name="idp25085168"></a>
## Description

For performance reasons, Momentum prefers to keep message contents in memory. From time to time, messages that are much larger than the average for a given Momentum instance enter the system, and may either be transiently rejected (because it cannot fit in memory) or otherwise increase memory pressure and have an adverse affect on the system performance.

In order to avoid this, Momentum can use alternative techniques for working with messages that are larger than the `large_message_threshold`. Large messages are transited through the system a little slower (wallclock time) than their regular counterparts, but don't have a significant impact on the rest of the system.

Large messages need to be pulled entirely into memory first, which increases the memory pressure and may harm the performance of your system. The `legacy_message_threshold` configuration option sets the maximum allowed size for messages being processed in this way, and defaults to 1MB. If a message is passed to a legacy module and its size exceeds this threshold value, the processing of that message is failed and the error pushed back to the caller. This typically results in a transient failure with the message "421 4.3.0 message is too large to process at this time."

Note that in previous Momentum releases, this option was effectively set to indicate that any message size could be passed, subject to the system having enough available memory.

The default is 1048576 bytes.

<a name="idp25091168"></a>
## Scope

legacy_message_threshold is valid in the global scope.

<a name="idp25093008"></a>
## See Also

[growbuf_size](conf.ref.growbuf_size.php "growbuf_size"), [large_message_threshold](conf.ref.large_message_threshold.php "large_message_threshold")

| [Prev](conf.ref.large_message_threshold.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.license.php) |
| large_message_threshold  | [Table of Contents](index.php) |  license |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)