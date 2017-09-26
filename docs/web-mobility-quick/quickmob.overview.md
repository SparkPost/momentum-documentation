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

| Chapter 1. Overview |
| [Prev](index.php)  |   |  [Next](quickmob.installing.php) |

## Chapter 1. Overview

Mobile Momentum is a set of additional features for Momentum that enables interoperability of Internet email, Short Message Service(SMS) text messaging, and Multimedia Messaging Service (MMS) rich media messaging.

From a user's point of view Mobile Momentum is implemented using the same module, listener, domain, and binding infrastructure used by the Momentum core. The difference is that these constructs will be configured to use mobile protocols (as opposed to SMTP) to transport messages to and from devices in mobile networks. The Short Message Peer to Peer (SMPP) Protocol will be used for the transport of SMS text messages between Mobile Momentum and the Short Message Service Center (SMSC) within the mobile network. The Mobile Message Service MM7 (MMS MM7) protocol will be used for the transport of multimedia messages between Mobile Momentum and the mobile network's Multimedia Messaging Service Center (MMSC).

If you wish you can configure the SMPP capabilities of Mobile Momentum to convert email to SMS and the reverse by configuring a Momentum domain to be an SMPP domain. An SMPP domain is characterized by the presence of the `SMPP_SMSC_Address` configuration parameter within the domain stanza.

If you wish to configure the *MM7* capabilities of Mobile Momentum, you will need to specify MM7 domains for submission of messages to the MMSC. In order to receive MMS messages, you will need to configure the MM7 server module and an HTTP listener.

This guide shows how to define the configuration parameters for SMPP domains, MM7 domains, the MM7 server module, and the HTTP listener. The chapters are as follows:

*   Installation – Adding the Mobile capability to Momentum

*   Configuration of loggers – Skip this section if you don't wish to create a separate log of SMPP or MM7 messages *Note:* The mobility modules don't log to `mainlog.ec`. A message received on smpp and transmitted on smtp will have the receptions logged in smpp log and the delivery in the main log though.

*   Configuring options in the global, domain or binding scopes. This also includes other required modules such as the HTTP_Listener.

*   "Bare Bones" configurations – different basic configurations. This provides an easy overview of the different configurations.

| [Prev](index.php)  |   |  [Next](quickmob.installing.php) |
| Mobile Momentum Quick Start  | [Table of Contents](index.php) |  Chapter 2. Installing Mobile Momentum |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)