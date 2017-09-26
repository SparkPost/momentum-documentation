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