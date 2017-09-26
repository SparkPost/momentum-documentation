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

| 7.4. Multi Protocol Domain Naming |
| [Prev](mobility.mm7.mms_bounce_logger.php)  | Chapter 7. Mobile Momentum MM7 |  [Next](mm7.mcmt_reception.php) |

## 7.4. Multi Protocol Domain Naming

In Momentum there is a strong association between a destination domain and its routing information and the domain system is SMTP-centric. This means that drivers for other protocols need to have a mechanism for naming domains such that they can use them to key into protocol-specific routing information.

### 7.4.1. Domain Naming Convention

SMTP domains are named in the following way:

```
Domain "example.com" {
  #domain-specific settings
}
```

Multi-protocol domain naming reserves all domain names that begin with the pound sign , ‘`#`’, (also know as an octothorpe or hash). Domain names are interpreted as follows:

*   #protocol#displayname

*   #protocol#displayname#extra

For example:

*   #smpp#air2web

*   #smpp#txt#air2web

*   #smpp#txt#otheraggregator

*   #cluster#binding-a

The pound sign distinguishes valid SMTP domains from domains that use other protocols; SMTP domains must use valid DNS compatible names, and the pound sign is not legal in DNS names.

The protocol drivers can use the protocol prefix to determine whether the domain is significant to them so that they can take appropriate action when the system needs to resolve the destination.

The displayname portion is the part that logically makes sense to the user when interacting with the system, and will usually serve as the key for configuration for the appropriate protocol driver.

The optional "extra" portion can be used to distinguish or otherwise encode additional information into the domain. It is anticipated that this field will not typically be used.

### 7.4.2. Display Considerations

When Momentum displays domain names, it is preferable to simplify or otherwise unclutter the displayed data by hiding protocol names. The default disposition in the system is to render the domain in this simplified form.

Given the following domain strings, the system will display them as indicated below:

<a name="idp1129488"></a>

**Table 7.1. Mapping raw domains**

| Raw Domain | Display |
| --- | --- |
| somewhere.com | somewhere.com |
| #smpp#air2web | air2web |
| #smpp#txt#air2web | txt (air2web) |
| #cluster#binding-a | binding-a |

Both the system console and the web UI respect these mappings.

The configuration system does not include any special logic for handling multi-protocol domain names. If configuration options need to be set for domains that have a multi-protocol name, they must use the raw domain string as indicated below:

```
Domain "#smpp#txt" {
  Max_Resident_Active_Queue = 20
}
```

### 7.4.3. Loggings and Stats

The raw domain strings are output to log files and statp output, and as such, are also fed into the statistics database(s). **Output is rendered in raw form.** 

| [Prev](mobility.mm7.mms_bounce_logger.php)  | [Up](mobility.mm7.php) |  [Next](mm7.mcmt_reception.php) |
| 7.3. The mms_bounce_logger Module  | [Table of Contents](index.php) |  7.5. The `MCMT_Reception` option |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)