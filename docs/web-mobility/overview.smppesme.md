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

| 1.2. The Short Message Peer-to-Peer Protocol (SMPP) ESME Module |
| [Prev](overview.php)  | Chapter 1. Overview of Mobile Momentum |  [Next](overview-SmppEmailSMS.php) |

## 1.2. The Short Message Peer-to-Peer Protocol (SMPP) ESME Module

The linchpin of Mobile Momentum's capabilities is the Short Message Peer to Peer Protocol (SMPP). SMPP runs over a TCP connection and provides the communication link for sending and receiving SMS text messages between Mobile Momentum and a device in the carrier or aggregator network known as a Short Message Service Center (SMSC). In SMPP network architecture, Mobile Momentum is an External Short Messaging Entity (ESME) and SMPP is the communication protocol between an ESME and an SMSC. Mobile Momentum provides these facilities in the SMPP/ESME Module. It is an implementation of the client side of SMPP version 3.4.

### Note

The acronyms used in this document are defined in [Appendix A, *Acronyms*](acronyms.php "Appendix A. Acronyms").

Mobile Momentum begins an SMPP session with an SMSC by establishing a TCP connection with the SMSC and attempts to enter the SMPP bound state by sending an SMPP bind request. The bind request indicates the direction of message traffic to be carried on the SMPP connection (transmitter, receiver, or transceiver relative to the ESME). An SMPP session also sends several other configurable values, known as bind credentials, to the SMSC. Bind credentials include the ESME system ID and password for the SMSC. Some SMSC implementations may also require specification of a system type indicating the type of service to be used on the connection. The SMSC indicates acceptance or rejection of the bind credentials in the SMPP `bind_*_resp` message. Where ‘`*`’ is replaced by `receiver, transmitter` or `transciever` depending upon circumstances. (This and other SMPP PDU terms are defined in [Appendix C, *SMPP PDU Operation Definitions*](smpp_pdu.definitions.php "Appendix C. SMPP PDU Operation Definitions") ).

Once in the SMPP bound state, SMS messages may be exchanged over the SMPP connection. An SMPP `submit_sm` request carries an SMS message from the ESME to SMSC and an SMPP `deliver_sm` request carries an SMS message from the SMSC to the ESME. `deliver_sm`'s carry delivery receipts in addition to SMS messages sent from mobile handsets. Delivery receipts are notifications from carrier network equipment indicating a final or interim message status.

SMS message submissions from ESME to SMSC are referred to as Mobile Terminated (MT) messages. SMS message deliveries from SMSC to ESME are referred to as Mobile Originated (MO) messages. Messages with lengths greater than the 140/160 character limit may be transported as a series of `submit_sm` or `deliver_sm` requests. This is the Segmentation and Reassembly (SAR) mechanism defined in the SMPP 3.4 specification.

Additionally, ESMEs and SMSCs periodically transmit and reply to SMPP `enquire_link` requests. The purpose of an `enquire_link` is to detect whether the SMPP session is still active. Three timers are specified by SMPP: the enquire_link timer, the inactivity timer, and the response timer. The enquire_link timer defines the amount of time to wait between SMPP operations before sending an SMPP enquire_link request. The inactivity timer specifies the amount of time allowed after the latest SMS message submission or delivery before terminating the SMPP session. The response timer specifies the amount of time to wait following an SMPP request before assuming that the request has failed. SMPP timers are configurable in Mobile Momentum.

When an SMSC or ESME decides to terminate an SMPP session, it first sends an SMPP unbind request. Following receipt of the corresponding `unbind_resp`, it closes the TCP connection.

| [Prev](overview.php)  | [Up](overview.php) |  [Next](overview-SmppEmailSMS.php) |
| Chapter 1. Overview of Mobile Momentum  | [Table of Contents](index.php) |  1.3. Message Conversions, Transformations, and Mappings |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)