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

| Chapter 5. Bare Bones Configurations |
| [Prev](quickmob.mm7.specific.php)  |   |   |

## Chapter 5. Bare Bones Configurations

This section describes the absolute minimum configurations for using Mobile Momentum. *However, your aggregator or provider may require additional parameters.* 

In bare bones configurations loggers are not required for either SMPP or MM7.

## SMPP

A minimal SMPP client can be configured as follows:

<a name="quickmob.bare.bones.smpp.client"></a>

**Example 5.1. smpp client**

```
smpp {debug_level="debug"}
domain "example.com" {
  SMPP_SMSC_Server  = "10.0.0.1"
  SMPP_SMSC_Port = "2775"
  SMPP_SMSC_System_ID = "GSMSGW"
  SMPP_SMSC_Password = "secret"
  SMPP_ESME_Address = "12345"
}
```

## MM7

A minimal MM7 client can be configured as follows:

<a name="quickmob.bare.bones.mm7.client"></a>

**Example 5.2. mm7 client**

```
mm7 {debug_level = "debug"}
domain "mms.example.com" {
  MM7_MMSC_Server = "10.0.0.1"
  MM7_MMSC_Port = "8192"
  MM7_HTTP_Auth_User = "admin"
  MM7_HTTP_Auth_Password = "admin"
}
```

A minimal MM7 server can be configured as follows:

<a name="quickmob.bare.bones.mm7.server"></a>

**Example 5.3. mm7 server**

```
mm7_serv {
  MM7_VASP_URI_Paths = ("/mm7/" "/test1/" "/test2/")
  debug_level = "debug"
}

HTTP_Listener {
  Listen ":8089" { }
  Listen "[::1]:8089" {}
}

httpsrv {
  debug_level = "debug"
}
```

In this case the listener is listening on port 8089 and the server responds to URIs `http://host/mm7/, http://host/test1/, http://host/test2/`. These are local SOAP endpoints.

URI paths are registered to the HTTP_Listener by the mm7 server. When the HTTP_Listener recognizes a registered URI, it wakes the mm7 server with the incoming mm7 XML SOAP message.

| [Prev](quickmob.mm7.specific.php)  |   |   |
| 4.2. MM7-specific Configuration  | [Table of Contents](index.php) |   |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)