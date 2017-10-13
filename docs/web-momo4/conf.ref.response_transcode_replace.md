| response_transcode_replace |
| [Prev](conf.ref.response_transcode_pattern.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.retry_interval.php) |

<a name="conf.ref.response_transcode_replace"></a>
## Name

response_transcode_replace — the replacement string for a server response

## Synopsis

response_transcode_replace = "*`replacement_string`*"

<a name="idp26083728"></a>
## Description

### Note

This feature requires the [Section 71.58, “response_transcode – Module”](modules.response_transcode.php "71.58. response_transcode – Module").

When the SMTP response from a remote sever indicates an error—the response code falls in the range 400 to 599—then that response is compared to the Response_Transcode_Pattern regex. If it matches, the response is replaced with the string in response_transcode_replace; dollar variable expansion is performed, so the entire matching response can be substituted with $0 and the strings matched by grouping parentheses in the regex with $1, $2 and so on. The replacement response is used for deciding what to do with the message next, how it is logged and bounce processed.

### Warning

Since it is possible to rewrite permanent errors as temporary errors, use this module carefully. Resubmitting mail that a remote server has already rejected with a permanent error can be seen as a hostile action.

This option is used in conjunction with `response_transcode_pattern`. See below for an example pairing:

```
response_transcode_pattern = "454 no such user ('.*')"
response_transcode_replace = "554 no such user $1"
```

In this case a 'soft' bounce is converted to a 'hard' bounce so that there are no further delivery attempts.

<a name="idp26090416"></a>
## Scope

This option is valid in the binding, binding_group, domain, and global scopes.

<a name="idp26092288"></a>
## See Also

[response_transcode_pattern](conf.ref.response_transcode_pattern.php "response_transcode_pattern")

| [Prev](conf.ref.response_transcode_pattern.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.retry_interval.php) |
| response_transcode_pattern  | [Table of Contents](index.php) |  retry_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)