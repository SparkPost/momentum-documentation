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

| 10.3. Roster and Presence |
| [Prev](modules.xmpp_logger.php)  | Chapter 10. Mobile Momentum XMPP |  [Next](xmpp.lua.functions.php) |

## 10.3. Roster and Presence

Momentum 3.5 supports XMPP Roster and Presence as defined in RFC6121 ([http://xmpp.org/rfcs/rfc6121.html](http://xmpp.org/rfcs/rfc6121.html)). This requires the standard XMPP server configuration described in [Section 10.1, “The XMPP Module and Listener”](mobility.xmpp.modules.php#modules.xmpp "10.1. The XMPP Module and Listener") and an additional scriptlet source.

### Configuring for Roster and Presence

XMPP rosters are stored using Riak as the backend with a Lua module providing the interface. XMPP uses the Riak bucket `XMPP`, and the user's bare JID is used as the key for the roster record for each user. Each roster record is stored as a JSON object. The term "bare JID" is an XMPP address of the form `<localpart@domainpart>` for an account at a server or of the form `<domainpart>` for a server.

### Note

If you send a message to a user on GoogleTalk but you are not in the GoogleTalk user's roster, then you will receive a 503 error. This appears to be an anti-spam measure implemented by GoogleTalk. To send a message to a contact on GoogleTalk, you must be in that contact's roster.

Management of roster and presence is handled in the background by Lua scripts. To enable XMPP roster/presence add the following `script` stanza to the scriptlet module.

```
scriptlet "scriptlet" {
  ...
  script "xmpp-presence" {
    source = "msys.xmpp.presence"
  }
}
```

Inclusion of this script ensures that XMPP roster and presence requests are handled.

### Note

The presence file is found in the `/opt/msys/ecelerity/libexec/scriptlets/msys/xmpp` directory. This file and other files in this directory are for internal use only and should not be modified.

If you wish to "bulk add" contacts to a roster you can do so by sending an HTTP request to Riak. Find an example below:

```
shell> curl -X POST http://127.0.0.1:8098/riak/xmpp/test@test -d \
 '{"test1@test": { "name": "test1", "groups": [ "mytest" ], "pending_requests": { }, \
 "subscription": "both" } }' -H "Content-Type: application/json"
```

| [Prev](modules.xmpp_logger.php)  | [Up](mobility.xmpp.modules.php) |  [Next](xmpp.lua.functions.php) |
| 10.2. The XMPP Logger Module  | [Table of Contents](index.php) |  10.4. Lua XMPP Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)