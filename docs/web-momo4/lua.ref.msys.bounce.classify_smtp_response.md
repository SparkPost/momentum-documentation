| msys.bounce.classify_smtp_response |
| [Prev](lua.ref.msys.bounce.classify.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.brightmail.scan.php) |

<a name="lua.ref.msys.bounce.classify_smtp_response"></a>
## Name

msys.bounce.classify_smtp_response — Create a bounce classification from SMTP response text and the domain name

<a name="idp17606576"></a>
## Synopsis

`msys.bounce.classify_smtp_response(response_text, domain);`

```
response_text: string
domain: string
```
<a name="idp17609600"></a>
## Description

This function takes the SMTP response text and the domain name as input and returns a tuple (code, code_string, description). `code` is a numerical classification code; `code_string` is the string representation of the code; `description` is the textual description of the code. The bounce_classifier_override module must be configured for this function to produce the correct result.

Enable this function with the statement `require('msys.bounce');`.

<a name="lua.ref.msys.bounce.classify_smtp_response.example"></a>

**Example 70.49. msys.bounce.classify_smtp_response example**

```
require("msys.bounce");

local mod = {};

function mod:validate_data_spool(msg, accept, vctx)
  code, name, desc, rcpts = msys.bounce.classify(msg);
  print("msys.bounce.classify: code = ", code, " symbol = ", name, " desc = ", desc, " orig rcpt: ", rcpts);
  code, name, desc = msys.bounce.classify_smtp_response("this domain is no longer used");
  print("msys.bounce.classify_smtp_response: code = ", code, " symbol = ", name, " desc = ", desc );
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("test_bc", mod);
```

<a name="idp17617072"></a>
## See Also

[Section 71.12, “bounce_classifier_override – Override/Augment Bounce Classifications”](modules.bounce_classifier_override.php "71.12. bounce_classifier_override – Override/Augment Bounce Classifications"), [msys.bounce.classify](lua.ref.msys.bounce.classify.php "msys.bounce.classify")

| [Prev](lua.ref.msys.bounce.classify.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.brightmail.scan.php) |
| msys.bounce.classify  | [Table of Contents](index.php) |  msys.brightmail.scan |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)