| 22.2. DomainKeys Validation |
| [Prev](using_domainkeys.php)  | Chapter 22. Using Yahoo! DomainKeys |  [Next](using_dkim.php) |

## 22.2. DomainKeys Validation

To perform validation on all inbound messages received via SMTP, load the dk_validate module in your configuration. For details, see [Section 71.28, “domainkeys – Yahoo! DomainKeys”](modules.domainkeys.php "71.28. domainkeys – Yahoo! DomainKeys").

When a message is received, it is inspected to determine the responsible sending party, which is either the "Sender" or the "From" (in that order) from the message headers. If there exists a header called "DomainKey-Signature", the signature is parsed for validity. If valid, the appropriate DNS operations are performed to find the policy and public key for the signer, the message is canonicalized as described in the signature, and the signature is validated.

Subsequent to processing the email, any preexisting "DomainKey-Status" headers are removed from the email and the dk_validate module will prepend a "DomainKey-Status" header to the email with the results of the signature verification process. Valid results are "good," "bad," and "error".

| [Prev](using_domainkeys.php)  | [Up](using_domainkeys.php) |  [Next](using_dkim.php) |
| Chapter 22. Using Yahoo! DomainKeys  | [Table of Contents](index.php) |  Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)