| 23.2. DKIM Validation |
| [Prev](using_dkim.php)  | Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures |  [Next](multi_event_loops.php) |

## 23.2. DKIM Validation

When DKIM is enabled as decribed in [Section 23.1, “DKIM Signing”](using_dkim.php#using_dkim.signing "23.1. DKIM Signing"), DKIM signature verification is performed on all inbound messages received via SMTP. Unlike DKIM signing, verification of DKIM messages is driven only through Lua policy. Links to the appropriate Lua functions are listed at [Section 71.50.2, “Lua Functions”](modules.opendkim.php#modules.opendkim.lua.functions "71.50.2. Lua Functions").

When a message is received, an attempt is made to locate a DKIM-Signature header. If found, the header is parsed for format and content. If the header is valid, the signature value is extracted from the header and the appropriate DNS operations are performed to find the public key for the signer. The message is then canonicalized as indicated by the signature header. Canonicalization includes all headers listed in the signature header, the body of the message, and the signature header itself. The canonicalized message is digested for verification as indicated by the signature header using the retrieved public key and the signature value. The results "dkim=pass" or "dkim=*`reason for failure`*             " are included in an Authentication-Results header prepended to the message. If the message does not contain a DKIM-Signature header, either no Authentication-Results header will be prepended to the message or DKIM results will not appear in an Authentication-Results header prepended because of the actions of a different validation action.

| [Prev](using_dkim.php)  | [Up](using_dkim.php) |  [Next](multi_event_loops.php) |
| Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures  | [Table of Contents](index.php) |  Chapter 24. Configuring Multiple Event Loops |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)