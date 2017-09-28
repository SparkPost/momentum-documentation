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

| 10.6. Filtering Out Chat State Notifications |
| [Prev](mcmt2xmpp.php)  | Chapter 10. Mobile Momentum XMPP |  [Next](p.retry.php) |

## 10.6. Filtering Out Chat State Notifications

In XMPP you can send message stanzas whose sole purpose is to inform another user of one's present 'chat state'. For example, if one user starts writing to a contact, most clients will send that contact a chat state message telling them that their buddy is typing. These stanzas are shaped like regular message stanzas, but serve a purely informational purpose and have no message body. If your policy is designed to translate all message stanzas to emails, every single time a user starts typing a message, at least one empty email could get sent to their contact unless this filter is in place.

It is probably best to ignore any messages unless there is a 'body' element with a length greater than `0`. Note that you cannot conditionally send a message based on whether chat state elements appear in the message stanza since the 'active' state can sometimes be attached to a valid message. The following exmple from [XEP-0085: Chat State Notifications](http://xmpp.org/extensions/xep-0085.html) shows the 'active' state attached to a message.

```
<message
    from='bernardo@shakespeare.lit/pda'
    to='francisco@shakespeare.lit'
    type='chat'>
  <body>Who's there?</body>
  <active xmlns='http://jabber.org/protocol/chatstates'/>
</message>
```

Find below a code snippet that filters messages based on body length:

```
local body = ""
for n in stanza:children() do
  if n:name() == "body" then
    body = n:contents()
  end
end

if (body:len() > 0) then
  -- Body is greater than '0' - send this message
  local headers = {}
  local parts = {}

  headers["To"] = to
  headers["From"] = from
  headers["Subject"] = subject

  parts["text/plain"] = body

  local ecmsg = msys.core.ec_message_new(nil)
  ecmsg:build(headers,parts,nil)
  ecmsg:inject(from, to)
  return msys.xmpp.DONE
end

return msys.xmpp.CONT
```

| [Prev](mcmt2xmpp.php)  | [Up](mobility.xmpp.modules.php) |  [Next](p.retry.php) |
| 10.5. Converting MCMT to XMPP  | [Table of Contents](index.php) |  Part IV. Retrying Messages |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)