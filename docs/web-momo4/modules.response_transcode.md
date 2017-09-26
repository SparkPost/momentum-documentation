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

| 71.58. response_transcode – Module |
| [Prev](modules.reception_timing.php)  | Chapter 71. Modules Reference |  [Next](modules.sched.php) |

## 71.58. response_transcode – Module

<a class="indexterm" name="idp22776224"></a>

The response_transcode module can be used to work around broken remote servers that send incorrect response codes. For example, with you can change a hard bounce to a soft bounce, enabling you to log the bounce in order to later resend the message.

### Warning

Since it is possible to rewrite permanent errors as temporary errors, use this module carefully. Resubmitting mail that a remote server has already rejected with a permanent error can be seen as a hostile action.

### 71.58.1. Configuration

This module is loaded automatically as required and does not need to be explicitly included.

<a name="example.response_transcode.3"></a>

**Example 71.82. response_transcode module**

```
response_transcode {
}
```

### Note

You can transcode "[internal]" transient failures but you cannot transcode "[internal]" permanent failures. For a listing of "[internal]" failures see [Appendix A, *Message Responses*](message_responses.php "Appendix A. Message Responses") .

The following configuration options are available:

<dl class="variablelist">

<dt>Response_Transcode_Pattern</dt>

<dd>

For more information, see [response_transcode_pattern](conf.ref.response_transcode_pattern.php "response_transcode_pattern").

</dd>

<dt>Response_Transcode_Replace</dt>

<dd>

For more information, see [response_transcode_replace](conf.ref.response_transcode_replace.php "response_transcode_replace").

</dd>

</dl>

### Note

If you reference either option, the response_transcode module will be loaded automatically.

| [Prev](modules.reception_timing.php)  | [Up](modules.php) |  [Next](modules.sched.php) |
| 71.57. reception_timing - Reception Timing Modules  | [Table of Contents](index.php) |  71.59. sched – The Schedule Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)