<a name="lua.ref.msys.registerAuth"></a>
## Name

msys.registerAuth — Register an authentication/authorization scheme that can be used for SMTP or control channel authentication

<a name="idp16250656"></a>
## Synopsis

`msys.registerAuth(schemename, authtable);`

```
schemename: string
authtable: table
```
<a name="idp16253664"></a>
## Description

This function registers an authentication/authorization scheme that can be used for SMTP or control channel authentication. `schemename` is the name used in the appropriate listener authentication stanza. `authtable` is a table with the following possible functions:

```
require('msys.core');
local mod = {};
local auth = {};

-- enumerate the groups of the specified user
function auth:enumGroups(username)
  if username == "root" then
    -- the root user belongs to these groups
    return { "root", "powerusers", "admin" };
  end
  -- don't recognize that user
  return msys.core.EC_AUTH_FAIL;
end

-- query all possible groups
function auth:queryGroups()
  return { "root", "powerusers", "admin", "users" };
end

function auth:authenticate(filename, paramsdict, username, password)
  if username == "root" and password == "letmein" then
    -- correct root password
    return msys.core.EC_AUTH_OK;
  end;
  -- bad credentials
  return msys.core.EC_AUTH_FAIL;
end

function mod:init()
  -- must be called from an init routine
  msys.registerAuth("myscheme", auth);
  return true;
end;

msys.registerModule("myauth", mod);
```

Appropriate return values are:

*   `msys.core.EC_AUTH_ERROR`

*   `msys.core.EC_AUTH_FAIL`

*   `msys.core.EC_AUTH_OK`

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

<a name="idp16264496"></a>
## See Also

[authorization](conf.ref.authorization.php "authorization")

| [Prev](lua.ref.msys.readfile.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.registerControl.php) |
| msys.readfile  | [Table of Contents](index.php) |  msys.registerControl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)