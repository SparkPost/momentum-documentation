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

| 10.5. Converting MCMT to XMPP |
| [Prev](xmpp.lua.functions.php)  | Chapter 10. Mobile Momentum XMPP |  [Next](mcmt2xmpp.caveat.php) |

## 10.5. Converting MCMT to XMPP

If you don't convert a plain text message to a SMS message stanza in Lua, you can convert a MCMT message part to XMPP for delivery as an instant message. In order to perform message conversion you must provide a valid XMPP stanza in the MCMT part of a message as described at [The Multi-Channel Message Type (MCMT)](https://support.messagesystems.com/docs/web-mob-dev/mob.dev.guide.mcmt.php).

Find below examples of converting between email and XMPP and vice versa.

<a name="ec_message2xmpp"></a>

**Example 10.2. ec_message to XMPP**

```
require("msys.extended.message")
require("msys.extended.message_routing”)
xmpp = require("msys.xmpp")

local mod = {}

----- HOOK to do ec_message => XMPP conversion -----
function mod:core_ec_message_enqueue(msg)
  local text = msg:text()
  if xmpp.valid_domain(msg:routing_domain()) and xmpp.online(msg:rcptto()) then
    local stanza = xml.newnode("message")
    stanza:attr("from", 'nobody@donot-reply')
    stanza:attr("to", msg:rcptto())
    local body = stanza:addchild("body")
    body:contents(msg:text())
    xmpp.routeStanza(stanza)
    msg.delivered = msys.core.EM_SUCCEEDED
    return EC_MESSAGE_ENQUEUE_HOOK_OK
  end
  return EC_MESSAGE_ENQUEUE_HOOK_CONT
end
msys.registerModule("xmpp_hooks", mod);
```

<a name="xmpp2ec_message"></a>

**Example 10.3. XMPP to ec_message**

```
require("msys.extended.message")
require("msys.extended.message_routing”)
xmpp = require("msys.xmpp")

local xmpp_mod = {}

function xmpp_mod:client_message_recv(sess, stanza)
  local from = stanza:attr(“from”)
  local to = stanza:attr(“to”)
  -- ** It might be preferred to use doc:xpath() here to get the message body,
  -- ** BUT the xmldoc associated with the xmlnode (stanza) is most likely unlinked and released
  -- ** at this point of time. So it is actually not proper and very dangerous to reference to
  -- ** a xmldoc from the xmlnode (stanza) by using doc:xpath()
  for node in stanza:children() do
    if node:name() == 'body' then
      -- build an ec_message
      local headers = {}
      headers["To"] = to
      headers["From"] = from
      local parts = {}
      -- <message><body>
      parts["text/plain"] = node:contents()
      local ecmsg = msys.core.ec_message_new(nil)
      ecmsg:build(headers, parts, nil)
      -- inject ec_message
      ecmsg:inject(from, to)
      return msys.xmpp.DONE;
    end
  end
  return msys.xmpp.CONT;
end
xmpp.registerModule("xmpp_convergence", xmpp_mod)
```

For more information about the return values of the core_ec_message_enqueue hook point see [ec_message_enqueue](https://support.messagesystems.com/docs/web-c-api/hooks.core.ec_message_enqueue.php).

### Note

For instructions on building MCMT messages with XML instead of using the approach shown here, see the XMPP specifications [Message Syntax](http://xmpp.org/rfcs/rfc6121.html#message-syntax).

| [Prev](xmpp.lua.functions.php)  | [Up](mobility.xmpp.modules.php) |  [Next](mcmt2xmpp.caveat.php) |
| 10.4. Lua XMPP Functions  | [Table of Contents](index.php) |  10.6. Filtering Out Chat State Notifications |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)