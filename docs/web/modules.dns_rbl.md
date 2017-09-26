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

| 14.23. dns_rbl – DNS Blocklists |
| [Prev](modules.dkim.php)  | Chapter 14. Modules Reference |  [Next](modules.domainkeys.php) |

## 14.23. dns_rbl – DNS Blocklists

<a class="indexterm" name="idp11621408"></a>
### Note

The dns_rbl module has been deprecated. The basic functionality of DNS block lists can be accomplished more flexibly via Sieve. More advanced block list support is available through the URL extraction module "url_ripper."

To look up the connecting IP address in a DNSBL located at sbl.spamhaus.org in Sieve and tarpit the connection for 45 seconds:

```
$a = ec_dns_lookup "%{ir}.sbl.spamhaus.org" "a";
if ec_test :is "${a}" "127.0.0.2" {
  ec_tarpit 45 "sbl hit";
}
```

Spamhaus, like many other lists, offers TXT records to indicate why an IP is on their list. The existence of a TXT record indicates presence on the list. To reject a message with the TXT record:

```
$a = ec_dns_lookup "%{ir}.sbl.spamhaus.org" "txt";
if ec_test :regex "${a}" "." {
  ec_action 550 "${a}";
}
```

The above examples use the `%{ir}` macro expansion made available by the spf_macros module.

| [Prev](modules.dkim.php)  | [Up](modules.php) |  [Next](modules.domainkeys.php) |
| 14.22. dkim – DomainKeys Identified Mail Signatures  | [Table of Contents](index.php) |  14.24. domainkeys – Yahoo! DomainKeys |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)