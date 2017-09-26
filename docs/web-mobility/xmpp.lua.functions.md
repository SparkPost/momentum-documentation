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

| 10.4. Lua XMPP Functions |
| [Prev](mobility.xmpp.modules.roster.presence.php)  | Chapter 10. Mobile Momentum XMPP |  [Next](mcmt2xmpp.php) |

## 10.4. Lua XMPP Functions

The Lua functions used when converting a message to XMPP or the reverse are:

*   `xmpp:send(xml_stanza_string)` – this function accepts a string XMPP stanza as a parameter and returns a boolean to indicate whether the stanza was successfully parsed and routed.

*   `jid:user()` – this function returns the user localpart as a string.

*   `jid:domain()` – this function returns the user's domain as a string.

*   `jid:resource()` – this function returns the user resource part of the JID object.

*   `jid:bare()` – this function returns the bare JID.

*   `jid:get()` – this function returns the full JID. The "full JID" is an XMPP address of the form `<localpart@domainpart/resourcepart>`.

*   `xmpp.connected(jid_string)` – this function returns a boolean indicating whether the user with the specified ID is connected to the server. You can use this function in any hook or phase. You might use it in the following way:

    ```
    if (xmpp.connected("user1@xmpp.test.com") then
      # forward message to XMPP domain
    end
    ```

*   `xmpp.online(jid_string)` – use this function to determine whether a user with the specified ID is available. You can call this function in any phase or hook. The return value is a Lua table with the elements `availability, show and status`. "availability" is a boolean value and "show" and "status" are the values in the presence stanza sent by the client. The possible values for show and status are defined at [Presence Syntax](http://xmpp.org/rfcs/rfc6121.html#presence-syntax).

| [Prev](mobility.xmpp.modules.roster.presence.php)  | [Up](mobility.xmpp.modules.php) |  [Next](mcmt2xmpp.php) |
| 10.3. Roster and Presence  | [Table of Contents](index.php) |  10.5. Converting MCMT to XMPP |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)