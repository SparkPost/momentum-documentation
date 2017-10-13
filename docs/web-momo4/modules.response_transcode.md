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