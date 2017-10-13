<a name="lua.ref.msys.pcre.replace"></a>
## Name

msys.pcre.replace — Perform a PCRE replace operation

<a name="idp18257600"></a>
## Synopsis

`msys.pcre.replace(subject, pattern, replacement);`

```
subject: string
pattern: string
replacement: string
```
<a name="idp18260640"></a>
## Description

Perform a PCRE replace operation.

```
...
  local orig = self:text();
  if orig == nil then
    return false
  end
  local rep = msys.pcre.replace(orig, pattern, replacement);
  if rep ~= orig then
    self:text(rep, ct.mimetype, ct.charset);
    return true;
  end
```

Enable this function with the statement `require('msys.pcre')`.

<a name="idp18264336"></a>
## See Also

[msys.pcre.match](lua.ref.msys.pcre.match.php "msys.pcre.match"), [msys.pcre.split](lua.ref.msys.pcre.split.php "msys.pcre.split")

| [Prev](lua.ref.msys.pcre.match.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.pcre.split.php) |
| msys.pcre.match  | [Table of Contents](index.php) |  msys.pcre.split |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)