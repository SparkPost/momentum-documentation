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

| 4.2. MM7-specific Configuration |
| [Prev](quickmob.config.options.php)  | Chapter 4. Configuration Options in the Global, Domain and Binding Scopes |  [Next](quickmob.bare.bones.php) |

## 4.2. MM7-specific Configuration

### 4.2.1. MM7 Options in the Global, Domain and Binding Scopes

As with SMPP there are numerous options valid in the global, domain and binding scopes. These options only need to be configured when running an MM7 client. For a list of all the available options see "[Mobile Momentum MM7 Options](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.options.php)".

You can enable the MM7 client by supplying the MM7_MMSC_Server configuration parameter within a domain stanza. The MM7_MMSC_Server parameter value is the IP address or host name of the Multimedia Message Service Center in the mobile provider network. Messages sent to a domain enabled for MM7 will be converted to MM7 XML SOAP format and transmitted to the mobile network's MMSC. Your mobile network provider will supply you with other configuration information as needed for establishing MM7 sessions, such as:

*   port number (MM7_MMSC_Port)

*   authentication credentials (MM7_HTTP_Auth_User, MM7_HTTP_Auth_Password)

In the following example domain stanza, messages will be sent to the MMSC at IP 10.0.0.1, port 8086 and authenticated as "MyID" and password "mysecret". In this case a message with a recipient of the form 15551234567@mms.domain.example.com is sent to the handset with phone number 1 555 123 4567.

```
domain "mms.domain.example.com" {
  MM7_MMSC_Server = "10.0.0.1"
  MM7_MMSC_Port = "8086"
  MM7_HTTP_Auth_User = "MyID"
  MM7_HTTP_Auth_Password = "mysecret"
}
```

Most of the remaining MM7 domain and binding options supply values for the message's MM7 XML SOAP envelope. These include:

*   VASPID (MM7_VASPID)

*   VASID (MM7_VASID)

*   Sender Address (MM7_Sender_Address)

*   Service Code (MM7_Service_Code)

*   MM7 XML Schema version (MM7_Version)

*   MM7 XML Namespace formatting (MM7_Namespace, MM7_XML_Schema)

*   Requesting MM7 Delivery and Read Reply Reports (MM7_Delivery_Report, MM7_Read_Reply)

*   Reply charging and reply deadline parameters (MM7_Reply_Charging, MM7_Reply_Deadline)

Set the values of these parameters within MM7 domain stanzas according to your application requirements, policy enforcement, and/or business logic.

| [Prev](quickmob.config.options.php)  | [Up](quickmob.config.options.php) |  [Next](quickmob.bare.bones.php) |
| Chapter 4. Configuration Options in the Global, Domain and Binding Scopes  | [Table of Contents](index.php) |  Chapter 5. Bare Bones Configurations |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)