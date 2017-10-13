| msys.rfc3464.send_mdn |
| [Prev](lua.ref.msys.rfc3464.extract_delivery_status.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.symantec_beik.scan.php) |

<a name="lua.ref.msys.rfc3464.send_mdn"></a>
## Name

msys.rfc3464.send_mdn — Generate and enqueue an MDN

<a name="idp18413744"></a>
## Synopsis

`msys.rfc3464.send_mdn(msg, action);`

```
msg: userdata, ec_message type
action: number
```
<a name="idp18416752"></a>
## Description

Generate and enqueue an MDN from the input `msg`. `action` can be one of msys.core.FAILED, msys.core.DELAYED, msys.core.DELIVERED, msys.core.RELAYED and msys.core.EXPANDED. Returns `1` if successful and `0` on failure.

Enable this function with the statement `require('msys.rfc3464');`.

| [Prev](lua.ref.msys.rfc3464.extract_delivery_status.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.symantec_beik.scan.php) |
| msys.rfc3464.extract_delivery_status  | [Table of Contents](index.php) |  msys.symantec_beik.scan |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)