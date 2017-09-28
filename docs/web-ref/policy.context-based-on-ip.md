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

| 5.5. Setting Context Based on Connecting IP |
| [Prev](policy.implementing.php)  | Chapter 5. Implementing Policy with Momentum |  [Next](policy.best.practices.php) |

## 5.5. Setting Context Based on Connecting IP

It is often useful to bypass anti-spam checks when you know that the sender is a machine on your network; it could be either a local user or an internal mail exchange machine that is merely forwarding the mail on via Momentum. In the former case, it's not good for your own users not to be able to mail out of your network, and in the latter case, it doesn't help you if you are tarpitting your own mail infrastructure if spam has managed to leak in.

The ESMTP_Listener configuration shown in [Example 5.9, “Connection context variables in ESMTP_Listener”](policy.context-based-on-ip.php#policy.context-based-on-ip3.ex "Example 5.9. Connection context variables in ESMTP_Listener") will set `my_key` and `my_other_key` in the connection context for machines connecting from the netblock 0.0.0.0/0 (this matches all connections). It will set the `trusted_mx` connection context for machines connecting from the 10.0.0.0/32 network, which is assumed to be a trusted internal network. You can set arbitrary context information using this mechanism, and then inspect it in your Sieve scripts and act accordingly, as hinted at by [Example 5.10, “Acting on Connection Context Using Sieve”](policy.context-based-on-ip.php#policy.context-based-on-ip.ex2 "Example 5.10. Acting on Connection Context Using Sieve").

<a name="policy.context-based-on-ip3.ex"></a>

**Example 5.9. Connection context variables in ESMTP_Listener**

```
Esmtp_Listener = {
   Listen "*:25" {
      Peer "0.0.0.0/0" {
         context = [
           my_key = "my_value"
           my_other_key = "my_other_value"
         ]

      }
      Peer "10.0.0.0/32" {
         context = [
            trusted_mx = "yes"
         ]
      }
   }
}
```

<a name="policy.context-based-on-ip.ex2"></a>

**Example 5.10. Acting on Connection Context Using Sieve**

```
if not vctx_conn :is "trusted_mx" "yes" {
   # Apply policy checks, as shown above.
}
```

| [Prev](policy.implementing.php)  | [Up](policy.php) |  [Next](policy.best.practices.php) |
| 5.4. Implementing Policy Using Sieve  | [Table of Contents](index.php) |  5.6. Best Practices for Manually Created Policy Scripts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)