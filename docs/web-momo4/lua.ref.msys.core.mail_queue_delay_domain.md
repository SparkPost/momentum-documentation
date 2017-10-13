<a name="lua.ref.msys.core.mail_queue_delay_domain"></a>
## Name

msys.core.mail_queue_delay_domain — Add a domain record to the delayed queue

<a name="idp15720544"></a>
## Synopsis

`msys.core.mail_queue_delay_domain(dr, note);`

```
dr: userdata, domain_record
note: string
```
<a name="idp15723120"></a>
## Description

Add a domain record to the delayed queue. For a code example see [Example 70.33, “registerControl example”](lua.ref.msys.registerControl.php#lua.ref.msys.registerControl.example "Example 70.33. registerControl example"). To obtain domain record userdata use `msys.core.dns_get_domain`. The second parameter is typically a string such as `"451 4.4.1 [internal] manually delayed domain"`. This function returns `nil`.

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

<a name="idp15727984"></a>
## See Also

[msys.core.dns_get_domain](lua.ref.msys.core.dns_get_domain.php "msys.core.dns_get_domain")

| [Prev](lua.ref.msys.core.get_now_ts.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.core.string_new.php) |
| msys.core.get_now_ts  | [Table of Contents](index.php) |  msys.core.string_new |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)