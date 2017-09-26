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

| 5.3. SMPP Timer Parameters |
| [Prev](mobility.best.practices.conversion.php)  | Chapter 5. SMPP Configuration Best Practices |  [Next](mobility.best.practices.delivery.receipts.php) |

## 5.3. SMPP Timer Parameters

There are three main timers in SMPP 3.4\. These are configurable using the following options:

*   [smpp_response_timer](mobility.conf.smpp_response_timer.php "smpp_response_timer")

*   [smpp_enquire_link_timer](mobility.conf.smpp_enquire_link_timer.php "smpp_enquire_link_timer")

*   [smpp_inactivity_timer](mobility.conf.smpp_inactivity_timer.php "smpp_inactivity_timer")

The response timer sets the amount of time allowed following an SMPP request before considering the requested operation lost. The response timer is set for each SMPP request sent by Mobile Momentum. Following expiration of the response timer, other operations continue, unless it is an enquire_link request. In this case, the connection is closed.

The enquire link timer specifies the amount of idle time allowed to elapse before sending an enquire_link request. Any pending enquire link timer is reset whenever another SMPP request of reply is sent or received. The enquire_link mechanism is intended to identify connection failures in the absence of other SMPP activity.

The inactivity timer is the amount of idle time allowed on a connection before shutting down the connection. Any SMPP activity aside from enquire_link requests and responses resets the inactivity timer.

The default timer values should work in most situations. However, if changing timer values, it is advisable that the inactivity timer be greater than the enquire link timer and that the enquire link timer be greater than the response timer. Some request-specific timers are available as well, see the configuration parameter reference.

| [Prev](mobility.best.practices.conversion.php)  | [Up](mobility.best.practices.php) |  [Next](mobility.best.practices.delivery.receipts.php) |
| 5.2. Message Conversion Parameters  | [Table of Contents](index.php) |  5.4. Delivery Receipts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)