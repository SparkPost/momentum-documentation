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

| 23.2. DKIM Validation |
| [Prev](using_dkim.php)  | Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures |  [Next](multi_event_loops.php) |

## 23.2. DKIM Validation

When DKIM is enabled as decribed in [Section 23.1, “DKIM Signing”](using_dkim.php#using_dkim.signing "23.1. DKIM Signing"), DKIM signature verification is performed on all inbound messages received via SMTP. Unlike DKIM signing, verification of DKIM messages is driven only through Lua policy. Links to the appropriate Lua functions are listed at [Section 71.50.2, “Lua Functions”](modules.opendkim.php#modules.opendkim.lua.functions "71.50.2. Lua Functions").

When a message is received, an attempt is made to locate a DKIM-Signature header. If found, the header is parsed for format and content. If the header is valid, the signature value is extracted from the header and the appropriate DNS operations are performed to find the public key for the signer. The message is then canonicalized as indicated by the signature header. Canonicalization includes all headers listed in the signature header, the body of the message, and the signature header itself. The canonicalized message is digested for verification as indicated by the signature header using the retrieved public key and the signature value. The results "dkim=pass" or "dkim=*`reason for failure`*             " are included in an Authentication-Results header prepended to the message. If the message does not contain a DKIM-Signature header, either no Authentication-Results header will be prepended to the message or DKIM results will not appear in an Authentication-Results header prepended because of the actions of a different validation action.

| [Prev](using_dkim.php)  | [Up](using_dkim.php) |  [Next](multi_event_loops.php) |
| Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures  | [Table of Contents](index.php) |  Chapter 24. Configuring Multiple Event Loops |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)