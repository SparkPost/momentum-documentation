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

| 71.69. static-routes - Static Routes |
| [Prev](modules.spf.php)  | Chapter 71. Modules Reference |  [Next](modules.suppress_spool.php) |

## 71.69. static-routes - Static Routes

<a class="indexterm" name="idp23182208"></a>

**Configuration Change. ** This feature is available in Momentum 4.2 and later.

The `static_routes` module routes all traffic to a given server by IP address and port. It supports both IPv4 and IPv6.

This module performs much better than the [routes](conf.ref.routes.php "routes") option, which is known to cause performance issues because it makes every domain in the system share connections. When domains share an MX, the system will try to find idle connections in other domain containers. When many domains share an MX, there are a lot of domains searching for idle connections, which slows the system down considerably.

<a name="modules.static_routes.example"></a>

**Example 71.94. Example Configuration**

`static_routes {}`

and

```
static_routes
{
  target = "1.2.3.4:1234"
}
```

| [Prev](modules.spf.php)  | [Up](modules.php) |  [Next](modules.suppress_spool.php) |
| 71.68. spf Modules – spf_macros, spf_v1, and senderid (SPF v2)  | [Table of Contents](index.php) |  71.70. suppress_spool – Deferred Message Spooling |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)