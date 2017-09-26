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

| Glossary |
| [Prev](mobility.message.retry.retention.php)  |   |  [Next](acronyms.php) |

## Glossary

Definitions for many of these terms are taken from the [3rd Generation Partnership Project (3GPP)](http://www.3gpp.org/).

<dl>

<dt>Aggregator</dt>

<dd class="glossdef"><a name="gloss-aggregator"></a>

A mobile aggregator is a company that acts as an intermediary between mobile operators and end users. Aggregators may perform services such as reconciling payments for SMS messages.

</dd>

<dt><a name="gloss-bom"></a>Byte Order Mark (BOM)</dt>

<dd class="glossdef">

In UTF, these are the two bytes at the beginning of the text indicating whether the representation is big or little endian.

</dd>

<dt><a name="gloss-cdr"></a>Call Detail Record Logging (CDR Logging)</dt>

<dd class="glossdef">

The logging of SMPP transaction activity for purposes of auditing, billing, customer support etc. For the logging capabilities of Mobile Momentum see [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros"). CDR also stands for Charging Data Record.

</dd>

<dt><a name="gloss-downlink"></a>Downlink</dt>

<dd class="glossdef">

In the context of cellular networks, a downlink is the radio transmission path from a Base Transceiver Station (Cell Site) to a cell phone.

</dd>

<dt><a name="gloss-e164"></a>E.164 (E164)</dt>

<dd class="glossdef">

E.164 is the Telecommunication Standardization Sector recommendation that defines the international public telecommunication numbering plan used in telephone networks and data networks. It defines the format of telephone numbers. The term "ISDN Telephony" is synonymous with E164\. See also [Numbering Plan Indicator](glossary.php#gloss-npi "Numbering Plan Indicator").

</dd>

<dt>Email Interworking</dt>

<dd class="glossdef">

Email that works with a 3G system. See also [Third Generation](glossary.php#gloss-3g "Third Generation").

</dd>

<dt><a name="gloss-esme"></a>External Short Messaging Entity (ESME)</dt>

<dd class="glossdef">

External Short Messaging Entity is a component of an SMS network capable of submitting and accepting delivery of SMS messages. When the mobility module is loaded, Momentum functions as an ESME within the SMS network architecture.

</dd>

<dt><a name="gloss-gsm"></a>Global System for Mobile communications (GSM)</dt>

<dd class="glossdef">

The most popular standard for mobile phones. The popularity of this standard allows for roaming and switching carriers without having to switch phones.

</dd>

<dt><a name="gloss-hsdpa"></a>High-Speed Downlink Packet Access (HSDPA)</dt>

<dd class="glossdef">

An enhanced 3G mobile communications protocol that improves data transfer speeds for networks based on Universal Mobile Telecommunications System (UMTS). This protocol can support speeds up to 42 Mbits per second downlink. See also [Third Generation](glossary.php#gloss-3g "Third Generation") and [Downlink](glossary.php#gloss-downlink "Downlink").

</dd>

<dt><a name="gloss-isdn"></a>Integrated Services Digital Network (ISDN)</dt>

<dd class="glossdef">

Integrated Services Digital Network (ISDN) is a set of communication standards for simultaneous digital transmission of voice, video, data, and other network services over the traditional circuits of the public switched telephone network.

</dd>

<dt><a name="gloss-long-code"></a>Long Code</dt>

<dd class="glossdef">

A normal length phone number. See also [Short Code](glossary.php#gloss-short-code "Short Code")

</dd>

<dt><a name="gloss-mc"></a>Message Center (MC)</dt>

<dd class="glossdef">

See [Short Message Service Center](glossary.php#gloss-smsc "Short Message Service Center").

</dd>

<dt><a name="gloss-mm7"></a>MM7 (MM7)</dt>

<dd class="glossdef">

A [Multimedia Messaging Services](glossary.php#gloss-mms "Multimedia Messaging Services") interface between a [Value Added Service Provider](glossary.php#gloss-vasp "Value Added Service Provider") and an [Multimedia Messaging Service Center](glossary.php#gloss-mmsc "Multimedia Messaging Service Center").

</dd>

<dt><a name="gloss-mo"></a>Mobile Originated (MO)</dt>

<dd class="glossdef">

See [Mobile Originated Short Message Service](glossary.php#gloss-mosms "Mobile Originated Short Message Service").

</dd>

<dt><a name="gloss-mosms"></a>Mobile Originated Short Message Service (MO-SMS)</dt>

<dd class="glossdef">

The ability to send short text messages from a mobile phone. Usually this is combined with the ability to receive such messages. See also [Mobile Terminated Short Message Service](glossary.php#gloss-mtsms "Mobile Terminated Short Message Service").

</dd>

<dt><a name="gloss-mt"></a>Mobile Terminated (MT)</dt>

<dd class="glossdef">

See [Mobile Terminated Short Message Service](glossary.php#gloss-mtsms "Mobile Terminated Short Message Service").

</dd>

<dt><a name="gloss-mtsms"></a>Mobile Terminated Short Message Service (MT-SMS)</dt>

<dd class="glossdef">

The ability of receiving short text messages. Usually this is combined with the ability to send such messages. See also [Mobile Originated Short Message Service](glossary.php#gloss-mosms "Mobile Originated Short Message Service").

</dd>

<dt><a name="gloss-mcmt"></a>Multi-Channel Message Type (MCMT)</dt>

<dd class="glossdef">

A Multi-Channel Message Type (MCMT) message is a multi-part MIME message. A MCMT message has a required email attachment with the Content-Type: `message/rfc2822` and optionally other parts with content suitable for delivery over non-email channels such as SMPP and MM7.

See [Section 7.5, “The `MCMT_Reception` option”](mm7.mcmt_reception.php "7.5. The MCMT_Reception option") for a description of configuring Momentum for MCMT reception.

</dd>

<dt><a name="gloss-mmsc"></a>Multimedia Messaging Service Center (MMSC)</dt>

<dd class="glossdef">

Multimedia Messaging Service Center, a defined role (typically a carrier resident device for handling [Multimedia Messaging Services](glossary.php#gloss-mms "Multimedia Messaging Services") traffic) in the various 3GPP MMS specifications.

</dd>

<dt><a name="gloss-mms"></a>Multimedia Messaging Services (MMS)</dt>

<dd class="glossdef">

Multimedia Messaging Services, as defined in the various 3GPP specifications.

</dd>

<dt><a name="gloss-npi"></a>Numbering Plan Indicator (NPI)</dt>

<dd class="glossdef">

An NPI is a number defined in the International Telecommunication Union (ITU) standard indicating the numbering plan of the attached telephone number. The indicators are as follows:

*   `0` – unknown

*   `1` – ISDN Telephony, see [Integrated Services Digital Network](glossary.php#gloss-isdn "Integrated Services Digital Network") and [E.164](glossary.php#gloss-e164 "E.164")

*   `2` – generic

*   `3` – data

*   `4` – telex

*   `5` – marine mobile

*   `6` – land mobile

*   `7` – ISDN mobile

For command status codes that indicate an invalid NPI see [Appendix B, *Command Status Codes*](status_codes.php "Appendix B. Command Status Codes") .

</dd>

<dt><a name="gloss-pdu"></a>Protocol Data Unit (PDU)</dt>

<dd class="glossdef">

Information that is delivered as a unit among network peers and that may contain data, address or control information.

</dd>

<dt><a name="gloss-qos"></a>Quality of Service (QoS)</dt>

<dd class="glossdef">

In the context of mobile phones, accessibility and reliability are important factors in determining the quality of service.

</dd>

<dt><a name="gloss-short-code"></a>Short Code</dt>

<dd class="glossdef">

Short Codes are the special telephone contact numbers which are used for SMS messages. Short codes are also known as Short Numbers. These codes are designed so that they are easy to remember and are widely used for services such as television voting. See also [Long Code](glossary.php#gloss-long-code "Long Code").

</dd>

<dt><a name="gloss-smpp"></a>Short Message Peer-to-Peer Protocol (SMPP)</dt>

<dd class="glossdef">

Short Message Peer-to-Peer Protocol is a protocol enabling the exchange of SMS messages between ESME and SMSC/MC. It is not really a peer-to-peer protocol as the communicating endpoints have distinct functions (SMSC as server, ESME as client) and asymmetric messaging operation depending upon the communicating endpoint type.

</dd>

<dt><a name="gloss-sms"></a>Short Message Service (SMS)</dt>

<dd class="glossdef">

Short Message Service is a communication service in the Global System for Mobile communications (GSM) mobile communication system, using standardized communications protocols for the interchange of short text messages. See also [Global System for Mobile communications](glossary.php#gloss-gsm "Global System for Mobile communications").

</dd>

<dt><a name="gloss-smsc"></a>Short Message Service Center (SMSC)</dt>

<dd class="glossdef">

Short Message Service Center is a server typically hosted by SMS aggregators and carriers. Later versions of SMPP refer to this component as MC (Message Center).

</dd>

<dt><a name="gloss-3g"></a>Third Generation (3G)</dt>

<dd class="glossdef">

3G stands for third generation mobile phone standards, standards that supersede second generation (2G) wireless telephone technology. 3G networks incorporate high speed Internet access and video telephony.

</dd>

<dt><a name="gloss-3gpp"></a>Third Generation Partnership Project (3GPP)</dt>

<dd class="glossdef">

3GPP produces Technical Specifications and Technical Reports for a 3G Mobile System based on Global System for Mobile communication (GSM) core networks. This includes the maintenance and development of the GSM Technical Specifications and Technical Reports.

This document references elements of the MM7 schema defined on the 3GPPP website. For more information see [http://www.3gpp.org/ftp/Specs/archive/23_series/23.140/schema/REL-6-MM7-1-4](http://www.3gpp.org/ftp/Specs/archive/23_series/23.140/schema/REL-6-MM7-1-4) .

</dd>

<dt><a name="gloss-ton"></a>Type of Number (TON)</dt>

<dd class="glossdef">

The following TON values are used as SME address parameters:

*   `0` – Unknown

*   `1` – International

*   `2` – National

*   `3` – Network Specific

*   `4` – Subscriber Number

*   `5` – Alphanumeric

*   6 – Abbreviated

Mobile Momentum supports `Unknown, National` and `International`. For command status codes that indicate an invalid TON see [Appendix B, *Command Status Codes*](status_codes.php "Appendix B. Command Status Codes") .

</dd>

<dt><a name="gloss-udh"></a>User Data Header (UDH)</dt>

<dd class="glossdef">

UDH is a way of segmenting data. This method of segmenting places a short header in the text message data whereas segmentation and reassembly (SAR) uses optional SMPP TLVs (tag, length, value) fields in the PDU.

</dd>

<dt><a name="gloss-vasp"></a>Value Added Service Provider (VASP)</dt>

<dd class="glossdef">

Value Added Service Provider, a defined role (typically a carrier-external entity) in the various referenced 3GPP MMS specifications.

</dd>

</dl>

| [Prev](mobility.message.retry.retention.php)  |   |  [Next](acronyms.php) |
| 11.2. Message Retention  | [Table of Contents](index.php) |  Appendix A. Acronyms |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)