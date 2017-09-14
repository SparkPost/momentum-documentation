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

| 19.4. SMTP Extensions |
| [Prev](esmtp_listener.reconfig_message.php)  | Chapter 19. Configuring Inbound Mail Service Using SMTP |  [Next](inbound_smtp.php) |

## 19.4. SMTP Extensions

### 19.4.1. XCLIENT Extension for SMTP

Implements the receiving side of an XCLIENT capable interaction. XCLIENT allows trusted senders to alter the connecting IP address and other connection-level identifiers to appear to be someone they are not. This is used for internally trusted re-mailing. More information on XCLIENT can be found at [http://www.postfix.org/XCLIENT_README.html](http://www.postfix.org/XCLIENT_README.html).

Advertise support for the Enhanced-Status-Codes extension as defined in RFC 2034\. `ENHANCEDSTATUSCODE` is the EHLO keyword value associated with this extension. This capability makes reporting of success and errors more precise.

### 19.4.2. XDUMPCONTEXT Extension for SMTP

Enables the dumping of connection and message contexts during an SMTP conversation via an XDUMPCONTEXT command. This is mainly useful for debugging.

```
% telnet 10.80.116.84 25
Trying 10.80.116.84...
Connected to ecbuild-14.int.omniti.net (10.80.116.84).
Escape character is '^]'.
220 ecbuild-14 ESMTP ecelerity HEAD r(9610M) Wed, 08 Mar 2006 16:21:51 -0500
ehlo there
250-ecbuild-14 says EHLO to 10.80.116.73
250-PIPELINING
250-XDUMPCONTEXT
250-8BITMIME
250-AUTH=LOGIN
250-AUTH LOGIN
250 STARTTLS
XDUMPCONTEXT
250-[connection] ehlo_domain there
250-[connection] ehlo_string ehlo there
250 XDUMPCONTEXT complete
```

### 19.4.3. XREMOTEIP Extension for SMTP

This extension enables a connecting client to change the perceived IP address from which it connected. This is useful when the Momentum instance is deployed behind a trusted SMTP gateway. If enabled, then the remote client may, at anytime, present **XREMOTEIP *`IP_address`***                and Momentum will alter all identifying information to appear as if the client originally connected from the provided IP address.

### 19.4.4. XSETCONTEXT Extension for SMTP

XSETCONTEXT lets a client set name/value pairs in the connection level validation context. The extension takes a series of RFC1891 encoded parameters; each name=value pair sets the connection level validation context key "name" to value "value", overriding whatever other value was previously set (if any).

Since the extension can set arbitrary items in the validation context, it should be considered a trusted extension and should not be enabled for public Internet facing listeners, because there is a risk that an attacker can manipulate their way through a policy script. This also holds true for XCLIENT.

Set a name/value pair in the following way:

`XSETCONTEXT option1=value1 option2=value2`
### 19.4.5. ALWAYS-ALLOW Property

If present, the connection will succeed and will automatically be authenticated as the `anonymous` user.

| [Prev](esmtp_listener.reconfig_message.php)  | [Up](esmtp_listener.php) |  [Next](inbound_smtp.php) |
| 19.3. `Reconfig_Message` Option  | [Table of Contents](index.php) |  19.5. ESMTP_Listener Authentication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)